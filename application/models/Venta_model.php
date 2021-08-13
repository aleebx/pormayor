<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Venta_model extends CI_Model
    {
        private $nombre_tabla = 'venta';

        function __construct()
        {
            parent::__construct();
        }

        function get_venta($Ven_IdVenta)
        {
            $this->db->select('ven.Ven_IdVenta, ven.Ven_Estado, ven.Ven_Total, ven.Ven_FechaRegistro, ven.Usu_IdUsuario, ven.Tie_IdTienda, ven.Ven_CodCompra');
            $this->db->from('venta as ven');
            $this->db->where('ven.Ven_IdVenta',$Ven_IdVenta);
            $query = $this->db->get();

            return $query->row();
        }
        
        function get_ventas($Usu_IdUsuario)
        {
            $this->db->select('Ven_IdVenta, Ven_Estado, Ven_FechaRegistro, tie.Tie_Nombre');
            $this->db->from('venta as ven');            
            $this->db->join('tienda as tie', 'ON ven.Tie_IdTienda = tie.Tie_IdTienda');  
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);    
            $query = $this->db->get();

            return $query->result();
        } 

        function infVouche($idVentas)
        {  
            $this->db->select('pvou.Pac_IdPago_Compra,pvou.Pvoc_NumComprobante,pvou.Pvoc_FechaComprobante,pvou.Pvoc_LogoPago');
            $this->db->from('pago_voucher as pvou');            
            $this->db->where('pvou.Pac_IdPago_Compra',$idVentas);    
            $query = $this->db->get();
            return $query->row();
        }   
        
        function get_ventas_vendedor()
        {
            $this->db->select('Ven_IdVenta, Ven_Estado, Ven_FechaRegistro, tie.Tie_Nombre, Ven_CodCompra');
            $this->db->from('venta as ven');            
            $this->db->join('tienda as tie', 'ON ven.Tie_IdTienda = tie.Tie_IdTienda');  
            $query = $this->db->get();

            return $query->result();
        }   


        function get_compra_directa($Usu_IdUsuario)
        {
            $this->db->select('Pac_Banco,Pac_CodPago,Pac_Estado,Pac_FechaRegistro,Pac_IdPago_Compra,Pac_Total,Pac_Envio,sum(Pac_Total+Pac_Envio) as total');
            $this->db->from('pago_compra');  
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario); 
            $this->db->order_by('Pac_IdPago_Compra','DESC');   
            $this->db->GROUP_by('Pac_IdPago_Compra');
            $query = $this->db->get();

            return $query->result();
        }   

        function get_compra_directa_vendedor()
        {
            $this->db->select('Pac_Banco, Pac_CodPago, Pac_Estado, Pac_FechaRegistro, Pac_IdPago_Compra, Pac_Total, Usu_IdUsuario');
            $this->db->from('pago_compra');  
            $query = $this->db->get();

            return $query->result();
        }   

        function guardar_voucher($id,$fecha,$comprobante,$tipoP,$monto)
        {   
            $this->db->set('Pac_IdPago_Compra',$id);
            $this->db->set('Pvoc_FechaComprobante',$fecha);
            $this->db->set('Pvoc_NumComprobante',$comprobante);
            $this->db->set('Pvoc_MedioPago',$tipoP);
            $this->db->set('Pvoc_Monto',$monto);
            if ($this->db->insert('pago_voucher')){
                $Pvoc_idPago_Voucher = $this->db->insert_id();
            };
            return $Pvoc_idPago_Voucher;
        }

        function addVaucheFoto($idVenta,$logo_vocher)
        {
            $this->db->set('Pvoc_LogoPago', $logo_vocher);
            $this->db->where('Pvoc_idPago_Voucher', $idVenta);
            $this->db->update('pago_voucher');    
            return $idVenta;
        }

        function get_compra_directa2($Pac_IdPago_Compra)
        {
           $this->db->select('pac.Pac_Banco,pac.Pac_CodPago,pac.Pac_Estado,pac.Pac_Envio,pac.Pac_FechaRegistro,pac.Pac_IdPago_Compra,pac.Pac_Total,pac.Usu_IdUsuario,pvoc.Pvoc_NumComprobante,pvoc.Pvoc_FechaComprobante,pvoc.Pvoc_idPago_Voucher,pvoc.Pvoc_EstadoComprobante,pvoc.Pvoc_LogoPago');
            $this->db->from('pago_compra as pac');
           $this->db->join('pago_voucher as pvoc','pac.Pac_IdPago_Compra = pvoc.Pac_IdPago_Compra','left'); 
            $this->db->where('pac.Pac_IdPago_Compra',$Pac_IdPago_Compra);    
            $query = $this->db->get();

            return $query->row();
        }

          function get_compra_info($Pac_IdPago_Compra)
        {
            $this->db->select('pci.Pci_Direccion, reg.name as region, pro.name as provincia, dis.name as distrito, pci.Pci_Referencia, pci.Pci_Lote, pci.Pci_DtoInt, pci.Pci_Urbanizacion, pci.Pci_Ruc, pci.Pci_RazonSocial, pci.Pci_Telefono, pci.Pci_nroTarjeta, pci.Pci_codAccion,pci.iddistrito');
            $this->db->from('pago_compra_info as pci');
            $this->db->join('regions as reg','reg.id = pci.idregion');
            $this->db->join('provinces as pro','pro.id = pci.idprovincia');
            $this->db->join('districts as dis','dis.id = pci.iddistrito');
            $this->db->where('pci.Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $query = $this->db->get();

            return $query->row();
        }
        

        function get_calificacion($Ven_IdVenta)
        {
            $this->db->select('*');
            $this->db->from('califica_compra');            
            $this->db->where('Ven_IdVenta',$Ven_IdVenta);         
            $query = $this->db->get();

            return $query->row();
        }
        
        function get_reporte1()
        {
            $this->db->select('*');
            $this->db->from('reporte1');                    
            $query = $this->db->get();

            return $query->result();
        }
        
        function get_reporte2()
        {
            $this->db->select('*');
            $this->db->from('reporte2');                    
            $query = $this->db->get();

            return $query->result();
        }
        
        function get_reporte3()
        {
            $this->db->select('*');
            $this->db->from('reporte3');        
            $query = $this->db->get();

            return $query->result();
        }
        
        function get_reporte4()
        {
            $this->db->select('*');
            $this->db->from('reporte4');        
            $query = $this->db->get();

            return $query->result();
        }
        
        function get_reportes()
        {
            $sql = "SELECT r1.Id_R1, r1.R1,r2.Id_R2, r2.R2,r3.Id_R3, r3.R3,r4.Id_R4, r4.R4  FROM reporte1 as r1 
                inner join reporte2 as r2 ON r2.Id_R1 = r1.Id_R1 
                inner join reporte3 as r3 ON r3.Id_R2 = r2.Id_R2 
                left join reporte4 as r4 ON r4.Id_R3 = r3.Id_R3
                order by r1.Id_R1";

            $query = $this->db->query($sql);

            return $query->result();
        }
        
        function get_reportado($Ven_IdVenta)
        {
            $this->db->select('*');
            $this->db->from('reporte_compra');
            $this->db->where('Ven_IdVenta',$Ven_IdVenta);
            $query = $this->db->get();

            return $query->row();
        } 
//VENTAS REALIZADAS POR COTIZACIONES CON BCP
        function get_ventas_bcp()
        {
            $this->db->select('ven.Ven_CodCompra, ven.Ven_Total, per.Per_Nombre, tie.Tie_Nombre, ven.Ven_FechaRegistro, ven.Ven_IdVenta, usu.Usu_IdUsuario');
            $this->db->from('venta as ven');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = ven.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->join('tienda as tie','tie ON tie.Tie_IdTienda = ven.Tie_IdTienda');
            $this->db->where('ven.Ven_CodCompra !=',0);
            $this->db->where('ven.Banco','BCP');
            $query = $this->db->get();

            return $query->result();
        }


//VENTAS REALIZADAS POR COTIZACION CON BCP PARA CREP.txt
        function get_venta_bcp_crep()
        {
            $this->db->select('ven.Ven_CodCompra, ven.Ven_Total, per.Per_Nombre, ven.Ven_FechaRegistro, ven.Ven_IdVenta, usu.Usu_IdUsuario');
            $this->db->from('venta as ven');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = ven.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('ven.Ven_CodCompra !=',0);
            $this->db->where('ven.Banco','BCP');
            $query = $this->db->get();

            return $query->result();
        }


//PAGO REALIZADAS POR COMPRA DIRECTA CON BCP PARA CREP.txt
        function get_pagos_bcp_crep()
        {
            $this->db->select('pac.Pac_CodPago, pac.Pac_Banco, pac.Pac_Total, pac.Pac_FechaRegistro, pac.Pac_FechaVencimiento, per.Per_Nombre, usu.Usu_Correo');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('pac.Pac_Banco','BCP');
            
            $query = $this->db->get();

            return $query->result();
        }

//PAGO REALIZADAS POR COMPRA DIRECTA CON BCP PARA VISTA
        function get_pagos_bcp()
        {
            $this->db->select('pac.Pac_CodPago, pac.Pac_Banco, pac.Pac_Total, pat.Pat_Monto, pac.Pac_FechaRegistro, pac.Pac_FechaVencimiento, per.Per_Nombre, usu.Usu_Correo, tie.Tie_Nombre');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->join('pago_tienda as pat','pat ON pat.Pac_IdPago_Compra = pac.pac_IdPago_Compra');
            $this->db->join('tienda as tie','tie ON tie.Tie_IdTienda = pat.Tie_IdTienda');
            $this->db->where('pac.Pac_Banco','BCP');
            
            $query = $this->db->get();

            return $query->result();
        }

//PAGO REALIZADAS POR COMPRA DIRECTA CON CAJA HUANCAYO PARA VISTA
        function get_pagos_ch()
        {
            $this->db->select('pac.Pac_CodPago, pac.Pac_Banco, pac.Pac_Total, pat.Pat_Monto, pac.Pac_FechaRegistro, pac.Pac_FechaVencimiento, per.Per_Nombre, per.Per_DNI, usu.Usu_Correo, tie.Tie_Nombre');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->join('pago_tienda as pat','pat ON pat.Pac_IdPago_Compra = pac.pac_IdPago_Compra');
            $this->db->join('tienda as tie','tie ON tie.Tie_IdTienda = pat.Tie_IdTienda');
            $this->db->where('pac.Pac_Banco','Caja Huancayo');
            
            $query = $this->db->get();

            return $query->result();
        }

//VENTAS REALIZADAS POR COTIZACION CON CAJA HUANCAYO PARA VISTA
        function get_ventas_ch()
        {
            $this->db->select('ven.Ven_CodCompra, ven.Ven_Total, per.Per_Nombre, ven.Ven_FechaRegistro, ven.Ven_IdVenta, usu.Usu_IdUsuario,tie.Tie_Nombre');
            $this->db->from('venta as ven');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = ven.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->join('tienda as tie','tie ON tie.Tie_IdTienda = ven.Tie_IdTienda');
            $this->db->where('ven.Ven_CodCompra !=',0);
            $this->db->where('ven.Banco','Caja Huancayo');
            $query = $this->db->get();

            return $query->result();
        }


//PAGO REALIZADAS POR COMPRA DIRECTA CON CAJA HUANCAYO PARA EXCEL
        function get_pagos_ch_excel()
        {
            $this->db->select('pac.Pac_CodPago, pac.Pac_Banco, per.Per_DNI, pac.Pac_Total, pac.Pac_FechaRegistro, pac.Pac_FechaVencimiento, per.Per_Nombre, usu.Usu_Correo');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('pac.Pac_Banco','Caja Huancayo');
            
            $query = $this->db->get();

            return $query->result();
        }

//VENTA REALIZADAS POR COMPRA DIRECTA CON CAJA HUANCAYO PARA EXCEL
        function get_ventas_ch_excel()
        {
            $this->db->select('ven.Ven_CodCompra, ven.Ven_Total, per.Per_DNI, per.Per_Nombre, ven.Ven_FechaRegistro, ven.Ven_IdVenta, usu.Usu_IdUsuario');
            $this->db->from('venta as ven');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = ven.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('ven.Ven_CodCompra !=',0);
            $this->db->where('ven.Banco','Caja Huancayo');
            $query = $this->db->get();

            return $query->result();
        }

         function get_planes_tienda()
        {
            $this->db->select('pap.Codigo, pap.Pap_Monto, pap.Pap_FechaRegistro, tie.Tie_Nombre, per.Per_Nombre');
            $this->db->from('pago_plan as pap');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = pap.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->join('tienda as tie','tie ON tie.Tie_IdTienda = pap.Tie_IdTienda');            
            $query = $this->db->get();

            return $query->result();
        }        

        function get_planes_tienda_crep()
        {
            $this->db->select('pap.Codigo, pap.Pap_Monto, pap.Pap_FechaRegistro, per.Per_Nombre, usu.Usu_Correo');
            $this->db->from('pago_plan as pap');
            $this->db->join('usuario as usu','usu ON usu.Usu_IdUsuario = pap.Usu_IdUsuario');
            $this->db->join('persona as per','per ON per.Per_IdPersona = usu.Per_IdPersona');          
            $query = $this->db->get();

            return $query->result();
        }

        function get_venta_info($Ven_IdVenta)
        {
            $this->db->select('vef.Vef_DirEnvio, vef.Vef_Banco, vef.Vef_RUC, vef.Vef_RazonSocial');
            $this->db->from('venta_info as vef');
            $this->db->where('vef.Vef_Ven_IdVenta',$Ven_IdVenta);
            $query = $this->db->get();

            return $query->row();
        }
        
        function insert_calificacion($Cal_Compra,$Cal_Tienda,$Usu_IdUsuario,$Tie_IdTienda,$Ven_IdVenta,$Cal_Comentario)
        {
            $this->db->set('Cal_Compra', $Cal_Compra);
            $this->db->set('Cal_Tienda', $Cal_Tienda);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->set('Tie_IdTienda', $Tie_IdTienda);
            $this->db->set('Ven_IdVenta', $Ven_IdVenta);
            $this->db->set('Cal_Comentario', $Cal_Comentario);

            $this->db->insert('califica_compra');

            $this->db->set('Ven_Estado', 3);
            $this->db->where('Ven_IdVenta', $Ven_IdVenta);
            $this->db->update('venta');

            return $Ven_IdVenta;

        } 

        function insert_reporte($r1,$r2,$r3,$r4,$Tie_IdTienda,$Ven_IdVenta,$comentario,$Usu_IdUsuario)
        {
            $this->db->set('r1', $r1);
            $this->db->set('r2', $r2);
            $this->db->set('r3', $r3);
            $this->db->set('r4', $r4);
            $this->db->set('Tie_IdTienda', $Tie_IdTienda);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->set('Ven_IdVenta', $Ven_IdVenta);
            $this->db->set('Rep_Comentario', $comentario);

            $this->db->insert('reporte_compra');

            return $Ven_IdVenta;

        }

        function registrar_venta($array_compra, $Ven_Total, $Cot_IdCotizacion, $Usu_IdUsuario, $Vef_DirEnvio, $Vef_Banco,$Vef_RUC, $Vef_RazonSocial, $Tie_IdTienda, $Banco)
        {
            $this->db->trans_start();

            //registro venta
            $this->db->set('Cot_IdCotizacion', $Cot_IdCotizacion);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->set('Ven_Total', $Ven_Total);
            $this->db->set('Tie_IdTienda', $Tie_IdTienda);
            $this->db->set('Banco', $Banco);

            if ($this->db->insert($this->nombre_tabla)){
                $Ven_IdVenta = $this->db->insert_id();
            };

            $CodCompra = "1".sprintf('%04d', $Ven_IdVenta)."T";

            $this->db->set('Ven_CodCompra', $CodCompra);
            $this->db->where('Ven_IdVenta', $Ven_IdVenta);
            $this->db->update('venta');

            //Info tienda
            $this->db->set('Vef_Ven_IdVenta', $Ven_IdVenta);
            $this->db->set('Vef_Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->set('Vef_DirEnvio', $Vef_DirEnvio);
            $this->db->set('Vef_Banco', $Vef_Banco);
            $this->db->set('Vef_RUC', $Vef_RUC);
            $this->db->set('Vef_RazonSocial', $Vef_RazonSocial);
            $this->db->insert('venta_info');

            //registro detalle venta
            foreach ($array_compra as $item) 
            {
                $this->db->set('Ven_IdVenta', $Ven_IdVenta);
                $this->db->set('SKU_IdSKU', $item[0]);
                $this->db->set('Ved_Precio', $item[1]);
                $this->db->set('Ved_Cantidad', $item[2]);

                $this->db->insert('venta_detalle');
            }


            //actualizar estado cotizacion
            $this->db->set('Cot_Estado', 2);
            $this->db->where('Cot_IdCotizacion', $Cot_IdCotizacion);
            $this->db->update('cotizacion');

            $this->db->trans_complete();

            if ($this->db->trans_status()) 
            {
               return $Ven_IdVenta;
            }

            return null;
        }

        function registrar_venta_acuerdo($array_compra, $Ven_Total, $Cot_IdCotizacion, $Usu_IdUsuario, $Tie_IdTienda)
        {
            $this->db->trans_start();

            //registro venta
            $this->db->set('Cot_IdCotizacion', $Cot_IdCotizacion);
            $this->db->set('Tie_IdTienda', $Tie_IdTienda);
            $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
            $this->db->set('Ven_Total', $Ven_Total);

            if ($this->db->insert($this->nombre_tabla))
            {
                $Ven_IdVenta = $this->db->insert_id();
            };
                $CodCompra = 0;
                $this->db->set('Ven_CodCompra', $CodCompra);
                $this->db->where('Ven_IdVenta', $Ven_IdVenta);
                $this->db->update('venta');

            //registro detalle venta
            foreach ($array_compra as $item) 
            {
                $this->db->set('Ven_IdVenta', $Ven_IdVenta);
                $this->db->set('SKU_IdSKU', $item[0]);
                $this->db->set('Ved_Precio', $item[1]);
                $this->db->set('Ved_Cantidad', $item[2]);

                $this->db->insert('venta_detalle');
            }


            //actualizar estado cotizacion
            $this->db->set('Cot_Estado', 2);
            $this->db->where('Cot_IdCotizacion', $Cot_IdCotizacion);
            $this->db->update('cotizacion');

            $this->db->trans_complete();

            if ($this->db->trans_status()) 
            {
               return $Ven_IdVenta;
            }

            return null;
        }

        function listaVariaciones(){

            $this->db->select('cat.Cat_IdCategoria, cat.Cat_Nombre, suc.Suc_IdSubCategoria, suc.Suc_Nombre, des.Des_IdDetalle_SubCategoria, des.Des_Nombre, vas.Vas_IdVarSub, vas.Des_IdDetalle_SubCategoria as var1, vas.Vao_IdVaricion_Opcion as var2, vao.Vao_Nombre');
            $this->db->from('categoriap as cat');            
            $this->db->join('subcategoriap as suc', 'ON suc.categoria_Cat_IdCategoria = cat.Cat_IdCategoria');  
            $this->db->join('detalle_subcategoriap as des', 'ON des.subcategoria_Suc_IdSubCategoria = suc.Suc_IdSubCategoria');  
            $this->db->join('variacion_subcategoriap as vas', 'ON vas.Des_IdDetalle_SubCategoria = des.Des_IdDetalle_SubCategoria');  
            $this->db->join('variacion_opcion as vao', 'ON vas.Vao_IdVaricion_Opcion = vao.Vao_IdVaricion_Opcion');
            $this->db->order_by('cat.Cat_Nombre', 'ASC');
            $query = $this->db->get();

            return $query->result();

        }

        function listaProductos(){

            $this->db->select('*');
            $this->db->from('producto');
            $query = $this->db->get();

            return $query->result();

        }

        function detalle_producto($Pro_IdProducto){

            $this->db->select('sku.SKU_IdSku, pro.Pro_Nombre, cat.Cat_Nombre, suc.Suc_Nombre, des.Des_Nombre, sku.SKU_Nombre, sku.SKU_Img, sku.Producto_Pro_IdProducto, sku.SKU_StockDisponible, sku.SKU_Precio, var.Var_Nombre, vao.Vao_Nombre, sku.SKU_Color');
            $this->db->from('sku as sku');
            $this->db->join('producto AS pro', 'pro ON pro.Pro_IdProducto = sku.producto_Pro_IdProducto');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion'); 
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->join('producto_categoria AS prc', 'prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap AS cat', 'cat ON cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->join('subcategoriap AS suc', 'suc ON suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria');
            $this->db->join('detalle_subcategoriap AS des', 'des ON des.Des_IdDetalle_SubCategoria = prc.Des_IdDetalle_SubCategoria');
            $this->db->where('sku.producto_Pro_IdProducto', $Pro_IdProducto);


            $query = $this->db->get();
            return $query->result();
        }

        function detalle_producto2($Pro_IdProducto){

            $this->db->select('sku.SKU_IdSku, pro.Pro_Nombre, cat.Cat_Nombre, suc.Suc_Nombre, des.Des_Nombre, sku.SKU_Nombre, sku.SKU_Img, sku.Producto_Pro_IdProducto, sku.SKU_Cantidad, sku.SKU_Precio, var.Var_Nombre, vao.Vao_Nombre, sku.SKU_Color');
            $this->db->from('sku as sku');
            $this->db->join('producto AS pro', 'pro ON pro.Pro_IdProducto = sku.producto_Pro_IdProducto');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion'); 
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->join('producto_categoria AS prc', 'prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap AS cat', 'cat ON cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->join('subcategoriap AS suc', 'suc ON suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria');
            $this->db->join('detalle_subcategoriap AS des', 'des ON des.Des_IdDetalle_SubCategoria = prc.Des_IdDetalle_SubCategoria');
            $this->db->where('sku.producto_Pro_IdProducto', $Pro_IdProducto);


            $query = $this->db->get();
            return $query->result();
        }

        function categoriaNueva(){

            $this->db->select('*');
            $this->db->from('categoriap');
            $query = $this->db->get();

            return $query->result();

        }

        function actualizar_categorias($Pro_IdProducto,$Cat_IdCategoria,$Suc_IdSuCategoria,$Des_IdDetalle_SubCategoria){

            $this->db->set('Cat_IdCategoria',$Cat_IdCategoria);
            $this->db->set('Suc_IdSubCategoria',$Suc_IdSuCategoria);
            $this->db->set('Des_IdDetalle_SubCategoria',$Des_IdDetalle_SubCategoria);
            $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);
            $this->db->update('producto_categoria');
        }

        function get_subc($categoria_id){

            $this->db->select('*');
            $this->db->from('subcategoriap');
            $this->db->where('categoria_Cat_IdCategoria',$categoria_id);
            $query = $this->db->get();

            return $query->result();

        }

        function get_detc($Suc_IdSubCategoria){

            $this->db->select('*');
            $this->db->from('detalle_subcategoriap');
            $this->db->where('subcategoria_Suc_IdSubCategoria',$Suc_IdSubCategoria);
            $query = $this->db->get();

            return $query->result();

        }


        function get_var_cat($Des_IdDetalle_SubCategoria)
        { 
            $sql = "SELECT vao.Vao_IdVaricion_Opcion, vao.Vao_Nombre, vao.variacion_Var_IdVariacion 
            FROM variacion_subcategoriap as vas 
            INNER JOIN variacion_opcion as vao ON vao.Vao_IdVaricion_Opcion = vas.Vao_IdVaricion_Opcion 
            INNER JOIN detalle_subcategoriap as des ON des.Des_IdDetalle_SubCategoria = vas.Des_IdDetalle_SubCategoria
            INNER JOIN variacion as var ON var.Var_IdVariacion = vao.variacion_Var_IdVariacion 
            WHERE vas.Des_IdDetalle_SubCategoria = $Des_IdDetalle_SubCategoria";    
            $query = $this->db->query($sql); 
            return $query->result();
        }

        function get_variacion_sub($Des_IdDetalle_SubCategoria)
        {
            $sql = "SELECT var.Var_IdVariacion, var.Var_Nombre FROM variacion_subcategoriap AS vas 
            INNER JOIN variacion_opcion AS vao ON vao.Vao_IdVaricion_Opcion = vas.Vao_IdVaricion_Opcion 
            INNER JOIN detalle_subcategoriap AS des ON des.Des_IdDetalle_SubCategoria = vas.Des_IdDetalle_SubCategoria
            INNER JOIN variacion AS var ON var.Var_IdVariacion = vao.variacion_Var_IdVariacion
            WHERE vas.Des_IdDetalle_SubCategoria = $Des_IdDetalle_SubCategoria group by var.Var_IdVariacion";
            $query = $this->db->query($sql);   
            return $query->result();
        }

        function get_ventas_total($tipo_consulta)
        {   
            $whr=' group by pac.Pac_IdPago_Compra';
            if($tipo_consulta > 0) {
                $whr='group by pce.Pce_IdTienda,pac.Pac_IdPago_Compra';
            }
            $sql="SELECT pac.Pac_IdPago_Compra, pce.PCE_NOS, tie.Tie_Nombre,usu.Usu_IdUsuario,per.Per_Nombre,pers.Per_Nombre as nombr, pac.Pac_Total, pac.Pac_Envio, pac.Pac_Banco, pac.Pac_FechaRegistro, pac.Pac_Estado,pvoc.Pvoc_EstadoComprobante FROM pago_compra as pac INNER JOIN pago_compra_envio as pce ON pce.Pac_IdPago_Compra = pac.Pac_IdPago_Compra INNER JOIN tienda as tie ON tie.Tie_IdTienda = pce.Pce_IdTienda LEFT JOIN usuario as usu ON usu.Usu_IdUsuario = pac.Usu_IdUsuario left JOIN persona as per ON (per.Per_IdPersona = pac.Usu_IdPersona) LEFT JOIN persona as pers on pers.Per_IdPersona=usu.Per_IdPersona LEFT JOIN pago_voucher pvoc ON(pvoc.Pac_IdPago_Compra=pac.Pac_IdPago_Compra) $whr";
            $query = $this->db->query($sql);   
            return $query->result();
        }

        function edit_estado_venta($Pac_IdPago_Compra,$Pac_Estado){
            $this->db->set('Pac_Estado',$Pac_Estado);
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->update('pago_compra');
        }

        function edit_estado_voucher($Pac_IdPago_Compra,$Pac_Estado){
            $this->db->set('Pvoc_EstadoComprobante',$Pac_Estado);
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->update('pago_voucher');
        }

        function borrarVenta($Pac_IdPago_Compra){
            $tables = array('pago_compra', 'pago_compra_detalle', 'pago_compra_envio','pago_compra_info');
            $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $this->db->delete($tables);
        }

        function get_compra_directa_q($Pac_IdPago_Compra)
        {
            $this->db->select('Pac_Banco, Pac_CodPago, Pac_Estado, Pac_FechaRegistro, Pac_IdPago_Compra, Pac_Total, per.Per_Nombre, per.Per_Dni,per.Per_Correo,pers.Per_Nombre as nombr, pers.Per_Dni as dni,pers.Per_Correo as correo,pac.Pac_IdPago_Compra');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = pac.Usu_IdUsuario','left');
            $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona','left');
            $this->db->join('persona as pers','ON pers.Per_IdPersona = pac.Usu_IdPersona','left');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);    
            $query = $this->db->get();

            return $query->row();
        }    

        function get_detalle_venta_q($Pac_IdPago_Compra)
        {
            $sql = "SELECT Pro_Nombre, Var_Nombre, Vao_Nombre, Pcd_Precio, Pcd_Cantidad,Pcd_Importe,Pcd_Documento, pce.Pce_CostoEnvio,pce.Pce_NOS, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, Sku_Img,sku.SKU_Color 
                from pago_compra_detalle as pcd 
                INNER JOIN sku as sku ON sku.SKU_IdSKU = pcd.Pcd_IdSku
                INNER JOIN producto as pro ON pro.Pro_IdProducto = sku.producto_Pro_IdProducto
                INNER JOIN pago_tienda as pat ON pat.Pac_IdPago_Compra = pcd.Pac_IdPago_Compra
                INNER JOIN producto_tienda as pt on pt.Pro_IdProducto=pro.Pro_IdProducto
                LEFT JOIN pago_compra_envio as pce ON(pce.Pac_IdPago_Compra = pat.Pac_IdPago_Compra and pce.Pce_IdTienda = pat.Tie_IdTienda and pce.Pce_IdProducto = pro.Pro_IdProducto)
                INNER JOIN sku_pvo as skp ON skp.sku_SKU_IdSKU = pcd.Pcd_IdSku
                INNER JOIN producto_variacion as prv ON prv.Prv_IdProductoVariacion = skp.producto_variacion_Prv_IdProductoVariacion
                INNER JOIN producto_variacion_opcion as pvo ON pvo.PVO_IdPVO = skp.producto_variacion_opcion_PVO_IdPVO
                INNER JOIN variacion as var ON var.Var_IdVariacion = prv.Prv_IdVariacion
                INNER JOIN variacion_opcion as vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao
                WHERE pat.Pac_IdPago_Compra = $Pac_IdPago_Compra
                GROUP by sku.SKU_Color";

            $query = $this->db->query($sql);

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

    }
?>