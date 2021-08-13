<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Ventas extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Usuario_model","usuarioModel");
			$this->load->model("Compradores_model","compradoresModel");
			$this->load->model("Configuracion_model","configuracionModel");
        }

		public function index()
		{
			$data=$this->acl->load_datos("no","no","admin");
			$data['pagina']['opcion']="ventas";
	        $data['pagina']['titulo']='Registrar Venta';
	        $data['region_tienda']=$this->tiendaModel->region_tienda();
	       	$data['productos']=$this->compradoresModel->get_productos_sku();

	        $this->twig->parse('admin/ventas/index.twig',$data);
		}

		public function getBuscarCompradores($dni)
		{
			$data['compradores']=$this->compradoresModel->getCompradoresDNI($dni);
			echo json_encode($data);
		}

		public function getVariaciones($Pro_IdProducto)
		{
			$data['sku'] = $this->productoModel->get_sku_contraentrega($Pro_IdProducto);
			echo json_encode($data);
		}

		public function pago_contraentrega() 
		{
	    	if($this->input->is_ajax_request()) {
							
				$COD = 'COD';
				$tienda_usuario = '227';
				$id_vendedor = '227';
				$ruc = $this->input->post('ruc');
				$email = $this->input->post('email');
				$nombre = $this->input->post('nombre');
				$telefono = $this->input->post('telefono');
				$idUsuario = $this->input->post('idUsuario');
				$idPersona = $this->input->post('idPersona');
				$direccion = $this->input->post('direccion');
				$precioTotal = $this->input->post('precioTotal');
				$precioEnvio = $this->input->post('precioEnvio');
				$precioPagar = $this->input->post('precioPagar');
				$arrayCompra = $this->input->post('arrayCompra');
				$selectRegion = $this->input->post('selectRegion');
				$selectProvincia = $this->input->post('selectProvincia');
				$selectDistritos = $this->input->post('selectDistritos');

				$Pac_IdPago_Compra = $this->compradoresModel->registrarAcuerdo_externo($ruc,$email,$nombre,$telefono,$idPersona,$idUsuario,$direccion,$selectRegion,$selectProvincia,$selectDistritos,$precioTotal,$precioEnvio,$precioPagar,$arrayCompra,$tienda_usuario);

				if($Pac_IdPago_Compra) {
						echo $Pac_IdPago_Compra;
				}
		    }
	    }

	}
?>