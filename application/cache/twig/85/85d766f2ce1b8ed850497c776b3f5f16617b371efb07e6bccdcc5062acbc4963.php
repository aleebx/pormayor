<?php

/* index3.twig */
class __TwigTemplate_2d3054e962efdb861decbed5ad5d79f9888f0f5e5e54cd8d0bac7f237ce5f8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "index3.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_lite.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 4
        echo base_url("public/intranet/css/inputnumber.css");
        echo "\"  media=\"screen\"/>
\t<style>
\t\tbody > .inner {display: none;}
\t\tbody.pg-loaded > .inner {display: block;}
\t\t.fontX{font-size: 18px!important}
\t\t.swiper-container {
\t      width: 100%;
\t      height: 100%;
\t    }
\t\t";
        // line 13
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 14
            echo "\t  \t\t.alturaDIV{height:289px;}
\t  \t\t.fontD2{font-size: 0.8rem!important;font-weight:1000;}
\t  \t\t.fontE{font-size: 0.8rem!important}
\t  \t\t.slider{height:170px !important;}
\t  \t\t.slides{height:200px !important;}
\t  \t\t.slider .slides{background-color: #9e9e9e00 !important}
\t\t";
        }
        // line 20
        echo "  
\t</style>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t<div class=\"inner\">
\t\t";
        // line 25
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 26
            echo "\t\t\t<div class=\"hide addHomeScreen valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 29
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 30
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\">
\t\t\t\t\t\t\t<a href=\"http://";
                // line 31
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Crear tienda\" data-src=\"";
                // line 32
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionTiendaB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 37
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 43
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 44
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo base_url();
                echo "gestor/gestion\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 46
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t<div class=\"col s12 m12 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 54
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Perfil de usuario\" data-src=\"";
                // line 55
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 61
            echo "   
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 65
            echo "\t\t\t<div class=\"hide addHomeScreen container valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 center sinPadding\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t<a href=\"";
            // line 69
            echo base_url();
            echo "usuario/login\">
\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - registrarse como comprador\"  data-src=\"";
            // line 70
            echo ($context["ruta_img"] ?? null);
            echo "movilOpcionCompradorA.webp\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 76
        echo "\t</div>
\t<main class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t <div class=\"slider\">
\t\t\t\t    <ul class=\"slides\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t      <li> <a href=\"";
        // line 82
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 83
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 84
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 86
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 88
        echo "\t\t\t\t    \t</a>
\t\t\t\t      </li>
\t\t\t\t      <li><a href=\"";
        // line 90
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 91
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 92
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 94
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 96
        echo "\t\t\t\t\t\t</a>
\t\t\t\t      </li>     
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 99
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 100
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 102
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 104
        echo "\t\t\t\t      </li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 center\">
\t\t\t\t";
        // line 111
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 112
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 114
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-02.png\" height=\"70px\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 117
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-04.png\" height=\"70px\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 120
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-05.png\" height=\"70px\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 123
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-06.png\" height=\"70px\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t<img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-22.png\" style=\"height:100px;\">
\t\t\t\t<img src=\"";
            // line 128
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-23.png\" style=\"height:100px;\">
\t\t\t\t<img src=\"";
            // line 129
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-24.png\" style=\"height:100px;\">
\t\t\t\t<img src=\"";
            // line 130
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-25.png\" style=\"height:100px;\">
\t\t\t\t";
        }
        // line 132
        echo "\t\t\t</div>
