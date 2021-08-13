<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Categoria extends CI_Controller
	{
		function __construct()
		{
		  parent::__construct();
	      $this->load->model("Plan_model", "planModel");
	      $this->load->model("Configuracion_model", "configuracionModel");
	      $this->load->model("Cotizacion_model", "cotizacionModel");
	      $this->load->model("Tienda_model", "tiendaModel");
	      $this->load->model("Producto_Favorito_model", "productoFavoritoModel");
		}

		public function c($Cat_IdCategoria=false)
	    {
	    	// $Cat_IdCategoria="belleza-y-cuidado-personal-al-por-mayor-1";
	      if($Cat_IdCategoria)
	      {
	        $data = $this->acl->load_datos();

	        $categoria_completa = explode("-", $Cat_IdCategoria);
	        $url_nombre = implode("-", $categoria_completa);
	        $titulo_pag = ucfirst(implode(" ", $categoria_completa));

	        //Ver la ultima key con Cat_IdCategoria
	        end($categoria_completa);
	        $key = key($categoria_completa);
	        $Cat_IdCategoria = (int)$categoria_completa[$key];

	        $this->load->library("cart");
	        $data['pagina']['tipo'] = "carrito";
	        $data['pagina']['extrabtn'] = 'SI';
	        $data['carrito'] = $this->cart->contents();
	        $data['producto'] = $this->productoModel->productos_categoria($Cat_IdCategoria);
	        $data['pagina']['titulo'] =  $titulo_pag;
	        $data['filtro'] = $this->productoModel->get_filtro();
	        
	        if (empty($data['producto']))
	        {
	          $data['noproducto'] = "NO SE ENCONTRO PRODUCTO CON ESE NOMBRE";
	        }
	        $data['colores'] = $this->configuracionModel->get_coloresProducto();
	        $data['SKU'] = $this->productoModel->get_sku();
	        $data['fotos'] = $this->productoModel->get_fotos_producto();

	        if(isset($data['usuario']['id_usuario']))
	        {
	          $data['noticoments'] = $this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
	          $data['noticotiza'] = $this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
	          $data['productos_favoritos'] = $this->productoFavoritoModel->get_favoritos_x_usuario($data['usuario']['id_usuario']);
	        }

	        $data['cantidad_productos'] = $this->productoModel->get_cantidad_producto_x_categoria();
	        $data['regiones'] = $this->productoModel->get_cantidad_productos_x_region_x_categoria($Cat_IdCategoria);
	        $data['Cat_IdCategoria'] = $Cat_IdCategoria;

	        $this->twig->parse('tienda/inicio.twig', $data);
	      }
	      else
	      {
	        $data = $this->acl->load_datos();
	        $data['pagina']['tipo'] = "carrito";
	        $data['pagina']['titulo'] =  "Categorias pormayor.pe";
	        $this->load->library("cart");
	        $data['carrito'] = $this->cart->contents();

	        $data['bcategorias'] = true;
	        $data['categorias2'] = $this->productoModel->get_Categoria();
	        
	        //URL categoria
	        foreach ($data['categorias2'] as $valor) {
	          $valor->url =  $this->buildSlugValue($valor->Cat_Nombre)."-al-por-mayor-".$valor->Cat_IdCategoria;
	        }

	        $data['subcategoria2'] = $this->productoModel->get_subCategoria2();

	        //URL subcategoria
	        foreach ($data['subcategoria2'] as $valor) {
	          $valor->url =  $this->buildSlugValue($valor->Suc_Nombre)."-al-por-mayor-".$valor->Suc_IdSubCategoria;
	        }

	        if(isset($data['usuario']['id_usuario']))
	        {
	          $data['noticoments'] = $this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
	          $data['noticotiza'] = $this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
	          $data['productos_favoritos'] = $this->productoFavoritoModel->get_favoritos_x_usuario($data['usuario']['id_usuario']);
	        }

	        $this->twig->parse('categorias.twig', $data);
	      }
	    }

			public function s($Suc_IdSubCategoria=false)
		    {
		      $data = $this->acl->load_datos();

		      $subCat_completa = explode("-", $Suc_IdSubCategoria);
		      $url_nombre = implode("-", $subCat_completa);
		      $titulo_pag = ucfirst(implode(" ", $subCat_completa));

		      $data['url'] =  substr($url_nombre,0, -2);
		      
		      //Ver la ultima key con Suc_IdSubCategoria
		      end($subCat_completa);
		      $key = key($subCat_completa);
		      $Suc_IdSubCategoria = (int)$subCat_completa[$key];

		      $data['pagina']['tipo'] = "carrito";
		      $data['pagina']['extrabtn'] = 'SI';
		      $data['producto'] = $this->productoModel->productos_subcategoria($Suc_IdSubCategoria);
		      //URL categoria
		      foreach ($data['producto'] as $valor) {
		        $valor->urlCategoria =  $this->buildSlugValue($valor->Cat_Nombre)."-al-por-mayor-".$valor->Cat_IdCategoria;
		        $valor->urlSubCategoria =  $this->buildSlugValue($valor->Suc_Nombre)."-al-por-mayor-".$valor->Suc_IdSubCategoria;
		      }

		      //print_r($data['producto']);
		      
		      $data['pagina']['titulo'] =  $titulo_pag;
		      $data['filtro'] = $this->productoModel->get_filtro();

		      $this->load->library("cart");
		      $data['carrito'] = $this->cart->contents();

		      if (empty($data['producto']))
		      {
		        $data['noproducto'] = "NO SE ENCONTRO PRODUCTO CON ESE NOMBRE";
		      }

		      $data['colores'] = $this->configuracionModel->get_coloresProducto();
		      $data['SKU'] = $this->productoModel->get_sku();
		      $data['fotos'] = $this->productoModel->get_fotos_producto();

		      if(isset($data['usuario']['id_usuario']))
		      {
		        $data['noticoments'] = $this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
		        $data['noticotiza'] = $this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
		        $data['productos_favoritos'] = $this->productoFavoritoModel->get_favoritos_x_usuario($data['usuario']['id_usuario']);
		      }

		      $data['cantidad_productos'] = $this->productoModel->get_cantidad_producto_x_categoria();
		      $data['regiones'] = $this->productoModel->get_cantidad_productos_x_region_x_subcategoria($Suc_IdSubCategoria);
		      $data['Suc_IdSubCategoria'] = $Suc_IdSubCategoria;

		      $this->twig->parse('tienda/inicio.twig', $data);
		    }
				
	}
?>