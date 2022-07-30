<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Producto_model extends CI_Model
    {
        private $nombre_tabla = 'producto';

        function __construct()
        {
            parent::__construct();
        }
        
        function productos($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Descripcion, pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, 
                    pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre, pun.Pru_Valor, pro.Pro_FechaCreacion,pro.Pro_Vista,pro.Pro_PrecioMaximo,pro.Pro_PrecioMinimo,ficha.Prf_Campo1,ficha.Prf_Campo3
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad 
                    INNER JOIN producto_ficha AS ficha ON ficha.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN producto_tienda proT ON proT.Pro_IdProducto=pro.Pro_IdProducto $where";
            $query = $this->db->query($sql);

            return $query->result();
        }

       function getProCount() {            
            $this->db->select("COUNT(*) as num_row");
            $this->db->from('producto');
            $this->db->order_by('Pro_FechaModificacion');
            $query = $this->db->get();
            $result = $query->result();
            return $result[0]->num_row;
        }

       function vendedores() {            
            $this->db->select("usu.Usu_Nombre, per.Per_Telefono");
            $this->db->from('usuario as usu');
            $this->db->join('persona as per','per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('usu.Rol_IdRol',5);            
            $query = $this->db->get();
            return $query->result();
        }

        function productos_agotados()
        {
            $this->db->select('*');
            $this->db->from('producto as pro');
            $this->db->join('producto_foto as prf','prf.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('pro.Pro_Estado',4);            
            $this->db->order_by('pro.Pro_FechaCreacion', 'DESC');
            $this->db->group_by('pro.Pro_IdProducto');
            $query = $this->db->get();
            return $query->result();
        } 
         
        function get_agotado_api()
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto, pro.Pro_FechaModificacion as fecha_modificado');
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
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto, pro.Pro_FechaModificacion as fecha_modificado');
            $this->db->from('producto as pro');
            $this->db->join('producto_tienda as prt','prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('prt.Tie_IdTienda',227);
            $this->db->where('pro.Pro_Estado',1);
            $this->db->or_where('pro.Pro_Estado',2);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $query = $this->db->get();
            return $query->result();
        }  

        function get_detalle_api($Pro_IdProducto)
        {
            $this->db->select('pro.Pro_IdProducto as id_producto, pro.Pro_Nombre as nombre_producto,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as img_producto, pro.Pro_Estado as estado_producto, pro.Pro_PrecioMaximo as precio_producto, cat.Cat_Nombre as categoria_producto, pro.Pro_Descripcion as descripcion_producto, pro.Pro_Caracteristicas as caracteristicas, pro.Pro_Marca as marca_producto, pro.Pro_EdoGarantia as nuevo_producto');
            $this->db->from('producto as pro');
            $this->db->join('producto_categoria as prc','prc.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('categoriap as cat','cat.Cat_IdCategoria = prc.Cat_IdCategoria');
            $this->db->where('pro.Pro_IdProducto',$Pro_IdProducto);;
            $query = $this->db->get();
            return $query->row();
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
            $this->db->or_where('pro.Pro_Estado',2);
            $this->db->group_by('cat.Cat_IdCategoria');
            $query = $this->db->get();
            return $query->result();
        }  

        function productos_listado()
        {
            $this->db->select('*');
            $this->db->from('producto as pro');
            $this->db->join('producto_foto as prf','prf.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->join('producto_precios as prp','prp.producto_Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->group_by('pro.Pro_IdProducto');
            $query = $this->db->get();
            return $query->result();
        }  

        function productos_oferta($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Descripcion, pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, 
                    pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre, pun.Pru_Valor, pro.Pro_FechaCreacion, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad 
                    INNER JOIN producto_foto AS prf on prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    $where ";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function productos_ultimos($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto DESC $limit";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_saldo2($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_Saldo, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto  DESC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_saldo($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_Saldo, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto DESC LIMIT 12";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function listado_productos($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioMaximo
                    FROM producto as pro
                    -- INNER JOIN sku as sku on sku.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where and pro.Pro_Estado != 5 ORDER BY pro.Pro_Estado ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function listado_productos_precios($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, prp.Prp_Desde, prp.Prp_A, prp.Prp_Precios
                    FROM producto as pro
                    INNER JOIN producto_precios as prp on prp.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_p_belleza($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto ORDER BY RAND() DESC $limit";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function producto_subcategoria($Suc_IdSubCategoria)
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista
                    FROM producto as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    where prc.Suc_IdSubCategoria = $Suc_IdSubCategoria and pro.Pro_Estado = 2 GROUP BY pro.Pro_IdProducto ORDER BY RAND() DESC LIMIT 4";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_grupos($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, gru.Gru_PrecioInicial,gru.Gru_PrecioFinal,prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN grupo AS gru ON gru.Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto ORDER BY RAND() LIMIT 8";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_vistos($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_FechaCreacion,pro.Pro_Vista,pro.Pro_Descripcion
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto ORDER BY  RAND() , pro.Pro_Vista DESC $limit";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_ultimos2($where="", $limit="")
        {
            $sql="SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion,pro.Pro_PrecioRango,pro.Pro_Marca, pro.Pro_MostrarPrecio, unm.Unm_Nombre, prc.Cat_IdCategoria,prc.Suc_IdSubCategoria,prc.Des_IdDetalle_SubCategoria,pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto=pro.Pro_IdProducto LIMIT 1) as Prf_Img, pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_Estado,pro.Pro_FechaCreacion,pro.Pro_Descripcion, cat.Cat_Nombre, sku.SKU_Nombre,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad 
                    INNER JOIN sku AS sku ON sku.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                    $where GROUP BY pro.Pro_IdProducto ORDER BY Pro_FechaCreacion DESC $limit";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_oferta2($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Oferta, pro.Pro_PrecioRango, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    WHERE pro.Pro_IdProducto = 1515 OR pro.Pro_IdProducto = 1520 OR pro.Pro_IdProducto = 1541 OR pro.Pro_IdProducto = 1542 OR pro.Pro_IdProducto = 1545 OR pro.Pro_IdProducto = 1565";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_campana($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,  pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta,  pro.Pro_PrecioRango,pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    WHERE pro.Pro_IdProducto = 644 OR pro.Pro_IdProducto = 832 OR pro.Pro_IdProducto = 487 OR pro.Pro_IdProducto = 694 OR pro.Pro_IdProducto = 507  OR pro.Pro_IdProducto = 670 OR pro.Pro_IdProducto = 684 OR pro.Pro_IdProducto = 836 OR pro.Pro_IdProducto = 846 OR pro.Pro_IdProducto = 858";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_campana2($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango,pro.Pro_Marca, pro.Pro_MostrarPrecio, unm.Unm_Nombre, prc.Cat_IdCategoria,prc.Suc_IdSubCategoria, prc.Des_IdDetalle_SubCategoria, pro.Pro_PrecioMinimo, pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_Estado,pro.Pro_FechaCreacion,pro.Pro_Descripcion, pro.Pro_FechaCreacion, prf.Prf_Thumb, prf.Prf_Img,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    WHERE prf.Prf_Thumb <>'' AND (prc.Suc_IdSubCategoria = 22 OR prc.Suc_IdSubCategoria = 24 OR prc.Suc_IdSubCategoria = 30 OR prc.Suc_IdSubCategoria = 29 OR prc.Suc_IdSubCategoria = 4 OR prc.Suc_IdSubCategoria = 8 OR prc.Suc_IdSubCategoria = 29 OR prc.Cat_IdCategoria = 1 OR prc.Des_IdDetalle_Subcategoria = 126 OR prc.Des_IdDetalle_Subcategoria = 124 OR prc.Des_IdDetalle_Subcategoria = 122)
                    GROUP BY pro.Pro_IdProducto 
                    ORDER BY pro.Pro_FechaCreacion DESC ";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function producto_electrohogar($where="", $limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                    INNER JOIN sku AS sku ON sku.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda 
                    WHERE tie.Tie_Estado = 2 AND prf.Prf_Thumb <>'' AND prc.Cat_IdCategoria = 14 GROUP BY pro.Pro_IdProducto ORDER BY RAND() LIMIT 16";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda($Tie_IdTienda)
        {
            $sql = "SELECT prt.Tie_IdTienda, pro.Pro_IdProducto, prf.Prf_Thumb, prf.Prf_Img
                    FROM `producto` as pro 
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                    WHERE prt.Tie_IdTienda = $Tie_IdTienda AND prf.Prf_Img != '' ORDER BY RAND() LIMIT 3";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_grupal()
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img,prg.Usu_IdUsuario, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,prg.Prg_Grupo,prg.Prg_IdProducto_Grupal,prg.Prg_Precio,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_grupal AS prg ON prg.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto
                    WHERE prg.Prg_Estado = 0 GROUP BY pro.Pro_IdProducto,prg.Prg_Grupo";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_grupal_count()
        {
            $sql = "SELECT pro.Pro_IdProducto, COUNT(pro.Pro_IdProducto) as Cantidad, prg.Prg_Estado, prg.Prg_Grupo,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_grupal AS prg ON prg.Pro_IdProducto = pro.Pro_IdProducto
                    WHERE prg.Prg_Estado = 0 GROUP BY pro.Pro_IdProducto,prg.Prg_Grupo";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_grupal_per()
        {
            $sql="SELECT pro.Pro_IdProducto, prg.Prg_Estado, prg.Prg_Grupo, Per_Nombre
                FROM `producto` as pro 
                INNER JOIN producto_grupal AS prg ON prg.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN usuario AS usu ON usu.Usu_IdUsuario = prg.Usu_IdUsuario
                INNER JOIN persona AS per ON per.Per_IdPersona = usu.Per_IdPersona
                WHERE prg.Prg_Estado = 0";
                $query = $this->db->query($sql);
                return $query->result();
        }

        function miproductogrupal($Usu_IdUsuario)
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,prg.Prg_Grupo,prg.Prg_IdProducto_Grupal,prg.Prg_Precio,prg.Prg_Estado,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_grupal AS prg ON prg.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto
                    WHERE prg.Usu_IdUsuario = $Usu_IdUsuario AND prf.Prf_Thumb <>'' GROUP BY prg.Prg_IdProducto_Grupal";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_filtro2($where="",$limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Descripcion, pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, 
                    pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre, pun.Pru_Valor, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img,pro.Pro_Vista
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad $where";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_catalogo($where="",$limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Descripcion, pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio,pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo, (SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, pro.Pro_Vista FROM producto as pro INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto $where and pro.Pro_Estado != 5 or pro.Pro_Estado != 4 order by pro.Pro_Estado ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_detalle_cat($where="",$limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Descripcion, pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio,pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo, (SELECT Prf_Thumb FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, pro.Pro_Vista FROM producto as pro INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto $where";
            $query = $this->db->query($sql);
            return $query->row();
        }

        function productos_d($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);      
            $query = $this->db->get();
            return $query->row();            
        }


        function productos_favoritos_x_usuario($Usu_IdUsuario)
        {
            $sql="SELECT prf2.Pro_IdProducto,pro.Pro_Nombre,pro.Pro_Estado,pro.Pro_Oferta,pro.Pro_Valoracion,pro.Pro_PrecioRango,pro.Pro_MostrarPrecio,unm.Unm_Nombre,pun.Pru_Valor,prf.Prf_Img
                FROM producto_favorito prf2
                INNER JOIN producto as pro ON pro.Pro_IdProducto=prf2.Pro_IdProducto
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad 
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto=pro.Pro_IdProducto
                WHERE prf2.Usu_IdUsuario=$Usu_IdUsuario
                GROUP BY pro.Pro_IdProducto";

            $query=$this->db->query($sql);
            return $query->result();
        }

        function productos_dp($where="",$limit="")
        {
            $sql = "SELECT pro.Pro_IdProducto, prt.Tie_IdTienda, pro.Pro_Descripcion, pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre , tie.Tie_Subdominio, pun.Pru_Valor, cat.Cat_Nombre, prc.Cat_IdCategoria, suc.Suc_Nombre,prc.Suc_IdSubCategoria, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto=pro.Pro_IdProducto LIMIT 1) as Prf_Img,pro.Pro_Vista
                FROM `producto` as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda as tie on tie.Tie_IdTienda=prt.Tie_IdTienda
                INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria=prc.Cat_IdCategoria
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria=prc.Suc_IdSubCategoria $where";
            $query = $this->db->query($sql);
            return $query->row();
        } 

        function productos_dp2($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);          
            $query = $this->db->get();
            return $query->row();
        }

        function productos_ficha($where="", $limit="")
        {
            $sql = "SELECT *
                FROM producto_ficha $where";

            $query = $this->db->query($sql);

            return $query->row();
        }

        function precios_producto($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('producto_precios');
            $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);
            $this->db->order_by('Prp_Desde', 'ASC');            
            $query = $this->db->get();
            return $query->result();            
        }


        function producto_tienda($Tie_IdTienda,$Pro_IdProducto)
        {
            $this->db->select('pro.Pro_IdProducto,pro.Pro_Nombre,pro.Pro_PrecioRango,pro.Pro_PrecioMinimo,pro.Pro_PrecioMaximo,pro.Pro_Descripcion,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img');
            $this->db->from('producto as pro');
            $this->db->join('producto_tienda as prt','prt.Pro_IdProducto = pro.Pro_IdProducto');
            $this->db->where('prt.Tie_IdTienda',$Tie_IdTienda);
            $this->db->where('pro.Pro_IdProducto !=',$Pro_IdProducto);
            $this->db->limit(4);
            $query = $this->db->get();
            return $query->result();
        }

        function get_cantidad_productos_x_region()
        {
            $sql = "SELECT reg.id, reg.name, COUNT(*) AS Cantidad
                    FROM producto pro
                    INNER JOIN producto_tienda prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda tie ON tie.Tie_IdTienda = prt.Tie_IdTienda
                    INNER JOIN regions reg ON tie.Tie_Departamento = reg.id
                    GROUP  BY tie.Tie_Departamento ORDER BY Cantidad DESC";

            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_cantidad_productos_x_region_x_busqueda($nombre_producto)
        {
            $sql = "SELECT reg.`id`, reg.name, COUNT(*) AS Cantidad
                    FROM producto pro
                    INNER JOIN producto_tienda prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda tie ON tie.`Tie_IdTienda` = prt.`Tie_IdTienda`
                    INNER JOIN regions reg ON tie.Tie_Departamento = reg.`id`
                    WHERE pro.Pro_Nombre LIKE '%$nombre_producto%'
                    GROUP  BY tie.Tie_Departamento ORDER BY Cantidad DESC";

            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_cantidad_productos_x_region_x_subcategoria($Suc_IdSubCategoria)
        {
            $sql = "SELECT reg.`id`, reg.name, COUNT(*) AS Cantidad
                    FROM producto pro
                    INNER JOIN producto_tienda prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN tienda tie ON tie.`Tie_IdTienda` = prt.`Tie_IdTienda`
                    INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN regions reg ON tie.Tie_Departamento = reg.`id`
                    WHERE prc.Suc_IdSubCategoria = $Suc_IdSubCategoria
                    GROUP  BY tie.Tie_Departamento ORDER BY Cantidad DESC";

            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_cantidad_productos_x_region_x_subcategoria_d($Des_IdDetalle_Subcategoria)
        {
            $sql="SELECT reg.id,reg.name,COUNT(*) AS Cantidad
                    FROM producto pro
                    INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                    INNER JOIN tienda AS tie ON tie.Tie_IdTienda=prt.Tie_IdTienda
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto=pro.Pro_IdProducto
                    INNER JOIN regions AS reg ON tie.Tie_Departamento=reg.id
                    WHERE prc.Des_IdDetalle_Subcategoria=$Des_IdDetalle_Subcategoria
                    GROUP BY tie.Tie_Departamento ORDER BY Cantidad DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_cantidad_productos_x_region_x_categoria($Cat_IdCategoria)
        {
            $sql="SELECT reg.id,reg.name,COUNT(*) AS Cantidad
                FROM producto pro
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=prt.Tie_IdTienda
                INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN regions AS reg ON tie.Tie_Departamento=reg.id
                WHERE prc.Cat_IdCategoria=$Cat_IdCategoria
                GROUP BY tie.Tie_Departamento ORDER BY Cantidad DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_fotos_producto($where="",$limit="")
        {
            $this->db->select('*');
            $this->db->from('producto_foto');
            if(empty($where)) {
                $this->db->group_by('producto_Pro_IdProducto');
            } else {
                $this->db->where('producto_Pro_IdProducto',$where);
            }
            $query=$this->db->get();
            return $query->result();
        }

        function fotos_productos($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('producto_foto');   
            $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);
            $query=$this->db->get();
            return $query->result();
        }

        function productos_filtro($idVariacion)
        {
            $sql="SELECT pro.Pro_IdProducto,pro.Pro_Nombre,pro.Pro_Estado,pro.Pro_Oferta,pro.Pro_Valoracion,pro.Pro_PrecioRango,pro.Pro_MostrarPrecio, unm.Unm_Nombre,pro.Pro_Vista 
                FROM `producto` as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad
                INNER JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN detalle_subcategoriap AS dsu ON pca.Des_IdDetalle_SubCategoria=dsu.Des_IdDetalle_SubCategoria
                WHERE pca.Des_IdDetalle_SubCategoria=$idVariacion GROUP BY pro.Pro_IdProducto";
            $query = $this->db->query($sql);
            return $query->result();
        }


        function productos_categoria($Cat_IdCategoria)
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_FechaModificacion, pro.Pro_FechaCreacion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo, pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible,(SELECT SKU_IdSKU FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_IdSKU,(SELECT COUNT(sku.producto_Pro_IdProducto) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as catvar, pro.Pro_Saldo, pro.Pro_Preventa, (SELECT cat.Cat_IdCategoria FROM categoriap as cat INNER JOIN producto_categoria as prc ON prc.Cat_IdCategoria = cat.Cat_IdCategoria WHERE prc.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as idcategoria');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=', 3);
            $this->db->having('idcategoria =', $Cat_IdCategoria);
            $query = $this->db->get();
            return $query->result();
        }

        function productos_subcategoria($Suc_IdSubCategoria,$where='')
        {
            $sql="SELECT pro.Pro_IdProducto,pro.Pro_Nombre,pro.Pro_Estado,pro.Pro_Oferta,pro.Pro_Valoracion,pro.Pro_PrecioMinimo,pro.Pro_PrecioMaximo,pro.Pro_PrecioRango,pro.Pro_MostrarPrecio,unm.Unm_Nombre,cat.Cat_Nombre,pca.Cat_IdCategoria,suc.Suc_Nombre,pca.Suc_IdSubCategoria,prf.Prf_Thumb,prf.Prf_Img,pro.Pro_FechaCreacion,pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_Estado,pro.Pro_Descripcion,pro.Pro_Marca,pro.Pro_Vista
                FROM producto AS pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN categoriap AS cat ON cat.Cat_IdCategoria=pca.Cat_IdCategoria 
                INNER JOIN subcategoriap AS suc ON suc.Suc_IdSubCategoria=pca.Suc_IdSubCategoria 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=prt.Tie_IdTienda
                WHERE tie.Tie_Estado=2 AND prf.Prf_Thumb <>'' AND pca.Suc_IdSubCategoria=$Suc_IdSubCategoria $where 
                GROUP BY pro.Pro_IdProducto ORDER BY pro.Pro_FechaCreacion DESC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_detallesub($Des_IdDetalle_SubCategoria,$where='')
        {
            $sql="SELECT pro.Pro_IdProducto,pro.Pro_Nombre,pro.Pro_Estado,pro.Pro_Oferta,pro.Pro_Valoracion,pro.Pro_PrecioMinimo,pro.Pro_PrecioMaximo,pro.Pro_PrecioRango,pro.Pro_MostrarPrecio,unm.Unm_Nombre,cat.Cat_Nombre,pca.Cat_IdCategoria,suc.Suc_Nombre,pca.Suc_IdSubCategoria,prf.Prf_Thumb,prf.Prf_Img,des.Des_Nombre,des.Des_IdDetalle_SubCategoria,pro.Pro_FechaCreacion,pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_Estado,pro.Pro_Descripcion,pro.Pro_Marca
                FROM producto AS pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN categoriap AS cat ON cat.Cat_IdCategoria=pca.Cat_IdCategoria 
                INNER JOIN subcategoriap AS suc ON suc.Suc_IdSubCategoria=pca.Suc_IdSubCategoria 
                INNER JOIN detalle_subcategoriap AS des ON des.Des_IdDetalle_SubCategoria=pca.Des_IdDetalle_SubCategoria 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=prt.Tie_IdTienda
                WHERE tie.Tie_Estado=2 AND prf.Prf_Thumb <>'' AND pca.Des_IdDetalle_SubCategoria=$Des_IdDetalle_SubCategoria $where
                GROUP BY pro.Pro_IdProducto 
                ORDER BY pro.Pro_FechaCreacion DESC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function categoria_seo($Cat_IdCategoria)
        {
            $sql = "SELECT * FROM categoriap as cat where cat.Cat_IdCategoria = $Cat_IdCategoria";

            $query = $this->db->query($sql);
            return $query->row();
        }

        function subcategoria_seo($Suc_IdSubCategoria)
        {
            $sql = "SELECT * FROM subcategoriap as suc where suc.Suc_IdSubCategoria = $Suc_IdSubCategoria";

            $query = $this->db->query($sql);
            return $query->row();
        }

        function detalle_seo($Des_IdDetalle_Subcategoria)
        {
            $sql="SELECT * FROM detalle_subcategoriap AS des 
                INNER JOIN subcategoriap AS suc ON suc.Suc_IdSubCategoria=des.subcategoria_Suc_IdSubCategoria 
                WHERE des.Des_IdDetalle_Subcategoria=$Des_IdDetalle_Subcategoria";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function productos_busqueda($nombre_producto,$where='')
        {
            $sql="SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo, pro.Pro_MostrarPrecio, unm.Unm_Nombre, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, pro.Pro_FechaCreacion
                FROM producto as pro
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad 
                INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                WHERE tie.Tie_Estado=2 AND pro.Pro_Nombre LIKE '%$nombre_producto%' $where";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_categoria2($Cat_IdCategoria,$where='')
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre,cat.Cat_Nombre, pca.Cat_IdCategoria, suc.Suc_Nombre,pca.Suc_IdSubCategoria, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, pro.Pro_FechaCreacion
                FROM producto as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria=pca.Cat_IdCategoria 
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria=pca.Suc_IdSubCategoria 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad 
                INNER JOIN producto_tienda as prt on prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda as tie on tie.Tie_IdTienda=prt.Tie_IdTienda
                WHERE tie.Tie_Estado=2 AND pca.Cat_IdCategoria=$Cat_IdCategoria $where";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function productos_categoria_region($Cat_IdCategoria, $Reg_IdRegion, $where='')
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre,cat.Cat_Nombre, pca.Cat_IdCategoria, suc.Suc_Nombre,pca.Suc_IdSubCategoria, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, pro.Pro_FechaCreacion
                FROM producto as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                INNER JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria = pca.Cat_IdCategoria 
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria = pca.Suc_IdSubCategoria 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                INNER JOIn producto_tienda AS prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda = prt.Tie_IdTienda
                where tie.Tie_Estado = 2 AND pca.Cat_IdCategoria = $Cat_IdCategoria AND tie.Tie_Departamento = '".$Reg_IdRegion."' $where";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_subcategoria_region($Suc_IdSubCategoria, $Reg_IdRegion, $where='')
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre,pro.Pro_Estado,pro.Pro_Oferta,pro.Pro_Valoracion,pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre,cat.Cat_Nombre,pca.Cat_IdCategoria, suc.Suc_Nombre,pca.Suc_IdSubCategoria, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) AS Prf_Img, pro.Pro_FechaCreacion
                FROM producto AS pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN categoriap AS cat on cat.Cat_IdCategoria=pca.Cat_IdCategoria 
                INNER JOIN subcategoriap AS suc on suc.Suc_IdSubCategoria=pca.Suc_IdSubCategoria 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad
                INNER JOIn producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=prt.Tie_IdTienda
                where tie.Tie_Estado = 2 AND pca.Suc_IdSubCategoria=$Suc_IdSubCategoria AND tie.Tie_Departamento='".$Reg_IdRegion."' $where";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_busqueda_region($nombre_producto, $Reg_IdRegion, $where='')
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango, pro.Pro_MostrarPrecio, unm.Unm_Nombre, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img, pro.Pro_FechaCreacion
                FROM producto as pro
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                INNER JOIn producto_tienda AS prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda = prt.Tie_IdTienda
                WHERE tie.Tie_Estado = 2 AND pro.Pro_Nombre LIKE '%$nombre_producto%' AND tie.Tie_Departamento = '".$Reg_IdRegion."' $where";

            $query = $this->db->query($sql);
            return $query->result();
        }
        
        function filtro_producto_nombre($nombre_producto)
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango,pro.Pro_Marca, pro.Pro_MostrarPrecio,cat.Cat_Nombre, prc.Cat_IdCategoria, suc.Suc_Nombre,prc.Suc_IdSubCategoria, des.Des_Nombre, des.Des_IdDetalle_SubCategoria, pro.Pro_PrecioMinimo, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_FechaCreacion,pro.Pro_Descripcion,pro.Pro_PrecioMaximo,pro.Pro_Vista,(SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible 
                FROM producto as pro 
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria
                INNER JOIN detalle_subcategoriap as des on des.subcategoria_Suc_IdSubCategoria = prc.Suc_IdSubCategoria 
                WHERE pro.Pro_PM = 1 AND pro.Pro_Nombre LIKE '%$nombre_producto%' GROUP BY pro.Pro_IdProducto HAVING SKU_StockDisponible >= 3";
            $query = $this->db->query($sql);
            return $query->result();
        }        
        function filtro_producto_id($Pro_IdProducto)
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango,pro.Pro_Marca, pro.Pro_MostrarPrecio,cat.Cat_Nombre, prc.Cat_IdCategoria, suc.Suc_Nombre,prc.Suc_IdSubCategoria, des.Des_Nombre, des.Des_IdDetalle_SubCategoria, pro.Pro_PrecioMinimo, prf.Prf_Thumb, prf.Prf_Img, pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_FechaCreacion,pro.Pro_Descripcion,pro.Pro_PrecioMaximo,pro.Pro_Vista,(SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible 
                FROM producto as pro 
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria
                INNER JOIN detalle_subcategoriap as des on des.subcategoria_Suc_IdSubCategoria = prc.Suc_IdSubCategoria 
                WHERE pro.Pro_PM = 1 AND pro.Pro_IdProducto LIKE '%$Pro_IdProducto%' GROUP BY pro.Pro_IdProducto HAVING SKU_StockDisponible >= 3";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function filtro_producto_nombre_cat($nombre_producto)
        {
            $sql = "SELECT cat.Cat_Nombre, prc.Cat_IdCategoria
                FROM producto as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                INNER JOIN producto_variacion as prv ON prv.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria
                INNER JOIN detalle_subcategoriap as des on des.subcategoria_Suc_IdSubCategoria = prc.Suc_IdSubCategoria 
                INNER JOIN producto_variacion_opcion as pvo ON pvo.producto_variacion_Prv_IdProductoVariacion = prv.Prv_IdProductoVariacion
                INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                WHERE tie.Tie_Estado = 2 AND pro.Pro_Nombre LIKE '%$nombre_producto%' GROUP BY cat.Cat_IdCategoria";
            $query = $this->db->query($sql);
            return $query->result();
        }

           function filtro_por_producto_fa($id_producto)
        {

            $sql = "SELECT count(*) as cantidadP
                    from producto_favorito proF                
                WHERE proF.Pro_IdProducto=$id_producto GROUP BY proF.Pro_IdProducto";
            $query = $this->db->query($sql);

            if($query->row()) {
                return $query->row()->cantidadP;
            } else {
                return 0;
            }

            
        }

        function filtro_producto_popular_cat()
        {
            $sql = "SELECT cat.Cat_Nombre, prc.Cat_IdCategoria,prf.Prf_Thumb, prf.Prf_Img
                FROM producto as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN producto_variacion as prv ON prv.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria
                INNER JOIN detalle_subcategoriap as des on des.subcategoria_Suc_IdSubCategoria = prc.Suc_IdSubCategoria 
                INNER JOIN producto_variacion_opcion as pvo ON pvo.producto_variacion_Prv_IdProductoVariacion = prv.Prv_IdProductoVariacion
                INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                WHERE tie.Tie_Estado = 2 AND prf.Prf_Thumb <>'' GROUP BY cat.Cat_IdCategoria ORDER BY pro.Pro_Vista DESC LIMIT 50";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function filtro_producto_nombre2($nombre_producto, $idSubcategoria)
        {
            $sql = "SELECT des.Des_Nombre
                FROM detalle_subcategoriap as des 
                WHERE des.Des_Nombre LIKE '%$nombre_producto%' AND des.subcategoria_Suc_IdSubCategoria = $idSubcategoria";
            $query = $this->db->query($sql);
            return $query->row();
        }

        function filtro_producto_popular()
        {
            $sql = "SELECT pro.Pro_IdProducto,pro.Pro_Nombre, pro.Pro_Estado, pro.Pro_Oferta, pro.Pro_Valoracion, pro.Pro_PrecioRango,pro.Pro_Marca, pro.Pro_MostrarPrecio, unm.Unm_Nombre,cat.Cat_Nombre, prc.Cat_IdCategoria, suc.Suc_Nombre,prc.Suc_IdSubCategoria, des.Des_Nombre, des.Des_IdDetalle_SubCategoria, pro.Pro_PrecioMinimo, prf.Prf_Thumb, prf.Prf_Img , pro.Pro_Caracteristicas,pro.Pro_Garantia,pro.Pro_EdoGarantia,pro.Pro_Documento,pro.Pro_FechaCreacion,pro.Pro_Descripcion, pro.Pro_Vista
                FROM producto as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                INNER JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN producto_variacion as prv ON prv.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN producto_categoria as prc on prc.producto_Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN categoriap as cat on cat.Cat_IdCategoria = prc.Cat_IdCategoria
                INNER JOIN subcategoriap as suc on suc.Suc_IdSubCategoria = prc.Suc_IdSubCategoria
                INNER JOIN detalle_subcategoriap as des on des.subcategoria_Suc_IdSubCategoria = prc.Suc_IdSubCategoria 
                INNER JOIN producto_variacion_opcion as pvo ON pvo.producto_variacion_Prv_IdProductoVariacion = prv.Prv_IdProductoVariacion 
                INNER JOIN producto_tienda as prt on prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda as tie on tie.Tie_IdTienda = prt.Tie_IdTienda
                WHERE tie.Tie_Estado = 2 AND prf.Prf_Thumb <>'' GROUP BY pro.Pro_IdProducto ORDER BY pro.Pro_Vista DESC LIMIT 50";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda_marcas($nombre_producto)
        {
            $sql = "SELECT pro.Pro_Marca
                FROM producto as pro WHERE pro.Pro_Nombre LIKE '%$nombre_producto%' GROUP BY pro.Pro_Marca ORDER BY pro.Pro_Marca ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_popular_tienda_marcas()
        {
            $sql = "SELECT pro.Pro_Marca
                FROM producto as pro 
                WHERE pro.Pro_FechaCreacion > '2019-1-21 09:44:49' GROUP BY pro.Pro_Marca ORDER BY pro.Pro_Marca ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda_marcas_especial()
        {
            $sql = "SELECT pro.Pro_Marca
                FROM `producto` as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad
                INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto 
                WHERE (prc.Des_IdDetalle_SubCategoria = 73 OR prc.Des_IdDetalle_SubCategoria = 74 OR prc.Des_IdDetalle_SubCategoria = 76) AND pro.Pro_Marca != ' ' GROUP BY pro.Pro_Marca ORDER BY pro.Pro_Marca ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda_marcas_ultimos2($where="", $limit="")
        {
             $sql = "SELECT pro.Pro_Marca
                    FROM `producto` as pro 
                    INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_categoria AS prc ON prc.producto_Pro_IdProducto = pro.Pro_IdProducto  
                    INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida = pun.Unm_IdUnidadMedidad 
                    $where ORDER BY Pro_FechaCreacion DESC  $limit";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda_marcas_des($Des_IdDetalle_SubCategoria)
        {
            $sql = "SELECT pro.Pro_Marca
                FROM producto as pro 
                JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto = pro.Pro_IdProducto
                WHERE pca.Des_IdDetalle_SubCategoria = $Des_IdDetalle_SubCategoria GROUP BY pro.Pro_Marca ORDER BY pro.Pro_Marca ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda_marcas_suc($Suc_IdSubCategoria)
        {
            $sql = "SELECT pro.Pro_Marca
                FROM producto as pro 
                JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto = pro.Pro_IdProducto
                WHERE pca.Suc_IdSubCategoria = $Suc_IdSubCategoria GROUP BY pro.Pro_Marca ORDER BY pro.Pro_Marca ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function productos_tienda_marcas_cat($Cat_IdCategoria)
        {
            $sql = "SELECT pro.Pro_Marca,pro.Pro_Vista
                FROM producto as pro 
                JOIN producto_categoria AS pca ON pca.producto_Pro_IdProducto = pro.Pro_IdProducto
                WHERE pca.Cat_IdCategoria = $Cat_IdCategoria GROUP BY pro.Pro_Marca ORDER BY pro.Pro_Marca ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_cantidad_producto_x_categoria()
        {
            $sql = "SELECT prc.Cat_IdCategoria, cat.`Cat_Nombre`, COUNT(*) AS Cantidad
                    FROM producto pro
                    INNER JOIN producto_categoria prc ON prc.`producto_Pro_IdProducto` = pro.`Pro_IdProducto` 
                    INNER JOIN categoriap cat ON cat.`Cat_IdCategoria` = prc.`Cat_IdCategoria`
                    GROUP BY prc.`Cat_IdCategoria` ORDER BY Cantidad DESC";

            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_cantidad_producto_x_busqueda($nombre_producto)
        {
            $sql = "SELECT prc.Cat_IdCategoria, cat.`Cat_Nombre`, COUNT(*) AS Cantidad
                    FROM producto pro
                    INNER JOIN producto_categoria prc ON prc.`producto_Pro_IdProducto` = pro.`Pro_IdProducto` 
                    INNER JOIN categoriap cat ON cat.`Cat_IdCategoria` = prc.`Cat_IdCategoria`
                    WHERE pro.Pro_Nombre LIKE '%$nombre_producto%'
                    GROUP BY prc.`Cat_IdCategoria` ORDER BY Cantidad DESC";

            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_categorias_tienda()
        {
            $sql = "SELECT prc.`Cat_IdCategoria`, cat.Cat_Nombre
                    FROM producto_categoria prc
                    INNER JOIN producto pro ON pro.Pro_IdProducto = prc.producto_Pro_IdProducto
                    INNER JOIN producto_tienda prt ON prt.`Pro_IdProducto` = pro.Pro_IdProducto
                    INNER JOIN categoriap cat ON cat.`Cat_IdCategoria` = prc.Cat_IdCategoria
                    GROUP BY prc.`Cat_IdCategoria`";

            $query = $this->db->query($sql);

            return $query->result();
        }
      
        function get_Categoria()
        {
            $this->db->select('*');
            $this->db->from('categoriap');
            $query = $this->db->get();
            return $query->result();
        }
            
        function categorias_act()
        {
            $this->db->select('*');
            $this->db->from('categoriap');
            $this->db->where('Cat_Estado',1);
            $this->db->order_by('Cat_Orden','ASC');
            $query = $this->db->get();
            return $query->result();
        }
      
        function productos_principal2()
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo,pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible ,pro.Pro_Saldo,pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=', 3);
            $query = $this->db->get();
            return $query->result();
        }

        public function get_current_page_records($limit, $start)
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_FechaModificacion, pro.Pro_FechaCreacion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo, pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible,(SELECT SKU_IdSKU FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_IdSKU,(SELECT COUNT(sku.producto_Pro_IdProducto) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as catvar, pro.Pro_Saldo, pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=', 3);
            $this->db->limit($limit, $start);
            $query = $this->db->get();
          
            if ($query->num_rows() > 0)
            {
                foreach ($query->result() as $row)
                {
                    $data[] = $row;
                }                 
                return $data;
            }          
            return false;
        }

        public function get_total()
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo,pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible ,pro.Pro_Saldo,pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=', 3);
            $query = $this->db->get();
            return $query->num_rows();
        }

        function productos10()
        {
           $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_FechaModificacion, pro.Pro_FechaCreacion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo, pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible,(SELECT SKU_IdSKU FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_IdSKU,(SELECT COUNT(sku.producto_Pro_IdProducto) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as catvar, pro.Pro_Saldo, pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=', 3);
            $this->db->limit(20);
            $query = $this->db->get();
            return $query->result();
        }
      
        function productos_principal3()
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo,pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible ,pro.Pro_Saldo,pro.Pro_Preventa, pro.Pro_Descripcion');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_FechaModificacion','DESC');
            $this->db->having('SKU_StockDisponible >=', 3);
            $query = $this->db->get();
            return $query->result();
        }

        function pcategoria($Id_Categoria)
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Descripcion, pro.Pro_PrecioMaximo, pro.Pro_PrecioMinimo,pro.Pro_PM,(SELECT Prf_Thumb FROM producto_foto as prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Thumb,(SELECT Cat_IdCategoria FROM producto_categoria as prc WHERE prc.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Cat_IdCategoria, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible ,pro.Pro_Saldo,pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->order_by('pro.Pro_Nombre','RANDOM');
            $this->db->having('SKU_StockDisponible >=', 3);
            $this->db->having('Cat_IdCategoria', $Id_Categoria);
            $query = $this->db->get();
            return $query->result();
        }

        function get_Categoria2()
        {
             $sql = "SELECT cat.Cat_IdCategoria,cat.Cat_Nombre,cat.Cat_IconMobile,cat.Cat_IconPC FROM categoriap as  cat inner join producto_categoria as proc on(cat.Cat_IdCategoria=proc.Cat_IdCategoria) inner join producto_tienda prodt on(proc.producto_Pro_IdProducto=prodt.Pro_IdProducto) inner join tienda as tiend on(tiend.Tie_IdTienda=prodt.Tie_IdTienda and tiend.Tie_Estado='2') group by cat.Cat_IdCategoria  order by cat.Cat_IdCategoria asc";
            $query = $this->db->query($sql);
            return $query->result();
        }
        
        function precios_producto_talla($PVO_IdVao)
        {
            $this->db->select('*');
            $this->db->from('producto_precios');
            $this->db->where('Prp_PVO_IdPVO',$PVO_IdVao);
            $this->db->order_by('Prp_Desde', 'ASC');
            $query = $this->db->get();
            return $query->result();            

        }

        function get_UnidadMedida()
        {
            $this->db->select('*');
            $this->db->from('unidadmedida');
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_subCategoria($Cat_IdCategoria)
        {
            $this->db->select('*');
            $this->db->from('subcategoriap');
            $this->db->where('Categoria_Cat_IdCategoria',$Cat_IdCategoria);
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_subCategoria2()
        {
            $this->db->select('*');
            $this->db->from('subcategoriap');
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_subCategoria3()
        {   

             $sql = "SELECT subc.Suc_IdSubCategoria,subc.Suc_Nombre,subc.categoria_Cat_IdCategoria FROM subcategoriap as subc inner join producto_categoria as proc on(subc.Suc_IdSubCategoria=proc.Suc_IdSubCategoria) inner join producto_tienda prodt on(proc.producto_Pro_IdProducto=prodt.Pro_IdProducto) inner join tienda as tiend on(tiend.Tie_IdTienda=prodt.Tie_IdTienda and tiend.Tie_Estado='2') group by subc.Suc_IdSubCategoria  order by subc.Suc_IdSubCategoria asc";
            
            $query = $this->db->query($sql);
            return $query->result();
        }

         function get_subCategoria_detalle2()
        {
            $this->db->select('*');
            $this->db->from('detalle_subcategoriap');
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_subCategoria_detalle_todas()
        {   

              $sql = "SELECT suc.Des_IdDetalle_SubCategoria,suc.Des_Nombre,sub.Suc_Nombre,suc.subcategoria_Suc_IdSubCategoria FROM detalle_subcategoriap as suc  inner join subcategoriap as sub on(suc.subcategoria_Suc_IdSubCategoria=sub.Suc_IdSubCategoria) inner join producto_categoria as proc on(suc.Des_IdDetalle_SubCategoria=proc.Des_IdDetalle_SubCategoria) inner join producto_tienda prodt on(proc.producto_Pro_IdProducto=prodt.Pro_IdProducto) inner join tienda as tiend on(tiend.Tie_IdTienda=prodt.Tie_IdTienda and tiend.Tie_Estado='2') group by suc.Des_IdDetalle_SubCategoria  order by suc.Des_IdDetalle_SubCategoria asc";
            
            $query = $this->db->query($sql);
            return $query->result();

            /*$this->db->select('*');
            $this->db->from('detalle_subcategoriap AS suc');
            $this->db->join('subcategoriap AS sub', 'sub.Suc_IdSubCategoria = suc.subcategoria_Suc_IdSubCategoria');
        
            $query = $this->db->get();
            return $query->result();*/
        }

        function get_p_c_d_s($producto_Pro_IdProducto)
        {
            $this->db->select('Des_IdDetalle_SubCategoria');
            $this->db->from('producto_categoria');
            $this->db->where('producto_Pro_IdProducto',$producto_Pro_IdProducto);
        
            $query = $this->db->get();
            return $query->row();
        }

        function get_subCategoria_detalle($subcategoria_Suc_IdSubCategoria)
        {
            $this->db->select('*');
            $this->db->from('detalle_subcategoriap');
            $this->db->where('subcategoria_Suc_IdSubCategoria',$subcategoria_Suc_IdSubCategoria);
        
            $query = $this->db->get();
            return $query->result();
        }

        function get_var_cat($Des_IdDetalle_SubCategoria)
        {            
            $sql = "SELECT vao.Vao_IdVaricion_Opcion, vao.Vao_Nombre, vao.variacion_Var_IdVariacion FROM variacion_subcategoria as vas
                    INNER JOIN variacion_opcion as vao ON vao.Vao_IdVaricion_Opcion = vas.Vao_IdVaricion_Opcion
                    INNER JOIN detalle_subcategoriap as des ON des.Des_IdDetalle_SubCategoria = vas.Des_IdDetalle_SubCategoria
                    WHERE vas.Des_IdDetalle_SubCategoria = $Des_IdDetalle_SubCategoria";
           
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_variacion_sub($Des_IdDetalle_SubCategoria)
        {
            $sql = "SELECT var.Var_IdVariacion, var.Var_Nombre FROM detalle_subcategoriap AS des INNER JOIN variacion_opcion AS vao ON vao.variacion_Var_IdVariacion = des.Des_IdDetalle_SubCategoria INNER JOIN variacion AS var ON var.Var_IdVariacion = vao.variacion_Var_IdVariacion WHERE Des_IdDetalle_SubCategoria = $Des_IdDetalle_SubCategoria group by var.Var_IdVariacion";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_variaciones_filtro()
        {
            $sql = "SELECT vao.Vao_Nombre, vao.Vao_IdVaricion_Opcion FROM producto as pro
                    INNER JOIN producto_variacion as prv ON prv.producto_Pro_IdProducto = pro.Pro_IdProducto
                    INNER JOIN producto_variacion_opcion as pvo ON pvo.producto_variacion_Prv_IdProductoVariacion = prv.Prv_IdProductoVariacion
                    INNER JOIN variacion as var ON var.Var_IdVariacion = prv.Prv_IdVariacion
                    INNER JOIN variacion_opcion as vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao
                    group by vao.Vao_IdVaricion_Opcion";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_filtro()
        {
            $this->db->select('*');
            $this->db->from('producto_categoria as pca');
            $this->db->join('detalle_subcategoriap AS dsu', 'dsu.Des_IdDetalle_SubCategoria = pca.Des_IdDetalle_SubCategoria');
            $this->db->group_by('dsu.Des_IdDetalle_SubCategoria');
            $query = $this->db->get();
            return $query->result();
        }

        function get_sku($where="",$limit="",$limit2="")
        {
            $this->db->select('sku.SKU_IdSku, sku.SKU_Nombre, sku.SKU_Img, sku.Producto_Pro_IdProducto, sku.SKU_StockDisponible, var.Var_Nombre, vao.Vao_Nombre, sku.SKU_Color');
            $this->db->from('sku as sku');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion'); 
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->limit($limit, $limit2);

            if (empty($where))
            {
            }
            else
            {
                $this->db->where('sku.producto_Pro_IdProducto', $where);
            }

            $query = $this->db->get();
            return $query->result();
        }

        function get_sku_producto($where="",$limit="",$limit2="")
        {
            $this->db->select('sku.SKU_IdSku, sku.SKU_Nombre, sku.SKU_Img, sku.Producto_Pro_IdProducto, sku.SKU_StockDisponible, var.Var_Nombre, vao.Vao_Nombre, sku.SKU_Color');
            $this->db->from('sku as sku');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion'); 
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->limit($limit, $limit2);
            if (empty($where)) 
            {  
            }else{
            $this->db->where('sku.producto_Pro_IdProducto', $where);
            }
            $this->db->group_by("sku.SKU_Color");
            $query = $this->db->get();
            return $query->result();
        }

         function get_sku_producto_vao($Pro_IdProducto)
        {
            $this->db->select('vao.Vao_Nombre, pvo.PVO_IdPVO');
            $this->db->from('sku as sku');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion'); 
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->where('sku.producto_Pro_IdProducto', $Pro_IdProducto);
            $this->db->order_by('vao.Vao_IdVaricion_Opcion', 'ASC');
            $this->db->group_by("vao.Vao_Nombre");
            $query = $this->db->get();
            return $query->result();
        }

        function get_skuB($where="",$limit="",$limit2="")
        {
            $this->db->select('sku.SKU_IdSku, sku.SKU_Nombre, sku.SKU_Img, sku.Producto_Pro_IdProducto, sku.SKU_StockDisponible, var.Var_Nombre, vao.Vao_Nombre, sku.SKU_Color, pvo.PVO_IdPVO');
            $this->db->from('sku as sku');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion'); 
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');
            $this->db->limit($limit, $limit2);
            if (empty($where)) 
            {  
            }else{
            $this->db->where('sku.producto_Pro_IdProducto', $where);
            }
            $this->db->order_by("sku.SKU_Color");
            $query = $this->db->get();
            return $query->result();
        }
        
        function get_sku2($where="")
        {
            $this->db->select('sku.SKU_IdSku, sku.SKU_Nombre, sku.SKU_Img, sku.Producto_Pro_IdProducto, sku.SKU_StockDisponible, var.Var_Nombre, vao.Vao_Nombre');
            $this->db->from('sku as sku');
            $this->db->join('sku_pvo AS spv', 'spv ON spv.SKU_SKU_IdSKU = sku.SKU_IdSKU');
            $this->db->join('producto_variacion AS prv', 'prv ON prv.Prv_IdProductoVariacion = spv.Producto_Variacion_Prv_IdProductoVariacion');
            $this->db->join('producto_variacion_opcion AS pvo', 'pvo ON pvo.PVO_IdPVO = spv.Producto_Variacion_Opcion_PVO_IdPVO');  
            $this->db->join('variacion AS var', 'var ON var.Var_IdVariacion = prv.Prv_IdVariacion');  
            $this->db->join('variacion_opcion AS vao', 'vao ON vao.Vao_IdVaricion_Opcion = pvo.PVO_IdVao');

            if (empty($where)) 
            {
            }
            else
            {
                $this->db->where('sku.SKU_IdSKU', $where);
            }

            $query = $this->db->get();
            return $query->row();
        }

        function get_variacion()
        {
            $this->db->select('*');
            $this->db->from('variacion');
            $query = $this->db->get();
            return $query->result();
        }

        function get_variacion_opcion()
        {
            $this->db->select('*');
            $this->db->from('variacion_opcion');
            $query = $this->db->get();
            return $query->result();
        }

        // function productos_ficha($where="", $limit="")
        // {
        //     $sql = "SELECT * FROM producto_ficha $where";
        //     $query = $this->db->query($sql);
        //     return $query->row();
        // }

        function addProducto($Pro_Nombre,$Pro_Descripcion)
        {
            $this->db->trans_start();
            
            $this->db->set('Pro_Nombre', $Pro_Nombre);
            $this->db->set('Pro_Descripcion', $Pro_Descripcion);

            if ($this->db->insert('Producto')) 
            {
              $Pro_IdProducto = $this->db->insert_id();
            }
            
            $this->db->trans_complete();

            if ($this->db->trans_status()) 
            {
               return $Pro_IdProducto;
            }

            return false;
        }

        function addProductoFotos($Pro_IdProducto,$Prf_Img)
        {
            $this->db->set('producto_Pro_IdProducto', $Pro_IdProducto);
            $this->db->set('Prf_Img', $Prf_Img);
            $this->db->insert('producto_foto');
        }

        function addSkuFoto($SKU_IdSku,$SKU_Img)
        {
            $this->db->set('SKU_Img', $SKU_Img);
            $this->db->where('SKU_IdSKU', $SKU_IdSku);
            $this->db->update('sku');
        }

        function skuEdit($SKU_IdSKU,$SKU_Cantidad)
        {
            $this->db->set('SKU_Cantidad', $SKU_Cantidad);
            $this->db->where('SKU_IdSKU', $SKU_IdSKU);
            $this->db->update('sku');
        }

        function getUpdateCostoEnvio($Pac_IdPago_Compra,$Pce_IdTienda,$response)
        {
            $codEnvio=json_decode($response);
            $codEnvio=$codEnvio->NRO_ORDEN;
            $this->db->set('Pce_NOS', $codEnvio);
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra); 
            $this->db->where('Pce_IdTienda',$Pce_IdTienda); 
            $this->db->update('pago_compra_envio');
        }

        function addProductoUnidad($Pro_IdProducto,$Unidad)
        {
            $this->db->set('producto_Pro_IdProducto', $Pro_IdProducto);
            $this->db->set('Unm_IdUnidadMedidad', $Unidad);
            $this->db->set('Pru_Valor', 1);
            $this->db->insert('producto_unidad');
        }

        function addProductoCategoria($Pro_IdProducto,$Cat_IdCategoria,$Suc_IdSubCategoria,$Des_IdDetalle_SubCategoria)
        {
            $this->db->set('producto_Pro_IdProducto', $Pro_IdProducto);
            $this->db->set('Cat_IdCategoria', $Cat_IdCategoria);
            $this->db->set('Suc_IdSubCategoria', $Suc_IdSubCategoria);
            $this->db->set('Des_IdDetalle_SubCategoria', $Des_IdDetalle_SubCategoria);
            $this->db->insert('producto_categoria');
        }

        function var_producto($Pro_IdProducto)
        {
            $this->db->select('Prv_IdVariacion');
            $this->db->from('producto_variacion');
            $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);
            $query = $this->db->get();
            return $query->row();
        }

        function vendedor($Ven_Codigo)
        {
            $this->db->select('*');
            $this->db->from('vendedores');
            $this->db->where('Ven_Codigo',$Ven_Codigo);
            $query = $this->db->get();
            return $query->row();
        }

        function get_comentarios($Pro_IdProducto)
        {
            $this->db->select('*'); 
            $this->db->from('comentario');
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);
            $this->db->order_by('Com_FechaCreacion', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }

        function get_comentarios_respuestas($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('comentario as com');
            $this->db->join('respuesta as res','res.Com_IdComentario = com.Com_IdComentario','left');
            $this->db->where('com.Pro_IdProducto',$Pro_IdProducto);
            $this->db->order_by('com.Com_FechaCreacion', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }

        function addComentario($comentario,$Pro_IdProducto,$Usu_IdUsuario)
        {
            $this->db->set('Com_Comentario',$comentario);
            $this->db->set('Pro_IdProducto',$Pro_IdProducto);
            $this->db->set('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->insert('comentario');
            return true;
        }

        function get_producto_id($Pro_IdProducto)
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);
            $query = $this->db->get();
            return $query->row();
        }

         function reputacion_producto($Pro_IdProducto)
        {
            $this->db->select('Cal_Tienda');
            $this->db->from('califica_compra as cac');
            $this->db->join('venta_detalle as vde','vde ON vde.Ven_IdVenta = cac.Ven_IdVenta');
            $this->db->join('sku as sku','sku ON sku.SKU_IdSKU = vde.SKU_IdSKU');
            $this->db->where('sku.producto_Pro_IdProducto',$Pro_IdProducto);
        
            $query = $this->db->get();
            $calificaciones = $query->result();

            $this->db->join('venta_detalle as vde','vde ON vde.Ven_IdVenta = cac.Ven_IdVenta');
            $this->db->join('sku as sku','sku ON sku.SKU_IdSKU = vde.SKU_IdSKU');
            $this->db->where('sku.producto_Pro_IdProducto',$Pro_IdProducto);
            $this->db->from('califica_compra as cac');
            $TotalCalicaciones = $this->db->count_all_results();


            $positivo = 0;
            $neutral = 0;
            $negativo = 0;
            foreach ($calificaciones as $key => $value) {
                if ($value->Cal_Tienda == '1t') {
                    $positivo = $positivo + 1;
                } elseif ($value->Cal_Tienda == '2t') {
                    $neutral = $neutral + 1; 
                } else{
                    $negativo = $negativo + 1;                     
                }
            }
            if ($TotalCalicaciones != 0) {
           
            $porcPos = ($positivo*100)/$TotalCalicaciones;   
            $porcNeu = ($neutral*100)/$TotalCalicaciones;   
            $porcNeg = ($negativo*100)/$TotalCalicaciones;  

            $porcCali = (object) array('positivo' => $porcPos,'neutral' => $porcNeu,'negativo' => $porcNeg); 
                return $porcCali;
            }else{
               return 0;
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

        
        function codigoCompra($Pac_IdPago_Compra)
        {
           $this->db->select('Pac_CodPago'); 
            $this->db->from('pago_compra');
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);

            $query = $this->db->get();
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
                    $codigoEnvio='PMR'.$Det_Compra['id_tienda'].''.$Pac_IdPago_Compra;
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

                        $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
                        $this->db->from('sku');
                        $this->db->where('SKU_IdSKU',$car['id']);;
                        $query = $this->db->get();
                        $stock = $query->row();


                        $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $val);
                        $this->db->set('SKU_Reservado', $stock->SKU_Reservado + $val);
                        $this->db->where('SKU_IdSKU', $sk);
                        $this->db->update('sku');
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

                   $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
                    $this->db->from('sku');
                    $this->db->where('SKU_IdSKU',$car['id']);
                    $query = $this->db->get();
                    $stock = $query->row();


                    $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $car['qty']);
                    $this->db->set('SKU_Reservado', $stock->SKU_Reservado + $car['qty']);
                    $this->db->where('SKU_IdSKU', $car['id']);
                    $this->db->update('sku');
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

        function registrarAcuerdo($array_compra,$arryCompraDetalle,$Ven_Total,$Ven_Envio,$id_usuario,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$tienda_usuario, $array_id_tienda, $array_price_tienda_total, $tlf,$tipoPago,$Descuento,$Ven_IdVendedor){

            if($tipoPago=='ACUERDO'){
                $Pac_Banco='NO';
            } else if($tipoPago=='TIENDA') {
                $Pac_Banco='TIENDA';
            } else if($tipoPago=='TOD') {
                $Pac_Banco='TDO';
            }
            
            $this->db->trans_start();

            //registro compra
            $this->db->set('Pac_Estado',1);
            $this->db->set('Pac_Total',$Ven_Total);
            $this->db->set('Pac_Envio',$Ven_Envio);
            $this->db->set('Pac_Banco',$Pac_Banco);
            $this->db->set('Usu_IdUsuario',$id_usuario);
            $this->db->set('Pac_FechaVencimiento',date("Y-m-d H:i:s"));

            if($this->db->insert('pago_compra')) {
                $Pac_IdPago_Compra=$this->db->insert_id();
            };

            $CodPago="1".sprintf('%04d',$Pac_IdPago_Compra)."A";

            $this->db->set('Pac_CodPago',$CodPago);
            $this->db->set('Ven_IdVendedor',$Ven_IdVendedor);
            $this->db->where('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->update('pago_compra');

            //Info compra
            $this->db->set('Pci_Ruc',$ruc);
            $this->db->set('Pci_Lote',$lote);
            $this->db->set('idregion',$region);
            $this->db->set('Pci_DtoInt',$dpint);
            $this->db->set('Pci_Telefono',$tlf);
            $this->db->set('Pci_RazonSocial'," ");
            $this->db->set('iddistrito',$distrito);
            $this->db->set('idprovincia',$provincia);
            $this->db->set('Pci_Direccion',$direccion);
            $this->db->set('Pci_Referencia',$referencia);
            $this->db->set('Pci_Urbanizacion',$urbanizacion);
            $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
            $this->db->insert('pago_compra_info');


             // registro Detalle de la Compra
            if(!empty($arryCompraDetalle)) {
                foreach ($arryCompraDetalle as $Det_Compra) {   
                    $codigoEnvio='PMC'.$Det_Compra['id_tienda'].''.$Pac_IdPago_Compra;
                    $this->db->set('Pce_CodUbigeo',$distrito);
                    $this->db->set('Pce_CodigoEnvio',$codigoEnvio);
                    $this->db->set('Pce_IdSKU',$Det_Compra['id_sku']);
                    $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                    $this->db->set('Pce_IdTienda',$Det_Compra['id_tienda']);
                    $this->db->set('Pce_IdProducto',$Det_Compra['id_producto']);
                    $this->db->set('Pce_CostoEnvio',$Det_Compra['costoRealDetallado']);
                    $this->db->set('Pce_CantidadProd',$Det_Compra['cantidadProducto']);
                    $this->db->set('Pce_costoPorProducto',$Det_Compra['costoPorProductos']);
                    $this->db->insert('pago_compra_envio');
                }
            }    

            //registro detalle compra
            foreach($array_compra as $car) {   
                $tienda=$this->get_id_tienda_x_sku($car['id']);
                if($tienda_usuario) {
                    if($tienda_usuario!=$tienda->Tie_IdTienda) {
                        if ($Descuento == 0) {
                            $precio=$car['price'] / $car['qty'];
                            $precioImp=$car['price'];
                        }else{
                            $precio=$car['price_min'];
                            $precioImp=$car['price_min']*$car['qty'];
                        }
                        $this->db->set('Pcd_IdSKU',$car['id']);
                        $this->db->set('Pcd_Precio',$precio);
                        $this->db->set('Pcd_Cantidad',$car['qty']);
                        $this->db->set('Pcd_Importe',$precioImp);
                        $this->db->set('Pcd_Documento',$car['tipodoc']);
                        $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                        $this->db->insert('pago_compra_detalle');

                        $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
                        $this->db->from('sku');
                        $this->db->where('SKU_IdSKU',$car['id']);
                        $query = $this->db->get();
                        $stock = $query->row();


                        $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $car['qty']);
                        $this->db->set('SKU_Reservado', $stock->SKU_Reservado + $car['qty']);
                        $this->db->where('SKU_IdSKU', $car['id']);
                        $this->db->update('sku');

                    }
                } else {
                    if ($Descuento == 0) {
                        $precio=$car['price'] / $car['qty'];
                        $precioImp=$car['price'];
                    }else{
                        $precio=$car['price_min'];
                        $precioImp=$car['price_min']*$car['qty'];
                    }
                    $this->db->set('Pcd_Precio',$precio);
                    $this->db->set('Pcd_IdSKU',$car['id']);
                    $this->db->set('Pcd_Cantidad',$car['qty']);
                    $this->db->set('Pcd_Importe',$precioImp);
                    $this->db->set('Pcd_Documento',$car['tipodoc']);
                    $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                    $this->db->insert('pago_compra_detalle');
                    
                    $this->db->select('SKU_StockDisponible,SKU_StockReal,SKU_Reservado');
                    $this->db->from('sku');
                    $this->db->where('SKU_IdSKU',$car['id']);
                    $query = $this->db->get();
                    $stock = $query->row();


                    $this->db->set('SKU_StockDisponible', $stock->SKU_StockDisponible - $car['qty']);
                    $this->db->set('SKU_Reservado', $stock->SKU_Reservado +  $car['qty']);
                    $this->db->where('SKU_IdSKU', $car['id']);
                    $this->db->update('sku');
                }     
            }

            foreach($array_id_tienda as $Tie_IdTienda) {
                if($tienda_usuario) {
                    if($tienda_usuario!=$Tie_IdTienda) {
                        $this->db->set('Tie_IdTienda',$Tie_IdTienda);
                        $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                        $this->db->set('Pat_Monto',$array_price_tienda_total[$Tie_IdTienda]);
                        $this->db->insert('pago_tienda');
                    }
                } else {
                    $this->db->set('Tie_IdTienda',$Tie_IdTienda);
                    $this->db->set('Pac_IdPago_Compra',$Pac_IdPago_Compra);
                    $this->db->set('Pat_Monto',$array_price_tienda_total[$Tie_IdTienda]);
                    $this->db->insert('pago_tienda');
                }
            }

            $this->db->trans_complete();
            if($this->db->trans_status()) {
               return $Pac_IdPago_Compra;
            } else {
                return null;                
            }
        }

        function registroBusqueda($nombre_busqueda,$Usu_IdUsuario)
        {

            $this->db->set('Nombre',$nombre_busqueda); 
            $this->db->set('Usu_IdUsuario',$Usu_IdUsuario); 
            $this->db->insert('busqueda');

        }        

        function click_contacto($Pro_IdProducto)
        {
            $this->db->select('Pro_Contacto'); 
            $this->db->from('producto'); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $query = $this->db->get();
            $contacto = $query->row();

            $this->db->set('Pro_Contacto', $contacto->Pro_Contacto + 1); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $this->db->update('producto');

            return $contacto;

        }

        function registroVista($Pro_IdProducto)
        {
            $this->db->select('Pro_Vista'); 
            $this->db->from('producto'); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $query = $this->db->get();
            $vista = $query->row();
       
            $this->db->set('Pro_Vista', $vista->Pro_Vista + 1); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $this->db->update('producto');

            $this->db->select('Pro_Vista'); 
            $this->db->from('producto'); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $query = $this->db->get();
            return $query->row();            
        }

        function registroGrupal($Pro_IdProducto,$Usu_IdUsuario,$Sku_IdSku,$Prg_Grupo,$Prg_Precio,$variacion,$unidad,$color,$tipovariacion,$idtienda,$documento)
        {

            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $this->db->where('Prg_Grupo',$Prg_Grupo); 
            $this->db->where('Prg_Estado',0); 
            $this->db->from('producto_grupal'); 
            $grupo = $this->db->count_all_results();
            $gd = $Prg_Grupo-1;
            if ($Prg_Grupo > $gd) {
                $grupo = $grupo + 1;
            }
            if ($grupo <= $gd) {                
                $this->db->set('Pro_IdProducto',$Pro_IdProducto); 
                $this->db->set('Usu_IdUsuario',$Usu_IdUsuario); 
                $this->db->set('Sku_IdSku',$Sku_IdSku); 
                $this->db->set('Prg_Grupo',$Prg_Grupo); 
                $this->db->set('Prg_Precio',$Prg_Precio); 
                $this->db->set('Prg_Estado',0); 
                $this->db->set('Prg_Variacion',$variacion); 
                $this->db->set('Prg_Unidad',$unidad); 
                $this->db->set('Prg_Color',$color); 
                $this->db->set('Prg_TipoVar',$tipovariacion); 
                $this->db->set('Tie_IdTienda',$idtienda); 
                $this->db->set('Prg_Documento',$documento);
                $this->db->insert('producto_grupal');
                return 1;
            }elseif ($grupo > $gd) {
                
                $this->db->select('Prg_IdProducto_Grupal'); 
                $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
                $this->db->where('Prg_Grupo',$Prg_Grupo); 
                $this->db->where('Prg_Estado',1); 
                $this->db->from('producto_grupal');
                $query = $this->db->get();
                $UsuGrup = $query->result();

                foreach ($UsuGrup as $key => $value) {
                    $this->db->set('Prg_Estado', 3); 
                    $this->db->where('Prg_IdProducto_Grupal',$value->Prg_IdProducto_Grupal); 
                    $this->db->update('producto_grupal'); 

                }

                $this->db->set('Prg_Estado', 1); 
                $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
                $this->db->where('Prg_Grupo',$Prg_Grupo); 
                $this->db->update('producto_grupal'); 

                $this->db->set('Pro_IdProducto',$Pro_IdProducto); 
                $this->db->set('Usu_IdUsuario',$Usu_IdUsuario); 
                $this->db->set('Sku_IdSku',$Sku_IdSku); 
                $this->db->set('Prg_Grupo',$Prg_Grupo);
                $this->db->set('Prg_Precio',$Prg_Precio);
                $this->db->set('Prg_Estado',1);
                $this->db->set('Prg_Variacion',$variacion); 
                $this->db->set('Prg_Unidad',$unidad); 
                $this->db->set('Prg_Color',$color); 
                $this->db->set('Prg_TipoVar',$tipovariacion); 
                $this->db->set('Tie_IdTienda',$idtienda); 
                $this->db->set('Prg_Documento',$documento); 
                $this->db->insert('producto_grupal');
                return 2;          
            }
                  
        }

        function ventas_pro($Pro_IdProducto){
            $this->db->select('SUM(Pce_CantidadProd) as ventas'); 
            $this->db->from('pago_compra_envio'); 
            $this->db->where('Pce_IdProducto',$Pro_IdProducto); 
            $query = $this->db->get();
            return $query->row();
        }

        function grupal_usuario($Usu_IdUsuario,$Pro_IdProducto){
            $this->db->select('*'); 
            $this->db->from('producto_grupal'); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario); 
            // $this->db->where('Prg_Estado',1);
            $query = $this->db->get();
            return $query->row();
        }

        function grupal_usuario2($Usu_IdUsuario,$Pro_IdProducto){
            $this->db->select('*'); 
            $this->db->from('producto_grupal'); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario); 
            $query = $this->db->get();
            return $query->row();
        }

        function abandonarGrupo($Prg_IdProducto_Grupal){
            $this->db->where('Prg_IdProducto_Grupal', $Prg_IdProducto_Grupal);
            if ($this->db->delete('producto_grupal')) {
                return true;
            }
        }

        function nombre_productos()
        {
            $this->db->select('pro.Pro_IdProducto, pro.Pro_Nombre, (SELECT SUM(SKU_StockDisponible) FROM sku as sku WHERE sku.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as SKU_StockDisponible ,pro.Pro_Saldo,pro.Pro_Preventa');
            $this->db->from('producto as pro');
            $this->db->where('pro.Pro_PM',1);
            $this->db->having('SKU_StockDisponible >=', 3);
            $query = $this->db->get();
            return $query->result();        }

        function get_costo_envio($id_districts)
        {
            $this->db->select('a.Cos_CostoBase,a.Cos_CostoAdicional,c.Dia_DiaEnvio');
            $this->db->from('costo_envio as a');
            $this->db->join('districts as b','a.Cos_IdCostoEnvio = b.Cos_IdCostoEnvio');
            $this->db->join('dia_envio as c','c.Dia_idDiaEnvio = b.Dia_idDiaEnvio');
            $this->db->where('b.id',$id_districts);
            $query = $this->db->get();
            return $query->row();
        }

        function distrito_envio($id_districts)
        {
            $this->db->select('costo');
            $this->db->from('districts');
            $this->db->where('id',$id_districts);
            $query = $this->db->get();
            return $query->row();
        }

        function asignar_vendedor($Usu_IdUsuario)
        {
            $this->db->select('Usu_IdUsuario_Ven');
            $this->db->from('usuario');
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $query = $this->db->get();
            return $query->row();
        }

        // Consulta detalle de envio
        function getPago_Compra_Envio($Pac_IdPago_Compra)
        {
            
            $sql = "SELECT a.Pac_IdPago_Compra,a.Pce_IdTienda,a.Pce_CodigoEnvio,a.Pce_CodUbigeo,SUM(Pce_CostoEnvio) as PrecioEnvio,b.Tie_ruc_dni as ruc_tienda,b.Tie_Nombre as nombre_tienda,b.Tie_RazonSocial as razon_social_tienda,c.name as distrito,d.name as region,e.name as provincia,SUM(a.Pce_CantidadProd) as catidadProd,SUM(Pce_costoPorProducto) as PrecioPorProductos FROM `pago_compra_envio` as a INNER JOIN `tienda` as b ON(a.Pce_IdTienda=b.Tie_IdTienda) INNER JOIN `districts` as c ON(a.Pce_CodUbigeo=c.id) INNER JOIN `provinces` as e ON(c.region_id=e.id) INNER JOIN `regions` as d ON(e.region_id=d.id) WHERE a.Pac_IdPago_Compra=$Pac_IdPago_Compra GROUP BY  a.Pac_IdPago_Compra,a.Pce_IdTienda,a.Pce_CodigoEnvio,a.Pce_CodUbigeo,b.Tie_ruc_dni,b.Tie_Nombre,b.Tie_RazonSocial,c.name,d.name,e.name";
            $query = $this->db->query($sql);

            return $query->result();
        }

          // Consulta detalle de envio
        function getPago_Compra_Envios($Pac_IdPago_Compra,$Tie_IdTienda)
        {
            
            $sql = "SELECT a.Pac_IdPago_Compra,a.Pce_IdTienda,a.Pce_CodigoEnvio,a.Pce_CodUbigeo,SUM(Pce_CostoEnvio) as PrecioEnvio,b.Tie_ruc_dni as ruc_tienda,b.Tie_Nombre as nombre_tienda,b.Tie_RazonSocial as razon_social_tienda,c.name as distrito,d.name as region,e.name as provincia,SUM(a.Pce_CantidadProd) as catidadProd,SUM(Pce_costoPorProducto) as PrecioPorProductos FROM `pago_compra_envio` as a INNER JOIN `tienda` as b ON(a.Pce_IdTienda=b.Tie_IdTienda) INNER JOIN `districts` as c ON(a.Pce_CodUbigeo=c.id) INNER JOIN `provinces` as e ON(c.region_id=e.id) INNER JOIN `regions` as d ON(e.region_id=d.id) WHERE a.Pac_IdPago_Compra=$Pac_IdPago_Compra and b.Tie_IdTienda=$Tie_IdTienda  GROUP BY  a.Pac_IdPago_Compra,a.Pce_IdTienda,a.Pce_CodigoEnvio,a.Pce_CodUbigeo,b.Tie_ruc_dni,b.Tie_Nombre,b.Tie_RazonSocial,c.name,d.name,e.name";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function getDettaleProducto($Pac_IdPago_Compra,$Pce_IdTienda)
        {
            
            $sql = "SELECT b.Pro_Nombre,b.Pro_Caracteristicas,c.SKU_Nombre
                    FROM `pago_compra_envio` as a INNER JOIN `producto` as b ON(a.Pce_IdProducto=b.Pro_IdProducto) INNER JOIN `sku` as c ON(c.producto_Pro_IdProducto=b.Pro_IdProducto)
                    WHERE a.Pac_IdPago_Compra=$Pac_IdPago_Compra and a.Pce_IdTienda=$Pce_IdTienda group by b.Pro_Nombre,b.Pro_Caracteristicas,c.SKU_Nombre
                   ";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function getDettaleTienda($Pce_IdTienda)
        {
            
            $sql = "SELECT c.Per_Telefono,c.Per_Celular,c.Per_Nombre,c.Per_Dni,d.id as iddistrito,d.name as distrito,e.name as provincia,f.name as region,c.Per_Direccion
                    FROM `tienda` as a INNER JOIN `usuario` AS b ON(a.Tie_IdTienda=b.Tie_IdTienda) INNER JOIN `persona` AS c ON(c.Per_IdPersona=b.Per_IdPersona) LEFT JOIN `districts` AS d ON(d.id=c.Distrito_id) LEFT JOIN `provinces` AS e ON(e.id=c.Provincia_id) LEFT JOIN `regions` AS f ON(f.id=c.Region_id)
                    WHERE a.Tie_IdTienda=$Pce_IdTienda
                   ";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_espec_productos($idProductos) 
        {
            $sql = "SELECT a.Prf_Campo1 as medida,a.Prf_Campo3 as peso,a.producto_Pro_IdProducto as id
                    FROM `producto_ficha` as a 
                    WHERE a.producto_Pro_IdProducto in($idProductos)";
            $query = $this->db->query($sql);

            return $query->result();
        }
        
        function usuario_grupo($Usu_IdUsuario,$Pro_IdProducto)
        {
            $sql = "SELECT pro.Pro_Nombre, pro.Pro_IdProducto, usu.Usu_Correo, per.Per_Nombre, prg.Prg_Color,prg.Prg_Grupo, prg.Prg_Precio from producto_grupal as prg INNER JOIN producto as pro ON pro.Pro_IdProducto = prg.Pro_IdProducto INNER JOIN usuario as usu ON usu.Usu_IdUsuario = prg.Usu_IdUsuario INNER JOIN persona as per ON per.Per_IdPersona = usu.Per_IdPersona WHERE prg.Usu_IdUsuario = $Usu_IdUsuario and pro.Pro_IdProducto = $Pro_IdProducto";
            $query = $this->db->query($sql);

            return $query->row();
        }

        function usuarioGrupoCompleto($Pro_IdProducto,$Prg_Grupo){
            
            $this->db->select('pro.Pro_Nombre, pro.Pro_IdProducto, usu.Usu_Correo, per.Per_Nombre, prg.Prg_Color,prg.Prg_Grupo, prg.Prg_Precio'); 
            $this->db->from('producto_grupal as prg');
            $this->db->join('producto as pro','ON pro.Pro_IdProducto = prg.Pro_IdProducto');
            $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = prg.Usu_IdUsuario');
            $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona');
            $this->db->where('prg.Prg_Grupo',$Prg_Grupo); 
            $this->db->where('prg.Prg_Estado',1); 
            $this->db->where('prg.Pro_IdProducto',$Pro_IdProducto); 
            $query = $this->db->get();
            return $query->result();
        }
        
        function producto_tienda_lista($Tie_IdTienda){
             $sql = "SELECT pro.Pro_Nombre, pro.Pro_PrecioMaximo, pro.Pro_Estado, pro.Pro_PrecioMinimo, (SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto = pro.Pro_IdProducto LIMIT 1) as Prf_Img , sku.SKU_IdSKU, sku.SKU_Color, sku.SKU_StockDisponible, sku.SKU_Img FROM producto as pro INNER JOIN producto_tienda as prt ON prt.Pro_IdProducto = pro.Pro_IdProducto INNER JOIN sku as sku ON sku.producto_Pro_IdProducto = pro.Pro_IdProducto  WHERE prt.Tie_IdTienda = $Tie_IdTienda ORDER BY pro.Pro_Vista DESC";
            $query = $this->db->query($sql);

            return $query->result();
        }

        function get_productos_contraentrega($where){
            $sql = "SELECT pro.Pro_IdProducto, pro.Pro_Nombre,prf.Prf_Campo1,prf.Prf_Campo3
                FROM producto as pro
                INNER JOIN producto_ficha AS prf ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto 
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto $where";
                $query = $this->db->query($sql);

                return $query->result();
        }

        function get_sku_contraentrega($Pro_IdProducto){
            $sql = "SELECT SKU_IdSKU, SKU_Color FROM sku WHERE producto_Pro_IdProducto = $Pro_IdProducto";
                $query = $this->db->query($sql);

                return $query->result();
        }
    }
?>