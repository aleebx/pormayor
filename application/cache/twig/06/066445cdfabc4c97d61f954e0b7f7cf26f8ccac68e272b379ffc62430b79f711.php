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
        echo "<script data-ad-client=\"ca-pub-6014646385337670\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<meta name=\"description\" content=\"";
        // line 23
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
        // line 24
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
        // line 25
        echo ($context["ruta_img"] ?? null);
        echo "logo.png\">
";
        // line 27
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" media=\"screen\">
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo base_url("public/intranet/css/materialize.min.css");
        echo "\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 30
        echo base_url("public/intranet/css/templates.min.css");
        echo "\"  media=\"screen\"/>
";
        // line 31
        $this->displayBlock('analytics', $context, $blocks);
        // line 32
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
        // line 63
        $this->displayBlock('head', $context, $blocks);
        // line 64
        echo "<script data-ad-client=\"ca-pub-6014646385337670\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
  <style type=\"text/css\">
  .autocomplete-content{width: 40vw!important;}
  .w100 {width:200% !important}
  @media only screen and (max-width: 600px) {
  .w100 {width:100% !important}
  .autocomplete-content{width: 80vw!important;}
  }
  </style>
  <!-- Hotjar Tracking Code for https://pormayor.pe -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1159548,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>
<body id=\"inicio\" class=\"grey lighten-4\">
  <div id=\"api-chat-bot\"></div>
";
        // line 87
        $this->displayBlock('messenger', $context, $blocks);
        // line 88
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

";
        // line 155
        echo "<!-- End Facebook Pixel Code -->
<div class=\"inner\">
    <ul id='dropdown1' class='dropdown-content'>
      ";
        // line 158
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 159
            echo "        <li><a href=\"";
            echo base_url();
            echo "admin/tiendas\"><i class=\"material-icons left\">settings</i>Panel</a></li>
      ";
        } elseif (($this->getAttribute(        // line 160
($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 161
            echo "        <li><a href=\"";
            echo base_url();
            echo "vnd/ventas\"><i class=\"material-icons left\">settings</i>Panel Gestor</a></li>
      ";
        } else {
            // line 163
            echo "        <li><a href=\"";
            echo base_url();
            echo "comprador/index/\"><i class=\"material-icons left\">account_circle</i>Perfil de Usuario</a></li>
        ";
            // line 164
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 165
                echo "          <li><a href=\"https://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\"><i class=\"material-icons left\">settings</i>Panel Tienda</a></li>
        ";
            }
            // line 167
            echo "      ";
        }
        // line 168
        echo "      <li class=\"divider\"></li>
      <li><a class=\"cerrarSesionBtn\"><i class=\"material-icons left\">power_settings_new</i>Cerrar sesión</a></li>
    </ul>
    <ul id='dropdown2' class='dropdown-content'>
      ";
        // line 172
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 173
            echo "        ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 174
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 175
                echo base_url();
                echo "comprador/index/respuesta_comentario\">
              <i class=\"material-icons left\">comment</i>Tu comentario <b>fue respondido </b><span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 180
            echo "        ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 181
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 182
                echo base_url();
                echo "comprador/index/pedidos\">
              <i class=\"material-icons left\">comment</i><b>Respondieron</b> tu cotización <span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 187
            echo "      ";
        } else {
            // line 188
            echo "          <li >
            <a  href=\"#\">
              <span class=\"enfasisC\">No tienes notificaciones</span>
            </a>
          </li>
      ";
        }
        // line 194
        echo "    </ul>
</div>
    <div class=\"navbar-fixed inner\">
      <nav class=\"z-depth-2 pormayor nav-extended\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          ";
        // line 199
        if ((($context["userAgent"] ?? null) == "movil")) {
            // line 200
            echo "            <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton ocultarSearch sinPadding\" style=\"height:56px\">
              <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
                <img alt=\"\" src=\"";
            // line 202
            echo ($context["ruta_img"] ?? null);
            echo "menuIcon.svg\" width=\"35\">
                ";
            // line 203
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 204
                echo "                  <span class=\"pormayorUnico pulse\"></span>
                ";
            }
            // line 206
            echo "              </a>
            </div>
          ";
        }
        // line 209
        echo "          <div class=\"col s3 m2 l2 colMenuLogo ocultarSearch valign-wrapper hide-on-small-only\">
            <a href=\"";
        // line 210
        echo base_url();
        echo "\" class=\"valign-wrapper anchoTotal\">
              <img alt=\"Pomayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 211
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" class=\"centrarForzado\">
            </a>
          </div>     
          ";
        // line 214
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "     
              ";
            // line 215
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 216
                echo "          <div class=\"col l2 ocultarSearch colMenuPc sinPadding\">
            <ul>
              <li>          
 ";
                // line 247
                echo "              </li>
