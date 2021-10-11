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
        echo "\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
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
\t\t";
        // line 93
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 94
            echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col l12 center\">
\t\t\t\t\t<div class=\"swiper-container swBanner\">
\t\t\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t\t\t      <div class=\"swiper-slide\"><img alt=\"Pormayor.pe\" src=\"";
            // line 98
            echo ($context["ruta_img"] ?? null);
            echo "webpm.webp\" class=\"responsive-img\"></div>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"swiper-pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 105
            echo "\t\t\t<div class=\"swiper-container swBanner\">
\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t      <div class=\"swiper-slide\"><img alt=\"Pormayor.pe\" src=\"";
            // line 107
            echo ($context["ruta_img"] ?? null);
            echo "cel-pm.webp\" class=\"responsive-img\"></div>
\t\t\t    </div>
\t\t\t    <div class=\"swiper-pagination\"></div>
\t\t\t</div>\t\t
\t\t";
        }
        // line 112
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col s6 l12 center\">
\t\t\t\t<a href=\"";
        // line 114
        echo base_url();
        echo "categorias/mascota-al-mayor-15\">
\t\t\t\t\t<img alt=\"Productos de deporte al por mayor\" title=\"Productos de deporte al por mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 115
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_mascota.png\">
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 117
        echo base_url();
        echo "categorias/hogar-al-mayor-8\">
\t\t\t\t\t<img alt=\"Productos de electrohogar al por mayor\" title=\"Productos de electrohogar al por mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 118
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_hogar.png\">
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 120
        echo base_url();
        echo "categorias/deporte-al-mayor-5\">
\t\t\t\t\t<img alt=\"Productos de accesorios al por mayor\" title=\"Productos de accesorios al por mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 121
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_deporte.png\">
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 123
        echo base_url();
        echo "categorias/belleza-al-mayor-1\">
\t\t\t\t\t<img alt=\"Productos de hogar mayor\" title=\"Productos de hogar mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 124
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_belleza.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col s6 l12 center\">
\t\t\t\t<a href=\"";
        // line 128
        echo base_url();
        echo "categorias/reposteria-al-mayor-16\">
\t\t\t\t\t<img alt=\"Productos de deporte al por mayor\" title=\"Productos de deporte al por mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 129
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_reposteria.png\">
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 131
        echo base_url();
        echo "categorias/tecnologia-al-mayor-14\">
\t\t\t\t\t<img alt=\"Productos de electrohogar al por mayor\" title=\"Productos de electrohogar al por mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 132
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_tecno.png\">
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 134
        echo base_url();
        echo "categorias/auto-bicicleta-al-mayor-18\">
\t\t\t\t\t<img alt=\"Productos de accesorios al por mayor\" title=\"Productos de accesorios al por mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 135
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_auto.png\">
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 137
        echo base_url();
        echo "categorias/pequenos-al-mayor-9\">
\t\t\t\t\t<img alt=\"Productos de hogar mayor\" title=\"Productos de hogar mayor\" class=\"lazy responsive-img\" data-src=\"";
        // line 138
        echo ($context["ruta_img"] ?? null);
        echo "banner/c_bebe.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col l12 center\">|
\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendedores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 145
            echo "\t\t\t\t\t<span class=\"fontA\"><i class=\"material-icons\">headset_mic</i>";
            echo $this->getAttribute($context["v"], "Usu_Nombre", array());
            echo " <a href=\"https://api.whatsapp.com/send?phone=51";
            echo $this->getAttribute($context["v"], "Per_Telefono", array());
            echo "&text=Hola,%20quiero%20mas%20informacion.\">";
            echo $this->getAttribute($context["v"], "Per_Telefono", array());
            echo "</a>|</span>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  \t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 151
            echo "\t\t  \t<a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t        <div class=\"col s6 m6 l2 black-text\" style=\"padding:5px\" data-cd=\"";
            // line 152
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
\t\t          <div class=\"card hoverable z-depth-0\">
\t\t            <div class=\"center\" style=\"height:190px;\">
\t\t              <img alt=\"";
            // line 155
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
            // line 159
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</span>
\t\t              \t<small>COD: ";
            // line 160
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</small><br>
\t\t              \t";
            // line 161
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 162
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor<span class=\"new badge blue left\">PRE-VENTA</span>
\t\t              \t";
            } else {
                // line 164
                echo "\t\t              \t<span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor</label>
\t\t              \t";
            }
            // line 166
            echo "\t\t              </p>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t    \t</a>
\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t    </div>
\t</main>\t
";
    }

    // line 175
    public function block_script($context, array $blocks = array())
    {
        // line 176
        echo "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
\t\t<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
\t    <script>
\t      var base_url = \"";
        // line 180
        echo base_url();
        echo "\";
\t      var loading_screen = pleaseWait({
\t          logo: '',
\t          backgroundColor: \"#FEC00F\",
\t          loadingHtml: \"<img src='";
        // line 184
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
\t        });
\t    </script>
\t\t<script src=\"";
        // line 187
        echo base_url("public/");
        echo "js/index.js?v=5\"></script>
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
        return array (  414 => 187,  408 => 184,  401 => 180,  395 => 176,  392 => 175,  386 => 172,  375 => 166,  369 => 164,  363 => 162,  361 => 161,  357 => 160,  353 => 159,  341 => 155,  335 => 152,  324 => 151,  320 => 150,  315 => 147,  302 => 145,  298 => 144,  289 => 138,  285 => 137,  280 => 135,  276 => 134,  271 => 132,  267 => 131,  262 => 129,  258 => 128,  251 => 124,  247 => 123,  242 => 121,  238 => 120,  233 => 118,  229 => 117,  224 => 115,  220 => 114,  216 => 112,  208 => 107,  204 => 105,  194 => 98,  188 => 94,  186 => 93,  182 => 91,  173 => 85,  169 => 84,  163 => 80,  157 => 76,  147 => 70,  143 => 69,  140 => 68,  130 => 61,  126 => 60,  123 => 59,  121 => 58,  112 => 52,  108 => 51,  101 => 47,  95 => 46,  92 => 45,  90 => 44,  85 => 41,  83 => 40,  80 => 39,  77 => 38,  54 => 18,  48 => 15,  46 => 14,  33 => 3,  30 => 2,  11 => 1,);
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
