<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Cliente extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Vendedor_model", "vendedorModel");
		}

		function registro()
		{
			$data = $this->acl->load_datos();
			if (isset($data['usuario']['rol']) and $data['usuario']['rol'] == 5) {
				$data['pag'] = "crear";
				$this->twig->parse('vendedor/login.twig', $data);
			}else{
				redirect ('');
			}
		}

		function pedido()
		{
			$data = $this->acl->load_datos();
			if (isset($data['usuario']['rol']) and $data['usuario']['rol'] == 5) {
			$this->load->model("Local_model", "localModel");
			$data['pag'] = "NUEVA VENTA";
		    $data['productos'] = $this->vendedorModel->get_productos_sku();
		    $data['region'] = $this->localModel->region();
			$this->twig->parse('ventas/nueva.twig', $data);
			}else{
				redirect ('');
			}
		}

		function listado()
		{
			$data = $this->acl->load_datos();
			$data['pag'] = "LISTADO DE PRODUCTOS";
		    $data['producto'] = $this->vendedorModel->listado_pagina();
			$this->twig->parse('paginas2.twig', $data);
		}		
	}
?>