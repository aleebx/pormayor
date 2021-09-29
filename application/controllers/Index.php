<?php

  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Index extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model("Plan_model","planModel");
      $this->load->model("Tienda_model","tiendaModel");
      $this->load->model("Cotizacion_model","cotizacionModel");
      $this->load->model("Configuracion_model","configuracionModel");
      $this->load->model("Producto_Favorito_model","productoFavoritoModel");
    }

    public function index()
    {
      // header("Cache-Control: no-cache,must-revalidate"); 
      $data=$this->acl->load_datos(); 
      $data['index'] = true;
      $data['pagina']['extrabtn']='NO';
      $data['pagina']['tipo']='principal';
      $data['pagina']['titulo']='PorMayor.pe - Crece con nosotros';
      $data['productos']=$this->productoModel->productos_principal2();
      foreach ($data['productos'] as $valor) {
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
      }
      $this->twig->parse('index3.twig',$data);
    }

    // public function index1()
    // {
    //   header("Cache-Control: no-cache,must-revalidate"); 
    //   $data=$this->acl->load_datos(); 
    //   $data['index'] = true;
    //   $data['pagina']['extrabtn']='NO';
    //   $data['pagina']['tipo']='principal';
    //   $data['pagina']['titulo']='PorMayor.pe - Crece con nosotros';
    //   $data['productos']=$this->productoModel->productos_principal2();
    //   $data['belleza']=$this->productoModel->pcategoria(1);
    //   $data['hogar']=$this->productoModel->pcategoria(8);
    //   $data['deporte']=$this->productoModel->pcategoria(5);
    //   $data['tecnologia']=$this->productoModel->pcategoria(14);
    //   $data['reposteria']=$this->productoModel->pcategoria(16);
    //   $data['mascota']=$this->productoModel->pcategoria(15);
    //   $data['automovil']=$this->productoModel->pcategoria(18);
    //   foreach ($data['productos'] as $valor) {
    //     $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
    //   }
    //   $this->twig->parse('inicio.twig',$data);
    // }

    public function index2()
    {
      header("Cache-Control: no-cache,must-revalidate"); 
      $data=$this->acl->load_datos(); 
      $data['index']=true;
      $data['pagina']['extrabtn']='NO';
      $data['pagina']['tipo']='principal';
      $data['pagina']['titulo']='PorMayor.pe - Crece con nosotros';
      // $data['productos_grupal']=$this->productoModel->productos_grupos("WHERE tie.Tie_Estado = 2 AND tie.Tie_IdTienda = 227 AND gru.Gru_Estado = 0 AND prf.Prf_Thumb <>''","");
      // foreach ($data['productos_grupal'] as $valor) {
      //   $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
      //   $valor->cantFav = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
      // }
      $data['producto_remate']=$this->productoModel->productos_saldo("WHERE pro.Pro_Saldo = 1 ","LIMIT 15");
      foreach ($data['producto_remate'] as $valor) {
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        $valor->cantFav = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
      }      

      $data['producto_ultimos']=$this->productoModel->productos_ultimos("WHERE tie.Tie_Estado = 2 AND tie.Tie_IdTienda = 227 AND pro.Pro_Estado = 1 OR pro.Pro_Estado = 2 ","LIMIT 15");
      foreach ($data['producto_ultimos'] as $valor) {
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        $valor->cantFav = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
      }
      // $data['producto_electrohogar']=$this->productoModel->producto_electrohogar();
      // foreach ($data['producto_electrohogar'] as $valor) {
      //   $valor->url = "pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
      //   $valor->cantFav = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
      // }
      $data['productos_vistos']=$this->productoModel->productos_vistos("WHERE tie.Tie_Estado = 2 AND tie.Tie_IdTienda = 227 AND pro.Pro_Estado = 1 OR pro.Pro_Estado = 2 ","LIMIT 12");
      foreach ($data['productos_vistos'] as $valor) {
        $valor->url = "pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        $valor->cantFav = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
      }
      $data['belleza']=$this->productoModel->get_p_belleza("WHERE tie.Tie_Estado = 2 AND tie.Tie_IdTienda = 227 AND pro.Pro_Estado = 1 OR pro.Pro_Estado = 2 AND cat.Cat_IdCategoria = 1","LIMIT 12");
      foreach ($data['belleza'] as $valor) {
        $valor->url = "pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        $valor->cantFav = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
      }
      if(isset($data['usuario']['logueado']))
      {
        $data['noticoments'] = $this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
        $data['noticotiza'] = $this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
      }
      $this->twig->parse('index2.twig',$data);
    }

    public function especial($nombreCampaña)
    {
      $data=$this->acl->load_datos();
      $data['filtro_movil_especial']=true;
      $data['productos_campana']=$this->productoModel->productos_campana2();

      foreach($data['productos_campana'] as $valor) {
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
      }

      $data['producto_marcas']=$this->productoModel->productos_tienda_marcas_especial();
      $data['pagina']['extrabtn']='NO';
      $data['pagina']['tipo']='principal';
      $data['pagina']['titulo']='Dia de la Madre | pormayor.pe';
      $this->twig->parse('especial.twig',$data);
    }

    public function lista()
    {
      $data=$this->acl->load_datos();
      $data['producto']=$this->productoModel->productos_listado();  
      $this->twig->parse('lista.twig',$data);
    }

    public function grupal()
    {
      $data=$this->acl->load_datos();
      $data['miproductosgrupal']=0;
      $data['productos_grupal']=$this->productoModel->productos_grupal();

      if(isset($data['usuario']['logueado'])) {
        $data['miproductosgrupal']=$this->productoModel->miproductogrupal($data['usuario']['id_usuario']);
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
      }
      $this->twig->parse('grupal.twig', $data);
    }

    public function ultimos()
    {
      $data=$this->acl->load_datos();
      $data['filtro_movil_ultimos']=true;

      $array=array();
      $arrayCat=array();
      $arrayBase=array();
      $data['producto_ultimos']=$this->productoModel->productos_ultimos2("WHERE tie.Tie_Estado = 2","LIMIT 32");
     
      $count=0;
      foreach($data['producto_ultimos'] as $valor) {
        $valor->cantFav=$this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);

        if(!in_array(strtolower($valor->Pro_Marca),$array)) {
          array_push($array,strtolower($valor->Pro_Marca));
        }

        if(!in_array(strtolower($valor->Cat_Nombre),$arrayBase)) {
          array_push($arrayBase,strtolower($valor->Cat_Nombre));

          $arrayCat[$count]=array(
            "Cat_Nombre"=>$valor->Cat_Nombre,
            "Cat_IdCategoria"=>$valor->Cat_IdCategoria
          );
          $count=$count + 1 ;
        }
      }

      $data['producto_marcas']=$array;
      $data['producto_cat']=$arrayCat;
      $data['pagina']['extrabtn']='NO';
      $data['pagina']['tipo']='principal';
      $data['pagina']['titulo']='Compra productos más nuevos | pormayor.pe';
      $this->twig->parse('ultimos.twig',$data);
    }

    public function oferta()
    {
      $data=$this->acl->load_datos();
      $data['pagina']['extrabtn']='NO';
      $data['pagina']['tipo']='principal';
      $data['pagina']['titulo']='PorMayor.pe – Vende y compra al por mayor en Perú';

      $data['SKU']=$this->productoModel->get_sku();
      $data['fotos']=$this->productoModel->get_fotos_producto();
      $data['producto']=$this->productoModel->productos(" WHERE pro.Pro_Oferta = 1 ORDER BY pro.Pro_Oferta DESC");
      $this->twig->parse('ofertas.twig',$data);
    }

    public function planes()
    {
      $data=$this->acl->load_datos();
      $data['pagina']['opcion']='';
      $data['pagina']['titulo']='PorMayor.pe – Vende y compra al por mayor en Perú';

      $data['planes']=$this->planModel->get_planes();
      $this->twig->parse('planes.twig',$data);
    }

    public function about()
    {
      $data=$this->acl->load_datos(); 
      $data['pagina']['titulo']='Nosotros - PorMayor.pe';

      if(isset($data['usuario']['id_usuario'])) {
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
      }
      $this->twig->parse('about.twig',$data);
    } 

    public function contactanos()
    {
      $data=$this->acl->load_datos(); 
      $data['pagina']['titulo']='Contacto - PorMayor.pe';

      if(isset($data['usuario']['id_usuario'])){
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
      }
      $this->twig->parse('contactanos.twig',$data);
    } 

    public function tiendas()
    {
      $data=$this->acl->load_datos(); 
      $data['pagina']['extrabtn']='SI';
      $data['pagina']['tipo']="carrito";
      $data['pagina']['titulo']='Compra al por mayor online a los mejores precios en las mejores tiendas | pormayor.pe';
      
      $categorias=$this->productoModel->get_categorias_tienda();
      $data['categorias2']=$this->productoModel->get_Categoria();
      $array_categorias=array();

      foreach($categorias as $cat) {
        $cantidad_tiendas=count($this->tiendaModel->get_tiendas_x_categoria($cat->Cat_IdCategoria));
        $array_categorias[]=array (
          'Cat_Nombre'=>$cat->Cat_Nombre,
          'Cantidad_Tiendas'=>$cantidad_tiendas,
          'Cat_IdCategoria'=>$cat->Cat_IdCategoria,
        );
      }

      if(isset($data['usuario']['id_usuario'])) {
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
      }
      
      //TIENDAS
      $data['busqueda_tiendas_cat']=$this->tiendaModel->get_Tiendas_main_cat();
      foreach($data['busqueda_tiendas_cat'] as $cat) {
        $cat->cantidad_cat=count($this->tiendaModel->get_tiendas_x_categoria_main($cat->Cat_IdCategoria));
      }

      $data['busqueda_tiendas_dep']=$this->tiendaModel->get_Tiendas_main_dep();
      foreach($data['busqueda_tiendas_dep'] as $dep) {
        $dep->cantidad_dep=count($this->tiendaModel->get_tiendas_x_departamento_main($dep->Tie_Departamento));
      }

      $data['filtro_movil_tiendas']=true;
      $data['tiendas2']=$this->tiendaModel->get_Tiendas5();
      $data['regiones']=$this->tiendaModel->get_cantidad_tiendas_x_region();
      $this->twig->parse('index/tiendas.twig',$data);
    }

    public function suscribete()
    {
      $data=$this->acl->load_datos();    
      $data['pagina']['titulo']='PorMayor.pe - Vende y compra al por mayor en Perú';
      $this->twig->parse('suscribete.twig',$data);
    }    

    public function filtrar_tienda()
    {
      $data=$this->acl->load_datos();

      if($this->input->is_ajax_request()) {
        $ntienda=$this->input->post('ntienda');
        $data['tiendas']=$this->tiendaModel->get_Tiendas_b($ntienda);
        print_r(json_encode($data['tiendas']));
      }
    }

    public function ver_tiendas()
    {
      $data=$this->acl->load_datos();
      
      if($this->input->is_ajax_request()) {
        $data['tiendas']=$this->input->post('data');
        $this->twig->parse('load_tiendas.twig', $data);
      }
    }

    public function categorias($Cat_IdCategoria=false)
    {
    // header("Location: https://pormayor.pe");
      if($Cat_IdCategoria) {
        $data=$this->acl->load_datos();
        $categoria_completa=explode("-",$Cat_IdCategoria);
        $url_nombre=implode("-",$categoria_completa);
        $titulo_pag=implode(" ",$categoria_completa);

        //Ver la ultima key con Cat_IdCategoria
        end($categoria_completa);
        $key=key($categoria_completa);
        $Cat_IdCategoria=(int)$categoria_completa[$key];
        // $data['categoriaFlag']=true;
        // $data['categoria_seo']=$this->productoModel->categoria_seo($Cat_IdCategoria);      
        // $data['pagina']['extrabtn']='SI';
        // $data['pagina']['tipo']="carrito";  
        $data['pagina']['titulo']=substr($titulo_pag, 0, -2);
        $data['producto']=$this->productoModel->productos_categoria($Cat_IdCategoria);
        foreach($data['producto'] as $valor) {
          $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        }

        $this->twig->parse('tienda/categoria.twig',$data);
      }
    }

    public function subcategoria($Suc_IdSubCategoria)
    {
    header("Location: https://pormayor.pe");
      
      $data=$this->acl->load_datos();
      $subCat_completa=explode("-",$Suc_IdSubCategoria);
      $url_nombre=implode("-",$subCat_completa);
      $data['url']=substr($url_nombre,0,-2);
      $titulo_pag=ucfirst(implode(" ",$subCat_completa));


      //Ver la ultima key con Suc_IdSubCategoria
      end($subCat_completa);
      $key=key($subCat_completa);
      $Suc_IdSubCategoria=(int)$subCat_completa[$key];

      $data['subcategoriaFlag']=true;
      $data['subcategoria_seo']=$this->productoModel->subcategoria_seo($Suc_IdSubCategoria);

      $data['pagina']['extrabtn']='SI';
      $data['pagina']['tipo']="carrito";
      $data['producto']=$this->productoModel->productos_subcategoria($Suc_IdSubCategoria);
      
      //URL categoria
      foreach($data['producto'] as $valor) {
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        $data['producto_marcas']=$this->productoModel->productos_tienda_marcas_suc($Suc_IdSubCategoria);
        $valor->urlCategoria=$this->buildSlugValue($valor->Cat_Nombre)."-al-por-mayor-".$valor->Cat_IdCategoria;
        $valor->urlSubCategoria=$this->buildSlugValue($valor->Suc_Nombre)."-al-por-mayor-".$valor->Suc_IdSubCategoria;
      }

      $data['pagina']['titulo']=$titulo_pag;
      $data['filtro']=$this->productoModel->get_filtro();

      if(empty($data['producto'])) {
        $data['sin_productos']='no hay producto';
        $data['noproducto']="NO SE ENCONTRO PRODUCTO CON ESE NOMBRE";
      }

      $data['SKU']=$this->productoModel->get_sku();
      $data['fotos']=$this->productoModel->get_fotos_producto();
      $data['colores']=$this->configuracionModel->get_coloresProducto();

      if(isset($data['usuario']['id_usuario'])) {
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
        $data['productos_favoritos']=$this->productoFavoritoModel->get_favoritos_x_usuario($data['usuario']['id_usuario']);
      }

      $data['listado_suc']=true;
      $data['filtro_movil']=true;
      $data['filtro_tipo']="suc";
      $data['vista_categoria']=true;
      $data['filtro_categorias']=true;
      $data['filtro_nro']=$Suc_IdSubCategoria;
      $data['Suc_IdSubCategoria']=$Suc_IdSubCategoria;
      $data['cantidad_productos']=$this->productoModel->get_cantidad_producto_x_categoria();
      $data['regiones']=$this->productoModel->get_cantidad_productos_x_region_x_subcategoria($Suc_IdSubCategoria);
      $this->twig->parse('tienda/inicio.twig',$data);
    }

    public function detalle($Des_IdDetalle_Subcategoria)
    {
    header("Location: https://pormayor.pe");
      
      $data=$this->acl->load_datos();
      $subCat_completa=explode("-",$Des_IdDetalle_Subcategoria);
      $url_nombre=implode("-",$subCat_completa);
      $titulo_pag=ucfirst(implode(" ",$subCat_completa));
      $data['url']=substr($url_nombre,0,-2);
      
      //Ver la ultima key con Suc_IdSubCategoria
      end($subCat_completa);
      $key=key($subCat_completa);
      $Des_IdDetalle_Subcategoria=(int)$subCat_completa[$key];

      $data['detalleFlag']=true;
      $data['listado_des']=true;
      $data['filtro_movil']=true;
      $data['filtro_tipo']="des";
      $data['vista_categoria']=true;
      $data['filtro_nro']=$Des_IdDetalle_Subcategoria;
      $data['detalle_seo']=$this->productoModel->detalle_seo($Des_IdDetalle_Subcategoria);

      $data['pagina']['extrabtn']='SI';
      $data['pagina']['tipo']="carrito";
      $data['producto']=$this->productoModel->productos_detallesub($Des_IdDetalle_Subcategoria);
      
      //URL categoria
      foreach($data['producto'] as $valor) {
        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        $data['producto_marcas']=$this->productoModel->productos_tienda_marcas_des($Des_IdDetalle_Subcategoria);
        $valor->urlCategoria=$this->buildSlugValue($valor->Cat_Nombre)."-al-por-mayor-".$valor->Cat_IdCategoria;
        $valor->urlSubCategoria=$this->buildSlugValue($valor->Suc_Nombre)."-al-por-mayor-".$valor->Suc_IdSubCategoria;
        $valor->urlDetalle=$this->buildSlugValue($valor->Suc_Nombre)."-".$this->buildSlugValue($valor->Des_Nombre)."-al-por-mayor-".$valor->Des_IdDetalle_SubCategoria;
      }
          
      $data['filtro_categorias']=true;
      $data['pagina']['titulo']=$titulo_pag;
      $data['filtro']=$this->productoModel->get_filtro();

      if(empty($data['producto'])) {
        $data['sin_productos']='no hay producto';
        $data['noproducto']="NO SE ENCONTRO PRODUCTO CON ESE NOMBRE";
      }

      $data['SKU']=$this->productoModel->get_sku();
      $data['fotos']=$this->productoModel->get_fotos_producto();
      $data['colores']=$this->configuracionModel->get_coloresProducto();

      if(isset($data['usuario']['id_usuario'])) {
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
        $data['productos_favoritos']=$this->productoFavoritoModel->get_favoritos_x_usuario($data['usuario']['id_usuario']);
      }

      $data['Des_IdDetalle_Subcategoria']=$Des_IdDetalle_Subcategoria;
      $data['cantidad_productos']=$this->productoModel->get_cantidad_producto_x_categoria();
      $data['regiones']=$this->productoModel->get_cantidad_productos_x_region_x_subcategoria_d($Des_IdDetalle_Subcategoria);
      $this->twig->parse('tienda/inicio.twig',$data);
    }

    function cerrar_sesion()
    {
      $this->session->sess_destroy();
      redirect('usuario/login');
    }

    function post_registrar_contactenos()
    {
      if($this->input->is_ajax_request()) {
        if($this->input->post()) {
          $Con_Nombre=$this->input->post('nombre');
          $Con_Correo=$this->input->post('correo');
          $Con_Telefono=$this->input->post('telefono');
          $Con_Descripcion=$this->input->post('mensaje');

          $this->load->library('recaptcha');
          $recaptcha=$this->input->post('recaptcha');
          if(!empty($recaptcha)) {
            $this->load->model("Contactenos_model","contactenosModel");
            $registro=$this->contactenosModel->registrar_contactenos($Con_Nombre, $Con_Telefono, $Con_Correo, $Con_Descripcion);
            if($registro) {
              $this->load->library('correo');
              $datos['tlf']=$Con_Telefono;
              $datos['correo']=$Con_Correo;
              $datos['mensaje']=$Con_Descripcion;
              $datos['nombre_usuario']=$Con_Nombre;
              $contenido_correo=$this->twig->parse('correo/contacto_pagina.twig',$datos,true);
              $this->correo->enviar("alexis.bequiz@pormayor.pe", "CONTACTO DESDE LA PÁGINA - ".$Con_Nombre, $contenido_correo);
              $this->correo->enviar("fredy.rojas@pormayor.pe", "CONTACTO DESDE LA PÁGINA - ".$Con_Nombre, $contenido_correo);
              $this->correo->enviar("ventas@pormayor.pe", "CONTACTO DESDE LA PÁGINA - ".$Con_Nombre, $contenido_correo);
              $this->correo->enviar("contacto@pormayor.pe", "CONTACTO DESDE LA PÁGINA - ".$Con_Nombre, $contenido_correo);
              echo 1;
            } else {
              echo 0;
            }
          } else {
            echo "Recaptcha vacío";
          }
        }
      } else {
        show_404();
      }
    }

    public function ajax_lista_provincias()
    {
      if($this->input->is_ajax_request()) {
        $this->load->model("Local_model","localModel");
        $Region_Id=$this->input->post('selDepartamento');
        $data['provincias']=$this->localModel->provincia($Region_Id);
        $this->twig->parse('usuario/ajax/lista_provincias.twig', $data);
      } else {
        show_404();
      }
    }

    public function ajax_lista_distritos()
    {
      if($this->input->is_ajax_request()) {
        $this->load->model("Local_model","localModel");
        $Region_Id=(int)$this->input->post('selDepartamento');
        $Provincia_Id=(int)$this->input->post('selProvincia');
        $data['distritos']=$this->localModel->distrito($Provincia_Id,$Region_Id);
        $this->twig->parse('usuario/ajax/lista_distritos.twig',$data);
      } else {
        show_404();
      }
    }

    public function ajax_filtro_tiendas()
    {
      if($this->input->is_ajax_request()) {
        $data=$this->acl->load_datos();

        $vista=$this->input->post('vista');
        $orden=$this->input->post('orden');
        $Reg_IdRegion=$this->input->post('id_region');
        $Cat_IdCategoria=$this->input->post('id_categoria');

        $order="";
        $where="";
        if($orden==1) {
          $order="ORDER BY tie.Tie_FechaInscripcion DESC";
        } else if($orden==2) {
          $order="ORDER BY tie.Tie_FechaInscripcion ASC";
        } else if($orden==3) {
          
        } else if($orden==4) {
          
        }

        if($Reg_IdRegion!=0) {
          if($Cat_IdCategoria!=0) {
            $where.=" AND tie.Tie_Departamento=$Reg_IdRegion";
          } else {
            if($where=="") {
              $where.="WHERE tie.Tie_Departamento=$Reg_IdRegion";
            } else {
              $where.=" AND tie.Tie_Departamento=$Reg_IdRegion";
            }
          }
        }

        $data['vista']=$vista;
        $condicion=$where.' '. $order;

        if($Cat_IdCategoria==0) {
          $data['tiendas2']=$this->tiendaModel->get_Tiendas($condicion);
        } else {
          $data['tiendas2']=$this->tiendaModel->get_tiendas_x_categoria($Cat_IdCategoria,$where,$order);
        }
        $this->twig->parse('index/ajax/filtro_tiendas.twig', $data);
      }
    }

    // public function ajax_filtro_productos()
    // {
    //   if ($this->input->is_ajax_request())
    //   {
    //     $data = $this->acl->load_datos();

    //     $vista = $this->input->post('vista');
    //     $orden = $this->input->post('orden');
        
    //     $rating = $this->input->post('rating');
    //     $Suc_IdSubCategoria = $this->input->post('id_subcategoria');
    //     $Cat_IdCategoria = $this->input->post('id_categoria');
    //     $Reg_IdRegion = $this->input->post('id_region');
    //     $Pro_PrecioMinimo = $this->input->post('precio_minimo');
    //     $Pro_PrecioMaximo = $this->input->post('precio_maximo');

    //     $order = "";
    //     $where = "";

    //     if($Pro_PrecioMinimo != 0)
    //     {
    //       $where .= "AND pro.Pro_PrecioMinimo >= $Pro_PrecioMinimo";
    //     }

    //     if($Pro_PrecioMaximo != 0)
    //     {
    //       $where .= " AND pro.Pro_PrecioMaximo <= $Pro_PrecioMaximo";
    //     }

    //     if($orden == 1)
    //     {
    //       $order = "ORDER BY pro.Pro_FechaCreacion DESC";
    //     }
    //     else if($orden == 2)
    //     {
    //       $order = "ORDER BY pro.Pro_FechaCreacion ASC";
    //     }
    //     else if($orden == 3)
    //     {
    //       $order = "ORDER BY pro.Pro_PrecioMaximo DESC";
    //     }
    //     else if($orden == 4)
    //     {
    //       $order = "ORDER BY pro.Pro_PrecioMinimo";
    //     }

    //     $condicion = $where.' '. $order;
    //     $data['colores'] = $this->configuracionModel->get_coloresProducto();
    //     if($Suc_IdSubCategoria != 0)
    //     {
    //       if($Reg_IdRegion == 0)
    //       {
    //         $data['productos2'] = $this->productoModel->productos_subcategoria($Suc_IdSubCategoria, $condicion);
    //       }
    //       else
    //       {
    //         $data['productos2'] = $this->productoModel->productos_subcategoria_region($Suc_IdSubCategoria, $Reg_IdRegion, $condicion);
    //       }
    //     }
    //     else if($Cat_IdCategoria != 0)
    //     {
    //       if($Reg_IdRegion == 0)
    //       {
    //         $data['productos2'] = $this->productoModel->productos_categoria2($Cat_IdCategoria, $condicion);
    //       }
    //       else
    //       {
    //         $data['productos2'] = $this->productoModel->productos_categoria_region($Cat_IdCategoria, $Reg_IdRegion, $condicion);
    //       }
    //     }
    //     else
    //     {
    //       $nombre_producto = $this->input->post('nombre_producto');

    //       if($Reg_IdRegion == 0)
    //       {
    //         $data['productos2'] = $this->productoModel->productos_busqueda($nombre_producto, $condicion);
    //       }
    //       else
    //       {
    //         $data['productos2'] = $this->productoModel->productos_busqueda_region($nombre_producto, $Reg_IdRegion, $condicion);
    //       }
    //     }

    //     $data['vista'] = $vista;

    //     $this->twig->parse('index/ajax/filtro_productos.twig', $data);
    //   }
    // }
    function ajax_filtro_productos()
    {
      if($this->input->is_ajax_request()) {
        $data=$this->acl->load_datos();
        $vista=$this->input->post('vista');
        $filtro_nro=$this->input->post('filtro_nro');
        $filtro_tipo=$this->input->post('filtro_tipo');
        $nombre_busqueda=$this->input->post('nombre_busqueda');
        $data['vista']=$vista;

        if($filtro_tipo=="cat") {
          $data['producto']=$this->productoModel->productos_categoria($filtro_nro);
        }else if($filtro_tipo=="suc"){
          $data['producto']=$this->productoModel->productos_subcategoria($filtro_nro);
        }else if($filtro_tipo=="des"){
          $data['producto']=$this->productoModel->productos_detallesub($filtro_nro);
        }else if($filtro_tipo=="especial"){
          $data['producto']=$this->productoModel->productos_campana2();;
        }else if($filtro_tipo=="ultimos"){
          $data['producto']=$this->productoModel->productos_ultimos2("WHERE pro.Pro_FechaCreacion < '".date("Y-m-d")."'", "LIMIT 50");
        }else if($filtro_tipo=="popular"){
          $data['producto']=$this->productoModel->filtro_producto_popular();
        }else{
          $data['producto']=$this->productoModel->filtro_producto_nombre($nombre_busqueda);
        }
        
        foreach ($data['producto'] as $valor) {
          $valor->cantFav=$this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
          $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        }
        $this->twig->parse('index/ajax/filtro_productos.twig',$data);
      }
    }

    function ajax_filtro_grupal()
    {
      if($this->input->is_ajax_request()) {
        $data=$this->acl->load_datos();
        $vista=$this->input->post('vista');
        $data['vista']=$vista;
        $data['productos_grupal']=$this->productoModel->productos_grupal();
        
        foreach($data['productos_grupal'] as $valor) {
          $valor->cantFav=$this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
          $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        }
        $this->twig->parse('index/ajax/filtro_grupal.twig',$data);
      }
    }

    function buscar_autocomplete()
    {
      $dataNombres=(object)null;
      $datos_nombres=$this->productoModel->nombre_productos();

      foreach($datos_nombres as $key => $nom) {
        $valor=mb_convert_case($nom->Pro_Nombre,MB_CASE_TITLE,'UTF-8');
        $dataNombres->$valor=null;
      }

      $obj=(object)null; // create empty object, this syntax is the key
      $obj->arg1='hello';
      $obj->arg2='world';
      print_r(json_encode($dataNombres));
    }

    /*function buscar_autocomplete()
    {
      $datos_nombres = $this->productoModel->nombre_productos();
      $json_nombres = [];
      foreach ($datos_nombres as $key => $nom) {
        $json_nombres[] = ["name" => ucfirst($nom->Pro_Nombre)];
      }

      print_r(json_encode($json_nombres));
    }*/

    function _send_email($type, $email, &$data)
    {
      $this->load->library('email');
      $this->lang->load('tank_auth');
      $this->load->library('tank_auth');
      $this->email->from($email, $this->config->item('website_name','tank_auth'));
      $this->email->reply_to($this->config->item('webmaster_email','tank_auth'),$this->config->item('website_name','tank_auth'));
      $this->email->to($this->config->item('webmaster_email','tank_auth'));
      $this->email->subject("MENSAJE DE ".$data['nombre']);
      $this->email->message($this->load->view('usuario/email/'.$type.'-html',$data,TRUE));
      $this->email->set_alt_message($this->load->view('usuario/email/'.$type.'-txt',$data,TRUE));
      $this->email->send();
    }

    public function buildSlugValue($string) {
      $table=array(
        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
    );

    // -- Remove duplicated spaces
    $stripped=preg_replace(array('/\s{2,}/','/[\t\n]/'),' ',$string);
    $string=str_replace(',','',$string);
    $string=str_replace('.','',$string);

    // -- Returns the slug
    return strtolower(strtr($string, $table));
    }
  }
?>