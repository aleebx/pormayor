<?php

/* layout/favoritos_mostrar.twig */
class __TwigTemplate_8c931ffadbcabebd4ae20fa6b204a21d41aa4dfc242e10d42bbf91ae82de983a extends Twig_Template
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
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 2
            echo "  ";
            $context["favorito"] = false;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productos_favoritos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prf"]) {
                if ( !($context["favorito"] ?? null)) {
                    // line 4
                    echo "    ";
                    if (($this->getAttribute($context["prf"], "Pro_IdProducto", array()) == $this->getAttribute(($context["pro"] ?? null), "Pro_IdProducto", array()))) {
                        // line 5
                        echo "      ";
                        $context["favorito"] = true;
                        // line 6
                        echo "    ";
                    }
                    // line 7
                    echo "  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "  ";
            if (($context["favorito"] ?? null)) {
                // line 9
                echo "    <img class=\"positionAbsolute favMostrar seleccionado\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "fav.svg\" type=\"image/svg+xml\"></img>
  ";
            } else {
                // line 11
                echo "    <img class=\"positionAbsolute favMostrar\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "fav.svg\" type=\"image/svg+xml\"></img>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "layout/favoritos_mostrar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 9,  46 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/favoritos_mostrar.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\layout\\favoritos_mostrar.twig");
    }
}
