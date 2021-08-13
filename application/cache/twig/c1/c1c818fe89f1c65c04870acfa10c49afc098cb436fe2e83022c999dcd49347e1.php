<?php

/* admin/load/edit_estado_venta.twig */
class __TwigTemplate_b49f88d51e2cb69da06077ad3e3744d53a39e52ac2e526d2494e28880b157f42 extends Twig_Template
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
        echo "<h4 class=\"center\">CAMBIO DE ESTADO #<span class=\"negrita idVenta\">";
        echo ($context["id"] ?? null);
        echo "</span></h4>
<ul class=\"collection\">
\t<li class=\"collection-item\">
\t\t<input  name=\"gEst\" type=\"radio\" value=\"1\" id=\"est1\" ";
        // line 4
        if ((($context["eActual"] ?? null) == 1)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est1\">NUEVA VENTA</label>
\t</li>
\t<li class=\"collection-item\">
\t\t<input name=\"gEst\" type=\"radio\" value=\"2\" id=\"est2\" ";
        // line 8
        if ((($context["eActual"] ?? null) == 2)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est2\">CONFIRMADA</label>
\t</li>
\t<li class=\"collection-item\">
\t\t<input name=\"gEst\" type=\"radio\" value=\"3\" id=\"est3\" ";
        // line 12
        if ((($context["eActual"] ?? null) == 3)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est3\">LISTO RECOGO</label>
\t</li>
\t<li class=\"collection-item\">
\t\t<input name=\"gEst\" type=\"radio\" value=\"4\" id=\"est4\" ";
        // line 16
        if ((($context["eActual"] ?? null) == 4)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est4\">EN CORRIER</label>
\t</li>
\t<li class=\"collection-item\">
\t\t<input name=\"gEst\" type=\"radio\" value=\"5\" id=\"est5\" ";
        // line 20
        if ((($context["eActual"] ?? null) == 5)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est5\">ENTREGADO</label>
\t</li>
\t<li class=\"collection-item\">\t
\t\t<input name=\"gEst\" type=\"radio\" value=\"6\" id=\"est6\" ";
        // line 24
        if ((($context["eActual"] ?? null) == 6)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est6\">ANULADO</label>
\t</li>
</ul>
<div class=\"row\">
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action waves-effect waves-green btn-flat negrita blue lighten-1 actEstado\" data-idv=\"";
        // line 30
        echo ($context["id"] ?? null);
        echo "\"><i class=\"material-icons left\">update</i>ACTUALIZAR</a>
\t</div>
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action modal-close waves-effect waves-red btn-flat red lighten-4\"><i class=\"material-icons left\">close</i>SALIR</a>
\t</div>
</div>

<script>
\t\$('.actEstado').click(function(){
\t\tvar nuevoEstado = \$('input[name=gEst]:checked').val();
\t\tvar idVenta = \$(this).data(\"idv\");
\t\t\$.ajax({
         data:{
         'nuevoEstado' : nuevoEstado,
         'idVenta' : idVenta
         },
         type: \"POST\",
         url: base_url+'admin/index/actualizar_estado',
         success: function(data){
         \t\$('.modal').modal('close');
         \tlocation.reload(true);
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
        return "admin/load/edit_estado_venta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  71 => 24,  62 => 20,  53 => 16,  44 => 12,  35 => 8,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/load/edit_estado_venta.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\load\\edit_estado_venta.twig");
    }
}
