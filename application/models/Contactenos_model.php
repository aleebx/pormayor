<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
 
    class Contactenos_model extends CI_Model
    {
        private $nombre_tabla = 'contactenos';

        function __construct()
        {
            parent::__construct();
        }

        // function get_pagos($condicion="")
        // {
        //     $sql = "SELECT pag.*, tie.Tie_Nombre FROM $this->nombre_tabla pag
        //             INNER JOIN tienda tie ON tie.Tie_IdTienda = pag.Tie_IdTienda
        //             $condicion";

        //     $query = $this->db->query($sql);

        //     return $query->result();
        // }

        public function registrar_contactenos($Con_Nombre, $Con_Telefono, $Con_Correo, $Con_Descripcion)
        {
            try
            {
                $this->db->set('Con_Nombre', $Con_Nombre);
                $this->db->set('Con_Telefono', $Con_Telefono);
                $this->db->set('Con_Correo', $Con_Correo);
                $this->db->set('Con_Descripcion', $Con_Descripcion);
                
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