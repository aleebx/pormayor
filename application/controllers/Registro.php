<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Registro extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Usuario_model", "usuarioModel");
		}

		function redes()
		{
            $data = $this->acl->load_datos();
            if (isset($data['usuario']['logueado'])) {
            	// header( Location:'http://pormayor.pe');
            }            
            $this->twig->parse('redes.twig', $data);
        }

		function listado_redes()
		{
            $data = $this->acl->load_datos();
            if (isset($data['usuario']['logueado'])) {
            	// header( Location:'http://pormayor.pe');
            }            
            $this->twig->parse('listado_redes.twig', $data);
        }
		
	}
?>