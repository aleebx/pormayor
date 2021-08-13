<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Index extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Venta_model","ventaModel");
			$this->load->model("Usuario_model","usuarioModel");
			$this->load->model("Producto_model","productoModel");
        }

		public function index()
		{
			$data['pagina']['opcion']="ventas";
	        $data['pagina']['titulo']='Mis Pedidos';
			$data=$this->acl->load_datos("no","no","admin");
	        // $data['ven']=$this->ventaModel->get_ventas_total(0);
	        // $data['ven_por_tienda']=$this->ventaModel->get_ventas_total(1);
	        $this->twig->parse('admin/index.twig',$data);
		}

		public function correo_bienvenida()
		{
			$data['pagina']['titulo']='Mis Pedidos';
	        $this->twig->parse('correo/bienvenida_comprador.twig',$data);
		}

		public function vista_edit_estado()
		{
 			$data = $this->acl->load_datos("no","no","admin");
 			if($this->input->is_ajax_request()) {
				$id=$this->input->post('id');				
				$data['id']=$this->input->post('id');				
				$data['eActual']=$this->input->post('est');				
	        	$this->twig->parse('admin/load/edit_estado_venta.twig',$data);
			}
		}

		public function vista_edit_voucher()
		{	
 			$data=$this->acl->load_datos("no","no","admin");
 			if($this->input->is_ajax_request()) {
				$data['id']=$this->input->post('id');				
				$data['eActual']=$this->input->post('est');
				$data['infVouche']=$this->ventaModel->infVouche($this->input->post('id'));	

				$this->twig->parse('admin/load/edit_estado_voucher.twig',$data);
			}
		}

		public function actualizar_estado()
		{
			if($this->input->is_ajax_request()) {
				$idVenta=$this->input->post('idVenta');			
				$nuevoEstado=$this->input->post('nuevoEstado');			
				$act=$this->ventaModel->edit_estado_venta($idVenta,$nuevoEstado);
				if($act) {
					return true;
				}
			}
		}

		public function actualizar_estadoVoucher()
		{
			if($this->input->is_ajax_request()) {
				$idVenta=$this->input->post('idVenta');			
				$nuevoEstado=$this->input->post('nuevoEstado');			
				
				$act=$this->ventaModel->edit_estado_voucher($idVenta,$nuevoEstado);
				if($act) {
					return true;
				}
			}
		}

		public function detalle_venta($Pac_IdPago_Compra=false)
		{
        	$data=$this->acl->load_datos("no","no","admin");
        	$data['pagina']['opcion']="ventas";
        	$data['id']['Pac_IdPago_Compra']=$Pac_IdPago_Compra;

        	if($Pac_IdPago_Compra) {
        		$Pac_IdPago_Compra=(int)$Pac_IdPago_Compra;
        		$this->load->model("Venta_Detalle_model","ventaDetalleModel");
		        $data['idventa']=$Pac_IdPago_Compra;
		        $data['pagina']['titulo']='Detalle de la venta';
		        $data['venta']=$this->ventaModel->get_compra_directa_q($Pac_IdPago_Compra);
		       	$data['compra_info']=$this->ventaModel->get_compra_info($Pac_IdPago_Compra);
		       	$data['venta_detalle']=$this->ventaModel->get_detalle_compra($Pac_IdPago_Compra);

		       	$idtiendas=[];
		      	$idtiendas2=[];
		      	foreach($data['venta_detalle'] as $key => $valor) {
		      		if(!in_array($valor->Tie_IdTienda, $idtiendas2)) {
		      			$tiendaInfo=$this->usuarioModel->get_datos_compra_x_tienda($valor->Tie_IdTienda);	
		      			//numero de envio
		       	 		$codenvio=$this->ventaDetalleModel->get_cod_envio($Pac_IdPago_Compra,$valor->Tie_IdTienda);

		      			$newdata=array (
					      'Tie_CodEnvio'=>$codenvio,
					      'Tie_IdTienda'=>$valor->Tie_IdTienda,
					      'Tie_Nombre'=>$tiendaInfo[0]->Tie_Nombre,
					      'Tie_Telefono'=>$tiendaInfo[0]->Per_Telefono,
					    );
		      			array_push($idtiendas,$newdata);
		      			array_push($idtiendas2,$valor->Tie_IdTienda);
		      		}
		      		//precio de envio
		       	 	$valor->costoEnvio=$this->ventaDetalleModel->get_detalle_envio($Pac_IdPago_Compra,$valor->Tie_IdTienda,$valor->Pro_IdProducto);
		       	}
		      	$data['data_tiendas']=$idtiendas;
		        $this->twig->parse('admin/detalle_venta_q.twig',$data);
        	} else {
        		show_404();
        	}
		}

		public function borrarVenta()
		{
			if($this->input->is_ajax_request()) {
				$Pac_IdPago_Compra=$this->input->post('Pac_IdPago_Compra');
				$act=$this->ventaModel->borrarVenta($Pac_IdPago_Compra);
				return 1;
			}
		}

		// Consumo de API CURRIERS
	    public function apiCurriers() 
	    {
	    	$COD='COD';
	    	$Tie_IdTienda=$this->input->post('Tie_IdTienda');
	    	$Pac_IdPago_Compra=$this->input->post('Pac_IdPago_Compra');

	    	// Datos del cliente
	    	$data['client']=$this->ventaModel->get_compra_directa_q($Pac_IdPago_Compra);
	    	if($data['client']->Per_Dni){$clienteRuc=$data['client']->Per_Dni;}else{$clienteRuc=$data['client']->dni;}
	    	if($data['client']->Per_Correo){$correo=$data['client']->Per_Correo;}else{$correo=$data['client']->correo;}
	    	if($data['client']->Per_Nombre){$cliente=$data['client']->Per_Nombre;}else{$cliente=$data['client']->nombr;}

	    	// Indormacion de la compra
	    	$data['info']=$this->ventaModel->get_compra_info($Pac_IdPago_Compra);
	    	if($data['info']->Pci_Telefono){$tlf=$data['info']->Pci_Telefono;}else{$tlf='000000000';}
	    	if($data['info']->iddistrito){$idddistrito=$data['info']->iddistrito;}else{$idddistrito='';}

	    	$dir=$data['info']->Pci_Direccion.' '.$data['info']->Pci_Lote.' '.$data['info']->Pci_DtoInt.' '.$data['info']->Pci_Urbanizacion.' '.$data['info']->Pci_Referencia;
	    	
	    	$apis=$this->productoModel->getPago_Compra_Envios($Pac_IdPago_Compra,$Tie_IdTienda);
	    	if($apis) {
		    	foreach($apis as $key => $api) {
					if($api->PrecioEnvio > 0) {
		    			$monto=(($api->PrecioPorProductos)+($api->PrecioEnvio));
		    			$monto=number_format($monto,2,'.','');
		    		} else {
		    			$monto=$api->PrecioPorProductos;
		    			$monto=number_format($monto,2,'.','');
		    		}

		    		$tienda=$this->productoModel->getDettaleTienda($api->Pce_IdTienda);
		    		$detalles=$this->productoModel->getDettaleProducto($api->Pac_IdPago_Compra,$api->Pce_IdTienda);
		    		
		    		if($tienda[0]->region){$region=$tienda[0]->region;}else{$region='';}
		    		if($tienda[0]->distrito){$distrito=$tienda[0]->distrito;}else{$distrito='';}
		    		if($tienda[0]->provincia){$provincia=$tienda[0]->provincia;}else{$provincia='';}
		    		if($tienda[0]->iddistrito){$iddistrito=$tienda[0]->iddistrito;}else{$iddistrito='';}
		    		if($tienda[0]->Per_Direccion){$Per_Direccion=$tienda[0]->Per_Direccion;}else{$Per_Direccion='';}
		    		if($tienda[0]->Per_Telefono){$telefono=$tienda[0]->Per_Telefono;$Per_Telefono=$tienda[0]->Per_Nombre.' ('.$tienda[0]->Per_Telefono.')';}else{$telefono='0000000000';$Per_Telefono=$tienda[0]->Per_Nombre.' (0)';}
		    		$ubicacionAlmacen=$region.','.$provincia.','.$distrito.','.$Per_Direccion;
					
					if($detalles) {
						$Product='';
	    				$arrayProduct=[];

		    			foreach($detalles as $key => $detalle) {
		    				$Product=array(
				    			"NOMBRE"=>$detalle->Pro_Nombre, 
			                    "DESCRIPCION"=>$detalle->Pro_Caracteristicas, 
			                    "SKU"=>$detalle->SKU_Nombre, 
			                    "PESO"=>0, 
		               		);
		               		array_push($arrayProduct,$Product);
		    			}

		    			if($COD=='NO') {
		    				$monto='0.00';
		    			}

		    			$data=array(
				    		'RUC_BROKER'=>'20603706804',
				    		'CLAVE_API'=>'xIBzL6mBImvZmNT-aESX-w==',
				    		'CLIENTE'=>'POR MAYOR',
				    		'CLIENTE_RUC'=>'20603706804',
				    		'NRO_PEDIDO'=>$api->Pce_CodigoEnvio,
				    		'PIEZAS'=>$api->catidadProd,
				    		'IMP_SEGURO'=>'NULL',
				    		'DESCRIPCION'=>'Caja de productos',
				    		'PESO'=>'0.0',
				    		'COD'=>$COD,
				    		'DD'=>'NO',
				    		'IMPORTE_COD'=>$monto,
				    		'SERVICIO'=>'EXPRESS',
				    		'CLIENTE_FINAL'=>$cliente,
				    		'DOCUMENTO1'=>'',
				    		'NRODOC1'=>'',
				    		'DOCUMENTO2'=>'',
				    		'NRODOC2'=>'',
				    		'DOCUMENTO3'=>'',
				    		'NRODOC3'=>'',
				    		'DOCUMENTO4'=>'',
				    		'NRODOC4'=>'',
				    		'TIPO_DOC'=>'1',
				    		'NUMERO_DOC'=>$clienteRuc,
				    		'UBIGEO'=>$idddistrito,
				    		'DEPARTAMENTO'=>$api->region,
				    		'PROVINCIA'=>$api->provincia,
				    		'DISTRITO'=>$api->distrito,
				    		'DIRECCION'=>$dir,
				    		'OBSERVACION'=>'Envio express',
				    		'MAIL'=>$correo,
				    		'TELEFONO'=>$tlf,
				    		'CONTACTO'=>'',
				    		'NOMBRE_RESP_ALMACEN'=>$Per_Telefono,
				    		'DNI_RESP_ALMACEN'=>$tienda[0]->Per_Dni,
				    		'TELEFONO_RESP_ALMACEN'=>$telefono,
				    		'ARCO_RESP_ALMACEN'=>'NULL',
				    		'DIRECCION_ALMACEN'=>$ubicacionAlmacen,
				    		'UBIGEO_ALMACEN'=>$iddistrito,
				    		'FLAG_INVERSA'=>'0',
				    		'FLAG_CANAL'=>'1',
				    		'NOTAS'=>'',
				    		"PRODUCTOS"=>$arrayProduct
						);
						
						$ch=curl_init("https://runningboxapi.azurewebsites.net/api/orden");
				        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
				        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
				        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));
				        $response=curl_exec($ch);
				        $getEnvio=$this->productoModel->getUpdateCostoEnvio($Pac_IdPago_Compra,$api->Pce_IdTienda,$response);
				    }    
			  	}
				    
			  	curl_close($ch);
			    if(!$response) {
			    	return false;
			    } else {
			    	return true;
			    }
	    	}
	    }
	}
?>