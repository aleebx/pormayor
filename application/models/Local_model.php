<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

    class Local_model extends CI_Model
    {
        private $nombre_tabla = 'regions';

        function __construct()
        {
            parent::__construct();
        }        

        function region()
        {
           $this->db->select('id,name');
           $this->db->from('regions');        

           $query = $this->db->get();

           return $query->result();        
        }

        function provincia($idRegion)
        {
            $this->db->select('id,name');
            $this->db->from('provinces');
            $this->db->where('region_id',$idRegion);        

            $query = $this->db->get();

            return $query->result();
        }
        function galerias()
        {
            $this->db->select('*');
            $this->db->from('galerias');     

            $query = $this->db->get();

            return $query->result();
        }

        function distrito($idProvincia,$idRegion)
        {
            $this->db->select('id,name');
            $this->db->from('districts');
            $this->db->where('region_id',$idProvincia);        
            $this->db->where('Cos_IdCostoEnvio >',0);        

            $query = $this->db->get();

            return $query->result();
        }

        function bancos()
        {
            $this->db->select('*');
            $this->db->from('banco');
        
            $query = $this->db->get();
            return $query->result();
        }
    }

?>