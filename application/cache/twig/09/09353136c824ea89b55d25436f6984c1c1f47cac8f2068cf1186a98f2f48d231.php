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
  <div class=\"col s12\">
    <label>Resultado de comunicación</label>
    <select  id=\"resultado\" class=\"browser-default\">
      <option value=\"Interesado\">Interesado</option>
      <option value=\"No tiene negocio\">No tiene negocio</option>
      <option value=\"Telefono no existe / bloqueado para llamadas\">Telefono no existe / bloqueado para llamadas</option>
      <option value=\"Tiene otro giro de negocio\">Tiene otro giro de negocio</option>
      <option value=\"Registrado por error\">Registrado por error</option>
      <option value=\"No le interesa\">No le interesa</option>
      <option value=\"Tiene otra cuenta\">Tiene otra cuenta</option>
      <option value=\"Cliente de consumo\">Cliente de consumo</option>
      <option value=\"Telefono apagado / no contesta\">Telefono apagado / no contesta</option>
      <option value=\"Lo pensara / revisará / esta de viaje\">Lo pensara / revisará / esta de viaje</option>
    </select>
  </div>
  <div class=\"col s12\">
    <label>Acción según resultado</label>
    <select  id=\"accion\" class=\"browser-default\">
      <option value=\"Volver a llamar\">Volver a llamar</option>
      <option value=\"Hacer seguimiento\">Hacer seguimiento</option>
      <option value=\"Eliminar\">Eliminar</option>
    </select>
  </div>
  <div class=\"input-field col s12\">
    <input id=\"motivo\" type=\"text\" class=\"validate\">
    <label for=\"motivo\">Observación</label>
  </div>
  <div class=\"input-field col s12\">
    ";
        // line 32
        echo "    <input id=\"fechaaccion\" type=\"date\" class=\"validate\">
  </div>
</div>
<div class=\"row\">
  <div class=\"col l12 red-text\" id=\"errorGest\">
  </div>
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action waves-effect waves-green btn-flat negrita blue lighten-1 actEstado\" data-idv=\"";
        // line 39
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
  <th>FE. REGISTRO</th>
  <th>TIPO</th>
  <th>RESULTADO</th>
  <th>ACCIÓN</th>
  <th>OBSERVACIÓN</th>
  <th>FECHA</th>
</tr>
<tbody id=\"tableGes\">  
  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gestion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 56
            echo "  <tr>
  \t<td>";
            // line 57
            echo $this->getAttribute($context["g"], "Ges_FechaRegistro", array());
            echo "</td>
    <td>";
            // line 58
            echo $this->getAttribute($context["g"], "Ges_TipoCliente", array());
            echo "</td>
  \t<td>";
            // line 59
            echo $this->getAttribute($context["g"], "Ges_Detalle", array());
            echo "</td>
  \t<td>";
            // line 60
            echo $this->getAttribute($context["g"], "Ges_Accion", array());
            echo "</td>
    <td>";
            // line 61
            echo $this->getAttribute($context["g"], "Ges_Motivo", array());
            echo "</td>
  \t<td>";
            // line 62
            echo $this->getAttribute($context["g"], "Ges_FechaProgramar", array());
            echo "</td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
    if(resultado && accion){ 
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
        var markup = \"<td>\"+ tipo +\"</td><td>\" + resultado +\"</td><td>\" + accion +\"</td><td>\" + motivo +\"</td><td>\" + fechaaccion +\"</td><td></tr>\";
          \$(\"#tableGes\").append(markup);
          \$(\".gMo\"+Usu_IdUsuario).text(motivo);
          \$(\".gDe\"+Usu_IdUsuario).text(resultado);
          \$(\".gAc\"+Usu_IdUsuario).text(accion);
          \$(\".gFp\"+Usu_IdUsuario).text(fechaaccion);
          \$(\".gFec\"+Usu_IdUsuario).text('HOY');
\t\t\t    \$('#motivo').val('');
          \$('#resultado').val('');
          \$('#accion').val('');
          \$('#fechaaccion').val('');
         },
         error: function(data) {
           alert('error');
         }
      });
    }else{
      \$('#errorGest').text('DEBE SELECCIONAR DETALLE Y ACCION SON OBLIGATORIOS');
    }
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
        return array (  121 => 65,  112 => 62,  108 => 61,  104 => 60,  100 => 59,  96 => 58,  92 => 57,  89 => 56,  85 => 55,  64 => 39,  55 => 32,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/gestion.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\gestion.twig");
    }
}
