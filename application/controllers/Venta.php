<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Venta extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("Vendedor_model", "vendedorModel");

		}
		function nueva()
		{
			$data = $this->acl->load_datos();
			if (isset($data['usuario']['rol']) and $data['usuario']['rol'] == 5) {
			$this->load->model("Local_model", "localModel");
			$data['pag'] = "NUEVA VENTA";
		    $data['productos'] = $this->vendedorModel->get_productos_sku();
		    $data['region'] = $this->localModel->region();
			$this->twig->parse('ventas/nueva.twig', $data);
			}else{
				redirect ('');
			}
		}

		function select_producto()
		{
			if ($this->input->is_ajax_request()){				
		    	$data['productos'] = $this->vendedorModel->get_productos_sku();
		        $this->twig->parse('ventas/selectproducto.twig',$data);
		    	}
		}

		function buscar_dni()
		{
			if ($this->input->is_ajax_request()){
				$data = $this->acl->load_datos();
		      	$dni = $this->input->post('dni');
		      	$usuario = $this->vendedorModel->buscar_dni($dni);
		      	print_r(json_encode($usuario));
		    }
		}
		function buscar_telefono()
		{
			if ($this->input->is_ajax_request()){
				$data = $this->acl->load_datos();
		      	$tlf = $this->input->post('tlf');
		      	$usuario = $this->vendedorModel->buscar_telefono($tlf);
		      	print_r(json_encode($usuario));
		    }
		}
		public function addpedido()
        {	
        	$data = $this->acl->load_datos();
        	if ($this->input->is_ajax_request()) {
     			$SKU_IdSku = $this->input->post('skus');
     			$Cantidad = $this->input->post('cantsP');
     			$Precio = $this->input->post('preciosP');
     			$idusuario = $this->input->post('idusuario');
     			$region = $this->input->post('region');
                $provincia = $this->input->post('provincia');
                $distrito = $this->input->post('distrito');
                $direccion = $this->input->post('direccion');
                $referencia = $this->input->post('referencia');
                $lote = $this->input->post('lote');
                $dpint = $this->input->post('dpint');
                $urbanizacion = $this->input->post('urbanizacion');
                $DNIcliente = $this->input->post('DNIcliente');
                $tlf = $this->input->post('tlf');
                $tipoVenta = $this->input->post('tipoVenta');
                $delivery = $this->input->post('delivery');
                $subtotBd = $this->input->post('subtotBd');
                $idvendedor = $this->input->post('idvendedor');

                $Pac_IdPago_Compra = $this->vendedorModel->addpedido($SKU_IdSku,$Cantidad,$Precio,$idusuario,$region,$provincia,$distrito,$direccion,$referencia,$lote,$dpint,$urbanizacion,$DNIcliente,$tlf,$delivery,$tipoVenta,$subtotBd,$idvendedor);

          		echo $Pac_IdPago_Compra;
				}
			} 
		    
			
	}
?>