";
                // line 255
                echo "            </ul>
          </div>
          ";
            }
            // line 257
            echo " 
          ";
        }
        // line 258
        echo "  
          ";
        // line 259
        if ( !($context["vista_carrito_compra"] ?? null)) {
            // line 260
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
            // line 267
            echo "            ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 268
                echo "              <div class=\"col l4 fontA center grey-text text-darken-3\" > 
                ";
                // line 270
                echo "               </div>
            ";
            } else {
                // line 272
                echo "              <div class=\"col s7 fontD2 center grey-text text-darken-3\" > 
                ";
                // line 274
                echo "               </div> 
            ";
            }
            // line 276
            echo "          ";
        }
        // line 277
        echo "          ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito")) {
            // line 278
            echo "            ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 279
                echo "              ";
                if ( !($context["producto_detalle"] ?? null)) {
                    // line 280
                    echo "                <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only\">
                  <div class=\"cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 282
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 283
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
                    // line 291
                    echo "                ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                        // line 292
                        echo "                  <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                    <div class=\"cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                        // line 294
                        echo ($context["totalc"] ?? null);
                        echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                        // line 295
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
                        // line 303
                        echo "                  <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                    <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
                  </div>  
                ";
                    }
                    // line 307
                    echo "              ";
                }
                // line 308
                echo "            ";
            }
            // line 309
            echo "          ";
        }
        // line 310
        echo "         ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal")) {
            // line 311
            echo "          ";
            if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                // line 312
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 313
                    echo "              <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                <div class=\"cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 315
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                  <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 316
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
                // line 324
                echo "          ";
            } else {
                // line 325
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 326
                    echo "              <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                  <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
              </div>
            ";
                }
                // line 330
                echo "          ";
            }
            // line 331
            echo "        ";
        }
        echo "   
          <div class=\"col s2 m3 l6 ocultarSearch colMenuPcII hide-on-med-and-down\">
            ";
        // line 333
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 334
            echo "                <ul  class=\"right\">
              ";
            // line 335
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 336
                echo "                  <li>
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
              ";
            }
            // line 340
            echo "                ";
            if ( !($context["producto_detalle"] ?? null)) {
                // line 341
                echo "                  <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                // line 342
                echo ($context["totalc"] ?? null);
                echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                // line 343
                echo base_url();
                echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                    <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                      <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </li>
                ";
            } else {
                // line 350
                echo "                  ";
                if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                    // line 351
                    echo "                    <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 352
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 353
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                      <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                        <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                        En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                      </div>
                    </li>
                  ";
                }
                // line 360
                echo "                ";
            }
            // line 361
            echo "              ";
            if (($context["reputacion_volver"] ?? null)) {
                // line 362
                echo "                <li class=\"positionRelative\">
                    <a class=\"black-text\" href=\"";
                // line 363
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i> Regresar</a>
                  </li> 
              ";
            }
            // line 366
            echo "                  <li class=\"positionRelative\">
                    ";
            // line 367
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 368
                echo "                      <span class=\"pormayorUnico pulse\" style=\"top: 15px;right: 0px;left: 28px;\"></span>
                    ";
            }
            // line 370
            echo "                    <a class=\"dropdown-trigger black-text\" href=\"#!\"  data-activates=\"dropdown2\">
                      <i class=\"material-icons\">";
            // line 371
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                echo "notifications";
            } else {
                echo "notifications_none";
            }
            echo "</i>
                    </a>
                  </li> 
                  ";
            // line 374
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 375
                echo "                  <li>
                    <a class=\"dropdown-trigger black-text\" href=\"#!\" data-activates=\"dropdown1\">";
                // line 376
                echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 7)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 7) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
                echo "<i class=\"material-icons right\">account_circle</i></a>
                  </li> 
                  ";
            }
            // line 379
            echo "                  ";
            if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                // line 380
                echo "                    ";
                // line 381
                echo "                      ";
                // line 382
                echo "                      ";
                // line 383
                echo "                    ";
                // line 384
                echo "                  ";
            }
            // line 385
            echo "                </ul>      
            ";
        } else {
            // line 387
            echo "              <ul class=\"right\">
                ";
            // line 388
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 389
                echo "                  <li class=\"\">
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
                ";
            }
            // line 392
            echo " 
                ";
            // line 393
            if (($context["vista_carrito_compra"] ?? null)) {
                // line 394
                echo "                  <li><a class=\"black-text\" onclick=\"javascript:history.back()\"><i class=\"material-icons left\">arrow_back</i>Regresar</a></li>
                ";
            }
            // line 396
            echo "                <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont positionAbsolute center\" data-totalc=\"";
            // line 397
            echo ($context["totalc"] ?? null);
            echo "\"><span class=\"cantidad\">0</span></span>
                  <a class=\"grey-text text-darken-4 cartTopPC verCarrito\" href=\"";
            // line 398
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\" style=\"font-size:30px\">shopping_cart</i>Mi compra</a>
                  <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                    <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                    En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                  </div>
                </li>
