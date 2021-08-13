<?php

/* comprador/compra_detalle_pago.twig */
class __TwigTemplate_66d7e37315cbe5c33bded09682bdb1e683217328939a6e982afd205b7a3249cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_usu.twig", "comprador/compra_detalle_pago.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_usu.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo base_url("public/");
        echo "intranet/css/gestion_pedido.css?v=12\"  media=\"screen,projection\"/>
\t<style type=\"text/css\">
\t\ttable thead tr th{
\t\t\tborder-radius: 0px;
\t\t}
\t\t.btn-flat-not{border: 1px solid #21478F;}
\t\t.btn-flat-not:hover{background-color: #21478F ;color: white !important;}
\t</style>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <main class=\"container fixContainer\">
    \t<div class=\"card\">
        \t<div class=\"card-content \">
        \t\t<div class=\"row sinBordeBottom\">
\t    \t\t\t<h5 class=\"center card-title muayuscula\">";
        // line 18
        echo $this->getAttribute(($context["pagina"] ?? null), "titulo", array());
        echo "</h5>
\t    \t\t\t<div class=\"divider\"></div>
\t    \t\t\t<span class=\"fontD2 negrita enfasisA\">¡Gracias por comprar ";
        // line 20
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo " !</span><br>
\t    \t\t\t<span class=\"enfasisB\">Estos son los datos de tu compra</span>
\t    \t\t\t<div class=\"divider\"></div><br>
\t    \t\t\t<div class=\"row centrarForzado\">
    \t\t\t\t\t<div class=\"col s12 m12 l8\">
\t\t    \t\t\t\t<span class=\"negrita\">
\t\t    \t\t\t\t\t<i class=\"material-icons left\">keyboard_arrow_right</i>Pago por depositó o transferencia
\t\t    \t\t\t\t</span>
\t\t\t\t\t   \t\t<ul>
\t\t\t\t\t   \t        <li class=\"dividerMargin\">
\t                        \t\t1. Indica que vas realizar un pago a la empresa <b>PORMAYOR.PE</b>.
\t                            </li>
\t                            <li class=\"dividerMargin\">
\t                        \t\t2. Realizar depósito al número de cuenta en soles (BCP Ahorros N° 19193690777046), CCI (código de cuenta Interbancario N° 00219119369077704659), a nombre de PorMayor.pe S.A.
\t                            </li>
\t                            <li class=\"dividerMargin\">
\t                            \t<b class=\"orange-text text-darken-1\">RECUERDA</b>
\t                            \t<br>
\t                       \t\t\t \tUna vez realices tu pago y lo notifiques a nuestra plataforma, te llamaremos lo más pronto posible para confirmar. <br> ";
        // line 38
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo " <br> ";
        }
        // line 39
        echo "\t                       \t\t\t";
        if (($this->getAttribute(($context["compra"] ?? null), "Pvoc_NumComprobante", array()) != "")) {
            // line 40
            echo "\t\t\t\t\t\t    \t\t<div class=\"col s12 m12 l12 ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                echo "center";
            } else {
                echo "left";
            }
            echo "\">
\t\t\t\t\t\t    \t\t\t\t<a class=\"btn-flat btn-flat-not black-text  ";
            // line 41
            if (($this->getAttribute(($context["compra"] ?? null), "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "orange\"";
            } elseif (($this->getAttribute(($context["compra"] ?? null), "Pvoc_EstadoComprobante", array()) == 1)) {
                echo "green\"";
            } elseif (($this->getAttribute(($context["compra"] ?? null), "Pvoc_EstadoComprobante", array()) == 2)) {
                echo "red\"";
            }
            echo "style=\"width:200px;\"><i class=\"material-icons black-text text-darken-2 left\">account_balance</i><b class=\"black-text text-darken-2\">";
            if (($this->getAttribute(($context["compra"] ?? null), "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "Por Validación";
            } elseif (($this->getAttribute(($context["compra"] ?? null), "Pvoc_EstadoComprobante", array()) == 1)) {
                echo "Aceptado";
            } elseif (($this->getAttribute(($context["compra"] ?? null), "Pvoc_EstadoComprobante", array()) == 2)) {
                echo "Rechazado";
            }
            echo "</b></a>
\t\t\t\t\t\t    \t\t\t\t<br><br>
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t";
        }
        // line 45
        echo "\t                       \t\t\t<div class=\"dividerMargin\"></div>
\t\t\t\t\t\t\t\t\t\tAgregar número de depósito o transferencia, Para validar si la operación es correcta.\t\t                       \t\t\t 
\t\t\t\t\t    \t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t    \t\t\t\t\t<a class=\"waves-effect waves-light btn modal-trigger\" style=\"width:190px;\" href=\"#modalVocher\">Registrar Comprobante</a>
\t\t\t\t\t    \t\t\t\t</div>
\t    \t\t\t\t\t\t\t<br>
\t                        \t</li>
\t                        </ul>
\t                    </div>
\t    \t\t\t</div>
    \t\t\t\t<div class=\"row infoDetalle centrarForzado\">
    \t\t\t\t<br>
    \t\t\t\t\t<div class=\"col s12 m12 l12 center\">
  \t\t\t\t\t\t\t<div class=\"anchoTotal grey lighten-2 valign-wrapper redondeo grey-text text-darken-2\" ><i class=\"material-icons left\">location_city</i>";
        // line 58
        echo twig_upper_filter($this->env, $this->getAttribute(($context["compra_info"] ?? null), "region", array()));
        echo ", ";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["compra_info"] ?? null), "provincia", array()));
        echo " - ";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["compra_info"] ?? null), "distrito", array()));
        echo " | <i class=\"material-icons left\">location_on</i>";
        echo twig_title_string_filter($this->env, $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array()));
        echo " ";
        if ($this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array())) {
            echo " - ";
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array()));
        }
        if ($this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array())) {
            echo ", ";
            echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        }
        echo "</div>    \t\t\t
