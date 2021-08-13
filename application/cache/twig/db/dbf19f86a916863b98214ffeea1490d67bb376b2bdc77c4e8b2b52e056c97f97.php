<?php

/* vendedor/productos.twig */
class __TwigTemplate_453b8a5c38e85189737354a745e93f7f34cc1627bdf4ed8622acfea2f516c11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/productos.twig", 1);
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
        // line 3
        echo "<style type=\"text/css\">
\t.divAgotado{opacity: .5;pointer-events: none;}
</style>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Page Layout here -->
    <main>
      <div class=\"card\">
      \t<div class=\"card-content\">
\t\t    <span class=\"card-title negrita\">LISTADO DE PRODUCTOS</span>
\t\t    <ul class=\"collapsible\" data-collapsible=\"accordion\">
\t\t    \t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 16
            echo "\t\t\t    <li>
\t\t\t      <div class=\"collapsible-header ";
            // line 17
            if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                echo " divAgotado ";
            }
            echo "\" style=\"display: block;\">";
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo " &nbsp;&nbsp;<b class=\"fontD2 right\">S/ ";
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo "</b> ";
            if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                echo "<span class=\"centered\"><b class=\"red-text\">AGOTADO</b></span>";
            }
            echo "</div>
\t\t\t      <div class=\"collapsible-body\">
\t\t\t      \t";
            // line 19
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 20
                echo "\t\t\t      \t<table class=\"striped bordered \">
\t\t\t\t        <thead>
\t\t\t\t          <tr>
\t\t\t\t              <th width=\"20%\">NOMBRE</th>
\t\t\t\t              <th width=\"40%\">DESCRIPCIÓN</th>
\t\t\t\t              ";
                // line 26
                echo "\t\t\t\t              ";
                // line 27
                echo "\t\t\t\t              <th>PRECIOS</th>
\t\t\t\t              <th>IMAGENES</th>
\t\t\t\t          </tr>
\t\t\t\t        </thead>

\t\t\t\t        <tbody>

\t\t\t\t          <tr>
\t\t\t\t            <td>";
                // line 35
                echo " ";
                echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
                echo "</td>
\t\t\t\t            <td>";
                // line 36
                echo $this->getAttribute($context["pro"], "Pro_Descripcion", array());
                echo "</td>
\t\t\t\t            ";
                // line 38
                echo "\t\t\t\t            \t<td>
\t\t\t\t            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["precios"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prp"]) {
                    // line 40
                    echo "\t\t\t\t            \t";
                    if (($this->getAttribute($context["pro"], "Pro_IdProducto", array()) == $this->getAttribute($context["prp"], "Pro_IdProducto", array()))) {
                        // line 41
                        echo "\t\t\t\t            \tDe ";
                        echo $this->getAttribute($context["prp"], "Prp_Desde", array());
                        echo " a ";
                        if (($this->getAttribute($context["prp"], "Prp_A", array()) == 9999)) {
                            echo "CAJÓN";
                        } else {
                            echo $this->getAttribute($context["prp"], "Prp_A", array());
                            echo " uni";
                        }
                        echo "<br>
\t\t\t\t            \t<b>S/";
                        // line 42
                        echo $this->getAttribute($context["prp"], "Prp_Precios", array());
                        echo "</b><br>
\t\t\t\t            \t";
                    }
                    // line 44
                    echo "\t\t\t\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t            \t</td>
\t\t\t\t            \t<td><a class=\"btn\" href=\"";
                // line 46
                echo base_url();
                echo "vendedor/productos/fotos/";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\"><i class=\"material-icons\">image</i></a></td>
\t\t\t\t          </tr>
\t\t\t\t        </tbody>
\t\t\t\t    </table>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t";
                // line 53
                echo " <b>";
                echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
                echo "</b>  <br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t";
                // line 56
                echo $this->getAttribute($context["pro"], "Pro_Descripcion", array());
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s4\">
\t\t\t\t\t\t\t\t<b>PRECIOS</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s8\">
\t\t\t\t\t\t\t";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["precios"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prp"]) {
                    // line 63
                    echo "\t\t\t\t            \t";
                    if (($this->getAttribute($context["pro"], "Pro_IdProducto", array()) == $this->getAttribute($context["prp"], "Pro_IdProducto", array()))) {
                        // line 64
                        echo "\t\t\t\t            \tDe ";
                        echo $this->getAttribute($context["prp"], "Prp_Desde", array());
                        echo " a ";
                        if (($this->getAttribute($context["prp"], "Prp_A", array()) == 9999)) {
                            echo "CAJÓN";
                        } else {
                            echo $this->getAttribute($context["prp"], "Prp_A", array());
                            echo " uni";
                        }
                        echo "<br>
\t\t\t\t            \t<b>S/";
                        // line 65
                        echo $this->getAttribute($context["prp"], "Prp_Precios", array());
                        echo "</b><br>
\t\t\t\t            \t";
                    }
                    // line 67
                    echo "\t\t\t\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"";
                // line 70
                echo base_url();
                echo "vendedor/productos/fotos/";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\"><i class=\"material-icons\">image</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 74
            echo " \t\t\t      </div>
\t\t\t    </li>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t</ul>
    \t</div>
      </div>
    </main>
";
    }

    // line 82
    public function block_script($context, array $blocks = array())
    {
        // line 83
        echo "<script>
\$('select').material_select();
</script>  
";
    }

    public function getTemplateName()
    {
        return "vendedor/productos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 83,  228 => 82,  220 => 77,  212 => 74,  203 => 70,  199 => 68,  193 => 67,  188 => 65,  176 => 64,  173 => 63,  169 => 62,  160 => 56,  153 => 53,  149 => 51,  139 => 46,  136 => 45,  130 => 44,  125 => 42,  113 => 41,  110 => 40,  106 => 39,  103 => 38,  99 => 36,  94 => 35,  84 => 27,  82 => 26,  75 => 20,  73 => 19,  58 => 17,  55 => 16,  51 => 15,  43 => 9,  40 => 8,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/productos.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\vendedor\\productos.twig");
    }
}
