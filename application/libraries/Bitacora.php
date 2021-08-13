<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Bitacora
{
    public function registrar_bitacora($Bit_Tabla, $Bit_Accion, $Bit_Campo, $Bit_IdRegistro, $Bit_Valor, $Bit_Descripcion, $Usu_IdUsuario)
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
