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
        echo "    <main class=\"\" style=\"width:95%\">
    \t<div class=\"card\">
        \t<div class=\"card-content sinPadding\">
        \t\t<div class=\"row cardContentFix\">
        \t\t\t<h5 class=\"center card-title\"><b>DETALLE DE VENTA</b></h5>
\t    \t\t\t<div class=\"divider\"></div><br>
\t    \t\t\t<div class=\"row\">
\t    \t\t\t\t<div class=\"col s12 m12 l12 center\">
\t    \t\t\t\t\t<span style=\"padding:5px;border-radius:4px;\" class=\"negrita black-text fontA ";
        // line 33
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1)) {
            echo "yellow\">NUEVA VENTA";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2)) {
            echo "blue\">VENTA CONFIRMADA";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 3)) {
            echo "lime accent-2\">LISTO PARA RECOGO";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 4)) {
            echo "deep-orange accent-2\">EN EL CORRIER";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 5)) {
            echo " green\">ENTREGADO";
        } elseif (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 6)) {
            echo "red\">ANULADO";
        }
        echo "</span>
\t    \t\t\t\t\t<br/>
\t    \t\t\t\t</div>\t    \t\t\t\t
\t    \t\t\t\t<div class=\"col s12 l12\">
\t    \t\t\t\t<select  class=\"selecEstado browser-default\">
    \t\t\t\t\t\t<option value=\"NO\" ";
        // line 38
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "NO")) {
            echo "selected ";
        }
        echo ">CONTRAENTREGA</option>
    \t\t\t\t\t\t<option value=\"TIENDA\" ";
        // line 39
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "selected ";
        }
        echo ">RECOGO EN TIENDA</option>
    \t\t\t\t\t\t<option value=\"TDO\" ";
        // line 40
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TDO")) {
            echo "selected";
        }
        echo ">PROVINCIA - DEPOSITO/TRANSFERENCIA</option>
\t    \t\t\t\t</select>
\t    \t\t\t\t";
        // line 42
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "NO")) {
            // line 43
            echo "\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center purple\"><span class=\"fontA\"><b>MÉTODO DE PAGO: PAGO CONTRA ENTREGA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } elseif (($this->getAttribute(        // line 46
($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "\t    \t\t\t\t    
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center yellow\"><span class=\"fontA\"><b>RETIRO EN TIENDA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } elseif (($this->getAttribute(        // line 50
($context["venta"] ?? null), "Pac_Banco", array()) == "Visanet")) {
            echo "   
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center blue\"><span class=\"fontA\"><b>MÉTODO DE PAGO: TARJETA DE CRÉDITO/DEBITO</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } else {
            // line 54
            echo "   
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center red\"><span class=\"fontA\"><b>MÉTODO DE PAGO: DEPOSITO/TRANSFERENCIA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        }
        // line 59
        echo "\t    \t\t\t\t</div>
\t    \t\t\t\t";
        // line 61
        echo "\t    \t\t\t\t<div class=\"col s12 l6\"> 
\t\t    \t\t\t\t<table class=\"bordered striped\">
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">CLIENTE</td>
\t\t    \t\t\t\t\t\t<td class=\"nomV\" contenteditable=\"true\">";
        // line 65
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">DNI/CE/OTRO</td>
\t\t    \t\t\t\t\t\t<td class=\"dniV\" contenteditable=\"true\">";
        // line 69
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">TELÉFONO</td>
\t\t    \t\t\t\t\t\t<td class=\"tlfV\" contenteditable=\"true\">";
        // line 73
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
        // line 77
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t";
        // line 79
        if ($this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array())) {
            // line 80
            echo "\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">SOLICITO FACTURA - RUC</td>
\t\t    \t\t\t\t\t\t<td class=\"rucV\" contenteditable=\"true\">";
            // line 82
            echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array());
            echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t\t";
        }
        // line 85
        echo "\t\t    \t\t\t\t\t<tr>
