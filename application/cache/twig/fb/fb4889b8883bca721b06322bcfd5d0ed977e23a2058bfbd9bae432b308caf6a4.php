<?php

/* correo/correo_compra_contra_entrega.twig */
class __TwigTemplate_41c80382e64f448719db56522d072ba78d808e22207dfc88fc69eaac7667f00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/correo.twig", "correo/correo_compra_contra_entrega.twig", 1);
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
        echo "<tr style=\"border-top: #f6b21d 5px solid;\">
  <td bgcolor=\"#3b3b3d\" align=\"center\" style=\"padding: 20px 0px 20px 0px;font-size: 1.5rem; font-family: Arial, sans-serif;color:white\">
  Confirmación de Compra Contraentrega
  </td>
</tr>
<tr>
  <td style=\"padding: 20px 0 0 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
      <tr>
        <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
          ";
        // line 14
        echo twig_title_string_filter($this->env, ($context["nombre_usuario"] ?? null));
        echo ", gracias por confiar en nosotros para realizar esta compra. 
        </td>
      </tr>
      <tr>
        <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
          <b style=\"color:orange\">IMPORTANTE</b><br>
          <ul><li>Agregar número de celular de quien va a recibir la compra.</li><li>Su dirección debe ser exacta y con referencias.</li><li>El pago es en efectivo y el monto exacto (Courier no tiene para dar vuelto).</li><li>Tiempo de envio entre 1 a 3 días según destino.</li></ul>
        </td>           
        <td style=\"padding: 0 0 20px 0; color: #383838; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;\">
           <a href=\"https://pormayor.pe/comprador/compra/detalle_compra/";
        // line 23
        echo ($context["idcompra"] ?? null);
        echo "\">MÁS INFORMACIÓN DE TU COMPRA <strong>CLICK ACÁ</strong></a>                
        </td>
      </tr>
    </table>
  </td>
