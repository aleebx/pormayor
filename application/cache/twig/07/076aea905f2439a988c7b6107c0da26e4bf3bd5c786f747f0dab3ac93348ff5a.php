<?php

/* layout/intranet/template_lite_2.twig */
class __TwigTemplate_e1ff98e1243e72c7d0cfb5ea7bec5afb1f45767be5912a2630920606b0529a38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'analytics' => array($this, 'block_analytics'),
            'head' => array($this, 'block_head'),
            'messenger' => array($this, 'block_messenger'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\" xml:lang=\"es\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>      
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 7
        if ((($context["categoriaFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Nombre", array()));
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros ";
        } elseif ((($context["subcategoriaFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Nombre", array()));
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros";
        } elseif ((($context["detalleFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["detalle_seo"] ?? null), "Suc_Nombre", array()));
            echo " - ";
            echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Nombre", array());
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros";
        } else {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["pagina"] ?? null), "titulo", array()));
        }
        echo "</title>
<meta name=\"google-site-verification\" content=\"MZNqZwO63SqZWJMD-S5PwzQhXBJoFBLp8BmwSgYAexM\" />
<meta property=\"fb:app_id\" content=\"2623619600997776\" />
<meta property=\"og:title\" content=\"";
        // line 10
        echo twig_upper_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array()));
        echo "\" />
<meta property=\"og:description\" content=\"Precio Normal: S/";
        // line 11
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMaximo", array());
        echo "\"/>
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"https://pormayor.pe/img/";
        // line 13
        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Thumb", array());
        echo "\" />
<meta property=\"og:image:width\" content=\"400\" />
<meta property=\"og:image:height\" content=\"300\" />
<meta name=\"description\" content=\"";
        // line 16
        if ((($context["categoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Meta_Description", array())) {
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Meta_Description", array());
            } else {
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Nombre", array());
                echo " al por mayor con las mejores ofertas, solo aquí en PorMayor.pe. Cotiza ahora y abastece tu negocio fácil y rápido. ";
            }
        } elseif ((($context["subcategoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Meta_Description", array())) {
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Meta_Description", array());
            } else {
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Nombre", array());
                echo " al por mayor con las mejores ofertas, solo aquí en PorMayor.pe. Cotiza ahora y abastece tu negocio fácil y rápido. ";
            }
        } elseif ((($context["detalleFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["detalle_seo"] ?? null), "Des_Meta_Description", array())) {
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Meta_Description", array());
            } else {
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Nombre", array());
                echo " al por mayor con las mejores ofertas, solo aquí en PorMayor.pe. Cotiza ahora y abastece tu negocio fácil y rápido. ";
            }
        } else {
            echo "Compra y vende al por mayor en Lima.Crea tu propia tienda virtual mayorista o compra al por mayor para tu negocio fácil y rápido aquí.";
        }
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 17
        if ((($context["categoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Keywords", array())) {
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Keywords", array());
            } else {
                echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima";
            }
        } elseif ((($context["subcategoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Keywords", array())) {
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Keywords", array());
            } else {
                echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima";
            }
        } elseif ((($context["detalleFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["detalle_seo"] ?? null), "Des_Keywords", array())) {
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Keywords", array());
            } else {
                echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima";
            }
            echo " ";
        } else {
            echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima,";
        }
        echo "\">
<link rel=\"icon\" href=\"";
        // line 18
        echo ($context["ruta_img"] ?? null);
        echo "logo.png\">
<script data-ad-client=\"ca-pub-6014646385337670\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
";
        // line 21
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" media=\"screen\">
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo base_url("public/intranet/css/materialize.min.css");
        echo "\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo base_url("public/intranet/css/templates.min.css");
        echo "\"  media=\"screen\"/>
";
        // line 25
        $this->displayBlock('analytics', $context, $blocks);
        // line 26
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-129372100-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129372100-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6LFJ9S');</script>
<!-- End Google Tag Manager -->
<!-- Smartsupp Live Chat script -->
";
        // line 43
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "  <style type=\"text/css\">
  .autocomplete-content{width: 40vw!important;}
  .w100 {width:200% !important}
  @media only screen and (max-width: 600px) {
  .w100 {width:100% !important}
  .autocomplete-content{width: 80vw!important;}
  }
  </style>
</head>
<body id=\"inicio\" class=\"grey lighten-4\">
";
        // line 54
        $this->displayBlock('messenger', $context, $blocks);
        // line 55
        echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-P6LFJ9S\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2623619600997776',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.2'
    });      
    FB.AppEvents.logPageView();         
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"https://connect.facebook.net/es_ES/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Facebook Pixel Code -->
<script>
 !function(f,b,e,v,n,t,s)
 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
 n.queue=[];t=b.createElement(e);t.async=!0;
 t.src=v;s=b.getElementsByTagName(e)[0];
 s.parentNode.insertBefore(t,s)}(window, document,'script',
 'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2398432313771404');
 fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
 src=\"https://www.facebook.com/tr?id=2398432313771404&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->
<div class=\"inner\">
    <ul id='dropdown1' class='dropdown-content'>
      ";
        // line 96
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 97
            echo "        <li><a href=\"";
            echo base_url();
            echo "admin/tiendas\"><i class=\"material-icons left\">settings</i>Panel</a></li>
      ";
        } elseif (($this->getAttribute(        // line 98
($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 99
            echo "        <li><a href=\"";
            echo base_url();
            echo "gestor/gestion\"><i class=\"material-icons left\">settings</i>Panel Gestor</a></li>
      ";
        } else {
            // line 101
            echo "        <li><a href=\"";
            echo base_url();
            echo "comprador/index/\"><i class=\"material-icons left\">account_circle</i>Perfil de Usuario</a></li>
        ";
            // line 102
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 103
                echo "          <li><a href=\"https://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\"><i class=\"material-icons left\">settings</i>Panel Tienda</a></li>
        ";
            }
            // line 105
            echo "      ";
        }
        // line 106
        echo "      <li class=\"divider\"></li>
      <li><a class=\"cerrarSesionBtn\"><i class=\"material-icons left\">power_settings_new</i>Cerrar sesión</a></li>
    </ul>
    <ul id='dropdown2' class='dropdown-content'>
      ";
        // line 110
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 111
            echo "        ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 112
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 113
                echo base_url();
                echo "comprador/index/respuesta_comentario\">
              <i class=\"material-icons left\">comment</i>Tu comentario <b>fue respondido </b><span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 118
            echo "        ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 119
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 120
                echo base_url();
                echo "comprador/index/pedidos\">
              <i class=\"material-icons left\">comment</i><b>Respondieron</b> tu cotización <span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 125
            echo "      ";
        } else {
            // line 126
            echo "          <li >
            <a  href=\"#\">
              <span class=\"enfasisC\">No tienes notificaciones</span>
            </a>
          </li>
      ";
        }
        // line 132
        echo "    </ul>
</div>
    <div class=\"navbar-fixed inner\">
      <nav class=\"z-depth-2 pormayor nav-extended\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          ";
        // line 137
        if ((($context["userAgent"] ?? null) == "movil")) {
            // line 138
            echo "            <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton ocultarSearch sinPadding\" style=\"height:56px\">
              <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
                <img alt=\"\" src=\"";
            // line 140
            echo ($context["ruta_img"] ?? null);
            echo "menuIcon.svg\" width=\"35\">
                ";
            // line 141
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 142
                echo "                  <span class=\"pormayorUnico pulse\"></span>
                ";
            }
            // line 144
            echo "              </a>
            </div>
          ";
        }
        // line 147
        echo "          <div class=\"col s3 m2 l2 colMenuLogo ocultarSearch valign-wrapper hide-on-small-only\">
            <a href=\"";
        // line 148
        echo base_url();
        echo "\" class=\"valign-wrapper anchoTotal\">
              <img alt=\"Pomayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 149
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" class=\"centrarForzado\">
            </a>
          </div>     
          ";
        // line 152
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "     
              ";
            // line 153
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 154
                echo "          <div class=\"col l2 ocultarSearch colMenuPc sinPadding\">
            <ul>
              <li>          
  <div class=\"megaMenuCategorias submenu\">

    <a class='black-text negrita' href='#'>Categorías</a>
      <div class=\"containerCategorias centrarForzado white z-depth-2 sinPadding\">
        <div class=\"row sinBordeBottom\">
          <nav itemscope=\"\" itemtype=\"http://www.schema.org/SiteNavigationElement\" class=\"uniqueNav col l3 sinPadding categoriasBtn\">
              <div itemprop=\"name\" class=\"center categoriaBtn transition pormayorUnico white-text comoBoton positionRelative col l12 sinPadding valign-wrapper\"  data-idcateg=\"20\"><a itemprop=\"url\" href=\"#\" class=\"anchoTotal especialBtn\">COMPRAS GRUPALES</a></div>
";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    if (($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 16)) {
                        if ((($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 15) && ($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 10))) {
                            echo "<div itemprop=\"name\" class=\"categoriaBtn transition comoBoton positionRelative col l12 sinPadding valign-wrapper\" data-nomcate=\"";
                            echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                            echo "\" data-idcateg=\"";
                            echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                            echo "\"><a itemprop=\"url\" href=\"";
                            echo base_url();
                            echo "categorias/";
                            echo $this->getAttribute($context["cat"], "url", array());
                            echo "\" class=\"valign-wrapper\"><img alt=\"";
                            echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                            echo " al pormayor\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["cat"], "Cat_IconMobile", array());
                            echo "\" type=\"image/svg+xml\" class=\"\" width=\"23\" height=\"23\" />&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                            echo "</a></div>";
                        }
                    }
                    // line 165
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "          </nav>
          <div class=\"col l6 grey lighten-5\">
            <div class=\"containerSubcategorias\">
              <div class=\"subcategoria col l3 sinPadding anchoTotal defaultBanner\">
                <a class=\"sinPadding\" href=\"";
                // line 170
                echo base_url();
                echo "/grupal\">
                <img alt=\"Pormayor.pe - Promocion 1 \" class=\"b-lazy anchoTotal\" data-src=\"";
                // line 171
                echo ($context["ruta_img"] ?? null);
                echo "mbanner.webp\"  alt=\"Categoria pormayor.pe\">
                </a>
              </div>
";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    if (($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 16)) {
                        if ((($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 15) && ($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 10))) {
                            echo "<div class=\"subcategoria hide\" id=\"categoria";
                            echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                            echo "\" data-menu=\"";
                            echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                            echo "\" itemscope=\"\" itemtype=\"http://www.schema.org/SiteNavigationElement\">";
                            $context["break"] = false;
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["subcategoria"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                if ( !($context["break"] ?? null)) {
                                    if (($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) == $this->getAttribute($context["sub"], "categoria_Cat_IdCategoria", array()))) {
                                        echo "<a itemprop=\"url\" href=\"";
                                        echo base_url();
                                        echo "subcategoria/";
                                        echo $this->getAttribute($context["sub"], "url", array());
                                        echo "\" class=\"subcategoriaFirst transition sinPadding\" data-idsub=\"";
                                        echo $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array());
                                        echo "\" data-subnom=\"";
                                        echo $this->getAttribute($context["sub"], "Suc_Nombre", array());
                                        echo "\" >";
                                        echo twig_trim_filter($this->getAttribute($context["sub"], "Suc_Nombre", array()));
                                        echo "</a>";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(($context["subcat_detalle"] ?? null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["suc"]) {
                                            if ( !($context["break2"] ?? null)) {
                                                if ((($this->getAttribute($context["suc"], "subcategoria_Suc_IdSubCategoria", array()) == $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array())) && ($this->getAttribute($context["cat"], "Cat_Nombre", array()) == "Ferretería"))) {
                                                    if (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Piedras y Enchapes")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } else {
                                                        echo "<a  itemprop=\"url\" class=\"transition\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    }
                                                    $context["count3"] = (($context["count3"] ?? null) + 1);
                                                    if ((($context["count3"] ?? null) == 6)) {
                                                        $context["break2"] = true;
                                                    }
                                                } elseif ((($this->getAttribute($context["suc"], "subcategoria_Suc_IdSubCategoria", array()) == $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array())) && ($this->getAttribute($context["cat"], "Cat_Nombre", array()) != "Ferretería"))) {
                                                    if (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Botas y botines")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Cortador de Cabello")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Otros Accesorios")) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_IdDetalle_SubCategoria", array()) == "38")) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Accesorios")) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Calefacción")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Calzado para Niño")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Textiles de Comedor")) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Agendas")) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Maletas de viaje")) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_IdDetalle_SubCategoria", array()) == 97)) {
                                                        echo " <a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Equipos Ortopédicos")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } elseif (($this->getAttribute($context["suc"], "Des_Nombre", array()) == "Audio Profesional")) {
                                                        echo "<a itemprop=\"url\" class=\"transition fillerDeS\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    } else {
                                                        echo "<a itemprop=\"url\" class=\"transition\"  href=\"";
                                                        echo base_url();
                                                        echo "detalle/";
                                                        echo $this->getAttribute($context["suc"], "url", array());
                                                        echo "\">";
                                                        echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                                        echo "</a>";
                                                    }
                                                }
                                            }
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suc'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        $context["count2"] = (($context["count2"] ?? null) + 1);
                                        if ((($context["count2"] ?? null) == 8)) {
                                            $context["break"] = true;
                                        }
                                    }
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            $context["count2"] = 0;
                            echo "</div>";
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "            </div> 
          </div>
          <div class=\"col l3 sinPadding bannerVertical bannerCat20\"><a class=\"sinPadding lineHeight0\" href=\"";
                // line 177
                echo base_url();
                echo "especial/verano-de-ofertas\"><img data-src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "gb_m.webp\" class=\"b-lazy anchoTotal \" alt=\"Banner campaña pormayor.pe\"></a></div>
