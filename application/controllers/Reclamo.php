<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Reclamo extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Configuracion_model", "configuracionModel");
		}

		function index($frase = false)
		{
			$data = $this->acl->load_datos();
			$data['pagina']['titulo'] = 'LIBRO DE RECLAMACIONES';
			$data['vista_carrito4'] = true;
	      	$data['vista_carrito_compra'] = true;

			$this->twig->parse('reclamo.twig', $data);
		}

		function guardar_datos()
		{
			if($this->input->is_ajax_request()) {
		        $nombre=$this->input->post('nombre');
		        $di=$this->input->post('di');
		        $dir=$this->input->post('dir');
		        $correo=$this->input->post('correo');
		        $tlf=$this->input->post('tlf');
		        $qqr=$this->input->post('qqr');
		        $qte=$this->input->post('qte');
		        $monto=$this->input->post('monto');
		        $problema=$this->input->post('problema');
		        $solucion=$this->input->post('solucion');

		        $r = $this->configuracionModel->registrar_reclamo($nombre,$di,$dir,$correo,$tlf,$qqr,$qte,$monto,$problema,$solucion);
		        if ($r) {
		        	$this->correoReclamo($nombre,$di,$dir,$correo,$tlf,$qqr,$qte,$monto,$problema,$solucion,$r);
		        	$this->correoReclamoCliente($nombre,$di,$dir,$correo,$tlf,$qqr,$qte,$monto,$problema,$solucion,$r);
		        	echo 1;
		        }
		    }
		}

		public function correoReclamo($nombre,$di,$dir,$correo,$tlf,$qqr,$qte,$monto,$problema,$solucion,$r)
		{
			$this->load->library('correo');

	       	$correo2 = "contacto@pormayor.pe";
	       	$datos['nombre']=$nombre;
	       	$datos['di']=$di;
	       	$datos['dir']=$dir;
	       	$datos['correo']=$correo;
	       	$datos['tlf']=$tlf;
	       	$datos['qqr']=$qqr;
	       	$datos['qte']=$qte;
	       	$datos['monto']=$monto;
	       	$datos['problema']=$problema;
	       	$datos['solucion']=$solucion;
	       	$datos['id']=$r;

	        $contenido_correo = $this->twig->parse('correo/reclamo.twig', $datos, true);

	        $this->correo->enviar($correo2,"Reclamo de ". $nombre, $contenido_correo);
		}

		public function correoReclamoCliente($nombre,$di,$dir,$correo,$tlf,$qqr,$qte,$monto,$problema,$solucion,$r)
		{
			$this->load->library('correo');

	       	$datos['nombre']=$nombre;
	       	$datos['di']=$di;
	       	$datos['dir']=$dir;
	       	$datos['correo']=$correo;
	       	$datos['tlf']=$tlf;
	       	$datos['qqr']=$qqr;
	       	$datos['qte']=$qte;
	       	$datos['monto']=$monto;
	       	$datos['problema']=$problema;
	       	$datos['solucion']=$solucion;
	       	$datos['id']=$r;

	        $contenido_correo = $this->twig->parse('correo/reclamo.twig', $datos, true);

	        $this->correo->enviar($correo, $nombre.", tu reclamo ha sido recibido", $contenido_correo);
		}
			
	}
?>