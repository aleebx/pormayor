<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pago extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
      $this->load->model("Pago_model", "pagoModel");
      $this->load->model("Cotizacion_model", "cotizacionModel");
      $this->load->model("Producto_model", "productoModel");
      $this->load->model("Usuario_model", "usuarioModel");
		}
    //FUNCIONES PAGO VISANET
    function authorization(){

      $ts = $this->tokenSeguridad();
      // $host = "https://apitestenv.vnforapps.com/api.authorization/v3/authorization/ecommerce/602545705";
      $host = "https://apiprod.vnforapps.com/api.authorization/v3/authorization/ecommerce/603706801";
      $tkId = (string)$_POST['transactionToken'];
      $data = array(
          'antifraud' => null,
          'captureType' => 'manual',
          'channel' => 'web',
          'countable' => 'true',
          'order' => array('amount' => $_SESSION['monto'] ,'currency' => 'PEN','purchaseNumber' => $_SESSION['codigo'],'tokenId' => $tkId),
          'sponsored' => null
      );

      unset($_SESSION['monto']);
      unset($_SESSION['codigo']);
      $payload = json_encode($data);
      //echo "<br><br>AQUI COMIENZA EL PAYLOAD<br><br>";
      //print_r($payload);

      $ch = curl_init($host);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLINFO_HEADER_OUT, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

      // Set HTTP Header for POST request 
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Authorization: '. $ts,
          'Content-Length: ' . strlen($payload))
      );

      $responseBody = curl_exec($ch);
      $responseInfo = curl_getinfo($ch);
      curl_close($ch);

      $dataCard = json_decode($responseBody, true);
      $this->visanet_test_error($dataCard);
    }

    function tokenSeguridad(){
      // $host = "https://apitestenv.vnforapps.com/api.security/v1/security";
      $host = "https://apiprod.vnforapps.com/api.security/v1/security";

      $usuario = 'alexis.bequiz@pormayor.pe';
      $clave = '$9X2j!!V';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:text/plain"));
      curl_setopt($ch, CURLOPT_USERPWD, "$usuario:$clave");
      curl_setopt($ch, CURLOPT_URL, $host);

      $responseBody = curl_exec($ch);
      $responseInfo = curl_getinfo($ch);
      curl_close($ch);

      return $responseBody;
    }

    function sessionKey($monto,$ipaddress,$codigo){
      $ts = $this->tokenSeguridad();
      // $host2 = "https://apitestenv.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/602545705";
      $host2 = "https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/603706801";
      $data = array(
            'amount' => $monto,
            'antifraud' => array(
              'clientIp' => $ipaddress, 
              'merchantDefineData' => array('MDD1' => $codigo )
              ),
            'channel' => 'web',
            'recurrenceMaxAmount' => '10000.00'
        );

      $payload = json_encode($data);
      // print_r($payload);

      $ch = curl_init($host2);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLINFO_HEADER_OUT, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

      // Set HTTP Header for POST request 
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Authorization: '. $ts,
          'Content-Length: ' . strlen($payload))
      );

      $responseBody = curl_exec($ch);
      $responseInfo = curl_getinfo($ch);
      curl_close($ch);    
      $r = json_decode($responseBody);
      return $r->sessionKey;
    }

    function visanet_test_error($dataCard){
      $data = $this->acl->load_datos("no", "comprador");
      // print_r($dataCard);
      // exit();
      if (array_key_exists('errorCode', $dataCard)) {
        if ($dataCard['errorCode'] == 101) {
          $data['error_card'] = 'Operación Denegada. Tarjeta Vencida. Verifique los datos en su tarjeta e ingréselos correctamente';
        }else if ($dataCard['errorCode'] == 104) {
          $data['error_card'] = 'Operación Denegada. Operación no permitida para esta tarjeta. Contactar con la entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 106) {
          $data['error_card'] = 'Operación Denegada. Intentos de clave secretaexcedidos. Contactar con la entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 107) {
          $data['error_card'] = 'Operación Denegada. Contactar con la entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 108) {
          $data['error_card'] = 'Operación Denegada. Contactar con la entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 109 or $dataCard['errorCode'] == 111 or $dataCard['errorCode'] == 401 or $dataCard['errorCode'] == 263 or $dataCard['errorCode'] == 404 or $dataCard['errorCode'] == 405 or $dataCard['errorCode'] == 406 or $dataCard['errorCode'] == 407 or $dataCard['errorCode'] == 668 or $dataCard['errorCode'] == 669 or $dataCard['errorCode'] == 670 or $dataCard['errorCode'] == 673 or $dataCard['errorCode'] == 674 or $dataCard['errorCode'] == 676 or $dataCard['errorCode'] == 677 or $dataCard['errorCode'] == 678) {
          $data['error_card'] = 'Operación Denegada. Contactar con el comercio.';
        }else if ($dataCard['errorCode'] == 110) {
          $data['error_card'] = 'Operación Denegada. Operación no permitida para esta tarjeta. Contactar con la entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 112) {
          $data['error_card'] = 'Operación Denegada. Se requiere clave secreta';
        }else if ($dataCard['errorCode'] == 116) {
          $data['error_card'] = 'Operación Denegada. Fondos insuficientes. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 117) {
          $data['error_card'] = 'Operación Denegada. Clave secreta incorrecta';
        }else if ($dataCard['errorCode'] == 118 or $dataCard['errorCode'] == 180) {
          $data['error_card'] = 'Operación Denegada. Tarjeta Inválida. Contactar con entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 119) {
          $data['error_card'] = 'Operación Denegada. Intentos de clave secreta excedidos. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 121 or $dataCard['errorCode'] == 199 or $dataCard['errorCode'] == 402 or $dataCard['errorCode'] == 414 or $dataCard['errorCode'] == 415 or $dataCard['errorCode'] == 416 or $dataCard['errorCode'] == 417 or $dataCard['errorCode'] == 418 or $dataCard['errorCode'] == 419 or $dataCard['errorCode'] == 424 or $dataCard['errorCode'] == 904 or $dataCard['errorCode'] == 910 or $dataCard['errorCode'] == 913 or $dataCard['errorCode'] == 916 or $dataCard['errorCode'] == 928 or $dataCard['errorCode'] == 940 or $dataCard['errorCode'] == 941 or $dataCard['errorCode'] == 942 or $dataCard['errorCode'] == 943 or $dataCard['errorCode'] == 945 or $dataCard['errorCode'] == 948 or $dataCard['errorCode'] == 949 or $dataCard['errorCode'] == 965) {
          $data['error_card'] = 'Operación Denegada';
        }else if ($dataCard['errorCode'] == 126) {
          $data['error_card'] = 'Operación Denegada. Clave secreta inválida';
        }else if ($dataCard['errorCode'] == 129) {
          $data['error_card'] = 'Operación Denegada. Código de seguridad invalido. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 181) {
          $data['error_card'] = 'Operación Denegada. Tarjeta con restricciones de débito. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 182) {
          $data['error_card'] = 'Operación Denegada. Tarjeta con restricciones de crédito. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 183 or $dataCard['errorCode'] == 947 or $dataCard['errorCode'] == 909 or $dataCard['errorCode'] == 666) {
          $data['error_card'] = 'Operación Denegada. Problemas de comunicación. Intente más tarde.';
        }else if ($dataCard['errorCode'] == 190 or $dataCard['errorCode'] == 191 or $dataCard['errorCode'] == 192 or $dataCard['errorCode'] == 202 or $dataCard['errorCode'] == 207 or $dataCard['errorCode'] == 208 or $dataCard['errorCode'] == 209 or $dataCard['errorCode'] == 102 or $dataCard['errorCode'] == 290 or $dataCard['errorCode'] == 413 or $dataCard['errorCode'] == 306) {
          $data['error_card'] = 'Operación Denegada. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 201) {
          $data['error_card'] = 'Operación Denegada. Tarjeta vencida. Contactar con entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 204) {
          $data['error_card'] = 'Operación Denegada. Operación no permitida para esta tarjeta. Contactar con entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 206) {
          $data['error_card'] = 'Operación Denegada. Intentos de clave secreta excedidos. Contactar con la entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 264) {
          $data['error_card'] = 'Operación Denegada. Entidad emisora de la tarjeta no está disponible para realizar la autenticación.';
        }else if ($dataCard['errorCode'] == 265) {
          $data['error_card'] = 'Operación Denegada. Clave secreta del tarjetahabiente incorrecta. Contactar con entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 266) {
          $data['error_card'] = 'Operación Denegada. Tarjeta Vencida. Contactar con entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 280) {
          $data['error_card'] = 'Operación Denegada. Clave secreta errónea. Contactar con entidad emisora de su tarjeta.';
        }else if ($dataCard['errorCode'] == 300) {
          $data['error_card'] = 'Operación Denegada. Número de pedido del comercio duplicado. Favor no atender';
        }else if ($dataCard['errorCode'] == 400) {
          $data['error_card'] = 'Tarjeta no valida ';
        }else if ($dataCard['errorCode'] == 403) {
          $data['error_card'] = 'Operación Denegada. Tarjeta no autenticada.';
        }else if ($dataCard['errorCode'] == 408) {
          $data['error_card'] = 'Operación Denegada. Código de seguridad no coincide. Contactar con entidad emisora de su tarjeta';
        }else if ($dataCard['errorCode'] == 409 or $dataCard['errorCode'] == 411) {
          $data['error_card'] = 'Operación Denegada. Código de seguridad no procesado por la entidad emisora de la tarjeta';
        }else if ($dataCard['errorCode'] == 410) {
          $data['error_card'] = 'Operación Denegada. Código de seguridad no ingresado';
        }else if ($dataCard['errorCode'] == 412) {
          $data['error_card'] = 'Operación Denegada. Código de seguridad no reconocido por la entidad emisora de la tarjeta';
        }else if ($dataCard['errorCode'] == 420) {
          $data['error_card'] = 'Operación Denegada. Tarjeta no es VISA.';
        }else if ($dataCard['errorCode'] == 422) {
          $data['error_card'] = 'Operación Denegada. El comercio no está configurado para usar este medio de pago. Contactar con el comercio';
        }else if ($dataCard['errorCode'] == 423) {
          $data['error_card'] = 'Operación Denegada. Se canceló el proceso de pago.';
        }else if ($dataCard['errorCode'] == 667) {
          $data['error_card'] = 'Operación Denegada. Transacción sin respuesta de Verified by Visa.';
        }else if ($dataCard['errorCode'] == 672) {
          $data['error_card'] = 'Operación Denegada. Módulo antifraude.';
        }else if ($dataCard['errorCode'] == 675) {
          $data['error_card'] = 'Inicialización de transacción';
        }else if ($dataCard['errorCode'] == 682) {
          $data['error_card'] = 'Operación Denegada. Operación Denegada.';
        }else if ($dataCard['errorCode'] == 683) {
          $data['error_card'] = 'Operación Denegada. Registro incorrecto de sesión';
        }else if ($dataCard['errorCode'] == 684) {
          $data['error_card'] = 'Operación Denegada Registro Incorrecto Antifraude';
        }else if ($dataCard['errorCode'] == 685) {
          $data['error_card'] = 'Operación Denegada Registro Incorrecto Autorizador';
        }else if ($dataCard['errorCode'] == 912) {
          $data['error_card'] = 'Operación Denegada. Entidad emisora de la tarjeta no disponible';
        }else if ($dataCard['errorCode'] == 946) {
          $data['error_card'] = 'Operación Denegada. Operación de anulación en proceso';
        }
      }else if ($dataCard['dataMap']) {
        //Usando codigo ECI para validar errores de autenticación
        if ($dataCard['dataMap']['ECI'] == 6) {
          $data['error_card'] = 'Comercio intentó autenticación pero tarjetahabiente no está participando';
        }else if ($dataCard['dataMap']['ECI'] == 10) {
          $data['error_card'] = 'Entidad emisora no disponible para autenticación';
        }else if ($dataCard['dataMap']['ECI'] == 11) {
          $data['error_card'] = 'Clave secreta del tarjetahabiente incorrecta';
        }else if ($dataCard['dataMap']['ECI'] == 12) {
          $data['error_card'] = 'Tarjeta Vencida';
        }
      }

      //Validar que vista mostrar
      if (array_key_exists('errorCode', $dataCard)) {
        //ERROR
        $data['error_card'] = preg_replace('/\s+/', '_', $data['error_card']);
        header("Location: ".base_url()."productos/pago/".$data['error_card']);
      }else{
        //EXITO
        $banco = "Visanet"; 
        $correo = $_SESSION['inf_compra']['correo'];
        $nombre = $_SESSION['inf_compra']['nombre'];
        $tlf = $_SESSION['inf_compra']['tlf'];
        $Pci_nroTarjeta = $dataCard['dataMap']['CARD'];
        $Ven_Total = $dataCard['dataMap']['AMOUNT'];
        $Pci_codAccion = $dataCard['dataMap']['ACTION_CODE'];

        $region = $_SESSION['inf_compra']['region'];
        $provincia = $_SESSION['inf_compra']['provincia']; 
        $distrito = $_SESSION['inf_compra']['distrito'];
        $direccion = $_SESSION['inf_compra']['direccion'];
        $referencia = $_SESSION['inf_compra']['referencia'];
        $lote = $_SESSION['inf_compra']['lote'];
        $dpint = $_SESSION['inf_compra']['dpint'];
        $urbanizacion = $_SESSION['inf_compra']['urbanizacion'];
        $ruc = $_SESSION['inf_compra']['ruc'];
        $razonSocial = $_SESSION['inf_compra']['razonSocial'];
        $tienda_usuario = $data['usuario']['id_tienda'];
        $Usu_IdUsuario = $data['usuario']['id_usuario'];
        $dir='Dirección'.$direccion.' Nto. / Lote '.$lote.' Depto. / Int '.$dpint.' UrbanizaciÓn'.$urbanizacion.' Referencia'.$referencia;

        //Datos con carrito
        $array_id_tienda = array();
        $array_price_tienda = array();

        foreach ($data['carrito'] as $cart) 
        {
          $array_id_tienda[] = $cart['idtienda']; 
          $array_price_tienda[] = array($cart['idtienda'] => $cart['price'], );
        }

        $array_id_tienda = array_unique($array_id_tienda);
        $array_price_tienda_total = array();

        foreach ($array_id_tienda as $key) {            
          $precios = 0;
          for ($i=0; $i < count($array_price_tienda) ; $i++) { 
            if ($key == key($array_price_tienda[$i])) {
              $precios += $array_price_tienda[$i][$key];
            }
          }
          $array_price_tienda_total[$key] = $precios;
        }
        $Ven_Envio = number_format($this->session->costoReal, 2, '.', '');
        $arryCompraDetalle=$this->session->ArrayDetalle;

        //Guardando datos
        $Pac_IdPago_Compra = $this->productoModel->registrarCompra($data['carrito'],$arryCompraDetalle,$Ven_Total,$Ven_Envio,$Usu_IdUsuario,$banco,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$razonSocial,$tienda_usuario,$array_id_tienda,$array_price_tienda_total,$tlf);


        if (is_null($Pac_IdPago_Compra)){
          echo 0;
        }else{

          //Informacion Tiendas
          $infoTienda = [];
          foreach ($array_id_tienda as $valor) {
            $tiendaInfo = $this->usuarioModel->get_datos_compra_x_tienda($valor); 
            $newdata =  array (
              'Tie_Telefono' => $tiendaInfo[0]->Per_Telefono,
              'Tie_Nombre' => $tiendaInfo[0]->Tie_Nombre,
              'Tie_IdTienda' => $valor,
              'Tie_Subdominio' => $tiendaInfo[0]->Tie_Subdominio,
            );

            array_push($infoTienda,$newdata);
          }
          
          $COD = "NO";
          $monto_cobrar = "0.00";
          $Ven_Envio = number_format($this->session->costoReal, 2, '.', '');
          $dniClient=$this->session->DNIcliente;

          $codigoCompra = $this->productoModel->codigoCompra($Pac_IdPago_Compra);
          $infoCompra = array(
              'compra_pedidoCompra' => $Pac_IdPago_Compra,
              'compra_nroTarjeta' => $Pci_nroTarjeta,
              'compra_Total' => $Ven_Total,
              'compra_codAccion' => $Pci_codAccion,
              'compra_direccion' => $direccion.".".$urbanizacion." ".$lote." ".$dpint."(".$referencia.") - ".$region.", ".$provincia." ".$distrito,
              'compra_fechaCompra' => date("Y-m-d H:i:s")
          );
          $this->correoComprador($correo, $nombre, $data['carrito'], $data['ruta_img'],$codigoCompra->Pac_CodPago,$banco, $infoCompra, $infoTienda,$Ven_Envio);

           // API CURRIERSapiCurriers
          // $this->apiCurriers($Pac_IdPago_Compra,$correo,$nombre,$dniClient,$codigoCompra->Pac_CodPago,$tlf,$region,$provincia,$distrito,$dir,$COD,$monto_cobrar);

          foreach ($array_id_tienda as $Tie_IdTienda)
          {
            $tienda = $this->cotizacionModel->get_datos_correo($Tie_IdTienda);
            $this->enviarPedidoTienda($Tie_IdTienda, $tienda->Usu_Correo, $tienda->Per_Nombre, $nombre, $data['carrito'], $codigoCompra->Pac_CodPago, $tienda->Tie_Subdominio, $data['ruta_img'], $data['dominio'],$tlf);
          }

          $this->cart->destroy();
          unset($_SESSION['inf_compra']);
          header("Location: ".base_url()."comprador/compra/detalle_compra/".$Pac_IdPago_Compra);
        }
      }
    }

    public function correoComprador($correo, $nombreCliente, $dataCarrito, $ruta_img, $CodPago,$banco, $infoCompra, $array_id_tienda,$Ven_Envio){
      $this->load->library('correo');
            
            $datos['nombre_usuario'] = $nombreCliente;
            $datos['dataCarrito'] = $dataCarrito;
            $datos['infoCompra'] = $infoCompra;
            $datos['array_id_tienda'] = $array_id_tienda;
            $datos['ruta_img'] = $ruta_img;
            $datos['codigoCompra'] = $CodPago;
            $datos['banco'] = $banco;
            $datos['costoEnvio'] = $Ven_Envio;

            $contenido_correo = $this->twig->parse('correo/correo_pago_credito.twig', $datos, true);

            $this->correo->enviar($correo, "Haz comprado en PORMAYOR.PE ORDEN #".$CodPago, $contenido_correo);
    }

    function apiCurriers($Pac_IdPago_Compra,$correo,$cliente,$clienteRuc,$codigoCompra,$tlf,$region,$provincia,$idddistrito,$dir,$COD,$monto_cobrar){

        $apis=$this->productoModel->getPago_Compra_Envio($Pac_IdPago_Compra);

        if($apis) {
          foreach ($apis as $key => $api) {
          if($api->PrecioEnvio > 0){
              $monto=round(($api->PrecioPorProductos)+($api->PrecioEnvio));
              $monto=number_format($monto, 2, '.', '');
            } else {
              $monto=$api->PrecioPorProductos;
              $monto=number_format($monto, 2, '.', '');
            }

            $tienda=$this->productoModel->getDettaleTienda($api->Pce_IdTienda);
            $detalles=$this->productoModel->getDettaleProducto($api->Pac_IdPago_Compra,$api->Pce_IdTienda);
            
            if($tienda[0]->region) {$region=$tienda[0]->region;}else{$region='';}
            if($tienda[0]->distrito) {$distrito=$tienda[0]->distrito;}else{$distrito='';}
            if($tienda[0]->provincia) {$provincia=$tienda[0]->provincia;}else{$provincia='';}
            if($tienda[0]->iddistrito) {$iddistrito=$tienda[0]->iddistrito;}else{$iddistrito='';}
            if($tienda[0]->Per_Direccion) {$Per_Direccion=$tienda[0]->Per_Direccion;}else{$Per_Direccion='';}
            if($tienda[0]->Per_Telefono) {$telefono=$tienda[0]->Per_Telefono;$Per_Telefono=$tienda[0]->Per_Nombre.' ('.$tienda[0]->Per_Telefono.')';}else{$telefono='0000000000';$Per_Telefono=$tienda[0]->Per_Nombre.' (0)';}
            $ubicacionAlmacen=$region.','.$provincia.','.$distrito.','.$Per_Direccion;
          
          if($detalles) {
            $Product='';
              $arrayProduct=[];

              foreach ($detalles as $key => $detalle) {
                $Product=array(
                  "NOMBRE"=>$detalle->Pro_Nombre, 
                          "DESCRIPCION"=>$detalle->Pro_Caracteristicas, 
                          "SKU"=>$detalle->SKU_Nombre, 
                          "PESO"=>0, 
                      );

                      array_push($arrayProduct,$Product);
              }

              if($COD=='NO'){
                $monto='0.00';
              }
              
              $data=array(
                'RUC_BROKER'=>"20603706804",
                'CLAVE_API'=>"xIBzL6mBImvZmNT-aESX-w==",
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
          }else{
              return true;
          }
        }
      }
      
    public function enviarPedidoTienda($Tie_IdTienda, $correo, $nombreUsuario, $nombreCliente, $dataCarrito, $idPedido, $Tie_Subdominio, $ruta_img, $dominio,$tlf){
      $this->load->library('correo');

            $datos['Tie_IdTienda'] = $Tie_IdTienda;
            $datos['nombre_usuario'] = $nombreUsuario;
            $datos['nombre_cliente'] = $nombreCliente;
            $datos['dominio'] = $dominio;
           
            $datos['dataCarrito'] = $dataCarrito;
            $datos['idPedido'] = $idPedido;
            $datos['Tie_Subdominio'] = $Tie_Subdominio;
            $datos['ruta_img'] = $ruta_img;
            $datos['telf'] = $tlf;

            $contenido_correo = $this->twig->parse('correo/pago_credito_tienda.twig', $datos, true);

            $this->correo->enviar($correo, "Pormayor.pe | VENTA CON PAGO POR TARJETA DÉBITO / CRÉDITO | #".$idPedido, $contenido_correo);
    }
	}

?>