\t    \t\t\t\t</div>
\t    \t\t\t</div>\t
    \t\t\t\t<div class=\"row\">
    \t\t\t\t<br>
    \t\t\t\t<div class=\"col s12 l12\">
\t\t\t      \t\t<table class=\"bordered anchoTotal\">
\t\t\t      \t\t\t<thead style=\"table-layout:fixed\" class=\"pormayor\">
\t\t\t      \t\t\t\t<tr>
\t\t\t      \t\t\t\t\t<th style=\"width:45%\">Producto</th>
\t\t\t      \t\t\t\t\t<th style=\"width:20%\">Precio</th>
\t\t\t      \t\t\t\t\t<th style=\"width:20%\">Importe S/</th>
\t\t\t      \t\t\t\t</tr>
\t\t\t      \t\t\t</thead>
\t\t\t      \t\t\t<tbody>
\t\t\t      \t\t\t\t";
        // line 73
        $context["total"] = 3;
        // line 74
        echo "\t\t\t      \t\t\t\t";
        $context["total2"] = 0;
        // line 75
        echo "\t\t\t      \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 76
        echo "\t\t\t      \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compra_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 77
            echo "\t\t\t      \t\t\t\t\t";
            if (($this->getAttribute(($context["dat"] ?? null), "Tie_IdTienda", array()) == $this->getAttribute($context["com"], "Tie_IdTienda", array()))) {
                // line 78
                echo "\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t<span class=\"enfasisB fontB2 muayuscula\">";
                // line 80
                echo $this->getAttribute($context["com"], "Pro_Nombre", array());
                echo "</span></br>
\t\t\t\t\t      \t\t\t\t\t\t";
                // line 81
                if (($this->getAttribute($context["com"], "Var_Nombre", array()) != " ")) {
                    // line 82
                    echo "\t\t\t\t\t    \t\t   \t\t\t\t\t<span class=\"enfasisB  fontB2\">";
                    echo $this->getAttribute($context["com"], "Var_Nombre", array());
                    echo " ";
                    echo $this->getAttribute($context["com"], "Vao_Nombre", array());
                    echo "</span><br>
\t\t\t\t\t      \t\t\t\t\t\t\t<div class=\"dividerMargin\"></div>
\t\t\t\t\t    \t\t   \t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t    \t\t   \t\t\t\t<b>";
                echo $this->getAttribute($context["com"], "Pcd_Cantidad", array());
                echo " unid(s)</b>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t";
                // line 88
                $context["precioventa"] = $this->getAttribute($context["com"], "Pcd_Precio", array());
                // line 89
                echo "\t\t\t\t\t      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
                echo $this->getAttribute(($context["ved"] ?? null), "Pcd_IdSKU", array());
                echo "\">";
                echo twig_number_format_filter($this->env, ($context["precioventa"] ?? null), 2, ".", " ");
                echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td id=\"tdimporte";
                // line 91
                echo $this->getAttribute($context["com"], "Pcd_IdSKU", array());
                echo "\">
\t\t\t\t\t      \t\t\t\t\t\t<span id=\"importe";
                // line 92
                echo $this->getAttribute($context["com"], "Pcd_IdSKU", array());
                echo "\">";
                echo twig_number_format_filter($this->env, $this->getAttribute($context["com"], "Pcd_Importe", array()), 2, ".", " ");
                echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t      \t\t\t\t";
                // line 96
                $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["com"], "Pcd_Importe", array()));
                // line 97
                echo "\t\t\t\t\t      \t\t\t\t";
                $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["com"], "Pcd_Importe", array()));
                // line 98
                echo "\t\t\t\t\t      \t\t\t\t";
                $context["totalEnvio"] = $this->getAttribute(($context["compra"] ?? null), "Pac_Envio", array());
                // line 99
                echo "\t\t\t\t\t      \t\t\t";
            }
            // line 100
            echo "\t\t\t            \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t      \t\t\t</tbody>
