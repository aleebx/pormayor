<?php

/* vendedor/detalle_venta.twig */
class __TwigTemplate_1c5d87f8b33e7167281e22e070bb2351f9975f0e4a04ade8868d17b850b197b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/detalle_venta.twig", 1);
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://printjs-4de6.kxcdn.com/print.min.css\"  media=\"screen,projection\"/>
  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
\t<style type=\"text/css\">
\t\tblockquote{
\t\t\tborder-left: 5px solid #121212;
\t\t\tfont-size: 16px;
\t\t}
\t\ttable thead tr th{
\t\t\tborder-radius: 0px;
\t\t}
\t\t.paddingLi{
\t\t\tpadding: 3px 20px !important;
\t\t}
\t\t.select2 {
\t\t\twidth: 90% !important;
\t\t}
\t</style>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    <main class=\"container\" style=\"width:95%\">
    \t<div class=\"card\">
        \t<div class=\"card-content sinPadding\">
        \t\t<div class=\"row cardContentFix\">
        \t\t\t<h5 class=\"center card-title\"><b>DETALLE DE VENTA</b></h5>
\t    \t\t\t<div class=\"divider\"></div><br>
\t    \t\t\t<div class=\"row\">
\t    \t\t\t\t<div class=\"col s12 m4 l4 center\">
\t    \t\t\t\t\t<span style=\"padding:5px;border-radius:4px;\" class=\"negrita black-text fontA ";
        // line 33
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1)) {
            echo "green accent-4\">NUEVA VENTA";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2)) {
            echo "light-green accent-4\">VENTA CONFIRMADA";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 3)) {
            echo "lime accent-2\">LISTO PARA RECOGO";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 4)) {
            echo "deep-orange accent-2\">EN EL CORRIER";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 5)) {
            echo " green darken-4\">ENTREGADO";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 6)) {
            echo "red\">ANULADO";
        }
        echo "</span>
\t    \t\t\t\t\t<br/>
\t    \t\t\t\t</div>
\t    \t\t\t\t";
        // line 36
        if ((($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA") || (($context["vauche"] ?? null) && (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2))))) {
            // line 37
            echo "\t    \t\t\t\t<div class=\"col s12 m4 l4\">
\t    \t\t\t\t\t<a class=\"btn negrita blue\" onclick=\"printJS('printJS-form', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">print</i>IMPRIMIR ROTULADO</a>
\t    \t\t\t\t</div>\t    \t\t\t\t
\t    \t\t\t\t<div class=\"col s12 m4 l4\">
\t    \t\t\t\t\t<a class=\"btn negrita green\" onclick=\"printJS('printJS-form2', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">list</i>IMPRIMIR VENTA</a>
\t    \t\t\t\t</div>\t    \t\t\t\t
\t    \t\t\t\t";
        }
        // line 44
        echo "\t    \t\t\t\t<div class=\"col s12 l12\">
\t    \t\t\t\t<select  class=\"selecEstado browser-default\">
    \t\t\t\t\t\t<option value=\"NO\" ";
        // line 46
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "NO")) {
            echo "selected ";
        }
        echo ">CONTRAENTREGA</option>
    \t\t\t\t\t\t<option value=\"TIENDA\" ";
        // line 47
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "selected ";
        }
        echo ">RECOGO EN TIENDA</option>
    \t\t\t\t\t\t<option value=\"TDO\" ";
        // line 48
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TDO")) {
            echo "selected";
        }
        echo ">PROVINCIA - DEPOSITO/TRANSFERENCIA</option>
