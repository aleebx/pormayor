<?php if ( ! defined('BASEPATH')) exit('Acceso denegado');

class Correo
{
 	private $CI;
    
 	public function __construct()
 	{
 		$this->CI =& get_instance();
 	}

    function enviar($correo_destino, $titulo, $contenido)
    {
        $this->CI->load->library('email');
        $this->CI->load->config('email', TRUE);
        $this->CI->load->config('tank_auth', TRUE);

        $this->CI->email->from($this->CI->config->item('webmaster_email', 'tank_auth'), $this->CI->config->item('website_name', 'tank_auth'));
        $this->CI->email->reply_to($this->CI->config->item('webmaster_email', 'tank_auth'), $this->CI->config->item('website_name', 'tank_auth'));
        $this->CI->email->to($correo_destino);
        $this->CI->email->subject($titulo);
        $this->CI->email->message($contenido);
        $this->CI->email->send();
    }
}