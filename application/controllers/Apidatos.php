<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Apidatos extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function datoscliente()
		{
			if ($this->input->is_ajax_request()) {		
				$number = $this->input->post('numerodoc');
				$tipo = $this->input->post('tipo');
				if($tipo == 1){
					$url = "https://apiperu.dev/api/dni/".$number;
				}else{
					$url = "https://apiperu.dev/api/ruc/".$number;
				}
				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => $url,
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'GET',
				  CURLOPT_HTTPHEADER => array(
				    'Authorization: Bearer fae165c7ed874652f431c260c5536784fc5e416c7835f1af964fa4c7534839dd',
				    'Cookie: XSRF-TOKEN=eyJpdiI6IkZpRkV2Nkg5TFpLbU5yZkM0Qzd2Vmc9PSIsInZhbHVlIjoiTCtmNUJ1QWtrQ2ZnM243eE5tNytEZUcrNHdYUEp6eXlaTkswWXZNV1A2dXU1ZXFvZnR4ZXF4N2xqaVpndFQzVHM3bWZ1YmVRSTRicFExN2ZVam1CaU5MaEw5TnhJcHBoVmxaRFdqeG5ZbkMvVWRxWjdIditxWWg0SFI4Q1ArTGMiLCJtYWMiOiJiZTE3ZmY1MDhjYTM0MWQyZGI1ZjA5MGU1MGI5NTZiYzViNDQ3YzM0ZmVmYzVkMjk3NmNiNDUwYmViOGE2ZTVmIn0%3D; apiperu_session=eyJpdiI6InFOazBBa0M3STVMMDZrSzFZdk9sV3c9PSIsInZhbHVlIjoiNmcrK1pDWm5Yd3loaDAwMU51bVpjR0ludlREQ0g1b1VhQkdPUVhxUngyTUN5WjVpazdVVzVjdmFHQ044S21RbmFDVjMwTVZ6WXNCZ3d4MWh0dFFhL1NlZ2FIbUNTWUk1RlNjVzA2a1lvdE51UDU3MzNIYnczam9xSTFPcFNnem8iLCJtYWMiOiIzNzE2ZDY2ZDFiYjg2MTQzOTJkNzE2YmIxMzc2OGRjNDExM2E4MDdjYWVkZmUxMmYxYTk1OTUyZDdhMmE0NTQzIn0%3D'
				  ),
				));

				$response = curl_exec($curl);

				curl_close($curl);

				echo $response;
			}
		}

			
	}
?>