</tr>
";
        // line 29
        $context["tiendaActual"] = "";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataCarrito"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 31
            echo "  ";
            if ((($context["tiendaActual"] ?? null) != $this->getAttribute($context["items"], "idtienda", array()))) {
                // line 32
                echo "  ";
                $context["tiendaActual"] = $this->getAttribute($context["items"], "idtienda", array());
                // line 33
                echo "    <tr>
      <td style=\"background-color:#FEC00F;padding: 10px; font-size: 15px;text-align:center;font-family: Arial, sans-serif;  color:#383838;\" width=\"\" valign=\"top\"><b>";
                // line 34
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
          ";
                // line 69
                if ((($context["descuento"] ?? null) == 0)) {
                    // line 70
                    echo "          <tbody >
            ";
                    // line 71
                    $context["total"] = 0;
                    // line 72
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["dataCarrito"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemsInterno"]) {
                        // line 73
                        echo "              ";
                        if ((($context["tiendaActual"] ?? null) == $this->getAttribute($context["itemsInterno"], "idtienda", array()))) {
                            // line 74
                            echo "                ";
                            $context["preUni"] = ($this->getAttribute($context["itemsInterno"], "price", array()) / $this->getAttribute($context["itemsInterno"], "qty", array()));
                            // line 75
                            echo "                <tr>
                  <td style=\"border-bottom: 1px solid #CBCBCB; padding: 0px;\" valign=\"top\">
                    <div style=\"margin:0 auto; margin:5px; width:50px; height: 50px;  border-radius: 10px;\"><img style=\"top: 5px;position: relative;width: 100%; height: 40px; object-fit: contain;\" src=\"http://pormayor.pe/img/";
                            // line 77
                            echo $this->getAttribute($context["itemsInterno"], "img", array());
                            echo "\"></div>
                  </td>
                  <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB;border-right:1px solid #CBCBCB; padding: 5px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                    ";
                            // line 80
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
                            // line 81
                            echo "                  </td>
                  <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                    ";
                            // line 83
                            echo $this->getAttribute($context["itemsInterno"], "qty", array());
                            echo "<br>unid(s)
                  </td>
                  <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                    ";
                            // line 86
                            echo ($context["preUni"] ?? null);
                            echo "
                  </td>
                  <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                  S/ ";
                            // line 89
                            echo $this->getAttribute($context["itemsInterno"], "price", array());
                            echo "
                  </td>
                </tr>
                ";
                            // line 92
                            $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["itemsInterno"], "price", array()));
                            // line 93
                            echo "              ";
                        }
                        // line 94
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemsInterno'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "              ";
                    $context["totalEnvio"] = twig_round(($context["costoEnvio"] ?? null));
                    // line 96
                    echo "              ";
                    $context["totalPagar"] = (($context["total"] ?? null) + ($context["totalEnvio"] ?? null));
                    // line 97
                    echo "              <tr>
                <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">COSTO DE PRODUCTO</td>
                <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                    // line 99
                    echo twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ".", " ");
                    echo "</b></td>
              </tr>
              <tr>
                <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">COSTO DE ENVÍO</td>
                <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                    // line 103
                    echo twig_number_format_filter($this->env, ($context["totalEnvio"] ?? null), 2, ".", " ");
                    echo "</b></td>
              </tr>
              <tr>
                <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">TOTAL A PAGAR</td>
                <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                    // line 107
                    echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
                    echo "</b></td>
              </tr>
          </tbody>
          ";
                } else {
                    // line 111
                    echo "                <tbody >
                  ";
                    // line 112
                    $context["total"] = 0;
                    // line 113
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["dataCarrito"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemsInterno"]) {
                        // line 114
                        echo "                    ";
                        if ((($context["tiendaActual"] ?? null) == $this->getAttribute($context["itemsInterno"], "idtienda", array()))) {
                            // line 115
                            echo "                      ";
                            $context["preUni"] = $this->getAttribute($context["itemsInterno"], "price_min", array());
                            // line 116
                            echo "                      <tr>
                        <td style=\"border-bottom: 1px solid #CBCBCB; padding: 0px;\" valign=\"top\">
                          <div style=\"margin:0 auto; margin:5px; width:50px; height: 50px;  border-radius: 10px;\"><img style=\"top: 5px;position: relative;width: 100%; height: 40px; object-fit: contain;\" src=\"http://pormayor.pe/img/";
                            // line 118
                            echo $this->getAttribute($context["itemsInterno"], "img", array());
                            echo "\"></div>
                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB;border-right:1px solid #CBCBCB; padding: 5px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                            // line 121
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
                            // line 122
                            echo "                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                            // line 124
                            echo $this->getAttribute($context["itemsInterno"], "qty", array());
                            echo "<br>unid(s)
                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                            // line 127
                            echo ($context["preUni"] ?? null);
                            echo "
                        </td>
                        <td style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 14px;text-align:center;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">
                          ";
                            // line 130
                            $context["subtotal22"] = ($this->getAttribute($context["itemsInterno"], "price_min", array()) * $this->getAttribute($context["itemsInterno"], "qty", array()));
                            // line 131
                            echo "                        S/ ";
                            echo ($context["subtotal22"] ?? null);
                            echo "
                        </td>
                      </tr>
                      ";
                            // line 134
                            $context["total"] = (($context["total"] ?? null) + ($context["subtotal22"] ?? null));
                            // line 135
                            echo "                    ";
                        }
                        // line 136
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemsInterno'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "                    ";
                    $context["totalEnvio"] = twig_round(($context["costoEnvio"] ?? null));
                    // line 138
                    echo "                    ";
                    $context["totalPagar"] = (($context["total"] ?? null) + ($context["totalEnvio"] ?? null));
                    // line 139
                    echo "                    <tr>
                      <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">COSTO DE PRODUCTO</td>
                      <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                    // line 141
                    echo twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ".", " ");
                    echo "</b></td>
                    </tr>
                    <tr>
                      <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">COSTO DE ENVÍO</td>
                      <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                    // line 145
                    echo twig_number_format_filter($this->env, ($context["totalEnvio"] ?? null), 2, ".", " ");
                    echo "</b></td>
                    </tr>
                    <tr>
                      <td colspan=\"3\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 15px; font-size: 15px;text-align:left;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\">TOTAL A PAGAR</td>
                      <td colspan=\"2\" style=\"vertical-align: middle;border-bottom: 1px solid #CBCBCB; padding: 0px; font-size: 20px;text-align:right;font-family: Arial, sans-serif;  color:rgba(0,0,0,0.7);\" valign=\"top\"><b>S/. ";
                    // line 149
                    echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
                    echo "</b></td>
                    </tr>
                </tbody>
                ";
                }
                // line 153
                echo "        </table>
      </td>
    </tr>
    <tr>
      <td><br><br></td>
    </tr>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "correo/correo_compra_contra_entrega.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 153,  323 => 149,  316 => 145,  309 => 141,  305 => 139,  302 => 138,  299 => 137,  293 => 136,  290 => 135,  288 => 134,  281 => 131,  279 => 130,  273 => 127,  267 => 124,  263 => 122,  249 => 121,  243 => 118,  239 => 116,  236 => 115,  233 => 114,  228 => 113,  226 => 112,  223 => 111,  216 => 107,  209 => 103,  202 => 99,  198 => 97,  195 => 96,  192 => 95,  186 => 94,  183 => 93,  181 => 92,  175 => 89,  169 => 86,  163 => 83,  159 => 81,  145 => 80,  139 => 77,  135 => 75,  132 => 74,  129 => 73,  124 => 72,  122 => 71,  119 => 70,  117 => 69,  79 => 34,  76 => 33,  73 => 32,  70 => 31,  66 => 30,  64 => 29,  55 => 23,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "correo/correo_compra_contra_entrega.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\correo\\correo_compra_contra_entrega.twig");
    }
}
