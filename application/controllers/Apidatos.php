<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Apidatos extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function datoscliente2()
		{
			if ($this->input->is_ajax_request()) {		
				$number = $this->input->post('numerodoc');
				$tipo = $this->input->post('tipo');
				// print_r($number);
				// print_r($tipo);
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
				    'Cookie: XSRF-TOKEN=eyJpdiI6InFNclZLYkRFWVB2WUNIVGhGTUdzUlE9PSIsInZhbHVlIjoiODdMQzlIZU8xajNRNVR5anZlMUNyc2cvaGpQMVZ0dGl4VmNGNmNrYytlTGhEZ2ZNMVVPN0RSYy9zUkdVL05BMm4yQUh0Z3F4dlY5NHdLZzMrWEorNGc5U2M3VU5GNEJMSzhCMlJyTnJMOFZsdHBKK2g2Y2R2ZExtRzlaTDZiWmkiLCJtYWMiOiI3NzVjOWUyMGUzNjQ4NmY4YzY3ODMwZWJjZTM3OGRhZWNjM2IzNDJjZDkyNDQ0YWYwNGY5ZjAzNWE2MDE5MWM4In0%3D; apiperu_session=eyJpdiI6ImkzSGcwLzVmZGRqU0RFLzROVFFsZHc9PSIsInZhbHVlIjoienozelZ6OGpsVTRQYkp1cnQrbXkzeEgrdWFzV1BLTUVKY2NIbnBjd1QyeVNZM01WWGhSeklzbytHVG5CaHcwdTNiUlBpNnZBa2JOaUlIMU1UY0kreHNBMytQSVp2YTJnNlRRQjlVc085d0c4QXBxZmMrWGc4THY4Q1BHMm9ETjciLCJtYWMiOiI5MDQ0MDA1MmE0Y2ZmYzJiZDI0NjQ0NmI4ZTE0MDhkMDAxYzAwNGM4YjcxNmRiNDdhNmM0ZDcxNTg0YTkyMmEwIn0%3D'
				  ),
				));

				$response = curl_exec($curl);

				curl_close($curl);
				echo $response;
			}
		}

			
	}
?>