\t    \t\t\t\t</select>
\t    \t\t\t\t";
        // line 50
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "NO")) {
            // line 51
            echo "\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center purple\"><span class=\"fontA\"><b>MÉTODO DE PAGO: PAGO CONTRA ENTREGA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } elseif (($this->getAttribute(        // line 54
($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "\t    \t\t\t\t    
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center yellow\"><span class=\"fontA\"><b>RETIRO EN TIENDA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } elseif (($this->getAttribute(        // line 58
($context["venta"] ?? null), "Pac_Banco", array()) == "Visanet")) {
            echo "   
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center blue\"><span class=\"fontA\"><b>MÉTODO DE PAGO: TARJETA DE CRÉDITO/DEBITO</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } else {
            // line 62
            echo "   
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center red\"><span class=\"fontA\"><b>MÉTODO DE PAGO: DEPOSITO/TRANSFERENCIA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        }
        // line 67
        echo "\t    \t\t\t\t</div>
\t    \t\t\t\t";
        // line 69
        echo "\t    \t\t\t\t<div class=\"col s12 l6\"> 
\t\t    \t\t\t\t<table class=\"bordered striped\">
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">CLIENTE</td>
\t\t    \t\t\t\t\t\t<td class=\"nomV\" contenteditable=\"true\">";
        // line 73
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">DNI/CE/OTRO</td>
\t\t    \t\t\t\t\t\t<td class=\"dniV\" contenteditable=\"true\">";
        // line 77
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">TELÉFONO</td>
\t\t    \t\t\t\t\t\t<td class=\"tlfV\" contenteditable=\"true\">";
        // line 81
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "</b> <a href=\"https://api.whatsapp.com/send?phone=51";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "&text=Hola,%20por%20favor%20confirme%20su%20compra%20en%20PorMayor.pe%20para%20realizar%20el%20envío.\"><img src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\" height=\"25\" class=\"positionRelative right\"></a></td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">FECHA COMPRA</td>
\t\t    \t\t\t\t\t\t<td class=\"\">";
        // line 85
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t";
        // line 87
        if ($this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array())) {
            // line 88
            echo "\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">SOLICITO FACTURA - RUC</td>
\t\t    \t\t\t\t\t\t<td class=\"rucV\" contenteditable=\"true\">";
            // line 90
            echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array());
            echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t";
        }
        // line 93
        echo "\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">VENDEDOR</td>
\t\t    \t\t\t\t\t\t<td class=\"\">";
        // line 95
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t</table>
\t\t    \t\t\t\t<div class=\" center\">
\t    \t\t\t\t\t<a class=\"btn green updateCliente\" data-usu=\"";
        // line 99
        echo $this->getAttribute(($context["venta"] ?? null), "Usu_IdUsuario", array());
        echo "\" data-idp=\"";
        echo ($context["idventa"] ?? null);
        echo "\" >Guardar cambios</a>\t\t    \t\t\t\t
\t\t    \t\t\t</div>
\t\t    \t\t\t</div>\t
\t    \t\t\t\t<div class=\"col s12 l6\" style=\"padding-bottom: 10px;\">
\t    \t\t\t\t<table class=\"bordered striped\">
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">DEPARTEMANTO</td>
\t    \t\t\t\t\t\t<td class=\"\">";
        // line 106
        echo $this->getAttribute(($context["compra_info"] ?? null), "region", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">PROVINCIA</td>
\t    \t\t\t\t\t\t<td class=\"\">";
        // line 110
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">DISTRITO</td>
\t    \t\t\t\t\t\t<td class=\"\">";
        // line 114
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">DIRECCIÓN</td>
\t    \t\t\t\t\t\t<td class=\"dirV\" contenteditable=\"true\">";
        // line 118
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo " <b>RETIRO EN TIENDA </b> ";
        }
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">REFERENCIA</td>
\t    \t\t\t\t\t\t<td class=\"refV\" contenteditable=\"true\">";
        // line 122
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">AGENCIA</td>
\t    \t\t\t\t\t\t<td class=\"ageV\" contenteditable=\"true\">";
        // line 126
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t</table>
\t\t    \t\t\t</div>
\t\t    \t\t\t
\t\t    \t\t\t";
        // line 155
        echo "\t\t    \t\t\t<div class=\"col s12 l12 green lighten-5\" >\t\t    \t\t\t\t
\t\t\t    \t\t\t<table class=\"bordered centered\">
\t\t\t            <thead>
\t\t\t            \t<tr>
\t\t\t            \t\t<th>Medio</th>
\t\t\t            \t\t<th>Monto</th>
\t\t\t            \t\t<th>Estado</th>
\t\t\t            \t\t<th>#</th>
\t\t\t            \t\t<th>Fecha</th>
\t\t\t            \t\t<th></th>
\t\t\t            \t</tr>
\t\t\t            </thead>
\t\t\t            <tbody>            \t
\t\t\t            \t";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 169
            echo "\t\t\t            \t\t<tr>
\t\t\t            \t\t\t<td>";
            // line 170
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 171
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 172
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 173
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 174
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
\t\t\t            \t\t\t<td><img src=\"";
            // line 175
            echo ($context["ruta_img"] ?? null);
            echo "/vauche/";
            echo $this->getAttribute($context["v"], "Pvoc_LogoPago", array());
            echo "\" class=\"materialboxed\" width=\"30px\"></td>
\t\t\t            \t\t</tr>
\t\t\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t            </tbody>
\t\t            </table><br>
\t\t    \t\t\t</div>

