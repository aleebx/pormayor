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
        // line 21
        echo "\t\t/* Style the navbar */
\t\t#navbar {
\t\t  overflow: hidden;
\t\t  background-color: #fff;
\t\t}
\t\t/* Page content */
\t\t.content {
\t\t  padding: 16px;
\t\t}
\t\t/* The sticky class is added to the navbar with JS when it reaches its scroll position */
\t\t.sticky {
\t\t  position: fixed;
\t\t  top: 0;
\t\t  width: 100%;
\t\t  z-index: 9999;
\t\t}
\t\t/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
\t\t.sticky + .content {
\t\t  padding-top: 100px;
\t\t}
\t</style>
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "\t<main class=\"\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t <div class=\"slider\">
\t\t\t\t    <ul class=\"slides\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t      <li> <a href=\"";
        // line 102
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 103
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 104
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 106
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_01_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 108
        echo "\t\t\t\t    \t</a>
\t\t\t\t      </li>
\t\t\t\t      <li><a href=\"";
        // line 110
        echo base_url();
        echo "pagina/productos\">
\t\t\t\t    ";
        // line 111
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 112
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 114
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_02_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 116
        echo "\t\t\t\t\t\t</a>
\t\t\t\t      </li>     
\t\t\t\t      <li>
\t\t\t\t    ";
        // line 119
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 120
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_web.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        } else {
            // line 122
            echo "\t\t\t\t        <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "banner/c_03_movil.webp\" style=\"background-color: #ffffff00 !important;\">
\t\t\t\t    ";
        }
        // line 124
        echo "\t\t\t\t      </li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">\t<br>
\t\t\t<div id=\"navbar\" class=\"s12 z-depth-2\">
\t\t\t\t<div class=\"input-field\">\t\t\t\t\t\t
\t\t\t  \t<label for=\"searchbar\">¿Qué estas buscando?</label>         
\t\t    \t<input type=\"text\" class=\"form-control\" id=\"searchbar\" onkeyup=\"search_pedido()\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row content\">
\t\t\t";
        // line 170
        echo "\t\t\t<div class=\"col s12 pormayor center\">
\t\t\t\t<span class=\"black-text\" style=\"font-size:25px\">Tenemos <b>más de 400 productos</b> para que surtas tu negocio</span>
\t\t\t</div>
\t\t\t";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pro10"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 174
            echo "        <div class=\"col s12 m6 l3 black-text filtroProductoall\">
      \t";
            // line 175
            $context["urlp"] = twig_replace_filter($this->getAttribute($context["pro"], "Pro_Nombre", array()), array(" " => "-"));
            // line 176
            echo "      \t";
            $context["urlp2"] = twig_lower_filter($this->env, ($context["urlp"] ?? null));
            // line 177
            echo "          <div class=\"card hoverable \">
            <a itemprop=\"url\" href=\"";
            // line 178
            echo base_url();
            echo "productos/dp/pormayor-";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "-";
            echo ($context["urlp2"] ?? null);
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
              <div class=\"center\" style=\"height:190px;\">
                <img alt=\"";
            // line 180
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
            // line 186
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "</span>
                <span class=\"negrita\">COD:";
            // line 187
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "</span><br>
                ";
            // line 188
            if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                // line 189
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge red\">OFERTA</span>
                ";
            } elseif (($this->getAttribute(            // line 190
$context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 191
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón<span class=\"new badge blue left\">PRE-VENTA</span>
                ";
            } else {
                // line 193
                echo "                  <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x cajón</label>
                ";
            }
            // line 195
            echo "              </p>
              ";
            // line 196
            if (($this->getAttribute($context["pro"], "catvar", array()) == 1)) {
                // line 197
                echo "              <div class=\"input-group input-number-group\">
                <div class=\"input-group-button\">
                  <span class=\"input-number-decrement\">-</span>
                </div>
                  <input type=\"number\" min=\"1\" name=\"cantidad\" value=\"0\" max=\"";
                // line 201
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
                // line 206
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-idp=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\">AGREGAR</a>
                </div>
              </div>
              ";
            } else {
                // line 210
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
            // line 212
            echo "            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t  </div>
\t</main>\t
";
    }

    // line 231
    public function block_script($context, array $blocks = array())
    {
        // line 232
        echo "<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
<script src=\"";
        // line 233
        echo base_url("public/");
        echo "js/index.js\"></script>
<script src=\"";
        // line 234
        echo base_url("public/");
        echo "js/tienda/dproLis.min.js\"></script>
<script>
\t// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById(\"navbar\");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add(\"sticky\")
  } else {
    navbar.classList.remove(\"sticky\");
  }
}     
function search_pedido() {
  let input = document.getElementById('searchbar').value;
  input = input.toLowerCase();
  let x = document.getElementsByClassName('filtroProductoall');
  // console.log(input);      
  for (i = 0; i < x.length; i++) { 
      if (!x[i].innerHTML.toLowerCase().includes(input)) {
          x[i].style.display=\"none\";
      }
      else {
          x[i].style.display=\"block\";                 
      }
  }
}
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
        return array (  332 => 234,  328 => 233,  325 => 232,  322 => 231,  316 => 228,  307 => 212,  295 => 210,  286 => 206,  256 => 201,  250 => 197,  248 => 196,  245 => 195,  239 => 193,  233 => 191,  231 => 190,  226 => 189,  224 => 188,  220 => 187,  216 => 186,  202 => 180,  189 => 178,  186 => 177,  183 => 176,  181 => 175,  178 => 174,  174 => 173,  169 => 170,  153 => 124,  147 => 122,  141 => 120,  139 => 119,  134 => 116,  128 => 114,  122 => 112,  120 => 111,  116 => 110,  112 => 108,  106 => 106,  100 => 104,  98 => 103,  94 => 102,  87 => 97,  84 => 43,  59 => 21,  50 => 14,  48 => 13,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
