<?php

/* index3.twig */
class __TwigTemplate_2d3054e962efdb861decbed5ad5d79f9888f0f5e5e54cd8d0bac7f237ce5f8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite3.twig", "index3.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_lite3.twig";
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
\t\t.fontX{font-size: 18px!important}
\t\t.swiper-container {
\t      width: 100%;
\t      height: 100%;
\t    }
\t\t";
        // line 11
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 12
            echo "\t  \t\t.alturaDIV{height:289px;}
\t  \t\t.fontD2{font-size: 0.8rem!important;font-weight:1000;}
\t  \t\t.fontE{font-size: 0.8rem!important}
\t  \t\t.slider{height:170px !important;}
\t  \t\t.slides{height:200px !important;}
\t  \t\t.slider .slides{background-color: #9e9e9e00 !important}
\t\t";
        }
        // line 19
        echo "\t\t#navbar{overflow:hidden;background-color:#fff}.content{padding:15px}.sticky{position:fixed;top:0;width:inherit;z-index:999}.sticky+.content{padding-top:90px}
\t</style>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t<main class=\"inner\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t    ";
        // line 26
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 27
            echo "\t\t    \t<a href=\"";
            echo base_url();
            echo "\">\t\t    \t\t
\t\t        <img src=\"";
            // line 28
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t    \t</a>
\t\t    ";
        } else {
            // line 31
            echo "\t\t    \t<a href=\"";
            echo base_url();
            echo "\">\t\t    \t\t
\t\t        <img src=\"";
            // line 32
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t    \t</a>
\t\t    ";
        }
        // line 35
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s1 m1 l3\"></div>
\t\t\t<div class=\"col s10 m10 l6\">
\t\t\t\t<div id=\"navbar\" class=\"card-panel pormayor center\" style=\"border-radius:10px;border:3px solid #00000024;\">
\t\t\t\t  \t<span class=\"black-text\">¿Qué estas <b>buscando</b>?</span>         
\t\t\t\t\t<div class=\"input-field\">
\t\t\t    \t<input type=\"text\" class=\"form-control\" id=\"searchbar\" onkeyup=\"search_pedido()\" placeholder=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col s1 m1 l3\"></div>
\t\t</div>
\t\t<div class=\"row content\">
\t\t\t<div class=\"col s12 pormayor center\">
\t\t\t\t<span class=\"black-text\" style=\"font-size:25px\">Tenemos <b>más de 400 productos</b> para que surtas tu negocio</span>
\t\t\t</div>
\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 54
            echo "        <div class=\"col s12 m6 l3 black-text filtroProductoall\">
      \t";
            // line 55
            $context["urlp"] = twig_replace_filter($this->getAttribute($context["pro"], "Pro_Nombre", array()), array(" " => "-"));
            // line 56
            echo "      \t";
            $context["urlp2"] = twig_lower_filter($this->env, ($context["urlp"] ?? null));
            // line 57
            echo "          <div class=\"card hoverable \">
            <a class=\"modal-trigger dprod\" href=\"#modalProd\" data-id=\"";
            // line 58
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" accessKey=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
              <div class=\"center\" style=\"height:190px;\">
                <img alt=\"";
            // line 60
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
            // line 66
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
                <span class=\"negrita\">COD: ";
            // line 67
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</span><br>
                ";
            // line 68
            if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                // line 69
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge red\">OFERTA</span>
                ";
            } elseif (($this->getAttribute(            // line 70
$context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 71
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge blue left\">PRE-VENTA</span>
                ";
            } else {
                // line 73
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón</label>
                ";
            }
            // line 75
            echo "              </p>
              ";
            // line 76
            if (($this->getAttribute($context["pro"], "catvar", array()) == 1)) {
                // line 77
                echo "              <div class=\"input-group input-number-group\">
                <div class=\"input-group-button\">
                  <span class=\"input-number-decrement\">-</span>
                </div>
                  <input type=\"number\" min=\"1\" name=\"cantidad\" value=\"0\" max=\"";
                // line 81
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
                // line 86
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-idp=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\">AGREGAR</a>
                </div>
              </div>
              ";
            } else {
                // line 90
                echo "                <a class=\"btn pormayor black-text\" style=\"margin: 3px\" href=\"";
                echo base_url();
                echo "productos/dp/";
                echo base_url();
                echo "productos/dp/pormayor-";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "-";
                echo ($context["urlp2"] ?? null);
                echo "\" >VER MÁS</a>
              ";
            }
            // line 92
            echo "            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t  </div>
\t</main>
\t<div id=\"modalProd\" class=\"modal\" style=\"z-index:9999 !important;\" >
    <div class=\"modal-content\" id=\"loadEdit\">
      <h5 class=\"center\">CARGANDO INFORMACIÓN DEL PRODUCTO...</h5>
    </div>
  </div>
";
    }

    // line 104
    public function block_script($context, array $blocks = array())
    {
        // line 105
        echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
<script type=\"text/javascript\">\t
var loading_screen = pleaseWait({
      logo: 'https://pormayor.pe/img/icons/logoPrincipal.png',
      backgroundColor: \"#FEC00F\",
      loadingHtml: \"<h3><b>Cargando catálogo de productos...</b></h3>\"
    });
</script>
<script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 114
        echo base_url("public/");
        echo "js/index.min.js\"></script>
";
        // line 116
        echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        echo base_url("public/");
        echo "js/tienda/dproLis.min.js\"></script>
<script>window.onscroll=function(){mySearchfixed()};var navbar=document.getElementById(\"navbar\"),sticky=navbar.offsetTop;function mySearchfixed(){window.pageYOffset>=sticky?navbar.classList.add(\"sticky\"):navbar.classList.remove(\"sticky\")}function search_pedido(){let b=document.getElementById(\"searchbar\").value;b=b.toLowerCase();let a=document.getElementsByClassName(\"filtroProductoall\");for(i=0;i<a.length;i++)a[i].innerHTML.toLowerCase().includes(b)?a[i].style.display=\"block\":a[i].style.display=\"none\"}\$(\".dprod\").click(function(){var a=\$(this).data(\"id\");\$(\"#loadEdit\").load(base_url+\"cliente/vista_producto\",{id:a})}) </script>
<script type=\"text/javascript\">
\t\$(window).on(\"load\", function() {
  \t\tloading_screen.finish();
  \t});
</script>
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
        return array (  280 => 116,  276 => 114,  265 => 105,  262 => 104,  251 => 96,  242 => 92,  230 => 90,  221 => 86,  191 => 81,  185 => 77,  183 => 76,  180 => 75,  174 => 73,  168 => 71,  166 => 70,  161 => 69,  159 => 68,  155 => 67,  151 => 66,  137 => 60,  130 => 58,  127 => 57,  124 => 56,  122 => 55,  119 => 54,  115 => 53,  95 => 35,  89 => 32,  84 => 31,  78 => 28,  73 => 27,  71 => 26,  66 => 23,  63 => 22,  57 => 19,  48 => 12,  46 => 11,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
