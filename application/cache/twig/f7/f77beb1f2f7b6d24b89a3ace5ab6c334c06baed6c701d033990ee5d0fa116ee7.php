<?php

/* correo/correo_compra_dot_tienda.twig */
class __TwigTemplate_e1ae5bce752996115bb692068d5e7f64687aef84f89fcb30dfdc3557665693d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/correo.twig", "correo/correo_compra_dot_tienda.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/correo.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<td bgcolor=\"#FFFFFC\" style=\"padding: 40px 30px 0px 30px;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
      <tr>
        <td style=\"color: #383838; font-family: Arial, sans-serif; font-size: 24px;\">
          Hola, <b>";
        // line 8
        echo ($context["nombre_tienda"] ?? null);
        echo " ¡Tienes una venta!</b>
        </td>
      </tr>

      <tr>
        <td style=\"padding: 20px 0 0 0;color:#383838;font-family:Arial,sans-serif;font-size:15px;line-height:20px;\">
          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tr>
              <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
                El método de pago elegido por el comprador fue <strong>DEPOSITO O TRANSFERENCIA</strong>.
              </td>
            </tr>

            <tr>
              <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
                <ul>
                  <li>Empaqueta tu producto adecuadamente.</li>
                  <li>Imprime y pega tu guia de envio en el paquete.</li>
                  <li>Entregar el paquete el día de mañana al courier que vendrá a tu negocio (Antes del medio día)</li>
                </ul>
                <strong>El courier se encargará de cobrar el valor de tus ventas. <br>
                Los martes de cada semana serán depositado el dinero de tus ventas de la semana anterior.</strong>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td style=\"border-bottom: 1px solid #CBCBCB; padding: 10px; font-size: 15px;text-align:center;font-family: Arial, sans-serif;  color:#383838;\" width=\"\" valign=\"top\"><b>DATOS DE USUARIO</b>
        </td>
      </tr>

      <tr>
        <td><br></td>
      </tr>

      <tr>
        <td style=\"font-family: Arial, sans-serif; font-size: 14px; line-height: 20px;\">
          <table style=\"table-layout: fixed\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600px\">
            <thead>
              <tr>
                <th width=\"5\" valign=\"middle\"></th>
                <th width=\"55\" valign=\"middle\"></th>
                <th width=\"5\" valign=\"middle\"></th>
                <th width=\"25\" valign=\"middle\"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div style=\"background-color: #efefef;padding: 4.5px 7px;border-radius: 5px 0px 0px 5px;color: grey;\">
                  <img style=\"opacity:.6;width: 25px; height: 25px; object-fit: contain;\" src=\"http://pormayor.pe/img/correo_iconA.png\"></div>
                </td>
                <td colspan=\"3\">
                  <p style=\"width:97%;background-color: #efefef;padding: 10px;border-radius: 0px 5px 5px 0px;color: grey;\">
                  <a style=\"text-decoration:none; color: grey\">";
        // line 63
        echo twig_upper_filter($this->env, ($context["nombre_usuario"] ?? null));
        echo "</a></p>
                </td>
              </tr>
              <tr>
                <td><div style=\"background-color: #efefef;padding: 4.5px 7px;border-radius: 5px 0px 0px 5px;color: grey;\">
                  <img style=\"opacity:.6;width: 25px; height: 25px; object-fit: contain;\" src=\"http://pormayor.pe/img/correo_iconB.png\"></div>
                </td>
                <td >
                  <p style=\"width:90%;background-color: #efefef;padding: 10px;border-radius: 0px 5px 5px 0px;color: grey;\">
                  <a style=\"text-decoration:none; color: grey\" href=\"mailto:";
        // line 72
        echo $this->getAttribute(($context["items"] ?? null), "Tie_Correo", array());
        echo "\">";
        echo twig_upper_filter($this->env, ($context["correo_usuario"] ?? null));
        echo "</a></p>
                </td>
                <td><div style=\"background-color: #efefef;padding: 4.5px 7px;border-radius: 5px 0px 0px 5px;color: grey;\">
                  <img style=\"opacity:.6;width: 25px; height: 25px; object-fit: contain;\" src=\"http://pormayor.pe/img/correo_iconC.png\"></div>
                </td>
                <td>
                  <p style=\"width:91%;background-color: #efefef;padding: 10px;border-radius: 0px 5px 5px 0px;color: grey;\">";
        // line 78
        echo ($context["telefono_usuario"] ?? null);
        echo "
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>

      <tr>
        <td><br><br></td>
      </tr>

      <tr>
        <td style=\"border-bottom: 1px solid #CBCBCB; padding: 10px; font-size: 15px;text-align:center;font-family: Arial, sans-serif;  color:#383838;\" width=\"\" valign=\"top\"><b>RESUMEN DE PRODUCTOS</b>
        </td>
      </tr>

      <tr>
        <td>
          <br>
          <table style=\"table-layout: fixed\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"590px\">
            <thead >
              <tr>
                  <th width=\"50\"></th>
                  <th style=\"padding: 12px 10px; font-size: 12px;text-align:center;font-family: Arial, sans-serif;border-right:1px solid #CBCBCB; border-bottom:1px solid #CBCBCB\" width=\"200\" valign=\"middle\">PRODUCTO</th>
                  <th style=\"padding: 12px 10px; font-size: 12px;text-align:center;font-family: Arial, sans-serif;border-bottom:1px solid #CBCBCB\" width=\"30\" valign=\"middle\">CANT.</th>
                  <th style=\"padding: 12px 10px; font-size: 12px;text-align:center;font-family: Arial, sans-serif;border-bottom:1px solid #CBCBCB\" width=\"60\" valign=\"middle\">PRECIO UNITARIO</th>
                  <th style=\"padding: 12px 10px; font-size: 12px;text-align:center;font-family: Arial, sans-serif;border-bottom:1px solid #CBCBCB\" width=\"60\" valign=\"middle\">IMPORTE</th>
              </tr>
            </thead>
            <tbody >
              ";
        // line 110
        $context["total"] = 0;
        // line 111
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataCarrito"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["itemsInterno"]) {
            // line 112
            echo "                ";
            if ((($context["Tie_IdTienda"] ?? null) == $this->getAttribute($context["itemsInterno"], "idtienda", array()))) {
                // line 113
                echo "                  ";
                $context["preUni"] = ($this->getAttribute($context["itemsInterno"], "price", array()) / $this->getAttribute($context["itemsInterno"], "qty", array()));
                // line 114
                echo "                  <tr>
                    <td style=\"border-bottom: 1px solid #CBCBCB; padding: 0px;\" valign=\"top\">
                      <div style=\"margin:0 auto; margin:5px; width:50px; height: 50px;  border-radius: 10px;\"><img style=\"top: 5px;position: relative;width: 100%; height: 40px; object-fit: contain;\" src=\"http://pormayor.pe/img/";
                // line 116
                echo $this->getAttribute($context["itemsInterno"], "img", array());
                echo "\"></div>
                    </td>
                    <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB;border-right:1px solid #CBCBCB; padding: 5px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                      ";
                // line 119
                echo twig_title_string_filter($this->env, $this->getAttribute($context["itemsInterno"], "name", array()));
                echo " ";
                if ($this->getAttribute($context["itemsInterno"], "color", array())) {
                    echo " - <span style=\"color:rgba(0,0,0,0.5)\">";
                    echo twig_title_string_filter($this->env, $this->getAttribute($context["itemsInterno"], "color", array()));
                    echo "</span> ";
                }
                echo " ";
                if (($this->getAttribute($context["itemsInterno"], "tipovariacion", array()) != " ")) {
                    echo " / ";
                    echo twig_upper_filter($this->env, $this->getAttribute($context["itemsInterno"], "tipovariacion", array()));
                    echo " ";
                }
                // line 120
                echo "                    </td>
                    <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                      ";
                // line 122
                echo $this->getAttribute($context["itemsInterno"], "qty", array());
                echo "<br>unid(s)
                    </td>
                    <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                      ";
                // line 125
                echo ($context["preUni"] ?? null);
                echo "
                    </td>
                    <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                    S/ ";
                // line 128
                echo $this->getAttribute($context["itemsInterno"], "price", array());
                echo "
                    </td>
                  </tr>
                  ";
                // line 131
                $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["itemsInterno"], "price", array()));
                // line 132
                echo "                ";
            }
            // line 133
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemsInterno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "          
                <tr>
                  <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">TOTAL A PAGAR</td>
                  <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
        // line 137
        echo twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ".", " ");
        echo "</b></td>
                </tr>
            </tbody>
          </table>
        </td>
      </tr>
      
      <tr>
        <td><br><br><br></td>
      </tr>
    </table>
  </td>
";
    }

    public function getTemplateName()
    {
        return "correo/correo_compra_dot_tienda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 137,  223 => 134,  217 => 133,  214 => 132,  212 => 131,  206 => 128,  200 => 125,  194 => 122,  190 => 120,  176 => 119,  170 => 116,  166 => 114,  163 => 113,  160 => 112,  155 => 111,  153 => 110,  118 => 78,  107 => 72,  95 => 63,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "correo/correo_compra_dot_tienda.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\correo\\correo_compra_dot_tienda.twig");
    }
}
