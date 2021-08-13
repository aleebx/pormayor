<?php

/* vendedor/hoy.twig */
class __TwigTemplate_a1f9c37facd60099e2c338fae8ea19a86175b4d2a1ab4c69fc2cc5869d1bc608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/hoy.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_ven.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "   \t<main class=\"\">
    \t<div class=\"card\">
        <div class=\"card-content\">
        <h4>GESTION DE HOY</h4> 
\t\t\t\t\t<table id=\"lventas\" style=\"width:100%\">
\t\t        <thead>
\t\t\t         <tr>
\t\t\t           \t<th></th>
\t\t\t           \t<th>FECHA GESTION</th>
\t\t\t            <th>CLIENTE</th>
\t\t\t            <th>TELEFONO</th>
\t\t\t            <th>MOTIVO</th>
\t\t\t            <th>GESTION</th> 
\t\t\t            <th>FECHA ACCIÓN</th> 
\t\t\t            <th>ACCIÓN</th> 
\t\t\t            <th></th> 
\t\t\t        </tr>
\t\t        </thead>
\t\t        <tbody>";
        // line 27
        echo "\t\t        \t";
        $context["i"] = 1;
        // line 28
        echo "\t\t        \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gestion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 29
            echo "\t\t        \t\t<tr>
\t\t        \t\t\t<td>";
            // line 30
            echo ($context["i"] ?? null);
            echo "</td>
\t\t        \t\t\t<td>";
            // line 31
            echo $this->getAttribute($context["g"], "Ges_FechaRegistro", array());
            echo "</td>
\t\t        \t\t\t<td>";
            // line 32
            echo $this->getAttribute($context["g"], "Per_Nombre", array());
            echo "</td>
\t\t        \t\t\t<td>";
            // line 33
            echo $this->getAttribute($context["g"], "Per_Telefono", array());
            echo "</td>
\t\t        \t\t\t<td>";
            // line 34
            echo $this->getAttribute($context["g"], "Ges_TipoCliente", array());
            echo " - ";
            echo $this->getAttribute($context["g"], "Ges_Motivo", array());
            echo "</td>
\t\t        \t\t\t<td>";
            // line 35
            echo $this->getAttribute($context["g"], "Ges_Detalle", array());
            echo "</td>
\t\t        \t\t\t<td>";
            // line 36
            echo $this->getAttribute($context["g"], "Ges_FechaProgramar", array());
            echo "</td>
\t\t        \t\t\t<td>";
            // line 37
            echo $this->getAttribute($context["g"], "Ges_Accion", array());
            echo "</td>
                  <td><a class=\"btn blue modal-trigger\" id=\"";
            // line 38
            echo $this->getAttribute($context["g"], "Usu_IdUsuario", array());
            echo "\" accessKey=\"";
            echo $this->getAttribute($context["g"], "Per_Nombre", array());
            echo "\" xs=\"";
            echo $this->getAttribute($context["g"], "Ges_TipoCliente", array());
            echo "\" href=\"#modalGes\"><i class=\"material-icons\">update</i></a></td>
                  ";
            // line 39
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 40
            echo "\t\t        \t\t</tr>
\t\t        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t        \t</tbody>
\t\t    \t</table>
        </div>
\t\t</div>
    </main>
    <div id=\"modalGes\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
      <div class=\"modal-content\" id=\"loadEdit\"></div>
  </div>
";
    }

    // line 52
    public function block_script($context, array $blocks = array())
    {
        // line 53
        echo "  <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js\"></script>
\t<script type=\"text/javascript\">
var table = \$('#lventas').DataTable({
\"responsive\": true,
\"order\": [[1, \"desc\" ]],
\"language\": {
\"lengthMenu\": \"\",
\"zeroRecords\": \"No se encontro nada\",
\"info\": \"Página _PAGE_ de _PAGES_\",
\"infoEmpty\": \"No hay registros disponibles\",
\"emptyTable\":     \"No hay información en la tabla\",
\"infoFiltered\":   \"(filtrado de _MAX_ ventas)\",
\"infoPostFix\":    \"\",
\"thousands\":      \",\",
\"loadingRecords\": \"Cargando...\",
\"processing\":     \"Procesando...\",
\"search\":         \"Buscar:\",
\"paginate\": {
\t\"first\":      \"Primero\",
\t\"last\":       \"Último\",
\t\"next\":       \"Siguiente\",
\t\"previous\":   \"Anterior\"
}
}
});

\$(document).ready(function(){
  
    \$('#modalGes').modal({
             dismissible:true, // Modal can be dismissed by clicking outside of the modal
             opacity:.8, // Opacity of modal background
             inDuration:300, // Transition in duration
             outDuration:200, // Transition out duration
             startingTop:'5%', // Starting top style attribute
             endingTop:'10%', // Ending top style attribute
              ready:function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                 var est=trigger[0]['accessKey'];
                 var idv=trigger[0]['id'];
                 var xd=trigger[0]['attributes'][3]['nodeValue'];
                 \$('#loadEdit').load(base_url+'vnd/gestion',{id:idv,est:est,xd:xd});
                },
              complete: function() {
              } // Callback for Modal close
          });
});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/hoy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  135 => 52,  123 => 42,  116 => 40,  114 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  69 => 29,  64 => 28,  61 => 27,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/hoy.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\hoy.twig");
    }
}
