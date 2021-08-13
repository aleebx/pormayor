<?php

/* admin/load/edit_estado_voucher.twig */
class __TwigTemplate_3dfb329f5ab67e1befeb61dfe2358cd223acaa5a35964c257392589184ff97f6 extends Twig_Template
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
        echo "<h4 class=\"center\">CAMBIO DE ESTADO DEL COMPROBANTE #<span class=\"negrita idVenta\">";
        echo ($context["id"] ?? null);
        echo "</span></h4>
<ul class=\"collection\">
\t<li class=\"collection-item\">
\t\t<input  name=\"gEsts\" type=\"radio\" value=\"0\" id=\"est1\" ";
        // line 4
        if ((($context["eActual"] ?? null) == 0)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est1\">POR VALIDACIÓN</label>
\t</li>
\t<li class=\"collection-item\">
\t\t<input name=\"gEsts\" type=\"radio\" value=\"1\" id=\"est2\" ";
        // line 8
        if ((($context["eActual"] ?? null) == 1)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est2\">ACEPTADO</label>
\t</li>
\t<li class=\"collection-item\">
\t\t<input name=\"gEsts\" type=\"radio\" value=\"2\" id=\"est3\" ";
        // line 12
        if ((($context["eActual"] ?? null) == 2)) {
            echo "checked";
        }
        echo " />
\t\t<label class=\"black-text negrita\" for=\"est3\">RECHAZADO</label>
\t</li>
</ul>

<br>

<h4 class=\"center\">INFORMACIÓN DEL COMPROBANTE</h4>
";
        // line 20
        if ($this->getAttribute(($context["infVouche"] ?? null), "Pvoc_NumComprobante", array())) {
            // line 21
            echo "\t<div class=\"row center\">
\t\t<div class=\"col l12 left\">
\t\t\t<span><b>NRO. DE COMPROBANTE:</b> ";
            // line 23
            echo $this->getAttribute(($context["infVouche"] ?? null), "Pvoc_NumComprobante", array());
            echo "</span>
\t\t\t<br>
\t\t\t<span><b>FECHA:</b> ";
            // line 25
            echo $this->getAttribute(($context["infVouche"] ?? null), "Pvoc_FechaComprobante", array());
            echo "</span>
\t\t\t<br><br>
\t\t\t<span><img class=\"redondeo\" src=\"http://localhost/img/";
            // line 27
            echo $this->getAttribute(($context["infVouche"] ?? null), "Pvoc_LogoPago", array());
            echo "\" height=\"200px\" width=\"300px\"></span>\t
\t\t\t";
            // line 29
            echo "\t  \t</div>
\t  \t<br><br>
\t</div>
";
        } else {
            // line 33
            echo "\t<div class=\"row center\">
\t\t<div class=\"col l12 left\">
\t\t\t<span>No se encuentra ninguna información del comprobante de pago.</span>\t
\t  \t</div>
\t  \t<br><br>
\t</div>
";
        }
        // line 39
        echo "\t

<div class=\"row\">
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action waves-effect waves-green btn-flat negrita blue lighten-1 actEstadoVoucher\" data-idvs=\"";
        // line 43
        echo ($context["id"] ?? null);
        echo "\"><i class=\"material-icons left\">update</i>ACTUALIZAR</a>
\t</div>
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action modal-close waves-effect waves-red btn-flat red lighten-4\"><i class=\"material-icons left\">close</i>SALIR</a>
\t</div>
</div>

<script>
\t\$('.actEstadoVoucher').click(function(){
\t\tvar idVenta=\$(this).data(\"idvs\");
\t\tvar nuevoEstado=\$('input[name=gEsts]:checked').val();
\t\t\$.ajax({
         \tdata:{
         \t\t'idVenta':idVenta,
         \t\t'nuevoEstado':nuevoEstado
         \t},
         \ttype:\"POST\",
         \turl:base_url+'admin/index/actualizar_estadoVoucher',
         \tsuccess:function(data){
         \t\t\$('.modal').modal('close');
         \t\tlocation.reload(true);
         \t},
         \terror: function(data) {
           \t\talert('error');
         \t}
      \t});
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/load/edit_estado_voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  92 => 39,  83 => 33,  77 => 29,  73 => 27,  68 => 25,  63 => 23,  59 => 21,  57 => 20,  44 => 12,  35 => 8,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/load/edit_estado_voucher.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\load\\edit_estado_voucher.twig");
    }
}
