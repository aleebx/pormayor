<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Grupal_model extends CI_Model
    {
        private $nombre_tabla = 'producto_grupal';

        function __construct()
        {
            parent::__construct();
        }

        function get_grupal(){
           $this->db->select('pro.Pro_Nombre, per.Per_Nombre, per.Per_Telefono, prg.Prg_Grupo, prg.Prg_Precio,prg.Prg_Estado');
           $this->db->from('producto_grupal as prg');        
           $this->db->join('producto as pro','ON pro.Pro_IdProducto = prg.Pro_IdProducto');        
           $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = prg.Usu_IdUsuario');        
           $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona');        

           $query = $this->db->get();

           return $query->result();        
        }

        function get_grupos_total(){
          $this->db->select('gru.Gru_IdGrupo,Gru_Estado,Tie_IdTienda,Gru_PrecioInicial,Gru_PrecioFinal,Fecha_Creacion,Fecha_Fin,gru.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img,pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_Vista, grp.Usu_IdUsuario'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->join('producto as pro','ON pro.Pro_IdProducto = gru.Pro_IdProducto'); 
          $this->db->join('producto_foto as prf','ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto');
          $this->db->where('gru.Gru_Estado',0); 
          $this->db->group_by('gru.Gru_IdGrupo');
          $query = $this->db->get();
          return $query->result(); 
        }

        function get_misgrupos($Usu_IdUsuario){
          $this->db->select('gru.Gru_IdGrupo,Gru_Estado,Tie_IdTienda,Gru_PrecioInicial,Gru_PrecioFinal,Fecha_Creacion,Fecha_Fin,gru.Pro_IdProducto, pro.Pro_Nombre, pro.Pro_Oferta, pro.Pro_PrecioRango, prf.Prf_Thumb, prf.Prf_Img,pro.Pro_PrecioMinimo, pro.Pro_PrecioMaximo,pro.Pro_Vista, grp.Usu_IdUsuario'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->join('producto as pro','ON pro.Pro_IdProducto = gru.Pro_IdProducto'); 
          $this->db->join('producto_foto as prf','ON prf.producto_Pro_IdProducto = pro.Pro_IdProducto'); 
          $this->db->where('grp.Usu_IdUsuario',$Usu_IdUsuario);
          $this->db->group_by('gru.Gru_IdGrupo');
          $query = $this->db->get();
          return $query->result(); 
        }

        function get_grupo($Pro_IdProducto){
          $this->db->select('gru.Gru_IdGrupo,Pro_IdProducto,Gru_Estado,Tie_IdTienda,Gru_PrecioInicial,Gru_PrecioFinal,Fecha_Creacion,Fecha_Fin, count(grp.Usu_IdUsuario) as gruperos'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->where('gru.Pro_IdProducto',$Pro_IdProducto); 
          $this->db->where('gru.Gru_Estado = 0'); 
          $this->db->group_by('gru.Gru_IdGrupo');
          $query = $this->db->get();
          return $query->row(); 
        }

        function get_count_gruperos(){
          $this->db->select('pro.Pro_IdProducto, count(grp.Usu_IdUsuario) as gruperos'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->join('producto as pro','ON pro.Pro_IdProducto = gru.Pro_IdProducto');
          $this->db->where('gru.Gru_Estado',0);
          $this->db->group_by('gru.Gru_IdGrupo');
          $query = $this->db->get();
          return $query->result(); 
        }

        function get_gruperos(){
          $this->db->select('pro.Pro_IdProducto, grp.Usu_IdUsuario'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->join('producto as pro','ON pro.Pro_IdProducto = gru.Pro_IdProducto');
          $this->db->where('gru.Gru_Estado',0);
          $this->db->order_by('gru.Pro_IdProducto');
          $query = $this->db->get();
          return $query->result(); 
        }

        function get_grupero($Usu_IdUsuario,$Pro_IdProducto){
          $this->db->select('gru.Gru_IdGrupo'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->where('gru.Pro_IdProducto', $Pro_IdProducto); 
          $this->db->where('grp.Usu_IdUsuario', $Usu_IdUsuario); 
          $query = $this->db->get();
          return $query->row(); 
        }

        function update_estado($Gru_IdGrupo){
          $this->db->set('Gru_Estado',1);
          $this->db->where('Gru_IdGrupo',$Gru_IdGrupo); 
          $this->db->update('grupo');
        }

        function get_gruperos_count($Gru_IdGrupo){
          $this->db->select('gru.Pro_IdProducto, count(grp.Usu_IdUsuario) as gruperos'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->where('grp.Gru_IdGrupo', $Gru_IdGrupo); 
          $this->db->where('gru.Gru_Estado = 0'); 
          $this->db->group_by('gru.Gru_IdGrupo');
          $query = $this->db->get();
          $ng = $query->row();

          $this->db->select('*');
          $this->db->from('producto_precios');
          $this->db->where('producto_Pro_IdProducto',$ng->Pro_IdProducto);
          $this->db->order_by('Prp_Desde', 'ASC');            
          $query = $this->db->get();
          $Precios = $query->result(); 
          foreach ($Precios as $key => $value) {
            if ($value->Prp_Desde <= $ng->gruperos and $value->Prp_A >= $ng->gruperos) {
              $precio = $value->Prp_Precios;
            }
          }
          $this->db->select('Gru_PrecioFinal');
          $this->db->from('grupo');
          $this->db->where('Gru_IdGrupo',$Gru_IdGrupo);
          $query = $this->db->get();
          $pg = $query->row();
          if ($pg->Gru_PrecioFinal == $precio) {
            return 0;
          }else{
            return $precio;
          }

        }

        function usuario_grupo($Usu_IdUsuario,$Pro_IdProducto)
        {
          $this->db->select('pro.Pro_Nombre, pro.Pro_IdProducto, gru.Gru_IdGrupo, usu.Usu_Correo, per.Per_Nombre,gru.Gru_PrecioInicial, grp.Grp_IdGrupero,grp.Grp_Color, gru.Gru_PrecioFinal, gru.Gru_Estado, gru.Fecha_Fin,grp.Sku_IdSku,grp.Grp_Variacion,grp.Grp_Unidad,grp.Grp_TipoVar,(SELECT Prf_Img FROM producto_foto prf WHERE prf.producto_Pro_IdProducto=pro.Pro_IdProducto LIMIT 1) as Prf_Img, grp.Grp_Documento,gru.Tie_IdTienda'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->join('producto as pro','ON pro.Pro_IdProducto = gru.Pro_IdProducto'); 
          $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = grp.Usu_IdUsuario'); 
          $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona');
          $this->db->where('grp.Usu_IdUsuario', $Usu_IdUsuario); 
          $this->db->where('gru.Pro_IdProducto', $Pro_IdProducto); 
          $query = $this->db->get();
          return $query->row(); 
        }

        function mail_gruperos_update_precio($Gru_IdGrupo)
        {
          $this->db->select('pro.Pro_Nombre, pro.Pro_IdProducto, usu.Usu_Correo, per.Per_Nombre, grp.Grp_IdGrupero,grp.Grp_Color, gru.Gru_PrecioInicial,gru.Gru_PrecioFinal, gru.Gru_Estado, gru.Fecha_Fin,grp.Sku_IdSku,grp.Grp_Variacion,grp.Grp_Unidad,grp.Grp_TipoVar,grp.Grp_Documento,gru.Tie_IdTienda'); 
          $this->db->from('grupo as gru'); 
          $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
          $this->db->join('producto as pro','ON pro.Pro_IdProducto = gru.Pro_IdProducto'); 
          $this->db->join('usuario as usu','ON usu.Usu_IdUsuario = grp.Usu_IdUsuario'); 
          $this->db->join('persona as per','ON per.Per_IdPersona = usu.Per_IdPersona'); 
          $this->db->where('grp.Gru_IdGrupo', $Gru_IdGrupo); 
          $query = $this->db->get();
          return $query->result(); 
        }

        function registrarGrupo($Pro_IdProducto,$Usu_IdUsuario,$Sku_IdSku,$variacion,$unidad,$color,$tipovariacion,$idtienda,$documento){
            
            $this->db->select('Gru_IdGrupo'); 
            $this->db->from('grupo'); 
            $this->db->where('Pro_IdProducto',$Pro_IdProducto); 
            $this->db->where('Gru_Estado',0); 
            $this->db->group_by('Pro_IdProducto'); 
            $query = $this->db->get();
            $Gru_IdGrupo = $query->row();
            if ($Gru_IdGrupo) {
              $this->db->set('Gru_IdGrupo',$Gru_IdGrupo->Gru_IdGrupo); 
              $this->db->set('Usu_IdUsuario',$Usu_IdUsuario); 
              $this->db->set('Sku_IdSku',$Sku_IdSku); 
              $this->db->set('Grp_Cantidad',1); 
              $this->db->set('Grp_Variacion',$variacion); 
              $this->db->set('Grp_Unidad',$unidad); 
              $this->db->set('Grp_Color',$color); 
              $this->db->set('Grp_TipoVar',$tipovariacion); 
              $this->db->set('Grp_Documento',$documento);
              if ($this->db->insert('grupero')){
                $Grp_IdGrupero = $this->db->insert_id();
              }
            $this->db->select('count(grp.Usu_IdUsuario) as gruperos'); 
            $this->db->from('grupo as gru'); 
            $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
            $this->db->where('gru.Pro_IdProducto', $Pro_IdProducto); 
            $this->db->where('gru.Gru_Estado = 0'); 
            $this->db->group_by('gru.Gru_IdGrupo');
            $query = $this->db->get();
            $ng = $query->row();

            $this->db->select('Gru_PrecioFinal');
            $this->db->from('grupo');
            $this->db->where('Gru_IdGrupo',$Gru_IdGrupo->Gru_IdGrupo);
            $query = $this->db->get();
            $pg = $query->row();

            $this->db->select('*');
            $this->db->from('producto_precios');
            $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);
            $this->db->order_by('Prp_Desde', 'ASC');            
            $query = $this->db->get();
            $Precios = $query->result(); 
              foreach ($Precios as $key => $value) {
                if ($value->Prp_Desde <= $ng->gruperos and $value->Prp_A >= $ng->gruperos) {
                  if ($pg->Gru_PrecioFinal != $value->Prp_Precios) {
                    $this->db->set('Gru_PrecioFinal',$value->Prp_Precios);
                    $this->db->where('Gru_IdGrupo',$Gru_IdGrupo->Gru_IdGrupo); 
                    $this->db->update('grupo');
                    return $Gru_IdGrupo->Gru_IdGrupo;
                  }
                  else{
                    $e = "mismo";
                    return $e;
                  }
                }
              }
            }else{
              $this->db->select('Pro_PrecioMaximo'); 
              $this->db->from('producto'); 
              $this->db->where('Pro_IdProducto',$Pro_IdProducto);
              $query = $this->db->get();
              $PrecioInicial = $query->row();

              $FechaCreacion = date('Y-m-d H:i:s');
              $FechaFin = date('Y-m-d H:i:s', strtotime($FechaCreacion . ' +2 day'));

              $this->db->set('Pro_IdProducto',$Pro_IdProducto); 
              $this->db->set('Gru_Estado',0); 
              $this->db->set('Tie_IdTienda',$idtienda); 
              $this->db->set('Gru_PrecioInicial',$PrecioInicial->Pro_PrecioMaximo); 
              $this->db->set('Gru_PrecioFinal',$PrecioInicial->Pro_PrecioMaximo);
              $this->db->set('Fecha_Creacion',$FechaCreacion);
              $this->db->set('Fecha_Fin',$FechaFin);
              if ($this->db->insert('grupo')){
                $Gru_IdGrupo = $this->db->insert_id();
              }
              $this->db->set('Gru_IdGrupo',$Gru_IdGrupo); 
              $this->db->set('Usu_IdUsuario',$Usu_IdUsuario); 
              $this->db->set('Sku_IdSku',$Sku_IdSku); 
              $this->db->set('Grp_Cantidad',1); 
              $this->db->set('Grp_Variacion',$variacion); 
              $this->db->set('Grp_Unidad',$unidad); 
              $this->db->set('Grp_Color',$color); 
              $this->db->set('Grp_TipoVar',$tipovariacion); 
              $this->db->set('Grp_Documento',$documento);
              if ($this->db->insert('grupero')){
                $Grp_IdGrupero = $this->db->insert_id();
              }
              $e = "nuevo";
              return $e;
            }
        }

        function abandonarGrupo($Grp_IdGrupero,$Pro_IdProducto,$Gru_IdGrupo){
          $this->db->where('Grp_IdGrupero', $Grp_IdGrupero);
          if ($this->db->delete('grupero')) {              
            $this->db->select('count(grp.Usu_IdUsuario) as gruperos'); 
            $this->db->from('grupo as gru'); 
            $this->db->join('grupero as grp','ON grp.Gru_IdGrupo = gru.Gru_IdGrupo'); 
            $this->db->where('gru.Pro_IdProducto', $Pro_IdProducto);
            $this->db->group_by('gru.Gru_IdGrupo');
            $query = $this->db->get();
            $ng = $query->row();
              if ($ng){
                $this->db->select('*');
                $this->db->from('producto_precios');
                $this->db->where('producto_Pro_IdProducto',$Pro_IdProducto);
                $this->db->order_by('Prp_Desde', 'ASC');            
                $query = $this->db->get();
                $Precios = $query->result(); 
                foreach ($Precios as $key => $value) {
                  if ($value->Prp_Desde <= $ng->gruperos and $value->Prp_A >= $ng->gruperos) {
                    $this->db->set('Gru_PrecioFinal',$value->Prp_Precios);
                    $this->db->where('Gru_IdGrupo',$Gru_IdGrupo); 
                    $this->db->update('grupo'); 
                  }
                }
                return true;                 
              }else{
                $this->db->where('Gru_IdGrupo', $Gru_IdGrupo);
                 $this->db->delete('grupo');
              }
          }
        }
    }
?>