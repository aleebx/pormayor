<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Almacen_model extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        function get_productos()
        {
            $this->db->select('pro.Pro_IdProducto as id,pro.Pro_Nombre as nombre,alp.Alp_FechaRegistro as fecha,alp.Alp_EstadoInicial as estado,alp.Alp_Caja as caja,alp.Alp_Traslado as traslado');
            $this->db->from('almacen_producto AS alp');
            $this->db->join('producto AS pro', 'pro.Pro_IdProducto = alp.Pro_IdProducto','right');
            $query = $this->db->get();
            return $query->result();
        }

        function get_movimientos()
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, alp.Alp_FechaRegistro, alp.Alp_EstadoInicial, alp.Alp_Caja, alp.Alp_Traslado, alp.Alp_Unidades, alp.Alp_CodigoCaja');
            $this->db->from('almacen_producto AS alp');
            $this->db->join('producto AS pro', 'pro.Pro_IdProducto = alp.Pro_IdProducto');
            $query = $this->db->get();
            return $query->result();
        }

        function get_productos_etiqueta()
        {
             $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion,pro.Pro_PrecioMaximo,pro.Pro_PrecioMinimo,pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible ,pro.Pro_Saldo,pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $query = $this->db->get();
            return $query->result();
        }


        function registro_movimiento($Pro_IdProducto,$codCaja,$cantC,$cantUni,$movimiento,$inicial){

            $this->db->set('Pro_IdProducto', $Pro_IdProducto);
            $this->db->set('Alp_EstadoInicial', $inicial);
            $this->db->set('Alp_Caja', $cantC);
            $this->db->set('Alp_Traslado', $movimiento);
            $this->db->set('Alp_Unidades', $cantUni);
            $this->db->set('Alp_CodigoCaja', $codCaja);

            $this->db->insert('almacen_producto');

            return $Pro_IdProducto;
        }

    }
?>