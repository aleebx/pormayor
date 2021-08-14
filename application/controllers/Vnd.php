<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Vnd extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Vendedor_model", "vendedorModel");
			$this->load->model("Gestion_model", "gestionModel");
		}

		function crear()
		{
			$data = $this->acl->load_datos();
			if ($data['usuario']['rol'] == 5) {
				$data['pag'] = "crear";
				$this->twig->parse('vendedor/login.twig', $data);
			}else{
				redirect ('');
			}
		}

		function listado()
		{
			$data = $this->acl->load_datos();
			if ($data['usuario']['rol'] == 5) {
			$data['clientes'] = $this->vendedorModel->get_clientes($data['usuario']['id_usuario']);
			$data['gestionc'] = $this->vendedorModel->get_gestion_all();
			$data['pag'] = "listado";
			$this->twig->parse('vendedor/listado.twig', $data);
			}else{
				redirect ('');
			}
		}

		function reporte()
		{
			$data = $this->acl->load_datos();
			if ($data['usuario']['rol'] == 5) {
			$data['pag'] = "reporte";
			$this->twig->parse('vendedor/reportes.twig', $data);
			}else{
				redirect ('');
			}
		}

		function reporte_mes()
		{
			$data = $this->acl->load_datos();
			if ($this->input->is_ajax_request()) {
	            $mes = $this->input->post('mes');
	            $data['gestion'] = $this->vendedorModel->reporte_gestion($data['usuario']['id_usuario'], $mes);
	            $data['ventas'] = $this->vendedorModel->reporte_ventas($data['usuario']['id_usuario'], $mes);
	            $data['cantidad'] = $this->vendedorModel->reporte_ventas_c($data['usuario']['id_usuario'], $mes);
	            $this->twig->parse('vendedor/reporte_mes.twig', $data);
			}
		}

		function ventas()
		{
			$data = $this->acl->load_datos();
			if (isset($data['usuario']['rol']) and $data['usuario']['rol'] == 5) {
			// $data['pagos']=$this->vendedorModel->get_ventas_pm();
			$data['pag'] = "ventas";
			$this->twig->parse('vendedor/ventas.twig', $data);
			}else{
				redirect ('');
			}
		}
		public function cambio_clave()
	    {
	         if($this->input->is_ajax_request()) {
	            $id_usu = $this->input->post('Usu_IdUsuario');
	            $clave = password_hash($this->input->post('clave1'),PASSWORD_DEFAULT);
	            $registro = $this->gestionModel->cambio_clave($id_usu,$clave);
	            if ($registro) {
	                echo $registro;
	            }        
	        }
	    } 

		public function detalle_q($Pac_IdPago_Compra=false)
        {
			
        	if($Pac_IdPago_Compra) {
        		$Pac_IdPago_Compra=(int)$Pac_IdPago_Compra;
	 					$data=$this->acl->load_datos("no","duenio");
		        $data['pagina']['opcion']='ventas';
		        $data['pagina']['titulo']='Detalle de la venta';
		        $data['idventa']=$Pac_IdPago_Compra;
		        $data['venta']=$this->gestionModel->get_compra_directa_q($Pac_IdPago_Compra);
		        $data['vauche']=$this->gestionModel->get_vauche_compra($Pac_IdPago_Compra);
		       	$data['compra_info']=$this->gestionModel->get_compra_info($Pac_IdPago_Compra);
		       	$data['venta_detalle']=$this->gestionModel->get_detalle_venta_q($Pac_IdPago_Compra);
		       	$data['productos']=$this->gestionModel->get_productos_sku();
		        $this->twig->parse('vendedor/detalle_venta.twig',$data);
        	} else {
        		show_404();
        	}
        }
        public function delete_detalle()
        {
		if ($this->input->is_ajax_request()) {
		$Id_Venta_Detalle = $this->input->post('id_venta_Detalle');
		$SKU_IdSku = $this->input->post('id_sku');
		$Cantidad = $this->input->post('cant');
		$registro = $this->gestionModel->delete_detalle($Id_Venta_Detalle,$SKU_IdSku,$Cantidad);
		echo $registro;
		}
        }
        public function api_factura()
		{

			if ($this->input->is_ajax_request()) {
				$hoy = date("Y-m-d");
				$hora = date("h:i:s");
				$fvenc = date("Y-m-d",strtotime($hoy."+ 3 days")); 
     			$Pac_IdPago_Compra = $this->input->post('Pac_IdPago_Compra');
     			$ruc = $this->input->post('ruc');
     			$razonSocial = $this->input->post('razonSocial');
     			$ubigeo = $this->input->post('ubigeo');
     			$correo = $this->input->post('email');
     			$telefono = $this->input->post('tlf');
     			$direccion = $this->input->post('direccion');
     			$total2 = $this->gestionModel->pagartotal($Pac_IdPago_Compra);
     			$total = $total2->Pcd_Importe; 
     			$totalG = (float)$total / 1.18;
     			$totalG = number_format($totalG, 2, '.', '');
     			$totalIGV = $total - $totalG;

		       	$producto = $this->gestionModel->get_detalle_venta_q($Pac_IdPago_Compra);
		       	$arrayP = array();
		       	foreach($producto as $pro){
		       		$valoru =  $pro->Pcd_Precio/1.18;
		       		$base_igv = $pro->Pcd_Cantidad * $valoru;
		       		$t_igv =  $pro->Pcd_Importe - $base_igv;
		       		$total1 = $pro->Pcd_Importe;
		       		$proL = array(
		       		  "codigo_interno"=> $pro->SKU_IdSKU,
				      "descripcion"=>$pro->Pro_Nombre,
				      "codigo_producto_sunat"=> "",
				      "unidad_de_medida"=> "NIU",
				      "cantidad"=> $pro->Pcd_Cantidad,
				      "valor_unitario"=> number_format($valoru, 2, '.', ''),
				      "codigo_tipo_precio"=> "01",
				      "precio_unitario"=> $pro->Pcd_Precio,
				      "codigo_tipo_afectacion_igv"=> "10",
				      "total_base_igv"=> $base_igv,
				      "porcentaje_igv"=> 18,
				      "total_igv"=> $t_igv,
				      "total_impuestos"=> $t_igv,
				      "total_valor_item"=> number_format($valoru, 2, '.', ''),
				      "total_item"=> $pro->Pcd_Importe
		       		);
		       		array_push($arrayP,$proL);
		       	}

				
				$miArray = array(
					"serie_documento"=>"F001", 
					"numero_documento"=>"#", 
					"fecha_de_emision"=>$hoy,
					"hora_de_emision"=>$hora,
					"codigo_tipo_operacion"=>"0101",
					"codigo_tipo_documento"=>"01",
					"codigo_tipo_moneda"=>"PEN",
					"fecha_de_vencimiento"=>$fvenc,
					"numero_orden_de_compra"=>$Pac_IdPago_Compra,
					"datos_del_cliente_o_receptor"=>array(
						"codigo_tipo_documento_identidad"=>"6",
						"numero_documento"=>$ruc,
						"apellidos_y_nombres_o_razon_social"=>$razonSocial,
						"codigo_pais"=>"PE",
						"ubigeo"=>$ubigeo,
						"direccion"=>$direccion,
						"correo_electronico"=>$correo,
						"telefono"=>$telefono
					),
					"totales"=>array(
						"total_exportacion"=> "0.00",
					    "total_operaciones_gravadas"=> $totalG,
					    "total_operaciones_inafectas"=> "0.00",
					    "total_operaciones_exoneradas"=> "0.00",
					    "total_operaciones_gratuitas"=> "0.00",
					    "total_igv"=> $totalIGV,
					    "total_impuestos"=> $totalIGV,
					    "total_valor"=> $totalG,
					    "total_venta"=> $total
					),
					"items"=>$arrayP,
					"informacion_adicional"=> "Forma de pago:Efectivo|Caja: 1"
				);

				// print_r(json_encode($miArray));

				// exit();
				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'http://pormayor.cocos.net.pe/api/documents',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS => json_encode($miArray),
				  CURLOPT_HTTPHEADER => array(
				    'Authorization: Bearer vIGThv1V8D5RWp4WU1DY3BD4qlk6MRZmKOywXLosp9xnva0Dp8',
				    'Content-Type: application/json'
				  ),
				));

				$response = curl_exec($curl);

				curl_close($curl);
				echo $response;
			}
		}
		public function api_boleta()
		{

			if ($this->input->is_ajax_request()) {
				$hoy = date("Y-m-d");
				$hora = date("h:i:s");
				$fvenc = date("Y-m-d",strtotime($hoy."+ 3 days")); 
     			$Pac_IdPago_Compra = $this->input->post('Pac_IdPago_Compra');
     			$numero_documento = $this->input->post('numerodoc');
     			$razonSocial = $this->input->post('razonSocial');
     			$ubigeo = $this->input->post('ubigeo2');
     			$correo = $this->input->post('email2');
     			$telefono = $this->input->post('tlf2');
     			$direccion = $this->input->post('direccion2');
     			$tipod = $this->input->post('tipod');
     			$total2 = $this->gestionModel->pagartotal($Pac_IdPago_Compra);
     			$total = $total2->Pcd_Importe; 
     			$totalG = (float)$total / 1.18;
     			$totalG = number_format($totalG, 2, '.', '');
     			$totalIGV = $total - $totalG;

		       	$producto = $this->gestionModel->get_detalle_venta_q($Pac_IdPago_Compra);
		       	$arrayP = array();
		       	foreach($producto as $pro){
		       		$valoru =  $pro->Pcd_Precio/1.18;
		       		$base_igv = $pro->Pcd_Cantidad * $valoru;
		       		$t_igv =  $pro->Pcd_Importe - $base_igv;
		       		$total1 = $pro->Pcd_Importe;
		       		$proL = array(
		       		  "codigo_interno"=> $pro->SKU_IdSKU,
				      "descripcion"=>$pro->Pro_Nombre,
				      "codigo_producto_sunat"=> "",
				      "unidad_de_medida"=> "NIU",
				      "cantidad"=> $pro->Pcd_Cantidad,
				      "valor_unitario"=> number_format($valoru, 2, '.', ''),
				      "codigo_tipo_precio"=> "01",
				      "precio_unitario"=> $pro->Pcd_Precio,
				      "codigo_tipo_afectacion_igv"=> "10",
				      "total_base_igv"=> $base_igv,
				      "porcentaje_igv"=> 18,
				      "total_igv"=> $t_igv,
				      "total_impuestos"=> $t_igv,
				      "total_valor_item"=> number_format($valoru, 2, '.', ''),
				      "total_item"=> $pro->Pcd_Importe
		       		);
		       		array_push($arrayP,$proL);
		       	}

				
				$miArray = array(
					"serie_documento"=>"B001", 
					"numero_documento"=>"#", 
					"fecha_de_emision"=>$hoy,
					"hora_de_emision"=>$hora,
					"codigo_tipo_operacion"=>"0101",
					"codigo_tipo_documento"=>"03",
					"codigo_tipo_moneda"=>"PEN",
					"fecha_de_vencimiento"=>$hoy,
					"numero_orden_de_compra"=>$Pac_IdPago_Compra,
					"datos_del_cliente_o_receptor"=>array(
						"codigo_tipo_documento_identidad"=>$tipod,
						"numero_documento"=>$numero_documento,
						"apellidos_y_nombres_o_razon_social"=>$razonSocial,
						"codigo_pais"=>"PE",
						"ubigeo"=>$ubigeo,
						"direccion"=>$direccion,
						"correo_electronico"=>$correo,
						"telefono"=>$telefono
					),
					"totales"=>array(
						"total_exportacion"=> "0.00",
					    "total_operaciones_gravadas"=> $totalG,
					    "total_operaciones_inafectas"=> "0.00",
					    "total_operaciones_exoneradas"=> "0.00",
					    "total_operaciones_gratuitas"=> "0.00",
					    "total_igv"=> $totalIGV,
					    "total_impuestos"=> $totalIGV,
					    "total_valor"=> $totalG,
					    "total_venta"=> $total
					),
					"items"=>$arrayP,
					"informacion_adicional"=> "Forma de pago:Efectivo|Caja: 1"
				);

				// print_r(json_encode($miArray));

				// exit();
				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'http://pormayor.cocos.net.pe/api/documents',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS => json_encode($miArray),
				  CURLOPT_HTTPHEADER => array(
				    'Authorization: Bearer vIGThv1V8D5RWp4WU1DY3BD4qlk6MRZmKOywXLosp9xnva0Dp8',
				    'Content-Type: application/json'
				  ),
				));

				$response = curl_exec($curl);

				curl_close($curl);
				echo $response;
			}
		}

		public function listadopedidos()
        {      
          $d = $this->vendedorModel->get_ventas_pm();
          $c=0;
            foreach ($d as $key => $value) {
                $dat[$c]["Pac_IdPago_Compra"] = $value->Pac_IdPago_Compra;
                $dat[$c]["Usu_IdUsuario"] = $value->Usu_IdUsuario;
                $dat[$c]["Per_Nombre"] = $value->Per_Nombre;
                $dat[$c]["Pac_Total"] = $value->Pac_Total;
                $dat[$c]["Pac_Envio"] = $value->Pac_Envio;
                if ($value->Pac_Banco == 'NO') {
                $dat[$c]["Pac_Banco"] = 'CONTRAENTREGA';
                }else if($value->Pac_Banco == 'TIENDA'){
                $dat[$c]["Pac_Banco"] = 'RETIRO TIENDA';
                }else{
                $dat[$c]["Pac_Banco"] = 'DEPOSITO/TRANSFERENCIA';
                }
                $dat[$c]["Pac_FechaRegistro"] = $value->Pac_FechaRegistro;
                if ($value->Pac_Estado == 1) {
                $dat[$c]["Pac_Estado"] = 'NUEVA';
                }else if($value->Pac_Estado == 2){
                $dat[$c]["Pac_Estado"] = 'CONFIRMADA';
                }else if($value->Pac_Estado == 5){
                $dat[$c]["Pac_Estado"] = 'ENTREGADO';
                }else if($value->Pac_Estado == 6){
                $dat[$c]["Pac_Estado"] = 'ANULADO';
                }else{
                $dat[$c]["Pac_Estado"] = 'OTRO';
                }
                $dat[$c]["Pac_CodPago"] = $value->Pac_CodPago;
                $dat[$c]["Per_Telefono"] = $value->Per_Telefono;
                $dat[$c]["Cliente"] = $value->Per_Nombre.'|'.$value->Per_Telefono;
                $dat[$c]["Vendedor"] = $value->vendedor;
                $c++;
            }

          $results = ["sEcho" => 1,
                "iTotalRecords" => count($dat),
                "iTotalDisplayRecords" => count($dat),
                "aaData" => $dat ];
     
          echo json_encode($results);
        }


		public function gestion()
		{
 			$data = $this->acl->load_datos();
 			if($this->input->is_ajax_request()) {
				$id=$this->input->post('id');				
				$data['id']=$this->input->post('id');				
				$data['eActual']=$this->input->post('est');				
				$data['gestion'] = $this->vendedorModel->get_gestion($id);
				$data['xd']=$this->input->post('xd');				
	        	$this->twig->parse('vendedor/gestion.twig',$data);
			}
		}

		public function vista_clave()
		{
 			$data = $this->acl->load_datos();
 			if($this->input->is_ajax_request()) {
				$id=$this->input->post('id');				
				$data['id']=$this->input->post('id');				
				$data['eActual']=$this->input->post('est');				
				$data['gestion'] = $this->vendedorModel->get_gestion($id);		
	      $this->twig->parse('vendedor/cambio_clave.twig',$data);
			}
		}
		public function confirmar_vauche()
		{
 			$data = $this->acl->load_datos();
 			if($this->input->is_ajax_request()) {
				$id = $this->input->post('id');				
				$r = $this->vendedorModel->confirmar_vauche($id);
				if ($r) {
					return true;
				}
			}
		}
		public function cancelar_vauche()
		{
 			$data = $this->acl->load_datos();
 			if($this->input->is_ajax_request()) {			
				$id = $this->input->post('id');				
				$r = $this->vendedorModel->cancelar_vauche($id);
				if ($r) {
					return true;
				}

			}
		}
		public function hoy()
		{
 			$data = $this->acl->load_datos();
			if ($data['usuario']['rol'] == 5) {
			$data['pag'] = "hoy";
			$data['gestion']=$this->vendedorModel->gestion_vendedor($data['usuario']['id_usuario']);
			$this->twig->parse('vendedor/hoy.twig', $data);
			}else{
				redirect ('');
			}
		}
		public function cambiar_estado()
		{
 			$data = $this->acl->load_datos();
 			if($this->input->is_ajax_request()) {
				$Usu_IdUsuario=$this->input->post('id_usuario');				
				$reg= $this->vendedorModel->cambiar_estado_usu($Usu_IdUsuario);
	        	if ($reg == 1) {
	        		echo 1;
	        	}
			}
		}

		public function addgestion()
		{
 			$data = $this->acl->load_datos();
 			if($this->input->is_ajax_request()) {
				$tipo=$this->input->post('tipo');				
				$Usu_IdUsuario=$this->input->post('Usu_IdUsuario');				
				$motivo=$this->input->post('motivo');				
				$resultado=$this->input->post('resultado');				
				$accion=$this->input->post('accion');				
				$fechaaccion=$this->input->post('fechaaccion');					
	        	$reg= $this->vendedorModel->addgestion($tipo,$Usu_IdUsuario,$motivo,$resultado,$accion,$fechaaccion);
	        	if ($reg == 1) {
	        		echo 1;
	        	}
			}
		}

		function listado_clientes()
		{
			$data = $this->acl->load_datos();
			if ($data['usuario']['rol'] == 5) {
			$data['clientes'] = $this->vendedorModel->get_clientes_all();
			// print_r($data);
			$data['pag'] = "listado_clientes";
				$this->twig->parse('vendedor/listado_cliente.twig', $data);
			}else{
				redirect ('');
			}
		}

		function cliente($id_cliente)
		{
			$data = $this->acl->load_datos();
			if ($data['usuario']['rol'] == 5) {
			$data['compras'] = $this->vendedorModel->get_cliente($id_cliente);
				$this->twig->parse('vendedor/detalle_cliente.twig', $data);
			}else{
				redirect ('');
			}
		}

		function asignar()
		{
			if ($this->input->is_ajax_request()){
				$data = $this->acl->load_datos();
		      	$id_usuario = $this->input->post('id_usuario');
		      	$registro = $this->vendedorModel->asignarCliente($id_usuario,$data['usuario']['id_usuario']);
		      	echo 1;
		    }
		}

        public function detalle($Pac_IdPago_Compra=false)
        {
        	if($Pac_IdPago_Compra) {
			$this->load->model("Venta_model", "ventaModel");
	 			$data=$this->acl->load_datos();
        		$Pac_IdPago_Compra=(int)$Pac_IdPago_Compra;
		        $data['idventa']=$Pac_IdPago_Compra;
		        $data['venta']=$this->ventaModel->get_compra_directa_q($Pac_IdPago_Compra);
		        $data['vauche']=$this->vendedorModel->get_vauche_compra($Pac_IdPago_Compra);
		       	$data['compra_info']=$this->ventaModel->get_compra_info($Pac_IdPago_Compra);

		       	$data['venta_detalle']=$this->ventaModel->get_detalle_venta_q($Pac_IdPago_Compra);
		       	$data['productos'] = $this->vendedorModel->get_productos_sku();
		        $this->twig->parse('vendedor/detalle_venta.twig',$data);
        	} else {
        		show_404();
        	}
        }
 public function addproductopedido()
        {

        	if ($this->input->is_ajax_request()) {
     			$Pac_IdPago_Compra = $this->input->post('Pac_IdPago_Compra');
     			$SKU_IdSku = $this->input->post('skus');
     			$Cantidad = $this->input->post('cantsP');
     			$Precio = $this->input->post('preciosP');
                $registro = $this->gestionModel->addproductopedido($Pac_IdPago_Compra,$SKU_IdSku,$Cantidad,$Precio);
          		echo $registro;
			}
        }
		function registrar(){
			$data = $this->acl->load_datos();
			$this->load->library('correo');
			$nombre = $_POST['nombre'];
			$dni = $_POST['dni'];
			$correoA = $_POST['correoA'];
			$celular = $_POST['celular'];
			$clave = $_POST['clave'];
			$hashed_password = password_hash($clave,PASSWORD_DEFAULT);
			$id_vendedor = $data['usuario']['id_usuario'];

			$id_usuario = $this->vendedorModel->crear_comprador($nombre,$dni,$correoA,$celular,$hashed_password,$id_vendedor);
			if ($id_usuario) {
                $datos['nombre'] = $nombre;
                $datos['correo'] = $correoA;
                $datos['clave'] = $clave;

                $contenido_correo = $this->twig->parse('correo/correo_comprador.twig', $datos, true);

                $this->correo->enviar($correoA, "Bienvenido(a) a PorMayor.pe" .$nombre, $contenido_correo);
	        	redirect ('vnd/listado');
			}
		}

		public function confirmaVenta()
		{
			if($this->input->is_ajax_request()) {
				$Pac_IdPago_Compra=$this->input->post('Pac_IdPago_Compra');				
				$act=$this->gestionModel->confirmarVenta($Pac_IdPago_Compra,5);
				if($act) {
					echo 1;
				}
			}
		}

		public function anularVenta()
		{
			if($this->input->is_ajax_request()) {
				$Pac_IdPago_Compra=$this->input->post('Pac_IdPago_Compra');				
				$act=$this->gestionModel->anularVenta($Pac_IdPago_Compra,6);
				if($act) {
					echo 1;
				}
			}
		}
	
	}

?>