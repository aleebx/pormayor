<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Index extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Producto_model", "productoModel");
			$this->load->model("Tienda_model", "tiendaModel");
			$this->load->model("Configuracion_model", "configuracionModel");
			$this->load->model("Local_model", "localModel");
			$this->load->model("Cotizacion_model", "cotizacionModel");
			$this->load->model("Usuario_model", "usuariomodel");
        }

		public function index()
		{
 			$data = $this->acl->load_datos("no", "no", "comprador");
	        $data['pagina']['titulo'] = 'Mis Pedidos';
	        $this->twig->parse('comprador/index.twig', $data);
		}

		public function pedidos() 
		{
 			$data = $this->acl->load_datos("no", "no", "comprador");
 			$data['pagina']['titulo'] = 'Mis pedidos';
	        // print_r($data);
	        $data['pedidos'] = $this->cotizacionModel->get_pedidos_usuario($data['usuario']['id_usuario']);
	        $data['dpedidos'] = $this->cotizacionModel->get_pedidos_usuario_detalle($data['usuario']['id_usuario']);
	        //print_r($data['pedidos']);
	        $data['cotizacion'] = $this->cotizacionModel->get_cotizacion_usuario($data['usuario']['id_usuario']);
	        //print_r($data['cotizacion']);
	        $this->twig->parse('comprador/pedidos.twig', $data);
		}

		public function favoritos() 
		{
 			$data = $this->acl->load_datos("no", "no", "comprador");
 			$data['pagina']['titulo'] = 'Productos Favoritos';

 			$data['productos'] = $this->productoModel->productos_favoritos_x_usuario($data['usuario']['id_usuario']);

 			$this->twig->parse('comprador/favoritos.twig', $data);
		}

		public function preferencias()
		{
	       	$data = $this->acl->load_datos("no", "no", "comprador");

	       	$this->load->model("Preferencia_model", "preferenciaModel");
	       	$verificar_preferencia = $this->preferenciaModel->verificar_preferencia_x_usuario($data['usuario']['id_usuario']);
			$data['vista_carrito2'] = false;
	      	$data['vista_carrito_compra'] = false;
			$data['usu']= $this->preferenciaModel->data_usuario($data['usuario']['id_usuario']);
            if($verificar_preferencia->a)
            {
                redirect('');
            }
            else
            {
            	$data['pagina']['titulo'] = "Preferencias";		        
		       	$data['categorias2'] = $this->productoModel->get_Categoria();
		       	$this->twig->parse('comprador/preferencias.twig', $data);            	
            }
		}
		
		
		public function dCotizacion($Cot_IdCotizacion)
		{
 			$Cot_IdCotizacion = (int)$Cot_IdCotizacion;
 			$data = $this->acl->load_datos("no", "no", "comprador");
	        $data['pagina']['titulo'] = 'Cotización';

	        $data['Cot_IdCotizacion'] = $Cot_IdCotizacion;
	        $data['dcotizacion'] = $this->cotizacionModel->get_dcotizacion($Cot_IdCotizacion);
	        $data['infotienda'] = $this->tiendaModel->get_info_persona_tienda_simple($data['dcotizacion'][0]->Tie_IdTienda);
	       // print_r($data['infotienda']);
	        $data['datoscomprador'] = $this->usuariomodel->get_usuario($data['dcotizacion'][0]->Usu_IdUsuario);
	        //print_r($data['datoscomprador']);
	        if ($data['dcotizacion'][0]->Usu_IdUsuario == $data['usuario']['id_usuario']){
		        if($data['dcotizacion'][0]->Cot_Estado == 1)
		        {
		        	$this->twig->parse('comprador/dCotizacion.twig', $data);
		        }
		        else
		        {
		        	$cotizacion = $this->cotizacionModel->get_estado_cotizacion_venta($Cot_IdCotizacion);

		        	redirect('comprador/compra/detalle/'.$cotizacion->Ven_IdVenta);
		        }
	    	}else{
	    		redirect('https://pormayor.pe');
	    	}
		}

		public function respuesta_comentario()
		{
 			$data = $this->acl->load_datos("no", "no", true);
	        $data['pagina']['titulo'] = 'Respuestas';
	        $data['respuesta_comentario'] = $this->cotizacionModel->get_comentarios_usuario($data['usuario']['id_usuario']);
	        $data['producto_img'] = $this->cotizacionModel->get_comentarios_usuario_img($data['usuario']['id_usuario']);
	        $this->twig->parse('comprador/rc.twig', $data);
		}

		public function ajax_guardar_preferencias()
		{
			if ($this->input->is_ajax_request()) 
	      	{
	      		$data = $this->acl->load_datos("no", "no", "comprador");
	      		
	      		$string_preferencias = $this->input->post('string_preferencias');

	      		$this->load->model("Preferencia_model", "preferenciaModel");

	      		$registro = $this->preferenciaModel->registrar_preferencia($data['usuario']['id_usuario'], $string_preferencias);

	      		echo $registro;
	 		}
	 	}

		public function ajax_update_noti()
	    {
	      if ($this->input->is_ajax_request())
	      {
	        $data = $this->acl->load_datos("no", "no", "comprador");
	        $operacion = $this->input->post('operacion');
	        
	        if($operacion == 'comentarios'){
	        	$respuestas = $this->input->post('respuestas');
	           	$this->cotizacionModel->update_comments_usuario_noti($respuestas);
	        }else if($operacion == 'cotizaciones'){
	        	$cotizaciones = $this->input->post('cotizaciones');
	           	$this->cotizacionModel->update_cotizacion_usuario_noti($cotizaciones);
	        }
	      }
	      else
	      {
	        show_404();
	      }
	    }
	}
?>