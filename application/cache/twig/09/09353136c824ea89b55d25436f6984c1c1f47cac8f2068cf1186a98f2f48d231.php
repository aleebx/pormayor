<?php

/* vendedor/gestion.twig */
class __TwigTemplate_49d27e06932691e9cf924aba5dc3dd61776b9d0855feb6b43f655a33091e944c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h5 class=\"center\"><span class=\"negrita idVenta\">";
        echo ($context["eActual"] ?? null);
        echo "</span><br>";
        echo ($context["xd"] ?? null);
        echo "</h5>
<div class=\"row\">
  <div class=\"input-field col s12\">
    <input id=\"motivo\" type=\"text\" class=\"validate\">
    <label for=\"motivo\">Motivo de comunicación</label>
  </div>
  <div class=\"input-field col s12\">
    <input id=\"resultado\" type=\"text\" class=\"validate\">
    <label for=\"resultado\">Resultado de comunicación</label>
  </div>
  <div class=\"input-field col s12\">
    <input id=\"accion\" type=\"text\" class=\"validate\">
    <label for=\"accion\">Acción según resultado</label>
  </div>
  <div class=\"input-field col s12\">
    ";
        // line 17
        echo "    <input id=\"fechaaccion\" type=\"date\" class=\"validate\">
  </div>
</div>
<div class=\"row\">
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action waves-effect waves-green btn-flat negrita blue lighten-1 actEstado\" data-idv=\"";
        // line 22
        echo ($context["id"] ?? null);
        echo "\" data-tipo=\"";
        echo ($context["xd"] ?? null);
        echo "\"><i class=\"material-icons left\">update</i>GUARDAR</a>
\t</div>
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action modal-close waves-effect waves-red btn-flat red lighten-4\"><i class=\"material-icons left\">close</i>SALIR</a>
\t</div>
</div>
<table class=\"bordered\">
<tr>
  <th>TIPO</th>
  <th>MOTIVO</th>
  <th>RESULTADO</th>
  <th>ACCIÓN</th>
  <th>FECHA</th>
</tr>
<tbody id=\"tableGes\">  
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gestion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 38
            echo "  <tr>
  \t<td>";
            // line 39
            echo $this->getAttribute($context["g"], "Ges_TipoCliente", array());
            echo "</td>
    <td>";
            // line 40
            echo $this->getAttribute($context["g"], "Ges_Motivo", array());
            echo "</td>
  \t<td>";
            // line 41
            echo $this->getAttribute($context["g"], "Ges_Detalle", array());
            echo "</td>
  \t<td>";
            // line 42
            echo $this->getAttribute($context["g"], "Ges_Accion", array());
            echo "</td>
  \t<td>";
            // line 43
            echo $this->getAttribute($context["g"], "Ges_FechaProgramar", array());
            echo "</td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</tbody>\t
</table>
<script>
\t\$('.actEstado').click(function(){
\t\tvar tipo = \$(this).data(\"tipo\");
    var Usu_IdUsuario = \$(this).data(\"idv\");
    var motivo = \$('#motivo').val();
    var resultado = \$('#resultado').val();
    var accion = \$('#accion').val();
    var fechaaccion = \$('#fechaaccion').val();
\t\t\$.ajax({
         data:{
         'tipo' : tipo,
         'Usu_IdUsuario' : Usu_IdUsuario,
         'motivo' : motivo,
         'resultado' : resultado,
         'accion' : accion,
         'fechaaccion' : fechaaccion
         },
         type: \"POST\",
         url: base_url+'vnd/addgestion',
         success: function(data){
        var markup = \"<td>\"+ tipo +\"</td><td>\" + motivo +\"</td><td>\" + resultado +\"</td><td>\" + accion +\"</td><td>\" + fechaaccion +\"</td><td></tr>\";
          \$(\"#tableGes\").append(markup);
          \$(\".gMo\"+Usu_IdUsuario).text(motivo);
          \$(\".gDe\"+Usu_IdUsuario).text(resultado);
          \$(\".gAc\"+Usu_IdUsuario).text(accion);
          \$(\".gFp\"+Usu_IdUsuario).text(fechaaccion);
\t\t\t    \$('#motivo').val('');
          \$('#resultado').val('');
          \$('#accion').val('');
          \$('#fechaaccion').val('');
         \t// \$('.modal').modal('close');
         },
         error: function(data) {
           alert('error');
         }
      });
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/gestion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  90 => 43,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  71 => 38,  67 => 37,  47 => 22,  40 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/gestion.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\gestion.twig");
    }
}
