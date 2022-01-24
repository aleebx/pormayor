<?php

/* layout/intranet/template_lite.twig */
class __TwigTemplate_9dd9fc1a53d39c7e08a64c397e7d8acefee90715d7d3da380e56fe6bb30b7ce9 extends Twig_Template
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
<meta name=\"facebook-domain-verification\" content=\"cle4kath1djfbrcx1wejg9hfcattr7\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 8
        if ((($context["categoriaFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Nombre", array()));
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros";
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
        // line 11
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            echo twig_upper_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array()));
            echo " - Hasta S/";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
        } else {
            echo " PorMayor.pe - Crece con nosotros";
        }
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 12
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            echo "Precio Normal: S/";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMaximo", array());
        } else {
            echo "Ayudamos a crecer a todo los  nuevos emprendedores en iniciar su negocio. Llévate todo surtido y a precio por mayor por una compra mínima de 500 soles";
        }
        echo "\"/>
";
        // line 13
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            // line 14
            echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"https://pormayor.pe/img/";
            // line 15
            echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
            echo "\" />
<meta property=\"og:image:width\" content=\"400\" />
<meta property=\"og:image:height\" content=\"300\" />
";
        } else {
            // line 19
            echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"https://pormayor.pe/img/logoPM2.jpg\" />
";
        }
        // line 22
        echo "<meta name=\"description\" content=\"";
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
        // line 23
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
        // line 24
        echo ($context["ruta_img"] ?? null);
        echo "logo.png\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" media=\"screen\">
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo base_url("public/intranet/css/materialize.min.css");
        echo "\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo base_url("public/intranet/css/templates.min.css");
        echo "\"  media=\"screen\"/>
";
        // line 29
        $this->displayBlock('analytics', $context, $blocks);
        // line 30
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
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '258247118783393');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=258247118783393&ev=PageView&noscript=1\"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
";
        // line 61
        $this->displayBlock('head', $context, $blocks);
        // line 62
        echo "  <style type=\"text/css\">
  .autocomplete-content{width: 40vw!important;}
  .w100 {width:200% !important}
  @media only screen and (max-width: 600px) {
  .w100 {width:100% !important}
  .autocomplete-content{width: 80vw!important;}
  }
  </style>
</head>
<body id=\"inicio\" class=\"\">
  <div id=\"api-chat-bot\"></div>
