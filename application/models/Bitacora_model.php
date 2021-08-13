<?php

    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Bitacora_model extends CI_Model
    {
        private $nombre_tabla = 'bitacora';

        function __construct()
        {
            parent::__construct();
        }

        function get_bitacoras($Bit_Tabla, $Bit_Accion, $Bit_Campo, $Bit_IdRegistro, $Bit_Valor = '')
        {
            $this->db->select('bit.*, per.Per_Nombre, per.Per_ApellidoPaterno, per.Per_ApellidoMaterno');
            $this->db->from('bitacora as bit');
            $this->db->join('usuario AS usu', 'usu.Usu_IdUsuario = bit.Usu_IdUsuario');
            $this->db->join('persona AS per', 'per.Per_Dni = usu.Per_Dni');
            $this->db->where('Bit_Tabla', $Bit_Tabla);
            $this->db->where('Bit_Accion', $Bit_Accion);
            $this->db->where('Bit_Campo', $Bit_Campo);
            $this->db->where('Bit_IdRegistro', $Bit_IdRegistro);

            if($Bit_Valor != '')
            {
                $this->db->where('Bit_Valor', $Bit_Valor);
            }

            $query = $this->db->get();

            return $query->result();
        }

        function registrar_bitacora($Bit_Tabla, $Bit_Accion, $Bit_Campo, $Bit_IdRegistro, $Bit_Valor, $Bit_Descripcion, $Usu_IdUsuario)
        {
            $this->db->set('Bit_Tabla', $Bit_Tabla);
            $this->db->set('Bit_Accion', $Bit_Accion);
            $this->db->set('Bit_Campo', $Bit_Campo);
            $this->db->set('Bit_IdRegistro', $Bit_IdRegistro);
            $this->db->set('Bit_Valor', $Bit_Valor);
            $this->db->set('Bit_Descripcion', $Bit_Descripcion);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->insert('bitacora');
        }
    }
?>