\t    \t\t\t\t<div class=\"col s12 l12\">
\t    \t\t\t\t\t";
        // line 183
        if ((($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2))) {
            // line 184
            echo "\t    \t\t\t\t\t<a data-target=\"modalProducto\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">add</i>Agregar producto</a>
\t    \t\t\t\t\t<a data-target=\"modalVocher\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">add</i>Pagos</a>
\t    \t\t\t\t\t<a data-target=\"modalFactura\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">list</i>Factura</a>
\t    \t\t\t\t\t<a data-target=\"modalBoleta\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">list</i>Boleta</a>
\t    \t\t\t\t\t<a class=\"btn-flat right red-text modal-trigger\" data-target=\"modalAnula\"><i class=\"material-icons left\">clear</i>ANULAR VENTA</a>
\t    \t\t\t\t\t";
        }
        // line 190
        echo "\t    \t\t\t\t\t";
        if (((($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2)) && ($context["vauche"] ?? null))) {
            // line 191
            echo "\t    \t\t\t\t\t<a class=\"btn-flat right green-text modal-trigger\" data-target=\"modalConfirma\"><i class=\"material-icons left\">check</i>ENTREGADA</a>
\t    \t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t      \t\t<table class=\"bordered\"; style=\"width: 100%;\">
\t\t\t\t      \t\t\t<thead class=\"colorPrincipal\">
\t\t\t\t      \t\t\t\t<tr class=\"pormayor black-text\">
\t\t\t\t      \t\t\t\t\t<th></th>
\t\t\t\t      \t\t\t\t\t<th>Producto</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\">Cantidad</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\">Precio S/</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\">Importe S/</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\"></th>
\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t      \t\t\t</thead>
\t\t\t\t      \t\t\t<tbody>
\t\t\t\t      \t\t\t\t";
        // line 205
        $context["total2"] = 0;
        // line 206
        echo "\t\t\t\t      \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 207
        echo "\t\t\t\t      \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ved"]) {
            // line 208
            echo "\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t<img class=\"redondeo centrarForzado\" src=\"";
            // line 210
            echo ($context["ruta_img"] ?? null);
            if ($this->getAttribute($context["ved"], "SKU_Img", array())) {
                echo $this->getAttribute($context["ved"], "SKU_Img", array());
            } else {
                echo $this->getAttribute($context["ved"], "Prf_Img", array());
            }
            echo "\" height=\"50\">
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t";
            // line 213
            echo $this->getAttribute($context["ved"], "Pro_Nombre", array());
            echo "</br>
\t\t\t\t\t    \t\t   \t\t\t\t<span class=\"enfasisB black-text\">";
            // line 214
            echo $this->getAttribute($context["ved"], "SKU_Color", array());
            echo "</span></br>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span class=\"center\">";
            // line 217
            echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
            echo "</span></br>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
            // line 220
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Precio", array()), 2, ".", " ");
            echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td id=\"tdimporte";
            // line 222
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\" class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span id=\"importe";
            // line 223
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Importe", array()), 2, ".", " ");
            echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t";
            // line 226
            if ((twig_length_filter($this->env, ($context["venta_detalle"] ?? null)) > 1)) {
                echo " 
\t\t\t\t\t      \t\t\t\t\t\t<a class=\"btn-flat delPro\" data-idvd=\"";
                // line 227
                echo $this->getAttribute($context["ved"], "Pcd_IdPago_Compra_Detalle", array());
                echo "\" data-ids=\"";
                echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
                echo "\" data-cant=\"";
                echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
                echo "\"><i class=\"material-icons red-text\">clear</i></a>
\t\t\t\t\t      \t\t\t\t\t\t";
            }
            // line 229
            echo "\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t      \t\t\t\t";
            // line 231
            $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["ved"], "Pcd_Importe", array()));
            // line 232
            echo "\t\t\t\t\t      \t\t\t\t";
            $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["ved"], "Pce_CostoEnvio", array()));
            // line 233
            echo "\t\t\t\t            \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ved'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "\t\t\t\t      \t\t\t</tbody>
\t\t\t\t      \t\t\t<tfoot>
\t\t\t\t      \t\t\t\t";
        // line 236
        $context["totalEnvio"] = twig_round($this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()));
        // line 237
        echo "\t\t\t\t      \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 238
        echo "\t\t\t\t      \t\t\t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t \tTOTAL IMPORTE
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align\" colspan=\"2\">
\t\t\t                \t\t\t\t<span>";
        // line 243
        echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
        echo "</span>
