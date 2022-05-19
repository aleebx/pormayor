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
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "\t<div class=\"inner\">
\t\t";
        // line 23
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 24
            echo "\t\t\t<div class=\"hide addHomeScreen valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 27
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 28
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\">
\t\t\t\t\t\t\t<a href=\"http://";
                // line 29
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Crear tienda\" data-src=\"";
                // line 30
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionTiendaB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 34
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 35
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 41
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 42
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo base_url();
                echo "gestor/gestion\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 44
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<div class=\"col s12 m12 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Perfil de usuario\" data-src=\"";
                // line 53
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 59
            echo "   
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 63
            echo "\t\t\t<div class=\"hide addHomeScreen container valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 center sinPadding\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t<a href=\"";
            // line 67
            echo base_url();
            echo "usuario/login\">
\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - registrarse como comprador\"  data-src=\"";
            // line 68
            echo ($context["ruta_img"] ?? null);
            echo "movilOpcionCompradorA.webp\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 74
        echo "\t</div>
\t<main class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t <div class=\"slider\">
\t\t\t\t    <ul class=\"slides\">
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 81
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 82
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "webpm.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        } else {
            // line 84
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "cel-pm.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        }
        // line 86
        echo "\t\t\t\t      </li>
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 88
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 89
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "bannerjulio.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        } else {
            // line 91
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "bannerjulioM.webp\" style=\"background-color: white !important;\">
\t\t\t\t    ";
        }
        // line 93
        echo "\t\t\t\t      </li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 pormayorUnico center-align input-field\" style=\"padding-top: 7px;\">
\t\t\t <a href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"Instagram PorMayor.pe\" title=\"Instagram PorMayor.pe\" src=\"";
        // line 100
        echo ($context["ruta_img"] ?? null);
        echo "instaW.png\" height=\"30\"></a>&nbsp;&nbsp;
              <a href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"Facebook PorMayor.pe\" title=\"Facebook PorMayor.pe\" src=\"";
        // line 101
        echo ($context["ruta_img"] ?? null);
        echo "faceW.png\" height=\"30\"></a>&nbsp;&nbsp;
              <a href=\"mailto:contacto@pormayor.pe\"><img alt=\"Correo PorMayor.pe\" title=\"Correo PorMayor.pe\" src=\"";
        // line 102
        echo ($context["ruta_img"] ?? null);
        echo "mailW.png\" height=\"30\"></a>&nbsp;&nbsp;
              <a href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"Youtube PorMayor.pe\" title=\"Youtube PorMayor.pe\" src=\"";
        // line 103
        echo ($context["ruta_img"] ?? null);
        echo "youtubeW.png\" height=\"30\"></a>
\t\t\t</div>
\t\t\t<div class=\"col s12 center\">
\t\t\t";
        // line 107
        echo "\t\t  \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 108
            echo "\t\t\t  \t<a itemprop=\"url\" href=\"";
            echo base_url();
            echo "categoria/";
            echo $this->getAttribute($context["cat"], "url", array());
            echo "\">
\t\t\t       <div class=\"chip pormayor fontA\">
\t\t\t       \t\t";
            // line 110
            echo twig_upper_filter($this->env, $this->getAttribute($context["cat"], "Cat_Nombre", array()));
            echo "
\t\t\t\t\t</div>
\t\t    \t</a>
\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t</div>
\t\t\t<div class=\"col s12 fontE\">
\t\t\t\t<p>Últimos productos</p>
\t\t\t</div>
\t\t  \t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 119
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
            // line 120
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
\t\t          <div class=\"card hoverable z-depth-1\">
\t\t          \t<span class=\"badge red white-text\" style=\"position:absolute;\">Nuevo</span>
\t\t            <div class=\"center\" style=\"height:190px;\">
\t\t              <img alt=\"";
            // line 124
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
            // line 128
            echo twig_upper_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
\t\t              \t<small>COD: ";
            // line 129
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</small><br>
\t\t              \t<div class=\"divider\"></div>
\t\t              \t";
            // line 131
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 132
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge blue left\">PRE-VENTA</span>
\t\t              \t";
            } else {
                // line 134
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón</label>
\t\t              \t";
            }
            // line 136
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
        // line 143
        echo "\t\t\t<div class=\"col s12 center\"><br>
\t\t\t<a href=\"";
        // line 144
        echo ($context["base_url"] ?? null);
        echo "pagina/productos\" class=\"btn btn-large\" style=\"font-size:2em;\"><b>VER TODOS LOS PRODUCTOS</b></a>
\t\t\t</div>

\t    </div>
\t</main>\t
";
    }

    // line 150
    public function block_script($context, array $blocks = array())
    {
        // line 151
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script>
var base_url = \"";
        // line 154
        echo base_url();
        echo "\";
var loading_screen = pleaseWait({
logo: '',
backgroundColor: \"#FEC00F\",
loadingHtml: \"<img src='";
        // line 158
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
});
</script>
<script src=\"";
        // line 161
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
        return array (  367 => 161,  361 => 158,  354 => 154,  349 => 151,  346 => 150,  336 => 144,  333 => 143,  321 => 136,  315 => 134,  309 => 132,  307 => 131,  302 => 129,  298 => 128,  286 => 124,  279 => 120,  268 => 119,  264 => 118,  258 => 114,  248 => 110,  240 => 108,  235 => 107,  229 => 103,  225 => 102,  221 => 101,  217 => 100,  208 => 93,  202 => 91,  196 => 89,  194 => 88,  190 => 86,  184 => 84,  178 => 82,  176 => 81,  167 => 74,  158 => 68,  154 => 67,  148 => 63,  142 => 59,  132 => 53,  128 => 52,  125 => 51,  115 => 44,  111 => 43,  108 => 42,  106 => 41,  97 => 35,  93 => 34,  86 => 30,  80 => 29,  77 => 28,  75 => 27,  70 => 24,  68 => 23,  65 => 22,  62 => 21,  56 => 18,  50 => 15,  48 => 14,  38 => 6,  35 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
