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
        echo "\t";
        // line 4
        echo "\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
\t";
        // line 6
        echo "\t<style>
\t\tbody > .inner {display: none;}
\t\tbody.pg-loaded > .inner {display: block;}
\t\t.fontX{font-size: 18px!important}
\t\t.swiper-container {
\t      width: 100%;
\t      height: 100%;
\t    }
\t\t";
        // line 14
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 15
            echo "\t  \t\t.alturaDIV{height:289px;}
\t  \t\t.fontD2{font-size: 0.8rem!important;font-weight:1000;}
\t  \t\t.fontE{font-size: 0.8rem!important}
\t  \t\t.slider{height:170px !important;}
\t  \t\t.slides{height:200px !important;}
\t  \t\t.slider .slides{background-color: #9e9e9e00 !important}
\t\t";
        }
        // line 21
        echo "  
\t</style>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t<div class=\"inner\">
\t\t";
        // line 26
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 27
            echo "\t\t\t<div class=\"hide addHomeScreen valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 30
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 31
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\">
\t\t\t\t\t\t\t<a href=\"http://";
                // line 32
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Crear tienda\" data-src=\"";
                // line 33
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionTiendaB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 37
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 38
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 44
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo base_url();
                echo "gestor/gestion\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 47
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t<div class=\"col s12 m12 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 55
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Perfil de usuario\" data-src=\"";
                // line 56
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 62
            echo "   
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 66
            echo "\t\t\t<div class=\"hide addHomeScreen container valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 center sinPadding\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t<a href=\"";
            // line 70
            echo base_url();
            echo "usuario/login\">
\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - registrarse como comprador\"  data-src=\"";
            // line 71
            echo ($context["ruta_img"] ?? null);
            echo "movilOpcionCompradorA.webp\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 77
        echo "\t</div>
\t<main class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t <div class=\"slider\">
\t\t\t\t    <ul class=\"slides\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t      <li> <a href=\"";
        // line 83
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 84
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 85
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 87
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 89
        echo "\t\t\t\t    \t</a>
\t\t\t\t      </li>
\t\t\t\t      <li><a href=\"";
        // line 91
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 92
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 93
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 95
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 97
        echo "\t\t\t\t\t\t</a>
\t\t\t\t      </li>     
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 100
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 101
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 103
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 105
        echo "\t\t\t\t      </li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 center\">
\t\t\t\t";
        // line 112
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 113
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 115
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-02.png\" height=\"70px\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 119
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-04.png\" height=\"70px\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 123
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-05.png\" height=\"70px\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col l3\">
\t\t\t\t<img src=\"";
            // line 127
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_web-06.png\" height=\"70px\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t<img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-22.png\">
\t\t\t\t<img src=\"";
            // line 133
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-23.png\">
\t\t\t\t<img src=\"";
            // line 134
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-24.png\">
\t\t\t\t<img src=\"";
            // line 135
            echo ($context["ruta_img"] ?? null);
            echo "icons/Info_cel-25.png\">
\t\t\t\t";
        }
        // line 137
        echo "\t\t\t</div>
\t\t\t<div class=\"col s12 pormayorUnico fontE center\">
\t\t\t\t<p class=\"amber-text\" style=\"font-size:25px;margin: 30px;\">¡LOS PRODUCTOS MÁS VENDIDOS POR NUESTROS CLIENTES!</p>
\t\t\t\t <a href=\"https://pormayor.pe/productos/dp/pormayor-3070-ropero-grande-de-tres-cuerpos-cod-88130-x-cajon\"><img alt=\"Pormayor.pe\" title=\"PROMOCION1\" class=\"redondeo\" src=\"";
        // line 140
        echo ($context["ruta_img"] ?? null);
        echo "promo/promoPro1.png\" height=\"260px\"></a>
\t\t\t\t <a href=\"https://pormayor.pe/productos/dp/pormayor-3863-tetera-flambera-3lt\"><img alt=\"Pormayor.pe\" title=\"PROMOCION2\" class=\"redondeo\" src=\"";
        // line 141
        echo ($context["ruta_img"] ?? null);
        echo "promo/promoPro2.png\" height=\"260px\"></a>
\t\t\t\t <a href=\"https://pormayor.pe/productos/dp/pormayor-3862-zapatera-organizadora-ancho-80cm-de-4-niveles-con-percheros-\"><img alt=\"Pormayor.pe\" title=\"PROMOCION3\" class=\"redondeo\" src=\"";
        // line 142
        echo ($context["ruta_img"] ?? null);
        echo "promo/promoPro3.png\" height=\"260px\"></a>
