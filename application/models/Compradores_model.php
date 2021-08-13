<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Compradores_model extends CI_Model
    {
        private $nombre_tabla = '';

        function __construct()
        {           
            parent::__construct();
        }
        
        function getCompradores()
        {
            $sql="SELECT usu.Usu_IdUsuario,usu.Per_IdPersona,usu.Usu_Correo,per.Per_Dni,per.Per_Nombre,per.Per_Sexo,per.Per_FechaNacimiento,per.Per_Telefono,per.Per_Celular,per.Per_Ocupacion,usu.Tie_IdTienda,usu.Rol_IdRol
                FROM usuario AS usu
                INNER JOIN persona AS per ON per.Per_IdPersona = usu.Per_IdPersona 
                WHERE usu.Rol_IdRol=4 GROUP BY usu.Per_IdPersona";
            $query=$this->db->query($sql);
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

        function getCompras($idUsuario)
        {
            $sql="SELECT count(*) AS compras FROM pago_compra WHERE Usu_IdUsuario=$idUsuario";
            $query=$this->db->query($sql);
            return $query->row()->compras;   
        }

        function getComprasDetalle($idUsuario)
        {
            $sql="SELECT Pac_IdPago_Compra,Pac_FechaRegistro,Pac_Total FROM pago_compra WHERE Usu_IdUsuario=$idUsuario ORDER BY Pac_FechaRegistro DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function getComprasDescription($idCompra)
        {

            $sql="SELECT pro.Pro_Nombre,cpd.Pcd_Precio,cpd.Pcd_Importe,cpd.Pcd_Cantidad,sku.SKU_Color FROM pago_compra AS comp INNER JOIN pago_compra_detalle AS cpd ON comp.Pac_IdPago_Compra=cpd.Pac_IdPago_Compra INNER JOIN sku  AS sku ON sku.SKU_IdSKU=cpd.Pcd_IdSKU INNER JOIN producto pro ON pro.Pro_IdProducto=sku.producto_Pro_IdProducto WHERE cpd.Pac_IdPago_Compra=$idCompra ORDER BY comp.Pac_FechaRegistro DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function getFavoritosDetalle($idUsuario)
        {
            $sql="SELECT pro.Pro_Nombre,fa.Prf_FechaRegistro FROM producto_favorito fa INNER JOIN producto pro ON fa.Pro_IdProducto=pro.Pro_IdProducto WHERE fa.Usu_IdUsuario=$idUsuario ORDER BY fa.Prf_FechaRegistro DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function getGruposDetalle($idUsuario)
        {
            $sql="SELECT gru.Prg_Estado,pro.Pro_Nombre,gru.Prg_FechaRegistro,gru.Prg_Precio FROM producto_grupal gru INNER JOIN producto pro ON gru.Pro_IdProducto=pro.Pro_IdProducto WHERE gru.Usu_IdUsuario=$idUsuario ORDER BY gru.Prg_FechaRegistro DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function getFavoritos($idUsuario)
        {
            $sql="SELECT count(*) AS favoritos FROM producto_favorito WHERE Usu_IdUsuario=$idUsuario";
            $query=$this->db->query($sql);
            return $query->row()->favoritos;
        }

        function getGrupales($idUsuario)
        {
            $sql="SELECT count(*) AS grupos FROM producto_grupal WHERE Usu_IdUsuario=$idUsuario";
            $query=$this->db->query($sql);
            return $query->row()->grupos;
        }

        function getCompradoresId($idUsuario)
        {
            $sql="SELECT usu.Usu_IdUsuario, usu.Per_IdPersona,usu.Usu_Correo, per.Per_Dni, per.Per_Nombre, per.Per_Sexo, per.Per_FechaNacimiento, per.Per_Telefono, per.Per_Celular, per.Per_Ocupacion, usu.Tie_IdTienda, usu.Rol_IdRol,per.Per_Correo,per.Per_Direccion,per.Provincia_id,per.Distrito_id,per.Region_id
                FROM usuario AS usu
                INNER JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona 
                WHERE usu.Rol_IdRol=4 AND usu.Usu_IdUsuario=$idUsuario GROUP BY usu.Per_IdPersona";
            $query = $this->db->query($sql);
            return $query->row();
        }

        function getSkuId($Pro_IdProducto)
        {
            $sql="SELECT sku.SKU_IdSKU,sku.SKU_Color FROM sku AS sku WHERE sku.producto_Pro_IdProducto=$Pro_IdProducto ORDER BY sku.SKU_Color ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function getCompradoresDNI($dni)
        {
            $sql="SELECT usu.Usu_IdUsuario,per.Per_IdPersona,usu.Usu_Correo,per.Per_Dni,per.Per_Nombre,per.Per_Sexo,per.Per_FechaNacimiento,per.Per_Telefono,per.Per_Celular,per.Per_Ocupacion,usu.Tie_IdTienda,usu.Rol_IdRol,per.Per_Correo,per.Per_Direccion,per.Provincia_id,per.Distrito_id,per.Region_id
                FROM usuario AS usu
                RIGHT JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona 
                WHERE per.Per_Dni=$dni GROUP BY usu.Per_IdPersona";
            $query = $this->db->query($sql);
            return $query->row();
        }

        function getEditar_Comprador($DNIORUC,$idpersona,$nombreComprador,$tlf,$correo,$selectRegion,$selectProvincia,$selectDistritos,$direccionComprador)
        {
            $this->db->trans_start();            
            $this->db->set('Per_Dni',$DNIORUC);
            $this->db->set('Per_Telefono',$tlf);
            $this->db->set('Per_Correo',$correo);
            $this->db->set('Region_id',$selectRegion);
            $this->db->set('Per_Nombre',$nombreComprador);
            $this->db->set('Distrito_id',$selectDistritos);
            $this->db->set('Provincia_id',$selectProvincia);
            $this->db->set('Per_Direccion',$direccionComprador);
            $this->db->where('Per_IdPersona',$idpersona);
            $this->db->update('persona');
            $this->db->trans_complete();
            if ($this->db->trans_status()==TRUE) {
               return true;
            }
            return false;
        }

        function eliminarComp($idPersona)
        {
            $this->db->where('Per_IdPersona',$idPersona);
            if ($this->db->delete('persona')) {
                return true;
            };
        }

        function codigoCompraAct($Pac_IdPago_Compra)
        {
            $this->db->select('Pac_CodPago'); 
            $this->db->from('pago_compra');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);

            $query = $this->db->get();
            return $query->row();
        }

        function getPago_Compra_EnvioAct($Pac_IdPago_Compra)
        {
            $sql="SELECT a.Pac_IdPago_Compra,a.Pce_IdTienda,a.Pce_CodigoEnvio,a.Pce_CodUbigeo,SUM(Pce_CostoEnvio) AS PrecioEnvio,b.Tie_ruc_dni AS ruc_tienda,b.Tie_Nombre AS nombre_tienda,b.Tie_RazonSocial AS razon_social_tienda,c.name AS distrito,d.name AS region,e.name AS provincia,SUM(a.Pce_CantidadProd) AS catidadProd,SUM(Pce_costoPorProducto) AS PrecioPorProductos
                    FROM `pago_compra_envio` AS a INNER JOIN `tienda` AS b ON(a.Pce_IdTienda=b.Tie_IdTienda) INNER JOIN `districts` AS c ON(a.Pce_CodUbigeo=c.id) INNER JOIN `provinces` AS e ON(c.region_id=e.id) INNER JOIN `regions` AS d ON(e.region_id=d.id) WHERE a.Pac_IdPago_Compra=$Pac_IdPago_Compra GROUP BY  a.Pac_IdPago_Compra,a.Pce_IdTienda,a.Pce_CodigoEnvio,a.Pce_CodUbigeo,b.Tie_ruc_dni,b.Tie_Nombre,b.Tie_RazonSocial,c.name,d.name,e.name";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function getDettaleTiendaAct($Pce_IdTienda)
        {
            $sql="SELECT c.Per_Telefono,c.Per_Celular,c.Per_Nombre,c.Per_Dni,d.id AS iddistrito,d.name AS distrito,e.name AS provincia,f.name AS region,c.Per_Direccion
                    FROM `tienda` AS a INNER JOIN `usuario` AS b ON(a.Tie_IdTienda=b.Tie_IdTienda) INNER JOIN `persona` AS c ON(c.Per_IdPersona=b.Per_IdPersona) LEFT JOIN `districts` AS d ON(d.id=c.Distrito_id) LEFT JOIN `provinces` AS e ON(e.id=c.Provincia_id) LEFT JOIN `regions` AS f ON(f.id=c.Region_id)
                    WHERE a.Tie_IdTienda=$Pce_IdTienda";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function getDettaleProductoAct($Pac_IdPago_Compra,$Pce_IdTienda)
        {
            
            $sql = "SELECT b.Pro_Nombre,b.Pro_Caracteristicas,c.SKU_Nombre
                    FROM `pago_compra_envio` as a INNER JOIN `producto` as b ON(a.Pce_IdProducto=b.Pro_IdProducto) INNER JOIN `sku` as c ON(c.producto_Pro_IdProducto=b.Pro_IdProducto)
                    WHERE a.Pac_IdPago_Compra=$Pac_IdPago_Compra and a.Pce_IdTienda=$Pce_IdTienda group by b.Pro_Nombre,b.Pro_Caracteristicas,c.SKU_Nombre
                   ";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function getUpdateCostoEnvioAct($Pac_IdPago_Compra,$Pce_IdTienda,$response)
        {
            $codEnvio=json_decode($response);
            $codEnvio=$codEnvio->NRO_ORDEN;
            $this->db->set('Pce_NOS',$codEnvio);
            $this->db->where('Pce_IdTienda',$Pce_IdTienda); 
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra); 
            $this->db->update('pago_compra_envio');
        }

        function registrarAcuerdo_externo($ruc,$email,$nombre,$telefono,$idPersona,$idUsuario,$direccion,$selectRegion,$selectProvincia,$selectDistritos,$precioTotal,$precioEnvio,$precioPagar,$arrayCompra,$tienda_usuario)
        {
            $this->db->trans_start();

            //registrar o modificar persona
            if($idPersona) {
                $this->db->set('Per_Dni',$ruc);
                $this->db->set('Per_Correo',$email); 
                $this->db->set('Per_Nombre',$nombre);
                $this->db->set('Per_Telefono',$telefono);
                $this->db->set('Region_id',$selectRegion);
                $this->db->set('Per_Direccion',$direccion);
                $this->db->set('Distrito_id',$selectDistritos);
                $this->db->set('Provincia_id',$selectProvincia);
                $this->db->where('Per_IdPersona',$idPersona);
               
                if ($this->db->update('persona')) {
                   $idPersonaAct=$idPersona;
                };
            } else {
                $this->db->set('Per_Dni',$ruc);
                $this->db->set('Per_Sexo','1');
                $this->db->set('Per_Correo',$email); 
                $this->db->set('Per_Nombre',$nombre);
                $this->db->set('Per_Telefono',$telefono);
                $this->db->set('Tid_IdTipoDocumento','1');
                $this->db->set('Region_id',$selectRegion);
                $this->db->set('Per_Direccion',$direccion);
                $this->db->set('Distrito_id',$selectDistritos);
                $this->db->set('Provincia_id',$selectProvincia);
                $this->db->set('Per_FechaRegistro',date("Y-m-d H:i:s"));

                if($this->db->insert('persona')) {
                    $idPersonaAct=$this->db->insert_id();
                };
            }   

            $idUsu='';
            if($idUsuario) {
                $idUsu=$idUsuario;
            }
            //registro compra
            $this->db->set('Pac_Estado',1);
            $this->db->set('Pac_Banco',"NO");
            $this->db->set('Pac_Total',$precioTotal);
            $this->db->set('Pac_Envio',$precioEnvio);
            $this->db->set('Usu_IdUsuario',$idUsu);
            $this->db->set('Usu_IdPersona',$idPersonaAct);
            $this->db->set('Pac_FechaVencimiento',date("Y-m-d H:i:s"));
          
            if ($this->db->insert('pago_compra')) {
                $Pac_IdPago_Compra=$this->db->insert_id();
            };

            $CodPago="1".sprintf('%04d',$Pac_IdPago_Compra)."PRUEBA";

            //editar codigo de compra
            $this->db->set('Pac_CodPago',$CodPago);
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->update('pago_compra');

            //registrar infomacion de compra
            $this->db->set('Pci_Lote','');
            $this->db->set('Pci_Ruc',$ruc);
            $this->db->set('Pci_DtoInt','');
            $this->db->set('Pci_Referencia','');
            $this->db->set('Pci_RazonSocial','');
            $this->db->set('Pci_Urbanizacion','');
            $this->db->set('idregion',$selectRegion);
            $this->db->set('Pci_Telefono',$telefono);
            $this->db->set('Pci_Direccion',$direccion);
            $this->db->set('iddistrito',$selectDistritos);
            $this->db->set('idprovincia',$selectProvincia);
            $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->insert('pago_compra_info');

            //registro Detalle de la Compra
            if(!empty($arrayCompra)) {
                foreach ($arrayCompra as $Det_Compra) {   
                    $codigoEnvio='PMM'.$tienda_usuario.''.$Pac_IdPago_Compra;
                    $this->db->set('Pce_IdTienda',$tienda_usuario);
                    $this->db->set('Pce_CodigoEnvio',$codigoEnvio);
                    $this->db->set('Pce_CodUbigeo',$selectDistritos);
                    $this->db->set('Pce_IdSKU',$Det_Compra['idColor']);
                    $this->db->set('Pce_IdProducto',$Det_Compra['id']);
                    $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                    $this->db->set('Pce_CostoEnvio',$Det_Compra['costoEvio']);
                    $this->db->set('Pce_CantidadProd',$Det_Compra['cantidad']);
                    $this->db->set('Pce_costoPorProducto',$Det_Compra['precio']);
                    $this->db->insert('pago_compra_envio');
                }
            }  

            //registro detalle compra
            foreach($arrayCompra as $car) { 
                $this->db->set('Pcd_Documento','Boleta');
                $this->db->set('Pcd_Precio',$car['precio']);
                $this->db->set('Pcd_IdSKU',$car['idColor']);
                $this->db->set('Pcd_Cantidad',$car['cantidad']);
                $this->db->set('Pcd_Importe',$car['precioTotal']);
                $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                $this->db->insert('pago_compra_detalle');
            }

            $this->db->set('Tie_IdTienda',$tienda_usuario);
            $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->set('Pat_Monto',$precioTotal);
            $this->db->insert('pago_tienda');
            $this->db->trans_complete();

            if($this->db->trans_status()) {
               return $Pac_IdPago_Compra;
            } else {
                return null;                
            }
        }
    }