<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Compras extends CI_Controller
	{
		function __construct()
		{
		  parent::__construct();
	      $this->load->model("Plan_model", "planModel");
	      $this->load->model("Usuario_model", "usuarioModel");
	      $this->load->model("Cotizacion_model", "cotizacionModel");
	      $this->load->model("Tienda_model", "tiendaModel");
	      $this->load->model("Venta_model", "ventaModel");
		}

		public function index()
	    {    	
	    	$data = $this->acl->load_datos("no","ventas");

	    	$data['ventas'] = $this->ventaModel->get_ventas_vendedor();
	        $data['compras'] = $this->ventaModel->get_compra_directa_vendedor();
	        $this->twig->parse('ventas/compras.twig', $data);
	      
	    }			
			
		public function detalle_v($Ven_IdVenta = false)
	    {    	
	    	$data = $this->acl->load_datos("no","ventas");
	    	

	    	    $Ven_IdVenta = (int)$Ven_IdVenta;
	 			// $data = $this->acl->load_datos("no", "comprador");
		        $data['pagina']['titulo'] = 'Resumen de compra';

		        $this->load->model("Venta_Detalle_model", "ventaDetalleModel");
		        // $data['venta'] = $this->ventaModel->get_venta($Pac_IdPago_Compra);
		        $data['compra'] = $this->ventaModel->get_compra_directa2($Ven_IdVenta);
		       	$data['compra_detalle'] = $this->ventaDetalleModel->get_detalle_compra($Ven_IdVenta);
		       	// print_r($data['compra_detalle']);
		       	$data['compra_info'] = $this->ventaModel->get_compra_info($Ven_IdVenta);
		       	$data['usuario'] = $this->usuarioModel->get_usuario($data['compra']->Usu_IdUsuario);
		       	// $data['tienda_direccion'] = $this->tiendaModel->get_primer_local_x_tienda($data['venta']->Tie_IdTienda); 
		        $data['idcompra'] = $Ven_IdVenta;
	        	
	        	$this->twig->parse('ventas/detalle_v.twig', $data);
	      
	    }			
							
		public function detalle_c($Pac_IdPago_Compra = false)
	    {    	
	    	if ($Pac_IdPago_Compra) {
	    	$data = $this->acl->load_datos("no","ventas");
	    		
	            $Pac_IdPago_Compra = (int)$Pac_IdPago_Compra;
	 			// $data = $this->acl->load_datos("no", "comprador");
		        $data['pagina']['titulo'] = 'Resumen de compra';

		        $this->load->model("Venta_Detalle_model", "ventaDetalleModel");
		        // $data['venta'] = $this->ventaModel->get_venta($Pac_IdPago_Compra);
		        $data['compra'] = $this->ventaModel->get_compra_directa2($Pac_IdPago_Compra);
		       	$data['compra_detalle'] = $this->ventaDetalleModel->get_detalle_compra($Pac_IdPago_Compra);
		       	// print_r($data['compra_detalle']);
		       	$data['compra_info'] = $this->ventaModel->get_compra_info($Pac_IdPago_Compra);
		       	$data['usuario'] = $this->usuarioModel->get_usuario($data['compra']->Usu_IdUsuario);
		       	// $data['tienda_direccion'] = $this->tiendaModel->get_primer_local_x_tienda($data['venta']->Tie_IdTienda); 
		        $data['idcompra'] = $Pac_IdPago_Compra;
	        	
	        	$this->twig->parse('ventas/detalle_c.twig', $data);
			}else{
				$data = $this->acl->load_datos();

		    	$data['ventas'] = $this->ventaModel->get_ventas_vendedor();
		        $data['compras'] = $this->ventaModel->get_compra_directa_vendedor();
		        $this->twig->parse('ventas/compras.twig', $data);
			}
	      
	    }			
									
		public function infoTienda()
	    {    	
	    	if ($this->input->is_ajax_request())
			{
				$Tie_IdTienda = $this->input->post('Tie_IdTienda');
				// $idRegion = $this->input->post('idRegion');
				
				$InfTienda = $this->tiendaModel->get_tiendas_adm(" WHERE tie.Tie_IdTienda = ".$Tie_IdTienda);
				$div = "<div class='row card'>";
					$div = "<div class='card-content center col s12 m12 l12'>";
						$div .= "<span class='fontA'>INFORMACIÓN DE TIENDA</span><br>";
						foreach ($InfTienda as $tie) {
							$div .= '<spam class="fontA">'.$tie->Tie_Nombre.'</spam><br>';
							$div .= 'Dueño: <spam class="fontA">'.$tie->Per_Nombre.'</spam><br>';
							$div .= 'Telefono: <spam class="fontA">'.$tie->Per_Telefono.'</spam><br>';
							if ($tie->Per_Celular) {
							$div .= 'Celular: <spam class="fontA">'.$tie->Per_Celular.'</spam><br>';
							}
						}
					$div .= "</div>";
				$div .= "</div>";

				// return $div;
				print_r($div);
			}

	    }			
				
	}
?>