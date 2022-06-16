application/x-httpd-php Users.php ( C++ source, ASCII text, with CRLF line terminators )
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class Users extends CI_Model
{
	private $table_name			= 'usuario';			// user accounts
	private $profile_table_name	= 'user_profiles';	// user profiles

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->table_name			= $ci->config->item('db_table_prefix', 'tank_auth').$this->table_name;
		$this->profile_table_name	= $ci->config->item('db_table_prefix', 'tank_auth').$this->profile_table_name;
	}

	/**
	 * Get user record by Usu_IdUsuario
	 *
	 * @param	int
	 * @param	bool
	 * @return	object
	 */
	function get_user_by_id($user_id, $Usu_Activated)
	{
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->where('Usu_Activated', $Usu_Activated ? 1 : 0);

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by login (username or email)
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_login($login)
	{
		$this->db->where('LOWER(Usu_Nombre)=', strtolower($login));
		$this->db->or_where('LOWER(Usu_Correo)=', strtolower($login));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by username
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_username($username)
	{
		$this->db->where('LOWER(Usu_Nombre)=', strtolower($username));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by email
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_email($email)
	{
		$this->db->where('LOWER(Usu_Correo)=', strtolower($email));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Check if username available for registering
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_username_available($username)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(Usu_Nombre)=', strtolower($username));

		$query = $this->db->get($this->table_name);
		return $query->num_rows() == 0;
	}

	/**
	 * Check if email available for registering
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_email_available($email)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(Usu_Correo)=', strtolower($email));
		$this->db->or_where('LOWER(Usu_NewEmail)=', strtolower($email));

		$query = $this->db->get($this->table_name);
		return $query->num_rows() == 0;
	}

	function get_persona_x_id($Per_IdPersona)
    {
        $this->db->select('Per_Nombre, Per_Dni');
        $this->db->where('Per_IdPersona', $Per_IdPersona);
        $this->db->limit(1);

        $query = $this->db->get('persona');
        
        return $query->row();
    }

	/**
	 * Create new user record
	 *
	 * @param	array
	 * @param	bool
	 * @return	array
	 */
	function create_user($data, $Usu_Activated = TRUE)
	{
		$data['created'] = date('Y-m-d H:i:s');
		$data['Usu_Activated'] = $Usu_Activated ? 1 : 0;

		if ($this->db->insert($this->table_name, $data)) {
			$user_id = $this->db->insert_id();
			if ($Usu_Activated)	$this->create_profile($user_id);
			return array('user_id' => $user_id);
		}
		return NULL;
	}

	function crear_usuario($Per_IdPersona, $Tid_IdTipoDocumento, $Per_Dni, $Per_Nombre, $Per_Celular, $Per_Correo, $Usu_Clave, $Usu_NewEmailKey, $Rol_IdRol, $Tie_IdTienda, $Usu_LastIp, $Usu_Activated = TRUE)
    {
    	$Usu_Activated = $Usu_Activated ? 1 : 0;

        $this->db->trans_start();

        if(is_null($Per_IdPersona))
        {
            //registro tabla persona
            $this->db->set('Per_Dni', $Per_Dni);
            $this->db->set('Tid_IdTipoDocumento', $Tid_IdTipoDocumento);
            $this->db->set('Per_Nombre', $Per_Nombre);
            $this->db->set('Per_Celular', $Per_Celular);
            $this->db->set('Per_Correo', $Per_Correo);

            $this->db->insert('persona');

            $Per_IdPersona = $this->db->insert_id();
        }
        else
        {
            $Per_IdPersona = $Per_IdPersona->Per_IdPersona;
        }

        //registro tabla usuario
        $this->db->set('Per_IdPersona', $Per_IdPersona);
        $this->db->set('Usu_Correo', $Per_Correo);
        $this->db->set('Usu_Clave', $Usu_Clave);
        $this->db->set('Rol_IdRol', $Rol_IdRol);
        $this->db->set('Tie_IdTienda', $Tie_IdTienda);
        
        if ($this->db->insert($this->table_name))
        {
			$Usu_IdUsuario = $this->db->insert_id();

			if ($Usu_Activated)	$this->create_profile($Usu_IdUsuario);
		}

		 $this->bitacoraModel->registrar_bitacora('tienda', 'crear_usuario', 'Usu_IdUsuario', $Usu_IdUsuario, '', '', $Usu_IdUsuario);

		$this->db->trans_complete();

        if($this->db->trans_status())
        {
            return $Usu_IdUsuario;
        }

        return NULL;
    }

	function crear_comprador($Per_IdPersona, $Tid_IdTipoDocumento, $Per_Dni, $Per_Nombre, $Per_Correo, $Per_Telefono, $Usu_Clave, $Usu_NewEmailKey, $Usu_LastIp, $Usu_Activated = TRUE, $publicidad, $Usu_Flag_Publicidad)
    {
    	$Usu_Activated = $Usu_Activated ? 1 : 0;

        $this->db->trans_start();

        if(is_null($Per_IdPersona))
        {
            //registro tabla persona
            $this->db->set('Per_Dni', $Per_Dni);
            $this->db->set('Tid_IdTipoDocumento', $Tid_IdTipoDocumento);
            $this->db->set('Per_Nombre', $Per_Nombre);
            $this->db->set('Per_Correo', $Per_Correo);
            $this->db->set('Per_Telefono', $Per_Telefono);
            $this->db->set('Per_Celular', $Per_Telefono);

            $this->db->insert('persona');

            $Per_IdPersona = $this->db->insert_id();
        }
        else
        {
            $Per_IdPersona = $Per_IdPersona->Per_IdPersona;
        }

        //registro tabla usuario
        $this->db->set('Per_IdPersona', $Per_IdPersona);
        $this->db->set('Usu_Correo', $Per_Correo);
        $this->db->set('Usu_Clave', $Usu_Clave);
        $this->db->set('Usu_Promocion', $publicidad);
        $this->db->set('Rol_IdRol', 4);
        
        if ($this->db->insert($this->table_name))
        {
			$Usu_IdUsuario = $this->db->insert_id();

			if ($Usu_Activated)	$this->create_profile($Usu_IdUsuario);
		}

		//registro tabla publicidad
        $this->db->set('Usu_Correo', $Per_Correo);
        $this->db->set('Usu_Flag', $Usu_Flag_Publicidad);

        $this->db->insert('usuario_publicidad');
		

		$this->bitacoraModel->registrar_bitacora('tienda', 'crear_usuario', 'Usu_IdUsuario', $Usu_IdUsuario, '', '', $Usu_IdUsuario);

		$this->db->trans_complete();

        if($this->db->trans_status())
        {
            return $Usu_IdUsuario;
        }

        return NULL;
    }

    function get_cantidad_tiendas()
    {
        $sql = "SELECT COUNT(*) as Cantidad
            FROM tienda";

        $query = $this->db->query($sql);

        return $query->row();
    }

    function crear_tienda($Per_IdPersona, $Tid_IdTipoDocumento, $Per_Dni, $Per_Nombre, $Per_Telefono, $Usu_Correo, $Tie_ruc_dni, $Tie_Tipo, $Tie_Nombre, $Tie_RazonSocial, $Tie_Subdominio, $Tie_FechaInscripcion, $Plan_IdPlan, $Usu_Clave, $Usu_NewEmailKey, $Usu_LastIp, $Usu_Activated = TRUE, $Codigo)
    {
    	$Usu_Activated = $Usu_Activated ? 1 : 0;

    	$cantidad = $this->get_cantidad_tiendas()->Cantidad;

        if($cantidad > 100)
        {
            $Tie_Cuota = 1;
        }
        else
        {
            $Tie_Cuota = 6;
        }

        $this->db->trans_start();

        if(is_null($Per_IdPersona))
        {
            //registro tabla persona
            $this->db->set('Per_Dni', $Per_Dni);
            $this->db->set('Tid_IdTipoDocumento', $Tid_IdTipoDocumento);
            $this->db->set('Per_Nombre', $Per_Nombre);
            $this->db->set('Per_Telefono', $Per_Telefono);
            $this->db->set('Per_Correo', $Usu_Correo);
            $this->db->insert('persona');

            $Per_IdPersona = $this->db->insert_id();
        }
        else
        {
            $Per_IdPersona = $Per_IdPersona->Per_IdPersona;
        }

        //registro tabla tienda

        $this->db->set('Tie_ruc_dni', $Tie_ruc_dni);
        $this->db->set('Tie_Tipo', $Tie_Tipo);
        $this->db->set('Tie_Nombre', $Tie_Nombre);
        $this->db->set('Tie_RazonSocial', $Tie_RazonSocial);
        $this->db->set('Tie_Subdominio', $Tie_Subdominio);
        $this->db->set('Tie_FechaInscripcion', $Tie_FechaInscripcion);
        $this->db->set('Pla_IdPlan', $Plan_IdPlan);
        $this->db->set('Tie_Cuota', $Tie_Cuota);
        $this->db->set('Codigo', $Codigo);

        $this->db->insert('tienda');

        $Tie_IdTienda = $this->db->insert_id();

        //registro tabla usuario
        $this->db->set('Per_IdPersona', $Per_IdPersona);
        $this->db->set('Usu_Correo', $Usu_Correo);
        $this->db->set('Usu_Clave', $Usu_Clave);
        $this->db->set('Rol_IdRol', 2);
        $this->db->set('Tie_IdTienda', $Tie_IdTienda);

        if ($this->db->insert($this->table_name))
        {
			$Usu_IdUsuario = $this->db->insert_id();

			if ($Usu_Activated)	$this->create_profile($Usu_IdUsuario);
		}

        $Usu_IdUsuario = $this->db->insert_id();

        $this->bitacoraModel->registrar_bitacora('tienda', 'crear_tienda', 'Tie_IdTienda', $Tie_IdTienda, '', '', $Usu_IdUsuario);

		$this->db->trans_complete();

        if($this->db->trans_status())
        {
            return $Usu_IdUsuario;
        }

        return NULL;
    }

	/**
	 * Activate user if activation key is valid.
	 * Can be called for not Usu_Activated users only.
	 *
	 * @param	int
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function activate_user($user_id, $activation_key, $activate_by_email)
	{
		$this->db->select('1', FALSE);
		$this->db->where('Usu_IdUsuario', $user_id);
		if ($activate_by_email) {
			$this->db->where('Usu_NewEmailKey', $activation_key);
		} else {
			$this->db->where('Usu_NewPasswordKey', $activation_key);
		}
		$this->db->where('Usu_Activated', 0);
		$query = $this->db->get($this->table_name);

		if ($query->num_rows() == 1) {

			$this->db->set('Usu_Activated', 1);
			$this->db->set('Usu_NewEmailKey', NULL);
			$this->db->where('Usu_IdUsuario', $user_id);
			$this->db->update($this->table_name);

			$this->create_profile($user_id);
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Purge table of non-Usu_Activated users
	 *
	 * @param	int
	 * @return	void
	 */
	function purge_na($expire_period = 172800)
	{
		$this->db->where('Usu_Activated', 0);
		$this->db->where('UNIX_TIMESTAMP(created) <', time() - $expire_period);
		$this->db->delete($this->table_name);
	}

	/**
	 * Delete user record
	 *
	 * @param	int
	 * @return	bool
	 */
	function delete_user($user_id)
	{
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->delete($this->table_name);
		if ($this->db->affected_rows() > 0) {
			$this->delete_profile($user_id);
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Set new password key for user.
	 * This key can be used for authentication when resetting user's password.
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function set_password_key($user_id, $new_pass_key)
	{
		$this->db->set('Usu_NewPasswordKey', $new_pass_key);
		$this->db->set('Usu_NewPasswordRequested', date('Y-m-d H:i:s'));
		$this->db->where('Usu_IdUsuario', $user_id);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Check if given password key is valid and user is authenticated.
	 *
	 * @param	int
	 * @param	string
	 * @param	int
	 * @return	void
	 */
	function can_reset_password($user_id, $new_pass_key, $expire_period = 900)
	{
		$this->db->select('1', FALSE);
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->where('Usu_NewPasswordKey', $new_pass_key);
		$this->db->where('UNIX_TIMESTAMP(Usu_NewPasswordRequested) >', time() - $expire_period);

		$query = $this->db->get($this->table_name);
		return $query->num_rows() == 1;
	}

	/**
	 * Change user password if password key is valid and user is authenticated.
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	int
	 * @return	bool
	 */
	function reset_password($user_id, $new_pass, $new_pass_key, $expire_period = 900)
	{
		$this->db->set('Usu_Clave', $new_pass);
		$this->db->set('Usu_NewPasswordKey', NULL);
		$this->db->set('Usu_NewPasswordRequested', NULL);
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->where('Usu_NewPasswordKey', $new_pass_key);
		// $this->db->where('UNIX_TIMESTAMP(Usu_NewPasswordRequested) >=', time() - $expire_period);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Change user password
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function change_password($user_id, $new_pass)
	{
		$this->db->set('Usu_Clave', $new_pass);
		$this->db->where('Usu_IdUsuario', $user_id);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Set new email for user (may be Usu_Activated or not).
	 * The new email cannot be used for login or notification before it is Usu_Activated.
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function set_new_email($user_id, $new_email, $Usu_NewEmailKey, $Usu_Activated)
	{
		$this->db->set($Usu_Activated ? 'new_email' : 'email', $new_email);
		$this->db->set('Usu_NewEmailKey', $Usu_NewEmailKey);
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->where('Usu_Activated', $Usu_Activated ? 1 : 0);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Activate new email (replace old email with new one) if activation key is valid.
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function activate_new_email($user_id, $Usu_NewEmailKey)
	{
		$this->db->set('email', 'new_email', FALSE);
		$this->db->set('new_email', NULL);
		$this->db->set('Usu_NewEmailKey', NULL);
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->where('Usu_NewEmailKey', $Usu_NewEmailKey);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Update user login info, such as IP-address or login time, and
	 * clear previously generated (but not Usu_Activated) passwords.
	 *
	 * @param	int
	 * @param	bool
	 * @param	bool
	 * @return	void
	 */
	function update_login_info($user_id, $record_ip, $record_time)
	{
		$this->db->set('Usu_NewPasswordKey', NULL);
		$this->db->set('Usu_NewPasswordRequested', NULL);

		if ($record_ip)		$this->db->set('Usu_LastIp', $this->input->ip_address());
		if ($record_time)	$this->db->set('Usu_LastLogin', date('Y-m-d H:i:s'));

		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->update($this->table_name);
	}

	/**
	 * Ban user
	 *
	 * @param	int
	 * @param	string
	 * @return	void
	 */
	function ban_user($user_id, $reason = NULL)
	{
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->update($this->table_name, array(
			'banned'		=> 1,
			'ban_reason'	=> $reason,
		));
	}

	/**
	 * Unban user
	 *
	 * @param	int
	 * @return	void
	 */
	function unban_user($user_id)
	{
		$this->db->where('Usu_IdUsuario', $user_id);
		$this->db->update($this->table_name, array(
			'banned'		=> 0,
			'ban_reason'	=> NULL,
		));
	}

	/**
	 * Create an empty profile for a new user
	 *
	 * @param	int
	 * @return	bool
	 */
	private function create_profile($user_id)
	{
		$this->db->set('user_id', $user_id);
		return $this->db->insert($this->profile_table_name);
	}

	/**
	 * Delete user profile
	 *
	 * @param	int
	 * @return	void
	 */
	private function delete_profile($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete($this->profile_table_name);
	}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */