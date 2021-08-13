<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Emailpormayor extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('correo');
		// $this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model("Usuario_model", "usuarioModel");
	}

	function pmcpv1()
	{
		// 2 DIAS DESDE QUE SE CREO LA TIENDA SI NO HA CREADO NINGUN PRODUCTOS
		$datos['usuario'] = $this->usuarioModel->pmcpv1();

		print_r($datos['usuario']);
		// $datos['nombre_usuario'] = $Per_Nombre;
  //       $datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
  //       $datos['correo'] = $Usu_Correo;
  //       $datos['clave'] = $Usu_Clave;

        // $contenido_correo = $this->twig->parse('correo/bienvenida_comprador.twig', $datos, true);

        // $this->correo->enviar($Usu_Correo, "Bienvenido(a) a ".$datos['nombre_sitio'], $contenido_correo);
	}
}