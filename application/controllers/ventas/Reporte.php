<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Reportes extends CI_Controller
	{
	function __construct()
	{
	parent::__construct();
	$this->load->model("Reporte_model","reporteModel");
	}

    public function index()
    {
	$data=$this->acl->load_datos();
		if ($data['usuario']['rol'] == 9) {
			$data['ventas']=$this->reporteModel->reporte_ventas_dia();
	    	$this->twig->parse('reportemes.twig', $data);
		}
    }
    public function pagos()
    {
    $data=$this->acl->load_datos();

      $data['ventas']=$this->reporteModel->reporte_pagos_dia();
      $this->twig->parse('pagos.twig', $data);
    }
    public function alerta_stock(){
    $data=$this->acl->load_datos();

      $data['stock']=$this->reporteModel->alerta_stock();
      $this->twig->parse('alerta_stock.twig', $data);
    }
  
    public function preventa(){
    $data=$this->acl->load_datos();

      $data['preventa']=$this->reporteModel->preventa();
      $this->twig->parse('preventa.twig', $data);
    }

    function reporte_mes()
    {
      
      $data = $this->acl->load_datos();
      if ($this->input->is_ajax_request()) {
              $mes = $this->input->post('mes');
              $data['gestion'] = $this->reporteModel->reporte_gestion($mes);
              $data['ventas'] = $this->reporteModel->reporte_ventas($mes);
              $data['cantidad'] = $this->reporteModel->reporte_ventas_c($mes);
              $this->twig->parse('reporte_mes.twig', $data);
      }
    }
  
    function pago_dia()
    {      
      $data = $this->acl->load_datos();
      if ($this->input->is_ajax_request()) {
          $fecha = $this->input->post('fecha');
          $data['ventas'] = $this->reporteModel->reporte_pagos_dia2($fecha);
          $this->twig->parse('pago_dia.twig', $data);
      }
    }
  
    public function kardex($Pro_IdProducto)
    {
		$data=$this->acl->load_datos();
	  $data['kardex']=$this->reporteModel->reporte_kardex($Pro_IdProducto);
    $data['totalp'] =$this->reporteModel->saldo_producto($Pro_IdProducto);
    $data['kardex_mal'] =$this->reporteModel->producto_malogrado($Pro_IdProducto);
    $data['kardex_compras']=$this->reporteModel->compras_kardex($Pro_IdProducto);
    $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sayra.pe/api/ventas_sayra/'.$Pro_IdProducto,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Cookie: ci_tuspedidos=6r7m0lqjshcpk7o4rr3n8lm9n0q3e4lm'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      $va = json_decode($response);
      $data['kardex_sayra'] = $va;
      $this->twig->parse('reportes.twig', $data);
    }

    public function resumen_venta()
    {
      $data = $this->acl->load_datos();
       if($this->input->is_ajax_request())
        {               
          // $data['ventas'] = $this->input->post('datos');
          $fecha_i= $this->input->post('fecha_i');
          $fecha_f = $this->input->post('fecha_f');

          $data['ventas'] = $this->reporteModel->get_resumen_v($fecha_i,$fecha_f);
          print_r(json_encode($data['ventas']));
        }         
    }

    public function vista_resumen()
    {
       if($this->input->is_ajax_request())
        {               
          $data['ventas'] = $this->input->post('datos');
          $this->twig->parse('lista_resumen_v.twig', $data);
        }         
    }


  
  }

?>
}
?>