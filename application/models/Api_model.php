<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Api_model extends CI_Model
    {
        private $nombre_tabla = 'plan';
        function __construct()
        {
            parent::__construct();
        }
         function get_agotado_api()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto,pro.Pro_PrecioMinimo as precio_minimo, pro.Pro_FechaModificacion as fecha_modificado');
            $this->db->from('producto as pro');
            $this->db->join('producto_tienda as prt','prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('prt.Tie_IdTienda',227);
            $this->db->where('pro.Pro_Estado',4);            
            $this->db->group_by('pro.Pro_IdProducto');
            $this->db->order_by('pro.Pro_FechaCreacion', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }  
        function get_productos_api()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible,pro.Pro_PrecioMinimo as precio_minimo');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_Sayra',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=',  2);
            $query = $this->db->get();
            return $query->result();
        }
        function get_products_total()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, sku.SKU_Color as variacion, sku.SKU_IdSKU as id_sku, sku.SKU_StockDisponible as stock,pro.Pro_PrecioMinimo as precio_minimo');
            $this->db->from('producto as pro');
            $this->db->join('sku as sku','ON sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $query = $this->db->get();
            return $query->result();
        }
        function get_productos_10_api()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto,pro.Pro_PrecioMinimo as precio_minimo, pro.Pro_FechaModificacion as fecha_modificado');
            $this->db->from('producto as pro');
            $this->db->join('producto_tienda as prt','prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('prt.Tie_IdTienda',227);
            $this->db->where('pro.Pro_Estado',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->limit(12);
            $query = $this->db->get();
            return $query->result();
        }
        function get_productos_sku_api()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, sku.SKU_Color as variacion, sku.SKU_IdSKU as id_sku, sku.SKU_StockDisponible as stock');
            $this->db->from('producto as pro');
            $this->db->join('sku as sku','sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('pro.Pro_Sayra',1);
            $this->db->where('sku.SKU_StockDisponible >=',2);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $query = $this->db->get();
            return $query->result();
        }
        function get_productos_sku_api1()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, sku.SKU_Color as variacion, sku.SKU_IdSKU as id_sku, sku.SKU_StockDisponible as stock');
            $this->db->from('producto as pro');
            $this->db->join('sku as sku','sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('pro.Pro_Sayra',1);
            $this->db->where('sku.SKU_StockDisponible >=',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $query = $this->db->get();
            return $query->result();
        }
        function get_categoriap_api($Cat_IdCategoria)
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto, pro.Pro_FechaModificacion as fecha_modificado');
            $this->db->from('producto as pro');
            $this->db->join('producto_tienda as prt','prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('cat.Cat_IdCategoria',$Cat_IdCategoria);
            $this->db->where('prt.Tie_IdTienda',227);
            $this->db->where('pro.Pro_Estado',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $query = $this->db->get();
            return $query->result();
        }  
        function get_detalle_api($Pro_IdProducto)
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto, pro.Pro_Descripcion as descripcion_producto, pro.Pro_Caracteristicas as caracteristicas, pro.Pro_Marca as marca_producto, pro.Pro_EdoGarantia as nuevo_producto,pro.Pro_PrecioMinimo as precio_minimo');
            $this->db->from('producto as pro');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('pro.Pro_IdProducto',$Pro_IdProducto);
            $query = $this->db->get();
            return $query->row();
        }
        function get_detalle_sku($Pro_IdProducto)
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, sku.SKU_Color as variacion, sku.SKU_IdSKU as id_sku, sku.SKU_StockDisponible as stock');
            $this->db->from('producto as pro');
            $this->db->join('sku as sku','sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('pro.Pro_IdProducto',$Pro_IdProducto);
            $query = $this->db->get();
            return $query->result();
        }
        function search_p($nombre_producto)
        {
            $a = explode("%20",$nombre_producto);
             $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, pro.Pro_FechaModificacion as fecha_modificado, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible,pro.Pro_PrecioMinimo as precio_minimo');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_Sayra',1);
            $this->db->like('pro.Pro_Nombre', $a[0]);
            for ($i=1; $i < count($a) ; $i++) { 
                $this->db->or_like('pro.Pro_Nombre', $a[$i]);
            }
            $this->db->having('SKU_StockDisponible >=',  2);
            $query = $this->db->get();
            return $query->result();
        }
        function get_fotos_api($Pro_IdProducto)
        {
            $this->db->select('Prf_Img  as img_producto');
            $this->db->from('producto_foto');
            $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);;
            $query = $this->db->get();
            return $query->result();
        }  
        function get_categorias_api()
        {
            $this->db->select('cat.Cat_IdCategoria as id_categoria, cat.Cat_Nombre as categoria_producto');
            $this->db->from('producto as pro');
            $this->db->join('producto_tienda as prt','prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('prt.Tie_IdTienda',227);
            $this->db->where('pro.Pro_Estado',1);
            $this->db->group_by('cat.Cat_IdCategoria');
            $query = $this->db->get();
            return $query->result();
        }
        function get_update_stock_resta($skus)
        {       
            foreach ($skus as $sk => $val){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk);
            $query = $this->db->get();
            $stock = $query->row();
            $this->db->set('SKU_StockReal', $stock->SKU_StockReal - $val);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $val);
            $this->db->where('SKU_IdSKU', $sk);
            $this->db->update('sku');
            }
            return true;
        }
        function get_update_stock_suma($skus)
        {       
            foreach ($skus as $sk => $val){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk);
            $query = $this->db->get();
            $stock = $query->row();
            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible + $val);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $val);
            $this->db->where('SKU_IdSKU', $sk);
            $this->db->update('sku');
            }
            return true;
        }
        function get_update_sin_stock($skus)
        {       
            foreach ($skus as $sk => $val){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk);
            $query = $this->db->get();
            $stock = $query->row();
            // $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $val);
            $this->db->set('SKU_StockReal', $stock->SKU_StockReal - $val);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $val);
            $this->db->where('SKU_IdSKU', $sk);
            $this->db->update('sku');
            }
            return true;
        }
        function get_reservar_stock($skus)
        {       
            foreach ($skus as $sk => $val){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk);
            $query = $this->db->get();
            $stock = $query->row();
            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $val);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado + $val);
            $this->db->where('SKU_IdSKU', $sk);
            $this->db->update('sku');
            }
            return 1;
        }
        function get_descontar_stock($skus)
        {       
            foreach ($skus as $sk => $val){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk);
            $query = $this->db->get();
            $stock = $query->row();
            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $val);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $val);
            $this->db->where('SKU_IdSKU', $sk);
            $this->db->update('sku');
            }
            return 1;
        }
        function update_nuevo_stock($skus)
        {       
            foreach ($skus as $sk){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk['SKU_IdSku']);
            $query = $this->db->get();
            $stock = $query->row();
            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible + $sk['cantidad_sku']);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $sk['cantidad_sku']);
            $this->db->where('SKU_IdSKU', $sk['SKU_IdSku']);
            $this->db->update('sku');
            }
            return 1;
        }
        
        function entregado_sayra($skus)
        {       
            foreach ($skus as $sk){
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$sk['SKU_IdSku']);
            $query = $this->db->get();
            $stock = $query->row();
            $this->db->set('SKU_StockReal', $stock->SKU_StockReal - $sk['cantidad_sku']);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $sk['cantidad_sku']);
            $this->db->where('SKU_IdSKU', $sk['SKU_IdSku']);
            $this->db->update('sku');
            }
            return 1;
        }
    }
?>