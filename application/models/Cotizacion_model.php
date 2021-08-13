<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Cotizacion_model extends CI_Model
    {
        private $nombre_tabla = 'pedido';

        function __construct()
        {
            parent::__construct();
        }
        
        function enviarPedido($arrData, $carrito, $Usu_IdUsuario, $tienda_usuario, $array_id_tienda)
        {
            $this->db->trans_start();

            //registro pedido
            $this->db->set('Ped_Datos', $arrData[0]);
            $this->db->set('Ped_Telefono', $arrData[1]);
            $this->db->set('Ped_Correo', $arrData[2]);
            $this->db->set('Region_Id', $arrData[3]);
            $this->db->set('Provincia_Id', $arrData[4]);
            $this->db->set('Distrito_Id', $arrData[5]);
            $this->db->set('Ped_Direccion', $arrData[6]);
            $this->db->set('Ped_Estatus', 1);
            $this->db->set('Ped_Comentario', $arrData[7]);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            
            if ($this->db->insert('pedido'))
            {
                $Ped_IdPedido = $this->db->insert_id();
            };

            foreach ($carrito as $car)
            {
                $tienda = $this->get_id_tienda_x_sku($car['id']);

                if($tienda_usuario)
                {
                    if($tienda_usuario != $tienda->Tie_IdTienda)
                    {
                        $this->registrar_pedido_detalle($Ped_IdPedido, $car['id'], $car['qty']);
                    }
                }
                else
                {
                    $this->registrar_pedido_detalle($Ped_IdPedido, $car['id'], $car['qty']);
                }
            }

            foreach ($array_id_tienda as $Tie_IdTienda) 
            {
                if($tienda_usuario)
                {
                    if($tienda_usuario != $Tie_IdTienda)
                    {
                        $this->registrar_tienda_pedido($Tie_IdTienda, $Ped_IdPedido);
                    }
                }
                else
                {
                    $this->registrar_tienda_pedido($Tie_IdTienda, $Ped_IdPedido);
                }
            }
            
            $this->db->trans_complete();
            
            if ($this->db->trans_status() == TRUE) 
            {
               return $Ped_IdPedido;
            }else{
                return null;
                
            }

        }

        function get_tiendas_x_pedido($Ped_IdPedido)
        {
            $sql = "SELECT prt.Tie_IdTienda, usu.`Usu_Correo`, per.Per_Nombre, tie.Tie_Subdominio
                    FROM pedido AS ped
                    INNER JOIN pedido_detalle AS pde ON pde.`pedido_Ped_IdPedido` = ped.Ped_IdPedido
                    INNER JOIN sku AS sku ON sku.SKU_IdSku = pde.SKU_IdSKU
                    INNER JOIN producto AS pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto
                    INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto = pro.`Pro_IdProducto`
                    INNER JOIN usuario AS usu ON usu.`Tie_IdTienda` = prt.`Tie_IdTienda`
                    INNER JOIN tienda AS tie ON tie.`Tie_IdTienda` = prt.`Tie_IdTienda`
                    INNER JOIN persona AS per ON per.`Per_IdPersona` = usu.`Per_IdPersona`
                    WHERE usu.`Rol_IdRol` = 2 AND ped.Ped_IdPedido = $Ped_IdPedido GROUP BY prt.`Tie_IdTienda`";

            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_datos_correo($Tie_IdTienda)
        {
            $sql = "SELECT usu.Usu_Correo, per.Per_Nombre, tie.Tie_Subdominio
                    FROM usuario AS usu
                    INNER JOIN tienda AS tie ON tie.`Tie_IdTienda` = usu.`Tie_IdTienda`
                    INNER JOIN persona AS per ON per.`Per_IdPersona` = usu.`Per_IdPersona`
                    WHERE usu.`Rol_IdRol` = 2 AND usu.Tie_IdTienda = $Tie_IdTienda";

            $query = $this->db->query($sql);

            return $query->row();
        }

        function get_id_tienda_x_sku($SKU_IdSKU)
        {
            $sql = "SELECT prt.Tie_IdTienda
                    FROM sku AS sku
                    INNER JOIN producto AS pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto
                    INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto = pro.`Pro_IdProducto`
                    WHERE sku.SKU_IdSKU = $SKU_IdSKU";

            $query = $this->db->query($sql);

            return $query->row();
        }
        
        function getPedidos()
        {
            $this->db->select('*');
            $this->db->from('pedido');
        
            $query = $this->db->get();
            return $query->result();
        }

        function getPedidoDetalle($idPedido)
        {
            $sql = "SELECT ped.Ped_IdPedido, pro.Pro_Nombre, unm.Unm_Nombre, ped.Ped_Datos, ped.Ped_Correo,ped.Ped_Direccion, ped.Ped_Telefono, ped.Ped_Estatus, ped.Ped_FechaCreacion, sku.SKU_IdSKU, pde.Ped_Cantidad, sku.SKU_Img FROM pedido as ped INNER JOIN pedido_detalle as pde ON pde.Pedido_Ped_IdPedido = ped.Ped_IdPedido INNER JOIN sku as sku ON sku.SKU_IdSku = pde.SKU_IdSKU INNER JOIN producto as pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto INNER JOIN producto_unidad as pru ON pru.producto_Pro_IdProducto = pro.Pro_IdProducto INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pru.Unm_IdUnidadMedidad WHERE ped.Ped_IdPedido = $idPedido";
            $query = $this->db->query($sql);   
            return $query->result();
        }
        
        function getPedidoDetalleVar($idPedido)
        {
            $sql = "SELECT ped.Ped_IdPedido, ped.Ped_Datos, ped.Ped_Correo,ped.Ped_Direccion, ped.Ped_Estatus, ped.Ped_FechaCreacion, sku.SKU_IdSKU, pde.Ped_Cantidad, sku.SKU_Img, pro.Pro_Nombre, var.Var_Nombre, vao.Vao_Nombre,tie.Tie_Nombre  FROM pedido as ped 
                INNER JOIN pedido_detalle as pde ON pde.Pedido_Ped_IdPedido = ped.Ped_IdPedido 
                INNER JOIN sku as sku ON sku.SKU_IdSku = pde.SKU_IdSKU 
                INNER JOIN sku_pvo as spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSku 
                INNER JOIN producto_variacion as prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion 
                INNER JOIN producto_variacion_opcion as pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO 
                INNER JOIN producto as pro ON prv.Producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN variacion as var ON var.Var_IdVariacion = prv.Prv_IdVariacion
                INNER JOIN variacion_opcion as vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao 
                INNER JOIN tienda as tie ON tie.Tie_IdTienda = ped.tienda_Tie_IdTienda
                WHERE ped.Ped_IdPedido = $idPedido";
            $query = $this->db->query($sql);   
            return $query->result();
        }

        function get_pedidos_usuario($Usu_IdUsuario)
        {
            $this->db->select('ped.Ped_IdPedido,ped.Ped_Datos,ped.Ped_Correo,ped.Ped_Telefono, ped.Ped_FechaCreacion, ped.Ped_Estatus, ped.Usu_IdUsuario, ped.Ped_Direccion, tip.Tie_IdTienda, ped.Ped_Comentario, tip.Tip_Estatus, cot.Cot_IdCotizacion, cot.Cot_Estado, cot.Tip_IdTiendaPedido, cot.Cot_FechaRegistro, cot.Cot_EstadoNoti');
            $this->db->from('pedido as ped');
            $this->db->join('tienda_pedido as tip', 'on tip.Ped_IdPedido = ped.Ped_IdPedido');
            $this->db->join('cotizacion AS cot', 'cot ON cot.pedido_Ped_IdPedido = ped.Ped_IdPedido','left'); 
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->order_by('ped.Ped_IdPedido', 'DESC');
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_pedidos_usuario_detalle($Usu_IdUsuario)
        {
            $sql = "SELECT ped.Ped_IdPedido, pro.Pro_Nombre, unm.Unm_Nombre, ped.Ped_Datos, ped.Ped_Correo,ped.Ped_Direccion, ped.Ped_Telefono, ped.Ped_Estatus, ped.Ped_FechaCreacion, sku.SKU_IdSKU, pde.Ped_Cantidad, sku.SKU_Img, sku.SKU_Color, var.Var_Nombre, vao.Vao_Nombre, tie.Tie_Nombre
            FROM pedido as ped
            INNER JOIN pedido_detalle as pde ON pde.Pedido_Ped_IdPedido = ped.Ped_IdPedido 
            INNER JOIN sku as sku ON sku.SKU_IdSku = pde.SKU_IdSKU
            INNER JOIN sku_pvo as skp ON skp.sku_SKU_IdSKU = sku.SKU_IdSKU
            INNER JOIN producto as pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto 
            INNER JOIN producto_unidad as pru ON pru.producto_Pro_IdProducto = pro.Pro_IdProducto
            INNER JOIN producto_variacion as prv ON skp.producto_variacion_Prv_IdProductoVariacion = prv.Prv_IdProductoVariacion
            INNER JOIN producto_variacion_opcion as pvo ON skp.producto_variacion_opcion_PVO_IdPVO = pvo.PVO_IdPVO  
            INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pru.Unm_IdUnidadMedidad 
            INNER JOIN variacion AS var ON var.Var_IdVariacion = prv.Prv_IdVariacion
            INNER JOIN variacion_opcion AS vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao 
            INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto = pro.Pro_IdProducto 
            INNER JOIN tienda AS tie ON tie.Tie_IdTienda = prt.Tie_IdTienda 
            WHERE ped.Usu_IdUsuario = $Usu_IdUsuario ORDER BY prt.Tie_IdTienda";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_cotizacion_usuario_noti($Usu_IdUsuario)
        {
            $this->db->select('cot.Cot_EstadoNoti');
            $this->db->from('cotizacion as cot');
            $this->db->join('pedido AS ped', 'ped ON ped.Ped_IdPedido = cot.pedido_Ped_IdPedido'); 
            $this->db->group_start();
            $this->db->where('ped.Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->where('cot.Cot_EstadoNoti', 1);
            $this->db->group_end();
        
            $query = $this->db->get();
            return $query->result();
        }

        function update_cotizacion_usuario_noti($cotizaciones)
        {
            $this->db->trans_start();
            $i= 0;
            foreach ($cotizaciones as $item) 
            {
                $this->db->set('Cot_EstadoNoti', 2);
                $this->db->where('Cot_IdCotizacion', $item);

                $this->db->update('cotizacion');
                $i++;
            }

            $this->db->trans_complete();
        }

        function get_cotizacion_usuario($Usu_IdUsuario)
        {
            $this->db->select('*');
            $this->db->from('cotizacion as cot');
            $this->db->join('pedido AS ped', 'ped ON ped.Ped_IdPedido = cot.pedido_Ped_IdPedido'); 
            $this->db->where('ped.Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->group_by('ped.Ped_IdPedido');
            $this->db->order_by('ped.Ped_IdPedido', 'DESC');
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_estado_cotizacion_venta($Cot_IdCotizacion)
        {
            $this->db->select('cot.Cot_Estado, ven.Ven_IdVenta, cot.Cot_FechaRegistro');
            $this->db->from('cotizacion cot');
            $this->db->join('venta AS ven', 'ven.Cot_IdCotizacion = cot.Cot_IdCotizacion'); 
            $this->db->where('cot.Cot_IdCotizacion', $Cot_IdCotizacion);
        
            $query = $this->db->get();
            return $query->row();
        }
    
        function get_dcotizacion($Cot_IdCotizacion)
        {
            $this->db->select('pro.Pro_Nombre, sku.SKU_Img, cde.Precio_Cotizacion, cde.Cantidad_Cotizacion, unm.Unm_Nombre, var.Var_Nombre, vao.Vao_Nombre, cde.PrecioDscto_Cotizacion, cde.SKU_IdSKU, tie.Tie_PorcentajeCotizacion, cot.Cot_Estado, prt.Tie_IdTienda, ped.Usu_IdUsuario,sku.SKU_Color');
            $this->db->from('cotizacion as cot');
            $this->db->join('cotizacion_detalle AS cde', 'cde ON cde.cotizacion_Cot_IdCotizacion = cot.Cot_IdCotizacion'); 
            $this->db->join('sku AS sku', 'sku ON sku.SKU_IdSKU = cde.SKU_IdSKU');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion');
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->join('producto AS pro', 'pro ON pro.Pro_IdProducto = sku.Producto_Pro_IdProducto');
            $this->db->join('producto_tienda AS prt', 'prt ON prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('tienda AS tie', 'tie ON tie.Tie_IdTienda = prt.Tie_IdTienda');
            $this->db->join('producto_unidad AS pru', 'pru ON pru.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('unidadmedida AS unm', 'unm ON unm.Unm_IdUnidadMedida = pru.Unm_IdUnidadMedidad');
            $this->db->join('pedido AS ped', 'ped ON ped.Ped_IdPedido = cot.pedido_Ped_IdPedido');
            $this->db->where('cot.Cot_IdCotizacion',$Cot_IdCotizacion);
            $query = $this->db->get();

            return $query->result();
        }

        function get_comentarios_usuario_noti($Usu_IdUsuario)
        {
            $this->db->select('*'); 
            $this->db->from('comentario as com');
            $this->db->join('respuesta as res','res ON res.Com_IdComentario = com.Com_IdComentario','left');
            $this->db->group_start();
            $this->db->where('com.Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->where('res.Res_Estado', 1);
            $this->db->group_end();
            $this->db->group_by('com.Com_IdComentario');
            // $this->db->order_by('res.Res_FechaCreado', 'ASC');
            $query = $this->db->get();
            return $query->result();
        }

        function update_comments_usuario_noti($respuestas)
        {
            $this->db->trans_start();
            $i= 0;
            foreach ($respuestas as $item) 
            {
                $this->db->set('Res_Estado', 2);
                $this->db->where('Res_IdRespuesta', $item);

                $this->db->update('respuesta');
                $i++;
            }

            $this->db->trans_complete();
        }

        function get_comentarios_usuario($Usu_IdUsuario)
        {
            $this->db->select('*'); 
            $this->db->from('comentario as com');
            $this->db->join('respuesta as res','res ON res.Com_IdComentario = com.Com_IdComentario','left');
            $this->db->join('producto as pro','pro ON pro.Pro_IdProducto = com.Pro_IdProducto');
            $this->db->join('producto_foto as prf','prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_tienda as prt','prt ON prt.Pro_IdProducto = com.Pro_IdProducto');
            $this->db->join('tienda as tie','tie ON tie.Tie_IdTienda = prt.Tie_IdTienda');
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->group_by('com.Com_IdComentario');
            $this->db->order_by('com.Com_FechaCreacion', 'DESC');
            $query = $this->db->get();
            return $query->result();
        } 

        function get_comentarios_usuario_img($Usu_IdUsuario)
        {
            $this->db->select('*'); 
            $this->db->from('comentario as com');
            $this->db->join('respuesta as res','res ON res.Com_IdComentario = com.Com_IdComentario','left');
            $this->db->join('producto as pro','pro ON pro.Pro_IdProducto = com.Pro_IdProducto');
            $this->db->join('producto_foto as prf','prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('com.Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->order_by('com.Com_FechaCreacion', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }

        function get_usuario_porIdTienda($tienda_Tie_IdTienda)
        {
            $this->db->select('Usu_Correo');
            $this->db->from('usuario');
            $this->db->where('Tie_IdTienda', $tienda_Tie_IdTienda);
            $query = $this->db->get();
            return $query->row();
        }

        function registrar_tienda_pedido($Tie_IdTienda, $Ped_IdPedido)
        {
            $this->db->set('Tie_IdTienda', $Tie_IdTienda);
            $this->db->set('Ped_IdPedido', $Ped_IdPedido);
            $this->db->insert('tienda_pedido');
        }

        function registrar_pedido_detalle($Ped_IdPedido, $SKU_IdSKU, $Ped_Cantidad)
        {
            $this->db->set('pedido_Ped_IdPedido', $Ped_IdPedido);
            $this->db->set('SKU_IdSKU', $SKU_IdSKU);
            $this->db->set('Ped_Cantidad', $Ped_Cantidad);
            $this->db->insert('pedido_detalle');
        }
    }
?>