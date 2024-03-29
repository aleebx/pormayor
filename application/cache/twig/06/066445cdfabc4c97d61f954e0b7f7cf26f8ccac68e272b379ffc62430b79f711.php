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
            echo " - S/";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
        } else {
            echo " PorMayor.pe - Crece con nosotros";
        }
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 12
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            echo "Precio por mayor: S/";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
        } else {
            echo "Ayudamos a crecer a todo los nuevos emprendedores en iniciar su negocio. Llévate todo surtido y a precio por mayor por una compra mínima de 100 soles";
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
        echo "<meta name=\"description\" content=\"Productos por cajón al mejor precio del mercado. Productos novedosos importados directamente desde China. Precio por mayor desde una unidad.\">
<meta name=\"keywords\" content=\"Por mayor, cajón, productos novedosos, productos para el hogar, roperos de ropa, zapateras, compra por cajón\">
<link rel=\"icon\" href=\"https://pormayor.pe/img/promo/lpm.ico\">
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
";
        // line 46
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "  <style type=\"text/css\">
  .autocomplete-content{width: 40vw !important; z-index: 9999 !important;position: relative;}
  .w100 {width:200% !important}
  @media only screen and (max-width: 600px) {
  .w100 {width:100% !important}
  .autocomplete-content{width: 80vw!important;}
  }
  </style>
</head>
<body id=\"inicio\" class=\"grey lighten-4\">
 <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1437377980109766');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=1437377980109766&ev=PageView&noscript=1\"
/></noscript>
<!-- End Meta Pixel Code -->
<div class=\"inner\">    
    <ul id='dropdown2' class='dropdown-content'>
      ";
        // line 76
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 77
            echo "        ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 78
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 79
                echo base_url();
                echo "comprador/index/respuesta_comentario\">
              <i class=\"material-icons left\">comment</i>Tu comentario <b>fue respondido </b><span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 84
            echo "        ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 85
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 86
                echo base_url();
                echo "comprador/index/pedidos\">
              <i class=\"material-icons left\">comment</i><b>Respondieron</b> tu cotización <span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 91
            echo "      ";
        } else {
            // line 92
            echo "          <li >
            <a  href=\"#\">
              <span class=\"enfasisC\">No tienes notificaciones</span>
            </a>
          </li>
      ";
        }
        // line 98
        echo "    </ul>