\t\t    \t\t\t\t\t\t<td class=\"negrita\">VENDEDOR</td>
\t\t    \t\t\t\t\t\t<td class=\"\">";
        // line 87
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</td>
\t\t    \t\t\t\t\t</tr>
\t\t    \t\t\t\t</table>\t\t    \t\t\t\t
\t\t    \t\t\t</div>\t
\t    \t\t\t\t<div class=\"col s12 l6\" style=\"padding-bottom: 10px;\">
\t    \t\t\t\t<table class=\"bordered striped\">
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">DEPARTEMANTO</td>
\t    \t\t\t\t\t\t<td class=\"\">";
        // line 95
        echo $this->getAttribute(($context["compra_info"] ?? null), "region", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">PROVINCIA</td>
\t    \t\t\t\t\t\t<td class=\"\">";
        // line 99
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">DISTRITO</td>
\t    \t\t\t\t\t\t<td class=\"\">";
        // line 103
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">DIRECCIÓN</td>
\t    \t\t\t\t\t\t<td class=\"dirV\" contenteditable=\"true\">";
        // line 107
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
        // line 111
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t\t<tr>
\t    \t\t\t\t\t\t<td class=\"negrita\">AGENCIA</td>
\t    \t\t\t\t\t\t<td class=\"ageV\" contenteditable=\"true\">";
        // line 115
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo "</td>
\t    \t\t\t\t\t</tr>
\t    \t\t\t\t</table>
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"row\">
\t\t\t\t\t\t    <form class=\"col s12\">
\t\t\t\t\t\t      <div class=\"row\">
\t\t\t\t\t\t        <div class=\"input-field col s12\">
\t\t\t\t\t\t          <textarea id=\"pObservacion\" class=\"materialize-textarea\">";
        // line 123
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_Observacion", array());
        echo "</textarea>
\t\t\t\t\t\t          <label for=\"textarea1\">OBSERVACIÓN DEL PEDIDO</label>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </form>
\t\t\t\t\t\t    <div class=\" center\">
\t    \t\t\t\t\t\t<a class=\"btn green updateCliente\" data-usu=\"";
        // line 129
        echo $this->getAttribute(($context["venta"] ?? null), "Usu_IdUsuario", array());
        echo "\" data-idp=\"";
        echo ($context["idventa"] ?? null);
        echo "\" >Guardar cambios</a>  \t\t\t\t
\t\t    \t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t    \t\t\t<div class=\"col s12 l12 green lighten-5\" >\t\t    \t\t\t\t
\t\t\t    \t\t<table class=\"bordered centered\">
\t\t\t\t            <thead>
\t\t\t\t            \t<tr>
\t\t\t\t            \t\t<th>Medio</th>
\t\t\t\t            \t\t<th>Monto</th>
\t\t\t\t            \t\t<th>Estado</th>
\t\t\t\t            \t\t<th>#</th>
\t\t\t\t            \t\t<th>Fecha</th>
\t\t\t\t            \t\t<th></th>
\t\t\t\t            \t</tr>
\t\t\t\t            </thead>
\t\t\t\t            <tbody>    
\t\t\t\t            ";
        // line 145
        $context["tocom"] = 0;
        // line 146
        echo "\t\t\t\t            ";
        $context["cantVauche"] = twig_length_filter($this->env, ($context["vauche"] ?? null));
        // line 147
        echo "\t\t\t\t            ";
        $context["veriV"] = 0;
        echo "         \t
\t\t\t\t            \t";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 149
            echo "\t\t\t\t            \t\t<tr>
\t\t\t\t            \t\t\t<td>";
            // line 150
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
\t\t\t\t            \t\t\t<td>";
            // line 151
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
\t\t\t\t            \t\t\t<td>";
            // line 152
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
\t\t\t\t            \t\t\t<td>";
            // line 153
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
\t\t\t\t            \t\t\t<td>";
            // line 154
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
\t\t\t\t            \t\t\t<td><img src=\"";
            // line 155
            echo ($context["ruta_img"] ?? null);
            echo "/vauche/";
            echo $this->getAttribute($context["v"], "Pvoc_LogoPago", array());
            echo "\" class=\"materialboxed\" width=\"30px\"></td>
\t\t\t\t            \t\t</tr>
\t\t\t\t            \t\t";
            // line 157
            $context["veriV"] = (($context["veriV"] ?? null) + $this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()));
            // line 158
            echo "\t\t\t\t            \t\t";
            $context["tocom"] = (($context["tocom"] ?? null) + $this->getAttribute($context["v"], "Pvoc_Monto", array()));
            // line 159
            echo "\t\t\t\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t            </tbody>
