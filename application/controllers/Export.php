<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Export extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			$this->load->model("Producto_model","productoModel");
			$this->load->model("Reporte_model","reporteModel");
		

        }

		public function entregas()
		{		
			$this->load->library('excel');
			$fecha1 = $_POST['date1']; 
			$fecha2 = $_POST['date2']; 
			$this->excel->setActiveSheetIndex(0);
		    $this->excel->getActiveSheet()->setTitle('VENTAS');

		    $this->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("B1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("C1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("D1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("E1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("F1")->getFont()->setBold(true);
	        //PRODUCTOS SEGUN VENTAS
	        $this->excel->getActiveSheet()->setCellValue("A1", 'PRODUCTO');
	        $this->excel->getActiveSheet()->setCellValue("B1", 'VARIACION');
	        $this->excel->getActiveSheet()->setCellValue("C1", 'CANTIDAD');
	        $this->excel->getActiveSheet()->setCellValue("D1", 'PRECIO VENTA');
	        $this->excel->getActiveSheet()->setCellValue("E1", 'PRECIO COMPRA');
	        $this->excel->getActiveSheet()->setCellValue("F1", 'FECHA VENTA');

          $pedidos = $this->productoModel->dps($fecha1,$fecha2);
          $va = $this->productoModel->productos_prooveer();
          $contador = 2;
	        foreach ($pedidos as $key) {
	        	$this->excel->getActiveSheet()->setCellValue("A{$contador}", $key->Pro_Nombre);
	            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $key->SKU_Color);
	            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $key->Pcd_Cantidad);
	            $this->excel->getActiveSheet()->setCellValue("D{$contador}", $key->Pcd_Precio);
	            foreach($va as $v){
            	if ($v->Pro_IdProducto == $key->Pro_IdProducto) {
            		$this->excel->getActiveSheet()->setCellValue("E{$contador}", $v->Ppv_PrecioUnitarioCompra);
            		}
            	}
	            $this->excel->getActiveSheet()->setCellValue("F{$contador}", date("d-m-Y", strtotime($key->Pac_FechaRegistro)));
	        	$contador++;
            }
            $hoy = date('dmY');
            $archivo = "reporte".$hoy.".xls";
	        header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="'.$archivo.'"');
	        header('Cache-Control: max-age=0');
	        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
	        //Hacemos una salida al navegador con el archivo Excel.
	        $objWriter->save('php://output');
		}

		public function ventas_mes()
		{		
			$this->load->library('excel');
			$mes = $_POST['mes']; 
			$this->excel->setActiveSheetIndex(0);
		    $this->excel->getActiveSheet()->setTitle('VENTAS');

		    $this->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("B1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("C1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("D1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("E1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("F1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("G1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("H1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("I1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("J1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("K1")->getFont()->setBold(true);
	        //PRODUCTOS SEGUN VENTAS
	        $this->excel->getActiveSheet()->setCellValue("A1", 'ID COMPRA');
	        $this->excel->getActiveSheet()->setCellValue("B1", 'CLIENTE');
	        $this->excel->getActiveSheet()->setCellValue("C1", 'MONTO PRODUCTOS');
	        $this->excel->getActiveSheet()->setCellValue("D1", 'DELIVERY');
	        $this->excel->getActiveSheet()->setCellValue("E1", 'TOTAL');
	        $this->excel->getActiveSheet()->setCellValue("F1", 'FECHA COMPRA');
	        $this->excel->getActiveSheet()->setCellValue("G1", 'FECHA MODIFICADO');
	        $this->excel->getActiveSheet()->setCellValue("H1", 'ESTADO');
	        $this->excel->getActiveSheet()->setCellValue("I1", 'TIPO PEDIDO');
	        $this->excel->getActiveSheet()->setCellValue("J1", 'METODO PAGO');
	        $this->excel->getActiveSheet()->setCellValue("K1", 'MONTO METODO');

          $pedidos = $this->reporteModel->reporte_ventas_mes($mes);
          $contador = 2;
	        foreach ($pedidos as $key) {
	        	$total_c = $key->pago_productos +  $key->Pac_Envio;
	        	if ( $key->Pac_Estado == 1) {
	        		$estado = "NUEVO";
	        	}elseif ( $key->Pac_Estado == 2) {
	        		$estado = "CONFIRMADO";
	        	}elseif ( $key->Pac_Estado == 5) {
	        		$estado = "ENTREGADO";
	        	}elseif ( $key->Pac_Estado == 6) {
	        		$estado = "ANULADO";	        	
	        	}

	        	if ( $key->Pac_Banco == 'TIENDA') {
	        		$tipo = "RETIRO EN TIENDA";
	        	}elseif($key->Pac_Banco == 'NO'){
	        		$tipo = "CONTRAENTREGA LIMA";
	        	}elseif($key->Pac_Banco == 'TDO'){
	        		$tipo = "DEP / TRANS PROVINCIA";
	        	}

	        	$this->excel->getActiveSheet()->setCellValue("A{$contador}", $key->Pac_IdPago_Compra);
	            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $key->Per_Nombre);
	            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $key->pago_productos);
	            $this->excel->getActiveSheet()->setCellValue("D{$contador}", $key->Pac_Envio);
	            $this->excel->getActiveSheet()->setCellValue("E{$contador}", $total_c);
	            $this->excel->getActiveSheet()->setCellValue("F{$contador}", date("d-m-Y", strtotime($key->Pac_FechaRegistro)));
	            $this->excel->getActiveSheet()->setCellValue("G{$contador}", date("d-m-Y", strtotime($key->Pac_FechaModificado)));
	            $this->excel->getActiveSheet()->setCellValue("H{$contador}", $estado);
	            $this->excel->getActiveSheet()->setCellValue("I{$contador}", $tipo);
	            $this->excel->getActiveSheet()->setCellValue("J{$contador}", $key->Pvoc_MedioPago);
	            $this->excel->getActiveSheet()->setCellValue("K{$contador}", $key->Pvoc_Monto);
	        	$contador++;
            }
            $hoy = date('dmY');
            $archivo = "mes".$mes.".xls";
	        header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="'.$archivo.'"');
	        header('Cache-Control: max-age=0');
	        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
	        //Hacemos una salida al navegador con el archivo Excel.
	        $objWriter->save('php://output');
		}

		public function stock()
		{		
			$this->load->library('excel');
			$this->excel->setActiveSheetIndex(0);
		    $this->excel->getActiveSheet()->setTitle('STOCK');

		    $this->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("B1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("C1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("D1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("E1")->getFont()->setBold(true);
	        //PRODUCTOS SEGUN VENTAS
	        $this->excel->getActiveSheet()->setCellValue("A1", 'PRODUCTO');
	        $this->excel->getActiveSheet()->setCellValue("B1", 'VARIACION');
	        $this->excel->getActiveSheet()->setCellValue("C1", 'STOCK DISPONIBLE');
	        $this->excel->getActiveSheet()->setCellValue("D1", 'COSTO ADQUISICION');

          $pedidos = $this->productoModel->stock_fecha();
          $va = $this->productoModel->productos_prooveer();
          $contador = 2;
	        foreach ($pedidos as $key) {
	        	$this->excel->getActiveSheet()->setCellValue("A{$contador}", $key->Pro_Nombre);
	            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $key->SKU_Color);
	            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $key->SKU_StockDisponible);
	            foreach($va as $v){
	            	if ($v->Pro_IdProducto == $key->Pro_IdProducto) {
	            		$this->excel->getActiveSheet()->setCellValue("D{$contador}", $v->Ppv_PrecioUnitarioCompra);
	            		}
	            	}
	        	$contador++;
            }
            $hoy = date('dmY');
            $archivo = "stock".$hoy.".xls";
	        header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="'.$archivo.'"');
	        header('Cache-Control: max-age=0');
	        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
	        //Hacemos una salida al navegador con el archivo Excel.
	        $objWriter->save('php://output');
		}

		// public function etiqueta()
		// {		
		// 	$this->load->library('excel');
		// 	$this->excel->setActiveSheetIndex(0);
		//     $this->excel->getActiveSheet()->setTitle('STOCK');

		//     $this->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
	 //        $this->excel->getActiveSheet()->getStyle("B1")->getFont()->setBold(true);
	 //        $this->excel->getActiveSheet()->getStyle("C1")->getFont()->setBold(true);
	 //        //PRODUCTOS SEGUN VENTAS
	 //        $this->excel->getActiveSheet()->setCellValue("A1", 'PRODUCTO');
	 //        $this->excel->getActiveSheet()->setCellValue("B1", 'COD');
	 //        $this->excel->getActiveSheet()->setCellValue("C1", 'PRECIO');

  //         $pedidos = $this->almacenModel->get_productos_etiqueta();
  //         $contador = 2;
	 //        foreach ($pedidos as $key) {
	 //        	$this->excel->getActiveSheet()->setCellValue("A{$contador}", $key->Pro_Nombre);
	 //            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $key->Pro_IdProducto);
	 //            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $key->Pro_PrecioMinimo);
	
	 //        	$contador++;
  //           }
  //           $hoy = date('dmY');
  //           $archivo = "etiqueta".$hoy.".xls";
	 //        header('Content-Type: application/vnd.ms-excel');
	 //        header('Content-Disposition: attachment;filename="'.$archivo.'"');
	 //        header('Cache-Control: max-age=0');
	 //        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
	 //        //Hacemos una salida al navegador con el archivo Excel.
	 //        $objWriter->save('php://output');
		// }

		public function clientes_estado()
		{		
			$this->load->library('excel');
			$this->excel->setActiveSheetIndex(0);
		    $this->excel->getActiveSheet()->setTitle('clientes');

		    $this->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("B1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("C1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("D1")->getFont()->setBold(true);
	        $this->excel->getActiveSheet()->getStyle("E1")->getFont()->setBold(true);
	        //PRODUCTOS SEGUN VENTAS
	        $this->excel->getActiveSheet()->setCellValue("A1", 'FECHA REGISTRO');
	        $this->excel->getActiveSheet()->setCellValue("B1", 'ID CLIENTE');
	        $this->excel->getActiveSheet()->setCellValue("C1", 'CLIENTE');
	        $this->excel->getActiveSheet()->setCellValue("D1", 'ENTREGADO');
	        $this->excel->getActiveSheet()->setCellValue("E1", 'VALOR ENTREGADO');
	        $this->excel->getActiveSheet()->setCellValue("F1", 'ULTIMO ESTADO');
	        $this->excel->getActiveSheet()->setCellValue("G1", 'FECHA ULTIMO PEDIDO');
	        $this->excel->getActiveSheet()->setCellValue("H1", 'VENDEDOR');

          $pedidos = $this->reporteModel->get_clientes_registrado();
          $contador = 2;
	        foreach ($pedidos as $key) {
	        	$this->excel->getActiveSheet()->setCellValue("A{$contador}", $key->Usu_Created);
	            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $key->Usu_IdUsuario);
	            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $key->Per_Nombre);
	            $this->excel->getActiveSheet()->setCellValue("D{$contador}", $key->entregado);
	            $this->excel->getActiveSheet()->setCellValue("E{$contador}", $key->monto_entregado);
	            $this->excel->getActiveSheet()->setCellValue("F{$contador}", $key->ultimo_estado);
	            $this->excel->getActiveSheet()->setCellValue("G{$contador}", $key->ultimo_pedido);
	            $this->excel->getActiveSheet()->setCellValue("H{$contador}", $key->Usu_IdUsuario_Ven);
	        	$contador++;
            }
            $hoy = date('dmY');
            $archivo = "clientes".$hoy.".xls";
	        header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="'.$archivo.'"');
	        header('Cache-Control: max-age=0');
	        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
	        //Hacemos una salida al navegador con el archivo Excel.
	        $objWriter->save('php://output');
		}


	}
?>