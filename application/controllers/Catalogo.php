<?php

  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Catalogo extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model("Plan_model","planModel");
      $this->load->model("Tienda_model","tiendaModel");
      $this->load->model("Configuracion_model","configuracionModel");
      $this->load->model("Producto_Favorito_model","productoFavoritoModel");
    }

    public function index()
    {
    $data = $this->acl->load_datos();
    $data['pagina']['titulo'] = 'PorMayor.pe – Catalogo';
    $data['vista_carrito5'] = true;
    $data['vista_carrito_compra'] = true;
    $data['nofooter'] = true;
     $data['productos']=$this->productoModel->productos_principal2();
    $this->twig->parse('catalogo.twig', $data);

    }    

    public function vnd($vend = false)
    {
    $data = $this->acl->load_datos();
    $data['pagina']['titulo'] = 'PorMayor.pe – Catalogo';
    $data['vista_carrito5'] = true;
    $data['vista_carrito_compra'] = true;
    $data['nofooter'] = true;
     $data['productos']=$this->productoModel->productos_principal2();
    if ($vend) {
      $data['vendedor'] = $this->productoModel->vendedor($vend);
      $_SESSION["vendedor"] = $data['vendedor'];
    }
    $this->twig->parse('catalogo.twig', $data);

    } 
       
    public function mayor($vend = false)
    {
    $data = $this->acl->load_datos();
    $data['pagina']['titulo'] = 'PorMayor.pe – Catalogo';
    $data['vista_carrito5'] = true;
    $data['vista_carrito_compra'] = true;
    $data['nofooter'] = true;
     $data['productos']=$this->productoModel->productos_principal2();
    if ($vend) {
      $data['vendedor'] = $this->productoModel->vendedor($vend);
      $_SESSION["vendedor"] = $data['vendedor'];
    }
    $this->twig->parse('catalogo2.twig', $data);

    }    

    public function det($Cat_IdCategoria = false)
    {
      $data = $this->acl->load_datos();
      $data['pagina']['titulo'] = 'PorMayor.pe – Catalogo';
      $data['vista_carrito5'] = true;
      $data['vista_carrito_compra'] = true;
      $data['nofooter'] = true;
      $data['id'] = (int)$Cat_IdCategoria;

      $data['producto'] = $this->productoModel->productos_catalogo("WHERE prt.Tie_IdTienda = 227 AND prc.Cat_IdCategoria = $Cat_IdCategoria");
      
      if (isset($_SESSION["vendedor"])) {
        $data['vendedor'] = $_SESSION["vendedor"];
      }

      $this->twig->parse('catalogo_lista.twig', $data);
    }

    public function producto($Pro_IdProducto = false)
    {
      $data = $this->acl->load_datos();
      $data['pagina']['titulo'] = 'PorMayor.pe – Catalogo';
      $data['vista_carrito5'] = true;
      $data['vista_carrito_compra'] = true;
      // echo $Pro_IdProducto;
      $data['nofooter'] = true;
      $Pro_IdProducto = (int)$Pro_IdProducto;
      $data['producto'] = $this->productoModel->productos_d($Pro_IdProducto);
      $data['fotos'] = $this->productoModel->get_fotos_producto($Pro_IdProducto);
      // print_r($data['producto']);

      if (isset($_SESSION["vendedor"])){
        $data['vendedor'] = $_SESSION["vendedor"];
      }

      $this->twig->parse('catalogo_producto.twig', $data);
    }

    public function producto_mayor($Pro_IdProducto = false)
    {
      $data = $this->acl->load_datos();
      $data['pagina']['titulo'] = 'PorMayor.pe – Catalogo';
      $data['vista_carrito5'] = true;
      $data['vista_carrito_compra'] = true;
      // echo $Pro_IdProducto;
      $data['nofooter'] = true;
      $Pro_IdProducto = (int)$Pro_IdProducto;
      $data['producto'] = $this->productoModel->productos_d($Pro_IdProducto);
      $data['fotos'] = $this->productoModel->get_fotos_producto($Pro_IdProducto);
      $data['precios'] = $this->productoModel->precios_producto($Pro_IdProducto);

      // print_r($data['producto']);

      if (isset($_SESSION["vendedor"])){
        $data['vendedor'] = $_SESSION["vendedor"];
      }

      $this->twig->parse('catalogo_producto2.twig', $data);
    }

  }
  ?>