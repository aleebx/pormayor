<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once APPPATH.'third_party/dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
	use Dompdf\Options;

	class Compra extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			// $this->load->model("Producto_model", "productoModel");
			$this->load->model("Venta_model","ventaModel");
			$this->load->model("Tienda_model","tiendaModel");
			$this->load->model("Usuario_model","usuarioModel");
			$this->load->model("Cotizacion_model","cotizacionModel");
			$this->load->model("Gestion_model","gestionModel");
        }

        public function index()
        {
    		$data=$this->acl->load_datos("no","no","comprador");
			$data['pagina']['opcion']='ventas';
	        $data['pagina']['submenu']='ventas';
        	$data['pagina']['titulo']='Mis compras';
    		$Usu_IdUsuario=$data['usuario']['id_usuario'];
		
			$this->load->model("Venta_Detalle_model","ventaDetalleModel");

	        $data['ventas']=$this->ventaModel->get_ventas($data['usuario']['id_usuario']);
	        $data['compras']=$this->ventaModel->get_compra_directa($data['usuario']['id_usuario']);
	 
	        //Meses
	        $data['meses']['nombre'] = array('', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
	        //print_r($data['ventas'] );
	        // $data['ventas_detalle'] = $this->ventaDetalleModel->get_detalle_venta_x_usuario($data['usuario']['id_usuario']);

	        $this->twig->parse('comprador/compras.twig', $data);
        }

        public function detalle($Ven_IdVenta=false)
        {
        	if($Ven_IdVenta)
        	{
        		$Ven_IdVenta = (int)$Ven_IdVenta;
	 			$data = $this->acl->load_datos("no", "no", "comprador");
		        $data['pagina']['titulo'] = 'Resumen de compra';

		        $this->load->model("Venta_Detalle_model", "ventaDetalleModel");
		        $data['venta'] = $this->ventaModel->get_venta($Ven_IdVenta);
		       	$data['venta_detalle'] = $this->ventaDetalleModel->get_detalle_venta($Ven_IdVenta);
		       	$data['venta_info'] = $this->ventaModel->get_venta_info($Ven_IdVenta);
		       	$data['infotienda'] = $this->tiendaModel->get_info_persona_tienda_simple($data['venta']->Tie_IdTienda);
		       	$data['tienda_direccion'] = $this->tiendaModel->get_primer_local_x_tienda($data['venta']->Tie_IdTienda); 

		        $data['idventa'] = $Ven_IdVenta;
		        $data['sicalifico'] = $this->ventaModel->get_calificacion($Ven_IdVenta);
		        $data['sireporto'] = $this->ventaModel->get_reportado($Ven_IdVenta);
		        $this->twig->parse('comprador/compra_detalle.twig', $data);
        	}
        	else
        	{
        		show_404();
        	}
        }

        public function guardar_voucher() {
       	    if ($this->input->is_ajax_request()) {
		        $id=(int)$this->input->post('id');
		        $fecha=$this->input->post('fecha');
		        $comprobante=$this->input->post('comprobante');
		        $tipoP=$this->input->post('tipoP');
		        $monto=$this->input->post('monto');
		        $Pvoc_idPago_Voucher=$this->ventaModel->guardar_voucher($id,$fecha,$comprobante,$tipoP,$monto);
		        if ($Pvoc_idPago_Voucher) {
		        	echo $Pvoc_idPago_Voucher;
		        }else{
		        	echo 'error';
		        }
	      	}
	    }

	    public function imgV2($idVenta) {          
        	sleep(3);
          	$idVenta=(int)$idVenta;
          	if($_FILES["files"]["name"] != '') {

	           $output=[];
	           $config["overwrite"]=TRUE;
	           $config["upload_path"]='img/vauche/';
	           $config["allowed_types"]='gif|jpg|png|jpeg';
	           $config["file_name"]='v_'.$idVenta;
	           $this->load->library('upload',$config);
	           $this->upload->initialize($config);
	           
	           	for($count=0;$count<count($_FILES["files"]["name"]);$count++) {

	            	$_FILES["file"]["name"]=$_FILES["files"]["name"][$count];
	            	$_FILES["file"]["type"]=$_FILES["files"]["type"][$count];
	            	$_FILES["file"]["size"]=$_FILES["files"]["size"][$count];
	            	$_FILES["file"]["error"]=$_FILES["files"]["error"][$count];
	            	$_FILES["file"]["tmp_name"]=$_FILES["files"]["tmp_name"][$count];

	            	if($this->upload->do_upload('file')) {           
	            	$data=$this->upload->data();
	              $config['image_library']='gd2';
				        $config['source_image']=$data['full_path'];

		        		$this->load->library('image_lib',$config); 
		        		$this->image_lib->resize();
	            		$reg=$this->ventaModel->addVaucheFoto($idVenta,$data["file_name"]);
	            		if ($reg) {
          					echo $idVenta;
	            		}
	            	}
           		}
          	}
        }

        public function imgV($Tie_IdTienda)
        {
          sleep(3);
          $Tie_IdTienda = (int)$Tie_IdTienda;
          if($_FILES["files"]["name"] != '')
          {
           $output = [];
           $config["upload_path"] = '../img';
           $config["allowed_types"] = 'gif|jpg|png|jpeg';
           $config["file_name"] = 'vauche_'.$Tie_IdTienda;
           $config["overwrite"] = TRUE;
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
	           for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
	           {
	            $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
	            $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
	            $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
	            $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
	            $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
		            if($this->upload->do_upload('file'))
		            {           
		            $data = $this->upload->data();
		            
		            $config['image_library'] = 'gd2';
			        $config['source_image'] = $data['full_path'];
			        $config['maintain_ratio'] = TRUE;
			        // $config['width']     = 200;
			        // $config['height']   = 200;

			        $this->load->library('image_lib', $config); 
			        $this->image_lib->resize();

		            $fff = $this->ventaModel->addVaucheFoto($Tie_IdTienda,$data["file_name"]);
			            if ($fff) {
			            	echo $Tie_IdTienda;
			            }
		            }
	           }
          }
        }
  

	    public function subirVauche($idVenta)
	    {
	      sleep(3);
	      
	      $idVenta = (int)$idVenta;

	      $nombre = $idVenta;

		  if($_FILES["files"]["name"] != '')
		  {
		   $output = [];
		   $config["upload_path"] = '../img/vauche';
		   $config["allowed_types"] = 'gif|jpg|png|jpeg';
		   $config["file_name"] = 'vauche_'.$nombre;
		   $config["overwrite"] = TRUE;
		   $this->load->library('upload', $config);
		   $this->upload->initialize($config);
		   for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
		   {
		    $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
		    $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
		    $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
		    $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
		    $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
		    if($this->upload->do_upload('file'))
		    {		    
		    $data = $this->upload->data();

		    $config['image_library'] = 'gd2';
	        $config['source_image'] = $data['full_path'];
	        $config['maintain_ratio'] = TRUE;
	        $config['width']     = 800;
	        $config['height']   = 266;

	        $this->load->library('image_lib', $config); 
	        $this->image_lib->resize();

	        $SKU_Foto=$this->ventaModel->addVaucheFoto($idVenta,$data["file_name"]);
		        if ($SKU_Foto) {
			    	echo $idVenta;
		        }
		    }
		   }
		  }
	    }

        public function detalle_compra($Pac_IdPago_Compra=false)
        {
        	if($Pac_IdPago_Compra)
        	{
        		$Pac_IdPago_Compra = (int)$Pac_IdPago_Compra;
	 			$data = $this->acl->load_datos("no", "comprador");
		        $data['pagina']['titulo'] = 'Resumen de compra';

		        $this->load->model("Venta_Detalle_model", "ventaDetalleModel");
		        $data['compra'] = $this->ventaModel->get_compra_directa2($Pac_IdPago_Compra);
		       	$data['compra_info'] = $this->ventaModel->get_compra_info($Pac_IdPago_Compra);
		        $data['idcompra'] = $Pac_IdPago_Compra;
		        $data['vauche']=$this->gestionModel->get_vauche_compra($Pac_IdPago_Compra);

		        $data['compra_detalle'] = $this->ventaDetalleModel->get_detalle_compra($Pac_IdPago_Compra);		
		        $this->twig->parse('comprador/compra_detalle_pago.twig', $data);
        	}
        	else
        	{
        		show_404();
        	}
        }

        public function calificar($Ven_IdVenta=false)
        {
        	if($Ven_IdVenta)
        	{
        		$Ven_IdVenta = (int)$Ven_IdVenta;
	 			$data = $this->acl->load_datos("no", "no", "comprador");
		        $data['pagina']['titulo'] = 'Calificación de compra';

		        $data['idventa'] = $Ven_IdVenta;
		        $venta = $this->ventaModel->get_venta($Ven_IdVenta);
		        $data['idtienda'] = $venta->Tie_IdTienda;
		        $data['idusuario'] = $venta->Usu_IdUsuario;

		        $this->twig->parse('comprador/calificacion.twig', $data);
        	}
        	else
        	{
        		show_404();
        	}
        }

        public function reportar($Ven_IdVenta=false)
        {
        	if($Ven_IdVenta)
        	{
        		$Ven_IdVenta = (int)$Ven_IdVenta;
	 			$data = $this->acl->load_datos("no", "no", "comprador");
		        $data['pagina']['titulo'] = 'Calificación de compra';

		        $data['idventa'] = $Ven_IdVenta;
		        $venta = $this->ventaModel->get_venta($Ven_IdVenta);
		        $data['idtienda'] = $venta->Tie_IdTienda;
		        $data['idusuario'] = $venta->Usu_IdUsuario;
		        $data['reportado'] = $this->ventaModel->get_reportado($Ven_IdVenta);

		        $data['reporte1'] = $this->ventaModel->get_reporte1();
		        $data['reporte2'] = $this->ventaModel->get_reporte2();
		        $data['reporte3'] = $this->ventaModel->get_reporte3();
		        $data['reporte4'] = $this->ventaModel->get_reporte4();

		        $this->twig->parse('comprador/reportar.twig', $data);
        	}
        	else
        	{
        		show_404();
        	}
        }

        public function califica_compra_tienda()
        {
        	if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "comprador");
     			$Cal_Compra = $this->input->post('cCompra');
				$Cal_Tienda = $this->input->post('cTienda');
                $Cal_Comentario = $this->input->post('comentario'); 
                $Ven_IdVenta = $this->input->post('idVenta'); 
                $Tie_IdTienda = $this->input->post('idTienda');
                $Usu_IdUsuario = $this->input->post('idUsuario');
                $registrar_calificacion = $this->ventaModel->insert_calificacion($Cal_Compra,$Cal_Tienda,$Usu_IdUsuario,$Tie_IdTienda,$Ven_IdVenta,$Cal_Comentario);
                if(is_null($registrar_calificacion))
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

        public function reportar_compra_tienda()
        {
        	if ($this->input->is_ajax_request())
			{
     			$data = $this->acl->load_datos("no", "no", "comprador");
     			$r1 = $this->input->post('r1');
				$r2 = $this->input->post('r2');
                $r3 = $this->input->post('r3'); 
                $r4 = $this->input->post('r4'); 
                $Ven_IdVenta = $this->input->post('idVenta'); 
                $Tie_IdTienda = $this->input->post('idTienda');
                $Usu_IdUsuario = $this->input->post('idUsuario');
                $comentario = $this->input->post('comentario');
                $registrar_reporte = $this->ventaModel->insert_reporte($r1,$r2,$r3,$r4,$Tie_IdTienda,$Ven_IdVenta,$comentario,$Usu_IdUsuario);
                if(is_null($registrar_reporte))
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

		public function ajax_procesar_compra()
		{
			if ($this->input->is_ajax_request())
			{
				$data = $this->acl->load_datos("no", "no", "comprador");
				$array_compra = $this->input->post('array_compra');
				$Ven_Total = $this->input->post('total');
				$Vef_DirEnvio = $this->input->post('Vef_DirEnvio');
                $Vef_Banco = $this->input->post('Vef_Banco'); 
                $Vef_RUC = $this->input->post('Vef_RUC'); 
                $Vef_RazonSocial = $this->input->post('Vef_RazonSocial'); 
				$Cot_IdCotizacion = $this->input->post('id_cotizacion');
				$Tie_IdTienda = $this->input->post('id_tienda');
				$Banco = $this->input->post('BancoSelec');

				$Ven_IdVenta = $this->ventaModel->registrar_venta($array_compra, $Ven_Total, $Cot_IdCotizacion, $data['usuario']['id_usuario'], $Vef_DirEnvio,$Vef_Banco, $Vef_RUC, $Vef_RazonSocial, $Tie_IdTienda,$Banco);

				//Correo final a comprador
	 			$this->load->library('correo');
	 			$datostiendaA = $this->tiendaModel->get_tienda_info($Tie_IdTienda);
	           	$correo = $this->input->post('correo_usuario');
	            $datos['pdetalle'] = $this->input->post('array_correo');
	            $datos['idPedido'] = $Ven_IdVenta;
	            $datos['nombre_usuario'] = $this->input->post('nombre_usuario');
	            $datos['codcompra'] = $CodCompra = "1".sprintf('%04d', $Ven_IdVenta)."T";;
	            $datos['banco'] = $Vef_Banco;
	            $datos['subtotal'] = $this->input->post('subTotalCompra');
	            $datos['direnvio'] = $Vef_DirEnvio;
	            $datos['nombre_tienda'] = $datostiendaA->Tie_Nombre;
	            $datos['ventaTotal'] = $this->input->post('total');
	            $datos['subdominio'] = $datostiendaA->Tie_Subdominio;
	            $contenido_correo = $this->twig->parse('correo/cotizacion_cliente3.twig', $datos, true);
	            $this->correo->enviar($correo, "Recibo venta de compra #".sprintf('%04d', $Ven_IdVenta), $contenido_correo);

	            //Correo final al vendedor
	            $datostiendaB = $this->tiendaModel->get_info_persona_tienda_simple($Tie_IdTienda);
	            $datoUsuario = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
				$datostiendaC = $this->tiendaModel->get_primer_local_x_tienda($Tie_IdTienda);
	            $datos_tienda['pdetalle'] = $this->input->post('array_correo');
	            //print_r($datos_tienda['pdetalle']);
	            $datos_tienda['nombre_usuario'] = $datoUsuario->Per_Nombre;
	            $datos_tienda['nombre_tienda'] = $datostiendaA->Tie_Nombre;
	            $datos_tienda['direccion_tienda'] = $datostiendaC->Loc_Direccion;
	            $datos_tienda['telefono_tienda'] = $datostiendaB->Per_Telefono;
	            $datos_tienda['correo_tienda'] = $datostiendaB->Per_Correo;
	            $correo_tienda = $this->usuarioModel->get_usuario_x_tienda_unico($Tie_IdTienda);

	            $contenido_correo_tienda = $this->twig->parse('correo/cotizacion_cliente5B.twig', $datos_tienda, true);
	            $this->correo->enviar($correo_tienda->Usu_Correo, "Cotización #".sprintf('%04d', $Ven_IdVenta)." aprobada con COMPRA SEGURA", $contenido_correo_tienda);

				if(is_null($Ven_IdVenta))
				{
					echo false;
				}
				else
				{
					echo $Ven_IdVenta;
				}				
			}
			else
			{
				show_404();
			}
		}

		public function ajax_procesar_compra_acuerdo()
		{
			if ($this->input->is_ajax_request())
			{
				$data = $this->acl->load_datos("no", "no", "comprador");
				$array_compra = $this->input->post('array_compra');
				$Ven_Total = $this->input->post('total');
				$Cot_IdCotizacion = $this->input->post('id_cotizacion');
				$Tie_IdTienda = $this->input->post('id_tienda');

				$Ven_IdVenta = $this->ventaModel->registrar_venta_acuerdo($array_compra, $Ven_Total, $Cot_IdCotizacion, $data['usuario']['id_usuario'], $Tie_IdTienda);

				//Correo final a comprador
	 			$this->load->library('correo');
	 			$datostiendaA = $this->tiendaModel->get_tienda_info($Tie_IdTienda);
	 			$datostiendaB = $this->tiendaModel->get_info_persona_tienda_simple($Tie_IdTienda);
				$datoUsuario = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
				$datostiendaC = $this->tiendaModel->get_primer_local_x_tienda($Tie_IdTienda); 

	           	$correo = $datoUsuario->Usu_Correo;
	            $datos['pdetalle'] = $this->input->post('array_correo');
	            $datos['idPedido'] = $Ven_IdVenta;
	            $datos['nombre_usuario'] = $datoUsuario->Per_Nombre;
	            
	            $datos['direccion_tienda'] = $datostiendaC->Loc_Direccion;
	            $datos['telefono_tienda'] = $datostiendaB->Per_Telefono;
	            $datos['correo_tienda'] = $datostiendaB->Per_Correo;
	            $datos['nombre_tienda'] = $datostiendaA->Tie_Nombre;
	            $datos['subdominio'] = $datostiendaA->Tie_Subdominio;
	            $contenido_correo = $this->twig->parse('correo/cotizacion_cliente4.twig', $datos, true);
	            $this->correo->enviar($correo, "Recibo acuerdo con tienda #".$Ven_IdVenta, $contenido_correo);

	            //Correo final al vendedor
	            $datos_tienda['pdetalle'] = $this->input->post('array_correo');
	            $datos_tienda['nombre_usuario'] = $datoUsuario->Per_Nombre;
	            $datos_tienda['nombre_tienda'] = $datostiendaA->Tie_Nombre;
	            $datos_tienda['direccion_tienda'] = $datostiendaC->Loc_Direccion;
	            $datos_tienda['telefono_tienda'] = $datostiendaB->Per_Telefono;
	            $datos_tienda['correo_tienda'] = $datostiendaB->Per_Correo;
	            $correo_tienda = $this->usuarioModel->get_usuario_x_tienda_unico($Tie_IdTienda);

	            $contenido_correo_tienda = $this->twig->parse('correo/cotizacion_cliente5.twig', $datos_tienda, true);
	            $this->correo->enviar($correo_tienda->Usu_Correo, "Cotización #".$Ven_IdVenta." aprobada", $contenido_correo_tienda);

				if(is_null($Ven_IdVenta))
				{
					echo false;
				}
				else
				{
					echo $Ven_IdVenta;
				}				
			}
			else
			{
				show_404();
			}
		}

		public function print_data(){
			//Imprimir
			if ($this->input->is_ajax_request())
			{
				$data = $this->acl->load_datos();
				$Tie_IdTienda = $this->input->post('id_tienda');
				$Cot_IdCotizacion = $this->input->post('id_cotizacion');
	 			$datostiendaA = $this->tiendaModel->get_tienda_info($Tie_IdTienda);
				$datoUsuario = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
				$datoCotizacion = $this->cotizacionModel->get_estado_cotizacion_venta($Cot_IdCotizacion);

	            $datos['pdetalle'] = $this->input->post('array_correo');
	            $datos['nombre_usuario'] = $datoUsuario->Per_Nombre;
	            $datos['nombre_tienda'] = $datostiendaA->Tie_Nombre;
	            $datos['ruc_tienda'] = $datostiendaA->Tie_ruc_dni;
	            $datos['id_venta'] = $Cot_IdCotizacion;
	            $datos['fecha_coti'] = $datoCotizacion->Cot_FechaRegistro;

		        
	            //Imprimir
	            $options = new Options();
				$options->set('isRemoteEnabled',true);      
				$dompdf = new Dompdf($options);
		        $html = $this->twig->parse('layout/pdf_acuerdo_tienda.twig', $datos, true);
		 		$nombre = "Cotizacion".$Cot_IdCotizacion.".pdf";

		        $dompdf->loadHtml($html);
		        $dompdf->setPaper('A4', 'portrait');
		        $dompdf->render();
			   	$output = $dompdf->output();
		        file_put_contents("pdfs/".$nombre, $output);
	   
		       	echo $nombre;
			}
		}

	    public function print_delete($pdf=false){
	    	if($pdf)
        	{	
		    	$this->load->helper('download');
				$file_content = file_get_contents(FCPATH.'pdfs/'.$pdf); // Read the file's contents
				if(file_exists(FCPATH.'pdfs/'.$pdf)){
				    unlink(FCPATH.'pdfs/'.$pdf);
				}
				force_download($pdf, $file_content);
			}
	    }
	}
?>