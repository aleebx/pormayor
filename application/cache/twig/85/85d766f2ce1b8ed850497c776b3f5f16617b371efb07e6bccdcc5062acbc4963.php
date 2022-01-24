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
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/spinkit/1.2.5/spinkit.min.css\"  media=\"screen\"/>
\t<style>
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
\t\t";
        }
        // line 18
        echo "  
\t</style>
\t<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1031699667283458');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=1031699667283458&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "\t<div class=\"inner\">
\t\t";
        // line 40
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 41
            echo "\t\t\t<div class=\"hide addHomeScreen valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 44
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\">
\t\t\t\t\t\t\t<a href=\"http://";
                // line 46
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Crear tienda\" data-src=\"";
                // line 47
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionTiendaB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 52
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 58
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 59
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 60
                echo base_url();
                echo "gestor/gestion\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 61
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t<div class=\"col s12 m12 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 69
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Perfil de usuario\" data-src=\"";
                // line 70
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 76
            echo "   
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 80
            echo "\t\t\t<div class=\"hide addHomeScreen container valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 center sinPadding\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t<a href=\"";
            // line 84
            echo base_url();
            echo "usuario/login\">
\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - registrarse como comprador\"  data-src=\"";
            // line 85
            echo ($context["ruta_img"] ?? null);
            echo "movilOpcionCompradorA.webp\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 91
        echo "\t</div>
\t<main>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t <div class=\"slider\">
\t\t\t\t    <ul class=\"slides\">
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 98
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 99
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "webpm.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        } else {
            // line 101
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "cel-pm.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        }
        // line 103
        echo "\t\t\t\t      </li>
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 105
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 106
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "bannerjulio.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        } else {
            // line 108
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "bannerjulioM.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        }
        // line 110
        echo "\t\t\t\t      </li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  \t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 117
            echo "\t\t  \t<a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t        <div class=\"col s6 m6 l2 black-text\" data-cd=\"";
            // line 118
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
\t\t          <div class=\"card hoverable z-depth-1\">
\t\t          \t<span class=\"badge red white-text\" style=\"position:absolute;\">Nuevo</span>
\t\t            <div class=\"center\" style=\"height:190px;\">
\t\t              <img alt=\"";
            // line 122
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy responsive-img fixImg3 redondeo\"data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
\t\t            </div>
\t\t            <div class=\"card-content center\" style=\"height:100px;\">
\t\t              <p>
\t\t              \t<span class=\"truncate\">";
            // line 126
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</span>
\t\t              \t<small>COD: ";
            // line 127
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</small><br>
\t\t              \t<div class=\"divider\"></div>
\t\t              \t";
            // line 129
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 130
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor<span class=\"new badge blue left\">PRE-VENTA</span>
\t\t              \t";
            } else {
                // line 132
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor</label>
\t\t              \t";
            }
            // line 134
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
        // line 141
        echo "\t\t  \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 142
            echo "\t\t  \t<a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t        <div class=\"col s6 m6 l2 black-text\" data-cd=\"";
            // line 143
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
\t\t          <div class=\"card hoverable z-depth-1\">
\t\t          \t";
            // line 146
            echo "\t\t            <div class=\"center\" style=\"height:190px;\">
\t\t              <img alt=\"";
            // line 147
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy responsive-img fixImg3 redondeo\"data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
\t\t            </div>
\t\t            <div class=\"card-content center\" style=\"height:100px;\">
\t\t              <p>
\t\t              \t<span class=\"truncate\">";
            // line 151
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</span>
\t\t              \t<small>COD: ";
            // line 152
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</small><br>
\t\t              \t<div class=\"divider\"></div>
\t\t              \t";
            // line 154
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 155
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor<span class=\"new badge blue left\">PRE-VENTA</span>
\t\t              \t";
            } else {
                // line 157
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor</label>
\t\t              \t";
            }
            // line 159
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
        // line 166
        echo "\t    </div>
\t</main>\t
";
    }

    // line 169
    public function block_script($context, array $blocks = array())
    {
        // line 170
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script>
var base_url = \"";
        // line 173
        echo base_url();
        echo "\";
var loading_screen = pleaseWait({
logo: '',
backgroundColor: \"#FEC00F\",
loadingHtml: \"<img src='";
        // line 177
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
});
</script>
<script src=\"";
        // line 180
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
        return array (  399 => 180,  393 => 177,  386 => 173,  381 => 170,  378 => 169,  372 => 166,  360 => 159,  354 => 157,  348 => 155,  346 => 154,  341 => 152,  337 => 151,  325 => 147,  322 => 146,  317 => 143,  306 => 142,  301 => 141,  289 => 134,  283 => 132,  277 => 130,  275 => 129,  270 => 127,  266 => 126,  254 => 122,  247 => 118,  236 => 117,  232 => 116,  224 => 110,  218 => 108,  212 => 106,  210 => 105,  206 => 103,  200 => 101,  194 => 99,  192 => 98,  183 => 91,  174 => 85,  170 => 84,  164 => 80,  158 => 76,  148 => 70,  144 => 69,  141 => 68,  131 => 61,  127 => 60,  124 => 59,  122 => 58,  113 => 52,  109 => 51,  102 => 47,  96 => 46,  93 => 45,  91 => 44,  86 => 41,  84 => 40,  81 => 39,  78 => 38,  55 => 18,  49 => 15,  47 => 14,  35 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
