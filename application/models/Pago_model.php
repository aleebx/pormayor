<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Pago_model extends CI_Model
    {
        private $nombre_tabla = 'pago';

        function __construct()
        {
            parent::__construct();
        }

        function get_pagos($condicion="")
        {
            $sql = "SELECT pag.*, tie.Tie_Nombre FROM $this->nombre_tabla pag
                    INNER JOIN tienda tie ON tie.Tie_IdTienda = pag.Tie_IdTienda
                    $condicion";

            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_pagos_pendientes($fecha_anticipacion = 5)
        {
            $fecha_anticipacion = $fecha_anticipacion + 1;

            $sql = "SELECT tie.Tie_Nombre, tie.Pla_IdPlan, tie.Tie_Cuota, tie.Tie_CicloFacturacion, IF(tie.Tie_CicloFacturacion IS NULL, DATE_ADD(tie.`Tie_FechaRegistro`, INTERVAL tie.`Tie_Cuota` MONTH ),
                    DATE_ADD(tie.`Tie_CicloFacturacion`, INTERVAL tie.`Tie_Cuota` + 1 MONTH )) AS Fecha_Pago, (TIMESTAMPDIFF(DAY,  CURDATE(), IF(tie.Tie_CicloFacturacion IS NULL, DATE_ADD(tie.`Tie_FechaRegistro`, INTERVAL tie.`Tie_Cuota` MONTH ),
                    DATE_ADD(tie.`Tie_CicloFacturacion`, INTERVAL tie.`Tie_Cuota` + 1 MONTH )))) AS Dias_Restantes, (SELECT per.Per_Nombre FROM usuario usu INNER JOIN persona per ON per.Per_IdPersona = usu.Per_IdPersona WHERE usu.Rol_IdRol = 2 AND usu.Tie_IdTienda = tie.Tie_IdTienda LIMIT 1) as Duenio
                    FROM tienda tie
                    HAVING Dias_Restantes < $fecha_anticipacion";

            $query = $this->db->query($sql);

            return $query->result();
        }

        public function registrar_pago($Tie_IdTienda, $Usu_IdUsuario, $Pag_Descripcion, $Pag_Correo, $Pag_Monto, $Pag_Cuota)
        {
            try
            {
                $this->db->set('Tie_IdTienda', $Tie_IdTienda);
                $this->db->set('Usu_IdUsuario', $Usu_IdUsuario);
                $this->db->set('Pag_Descripcion', $Pag_Descripcion);
                $this->db->set('Pag_Correo', $Pag_Correo);
                $this->db->set('Pag_Monto', $Pag_Monto);
                $this->db->set('Pag_Cuota', $Pag_Cuota);
                
                $this->db->insert($this->nombre_tabla);

                return true;
            }
            catch (Exception $e) 
            {
                return false;
            }
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
        function registrarCompra($array_compra,$arryCompraDetalle,$Ven_Total,$Ven_Envio,$id_usuario,$banco,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$razonSocial,$tienda_usuario, $array_id_tienda, $array_price_tienda_total, $tlf){
            
            $this->db->trans_start();

            $Date = date("Y-m-d H:i:s"); 

            $Pac_FechaVencimiento = date('Y-m-d H:i:s', strtotime($Date. ' + 3 days'));
            //registro compra
            $this->db->set('Usu_IdUsuario', $id_usuario);
            $this->db->set('Pac_Total', $Ven_Total);
            $this->db->set('Pac_Envio', $Ven_Envio);
            $this->db->set('Pac_Banco', $banco);
            $this->db->set('Pac_FechaVencimiento', $Pac_FechaVencimiento);
            $this->db->set('Pac_Estado', 1);

            if ($this->db->insert('pago_compra'))
            {
                $Pac_IdPago_Compra = $this->db->insert_id();
            };

            $CodPago = "1".sprintf('%04d', $Pac_IdPago_Compra)."P";

            $this->db->set('Pac_CodPago', $CodPago);
            $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $this->db->update('pago_compra');

            //Info compra
            $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
            $this->db->set('Pci_Direccion', $direccion);
            $this->db->set('idregion', $region);
            $this->db->set('idprovincia', $provincia);
            $this->db->set('iddistrito', $distrito);
            $this->db->set('Pci_Referencia', $referencia);
            $this->db->set('Pci_Lote', $lote);
            $this->db->set('Pci_DtoInt', $dpint);
            $this->db->set('Pci_Urbanizacion', $urbanizacion);
            $this->db->set('Pci_Ruc', $ruc);
            $this->db->set('Pci_RazonSocial', $razonSocial);
            $this->db->set('Pci_Telefono', $tlf);
            $this->db->insert('pago_compra_info');

             // registro Detalle de la Compra
            if(!empty($arryCompraDetalle)) {
                foreach ($arryCompraDetalle as $Det_Compra) 
                {   
                    $codigoEnvio='PMT'.$Det_Compra['id_tienda'].''.$Pac_IdPago_Compra;
                    $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                    $this->db->set('Pce_IdSKU', $Det_Compra['id_sku']);
                    $this->db->set('Pce_IdTienda', $Det_Compra['id_tienda']);
                    $this->db->set('Pce_IdProducto', $Det_Compra['id_producto']);
                    $this->db->set('Pce_CostoEnvio', $Det_Compra['costoRealDetallado']);
                    $this->db->set('Pce_CodigoEnvio', $codigoEnvio);
                    $this->db->set('Pce_CodUbigeo', $distrito);
                    $this->db->set('Pce_CantidadProd',$Det_Compra['cantidadProducto']);
                    $this->db->set('Pce_costoPorProducto',$Det_Compra['costoPorProductos']);
                    $this->db->insert('pago_compra_envio');
                }
            }   
            
            //registro detalle compra
            foreach ($array_compra as $car)
            {   
                $tienda = $this->get_id_tienda_x_sku($car['id']);

                if($tienda_usuario)
                {
                    if($tienda_usuario != $tienda->Tie_IdTienda)
                    {
                        $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                        $this->db->set('Pcd_IdSKU', $car['id']);
                        $precio = $car['price'] / $car['qty'];
                        $this->db->set('Pcd_Precio', $precio);
                        $this->db->set('Pcd_Cantidad', $car['qty']);
                        $this->db->set('Pcd_Importe', $car['price']);
                        $this->db->set('Pcd_Documento', $car['tipodoc']);
                        $this->db->insert('pago_compra_detalle');
                    }
                }
                else
                {
                   $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                    $this->db->set('Pcd_IdSKU', $car['id']);
                    $precio = $car['price'] / $car['qty'];
                    $this->db->set('Pcd_Precio', $precio);
                    $this->db->set('Pcd_Cantidad', $car['qty']);
                    $this->db->set('Pcd_Importe', $car['price']);
                    $this->db->set('Pcd_Documento', $car['tipodoc']);
                    $this->db->insert('pago_compra_detalle');
                }
                    
            }


            foreach ($array_id_tienda as $Tie_IdTienda) 
            {
                if($tienda_usuario)
                {
                    if($tienda_usuario != $Tie_IdTienda)
                    {
                    $this->db->set('Tie_IdTienda', $Tie_IdTienda);
                    $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                    $this->db->set('Pat_Monto', $array_price_tienda_total[$Tie_IdTienda]);
                    $this->db->insert('pago_tienda');
                    }
                }
                else
                {
                    $this->db->set('Tie_IdTienda', $Tie_IdTienda);
                    $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
                    $this->db->set('Pat_Monto', $array_price_tienda_total[$Tie_IdTienda]);
                    $this->db->insert('pago_tienda');
                }
            }

            $this->db->trans_complete();

            if ($this->db->trans_status()) 
            {
               return $Pac_IdPago_Compra;
            }else{
                return null;                
            }
        }

        // function registrarCompra($array_compra,$Ven_Total,$id_usuario,$banco,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$razonSocial,$tienda_usuario, $array_id_tienda, $array_price_tienda_total, $tlf, $Pci_nroTarjeta,$Pci_codAccion){
            
        //     $this->db->trans_start();

        //     $Date = date("Y-m-d H:i:s"); 

        //     $Pac_FechaVencimiento = date('Y-m-d H:i:s');
        //     //registro compra
        //     $this->db->set('Usu_IdUsuario', $id_usuario);
        //     $this->db->set('Pac_Total', $Ven_Total);
        //     $this->db->set('Pac_Banco', $banco);
        //     $this->db->set('Pac_FechaVencimiento', $Pac_FechaVencimiento);
        //     $this->db->set('Pac_Estado', 2);
        //     $this->db->set('Pac_Envio', $Pac_Envio);

        //     if ($this->db->insert('pago_compra'))
        //     {
        //         $Pac_IdPago_Compra = $this->db->insert_id();
        //     };

        //     $CodPago = "1".sprintf('%04d', $Pac_IdPago_Compra)."V";

        //     $this->db->set('Pac_CodPago', $CodPago);
        //     $this->db->where('Pac_IdPago_Compra', $Pac_IdPago_Compra);
        //     $this->db->update('pago_compra');

        //     //Info compra
        //     $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
        //     $this->db->set('Pci_Direccion', $direccion);
        //     $this->db->set('idregion', $region);
        //     $this->db->set('idprovincia', $provincia);
        //     $this->db->set('iddistrito', $distrito);
        //     $this->db->set('Pci_Referencia', $referencia);
        //     $this->db->set('Pci_Lote', $lote);
        //     $this->db->set('Pci_DtoInt', $dpint);
        //     $this->db->set('Pci_Urbanizacion', $urbanizacion);
        //     $this->db->set('Pci_Ruc', $ruc);
        //     $this->db->set('Pci_RazonSocial', $razonSocial);
        //     $this->db->set('Pci_Telefono', $tlf);
        //     $this->db->set('Pci_nroTarjeta', $Pci_nroTarjeta);
        //     $this->db->set('Pci_codAccion', $Pci_codAccion);
        //     $this->db->insert('pago_compra_info');

        //     //registro detalle compra
        //     foreach ($array_compra as $car)
        //     {   
        //         $tienda = $this->get_id_tienda_x_sku($car['id']);

        //         if($tienda_usuario)
        //         {
        //             if($tienda_usuario != $tienda->Tie_IdTienda)
        //             {
        //                 $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
        //                 $this->db->set('Pcd_IdSKU', $car['id']);
        //                 $precio = $car['price'] / $car['qty'];
        //                 $this->db->set('Pcd_Precio', $precio);
        //                 $this->db->set('Pcd_Cantidad', $car['qty']);
        //                 $this->db->set('Pcd_Importe', $car['price']);
        //                 $this->db->set('Pcd_Documento', $car['tipodoc']);
        //                 $this->db->insert('pago_compra_detalle');
        //             }
        //         }
        //         else
        //         {
        //            $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
        //             $this->db->set('Pcd_IdSKU', $car['id']);
        //             $precio = $car['price'] / $car['qty'];
        //             $this->db->set('Pcd_Precio', $precio);
        //             $this->db->set('Pcd_Cantidad', $car['qty']);
        //             $this->db->set('Pcd_Importe', $car['price']);
        //             $this->db->set('Pcd_Documento', $car['tipodoc']);
        //             $this->db->insert('pago_compra_detalle');
        //         }
                    
        //     }


        //     foreach ($array_id_tienda as $Tie_IdTienda) 
        //     {
        //         if($tienda_usuario)
        //         {
        //             if($tienda_usuario != $Tie_IdTienda)
        //             {
        //             $this->db->set('Tie_IdTienda', $Tie_IdTienda);
        //             $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
        //             $this->db->set('Pat_Monto', $array_price_tienda_total[$Tie_IdTienda]);
        //             $this->db->insert('pago_tienda');
        //             }
        //         }
        //         else
        //         {
        //             $this->db->set('Tie_IdTienda', $Tie_IdTienda);
        //             $this->db->set('Pac_IdPago_Compra', $Pac_IdPago_Compra);
        //             $this->db->set('Pat_Monto', $array_price_tienda_total[$Tie_IdTienda]);
        //             $this->db->insert('pago_tienda');
        //         }
        //     }

        //     $this->db->trans_complete();

        //     if ($this->db->trans_status()) 
        //     {
        //        return $Pac_IdPago_Compra;
        //     }else{
        //         return null;                
        //     }
        // }
    }
?>