<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

    class Configuracion_model extends CI_Model
    {
        private $nombre_tabla = 'configuracion';

        function __construct()
        {
            parent::__construct();
        }        

        function configuracion()
        {
            $this->db->select('*');
            $this->db->from($this->nombre_tabla);

            return $this->db->get()->row();
        }                      

        function get_colores()
        {
            $this->db->select('*');
            $this->db->from('colores');

            $query = $this->db->get();

            return $query->result();
        }                

        function tienda()
        {
            $this->db->select('*');
            $this->db->from('tienda');

            return $this->db->get()->row();
        }

        function registrarColor($colorHex, $colorHex2, $Tie_IdTienda){
            $this->db->set('Con_ColorHexa', $colorHex);
            $this->db->set('Con_ColorBtn', $colorHex2);
            $this->db->set('Tienda_Tie_IdTienda', $Tie_IdTienda);
            $this->db->insert('configuracion');
        }

        function registro_vendedor($nombre,$ruc,$giro,$dir,$correo,$tlf,$pago){
            $this->db->set('Pve_Nombre', $nombre);
            $this->db->set('Pve_Ruc', $ruc);
            $this->db->set('Pve_Giro', $giro);
            $this->db->set('Pve_Direccion', $dir);
            $this->db->set('Pve_Correo', $correo);
            $this->db->set('Pve_Telefono', $tlf);
            $this->db->set('Pve_Pago', $pago);
            $this->db->insert('posible_vendedores');
            return true;
        }

        function registrar_reclamo($nombre,$di,$dir,$correo,$tlf,$qqr,$qte,$monto,$problema,$solucion){
            $this->db->set('Rec_Nombre', $nombre);
            $this->db->set('Rec_Di', $di);
            $this->db->set('Rec_Direccion', $dir);
            $this->db->set('Rec_Correo', $correo);
            $this->db->set('Rec_Telefono', $tlf);
            $this->db->set('Rec_QQR', $qqr);
            $this->db->set('Rec_QTE', $qte);
            $this->db->set('Rec_Monto', $monto);
            $this->db->set('Rec_Problema', $problema);
            $this->db->set('Rec_Solucion', $solucion);
            if ($this->db->insert('reclamos'))
            {
                $Rec_IdReclamo = $this->db->insert_id();
            };
            return $Rec_IdReclamo;
        }

        function confiTienda($dep, $cat, $Tie_IdTienda, $gal, $imagenSlider){
            $this->db->set('Tie_Departamento', $dep);
            $this->db->set('Tie_Categoria', $cat);
            $this->db->set('Tie_Galeria', $gal);
            $this->db->set('Tie_Header', $imagenSlider);
            $this->db->where('Tie_IdTienda', $Tie_IdTienda);
            $this->db->update('tienda');
        }

        function get_coloresProducto()
        {
            $this->db->select('col.Col_Hex, sku.SKU_Color, sku.producto_Pro_IdProducto');
            $this->db->from('sku as sku');  
            $this->db->join('colores as col','col on col.Col_Nombre = sku.SKU_Color');  
            //$this->db->group_by('');
            $query = $this->db->get();
            return $query->result();
        }

        function get_coloresProducto2($Pro_IdProducto)
        {
            $this->db->select('col.Col_Hex, sku.SKU_Color, col.Col_Nombre');
            $this->db->from('sku as sku');  
            $this->db->join('producto_tienda as prt','prt on prt.Pro_IdProducto = sku.producto_Pro_IdProducto');  
            $this->db->join('colores as col','col on col.Col_Nombre = sku.SKU_Color');  
            $this->db->where('prt.Pro_IdProducto',$Pro_IdProducto); 
            //$this->db->group_by('');
            $query = $this->db->get();
            return $query->result();
        }

        function editCategoria($Cat_Id, $nombre_cat){
            $this->db->set('Cat_Nombre', $nombre_cat);
            $this->db->where('Cat_IdCategoria', $Cat_Id);
            $this->db->update('categoriap');
            return true;
        }

        function editSuc($Suc_Id, $nombre_Suc){
            $this->db->set('Suc_Nombre', $nombre_Suc);
            $this->db->where('Suc_IdSubCategoria', $Suc_Id);
            $this->db->update('subcategoriap');
            return true;
        }

        function editDes($Des_Id, $nombre_Des){
            $this->db->set('Des_Nombre', $nombre_Des);
            $this->db->where('Des_IdDetalle_SubCategoria', $Des_Id);
            $this->db->update('detalle_subcategoriap');
            return true;
        }
    }
?>