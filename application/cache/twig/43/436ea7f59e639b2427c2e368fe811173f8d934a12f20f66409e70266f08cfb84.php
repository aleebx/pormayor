<?php

/* gc/index.twig */
class __TwigTemplate_d74c801fd6c999ccb7b8a774d3de81d396c0e47b6b1263dfd1b4bec8c19036fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate(($context["template"] ?? null), "gc/index.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 1)) {
            // line 2
            $context["template"] = "layout/intranet/template_adm.twig";
        } else {
            // line 4
            $context["template"] = "layout/intranet/template_gc.twig";
        }
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Page Layout here -->
    <main class=\"container\">
      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title center\">Gestión de tiendas</span>
            <div class=\"row\">
              <div class=\"col s12 m12 l12\">                
                  <table class=\"highlight centered bordered\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>NOMBRE TIENDA</th>
                        <th>RAZÓN SOCIAL</th>
                        <th>FECHA DE REGISTRO</th>
                        <th># PRODUCTO</th>
                        <th>ACCIÓN</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 28
        $context["nro"] = 1;
        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tiendas_gestor"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tig"]) {
            // line 30
            echo "                      <tr>
                        <td><b style=\"font-size:20px\">";
            // line 31
            echo ($context["nro"] ?? null);
            echo "</b></td>
                        <td>
                            <a href=\"https://";
            // line 33
            echo $this->getAttribute($context["tig"], "Tie_Subdominio", array());
            echo ".pormayor.pe\" target=\"_blank\">";
            echo $this->getAttribute($context["tig"], "Tie_Nombre", array());
            echo "</a>
                          <br>";
            // line 34
            echo $this->getAttribute($context["tig"], "Per_Nombre", array());
            echo "<br><span>Correo: ";
            echo $this->getAttribute($context["tig"], "Usu_Correo", array());
            echo "</span><br><span>                            
                            <spam class=\"fontB\">";
            // line 35
            echo $this->getAttribute($context["tig"], "Usu_LastLogin", array());
            echo "</spam>
                        </td>
                        <td>
                          ";
            // line 38
            echo $this->getAttribute($context["tig"], "Tie_RazonSocial", array());
            echo "
                        </td>
                        <td>
                          ";
            // line 41
            echo twig_date_format_filter($this->env, $this->getAttribute($context["tig"], "Tie_FechaRegistro", array()), "d/m/Y");
            echo "
                        </td>
                        <td>
                          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cantidad_producto"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
                // line 45
                echo "                            ";
                if (($this->getAttribute($context["cap"], "Tie_IdTienda", array()) == $this->getAttribute($context["tig"], "Tie_IdTienda", array()))) {
                    // line 46
                    echo "                              ";
                    echo $this->getAttribute($context["cap"], "Cantidad", array());
                    echo "                            
                            ";
                }
                // line 48
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                        </td>
                        <td>
                          ";
            // line 51
            if ($this->getAttribute($context["tig"], "Per_Telefono", array())) {
                // line 52
                echo "                              ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["tig"], "Per_Telefono", array())) == 9)) {
                    // line 53
                    echo "                              <a class=\"btn green\" href=\"https://api.whatsapp.com/send?phone=51";
                    echo $this->getAttribute($context["tig"], "Per_Telefono", array());
                    echo "\"><img src=\"";
                    echo ($context["ruta_img"] ?? null);
                    echo "wa.png\" height=\"25\" style=\"top:5px;margin-right:10px\" class=\"positionRelative left\">";
                    echo $this->getAttribute($context["tig"], "Per_Telefono", array());
                    echo "</a>
                              <br><a class=\"btn hide-on-large-only\" href=\"tel:";
                    // line 54
                    echo $this->getAttribute($context["tig"], "Per_Telefono", array());
                    echo "\">LLAMAR</a>
                              ";
                }
                // line 55
                echo " 
                            ";
            }
            // line 56
            echo "                            
                            ";
            // line 57
            if ($this->getAttribute($context["tig"], "Per_Celular", array())) {
                // line 58
                echo "                              ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["tig"], "Per_Celular", array())) == 9)) {
                    echo "<br>
                              <a class=\"btn green\" href=\"https://api.whatsapp.com/send?phone=51";
                    // line 59
                    echo $this->getAttribute($context["tig"], "Per_Celular", array());
                    echo "\"><img src=\"";
                    echo ($context["ruta_img"] ?? null);
                    echo "wa.png\" height=\"25\" style=\"top:5px;margin-right:10px\" class=\"positionRelative left\">";
                    echo $this->getAttribute($context["tig"], "Per_Celular", array());
                    echo "</a>
                              <br><a class=\"btn hide-on-large-only\" href=\"tel:";
                    // line 60
                    echo $this->getAttribute($context["tig"], "Per_Celular", array());
                    echo "\">LLAMAR</a>
                              ";
                }
                // line 62
                echo "                            ";
            }
            // line 63
            echo "                        </td>                        
                      </tr>
                      ";
            // line 65
            $context["nro"] = (($context["nro"] ?? null) + 1);
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </tbody>
                  </table>
              </div>
            </div>
        </div>
      </div>

    </main>
";
    }

    // line 77
    public function block_script($context, array $blocks = array())
    {
        echo " 
";
    }

    public function getTemplateName()
    {
        return "gc/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 77,  190 => 67,  184 => 66,  182 => 65,  178 => 63,  175 => 62,  170 => 60,  162 => 59,  157 => 58,  155 => 57,  152 => 56,  148 => 55,  143 => 54,  134 => 53,  131 => 52,  129 => 51,  125 => 49,  119 => 48,  113 => 46,  110 => 45,  106 => 44,  100 => 41,  94 => 38,  88 => 35,  82 => 34,  76 => 33,  71 => 31,  68 => 30,  63 => 29,  61 => 28,  40 => 9,  37 => 8,  33 => 6,  30 => 4,  27 => 2,  25 => 1,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gc/index.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\gc\\index.twig");
    }
}
