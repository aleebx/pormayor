<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Categorias extends CI_Controller
	{
		function __construct()
		{
		  parent::__construct();
		}

		public function index($Cat_IdCategoria=false)
	    {
	        $data = $this->acl->load_datos();

	        $categoria_completa = explode("-", $Cat_IdCategoria);
	        $url_nombre = implode("-", $categoria_completa);
	        $titulo_pag = ucfirst(implode(" ", $categoria_completa));


	        $this->twig->parse('categorias.twig', $data);
	    }
	}
?>