";
        // line 73
        $this->displayBlock('messenger', $context, $blocks);
        // line 74
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
fbq('init', '366482671192300');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=366482671192300&ev=PageView&noscript=1\"
/></noscript>
<!-- Messenger plugin de chat Code -->
<div id=\"fb-root\"></div>
    <!-- Your plugin de chat code -->
    <div id=\"fb-customer-chat\" class=\"fb-customerchat\">
    </div>
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute(\"page_id\", \"283998535780000\");
      chatbox.setAttribute(\"attribution\", \"biz_inbox\");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<div class=\"inner\">
    <ul id='dropdown1' class='dropdown-content'>
      ";
        // line 138
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 139
            echo "        <li><a href=\"";
            echo base_url();
            echo "admin/tiendas\"><i class=\"material-icons left\">settings</i>Panel</a></li>
      ";
        } elseif (($this->getAttribute(        // line 140
($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 141
            echo "        <li><a href=\"";
            echo base_url();
            echo "vnd/ventas\"><i class=\"material-icons left\">settings</i>Panel Gestor</a></li>
      ";
        } else {
            // line 143
            echo "        <li><a href=\"";
            echo base_url();
            echo "comprador/index/\"><i class=\"material-icons left\">account_circle</i>Perfil de Usuario</a></li>
        ";
            // line 144
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 145
                echo "          <li><a href=\"https://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\"><i class=\"material-icons left\">settings</i>Panel Tienda</a></li>
        ";
            }
            // line 147
            echo "      ";
        }
        // line 148
        echo "      <li class=\"divider\"></li>
      <li><a class=\"cerrarSesionBtn\"><i class=\"material-icons left\">power_settings_new</i>Cerrar sesión</a></li>
    </ul>
    <ul id='dropdown2' class='dropdown-content'>
      ";
        // line 152
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 153
            echo "        ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 154
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 155
                echo base_url();
                echo "comprador/index/respuesta_comentario\">
              <i class=\"material-icons left\">comment</i>Tu comentario <b>fue respondido </b><span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 160
            echo "        ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 161
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 162
                echo base_url();
                echo "comprador/index/pedidos\">
              <i class=\"material-icons left\">comment</i><b>Respondieron</b> tu cotización <span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 167
            echo "      ";
        } else {
            // line 168
            echo "          <li >
            <a  href=\"#\">
              <span class=\"enfasisC\">No tienes notificaciones</span>
            </a>
          </li>
      ";
        }
        // line 174
        echo "    </ul>
</div>
    <div class=\"navbar-fixed inner\">
      <nav class=\"z-depth-2 pormayor nav-extended\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          ";
        // line 179
        if ((($context["userAgent"] ?? null) == "movil")) {
            // line 180
            echo "            <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton ocultarSearch sinPadding\" style=\"height:56px\">
              <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
                <img alt=\"\" src=\"";
            // line 182
            echo ($context["ruta_img"] ?? null);
            echo "menuIcon.svg\" width=\"35\">
                ";
            // line 183
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 184
                echo "                  <span class=\"pormayorUnico pulse\"></span>
                ";
            }
            // line 186
            echo "              </a>
            </div>
          ";
        }
        // line 189
        echo "          <div class=\"col s3 m2 l2 colMenuLogo ocultarSearch valign-wrapper hide-on-small-only\">
            <a href=\"";
        // line 190
        echo base_url();
        echo "\" class=\"valign-wrapper anchoTotal\">
              <img alt=\"Pomayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 191
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" class=\"centrarForzado\">
            </a>
          </div>     
          ";
        // line 194
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "     
              ";
            // line 195
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 196
                echo "          <div class=\"col l2 ocultarSearch colMenuPc sinPadding\">
            <ul>
              <li>          
 
              </li>

            </ul>
          </div>
          ";
            }
            // line 204
            echo " 
          ";
        }
        // line 205
        echo "  
          ";
        // line 206
        if ( !($context["vista_carrito_compra"] ?? null)) {
            // line 207
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
            // line 214
            echo "            ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 215
                echo "              <div class=\"col l4 fontA center grey-text text-darken-3\" > 
                ";
                // line 217
                echo "               </div>
            ";
            } else {
                // line 219
                echo "              <div class=\"col s7 fontD2 center grey-text text-darken-3\" > 
                ";
                // line 221
                echo "               </div> 
            ";
            }
            // line 223
            echo "          ";
        }
        // line 224
        echo "          ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito")) {
            // line 225
            echo "            ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 226
                echo "              ";
                if ( !($context["producto_detalle"] ?? null)) {
                    // line 227
                    echo "                <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only\">
                  <div class=\"cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 229
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 230
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
                    // line 238
                    echo "                ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                        // line 239
                        echo "                  <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                    <div class=\"cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                        // line 241
                        echo ($context["totalc"] ?? null);
                        echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                        // line 242
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
                        // line 250
                        echo "                  <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                    <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
                  </div>  
                ";
                    }
                    // line 254
                    echo "              ";
                }
                // line 255
                echo "            ";
            }
            // line 256
            echo "          ";
        }
        // line 257
        echo "         ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal")) {
            // line 258
            echo "          ";
            if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                // line 259
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 260
                    echo "              <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                <div class=\"cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 262
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                  <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 263
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
                // line 271
                echo "          ";
            } else {
                // line 272
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 273
                    echo "              <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                  <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
              </div>
            ";
                }
                // line 277
                echo "          ";
            }
            // line 278
            echo "        ";
        }
        echo "   
          <div class=\"col s2 m3 l6 ocultarSearch colMenuPcII hide-on-med-and-down\">
            ";
        // line 280
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 281
            echo "                <ul  class=\"right\">
              ";
            // line 282
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 283
                echo "                  <li>
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
              ";
            }
            // line 287
            echo "                ";
            if ( !($context["producto_detalle"] ?? null)) {
                // line 288
                echo "                  <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                // line 289
                echo ($context["totalc"] ?? null);
                echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                // line 290
                echo base_url();
                echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                    <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                      <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </li>
                ";
            } else {
                // line 297
                echo "                  ";
                if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                    // line 298
                    echo "                    <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 299
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 300
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                      <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                        <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                        En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                      </div>
                    </li>
                  ";
                }
                // line 307
                echo "                ";
            }
            // line 308
            echo "              ";
            if (($context["reputacion_volver"] ?? null)) {
                // line 309
                echo "                <li class=\"positionRelative\">
                    <a class=\"black-text\" href=\"";
                // line 310
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i> Regresar</a>
                  </li> 
              ";
            }
            // line 313
            echo "                  <li class=\"positionRelative\">
                    ";
            // line 314
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 315
                echo "                      <span class=\"pormayorUnico pulse\" style=\"top: 15px;right: 0px;left: 28px;\"></span>
                    ";
            }
            // line 317
            echo "                    <a class=\"dropdown-trigger black-text\" href=\"#!\"  data-activates=\"dropdown2\">
                      <i class=\"material-icons\">";
            // line 318
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                echo "notifications";
            } else {
                echo "notifications_none";
            }
            echo "</i>
                    </a>
                  </li> 
                  ";
            // line 321
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 322
                echo "                  <li>
                    <a class=\"dropdown-trigger black-text\" href=\"#!\" data-activates=\"dropdown1\">";
                // line 323
                echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 7)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 7) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
                echo "<i class=\"material-icons right\">account_circle</i></a>
                  </li> 
                  ";
            }
            // line 326
            echo "                  ";
            if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                // line 327
                echo "                    ";
                // line 328
                echo "                      ";
                // line 329
                echo "                      ";
                // line 330
                echo "                    ";
                // line 331
                echo "                  ";
            }
            // line 332
            echo "                </ul>      
            ";
        } else {
            // line 334
            echo "              <ul class=\"right\">
                ";
            // line 335
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 336
                echo "                  <li class=\"\">
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
                ";
            }
            // line 339
            echo " 
                ";
            // line 340
            if (($context["vista_carrito_compra"] ?? null)) {
                // line 341
                echo "                  <li><a class=\"black-text\" onclick=\"javascript:history.back()\"><i class=\"material-icons left\">arrow_back</i>Regresar</a></li>
                ";
            }
            // line 343
            echo "                <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont positionAbsolute center\" data-totalc=\"";
            // line 344
            echo ($context["totalc"] ?? null);
            echo "\"><span class=\"cantidad\">0</span></span>
                  <a class=\"grey-text text-darken-4 cartTopPC verCarrito\" href=\"";
            // line 345
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\" style=\"font-size:30px\">shopping_cart</i>Mi compra</a>
                  <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                    <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                    En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                  </div>
                </li>
