<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tienda extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

      		$this->load->model("Plan_model", "planModel");
      		$this->load->model("Usuario_model", "usuarioModel");

      		$this->load->helper(array('form', 'url', 'security'));
			$this->load->library(array('form_validation'));

			$this->load->library('tank_auth');
            $this->lang->load('tank_auth');
		}

		public function crear($Pla_IdPlan = false)
	    {
	    	// if ($this->session->userdata('logueado'))
	    	// {
	    	// 	redirect();
	    	// }
	    	// else
	    	// {
	    	// 	$data = $this->acl->load_datos();

		    //   	$Pla_IdPlan = (int)$Pla_IdPlan;

		    //   	$data["plan"] = $this->planModel->get_plan($Pla_IdPlan);

		    //   	$data['pagina']['titulo'] = 'Crear tienda';
      //           $data['pagina']['tipo'] = 'crear';
      //           $data['crear_tienda'] = true;
		    //   	$data['success'] = FALSE;

		    //   	if ($this->input->post('btnCrearTienda'))
	     //        {
	     //        	$data['success'] = TRUE;
	                
      //               $use_username = false;
      //               //$use_username = $this->config->item('use_username', 'tank_auth');
      //               $this->form_validation->set_rules('nombre', 'NOMBRE', 'trim|required');
      //               $this->form_validation->set_rules('correo', 'CORREO', 'trim|required|valid_email|is_unique[usuario.Usu_Correo]');
      //               $this->form_validation->set_rules('subdominio_tienda', 'SUBDOMINIO', 'trim|required|is_unique[tienda.Tie_Subdominio]');
      //               $this->form_validation->set_rules('clave', 'CLAVE', 'trim|required|min_length[3]|max_length[20]|alpha_dash');
      //               $this->form_validation->set_rules('ruc', 'DOCUMENTO', 'trim|required|min_length[8]|max_length[11]|numeric');
      //               $this->form_validation->set_rules('dni', 'DNI', 'trim|required');

      //               $this->form_validation->set_message("required", "El campo %s es requerido");
      //               $this->form_validation->set_message("is_unique", "El campo %s ya está en uso");
                    
      //               $data['errors'] = array();
      //               $email_activation = $this->config->item('email_activation', 'tank_auth');

      //               if($this->form_validation->run())
      //               {
      //                   $this->load->model("Persona_model", "personaModel");
      //                   $Per_Dni = $this->input->post('dni');
      //                   $Per_Nombre = $this->input->post('nombre');
      //                   $Per_Telefono = $this->input->post('tlf');
      //                   $Usu_Correo = $this->input->post('correo');
      //                   $Usu_Clave = $this->input->post('clave');
      //                   $Tie_ruc_dni = $this->input->post('ruc');
      //                   $Tie_Tipo = $this->input->post('tipo_negocio');
      //                   $Tie_Nombre = $this->input->post('nombre_tienda');
      //                   $Tie_RazonSocial = $this->input->post('razon_social');
      //                   $Tie_Subdominio = $this->input->post('subdominio_tienda');
      //                   $Tie_FechaInscripcion = $this->input->post('fecha_inscripcion');
      //                   $Codigo = $this->input->post('codigo');

      //                   //convertir fecha a formato
      //                   $fecha = explode("/", $Tie_FechaInscripcion);
      //                   $Tie_FechaInscripcion = $fecha[2].'-'.$fecha[1].'-'.$fecha[0];

      //                   $Pla_IdPlan = 2;
      //                   $Per_IdPersona = $this->personaModel->get_id_persona_x_dni($Per_Dni);

      //                   if (!is_null($data = $this->tank_auth->create_tienda('', $Per_IdPersona, $Per_Dni, $Per_Nombre, $Per_Telefono, $Usu_Correo, $Tie_ruc_dni, $Tie_Tipo, $Tie_Nombre, $Tie_RazonSocial, $Tie_Subdominio, $Tie_FechaInscripcion, $Pla_IdPlan, $Usu_Clave, $email_activation,$Codigo)))
      //                   {
      //                       $data['site_name'] = $this->config->item('website_name', 'tank_auth');

      //                       if($email_activation)
      //                       {
      //                           $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
      //                           $this->_send_email('activate', $Usu_Correo, $data);
      //                           unset($data['Usu_Clave']); 
      //                           $data['estado_registrado'] = TRUE;
      //                           $data['mensaje'] = $this->lang->line('auth_message_registration_completed_1');
      //                       }
      //                       else
      //                       {
      //                           $data['login_redes'] = TRUE;
      //                           $data['email'] = $Usu_Correo;

      //                           if ($this->config->item('email_account_details', 'tank_auth')) 
      //                           {   
      //                               // $this->_send_email('welcome', $Usu_Correo, $data);

      //                               $this->load->library('correo');

      //                               $datos['nombre_usuario'] = $Per_Nombre;
      //                               $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
      //                               $datos['correo'] = $Usu_Correo;
      //                               // $datos['clave'] = $Usu_Clave;

      //                               $contenido_correo = $this->twig->parse('correo/bienvenida.twig', $datos, true);

      //                               $this->correo->enviar($Usu_Correo, "Bienvenido(a) a ".$datos['nombre_sitio'], $contenido_correo);
      //                           }

      //                           unset($data['Usu_Clave']);
      //                       }

      //                       $addSub = $this->crear_subdominio($Tie_Subdominio);

      //                       if ($addSub)
      //                       {
      //                           $data["success"] = FALSE; 
      //                           $this->_login($Usu_Correo, $Usu_Clave, 0, 1, "tienda/enlace/".$Tie_Subdominio);
      //                            // header("Location: http:localhost/tienda/enlace/$Tie_Subdominio");
      //                       }
      //                       else
      //                       {
      //                           echo "Error al crear el subdominio"; exit;
      //                           // header("Location: http:localhost/tienda/crea");
      //                       }
      //                   }
      //                   else
      //                   {
      //                       $errors = $this->tank_auth->get_error_message();
      //                       foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
      //                   }
      //               }
	     //        }

		    //   	$this->twig->parse('tienda/crear.twig', $data);
	    	// }
	    }
        public function prueba_correo(){
            // $this->_send_email('welcome', $Usu_Correo, $data);

            $this->load->library('correo');
            $Usu_Correo = "gabrieljd94@gmail.com";
            $data['login_redes'] = TRUE;
            $data['email'] = $Usu_Correo;
            $datos['nombre_usuario'] = "Tienda de prueba";
            $datos['nombre_sitio'] = "Pormayor";
            $datos['correo'] = $Usu_Correo;
            // $datos['clave'] = $Usu_Clave;

            $contenido_correo = $this->twig->parse('correo/bienvenida.twig', $datos, true);

            $this->correo->enviar($Usu_Correo, "Bienvenido a ".$datos['nombre_sitio'], $contenido_correo);
        }

        public function crear2()
        {
            // $data = $this->acl->load_datos();

            // $data['pagina']['titulo'] = 'Crear tienda';

            // $data['success'] = FALSE;

            // if ($this->input->post('btnCrearTienda'))
            // {
            //     $data['success'] = TRUE;
            //     $data['crear_tienda'] = true;
                
            //     $this->form_validation->set_rules('nombre_tienda', 'NOMBRE_TIENDA', 'trim|required|is_unique[tienda.Tie_Nombre]');
            //     $this->form_validation->set_rules('subdominio_tienda', 'SUBDOMINIO', 'trim|required|is_unique[tienda.Tie_Subdominio]');
            //     $this->form_validation->set_rules('ruc', 'DOCUMENTO', 'trim|required|min_length[11]|max_length[11]|numeric|is_unique[tienda.Tie_ruc_dni]');
                
            //     $this->form_validation->set_message("required", "El campo %s es requerido");
            //     $this->form_validation->set_message("is_unique", "El campo %s ya está en uso");
                
            //     $data['errors'] = array();                

            //     if($this->form_validation->run())
            //     {
            //         $Tie_ruc_dni = $this->input->post('ruc');
            //         $Tie_Tipo = $this->input->post('tipo_negocio');
            //         $Tie_Nombre = $this->input->post('nombre_tienda');
            //         $Tie_RazonSocial = $this->input->post('razon_social');
            //         $Tie_Subdominio = $this->input->post('subdominio_tienda');
            //         $Pla_IdPlan = 2;

            //         $Tie_IdTienda = $this->tiendaModel->crear_tienda_comprador($Tie_ruc_dni, $Tie_Tipo, $Tie_Nombre, $Tie_RazonSocial, $Tie_Subdominio, $Pla_IdPlan, $data['usuario']['id_usuario']);

            //         if(is_null($Tie_IdTienda))
            //         {
            //             $errors = $this->tank_auth->get_error_message();
            //             foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
            //         }
            //         else
            //         {
            //             $addSub = $this->crear_subdominio($Tie_Subdominio);

            //             if($addSub == 1)
            //             {
            //                 //cambiar el rol y tienda en la sesion
            //                 $this->session->set_userdata(array('rol_usuario' => 2, 'tienda_usuario' => $Tie_IdTienda));
            //                 redirect('http://'.$Tie_Subdominio.'.'.$data['dominio'].'/usuario/tienda');
            //             }
            //         }
            //     }
            // }

            // $this->twig->parse('tienda/crear2.twig', $data);
            
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
                if($this->tank_auth->get_rol() == 1)
                {
                    redirect('admin/tiendas');
                }
                else if ($this->tank_auth->get_rol() == 2 or $this->tank_auth->get_rol() == 3)
                {
                    $tienda = $this->tiendaModel->get_tienda($this->tank_auth->get_tienda());
                    //redirect('http://'.$tienda->Tie_Subdominio.'.pormayor.pe');
                    redirect('http://'.$tienda->Tie_Subdominio.'.pormayor.pe/usuario/inventario/lProductos');
                }
                else if ($this->tank_auth->get_rol() == 5) 
                {
                    redirect('gestor/gestion');
                }else{
                    redirect('');
                }
            }
            else
            {
                $url = str_replace('_', '/', $url);
                redirect($url);
            }
        }
        
	    public function enlace($subdominio="")
	    {
	    	$data = $this->acl->load_datos();
            //print_r($data['usuario']);
            $this->load->model("Local_model", "localModel");
            $this->load->model("Producto_model", "productoModel");            
	    	$data['pagina']['titulo'] = 'Tienda creada exitosamente';
            $data['subdominio'] = $subdominio;
            $data['categoria'] = $this->productoModel->get_categoria();
            $data['departamento'] = $this->localModel->region();
            $data['galerias'] = $this->localModel->galerias();
	    	$this->twig->parse('tienda/enlace.twig', $data);
	    }

	    function _send_email($type, $email, &$data)
        {
            $this->load->library('email');
            $this->email->from($this->config->item('webmaster_emailwebmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
            $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
            $this->email->to($email);
            $this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
            $this->email->message($this->load->view('usuario/email/'.$type.'-html', $data, TRUE));
            $this->email->set_alt_message($this->load->view('usuario/email/'.$type.'-txt', $data, TRUE));
            $this->email->send();
        }

        public function subirImagenLogo($Tie_IdTienda)
        {
          sleep(3);
          $Tie_IdTienda = (int)$Tie_IdTienda;
          if($_FILES["files"]["name"] != '')
          {
           $output = [];
           $config["upload_path"] = 'img';
           $config["allowed_types"] = 'gif|jpg|png|jpeg';
           $config["file_name"] = 'logo_'.$Tie_IdTienda;
           $config["overwrite"] = TRUE;
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
           {
            $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
            $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
            $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
            $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
            $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
            
            if($this->upload->do_upload('file'))
            {           
            $data = $this->upload->data();
            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $data['full_path'];
            $config['maintain_ratio'] = TRUE;
            $config['width']     = 200;
            $config['height']   = 200;

            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();

            $SKU_Foto = $this->tiendaModel->addLogoFoto($Tie_IdTienda,$data["file_name"]);
            
            }else{
                $error = array('error' => $this->upload->display_errors());

                print_r($error);
            }
           }
          }
        }

        public function configuracion_tienda()
        {
            if ($this->input->is_ajax_request()) 
            {
                
                $this->load->model("Configuracion_model", "configuracionModel"); 

                $colorHex = $this->input->post('colorHex');
                $colorHex2 = $this->input->post('colorHex2');
                $Tie_IdTienda = $this->input->post('Tie_IdTienda');
                $dep = $this->input->post('dep');
                $cat = $this->input->post('cat');
                $gal = $this->input->post('gal');
                $imagenSlider = $this->input->post('imagenSlider');
                    $color = $this->configuracionModel->registrarColor($colorHex, $colorHex2, $Tie_IdTienda);
                    $tienda = $this->configuracionModel->confiTienda($dep, $cat, $Tie_IdTienda,$gal, $imagenSlider);
            }
        }

        function crear_subdominio($Tie_Subdominio)
        {
            $this->load->config('cpanel_api', TRUE);
            $cpanel = $this->load->library('Cpanel_Api');

            $dominio = $this->config->item('host', 'cpanel_api');
            $cpanelusr = $this->cpanel_api->user;
            $cpanelpass = $this->cpanel_api->auth;
            $xmlapi = new xmlapi($dominio);
            $xmlapi->set_port($this->cpanel_api->port);
            $xmlapi->password_auth($cpanelusr, $cpanelpass);
            $xmlapi->set_debug(1);
            $json = $xmlapi->set_output('json');
            $result = $xmlapi->api1_query($cpanelusr, 'SubDomain', 'addsubdomain', array($Tie_Subdominio, $dominio, 0, 0, '/public_html/tiendas'));
            $array = json_decode($result);

            // print_r($array);
            // exit();

            return $array->event->result;
        }     


        function reputacion($Tie_Subdominio = 0, $url_actual= 0)
	    {
            $data = $this->acl->load_datos();
            $data['calificacion'] = $this->tiendaModel->calificaciones($Tie_Subdominio);
            $data['subdominio'] = $Tie_Subdominio;
            $data['url_actual'] = str_replace('_', '/', $url_actual);
            $data['reputacion_volver'] = true;
            $data['pagina']['titulo'] = "Reputación de tienda";
            $data['pagina']['tipo'] = "principal";
            $data['pagina']['extrabtn'] = 'SI';
            if ($data['calificacion']) {
                $data['range'] = $this->tiendaModel->reputacion($data['calificacion'][0]->Tie_IdTienda);
                $data['ventas'] = $this->tiendaModel->ventas_concretadas($data['calificacion'][0]->Tie_IdTienda);
            }else{
                $data['ventas'] = 0;
            }

            $this->twig->parse('tienda/reputacion.twig', $data);
	    }

	    public function datos_sunat()
	    {
	    	if($this->input->is_ajax_request())
	    	{
	    		$numero_documento = $this->input->post('numero_documento');

	    		$datos = file_get_contents("http://datos.cocos.pe/test.php?numero_documento=$numero_documento");

	    		echo $datos;
	    	}
	    }
	}