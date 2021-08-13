<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Compradores extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Usuario_model","usuarioModel");
			$this->load->model("Compradores_model","compradoresModel");
        }

		public function index($nropagina=FALSE)
		{	
			$data=$this->acl->load_datos("no","no","admin");
			$data['pagina']['opcion']="compradores";
			$data['pagina']['titulo']='Panel de Compradores';
 			$data['compradores']=$this->compradoresModel->getCompradores();

 			if($data['compradores']) {
 				foreach($data['compradores'] as $comp){
 					$idUsuario=$comp->Usu_IdUsuario;
 					$idUsuario=$comp->Usu_IdUsuario;
 					$comp->compras=$this->compradoresModel->getCompras($idUsuario);
 					$comp->favoritos=$this->compradoresModel->getFavoritos($idUsuario);
 					$comp->grupos=$this->compradoresModel->getGrupales($idUsuario);
 				}
 			}
 			$this->twig->parse('admin/comprador/index.twig',$data);
		}

		public function detalle_comprador($idUsuario)
		{
			$idUsuario=(int)$idUsuario;
 			$data=$this->acl->load_datos("no","no","admin");
 			$data['funcion']="detalle";
 			$data['pagina']['opcion']="compradores";
 			$data['pagina']['titulo']='Detalle de Tienda';
	        $data['region_tienda']=$this->tiendaModel->region_tienda();
	        $data['grupos']=$this->compradoresModel->getGruposDetalle($idUsuario);
	        $data['compras']=$this->compradoresModel->getComprasDetalle($idUsuario);
	        $data['compradores']=$this->compradoresModel->getCompradoresId($idUsuario);
	        $data['favoritos']=$this->compradoresModel->getFavoritosDetalle($idUsuario);
	        
	        if($data['compras']) {
 				foreach($data['compras'] as $comp) {
 					$idCompras=$comp->Pac_IdPago_Compra;
 					$comp->comprasdetalle=$this->compradoresModel->getComprasDescription($idCompras);
 				}
 			}
	        $this->twig->parse('admin/comprador/detalle_comprador.twig', $data);
		}

		public function getEditar_Comprador() 
		{
			$tlf=$this->input->post('tlf');
			$correo=$this->input->post('correo');
			$DNIORUC=$this->input->post('DNIORUC');
			$idpersona=$this->input->post('idpersona');
			$selectRegion=$this->input->post('selectRegion');
			$selectProvincia=$this->input->post('selectProvincia');
			$selectDistritos=$this->input->post('selectDistritos');
			$nombreComprador=$this->input->post('nombreComprador');
			$direccionComprador=$this->input->post('direccionComprador');

			$data['distrito_tienda']=$this->compradoresModel->getEditar_Comprador($DNIORUC,$idpersona,$nombreComprador,$tlf,$correo,$selectRegion,$selectProvincia,$selectDistritos,$direccionComprador);

			return $data['distrito_tienda'];
		}

		public function eliminarComp()
		{
		 	if ($this->input->is_ajax_request()) {
				$idPersona=$this->input->post('idPersona');
				$registro=$this->compradoresModel->eliminarComp($idPersona);
	      		if($registro) {
	      			echo 1;
	      		} else {
	      			echo 0;
	      		}
			}
		}
	}