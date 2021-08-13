<?php

/* admin/comprador/index.twig */
class __TwigTemplate_329f6ededf99dc22e016fd15c9a52915f4f761e9915cab032a213b49d4e0cf16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/comprador/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_adm.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "  <style type=\"text/css\">
    .pagination{
      padding-left: 40px !important;
    }
    .btn, .btn-large {
      text-decoration: none;
      color: #fff;
      background-color: #353535;
      text-align: left;
      letter-spacing: .5px;
      -webkit-transition: .1s ease-out;
      transition: .1s ease-out;
      cursor: pointer;
    }
  </style>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">  
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "  <main>
    <div class=\"card\">
      <div class=\"card-content\">
        <h5 class=\"card-title left\">Listado de Compradores</h5>
        <table id=\"listCompradoresTable\" class=\"display\" style=\"width:100%;\">
          <thead>
            <tr>
              <th>NOMBRE</th>
              <th>COMPRAS</th>
              ";
        // line 30
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "<th>GRUPOS</th><th>FAVORITOS</th>";
        }
        echo "  
              <th>ACCIÓN</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 35
        $context["nro"] = 1;
        // line 36
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compradores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 37
            echo "              <tr>
                <td class=\"muayuscula\">";
            // line 38
            echo $this->getAttribute($context["comp"], "Per_Nombre", array());
            echo "</td>
                <td>";
            // line 39
            echo $this->getAttribute($context["comp"], "compras", array());
            echo "</td>
                ";
            // line 40
            if ((($context["userAgent"] ?? null) == "PC")) {
                echo "<td>";
                echo $this->getAttribute($context["comp"], "grupos", array());
                echo "</td><td>";
                echo $this->getAttribute($context["comp"], "favoritos", array());
                echo "</td>";
            }
            echo " 
                <td>
                  <a class=\"btn orange btnEdit\" href=\"";
            // line 42
            echo base_url();
            echo "admin/compradores/detalle_comprador/";
            echo $this->getAttribute($context["comp"], "Usu_IdUsuario", array());
            echo "\" target=\"_blank\"><i class=\"material-icons\">edit</i></a>
                  <a class=\"btn red btnDeleteComp\" data-idcompr=\"";
            // line 43
            echo $this->getAttribute($context["comp"], "Per_IdPersona", array());
            echo "\"><i class=\"material-icons\">delete_forever</i></a>
                </td>
              </tr>
              ";
            // line 46
            $context["nro"] = (($context["nro"] ?? null) + 1);
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </tbody>
        </table>
      </div>
    </div>
  </main>
";
    }

    // line 54
    public function block_script($context, array $blocks = array())
    {
        // line 55
        echo "  <script src=\"";
        echo base_url("public/js/admin/compradores/");
        echo "index.js\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">
    \$('#listCompradoresTable').DataTable({
      \"order\":[[1,'desc'],[1,'asc']],
      \"language\": {
        \"lengthMenu\":\"\",
        \"zeroRecords\":\"No se encontro nada\",
        \"info\":\"Página _PAGE_ de _PAGES_\",
        \"infoEmpty\":\"No hay registros disponibles\",
        \"emptyTable\":\"No hay información en la tabla\",
        \"infoFiltered\":\"(filtrado de _MAX_ ventas)\",
        \"infoPostFix\":\"\",
        \"thousands\":\",\",
        \"loadingRecords\":\"Cargando...\",
        \"processing\":\"Procesando...\",
        \"search\":\"Buscar:\",
        \"paginate\": {
          \"first\":\"Primero\",
          \"last\":\"Último\",
          \"next\":\"Siguiente\",
          \"previous\":\"Anterior\"
        }
      }
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "admin/comprador/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 55,  135 => 54,  126 => 48,  120 => 47,  118 => 46,  112 => 43,  106 => 42,  95 => 40,  91 => 39,  87 => 38,  84 => 37,  79 => 36,  77 => 35,  67 => 30,  56 => 21,  53 => 20,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/comprador/index.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\comprador\\index.twig");
    }
}
