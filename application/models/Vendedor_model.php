<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vendedor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function crear_comprador($nombre,$dni,$correoA,$celular,$hashed_password,$id_vendedor){
        $this->db->trans_start();

        $this->db->set('Per_Dni', $dni);
        $this->db->set('Tid_IdTipoDocumento', 1);
        $this->db->set('Per_Nombre', $nombre);
        $this->db->set('Per_Telefono', $celular);
        $this->db->set('Per_Celular', $celular);
        $this->db->set('Per_Correo', $correoA);
        $this->db->insert('persona');
        $Per_IdPersona = $this->db->insert_id();       

        $this->db->set('Per_IdPersona', $Per_IdPersona);
        $this->db->set('Usu_Nombre', $nombre);
        $this->db->set('Usu_Correo', $correoA);
        $this->db->set('Usu_Clave', $hashed_password);
        $this->db->set('Usu_LastIp', '1');
        $this->db->set('Rol_IdRol', 4);
        $this->db->set('Usu_IdUsuario_Ven', $id_vendedor);        
        if ($this->db->insert('usuario'))
        {
            $Usu_IdUsuario = $this->db->insert_id();      
        }

        $this->db->trans_complete();

        if($this->db->trans_status())
        {
            return $Usu_IdUsuario;
        }

        return NULL;
    }

    function addgestion($tipo,$Usu_IdUsuario,$motivo,$resultado,$accion,$fechaaccion){
        $this->db->trans_start();

        $this->db->set('Ges_TipoCliente', $tipo);
        $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
        $this->db->set('Ges_Detalle', $resultado);
        $this->db->set('Ges_Accion', $accion);
        $this->db->set('Ges_FechaProgramar', $fechaaccion);
        $this->db->set('Ges_Motivo', $motivo);
        $this->db->insert('gestion_cliente');

        $this->db->trans_complete();

        if($this->db->trans_status())
        {
            return 1;
        }

        return NULL;
    }

    function get_clientes($id_vendedor){
        $this->db->select('(SELECT count(Pac_IdPago_Compra) FROM pago_compra WHERE Pac_Estado = 5 and pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario) AS entregado, (SELECT count(Pac_IdPago_Compra) FROM pago_compra WHERE Pac_Estado = 6 and pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario) AS rechazado, usu.Usu_IdUsuario, per.Per_Nombre, per.Per_Telefono, (SELECT Pac_FechaRegistro FROM pago_compra WHERE pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario  order by Pac_FechaRegistro DESC limit 1) AS ultimo_pedido, (SELECT Pac_Estado FROM pago_compra WHERE pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario order by Pac_FechaRegistro DESC limit 1) AS ultimo_estado,usu.Usu_Created,(SELECT sum(Pac_Total) FROM pago_compra WHERE Pac_Estado = 5 and pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario) AS monto_entregado');
        $this->db->from('usuario as usu');
        $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
        $this->db->where('usu.Usu_IdUsuario_Ven', $id_vendedor);
        $this->db->where('usu.Usu_Activated', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function get_carteracliente($id_vendedor){
        $this->db->select('(SELECT Pac_FechaRegistro FROM pago_compra WHERE pago_compra.Usu_IdUsuario = usu.Usu_IdUsuario  order by Pac_FechaRegistro DESC limit 1) AS ultimo_pedido');
        $this->db->from('usuario as usu');
        $this->db->where('usu.Usu_IdUsuario_Ven', $id_vendedor);
        $this->db->where('usu.Usu_Activated', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function get_clientes_all(){
        $this->db->select('usu.Usu_IdUsuario,per.Per_Nombre,per.Per_Telefono,(SELECT reg.name from regions as reg where reg.id = pdu.Pag_idregion) AS dep,(SELECT dis.name from districts as dis where dis.id = pdu.Pag_iddistrito) AS dis, (SELECT count(Pac_IdPago_Compra) FROM pago_compra as pac where pac.Usu_IdUsuario = usu.Usu_IdUsuario) as compras, usu.Usu_IdUsuario_Ven, usu.Usu_Created, usu.Usu_Correo,(SELECT pe2.Per_Nombre FROM usuario as us2 INNER JOIN persona as pe2 on pe2.Per_IdPersona = us2.Per_IdPersona  WHERE us2.Usu_IdUsuario = usu.Usu_IdUsuario_Ven LIMIT 1) as vendedor');
        $this->db->from('usuario as usu');
        $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
        $this->db->join('pago_direccion_usu as pdu','pdu.Usu_IdUsuario = usu.Usu_IdUsuario','left');
        $this->db->where('usu.Rol_IdRol', 4);
        $this->db->where('usu.Usu_Activated', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function get_cliente($id_cliente){
        $this->db->select('pac.Pac_IdPago_Compra, usu.Usu_IdUsuario,per.Per_Nombre, pac.Pac_Total, pac.Pac_Envio, pac.Pac_Banco, pac.Pac_FechaRegistro, pac.Pac_Estado,pac.Pac_CodPago,per.Per_Telefono');
        $this->db->from('usuario as usu');
        $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
        $this->db->join('pago_compra as pac','pac.Usu_IdUsuario = usu.Usu_IdUsuario');
        $this->db->where('usu.Usu_IdUsuario', $id_cliente);
        $query = $this->db->get();
        return $query->result();
    }

    function datos_vendedor($id_vendedor){
        $this->db->select('usu.Usu_IdUsuario,per.Per_Nombre,per.Per_Telefono');
        $this->db->from('usuario as usu');
        $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
        $this->db->where('usu.Usu_IdUsuario', $id_vendedor);
        $query = $this->db->get();
        return $query->row();
    }

    function stock_vendedor(){
        $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, sku.SKU_Color, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, sku.SKU_StockDisponible, sku.SKU_Reservado,pro.Pro_PrecioMinimo');
        $this->db->from('producto as pro');
        $this->db->join('sku as sku','sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
        $this->db->order_by('pro.Pro_FechaModificacion','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_clientes_ventas($id_vendedor){
        $this->db->select('usu.Usu_IdUsuario, pac.Pac_Estado, count(pac.Pac_IdPago_Compra) as ventas, pac.Pac_FechaRegistro');
        $this->db->from('usuario as usu');
        $this->db->join('pago_compra as pac','pac.Usu_IdUsuario = usu.Usu_IdUsuario');
        $this->db->where('usu.Usu_IdUsuario_Ven', $id_vendedor);
        $this->db->group_by(array("usu.Usu_IdUsuario", "pac.Pac_Estado"));
        $this->db->order_by('pac.Pac_FechaRegistro','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_vauche_compra($Pac_IdPago_Compra){
        $this->db->select('*');
        $this->db->from('pago_voucher');
        $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);    
        $query = $this->db->get();
        return $query->row();
    } 

    function get_gestion($id){
        $this->db->select('*');
        $this->db->from('gestion_cliente');
        $this->db->where('Usu_IdUsuario',$id);  
        $this->db->order_by('Ges_FechaRegistro','DESC');
        $query = $this->db->get();
        return $query->result();
    } 

    function buscar_correo($correo){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('Usu_Correo',$correo);    
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return 1;
        } else {
          return null;
        }
    } 

    function reporte_gestion($id_vendedor,$mes){
        $m = (int)date("m",strtotime($mes));
        $this->db->select('DATE_FORMAT(ges.Ges_FechaRegistro, "%Y-%m-%d") as fecha,COUNT(ges.Ges_IdGestion) as gestion');
        $this->db->from('usuario as usu');
        $this->db->join('gestion_cliente as ges','ges.Usu_IdUsuario = usu.Usu_IdUsuario');
        $this->db->where('usu.Usu_IdUsuario_Ven',$id_vendedor);
        $this->db->where('DATE_FORMAT(ges.Ges_FechaRegistro, "%Y-%m") = ',$mes);
        $this->db->group_by('DATE_FORMAT(ges.Ges_FechaRegistro, "%Y-%m-%d")');
        $this->db->order_by('ges.Ges_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function reporte_ventas($id_vendedor,$mes){
        $this->db->select('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d") as fecha, SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as total');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
        $this->db->where("(pac.Pac_Estado = 5 AND usu.Usu_IdUsuario_Ven = $id_vendedor)", NULL, FALSE);
        $this->db->where('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m") =',$mes);
        $this->db->group_by('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d")');
        $this->db->order_by('pac.Pac_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function reporte_ventas_c($id_vendedor,$mes){
        $this->db->select('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d") as fecha,(SELECT COUNT(pac.Pac_IdPago_Compra) from pago_compra_detalle as pcd where pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra group by pcd.Pac_IdPago_Compra) as cantidad');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->where("(pac.Pac_Estado = 5 AND usu.Usu_IdUsuario_Ven = $id_vendedor)", NULL, FALSE);
        $this->db->where('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m") =',$mes);
        $this->db->group_by('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d")');
        $this->db->order_by('pac.Pac_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_gestion_all(){
        $this->db->select('*');
        $this->db->from('gestion_cliente'); 
        $this->db->group_by('Usu_IdUsuario');
        $this->db->order_by('Ges_FechaRegistro','DESC');
        $query = $this->db->get();
        return $query->result();
    } 

    function get_gestion_all_v($id_vendedor){
        $this->db->select('*');
        $this->db->from('gestion_cliente as ges');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = ges.Usu_IdUsuario');
        $this->db->where('usu.Usu_IdUsuario_Ven',$id_vendedor);
        $this->db->group_by('ges.Usu_IdUsuario');
        $this->db->order_by('ges.Ges_FechaRegistro','DESC');
        $query = $this->db->get();
        return $query->result();
    } 

    function cantidad_ventas($id_usuario){
        $this->db->select('count(pac.Pac_IdPago_Compra) as cantidad');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->where("(pac.Pac_Estado = 1 AND usu.Usu_IdUsuario_Ven = $id_usuario)", NULL, FALSE);
        $query = $this->db->get();
        return $query->row();
    }

    function meta($id_usuario){
        $mes = date("Y-m");
        $this->db->select('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d") as fecha, SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as total');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
        $this->db->where("(pac.Pac_Estado = 5 AND usu.Usu_IdUsuario_Ven = $id_usuario)", NULL, FALSE);
        $this->db->where('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m") =',$mes);
        $this->db->group_by('DATE_FORMAT(pac.Pac_FechaRegistro, "%Y-%m-%d")');
        $this->db->order_by('pac.Pac_FechaRegistro', 'DESC');
        $query = $this->db->get();
        return $query->result();

    } 

    function top_ventas(){
        $mes = date("Y-m");
        $this->db->select('(SELECT pe2.Per_Nombre FROM usuario as us2 INNER JOIN persona as pe2 on pe2.Per_IdPersona = us2.Per_IdPersona  WHERE us2.Usu_IdUsuario = usu.Usu_IdUsuario_Ven LIMIT 1) as vendedor, SUM(pcd.Pcd_Precio * pcd.Pcd_Cantidad) as total');
        $this->db->from('pago_compra as pac');
        $this->db->join('usuario as usu','usu.Usu_IdUsuario = pac.Usu_IdUsuario');
        $this->db->join('pago_compra_detalle as pcd','pcd.Pac_IdPago_Compra = pac.Pac_IdPago_Compra');
        $this->db->where('pac.Pac_Estado = 5');
        $this->db->like('pac.Pac_FechaRegistro',$mes);
        $this->db->group_by('vendedor');
        $this->db->order_by('total', 'DESC');
        $query = $this->db->get();
        return $query->result();

    } 

    function asignarCliente($Usu_IdUsuario,$id_vendedor){
        $this->db->set('Usu_IdUsuario_Ven', $id_vendedor);
        $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
        $this->db->update('usuario');

        return true;
    } 
       
    function cambiar_estado_usu($Usu_IdUsuario){
        $this->db->set('Usu_Activated', 2);
        $this->db->where('Usu_IdUsuario', $Usu_IdUsuario);
        $this->db->update('usuario');

        return true;
    } 

    function gestion_vendedor($id_vendedor){
        $hoy = date("Y-m-d");
        $this->db->select('(SELECT Per_Nombre FROM persona WHERE persona.Per_IdPersona = usu.Per_IdPersona) AS Per_Nombre, (SELECT Per_Telefono FROM persona WHERE persona.Per_IdPersona = usu.Per_IdPersona) AS Per_Telefono, ges.Ges_FechaProgramar, ges.Ges_TipoCliente, usu.Usu_IdUsuario,ges.Ges_FechaRegistro, ges.Ges_Detalle, ges.Ges_Accion, ges.Ges_Motivo');
        $this->db->from('usuario as usu');
        $this->db->join('gestion_cliente as ges','ges.Usu_IdUsuario = usu.Usu_IdUsuario');
        $this->db->where("(usu.Usu_Activated = 1 and usu.Usu_IdUsuario_Ven = $id_vendedor)", NULL, FALSE);
        $this->db->where('ges.Ges_FechaProgramar', $hoy);
        $this->db->group_by('usu.Usu_IdUsuario');
        $this->db->order_by('ges.Ges_FechaProgramar','DESC');
        $query = $this->db->get();
        return $query->result();
    } 
            
    function get_productos_sku()
    {
        $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado, pro.Pro_PrecioMaximo, pro.Pro_FechaModificacion,sku.SKU_Color, sku.SKU_IdSKU, sku.SKU_StockDisponible,pro.Pro_PrecioMinimo,');
        $this->db->from('producto as pro');
        $this->db->join('sku as sku','sku.producto_Pro_IdProducto = pro.Pro_IdProducto');
        $this->db->where('pro.Pro_PM',1);
        $this->db->where('sku.SKU_StockDisponible >',0);
        $this->db->order_by('pro.Pro_FechaModificacion','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_ventas_pm()
    {   
        $sql="SELECT pac.Pac_IdPago_Compra, usu.Usu_IdUsuario,(SELECT pe2.Per_Nombre FROM usuario as us2 INNER JOIN persona as pe2 on pe2.Per_IdPersona = us2.Per_IdPersona  WHERE us2.Usu_IdUsuario = usu.Usu_IdUsuario_Ven LIMIT 1) as vendedor,per.Per_Nombre, pac.Pac_Total, pac.Pac_Envio, pac.Pac_Banco, pac.Pac_FechaRegistro, pac.Pac_Estado,pac.Pac_CodPago,per.Per_Telefono 
        FROM pago_compra as pac 
        INNER JOIN usuario as usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario 
        INNER JOIN persona as per on per.Per_IdPersona = usu.Per_IdPersona";
        $query = $this->db->query($sql);   
        return $query->result();
    }

    function get_ventas_vendedor($id_vendedor)
    {   
        $sql="SELECT pac.Pac_IdPago_Compra, usu.Usu_IdUsuario,per.Per_Nombre, pac.Pac_Total, pac.Pac_Envio, pac.Pac_Banco, pac.Pac_FechaRegistro, pac.Pac_Estado,pac.Pac_CodPago,per.Per_Telefono FROM pago_compra as pac 
        INNER JOIN usuario as usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario 
        INNER JOIN persona as per on per.Per_IdPersona = usu.Per_IdPersona WHERE usu.Usu_IdUsuario_Ven = $id_vendedor";
        $query = $this->db->query($sql);   
        return $query->result();
    }

    function confirmar_vauche($id)
    {

        $this->db->set('Pvoc_EstadoComprobante', 1);
        $this->db->where('Pvoc_idPago_Voucher', $id);
        $this->db->update('pago_voucher');

        return $id;

    }

    function cancelar_vauche($id)
    {
        $this->db->where('Pvoc_idPago_Voucher', $id);
        $this->db->delete('pago_voucher');
        return true;  
    }


    function cliente_id($id)
    {
        $this->db->select('Usu_IdUsuario_Ven');
        $this->db->from('usuario');
        $this->db->where('Usu_IdUsuario', $id);
        $query = $this->db->get();
        return $query->row();
    }


}
?>