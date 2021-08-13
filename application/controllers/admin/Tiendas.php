<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tiendas extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Usuario_model", "usuarioModel");
        }

		public function index($nropagina = FALSE)
		{
 			$data = $this->acl->load_datos("no","no","admin");
			$data['pagina']['titulo'] = 'Gestión de Tiendas';
			$data['pagina']['opcion']="tiendas";
 			$data['tiendas_gestor'] = $this->tiendaModel->get_tiendas_vista_admin();
 		    $data['cantidad_producto'] = $this->tiendaModel->get_producto_tienda_admin();
	        //$data['cantidad_ventas'] = $this->tiendaModel->get_ventas_tienda_admin();
	        $this->twig->parse('admin/tiendas/index.twig', $data);
		}

		public function detalle($Tie_IdTienda)
		{
			$Tie_IdTienda = (int)$Tie_IdTienda;
 			$data = $this->acl->load_datos("no","no","admin");
 			$data['funcion'] = "detalle";
	        $data['pagina']['titulo'] = 'Detalle de Tienda';
	        $data['tienda'] = $this->tiendaModel->get_tienda_x_id($Tie_IdTienda);
	        $data['cantidad_locales'] = $this->tiendaModel->get_cantidad_locales_x_tienda($Tie_IdTienda)->Cantidad;
	        $data['cantidad_usuarios'] = $this->usuarioModel->get_cantidad_usuario_x_tienda($Tie_IdTienda)->Cantidad;
	        $this->twig->parse('admin/tiendas/detalle.twig', $data);
		}

		public function estado_tienda()
		{
			$status=$this->input->post('status');
			$Tie_IdTienda=$this->input->post('id_tienda');
			if($status=='1') {$valor=2;} else {$valor=1;}
			$data['estatus_tienda'] = $this->tiendaModel->updaStatuTienda($Tie_IdTienda,$valor);
			if($data['estatus_tienda']==true) {
				echo 4;
			}
		}

		public function detalle_tienda($Tie_IdTienda) 
		{
			$data = $this->acl->load_datos("no","no","admin");
			$data['pagina']['titulo'] = 'Editar Tienda';
			$data['pagina']['opcion']="tiendas";
			$data['inf_tienda']=$this->tiendaModel->detalle_tienda_det($Tie_IdTienda);
			$data['region_tienda']=$this->tiendaModel->region_tienda();
			$this->twig->parse('admin/tiendas/detalle_tienda.twig', $data);
		}

		public function detalle_tienda_producto($Tie_IdTienda) 
		{
			$data = $this->acl->load_datos();
	      	$data['pagina']['titulo'] = 'Gestión de Productos por Tienda';
	      	$data['pagina']['opcion']="tiendas";
	    	$data['inf_tienda']=$this->tiendaModel->detalle_tienda_det($Tie_IdTienda);
	      	$data['producto'] = $this->tiendaModel->productos2("WHERE prt.Tie_IdTienda=".$Tie_IdTienda." AND pro.Pro_Estado!=5 GROUP BY pro.Pro_IdProducto");
	      	$this->twig->parse('admin/tiendas/detalle_tienda_producto.twig', $data);
	    }

	    public function getselectProvincia($selectRegion)
		{
			$data['provincia_tienda']=$this->tiendaModel->provincia_tienda($selectRegion);
			print_r(json_encode($data));
		}

		public function getselectDistrito($selectProvincia)
		{
			$data['distrito_tienda']=$this->tiendaModel->distrito_tienda($selectProvincia);
			print_r(json_encode($data));
		}

		public function getEditar_Tienda() 
		{
			$DNIORUC=$this->input->post('DNIORUC');
			$idtienda=$this->input->post('idtienda');
			$idpersona=$this->input->post('idpersona');
			$nombreTienda=$this->input->post('nombreTienda');
			$razonSocial=$this->input->post('razonSocial');
			$tlf=$this->input->post('tlf');
			$correo=$this->input->post('correo');
			$selectRegion=$this->input->post('selectRegion');
			$selectProvincia=$this->input->post('selectProvincia');
			$selectDistritos=$this->input->post('selectDistritos');
			$direccionComprador=$this->input->post('direccionComprador');

			$data['distrito_tienda']=$this->tiendaModel->getEditar_Tienda($DNIORUC,$idtienda,$idpersona,$nombreTienda,$razonSocial,$tlf,$correo,$selectRegion,$selectProvincia,$selectDistritos,$direccionComprador);

			return $data['distrito_tienda'];

		}

		public function eliminarPro()
		{
		 	$data = $this->acl->load_datos("no","no","admin");
			if ($this->input->is_ajax_request()) {
				$Pro_IdProducto = $this->input->post('Pro_IdProducto');
				$registro = $this->tiendaModel->eliminarProducto($Pro_IdProducto);
	      		if($registro){
	      			echo 1;
	      		}else{
	      			echo 0;
	      		}
			}
		}

		public function desactivar_producto()
		{
	    	$data = $this->acl->load_datos("no","no","admin");
	    	if($this->input->is_ajax_request()){
				$Pro_IdProducto= $this->input->post('Pro_IdProducto');		
				$this->tiendaModel->productoDesactivar($Pro_IdProducto);
				echo 4;
	      	}else{
		    	show_404();
		    }	
	    }

	    public function activar_producto(){
	    	$data = $this->acl->load_datos("no","no","admin");
	    	if($this->input->is_ajax_request()){
	    		
				$Pro_IdProducto= $this->input->post('Pro_IdProducto');		
				$this->tiendaModel->productoActivar($Pro_IdProducto);

				echo 1;
	      	}else{
		    	show_404();
		    }	
	    }

		public function locales($Tie_IdTienda)
		{
			$Tie_IdTienda = (int)$Tie_IdTienda;
 			$data = $this->acl->load_datos("no","no","admin");
 			$data['funcion'] = "locales";
	        $data['pagina']['titulo'] = 'Detalle de Tienda';
	        $data['tienda'] = $this->tiendaModel->get_tienda_x_id($Tie_IdTienda);
	        $data['cantidad_locales'] = $this->tiendaModel->get_cantidad_locales_x_tienda($Tie_IdTienda)->Cantidad;
	        $data['cantidad_usuarios'] = $this->usuarioModel->get_cantidad_usuario_x_tienda($Tie_IdTienda)->Cantidad;
	        $data['locales'] = $this->tiendaModel->get_locales_x_tienda($Tie_IdTienda);
	        $this->twig->parse('admin/tiendas/locales.twig', $data);
		}

		public function tiendas_gestor($Usu_IdUsuario)
		{
			$data = $this->acl->load_datos("no","no","admin");
	   		$data['tiendas_gestor'] = $this->tiendaModel->get_tiendas_gestor($Usu_IdUsuario);
	       	$data['cantidad_producto'] = $this->tiendaModel->get_producto_tienda($Usu_IdUsuario);
		    $data['cantidad_ventas'] = $this->tiendaModel->get_ventas_tienda($Usu_IdUsuario);
	       	$this->twig->parse('gc/index.twig', $data);
	 	}


		public function productos_top()
		{
			$data = $this->acl->load_datos("no","no","admin");
	        $data['productos_top'] = $this->tiendaModel->productos_top();
	       	$this->twig->parse('admin/productostop.twig', $data);
		}


		public function usuarios($Tie_IdTienda)
		{
			$Tie_IdTienda = (int)$Tie_IdTienda;
 			$data = $this->acl->load_datos("no","no","admin");
 			$data['funcion'] = "usuarios";
	        $data['pagina']['titulo'] = 'Detalle de Tienda';
	        $data['tienda'] = $this->tiendaModel->get_tienda_x_id($Tie_IdTienda);
	        $data['cantidad_locales'] = $this->tiendaModel->get_cantidad_locales_x_tienda($Tie_IdTienda)->Cantidad;
	        $data['cantidad_usuarios'] = $this->usuarioModel->get_cantidad_usuario_x_tienda($Tie_IdTienda)->Cantidad;
	        $data['usuarios'] = $this->usuarioModel->get_usuario_x_tienda($Tie_IdTienda);
	        $this->twig->parse('admin/tiendas/usuarios.twig', $data);
		}

		public function buscar_tiendas()
	    {
	    	if ($this->input->is_ajax_request()) 
	      	{
	      		$data = $this->acl->load_datos("no","no",false);
	      		$txtBuscar = $this->input->post('txtBuscar');
	      		$data['tiendas'] = $this->tiendaModel->get_tiendas_adm("WHERE Tie_Nombre like '%".$txtBuscar."%'");
				$this->twig->parse('admin/tiendas/ajax/lista_tiendas.twig', $data);
	      	}
	    } 

		public function ocultarTienda()
	    {
	    	if ($this->input->is_ajax_request()) 
	      	{
	      		$data = $this->acl->load_datos("no","no",false);
	      	 	$Tie_IdTienda = $this->input->post('Tie_IdTienda');
	      		$ocultarTienda = $this->tiendaModel->ocultarTienda($Tie_IdTienda);
	      		if ($ocultarTienda) {
	      			echo 1;
	      		}else{
	      			echo 2;
	      		}
	      	}
	    }  
	}
?>