</div>
    <div class=\"grey lighten-4\">
      <div class=\"right\">
        <a href=\"https://www.facebook.com/pormayoroficial\"><img src=\"";
        // line 102
        echo ($context["ruta_img"] ?? null);
        echo "icons/facebook.png\"></a>
        ";
        // line 104
        echo "        <a href=\"https://www.tiktok.com/@pormayor.pe\"><img src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "icons/tiktok.png\"></a>
        <a href=\"https://www.youtube.com/channel/UCte8tqCKUnni_J0VV-TDQQQ\"><img src=\"";
        // line 105
        echo ($context["ruta_img"] ?? null);
        echo "icons/youtube.png\"></a>
      </div>
    </div>
    <div class=\"black center\">
      <span class=\"white-text fontA\">¡Por compras mínimas de <b class=\"amber-text\">S/100</b>, llévate diferentes productos a precio por cajón!</span>
    </div>
    
        ";
        // line 112
        if ((($context["userAgent"] ?? null) == "movil")) {
            // line 113
            echo "          <nav class=\"pormayor\">
            <div class=\"nav-wrapper\">
              <div class=\"row\">
                <div class=\"col s2\">
               <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
              <img alt=\"\" src=\"";
            // line 118
            echo ($context["ruta_img"] ?? null);
            echo "menuIcon.svg\" width=\"35\">            </a>
                  
                </div>
                <div class=\"col s10\">
              <input type=\"text\" class=\"browser-default buscador autocomplete redondeo white enfasisA\" placeholder=\"Buscar productos\" data-tienda=\"pormayor\">
                  
                </div>
              </div>
            </div>
          </nav>
        ";
        } else {
            // line 129
            echo "        <nav class=\"pormayor\">
          <div class=\"nav-wrapper container\">
            <a class=\"brand-logo\" href=\"";
            // line 131
            echo base_url();
            echo "\" >
              <img alt=\"Pomayor.pe - Crece con nosotros\" src=\"";
            // line 132
            echo ($context["ruta_img"] ?? null);
            echo "icons/logoPrincipal.png\" height=\"55px\" style=\"padding-top: 5px;\">
            </a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
              <li>
                <a class='dropdown-button black-text' href='#' data-activates='categoriasList'><i class=\"material-icons right\">keyboard_arrow_down</i> Categorias</a>
              </li>
              <li>
                <div class=\"contentSearch contentSearchTienda positionRelative\">
                    <i class=\"material-icons positionAbsolute sinUser grey-text text-lighten-1 lineHeight0 transitionB\">search</i>
                    <input type=\"text\" class=\"browser-default buscador autocomplete redondeo white enfasisA\" placeholder=\"Buscar productos\" data-tienda=\"pormayor\">
                </div>
              </li>
              <li>
                <a class=\"black-text\" href=\"";
            // line 145
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\">shopping_cart</i>Mis compras</a>
              </li>
              <li>
                ";
            // line 148
            if ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())) {
                // line 149
                echo "                <a class=\"dropdown-trigger black-text\" href=\"#!\" data-activates=\"ddUsuario\">";
                echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 7)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 7) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
                echo "<i class=\"material-icons right\">account_circle</i></a>      
                ";
            } else {
                // line 151
                echo "                <a class=\"black-text\" href=\"";
                echo base_url();
                echo "usuario/login\"><i class=\"material-icons left\">account_circle</i>Mi cuenta</a>
                ";
            }
            // line 153
            echo "              </li>
            </ul>
          </div>
        </nav>
        ";
        }
        // line 158
        echo "        <ul id='categoriasList' class='dropdown-content'>
        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 160
            echo "          <li style=\"height: 35px;\"><a itemprop=\"url\" href=\"";
            echo base_url();
            echo "categoria/";
            echo $this->getAttribute($context["cat"], "url", array());
            echo "\">";
            echo twig_upper_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()));
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "            
        </ul>
        <ul id='ddUsuario' class='dropdown-content'>
          ";
        // line 164
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 165
            echo "            <li><a href=\"";
            echo base_url();
            echo "admin/tiendas\"><i class=\"material-icons left\">settings</i>Panel</a></li>
          ";
        } elseif (($this->getAttribute(        // line 166
($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 167
            echo "            <li><a href=\"";
            echo base_url();
            echo "vnd/ventas\"><i class=\"material-icons left\">settings</i>Panel Gestor</a></li>
          ";
        } else {
            // line 169
            echo "            <li><a href=\"";
            echo base_url();
            echo "comprador/index/\"><i class=\"material-icons left\">account_circle</i>Perfil de Usuario</a></li>
            ";
            // line 170
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 171
                echo "              <li><a href=\"https://tienda-oficial.pormayor.pe/usuario/venta\"><i class=\"material-icons left\">settings</i>Panel Tienda</a></li>
            ";
            }
            // line 173
            echo "          ";
        }
        // line 174
        echo "          <li class=\"divider\"></li>
          <li><a class=\"cerrarSesionBtn\"><i class=\"material-icons left\">power_settings_new</i>Cerrar sesión</a></li>
        </ul>        
        ";
        // line 177
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 178
            echo "          ";
            if (($context["vista_carrito"] ?? null)) {
                // line 179
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
            } elseif (            // line 192
($context["vista_carrito2"] ?? null)) {
                // line 193
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 195
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
            } elseif (            // line 208
($context["vista_carrito3"] ?? null)) {
                // line 209
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 211
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <a href=\"";
                // line 216
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
            } elseif (            // line 226
($context["vista_carrito4"] ?? null)) {
                // line 227
                echo "            <div class=\"nav-content pormayorUnico\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s12 sinUser center fontB2 enfasisD white-text\">
                  <p>ÚNETE A LA FAMILIA <b>PORMAYOR</b></p>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 234
($context["vista_carrito5"] ?? null)) {
                // line 235
                echo "          ";
            }
            // line 236
            echo "        ";
        }
        // line 237
        echo "      ";
        // line 239
        echo "    <!-- HEADER -->
        ";
        // line 240
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 241
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center pormayor\">
                <img alt=\"Pomayor.pe - Crece con nosotros\" src=\"";
            // line 243
            echo ($context["ruta_img"] ?? null);
            echo "icons/logoPrincipal.png\" height=\"55px\" style=\"padding-top: 10px;\">
              </li>
                ";
            // line 245
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 246
                echo "              <li class=\"headerMenu center valign-wrapper\">
                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"https://tienda-oficial.pormayor.pe/usuario/venta\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 248
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 249
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "vnd/ventas\" style=\"padding: 0 16px;\">ASESOR</a>
              </li>
                ";
            }
            // line 252
            echo "              ";
            if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                // line 253
                echo "              <li class=\"headerMenu center valign-wrapper\">
                <a  class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\" href=\"";
                // line 254
                echo base_url();
                echo "comprador/compra/\">Mis compras</a>      

                <a  class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\" href=\"";
                // line 256
                echo base_url();
                echo "usuario/perfil\">Mi perfil</a>      
              </li>
              ";
            }
            // line 259
            echo "              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 260
            echo base_url();
            echo "\"><i class=\"material-icons left\">home</i>Página Principal</a>      
              </li>
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 263
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\">shopping_cart</i>Carrito</a>      
              </li>
              ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 266
                echo "              <li class=\"itemMenu\" style=\"height: 35px;border-bottom: 1px solid grey;\"><a itemprop=\"url\" href=\"";
                echo base_url();
                echo "categoria/";
                echo $this->getAttribute($context["cat"], "url", array());
                echo "\">";
                echo twig_upper_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()));
                echo "</a></li>             
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "                   
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 268
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
            </ul>         
        ";
        } else {
            // line 271
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center pormayor\">
                <img alt=\"Pomayor.pe - Crece con nosotros\" src=\"";
            // line 274
            echo ($context["ruta_img"] ?? null);
            echo "icons/logoPrincipal.png\" height=\"55px\" style=\"padding-top: 10px;\">
              </li>
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn waves-effect waves-orange centrarForzado anchoTotal\" href=\"";
            // line 277
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
              </li>
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn-flat centrarForzado anchoTotal white-text\" href=\"";
            // line 280
            echo base_url();
            echo "usuario/registro\" style=\"padding: 0 16px;border: 1px solid #848484;\">Registrarse</a>
              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 283
            echo base_url();
            echo "\">Página Principal</a>      
              </li>              
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 286
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\">shopping_cart</i>Carrito</a>      
              </li>
              ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 289
                echo "              <li class=\"itemMenu\" style=\"height: 35px;border-bottom: 1px solid grey;\"><a itemprop=\"url\" href=\"";
                echo base_url();
                echo "categoria/";
                echo $this->getAttribute($context["cat"], "url", array());
                echo "\">";
                echo twig_upper_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()));
                echo "</a></li>             
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "            </ul>
        ";
        }
        // line 293
        echo "      <div class=\"overlayBody hide\"></div>      
      ";
        // line 294
        $this->displayBlock('content', $context, $blocks);
        // line 295
        echo "       <div class=\"fixed-action-btn\">
        <a class=\"btn-floating btn-large pormayor\" href=\"";
        // line 296
        echo base_url();
        echo "productos/carrito\">
          <i class=\"large material-icons black-text\">shopping_cart</i>
        </a>
      </div>

        <footer class=\"page-footer grey darken-4 black-text ";
        // line 301
        if (($context["nofooter"] ?? null)) {
            echo "hide";
        }
        echo "\">
          <div class=\"container\">
              <div class=\"row white-text\">
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">PorMayor.pe</h5>
                <p>Somos un ecommerce peruano, dedicados a la venta por cajón para emprendedores y pymes.</p>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">Mi cuenta</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 311
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 312
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 313
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 314
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">Te ayudamos</h5>
                <ul>
                  ";
        // line 321
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 322
        echo base_url();
        echo "legal/devolucionesycambios\">Politicas de Devoluciones y Cambios</a></li>
                  ";
        // line 324
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">Contacto</h5>
                <ul>
                ";
        // line 333
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
              <div class=\"col l6 left\">
                © 2018-2022 Derechos Reservados <a href=\"";
        // line 345
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2 right\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 348
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\" height=\"27px\"></a>
              </div>
          </div>
        </footer>      
    ";
        // line 352
        $this->displayBlock('modal', $context, $blocks);
        // line 353
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\" async></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\" async></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\" async></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\" async></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\" async></script>
      <script src=\"";
        // line 359
        echo base_url("public/js/template-lite.min.js?v=0152");
        echo "\" defer></script>
    ";
        // line 360
        $this->displayBlock('script', $context, $blocks);
        // line 361
        echo "   </body>

