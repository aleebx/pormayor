<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Lg extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Configuracion_model", "configuracionModel");
			$this->load->model("Grupal_model", "grupalModel");
	        $this->load->helper(array('form', 'url', 'security'));
			$this->load->library(array('form_validation'));
	        $this->load->library('tank_auth');
	        $this->lang->load('tank_auth');
		}

		function index()
		{
			$data = $this->acl->load_datos();
			$data['pagina']['titulo'] = 'PorMayor.pe – Terminos legales';
			// $data['legales'] = true;
			// $data['pagina']['extrabtn'] = 'SI';
			// $data['commentsNot'] = true;

			$this->twig->parse('legal.twig', $data);
		}
	}
?>