\t\t\t                \t\t\t</td>
\t\t\t                \t\t</tr>
\t\t\t                \t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t\tTOTAL ENVÍO
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align envioV\" colspan=\"2\" contenteditable=\"true\">
\t\t\t                \t\t\t\t";
        // line 251
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array());
        echo "
\t\t\t                \t\t\t</td>
\t\t\t                \t\t</tr>
\t\t\t                \t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t\tTOTAL A PAGAR
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align\" colspan=\"2\">
\t\t\t                \t\t\t\t<b style=\"font-size:2em;\">";
        // line 259
        echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
        echo "</b>
\t\t\t                \t\t\t</td>
\t\t\t                \t\t</tr>
\t\t\t            \t\t</tfoot>
\t\t\t\t      \t\t</table>
\t    \t\t\t\t</div>
\t    \t\t\t</div>
    \t\t\t</div>
\t\t\t</div>
\t\t</div>
    </main>
    <div id=\"modalVoucher\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content\" id=\"loadEditVocuher\"></div>
    </div>
    <div id=\"modalFactura\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content\">
        \t<span class=\"card-title\">GENERAR FACTURA DEL CLIENTE ";
        // line 275
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</span>
          <div class=\"row\">
\t        <div class=\"input-field col s6\">
\t          <input id=\"razonSocial\" type=\"text\" class=\"validate\" value=\"";
        // line 278
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "\">
\t          <label for=\"razonSocial\">Razón Social</label>
\t        </div>
\t        <div class=\"input-field col s6\">
\t          <input type=\"text\" id=\"ruc\" class=\"validate\" value=\"";
        // line 282
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array());
        echo "\">
\t          <label for=\"ruc\">RUC</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"email\" class=\"validate\">
\t          <label for=\"email\">Correo Electronico</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"tlf\" class=\"validate\" value=\"";
        // line 290
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlf\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeo\" class=\"validate\" value=\"";
        // line 294
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\" disabled>
\t          <label for=\"ubigeo\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"direccion\" class=\"validate\" value=\"";
        // line 298
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "RETIRO EN TIENDA ";
        }
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_DtoInt", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array());
        echo " Referencia: ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "\">
\t          <label for=\"direccion\">Dirección</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t        \t<a class=\"btn gFact green\" data-idv=\"";
        // line 302
        echo ($context["idventa"] ?? null);
        echo "\">GENERAR FACTURA</a>
\t        \t<a class=\"btn impB2 orange\" href=\"\" disabled>IMPRIMIR BOLETA</a>
\t       \t</div>
\t      </div>
        </div>
    </div>
    <div id=\"modalBoleta\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content\">
        \t<span class=\"card-title\">GENERAR BOLETA DEL CLIENTE ";
        // line 310
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</span>
          <div class=\"row\">
\t        <div class=\"col s4\">
\t          <select id=\"selectDoc\" class=\"browser-default\">
\t          \t<option value=\"1\">DNI</option>
\t          \t<option value=\"4\">CARNET EXTRANJERIA</option>
\t          \t<option value=\"7\">PASAPORTE</option>
\t          \t<option value=\"0\">OTRO DOCUMENTO</option>
\t          </select>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"numerodoc\" class=\"validate\" value=\"";
        // line 321
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        echo "\">
\t          <label for=\"numerodoc\">Número Documento</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input id=\"razonSocial2\" type=\"text\" class=\"validate\" value=\"";
        // line 325
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "\">
\t          <label for=\"razonSocial2\">Nombre</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"email\" class=\"validate\">
\t          <label for=\"email\">Correo Electronico</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"tlf\" class=\"validate\" value=\"";
        // line 333
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlf\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeo\" class=\"validate\" value=\"";
        // line 337
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\" disabled>
\t          <label for=\"ubigeo\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"direccion\" class=\"validate\" value=\"";
        // line 341
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "RETIRO EN TIENDA ";
        }
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_DtoInt", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array());
        echo " Referencia: ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "\">
\t          <label for=\"direccion\">Dirección</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t        \t<a class=\"btn gBoleta green\" data-idv=\"";
        // line 345
        echo ($context["idventa"] ?? null);
        echo "\">GENERAR BOLETA</a>