</html>";
    }

    // line 29
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 46
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 294
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 352
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 360
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
        return array (  732 => 360,  726 => 352,  720 => 294,  714 => 46,  709 => 29,  703 => 361,  701 => 360,  697 => 359,  687 => 353,  685 => 352,  678 => 348,  672 => 345,  658 => 333,  648 => 324,  644 => 322,  639 => 321,  630 => 314,  626 => 313,  622 => 312,  618 => 311,  603 => 301,  595 => 296,  592 => 295,  590 => 294,  587 => 293,  583 => 291,  570 => 289,  566 => 288,  561 => 286,  555 => 283,  549 => 280,  543 => 277,  537 => 274,  532 => 271,  525 => 268,  522 => 267,  509 => 266,  505 => 265,  500 => 263,  494 => 260,  491 => 259,  485 => 256,  480 => 254,  477 => 253,  474 => 252,  467 => 249,  465 => 248,  461 => 246,  459 => 245,  454 => 243,  450 => 241,  448 => 240,  445 => 239,  443 => 237,  440 => 236,  437 => 235,  435 => 234,  426 => 227,  424 => 226,  411 => 216,  403 => 211,  399 => 209,  397 => 208,  381 => 195,  377 => 193,  375 => 192,  360 => 179,  357 => 178,  355 => 177,  350 => 174,  347 => 173,  343 => 171,  341 => 170,  336 => 169,  330 => 167,  328 => 166,  323 => 165,  321 => 164,  316 => 161,  303 => 160,  299 => 159,  296 => 158,  289 => 153,  283 => 151,  277 => 149,  275 => 148,  269 => 145,  253 => 132,  249 => 131,  245 => 129,  231 => 118,  224 => 113,  222 => 112,  212 => 105,  207 => 104,  203 => 102,  197 => 98,  189 => 92,  186 => 91,  178 => 86,  175 => 85,  172 => 84,  164 => 79,  161 => 78,  158 => 77,  156 => 76,  125 => 47,  123 => 46,  105 => 30,  103 => 29,  99 => 28,  94 => 26,  88 => 22,  83 => 19,  76 => 15,  73 => 14,  71 => 13,  62 => 12,  52 => 11,  33 => 8,  24 => 1,);
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
