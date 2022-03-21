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
        $this->displayBlock('head', $context, $blocks);
        // line 31
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
<div class=\"inner\">
    <ul id='dropdown1' class='dropdown-content'>
      ";
        // line 43
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 44
            echo "        <li><a href=\"";
            echo base_url();
            echo "admin/tiendas\"><i class=\"material-icons left\">settings</i>Panel</a></li>
      ";
        } elseif (($this->getAttribute(        // line 45
($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 46
            echo "        <li><a href=\"";
            echo base_url();
            echo "vnd/ventas\"><i class=\"material-icons left\">settings</i>Panel Gestor</a></li>
      ";
        } else {
            // line 48
            echo "        <li><a href=\"";
            echo base_url();
            echo "comprador/index/\"><i class=\"material-icons left\">account_circle</i>Perfil de Usuario</a></li>
        ";
            // line 49
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 50
                echo "          <li><a href=\"https://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\"><i class=\"material-icons left\">settings</i>Panel Tienda</a></li>
        ";
            }
            // line 52
            echo "      ";
        }
        // line 53
        echo "      <li class=\"divider\"></li>
      <li><a class=\"cerrarSesionBtn\"><i class=\"material-icons left\">power_settings_new</i>Cerrar sesión</a></li>
    </ul>
    <ul id='dropdown2' class='dropdown-content'>
      ";
        // line 57
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 58
            echo "        ";
            if ( !twig_test_empty(($context["noticoments"] ?? null))) {
                // line 59
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 60
                echo base_url();
                echo "comprador/index/respuesta_comentario\">
              <i class=\"material-icons left\">comment</i>Tu comentario <b>fue respondido </b><span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 65
            echo "        ";
            if ( !twig_test_empty(($context["noticotiza"] ?? null))) {
                // line 66
                echo "          <li style=\"width: 320px\">
            <a  href=\"";
                // line 67
                echo base_url();
                echo "comprador/index/pedidos\">
              <i class=\"material-icons left\">comment</i><b>Respondieron</b> tu cotización <span class=\"pormayorUnico-text\">(Ver)</span>
            </a>
          </li>
        ";
            }
            // line 72
            echo "      ";
        } else {
            // line 73
            echo "          <li >
            <a  href=\"#\">
              <span class=\"enfasisC\">No tienes notificaciones</span>
            </a>
          </li>
      ";
        }
        // line 79
        echo "    </ul>
</div>
    <div class=\"navbar-fixed inner\">
      <nav class=\"z-depth-2 pormayor nav-extended\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          ";
        // line 84
        if ((($context["userAgent"] ?? null) == "movil")) {
            // line 85
            echo "            <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton ocultarSearch sinPadding\" style=\"height:56px\">
              <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
                <img alt=\"\" src=\"";
            // line 87
            echo ($context["ruta_img"] ?? null);
            echo "menuIcon.svg\" width=\"35\">
                ";
            // line 88
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 89
                echo "                  <span class=\"pormayorUnico pulse\"></span>
                ";
            }
            // line 91
            echo "              </a>
            </div>
          ";
        }
        // line 94
        echo "          <div class=\"col s3 m2 l2 colMenuLogo ocultarSearch valign-wrapper hide-on-small-only\">
            <a href=\"";
        // line 95
        echo base_url();
        echo "\" class=\"valign-wrapper anchoTotal\">
              <img alt=\"Pomayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 96
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" class=\"centrarForzado\">
            </a>
          </div>      
          ";
        // line 99
        if ( !($context["vista_carrito_compra"] ?? null)) {
            // line 100
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
            // line 107
            echo "            ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 108
                echo "              <div class=\"col l4 fontA center grey-text text-darken-3\" > 
                ";
                // line 110
                echo "               </div>
            ";
            } else {
                // line 112
                echo "              <div class=\"col s7 fontD2 center grey-text text-darken-3\" > 
                ";
                // line 114
                echo "               </div> 
            ";
            }
            // line 116
            echo "          ";
        }
        // line 117
        echo "          ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "carrito")) {
            // line 118
            echo "            ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 119
                echo "              ";
                if ( !($context["producto_detalle"] ?? null)) {
                    // line 120
                    echo "                <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only\">
                  <div class=\"cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 122
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 123
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
                    // line 131
                    echo "                ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                        // line 132
                        echo "                  <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                    <div class=\"cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                        // line 134
                        echo ($context["totalc"] ?? null);
                        echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                        // line 135
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
                        // line 143
                        echo "                  <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                    <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
                  </div>  
                ";
                    }
                    // line 147
                    echo "              ";
                }
                // line 148
                echo "            ";
            }
            // line 149
            echo "          ";
        }
        // line 150
        echo "         ";
        if (($this->getAttribute(($context["pagina"] ?? null), "tipo", array()) == "principal")) {
            // line 151
            echo "          ";
            if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                // line 152
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 153
                    echo "              <div class=\"colMenuButton ocultarSearch col center s2 m2 l2 sinPadding hide-on-large-only positionRelative\">
                <div class=\"cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 155
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                  <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 156
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
                // line 164
                echo "          ";
            } else {
                // line 165
                echo "            ";
                if ((($context["userAgent"] ?? null) == "movil")) {
                    // line 166
                    echo "              <div class=\"col center s2 m2 l2 sinPadding colMenuButton ocultarSearch\" >
                  <a class=\"waves-effect waves-black addHome anchoTotal\"><i class=\"material-icons pormayorAccent-text\">group_add</i></a>
              </div>
            ";
                }
                // line 170
                echo "          ";
            }
            // line 171
            echo "        ";
        }
        echo "   
          <div class=\"col s2 m3 l6 ocultarSearch colMenuPcII hide-on-med-and-down\">
            ";
        // line 173
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 174
            echo "                <ul  class=\"right\">
              ";
            // line 175
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 176
                echo "                  <li>
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
              ";
            }
            // line 180
            echo "                ";
            if ( !($context["producto_detalle"] ?? null)) {
                // line 181
                echo "                  <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                    <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                // line 182
                echo ($context["totalc"] ?? null);
                echo "\" ><span class=\"cantidad white-text\">0</span></span>
                    <a class=\"black-text cartTopPC verCarrito\" href=\"";
                // line 183
                echo base_url();
                echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                    <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                      <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                      En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                    </div>
                  </li>
                ";
            } else {
                // line 190
                echo "                  ";
                if (($this->getAttribute(($context["usuario"] ?? null), "id_tienda", array()) != $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()))) {
                    // line 191
                    echo "                    <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                      <span class=\"pormayorUnico counterCont black-text positionAbsolute center\" data-totalc=\"";
                    // line 192
                    echo ($context["totalc"] ?? null);
                    echo "\" ><span class=\"cantidad white-text\">0</span></span>
                      <a class=\"black-text cartTopPC verCarrito\" href=\"";
                    // line 193
                    echo base_url();
                    echo "productos/carrito\"><i class=\"black-text material-icons left\">shopping_cart</i>Mi compra</a>
                      <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                        <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                        En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                      </div>
                    </li>
                  ";
                }
                // line 200
                echo "                ";
            }
            // line 201
            echo "              ";
            if (($context["reputacion_volver"] ?? null)) {
                // line 202
                echo "                <li class=\"positionRelative\">
                    <a class=\"black-text\" href=\"";
                // line 203
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i> Regresar</a>
                  </li> 
              ";
            }
            // line 206
            echo "                  <li class=\"positionRelative\">
                    ";
            // line 207
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                // line 208
                echo "                      <span class=\"pormayorUnico pulse\" style=\"top: 15px;right: 0px;left: 28px;\"></span>
                    ";
            }
            // line 210
            echo "                    <a class=\"dropdown-trigger black-text\" href=\"#!\"  data-activates=\"dropdown2\">
                      <i class=\"material-icons\">";
            // line 211
            if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
                echo "notifications";
            } else {
                echo "notifications_none";
            }
            echo "</i>
                    </a>
                  </li> 
                  ";
            // line 214
            if ( !($context["vista_carrito_compra"] ?? null)) {
                // line 215
                echo "                  <li>
                    <a class=\"dropdown-trigger black-text\" href=\"#!\" data-activates=\"dropdown1\">";
                // line 216
                echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 7)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 7) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
                echo "<i class=\"material-icons right\">account_circle</i></a>
                  </li> 
                  ";
            }
            // line 219
            echo "                </ul>      
            ";
        } else {
            // line 221
            echo "              <ul class=\"right\">
                ";
            // line 222
            if ((((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($this->getAttribute(($context["pagina"] ?? null), "titulo", array()) != "Tiendas")) && (($context["commentsNot"] ?? null) == false)) && (($context["comments"] ?? null) == true))) {
                // line 223
                echo "                  <li class=\"\">
                    <a class=\"comentsBtn waves-effect waves-light black-text \" href=\"#comentsBlock\">Comentarios</a>
                  </li>
                ";
            }
            // line 226
            echo " 
                ";
            // line 227
            if (($context["vista_carrito_compra"] ?? null)) {
                // line 228
                echo "                  <li><a class=\"black-text\" onclick=\"javascript:history.back()\"><i class=\"material-icons left\">arrow_back</i>Regresar</a></li>
                ";
            }
            // line 230
            echo "                <li class=\"hide-on-med-and-down cartAnimacion positionRelative\">
                  <span class=\"pormayorUnico counterCont positionAbsolute center\" data-totalc=\"";
            // line 231
            echo ($context["totalc"] ?? null);
            echo "\"><span class=\"cantidad\">0</span></span>
                  <a class=\"grey-text text-darken-4 cartTopPC verCarrito\" href=\"";
            // line 232
            echo base_url();
            echo "productos/carrito\"><i class=\"material-icons left\" style=\"font-size:30px\">shopping_cart</i>Mi compra</a>
                  <div class=\"pormayorUnico redondeo positionAbsolute anchoTotal center sinUser transition cartTotalPointer hide\">
                    <div class=\"positionAbsolute left0 right0 centrarForzado\"></div>
                    En total llevas <br><span class=\"totalActualCart negrita fontD2\"></span>
                  </div>
                </li>
                <li>
                  <a class=\"black-text hide-on-med-and-up\" href=\"";
            // line 239
            echo base_url();
            echo "usuario/login\"><i class=\"material-icons\">account_circle</i></a>
                  <a href=\"";
            // line 240
            echo base_url();
            echo "usuario/login\" class=\"black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Iniciar Sesión\"><i class=\"material-icons green-text text-darken-4\" style=\"font-size:30px\">account_circle</i></a>
                </li>
              </ul>
            ";
        }
        // line 244
        echo "          </div>
          <a class=\"backSearch positionAbsolute lineHeight0 comoBoton \"><i class=\"material-icons grey-text sinUser lineHeight0\">arrow_back</i></a>
        </div>
        ";
        // line 247
        if (((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && ($context["producto_detalle"] ?? null)) && (($context["commentsNot"] ?? null) == false))) {
            // line 248
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
        } elseif (        // line 261
($context["filtro_movil_tiendas"] ?? null)) {
            // line 262
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\" browser-default filtroTCat simpleSelect grey-text text-darken-3\">
                  <option value=\"\" disabled selected>CATEGORÍA</option>
                  <option value=\"all\">Todos</option>
                  ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                // line 269
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
            // line 271
            echo "                </select>
              </div>
              <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                <select class=\"browser-default filtroDep simpleSelect grey-text text-darken-3\" >
                  <option value=\"\" disabled selected>DEPARTAMENTO</option>
                  <option value=\"all\" >Ver todas</option>
                  ";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                // line 278
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
            // line 280
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
        } elseif ((        // line 292
($context["filtro_movil"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 293
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 294
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 296
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 301
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 304
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 305
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
                // line 307
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 310
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 311
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
                // line 315
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 316
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
                // line 318
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 320
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
                // line 338
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 343
                echo "                </div>
                <div class=\"containerFiltrosC hide\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 349
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 350
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
                // line 352
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 359
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
                // line 361
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
            // line 375
            echo "        ";
        } elseif ((($context["filtro_movil"] ?? null) && ($context["solo_tienda"] ?? null))) {
            // line 376
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 377
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosC\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\" browser-default simpleSelect grey-text text-darken-3 filtroTCat\">
                      <option value=\"\" disabled selected>CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 384
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btc"]) {
                    // line 385
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
                // line 387
                echo "                    </select>
                  </div>
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default simpleSelect grey-text text-darken-3 filtroDep\" >
                      <option value=\"\" disabled selected>DEPARTAMENTOS</option>
                      <option value=\"all\" >Ver todas</option>
                      ";
                // line 393
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["busqueda_tiendas_dep"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["btd"]) {
                    // line 394
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
                // line 396
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
            // line 410
            echo "        ";
        } elseif (($context["filtro_movil_especial"] ?? null)) {
            // line 411
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 412
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltros\">
                  <div class=\"col s4 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                    <select class=\"browser-default filtroMarcaSelect simpleSelect grey-text text-darken-3\">
                      <option value=\"\" disabled selected>MARCA</option>
                      <option value=\"all\">Todas</option>
                      ";
                // line 419
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 420
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
                // line 422
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
            // line 446
            echo "        ";
        } elseif (($context["filtro_movil_ultimos"] ?? null)) {
            // line 447
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 448
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 450
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 455
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 458
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_cat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 459
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
                // line 461
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 464
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 465
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
                // line 469
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 470
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
                // line 472
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 474
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
                // line 492
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 497
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 501
            echo "        ";
        } elseif (($context["filtro_movil_popular"] ?? null)) {
            // line 502
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 503
                echo "            <div class=\"nav-content hide-on-large-only pormayor\">
              <div class=\"row sinBordeBottom\">
                <div class=\"containerFiltrosA ";
                // line 505
                if (($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col s5 center sinPadding\" style=\"border-right:1px solid rgba(0,0,0,0.2)\"> 
                   <button class=\"waves-effect waves-light btn-flat sinPadding anchoTotal masFiltros\"><i class=\"material-icons positionRelative\">filter_list</i>Más Filtros</button>
                  </div>
                  <div class=\"col s7 center sinPadding\"> 
                    <select class=\"browser-default simpleSelect filtroProductoCat grey-text text-darken-3\" ";
                // line 510
                if (($context["filtro_categorias"] ?? null)) {
                    echo "disabled";
                }
                echo ">
                      <option value=\"\" disabled selected>FILTRAR POR CATEGORÍAS</option>
                      <option value=\"all\">Todos</option>
                      ";
                // line 513
                $context["array_cat"] = array();
                // line 514
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 515
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array())), ($context["array_cat"] ?? null))) {
                        // line 516
                        echo "                           <option value=\"";
                        echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                        echo "\">";
                        echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                        echo "</option>
                           ";
                        // line 517
                        $context["array_cat"] = twig_array_merge(($context["array_cat"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()))));
                        // line 518
                        echo "                        ";
                    }
                    // line 519
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 520
                echo "                    </select>
                  </div>
                </div>
                <div class=\"containerFiltrosB ";
                // line 523
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " hide ";
                }
                echo "\">
                  <div class=\"col ";
                // line 524
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
                // line 528
                $context["array_marcas"] = array();
                // line 529
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 530
                    echo "                        ";
                    if (!twig_in_filter(twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array())), ($context["array_marcas"] ?? null))) {
                        // line 531
                        echo "                          ";
                        $context["array_marcas"] = twig_array_merge(($context["array_marcas"] ?? null), array(0 => twig_title_string_filter($this->env, $this->getAttribute($context["prm"], "Pro_Marca", array()))));
                        // line 532
                        echo "                        ";
                    }
                    // line 533
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 534
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["array_marcas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prm"]) {
                    // line 535
                    echo "                        ";
                    if ($context["prm"]) {
                        // line 536
                        echo "                          <option value=\"";
                        echo twig_replace_filter($context["prm"], array(" " => "", "\"" => "", "'" => ""));
                        echo "\">";
                        echo twig_title_string_filter($this->env, $context["prm"]);
                        echo "</option>
                        ";
                    }
                    // line 538
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 539
                echo "                    </select>
                  </div>
                  <div class=\"col ";
                // line 541
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
                // line 559
                if ( !($context["filtro_categorias"] ?? null)) {
                    echo " 
                    <div class=\"col s2 sinPadding menosFiltros center \">
                      <i class=\"material-icons white-text sinUser anchoTotal positionRelative waves-effect grey-text text-darken-3\">arrow_back</i>
                    </div>
                  ";
                }
                // line 564
                echo "                </div>
              </div>
            </div>
          ";
            }
            // line 568
            echo "        ";
        } elseif (($context["crear_tienda"] ?? null)) {
            // line 569
            echo "          ";
            if ((($context["userMovil"] ?? null) != "PC")) {
                // line 570
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
            // line 586
            echo "        ";
        } elseif ((($this->getAttribute(($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["legales"] ?? null) == true))) {
            // line 587
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
        } elseif ((($this->getAttribute(        // line 615
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["privacidad"] ?? null) == true))) {
            // line 616
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
        } elseif ((($this->getAttribute(        // line 636
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["compra_segura"] ?? null) == true))) {
            // line 637
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
        } elseif ((($this->getAttribute(        // line 655
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["centro_general"] ?? null) == true))) {
            // line 656
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al CENTRO DE AYUDA</a>
              </div>
            </div>
          </div>
        ";
        } elseif ((($this->getAttribute(        // line 663
($context["pagina"] ?? null), "extrabtn", array()) == "SI") && (($context["reputacion_volver"] ?? null) == true))) {
            // line 664
            echo "          <div class=\"nav-content hide-on-large-only pormayor\">
            <div class=\"row sinBordeBottom\">
              <div class=\"col s12 center\" style=\"margin-bottom:5px\"> 
                <a class=\"waves-effect waves-light btn-flat\" onclick=\"javascript:history.back()\"><i style=\"top:-10px\" class=\"iconSubNav material-icons left \">arrow_back</i>REGRESAR Al PRODUCTO</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 672
        echo "        ";
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 673
            echo "          ";
            if (($context["vista_carrito"] ?? null)) {
                // line 674
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
            } elseif (            // line 687
($context["vista_carrito2"] ?? null)) {
                // line 688
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 690
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
            } elseif (            // line 703
($context["vista_carrito3"] ?? null)) {
                // line 704
                echo "            <div class=\"nav-content white\">
              <div class=\"row centrarForzado navCompra\">
                <a href=\"";
                // line 706
                echo base_url();
                echo "productos/carrito\">
                  <div class=\"col s4 sinUser center fontB2 enfasisD\">
                    <i class=\"material-icons left small\" >looks_one</i> <span class=\"positionRelative\">RESUMEN</span>
                  </div>
                </a>
                <a href=\"";
                // line 711
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
            } elseif (            // line 721
($context["vista_carrito4"] ?? null)) {
                // line 722
                echo "            <div class=\"nav-content pormayorUnico\">
              <div class=\"row centrarForzado navCompra\">
                <div class=\"col s12 sinUser center fontB2 enfasisD white-text\">
                  <p>ÚNETE A LA FAMILIA <b>PORMAYOR</b></p>
                </div>
              </div>
            </div>
          ";
            } elseif (            // line 729
($context["vista_carrito5"] ?? null)) {
                // line 730
                echo "          ";
            }
            // line 731
            echo "        ";
        }
        // line 732
        echo "      </nav>
    </div>
    <!-- HEADER -->
        ";
        // line 735
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 736
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 738
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Ir a Inicio</a>      
              </li>                     
              <li class=\"headerMenu center valign-wrapper\">
                ";
            // line 741
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 742
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"http://";
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 743
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 744
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "vnd/ventas\" style=\"padding: 0 16px;\">GESTOR</a>
                ";
            }
            // line 746
            echo "                <a href=\"";
            echo base_url();
            echo "comprador/index/pedidos\" class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\">Perfil Usuario</a>
              </li>
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 748
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
            </ul>         
        ";
        } else {
            // line 751
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn centrarForzado\" href=\"";
            // line 754
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 757
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Inicio</a>      
              </li>
              ";
            // line 759
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 760
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
            // line 762
            echo "            </ul>
        ";
        }
        // line 764
        echo "      <div class=\"overlayBody hide\"></div>      
      ";
        // line 765
        $this->displayBlock('content', $context, $blocks);
        // line 766
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
        // line 776
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 777
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 778
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 779
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">SERVICIO AL CLIENTE</h5>
                <ul>
                  ";
        // line 786
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 787
        echo base_url();
        echo "legal/devolucionesycambios\">Politicas de Devoluciones y Cambios</a></li>
                  ";
        // line 789
        echo "                  <li><a class=\"\" href=\"";
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones <i class=\"material-icons\">menu_book</i></a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">ESCRÍBENOS</h5>
                <ul>
                ";
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendedores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 796
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
        // line 798
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
        // line 810
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 813
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\"></a>
              </div>
          </div>
        </footer>      
    ";
        // line 817
        $this->displayBlock('modal', $context, $blocks);
        // line 818
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\"></script>
      <script src=\"";
        // line 823
        echo base_url("public/js/template-lite.min.js?v=1512");
        echo "\" defer></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>
    ";
        // line 825
        $this->displayBlock('script', $context, $blocks);
        // line 826
        echo "   </body>