\t        \t<a class=\"btn impB orange\" href=\"\" disabled>IMPRIMIR BOLETA</a>
\t       \t</div>
\t      </div>
        </div>
    </div>
    <div id=\"modalConfirma\" class=\"modal light-green\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content center\">
        \t<p> SOLO DE CONFIRMAR CUANDO SE HAYA ENTREGADO LA COMPRA AL CLIENTE Y SE HAYA VERIFICADO QUE TODOS LOS PRODUCTOS ENTREGADOS
        SON LOS QUE APRECEN EN SU COMPRA. SI ES ASÍ DAR CLICK EN <b>CONFIRMAR</b>.</p>
        \t<a class=\"btn green confV\" data-idv=\"";
        // line 355
        echo ($context["idventa"] ?? null);
        echo "\">CONFIRMAR</a>
        </div>
    </div>
    <div id=\"modalAnula\" class=\"modal amber\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content center\">
        \t<p>SOLO DE ANULAR CUANDO SE HAYA CONFIRMADO LA CANCELACIÓN POR PARTE DEL CLIENTE O HAYAN PASADO 24 HORAS DE REALIZO LA COMPRA Y NO HUBIESE COMUNICACIÓN. SI ES ASÍ DAR CLICK EN <b>ANULAR</b></p>
        \t<a class=\"btn red anuV\" data-idv=\"";
        // line 361
        echo ($context["idventa"] ?? null);
        echo "\">ANULAR</a>
        </div>
    </div>

    <div id=\"modalProducto\" class=\"modal\" style=\"z-index:9999 !important;width: 70%!important;\">
        <div class=\"modal-content row\">
        \t<span class=\"modal-title\">AGREGAR PRODUCTO</span>
        \t<div class=\"col s12 l12\">
                  <select class=\"browser-default select2\" id=\"selProducto\">
                  \t<option value=\"0\" selected> Seleccione el producto</option>
                    ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 372
            echo "                      <option value=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-pre=\"";
            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
            echo "\" data-ids=\"";
            echo $this->getAttribute($context["pro"], "SKU_IdSKU", array());
            echo "\" data-var=\"";
            echo $this->getAttribute($context["pro"], "SKU_Color", array());
            echo "\" data-dispo=\"";
            echo $this->getAttribute($context["pro"], "SKU_StockDisponible", array());
            echo "\">";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo " ";
            echo $this->getAttribute($context["pro"], "SKU_Color", array());
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                  </select><br><br>
            </div>
            <div class=\"col s4\">
              <div class=\"form-group\">
                <label for=\"stockD\">STOCK DISPONIBLE</label>
                <input class=\"form-control\" type=\"number\" id=\"stockD\" value=\"\" disabled>
              </div>
            </div>
            <div class=\"col s4\">
              <div class=\"form-group\">
                <label for=\"cantP\">Cantidad</label>
                <input class=\"form-control\" type=\"number\" id=\"cantP\" value=\"1\">
              </div>
            </div>
            <div class=\"col s4\">
              <div class=\"form-group\">
                <label for=\"precioP\">Precio</label>
                <input class=\"form-control\" type=\"number\" id=\"precioP\" value=\"0\">
              </div>
            </div>
            <div class=\"col s12\">
            \t<a class=\"btn btn-success btn-lg btn-block add-row\"><i class=\"material-icons left\">add</i>AGREGAR PRODUCTO</a>
            </div>            
            <div class=\"col s12\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th style=\"width: 10px\">#</th>
                      <th>PRODUCTO</th>
                      <th>CANTIDAD</th>
                      <th>PRECIO</th>
                      <th>SUBTOTAL</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id=\"tablaListado\" class=\"grey lighten-4\">                   
                  </tbody>
                </table>
            </div>
            <div class=\"col s12\">
            \t<a class=\"btn green btn-lg btn-block addpedido\" data-idv=\"";
        // line 414
        echo ($context["idventa"] ?? null);
        echo "\"><i class=\"material-icons left\">add_box</i>AGREGAR AL PEDIDO</a>
            </div>
        </div>
    </div>
    <div class=\"hide\" id=\"printJS-form\">   
    \t<table style=\"border:1px solid black;font-variant: small-caps;\">
    \t\t<tr>
    \t\t\t<td style=\"padding:50px;\">
    \t\t\t\t<img src=\"";
        // line 422
        echo ($context["ruta_img"] ?? null);
        echo "logoPM.jpg\">
    \t\t\t\t<b>WWW.PORMAYOR.PE</b><br>
    \t\t\t\tPORMAYOR.PE S.A.
    \t\t\t\tRUC: 20603706804
    \t\t\t\tJIRÓN ANDAHUAYLAS 251, INTERIOR 208-209<br> CERDADO DE LIMA, LIMA.<br>
    \t\t\t\t+51 923500413
    \t\t\t</td>
    \t\t\t<td style=\"padding:5px;\">
    \t\t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\t";
        // line 431
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 433
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 434
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 435
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 436
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 440
        echo $this->getAttribute(($context["compra_info"] ?? null), "region", array());
        echo " <br> <b>Provincia:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo " <br> <b>Distrito:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo " <br> <b>Dirección:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_DtoInt", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array());
        echo " | <b>Referencia:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "
\t\t \t\t\t</div>
\t\t \t\t</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td colspan=\"2\" aling=\"center\" style=\"font-size:30px;padding-left:270px;\">¡GRACIAS POR COMPRAR CON NOSOTROS!</td>
    \t\t</tr>
    \t</table>
    </div>

    <div class=\"hide\" id=\"printJS-form2\">
    \t<table style=\"padding:0px;\">
    \t\t<tr>
    \t\t\t<td align=\"center\">
    \t\t\t\t<b>DETALLE DE VENTA ";
        // line 454
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b> 
\t\t \t\t</td>
    \t</table> 
        <table>
    \t\t<tr>
    \t\t\t<td width=\"50%\" align=\"\">
    \t\t\t\t<div style=\"font-size:14px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\tFecha de venta: ";
        // line 461
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 463
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 464
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 465
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 466
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t</td>
    \t\t\t<td  width=\"50%\" align=\"\">
\t\t \t\t\t<div style=\"font-size:14px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 472
        echo $this->getAttribute(($context["compra_info"] ?? null), "region", array());
        echo " <br> <b>Provincia:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo " <br> <b>Distrito:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo " <br> <b>Dirección:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_DtoInt", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array());
        echo " | <b>Referencia:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "<br>
\t\t \t\t\t\tVendedor:<b>";
        // line 473
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</b>
\t\t \t\t\t</div>
\t\t \t\t</td>
    \t\t</tr>
    \t</table>   
\t\t<table class=\"bordered\"; style=\"width: 100%;\">
  \t\t\t<thead >
  \t\t\t\t<tr>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\"></th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\"></th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Producto</th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Cantidad</th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Precio S/</th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Importe S/</th>
  \t\t\t\t</tr>
  \t\t\t</thead>
  \t\t\t<tbody>
  \t\t\t\t";
        // line 491
        echo "  \t\t\t\t";
        $context["total2"] = 0;
        // line 492
        echo "  \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 493
        echo "  \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ved"]) {
            // line 494
            echo "      \t\t\t\t<tr>
      \t\t\t\t\t<td class=\"\">
      \t\t\t\t\t\t<input type=\"checkbox\" name=\"\"> 
      \t\t\t\t\t</td>
      \t\t\t\t\t<td class=\"\">
      \t\t\t\t\t\t<img class=\"redondeo centrarForzado\" src=\"";
            // line 499
            echo ($context["ruta_img"] ?? null);
            if ($this->getAttribute($context["ved"], "SKU_Img", array())) {
                echo $this->getAttribute($context["ved"], "SKU_Img", array());
            } else {
                echo $this->getAttribute($context["ved"], "Prf_Img", array());
            }
            echo "\" height=\"30\">
      \t\t\t\t\t</td>
      \t\t\t\t\t<td>
      \t\t\t\t\t\t";
            // line 502
            echo $this->getAttribute($context["ved"], "Pro_Nombre", array());
            echo "</br>
    \t\t   \t\t\t\t<span class=\"enfasisB black-text\">";
            // line 503
            echo $this->getAttribute($context["ved"], "SKU_Color", array());
            echo "</span></br>
    \t\t\t\t\t</td>

    \t\t\t\t\t<td align=\"center\">
      \t\t\t\t\t\t<span class=\"center\">";
            // line 507
            echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
            echo "</span></br>
    \t\t\t\t\t</td>
      \t\t\t\t\t<td class=\"center\">

      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
            // line 511
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Precio", array()), 2, ".", " ");
            echo "</span>
      \t\t\t\t\t</td>
      \t\t\t\t\t<td id=\"tdimporte";
            // line 513
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\" class=\"center\">
      \t\t\t\t\t\t<span id=\"importe";
            // line 514
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Importe", array()), 2, ".", " ");
            echo "</span>
      \t\t\t\t\t</td>
      \t\t\t\t</tr>
      \t\t\t\t";
            // line 517
            $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["ved"], "Pcd_Importe", array()));
            // line 518
            echo "      \t\t\t\t";
            $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["ved"], "Pce_CostoEnvio", array()));
            // line 519
            echo "        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ved'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "  \t\t\t</tbody>
  \t\t\t<tfoot>
  \t\t\t\t";
        // line 522
        $context["totalEnvio"] = twig_round($this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()));
        // line 523
        echo "  \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 524
        echo "  \t\t\t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 525
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"5\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL IMPORTE</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 529
        echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 533
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"5\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL ENVÍO</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 537
        echo twig_number_format_filter($this->env, $this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 541
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"5\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL A PAGAR</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 545
        echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
    \t\t</tfoot>
  \t\t</table>
  \t\t<br>
  \t\t<table style=\"width:100%\">
        <thead>
        \t<tr>
        \t\t<th>Medio</th>
        \t\t<th>Monto</th>
        \t\t<th>Estado</th>
        \t\t<th>#</th>
        \t\t<th>Fecha</th>
        \t</tr>
        </thead>
        <tbody>
        ";
        // line 562
        $context["montV"] = 0;
        echo "          \t
        \t";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 564
            echo "        \t\t<tr>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 565
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 566
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 567
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 568
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 569
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
        \t\t\t";
            // line 570
            $context["montV"] = (($context["montV"] ?? null) + $this->getAttribute($context["v"], "Pvoc_Monto", array()));
            // line 571
            echo "        \t\t</tr>
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo "        </tbody>
      </table><br>
        <h4 style=\"color: red;\">";
        // line 575
        if ((($context["montV"] ?? null) == ($context["totalPagar"] ?? null))) {
            echo "PEDIDO PROCESADO CON ÉXITO - ENTREGAR";
        } else {
            echo "TOTAL DE COMPRABANTES NO COINCIDEN CON EL TOTAL DEL PEDIDO - POR FAVOR VERIFICAR PAGOS";
        }
        echo "</h4> 
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tDespachado por:____________________________
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\tRevisado por:____________________________
\t\t\t\t</td>
\t\t\t</tr> 
\t\t</table>
    </div>
    <div id=\"modalVocher\" class=\"modal\" style=\"z-index:9999 !important;";
        // line 587
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "width: 100%!important;";
        } else {
            echo "width: 70%!important;";
        }
        echo "\">
