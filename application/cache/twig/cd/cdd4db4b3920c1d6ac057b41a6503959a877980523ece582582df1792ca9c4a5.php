<?php

/* vendedor/comision.twig */
class __TwigTemplate_1ef368a8b8ff30a8f5c0071f1bb19b64e9f174ead4c80b6e5e6f0373cc2d64ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/comision.twig", 1);
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
        <h4>Comisiones</h4>
        <input type=\"number\" name=\"monto\" id=\"monto\" value=\"\">
        <table>
        <thead>
          <tr>
            <th>FECHA</th>
            <th>VENTA</th>
          </tr>
        </thead>
        <tbody>          
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ventas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 19
            echo "          <tr>
            <td>";
            // line 20
            echo $this->getAttribute($context["v"], "fecha", array());
            echo "</td>
            <td>";
            // line 21
            echo $this->getAttribute($context["v"], "total", array());
            echo "</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
        </table>
      </div>
    </div>
  </main>
";
    }

    // line 31
    public function block_script($context, array $blocks = array())
    {
        // line 32
        echo "  <script src=\"";
        echo base_url("public/");
        echo "js/vendedor/lcliente.js?v=12\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 33
        echo base_url("public/");
        echo "js/reporte.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/comision.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  85 => 32,  82 => 31,  73 => 24,  64 => 21,  60 => 20,  57 => 19,  53 => 18,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/comision.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\comision.twig");
    }
}