";
            // line 408
            echo "                <li>
                  <a class=\"black-text hide-on-med-and-up\" href=\"";
            // line 409
            echo base_url();
            echo "usuario/login\"><i class=\"material-icons\">account_circle</i></a>
                  <a href=\"";
            // line 410
            echo base_url();
            echo "usuario/login\" class=\"black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Iniciar Sesión\"><i class=\"material-icons green-text text-darken-4\" style=\"font-size:30px\">account_circle</i></a>
                </li>
              </ul>
            ";
        }
        // line 414
        echo "          </div>
          <a class=\"backSearch positionAbsolute lineHeight0 comoBoton \"><i class=\"material-icons grey-text sinUser lineHeight0\">arrow_back</i></a>
        </div>
        ";
        // line 417
        if (((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($context["producto_detalle"] ?? null)) && (($context["commentsNot"] ?? null) == false))) {
            // line 418
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
        } elseif (        // line 431
($context["filtro_movil_tiendas"] ?? null)) {
            // line 432
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\" browser-default filtroTCat simpleSelect grey-text text-darken-3\">
                  <option value=\"\" disabled selected>CATEGORÍA</option>
                  <option value=\"all\">Todos</option>
                  ";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                // line 439
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
            // line 441
            echo "                </select>
              </div>
              <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\"browser-default filtroDep simpleSelect grey-text text-darken-3\" >
                  <option value=\"\" disabled selected>DEPARTAMENTO</option>
                  <option value=\"all\" >Ver todas</option>
                  ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                // line 448
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
            // line 450
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
        } elseif ((        // line 462
($context["filtro_movil"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 463
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 464
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 466
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 471
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 474
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 475
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
                // line 477
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 480
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 481
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
                // line 485
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 486
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
                // line 488
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 490
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
                // line 508
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 513
                echo "                </div>
                <div class=\"containerFiltrosC hide\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 519
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 520
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
                // line 522
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 528
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 529
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
                // line 531
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
            // line 545
            echo "        ";
        } elseif ((($context["filtro_movil"] ?? null) && ($context["solo_tienda"] ?? null))) {
            // line 546
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 547
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosC\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 554
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 555
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
                // line 557
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 563
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 564
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
                // line 566
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
            // line 580
            echo "        ";
        } elseif (($context["filtro_movil_especial"] ?? null)) {
            // line 581
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 582
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltros\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 589
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 590
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
                // line 592
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
            // line 616
            echo "        ";
        } elseif (($context["filtro_movil_ultimos"] ?? null)) {
            // line 617
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 618
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 620
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 625
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 628
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 629
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
                // line 631
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 634
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 635
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
                // line 639
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 640
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
                // line 642
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 644
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
                // line 662
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 667
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 671
            echo "        ";
        } elseif (($context["filtro_movil_popular"] ?? null)) {
            // line 672
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 673
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 675
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 680
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 683
                $context["array_cat"] = array();
                // line 684
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 685
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array())), ($context["array_cat"] ?? null))) {
                        // line 686
                        echo "                           <option value=\"";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo "\">";
                        echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                        echo "</option>
                           ";
                        // line 687
                        $context["array_cat"] = twig_array_merge(($context["array_cat"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()))));
                        // line 688
                        echo "                        ";
                    }
                    // line 689
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 690
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 693
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 694
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
                // line 698
                $context["array_marcas"] = array();
                // line 699
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 700
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), ($context["array_marcas"] ?? null))) {
                        // line 701
                        echo "                          ";
                        $context["array_marcas"] = twig_array_merge(($context["array_marcas"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()))));
                        // line 702
                        echo "                        ";
                    }
                    // line 703
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 704
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["array_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 705
                    echo "                        ";
                    if ($context["prm"]) {
                        // line 706
                        echo "                          <option value=\"";
                        echo twig_replace_filter($context["prm"], array(" " => "", "\"" => "", "'" => ""));
                        echo "\">";
                        echo twig_title_string_filter($this->env, $context["prm"]);
                        echo "</option>
                        ";
                    }
                    // line 708
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 709
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 711
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
                // line 729
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 734
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 738
            echo "        ";
        } elseif (($context["crear_tienda"] ?? null)) {
            // line 739
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 740
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
            // line 756
            echo "        ";
        } elseif ((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["legales"] ?? null) == true))) {
            // line 757
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
        } elseif ((($this->getAttribute(        // line 785
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["privacidad"] ?? null) == true))) {
            // line 786
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
        } elseif ((($this->getAttribute(        // line 806
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["compra_segura"] ?? null) == true))) {
            // line 807
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
        } elseif ((($this->getAttribute(        // line 825
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["centro_general"] ?? null) == true))) {
            // line 826
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al CENTRO DE AYUDA</a>
              </div>
            </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 833
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["reputacion_volver"] ?? null) == true))) {
            // line 834
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al PRODUCTO</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 842
        echo "        ";
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 843
            echo "          ";
            if (($context["vista_carrito"] ?? null)) {
                // line 844
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
            } elseif (            // line 857
($context["vista_carrito2"] ?? null)) {
                // line 858
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 860
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
            } elseif (            // line 873
($context["vista_carrito3"] ?? null)) {
                // line 874
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 876
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <a href=\"";
                // line 881
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
            } elseif (            // line 891
($context["vista_carrito4"] ?? null)) {
                // line 892
                echo "            <div class=\"nav-content pormayorUnico\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s12 sinUser center fontB2 enfasisD white-text\">
                  <p>ÚNETE A LA FAMILIA <b>PORMAYOR</b></p>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 899
($context["vista_carrito5"] ?? null)) {
                // line 900
                echo "          ";
            }
            // line 901
            echo "        ";
        }
        // line 902
        echo "      </nav>
    </div>
    <!-- HEADER -->
        ";
        // line 905
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 906
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                ";
            // line 908
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 909
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"http://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 910
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 911
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "vnd/ventas\" style=\"padding: 0 16px;\">GESTOR</a>
                ";
            }
            // line 913
            echo "                <a href=\"";
            echo base_url();
            echo "comprador/index/pedidos\" class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\">Perfil Usuario</a>
              </li>
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 915
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 918
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Ir a Inicio</a>      
              </li>     