";
            // line 355
            echo "                <li>
                  <a class=\"black-text hide-on-med-and-up\" href=\"";
            // line 356
            echo base_url();
            echo "usuario/login\"><i class=\"material-icons\">account_circle</i></a>
                  <a href=\"";
            // line 357
            echo base_url();
            echo "usuario/login\" class=\"black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Iniciar Sesión\"><i class=\"material-icons green-text text-darken-4\" style=\"font-size:30px\">account_circle</i></a>
                </li>
              </ul>
            ";
        }
        // line 361
        echo "          </div>
          <a class=\"backSearch positionAbsolute lineHeight0 comoBoton \"><i class=\"material-icons grey-text sinUser lineHeight0\">arrow_back</i></a>
        </div>
        ";
        // line 364
        if (((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($context["producto_detalle"] ?? null)) && (($context["commentsNot"] ?? null) == false))) {
            // line 365
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
        } elseif (        // line 378
($context["filtro_movil_tiendas"] ?? null)) {
            // line 379
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\" browser-default filtroTCat simpleSelect grey-text text-darken-3\">
                  <option value=\"\" disabled selected>CATEGORÍA</option>
                  <option value=\"all\">Todos</option>
                  ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                // line 386
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
            // line 388
            echo "                </select>
              </div>
              <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\"browser-default filtroDep simpleSelect grey-text text-darken-3\" >
                  <option value=\"\" disabled selected>DEPARTAMENTO</option>
                  <option value=\"all\" >Ver todas</option>
                  ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                // line 395
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
            // line 397
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
        } elseif ((        // line 409
($context["filtro_movil"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 410
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 411
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 413
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 418
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 421
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 422
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
                // line 424
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 427
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 428
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
                // line 432
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 433
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
                // line 435
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 437
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
                // line 455
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 460
                echo "                </div>
                <div class=\"containerFiltrosC hide\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 466
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 467
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
                // line 469
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 475
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 476
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
                // line 478
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
            // line 492
            echo "        ";
        } elseif ((($context["filtro_movil"] ?? null) && ($context["solo_tienda"] ?? null))) {
            // line 493
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 494
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosC\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 501
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 502
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
                // line 504
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 510
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 511
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
                // line 513
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
            // line 527
            echo "        ";
        } elseif (($context["filtro_movil_especial"] ?? null)) {
            // line 528
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 529
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltros\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 536
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 537
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
                // line 539
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
            // line 563
            echo "        ";
        } elseif (($context["filtro_movil_ultimos"] ?? null)) {
            // line 564
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 565
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 567
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 572
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 575
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 576
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
                // line 578
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 581
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 582
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
                // line 586
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 587
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
                // line 589
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 591
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
                // line 609
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 614
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 618
            echo "        ";
        } elseif (($context["filtro_movil_popular"] ?? null)) {
            // line 619
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 620
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 622
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 627
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 630
                $context["array_cat"] = array();
                // line 631
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 632
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array())), ($context["array_cat"] ?? null))) {
                        // line 633
                        echo "                           <option value=\"";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo "\">";
                        echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                        echo "</option>
                           ";
                        // line 634
                        $context["array_cat"] = twig_array_merge(($context["array_cat"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()))));
                        // line 635
                        echo "                        ";
                    }
                    // line 636
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 637
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 640
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 641
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
                // line 645
                $context["array_marcas"] = array();
                // line 646
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 647
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), ($context["array_marcas"] ?? null))) {
                        // line 648
                        echo "                          ";
                        $context["array_marcas"] = twig_array_merge(($context["array_marcas"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()))));
                        // line 649
                        echo "                        ";
                    }
                    // line 650
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 651
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["array_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 652
                    echo "                        ";
                    if ($context["prm"]) {
                        // line 653
                        echo "                          <option value=\"";
                        echo twig_replace_filter($context["prm"], array(" " => "", "\"" => "", "'" => ""));
                        echo "\">";
                        echo twig_title_string_filter($this->env, $context["prm"]);
                        echo "</option>
                        ";
                    }
                    // line 655
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 656
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 658
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
                // line 676
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 681
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 685
            echo "        ";
        } elseif (($context["crear_tienda"] ?? null)) {
            // line 686
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 687
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
            // line 703
            echo "        ";
        } elseif ((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["legales"] ?? null) == true))) {
            // line 704
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
        } elseif ((($this->getAttribute(        // line 732
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["privacidad"] ?? null) == true))) {
            // line 733
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
        } elseif ((($this->getAttribute(        // line 753
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["compra_segura"] ?? null) == true))) {
            // line 754
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
        } elseif ((($this->getAttribute(        // line 772
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["centro_general"] ?? null) == true))) {
            // line 773
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al CENTRO DE AYUDA</a>
              </div>
            </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 780
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["reputacion_volver"] ?? null) == true))) {
            // line 781
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al PRODUCTO</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 789
        echo "        ";
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 790
            echo "          ";
            if (($context["vista_carrito"] ?? null)) {
                // line 791
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
            } elseif (            // line 804
($context["vista_carrito2"] ?? null)) {
                // line 805
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 807
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
            } elseif (            // line 820
($context["vista_carrito3"] ?? null)) {
                // line 821
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 823
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <a href=\"";
                // line 828
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
            } elseif (            // line 838
($context["vista_carrito4"] ?? null)) {
                // line 839
                echo "            <div class=\"nav-content pormayorUnico\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s12 sinUser center fontB2 enfasisD white-text\">
                  <p>ÚNETE A LA FAMILIA <b>PORMAYOR</b></p>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 846
($context["vista_carrito5"] ?? null)) {
                // line 847
                echo "          ";
            }
            // line 848
            echo "        ";
        }
        // line 849
        echo "      </nav>
    </div>
    <!-- HEADER -->
        ";
        // line 852
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 853
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                ";
            // line 855
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 856
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"http://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 857
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 858
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "vnd/ventas\" style=\"padding: 0 16px;\">GESTOR</a>
                ";
            }
            // line 860
            echo "                <a href=\"";
            echo base_url();
            echo "comprador/index/pedidos\" class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\">Perfil Usuario</a>
              </li>
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 862
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 865
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Ir a Inicio</a>      
              </li>     
