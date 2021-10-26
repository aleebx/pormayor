<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Usuario extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Usuario_model", "usuarioModel");
            $this->load->model('redes_sociales/Facebook_model', 'facebookModel');
			$this->load->helper(array('form', 'url', 'security'));
			$this->load->library(array('form_validation', 'facebook'));
            $this->load->library('tank_auth');
            $this->lang->load('tank_auth');
		}

        public function index()
        {
            $data = $this->acl->load_datos("no", "no", "admin");

            $data['pagina']['titulo'] = 'Gestión de Usuarios';

            $data['usuarios'] = $this->usuarioModel->get_usuarios_gestor();

            $this->twig->parse('usuario/index.twig', $data);
        }

        public function registro()
        {
            $data = $this->acl->load_datos();

            if ($this->tank_auth->is_logged_in())
            {
                redirect('index');
            }
            elseif ($this->tank_auth->is_logged_in(FALSE))
            {
                redirect('/usuario/send_again/');
            }
            else
            {
                $data['success'] = FALSE;
                $data['errors'] = array();
                $data['pagina']['titulo'] = 'Inicio sesión | pormayor.pe';
                $data['pagina']['extrabtn'] = 'NO';

                if($this->input->post('btnIngresar'))
                {
                    $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
                    $this->form_validation->set_rules('clave', 'Clave', 'trim|required');

                    $this->form_validation->set_message("required", "El campo %s es requerido");
                    $this->form_validation->set_message("is_unique", "Error nuevo");
                    if($this->form_validation->run())
                    {
                        $this->_login($this->form_validation->set_value('correo'), $this->form_validation->set_value('clave'), 0, true, $url);
                        $errors = $this->tank_auth->get_error_message();
                        foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                    }
                }

                if($this->input->post('btnRegistrarse'))
                {
                    $use_username = false;
                    //$use_username = $this->config->item('use_username', 'tank_auth');
                    if ($use_username)
                    {
                        $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|min_length[4]|max_length[10]|alpha_dash');
                    }

                    $this->form_validation->set_rules('nombre', 'NOMBRE', 'trim|required');
                    $this->form_validation->set_rules('correo', 'CORREO', 'trim|required|valid_email|is_unique[usuario.Usu_Correo]');
                    $this->form_validation->set_rules('clave', 'CLAVE', 'trim|required|min_length[3]|max_length[20]|alpha_dash');
                    $this->form_validation->set_rules('dni', 'DNI', 'trim|required');
                    $this->form_validation->set_rules('celular', 'CELULAR', 'trim|required');
                    $this->form_validation->set_rules('publicidad_valor', 'PUBLI', 'trim');

                    // $this->form_validation->set_message("required", "El campo %s es requerido");
                    // $this->form_validation->set_message("is_unique", "El campo %s ya está en uso");

                    $this->form_validation->set_message("is_unique", "Error");

                    $data['errors'] = array();
                    $email_activation = $this->config->item('email_activation', 'tank_auth');

                    if($this->form_validation->run())
                    {
                        $this->load->model("Persona_model", "personaModel");
                        $Per_Dni = $this->form_validation->set_value('dni');
                        $Per_Nombre = $this->form_validation->set_value('nombre');
                        $Usu_Correo = $this->form_validation->set_value('correo');
                        $Per_Telefono = $this->form_validation->set_value('celular');
                        $Usu_Clave = $this->form_validation->set_value('clave');
                        $Usu_Flag_Publicidad = $this->form_validation->set_value('publicidad_valor');
                        $Per_IdPersona = $this->personaModel->get_id_persona_x_dni($Per_Dni);

                        if (!is_null($data = $this->tank_auth->create_comprador('', $Per_IdPersona, $Per_Dni, $Per_Nombre, $Usu_Correo, $Per_Telefono,$Usu_Clave, $email_activation, $publicidad, $Usu_Flag_Publicidad)))
                        {
                            $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                            if($email_activation)
                            {
                                $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                                $this->_send_email('activate', $Usu_Correo, $data);
                                unset($data['Usu_Clave']); 
                                $data['estado_registrado'] = TRUE;
                                $data['mensaje'] = $this->lang->line('auth_message_registration_completed_1');
                            }
                            else
                            {
                                $data['login_redes'] = TRUE;
                                $data['email'] = $Usu_Correo;
                                
                                if ($this->config->item('email_account_details', 'tank_auth')) 
                                {
                                    $this->load->library('correo');

                                    $datos['nombre_usuario'] = $Per_Nombre;
                                    $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
                                    $datos['correo'] = $Usu_Correo;
                                    $datos['clave'] = $Usu_Clave;
                                    $idencry = $this->encrypt($data['Usu_IdUsuario'],"pormayor");
                                    $datos['id'] = $idencry;

                                    $contenido_correo = $this->twig->parse('correo/bienvenida_comprador.twig', $datos, true);

                                    $this->correo->enviar($Usu_Correo, "Bienvenido(a) a ".$datos['nombre_sitio'], $contenido_correo);
                                }
                                unset($data['Usu_Clave']);
                            }

                            $this->_login($Usu_Correo, $Usu_Clave, 0, 1, "comprador/index/preferencias");
                        }
                        else
                        {
                            $errors = $this->tank_auth->get_error_message();
                            foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                        }
                    }
                    else
                    {
                        $data["success"] = TRUE;
                    }
                }

                $data['facebook']['id'] = $this->config->item('facebook_app_id');
                $data['facebook']['permisos'] = $this->config->item('facebook_permissions');
                $this->twig->parse('usuario/registro.twig', $data);
            }
        }

        public function crear_usuario()
        {
            $data = $this->acl->load_datos("no", "no", "admin");
            
            $data['pagina']['titulo'] = 'Registrar Usuario';

            if($this->input->post())
            {
                $data['error'] = FALSE;
                $use_username = false;
                //$use_username = $this->config->item('use_username', 'tank_auth');
                if ($use_username) 
                {
                    $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|min_length[4]|max_length[10]|alpha_dash');
                }
                $this->form_validation->set_rules('dni', 'DNI', 'trim|required');
                $this->form_validation->set_rules('nombre', 'NOMBRE', 'trim|required');
                $this->form_validation->set_rules('correo', 'CORREO', 'trim|required|valid_email|is_unique[usuario.Usu_Correo]');
                $this->form_validation->set_rules('clave', 'CLAVE', 'trim|required|min_length[3]|alpha_dash');
                $this->form_validation->set_rules('selRol', 'Rol', 'trim|required');

                $this->form_validation->set_message("required", "El campo %s es requerido");
                $this->form_validation->set_message("is_unique", "El campo %s ya está en uso");
                
                $data['errors'] = array();

                $email_activation = $this->config->item('email_activation', 'tank_auth');

                if($this->form_validation->run())
                {
                    $this->load->model("Persona_model", "personaModel");
                    $Per_Dni = $this->form_validation->set_value('dni');
                    $Per_Nombre = $this->form_validation->set_value('nombre');
                    $Per_Celular = $this->form_validation->set_value('celular');
                    $Usu_Correo = $this->form_validation->set_value('correo');
                    $Usu_Clave = $this->form_validation->set_value('clave');
                    $Rol_IdRol = $this->form_validation->set_value('selRol');

                    $Per_IdPersona = $this->personaModel->get_id_persona_x_dni($Per_Dni);

                    if (!is_null($data = $this->tank_auth->create_usuario('', $Per_IdPersona, $Per_Dni, $Per_Nombre, $Per_Celular, $Usu_Correo, $Usu_Clave, $Rol_IdRol, $data['tienda']->Tie_IdTienda,  $email_activation)))
                    {
                        $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                        if($email_activation)
                        {
                            $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                            $this->_send_email('activate', $Usu_Correo, $data);
                            unset($data['Usu_Clave']); 
                            $data['estado_registrado'] = TRUE;
                            $data['mensaje'] = $this->lang->line('auth_message_registration_completed_1');
                        }
                        else
                        {
                            $data['login_redes'] = TRUE;
                            $data['email'] = $Usu_Correo;

                            if ($this->config->item('email_account_details', 'tank_auth')) 
                            {   
                                $this->_send_email('welcome', $Usu_Correo, $data);
                            }

                            unset($data['Usu_Clave']);

                            redirect('usuario');
                        }
                    }
                    else
                    {
                        $errors = $this->tank_auth->get_error_message();
                        foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                    }
                }
                else
                {
                    $data["error"] = TRUE;
                }
            }

            $this->twig->parse('usuario/crear_usuario.twig', $data);
        }

        function editar($Usu_IdUsuario=false)
        {
            $data = $this->acl->load_datos("no", "no", "admin");
            
            $data['pagina']['titulo'] = 'Editar Usuario';
            
            if($this->input->post('btnActualizar'))
            {
                $data['error'] = true;

                $this->form_validation->set_rules('dni', 'DNI', 'trim|required|xss_clean|min_length[8]|alpha_dash');
                $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
                
                $data['errors'] = array();

                if ($this->form_validation->run())
                {
                    $data['error'] = false;

                    $Per_IdPersona = $this->input->post('Per_IdPersona');
                    $Per_Dni = $this->input->post('dni');
                    $Per_Nombre = $this->input->post('nombre');
                    $Per_Sexo = $this->input->post('selSexo');
                    $Per_FechaNacimiento = $this->input->post('fecha_nacimiento');
                    $Per_Telefono = $this->input->post('telefono');
                    $Per_Celular = $this->input->post('celular');

                    $registro = $this->usuarioModel->editar_usuario($Per_IdPersona, $Per_Dni, $Per_Nombre, $Per_Sexo, $Per_FechaNacimiento, NULL, $Per_Telefono, $Per_Celular, NULL);

                    if($registro)
                    {
                        redirect('usuario');
                    }
                }
            }
            
            $data['datos_usuario'] = $this->usuarioModel->get_usuario($Usu_IdUsuario);
            
            $this->twig->parse('usuario/editar.twig', $data);
        }

        function post_actualizar_estado()
        {
            if ($this->input->post()) 
            {
                $data = $this->acl->load_datos("no", "no", "admin");

                $Usu_IdUsuario = $this->input->post('id');
                $Usu_Activated = $this->input->post('estado');

                $registra = $this->usuarioModel->cambiar_estado_usuario($Usu_IdUsuario, $Usu_Activated, $data['usuario']['id_usuario']);

                if ($registra) 
                {
                    echo "1";
                }
            } 
            else
            {
                show_404();
            }
        }

        function login($url='', $publicidad='')
		{
            $data = $this->acl->load_datos();

            if ($this->tank_auth->is_logged_in())
            {
                redirect('index');
            }
            elseif ($this->tank_auth->is_logged_in(FALSE))
            {
                redirect('/usuario/send_again/');
            }
            else
            {
                $data['success'] = FALSE;
                $data['errors'] = array();
                $data['pagina']['titulo'] = 'Inicio sesión | pormayor.pe';
                $data['pagina']['extrabtn'] = 'NO';

                if($this->input->post('btnIngresar'))
                {
                    $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
                    $this->form_validation->set_rules('clave', 'Clave', 'trim|required');

                    $this->form_validation->set_message("required", "El campo %s es requerido");
                    $this->form_validation->set_message("is_unique", "Error nuevo");
                    if($this->form_validation->run())
                    {
                        $this->_login($this->form_validation->set_value('correo'), $this->form_validation->set_value('clave'), 0, true, $url);
                        $errors = $this->tank_auth->get_error_message();
                        foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                    }
                }

                if($this->input->post('btnRegistrarse'))
                {
                    $use_username = false;
                    //$use_username = $this->config->item('use_username', 'tank_auth');
                    if ($use_username)
                    {
                        $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|min_length[4]|max_length[10]|alpha_dash');
                    }

                    $this->form_validation->set_rules('nombre', 'NOMBRE', 'trim|required');
                    $this->form_validation->set_rules('correo', 'CORREO', 'trim|required|valid_email|is_unique[usuario.Usu_Correo]');
                    $this->form_validation->set_rules('clave', 'CLAVE', 'trim|required|min_length[3]|max_length[20]|alpha_dash');
                    $this->form_validation->set_rules('dni', 'DNI', 'trim|required');
                    $this->form_validation->set_rules('celular', 'CELULAR', 'trim|required');
                    $this->form_validation->set_rules('publicidad_valor', 'PUBLI', 'trim');

                    // $this->form_validation->set_message("required", "El campo %s es requerido");
                    // $this->form_validation->set_message("is_unique", "El campo %s ya está en uso");

                    $this->form_validation->set_message("is_unique", "Error");

                    $data['errors'] = array();
                    $email_activation = $this->config->item('email_activation', 'tank_auth');

                    if($this->form_validation->run())
                    {
                        $this->load->model("Persona_model", "personaModel");
                        $Per_Dni = $this->form_validation->set_value('dni');
                        $Per_Nombre = $this->form_validation->set_value('nombre');
                        $Usu_Correo = $this->form_validation->set_value('correo');
                        $Per_Telefono = $this->form_validation->set_value('celular');
                        $Usu_Clave = $this->form_validation->set_value('clave');
                        $Usu_Flag_Publicidad = $this->form_validation->set_value('publicidad_valor');
                        $Per_IdPersona = $this->personaModel->get_id_persona_x_dni($Per_Dni);

                        if (!is_null($data = $this->tank_auth->create_comprador('', $Per_IdPersona, $Per_Dni, $Per_Nombre, $Usu_Correo, $Per_Telefono,$Usu_Clave, $email_activation, $publicidad, $Usu_Flag_Publicidad)))
                        {
                            $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                            if($email_activation)
                            {
                                $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                                $this->_send_email('activate', $Usu_Correo, $data);
                                unset($data['Usu_Clave']); 
                                $data['estado_registrado'] = TRUE;
                                $data['mensaje'] = $this->lang->line('auth_message_registration_completed_1');
                            }
                            else
                            {
                                $data['login_redes'] = TRUE;
                                $data['email'] = $Usu_Correo;
                                
                                if ($this->config->item('email_account_details', 'tank_auth')) 
                                {
                                    $this->load->library('correo');

                                    $datos['nombre_usuario'] = $Per_Nombre;
                                    $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
                                    $datos['correo'] = $Usu_Correo;
                                    $datos['clave'] = $Usu_Clave;
                                    $idencry = $this->encrypt($data['Usu_IdUsuario'],"pormayor");
                                    $datos['id'] = $idencry;

                                    $contenido_correo = $this->twig->parse('correo/bienvenida_comprador.twig', $datos, true);

                                    $this->correo->enviar($Usu_Correo, "Bienvenido(a) a ".$datos['nombre_sitio'], $contenido_correo);
                                }
                                unset($data['Usu_Clave']);
                            }

                            $this->_login($Usu_Correo, $Usu_Clave, 0, 1, "comprador/index/preferencias");
                        }
                        else
                        {
                            $errors = $this->tank_auth->get_error_message();
                            foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                        }
                    }
                    else
                    {
                        $data["success"] = TRUE;
                    }
                }

                $data['facebook']['id'] = $this->config->item('facebook_app_id');
                $data['facebook']['permisos'] = $this->config->item('facebook_permissions');
                $this->twig->parse('usuario/login.twig', $data);
            }
		}

        function test_correo()
        {
            $this->load->library('correo');

            $datos['nombre_usuario'] = "gabriel dominguez" ;
            $datos['nombre_sitio'] = "pormayor";

            $contenido_correo = $this->twig->parse('correo/bienvenida_comprador.twig', $datos, true);

            $this->correo->enviar("gabrieljd94@gmail.com", "Bienvenido a ".$datos['nombre_sitio'], $contenido_correo);
        }

        function publicidad_tienda($password=false)
        {
            if ($password == 123456789){
                $this->load->library('correo');

                $correos = array('gabrieljd94@gmail.com', 'bequizalexis@gmail.com', 'ana0191@gmail.com');

                $datos['nombre_sitio'] = "pormayor";
                $datos['nombre_usuario'] = "gabriel dominguez" ;
                foreach ($correos as $correo) {
                    $contenido_correo = $this->twig->parse('correo/publicidad_tienda.twig', $datos, true);

                    $this->correo->enviar($correo, "Publicidad - Crea GRATIS tu tienda virtual", $contenido_correo);
                }
                
            }else{
                redirect('https://pormayor.pe');
            }
            
        }

        function publicidad_comprador($password=false)
        {
            if ($password == 123456789){
                $this->load->library('correo');

                $correos = array('gabrieljd94@gmail.com');

                $datos['nombre_sitio'] = "pormayor";
                $datos['nombre_usuario'] = "gabriel dominguez" ;
                foreach ($correos as $correo) {
                    $contenido_correo = $this->twig->parse('correo/publicidad_comprador.twig', $datos, true);

                    $this->correo->enviar($correo, "Publicidad - Registrate GRATIS en pormayor.pe", $contenido_correo);
                }
                
            }else{
                redirect('https://pormayor.pe');
            }
            
        }

        function perfil()
        {
            $this->load->model("Local_model","localModel"); 
            $data=$this->acl->load_datos("no","no","si");
            $data['pagina']['titulo']='Perfil';
            $data['pagina']['opcion']='perfil';
            
            if($this->input->post('btnActualizar')) {
                $data['error']=true;
                $this->form_validation->set_rules('dni','DNI','trim|required|xss_clean|min_length[8]|alpha_dash');
                $this->form_validation->set_rules('nombre','Nombre','trim|required');
                
                $data['errors']=array();
                if($this->form_validation->run()) {
                    $data['error']=false;
                    $Per_Dni=$this->input->post('dni');
                    $Per_Sexo=$this->input->post('selSexo');
                    $Per_Nombre=$this->input->post('nombre');
                    $Per_Celular=$this->input->post('celular');
                    $Per_Telefono=$this->input->post('telefono');
                    $Per_Direccion=$this->input->post('direccion');
                    $Distrito_Id=$this->input->post('selDistrito');
                    $Region_Id=$this->input->post('selDepartamento');
                    $Provincia_Id=$this->input->post('selProvincia');
                    $Per_IdPersona=$this->input->post('Per_IdPersona');
                    $Per_FechaNacimiento=$this->input->post('fecha_nacimiento');

                    $registro=$this->usuarioModel->editar_usuario($Per_IdPersona,$Per_Dni,$Per_Nombre,$Per_Sexo,$Per_FechaNacimiento,$Per_Direccion,$Per_Telefono,$Per_Celular,NULL,$Region_Id,$Provincia_Id,$Distrito_Id);

                    if($registro) {
                        redirect('usuario/perfil');
                    }
            }
        }
            
            if($this->input->post('btnCambiarClave'))
            {
                $data['error'] = true;

                $this->form_validation->set_rules('clave', 'Contraseña Antigua', 'trim|required|xss_clean');
                $this->form_validation->set_rules('clave_nueva', 'Nueva Contraseña', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
                $this->form_validation->set_rules('clave_nueva2', 'Confirmar Nueva Contraseña', 'trim|required|xss_clean|matches[clave_nueva]');
                $this->form_validation->set_message("matches", "Las contraseñas no coinciden");

                $data['errors'] = array();

                if ($this->form_validation->run())
                {
                    $data['error'] = false;

                    $old_password = $this->form_validation->set_value('clave');
                    $new_password = $this->form_validation->set_value('clave_nueva');

                    if ($this->tank_auth->change_password($old_password, $new_password))
                    {
                        //$this->_show_message($this->lang->line('auth_message_password_changed'));

                        $this->cerrar_sesion();
                    } 
                    else 
                    {
                        $errors = $this->tank_auth->get_error_message();
                        foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                    }
                }
            }

            $data['bancos'] = $this->localModel->bancos();
            $data['datos_usuario'] = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
            $data['banco_usuario'] = $this->usuarioModel->get_usuario_banco($data['usuario']['id_usuario']);

            $data['regiones'] = $this->localModel->region();
            $data['provincias'] = $this->localModel->provincia($data['datos_usuario']->Region_Id);
            $data['distritos'] = $this->localModel->distrito($data['datos_usuario']->Provincia_Id, $data['datos_usuario']->Region_Id);
            
            $this->twig->parse('usuario/perfil.twig', $data);
        }

        function olvido_contrasenia()
        {
            $data = $this->acl->load_datos();
            $data['pagina']['titulo'] = 'Olvidaste contraseña | pormayor.pe';
            if ($this->tank_auth->is_logged_in()) 
            {
                redirect('');

            } 
            elseif ($this->tank_auth->is_logged_in(FALSE)) 
            {
                redirect('/auth/send_again/');
            } 
            else 
            {
                $this->form_validation->set_rules('correo', 'Correo', 'trim|required|xss_clean');

                $data['errors'] = array();

                if ($this->form_validation->run()) 
                {
                    if (!is_null($data = $this->tank_auth->forgot_password($this->form_validation->set_value('correo')))) 
                    {
                        $this->load->library('correo');
                        $datos['Usu_IdUsuario'] = $data['id_usuario'];
                        $datos['Usu_NewEmailKey'] = $data['new_pass_key'];
                        $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
                        $contenido_correo = $this->twig->parse('correo/olvido_clave.twig', $datos, true);
                        $this->correo->enviar($data['correo'], "Crear una nueva contraseña en ".$datos['nombre_sitio'], $contenido_correo);

                        $this->_show_message($this->lang->line('auth_message_new_password_sent'));
                    } 
                    else 
                    {
                        $errors = $this->tank_auth->get_error_message();
                        foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                    }
                }

                $this->twig->parse('usuario/olvido_contrasenia.twig', $data);
            }
        }

            // $cadena_encriptada = $this->encrypt($Usu_IdUsuario,$Usu_IdUsuario);
        public function validar_usuario($Usu_IdUsuario)
        {
            $data = $this->acl->load_datos("no", "no", "comprador");
            $data['vista_carrito2'] = true;
            $data['vista_carrito_compra'] = true;
            // $ce = $this->encrypt(267,"pormayor");
            $des = $this->decrypt($Usu_IdUsuario,"pormayor");
            if ($des) {
                if ($data['usuario']['id_usuario'] == $des) {
                    $data['usu'] = $this->usuarioModel->get_usuario($des);
                    $v = $this->usuarioModel->verificado($des);
                    if ($v->Usu_Verificado == 0){
                        $registro = $this->usuarioModel->verificar($des);
                    }else if ($v->Usu_Verificado == 1){
                        $data['activo'] = true;
                    }
                }else{
                    $data['error'] = true;
                }
                // print_r($ce);
                $this->twig->parse('usuario/validar.twig', $data);               
            }else{
                redirect('');
            }         
        }

        function encrypt($string, $key) {
        $result = '';
           for($i=0; $i<strlen($string); $i++) {
              $char = substr($string, $i, 1);
              $keychar = substr($key, ($i % strlen($key))-1, 1);
              $char = chr(ord($char)+ord($keychar));
              $result.=$char;
           }
            return str_replace(['+','/','='], ['-','_',''], base64_encode($result));
        }
        //    return base64_encode_url($result);

        // function base64_encode_url($string) {
        // }

        function decrypt($string, $key) {
           $result = '';
           $string = base64_decode(str_pad(strtr($string, '-_', '+/'), strlen($string) % 4, '=', STR_PAD_RIGHT));
           for($i=0; $i<strlen($string); $i++) {
              $char = substr($string, $i, 1);
              $keychar = substr($key, ($i % strlen($key))-1, 1);
              $char = chr(ord($char)-ord($keychar));
              $result.=$char;
           }
           return $result;
        }
        
        // function base64url_decode($data) {
        //     return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
        // }

        public function banco_usuario()
        {
            if ($this->input->is_ajax_request()) 
            {
                $data = $this->acl->load_datos();
                $Ban_IdBanco = (int)$this->input->post('Ban_IdBanco');
                $Usb_Cuenta = $this->input->post('Usb_Cuenta');
                $Usb_Tipo = (int)$this->input->post('Usb_Tipo');

                $registrar = $this->usuarioModel->registrarCuentaUsuario($data['usuario']['id_usuario'],$Ban_IdBanco,$Usb_Cuenta,$Usb_Tipo);

                if ($registrar){
                    echo 1;
                }else{
                    echo 0;
                }

            }
        }

        function generate_password($length=9, $strength=0) 
        {
            $vowels = 'aeuy';
            $consonants = 'bdghjmnpqrstvz';
            if ($strength & 1) { $consonants .= 'BDGHJLMNPQRSTVWXZ'; }
            if ($strength & 2) { $vowels .= "AEUY"; }
            if ($strength & 4) { $consonants .= '23456789'; }
            if ($strength & 8) { $consonants .= '@#$%'; }
         
            $password = '';
            $alt = time() % 2;
            for ($i = 0; $i < $length; $i++) 
            {
                if ($alt == 1) 
                {
                    $password .= $consonants[(rand() % strlen($consonants))];
                    $alt = 0;
                } 
                else 
                {
                    $password .= $vowels[(rand() % strlen($vowels))];
                    $alt = 1;
                }
            }
            return $password;
        }       

        function _login($correo, $clave, $remember, $redirect=1, $url='')
        {
            $data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND  $this->config->item('use_username', 'tank_auth'));
            $data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');

            if ($this->tank_auth->login($correo, $clave, $remember, $data['login_by_username'], $data['login_by_email'])) 
            {
                if($redirect == 1)
                {
                    $this->_redirigir_login($url);
                }                
            } 
            else 
            {
                $errors = $this->tank_auth->get_error_message();
                
                if (isset($errors['banned'])) 
                {                               
                    $this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);
                }
                elseif (isset($errors['not_activated'])) 
                {               
                    redirect('/usuario/send_again/');
                } 
                else 
                {                                                   
                    foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
                }
            }
        }

        function _redirigir_login($url='')
        {
            if(trim($url) == '')
            {
                // 1 ADMIN | 2 DUEÑO - 3 VENDEDOR TIENDA | 4 COMPRADOR | 5 GESTOR | 6 VENTAS 
                if($this->tank_auth->get_rol() == 1)
                {
                    redirect('admin');
                }
                else if ($this->tank_auth->get_rol() == 2 or $this->tank_auth->get_rol() == 3)
                {
                    $tienda = $this->tiendaModel->get_tienda($this->tank_auth->get_tienda());
                    //redirect('http://'.$tienda->Tie_Subdominio.'.pormayor.pe');
                    redirect('https://'.$tienda->Tie_Subdominio.'.pormayor.pe/usuario/venta');
                }
                else if ($this->tank_auth->get_rol() == 5) 
                {
                    redirect('vnd/misventas');
                }
                else if ($this->tank_auth->get_rol() == 6)  
                {
                    redirect('ventas/compras');
                }
                else if ($this->tank_auth->get_rol() == 7)  
                {
                    redirect('almacen/listado');
                }
                else if ($this->tank_auth->get_rol() == 8)
                {
                    redirect('vnd/referido');
                }
                else
                {
                    redirect('');
                }
            }
            else
            {
                $url = str_replace('_', '/', $url);
                redirect($url);
            }
        }

        function reset_password()
        {
            $data = $this->acl->load_datos();
            $data['pagina']['titulo'] = 'Recuperar contraseña | pormayor.pe';
            $user_id = $this->uri->segment(3);
            $new_pass_key = $this->uri->segment(4);

            if ($user_id == "" or $new_pass_key == "") {
                header("Location: https://pormayor.pe");
            }

            $key_pass_test = $this->usuarioModel->verificar_pass_key($new_pass_key);
            
            if (empty($key_pass_test)) {
                header("Location: https://pormayor.pe");
            }

            // if (!isset($Pro_IdProducto)) {
            //     header("Location: https://pormayor.pe");
            // }

            $data['error'] = true;

            $this->form_validation->set_rules('clave', 'Nueva Contraseña', 'required');
            $this->form_validation->set_rules('clave2', 'Confirmar nueva contraseña', 'required|matches[clave]');

            $this->form_validation->set_message("matches", "Las contraseñas no coinciden");

            $data['errors'] = array();
            if ($this->form_validation->run())
            {
                $data['error'] = false;
                if (!is_null($data = $this->tank_auth->reset_password($user_id, $new_pass_key, $this->input->post('clave'))))
                {
                    $this->load->library('correo');
                    $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
                    $contenido_correo = $this->twig->parse('correo/cambio_clave.twig', $datos, true);
                    $this->correo->enviar($data['correo'], "Nueva contraseña en ".$datos['nombre_sitio'], $contenido_correo);

                    $this->_show_message($this->lang->line('auth_message_new_password_activated').' '.anchor('/usuario/login/', 'Login'));
                }
                else
                {
                    $this->_show_message($this->lang->line('auth_message_new_password_failed'));
                }
            }
            else 
            {
                // Try to activate user by password key (if not activated yet)
               // if ($this->config->item('email_activation', 'tank_auth')) 
               //  {
               //      $this->tank_auth->activate_user($user_id, $new_pass_key, FALSE);
               //  }

               //  if (!$this->tank_auth->can_reset_password($user_id, $new_pass_key)) 
               //  {
               //      $this->_show_message($this->lang->line('auth_message_new_password_failed'));
               //  } 
            }

            $this->twig->parse('usuario/reset_password.twig', $data);
        }

        function _send_email($type, $email, &$data)
        {
            $this->load->library('email');
            $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
            $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
            $this->email->to($email);
            $this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
            $this->email->message($this->load->view('usuario/email/'.$type.'-html', $data, TRUE));
            $this->email->set_alt_message($this->load->view('usuario/email/'.$type.'-txt', $data, TRUE));
            $this->email->send();
        }

        function _show_message($message)
        {
            $this->session->set_flashdata('message', $message);
            redirect('usuario/login');
        }

		function cerrar_sesion()
		{
			$this->session->sess_destroy();
			redirect('usuario/login');
		}
        
        //GUARDAR DIRECCIÓN DE COMPRA COMPRADOR 
        public function direccion_comprador()
        {
            if ($this->input->is_ajax_request()) 
            {
                $data = $this->acl->load_datos();

                $id_usuario = $data['usuario']['id_usuario'];
                $region = $this->input->post('region');
                $provincia = $this->input->post('provincia');
                $distrito = $this->input->post('distrito');
                $direccion = $this->input->post('direccion');
                $referencia = $this->input->post('referencia');
                $lote = $this->input->post('lote');
                $dpint = $this->input->post('dpint');
                $urbanizacion = $this->input->post('urbanizacion');
                $DNIcliente = $this->input->post('DNIcliente');
                $tlf = $this->input->post('tlf');
                
                $this->usuarioModel->usuario_direccion_compra($id_usuario,$region,$provincia,$distrito,$direccion,$referencia,$lote,$dpint,$urbanizacion,$tlf);
                 $this->usuarioModel->update_DNI($id_usuario,$DNIcliente);
            }
        }

        //Guardar Usuario subscribir
        public function subscripcion_correo()
        {
            if ($this->input->is_ajax_request()) 
            {
                $Pub_Correo = $this->input->post('Pub_Correo');
                $registrar = $this->usuarioModel->registrarUsuarioSubscrip($Pub_Correo);

                echo $registrar;
            }
        }
	}
?>