</html>";
    }

    // line 29
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 30
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 765
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 817
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 825
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
        return array (  1676 => 825,  1670 => 817,  1664 => 765,  1658 => 30,  1653 => 29,  1647 => 826,  1645 => 825,  1640 => 823,  1631 => 818,  1629 => 817,  1622 => 813,  1616 => 810,  1602 => 798,  1589 => 796,  1585 => 795,  1575 => 789,  1571 => 787,  1566 => 786,  1557 => 779,  1553 => 778,  1549 => 777,  1545 => 776,  1529 => 766,  1527 => 765,  1524 => 764,  1520 => 762,  1507 => 760,  1503 => 759,  1498 => 757,  1492 => 754,  1487 => 751,  1480 => 748,  1474 => 746,  1468 => 744,  1466 => 743,  1459 => 742,  1457 => 741,  1451 => 738,  1447 => 736,  1445 => 735,  1440 => 732,  1437 => 731,  1434 => 730,  1432 => 729,  1423 => 722,  1421 => 721,  1408 => 711,  1400 => 706,  1396 => 704,  1394 => 703,  1378 => 690,  1374 => 688,  1372 => 687,  1357 => 674,  1354 => 673,  1351 => 672,  1341 => 664,  1339 => 663,  1330 => 656,  1328 => 655,  1308 => 637,  1306 => 636,  1284 => 616,  1282 => 615,  1252 => 587,  1249 => 586,  1231 => 570,  1228 => 569,  1225 => 568,  1219 => 564,  1211 => 559,  1186 => 541,  1182 => 539,  1176 => 538,  1168 => 536,  1165 => 535,  1160 => 534,  1154 => 533,  1151 => 532,  1148 => 531,  1145 => 530,  1140 => 529,  1138 => 528,  1127 => 524,  1121 => 523,  1116 => 520,  1110 => 519,  1107 => 518,  1105 => 517,  1098 => 516,  1095 => 515,  1090 => 514,  1088 => 513,  1080 => 510,  1070 => 505,  1066 => 503,  1063 => 502,  1060 => 501,  1054 => 497,  1046 => 492,  1021 => 474,  1017 => 472,  1006 => 470,  1002 => 469,  991 => 465,  985 => 464,  980 => 461,  969 => 459,  965 => 458,  957 => 455,  947 => 450,  943 => 448,  940 => 447,  937 => 446,  911 => 422,  900 => 420,  896 => 419,  887 => 412,  884 => 411,  881 => 410,  865 => 396,  854 => 394,  850 => 393,  842 => 387,  831 => 385,  827 => 384,  818 => 377,  815 => 376,  812 => 375,  796 => 361,  785 => 359,  781 => 358,  773 => 352,  762 => 350,  758 => 349,  750 => 343,  742 => 338,  717 => 320,  713 => 318,  702 => 316,  698 => 315,  687 => 311,  681 => 310,  676 => 307,  665 => 305,  661 => 304,  653 => 301,  643 => 296,  639 => 294,  636 => 293,  634 => 292,  620 => 280,  607 => 278,  603 => 277,  595 => 271,  582 => 269,  578 => 268,  570 => 262,  568 => 261,  553 => 248,  551 => 247,  546 => 244,  539 => 240,  535 => 239,  525 => 232,  521 => 231,  518 => 230,  514 => 228,  512 => 227,  509 => 226,  503 => 223,  501 => 222,  498 => 221,  494 => 219,  488 => 216,  485 => 215,  483 => 214,  473 => 211,  470 => 210,  466 => 208,  464 => 207,  461 => 206,  455 => 203,  452 => 202,  449 => 201,  446 => 200,  436 => 193,  432 => 192,  429 => 191,  426 => 190,  416 => 183,  412 => 182,  409 => 181,  406 => 180,  400 => 176,  398 => 175,  395 => 174,  393 => 173,  387 => 171,  384 => 170,  378 => 166,  375 => 165,  372 => 164,  361 => 156,  357 => 155,  353 => 153,  350 => 152,  347 => 151,  344 => 150,  341 => 149,  338 => 148,  335 => 147,  329 => 143,  318 => 135,  314 => 134,  310 => 132,  307 => 131,  296 => 123,  292 => 122,  288 => 120,  285 => 119,  282 => 118,  279 => 117,  276 => 116,  272 => 114,  269 => 112,  265 => 110,  262 => 108,  259 => 107,  244 => 100,  242 => 99,  236 => 96,  232 => 95,  229 => 94,  224 => 91,  220 => 89,  218 => 88,  214 => 87,  210 => 85,  208 => 84,  201 => 79,  193 => 73,  190 => 72,  182 => 67,  179 => 66,  176 => 65,  168 => 60,  165 => 59,  162 => 58,  160 => 57,  154 => 53,  151 => 52,  143 => 50,  141 => 49,  136 => 48,  130 => 46,  128 => 45,  123 => 44,  121 => 43,  107 => 31,  105 => 30,  103 => 29,  99 => 28,  94 => 26,  88 => 22,  83 => 19,  76 => 15,  73 => 14,  71 => 13,  62 => 12,  52 => 11,  33 => 8,  24 => 1,);
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
