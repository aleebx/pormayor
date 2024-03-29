<?php

/* vendedor/login.twig */
class __TwigTemplate_1bddea3809062e3e387a6c749a2b15d7858af9d9d999c12fc36d9297bd9648f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/login.twig", 1);
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <main class=\"container\">
    <div class=\"card\">
      <div class=\"card-content\">
        <span class=\"card-title\">REGISTRAR CLIENTE</span>
        <form id=\"form-registro\" method=\"POST\" action=\"";
        // line 9
        echo base_url();
        echo "vnd/registrar\" autocomplete=\"off\">                
          <div class=\"row validarTienda centrarForzado card-content\">
            <div class=\"input-field col s12 l6\">
              <i class=\"material-icons prefix transitionB\">person</i>
              <input type=\"text\" name=\"nombre\" id=\"nombre\" placeholder=\"Nombre Completo\" required> 
              <label for=\"nombre\">Nombre Completo</label>
            </div>
            <div class=\"input-field col s12 l6\">
              <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
              <input name=\"dni\" id=\"dni\" type=\"number\" placeholder=\"Ingresa tu DNI/CE/OTRO\" required>
              <label for=\"dni\">DNI/CE/OTRO</label>
            </div>
            <div class=\"col s12 m12 l6 input-field positionRelative\">
              <i class=\"material-icons prefix transitionB\">email</i>
              <input name=\"correoA\" id=\"correoA\" type=\"email\"  placeholder=\"Ingresa tu correo de registro\" required>
              <label for=\"correoA\">Correo electrónico</label>
            </div>
            <div class=\"col s12 m12 l6 input-field positionRelative\">
              <i class=\"material-icons prefix transitionB\">phone</i>
              <input name=\"celular\" id=\"celular\" type=\"number\" placeholder=\"Ingresa tu celular de contacto\" required>
              <label for=\"icon_prefix\">Teléfono</label>
            </div>
            <div class=\"input-field col s12 l12\">
              <i class=\"material-icons prefix transitionB\">lock</i>
              <input name=\"clave\" type=\"password\" id=\"clave\"  autocomplete=\"new-password\" required>
              <label for=\"clave\">Contraseña para <b>pormayor.pe</b></label>
            </div>
            <div class=\"input-field col s12 l12\">
              <i class=\"material-icons prefix transitionB\">lock</i>
              <input name=\"clave2\" type=\"password\" id=\"clave2\"  autocomplete=\"new-password\" required>
              <label for=\"clave2\">Confirmar Contraseña</label>
            </div>
            <div class=\"col l12 center\">
              <button class=\"btn pormayor\">Registrar cliente</button>
            </div>
          </form>
      </div>
    </div>
  </main>
";
    }

    // line 50
    public function block_script($context, array $blocks = array())
    {
        // line 51
        echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js\"></script>
  <script src=\"";
        // line 52
        echo base_url("public/js/vendedor/");
        echo "login.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 52,  91 => 51,  88 => 50,  44 => 9,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/login.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\login.twig");
    }
}
