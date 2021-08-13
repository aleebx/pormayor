<?php

/* vendedor/reportes.twig */
class __TwigTemplate_8e6b217196a1b6837ef9b781b1154d83cb8d9588fe877af052fefb8a2706e30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/reportes.twig", 1);
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
        echo "  <main class=\"\">
    <div class=\"card\">
      <div class=\"card-content\">
        <h4>Reporte de Ventas - Gestión</h4>
        <input type=\"month\" name=\"meses\" id=\"meses\" value=\"";
        // line 9
        echo twig_date_format_filter($this->env, "now", "Y-m");
        echo "\">
        <a class=\"btn green buscarV\">Buscar</a>
        ";
        // line 12
        echo "        <div id=\"contReporte\" class=\"row\"></div>
      </div>
    </div>
  </main>
";
    }

    // line 18
    public function block_script($context, array $blocks = array())
    {
        // line 19
        echo "  <script src=\"";
        echo base_url("public/");
        echo "js/vendedor/lcliente.js?v=12\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 20
        echo base_url("public/");
        echo "js/reporte.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/reportes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 19,  57 => 18,  49 => 12,  44 => 9,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/reportes.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\reportes.twig");
    }
}