\t    <div class=\"modal-content\" id=\"loadTienda\">
\t\t\t<div class=\"collapsible-header enfasisA\"><i class=\"enfasisB material-icons\">format_align_justify</i>INFORMACIÓN DEL COMPROBANTE</div>
\t      \t<div class=\"row\">
                <div class=\"col s12 m6 l4\">
                \t<label for=\"us3\">MEDIO DE PAGO</label>
                <select id=\"selPag\" class=\"browser-default\">
                \t<option value=\"EFECTIVO\">EFECTIVO</option>
                \t<option value=\"BCP\">BCP</option>
                \t<option value=\"INTERBANK\">INTERBANK</option>
                \t<option value=\"SCOTIABANK\">SCOTIABANK</option>
                </select>
                </div>
                <div class=\"input-field col s12 m6 l4\">
                    <input type=\"number\" id=\"montoV\" class=\"validate\" name=\"montoV\" required=\"\" value=\"";
        // line 601
        echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
        echo "\">
                    <label for=\"montoV\" class=\"active\">MONTO</label>
                </div>
                <div class=\"input-field col s12 m6 l4\">
                    <input type=\"number\" id=\"Numcomprobante\" class=\"validate\" name=\"Numcomprobante\" required=\"\">
                    <label for=\"Numcomprobante\" class=\"active\">NUMERO DE COMPROBANTE</label>
                </div>
                <div class=\"input-field col s12 m6 l4\">
                     <input type=\"date\" id=\"Fechacomprobante\" class=\"datepicker\" name=\"Fechacomprobante\">
                     <label for=\"Fechacomprobante\" class=\"active truncate\" style=\"font-size:18px;\">FECHA DEL COMPROBANTE</label>
                </div>
                <div class=\"input-field col s12 m12 l8\">
                \t<label for=\"us\" class=\"active truncate\" style=\"font-size:18px;\">SUBIR FOTO DEL COMPROBANTE</label>
\t                 <div class=\"file-field input-field\">
\t\t\t\t\t\t\t      <div class=\"btn\">
\t\t\t\t\t\t\t        <span>Vauche</span>
\t\t\t\t\t\t\t        <input id=\"logoImg\" type=\"file\" accept=\"image/*\">
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t        <input class=\"file-path validate\" type=\"text\">
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t  \t\t\t</div>
                </div>
            </div>
            <table class=\"bordered\">
\t            <thead>
\t            \t<tr>
\t            \t\t<th>Medio</th>
\t            \t\t<th>Monto</th>
\t            \t\t<th>Estado</th>
\t            \t\t<th>#</th>
\t            \t\t<th>Fecha</th>
\t            \t\t<th></th>
\t            \t</tr>
\t            </thead>
\t            <tbody>            \t
\t            \t";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 638
            echo "\t            \t\t<tr>
