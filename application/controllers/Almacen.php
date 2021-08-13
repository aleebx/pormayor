<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Almacen extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Almacen_model", "almacenModel");
		}

		function listado()
		{
			$data = $this->acl->load_datos();
			if ($data) {
			$data['productos'] = $this->almacenModel->productos();
			// print_r($data);
				$this->twig->parse('almacen/listado.twig', $data);
			}else{
				redirect ('');
			}
		}
	}
?>