\t\t            \t</table>
\t\t            \t<br>
\t\t    \t\t\t</div>
\t    \t\t\t\t<div class=\"col s12 l12\">
\t    \t\t\t\t\t";
        // line 165
        if ((($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2))) {
            // line 166
            echo "\t    \t\t\t\t\t<a data-target=\"modalProducto\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">add</i>Agregar producto</a>
\t    \t\t\t\t\t<a data-target=\"modalVocher\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">add</i>Pagos</a>
\t    \t\t\t\t\t<a data-target=\"modalFactura\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">list</i>Factura</a>
\t    \t\t\t\t\t<a data-target=\"modalBoleta\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">list</i>Boleta</a>
\t    \t\t\t\t\t<a data-target=\"modalCambio\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">autorenew</i>Cambio Producto</a>
\t    \t\t\t\t\t<a class=\"btn-flat right red-text modal-trigger\" data-target=\"modalAnula\"><i class=\"material-icons left\">clear</i>ANULAR VENTA</a>
\t    \t\t\t\t\t";
        }
        // line 173
        echo "\t    \t\t\t\t\t<a data-target=\"modalGuia\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">description</i>Guia Remisión</a>
\t    \t\t\t\t\t
\t\t\t\t      \t\t<table class=\"bordered\"; style=\"width: 100%;\">
\t\t\t\t      \t\t\t<thead class=\"colorPrincipal\">
\t\t\t\t      \t\t\t\t<tr class=\"pormayor black-text\">
\t\t\t\t      \t\t\t\t\t<th></th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\">Cantidad</th>
\t\t\t\t      \t\t\t\t\t<th>Producto</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\">Precio S/</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\">Importe S/</th>
\t\t\t\t      \t\t\t\t\t<th class=\"center\"></th>
\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t      \t\t\t</thead>
\t\t\t\t      \t\t\t<tbody>
\t\t\t\t      \t\t\t\t";
        // line 187
        $context["total2"] = 0;
        // line 188
        echo "\t\t\t\t      \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 189
        echo "\t\t\t\t      \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ved"]) {
            // line 190
            echo "\t\t\t\t\t      \t\t\t\t<tr ";
            if (($this->getAttribute($context["ved"], "Pcd_Cambio", array()) == 1)) {
                echo "class=\"red lighten-4\"";
            }
            echo ">
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t<img class=\"\" src=\"";
            // line 192
            echo ($context["ruta_img"] ?? null);
            if ($this->getAttribute($context["ved"], "SKU_Img", array())) {
                echo $this->getAttribute($context["ved"], "SKU_Img", array());
            } else {
                echo $this->getAttribute($context["ved"], "Prf_Img", array());
            }
            echo "\" height=\"50\">
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<b class=\"center\" style=\"font-size:20px;\">";
            // line 195
            echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
            echo "</b>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t<b style=\"font-size:12px;\">COD.";
            // line 198
            echo $this->getAttribute($context["ved"], "Pro_IdProducto", array());
            echo "</b> - ";
            echo twig_upper_filter($this->env, $this->getAttribute($context["ved"], "Pro_Nombre", array()));
            echo "</br>
\t\t\t\t\t    \t\t   \t\t\t\t<b class=\"enfasisB black-text\">";
            // line 199
            echo $this->getAttribute($context["ved"], "SKU_Color", array());
            echo "</b></br>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
            // line 202
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Precio", array()), 2, ".", " ");
            echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td id=\"tdimporte";
            // line 204
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\" class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span id=\"importe";
            // line 205
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Importe", array()), 2, ".", " ");
            echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t";
            // line 208
            if (((twig_length_filter($this->env, ($context["venta_detalle"] ?? null)) > 1) && (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2)))) {
                echo " 
\t\t\t\t\t      \t\t\t\t\t\t<a class=\"btn-flat delPro\" data-idvd=\"";
                // line 209
                echo $this->getAttribute($context["ved"], "Pcd_IdPago_Compra_Detalle", array());
                echo "\" data-ids=\"";
                echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
                echo "\" data-cant=\"";
                echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
                echo "\"><i class=\"material-icons red-text\">clear</i></a>
\t\t\t\t\t      \t\t\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t      \t\t\t\t";
            // line 213
            $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["ved"], "Pcd_Importe", array()));
            // line 214
            echo "\t\t\t\t\t      \t\t\t\t";
            $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["ved"], "Pce_CostoEnvio", array()));
            // line 215
            echo "\t\t\t\t            \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ved'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "\t\t\t\t      \t\t\t</tbody>
