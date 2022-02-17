<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Venta extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Configuracion_model", "configuracionModel");
		}

		function nueva()
		{
			$data = $this->acl->load_datos();
			$data['pagina']['titulo'] = 'NUEVA VENTA';

			$this->twig->parse('ventas/nueva.twig', $data);
		}
			
	}
?>