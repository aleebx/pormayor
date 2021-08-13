<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Producto_Favorito_model extends CI_Model
    {
        private $nombre_tabla = 'producto_favorito';

        function __construct()
        {
            parent::__construct();
        }

        function get_favoritos_x_usuario($Usu_IdUsuario)
        {
            $this->db->select('Pro_IdProducto');
            $this->db->from($this->nombre_tabla);
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);

            $query = $this->db->get();

            return $query->result();
        }

        function verificar_favorito_x_usuario_x_persona($Usu_IdUsuario, $Pro_IdProducto)
        {
            $sql = "SELECT EXISTS(SELECT * FROM $this->nombre_tabla WHERE Usu_IdUsuario = ".$Usu_IdUsuario." AND Pro_IdProducto = ".$Pro_IdProducto." LIMIT 1) as a";

            $query = $this->db->query($sql);

            return $query->row();
        }

        function get_favoritos_x_usuario_x_producto($Usu_IdUsuario, $Pro_IdProducto)
        {
            $this->db->select('Pro_IdProducto');
            $this->db->from($this->nombre_tabla);
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->where('Pro_IdProducto', $Pro_IdProducto);

            $query = $this->db->get();

            return $query->result();
        }
        
        function registrar($Pro_IdProducto, $Usu_IdUsuario)
        {
            $this->db->set('Pro_IdProducto', $Pro_IdProducto);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            return $this->db->insert($this->nombre_tabla);
        }

        function eliminar($Pro_IdProducto, $Usu_IdUsuario)
        {
            $this->db->where('Pro_IdProducto', $Pro_IdProducto);
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
            return $this->db->delete($this->nombre_tabla);
        }
    }
?>