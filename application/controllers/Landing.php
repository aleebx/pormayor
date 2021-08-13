<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Landing extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Configuracion_model", "configuracionModel");
		}

		function c($frase = false)
		{
			$data = $this->acl->load_datos();
			$data['pagina']['titulo'] = 'REGISTRATE COMO TIENDA';
			$data['vista_carrito4'] = true;
	      	$data['vista_carrito_compra'] = true;
	      	$data['nofooter'] = true;

			$this->twig->parse('landing/landing_vendedor.twig', $data);
		}

		function guardar_datos()
		{
			// $data = $this->acl->load_datos();
			if($this->input->is_ajax_request()) {
		        $nombre=$this->input->post('nombre');
		        $ruc=$this->input->post('ruc');
		        $giro=$this->input->post('giro');
		        $dir=$this->input->post('dir');
		        $correo=$this->input->post('correo');
		        $tlf=$this->input->post('tlf');
		        $pago=$this->input->post('pago');

		        $r = $this->configuracionModel->registro_vendedor($nombre,$ruc,$giro,$dir,$correo,$tlf,$pago);
		        if ($r) {
		        	$this->correoRegistrotienda($nombre,$ruc,$giro,$dir,$correo,$tlf,$pago);
		        	echo 1;
		        }
		    }
		}

		public function correoRegistrotienda($nombre,$ruc,$giro,$dir,$correo,$tlf,$pago)
		{
			$this->load->library('correo');

	       	$correo2 = "contacto@pormayor.pe";
	       	$correo3 = "marketing@pormayor.pe";
	       	$datos['nombre']=$nombre;
	       	$datos['ruc']=$ruc;
	       	$datos['giro']=$giro;
	       	$datos['dir']=$dir;
	       	$datos['correo']=$correo;
	       	$datos['tlf']=$tlf;
	       	$datos['pago']=$pago;

	        $contenido_correo = $this->twig->parse('correo/formulario_tienda.twig', $datos, true);

	        $this->correo->enviar($correo2, $nombre.", ha llenado el formulario de tienda", $contenido_correo);
	        $this->correo->enviar($correo3, $nombre.", ha llenado el formulario de tienda", $contenido_correo);
		}
			
	}
?>