\t\t\t";
        // line 140
        echo "\t\t\t<div class=\"col s12\">
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"col s12 pormayor center\">
\t\t\t\t<span class=\"black-text\" style=\"font-size:25px\">Tenemos <b>más de 400 productos</b> para que surtas tu negocio</span>
\t\t\t</div>
\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 147
            echo "              <div class=\"col s12 m6 l3 black-text\">
                <div class=\"card hoverable\">
            <a itemprop=\"url\" href=\"";
            // line 149
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">

                  <div class=\"center\" style=\"height:190px;\">
                    <img alt=\"";
            // line 152
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy responsive-img fixImg3 redondeo\"  data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
                  </div>
                </a>
                  <div class=\"card-content center\">
                    <div class=\"divider\"></div>
                    <p>
                      <span class=\"truncate\">";
            // line 158
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
                      ";
            // line 159
            if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                // line 160
                echo "                        <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge red\">Remate</span>
                      ";
            } elseif (($this->getAttribute(            // line 161
$context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 162
                echo "                        <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge blue left\">PRE-VENTA</span>
                      ";
            } else {
                // line 164
                echo "                        <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón</label>
                      ";
            }
            // line 166
            echo "                    </p>
                    ";
            // line 167
            if (($this->getAttribute($context["pro"], "catvar", array()) == 1)) {
                // line 168
                echo "                    <div class=\"input-group input-number-group\">
                        <div class=\"input-group-button\">
                          <span class=\"input-number-decrement\">-</span>
                        </div>
                          <input type=\"number\" min=\"1\" name=\"cantidad\" value=\"0\" max=\"";
                // line 172
                echo $this->getAttribute($context["pro"], "SKU_StockDisponible", array());
                echo "\" class=\"input-number browser-default cantSku";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo " cant";
                echo $this->getAttribute($context["pro"], "SKU_IdSKU", array());
                echo "\" id=\"";
                echo $this->getAttribute($context["pro"], "SKU_IdSKU", array());
                echo "\" data-idpro=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\" data-colresumen=\" \" data-foto=\"";
                echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                echo "\" data-productname=\"";
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "\" data-productid=\"";
                echo $this->getAttribute($context["pro"], "SKU_IdSKU", array());
                echo "\" data-price=\"\" xd=\"";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-tipovariacion=\" \" data-color=\"\" data-variacion=\" \" data-img=\"";
                echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                echo "\" data-unidad=\"\" data-dispo=\"";
                echo $this->getAttribute($context["pro"], "SKU_StockDisponible", array());
                echo "\" data-idtienda=\"\" data-minventa=\"";
                echo $this->getAttribute($context["pro"], "SKU_StockDisponible", array());
                echo "\" data-preciounit=\"\" data-documento=\"2\" onkeydown=\"javascript: return event.keyCode == 69 ? false : true\" readonly>
                        <div class=\"input-group-button\">
                          <span class=\"input-number-increment\">+</span>
                        </div>
                        <div>
                          <a class=\"btn input-add-cart add_cart pormayor black-text\" data-pmin=\"";
                // line 177
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-idp=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\">AGREGAR</a>
                        </div>
                      </div>
                    ";
            } else {
                // line 181
                echo "                          <a class=\"btn pormayor black-text\" style=\"margin: 3px\" href=\"";
                echo base_url();
                echo "productos/dp/";
                echo $this->getAttribute($context["pro"], "url", array());
                echo "\" >VER MÁS</a>
                    ";
            }
            // line 183
            echo "                  </div>
                </div>
              </div>
          ";
            // line 187
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "\t\t\t<div class=\"col s12 center\"><br>
\t\t\t";
        // line 215
        echo "\t\t\t <ul class=\"pagination\">
\t\t\t    <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
\t\t\t    <li class=\"active pormayorUnico\"><a href=\"";
        // line 217
        echo ($context["base_url"] ?? null);
        echo "pagina/productos\">1</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 218
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/2\">2</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 219
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/3\">3</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 220
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/4\">4</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 221
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/5\">5</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 222
        echo ($context["base_url"] ?? null);
        echo "pagina/productos\"><i class=\"material-icons\">chevron_right</i></a></li>
\t\t\t  </ul>
\t\t\t</div>
\t    </div>
\t</main>\t
";
    }

    // line 228
    public function block_script($context, array $blocks = array())
    {
        // line 229
        echo "<script defer src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
<script defer src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script defer src=\"";
        // line 231
        echo base_url("public/");
        echo "js/index.js\"></script>
<script defer src=\"";
        // line 232
        echo base_url("public/");
        echo "js/tienda/dproLis.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "index3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 232,  478 => 231,  474 => 229,  471 => 228,  461 => 222,  457 => 221,  453 => 220,  449 => 219,  445 => 218,  441 => 217,  437 => 215,  434 => 213,  428 => 187,  423 => 183,  415 => 181,  406 => 177,  376 => 172,  370 => 168,  368 => 167,  365 => 166,  359 => 164,  353 => 162,  351 => 161,  346 => 160,  344 => 159,  340 => 158,  326 => 152,  314 => 149,  310 => 147,  306 => 146,  298 => 140,  295 => 132,  290 => 130,  286 => 129,  282 => 128,  277 => 127,  270 => 123,  264 => 120,  258 => 117,  252 => 114,  248 => 112,  246 => 111,  237 => 104,  231 => 102,  225 => 100,  223 => 99,  218 => 96,  212 => 94,  206 => 92,  204 => 91,  200 => 90,  196 => 88,  190 => 86,  184 => 84,  182 => 83,  178 => 82,  170 => 76,  161 => 70,  157 => 69,  151 => 65,  145 => 61,  135 => 55,  131 => 54,  128 => 53,  118 => 46,  114 => 45,  111 => 44,  109 => 43,  100 => 37,  96 => 36,  89 => 32,  83 => 31,  80 => 30,  78 => 29,  73 => 26,  71 => 25,  68 => 24,  65 => 23,  59 => 20,  50 => 14,  48 => 13,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index3.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\index3.twig");
    }
}
