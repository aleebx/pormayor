<?php

/* vendedor/reporte_mes.twig */
class __TwigTemplate_24749eaaf6e7b5e494e3d9ddefb1fee542d7bc45c062bfc82b7a34b0e20f62f5 extends Twig_Template
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
        echo "<div class=\"col s6\">
<table class=\"striped centered\">
\t<thead>
\t\t<tr>
\t\t\t<th>FECHA</th>
\t\t\t<th>CANTIDAD GESTIONES</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 10
        $context["totalG"] = 0;
        // line 11
        echo "\t";
        $context["totalV"] = 0;
        // line 12
        echo "\t";
        $context["totalM"] = 0;
        // line 13
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gestion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ge"]) {
            // line 14
            echo "\t\t<tr>
\t\t\t<td>";
            // line 15
            echo $this->getAttribute($context["ge"], "fecha", array());
            echo "</td>
\t\t\t<td>";
            // line 16
            echo $this->getAttribute($context["ge"], "gestion", array());
            echo "</td>
\t\t\t";
            // line 17
            $context["totalG"] = (($context["totalG"] ?? null) + $this->getAttribute($context["ge"], "gestion", array()));
            // line 18
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td>TOTAL</td>
\t\t\t<td class=\"negrita fontC right\">";
        // line 24
        echo ($context["totalG"] ?? null);
        echo "</td>
\t\t</tr>
\t</tfoot>
</table>
</div>
<div class=\"col s6\">
<table class=\"striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>FECHA</th>
\t\t\t<th>VENTAS</th>
\t\t\t<th>MONTO</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ventas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ve"]) {
            // line 40
            echo "\t\t<tr>
\t\t\t<td>";
            // line 41
            echo $this->getAttribute($context["ve"], "fecha", array());
            echo "</td>
\t\t\t<td>";
            // line 42
            echo $this->getAttribute($context["ve"], "cantidad", array());
            echo "</td>
\t\t\t<td>";
            // line 43
            echo $this->getAttribute($context["ve"], "pago_productos", array());
            echo "</td>
\t\t\t";
            // line 44
            $context["totalV"] = (($context["totalV"] ?? null) + $this->getAttribute($context["ve"], "cantidad", array()));
            // line 45
            echo "\t\t\t";
            $context["totalM"] = (($context["totalM"] ?? null) + $this->getAttribute($context["ve"], "pago_productos", array()));
            // line 46
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td>TOTAL</td>
\t\t\t<td class=\"negrita fontC\">";
        // line 52
        echo ($context["totalV"] ?? null);
        echo "</td>
\t\t\t<td class=\"negrita fontC\">S/ ";
        // line 53
        echo ($context["totalM"] ?? null);
        echo "</td>
\t\t</tr>
\t</tfoot>
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "vendedor/reporte_mes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  124 => 52,  118 => 48,  111 => 46,  108 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  91 => 40,  87 => 39,  69 => 24,  63 => 20,  56 => 18,  54 => 17,  50 => 16,  46 => 15,  43 => 14,  38 => 13,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/reporte_mes.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\reporte_mes.twig");
    }
}
