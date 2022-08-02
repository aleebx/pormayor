<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Reporte_model extends CI_Model
    {

        function __construct()
        {
            parent::__construct();
        }

        function reporte_kardex($Pro_IdProducto)
        {
            $sql = "SELECT * FROM pago_compra_detalle AS pcd INNER JOIN sku as sku ON sku.SKU_IdSKU = pcd.Pcd_IdSKU INNER JOIN pago_compra as pac ON pac.Pac_IdPago_Compra = pcd.Pac_IdPago_Compra WHERE sku.producto_Pro_IdProducto = $Pro_IdProducto";
            $query = $this->db->query($sql);
            return $query->result();

        }

        function preventa()
        {
            $sql = "SELECT * FROM pago_compra AS pac 
            INNER JOIN pago_compra_detalle as pcd ON pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra 
            INNER JOIN sku as sku ON sku.SKU_IdSKU = pcd.Pcd_IdSKU 
            INNER JOIN producto as pro ON pro.Pro_IdProducto = sku.producto_Pro_IdProducto 
            WHERE pro.Pro_Preventa = 1";
            $query = $this->db->query($sql);
            return $query->result();

        }

        function compras_kardex($Pro_IdProducto)
        {
            $sql = "SELECT * FROM producto_proveedor WHERE Pro_IdProducto = $Pro_IdProducto";
            $query = $this->db->query($sql);
            return $query->result();

        }
        
        function producto_malogrado($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('producto_malo as prm');
            $this->db->join('sku as sku','sku.SKU_IdSKU = prm.SKU_IdSKU');
            $this->db->where('sku.producto_Pro_IdProducto', $Pro_IdProducto);
            $query = $this->db->get();
            return $query->result();
        }

        function top10productos()
        {
            $hoy = date('Y-m-d');
            $siete = date("Y-m-d",strtotime($hoy."- 1 week")); 
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, sum(pcd.Pcd_Cantidad) as total, count(pac.Pac_IdPago_Compra) as cantidadV, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as stock');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->join('sku as sku','sku.SKU_IdSKU = pcd.Pcd_IdSKU');
            $this->db->join('producto as pro','pro.Pro_IdProducto = sku.producto_Pro_IdProducto');
            $this->db->join('producto_foto as prf','prf.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('pac.Pac_FechaRegistro >=', $siete);
            $this->db->where('pac.Pac_FechaRegistro <=', $hoy);
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->group_by('pro.Pro_IdProducto');
            $this->db->order_by('total','DESC');
            $query = $this->db->get();
            return $query->result();
        }

        function productostop()
        {
            $hoy = date('Y-m-d');
            $siete = date("Y-m-d",strtotime($hoy."- 1 week")); 
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, sum(pcd.Pcd_Cantidad) as total, count(pac.Pac_IdPago_Compra) as cantidadV, pro.Pro_PrecioMinimo, (SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->join('sku as sku','sku.SKU_IdSKU = pcd.Pcd_IdSKU');
            $this->db->join('producto as pro','pro.Pro_IdProducto = sku.producto_Pro_IdProducto');
            $this->db->where('pac.Pac_FechaRegistro >=', $siete);
            $this->db->where('pac.Pac_FechaRegistro <=', $hoy);
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->group_by('pro.Pro_IdProducto');
            $this->db->order_by('total','DESC');
            $this->db->limit(10);
            $query = $this->db->get();
            return $query->result();
        }

        function ventasRegion()
        {
            $hoy = date('Y-m-d');
            $mes = date("Y-m-d",strtotime($hoy."- 4 week")); 
            $this->db->select('count(pac.Pac_IdPago_Compra) as cantidadV, reg.name');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_direccion_usu as pdu','pdu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('regions as reg','reg.id = pdu.Pag_idregion');
            $this->db->where('pac.Pac_FechaRegistro >=', $mes);
            $this->db->where('pac.Pac_FechaRegistro <=', $hoy);
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->group_by('reg.name');
            $query = $this->db->get();
            return $query->result();
        }

        function montoRegion()
        {
            $hoy = date('Y-m-d');
            $mes = date("Y-m-d",strtotime($hoy."- 4 week")); 
            $this->db->select('sum(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as montoV, reg.name');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->join('pago_direccion_usu as pdu','pdu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('regions as reg','reg.id = pdu.Pag_idregion');
            $this->db->where('pac.Pac_FechaRegistro >=', $mes);
            $this->db->where('pac.Pac_FechaRegistro <=', $hoy);
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->group_by('reg.name');
            $query = $this->db->get();
            return $query->result();
        }

        function registroHoy()
        {
            $hoy = date('Y-m-d');
            $this->db->like('Usu_Created', $hoy);
            $this->db->from('usuario');
            return $this->db->count_all_results();
        }
        function registroAyer()
        {
            $hoy = date('Y-m-d');
            $ayer = date("Y-m-d",strtotime($hoy."- 1 day")); 
            $this->db->like('Usu_Created', $ayer);
            $this->db->from('usuario');
            return $this->db->count_all_results();
        }

        function montoHoy()
        {
            $hoy = date('Y-m-d');

            $this->db->select('sum(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as montoT');
            $this->db->from('pago_compra as pac');
             $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->like('pac.Pac_FechaModificado', $hoy);
            $query = $this->db->get();
            return $query->row();

        }
        function montoAyer()
        {
            $hoy = date('Y-m-d');
            $ayer = date("Y-m-d",strtotime($hoy."- 1 day")); 

            $this->db->select('sum(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as montoT');
            $this->db->from('pago_compra as pac');
             $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->like('pac.Pac_FechaModificado', $ayer);
            $query = $this->db->get();
            return $query->row();

        }
        function ventascantidadhoy()
        {
            $hoy = date('Y-m-d');
            $this->db->where('Pac_Estado', 5);
            $this->db->like('Pac_FechaModificado', $hoy);
            $this->db->from('pago_compra');
            return $this->db->count_all_results();

        }

        function ventascantidadayer()
        {
            $hoy = date('Y-m-d');
            $ayer = date("Y-m-d",strtotime($hoy."- 1 day")); 
            $this->db->where('Pac_Estado', 5);
            $this->db->like('Pac_FechaModificado', $ayer);
            $this->db->from('pago_compra');
            return $this->db->count_all_results();
        }

        function productosfail()
        {
            $hoy = date('Y-m-d');
            $siete = date("Y-m-d",strtotime($hoy."- 4 week")); 
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, sum(pcd.Pcd_Cantidad) as total, count(pac.Pac_IdPago_Compra) as cantidadV, pro.Pro_PrecioMinimo, (SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->join('sku as sku','sku.SKU_IdSKU = pcd.Pcd_IdSKU');
            $this->db->join('producto as pro','pro.Pro_IdProducto = sku.producto_Pro_IdProducto');
            $this->db->where('pac.Pac_FechaRegistro >=', $siete);
            $this->db->where('pac.Pac_FechaRegistro <=', $hoy);
            $this->db->where('pac.Pac_Estado', 5);
            $this->db->group_by('pro.Pro_IdProducto');
            $this->db->order_by('total','ASC');
            $this->db->limit(10);
            $query = $this->db->get();
            return $query->result();
        }
        
        function get_clientes_all(){
            $this->db->select('usu.Usu_IdUsuario,per.Per_Nombre,per.Per_Telefono,(SELECT reg.name from regions as reg where reg.id = pdu.Pag_idregion) AS dep,(SELECT dis.name from districts as dis where dis.id = pdu.Pag_iddistrito) AS dis, (SELECT count(Pac_IdPago_Compra) FROM pago_compra as pac where pac.Usu_IdUsuario = usu.Usu_IdUsuario) as compras, usu.Usu_IdUsuario_Ven, usu.Usu_Created, usu.Usu_Correo');
            $this->db->from('usuario as usu');
            $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->join('pago_direccion_usu as pdu','pdu.Usu_IdUsuario = usu.Usu_IdUsuario','left');
            $this->db->where('usu.Rol_IdRol', 4);
            $this->db->where('usu.Usu_Activated', 1);
            $query = $this->db->get();
            return $query->result();
        }

        function reporte_gestion($mes){
        $m = (int)date("m",strtotime($mes));
        $this->db->select('DATE_FORMAT(ges.Ges_FechaRegistro, "%Y-%m-%d") as fecha,COUNT(ges.Ges_IdGestion) as gestion,(SELECT pe2.Per_Nombre FROM usuario as us2 INNER JOIN persona as pe2 on pe2.Per_IdPersona = us2.Per_IdPersona  WHERE us2.Usu_IdUsuario = usu.Usu_IdUsuario_Ven LIMIT 1) as vendedor');
        $this->db->from('usuario as usu');
        $this->db->join('gestion_cliente as ges','ges.Usu_IdUsuario = usu.Usu_IdUsuario');
        $this->db->like('ges.Ges_FechaRegistro',$mes);
        $this->db->group_by('fecha,vendedor');
        $this->db->order_by('ges.Ges_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();
        }

            function reporte_ventas($mes){
        $this->db->select('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d") as fecha, SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as total,(SELECT pe2.Per_Nombre FROM usuario as us2 INNER JOIN persona as pe2 on pe2.Per_IdPersona = us2.Per_IdPersona  WHERE us2.Usu_IdUsuario = usu.Usu_IdUsuario_Ven LIMIT 1) as vendedor');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
        $this->db->where('pac.Pac_Estado',5);
        $this->db->like('pac.Pac_FechaRegistro',$mes);
        $this->db->group_by('fecha,vendedor');
        $this->db->order_by('pac.Pac_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function reporte_ventas_c($mes){
        $this->db->select('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d") as fecha,(SELECT COUNT(pac.Pac_IdPago_Compra) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as cantidad,(SELECT pe2.Per_Nombre FROM usuario as us2 INNER JOIN persona as pe2 on pe2.Per_IdPersona = us2.Per_IdPersona  WHERE us2.Usu_IdUsuario = usu.Usu_IdUsuario_Ven LIMIT 1) as vendedor');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->where('pac.Pac_Estado',5);
        $this->db->like('pac.Pac_FechaRegistro',$mes);
        $this->db->group_by('fecha,vendedor');
        $this->db->order_by('pac.Pac_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }


        function saldo_producto($Pro_IdProducto)
        {
            $sql = "SELECT SUM(Ppv_UnidadesTotal) AS compras FROM producto_proveedor WHERE Pro_IdProducto = $Pro_IdProducto";
            $query = $this->db->query($sql);
            $tCompra = $query->row();

            $sql = "SELECT SUM(pcd.Pcd_Cantidad) AS ventas FROM pago_compra_detalle AS pcd INNER JOIN sku as sku ON sku.SKU_IdSKU = pcd.Pcd_IdSKU INNER JOIN pago_compra as pac ON pac.Pac_IdPago_Compra = pcd.Pac_IdPago_Compra WHERE sku.producto_Pro_IdProducto = $Pro_IdProducto AND pac.Pac_Estado = 5";
            $query = $this->db->query($sql);
            $tVenta = $query->row();

            $total = $tCompra->compras - $tVenta->ventas;

            return $total;

        }

        function get_resumen_v($fecha_i,$fecha_f)
        {
            $this->db->select('pac.Pac_IdPago_Compra,pac.Pac_FechaRegistro,per.Per_Nombre, (SELECT SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as pago_productos, pac.Pac_Envio,pac.Pac_Estado');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona');
            // $this->db->where("(pac.Pac_FechaRegistro >= $fecha_i AND pac.Pac_FechaRegistro >= $fecha_f)", NULL, FALSE);
            $this->db->where('pac.Pac_FechaRegistro >=',$fecha_i);
            $this->db->where('pac.Pac_FechaRegistro <=',$fecha_f);
            $this->db->where('pac.Pac_Estado', 5);
            $query = $this->db->get();
            return $query->result();
        }

        function reporte_ventas_dia()
        {
            $hoy = date('Y-m-d');
            $this->db->select('pac.Pac_IdPago_Compra,pac.Pac_FechaRegistro,(SELECT per.Per_Nombre from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) Per_Nombre, (SELECT SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as pago_productos, pac.Pac_Envio,pac.Pac_Estado,(SELECT per.Per_Telefono from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) as Per_Telefono,pac.Pac_Banco,pac.Pac_FechaModificado,pav.Pvoc_MedioPago,pav.Pvoc_Monto,pav.Pvoc_EstadoComprobante');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_voucher as pav','pav.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->like('pac.Pac_FechaModificado',$hoy);
            $query = $this->db->get();
            return $query->result();
        }

        function reporte_ventas_mes($mes)
        {
            $this->db->select('pac.Pac_IdPago_Compra,pac.Pac_FechaRegistro,(SELECT per.Per_Nombre from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) Per_Nombre, (SELECT SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as pago_productos, pac.Pac_Envio,pac.Pac_Estado,(SELECT per.Per_Telefono from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) as Per_Telefono,pac.Pac_Banco,pac.Pac_FechaModificado,pav.Pvoc_MedioPago,pav.Pvoc_Monto,pav.Pvoc_EstadoComprobante');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_voucher as pav','pav.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
            $this->db->like('pac.Pac_FechaRegistro',$mes);
            $query = $this->db->get();
            return $query->result();
        }

        function reporte_pagos_dia()
        {
            $hoy = date('Y-m-d');
            $this->db->select('pac.Pac_IdPago_Compra,pac.Pac_FechaRegistro,(SELECT per.Per_Nombre from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) Per_Nombre, (SELECT SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as pago_productos, pac.Pac_Envio,pac.Pac_Estado,(SELECT per.Per_Telefono from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) as Per_Telefono,pac.Pac_Banco,pac.Pac_FechaModificado,pav.Pvoc_MedioPago,pav.Pvoc_Monto,pav.Pvoc_EstadoComprobante, pav.Pvoc_FechaRegistro');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_voucher as pav','pav.Pac_IdPago_Compra = pac.Pac_IdPago_Compra','left');
            $this->db->like('pav.Pvoc_FechaRegistro',$hoy);
            $query = $this->db->get();
            return $query->result();
        }

        function reporte_pagos_dia2($fecha)
        {
            $hoy = date('Y-m-d');
            $this->db->select('pac.Pac_IdPago_Compra,pac.Pac_FechaRegistro,(SELECT per.Per_Nombre from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) Per_Nombre, (SELECT SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as pago_productos, pac.Pac_Envio,pac.Pac_Estado,(SELECT per.Per_Telefono from persona as per inner join usuario as usu on usu.Per_IdPersona = per.Per_IdPersona where usu.Usu_IdUsuario = pac.Usu_IdUsuario) as Per_Telefono,pac.Pac_Banco,pac.Pac_FechaModificado,pav.Pvoc_MedioPago,pav.Pvoc_Monto,pav.Pvoc_EstadoComprobante, pav.Pvoc_FechaRegistro');
            $this->db->from('pago_compra as pac');
            $this->db->join('pago_voucher as pav','pav.Pac_IdPago_Compra = pac.Pac_IdPago_Compra','left');
            $this->db->like('pav.Pvoc_FechaRegistro',$fecha);
            $query = $this->db->get();
            return $query->result();
        }

        function alerta_stock()
        {
            $this->db->select('*');
            $this->db->from('producto as pro');
            $this->db->join('sku as sku','ON sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
            // $this->db->where("(sku.SKU_StockDisponible <= 10 AND sku.SKU_StockDisponible != 0)", NULL, FALSE);
            $query = $this->db->get();
            return $query->result();
        }

        function get_vendedores()
        {
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('Rol_IdRol',5);
            $query = $this->db->get();
            return $query->result();
        }
        function update_vendedor($Usu_IdUsuario_Ven,$Usu_IdUsuario)
        {
            $this->db->set('Usu_IdUsuario_Ven', $Usu_IdUsuario_Ven);
            $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);        
            $this->db->update('usuario');
        }

        function get_clientes_registrado(){
        $this->db->select('(SELECT count(Pac_IdPago_Compra) FROM pago_compra WHERE Pac_Estado = 5 and pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario) AS entregado, (SELECT count(Pac_IdPago_Compra) FROM pago_compra WHERE Pac_Estado = 6 and pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario) AS rechazado, usu.Usu_IdUsuario, per.Per_Nombre, per.Per_Telefono, (SELECT Pac_FechaRegistro FROM pago_compra WHERE pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario  order by Pac_FechaRegistro DESC limit 1) AS ultimo_pedido, (SELECT Pac_Estado FROM pago_compra WHERE pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario order by Pac_FechaRegistro DESC limit 1) AS ultimo_estado,usu.Usu_Created,(SELECT sum(Pac_Total) FROM pago_compra WHERE Pac_Estado = 5 and pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario) AS monto_entregado,usu.Usu_IdUsuario_Ven');
        $this->db->from('usuario as usu');
        $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
        $this->db->where('usu.Usu_Activated', 1);
        $query = $this->db->get();
        return $query->result();
    }
    }
?>