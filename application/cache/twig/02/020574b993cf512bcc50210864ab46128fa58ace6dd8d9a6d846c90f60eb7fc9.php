<?php

/* usuario/model/selProvincia.twig */
class __TwigTemplate_9904fc8e20ddb1e1a4dd68e9ca9fd356f848a3b6fa3240a1fbe7de4306781788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <select id=\"selProvincia\" class=\"browser-default\">
        \t<option value=\"\" disabled selected>Seleccione la Provincia</option>  
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provincia"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["suc"]) {
            // line 4
            echo "        \t<option value=\"";
            echo $this->getAttribute($context["suc"], "id", array());
            echo "\">";
            echo $this->getAttribute($context["suc"], "name", array());
            echo "</option>  
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "                    
    </select>


";
        // line 9
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = array())
    {
        // line 10
        echo "    <script src=\"";
        echo base_url("public/");
        echo "js/tienda/selProvincia.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "usuario/model/selProvincia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 9,  39 => 5,  28 => 4,  24 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuario/model/selProvincia.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\usuario\\model\\selProvincia.twig");
    }
}