\t\t\t\t <a href=\"https://pormayor.pe/productos/dp/pormayor-1704-bano-para-mascota\"><img alt=\"Pormayor.pe\" title=\"PROMOCION4\" class=\"redondeo\" src=\"";
        // line 143
        echo ($context["ruta_img"] ?? null);
        echo "promo/promoPro4.png\" height=\"260px\"></a>
\t\t\t</div>
\t\t\t<div class=\"col s12\">
\t\t\t\t<br>
\t\t\t</div>

\t\t\t<div class=\"col s12 pormayor center\">
\t\t\t\t<span class=\"black-text\" style=\"font-size:25px\">Tenemos <b>más de 400 productos</b> para que surtas tu negocio</span>
\t\t\t</div>
\t\t  \t";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 153
            echo "\t\t  \t<a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t        <div class=\"col s6 m4 l3 black-text\" data-cd=\"";
            // line 154
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
\t\t          <div class=\"card hoverable z-depth-1\">
\t\t          \t<span class=\"badge red white-text\" style=\"position:absolute;\">Nuevo</span>
\t\t            <div class=\"center\" style=\"height:190px;\">
\t\t              <img alt=\"";
            // line 158
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy responsive-img fixImg3 redondeo\" data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
\t\t            </div>
\t\t            <div class=\"card-content\" style=\"height:100px;\">
\t\t              <p>
\t\t              \t<span class=\"truncate\">";
            // line 162
            echo twig_upper_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
\t\t              \t<small>COD: ";
            // line 163
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</small><br>
\t\t              \t<div class=\"divider\"></div>
\t\t              \t";
            // line 165
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 166
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> <small>x cajón</small><span class=\"new badge blue left\">PRE-VENTA</span>
\t\t              \t";
            } else {
                // line 168
                echo "\t\t              \t<span class=\"fontA negrita red-text\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> <small>x cajón</small>
\t\t              \t";
            }
            // line 170
            echo "\t\t              \t<br>
\t\t              </p>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t    \t</a>
\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t<div class=\"col s12 center\"><br>
\t\t\t";
        // line 179
        echo "\t\t\t <ul class=\"pagination\">
\t\t\t    <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
\t\t\t    <li class=\"active pormayorUnico\"><a href=\"";
        // line 181
        echo ($context["base_url"] ?? null);
        echo "pagina/productos\">1</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 182
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/2\">2</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 183
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/3\">3</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 184
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/4\">4</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 185
        echo ($context["base_url"] ?? null);
        echo "pagina/productos/5\">5</a></li>
\t\t\t    <li class=\"waves-effect\"><a href=\"";
        // line 186
        echo ($context["base_url"] ?? null);
        echo "pagina/productos\"><i class=\"material-icons\">chevron_right</i></a></li>
\t\t\t  </ul>
\t\t\t</div>

\t    </div>
\t</main>\t
";
    }

    // line 193
    public function block_script($context, array $blocks = array())
    {
        // line 194
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script>
var base_url = \"";
        // line 197
        echo base_url();
        echo "\";
var loading_screen = pleaseWait({
logo: '',
backgroundColor: \"#FEC00F\",
loadingHtml: \"<img src='";
        // line 201
        echo ($context["ruta_img"] ?? null);
        echo "icons/logoPrincipal.png' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
});
</script>
<script src=\"";
        // line 204
        echo base_url("public/");
        echo "js/index.min.js?v=5\"></script>
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
        return array (  456 => 204,  450 => 201,  443 => 197,  438 => 194,  435 => 193,  424 => 186,  420 => 185,  416 => 184,  412 => 183,  408 => 182,  404 => 181,  400 => 179,  397 => 177,  385 => 170,  379 => 168,  373 => 166,  371 => 165,  366 => 163,  362 => 162,  350 => 158,  343 => 154,  332 => 153,  328 => 152,  316 => 143,  312 => 142,  308 => 141,  304 => 140,  299 => 137,  294 => 135,  290 => 134,  286 => 133,  281 => 132,  273 => 127,  266 => 123,  259 => 119,  252 => 115,  248 => 113,  246 => 112,  237 => 105,  231 => 103,  225 => 101,  223 => 100,  218 => 97,  212 => 95,  206 => 93,  204 => 92,  200 => 91,  196 => 89,  190 => 87,  184 => 85,  182 => 84,  178 => 83,  170 => 77,  161 => 71,  157 => 70,  151 => 66,  145 => 62,  135 => 56,  131 => 55,  128 => 54,  118 => 47,  114 => 46,  111 => 45,  109 => 44,  100 => 38,  96 => 37,  89 => 33,  83 => 32,  80 => 31,  78 => 30,  73 => 27,  71 => 26,  68 => 25,  65 => 24,  59 => 21,  50 => 15,  48 => 14,  38 => 6,  35 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
