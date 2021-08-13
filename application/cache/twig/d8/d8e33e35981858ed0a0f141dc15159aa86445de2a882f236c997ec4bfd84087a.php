<?php

/* catalogo.twig */
class __TwigTemplate_dd9e4a81b9f21277f64212389aee9b7d8ce5234a9308c57c54ca2a999fa45bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite_2.twig", "catalogo.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_lite_2.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        #main .content-wrapper-before {
        position: absolute;
        z-index: -1;
        top: 64px;
        left: 0;
        width: 100%;
        height: 185px;
        -webkit-transition: .3s ease all;
        -moz-transition: .3s ease all;
        -o-transition: .3s ease all;
        transition: .3s ease all;
    }
    .gradient-45deg-blue {
        background: #fec00f;
        background: -webkit-linear-gradient(45deg, ##fec00f, #ffb000) !important;
        background: -moz- oldlinear-gradient(45deg, ##fec00f, #ffb000) !important;
        background: -o-linear-gradient(45deg, ##fec00f, #ffb000) !important;
        background: linear-gradient(45deg,##fec00f, #ffb000) !important;
    }
        .fontX{font-size: 18px!important}
        .swiper-container {
          width: 100%;
          height: 100%;
        }
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }
        .container .row {margin-left: -.70rem;margin-right: -.70rem;}
        ";
        // line 46
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 47
            echo "            .alturaDIV{height:289px;}
            .fontD2{font-size: 0.8rem!important;font-weight:1000;}
            .fontE{font-size: 0.8rem!important}
        ";
        }
        // line 50
        echo "  
    </style>
";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "<main id=\"main\" class=\"contentPage\">
    <div class=\"content-wrapper-before gradient-45deg-blue\"></div>  
    <br>
    <div class=\"row\">
        <div class=\"col s12 m12 l12 center\">
            <span class=\"negrita fontC\">Catálogo PorMayor.pe</span>
        </div>
        ";
        // line 62
        if (($context["vendedor"] ?? null)) {
            // line 63
            echo "        <div class=\"col s12 m12 l12 center\">
            <b>";
            // line 64
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Nombre", array());
            echo " </b>
            <a href=\"tel:+51";
            // line 65
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
            echo "\">
                   <b>";
            // line 66
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
            echo "</b>
            </a><br> 
            <span>COSTO DE ENVÍO: <b>S/8 LIMA METROPOLITANA*</b></span>
        </div>
        ";
        }
        // line 71
        echo "    </div>
    <div class=\"row\">
      ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 74
            echo "      <a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
          <div class=\"col s12 m7 l3 black-text\">
            <div class=\"card hoverable\">
              <div class=\"center\" style=\"height:190px;\">
                <img alt=\"";
            // line 78
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy\" data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
              </div>
              <div class=\"card-content center\" style=\"height:100px;\">
                <p>
                  <b class=\"truncate\">";
            // line 82
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</b>
                  ";
            // line 83
            if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                // line 84
                echo "                    <span class=\"fontA\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span><span class=\"new badge red\">Remate</span>
                  ";
            } else {
                // line 86
                echo "                    <span class=\"fontA\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                echo "</span> <label>S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</label>
                  ";
            }
            // line 88
            echo "                </p>
              </div>
            </div>
          </div>
      </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </div>
  <div class=\"fixed-action-btn horizontal\">
    <a class=\"transparent\" href=\"https://api.whatsapp.com/send?phone=+51";
        // line 96
        echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
        echo "\">
      <img src=\"";
        // line 97
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\">
    </a>
  </div>

</main>
";
    }

    // line 104
    public function block_script($context, array $blocks = array())
    {
        // line 105
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
  <script>
  (function () {
        function logElementEvent(eventName, element) {
          console.log(Date.now(), eventName, element.getAttribute(\"data-src\"));
        }

        var callback_enter = function (element) {
          logElementEvent(\"🔑 ENTERED\", element);
        };
        var callback_exit = function (element) {
          logElementEvent(\"🚪 EXITED\", element);
        };
        var callback_loading = function (element) {
          logElementEvent(\"⌚ LOADING\", element);
        };
        var callback_loaded = function (element) {
          logElementEvent(\"👍 LOADED\", element);
        };
        var callback_error = function (element) {
          logElementEvent(\"💀 ERROR\", element);
          element.src = \"https://via.placeholder.com/440x560/?text=Error+Placeholder\";
        };
        var callback_finish = function () {
          logElementEvent(\"✔️ FINISHED\", document.documentElement);
        };
        var callback_cancel = function (element) {
          logElementEvent(\"🔥 CANCEL\", element);
        };

        var ll = new LazyLoad({
          class_applied: \"lz-applied\",
          class_loading: \"lz-loading\",
          class_loaded: \"lz-loaded\",
          class_error: \"lz-error\",
          // Assign the callbacks defined above
          callback_enter: callback_enter,
          callback_exit: callback_exit,
          callback_cancel: callback_cancel,
          callback_loading: callback_loading,
          callback_loaded: callback_loaded,
          callback_error: callback_error,
          callback_finish: callback_finish
        });
      })();
  </script> 
";
    }

    public function getTemplateName()
    {
        return "catalogo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 105,  208 => 104,  198 => 97,  194 => 96,  190 => 94,  179 => 88,  171 => 86,  165 => 84,  163 => 83,  159 => 82,  147 => 78,  133 => 74,  129 => 73,  125 => 71,  117 => 66,  113 => 65,  109 => 64,  106 => 63,  104 => 62,  95 => 55,  92 => 54,  86 => 50,  80 => 47,  78 => 46,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalogo.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\catalogo.twig");
    }
}
