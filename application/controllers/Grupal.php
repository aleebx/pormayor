<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Grupal extends CI_Controller
	{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Configuracion_model", "configuracionModel");
		$this->load->model("Grupal_model", "grupalModel");
        $this->load->helper(array('form', 'url', 'security'));
		$this->load->library(array('form_validation'));
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
	}

	function index()
	{
		header("Location: https://pormayor.pe");
		// $data = $this->acl->load_datos();
  //     	$data['productos_grupal'] = $this->grupalModel->get_grupos_total();
  //     	$data['producto_count'] = $this->grupalModel->get_count_gruperos();
  //     	$data['usuarios_grupo'] = $this->grupalModel->get_gruperos();
  //     	foreach ($data['productos_grupal'] as $valor) {
  //       	$valor->url =  "pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
  //     	}
  //     	if(isset($data['usuario']['logueado']))
  //     	{
  //       $data['miproductosgrupal'] = $this->grupalModel->get_misgrupos($data['usuario']['id_usuario']);
	 //        $data['noticoments'] = false;
	 //        $data['noticotiza'] = false;
  //     	}
  //     $this->twig->parse('grupal.twig', $data);
	}

	function update_estado()
	{
		$productos = $this->grupalModel->get_grupos_total();
		$hoy = date('Y-m-d H:i:s');
		foreach ($productos as $key => $value) {
			if ($hoy >= $value->Fecha_Fin and $value->Gru_Estado == 0) {
				$this->grupalModel->update_estado($value->Gru_IdGrupo);
				$data['gCompleto'] = $this->grupalModel->mail_gruperos_update_precio($value->Gru_IdGrupo);
				foreach ($data['gCompleto'] as $key){
					$this->correoGrupoCompleto($key);
				}
			}
		}

	}

	function mail()
	{
		$data = $this->acl->load_datos();
		$data['inf'] = $this->grupalModel->usuario_grupo(267,1520);
		$data['nombre_usuario'] = "aLEXIS BEQUIZAs";

		// $this->load->library('correo');
       	// $datos['inf'] = $datosusu;

        // $contenido_correo = $this->twig->parse('mail.twig', $data, true);

        // $this->correo->enviar($data['inf']->Usu_Correo, $data['inf']->Per_Nombre.", tu grupo ha bajado el precio", $contenido_correo);

		$this->twig->parse('mail.twig', $data);
	}

	function unirse()
	{
		$data = $this->acl->load_datos();
		if ($this->input->is_ajax_request()) {
			$Pro_IdProducto = (int)$this->input->post('Pro_IdProducto');
			$Usu_IdUsuario = (int)$this->input->post('Usu_IdUsuario');
			$Sku_IdSku = (int)$this->input->post('Sku_IdSku');
			$variacion = (string)$this->input->post('variacion');
			$unidad = (string)$this->input->post('unidad');
			$color = (string)$this->input->post('color');
			$tipovariacion = (string)$this->input->post('tipovariacion');
			$idtienda = (int)$this->input->post('idtienda');
			$documento = (string)$this->input->post('documento');

			$Gru_IdGrupo = $this->grupalModel->registrarGrupo($Pro_IdProducto,$Usu_IdUsuario,$Sku_IdSku,$variacion,$unidad,$color,$tipovariacion,$idtienda,$documento);
			$data['usu_info'] = $this->grupalModel->usuario_grupo($data['usuario']['id_usuario'],$Pro_IdProducto);
			if ($Gru_IdGrupo == "nuevo") {
				$this->correoUnidoGrupo($data['usu_info']);
				$this->correoUnidoGrupoAdmin($data['usu_info']);
				echo 1;
			}else if ($Gru_IdGrupo == "mismo"){
				$this->correoUnidoGrupo($data['usu_info']);
				$this->correoUnidoGrupoAdmin($data['usu_info']);
				echo 1;
			}else{
				$this->correoUnidoGrupo($data['usu_info']);
				$this->correoUnidoGrupoAdmin($data['usu_info']);
				$data['gCompleto'] = $this->grupalModel->mail_gruperos_update_precio($Gru_IdGrupo);
				foreach ($data['gCompleto'] as $key){
					$this->correo_update_precio($key);
				}
				echo 1;
			}
		}
	}

	function abandonar()
	{
		$data = $this->acl->load_datos();
		if ($this->input->is_ajax_request()) {
			$Grp_IdGrupero = (int)$this->input->post('Grp_IdGrupero');
			$Pro_IdProducto = (int)$this->input->post('Pro_IdProducto');
			$Gru_IdGrupo = (int)$this->input->post('Gru_IdGrupo');

			$registro = $this->grupalModel->abandonarGrupo($Grp_IdGrupero,$Pro_IdProducto,$Gru_IdGrupo);

			if ($registro) {
				echo 1;
			}else{
				echo 0;
			}
		}
	}

	function migrupo($Pro_IdProducto = false)
	{
		header("Location: https://pormayor.pe");
		// $data = $this->acl->load_datos();
		// $data['pagina']['titulo'] = 'PorMayor.pe – Mi Grupo '.$Pro_IdProducto;
		// $data['url'] = 	$Pro_IdProducto;
		// $data['producto'] = $this->productoModel->productos_dp2("WHERE pro.Pro_IdProducto = '".$Pro_IdProducto."'");
		// if(isset($data['usuario']['logueado'])){
		// 	$data['migrupo'] = $this->grupalModel->usuario_grupo($data['usuario']['id_usuario'],$Pro_IdProducto);
		// }else{
	 //      	header("Location: https://pormayor.pe/usuario/login");			
		// }
		// if (empty($data['producto'])) {
	 //      	header("Location: https://pormayor.pe");
	 //    }else{
		// 	$data['inf_grupo'] = $this->grupalModel->get_grupo($Pro_IdProducto);
	 //      	$data['fotos'] = $this->productoModel->get_fotos_producto($Pro_IdProducto);
	 //      	$data['SKU'] = $this->productoModel->get_sku_producto($Pro_IdProducto);
		//     $data['tallas'] = $this->productoModel->get_sku_producto_vao($Pro_IdProducto);
	 //      	$data['colores'] = $this->configuracionModel->get_coloresProducto2($Pro_IdProducto);
	 //      	$data['precios'] = $this->productoModel->precios_producto($Pro_IdProducto);
	 //      	$data['vista'] = $this->productoModel->registroVista($Pro_IdProducto);
	 //      	$data['ventas_pro'] = $this->productoModel->ventas_pro($Pro_IdProducto);
		// 	if (empty($data['SKU'])) {
  //     			$data['nomvar'] =  " ";
  //     		}else{
  //     			$data['nomvar'] =  $data['SKU'][0]->Var_Nombre;	
  //     		}		      	
		// 	$data['SKUB'] = $this->productoModel->get_skuB($Pro_IdProducto);
		// 	$this->twig->parse('grupal/migrupo.twig', $data);
	 //    }
	}

	function nuevo($Pro_IdProducto = false, $flagLogin ='')
	{
		// $data = $this->acl->load_datos();
		// $data['pagina']['titulo'] = 'PorMayor.pe – Crear compra grupal';
		// $data['pagina']['extrabtn'] = 'SI';
		// $data['url'] = 	$Pro_IdProducto;
		// $Pro_IdProducto = $Pro_IdProducto;
		// if (!isset($Pro_IdProducto)) {
		// 	header("Location: https://pormayor.pe");
		// }

		// $Producto = explode("-", $Pro_IdProducto);
		// $Pro_IdProducto = (int)$Producto[1];
		
		// $url = "grupal/nuevo/pormayor-".$Pro_IdProducto;

		// if ($flagLogin != 0) {
	 //  		$data['flag_login'] = 1;
	  		
	 //  	}
	 //  	if (!$this->tank_auth->is_logged_in())
  //       {
  //           $data['success'] = FALSE;
  //           $data['errors'] = array();

  //           if($this->input->post('btnIngresar'))
  //           {
  //               $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
  //               $this->form_validation->set_rules('clave', 'Clave', 'trim|required');

  //               $this->form_validation->set_message("required", "El campo %s es requerido");
  //               $this->form_validation->set_message("is_unique", "Error nuevo");
  //               if($this->form_validation->run())
  //               {
  //                   $this->_login($this->form_validation->set_value('correo'), $this->form_validation->set_value('clave'), 0, true,$url);
  //                   $errors = $this->tank_auth->get_error_message();
  //                   foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
  //               }
  //           }
  //           if($this->input->post('btnRegistrarse'))
  //           {
  //               $use_username = false;
  //               if ($use_username)
  //               {
  //                   $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|min_length[4]|max_length[10]|alpha_dash');
  //               }

  //               $this->form_validation->set_rules('nombre', 'NOMBRE', 'trim|required');
  //               $this->form_validation->set_rules('correo', 'CORREO', 'trim|required|valid_email|is_unique[usuario.Usu_Correo]');
  //               $this->form_validation->set_rules('clave', 'CLAVE', 'trim|required|min_length[3]|max_length[20]|alpha_dash');
  //               $this->form_validation->set_rules('dni', 'DNI', 'trim|required');
  //               $this->form_validation->set_rules('celular', 'CELULAR', 'trim|required');
  //               $this->form_validation->set_rules('publicidad_valor', 'PUBLI', 'trim');
  //               $this->form_validation->set_message("is_unique", "Error");
  //               $data['errors'] = array();
  //               $email_activation = $this->config->item('email_activation', 'tank_auth');
  //               if($this->form_validation->run())
  //               {
  //                   $this->load->model("Persona_model", "personaModel");
  //                   $Per_Dni = $this->form_validation->set_value('dni');
  //                   $Per_Nombre = $this->form_validation->set_value('nombre');
  //                   $Usu_Correo = $this->form_validation->set_value('correo');
  //                   $Usu_Clave = $this->form_validation->set_value('clave');
  //                   $Per_Telefono = $this->form_validation->set_value('celular');
  //                   $Usu_Flag_Publicidad = $this->form_validation->set_value('publicidad_valor');
  //                   $Per_IdPersona = $this->personaModel->get_id_persona_x_dni($Per_Dni);

  //                   if (!is_null($data = $this->tank_auth->create_comprador('', $Per_IdPersona, $Per_Dni, $Per_Nombre, $Usu_Correo,$Per_Telefono, $Usu_Clave, $email_activation, "", $Usu_Flag_Publicidad)))
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
  //                               $this->load->library('correo');

  //                               $datos['nombre_usuario'] = $Per_Nombre;
  //                               $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
  //                               $datos['correo'] = $Usu_Correo;
  //                               $datos['clave'] = $Usu_Clave;

  //                               $contenido_correo = $this->twig->parse('correo/bienvenida_comprador.twig', $datos, true);

  //                               $this->correo->enviar($Usu_Correo, "Bienvenido(a) a ".$datos['nombre_sitio'], $contenido_correo);
  //                           }
  //                           unset($data['Usu_Clave']);
  //                       }

  //                       $this->_login($Usu_Correo, $Usu_Clave, 0, 1, "grupal/nuevo/pormayor-".$Pro_IdProducto);
  //                   }
  //                   else
  //                   {
  //                       $errors = $this->tank_auth->get_error_message();
  //                       foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
  //                   }
  //               }
  //               else
  //               {
  //                   $data["success"] = TRUE;
  //               }
  //           }

  //       }

		// $data['commentsNot'] = true;
		// $data['producto'] = $this->productoModel->productos_dp2("WHERE pro.Pro_IdProducto = '".$Pro_IdProducto."'");
		// $data['inf_grupo'] = $this->grupalModel->get_grupo($Pro_IdProducto);
		//  if(isset($data['usuario']['logueado']))  {
		// // print_r($data['inf_grupo']);
		// $unido = $this->grupalModel->get_grupero($data['usuario']['id_usuario'],$Pro_IdProducto);
		// }
		// if (isset($unido)) {
		// 	$data['actComprar'] = true;
		// }

		// if (empty($data['producto'])) {
	 //      	header("Location: https://pormayor.pe");
	 //    }else{
		// 	$data['vista'] = $this->productoModel->registroVista($Pro_IdProducto);
	 //      	$data['fotos'] = $this->productoModel->get_fotos_producto($Pro_IdProducto);
	 //      	$data['SKU'] = $this->productoModel->get_sku_producto($Pro_IdProducto);
		//     $data['tallas'] = $this->productoModel->get_sku_producto_vao($Pro_IdProducto);
	 //      	$data['colores'] = $this->configuracionModel->get_coloresProducto2($Pro_IdProducto);
	 //      	$data['precios'] = $this->productoModel->precios_producto($Pro_IdProducto);
	 //      	$data['ventas_pro'] = $this->productoModel->ventas_pro($Pro_IdProducto);
		// 	if (empty($data['SKU'])) {
	 //      		$data['nomvar'] =  " ";
	 //      	}else{
	 //      		$data['nomvar'] =  $data['SKU'][0]->Var_Nombre;	
	 //      	}		      	
		//     $data['SKUB'] = $this->productoModel->get_skuB($Pro_IdProducto);
		// 	$this->twig->parse('grupal/nuevo.twig', $data);
	 //    }
		header("Location: https://pormayor.pe");
	}

	function _login($correo, $clave, $remember, $redirect=1, $url)
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

    function _redirigir_login($url)
    {
        redirect($url);
    }


	public function correoUnidoGrupo($datosusu)
	{
		$this->load->library('correo');
       	$datos['inf'] = $datosusu;

       	// $correo = "bequizalexis@gmail.com";

        $contenido_correo = $this->twig->parse('correo/unir_grupo.twig', $datos, true);

        $this->correo->enviar($datosusu->Usu_Correo, $datosusu->Per_Nombre.", te haz unido a un GRUPO DE COMPRA", $contenido_correo);
	}

	public function correoGrupoCompleto($datosusu)
	{
		$this->load->library('correo');
       	$datos['inf'] = $datosusu;

        $contenido_correo = $this->twig->parse('correo/grupo_completo.twig', $datos, true);

        $this->correo->enviar($datosusu->Usu_Correo, $datosusu->Per_Nombre.", tu grupo se ha COMPLETADO", $contenido_correo);
	}

	public function correo_update_precio($datosusu)
	{
		$this->load->library('correo');
       	$datos['inf'] = $datosusu;

        $contenido_correo = $this->twig->parse('correo/update_precio.twig', $datos, true);

        $this->correo->enviar($datosusu->Usu_Correo, $datosusu->Per_Nombre.", tu grupo ha bajado el precio", $contenido_correo);
	}

	public function correoUnidoGrupoAdmin($datosusu)
	{
		$this->load->library('correo');
       	$datos['inf'] = $datosusu;

       	$correo = "alexis.bequiz@pormayor.pe";

        $contenido_correo = $this->twig->parse('correo/unir_grupo.twig', $datos, true);

        $this->correo->enviar($correo, "Te haz unido a un Grupo de Compra ".$datosusu->Per_Nombre, $contenido_correo);
	}

	public function buildSlugValue($string){
      $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
    );

    // -- Remove duplicated spaces
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
    $string= str_replace(',', '', $string);
    $string= str_replace('.', '', $string);

    // -- Returns the slug
    return strtolower(strtr($string, $table));
    }

}
?>