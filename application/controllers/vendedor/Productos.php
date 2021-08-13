<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Productos extends CI_Controller
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
 			$data['productos']=$this->productoModel->listado_productos("WHERE tie.Tie_IdTienda = 227");
 			$data['precios']=$this->productoModel->listado_productos_precios("WHERE tie.Tie_IdTienda = 227");

	        $this->twig->parse('vendedor/productos.twig', $data);
		}
		public function fotos($Pro_IdProducto)
		{
 			$data = $this->acl->load_datos();
 			$data['fotos']=$this->productoModel->fotos_productos($Pro_IdProducto);
       
	        $this->twig->parse('vendedor/fotos.twig', $data);
		}

		public function index2() {

        $this->load->library('pagination');
        $config['base_url'] = $base_url+"vendedor";
        $config['total_rows'] = $this->productoModel->getProCount();
        // $config['total_rows'] = $this->Search_model->getUserCount();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['message'] = '';
        $data['records'] = $this->Search_model->getUserPagintaion($config['per_page'], $page);
        $this->load->view('search_data', $data);
        
    }

	}
?>