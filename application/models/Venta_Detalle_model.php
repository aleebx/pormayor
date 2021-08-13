<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Venta_Detalle_model extends CI_Model
    {
        private $nombre_tabla = 'venta_detalle';

        function __construct()
        {
            parent::__construct();
        }

        function get_detalle_venta($Ven_IdVenta)
        {
            $this->db->select('pro.Pro_Nombre, sku.SKU_Img, ved.Ved_Precio, ved.Ved_Cantidad, unm.Unm_Nombre, var.Var_Nombre, vao.Vao_Nombre, ved.SKU_IdSKU, sku.SKU_Color');
            $this->db->from('venta_detalle as ved');
            $this->db->join('sku AS sku', 'sku ON sku.SKU_IdSKU = ved.SKU_IdSKU');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion');
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->join('producto AS pro', 'pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto');            
            $this->db->join('producto_unidad AS pru', 'pru ON pru.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('unidadmedida AS unm', 'unm ON unm.Unm_IdUnidadMedida = pru.Unm_IdUnidadMedidad');
            $this->db->where('ved.Ven_IdVenta', $Ven_IdVenta);
            $query = $this->db->get();

            return $query->result();
        }

                
        function get_detalle_compra($Pac_IdPago_Compra)
        {
            $this->db->select('pcd.Pac_IdPago_Compra,pro.Pro_Nombre, sku.SKU_Img, pcd.Pcd_Precio, pcd.Pcd_Cantidad, var.Var_Nombre, vao.Vao_Nombre, pcd.Pcd_IdSKU, sku.SKU_Color, pcd.Pcd_Importe, tie.Tie_Nombre,tie.Tie_IdTienda,pro.Pro_IdProducto');
            $this->db->from('pago_compra_detalle as pcd');
            $this->db->join('sku AS sku', 'sku ON sku.SKU_IdSKU = pcd.Pcd_IdSKU');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion');
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->join('producto AS pro', 'pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto');
            $this->db->join('producto_tienda AS tip', 'tip ON tip.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('tienda AS tie', 'tie ON tie.Tie_IdTienda = tip.Tie_IdTienda');
            $this->db->where('pcd.Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $query = $this->db->get();

            return $query->result();
        } 

        function get_detalle_venta_x_usuario($Usu_IdUsuario)
        {
            $this->db->select('pro.Pro_Nombre, sku.SKU_Img, ved.Ved_Precio, ved.Ved_Cantidad, unm.Unm_Nombre, var.Var_Nombre, vao.Vao_Nombre, ved.SKU_IdSKU, sku.SKU_Color, ved.Ven_IdVenta');
            $this->db->from('venta_detalle as ved');
            $this->db->join('venta AS ven', 'ven.Ven_IdVenta = ved.Ven_IdVenta');
            $this->db->join('sku AS sku', 'sku ON sku.SKU_IdSKU = ved.SKU_IdSKU');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion');
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->join('producto AS pro', 'pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto');            
            $this->db->join('producto_unidad AS pru', 'pru ON pru.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('unidadmedida AS unm', 'unm ON unm.Unm_IdUnidadMedida = pru.Unm_IdUnidadMedidad');
            $this->db->where('ven.Usu_IdUsuario', $Usu_IdUsuario);
            $query = $this->db->get();

            return $query->result();
        }

         function get_detalle_envio($Pac_IdPago_Compra,$Tie_IdTienda,$Pro_IdProducto)
        {
            $sql = "SELECT pce.Pce_CostoEnvio
                    FROM pago_compra_envio as pce WHERE pce.Pac_IdPago_Compra=$Pac_IdPago_Compra and pce.Pce_IdTienda=$Tie_IdTienda and pce.Pce_IdProducto=$Pro_IdProducto";

            $query = $this->db->query($sql);
            if($query->row()) {
                if($query->row()->Pce_CostoEnvio > 0){
                    $costoEnvio=$query->row()->Pce_CostoEnvio;
                } else {
                    $costoEnvio=0;
                }

            } else {
                $costoEnvio=0;
            }
            return $costoEnvio;
        }

         function get_cod_envio($Pac_IdPago_Compra,$Tie_IdTienda)
        {
            $sql = "SELECT pce.Pce_NOS
                    FROM pago_compra_envio as pce WHERE pce.Pac_IdPago_Compra=$Pac_IdPago_Compra and pce.Pce_IdTienda=$Tie_IdTienda ";

            $query = $this->db->query($sql);
            if($query->row()) {
                if($query->row()->Pce_NOS > 0){
                    $cod=$query->row()->Pce_NOS;
                } else {
                    $cod=0;
                }

            } else {
                $cod=0;
            }
            return $cod;
        }
        
    }
?>