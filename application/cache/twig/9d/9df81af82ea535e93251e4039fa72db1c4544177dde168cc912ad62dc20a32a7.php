<?php

/* tienda/agotado.twig */
class __TwigTemplate_5afd8187df621fd8b8cb0a0f076ad5fdbb1908f5b62e46e36bcf138b96c37419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/agotado.twig", 1);
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
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <main class=\"container fixContainer\">
    <br class=\"hide-on-large-only\"><br class=\"hide-on-large-only\">
    <div class=\"row centrarForzado\">      
      <div class=\"col s12 m12 l12 sinPadding\" style=\"margin-bottom:50px\">
        <div class=\"row centrarForzado containerProductos ajax_filtro_tiendas\">
         ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 11
            echo "          <a itemprop=\"url\" href=\"\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
              <div class=\"col s6 m4 l3 black-text divAgotado\">
                <div class=\"card hoverable\">
                <span class=\"centered\"><b>AGOTADO</b></span> 
                  <div class=\"center\" style=\"height:190px;\">
                    <img alt=\"";
            // line 16
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
            // line 20
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</b>
                      ";
            // line 21
            if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                // line 22
                echo "                        <span class=\"fontA\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span><span class=\"new badge red\">Remate</span>
                      ";
            } else {
                // line 24
                echo "                        <span class=\"fontA\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                echo "</span> <label>S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</label>
                      ";
            }
            // line 26
            echo "                    </p>
                  </div>
                </div>
              </div>
          </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>       
      </div>       
    </div>
  </main>
           
";
    }

    // line 39
    public function block_script($context, array $blocks = array())
    {
        // line 40
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
    <script>
      \$(window).on(\"load\", function() {
        \$('.smallInfo div.l3 .sideB').slideUp();
          var bLazy = new Blazy({
               loadInvisible: true,
               offset: 100
            });
      });

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
        return "tienda/agotado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  112 => 39,  103 => 32,  92 => 26,  84 => 24,  78 => 22,  76 => 21,  72 => 20,  60 => 16,  49 => 11,  45 => 10,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/agotado.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\tienda\\agotado.twig");
    }
}