";
            // line 923
            echo "              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 924
            echo base_url("remate");
            echo "\"><i class=\"material-icons\">attach_money</i>Remate</a>
              </li>
              <li class=\"itemMenu\">
                <a class=\"notiBtn white-text\">Notificaciones
                  <i class=\"material-icons left\">notifications</i>
                  ";
            // line 929
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 930
                echo "                    <span style=\"font-weight:600\" class=\"new badge pormayor pormayorAccent-text\" data-badge-caption=\"Nueva\"></span>
                  ";
            }
            // line 932
            echo "                </a> 
              </li>     
              <li class=\"itemMenu\">
                <ul class=\"collapsible collapsible-accordion\">
                  <li class=\"submenu\">
                    <a class=\"collapsible-header fixHeaderSideMobile waves-effect white-text\" href=\"#\" style=\"padding: 0 32px\">Categorias <i class=\"material-icons right\">keyboard_arrow_down</i></a>
                    <div class=\"collapsible-body\">
                      <ul class=\"grey darken-4\">";
            // line 939
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
            // line 940
            echo "                      </ul>
                    </div>
                  </li>
                </ul>
              </li>              
            </ul>         
        ";
        } else {
            // line 946
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn centrarForzado\" href=\"";
            // line 949
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
                ";
            // line 951
            echo "              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 953
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Inicio</a>      
              </li>
              <li class=\"itemMenu\">
                <p class=\"white-text\">
                  Empieza tu propio negocio. Llévate todo a surtido a precio por mayor por una compra mínima de 300 soles.
                </p>
              </li>    
";
            // line 977
            echo "            </ul>
        ";
        }
        // line 979
        echo "      <div class=\"overlayBody hide\"></div>      
      ";
        // line 980
        $this->displayBlock('content', $context, $blocks);
        // line 981
        echo "        <footer class=\"page-footer grey darken-4 black-text ";
        if (($context["nofooter"] ?? null)) {
            echo "hide";
        }
        echo "\">
          <div class=\"container\">