\t\t\t            \t<tfoot>
\t\t      \t\t\t\t";
        // line 103
        $context["totalEnvio"] = twig_round(($context["totalEnvio"] ?? null));
        // line 104
        echo "\t\t      \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 105
        echo "\t\t\t      \t\t\t\t<tr>
\t\t                \t\t\t<input type=\"hidden\" value=\"";
        // line 106
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
\t\t                \t\t\t<td colspan=\"2\" class=\"fontA\" align=\"left\">
\t\t                \t\t\t\t<b>Costo de producto</b> 
\t\t                \t\t\t<td class=\"center-align fontA\" colspan=\"2\">
\t\t                \t\t\t\t<b>S/ <span>";
        // line 110
        echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
        echo "</span></b>
\t\t                \t\t\t</td>
\t\t                \t\t</tr>
\t\t                \t\t<tr>
\t\t                \t\t\t<input type=\"hidden\" value=\"";
        // line 114
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
\t\t                \t\t\t<td colspan=\"2\" class=\"fontA\" align=\"left\">
\t\t                \t\t\t\t<b>Gastos de despacho</b> 
\t\t                \t\t\t<td class=\"center-align fontA\" colspan=\"2\">
\t\t                \t\t\t\t<b>S/ <span>";
        // line 118
        echo twig_number_format_filter($this->env, $this->getAttribute(($context["compra"] ?? null), "Pac_Envio", array()), 2, ".", " ");
        echo "</span></b>
\t\t                \t\t\t</td>
\t\t                \t\t</tr>
\t\t                \t\t<tr>
\t\t                \t\t\t<input type=\"hidden\" value=\"";
        // line 122
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
\t\t                \t\t\t<td colspan=\"2\" class=\"fontA \" align=\"left\">
\t\t                \t\t\t\t<b>Total a pagar</b> 
\t\t                \t\t\t<td class=\"center-align fontA\" colspan=\"2\">
\t\t                \t\t\t\t<b>S/ <span>";
        // line 126
        echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
        echo "</span></b>
\t\t                \t\t\t</td>
\t\t                \t\t</tr>
\t \t\t           \t\t</tfoot>\t
\t\t\t      \t\t</table>
    \t\t\t\t</div> 
\t\t\t\t</div>
\t\t</div>
\t</main>
\t
\t<div id=\"modalVocher\" class=\"modal\" style=\"z-index:9999 !important;height: 390px;";
        // line 136
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "width: 100%!important;";
        } else {
            echo "width: 60%!important;";
        }
        echo "\">