";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    if (((($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 15) && ($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 10)) && ($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) != 16))) {
                        // line 179
                        echo "<div class=\"col l3 sinPadding bannerVertical hide bannerCat";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo "\">
<a class=\"sinPadding lineHeight0\" href=\"";
                        // line 180
                        echo base_url();
                        echo "categorias/";
                        echo $this->getAttribute($context["cat"], "url", array());
                        echo "\"><img data-src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo "b_";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo ".webp\" class=\"b-lazy anchoTotal \" alt=\"";
                        echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                        echo " en pormayor.pe\"></a></div>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "                    </div>
                  </div>
                </div>
              </li>
<li>

  <a class='black-text negrita' style=\"padding-left:4px;\" href='";
                // line 188
                echo base_url();
                echo "grupal'>Grupos</a>
</li>
<li>
  <a class='black-text negrita' style=\"padding-left:4px;\" href='";
                // line 191
                echo base_url();
                echo "blog'>Blog</a>
</li>
            </ul>
          </div>
          ";
            }
            // line 195
            echo " 
          ";
        }
        // line 196
        echo "  
          ";
        // line 197
        if ( !($context["vista_carrito_compra"] ?? null)) {
            // line 198
            echo "            <div class=\"col ";
            if ((($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal") || ($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito"))) {
                echo " m6 s8 sinPadding ";
            } else {
                echo " m8 s10 ";
            }
            echo " l2\" style=\"padding-left:0px\" >
              <div class=\"contentSearch contentSearchTienda positionRelative\">
                <i class=\"material-icons positionAbsolute sinUser grey-text text-lighten-1 lineHeight0 transitionB\">search</i>
                <input type=\"text\" class=\"browser-default buscador autocomplete w100 redondeo white enfasisA\" placeholder=\"Buscar productos\" data-tienda=\"pormayor\">
              </div> 
            </div>
          ";
        } else {
            // line 205
            echo "            ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 206
                echo "              <div class=\"col l4 fontA center grey-text text-darken-3\" > 
                <span style=\"font-weight:100\">
               </div>
            ";
            } else {
                // line 210
                echo "              <div class=\"col s7 fontD2 center grey-text text-darken-3\" > 
                
               </div> 
            ";
            }
            // line 214
            echo "          ";
        }
        // line 215
        echo "          ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito")) {
            // line 216
            echo "            ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 217
                echo "              ";
                if ( !($context["producto_detalle"] ?? null)) {
                    // line 218
                    echo "                <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only\">
                  <div class=\"cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 220
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 221
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons\">shopping_cart</i></a>
                    <div class=\"pormayorUnico redondeo positionAbsolute center sinUser transition hide cartTotalPointer\">
                      <div class=\"positionAbsolute left0 right0\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </div>
                </div>
              ";
                } else {
                    // line 229
                    echo "                ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                        // line 230
                        echo "                  <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                    <div class=\"cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                        // line 232
                        echo ($context["totalc"] ?? null);
                        echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                        // line 233
                        echo base_url();
                        echo "productos/carrito\"><i class=\"black-text material-icons\">shopping_cart</i></a>
                    </div>
                    <div class=\"pormayorUnico redondeo positionAbsolute center sinUser transition hide cartTotalPointer\">
                      <div class=\"positionAbsolute left0 right0\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </div>
                ";
                    } else {
                        // line 241
                        echo "                  <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                    <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
                  </div>  
                ";
                    }
                    // line 245
                    echo "              ";
                }
                // line 246
                echo "            ";
            }
            // line 247
            echo "          ";
        }
        // line 248
        echo "         ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal")) {
            // line 249
            echo "          ";
            if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                // line 250
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 251
                    echo "              <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                <div class=\"cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 253
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                  <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 254
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons\">shopping_cart</i></a>
                </div>
                <div class=\"pormayorUnico redondeo positionAbsolute center sinUser transition hide cartTotalPointer\">
                  <div class=\"positionAbsolute left0 right0\"></div>
                  En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                </div>
              </div>
            ";
                }
                // line 262
                echo "          ";
            } else {
                // line 263
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 264
                    echo "              <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                  <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
              </div>
            ";
                }
                // line 268
                echo "          ";
            }
            // line 269
            echo "        ";
        }
        echo "   
          <div class=\"col s2 m3 l6 ocultarSearch colMenuPcII hide-on-med-and-down\">
            ";
        // line 271
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 272
            echo "                <ul  class=\"right\">
              ";
            // line 273
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 274
                echo "                  <li>
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
              ";
            }
            // line 278
            echo "                ";
            if ( !($context["producto_detalle"] ?? null)) {
                // line 279
                echo "                  <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                // line 280
                echo ($context["totalc"] ?? null);
                echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                // line 281
                echo base_url();
                echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                    <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                      <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </li>
                ";
            } else {
                // line 288
                echo "                  ";
                if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                    // line 289
                    echo "                    <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 290
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 291
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                      <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                        <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                        En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                      </div>
                    </li>
                  ";
                }
                // line 298
                echo "                ";
            }
            // line 299
            echo "              ";
            if (($context["reputacion_volver"] ?? null)) {
                // line 300
                echo "                <li class=\"positionRelative\">
                    <a class=\"black-text\" href=\"";
                // line 301
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i> Regresar</a>
                  </li> 
              ";
            }
            // line 304
            echo "                  <li class=\"positionRelative\">
                    ";
            // line 305
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 306
                echo "                      <span class=\"pormayorUnico pulse\" style=\"top: 15px;right: 0px;left: 28px;\"></span>
                    ";
            }
            // line 308
            echo "                    <a class=\"dropdown-trigger black-text\" href=\"#!\"  data-activates=\"dropdown2\">
                      <i class=\"material-icons\">";
            // line 309
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                echo "notifications";
            } else {
                echo "notifications_none";
            }
            echo "</i>
                    </a>
                  </li> 
                  ";
            // line 312
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 313
                echo "                  <li>
                    <a class=\"dropdown-trigger black-text\" href=\"#!\" data-activates=\"dropdown1\">";
                // line 314
                echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 7)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 7) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
                echo "<i class=\"material-icons right\">account_circle</i></a>
                  </li> 
                  ";
            }
            // line 317
            echo "                  ";
            if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                // line 318
                echo "                    ";
                // line 319
                echo "                      ";
                // line 320
                echo "                      ";
                // line 321
                echo "                    ";
                // line 322
                echo "                  ";
            }
            // line 323
            echo "                </ul>      
            ";
        } else {
            // line 325
            echo "              <ul class=\"right\">
                ";
            // line 326
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 327
                echo "                  <li class=\"\">
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
                ";
            }
            // line 330
            echo " 
                ";
            // line 331
            if (($context["vista_carrito_compra"] ?? null)) {
                // line 332
                echo "                  <li><a class=\"black-text\" onclick=\"javascript:history.back()\"><i class=\"material-icons left\">arrow_back</i>Regresar</a></li>
                ";
            }
            // line 334
            echo "                <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont positionAbsolute center\" data-totalc=\"";
            // line 335
            echo ($context["totalc"] ?? null);
            echo "\"><span class=\"cantidad\">0</span></span>
                  <a class=\"grey-text text-darken-4 cartTopPC verCarrito\" href=\"";
            // line 336
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\" style=\"font-size:30px\">shopping_cart</i>Mi compra</a>
                  <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                    <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                    En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                  </div>
                </li>