\t            \t\t\t<td>";
            // line 639
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 640
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 641
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
\t            \t\t\t<td>";
            // line 642
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 643
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
\t            \t\t\t<td><img src=\"";
            // line 644
            echo ($context["ruta_img"] ?? null);
            echo "/vauche/";
            echo $this->getAttribute($context["v"], "Pvoc_LogoPago", array());
            echo "\" class=\"materialboxed\" width=\"30px\"></td>
\t            \t\t</tr>
\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 647
        echo "\t            </tbody>
            </table>
\t    </div>
\t    <div class=\"modal-footer\">               
\t    \t\t<a class=\"btn black-text white modal-action modal-close waves-effect waves-red btn-flat\">CERRAR</a>
                <a id=\"btnRegistrarComprobante\" data-idv=\"";
        // line 652
        echo ($context["idventa"] ?? null);
        echo "\" class=\"btn green white-text\">Cargar pago</a>
         </div>
\t </div>
";
    }

    // line 657
    public function block_script($context, array $blocks = array())
    {
        // line 658
        echo "\t<script src=\"https://printjs-4de6.kxcdn.com/print.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
\t<script src=\"";
        // line 661
        echo base_url("public/");
        echo "js/tienda/detalleventa.js?v=2506\"></script>
\t<script src=\"";
        // line 662
        echo base_url("public/");
        echo "js/tienda/pago_pedido.js?v=0607\"></script>
\t<script src=\"";
        // line 663
        echo base_url("public/");
        echo "js/vauche.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/detalle_venta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1257 => 663,  1253 => 662,  1249 => 661,  1244 => 658,  1241 => 657,  1233 => 652,  1226 => 647,  1215 => 644,  1211 => 643,  1207 => 642,  1199 => 641,  1195 => 640,  1191 => 639,  1188 => 638,  1184 => 637,  1145 => 601,  1124 => 587,  1105 => 575,  1101 => 573,  1094 => 571,  1092 => 570,  1088 => 569,  1084 => 568,  1076 => 567,  1072 => 566,  1068 => 565,  1065 => 564,  1061 => 563,  1057 => 562,  1037 => 545,  1030 => 541,  1023 => 537,  1016 => 533,  1009 => 529,  1002 => 525,  999 => 524,  996 => 523,  994 => 522,  990 => 520,  984 => 519,  981 => 518,  979 => 517,  971 => 514,  967 => 513,  960 => 511,  953 => 507,  946 => 503,  942 => 502,  931 => 499,  924 => 494,  919 => 493,  916 => 492,  913 => 491,  893 => 473,  875 => 472,  866 => 466,  862 => 465,  854 => 464,  846 => 463,  841 => 461,  831 => 454,  800 => 440,  793 => 436,  789 => 435,  781 => 434,  773 => 433,  768 => 431,  756 => 422,  745 => 414,  703 => 374,  682 => 372,  678 => 371,  665 => 361,  656 => 355,  643 => 345,  624 => 341,  617 => 337,  610 => 333,  599 => 325,  592 => 321,  578 => 310,  567 => 302,  548 => 298,  541 => 294,  534 => 290,  523 => 282,  516 => 278,  510 => 275,  491 => 259,  480 => 251,  469 => 243,  462 => 238,  459 => 237,  457 => 236,  453 => 234,  447 => 233,  444 => 232,  442 => 231,  438 => 229,  429 => 227,  425 => 226,  417 => 223,  413 => 222,  406 => 220,  400 => 217,  394 => 214,  390 => 213,  379 => 210,  375 => 208,  370 => 207,  367 => 206,  365 => 205,  351 => 193,  347 => 191,  344 => 190,  336 => 184,  334 => 183,  327 => 178,  316 => 175,  312 => 174,  308 => 173,  300 => 172,  296 => 171,  292 => 170,  289 => 169,  285 => 168,  270 => 155,  262 => 126,  255 => 122,  244 => 118,  237 => 114,  230 => 110,  223 => 106,  211 => 99,  204 => 95,  200 => 93,  194 => 90,  190 => 88,  188 => 87,  183 => 85,  172 => 81,  165 => 77,  158 => 73,  152 => 69,  149 => 67,  142 => 62,  134 => 58,  127 => 54,  122 => 51,  120 => 50,  113 => 48,  107 => 47,  101 => 46,  97 => 44,  88 => 37,  86 => 36,  68 => 33,  58 => 25,  55 => 24,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/detalle_venta.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\detalle_venta.twig");
    }
}
