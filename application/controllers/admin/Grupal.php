<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Grupal extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Grupal_model", "grupalModel");
        }

		public function index()
		{
 			$data = $this->acl->load_datos("no", "no", "admin");
 			$data['pagina']['opcion']="grupal";
	        $data['grupo'] = $this->grupalModel->get_grupal();	        
	        $this->twig->parse('admin/grupal.twig', $data);
		}
		

	}
?>