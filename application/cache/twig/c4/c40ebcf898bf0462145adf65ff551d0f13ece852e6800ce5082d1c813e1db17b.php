<?php

/* lista.twig */
class __TwigTemplate_21cbd3e582c285827f6ae2f0fc21c434273f883ee24f756beeb161d8e17744ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "lista.twig", 1);
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
          <th>#</th>
          <th></th>
          <th>Detalle</th>
          ";
        // line 14
        echo "          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context["i"] = 1;
        // line 19
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 20
            echo "        <tr ";
            if ((($this->getAttribute($context["pro"], "SKU_Cantidad", array()) <= 0) || ($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4))) {
                echo "class=\"divAgotado\"";
            }
            echo ">
          <td>";
            // line 21
            echo $this->getAttribute($context["pro"], "SKU_IdSKU", array());
            echo "- ";
            echo $this->getAttribute($context["pro"], "Pro_Estado", array());
            echo "</td>
          <td>
          ";
            // line 23
            if ($this->getAttribute($context["pro"], "SKU_Img", array())) {
                // line 24
                echo "            <img src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["pro"], "SKU_Img", array());
                echo "\" height=\"50\"></td>
          ";
            } else {
                // line 26
                echo "            <img src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["pro"], "Prf_Img", array());
                echo "\" height=\"50\"></td>
          ";
            }
            // line 28
            echo "          <td class=\"fontA\">";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo " ";
            if ((($this->getAttribute($context["pro"], "SKU_Cantidad", array()) <= 0) || ($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4))) {
                echo "<span><b>AGOTADO</b></span> ";
            }
            if ($this->getAttribute($context["pro"], "SKU_Color", array())) {
                echo "<br><small>";
                echo $this->getAttribute($context["pro"], "SKU_Color", array());
                echo "</small>";
            }
            echo "</td>
          ";
            // line 30
            echo "          <td class=\"fontC\">";
            echo $this->getAttribute($context["pro"], "SKU_Cantidad", array());
            echo "</td>
        </tr>
        ";
            // line 32
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 33
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      </tbody>
    </table>
\t</main>
";
    }

    // line 38
    public function block_script($context, array $blocks = array())
    {
        // line 39
        echo "<script type=\"text/javascript\" src=\"//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js\"></script>
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
";
    }

    public function getTemplateName()
    {
        return "lista.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  128 => 38,  121 => 34,  115 => 33,  113 => 32,  107 => 30,  93 => 28,  86 => 26,  79 => 24,  77 => 23,  70 => 21,  63 => 20,  58 => 19,  56 => 18,  50 => 14,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lista.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\lista.twig");
    }
}
