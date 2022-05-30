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
  .autocomplete-content{width: 40vw!important;}
  .w100 {width:200% !important}
  @media only screen and (max-width: 600px) {
  .w100 {width:100% !important}
  .autocomplete-content{width: 80vw!important;}
  }
  </style>
</head>
<body id=\"inicio\" class=\"grey lighten-4\">
<div class=\"inner\">
    <ul id='dropdown1' class='dropdown-content'>
      ";
        // line 59
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 60
            echo "        <li><a href=\"";
            echo base_url();
            echo "admin/tiendas\"><i class=\"material-icons left\">settings</i>Panel</a></li>
      ";
        } elseif (($this->getAttribute(        // line 61
($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 62
            echo "        <li><a href=\"";
            echo base_url();
            echo "vnd/ventas\"><i class=\"material-icons left\">settings</i>Panel Gestor</a></li>
      ";
        } else {
            // line 64
            echo "        <li><a href=\"";
            echo base_url();
            echo "comprador/index/\"><i class=\"material-icons left\">account_circle</i>Perfil de Usuario</a></li>
        ";
            // line 65
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 66
                echo "          <li><a href=\"https://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\"><i class=\"material-icons left\">settings</i>Panel Tienda</a></li>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "      <li class=\"divider\"></li>
      <li><a class=\"cerrarSesionBtn\"><i class=\"material-icons left\">power_settings_new</i>Cerrar sesión</a></li>
    </ul>
    <ul id='dropdown2' class='dropdown-content'>
      ";
        // line 73
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 74
            echo "        ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 75
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 76
                echo base_url();
                echo "comprador/index/respuesta_comentario\">
              <i class=\"material-icons left\">comment</i>Tu comentario <b>fue respondido </b><span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 81
            echo "        ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 82
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 83
                echo base_url();
                echo "comprador/index/pedidos\">
              <i class=\"material-icons left\">comment</i><b>Respondieron</b> tu cotización <span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 88
            echo "      ";
        } else {
            // line 89
            echo "          <li >
            <a  href=\"#\">
              <span class=\"enfasisC\">No tienes notificaciones</span>
            </a>
          </li>
      ";
        }
        // line 95
        echo "    </ul>
</div>
    <div class=\"grey lighten-4\">
      <div class=\"right\">
        <a href=\"\"><img src=\"";
        // line 99
        echo ($context["ruta_img"] ?? null);
        echo "icons/facebook.png\"></a>
        <a href=\"\"><img src=\"";
        // line 100
        echo ($context["ruta_img"] ?? null);
        echo "icons/whatsapp.png\"></a>
        <a href=\"\"><img src=\"";
        // line 101
        echo ($context["ruta_img"] ?? null);
        echo "icons/tiktok.png\"></a>
        <a href=\"\"><img src=\"";
        // line 102
        echo ($context["ruta_img"] ?? null);
        echo "icons/youtube.png\"></a>
      </div>
    </div>
    <div class=\"black center\">
      <span class=\"white-text fontA\">¡Por compras mínimas de <b class=\"amber-text\">S/100</b>, llévate diferentes productos a precio por cajón!</span>
    </div>
    <div class=\"\">
      <nav class=\"z-depth-2 pormayor\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          ";
        // line 111
        if ((($context["userAgent"] ?? null) == "movil")) {
            // line 112
            echo "            <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton ocultarSearch sinPadding\" style=\"height:56px\">
              <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
                <img alt=\"\" src=\"";
            // line 114
            echo ($context["ruta_img"] ?? null);
            echo "menuIcon.svg\" width=\"35\">
                ";
            // line 115
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 116
                echo "                  <span class=\"pormayorUnico pulse\"></span>
                ";
            }
            // line 118
            echo "              </a>
            </div>
          ";
        }
        // line 121
        echo "          <div class=\"col s3 m2 l2 colMenuLogo ocultarSearch valign-wrapper hide-on-small-only\">
            <a href=\"";
        // line 122
        echo base_url();
        echo "\" class=\"valign-wrapper anchoTotal\">
              <img alt=\"Pomayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 123
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" class=\"centrarForzado\">
            </a>
          </div>      
          ";
        // line 126
        if ( !($context["vista_carrito_compra"] ?? null)) {
            // line 127
            echo "            <div class=\"col ";
            if ((($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal") || ($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito"))) {
                echo " m6 s8 sinPadding ";
            } else {
                echo " m8 s10 ";
            }
            echo " l2\" style=\"padding-left:0px\">
              <div class=\"contentSearch contentSearchTienda positionRelative\">
                <i class=\"material-icons positionAbsolute sinUser grey-text text-lighten-1 lineHeight0 transitionB\">search</i>
                <input type=\"text\" class=\"browser-default buscador autocomplete w100 redondeo white enfasisA\" placeholder=\"Buscar productos\" data-tienda=\"pormayor\">
              </div> 
            </div>
          ";
        } else {
            // line 134
            echo "            ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 135
                echo "              <div class=\"col l4 fontA center grey-text text-darken-3\" > 
                ";
                // line 137
                echo "               </div>
            ";
            } else {
                // line 139
                echo "              <div class=\"col s7 fontD2 center grey-text text-darken-3\" > 
                ";
                // line 141
                echo "               </div> 
            ";
            }
            // line 143
            echo "          ";
        }
        // line 144
        echo "          ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito")) {
            // line 145
            echo "            ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 146
                echo "              ";
                if ( !($context["producto_detalle"] ?? null)) {
                    // line 147
                    echo "                <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only\">
                  <div class=\"cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 149
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 150
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
                    // line 158
                    echo "                ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                        // line 159
                        echo "                  <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                    <div class=\"cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                        // line 161
                        echo ($context["totalc"] ?? null);
                        echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                        // line 162
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
                        // line 170
                        echo "                  <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                    <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
                  </div>  
                ";
                    }
                    // line 174
                    echo "              ";
                }
                // line 175
                echo "            ";
            }
            // line 176
            echo "          ";
        }
        // line 177
        echo "         ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal")) {
            // line 178
            echo "          ";
            if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                // line 179
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 180
                    echo "              <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                <div class=\"cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 182
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                  <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 183
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
                // line 191
                echo "          ";
            } else {
                // line 192
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 193
                    echo "              <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                  <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
              </div>
            ";
                }
                // line 197
                echo "          ";
            }
            // line 198
            echo "        ";
        }
        echo "   
          <div class=\"col s2 m3 l6 ocultarSearch colMenuPcII hide-on-med-and-down\">
            ";
        // line 200
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 201
            echo "                <ul  class=\"right\">
              ";
            // line 202
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 203
                echo "                  <li>
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
              ";
            }
            // line 207
            echo "                ";
            if ( !($context["producto_detalle"] ?? null)) {
                // line 208
                echo "                  <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                // line 209
                echo ($context["totalc"] ?? null);
                echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                // line 210
                echo base_url();
                echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                    <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                      <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </li>
                ";
            } else {
                // line 217
                echo "                  ";
                if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                    // line 218
                    echo "                    <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 219
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 220
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                      <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                        <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                        En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                      </div>
                    </li>
                  ";
                }
                // line 227
                echo "                ";
            }
            // line 228
            echo "              ";
            if (($context["reputacion_volver"] ?? null)) {
                // line 229
                echo "                <li class=\"positionRelative\">
                    <a class=\"black-text\" href=\"";
                // line 230
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i> Regresar</a>
                  </li> 
              ";
            }
            // line 233
            echo "                  <li class=\"positionRelative\">
                    ";
            // line 234
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 235
                echo "                      <span class=\"pormayorUnico pulse\" style=\"top: 15px;right: 0px;left: 28px;\"></span>
                    ";
            }
            // line 237
            echo "                    <a class=\"dropdown-trigger black-text\" href=\"#!\"  data-activates=\"dropdown2\">
                      <i class=\"material-icons\">";
            // line 238
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                echo "notifications";
            } else {
                echo "notifications_none";
            }
            echo "</i>
                    </a>
                  </li> 
                  ";
            // line 241
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 242
                echo "                  <li>
                    <a class=\"dropdown-trigger black-text\" href=\"#!\" data-activates=\"dropdown1\">";
                // line 243
                echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 7)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 7) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
                echo "<i class=\"material-icons right\">account_circle</i></a>
                  </li> 
                  ";
            }
            // line 246
            echo "                </ul>      
            ";
        } else {
            // line 248
            echo "              <ul class=\"right\">
                ";
            // line 249
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 250
                echo "                  <li class=\"\">
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
                ";
            }
            // line 253
            echo " 
                ";
            // line 254
            if (($context["vista_carrito_compra"] ?? null)) {
                // line 255
                echo "                  <li><a class=\"black-text\" onclick=\"javascript:history.back()\"><i class=\"material-icons left\">arrow_back</i>Regresar</a></li>
                ";
            }
            // line 257
            echo "                <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont positionAbsolute center\" data-totalc=\"";
            // line 258
            echo ($context["totalc"] ?? null);
            echo "\"><span class=\"cantidad\">0</span></span>
                  <a class=\"grey-text text-darken-4 cartTopPC verCarrito\" href=\"";
            // line 259
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\" style=\"font-size:30px\">shopping_cart</i>Mi compra</a>
                  <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                    <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                    En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                  </div>
                </li>
                <li>
                  <a class=\"black-text hide-on-med-and-up\" href=\"";
            // line 266
            echo base_url();
            echo "usuario/login\"><i class=\"material-icons\">account_circle</i></a>
                  <a href=\"";
            // line 267
            echo base_url();
            echo "usuario/login\" class=\"black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Iniciar Sesión\"><i class=\"material-icons green-text text-darken-4\" style=\"font-size:30px\">account_circle</i></a>
                </li>
              </ul>
            ";
        }
        // line 271
        echo "          </div>
          <a class=\"backSearch positionAbsolute lineHeight0 comoBoton \"><i class=\"material-icons grey-text sinUser lineHeight0\">arrow_back</i></a>
        </div>
        ";
        // line 274
        if (((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($context["producto_detalle"] ?? null)) && (($context["commentsNot"] ?? null) == false))) {
            // line 275
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
        } elseif (        // line 288
($context["filtro_movil_tiendas"] ?? null)) {
            // line 289
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\" browser-default filtroTCat simpleSelect grey-text text-darken-3\">
                  <option value=\"\" disabled selected>CATEGORÍA</option>
                  <option value=\"all\">Todos</option>
                  ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                // line 296
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
            // line 298
            echo "                </select>
              </div>
              <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\"browser-default filtroDep simpleSelect grey-text text-darken-3\" >
                  <option value=\"\" disabled selected>DEPARTAMENTO</option>
                  <option value=\"all\" >Ver todas</option>
                  ";
            // line 304
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                // line 305
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
            // line 307
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
        } elseif ((        // line 319
($context["filtro_movil"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 320
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 321
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 323
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 328
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 331
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 332
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
                // line 334
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 337
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 338
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
                // line 342
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 343
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
                // line 345
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 347
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
                // line 365
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 370
                echo "                </div>
                <div class=\"containerFiltrosC hide\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 376
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 377
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
                // line 379
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 385
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 386
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
                // line 388
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
            // line 402
            echo "        ";
        } elseif ((($context["filtro_movil"] ?? null) && ($context["solo_tienda"] ?? null))) {
            // line 403
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 404
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosC\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 412
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
                // line 414
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 420
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 421
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
                // line 423
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
            // line 437
            echo "        ";
        } elseif (($context["filtro_movil_especial"] ?? null)) {
            // line 438
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 439
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltros\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 446
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 447
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
                // line 449
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
            // line 473
            echo "        ";
        } elseif (($context["filtro_movil_ultimos"] ?? null)) {
            // line 474
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 475
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 477
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 482
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 485
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 486
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
                // line 488
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 491
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 492
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
                // line 496
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 497
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
                // line 499
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 501
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
                // line 519
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 524
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 528
            echo "        ";
        } elseif (($context["filtro_movil_popular"] ?? null)) {
            // line 529
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 530
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 532
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 537
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 540
                $context["array_cat"] = array();
                // line 541
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 542
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array())), ($context["array_cat"] ?? null))) {
                        // line 543
                        echo "                           <option value=\"";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo "\">";
                        echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                        echo "</option>
                           ";
                        // line 544
                        $context["array_cat"] = twig_array_merge(($context["array_cat"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()))));
                        // line 545
                        echo "                        ";
                    }
                    // line 546
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 547
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 550
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 551
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
                // line 555
                $context["array_marcas"] = array();
                // line 556
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 557
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), ($context["array_marcas"] ?? null))) {
                        // line 558
                        echo "                          ";
                        $context["array_marcas"] = twig_array_merge(($context["array_marcas"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()))));
                        // line 559
                        echo "                        ";
                    }
                    // line 560
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 561
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["array_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 562
                    echo "                        ";
                    if ($context["prm"]) {
                        // line 563
                        echo "                          <option value=\"";
                        echo twig_replace_filter($context["prm"], array(" " => "", "\"" => "", "'" => ""));
                        echo "\">";
                        echo twig_title_string_filter($this->env, $context["prm"]);
                        echo "</option>
                        ";
                    }
                    // line 565
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 566
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 568
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
                // line 586
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 591
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 595
            echo "        ";
        } elseif (($context["crear_tienda"] ?? null)) {
            // line 596
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 597
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
            // line 613
            echo "        ";
        } elseif ((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["legales"] ?? null) == true))) {
            // line 614
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
        } elseif ((($this->getAttribute(        // line 642
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["privacidad"] ?? null) == true))) {
            // line 643
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
        } elseif ((($this->getAttribute(        // line 663
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["compra_segura"] ?? null) == true))) {
            // line 664
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
        } elseif ((($this->getAttribute(        // line 682
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["centro_general"] ?? null) == true))) {
            // line 683
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al CENTRO DE AYUDA</a>
              </div>
            </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 690
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["reputacion_volver"] ?? null) == true))) {
            // line 691
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al PRODUCTO</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 699
        echo "        ";
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 700
            echo "          ";
            if (($context["vista_carrito"] ?? null)) {
                // line 701
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
            } elseif (            // line 714
($context["vista_carrito2"] ?? null)) {
                // line 715
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 717
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
            } elseif (            // line 730
($context["vista_carrito3"] ?? null)) {
                // line 731
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 733
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <a href=\"";
                // line 738
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
            } elseif (            // line 748
($context["vista_carrito4"] ?? null)) {
                // line 749
                echo "            <div class=\"nav-content pormayorUnico\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s12 sinUser center fontB2 enfasisD white-text\">
                  <p>ÚNETE A LA FAMILIA <b>PORMAYOR</b></p>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 756
($context["vista_carrito5"] ?? null)) {
                // line 757
                echo "          ";
            }
            // line 758
            echo "        ";
        }
        // line 759
        echo "      </nav>
    </div>
    <!-- HEADER -->
        ";
        // line 762
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 763
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 765
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Ir a Inicio</a>      
              </li>                     
              <li class=\"headerMenu center valign-wrapper\">
                ";
            // line 768
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 769
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"http://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 770
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 771
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "vnd/ventas\" style=\"padding: 0 16px;\">GESTOR</a>
                ";
            }
            // line 773
            echo "                <a href=\"";
            echo base_url();
            echo "comprador/index/pedidos\" class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\">Perfil Usuario</a>
              </li>
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 775
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
            </ul>         
        ";
        } else {
            // line 778
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn centrarForzado\" href=\"";
            // line 781
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 784
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Inicio</a>      
              </li>
              ";
            // line 786
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 787
                echo "              <li class=\"itemMenu\"><a itemprop=\"url\" href=\"";
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
            // line 789
            echo "            </ul>
        ";
        }
        // line 791
        echo "      <div class=\"overlayBody hide\"></div>      
      ";
        // line 792
        $this->displayBlock('content', $context, $blocks);
        // line 793
        echo "       <div class=\"fixed-action-btn\">
        <a class=\"btn-floating btn-large pormayor\" href=\"";
        // line 794
        echo base_url();
        echo "productos/carrito\">
          <i class=\"large material-icons black-text\">shopping_cart</i>
        </a>
      </div>

        <footer class=\"page-footer grey darken-4 black-text ";
        // line 799
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
        // line 809
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 810
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 811
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 812
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">SERVICIO AL CLIENTE</h5>
                <ul>
                  ";
        // line 819
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 820
        echo base_url();
        echo "legal/devolucionesycambios\">Politicas de Devoluciones y Cambios</a></li>
                  ";
        // line 822
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones <i class=\"material-icons\">menu_book</i></a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">ESCRÍBENOS</h5>
                <ul>
                ";
        // line 828
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendedores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 829
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
        // line 831
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
        // line 843
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 846
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\"></a>
              </div>
          </div>
        </footer>      
    ";
        // line 850
        $this->displayBlock('modal', $context, $blocks);
        // line 851
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\"></script>
      <script src=\"";
        // line 856
        echo base_url("public/js/template-lite.min.js?v=0152");
        echo "\" defer></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>
    ";
        // line 858
        $this->displayBlock('script', $context, $blocks);
        // line 859
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

    // line 792
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 850
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 858
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
        return array (  1727 => 858,  1721 => 850,  1715 => 792,  1709 => 46,  1704 => 29,  1698 => 859,  1696 => 858,  1691 => 856,  1682 => 851,  1680 => 850,  1673 => 846,  1667 => 843,  1653 => 831,  1640 => 829,  1636 => 828,  1626 => 822,  1622 => 820,  1617 => 819,  1608 => 812,  1604 => 811,  1600 => 810,  1596 => 809,  1581 => 799,  1573 => 794,  1570 => 793,  1568 => 792,  1565 => 791,  1561 => 789,  1548 => 787,  1544 => 786,  1539 => 784,  1533 => 781,  1528 => 778,  1521 => 775,  1515 => 773,  1509 => 771,  1507 => 770,  1500 => 769,  1498 => 768,  1492 => 765,  1488 => 763,  1486 => 762,  1481 => 759,  1478 => 758,  1475 => 757,  1473 => 756,  1464 => 749,  1462 => 748,  1449 => 738,  1441 => 733,  1437 => 731,  1435 => 730,  1419 => 717,  1415 => 715,  1413 => 714,  1398 => 701,  1395 => 700,  1392 => 699,  1382 => 691,  1380 => 690,  1371 => 683,  1369 => 682,  1349 => 664,  1347 => 663,  1325 => 643,  1323 => 642,  1293 => 614,  1290 => 613,  1272 => 597,  1269 => 596,  1266 => 595,  1260 => 591,  1252 => 586,  1227 => 568,  1223 => 566,  1217 => 565,  1209 => 563,  1206 => 562,  1201 => 561,  1195 => 560,  1192 => 559,  1189 => 558,  1186 => 557,  1181 => 556,  1179 => 555,  1168 => 551,  1162 => 550,  1157 => 547,  1151 => 546,  1148 => 545,  1146 => 544,  1139 => 543,  1136 => 542,  1131 => 541,  1129 => 540,  1121 => 537,  1111 => 532,  1107 => 530,  1104 => 529,  1101 => 528,  1095 => 524,  1087 => 519,  1062 => 501,  1058 => 499,  1047 => 497,  1043 => 496,  1032 => 492,  1026 => 491,  1021 => 488,  1010 => 486,  1006 => 485,  998 => 482,  988 => 477,  984 => 475,  981 => 474,  978 => 473,  952 => 449,  941 => 447,  937 => 446,  928 => 439,  925 => 438,  922 => 437,  906 => 423,  895 => 421,  891 => 420,  883 => 414,  872 => 412,  868 => 411,  859 => 404,  856 => 403,  853 => 402,  837 => 388,  826 => 386,  822 => 385,  814 => 379,  803 => 377,  799 => 376,  791 => 370,  783 => 365,  758 => 347,  754 => 345,  743 => 343,  739 => 342,  728 => 338,  722 => 337,  717 => 334,  706 => 332,  702 => 331,  694 => 328,  684 => 323,  680 => 321,  677 => 320,  675 => 319,  661 => 307,  648 => 305,  644 => 304,  636 => 298,  623 => 296,  619 => 295,  611 => 289,  609 => 288,  594 => 275,  592 => 274,  587 => 271,  580 => 267,  576 => 266,  566 => 259,  562 => 258,  559 => 257,  555 => 255,  553 => 254,  550 => 253,  544 => 250,  542 => 249,  539 => 248,  535 => 246,  529 => 243,  526 => 242,  524 => 241,  514 => 238,  511 => 237,  507 => 235,  505 => 234,  502 => 233,  496 => 230,  493 => 229,  490 => 228,  487 => 227,  477 => 220,  473 => 219,  470 => 218,  467 => 217,  457 => 210,  453 => 209,  450 => 208,  447 => 207,  441 => 203,  439 => 202,  436 => 201,  434 => 200,  428 => 198,  425 => 197,  419 => 193,  416 => 192,  413 => 191,  402 => 183,  398 => 182,  394 => 180,  391 => 179,  388 => 178,  385 => 177,  382 => 176,  379 => 175,  376 => 174,  370 => 170,  359 => 162,  355 => 161,  351 => 159,  348 => 158,  337 => 150,  333 => 149,  329 => 147,  326 => 146,  323 => 145,  320 => 144,  317 => 143,  313 => 141,  310 => 139,  306 => 137,  303 => 135,  300 => 134,  285 => 127,  283 => 126,  277 => 123,  273 => 122,  270 => 121,  265 => 118,  261 => 116,  259 => 115,  255 => 114,  251 => 112,  249 => 111,  237 => 102,  233 => 101,  229 => 100,  225 => 99,  219 => 95,  211 => 89,  208 => 88,  200 => 83,  197 => 82,  194 => 81,  186 => 76,  183 => 75,  180 => 74,  178 => 73,  172 => 69,  169 => 68,  161 => 66,  159 => 65,  154 => 64,  148 => 62,  146 => 61,  141 => 60,  139 => 59,  125 => 47,  123 => 46,  105 => 30,  103 => 29,  99 => 28,  94 => 26,  88 => 22,  83 => 19,  76 => 15,  73 => 14,  71 => 13,  62 => 12,  52 => 11,  33 => 8,  24 => 1,);
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
