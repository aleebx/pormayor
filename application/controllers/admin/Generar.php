<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Generar extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			$this->load->model("Usuario_model", "usuarioModel");
			$this->load->model("Venta_model", "ventaModel");
			$this->load->model("Configuracion_model", "configuracionModel");
        }

		public function index()
		{

			$data = $this->acl->load_datos("no", "no", "admin");

	        $data['pagina']['titulo'] = 'GENERAR ARCHIVOS COBROS Y PAGO';
	        $data['ventas_bcp'] = $this->ventaModel->get_ventas_bcp();
	        $data['pagos_bcp'] = $this->ventaModel->get_pagos_bcp();
	        $data['planes_tienda'] = $this->ventaModel->get_planes_tienda();

	        $data['ventas_ch'] = $this->ventaModel->get_ventas_ch();
	        $data['pagos_ch'] = $this->ventaModel->get_pagos_ch();
	        
	        $this->twig->parse('admin/generar.twig', $data);

		}

		public function variaciones()
		{

			$data = $this->acl->load_datos("no", "no", "admin");

	        $data['pagina']['titulo'] = 'GENERAR VARIACIONES PRODUCTO';
	        $data['lista'] = $this->ventaModel->listaVariaciones();
	        $data['productos'] = $this->ventaModel->listaProductos();
	        $data['categoria'] = $this->ventaModel->categoriaNueva();
	        $this->twig->parse('admin/cambiar_cat.twig', $data);
	        // $this->twig->parse('admin/variaciones.twig', $data);

		}

		public function crep_file_bcp(){

			$this->load->helper('download');
			

			$ventas_clientes = $this->ventaModel->get_venta_bcp_crep();
			$compra_clientes = $this->ventaModel->get_pagos_bcp_crep();
	        $planes_tienda = $this->ventaModel->get_planes_tienda_crep();

			// print_r($compra_clientes);

			$lineasBcp="";
			$lineaVacia="";

			$empresa="CC19102545688CPORMAYOR.PE S.A.                        ";
				
			$hoy = date('Ymd');
			
			$cantR1 = count($compra_clientes);
			$cantR2 = count($ventas_clientes);
			$cantR3 = count($planes_tienda);

			$cantR = $cantR1+$cantR2+$cantR3;

			$cantidad = str_pad($cantR, 9, "0", STR_PAD_LEFT);

			$total = 0;
			$totalV = 0;
			$totalT = 0;

			foreach ($compra_clientes as $key) {
				$total = $total + $key->Pac_Total;
			}
			foreach ($ventas_clientes as $key) {
				$totalV = $totalV + $key->Ven_Total;
			}
			foreach ($planes_tienda as $key) {
				$totalT = $totalT + $key->Pap_Monto;
			}
			$totalVC = $total + $totalV + $totalT;
			$total2 = number_format($totalVC, 2, '.', '');
			$montototal = str_replace('.','',$total2);
			$montototal2 = str_pad($montototal, 15, "0", STR_PAD_LEFT);



			$l1 = $empresa.$hoy.$cantidad.$montototal2."R";


			$l2="";
			$lPagos="";
			foreach ($compra_clientes as $key) {
				// print_r($compra_clientes);
				$tr = "DD";
				$cs = "191";
				$cm = "0";
				$ce = "2545688";
				$codigo = str_pad($key->Pac_CodPago, 14," ", STR_PAD_LEFT);
				$nombre = str_pad(strtoupper($key->Per_Nombre), 40);
				$cir = str_pad($lineaVacia, 30);
				// $f = $compra_clientes[0]->Pac_FechaRegistro;
				$FechaRegistro = date_format(new DateTime($key->Pac_FechaRegistro),"Ymd");
				$FechaVencimiento = date_format(new DateTime($key->Pac_FechaVencimiento),"Ymd");
				$monto = $key->Pac_Total;

				$montopagar = str_replace('.','',$monto);
				
				$montopagar2 = str_pad($montopagar, 15, "0", STR_PAD_LEFT);
				
				$mm = str_pad($lineaVacia, 15, "0");
				$mmin = str_pad($lineaVacia, 9);

				$tr2= " ";
				
				$nroPago = str_pad($lineaVacia, 20);
				$nroDoc = str_pad($lineaVacia, 16);
				$filler = str_pad($lineaVacia, 61);
				$l2 = $tr.$cs.$cm.$ce.$codigo.$nombre.$cir.$FechaRegistro.$FechaVencimiento.$montopagar2.$mm.$mmin.$tr2.$nroPago.$nroDoc.$filler;
				$lPagos = $lPagos.$l2."\r\n";
			}

			foreach ($ventas_clientes as $key) {
				// print_r($compra_clientes);
				$tr = "DD";
				$cs = "191";
				$cm = "0";
				$ce = "2545688";
				$codigo = str_pad($key->Ven_CodCompra, 14," ", STR_PAD_LEFT);
				$nombre = str_pad(strtoupper($key->Per_Nombre), 40);
				$cir = str_pad($lineaVacia, 30);
				// $f = $compra_clientes[0]->Pac_FechaRegistro;
				$Ven_FechaVencimiento = date('Y-m-d H:i:s', strtotime($key->Ven_FechaRegistro. ' + 15 days'));
				$FechaRegistro = date_format(new DateTime($key->Ven_FechaRegistro),"Ymd");
				$FechaVencimiento = date_format(new DateTime($Ven_FechaVencimiento),"Ymd");
				$monto = $key->Ven_Total;

				$montopagar = str_replace('.','',$monto);
				
				$montopagar2 = str_pad($montopagar, 15, "0", STR_PAD_LEFT);
				
				$mm = str_pad($lineaVacia, 15, "0");
				$mmin = str_pad($lineaVacia, 9);

				$tr2= " ";
				
				$nroPago = str_pad($lineaVacia, 20);
				$nroDoc = str_pad($lineaVacia, 16);
				$filler = str_pad($lineaVacia, 61);
				$l2 = $tr.$cs.$cm.$ce.$codigo.$nombre.$cir.$FechaRegistro.$FechaVencimiento.$montopagar2.$mm.$mmin.$tr2.$nroPago.$nroDoc.$filler;
				$lPagos = $lPagos.$l2."\r\n";
			}

			foreach ($planes_tienda as $key) {
				// print_r($compra_clientes);
				$tr = "DD";
				$cs = "191";
				$cm = "0";
				$ce = "2545688";
				$codigo = str_pad($key->Codigo, 14," ", STR_PAD_LEFT);
				$nombre = str_pad(strtoupper($key->Per_Nombre), 40);
				$cir = str_pad($lineaVacia, 30);
				// $f = $compra_clientes[0]->Pac_FechaRegistro;
				$Pap_FechaVencimiento = date('Y-m-d H:i:s', strtotime($key->Pap_FechaRegistro. ' + 15 days'));
				$FechaRegistro = date_format(new DateTime($key->Pap_FechaRegistro),"Ymd");
				$FechaVencimiento = date_format(new DateTime($Pap_FechaVencimiento),"Ymd");
				$monto = $key->Pap_Monto;

				$montopagar = str_replace('.','',$monto);
				
				$montopagar2 = str_pad($montopagar, 15, "0", STR_PAD_LEFT);
				
				$mm = str_pad($lineaVacia, 15, "0");
				$mmin = str_pad($lineaVacia, 9);

				$tr2= " ";
				
				$nroPago = str_pad($lineaVacia, 20);
				$nroDoc = str_pad($lineaVacia, 16);
				$filler = str_pad($lineaVacia, 61);
				$l2 = $tr.$cs.$cm.$ce.$codigo.$nombre.$cir.$FechaRegistro.$FechaVencimiento.$montopagar2.$mm.$mmin.$tr2.$nroPago.$nroDoc.$filler;
				$lPagos = $lPagos.$l2."\r\n";
			}

			$CREP = $l1."\r\n".$lPagos;

			// echo $CREP;

			$name = 'CREP.txt';
			force_download($name, $CREP);	

		}

		public function ajax_editar_categoria()
	    {
	    	if ($this->input->is_ajax_request())
	      	{
		        $data = $this->acl->load_datos("no", "no", "si");

		        $Cat_Id = (int)$this->input->post('Cat_Id');
		        $nombre_cat =$this->input->post('nombre_cat');
		        $edicion = $this->configuracionModel->editCategoria($Cat_Id,$nombre_cat);


		        if ($edicion)
				{
					echo "Correcto";			
				}
	      	}
	    }

	    public function ajax_editar_suc()
	    {
	    	if ($this->input->is_ajax_request())
	      	{
		        $data = $this->acl->load_datos("no", "no", "si");

		        $Suc_Id = (int)$this->input->post('Suc_Id');
		        $nombre_Suc =$this->input->post('nombre_Suc');
		        $edicion = $this->configuracionModel->editSuc($Suc_Id,$nombre_Suc);


		        if ($edicion)
				{
					echo "Correcto";			
				}
	      	}
	    }

	    public function ajax_editar_des()
	    {
	    	if ($this->input->is_ajax_request())
	      	{
		        $data = $this->acl->load_datos("no", "no", "si");

		        $Des_Id = (int)$this->input->post('Des_Id');
		        $nombre_Des =$this->input->post('nombre_Des');
		        $edicion = $this->configuracionModel->editDes($Des_Id,$nombre_Des);


		        if ($edicion)
				{
					echo "Correcto";			
				}
	      	}
	    }


	    //1 BUSCA EL DETALLE DE LA SUBCATEGORIAS SEGUN EL ID DE LA SUBCATEGORIA
	    public function subC()
		{
		 $data = $this->acl->load_datos();
		  if ($this->input->is_ajax_request()) {
				$categoria_id = $this->input->post('Cat_IdCategoria');
				
	      		$data['subCategoria'] = $this->ventaModel->get_subc($categoria_id);

	      		print_r(json_encode($data['subCategoria']));
			}
      	  
		}

	    public function listSub()
	    {
	      if($this->input->is_ajax_request())
	      {
	        $data = $this->acl->load_datos();
		    $data['subcategoria'] = $this->input->post('datos');

	        $this->twig->parse('admin/listSubCategoria.twig', $data);	        
	      }
	      else
	      {
	        show_404();
	      }
	    }

		//////////////////////////////////////////////////////////////////

	    public function detC()
		{
		 $data = $this->acl->load_datos();
		  if ($this->input->is_ajax_request()) {
				$Suc_IdSubCategoria = $this->input->post('Suc_IdSubCategoria');
				
	      		$data['detalle'] = $this->ventaModel->get_detc($Suc_IdSubCategoria);

	      		print_r(json_encode($data['detalle']));
			}
      	  
		}
		  public function listDet()
	    {
	      if($this->input->is_ajax_request())
	      {
	        $data = $this->acl->load_datos();
		    $data['detalle'] = $this->input->post('datos');

	        $this->twig->parse('admin/listDetalle.twig', $data);	        
	      }
	      else
	      {
	        show_404();
	      }
	    }

	    public function detalleProducto()
		{
		 $data = $this->acl->load_datos();
		  if ($this->input->is_ajax_request()) {
				$Pro_IdProducto = $this->input->post('Pro_IdProducto');
				
	      		$data['prodetalle'] = $this->ventaModel->detalle_producto($Pro_IdProducto);

	      		print_r(json_encode($data['prodetalle']));
			}
      	  
		}

	    public function detalleProducto2()
		{
		 $data = $this->acl->load_datos();
		  if ($this->input->is_ajax_request()) {
				$Pro_IdProducto = $this->input->post('Pro_IdProducto');
				
	      		$data['prodetalle'] = $this->ventaModel->detalle_producto2($Pro_IdProducto);

	      		print_r(json_encode($data['prodetalle']));
			}
      	  
		}

		public function listDetalleProducto()
	    {
	      if($this->input->is_ajax_request())
	      {
	        $data = $this->acl->load_datos();
		    $data['prodetalle'] = $this->input->post('datos');

	        $this->twig->parse('admin/listDetalleProducto.twig', $data);	        
	      }
	      else
	      {
	        show_404();
	      }
	    }

		public function listDetalleProducto2()
	    {
	      if($this->input->is_ajax_request())
	      {
	        $data = $this->acl->load_datos();
		    $data['prodetalle'] = $this->input->post('datos');

	        $this->twig->parse('admin/listDetalleProducto2.twig', $data);	        
	      }
	      else
	      {
	        show_404();
	      }
	    }

	    public function variaciones_categorias()
		{		  
		  if ($this->input->is_ajax_request()) {
		  		$data = $this->acl->load_datos();
				$Des_IdDetalle_SubCategoria = $this->input->post('Des_IdDetalle_SubCategoria');
				
	      		$data['var_cat'] = $this->ventaModel->get_var_cat($Des_IdDetalle_SubCategoria);

	      		print_r(json_encode($data['var_cat']));
			}      	  
		}

		public function var_cat()
	    {
	      if($this->input->is_ajax_request())
	      {
	      	$data = $this->acl->load_datos();
		    $data['var_cat'] = $this->input->post('datos');
		    $Des_IdDetalle_SubCategoria = $this->input->post('Des_IdDetalle_SubCategoria');
		    $data['variacion'] = $this->ventaModel->get_variacion_sub($Des_IdDetalle_SubCategoria);
		    $data['colores'] = $this->configuracionModel->get_colores();

	        $this->twig->parse('usuario/model/variacion_categoria.twig', $data);
	        
	      }
	      else
	      {
	        show_404();
	      }
	    }

		public function actCategorias()
	    {
	      if($this->input->is_ajax_request())
	      {
	      	$data = $this->acl->load_datos();

		    $Pro_IdProducto = $this->input->post('Pro_IdProducto');
		    $Cat_IdCategoria = $this->input->post('Cat_IdCategoria');
		    $Suc_IdSuCategoria = $this->input->post('Suc_IdSuCategoria');
		    $Des_IdDetalle_SubCategoria = $this->input->post('Des_IdDetalle_SubCategoria');
		    $actualizar= $this->ventaModel->actualizar_categorias($Pro_IdProducto,$Cat_IdCategoria,$Suc_IdSuCategoria,$Des_IdDetalle_SubCategoria);

		    if($actualizar){
		    	echo 1;
		    }else{
		    	echo 2;

		    }
	        // $this->twig->parse('usuario/model/variacion_categoria.twig', $data);
	        
	      }
	      else
	      {
	        show_404();
	      }
	    }

	    public function generar_excel(){
		    $pagos_ch = $this->ventaModel->get_pagos_ch_excel();
		    $ventas_ch = $this->ventaModel->get_ventas_ch_excel();
		    if(count($pagos_ch) > 0 or count($ventas_ch) > 0){
		        //Cargamos la librería de excel.
		        $this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
		        $this->excel->getActiveSheet()->setTitle('PAGOS PORMAYOR.PE');
		        //Contador de filas
		        $hoy = date('Ymd');
		        $hoy2 = date('d/m/Y');
		        $contador = 6;
		        $this->excel->getActiveSheet()->setCellValue("B4", 'LISTADO DE COMPRADORES');
		        $this->excel->getActiveSheet()->setCellValue("B5", 'CONCEPTO:PAGO');
		        $this->excel->getActiveSheet()->setCellValue("C3", 'RECAUDACION DE PORMAYOR.PE');
		        $this->excel->getActiveSheet()->setCellValue("F2", 'FECHA');
		        $this->excel->getActiveSheet()->setCellValue("G2", $hoy2);
		        //Le aplicamos ancho las columnas.
		        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
		        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
		        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(100);
		        //Le aplicamos negrita a los títulos de la cabecera.
		        $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("H{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("I{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("J{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("K{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("L{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("M{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("N{$contador}")->getFont()->setBold(true);
		        $this->excel->getActiveSheet()->getStyle("O{$contador}")->getFont()->setBold(true);
		        //Definimos los títulos de la cabecera.
		        $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Código de Cliente de la Empresa');
		        $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Código de documento de cobranza (N° de recibo) Opcional');
		        $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Número de documento de identidad');
		        $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Apellido Paterno');
		        $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'Apellido Materno');
		        $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'Nombres');
		        $this->excel->getActiveSheet()->setCellValue("G{$contador}", 'Nombre del Cliente');
		        $this->excel->getActiveSheet()->setCellValue("H{$contador}", 'Domicilio del Cliente');
		        $this->excel->getActiveSheet()->setCellValue("I{$contador}", 'Código de Moneda (1 soles, 2 dólares)');
		        $this->excel->getActiveSheet()->setCellValue("J{$contador}", 'Total de cobro por concepto');
		        $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'Prioridad de Pago (Por defecto 1)');
		        $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'Periodo de pago (AAAAMM)');
		        $this->excel->getActiveSheet()->setCellValue("M{$contador}", 'Fecha de vencimiento de pago (DD/MM/YYYY)');
		        $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'Tipo de Mora por dia (F Fijo, P Porcentual)');
		        $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'Valor de Mora por dia');
		        //Definimos la data del cuerpo. 
       
		        foreach($pagos_ch as $l){
		           //Incrementamos una fila más, para ir a la siguiente.
		           $contador++;
		           //Informacion de las filas de la consulta.
		           $FechaVencimiento = date_format(new DateTime($l->Pac_FechaVencimiento),"d/m/Y");
		           $this->excel->getActiveSheet()->setCellValue("A{$contador}", $l->Pac_CodPago);
		           $this->excel->getActiveSheet()->setCellValue("B{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->Per_DNI);
		           $this->excel->getActiveSheet()->setCellValue("D{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("E{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("F{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("G{$contador}", $l->Per_Nombre);
		           $this->excel->getActiveSheet()->setCellValue("H{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("I{$contador}", "1");
		           $this->excel->getActiveSheet()->setCellValue("J{$contador}", $l->Pac_Total);
		           $this->excel->getActiveSheet()->setCellValue("K{$contador}", "1");
		           $this->excel->getActiveSheet()->setCellValue("L{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("M{$contador}", $FechaVencimiento);
		           $this->excel->getActiveSheet()->setCellValue("N{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("O{$contador}", "");
		        }       
		        foreach($ventas_ch as $l){
		           //Incrementamos una fila más, para ir a la siguiente.
		           $contador++;

		           
		           $Ven_FechaVencimiento = date('d/m/Y', strtotime($l->Ven_FechaRegistro. ' + 15 days'));
		           //Informacion de las filas de la consulta.
		           $this->excel->getActiveSheet()->setCellValue("A{$contador}", $l->Ven_CodCompra);
		           $this->excel->getActiveSheet()->setCellValue("B{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->Per_DNI);
		           $this->excel->getActiveSheet()->setCellValue("D{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("E{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("F{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("G{$contador}", $l->Per_Nombre);
		           $this->excel->getActiveSheet()->setCellValue("H{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("I{$contador}", "1");
		           $this->excel->getActiveSheet()->setCellValue("J{$contador}", $l->Ven_Total);
		           $this->excel->getActiveSheet()->setCellValue("K{$contador}", "1");
		           $this->excel->getActiveSheet()->setCellValue("L{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("M{$contador}", $Ven_FechaVencimiento);
		           $this->excel->getActiveSheet()->setCellValue("N{$contador}", "");
		           $this->excel->getActiveSheet()->setCellValue("O{$contador}", "");
		        }
		        //Le ponemos un nombre al archivo que se va a generar.
		        $archivo = "pagoscajahuancayo".$hoy.".xls";
		        header('Content-Type: application/vnd.ms-excel');
		        header('Content-Disposition: attachment;filename="'.$archivo.'"');
		        header('Cache-Control: max-age=0');
		        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
		        //Hacemos una salida al navegador con el archivo Excel.
		        $objWriter->save('php://output');
		     }else{
		        echo 'No se han encontrado pagos';
		        exit;        
		     }
		  }
		


	}
?>