<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Almacen_model extends CI_Model
    {

        function __construct()
        {
            parent::__construct();
        }

        function productos()
        {
             $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible,(SELECT SUM(SKU_StockReal) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_Real, pro.Pro_PrecioMinimo as precio_minimo');
            $this->db->from('producto as pro');
            $this->db->join('almacen_producto as alp','ON alp.Pro_IdProducto = pro.Pro_IdProducto','left');
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $query = $this->db->get();
            return $query->result();
        }

    }
?>