\t\t\t\t      \t\t\t<tfoot>
\t\t\t\t      \t\t\t\t";
        // line 218
        $context["totalEnvio"] = twig_round($this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()));
        // line 219
        echo "\t\t\t\t      \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 220
        echo "\t\t\t\t      \t\t\t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t \tTOTAL IMPORTE
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align\" colspan=\"2\">
\t\t\t                \t\t\t\t<span>";
        // line 225
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
        // line 233
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
        // line 241
        echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
        echo "</b>
\t\t\t                \t\t\t</td>
\t\t\t                \t\t</tr>
\t\t\t            \t\t</tfoot>
\t\t\t\t      \t\t</table>
\t    \t\t\t\t</div>
\t    \t\t\t\t";
        // line 247
        if ((($context["cantVauche"] ?? null) == ($context["veriV"] ?? null))) {
            // line 248
            echo "\t\t    \t\t\t\t";
            if ((($context["tocom"] ?? null) == ($context["totalPagar"] ?? null))) {
                // line 249
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["vauche"] ?? null) && (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2)))) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"col s4 m4 l4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn negrita blue\" onclick=\"printJS('printJS-form', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">print</i>IMPRIMIR ROTULADO ";
                    // line 251
                    echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t</div>\t    \t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col s4 m4 l4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn negrita green\" onclick=\"printJS('printJS-form2', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">list</i>IMPRIMIR VENTA ";
                    // line 254
                    echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s4 l4 center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn-large green modal-trigger\" data-target=\"modalConfirma\"><i class=\"material-icons left\">check</i>ENTREGADA ";
                    // line 257
                    echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t    \t\t\t";
                }
                // line 260
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 261
                echo "\t\t\t\t\t\t    <div class=\"col s12 m12 l12 card-panel orange center\">
\t\t\t\t\t\t    \t<span class=\"fontA\">SOLO PUEDES IMPRIMIR PEDIDO Y ROTULADO CUANDO CARGUES MEDIO DE PAGO Y SI EL PEDIDO ES NUEVO/CONFIRMADO</span>
\t\t\t\t\t\t    </div>\t\t\t\t
\t\t\t    \t\t\t";
            }
            // line 265
            echo "\t    \t\t\t\t";
        }
        // line 266
        echo "\t    \t\t\t</div>
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
        // line 276
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</span>
          <div class=\"row\">
\t        <div class=\"input-field col s6\">
\t          <input id=\"rSocial\" type=\"text\" class=\"validate\" value=\"";
        // line 279
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "\">
\t          <label for=\"rSocial\">Razón Social</label>
\t        </div>
\t        <div class=\"input-field col s6\">
\t          <input type=\"text\" id=\"ruc\" class=\"validate\" value=\"";
        // line 283
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array());
        echo "\">
\t          <label for=\"ruc\">RUC</label>
\t          <a class=\"btn buscarDatos\" data-tipo=\"6\">SUNAT</a>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"email\" class=\"validate\">
\t          <label for=\"email\">Correo Electronico</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"tlf\" class=\"validate\" value=\"";
        // line 292
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlf\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeoFac\" class=\"validate\" value=\"";
        // line 296
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\">
\t          <label for=\"ubigeoFac\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"direccionFac\" class=\"validate\" value=\"";
        // line 300
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
\t          <label for=\"direccionFac\">Dirección</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t        \t<a class=\"btn gFact green\" data-idv=\"";
        // line 304
        echo ($context["idventa"] ?? null);
        echo "\">GENERAR FACTURA</a>