";
        // line 1005
        echo "              <div class=\"row white-text\">
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">PorMayor.pe</h5>
                <p>Somos el primer ecommerce mayorista del Perú, dónde encontras novedades al mejor precio y puedas emprender tu negocio con solo S/100</p>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">MI CUENTA</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 1013
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 1014
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 1015
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 1016
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">SERVICIO AL CLIENTE</h5>
                <ul>
                  ";
        // line 1023
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 1024
        echo base_url();
        echo "legal/devolucionesycambios\">Politicas de Devoluciones y Cambios</a></li>
                  ";
        // line 1026
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones <i class=\"material-icons\">menu_book</i></a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">ESCRÍBENOS</h5>
                <ul>
                  <li><a href=\"tel:51923500413\">Atención Provincia: 923500413</a></li>
                  <li><a href=\"tel:51955873746\">Atención Lima: 955873746</a></li>
                  <li><a href=\"tel:51921532920\">Atención Nuevo Cliente: 921532920</a></li>
                  <li><a href=\"mailto:contacto@pormayor.pe\">contacto@pormayor.pe</a></li>
                  <li>Horario de Atención:<br>
                    Lunes a Viernes: 9:00 AM a 6:00 PM<br>
                    Sábados: 9:00 AM a 2:00 PM</li>
                  <li>Jirón Andahuaylas 251 - Tienda 208,209 y 210 Cercado de Lima - Perú</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"row container\">
              <div class=\"col l6 center\">
                © 2018 Derechos Reservados <a href=\"";
        // line 1047
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 1050
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\"></a>
              </div>
          </div>
        </footer>      
    ";
        // line 1054
        $this->displayBlock('modal', $context, $blocks);
        // line 1055
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\"></script>
      <script src=\"";
        // line 1060
        echo base_url("public/js/template-lite.js?v=2.0");
        echo "\" defer></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>
    ";
        // line 1062
        $this->displayBlock('script', $context, $blocks);
        // line 1063
        echo "   </body>

