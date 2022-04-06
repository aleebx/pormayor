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
\t\t";
        }
        // line 18
        echo "  
\t</style>
\t<!-- Facebook Pixel Code -->
";
        // line 36
        echo "<!-- End Facebook Pixel Code -->
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
\t<main class=\"container\">
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
\t\t\t<div class=\"col s12 center\">
\t\t\t";
        // line 118
        echo "\t\t  \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 119
            echo "\t\t\t  \t<a itemprop=\"url\" href=\"";
            echo base_url();
            echo "categoria/";
            echo $this->getAttribute($context["cat"], "url", array());
            echo "\">
\t\t\t       <div class=\"chip pormayor fontA\">
\t\t\t       \t\t";
            // line 121
            echo twig_upper_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()));
            echo "
\t\t\t\t\t</div>
\t\t    \t</a>
\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t\t</div>
\t\t\t<div class=\"col s12 fontE\">
\t\t\t\t<p>Últimos productos</p>
\t\t\t</div>
\t\t  \t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 130
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
            // line 131
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
\t\t          <div class=\"card hoverable z-depth-1\">
\t\t          \t<span class=\"badge red white-text\" style=\"position:absolute;\">Nuevo</span>
\t\t            <div class=\"center\" style=\"height:190px;\">
\t\t              <img alt=\"";
            // line 135
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy responsive-img fixImg3 redondeo\" data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
\t\t            </div>
\t\t            <div class=\"card-content center\" style=\"height:100px;\">
\t\t              <p>
\t\t              \t<span class=\"truncate\">";
            // line 139
            echo twig_upper_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
\t\t              \t<small>COD: ";
            // line 140
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</small><br>
\t\t              \t<div class=\"divider\"></div>
\t\t              \t";
            // line 142
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 143
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge blue left\">PRE-VENTA</span>
\t\t              \t";
            } else {
                // line 145
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón</label>
\t\t              \t";
            }
            // line 147
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
        // line 154
        echo "\t\t\t<div class=\"col s12 center\"><br>
\t\t\t<a href=\"";
        // line 155
        echo ($context["base_url"] ?? null);
        echo "pagina/productos\" class=\"btn btn-large\" style=\"font-size:2em;\"><b>VER TODOS LOS PRODUCTOS</b></a>
\t\t\t</div>

\t    </div>
\t</main>\t
";
    }

    // line 161
    public function block_script($context, array $blocks = array())
    {
        // line 162
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script>
var base_url = \"";
        // line 165
        echo base_url();
        echo "\";
var loading_screen = pleaseWait({
logo: '',
backgroundColor: \"#FEC00F\",
loadingHtml: \"<img src='";
        // line 169
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
});
</script>
<script src=\"";
        // line 172
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
        return array (  353 => 172,  347 => 169,  340 => 165,  335 => 162,  332 => 161,  322 => 155,  319 => 154,  307 => 147,  301 => 145,  295 => 143,  293 => 142,  288 => 140,  284 => 139,  272 => 135,  265 => 131,  254 => 130,  250 => 129,  244 => 125,  234 => 121,  226 => 119,  221 => 118,  212 => 110,  206 => 108,  200 => 106,  198 => 105,  194 => 103,  188 => 101,  182 => 99,  180 => 98,  171 => 91,  162 => 85,  158 => 84,  152 => 80,  146 => 76,  136 => 70,  132 => 69,  129 => 68,  119 => 61,  115 => 60,  112 => 59,  110 => 58,  101 => 52,  97 => 51,  90 => 47,  84 => 46,  81 => 45,  79 => 44,  74 => 41,  72 => 40,  69 => 39,  66 => 38,  61 => 36,  56 => 18,  50 => 15,  48 => 14,  38 => 6,  35 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