\t        \t<a class=\"btn impB2 orange\" href=\"\" disabled>IMPRIMIR BOLETA</a>
\t       \t</div>
\t      </div>
        </div>
    </div>
    <div id=\"modalGuia\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content\">
        \t<span class=\"card-title\">GENERAR GUIA DEL CLIENTE ";
        // line 312
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</span>
          <div class=\"row\">
\t        <div class=\"input-field col s6\">
\t          <input id=\"desGuia\" type=\"text\" class=\"validate\" value=\"";
        // line 315
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "\">
\t          <label for=\"desGuia\">Destinatario</label>
\t        </div>
\t        <div class=\"input-field col s6\">
\t          <input type=\"text\" id=\"dniGuia\" class=\"validate\" value=\"";
        // line 319
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        echo "\">
\t          <label for=\"dniGuia\">DNI Destinatario</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"correoGuia\" class=\"validate\">
\t          <label for=\"correoGuia\">Correo Electronico</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"tlfGuia\" class=\"validate\" value=\"";
        // line 327
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlfGuia\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeoGuia\" class=\"validate\" value=\"";
        // line 331
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\" disabled>
\t          <label for=\"ubigeoGuia\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"dirEnvio\" class=\"validate\" maxlength=\"100\" value=\"";
        // line 335
        echo twig_title_string_filter($this->env, $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array()));
        echo " - ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo " / ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo " \">
\t          <label for=\"direccion\">Dirección a Enviar (NOMBRE DE LA AGENCIA CON PROVINCIA Y DISTRITO)</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"dirGuia\" class=\"validate\" value=\"";
        // line 339
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_DtoInt", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array());
        echo " Referencia: ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "\">
\t          <label for=\"direccion\">Dirección Cliente</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t        \t<a class=\"btn gGuia green\" data-idv=\"";
        // line 343
        echo ($context["idventa"] ?? null);
        echo "\">GENERAR GUIA</a>