";
            // line 346
            echo "                <li>
                  <a class=\"black-text hide-on-med-and-up\" href=\"";
            // line 347
            echo base_url();
            echo "usuario/login\"><i class=\"material-icons\">account_circle</i></a>
                  <a href=\"";
            // line 348
            echo base_url();
            echo "usuario/login\" class=\"black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Iniciar Sesión\"><i class=\"material-icons green-text text-darken-4\" style=\"font-size:30px\">account_circle</i></a>
                </li>
              </ul>
            ";
        }
        // line 352
        echo "          </div>
          <a class=\"backSearch positionAbsolute lineHeight0 comoBoton \"><i class=\"material-icons grey-text sinUser lineHeight0\">arrow_back</i></a>
        </div>
        ";
        // line 355
        if (((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($context["producto_detalle"] ?? null)) && (($context["commentsNot"] ?? null) == false))) {
            // line 356
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\" >
              <div class=\"menuMobileSec2 hide col s3 center sinPadding\">
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\">Regresar</a>
              </div>
              <div class=\"menuMobileSec2 hide col s5 center sinPadding\">
                <a class=\"waves-effect waves-light btn-flat sinPadding irComprarBtn\" href=\"#compraBlock\"><i style=\"line-height: inherit\" class=\"left material-icons grey-text text-darken-3\">keyboard_arrow_down</i>Ir a comprar</a>
              </div>
              <div class=\"menuMobileSec2 hide col s4 center sinPadding\">
                <a class=\"comentsBtn waves-effect waves-light btn-flat sinPadding\" href=\"#comentsBlock\">comentarios</a>
              </div>
            </div>
          </div>
        ";
        } elseif (        // line 369
($context["filtro_movil_tiendas"] ?? null)) {
            // line 370
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\" browser-default filtroTCat simpleSelect grey-text text-darken-3\">
                  <option value=\"\" disabled selected>CATEGORÍA</option>
                  <option value=\"all\">Todos</option>
                  ";
            // line 376
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                // line 377
                echo "                    <option value=\"";
                echo $this->getAttribute($context["btc"], "Cat_IdCategoria", array());
                echo "\">";
                echo $this->getAttribute($context["btc"], "Cat_Nombre", array());
                echo " (";
                echo $this->getAttribute($context["btc"], "cantidad_cat", array());
                echo ")</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "                </select>
              </div>
              <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\"browser-default filtroDep simpleSelect grey-text text-darken-3\" >
                  <option value=\"\" disabled selected>DEPARTAMENTO</option>
                  <option value=\"all\" >Ver todas</option>
                  ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                // line 386
                echo "                    <option value=\"";
                echo $this->getAttribute($context["btd"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["btd"], "name", array());
                echo " (";
                echo $this->getAttribute($context["btd"], "cantidad_dep", array());
                echo ")</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 388
            echo "                </select>
              </div>
              <div class=\"col s3 center sinPadding\"> 
                <select class=\"browser-default filtroTFecha simpleSelect grey-text text-darken-3\" >
                  <option value=\"\" disabled selected>ORGANIZAR</option>
                  <option value=\"ninguno\">Ninguno</option>
                  <option value=\"fechaMenos\">Menos antiguedad SUNAT</option>
                  <option value=\"fechaMas\">Más antiguedad SUNAT</option>
                </select>
              </div>
            </div>
          </div>
        ";
        } elseif ((        // line 400
($context["filtro_movil"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 401
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 402
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 404
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 409
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 412
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 413
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                    echo "\">";
                    echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 415
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 418
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 419
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " s3 ";
                } else {
                    echo " s4 ";
                }
                echo " center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 423
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 424
                    echo "                          <option value=\"";
                    echo twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), array(" " => "", "\"" => "", "'" => ""));
                    echo "\">";
                    echo twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()));
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 426
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 428
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " s3 ";
                } else {
                    echo " s4 ";
                }
                echo " center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroEdoSelect\" >
                      <option value=\"\" disabled selected>ESTADO</option>
                      <option value=\"all\">Ambos</option>
                      <option value=\"Nuevo\">Nuevo</option>
                      <option value=\"Reacondicionado\">Reacondicionado</option>
                    </select>
                  </div>
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroPreciosSelect\" >
                      <option value=\"\" disabled selected>ORGANIZAR</option>
                      <option value=\"ninguno\">Ninguno</option>
                      <option value=\"menor\">Precio menor</option>
                      <option value=\"mayor\">Precio mayor</option>
                      <option value=\"fechaMenos\">Más nuevo</option>
                      <option value=\"fechaMas\">Más viejo</option>
                    </select>
                  </div>
                  ";
                // line 446
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 451
                echo "                </div>
                <div class=\"containerFiltrosC hide\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 457
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 458
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["btc"], "Cat_IdCategoria", array());
                    echo "\">";
                    echo $this->getAttribute($context["btc"], "Cat_Nombre", array());
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 460
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 466
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 467
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["btd"], "id", array());
                    echo "\">";
                    echo $this->getAttribute($context["btd"], "name", array());
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 469
                echo "                    </select>
                  </div>
                  <div class=\"col s3 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroTFecha\" >
                      <option value=\"\" disabled selected>ORGANIZAR</option>
                      <option value=\"ninguno\">Ninguno</option>
                      <option value=\"fechaMenos\">Menos antiguedad SUNAT</option>
                      <option value=\"fechaMas\">Más antiguedad SUNAT</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 483
            echo "        ";
        } elseif ((($context["filtro_movil"] ?? null) && ($context["solo_tienda"] ?? null))) {
            // line 484
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 485
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosC\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 492
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 493
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["btc"], "Cat_IdCategoria", array());
                    echo "\">";
                    echo $this->getAttribute($context["btc"], "Cat_Nombre", array());
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 495
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 501
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 502
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["btd"], "id", array());
                    echo "\">";
                    echo $this->getAttribute($context["btd"], "name", array());
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 504
                echo "                    </select>
                  </div>
                  <div class=\"col s3 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroTFecha\" >
                      <option value=\"\" disabled selected>ORGANIZAR</option>
                      <option value=\"ninguno\">Ninguno</option>
                      <option value=\"fechaMenos\">Menos antiguedad SUNAT</option>
                      <option value=\"fechaMas\">Más antiguedad SUNAT</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 518
            echo "        ";
        } elseif (($context["filtro_movil_especial"] ?? null)) {
            // line 519
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 520
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltros\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 527
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 528
                    echo "                          <option value=\"";
                    echo twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), array(" " => "", "\"" => "", "'" => ""));
                    echo "\">";
                    echo twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()));
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 530
                echo "                    </select>
                  </div>
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroEdoSelect\" >
                      <option value=\"\" disabled selected>ESTADO</option>
                      <option value=\"all\">Ambos</option>
                      <option value=\"Nuevo\">Nuevo</option>
                      <option value=\"Reacondicionado\">Reacondicionado</option>
                    </select>
                  </div>
                  <div class=\"col s4 center sinPadding\" > 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroPreciosSelect\" >
                      <option value=\"\" disabled selected>ORGANIZAR</option>
                      <option value=\"ninguno\">Ninguno</option>
                      <option value=\"menor\">Precio menor</option>
                      <option value=\"mayor\">Precio mayor</option>
                      <option value=\"fechaMenos\">Más nuevo</option>
                      <option value=\"fechaMas\">Más viejo</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 554
            echo "        ";
        } elseif (($context["filtro_movil_ultimos"] ?? null)) {
            // line 555
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 556
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 558
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 563
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 566
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 567
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                    echo "\">";
                    echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 569
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 572
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 573
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " s3 ";
                } else {
                    echo " s4 ";
                }
                echo " center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 577
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 578
                    echo "                          <option value=\"";
                    echo twig_replace_filter(twig_title_string_filter($this->env, $context["prm"]), array(" " => "", "\"" => "", "'" => ""));
                    echo "\">";
                    echo twig_title_string_filter($this->env, $context["prm"]);
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 580
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 582
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " s3 ";
                } else {
                    echo " s4 ";
                }
                echo " center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroEdoSelect\" >
                      <option value=\"\" disabled selected>ESTADO</option>
                      <option value=\"all\">Ambos</option>
                      <option value=\"Nuevo\">Nuevo</option>
                      <option value=\"Reacondicionado\">Reacondicionado</option>
                    </select>
                  </div>
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroPreciosSelect\" >
                      <option value=\"\" disabled selected>ORGANIZAR</option>
                      <option value=\"ninguno\">Ninguno</option>
                      <option value=\"menor\">Precio menor</option>
                      <option value=\"mayor\">Precio mayor</option>
                      <option value=\"fechaMenos\">Más nuevo</option>
                      <option value=\"fechaMas\">Más viejo</option>
                    </select>
                  </div>
                  ";
                // line 600
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 605
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 609
            echo "        ";
        } elseif (($context["filtro_movil_popular"] ?? null)) {
            // line 610
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 611
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 613
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 618
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 621
                $context["array_cat"] = array();
                // line 622
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 623
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array())), ($context["array_cat"] ?? null))) {
                        // line 624
                        echo "                           <option value=\"";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo "\">";
                        echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                        echo "</option>
                           ";
                        // line 625
                        $context["array_cat"] = twig_array_merge(($context["array_cat"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()))));
                        // line 626
                        echo "                        ";
                    }
                    // line 627
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 628
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 631
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 632
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " s3 ";
                } else {
                    echo " s4 ";
                }
                echo " center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 636
                $context["array_marcas"] = array();
                // line 637
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 638
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), ($context["array_marcas"] ?? null))) {
                        // line 639
                        echo "                          ";
                        $context["array_marcas"] = twig_array_merge(($context["array_marcas"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()))));
                        // line 640
                        echo "                        ";
                    }
                    // line 641
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 642
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["array_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 643
                    echo "                        ";
                    if ($context["prm"]) {
                        // line 644
                        echo "                          <option value=\"";
                        echo twig_replace_filter($context["prm"], array(" " => "", "\"" => "", "'" => ""));
                        echo "\">";
                        echo twig_title_string_filter($this->env, $context["prm"]);
                        echo "</option>
                        ";
                    }
                    // line 646
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 647
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 649
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " s3 ";
                } else {
                    echo " s4 ";
                }
                echo " center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroEdoSelect\" >
                      <option value=\"\" disabled selected>ESTADO</option>
                      <option value=\"all\">Ambos</option>
                      <option value=\"Nuevo\">Nuevo</option>
                      <option value=\"Reacondicionado\">Reacondicionado</option>
                    </select>
                  </div>
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3  filtroPreciosSelect\" >
                      <option value=\"\" disabled selected>ORGANIZAR</option>
                      <option value=\"ninguno\">Ninguno</option>
                      <option value=\"menor\">Precio menor</option>
                      <option value=\"mayor\">Precio mayor</option>
                      <option value=\"fechaMenos\">Más nuevo</option>
                      <option value=\"fechaMas\">Más viejo</option>
                    </select>
                  </div>
                  ";
                // line 667
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 672
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 676
            echo "        ";
        } elseif (($context["crear_tienda"] ?? null)) {
            // line 677
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 678
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosB \">
                  <div class=\"col s4 sinPadding center valign-wrapper\" style=\"height:36px;border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <a href=\"#utilizar\" class=\"centrarForzado grey-text text-darken-3\">PORMAYOR</a>
                  </div>
                  <div class=\"col s4 sinPadding center valign-wrapper\" style=\"height:36px;border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <a href=\"#vendes\" class=\"centrarForzado grey-text text-darken-3\">VENDER</a>
                  </div>
                  <div class=\"col s4 sinPadding center valign-wrapper\" style=\"height:36px;\"> 
                    <a href=\"#faq\" class=\"centrarForzado grey-text text-darken-3\">PREGUNTAS</a>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 694
            echo "        ";
        } elseif ((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["legales"] ?? null) == true))) {
            // line 695
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
                <div class=\"col s12 center\"> 
                  <select id=\"indiceLegal\" class=\"black-text sinPadding browser-default simpleSelect selectMovil\">
                    <option value=\"\" disabled selected>Indice de contenido</option>
                    <option value=\"Aceptación\">1. Aceptación</option>
                    <option value=\"Capacidad\">2. Capacidad</option>
                    <option value=\"Registración\">3. Registración</option>
                    <option value=\"Modificación\">4. Modificación y/o actualización del acuerdo</option>
                    <option value=\"Listado\">5. Listado de bienes.</option>
                    <option value=\"Privacidad\">6. Privacidad de la Información.</option>
                    <option value=\"Obligaciones\">7. Obligaciones y derechos de los Usuarios..</option>
                    <option value=\"Conductas\">8. Conductas prohibidas.</option>
                    <option value=\"Violaciones\">9. Violaciones del Sistema o Bases de Datos</option>
                    <option value=\"Sanciones\">10. Sanciones. Suspensión de operaciones.</option>
                    <option value=\"Responsabilidad\">11. Responsabilidad.</option>
                    <option value=\"Alcance\">12. Alcance de los servicios de pormayor.pe</option>
                    <option value=\"Fallas\">13. Fallas en el sistema.</option>
                    <option value=\"Tarifas\">14. Tarifas - Facturación.</option>
                    <option value=\"Sistema\">15. Sistema de reputación.</option>
                    <option value=\"Propiedad\">16. Propiedad Intelectual.</option>
                    <option value=\"Anexos\">17. Anexos.</option>
                    <option value=\"Jurisdicción\">18. Jurisdicción y Ley Aplicable.</option>
                    <option value=\"Domicilio\">19. Domicilio.</option>
                  </select>
                </div>
              </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 723
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["privacidad"] ?? null) == true))) {
            // line 724
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
                <div class=\"col s12 center\"> 
                  <select id=\"indiceLegal\" class=\"black-text sinPadding browser-default simpleSelect selectMovil\">
                    <option value=\"\" disabled selected>Indice de contenido</option>
                    <option value=\"Alcances\">Alcances</option>
                    <option value=\"Derechos\">Derechos de acceso, cancelación y rectificación de la información personal</option>
                    <option value=\"información\">La información recibida</option>
                    <option value=\"Uso\">Uso que hacemos de la información</option>
                    <option value=\"Confidencialidad\">Confidencialidad de la Información</option>
                    <option value=\"Clave\">Clave Personal</option>
                    <option value=\"Menores\">Menores de Edad</option>
                    <option value=\"Cookies\">Cookies</option>
                    <option value=\"Spam\">Spam</option>
                    <option value=\"Orden\">Orden de autoridades competentes - Requerimientos Legales.</option>
                    <option value=\"Seguridad\">Seguridad. Almacenamiento de la información</option>
                  </select>
                </div>
              </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 744
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["compra_segura"] ?? null) == true))) {
            // line 745
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
                <div class=\"col s12 center\"> 
                  <select id=\"indiceLegal\" class=\"black-text sinPadding browser-default simpleSelect selectMovil\">
                    <option value=\"\" disabled selected>Indice de contenido</option>
                    <option value=\"Capacidad\">Capacidad</option>
                    <option value=\"Registracion\">Registración de un Usuario</option>
                    <option value=\"Acceso\">Acceso a los “Servicio de CompraSegura”</option>
                    <option value=\"Gestion\">Gestión de pagos. Mandato</option>
                    <option value=\"Proceso\">Proceso del “Servicio de CompraSegura”</option>
                    <option value=\"Boton\">Botón pedidos, cotizar y comprar</option>
                    <option value=\"marcas\">Uso de marcas, logos y demás derechos de propiedad intelectual de los Vendedores</option>
                    <option value=\"Reclamo\">Reclamo</option>
                    <option value=\"Miscelaneas\">Misceláneas</option>
                  </select>
                </div>
              </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 763
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["centro_general"] ?? null) == true))) {
            // line 764
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al CENTRO DE AYUDA</a>
              </div>
            </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 771
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["reputacion_volver"] ?? null) == true))) {
            // line 772
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al PRODUCTO</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 780
        echo "        ";
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 781
            echo "          ";
            if (($context["vista_carrito"] ?? null)) {
                // line 782
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s4 sinUser center fontB2 pormayorUnico white-text\">
                  <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                </div>
                <div class=\"col s4 sinUser enfasisD center fontB2\">
                  <i class=\"material-icons left small\" >looks_two</i> <span class=\"positionRelative\">DESPACHO</span>
                </div>
                <div class=\"col s4 sinUser enfasisD center fontB2\">
                  <i class=\"material-icons left small\" >looks_3</i> <span class=\"positionRelative\">PAGO</span>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 795
($context["vista_carrito2"] ?? null)) {
                // line 796
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 798
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <div class=\"col s4 sinUser pormayorUnico white-text center fontB2\">
                  <i class=\"material-icons left small\" >looks_two</i> <span class=\"positionRelative\">DESPACHO</span>
                </div>
                <div class=\"col s4 sinUser enfasisD center fontB2\">
                  <i class=\"material-icons left small\" >looks_3</i> <span class=\"positionRelative\">PAGO</span>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 811
($context["vista_carrito3"] ?? null)) {
                // line 812
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 814
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <a href=\"";
                // line 819
                echo base_url();
                echo "productos/despacho\">
                  <div class=\"col s4 sinUser enfasisD center fontB2\">
                    <i class=\"material-icons left small\" >looks_two</i> <span class=\"positionRelative\">DESPACHO</span>
                  </div>
                </a>
                <div class=\"col s4 sinUser pormayorUnico white-text center fontB2\">
                  <i class=\"material-icons left small\" >looks_3</i> <span class=\"positionRelative\">PAGO</span>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 829
($context["vista_carrito4"] ?? null)) {
                // line 830
                echo "            <div class=\"nav-content pormayorUnico\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s12 sinUser center fontB2 enfasisD white-text\">
                  <p>ÚNETE A LA FAMILIA <b>PORMAYOR</b></p>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 837
($context["vista_carrito5"] ?? null)) {
                // line 838
                echo "          ";
            }
            // line 839
            echo "        ";
        }
        // line 840
        echo "      </nav>
    </div>
    <!-- HEADER -->
        ";
        // line 843
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 844
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                ";
            // line 846
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 847
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"http://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 848
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 849
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "gestor/gestion\" style=\"padding: 0 16px;\">GESTOR</a>
                ";
            }
            // line 851
            echo "                <a href=\"";
            echo base_url();
            echo "comprador/index/pedidos\" class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\">Perfil Usuario</a>
              </li>
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 853
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 856
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Ir a Inicio</a>      
              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 859
            echo base_url("grupal");
            echo "\"><i class=\"material-icons\">group</i>Ver Grupos</a>
              </li>
              <li class=\"itemMenu\">
                <a class=\"notiBtn white-text\">Notificaciones
                  <i class=\"material-icons left\">notifications</i>
                  ";
            // line 864
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 865
                echo "                    <span style=\"font-weight:600\" class=\"new badge pormayor pormayorAccent-text\" data-badge-caption=\"Nueva\"></span>
                  ";
            }
            // line 867
            echo "                </a> 
              </li>     
              <li class=\"itemMenu\">
                <ul class=\"collapsible collapsible-accordion\">
                  <li class=\"submenu\">
                    <a class=\"collapsible-header fixHeaderSideMobile waves-effect white-text\" href=\"#\" style=\"padding: 0 32px\">Categorias <i class=\"material-icons right\">keyboard_arrow_down</i></a>
                    <div class=\"collapsible-body\">
                      <ul class=\"grey darken-4\">";
            // line 874
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                echo "<ul class=\"collapsible collapsible-accordion\"><li class=\"submenu\"><a class=\"collapsible-header fixHeaderSideMobile\" href=\"#\"><img alt=\"";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["cat"], "Cat_IconMobile", array());
                echo "\" type=\"image/svg+xml\" class=\"positionRelative\" width=\"20\" height=\"20\" />&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo "<i class=\"material-icons right\">keyboard_arrow_down</i></a><div class=\"collapsible-body\"><ul class=\"grey darken-3\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subcategoria"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    if (($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) == $this->getAttribute($context["sub"], "categoria_Cat_IdCategoria", array()))) {
                        echo "<li><a class=\"white-text\" itemprop=\"url\" href=\"";
                        echo base_url();
                        echo "subcategoria/";
                        echo $this->getAttribute($context["sub"], "url", array());
                        echo "\" data-idsub=\"";
                        echo $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array());
                        echo "\" data-subnom=\"";
                        echo $this->getAttribute($context["sub"], "Suc_Nombre", array());
                        echo "\"><b>";
                        echo twig_trim_filter($this->getAttribute($context["sub"], "Suc_Nombre", array()));
                        echo "</b> </a>";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["subcat_detalle"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["suc"]) {
                            if (($this->getAttribute($context["suc"], "subcategoria_Suc_IdSubCategoria", array()) == $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array()))) {
                                if (($this->getAttribute($context["suc"], "Des_IdDetalle_SubCategoria", array()) == 230)) {
                                    echo "<a itemprop=\"url\" style=\"height:60px;line-height:30px\" href=\"";
                                    echo base_url();
                                    echo "detalle/";
                                    echo $this->getAttribute($context["suc"], "url", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                    echo "</a>";
                                } else {
                                    echo "<a itemprop=\"url\" href=\"";
                                    echo base_url();
                                    echo "detalle/";
                                    echo $this->getAttribute($context["suc"], "url", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                    echo "</a>";
                                }
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suc'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</ul></div></li></ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 875
            echo "                      </ul>
                    </div>
                  </li>
                </ul>
              </li>              
            </ul>         
        ";
        } else {
            // line 881
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn centrarForzado\" href=\"";
            // line 884
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
                ";
            // line 886
            echo "              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 888
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Inicio</a>      
              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 891
            echo base_url("grupal");
            echo "\"><i class=\"material-icons\">group</i>Grupos</a>
              </li>
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 894
            echo base_url();
            echo "/blog\"><i class=\"material-icons\">description</i>Blog</a>
              </li>      
              <li class=\"itemMenu\">
                <ul class=\"collapsible collapsible-accordion containerCatMovil\">
                  <li class=\"submenu\">
                    <a class=\"collapsible-header fixHeaderSideMobile waves-effect white-text\" href=\"#\">Categorias <i class=\"material-icons right\">keyboard_arrow_down</i></a>
                    <div class=\"collapsible-body\">
                      <ul class=\"grey darken-4\">";
            // line 901
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                echo "<ul class=\"collapsible collapsible-accordion\"><li class=\"submenu\"><a class=\"collapsible-header fixHeaderSideMobile\" href=\"#\"><img alt=\"";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["cat"], "Cat_IconMobile", array());
                echo "\" type=\"image/svg+xml\" class=\"positionRelative\" width=\"20\" height=\"20\" />&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo "<i class=\"material-icons right\">keyboard_arrow_down</i></a><div class=\"collapsible-body\"><ul class=\"grey darken-3\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subcategoria"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    if (($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) == $this->getAttribute($context["sub"], "categoria_Cat_IdCategoria", array()))) {
                        echo "<li><a class=\"white-text\" itemprop=\"url\" href=\"";
                        echo base_url();
                        echo "subcategoria/";
                        echo $this->getAttribute($context["sub"], "url", array());
                        echo "\" data-idsub=\"";
                        echo $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array());
                        echo "\" data-subnom=\"";
                        echo $this->getAttribute($context["sub"], "Suc_Nombre", array());
                        echo "\"><b>";
                        echo twig_trim_filter($this->getAttribute($context["sub"], "Suc_Nombre", array()));
                        echo "</b> </a>";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["subcat_detalle"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["suc"]) {
                            if (($this->getAttribute($context["suc"], "subcategoria_Suc_IdSubCategoria", array()) == $this->getAttribute($context["sub"], "Suc_IdSubCategoria", array()))) {
                                if (($this->getAttribute($context["suc"], "Des_IdDetalle_SubCategoria", array()) == 230)) {
                                    echo "<a itemprop=\"url\" style=\"height:60px;line-height:30px\" href=\"";
                                    echo base_url();
                                    echo "detalle/";
                                    echo $this->getAttribute($context["suc"], "url", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                    echo "</a>";
                                } else {
                                    echo "<a itemprop=\"url\" href=\"";
                                    echo base_url();
                                    echo "detalle/";
                                    echo $this->getAttribute($context["suc"], "url", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["suc"], "Des_Nombre", array());
                                    echo "</a>";
                                }
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suc'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</ul></div></li></ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 902
            echo "                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
        ";
        }
        // line 909
        echo "      <!-- Container Notficaciones -->
      <div id=\"notiContainer\" class=\"modal modal-fixed-footer\">
        <div class=\"modal-content modalCustomPro white\">
          <h5 style=\"padding:15px\" class=\"headerModal z-depth-2 pormayorAccent-text pormayor\">Notificaciones</h5>
          <div class=\"row\">
            ";
        // line 914
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 915
            echo "              ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 916
                echo "                <div style=\"padding: 10px 10px 15px 10px;border-bottom: 0.5px solid rgba(0,0,0,0.3);\" class=\"col s12 m12 l12\">
                  <i class=\"material-icons left enfasisA\">comment</i><span>Tu comentario <b>fue respondido</b><br> <a class=\"pormayorUnico-text\" href=\"";
                // line 917
                echo base_url();
                echo "comprador/index/respuesta_comentario\">Ver Respuestas</a></span>
                </div>
              ";
            }
            // line 920
            echo "              ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 921
                echo "                <div style=\"padding: 10px 10px 15px 10px;border-bottom: 0.5px solid rgba(0,0,0,0.3);\" class=\"col s12 m12 l12\">
                  <i class=\"material-icons left enfasisA\">playlist_add_check</i><span><b>Respondieron </b> tu cotización<br> <a class=\"pormayorUnico-text\" href=\"";
                // line 922
                echo base_url();
                echo "comprador/index/pedidos\">Ver Cotizaciones</a></span>
                </div>
              ";
            }
            // line 925
            echo "            ";
        } else {
            // line 926
            echo "            <div class=\"card center\">
              <div class=\"card-content\">
                <div class=\"row\">
                  <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                    <img class=\"b-lazy\" alt=\"Pormayor.pe - Notificacion vacia\" data-src=\"";
            // line 930
            echo ($context["ruta_img"] ?? null);
            echo "emptyNoti.webp\" height=\"150\">
                  </div>
                  <div class=\"center col s12 m12 l12\">
                    <h5>Sin notificaciones</h5>
                    <p class=\"enfasisC\">No tenemos notificaciones para ti en este momento</p>
                  </div>
                </div>
              </div>
            </div>          
            ";
        }
        // line 940
        echo "          </div>
        </div>
        <div class=\"modal-footer\">
          <a  href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Cerrar</a>
        </div>
      </div>
      <div class=\"overlayBody hide\"></div>      
      ";
        // line 947
        $this->displayBlock('content', $context, $blocks);
        // line 948
        echo "        <footer class=\"page-footer grey darken-4 black-text ";
        if (($context["nofooter"] ?? null)) {
            echo "hide";
        }
        echo "\">
          <div class=\"container\">
            <div class=\"row pormayor\">
              <div class=\"col s12 l12\">&nbsp;</div>
              <div class=\"col s12 l12\">
                  <div class=\"row\">
                    <div class=\"col s12 l3 center-align input-field\">
                      <a href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"Instagram PorMayor.pe\" title=\"Instagram PorMayor.pe\" src=\"";
        // line 955
        echo ($context["ruta_img"] ?? null);
        echo "instaW.png\" height=\"30\"></a>
                      <a href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"Facebook PorMayor.pe\" title=\"Facebook PorMayor.pe\" src=\"";
        // line 956
        echo ($context["ruta_img"] ?? null);
        echo "faceW.png\" height=\"30\"></a>
                      <a href=\"mailto:contacto@pormayor.pe\"><img alt=\"Correo PorMayor.pe\" title=\"Correo PorMayor.pe\" src=\"";
        // line 957
        echo ($context["ruta_img"] ?? null);
        echo "mailW.png\" height=\"30\"></a>
                      <a href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"Youtube PorMayor.pe\" title=\"Youtube PorMayor.pe\" src=\"";
        // line 958
        echo ($context["ruta_img"] ?? null);
        echo "youtubeW.png\" height=\"30\"></a>
                    </div>
                    <div class=\"col l4 input-field\">
                      <span>Recibe las últimas tendencias de PorMayor.pe e ideas únicas para regalar directamente en tu bandeja de entrada</span>
                    </div>
                    <div class=\"col s6 l3 input-field\">
                      <input type=\"email\" id=\"email_subs\" class=\"redondeo white\" placeholder=\"Introduce tu correo electrónico\">
                    </div>
                    <div class=\"col s6 l2 center-align input-field\">
                      <a class=\"btn subscribeBtn grey darken-4 pulse negrita\">SUSCRIBIRME</a>  
                    </div>                    
                </div>
              </div>
              </div>
              <div class=\"row white-text\">
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">PorMayor.pe</h5>
                <p>Somos el primer ecommerce mayoista del Perú, dónde encontras novedades al mejor precio y puedas emprender tu negocio.</p>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">MI CUENTA</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 980
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 981
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 982
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 983
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">SERVICIO AL CLIENTE</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 989
        echo base_url();
        echo "legal/centro\">Centro de Ayuda</a></li>
                  <li><a class=\"\" href=\"";
        // line 990
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 991
        echo base_url();
        echo "legal/privacidad\">Politicas de Privacidad</a></li>
                  <li><a class=\"\" href=\"";
        // line 992
        echo base_url();
        echo "legal/compra_segura\">Compra Segura</a></li>
                  <li><a class=\"\" href=\"http://runningbox.azurewebsites.net/Orden/ListaTracking/\">Rastrea tu Pedido</a></li>
                  <li><a class=\"\" href=\"";
        // line 994
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones <i class=\"material-icons\">menu_book</i></a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">ESCRÍBENOS</h5>
                <ul>
                  <li><a href=\"tel:51923500413\">923500413</a></li>
                  <li><a href=\"mailto:contacto@pormayor.pe\">contacto@pormayor.pe</a></li>
                  <li>Horario de Atención:<br>
                    Lunes a Viernes: 9:00 AM a 6:30 PM<br>
                    Sábados: 9:00 AM a 1:00 PM</li>
                  <li>Jirón Andahuaylas 251 - Interior 208, Cercado de Lima - Perú</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"row container\">
              <div class=\"col l6 center\">
                © 2018 Derechos Reservados <a href=\"";
        // line 1013
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 1016
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\"></a>
              </div>
              <div class=\"col l1\">
                <img src=\"";
        // line 1019
        echo ($context["ruta_img"] ?? null);
        echo "visa.svg\" height=\"67px\">
              </div>          
              <div class=\"col l1\">
                <img src=\"";
        // line 1022
        echo ($context["ruta_img"] ?? null);
        echo "cmc.svg\" height=\"67px\">
              </div>          
              <div class=\"col l1\">
                <img src=\"";
        // line 1025
        echo ($context["ruta_img"] ?? null);
        echo "cdc.svg\" height=\"67px\">
              </div>         
              <div class=\"col l1\">
                <img src=\"";
        // line 1028
        echo ($context["ruta_img"] ?? null);
        echo "cae.svg\" height=\"67px\">
              </div>          
              <div class=\"col s12 l12\">
                <span class=\"right fontD2\">Autorizados por Visa para realizar transacciones electrónicas</span>
              </div>
          </div>
        </footer>      
    ";
        // line 1035
        $this->displayBlock('modal', $context, $blocks);
        // line 1036
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\"></script>
      <script src=\"";
        // line 1041
        echo base_url("public/js/template-lite.js?v=2.0");
        echo "\" defer></script>
      <script src=\"";
        // line 1042
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\" defer></script> 
    ";
        // line 1043
        $this->displayBlock('script', $context, $blocks);
        // line 1044
        echo "   </body>

