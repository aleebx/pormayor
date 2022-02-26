<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

    class Gestion_model extends CI_Model
    {

        function __construct()
        {
            parent::__construct();
        }        

        function get_compra_directa_q($Pac_IdPago_Compra)
        {
            $this->db->select('Pac_Banco, Pac_CodPago, Pac_Estado, Pac_Envio, pac.Pac_Observacion,Pac_FechaRegistro, Pac_IdPago_Compra, Pac_Total, usu.Usu_IdUsuario, per.Per_Nombre, per.Per_Dni,(SELECT us2.Usu_Nombre FROM usuario as us2 WHERE us2.Usu_IdUsuario = pac.Ven_IdVendedor LIMIT 1) as vendedor');
            $this->db->from('pago_compra as pac');
            $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = pac.Usu_IdUsuario', 'left');
            $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona', 'left');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);    
            $query = $this->db->get();
            return $query->row();
        } 
        function get_vauche_compra($Pac_IdPago_Compra)
        {
            $this->db->select('*');
            $this->db->from('pago_voucher');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);    
            $query = $this->db->get();

            return $query->result();
        }
        public function cambio_clave($id_usu,$clave1){
          $this->db->set('Usu_Clave', $clave1);
          $this->db->where('Usu_IdUsuario', $id_usu);
          $this->db->update('usuario');
          return true;
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
         function get_detalle_venta_q($Pac_IdPago_Compra)
        {
            $sql = "SELECT pcd.Pcd_IdPago_Compra_Detalle, pro.Pro_IdProducto, pro.Pro_Nombre, pcd.Pcd_Precio, pcd.Pcd_Cantidad,pcd.Pcd_Importe,pcd.Pcd_Cambio, pcd.Pcd_Documento, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, sku.Sku_Img,sku.SKU_Color, sku.SKU_IdSKU
                from pago_compra_detalle as pcd 
                INNER JOIN sku as sku ON sku.SKU_IdSKU = pcd.Pcd_IdSku
                INNER JOIN producto as pro ON pro.Pro_IdProducto = sku.producto_Pro_IdProducto
                WHERE pcd.Pac_IdPago_Compra = $Pac_IdPago_Compra";

            $query = $this->db->query($sql);

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
          function delete_detalle($Pcd_IdPago_Compra_Detalle,$SKU_IdSku,$Cantidad){

            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$SKU_IdSku);;
            $query = $this->db->get();
            $stock = $query->row();

            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible + $Cantidad);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $Cantidad);
            $this->db->where('SKU_IdSKU', $SKU_IdSku);
            $this->db->update('sku');

            $this->db->where('Pcd_IdPago_Compra_Detalle', $Pcd_IdPago_Compra_Detalle);
            $this->db->delete('pago_compra_detalle');
            
            return true;    

        }       

        function updatePedido($Pac_IdPago_Compra,$Usu_IdUsuario,$nombre,$dni,$telefono,$ruc,$direccion,$referencia,$agencia,$estado,$Pac_Envio,$observacion){

            $this->db->select('Per_IdPersona');
            $this->db->from('usuario');
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);;
            $query = $this->db->get();
            $usuario = $query->row();

            $this->db->set('Per_Nombre', $nombre);
            $this->db->set('Per_Dni', $dni);
            $this->db->set('Per_Telefono', $telefono);
            $this->db->where('Per_IdPersona', $usuario->Per_IdPersona );
            $this->db->update('persona');

            $this->db->set('Pac_Banco', $estado);
            $this->db->set('Pac_Envio', $Pac_Envio);
            $this->db->set('Pac_Observacion', $observacion);
            $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $this->db->update('pago_compra');

            $this->db->set('Pci_Direccion', $direccion);
            $this->db->set('Pci_Ruc', $ruc);
            $this->db->set('Pci_Lote', $agencia);
            $this->db->set('Pci_Referencia', $referencia);
            $this->db->set('Pci_Telefono', $telefono);
            $this->db->set('Pci_DtoInt', '');
            $this->db->set('Pci_Urbanizacion', '');
            $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra );
            $this->db->update('pago_compra_info');
            
            return 1;    

        }
         function confirmarVenta($Pac_IdPago_Compra,$estado){
            
            $hoy = date("Y-m-d H:i:s");
            $this->db->select('Pac_Estado');
            $this->db->from('pago_compra');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);;
            $query = $this->db->get();
            $pac = $query->row();
            if ($pac->Pac_Estado == 1 or $pac->Pac_Estado == 2) {
                $this->db->select('Pcd_IdSKU,Pcd_Cantidad');
                $this->db->from('pago_compra_detalle');
                $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);;
                $query = $this->db->get();
                $venta = $query->result();

                foreach ($venta as $vent => $ven){
                    $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
                    $this->db->from('sku');
                    $this->db->where('SKU_IdSKU',$ven->Pcd_IdSKU);;
                    $query = $this->db->get();
                    $stock = $query->row();

                    $this->db->set('SKU_StockReal', $stock->SKU_StockReal - $ven->Pcd_Cantidad);
                    $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $ven->Pcd_Cantidad);
                    $this->db->where('SKU_IdSKU', $ven->Pcd_IdSKU);
                    $this->db->update('sku');

                }
                $this->db->set('Pac_Estado', $estado);
                $this->db->set('Pac_FechaModificado', $hoy);
                $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                $this->db->update('pago_compra');
                return true;
            }else{
                return false;
            }
        }
         function pagartotal($Pac_IdPago_Compra)
        {
            $this->db->select_sum('Pcd_Importe');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $query = $this->db->get('pago_compra_detalle');
            return $query->row();
        }

         function addproductopedido($Pac_IdPago_Compra,$SKU_IdSku,$Cantidad,$Precio){

            for ($i=0; $i < count($SKU_IdSku); $i++) {
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$SKU_IdSku[$i]);;
            $query = $this->db->get();
            $stock = $query->row();


            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $Cantidad[$i]);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado + $Cantidad[$i]);
            $this->db->where('SKU_IdSKU', $SKU_IdSku[$i]);
            $this->db->update('sku');
            
            $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $this->db->set('Pcd_IdSKU', $SKU_IdSku[$i]);
            $this->db->set('Pcd_Precio', $Precio[$i]);
            $this->db->set('Pcd_Cantidad', $Cantidad[$i]);
            $this->db->set('Pcd_Importe', (float)$Precio[$i] * (int)$Cantidad[$i]);
            $this->db->insert('pago_compra_detalle');
            }
            return true;
        }

         function addproductopedidocambio($Pac_IdPago_Compra,$SKU_IdSku,$Cantidad,$Precio){

            for ($i=0; $i < count($SKU_IdSku); $i++) {
            $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
            $this->db->from('sku');
            $this->db->where('SKU_IdSKU',$SKU_IdSku[$i]);;
            $query = $this->db->get();
            $stock = $query->row();


            $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $Cantidad[$i]);
            $this->db->set('SKU_Reservado', $stock->SKU_Reservado + $Cantidad[$i]);
            $this->db->where('SKU_IdSKU', $SKU_IdSku[$i]);
            $this->db->update('sku');
            
            $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $this->db->set('Pcd_IdSKU', $SKU_IdSku[$i]);
            $this->db->set('Pcd_Precio', $Precio[$i]);
            $this->db->set('Pcd_Cantidad', $Cantidad[$i]);
            $this->db->set('Pcd_Importe', (float)$Precio[$i] * (int)$Cantidad[$i]);
            $this->db->set('Pcd_Cambio', 1);
            $this->db->insert('pago_compra_detalle');
            }
            return true;
        } 
        function anularVenta($Pac_IdPago_Compra,$estado){
            
            $hoy = date("Y-m-d H:i:s");
            $this->db->select('Pac_Estado');
            $this->db->from('pago_compra');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);;
            $query = $this->db->get();
            $pac = $query->row();
            if ($pac->Pac_Estado == 1 or $pac->Pac_Estado == 2) {
                $this->db->select('Pcd_IdSKU,Pcd_Cantidad');
                $this->db->from('pago_compra_detalle');
                $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);;
                $query = $this->db->get();
                $venta = $query->result();

                foreach ($venta as $vent => $ven){
                    $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
                    $this->db->from('sku');
                    $this->db->where('SKU_IdSKU',$ven->Pcd_IdSKU);;
                    $query = $this->db->get();
                    $stock = $query->row();

                    $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible + $ven->Pcd_Cantidad);
                    $this->db->set('SKU_Reservado', $stock->SKU_Reservado - $ven->Pcd_Cantidad);
                    $this->db->where('SKU_IdSKU', $ven->Pcd_IdSKU);
                    $this->db->update('sku');

                }
                $this->db->set('Pac_Estado', $estado);
                $this->db->set('Pac_FechaModificado', $hoy);
                $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                $this->db->update('pago_compra');
                return true;
            }else{
                return false;
            }
        }



     
    }

?>