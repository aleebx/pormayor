<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Ofertas extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

	    public function solo24horas()
	    {      
	      $data=$this->acl->load_datos();
	      $data['productos_oferta']=$this->productoModel->productos_oferta();
      	  $this->twig->parse('ofertas.twig',$data);
	    }
	}
?>