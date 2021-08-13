<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Delivery extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Grupal_model", "grupalModel");
        }

		public function index()
		{
 			$data = $this->acl->load_datos();
       
	        $this->twig->parse('admin/listado_pedido.twig', $data);
		}
		
		public function crear()
		{
 			$data = $this->acl->load_datos();
       
	        $this->twig->parse('admin/crear_pedido.twig', $data);
		}
		

	}
?>