\t    <div class=\"modal-content\">
\t\t<div class=\"collapsible-header enfasisA\"><i class=\"enfasisB material-icons\">format_align_justify</i>INFORMACIÓN DEL COMPROBANTE</div>
\t      \t<div class=\"row\">
                <div class=\"input-field col s12 m6 l6\">
                    <input type=\"hidden\" id=\"idVoucher\" name=\"idVoucher\" class=\"validate\" value=\"";
        // line 141
        echo $this->getAttribute(($context["compra"] ?? null), "Pvoc_idPago_Voucher", array());
        echo "\" required=\"\">
                    <input type=\"hidden\" id=\"idVenta\" name=\"idVenta\" value=\"";
        // line 142
        echo $this->getAttribute(($context["compra"] ?? null), "Pac_IdPago_Compra", array());
        echo "\" required=\"\">
                    <input type=\"number\" id=\"Numcomprobante\" class=\"validate\" name=\"Numcomprobante\" required=\"\" value=\"";
        // line 143
        echo $this->getAttribute(($context["compra"] ?? null), "Pvoc_NumComprobante", array());
        echo "\">
                    <label for=\"Numcomprobante\" class=\"active\">NUMERO DE COMPROBANTE</label>
                </div>
                <div class=\"input-field col s12 m6 l6\">
                     <input type=\"date\" id=\"Fechacomprobante\" class=\"datepicker\" name=\"Fechacomprobante\" value=\"";
        // line 147
        echo $this->getAttribute(($context["compra"] ?? null), "Pvoc_FechaComprobante", array());
        echo "\">
                     <label for=\"Fechacomprobante\" class=\"active truncate\" style=\"font-size:18px;\">FECHA DEL COMPROBANTE</label>
                </div>
                <div class=\"input-field col s12 m12 l12\">
                \t<label for=\"us\" class=\"active truncate\" style=\"font-size:18px;\">SUBIR FOTO DEL COMPROBANTE</label>
\t                    <input type=\"hidden\" id=\"nameImg\" name=\"nameImg\" value=\"";
        // line 152
        echo $this->getAttribute(($context["compra"] ?? null), "Pvoc_LogoPago", array());
        echo "\">
\t                     <div class=\"file-field input-field\">
\t\t\t\t\t      <div class=\"btn\">
\t\t\t\t\t        <span>Vauche</span>
\t\t\t\t\t        <input id=\"logoImg\" type=\"file\" accept=\"image/*\">
\t\t\t\t\t      </div>
\t\t\t\t\t      <div class=\"file-path-wrapper\">
\t\t\t\t\t        <input class=\"file-path validate\" type=\"text\">
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
                </div>
            </div>
\t    </div>
\t    <div class=\"modal-footer\">               
\t    \t\t<a class=\"btn black-text white modal-action modal-close waves-effect waves-red btn-flat\">CERRAR</a>
                <a id=\"btnRegistrarComprobante\" class=\"btn green white-text\">Cargar pago</a>
            </div>
\t    </div>
  \t</div>
";
    }

    // line 173
    public function block_script($context, array $blocks = array())
    {
        // line 174
        echo "\t<script src=\"";
        echo base_url("public/");
        echo "js/comprador/preferencias.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "comprador/compra_detalle_pago.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 174,  368 => 173,  344 => 152,  336 => 147,  329 => 143,  325 => 142,  321 => 141,  309 => 136,  296 => 126,  289 => 122,  282 => 118,  275 => 114,  268 => 110,  261 => 106,  258 => 105,  255 => 104,  253 => 103,  249 => 101,  243 => 100,  240 => 99,  237 => 98,  234 => 97,  232 => 96,  223 => 92,  219 => 91,  211 => 89,  209 => 88,  202 => 85,  193 => 82,  191 => 81,  187 => 80,  183 => 78,  180 => 77,  175 => 76,  172 => 75,  169 => 74,  167 => 73,  134 => 58,  119 => 45,  98 => 41,  89 => 40,  86 => 39,  82 => 38,  61 => 20,  56 => 18,  50 => 14,  47 => 13,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "comprador/compra_detalle_pago.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\comprador\\compra_detalle_pago.twig");
    }
}
