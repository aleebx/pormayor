<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Reclamo extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Configuracion_model", "configuracionModel");
		}

		function index($frase = false)
		{
			$data = $this->acl->load_datos();
			$data['pagina']['titulo'] = 'Productos en Preventa - PorMayor.pe';
			$data['producto'] = $this->productoModel->productos_saldo2("WHERE pro.Pro_Preventa = 1");

			$this->twig->parse('preventa.twig', $data);
		}
			
	}
?>