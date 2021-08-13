<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Usuario_model extends CI_Model
    {
        private $nombre_tabla = 'usuario';

        function __construct()
        {           
            parent::__construct();
        }
        
        function usuario_login($Usu_Correo, $Usu_Clave)
        {
            $this->db->select('Usu_Clave');
            $this->db->from($this->nombre_tabla);
            $this->db->where('Usu_Correo', $Usu_Correo);
            
            $hash = $this->db->get()->row('Usu_Clave');

            return $this->verificar_clave_hash($Usu_Clave, $hash);
        }

        function verificar_usuario($Usu_Correo)
        {
            $sql = "SELECT EXISTS(SELECT * FROM usuario WHERE Usu_Correo = '".$Usu_Correo."' LIMIT 1) as a";

            $query = $this->db->query($sql);

            return $query->row();
        }

        function verificado($Usu_IdUsuario)
        {
            $sql = "SELECT Usu_Verificado FROM usuario WHERE Usu_IdUsuario = ".$Usu_IdUsuario;

            $query = $this->db->query($sql);

            return $query->row();
        }

        function verificar($Usu_IdUsuario)
        {
            $this->db->set('Usu_Verificado', 1);
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->update($this->nombre_tabla);
        }

        function get_usuario_by_correo($Usu_Correo)
        {
            $this->db->select('Usu_IdUsuario, Rol_IdRol, Tie_IdTienda, Usu_Activated');
            $this->db->from($this->nombre_tabla);
            $this->db->where('Usu_Correo', $Usu_Correo);

            $query = $this->db->get();

            return $query->row();
        }

        function get_usuario($Usu_IdUsuario)
        {
            $this->db->select('Usu_IdUsuario, usu.Per_IdPersona, Usu_Correo, per.Per_Dni, per.Per_Nombre, per.Per_Sexo, per.Per_FechaNacimiento, per.Per_Telefono, per.Per_Celular, per.Per_Ocupacion, Tie_IdTienda, Rol_IdRol, per.Per_Direccion, per.Region_Id, per.Provincia_Id, per.Distrito_Id');
            $this->db->from('usuario as usu');
            $this->db->join('persona AS per', 'per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
            $query = $this->db->get();
            return $query->row();
        }

        function get_cantidad_usuario_x_tienda($Tie_IdTienda)
        {
            $sql = "SELECT COUNT(*) as Cantidad
                FROM usuario usu
                INNER JOIN persona as per ON per.Per_IdPersona = usu.Per_IdPersona 
                WHERE usu.Tie_IdTienda = $Tie_IdTienda AND (usu.Rol_IdRol = 2 or usu.Rol_IdRol = 3)";

            $query = $this->db->query($sql);

            return $query->row();
        }

        function get_cantidad_tiendas()
        {
            $sql = "SELECT COUNT(*) as Cantidad
                FROM tienda";

            $query = $this->db->query($sql);

            return $query->row();
        }

        function get_usuario_x_tienda($Tie_IdTienda)
        {
            $sql = "SELECT usu.Usu_IdUsuario, usu.Per_IdPersona, usu.Usu_Correo, per.Per_Dni, per.Per_Nombre, per.Per_Sexo, per.Per_FechaNacimiento, per.Per_Telefono, per.Per_Celular, per.Per_Ocupacion, usu.Tie_IdTienda, usu.Rol_IdRol
                FROM usuario as usu
                INNER JOIN persona as per ON per.Per_IdPersona = usu.Per_IdPersona 
                WHERE usu.Tie_IdTienda = $Tie_IdTienda AND (usu.Rol_IdRol = 2 or usu.Rol_IdRol = 3)";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_datos_compra_x_tienda($Tie_IdTienda)
        {
            $sql = "SELECT per.Per_Telefono, tie.Tie_Nombre, tie.Tie_Subdominio
                FROM usuario as usu
                INNER JOIN persona as per ON per.Per_IdPersona = usu.Per_IdPersona 
                INNER JOIN tienda as tie ON tie.Tie_IdTienda = $Tie_IdTienda 
                WHERE usu.Tie_IdTienda = $Tie_IdTienda AND (usu.Rol_IdRol = 2 or usu.Rol_IdRol = 3)";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_usuario_x_tienda_unico($Tie_IdTienda)
        {
            $sql = "SELECT usu.Usu_IdUsuario, usu.Per_IdPersona, usu.Usu_Correo, per.Per_Dni, per.Per_Nombre, per.Per_Sexo, per.Per_FechaNacimiento, per.Per_Telefono, per.Per_Celular, per.Per_Ocupacion, usu.Tie_IdTienda, usu.Rol_IdRol
                FROM usuario as usu
                INNER JOIN persona as per ON per.Per_IdPersona = usu.Per_IdPersona 
                WHERE usu.Tie_IdTienda = $Tie_IdTienda AND usu.Rol_IdRol = 2";
            $query = $this->db->query($sql);

            return $query->row();
        }

        function get_usuarios($condicion="")
        {
            $sql = "SELECT usu.Usu_IdUsuario, per.Per_Nombre, usu.Usu_Correo, usu.Usu_Activated, usu.Rol_IdRol  
                    FROM usuario usu
                    INNER JOIN persona per ON per.Per_IdPersona = usu.Per_IdPersona
                    $condicion";

            $query = $this->db->query($sql);

            return $query->result();
        }
        function get_usuarios_gestor($condicion="")

        {
            $sql = "SELECT usu.Usu_IdUsuario, per.Per_Nombre, usu.Usu_Correo, usu.Usu_Activated, usu.Rol_IdRol, gti.Codigo
                    FROM usuario usu
                    INNER JOIN persona per ON per.Per_IdPersona = usu.Per_IdPersona
                    INNER JOIN gestor_tienda gti ON gti.Usu_IdUsuario = usu.Usu_IdUsuario
                    WHERE usu.Rol_IdRol = 5
                    $condicion";

            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_usuario_banco($Usu_IdUsuario)
        {
            $this->db->select('*');
            $this->db->from('usuario_banco as usb');
            $this->db->join('banco as ban', 'ban ON ban.Ban_IdBanco = usb.Ban_IdBanco');
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
            $query = $this->db->get();
            return $query->row();
        }

        function clave_hash($Usu_Clave)
        {
            return password_hash($Usu_Clave, PASSWORD_BCRYPT);
        }

        function verificar_clave_hash($Usu_Clave, $hash)
        {
            
            // $Usu_Clave = password_hash($Usu_Clave, PASSWORD_BCRYPT);
            // echo $Usu_Clave . "<br>";
            // echo $hash;
            // die;
            // return password_verify($Usu_Clave, $hash);
            return password_verify($Usu_Clave, $hash);
        }

        function verificar_pass_key($Usu_NewPasswordKey="")
        {
            
            $sql = "SELECT  Usu_NewPasswordKey FROM usuario WHERE Usu_NewPasswordKey LIKE '%$Usu_NewPasswordKey%'";


            $query = $this->db->query($sql);

            return $query->result();
        }
         
        function verificar_clave($Usu_Correo, $Usu_Clave) 
        {
            $this->db->select('Usu_Clave');
            $this->db->from($this->nombre_tabla);
            $this->db->where('Usu_Correo', $Usu_Correo);
            $hash = $this->db->get()->row('Usu_Clave');

            return password_verify($Usu_Clave, $hash);
        }

        function editar_usuario($Per_IdPersona, $Per_Dni, $Per_Nombre, $Per_Sexo, $Per_FechaNacimiento, $Per_Direccion, $Per_Telefono, $Per_Celular, $Per_Ocupacion, $Region_Id, $Provincia_Id, $Distrito_Id)
        {
            try
            {
                $this->db->trans_start();

                $this->db->set('Per_Dni', $Per_Dni);
                $this->db->set('Per_Nombre', $Per_Nombre);
                $this->db->set('Per_Sexo', $Per_Sexo);
                $this->db->set('Per_FechaNacimiento', $Per_FechaNacimiento);
                $this->db->set('Per_Direccion', $Per_Direccion);
                $this->db->set('Per_Telefono', $Per_Telefono);
                $this->db->set('Per_Celular', $Per_Celular);
                $this->db->set('Per_Ocupacion', $Per_Ocupacion);
                $this->db->set('Region_Id', $Region_Id);
                $this->db->set('Provincia_Id', $Provincia_Id);
                $this->db->set('Distrito_Id', $Distrito_Id);
                $this->db->where('Per_IdPersona', $Per_IdPersona);
                $this->db->update('persona');

                $this->db->trans_complete();

                if ($this->db->trans_status() === TRUE)
                {
                    return true;
                }

                return false;
            }
            catch (Exception $e)
            {
                return false;
            }
        }

          function update_DNI($id_usuario,$DNIcliente)
        {

            try
            {
                $this->db->trans_start();
                $this->db->select('Per_IdPersona')->from('usuario')->where('Usu_IdUsuario',$id_usuario);
                $query = $this->db->get();

                $fila=$query->row();

                $Per_IdPersona=$fila->Per_IdPersona;


                $this->db->set('Per_Dni', $DNIcliente)->where('Per_IdPersona',$Per_IdPersona)->update('persona');


                $this->db->trans_complete();

                if ($this->db->trans_status() === TRUE)
                {
                    return true;
                }

                return false;
            }
            catch (Exception $e)
            {
                return false;
            }
        }

        function crear_vendedor($Per_IdPersona, $Tid_IdTipoDocumento, $Per_Dni, $Per_Nombre, $Per_Correo, $Usu_Clave)
        {
            $this->db->trans_start();

            if(is_null($Per_IdPersona))
            {
                //registro tabla persona
                $this->db->set('Per_Dni', $Per_Dni);
                $this->db->set('Tid_IdTipoDocumento', $Tid_IdTipoDocumento);
                $this->db->set('Per_Nombre', $Per_Nombre);
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
            $this->db->set('Usu_Clave', password_hash($Usu_Clave, PASSWORD_BCRYPT));
            $this->db->set('Rol_IdRol', 4);
            
            $this->db->insert('usuario');

            $Usu_IdUsuario = $this->db->insert_id();

            $this->bitacoraModel->registrar_bitacora('tienda', 'crear_usuario', 'Usu_IdUsuario', $Usu_IdUsuario, '', '', $Usu_IdUsuario);

            $this->db->trans_complete();

            if($this->db->trans_status())
            {
                return $Usu_IdUsuario;
            }

            return false;
        }

        function cambiar_estado_usuario($Usu_IdUsuario, $Usu_Activated, $Usu_IdUsuario_)
        {
            try 
            {
                $this->db->trans_start();

                //cambiar estado
                $this->db->set('Usu_Activated', $Usu_Activated);
                $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
                $this->db->update($this->nombre_tabla);
                
                //registrar en la tabla bitacora
                $this->bitacoraModel->registrar_bitacora($this->nombre_tabla, 'cambiar_estado_usuario', 'Usu_IdUsuario', $Usu_IdUsuario, '', '', $Usu_IdUsuario_);

                $this->db->trans_complete();

                if($this->db->trans_status() == TRUE)
                {
                    return true;
                }

                return false;
            } 
            catch (Exception $e) 
            {
                return false;
            }
        }
       
        function registrarCuentaUsuario($Usu_IdUsuario,$Ban_IdBanco,$Usb_Cuenta,$Usb_Tipo)
        {
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->set('Ban_IdBanco', $Ban_IdBanco);
            $this->db->set('Usb_Cuenta', $Usb_Cuenta);
            $this->db->set('Usb_Tipo', $Usb_Tipo);         
            $this->db->insert('usuario_banco');
        }

        function usuario_direccion_compra($id_usuario,$region,$provincia,$distrito,$direccion,$referencia,$lote,$dpint,$urbanizacion,$tlf)
        {
            $data = array(
                'Usu_IdUsuario' => $id_usuario,
                'Pag_Direccion'  => $direccion,
                'Pag_idregion'  => $region,
                'Pag_idprovincia'  => $provincia,
                'Pag_iddistrito'  => $distrito,
                'Pag_Referencia'  => $referencia,
                'Pag_Lote'  => $lote,
                'Pag_DtoInt'  => $dpint,
                'Pag_Urbanizacion'  => $urbanizacion,
                'Pag_Telefono'  => $tlf
            );

            $this->db->replace('pago_direccion_usu', $data);
            
        }

        function get_usuario_direccion($id_usuario)
        {
            $this->db->select('*');
            $this->db->from('pago_direccion_usu');
            $this->db->where('Usu_IdUsuario', $id_usuario);

            $query = $this->db->get();

            return $query->row();
        }

        function pmcpv1()
        {

            $FechaHoy =  date("Y-m-d h:i:s");

            $sql = "SELECT Tie_FechaRegistro, Tie_Nombre, Tie_IdTienda FROM tienda
                    WHERE Tie_FechaRegistro BETWEEN DATE_SUB(CURDATE(),INTERVAL 15 DAY)  AND CURDATE() GROUP BY Tie_FechaRegistro";


            $query = $this->db->query($sql);
                return $query->result();
        }

        function registrarUsuarioSubscrip($Pub_Correo)
        {
            $data = array(
                'Pub_Correo' => $Pub_Correo,
            );

            $this->db->replace('publicidad', $data);

            return true;
        }
    }
?>