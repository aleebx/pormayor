<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Gestion extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Producto_model", "productoModel");
			$this->load->model("Tienda_model", "tiendaModel");
			$this->load->model("Configuracion_model", "configuracionModel");
			$this->load->model("Local_model", "localModel");
			$this->load->model("Cotizacion_model", "cotizacionModel");
			$this->load->model("Usuario_model", "usuariomodel");
        }

		public function index()
		{
 			$data = $this->acl->load_datos("no", "no", "gestor");
	        $data['pagina']['titulo'] = 'Gestión de Tienda';

	        $data['tiendas_gestor'] = $this->tiendaModel->get_tiendas_gestor($data['usuario']['id_usuario']);
	        $data['cantidad_producto'] = $this->tiendaModel->get_producto_tienda($data['usuario']['id_usuario']);
	        $data['cantidad_ventas'] = $this->tiendaModel->get_ventas_tienda($data['usuario']['id_usuario']);
	        $this->twig->parse('gc/index.twig', $data);
		}

		public function comisiones()
		{
 			$data = $this->acl->load_datos("no", "no", "gestor");
	        $data['pagina']['titulo'] = 'Comisión de Tienda';
	        $data['tiendas_gestor'] = $this->tiendaModel->get_tiendas_gestor($data['usuario']['id_usuario']);
	        $data['cantidad_producto'] = $this->tiendaModel->get_producto_tienda($data['usuario']['id_usuario']);
	        $data['cantidad_ventas'] = $this->tiendaModel->get_ventas_tienda($data['usuario']['id_usuario']);
	        $data['mesestienda'] = $this->tiendaModel->get_tiendas_meses($data['usuario']['id_usuario']);
	        $data['meses']['nombre'] = array('', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
	        $this->twig->parse('gc/comisiones.twig', $data);
		}

		public function agenda()
		{
 			$data = $this->acl->load_datos("no", "no", "gestor");
	        $data['pagina']['titulo'] = 'Agenda de Tienda';
	        $data['clientes'] = $this->tiendaModel->get_clientes($data['usuario']['id_usuario']);
	        $data['notas'] = $this->tiendaModel->get_notas($data['usuario']['id_usuario']);
	        $data['actividades'] = $this->tiendaModel->get_actividades($data['usuario']['id_usuario']);
	        $this->twig->parse('gc/agenda.twig', $data);
		}

		public function crearCliente()
		{
 			if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "gestor");
     			$Usu_IdUsuario = $this->input->post('Usu_IdUsuario');
				$Nombre = $this->input->post('Nombre');
                $ApellidoP = $this->input->post('ApellidoP'); 
                $ApellidoM = $this->input->post('ApellidoM'); 
                $Tfl = $this->input->post('Tfl');
                $Direccion = $this->input->post('Direccion');

                $creoCliente = $this->tiendaModel->creaCliente($Usu_IdUsuario,$Nombre,$ApellidoP,$ApellidoM,$Tfl,$Direccion);
                if(is_null($creoCliente))
				{
					echo false;
				}
				else
				{
					echo 1;
				}
			}
			else
			{
				show_404();
			}
		}

		public function deleteCliente()
		{
 			if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "gestor");
     			$Clg_IdCliente = $this->input->post('Clg_IdCliente');
		
                $deleteCliente = $this->tiendaModel->deleteCliente($Clg_IdCliente);
                if(is_null($deleteCliente))
				{
					echo false;
				}
				else
				{
					echo 1;
				}
			}
			else
			{
				show_404();
			}
		}

		public function listClientes()
		{
 			$data = $this->acl->load_datos("no", "no", "gestor");
	        $data['clientes'] = $this->tiendaModel->get_clientes($data['usuario']['id_usuario']);
	        $this->twig->parse('gc/listaClientes.twig', $data);

		}

		public function crearNota()
		{
 			if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "gestor");
     			$Usu_IdUsuario = $this->input->post('Usu_IdUsuario');
				$tituloNota = $this->input->post('tituloNota');
                $nota = $this->input->post('Nota'); 

                $creoNota = $this->tiendaModel->creaNota($Usu_IdUsuario,$tituloNota,$nota);
                if(is_null($creoNota))
				{
					echo false;
				}
				else
				{
					echo 1;
				}
			}
			else
			{
				show_404();
			}
		}


		public function deleteNota()
		{
 			if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "gestor");
     			$Not_IdNota = $this->input->post('Not_IdNota');
		
                $deleteNota = $this->tiendaModel->deleteNota($Not_IdNota);
                if(is_null($deleteNota))
				{
					echo false;
				}
				else
				{
					echo 1;
				}
			}
			else
			{
				show_404();
			}
		}

		public function listNotas()
		{
 			$data = $this->acl->load_datos("no", "no", "gestor");
	        $data['notas'] = $this->tiendaModel->get_notas($data['usuario']['id_usuario']);
	        $this->twig->parse('gc/listaNotas.twig', $data);

		}


		public function crearActividad()
		{
 			if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "gestor");
     			$Usu_IdUsuario = $this->input->post('Usu_IdUsuario');
				$Actividad = $this->input->post('Actividad');
                $Detalle = $this->input->post('Detalle'); 
                $Fecha = $this->input->post('Fecha'); 
                $Hora = $this->input->post('Hora'); 

                $creoActividad = $this->tiendaModel->creaActividad($Usu_IdUsuario,$Actividad,$Detalle,$Fecha,$Hora);
                if(is_null($creoActividad))
				{
					echo false;
				}
				else
				{
					echo 1;
				}
			}
			else
			{
				show_404();
			}
		}



		public function deleteActividad()
		{
 			if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "gestor");
     			$Acg_IdActividad = $this->input->post('Acg_IdActividad');
		
                $deleteActividad = $this->tiendaModel->deleteActividad($Acg_IdActividad);
                if(is_null($deleteActividad))
				{
					echo false;
				}
				else
				{
					echo 1;
				}
			}
			else
			{
				show_404();
			}
		}

		public function listActividades()
		{
 			$data = $this->acl->load_datos("no", "no", "gestor");
	        $data['actividades'] = $this->tiendaModel->get_actividades($data['usuario']['id_usuario']);
	        $this->twig->parse('gc/listaActividades.twig', $data);

		}



	}
?>