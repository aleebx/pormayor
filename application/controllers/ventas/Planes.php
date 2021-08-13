<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Planes extends CI_Controller
	{
		function __construct()
		{
		  parent::__construct();
	      $this->load->model("Plan_model", "planModel");
	      $this->load->model("Usuario_model", "usuarioModel");
	      $this->load->model("Cotizacion_model", "cotizacionModel");
	      $this->load->model("Tienda_model", "tiendaModel");
	      $this->load->model("Venta_model", "ventaModel");
		}

		public function index()
	    {    	
	    	$data = $this->acl->load_datos("no","ventas");

	    	$data['planes'] = $this->planModel->get_plan_tiendas();

	        $this->twig->parse('ventas/planes.twig', $data);
	      
	    }	
	}
?>