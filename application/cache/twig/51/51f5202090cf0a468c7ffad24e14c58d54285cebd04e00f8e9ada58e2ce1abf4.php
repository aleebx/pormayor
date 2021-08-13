<?php

/* correo/correo_compra_deposito_transferencia.twig */
class __TwigTemplate_6b91c8456244bc225f1ca08eb48bbec8528216fb8a5c4fb01bafaa493f6d1a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/correo.twig", "correo/correo_compra_deposito_transferencia.twig", 1);
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
        echo "\t <tr style=\"border-top: #f6b21d 5px solid;\">
    <td bgcolor=\"#3b3b3d\" align=\"center\" style=\"padding: 20px 0px 20px 0px;font-size: 1.5rem; font-family: Arial, sans-serif;color:white\">
    Confirmación de Compra Deposito/Transferencia
    </td>
  </tr>
      <tr>
        <td style=\"padding: 20px 0 0 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tr>
              <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
                <b>";
        // line 14
        echo twig_title_string_filter($this->env, ($context["nombre_usuario"] ?? null));
        echo "</b>, gracias por confiar en nosotros para realizar esta compra. 
              </td>
            </tr>           
            <tr>
              <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
                <b style=\"color:orange\">IMPORTANTE</b><br>
                <ul>
                  <li>Realizar depósito al número de cuenta en soles <b>(BCP Ahorros N° 19193690777046)</b>, <b>CCI (código de cuenta interbancario N° 00219119369077704659)</b>, a nombre de <a href=\"//pormayor.pe\" style=\"text-decoration:none;\"><b style=\"color:#FEC00F;\">PorMayor.pe S.A.</b></a></li>
                  <li>Agregar número de depósito o transferencia en el modulo de mis compras, para validar si la operación es correcta.</li>
                  <li>Una vez que se realiza la verificación del depositó o transferencia, se procede a procesar la compra y finalizar la entrega con el cliente.</li>
                  <li>Tiempo de envio entre <b>1 a 3</b> días según destino.</li>
                </ul>
              </td>           
            </tr>
            <tr>
              <td align=\"center\" style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px;\">
                 <a href=\"https://pormayor.pe/comprador/compra/detalle_compra/";
        // line 30
        echo ($context["idcompra"] ?? null);
        echo "\" style=\"border: none;background-color: #21478F;border-radius: 2px;display: inline-block;height: 36px;line-height: 36px;padding: 0 1rem;-webkit-tap-highlight-color: transparent;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12), 0 3px 1px -2px rgba(0,0,0,.2);text-decoration: none;font-size: 0.9rem; color: white;\">DETALLE DE MI COMPRA</a>                
              </td>
            </tr>
          </table>
        </td>
      </tr>
      ";
        // line 36
        $context["tiendaActual"] = "";
        // line 37
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataCarrito"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 38
            echo "        ";
            if ((($context["tiendaActual"] ?? null) != $this->getAttribute($context["items"], "idtienda", array()))) {
                // line 39
                echo "        ";
                $context["tiendaActual"] = $this->getAttribute($context["items"], "idtienda", array());
                // line 40
                echo "          <tr>
            <td style=\"background-color:#FEC00F;padding: 10px; font-size: 15px;text-align:center;font-family: Arial, sans-serif;  color:#383838;\" width=\"\" valign=\"top\"><b>";
                // line 41
                echo twig_upper_filter($this->env, $this->getAttribute($context["items"], "Tie_Nombre", array()));
                echo "</b>
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
                    <th width=\"40\" valign=\"middle\"></th>
                    <th width=\"5\" valign=\"middle\"></th>
                    <th width=\"25\" valign=\"middle\"></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
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
                // line 77
                $context["total"] = 0;
                // line 78
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dataCarrito"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["itemsInterno"]) {
                    // line 79
                    echo "                    ";
                    if ((($context["tiendaActual"] ?? null) == $this->getAttribute($context["itemsInterno"], "idtienda", array()))) {
                        // line 80
                        echo "                      ";
                        $context["preUni"] = ($this->getAttribute($context["itemsInterno"], "price", array()) / $this->getAttribute($context["itemsInterno"], "qty", array()));
                        // line 81
                        echo "                      <tr>
                        <td style=\"border-bottom: 1px solid #CBCBCB; padding: 0px;\" valign=\"top\">
                          <div style=\"margin:0 auto; margin:5px; width:50px; height: 50px;  border-radius: 10px;\"><img style=\"top: 5px;position: relative;width: 100%; height: 40px; object-fit: contain;\" src=\"http://pormayor.pe/img/";
                        // line 83
                        echo $this->getAttribute($context["itemsInterno"], "img", array());
                        echo "\"></div>
                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB;border-right:1px solid #CBCBCB; padding: 5px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                        // line 86
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
                        // line 87
                        echo "                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                        // line 89
                        echo $this->getAttribute($context["itemsInterno"], "qty", array());
                        echo "<br>unid(s)
                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                        // line 92
                        echo ($context["preUni"] ?? null);
                        echo "
                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                        S/ ";
                        // line 95
                        echo $this->getAttribute($context["itemsInterno"], "price", array());
                        echo "
                        </td>
                      </tr>
                      ";
                        // line 98
                        $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["itemsInterno"], "price", array()));
                        // line 99
                        echo "                    ";
                    }
                    // line 100
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemsInterno'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                    ";
                $context["totalEnvio"] = twig_round(($context["costoEnvio"] ?? null));
                // line 102
                echo "                    ";
                $context["totalPagar"] = (($context["total"] ?? null) + ($context["totalEnvio"] ?? null));
                // line 103
                echo "                    <tr>
                      <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">COSTO DE PRODUCTO</td>
                      <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                // line 105
                echo twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ".", " ");
                echo "</b></td>
                    </tr>
                    <tr>
                      <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">COSTO DE ENVÍO</td>
                      <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                // line 109
                echo twig_number_format_filter($this->env, ($context["totalEnvio"] ?? null), 2, ".", " ");
                echo "</b></td>
                    </tr>
                    <tr>
                      <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">TOTAL A PAGAR</td>
                      <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                // line 113
                echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
                echo "</b></td>
                    </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td><br><br></td>
          </tr>
        ";
            }
            // line 123
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "correo/correo_compra_deposito_transferencia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 123,  220 => 113,  213 => 109,  206 => 105,  202 => 103,  199 => 102,  196 => 101,  190 => 100,  187 => 99,  185 => 98,  179 => 95,  173 => 92,  167 => 89,  163 => 87,  149 => 86,  143 => 83,  139 => 81,  136 => 80,  133 => 79,  128 => 78,  126 => 77,  87 => 41,  84 => 40,  81 => 39,  78 => 38,  73 => 37,  71 => 36,  62 => 30,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "correo/correo_compra_deposito_transferencia.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\correo\\correo_compra_deposito_transferencia.twig");
    }
}
