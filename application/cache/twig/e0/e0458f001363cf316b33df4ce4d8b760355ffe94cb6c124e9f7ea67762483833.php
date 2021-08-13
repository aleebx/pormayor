<?php

/* vendedor/fotos.twig */
class __TwigTemplate_b81399ee3a719bce6c4cfed5bfbf5dd391e6105f00c9eca8223a63690087d8df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/fotos.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Page Layout here -->
    <main>
      <div class=\"card\">
      \t<div class=\"card-content center\">
      \t\t<span class=\"title negrita\">DAR CLICK ENCIMA DE LA IMAGEN PARA DESCARGAR</span><br><br>
      \t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
            // line 10
            echo "      \t\t\t";
            if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                // line 11
                echo "      \t\t\t\t<a href=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["fot"], "Prf_Img", array());
                echo "\" download=\"";
                echo $this->getAttribute($context["fot"], "Prf_Img", array());
                echo "\">
      \t\t\t\t\t<img src=\"";
                // line 12
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["fot"], "Prf_Img", array());
                echo "\" alt=\"";
                echo $this->getAttribute(($context["pro"] ?? null), "Pro_Nombre", array());
                echo "-Pormayor.pe\" title=\"";
                echo $this->getAttribute(($context["pro"] ?? null), "Pro_Nombre", array());
                echo "\" class=\"fixImgProducto\">
\t\t\t\t\t</a>
      \t\t\t";
            }
            // line 15
            echo "      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    \t</div>
      </div>
    </main>
";
    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        // line 21
        echo "<script>
\$('select').material_select();
</script>  
";
    }

    public function getTemplateName()
    {
        return "vendedor/fotos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  78 => 20,  71 => 16,  65 => 15,  54 => 12,  46 => 11,  43 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/fotos.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\vendedor\\fotos.twig");
    }
}
