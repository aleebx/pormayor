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
/*\t\tbody > .inner {display: none;}
\t\tbody.pg-loaded > .inner {display: block;}*/
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
        // line 21
        echo "\t\t#navbar{overflow:hidden;background-color:#fff}.content{padding:15px}.sticky{position:fixed;top:0;width:inherit;z-index:999}.sticky+.content{padding-top:90px}
\t</style>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t<main class=\"inner\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t <div class=\"slider\">
\t\t\t\t    <ul class=\"slides\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t      <li> <a href=\"";
        // line 30
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 31
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 32
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 34
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 36
        echo "\t\t\t\t    \t</a>
\t\t\t\t      </li>
\t\t\t\t      <li><a href=\"";
        // line 38
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 39
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 40
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 42
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 44
        echo "\t\t\t\t\t\t</a>
\t\t\t\t      </li>     
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 47
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 48
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 50
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 52
        echo "\t\t\t\t      </li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</div>
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 74
            echo "        <div class=\"col s12 m6 l3 black-text filtroProductoall\">
      \t";
            // line 75
            $context["urlp"] = twig_replace_filter($this->getAttribute($context["pro"], "Pro_Nombre", array()), array(" " => "-"));
            // line 76
            echo "      \t";
            $context["urlp2"] = twig_lower_filter($this->env, ($context["urlp"] ?? null));
            // line 77
            echo "          <div class=\"card hoverable \">
            <a class=\"modal-trigger dprod\" href=\"#modalProd\" data-id=\"";
            // line 78
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" accessKey=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
              <div class=\"center\" style=\"height:190px;\">
                <img alt=\"";
            // line 80
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
            // line 86
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
                <span class=\"negrita\">COD: ";
            // line 87
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</span><br>
                ";
            // line 88
            if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                // line 89
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge red\">OFERTA</span>
                ";
            } elseif (($this->getAttribute(            // line 90
$context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 91
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge blue left\">PRE-VENTA</span>
                ";
            } else {
                // line 93
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón</label>
                ";
            }
            // line 95
            echo "              </p>
              ";
            // line 96
            if (($this->getAttribute($context["pro"], "catvar", array()) == 1)) {
                // line 97
                echo "              <div class=\"input-group input-number-group\">
                <div class=\"input-group-button\">
                  <span class=\"input-number-decrement\">-</span>
                </div>
                  <input type=\"number\" min=\"1\" name=\"cantidad\" value=\"0\" max=\"";
                // line 101
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
                // line 106
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-idp=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\">AGREGAR</a>
                </div>
              </div>
              ";
            } else {
                // line 110
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
            // line 112
            echo "            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t  </div>
\t</main>
\t<div id=\"modalProd\" class=\"modal\" style=\"z-index:9999 !important;\" >
    <div class=\"modal-content\" id=\"loadEdit\">
      <h5 class=\"center\">CARGANDO INFORMACIÓN DEL PRODUCTO...</h5>
    </div>
  </div>
";
    }

    // line 124
    public function block_script($context, array $blocks = array())
    {
        // line 125
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
        // line 134
        echo base_url("public/");
        echo "js/index.min.js\"></script>
";
        // line 136
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
        return array (  322 => 136,  318 => 134,  307 => 125,  304 => 124,  293 => 116,  284 => 112,  272 => 110,  263 => 106,  233 => 101,  227 => 97,  225 => 96,  222 => 95,  216 => 93,  210 => 91,  208 => 90,  203 => 89,  201 => 88,  197 => 87,  193 => 86,  179 => 80,  172 => 78,  169 => 77,  166 => 76,  164 => 75,  161 => 74,  157 => 73,  134 => 52,  128 => 50,  122 => 48,  120 => 47,  115 => 44,  109 => 42,  103 => 40,  101 => 39,  97 => 38,  93 => 36,  87 => 34,  81 => 32,  79 => 31,  75 => 30,  68 => 25,  65 => 24,  59 => 21,  50 => 14,  48 => 13,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