";
            // line 870
            echo "              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 871
            echo base_url("remate");
            echo "\"><i class=\"material-icons\">attach_money</i>Remate</a>
              </li>
              <li class=\"itemMenu\">
                <a class=\"notiBtn white-text\">Notificaciones
                  <i class=\"material-icons left\">notifications</i>
                  ";
            // line 876
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 877
                echo "                    <span style=\"font-weight:600\" class=\"new badge pormayor pormayorAccent-text\" data-badge-caption=\"Nueva\"></span>
                  ";
            }
            // line 879
            echo "                </a> 
              </li>     
              <li class=\"itemMenu\">
                <ul class=\"collapsible collapsible-accordion\">
                  <li class=\"submenu\">
                    <a class=\"collapsible-header fixHeaderSideMobile waves-effect white-text\" href=\"#\" style=\"padding: 0 32px\">Categorias <i class=\"material-icons right\">keyboard_arrow_down</i></a>
                    <div class=\"collapsible-body\">
                      <ul class=\"grey darken-4\">";
            // line 886
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
            // line 887
            echo "                      </ul>
                    </div>
                  </li>
                </ul>
              </li>              
            </ul>         
        ";
        } else {
            // line 893
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn centrarForzado\" href=\"";
            // line 896
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
                ";
            // line 898
            echo "              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 900
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Inicio</a>      
              </li>
              <li class=\"itemMenu\">
                ";
            // line 906
            echo "              </li> 
            </ul>
        ";
        }
        // line 909
        echo "      <div class=\"overlayBody hide\"></div>      
      ";
        // line 910
        $this->displayBlock('content', $context, $blocks);
        // line 911
        echo "        <footer class=\"page-footer grey darken-4 black-text ";
        if (($context["nofooter"] ?? null)) {
            echo "hide";
        }
        echo "\">
          <div class=\"container\">
              <div class=\"row white-text\">
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">PorMayor.pe</h5>
                <p>Somos el primer ecommerce mayorista del Perú, dónde encontras novedades al mejor precio y puedas emprender tu negocio con solo S/100</p>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">MI CUENTA</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 921
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 922
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 923
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 924
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">SERVICIO AL CLIENTE</h5>
                <ul>
                  ";
        // line 931
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 932
        echo base_url();
        echo "legal/devolucionesycambios\">Politicas de Devoluciones y Cambios</a></li>
                  ";
        // line 934
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones <i class=\"material-icons\">menu_book</i></a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">ESCRÍBENOS</h5>
                <ul>
                ";
        // line 940
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendedores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 941
            echo "                  <li><a href=\"tel:51";
            echo $this->getAttribute($context["v"], "Per_Telefono", array());
            echo "\">";
            echo $this->getAttribute($context["v"], "Usu_Nombre", array());
            echo ": ";
            echo $this->getAttribute($context["v"], "Per_Telefono", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 943
        echo "                  <li><a href=\"mailto:contacto@pormayor.pe\">contacto@pormayor.pe</a></li>
                  <li>Horario de Atención:<br>
                    Lunes a Viernes: 10:00 AM a 6:00 PM<br>
                    Sábados: 10:00 AM a 6:00 PM</li>
                  <li>Jirón Andahuaylas 251 - Tienda 208, 209 y 210 Cercado de Lima - Perú</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"row container\">
              <div class=\"col l6 center\">
                © 2018-2022 Derechos Reservados <a href=\"";
        // line 955
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 958
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\"></a>
              </div>
          </div>
        </footer>      
    ";
        // line 962
        $this->displayBlock('modal', $context, $blocks);
        // line 963
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\"></script>
      <script src=\"";
        // line 968
        echo base_url("public/js/template-lite.min.js?v=1512");
        echo "\" defer></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>
    ";
        // line 970
        $this->displayBlock('script', $context, $blocks);
        // line 971
        echo "   </body>

</html>";
    }

    // line 29
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 61
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 73
    public function block_messenger($context, array $blocks = array())
    {
    }

    // line 910
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 962
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 970
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/template_lite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1958 => 970,  1952 => 962,  1946 => 910,  1941 => 73,  1935 => 61,  1930 => 29,  1924 => 971,  1922 => 970,  1917 => 968,  1908 => 963,  1906 => 962,  1899 => 958,  1893 => 955,  1879 => 943,  1866 => 941,  1862 => 940,  1852 => 934,  1848 => 932,  1843 => 931,  1834 => 924,  1830 => 923,  1826 => 922,  1822 => 921,  1806 => 911,  1804 => 910,  1801 => 909,  1796 => 906,  1790 => 900,  1786 => 898,  1782 => 896,  1777 => 893,  1768 => 887,  1704 => 886,  1695 => 879,  1691 => 877,  1689 => 876,  1681 => 871,  1678 => 870,  1673 => 865,  1667 => 862,  1661 => 860,  1655 => 858,  1653 => 857,  1646 => 856,  1644 => 855,  1640 => 853,  1638 => 852,  1633 => 849,  1630 => 848,  1627 => 847,  1625 => 846,  1616 => 839,  1614 => 838,  1601 => 828,  1593 => 823,  1589 => 821,  1587 => 820,  1571 => 807,  1567 => 805,  1565 => 804,  1550 => 791,  1547 => 790,  1544 => 789,  1534 => 781,  1532 => 780,  1523 => 773,  1521 => 772,  1501 => 754,  1499 => 753,  1477 => 733,  1475 => 732,  1445 => 704,  1442 => 703,  1424 => 687,  1421 => 686,  1418 => 685,  1412 => 681,  1404 => 676,  1379 => 658,  1375 => 656,  1369 => 655,  1361 => 653,  1358 => 652,  1353 => 651,  1347 => 650,  1344 => 649,  1341 => 648,  1338 => 647,  1333 => 646,  1331 => 645,  1320 => 641,  1314 => 640,  1309 => 637,  1303 => 636,  1300 => 635,  1298 => 634,  1291 => 633,  1288 => 632,  1283 => 631,  1281 => 630,  1273 => 627,  1263 => 622,  1259 => 620,  1256 => 619,  1253 => 618,  1247 => 614,  1239 => 609,  1214 => 591,  1210 => 589,  1199 => 587,  1195 => 586,  1184 => 582,  1178 => 581,  1173 => 578,  1162 => 576,  1158 => 575,  1150 => 572,  1140 => 567,  1136 => 565,  1133 => 564,  1130 => 563,  1104 => 539,  1093 => 537,  1089 => 536,  1080 => 529,  1077 => 528,  1074 => 527,  1058 => 513,  1047 => 511,  1043 => 510,  1035 => 504,  1024 => 502,  1020 => 501,  1011 => 494,  1008 => 493,  1005 => 492,  989 => 478,  978 => 476,  974 => 475,  966 => 469,  955 => 467,  951 => 466,  943 => 460,  935 => 455,  910 => 437,  906 => 435,  895 => 433,  891 => 432,  880 => 428,  874 => 427,  869 => 424,  858 => 422,  854 => 421,  846 => 418,  836 => 413,  832 => 411,  829 => 410,  827 => 409,  813 => 397,  800 => 395,  796 => 394,  788 => 388,  775 => 386,  771 => 385,  763 => 379,  761 => 378,  746 => 365,  744 => 364,  739 => 361,  732 => 357,  728 => 356,  725 => 355,  716 => 345,  712 => 344,  709 => 343,  705 => 341,  703 => 340,  700 => 339,  694 => 336,  692 => 335,  689 => 334,  685 => 332,  682 => 331,  680 => 330,  678 => 329,  676 => 328,  674 => 327,  671 => 326,  665 => 323,  662 => 322,  660 => 321,  650 => 318,  647 => 317,  643 => 315,  641 => 314,  638 => 313,  632 => 310,  629 => 309,  626 => 308,  623 => 307,  613 => 300,  609 => 299,  606 => 298,  603 => 297,  593 => 290,  589 => 289,  586 => 288,  583 => 287,  577 => 283,  575 => 282,  572 => 281,  570 => 280,  564 => 278,  561 => 277,  555 => 273,  552 => 272,  549 => 271,  538 => 263,  534 => 262,  530 => 260,  527 => 259,  524 => 258,  521 => 257,  518 => 256,  515 => 255,  512 => 254,  506 => 250,  495 => 242,  491 => 241,  487 => 239,  484 => 238,  473 => 230,  469 => 229,  465 => 227,  462 => 226,  459 => 225,  456 => 224,  453 => 223,  449 => 221,  446 => 219,  442 => 217,  439 => 215,  436 => 214,  421 => 207,  419 => 206,  416 => 205,  412 => 204,  401 => 196,  399 => 195,  395 => 194,  389 => 191,  385 => 190,  382 => 189,  377 => 186,  373 => 184,  371 => 183,  367 => 182,  363 => 180,  361 => 179,  354 => 174,  346 => 168,  343 => 167,  335 => 162,  332 => 161,  329 => 160,  321 => 155,  318 => 154,  315 => 153,  313 => 152,  307 => 148,  304 => 147,  296 => 145,  294 => 144,  289 => 143,  283 => 141,  281 => 140,  276 => 139,  274 => 138,  208 => 74,  206 => 73,  193 => 62,  191 => 61,  158 => 30,  156 => 29,  152 => 28,  147 => 26,  142 => 24,  117 => 23,  89 => 22,  84 => 19,  77 => 15,  74 => 14,  72 => 13,  63 => 12,  53 => 11,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/template_lite.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\layout\\intranet\\template_lite.twig");
    }
}
