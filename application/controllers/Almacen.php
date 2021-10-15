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
			if (isset($data['usuario']['rol']) and $data['usuario']['rol'] == 7) {
		      $data['productos']=$this->almacenModel->get_productos_etiqueta();
		      $data['almacen']=$this->almacenModel->get_productos();
		      $data['movimientos']=$this->almacenModel->get_movimientos();
			  $this->twig->parse('almacen/listado.twig', $data);
			}else{
				redirect ('');
			}
		}

	    public function registro()
	    {      
	      $data=$this->acl->load_datos();
	      if ($this->input->is_ajax_request()) {
	        $Pro_IdProducto = $this->input->post('Pro_IdProducto');
	        $codCaja = $this->input->post('codCaja');
	        $cantC = $this->input->post('cantC');
	        $cantUni = $this->input->post('cantUni');
	        $movimiento = $this->input->post('movimiento');
	        $inicial = $this->input->post('inicial');
	        $reg = $this->almacenModel->registro_movimiento($Pro_IdProducto,$codCaja,$cantC,$cantUni,$movimiento,$inicial);
	        if ($reg) {
	          echo $reg;
	        }
	      }
	    }
	}
?>