<?php

/* tienda/listado.twig */
class __TwigTemplate_f50dca094c66d60b5e520214d6c49f83a2c581f94ae10b776131c61fbb63e394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/listado.twig", 1);
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
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css\">
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"container\">
    <table id=\"listaP\">
      <thead>
        <tr>
          ";
        // line 11
        echo "          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 17
        $context["i"] = 1;
        // line 18
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 19
            echo "        <tr>
          <td>
            <img src=\"";
            // line 21
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Img", array());
            echo "\" height=\"50\"></td>
          <td class=\"fontA\">";
            // line 22
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</td>
          <td class=\"fontC\">";
            // line 23
            echo $this->getAttribute($context["pro"], "Prp_Desde", array());
            echo " - ";
            if (($this->getAttribute($context["pro"], "Prp_A", array()) == 9999)) {
                echo " + ";
            } else {
                echo $this->getAttribute($context["pro"], "Prp_A", array());
            }
            echo "</td>
          <td class=\"fontC\">";
            // line 24
            echo $this->getAttribute($context["pro"], "Prp_Precios", array());
            echo "</td>
        </tr>
        ";
            // line 26
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 27
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </tbody>
    </table>
  </main>
";
    }

    // line 32
    public function block_script($context, array $blocks = array())
    {
        // line 33
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js\"></script>
  <script>
  \$(document).ready( function () {
          \$('#listaP').DataTable({
          \"language\": {
          \"thousands\":\",\",
          \"lengthMenu\":\"\",
          \"infoPostFix\":\"\",
          \"search\":\"Buscar producto:\",
          \"processing\":\"Procesando...\",
          \"loadingRecords\":\"Cargando...\",
          \"info\":\"Página _PAGE_ de _PAGES_\",
          \"zeroRecords\":\"No se encontro nada\",
          \"infoEmpty\":\"No hay registros disponibles\",
          \"emptyTable\":\"No hay información en la tabla\",
          \"infoFiltered\":\"(filtrado de _MAX_ registros)\",
          \"paginate\": {
            \"last\":\"Último\",
            \"first\":\"Primero\",
            \"next\":\"Siguiente\",
            \"previous\":\"Anterior\"
          }
        }
      });
    } );
  </script>
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
        return "tienda/listado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  105 => 32,  98 => 28,  92 => 27,  90 => 26,  85 => 24,  75 => 23,  71 => 22,  66 => 21,  62 => 19,  57 => 18,  55 => 17,  47 => 11,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/listado.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\tienda\\listado.twig");
    }
}