\t        \t<a class=\"btn impB3 orange\" href=\"http://pormayor.cocos.net.pe/dispatches\" target=\"_blank\" disabled>IR A GUIAS</a>
\t       \t</div>
\t      </div>
        </div>
    </div>
    <div id=\"modalBoleta\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content\">
        \t<span class=\"card-title\">GENERAR BOLETA DEL CLIENTE ";
        // line 351
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
        // line 362
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        echo "\">
\t          <label for=\"numerodoc\">Número Documento</label>
\t           <a class=\"btn buscarDatos\" data-tipo=\"1\">RENIEC</a>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input id=\"razonSocial2\" type=\"text\" class=\"validate\" value=\"";
        // line 367
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
        // line 375
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlf\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeo\" class=\"validate\" value=\"";
        // line 379
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\" disabled>
\t          <label for=\"ubigeo\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"direccion\" class=\"validate\" value=\"";
        // line 383
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
        // line 387
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
        // line 397
        echo ($context["idventa"] ?? null);
        echo "\">CONFIRMAR</a>
        </div>
    </div>
    <div id=\"modalAnula\" class=\"modal amber\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content center\">
        \t<p>SOLO DE ANULAR CUANDO SE HAYA CONFIRMADO LA CANCELACIÓN POR PARTE DEL CLIENTE O HAYAN PASADO 24 HORAS DE REALIZO LA COMPRA Y NO HUBIESE COMUNICACIÓN. SI ES ASÍ DAR CLICK EN <b>ANULAR</b></p>
        \t<a class=\"btn red anuV\" data-idv=\"";
        // line 403
        echo ($context["idventa"] ?? null);
        echo "\">ANULAR</a>
        </div>
    </div>

    <div id=\"modalProducto\" class=\"modal\" style=\"z-index:9999 !important;width: 70%!important;\">
        <div class=\"modal-content row\">
        \t<span class=\"modal-title\">AGREGAR PRODUCTO</span>
        \t<div class=\"col s12 l12\">
                  <select class=\"browser-default select2\" id=\"selProducto\">
                  \t<option value=\"0\" selected>Seleccione el producto</option>
                    ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 414
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
        // line 416
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
                <input class=\"form-control\" type=\"number\" id=\"precioP\" value=\"0\" disabled>
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
        // line 456
        echo ($context["idventa"] ?? null);
        echo "\"><i class=\"material-icons left\">add_box</i>AGREGAR AL PEDIDO</a>
            </div>
        </div>
    </div>

    <div id=\"modalCambio\" class=\"modal\" style=\"z-index:9999 !important;width: 70%!important;\">
        <div class=\"modal-content row\">
        \t<span class=\"modal-title\">AGREGAR CAMBIO PRODUCTO</span>
        \t<div class=\"col s12 l12\">
                  <select class=\"browser-default select2\" id=\"selProducto2\">
                  \t<option value=\"0\" selected>Seleccione el producto</option>
                    ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 468
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
        // line 470
        echo "                  </select><br><br>
            </div>
            <div class=\"col s4\">
              <div class=\"form-group\">
                <label for=\"stockD\">STOCK DISPONIBLE</label>
                <input class=\"form-control\" type=\"number\" id=\"stockD2\" value=\"\" disabled>
              </div>
            </div>
            <div class=\"col s4\">
              <div class=\"form-group\">
                <label for=\"cantP\">Cantidad</label>
                <input class=\"form-control\" type=\"number\" id=\"cantP2\" value=\"1\">
              </div>
            </div>
            <div class=\"col s4\">
              <div class=\"form-group\">
                <label for=\"precioP\">Precio</label>
                <input class=\"form-control\" type=\"number\" id=\"precioP2\" value=\"0\">
              </div>
            </div>
            <div class=\"col s12\">
            \t<a class=\"btn btn-success btn-lg btn-block add-row3\"><i class=\"material-icons left\">add</i>AGREGAR CAMBIO PRODUCTO</a>
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
                  <tbody id=\"tablaCambio\" class=\"grey lighten-4\">                   
                  </tbody>
                </table>
            </div>
            <div class=\"col s12\">
            \t<a class=\"btn green btn-lg btn-block addCambio\" data-idv=\"";
        // line 510
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
        // line 518
        echo ($context["ruta_img"] ?? null);
        echo "logoPM.jpg\">
    \t\t\t\t<b>WWW.PORMAYOR.PE</b><br>
    \t\t\t\tPORMAYOR.PE S.A.
    \t\t\t\tRUC: 20603706804
    \t\t\t\tJIRÓN ANDAHUAYLAS 251, INTERIOR 208-209<br> CERDADO DE LIMA, LIMA.<br>
    \t\t\t\t+51 923500413
    \t\t\t\t<span style=\"font-size: 10px;\">Vendedor:";
        // line 524
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</span>
    \t\t\t</td>
    \t\t\t<td style=\"padding:5px;\">
    \t\t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\t";
        // line 528
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 530
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 531
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 532
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 533
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t\t\t\t\t<span style=\"font-size: 10px;\">Vendedor: ";
        // line 534
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</span>  <br>
\t\t    \t\t</div><br>
\t\t \t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t\t\t \t\tAGENCIA: ";
        // line 538
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo "<br>
\t\t \t\t\t\t<b style=\"font-size:35px\"> ";
        // line 539
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo " </b><br> <b>Dirección:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
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
        // line 553
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b> 
\t\t \t\t</td>
    \t</table> 
        <table>
    \t\t<tr>
    \t\t\t<td width=\"50%\" align=\"\">
    \t\t\t\t<div style=\"font-size:14px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\tFecha de venta: ";
        // line 560
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 562
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 563
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 564
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 565
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t</td>
    \t\t\t<td  width=\"50%\" align=\"\">
