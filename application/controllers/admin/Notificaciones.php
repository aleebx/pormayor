<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Notificaciones extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			$this->load->model("Pago_model", "pagoModel");
			$this->load->model("Tienda_model", "tiendaModel");
        }

		public function index()
		{
 			$data = $this->acl->load_datos("no", "no", "admin");

	        $data['pagina']['titulo'] = 'Notificaciones';

	        $data['pagos_recientes'] = $this->pagoModel->get_pagos("ORDER BY pag.Pag_FechaRegistro DESC LIMIT 20");
	        $data['meses']['nombre'] = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre');

	        $data['pagos_pendientes'] = $this->pagoModel->get_pagos_pendientes();
	        
	        $this->twig->parse('admin/notificaciones/index.twig', $data);
		}

		public function enviar_promociones()
		{
 			$data = $this->acl->load_datos("no", "no", "admin");

 			$this->load->library('correo');


 			// $datos['tiendas_datos'] = $this->tiendaModel->datosTiendas();
 			$datos['tiendas_datos'] = $this->tiendaModel->vistas_contacto();


 			foreach ($datos['tiendas_datos'] as $tienda) {
 				// print_r($tienda->Usu_Correo);
 				$datos['tienda'] = $tienda;
 				$contenido_correo = $this->twig->parse('correo/reporte.twig', $datos, true);
            	$this->correo->enviar($tienda->Usu_Correo, "Resumen de tu tienda - ".$tienda->Tie_Nombre, $contenido_correo); 				
 			}
 			// exit();


		}
	}
?>