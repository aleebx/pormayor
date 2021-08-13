<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Delivery extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Local_model", "localModel");
			$this->load->model("Usuario_model", "usuarioModel");
			$this->load->model("Tienda_model", "tiendaModel");
        }

		public function index()
		{
 			$data = $this->acl->load_datos();
       
	        $this->twig->parse('vendedor/listado.twig', $data);
		}
		
		public function crear()
		{
 			$data = $this->acl->load_datos();
 			$data['region'] = $this->localModel->region();
 			 $data['productos']=$this->productoModel->productos_ultimos("WHERE tie.Tie_Estado = 2 AND tie.Tie_IdTienda = 227");
       
	        $this->twig->parse('vendedor/crear.twig', $data);
		}
		
		public function productos()
		{
 			$data = $this->acl->load_datos();
 			$data['productos']=$this->productoModel->productos_ultimos("WHERE tie.Tie_Estado = 2 AND tie.Tie_IdTienda = 227");
       
	        $this->twig->parse('vendedor/productos.twig', $data);
		}

		public function guardar()
		{
 			if($this->input->is_ajax_request())
			{				
				$data = $this->acl->load_datos();
			}
			else
			{
				show_404();
			}

		}

		public function addLocal()
		{
		  $data = $this->acl->load_datos();
	      $data['pagina']['titulo'] = 'Agregar Local';
	      // $data['local'] = $this->tiendaModel->get_local_info(217);
	      $this->twig->parse('vendedor/addLocal.twig', $data);
		}
		

	}
?>