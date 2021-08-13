<?php

/* vendedor/cambio_clave.twig */
class __TwigTemplate_03c179d34b9cfaa8bef9002dde60084627916334138ac3cb2f186c12f19489e1 extends Twig_Template
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
        echo "</span></h5>
<div class=\"row\">
  <div class=\"input-field col s12\">
    <input id=\"clave\" type=\"text\" class=\"validate\">
    <label for=\"clave\">Nueva contraseña</label>
  </div>
  <div class=\"input-field col s12\">
    <input id=\"clave1\" type=\"text\" class=\"validate\">
    <label for=\"clave1\">Confirmar nueva contraseña</label>
  </div>
</div>
<div class=\"row\">
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action waves-effect waves-green btn-flat negrita blue lighten-1 cambioC\" data-idv=\"";
        // line 14
        echo ($context["id"] ?? null);
        echo "\"><i class=\"material-icons left\">update</i>GUARDAR</a>
\t</div>
\t<div class=\"col l6 center\">
  \t\t<a class=\"modal-action modal-close waves-effect waves-red btn-flat red lighten-4\"><i class=\"material-icons left\">close</i>SALIR</a>
\t</div>
</div>
<script>
\t\$('.cambioC').click(function(){
    var Usu_IdUsuario = \$(this).data(\"idv\");
    var clave = \$('#clave').val();
    var clave1 = \$('#clave1').val();
    if (clave == clave1){      
  \t\t\$.ajax({
           data:{
           'Usu_IdUsuario' : Usu_IdUsuario,
           'clave' : clave,
           'clave1' : clave1
           },
           type: \"POST\",
           url: base_url+'vnd/cambio_clave',
           success: function(data){
            \$('.modal').modal('close');
           },
           error: function(data) {
             alert('error');
           }
        });
    }
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/cambio_clave.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/cambio_clave.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\cambio_clave.twig");
    }
}
