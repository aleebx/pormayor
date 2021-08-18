<?php

/* registro.twig */
class __TwigTemplate_256b3e84abfb5c1a60dcecf3fd6b47cf9fcf82fb97b4b7ac3821cefd8283385c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "registro.twig", 1);
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
        // line 54
        echo "  <main class=\"container fixContainer\">
    <br class=\"hide-on-large-only\"><br class=\"hide-on-large-only\">
        <div class=\"row \">
            <div class=\"col s12 m12 l8 offset-l2\">
                <div class=\"card\">
                  <div class=\"card-content green hide\" id=\"exitoReg\">
                    <h5 class=\"center white-text\">REGISTRO DE EMPRENDEDOR - <b>PORMAYOR.PE</b></h5>
                    <p class=\"white-text\">Emprende con nosotros, puedes llevarte cualquier producto a precio por mayor con una compra mínima de S/100</p>        
                  </div>
                  <div class=\"card-content\">
                    <form id=\"form-registro\" method=\"POST\" action=\"";
        // line 64
        echo base_url();
        echo "vnd/registrar2\" autocomplete=\"off\">                
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
                          <input name=\"celular\" id=\"celular\" type=\"number\" pattern=\"/^-?\\d+\\.?\\d*\$/\" onKeyPress=\"if(this.value.length==9) return false;\" placeholder=\"Ingresa tu celular de contacto\" required>
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
                        <div class=\"input-field col s12 l12 hide\">
                          <i class=\"material-icons prefix transitionB\">star</i>
                          <input name=\"vendedor\" type=\"text\" id=\"vendedor\" value=\"";
        // line 98
        echo ($context["id_vendedor"] ?? null);
        echo "\">
                          <label for=\"clave2\">Codigo Emprendedor</label>
                        </div>
                        <div class=\"col l12 center\">
                          <button class=\"btn pormayor\">Registrar cliente</button>
                        </div>
                      </form>
                  </div>                
                </div>
            </div>
        </div>
</main>
";
    }

    // line 112
    public function block_script($context, array $blocks = array())
    {
        // line 113
        echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js\"></script>
  <script src=\"";
        // line 114
        echo base_url("public/js/vendedor/");
        echo "login.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "registro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 114,  107 => 113,  104 => 112,  87 => 98,  50 => 64,  38 => 54,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registro.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\registro.twig");
    }
}