</html>";
    }

    // line 25
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 54
    public function block_messenger($context, array $blocks = array())
    {
    }

    // line 947
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 1035
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 1043
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/template_lite_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2392 => 1043,  2386 => 1035,  2380 => 947,  2375 => 54,  2369 => 43,  2364 => 25,  2358 => 1044,  2356 => 1043,  2352 => 1042,  2348 => 1041,  2339 => 1036,  2337 => 1035,  2327 => 1028,  2321 => 1025,  2315 => 1022,  2309 => 1019,  2303 => 1016,  2297 => 1013,  2275 => 994,  2270 => 992,  2266 => 991,  2262 => 990,  2258 => 989,  2249 => 983,  2245 => 982,  2241 => 981,  2237 => 980,  2212 => 958,  2208 => 957,  2204 => 956,  2200 => 955,  2187 => 948,  2185 => 947,  2176 => 940,  2163 => 930,  2157 => 926,  2154 => 925,  2148 => 922,  2145 => 921,  2142 => 920,  2136 => 917,  2133 => 916,  2130 => 915,  2128 => 914,  2121 => 909,  2112 => 902,  2048 => 901,  2038 => 894,  2032 => 891,  2026 => 888,  2022 => 886,  2018 => 884,  2013 => 881,  2004 => 875,  1940 => 874,  1931 => 867,  1927 => 865,  1925 => 864,  1917 => 859,  1911 => 856,  1905 => 853,  1899 => 851,  1893 => 849,  1891 => 848,  1884 => 847,  1882 => 846,  1878 => 844,  1876 => 843,  1871 => 840,  1868 => 839,  1865 => 838,  1863 => 837,  1854 => 830,  1852 => 829,  1839 => 819,  1831 => 814,  1827 => 812,  1825 => 811,  1809 => 798,  1805 => 796,  1803 => 795,  1788 => 782,  1785 => 781,  1782 => 780,  1772 => 772,  1770 => 771,  1761 => 764,  1759 => 763,  1739 => 745,  1737 => 744,  1715 => 724,  1713 => 723,  1683 => 695,  1680 => 694,  1662 => 678,  1659 => 677,  1656 => 676,  1650 => 672,  1642 => 667,  1617 => 649,  1613 => 647,  1607 => 646,  1599 => 644,  1596 => 643,  1591 => 642,  1585 => 641,  1582 => 640,  1579 => 639,  1576 => 638,  1571 => 637,  1569 => 636,  1558 => 632,  1552 => 631,  1547 => 628,  1541 => 627,  1538 => 626,  1536 => 625,  1529 => 624,  1526 => 623,  1521 => 622,  1519 => 621,  1511 => 618,  1501 => 613,  1497 => 611,  1494 => 610,  1491 => 609,  1485 => 605,  1477 => 600,  1452 => 582,  1448 => 580,  1437 => 578,  1433 => 577,  1422 => 573,  1416 => 572,  1411 => 569,  1400 => 567,  1396 => 566,  1388 => 563,  1378 => 558,  1374 => 556,  1371 => 555,  1368 => 554,  1342 => 530,  1331 => 528,  1327 => 527,  1318 => 520,  1315 => 519,  1312 => 518,  1296 => 504,  1285 => 502,  1281 => 501,  1273 => 495,  1262 => 493,  1258 => 492,  1249 => 485,  1246 => 484,  1243 => 483,  1227 => 469,  1216 => 467,  1212 => 466,  1204 => 460,  1193 => 458,  1189 => 457,  1181 => 451,  1173 => 446,  1148 => 428,  1144 => 426,  1133 => 424,  1129 => 423,  1118 => 419,  1112 => 418,  1107 => 415,  1096 => 413,  1092 => 412,  1084 => 409,  1074 => 404,  1070 => 402,  1067 => 401,  1065 => 400,  1051 => 388,  1038 => 386,  1034 => 385,  1026 => 379,  1013 => 377,  1009 => 376,  1001 => 370,  999 => 369,  984 => 356,  982 => 355,  977 => 352,  970 => 348,  966 => 347,  963 => 346,  954 => 336,  950 => 335,  947 => 334,  943 => 332,  941 => 331,  938 => 330,  932 => 327,  930 => 326,  927 => 325,  923 => 323,  920 => 322,  918 => 321,  916 => 320,  914 => 319,  912 => 318,  909 => 317,  903 => 314,  900 => 313,  898 => 312,  888 => 309,  885 => 308,  881 => 306,  879 => 305,  876 => 304,  870 => 301,  867 => 300,  864 => 299,  861 => 298,  851 => 291,  847 => 290,  844 => 289,  841 => 288,  831 => 281,  827 => 280,  824 => 279,  821 => 278,  815 => 274,  813 => 273,  810 => 272,  808 => 271,  802 => 269,  799 => 268,  793 => 264,  790 => 263,  787 => 262,  776 => 254,  772 => 253,  768 => 251,  765 => 250,  762 => 249,  759 => 248,  756 => 247,  753 => 246,  750 => 245,  744 => 241,  733 => 233,  729 => 232,  725 => 230,  722 => 229,  711 => 221,  707 => 220,  703 => 218,  700 => 217,  697 => 216,  694 => 215,  691 => 214,  685 => 210,  679 => 206,  676 => 205,  661 => 198,  659 => 197,  656 => 196,  652 => 195,  644 => 191,  638 => 188,  630 => 182,  613 => 180,  608 => 179,  603 => 178,  597 => 177,  593 => 175,  401 => 174,  395 => 171,  391 => 170,  385 => 166,  379 => 165,  355 => 164,  343 => 154,  341 => 153,  337 => 152,  331 => 149,  327 => 148,  324 => 147,  319 => 144,  315 => 142,  313 => 141,  309 => 140,  305 => 138,  303 => 137,  296 => 132,  288 => 126,  285 => 125,  277 => 120,  274 => 119,  271 => 118,  263 => 113,  260 => 112,  257 => 111,  255 => 110,  249 => 106,  246 => 105,  238 => 103,  236 => 102,  231 => 101,  225 => 99,  223 => 98,  218 => 97,  216 => 96,  173 => 55,  171 => 54,  159 => 44,  157 => 43,  138 => 26,  136 => 25,  132 => 24,  127 => 22,  124 => 21,  119 => 18,  94 => 17,  67 => 16,  61 => 13,  56 => 11,  52 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/template_lite_2.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\layout\\intranet\\template_lite_2.twig");
    }
}
