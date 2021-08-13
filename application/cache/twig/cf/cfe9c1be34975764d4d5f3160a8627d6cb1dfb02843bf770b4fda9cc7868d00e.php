<?php

/* vendedor/detalle_cliente.twig */
class __TwigTemplate_ae2ef83903820ce5f8eb6ed81398f55c8aa71e6bcd06ffe3f9cc908f93639fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/detalle_cliente.twig", 1);
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
        echo "  <main class=\"container\">
    <div class=\"card\">
      <div class=\"card-content\">
        <span class=\"cart-title\">Listado de cliente</span>
        <table id=\"ListVnetasTabla1\" style=\"width:100%\">
          <thead>
             <tr style=\"font-size:12px;\">
                <th>#</th>
                <th>CLIENTE</th>
                ";
        // line 15
        echo "                <th>TIPO DE VENTA</th>
                <th>ESTADO</th> 
                <th>FECHA</th>
                <th>ACCIÓN</th>
            </tr>
          </thead>
          <tbody>
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pag"]) {
            // line 23
            echo "                <a href=\"";
            echo base_url();
            echo "vnd/detalle/";
            echo $this->getAttribute($context["pag"], "Pac_IdPago_Compra", array());
            echo "\">
                  <tr ";
            // line 24
            if (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 1)) {
                echo "class=\"lime lighten-5\"";
            }
            echo ">                     
                    <td>";
            // line 25
            echo $this->getAttribute($context["pag"], "Pac_CodPago", array());
            echo "</td>
                    <td>";
            // line 26
            echo $this->getAttribute($context["pag"], "Per_Nombre", array());
            echo " - ";
            echo $this->getAttribute($context["pag"], "Per_Telefono", array());
            echo "</td>
                    <td>
                    ";
            // line 28
            if (($this->getAttribute($context["pag"], "Pac_Banco", array()) == "NO")) {
                // line 29
                echo "                      CONTRAENTREGA
                    ";
            } elseif (($this->getAttribute(            // line 30
$context["pag"], "Pac_Banco", array()) == "TIENDA")) {
                // line 31
                echo "                      RETIRO EN TIENDA
                    ";
            } elseif (($this->getAttribute(            // line 32
$context["pag"], "Pac_Banco", array()) == "Visanet")) {
                // line 33
                echo "                      TARJETA DE CRÉDITO/DÉBITO
                    ";
            } else {
                // line 35
                echo "                      DEPÓSITO o TRANSFERENCIA                                  
                    ";
            }
            // line 37
            echo "                    </td>
                    <td>
                      <span id=\"estV";
            // line 39
            echo $this->getAttribute($context["pag"], "Pac_IdPago_Compra", array());
            echo "\" class=\"new badge black-text negrita ";
            if (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 1)) {
                echo "green accent-4\">NUEVA";
            } elseif (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 2)) {
                echo "light-green accent-4\">CONFIRMADA";
            } elseif (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 3)) {
                echo "lime accent-2\">RECOGO";
            } elseif (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 4)) {
                echo "deep-orange accent-2\">COURIER";
            } elseif (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 5)) {
                echo " green darken-4\">ENTREGADO";
            } elseif (($this->getAttribute($context["pag"], "Pac_Estado", array()) == 6)) {
                echo "red darken-3\">ANULADO";
            }
            echo "</span>
                    </td>
                    <td><b>";
            // line 41
            echo $this->getAttribute($context["pag"], "Pac_FechaRegistro", array());
            echo "</b></td>
                    <td>
                    <a class=\"btn orange\" href=\"";
            // line 43
            echo base_url();
            echo "vnd/detalle/";
            echo $this->getAttribute($context["pag"], "Pac_IdPago_Compra", array());
            echo "\"  target=\"_blank\"><i class=\"material-icons\">launch</i></a>
                        <a class=\"btn blue modal-trigger\" id=\"";
            // line 44
            echo $this->getAttribute($context["pag"], "Pac_IdPago_Compra", array());
            echo "\" accessKey=\"";
            echo $this->getAttribute($context["pag"], "Pac_Estado", array());
            echo "\" href=\"#modalEdit\"><i class=\"material-icons\">update</i></a>
                    </td>
                  </tr>
                </a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </tbody>
      </table>  
      </div>
    </div>
  </main>
";
    }

    // line 56
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "vendedor/detalle_cliente.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  153 => 49,  140 => 44,  134 => 43,  129 => 41,  110 => 39,  106 => 37,  102 => 35,  98 => 33,  96 => 32,  93 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 26,  75 => 25,  69 => 24,  62 => 23,  58 => 22,  49 => 15,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/detalle_cliente.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\detalle_cliente.twig");
    }
}