</html>";
    }

    // line 31
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 63
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 87
    public function block_messenger($context, array $blocks = array())
    {
    }

    // line 980
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 1054
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 1062
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
        return array (  1972 => 1062,  1966 => 1054,  1960 => 980,  1955 => 87,  1949 => 63,  1944 => 31,  1938 => 1063,  1936 => 1062,  1931 => 1060,  1922 => 1055,  1920 => 1054,  1913 => 1050,  1907 => 1047,  1882 => 1026,  1878 => 1024,  1873 => 1023,  1864 => 1016,  1860 => 1015,  1856 => 1014,  1852 => 1013,  1842 => 1005,  1834 => 981,  1832 => 980,  1829 => 979,  1825 => 977,  1815 => 953,  1811 => 951,  1807 => 949,  1802 => 946,  1793 => 940,  1729 => 939,  1720 => 932,  1716 => 930,  1714 => 929,  1706 => 924,  1703 => 923,  1698 => 918,  1692 => 915,  1686 => 913,  1680 => 911,  1678 => 910,  1671 => 909,  1669 => 908,  1665 => 906,  1663 => 905,  1658 => 902,  1655 => 901,  1652 => 900,  1650 => 899,  1641 => 892,  1639 => 891,  1626 => 881,  1618 => 876,  1614 => 874,  1612 => 873,  1596 => 860,  1592 => 858,  1590 => 857,  1575 => 844,  1572 => 843,  1569 => 842,  1559 => 834,  1557 => 833,  1548 => 826,  1546 => 825,  1526 => 807,  1524 => 806,  1502 => 786,  1500 => 785,  1470 => 757,  1467 => 756,  1449 => 740,  1446 => 739,  1443 => 738,  1437 => 734,  1429 => 729,  1404 => 711,  1400 => 709,  1394 => 708,  1386 => 706,  1383 => 705,  1378 => 704,  1372 => 703,  1369 => 702,  1366 => 701,  1363 => 700,  1358 => 699,  1356 => 698,  1345 => 694,  1339 => 693,  1334 => 690,  1328 => 689,  1325 => 688,  1323 => 687,  1316 => 686,  1313 => 685,  1308 => 684,  1306 => 683,  1298 => 680,  1288 => 675,  1284 => 673,  1281 => 672,  1278 => 671,  1272 => 667,  1264 => 662,  1239 => 644,  1235 => 642,  1224 => 640,  1220 => 639,  1209 => 635,  1203 => 634,  1198 => 631,  1187 => 629,  1183 => 628,  1175 => 625,  1165 => 620,  1161 => 618,  1158 => 617,  1155 => 616,  1129 => 592,  1118 => 590,  1114 => 589,  1105 => 582,  1102 => 581,  1099 => 580,  1083 => 566,  1072 => 564,  1068 => 563,  1060 => 557,  1049 => 555,  1045 => 554,  1036 => 547,  1033 => 546,  1030 => 545,  1014 => 531,  1003 => 529,  999 => 528,  991 => 522,  980 => 520,  976 => 519,  968 => 513,  960 => 508,  935 => 490,  931 => 488,  920 => 486,  916 => 485,  905 => 481,  899 => 480,  894 => 477,  883 => 475,  879 => 474,  871 => 471,  861 => 466,  857 => 464,  854 => 463,  852 => 462,  838 => 450,  825 => 448,  821 => 447,  813 => 441,  800 => 439,  796 => 438,  788 => 432,  786 => 431,  771 => 418,  769 => 417,  764 => 414,  757 => 410,  753 => 409,  750 => 408,  741 => 398,  737 => 397,  734 => 396,  730 => 394,  728 => 393,  725 => 392,  719 => 389,  717 => 388,  714 => 387,  710 => 385,  707 => 384,  705 => 383,  703 => 382,  701 => 381,  699 => 380,  696 => 379,  690 => 376,  687 => 375,  685 => 374,  675 => 371,  672 => 370,  668 => 368,  666 => 367,  663 => 366,  657 => 363,  654 => 362,  651 => 361,  648 => 360,  638 => 353,  634 => 352,  631 => 351,  628 => 350,  618 => 343,  614 => 342,  611 => 341,  608 => 340,  602 => 336,  600 => 335,  597 => 334,  595 => 333,  589 => 331,  586 => 330,  580 => 326,  577 => 325,  574 => 324,  563 => 316,  559 => 315,  555 => 313,  552 => 312,  549 => 311,  546 => 310,  543 => 309,  540 => 308,  537 => 307,  531 => 303,  520 => 295,  516 => 294,  512 => 292,  509 => 291,  498 => 283,  494 => 282,  490 => 280,  487 => 279,  484 => 278,  481 => 277,  478 => 276,  474 => 274,  471 => 272,  467 => 270,  464 => 268,  461 => 267,  446 => 260,  444 => 259,  441 => 258,  437 => 257,  432 => 255,  429 => 247,  424 => 216,  422 => 215,  418 => 214,  412 => 211,  408 => 210,  405 => 209,  400 => 206,  396 => 204,  394 => 203,  390 => 202,  386 => 200,  384 => 199,  377 => 194,  369 => 188,  366 => 187,  358 => 182,  355 => 181,  352 => 180,  344 => 175,  341 => 174,  338 => 173,  336 => 172,  330 => 168,  327 => 167,  319 => 165,  317 => 164,  312 => 163,  306 => 161,  304 => 160,  299 => 159,  297 => 158,  292 => 155,  224 => 88,  222 => 87,  197 => 64,  195 => 63,  162 => 32,  160 => 31,  156 => 30,  151 => 28,  148 => 27,  144 => 25,  119 => 24,  92 => 23,  89 => 22,  84 => 19,  77 => 15,  74 => 14,  72 => 13,  63 => 12,  53 => 11,  34 => 8,  25 => 1,);
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
