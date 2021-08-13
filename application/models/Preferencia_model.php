<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Preferencia_model extends CI_Model
    {
        private $nombre_tabla = 'preferencia';

        function __construct()
        {
            parent::__construct();
        }

        function verificar_preferencia_x_usuario($Usu_IdUsuario)
        {
            $sql = "SELECT EXISTS(SELECT * FROM $this->nombre_tabla WHERE Usu_IdUsuario = ".$Usu_IdUsuario." LIMIT 1) as a";

            $query = $this->db->query($sql);

            return $query->row();
        }
        
        function data_usuario($Usu_IdUsuario)
        {
            $sql = "SELECT * FROM usuario WHERE Usu_IdUsuario = ".$Usu_IdUsuario;

            $query = $this->db->query($sql);

            return $query->row();
        }
        
        public function registrar_preferencia($Usu_IdUsuario, $Pre_Categorias)
        {
            try
            {
                $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
                $this->db->set('Pre_Categorias', $Pre_Categorias);
                
                $this->db->insert($this->nombre_tabla);

                return true;
            }
            catch (Exception $e) 
            {
                return false;
            }
        }
    }
?>