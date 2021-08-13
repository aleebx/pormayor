<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Tienda_model extends CI_Model
    {
        private $nombre_tabla = 'tienda';

        function __construct()
        {
            parent::__construct();
        }

        function get_tienda($Tie_IdTienda)
        {
            $this->db->select('Tie_Subdominio');
            $this->db->from('tienda');
            $this->db->where('Tie_IdTienda', $Tie_IdTienda);            

            $query = $this->db->get();

            return $query->row();
        }        

        function get_tienda_info()
        {
            $this->db->select('*');
            $this->db->from('tienda');       

            return $this->db->get()->row();
        } 

        function get_tiendas_gestor($Usu_IdUsuario)
        {
            $this->db->select('tie.Tie_Nombre,tie.Tie_IdTienda,tie.Tie_Subdominio,tie.Tie_FechaRegistro,tie.Tie_RazonSocial, usu.Usu_Correo,per.Per_Nombre,per.Per_Telefono,per.Per_Celular,usu.Usu_LastLogin');
            $this->db->from('tienda AS tie');       
            $this->db->join('gestor_tienda AS get','get ON get.Codigo=tie.Codigo');
            $this->db->join('usuario AS usu','usu ON usu.Tie_IdTienda=tie.Tie_IdTienda');
            $this->db->join('persona AS per','per ON per.Per_IdPersona=usu.Per_IdPersona');
            $this->db->where('get.Usu_IdUsuario',$Usu_IdUsuario);       
            return $this->db->get()->result();
        }

        function get_tiendas_vista_admin()
        {
            $this->db->select('tie.Tie_Nombre,tie.Tie_IdTienda,tie.Tie_Subdominio,tie.Tie_FechaRegistro,tie.Tie_RazonSocial, usu.Usu_Correo,per.Per_Nombre,per.Per_Telefono,per.Per_Celular,tie.Tie_Estado');
            $this->db->from('tienda as tie');
            $this->db->join('usuario as usu','usu ON usu.Tie_IdTienda=tie.Tie_IdTienda');
            $this->db->join('persona as per','per ON per.Per_IdPersona=usu.Per_IdPersona');    
            return $this->db->get()->result();
        }

        function get_tiendas_meses($Usu_IdUsuario)
        {
            $this->db->select('tie.Tie_FechaRegistro');
            $this->db->from('tienda AS tie');       
            $this->db->join('gestor_tienda AS get','get ON get.Codigo=tie.Codigo');       
            $this->db->where('get.Usu_IdUsuario',$Usu_IdUsuario);       
            $this->db->group_by('MONTH(tie.Tie_FechaRegistro)');       
            return $this->db->get()->result();
        } 

        function get_producto_tienda($Usu_IdUsuario)
        {
            $sql="SELECT tie.Tie_IdTienda,COUNT(prt.Tie_IdTienda) AS Cantidad FROM tienda AS tie INNER JOIN gestor_tienda AS gti ON gti.Codigo=tie.Codigo LEFT JOIN producto_tienda AS prt ON prt.Tie_IdTienda=tie.Tie_IdTienda WHERE gti.Usu_IdUsuario=$Usu_IdUsuario GROUP BY tie.Tie_IdTienda";
            $query = $this->db->query($sql);
            return $query->result();
        } 

        function vistas_contacto()
        {
            $sql="SELECT tie.Tie_IdTienda,tie.Tie_Nombre,per.Per_Nombre,usu.Usu_Correo,count(prt.Pro_IdProducto) AS NProducto,sum(pro.Pro_Vista) AS Vistas, sum(pro.Pro_Contacto) AS Contacto 
                FROM producto AS pro
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto = pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda = prt.Tie_IdTienda 
                INNER JOIN usuario AS usu ON usu.Tie_IdTienda = tie.Tie_IdTienda
                INNER JOIN persona AS per ON per.Per_IdPersona = usu.Per_IdPersona
                GROUP BY tie.Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->result();
        } 

        function get_tienda_info_acuerdo($Tie_IdTienda)
        {
            $sql="SELECT tie.Tie_Nombre, per.Per_Telefono, lod.Loc_Direccion, per.Per_Correo
                FROM tienda AS tie
                INNER JOIN usuario AS usu ON usu.Tie_IdTienda=$Tie_IdTienda
                INNER JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona
                LEFT JOIN local AS loc ON loc.tienda_Tie_IdTienda=$Tie_IdTienda
                LEFT JOIN local_direccion lod ON lod.local_Loc_IdLocal=loc.Loc_IdLocal
                WHERE tie.Tie_IdTienda=$Tie_IdTienda";
            $query = $this->db->query($sql);
            return $query->row();
        } 

        function get_producto_tienda_admin()
        {
            $sql="SELECT tie.Tie_IdTienda,COUNT(prt.Tie_IdTienda) AS Cantidad 
                FROM tienda AS tie 
                LEFT JOIN producto_tienda AS prt ON prt.Tie_IdTienda=tie.Tie_IdTienda GROUP BY tie.Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->result();
        } 

        function get_ventas_tienda($Usu_IdUsuario)
        {
            $sql="SELECT tie.Tie_IdTienda,COUNT(ven.Tie_IdTienda) AS Cantidad 
                FROM tienda AS tie 
                INNER JOIN gestor_tienda AS gti ON gti.Codigo=tie.Codigo 
                LEFT JOIN venta AS ven ON ven.Tie_IdTienda=tie.Tie_IdTienda 
                WHERE gti.Usu_IdUsuario=$Usu_IdUsuario GROUP BY tie.Tie_IdTienda";
            $query = $this->db->query($sql);
            return $query->result();
        } 

        function get_ventas_tienda_admin()
        {
            $sql="SELECT tie.Tie_IdTienda,COUNT(ven.Tie_IdTienda) AS Cantidad 
                FROM tienda AS tie 
                LEFT JOIN venta AS ven ON ven.Tie_IdTienda = tie.Tie_IdTienda 
                GROUP BY tie.Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->result();
        } 

        function calificaciones($Tie_Subdominio)
        {
            $this->db->select('*');
            $this->db->from('califica_compra AS cac');       
            $this->db->join('tienda AS tie','tie ON tie.Tie_IdTienda = cac.Tie_IdTienda');       
            $this->db->where('tie.Tie_Subdominio',$Tie_Subdominio);
            $query=$this->db->get();
            return $query->result();
        }

        function ventas_concretadas($Tie_IdTienda)
        {
            $this->db->where('Tie_IdTienda',$Tie_IdTienda);
            $this->db->where('Ven_Estado',3);
            $this->db->from('venta');
            $TotalVentas=$this->db->count_all_results();
            return $TotalVentas;
        }

        function get_clientes($Usu_IdUsuario)
        {
            $this->db->select('*');
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->from('clientes_gestor');
            $query=$this->db->get();
            return $query->result();
        }

        function get_notas($Usu_IdUsuario)
        {
            $this->db->select('*');
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->from('nota');
            $query=$this->db->get();
            return $query->result();
        }

        function get_actividades($Usu_IdUsuario)
        {
            $this->db->select('*');
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->from('actividad_gestor');
            $query = $this->db->get();
            return $query->result();
        }

        function productos_top()
        {
            $sql="SELECT tie.Tie_IdTienda,tie.Tie_Nombre,pro.Pro_Nombre,pro.Pro_Vista,pro.Pro_Contacto 
                FROM producto AS pro
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=prt.Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function reputacion($Tie_IdTienda)
        {
            $this->db->select('Cal_Tienda');
            $this->db->from('califica_compra');
            $this->db->where('Tie_IdTienda',$Tie_IdTienda);
            $query=$this->db->get();
            $calificaciones=$query->result();

            $this->db->where('Tie_IdTienda',$Tie_IdTienda);
            $this->db->from('califica_compra');
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

        function get_Tiendas()
        {
            $sql="SELECT * FROM $this->nombre_tabla tie  ORDER BY Tie_Nombre ASC";
            $query=$this->db->query($sql);
            return $query->result();
        }
        function get_Tiendas2($condicion="WHERE tie.Tie_Logo != ' ' GROUP BY tie.Tie_IdTienda ORDER BY tie.Tie_Nombre ASC", $limit="")
        {
            $sql = "SELECT * FROM $this->nombre_tabla tie 
            LEFT JOIN tienda_detalle tid ON tid.tienda_Tie_IdTienda = tie.Tie_IdTienda 
            LEFT JOIN (SELECT Loc_IdLocal,tienda_Tie_IdTienda FROM local GROUP BY tienda_Tie_IdTienda) loc ON loc.tienda_Tie_IdTienda = tie.Tie_IdTienda 
            LEFT JOIN local_direccion lod ON lod.local_Loc_IdLocal = loc.Loc_IdLocal 
            INNER JOIN producto_tienda prt ON prt.Tie_IdTienda = tie.Tie_IdTienda 
            $condicion $limit";
            $query = $this->db->query($sql);
            return $query->result();
        }
      
        function get_Tiendas4($condicion="", $limit="")
        {
            $sql = "SELECT tie.Tie_IdTienda ,tie.Tie_Nombre,tie.Tie_RazonSocial,tie.Tie_Logo,tie.Tie_Subdominio,tie.Tie_Descripcion, lod.Loc_Direccion, tie.Tie_IdTienda, COUNT(*) AS nro FROM $this->nombre_tabla tie 
            LEFT JOIN tienda_detalle tid ON tid.tienda_Tie_IdTienda = tie.Tie_IdTienda 
            LEFT JOIN (SELECT Loc_IdLocal,tienda_Tie_IdTienda FROM local GROUP BY tienda_Tie_IdTienda) loc ON loc.tienda_Tie_IdTienda = tie.Tie_IdTienda 
            LEFT JOIN local_direccion lod ON lod.local_Loc_IdLocal = loc.Loc_IdLocal 
            INNER JOIN producto_tienda prt ON prt.Tie_IdTienda = tie.Tie_IdTienda 
            WHERE tie.Tie_Logo != ' ' AND tie.Tie_IdTienda != 7 GROUP BY tie.Tie_IdTienda HAVING nro > 3 ORDER BY RAND() LIMIT 8";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_Tiendas5($condicion="",$limit="")
        {
            $sql="SELECT tie.Tie_IdTienda,tie.Tie_Nombre,tie.Tie_RazonSocial,tie.Tie_Logo,tie.Tie_Subdominio,tie.Tie_Descripcion,tie.Tie_Categoria,lod.Loc_Direccion,tie.Tie_IdTienda,COUNT(*) AS nro
                FROM tienda AS tie 
                LEFT JOIN tienda_detalle tid ON tid.tienda_Tie_IdTienda=tie.Tie_IdTienda 
                LEFT JOIN (SELECT Loc_IdLocal,tienda_Tie_IdTienda FROM local GROUP BY tienda_Tie_IdTienda) loc ON loc.tienda_Tie_IdTienda=tie.Tie_IdTienda 
                LEFT JOIN local_direccion lod ON lod.local_Loc_IdLocal=loc.Loc_IdLocal 
                LEFT JOIN producto_tienda prt ON prt.Tie_IdTienda=tie.Tie_IdTienda 
                WHERE tie.Tie_Logo!=' ' GROUP BY Tie_IdTienda ORDER BY nro DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }


        function get_Tiendas3_cantidad($condicion="ORDER BY tie.Tie_Nombre ASC", $limit="")
        {
            $sql="SELECT COUNT(tie.Tie_IdTienda) AS Cantidad FROM $this->nombre_tabla tie WHERE tie.Tie_Logo!='' $condicion $limit";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function get_cantidad_tiendas_x_region()
        {
            $sql="SELECT reg.id,reg.name,COUNT(*) AS Cantidad
                FROM tienda tie
                INNER JOIN regions reg ON tie.Tie_Departamento=reg.id
                GROUP BY tie.Tie_Departamento ORDER BY Cantidad DESC";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_tiendas_x_categoria($Cat_IdCategoria,$where="",$order="",$limit="")
        {
            $sql="SELECT prt.Tie_IdTienda,COUNT(prt.Tie_IdTienda) AS cantidad,tie.*
                    FROM producto_tienda prt
                    INNER JOIN producto pro ON pro.Pro_IdProducto=prt.Pro_IdProducto
                    INNER JOIN tienda tie ON tie.Tie_IdTienda=prt.Tie_IdTienda
                    INNER JOIN producto_categoria prc ON prc.producto_Pro_IdProducto=pro.Pro_IdProducto
                    WHERE prc.Cat_IdCategoria=$Cat_IdCategoria $where
                    GROUP BY prt.Tie_IdTienda $order  $limit";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_tiendas_x_categoria_main($Cat_IdCategoria)
        {
            $sql="SELECT tie.Tie_Categoria FROM tienda AS tie WHERE tie.Tie_Categoria=$Cat_IdCategoria AND tie.Tie_Logo!=''";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_tiendas_x_departamento_main($Tie_Departamento)
        {
            $sql="SELECT tie.Tie_Departamento FROM tienda AS tie WHERE tie.Tie_Departamento=$Tie_Departamento AND tie.Tie_Logo!=''";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_tienda_x_id($Tie_IdTienda)
        {
            $sql="SELECT * FROM $this->nombre_tabla WHERE Tie_IdTienda=$Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function get_cantidad_tiendas($where='')
        {
            $sql="SELECT count(Tie_IdTienda) as Cantidad FROM tienda WHERE Tie_Estado=1 ".$where."";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function get_tiendas_adm2($where='',$limit='')
        {
            $sql="SELECT tie.Tie_IdTienda,tie.Tie_Nombre,tie.Tie_FechaRegistro,tie.Tie_Cuota,tie.Pla_IdPlan,tie.Tie_Estado,tie.Tie_CicloFacturacion,(SELECT per.Per_Nombre FROM usuario usu INNER JOIN persona per ON per.Per_IdPersona=usu.Per_IdPersona WHERE usu.Rol_IdRol=2 AND usu.Tie_IdTienda=tie.Tie_IdTienda LIMIT 1) as Duenio,tie.Tie_Logo
                FROM tienda tie ".$where." ".$limit."";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_tiendas_adm($where='',$limit='')
        {
            $sql="SELECT tie.Tie_Nombre,tie.Tie_IdTienda,lod.Loc_Direccion,tie.Tie_Subdominio,tie.Tie_FechaRegistro,tie.Tie_RazonSocial,usu.Usu_Correo,per.Per_Nombre,per.Per_Telefono,per.Per_Celular,tie.Tie_Cuota,tie.Pla_IdPlan,tie.Tie_Estado,tie.Tie_CicloFacturacion,tie.Tie_Logo
                FROM tienda AS tie
                INNER JOIN usuario AS usu ON usu.Tie_IdTienda=tie.Tie_IdTienda
                LEFT JOIN local AS loc ON loc.tienda_Tie_IdTienda=tie.Tie_IdTienda
                LEFT JOIN local_direccion AS lod ON lod.local_Loc_IdLocal=loc.Loc_IdLocal
                INNER JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona ".$where." ".$limit."";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_tiendas_contacto($where='',$limit='')
        {
            $sql="SELECT tie.Tie_Nombre,tie.Tie_IdTienda,lod.Loc_Direccion,tie.Tie_Subdominio,tie.Tie_FechaRegistro,tie.Tie_RazonSocial,usu.Usu_Correo,per.Per_Nombre,per.Per_Telefono,per.Per_Celular,tie.Tie_Cuota,tie.Pla_IdPlan,tie.Tie_Estado,tie.Tie_CicloFacturacion,tie.Tie_Logo 
                FROM tienda AS tie
                INNER JOIN usuario AS usu ON usu.Tie_IdTienda=tie.Tie_IdTienda
                LEFT JOIN local AS loc ON loc.tienda_Tie_IdTienda=tie.Tie_IdTienda
                LEFT JOIN local_direccion AS lod ON lod.local_Loc_IdLocal=loc.Loc_IdLocal
                INNER JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona ".$where." ".$limit."";
                $query=$this->db->query($sql);
                return $query->row();
        }

        function datosTiendas()
        {
            $this->db->select('tie.Tie_Nombre,usu.Usu_Correo,per.Per_Nombre,tie.Tie_Subdominio');
            $this->db->from('tienda AS tie');
            $this->db->join('usuario AS usu','usu ON usu.Tie_IdTienda=tie.Tie_IdTienda');
            $this->db->join('persona AS per','per ON per.Per_IdPersona=usu.Per_IdPersona');
            $this->db->where('tie.Tie_Estado',1);
            $query=$this->db->get();
            return $query->result();
        }

        function get_Tiendas_b($ntienda)
        {
            $this->db->select('*');
            $this->db->from('tienda AS tie');
            $this->db->like('Tie_Nombre',$ntienda);
            $this->db->where('tie.Tie_Logo!=',' ');
            $query=$this->db->get();
            return $query->result();
        }

        function get_Tiendas_b_cat($ntienda)
        {
            $this->db->select('cat.Cat_Nombre,cat.Cat_IdCategoria, tie.Tie_Logo');
            $this->db->from('tienda AS tie');
            $this->db->join('categoriap as cat','cat on cat.Cat_IdCategoria = tie.Tie_Categoria');
            $this->db->like('Tie_Nombre',$ntienda);
            $this->db->where('tie.Tie_Logo !=', ' ');
            $this->db->group_by('Tie_Categoria');
            $query=$this->db->get();
            return $query->result();
        }

        function get_Tiendas_b_dep($ntienda)
        {
            $this->db->select('reg.id,reg.name,tie.Tie_Logo');
            $this->db->from('tienda AS tie');
            $this->db->join('regions AS reg','reg on reg.id=tie.Tie_Departamento');
            $this->db->like('Tie_Nombre',$ntienda);
            $this->db->where('tie.Tie_Logo!=',' ');
            $this->db->group_by('Tie_Departamento');
            $query=$this->db->get();
            return $query->result();
        }

        function get_Tiendas_main_cat($condicion="WHERE tie.Tie_Logo != '' GROUP BY tie.Tie_Categoria ORDER BY Tie_Nombre ASC ",$limi="")
        {
            $sql="SELECT * FROM tienda AS tie 
                LEFT JOIN tienda_detalle tid ON tid.tienda_Tie_IdTienda=tie.Tie_IdTienda  
                INNER JOIN categoriap AS cat ON cat.Cat_IdCategoria=tie.Tie_Categoria
                LEFT JOIN (SELECT Loc_IdLocal,tienda_Tie_IdTienda FROM local GROUP BY tienda_Tie_IdTienda) loc ON loc.tienda_Tie_IdTienda = tie.Tie_IdTienda 
                LEFT JOIN local_direccion lod ON lod.local_Loc_IdLocal = loc.Loc_IdLocal $condicion $limit";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_Tiendas_main_dep($condicion="WHERE tie.Tie_Logo != '' GROUP BY tie.Tie_Departamento ORDER BY Tie_Nombre ASC ", $limit="")
        {
            $sql="SELECT * FROM tienda AS  tie 
                LEFT JOIN tienda_detalle AS tid ON tid.tienda_Tie_IdTienda=tie.Tie_IdTienda  
                INNER JOIN regions AS reg on reg.id=tie.Tie_Departamento
                LEFT JOIN (SELECT Loc_IdLocal,tienda_Tie_IdTienda FROM local GROUP BY tienda_Tie_IdTienda) AS loc ON loc.tienda_Tie_IdTienda=tie.Tie_IdTienda 
                LEFT JOIN local_direccion lod ON lod.local_Loc_IdLocal=loc.Loc_IdLocal $condicion $limit";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function creaCliente($Usu_IdUsuario,$Nombre,$ApellidoP,$ApellidoM,$Tfl,$Direccion)
        {
            $this->db->set('Clg_Telefono',$Tfl);
            $this->db->set('Clg_Nombre',$Nombre);
            $this->db->set('Clg_Direccion',$Direccion);
            $this->db->set('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->set('Clg_Apellido_Paterno',$ApellidoP);
            $this->db->set('Clg_Apellido_Materno',$ApellidoM);
            if($this->db->insert('clientes_gestor')) {
                return true;
            };
        }

        function deleteCliente($Clg_IdCliente)
        {
            $this->db->where('Clg_IdClientes_Gestor',$Clg_IdCliente);
            if($this->db->delete('clientes_gestor')) {
                return true;
            };

        }

        function deleteNota($Not_IdNota)
        {
            $this->db->where('Not_IdNota',$Not_IdNota);
            if($this->db->delete('nota')) {
                return true;
            };

        }

        function deleteActividad($Acg_IdActividad)
        {
            $this->db->where('Acg_IdActividad',$Acg_IdActividad);
            if($this->db->delete('actividad_gestor')) {
                return true;
            };

        }

        function creaNota($Usu_IdUsuario,$tituloNota,$nota)
        {
            $this->db->set('Not_Nota',$nota);
            $this->db->set('Not_Titulo',$tituloNota);
            $this->db->set('Usu_IdUsuario',$Usu_IdUsuario);
            if($this->db->insert('nota')) {
                return true;
            };
        }

        function creaActividad($Usu_IdUsuario,$Actividad,$Detalle,$Fecha,$Hora)
        {
            $this->db->set('Acg_Hora',$Hora);
            $this->db->set('Acg_Fecha',$Fecha);
            $this->db->set('Acg_Detalle',$Detalle);
            $this->db->set('Acg_Actividad',$Actividad);
            $this->db->set('Usu_IdUsuario',$Usu_IdUsuario);
            if($this->db->insert('actividad_gestor')) {
                return true;
            };
        }

        function crear_tienda_comprador($Tie_ruc_dni,$Tie_Tipo,$Tie_Nombre,$Tie_RazonSocial,$Tie_Subdominio,$Plan_IdPlan,$Usu_IdUsuario)
        {
            $cantidad=$this->get_cantidad_tiendas()->Cantidad;

            if($cantidad > 100) {
                $Tie_Cuota = 1;
            } else {
                $Tie_Cuota = 6;
            }

            //registro tabla tienda
            $this->db->trans_start();
            $this->db->set('Tie_Tipo',$Tie_Tipo);
            $this->db->set('Tie_Cuota',$Tie_Cuota);
            $this->db->set('Tie_Nombre',$Tie_Nombre);
            $this->db->set('Pla_IdPlan',$Plan_IdPlan);
            $this->db->set('Tie_ruc_dni',$Tie_ruc_dni);
            $this->db->set('Tie_Subdominio',$Tie_Subdominio);
            $this->db->set('Tie_RazonSocial',$Tie_RazonSocial);
            $this->db->insert('tienda');
            $Tie_IdTienda=$this->db->insert_id();

            //editar tabla usuario
            $this->db->set('Rol_IdRol',2);
            $this->db->set('Tie_IdTienda',$Tie_IdTienda);
            $this->db->where('Usu_IdUsuario',$Usu_IdUsuario);
            $this->db->update('usuario');

            $Usu_IdUsuario = $this->db->insert_id();
            $this->bitacoraModel->registrar_bitacora('tienda','crear_tienda_comprador','Tie_IdTienda',$Tie_IdTienda,'','',$Usu_IdUsuario);

            $this->db->trans_complete();
            if($this->db->trans_status()) {
                return $Tie_IdTienda;
            }
            return false;
        }

        function updateLocal($Loc_IdLocal,$Lod_Direccion,$Lon_Numero)
        {
            $this->db->trans_start();            
            $this->db->set('Loc_Direccion',$Lod_Direccion);
            $this->db->where('local_Loc_IdLocal',$Loc_IdLocal);
            $this->db->update('local_direccion');

            $this->db->set('Loc_Numero',$Lon_Numero);
            $this->db->where('local_Loc_IdLocal',$Loc_IdLocal);
            $this->db->update('local_numero');
            $this->db->trans_complete();

            if($this->db->trans_status()==TRUE) {
               return true;
            }
            return false;
        }

        function updaStatuTienda($Tie_IdTienda,$valor)
        {
            $this->db->trans_start();            
            $this->db->set('Tie_Estado', $valor);
            $this->db->where('Tie_IdTienda', $Tie_IdTienda);
            $this->db->update('tienda');
            $this->db->trans_complete();
            if($this->db->trans_status()==TRUE) {
               return true;
            }
            return false;
        }

        function getEditar_Tienda($DNIORUC,$idtienda,$idpersona,$nombreTienda,$razonSocial,$tlf,$correo,$selectRegion,$selectProvincia,$selectDistritos,$direccionComprador)
        {
            $this->db->trans_start();            
            // editar tienda
            $this->db->set('Tie_ruc_dni',$DNIORUC);
            $this->db->set('Tie_Nombre',$nombreTienda);
            $this->db->set('Tie_RazonSocial',$razonSocial);
            $this->db->where('Tie_IdTienda',$idtienda);
            $this->db->update('tienda');

            // editar persona
            $this->db->set('Per_Telefono',$tlf);
            $this->db->set('Per_Correo',$correo);
            $this->db->set('Region_id',$selectRegion);
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

        function productos2($where="",$limit="")
        {
            $sql="SELECT pro.Pro_IdProducto,pro.Pro_Descripcion,pro.Pro_Vista,pro.Pro_Contacto,pro.Pro_Nombre,pro.Pro_Estado,pro.Pro_Oferta,pro.Pro_Valoracion,pro.Pro_PrecioRango,pro.Pro_MostrarPrecio,unm.Unm_Nombre,pun.Pru_Valor,prf.Prf_Img
                FROM `producto` as pro 
                INNER JOIN producto_unidad AS pun ON pun.producto_Pro_IdProducto=pro.Pro_IdProducto 
                INNER JOIN unidadmedida AS unm ON unm.Unm_IdUnidadMedida=pun.Unm_IdUnidadMedidad 
                INNER JOIN producto_tienda AS prt ON prt.Pro_IdProducto=pro.Pro_IdProducto 
                LEFT JOIN producto_foto AS prf ON prf.producto_Pro_IdProducto=pro.Pro_IdProducto
                $where";
            $query=$this->db->query($sql); 
            return $query->result();
        }

        function detalle_tienda_det($Tie_IdTienda) {
            $sql="SELECT tie.Tie_IdTienda,tie.Tie_Nombre,tie.Tie_ruc_dni,per.Per_Telefono,per.Per_Celular,per.Per_Direccion,per.Per_Correo,per.Region_id,tie.Tie_RazonSocial,usb.Usb_Cuenta,ban.Ban_Nombre,usb.Usb_Tipo,per.Provincia_id,per.Distrito_id,per.Provincia_id,per.Per_IdPersona
                FROM usuario as usu 
                LEFT JOIN tienda as tie ON tie.Tie_IdTienda = $Tie_IdTienda 
                LEFT JOIN persona as per ON per.Per_IdPersona = usu.Per_IdPersona 
                LEFT JOIN usuario_banco as usb ON usb.Usu_IdUsuario = usu.Usu_IdUsuario 
                LEFT JOIN banco as ban ON ban.Ban_IdBanco = usb.Ban_IdBanco
                WHERE usu.Tie_IdTienda = $Tie_IdTienda";
                    
            $query = $this->db->query($sql);

            return $query->row();
        }

        function region_tienda() {
            $sql="SELECT re.id,re.name FROM regions re";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function provincia_tienda($region_id) {
            $sql="SELECT pro.id,pro.name FROM provinces pro WHERE pro.region_id=$region_id";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function distrito_tienda($region_id) {
            $sql="SELECT dis.id,dis.name FROM districts dis WHERE dis.region_id=$region_id AND Cos_IdCostoEnvio > 0";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function eliminarProducto($Pro_IdProducto)
        {
            $this->db->set('Pro_Estado',5);
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);
            $this->db->update('producto'); 
        }

        function productoDesactivar($Pro_IdProducto)
        {
            $this->db->set('Pro_Estado',4);
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);        
            $this->db->update('producto');
        }

        function productoActivar($Pro_IdProducto)
        {
            $this->db->set('Pro_Estado',1);
            $this->db->where('Pro_IdProducto',$Pro_IdProducto);        
            $this->db->update('producto');
        } 


        function get_locales_x_tienda($Tie_IdTienda)
        {
            $sql="SELECT loc.Loc_Nombre,loc.Loc_IdLocal,lod.Loc_Direccion,lon.Loc_Numero
                FROM tienda AS tie 
                INNER JOIN local AS loc ON loc.Tienda_Tie_IdTienda=tie.Tie_IdTienda 
                INNER JOIN local_direccion AS lod ON lod.Local_Loc_IdLocal=loc.Loc_IdLocal 
                INNER JOIN local_numero AS lon ON lon.Local_Loc_IdLocal=loc.Loc_IdLocal WHERE tie.Tie_IdTienda=$Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->result();
        }

        function get_primer_local_x_tienda($Tie_IdTienda)
        {
            $sql="SELECT loc.Loc_Nombre,loc.Loc_IdLocal, lod.Loc_Direccion, lon.Loc_Numero
                FROM tienda AS tie 
                INNER JOIN local AS loc ON loc.Tienda_Tie_IdTienda=tie.Tie_IdTienda 
                INNER JOIN local_direccion AS lod ON lod.Local_Loc_IdLocal=loc.Loc_IdLocal 
                INNER JOIN local_numero AS lon ON lon.Local_Loc_IdLocal=loc.Loc_IdLocal WHERE tie.Tie_IdTienda=$Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function get_cantidad_locales_x_tienda($Tie_IdTienda)
        {
            $sql="SELECT COUNT(*) AS Cantidad
                FROM tienda AS tie 
                INNER JOIN local AS loc ON loc.Tienda_Tie_IdTienda=tie.Tie_IdTienda 
                INNER JOIN local_direccion AS lod ON lod.Local_Loc_IdLocal=loc.Loc_IdLocal 
                INNER JOIN local_numero AS lon ON lon.Local_Loc_IdLocal=loc.Loc_IdLocal WHERE tie.Tie_IdTienda=$Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->row();
        }
         
        function get_info_persona_tienda($Tie_IdTienda)
        {
            $sql="SELECT tie.Tie_IdTienda,per.Per_Telefono,per.Per_Direccion,tie.Tie_RazonSocial,usb.Usb_Cuenta,ban.Ban_Nombre,usb.Usb_Tipo 
                FROM usuario AS usu 
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=$Tie_IdTienda 
                INNER JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona 
                INNER JOIN usuario_banco AS usb ON usb.Usu_IdUsuario=usu.Usu_IdUsuario 
                INNER JOIN banco AS ban ON ban.Ban_IdBanco=usb.Ban_IdBanco
                WHERE usu.Tie_IdTienda=$Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function get_info_persona_tienda_simple($Tie_IdTienda)
        {
            $sql="SELECT tie.Tie_IdTienda,per.Per_Telefono,per.Per_Direccion,tie.Tie_RazonSocial,tie.Tie_Nombre,per.Per_Correo 
                FROM usuario AS usu 
                INNER JOIN tienda AS tie ON tie.Tie_IdTienda=$Tie_IdTienda 
                INNER JOIN persona AS per ON per.Per_IdPersona=usu.Per_IdPersona 
                WHERE usu.Tie_IdTienda=$Tie_IdTienda";
            $query=$this->db->query($sql);
            return $query->row();
        }

        function addLogoFoto($Tie_IdTienda,$Tie_Logo)
        {
            $this->db->set('Tie_Logo',$Tie_Logo);
            $this->db->where('Tie_IdTienda',$Tie_IdTienda);
            $this->db->update('tienda');    
        }

        function ocultarTienda($Tie_IdTienda)
        {
            $this->db->set('Tie_Estado',3);
            $this->db->where('Tie_IdTienda',$Tie_IdTienda);
            $this->db->update('tienda');    
        }
    }
?>