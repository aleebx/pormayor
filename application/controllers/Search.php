<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Search extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function _getsearch($nombre_busqueda = false)
		{
			// $data = $this->acl->load_datos();
			$data['pagina']['titulo'] = 'PorMayor.pe – Terminos legales';
			// $data['legales'] = true;
			// $data['pagina']['extrabtn'] = 'SI';
			// $data['commentsNot'] = true;

			$this->twig->parse('legal.twig', $data);
		}
	}
?>