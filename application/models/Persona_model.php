<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Persona_model extends CI_Model
    {
        private $nombre_tabla = 'persona';

        public function __construct()
        {
            parent::__construct();
        }        

        function verificar_persona($Per_Dni)
        {
            $sql="SELECT EXISTS(SELECT * FROM persona WHERE Per_Dni=".$Per_Dni." LIMIT 1) AS a";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function get_id_persona($Per_Dni)
        {	
			if(!empty($Per_Dni)){
				$sql="SELECT Per_IdPersona FROM persona WHERE Per_Dni = '".$Per_Dni."' LIMIT 1";
				$query=$this->db->query($sql);
				return $query->row();
			}else{
				return 0;
			}
        }

        function get_id_persona_x_dni($Per_Dni)
        {
            $this->db->select('Per_IdPersona');
            $this->db->from('persona');
            $this->db->where('Per_Dni',$Per_Dni);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->row();
        }

        function get_persona_x_id($Per_IdPersona)
        {
            $this->db->select('Per_Nombre,Per_Dni');
            $this->db->where('Per_IdPersona',$Per_IdPersona);
            $this->db->limit(1);
            $query = $this->db->get($this->nombre_tabla);
            return $query->row();
        }
    }
?>