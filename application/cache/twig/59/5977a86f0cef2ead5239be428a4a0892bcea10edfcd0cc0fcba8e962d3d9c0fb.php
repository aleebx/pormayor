<?php

/* comprador/index.twig */
class __TwigTemplate_98b77e853236300b872ae19806d9739ed75723af348e8d6ca60eebcb141bf4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_usu.twig", "comprador/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_usu.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Page Layout here -->
    <main class=\"container\">
      <div class=\"card\">
          <div class=\"card-content center\">
            <span class=\"card-title\">¡Hola ";
        // line 8
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo "! Esperemos tengas un bonito día</span>          
          </div>
\t\t</div>
    </main>
";
    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "comprador/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "comprador/index.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\comprador\\index.twig");
    }
}
