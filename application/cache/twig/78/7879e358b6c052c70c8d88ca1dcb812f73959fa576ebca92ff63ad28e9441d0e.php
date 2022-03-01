<?php

/* layout/intranet/plantilla.twig */
class __TwigTemplate_1b9a419a9f06a4ff3205a2cdcd2c7b666af115bc22f20125678e033a57219cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "</head>
<body>
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        echo " 
</body>
<script> var base_url = \"";
        // line 11
        echo base_url();
        echo "\";</script>
";
        // line 12
        $this->displayBlock('script', $context, $blocks);
        // line 13
        echo "</html>";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/plantilla.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 9,  50 => 6,  46 => 13,  44 => 12,  40 => 11,  35 => 9,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/plantilla.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\layout\\intranet\\plantilla.twig");
    }
}
