<?php

/* admin/grupal.twig */
class __TwigTemplate_5e38c0c1f45a832e5c917e79de180c49c804dd8a5b58efe81580fe776d71cc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/grupal.twig", 1);
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">  
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- Page Layout here -->
    <main>
      <div class=\"card\">
          <div class=\"card-content\">
            ";
        // line 12
        echo "            <table id=\"tableGrupo\" class=\"display\" data-page-length='25'>
            \t<thead>
            \t\t<tr>
                        <th>USUARIO</th>
                        <th>PRODUCTO</th>
                        <th>GRUPO</th>
                        <th>PRECIO</th>
                        <th>TELEFONO</th>
                        <th>ESTADO</th>
            \t\t</tr>
            \t</thead>
            \t<tbody>
            \t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grupo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gru"]) {
            echo "            \t\t
            \t\t<tr>
                        <td>";
            // line 26
            echo $this->getAttribute($context["gru"], "Per_Nombre", array());
            echo "</td>
                        <td>";
            // line 27
            echo $this->getAttribute($context["gru"], "Pro_Nombre", array());
            echo "</td>
                        <td class=\"negrita fontA center\">";
            // line 28
            echo $this->getAttribute($context["gru"], "Prg_Grupo", array());
            echo "</td>
                        <td>";
            // line 29
            echo $this->getAttribute($context["gru"], "Prg_Precio", array());
            echo "</td>
                        <td>";
            // line 30
            echo $this->getAttribute($context["gru"], "Per_Telefono", array());
            echo "</td>
                        <td class=\"white-text\" style=\"font-size:1px;\">";
            // line 31
            if (($this->getAttribute($context["gru"], "Prg_Estado", array()) == 0)) {
                echo "F<span class=\"new badge orange\" data-badge-caption=\"FALTA\"></span>";
            } else {
                echo "C<span class=\"new badge green\" data-badge-caption=\"COMPLETADO\"></span>";
            }
            echo "</td>
            \t\t</tr>            \t\t
            \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            \t</tbody>
            </table>
          </div>
\t\t</div>
    </main>

";
    }

    // line 42
    public function block_script($context, array $blocks = array())
    {
        // line 43
        echo "\t<script>
\t\$(document).ready(function(){
    \tvar table = \$('#tableGrupo').DataTable();
\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "admin/grupal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  111 => 42,  101 => 34,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  61 => 24,  47 => 12,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/grupal.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\grupal.twig");
    }
}
