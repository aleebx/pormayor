<?php

/* registro_cliente.twig */
class __TwigTemplate_a723df83b27e56e32172d132e28e8c4fad12110923a819813b1f539afe073607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "registro_cliente.twig", 1);
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
    <div id=\"login-page\" class=\"row\">
      <div class=\"col s12 z-depth-6 card-panel\">
        <form class=\"login-form\">
          <div class=\"row\">
          </div>
          <div class=\"row\">
            <div class=\"input-field col s12 l6\">
              <i class=\"material-icons prefix\">mail_outline</i>
              <input class=\"validate\" id=\"nombre\" type=\"text\">
              <label for=\"nombre\" data-error=\"wrong\" data-success=\"right\">Nombre Completo</label>
            </div>
            <div class=\"input-field col s12 l6\">
              <i class=\"material-icons prefix\">lock_outline</i>
              <input id=\"documento\" type=\"text\">
              <label for=\"documento\">DNI/CE</label>
            </div>
            <div class=\"input-field col s12 l6\">
              <i class=\"material-icons prefix\">lock_outline</i>
              <input id=\"correo\" type=\"email\">
              <label for=\"correo\">Correo Eléctronico</label>              
            </div>
            <div class=\"input-field col s12 l6\">
              <i class=\"material-icons prefix\">lock_outline</i>
              <input id=\"tlf\" type=\"number\">
              <label for=\"tlf\">text</label>
            </div>
            <div class=\"input-field col s12 l12\">
              <i class=\"material-icons prefix\">lock_outline</i>
              <input id=\"pass\" type=\"password\">
              <label for=\"pass\">Contraseña</label>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"input-field col s12\">
              <a href=\"#\" class=\"btn waves-effect waves-light col s12\">Registrar cliente</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
";
    }

    // line 49
    public function block_script($context, array $blocks = array())
    {
        // line 50
        echo "  <script src=\"";
        echo base_url("public/js/usuario/");
        echo "registro.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "registro_cliente.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 50,  84 => 49,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registro_cliente.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\registro_cliente.twig");
    }
}