\t\t \t\t\t<div style=\"font-size:14px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 571
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
        // line 572
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
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Cantidad</th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Producto</th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Precio S/</th>
  \t\t\t\t\t<th style=\"border-bottom: 1px solid;border-top: 1px solid\">Importe S/</th>
  \t\t\t\t</tr>
  \t\t\t</thead>
  \t\t\t<tbody>
  \t\t\t\t";
        // line 590
        echo "  \t\t\t\t";
        $context["total2"] = 0;
        // line 591
        echo "  \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 592
        echo "  \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ved"]) {
            // line 593
            echo "      \t\t\t\t<tr>
      \t\t\t\t\t<td class=\"\">
      \t\t\t\t\t\t<input type=\"checkbox\" name=\"\"> 
      \t\t\t\t\t</td>
      \t\t\t\t\t<td class=\"\">
      \t\t\t\t\t\t<img class=\"redondeo centrarForzado\" src=\"";
            // line 598
            echo ($context["ruta_img"] ?? null);
            if ($this->getAttribute($context["ved"], "SKU_Img", array())) {
                echo $this->getAttribute($context["ved"], "SKU_Img", array());
            } else {
                echo $this->getAttribute($context["ved"], "Prf_Img", array());
            }
            echo "\" height=\"30\">
      \t\t\t\t\t</td>
    \t\t\t\t\t<td align=\"center\">
      \t\t\t\t\t\t<span class=\"center\" style=\"font-size:20px;\">";
            // line 601
            echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
            echo "</span>
      \t\t\t\t\t\t<input type=\"checkbox\" name=\"\"> 
    \t\t\t\t\t</td>
      \t\t\t\t\t<td>
      \t\t\t\t\t\t<b style=\"font-size:12px\">COD.";
            // line 605
            echo $this->getAttribute($context["ved"], "Pro_IdProducto", array());
            echo "</b> - ";
            echo twig_upper_filter($this->env, $this->getAttribute($context["ved"], "Pro_Nombre", array()));
            echo "</br>
    \t\t   \t\t\t\t<b class=\"enfasisB black-text\">";
            // line 606
            echo $this->getAttribute($context["ved"], "SKU_Color", array());
            echo "</b></br>
    \t\t\t\t\t</td>
      \t\t\t\t\t<td class=\"center\">

      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
            // line 610
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Precio", array()), 2, ".", " ");
            echo "</span>
      \t\t\t\t\t</td>
      \t\t\t\t\t<td id=\"tdimporte";
            // line 612
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\" class=\"center\">
      \t\t\t\t\t\t<span id=\"importe";
            // line 613
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Importe", array()), 2, ".", " ");
            echo "</span>
      \t\t\t\t\t</td>
      \t\t\t\t</tr>
      \t\t\t\t";
            // line 616
            $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["ved"], "Pcd_Importe", array()));
            // line 617
            echo "      \t\t\t\t";
            $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["ved"], "Pce_CostoEnvio", array()));
            // line 618
            echo "        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ved'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        echo "  \t\t\t</tbody>
  \t\t\t<tfoot>
  \t\t\t\t";
        // line 621
        $context["totalEnvio"] = twig_round($this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()));
        // line 622
        echo "  \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 623
        echo "  \t\t\t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 624
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"6\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL IMPORTE</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 628
        echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 632
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"6\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL ENVÍO</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 636
        echo twig_number_format_filter($this->env, $this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 640
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"6\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL A PAGAR</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 644
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
        // line 661
        $context["montV"] = 0;
        echo "          \t
        \t";
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 663
            echo "        \t\t<tr>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 664
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 665
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 666
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 667
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 668
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
        \t\t\t";
            // line 669
            $context["montV"] = (($context["montV"] ?? null) + $this->getAttribute($context["v"], "Pvoc_Monto", array()));
            // line 670
            echo "        \t\t</tr>
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
        echo "        </tbody>
      </table><br>
        <h4 style=\"color: red;\">";
        // line 674
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
        // line 686
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
                \t<option value=\"DESCUENTO\">DESCUENTO</option>
                </select>
                </div>
                <div class=\"input-field col s12 m6 l4\">
                    <input type=\"number\" id=\"montoV\" class=\"validate\" name=\"montoV\" required=\"\" value=\"";
        // line 701
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
        // line 737
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 738
            echo "\t            \t\t<tr>
\t            \t\t\t<td>";
            // line 739
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 740
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 741
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
\t            \t\t\t<td>";
            // line 742
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 743
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
\t            \t\t\t<td><img src=\"";
            // line 744
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
        // line 747
        echo "\t            </tbody>
            </table>
\t    </div>
\t    <div class=\"modal-footer\">               
\t    \t\t<a class=\"btn black-text white modal-action modal-close waves-effect waves-red btn-flat\">CERRAR</a>
                <a id=\"btnRegistrarComprobante\" data-idv=\"";
        // line 752
        echo ($context["idventa"] ?? null);
        echo "\" class=\"btn green white-text\">Cargar pago</a>
         </div>
\t </div>
";
    }

    // line 757
    public function block_script($context, array $blocks = array())
    {
        // line 758
        echo "\t<script src=\"https://printjs-4de6.kxcdn.com/print.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
\t<script src=\"";
        // line 761
        echo base_url("public/");
        echo "js/tienda/detalleventa.js?v=2506\"></script>
\t<script src=\"";
        // line 762
        echo base_url("public/");
        echo "js/tienda/pago_pedido.js?v=0607\"></script>
\t<script src=\"";
        // line 763
        echo base_url("public/");
        echo "js/vauche.js\"></script>
\t<script src=\"";
        // line 764
        echo base_url("public/");
        echo "js/apidatos.js\"></script>
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
        return array (  1485 => 764,  1481 => 763,  1477 => 762,  1473 => 761,  1468 => 758,  1465 => 757,  1457 => 752,  1450 => 747,  1439 => 744,  1435 => 743,  1431 => 742,  1423 => 741,  1419 => 740,  1415 => 739,  1412 => 738,  1408 => 737,  1369 => 701,  1347 => 686,  1328 => 674,  1324 => 672,  1317 => 670,  1315 => 669,  1311 => 668,  1307 => 667,  1299 => 666,  1295 => 665,  1291 => 664,  1288 => 663,  1284 => 662,  1280 => 661,  1260 => 644,  1253 => 640,  1246 => 636,  1239 => 632,  1232 => 628,  1225 => 624,  1222 => 623,  1219 => 622,  1217 => 621,  1213 => 619,  1207 => 618,  1204 => 617,  1202 => 616,  1194 => 613,  1190 => 612,  1183 => 610,  1176 => 606,  1170 => 605,  1163 => 601,  1152 => 598,  1145 => 593,  1140 => 592,  1137 => 591,  1134 => 590,  1114 => 572,  1096 => 571,  1087 => 565,  1083 => 564,  1075 => 563,  1067 => 562,  1062 => 560,  1052 => 553,  1027 => 539,  1023 => 538,  1016 => 534,  1012 => 533,  1008 => 532,  1000 => 531,  992 => 530,  987 => 528,  980 => 524,  971 => 518,  960 => 510,  918 => 470,  897 => 468,  893 => 467,  879 => 456,  837 => 416,  816 => 414,  812 => 413,  799 => 403,  790 => 397,  777 => 387,  758 => 383,  751 => 379,  744 => 375,  733 => 367,  725 => 362,  711 => 351,  700 => 343,  687 => 339,  676 => 335,  669 => 331,  662 => 327,  651 => 319,  644 => 315,  638 => 312,  627 => 304,  608 => 300,  601 => 296,  594 => 292,  582 => 283,  575 => 279,  569 => 276,  557 => 266,  554 => 265,  548 => 261,  545 => 260,  539 => 257,  533 => 254,  527 => 251,  524 => 250,  521 => 249,  518 => 248,  516 => 247,  507 => 241,  496 => 233,  485 => 225,  478 => 220,  475 => 219,  473 => 218,  469 => 216,  463 => 215,  460 => 214,  458 => 213,  454 => 211,  445 => 209,  441 => 208,  433 => 205,  429 => 204,  422 => 202,  416 => 199,  410 => 198,  404 => 195,  393 => 192,  385 => 190,  380 => 189,  377 => 188,  375 => 187,  359 => 173,  350 => 166,  348 => 165,  341 => 160,  335 => 159,  332 => 158,  330 => 157,  323 => 155,  319 => 154,  315 => 153,  307 => 152,  303 => 151,  299 => 150,  296 => 149,  292 => 148,  287 => 147,  284 => 146,  282 => 145,  261 => 129,  252 => 123,  241 => 115,  234 => 111,  223 => 107,  216 => 103,  209 => 99,  202 => 95,  191 => 87,  187 => 85,  181 => 82,  177 => 80,  175 => 79,  170 => 77,  159 => 73,  152 => 69,  145 => 65,  139 => 61,  136 => 59,  129 => 54,  121 => 50,  114 => 46,  109 => 43,  107 => 42,  100 => 40,  94 => 39,  88 => 38,  68 => 33,  58 => 25,  55 => 24,  33 => 4,  30 => 3,  11 => 1,);
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
