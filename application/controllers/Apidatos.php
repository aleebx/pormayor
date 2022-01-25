<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Apidatos extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function consultaruc()
		{
			if ($this->input->is_ajax_request()) {		
				$number = $this->input->post('numerodoc');
				$url = "https://apiperu.dev/api/ruc/".$number."?api_token=fae165c7ed874652f431c260c5536784fc5e416c7835f1af964fa4c7534839dd";
				$curl = curl_init();
			    curl_setopt_array($curl, array(
			        CURLOPT_URL => $url,
			        CURLOPT_RETURNTRANSFER => true,
			        CURLOPT_CUSTOMREQUEST => "GET",
			        CURLOPT_SSL_VERIFYPEER => false
			    ));
			    $response = curl_exec($curl);
			    $err = curl_error($curl);
			    curl_close($curl);
			    if ($err) {
			        echo "cURL Error #:" . $err;
			    } else {
			        echo $response;
			    }
			}
		}
		function consultadni()
		{
			if ($this->input->is_ajax_request()) {		
				$number = $this->input->post('numerodoc');
				$url = "https://apiperu.dev/api/dni/".$number."?api_token=fae165c7ed874652f431c260c5536784fc5e416c7835f1af964fa4c7534839dd";
				$curl = curl_init();
			    curl_setopt_array($curl, array(
			        CURLOPT_URL => $url,
			        CURLOPT_RETURNTRANSFER => true,
			        CURLOPT_CUSTOMREQUEST => "GET",
			        CURLOPT_SSL_VERIFYPEER => false
			    ));
			    $response = curl_exec($curl);
			    $err = curl_error($curl);
			    curl_close($curl);
			    if ($err) {
			        echo "cURL Error #:" . $err;
			    } else {
			        echo $response;
			    }
			}
		}

			
	}
?>