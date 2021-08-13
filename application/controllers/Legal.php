<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	//CONTROLADOR PARA MOSTRAR TODOS LOS PRODUCTOS DE LA TIENDA
	class Legal extends CI_Controller
	{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Terminos legales';
		$data['legales'] = true;
		$data['pagina']['extrabtn'] = 'SI';
		$data['commentsNot'] = true;

		$this->twig->parse('legal.twig', $data);
	}

	function privacidad()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Ayuda';
		$data['privacidad'] = true;
		$data['pagina']['extrabtn'] = 'SI';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/privacidad.twig', $data);
	}

	function devolucionesycambios()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Ayuda';
		$data['privacidad'] = true;
		$data['pagina']['extrabtn'] = 'SI';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/devolcionesycambios.twig', $data);
	}

	function centro()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Centro de Ayuda';
		$data['centro_general'] = true;
		$data['pagina']['extrabtn'] = 'SI';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/centro.twig', $data);
	}

	function compra_segura()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Compra Segura';
		$data['compra_segura'] = true;
		$data['pagina']['extrabtn'] = 'SI';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/compra_segura.twig', $data);
	}

	function tarifas()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Tarifas';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/tarifas.twig', $data);
	}

	function reputacion()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Reputacion';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/reputacion.twig', $data);
	}

	function prohibidos()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Articulos prohibidos';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/prohibidos.twig', $data);
	}
	function compra_tuto()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'PorMayor.pe – Compra Segura';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/compra_segura_tuto.twig', $data);
	}

	function seguridad()
	{
		$data = $this->acl->load_datos();
		$data['pagina']['titulo'] = 'Seguridad Pormayor | pormayor.pe';

		$data['pagina']['extrabtn'] = 'SI';
		$data['commentsNot'] = true;

		$this->twig->parse('ayuda/seguridad.twig', $data);
	}
}
?>