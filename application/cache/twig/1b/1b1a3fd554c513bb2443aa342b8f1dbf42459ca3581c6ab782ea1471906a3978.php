<?php

/* admin/index.twig */
class __TwigTemplate_d607598c9fcf915bc1acf4049b6eacd6f032b3a4064622d95921851a1449770f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_adm.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">  
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <main>
        <div class=\"card\">
            <div class=\"card-content\">
                <div class=\"row\">
                    <div class=\"input-field col s4\">
                      <input id=\"last_name\" type=\"date\" class=\"validate\">
                    </div>
                    <div class=\"input-field col s4\">
                      <input id=\"last_name\" type=\"date\" class=\"validate\">
                    </div>
                    <div class=\"col s4\">
                      <a class=\"btn\"><i class=\"material-icons left\">search</i> BUSCAR</a>
                    </div>
                </div>
            </div>
\t\t</div>
    </main>
";
    }

    // line 26
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/index.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\admin\\index.twig");
    }
}
