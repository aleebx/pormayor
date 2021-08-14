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
\t    \t\t\t\t<div class=\"col s12 m4 l4\">
\t    \t\t\t\t\t<a class=\"btn negrita blue\" onclick=\"printJS('printJS-form', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">print</i>IMPRIMIR ROTULADO</a>
\t    \t\t\t\t</div>\t    \t\t\t\t
\t    \t\t\t\t<div class=\"col s12 m4 l4\">
\t    \t\t\t\t\t<a class=\"btn negrita green\" onclick=\"printJS('printJS-form2', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">list</i>IMPRIMIR VENTA</a>
\t    \t\t\t\t</div>\t    \t\t\t\t
\t    \t\t\t\t<div class=\"col s12 l12\">
\t    \t\t\t\t";
        // line 43
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "NO")) {
            // line 44
            echo "\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center purple\"><span class=\"fontA\"><b>MÉTODO DE PAGO: PAGO CONTRA ENTREGA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } elseif (($this->getAttribute(        // line 47
($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo "\t    \t\t\t\t    
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center yellow\"><span class=\"fontA\"><b>RETIRO EN TIENDA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } elseif (($this->getAttribute(        // line 51
($context["venta"] ?? null), "Pac_Banco", array()) == "Visanet")) {
            echo "   
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center blue\"><span class=\"fontA\"><b>MÉTODO DE PAGO: TARJETA DE CRÉDITO/DEBITO</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        } else {
            // line 55
            echo "   
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall center red\"><span class=\"fontA\"><b>MÉTODO DE PAGO: DEPOSITO/TRANSFERENCIA</b></span></li>
\t    \t\t\t\t\t</ul>
\t    \t\t\t\t";
        }
        // line 60
        echo "\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col s12 l6\">
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-header colorPrincipal\"><h6><b><i class=\"material-icons left\">person</i>DATOS CLIENTE</b></h6></li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>NOMBRE COMPLETO:</b> ";
        // line 64
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>D.N.I:</b> ";
        // line 65
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>TELÉFONO: ";
        // line 66
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "</b> <a href=\"https://api.whatsapp.com/send?phone=51";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "&text=Hola,%20por%20favor%20confirme%20su%20compra%20en%20PorMayor.pe%20para%20realizar%20el%20envío.\"><img src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\" height=\"25\" class=\"positionRelative right\"></a></li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>FECHA:</b> ";
        // line 67
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "</li>
\t    \t\t\t\t\t\t";
        // line 68
        if ($this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array())) {
            // line 69
            echo "\t    \t\t\t\t\t\t<li class=\"collection-item green center\">SOLICITO FACTURA</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>RUC:</b> ";
            // line 70
            echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Ruc", array());
            echo "</li>
\t    \t\t\t\t\t\t";
        }
        // line 72
        echo "\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\">Vendedor:<h5>";
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</h5></li>
\t    \t\t\t\t\t</ul>
\t\t    \t\t\t</div>\t
\t    \t\t\t\t<div class=\"col s12 l6\">
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-header colorPrincipal\"><h6><b><i class=\"material-icons left\">local_shipping</i>DIRECCIÓN DE ENVIO</b></h6></li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>DEPARTEMANTO:</b> ";
        // line 78
        echo $this->getAttribute(($context["compra_info"] ?? null), "region", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>PROVINCIA:</b> ";
        // line 79
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>DISTRITO:</b> ";
        // line 80
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>DIRECCIÓN:</b>";
        // line 81
        if (($this->getAttribute(($context["venta"] ?? null), "Pac_Banco", array()) == "TIENDA")) {
            echo " <b>RETIRO EN TIENDA </b> ";
        }
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Direccion", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Lote", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_DtoInt", array());
        echo " ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Urbanizacion", array());
        echo " | <b>Referencia:</b> ";
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Referencia", array());
        echo "</li>
\t    \t\t\t\t\t</ul>
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"col s12 l12 green lighten-5\">\t\t    \t\t\t\t
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
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 98
            echo "\t\t\t            \t\t<tr>
\t\t\t            \t\t\t<td>";
            // line 99
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 100
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 101
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 102
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
\t\t\t            \t\t\t<td>";
            // line 103
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
\t\t\t            \t\t\t<td><img src=\"";
            // line 104
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
        // line 107
        echo "\t\t\t            </tbody>
\t\t            </table><br>
\t\t    \t\t\t</div>

\t    \t\t\t\t<div class=\"col s12 l12\">
\t    \t\t\t\t\t";
        // line 112
        if ((($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 1) || ($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) == 2))) {
            // line 113
            echo "\t    \t\t\t\t\t<a data-target=\"modalProducto\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">add</i>Agregar producto</a>
\t    \t\t\t\t\t<a data-target=\"modalVocher\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">add</i>Pagos</a>
\t    \t\t\t\t\t<a data-target=\"modalFactura\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">list</i>Factura</a>
\t    \t\t\t\t\t<a data-target=\"modalBoleta\" class=\"btn-flat modal-trigger\"><i class=\"material-icons left\">list</i>Boleta</a>
\t    \t\t\t\t\t<a class=\"btn-flat right green-text modal-trigger\" data-target=\"modalConfirma\"><i class=\"material-icons left\">check</i>CONFIRMAR VENTA</a>
\t    \t\t\t\t\t<a class=\"btn-flat right red-text modal-trigger\" data-target=\"modalAnula\"><i class=\"material-icons left\">clear</i>ANULAR VENTA</a>
\t    \t\t\t\t\t";
        }
        // line 120
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
        // line 132
        $context["total2"] = 0;
        // line 133
        echo "\t\t\t\t      \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 134
        echo "\t\t\t\t      \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ved"]) {
            // line 135
            echo "\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t<img class=\"redondeo centrarForzado\" src=\"";
            // line 137
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
            // line 140
            echo $this->getAttribute($context["ved"], "Pro_Nombre", array());
            echo "</br>
\t\t\t\t\t    \t\t   \t\t\t\t<span class=\"enfasisB black-text\">";
            // line 141
            echo $this->getAttribute($context["ved"], "SKU_Color", array());
            echo "</span></br>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span class=\"center\">";
            // line 144
            echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
            echo "</span></br>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
            // line 147
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Precio", array()), 2, ".", " ");
            echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td id=\"tdimporte";
            // line 149
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\" class=\"center\">
\t\t\t\t\t      \t\t\t\t\t\t<span id=\"importe";
            // line 150
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Importe", array()), 2, ".", " ");
            echo "</span>
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t<td>
\t\t\t\t\t      \t\t\t\t\t\t";
            // line 153
            if ((twig_length_filter($this->env, ($context["venta_detalle"] ?? null)) > 1)) {
                echo " 
\t\t\t\t\t      \t\t\t\t\t\t<a class=\"btn-flat delPro\" data-idvd=\"";
                // line 154
                echo $this->getAttribute($context["ved"], "Pcd_IdPago_Compra_Detalle", array());
                echo "\" data-ids=\"";
                echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
                echo "\" data-cant=\"";
                echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
                echo "\"><i class=\"material-icons red-text\">clear</i></a>
\t\t\t\t\t      \t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t      \t\t\t\t";
            // line 158
            $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["ved"], "Pcd_Importe", array()));
            // line 159
            echo "\t\t\t\t\t      \t\t\t\t";
            $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["ved"], "Pce_CostoEnvio", array()));
            // line 160
            echo "\t\t\t\t            \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ved'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "\t\t\t\t      \t\t\t</tbody>
\t\t\t\t      \t\t\t<tfoot>
\t\t\t\t      \t\t\t\t";
        // line 163
        $context["totalEnvio"] = twig_round($this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()));
        // line 164
        echo "\t\t\t\t      \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 165
        echo "\t\t\t\t      \t\t\t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t \tTOTAL IMPORTE
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align\" colspan=\"2\">
\t\t\t                \t\t\t\t<span>";
        // line 170
        echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
        echo "</span>
\t\t\t                \t\t\t</td>
\t\t\t                \t\t</tr>
\t\t\t                \t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t\tTOTAL ENVÍO
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align\" colspan=\"2\">
\t\t\t                \t\t\t\t<span>";
        // line 178
        echo twig_number_format_filter($this->env, $this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()), 2, ".", " ");
        echo "</span>
\t\t\t                \t\t\t</td>
\t\t\t                \t\t</tr>
\t\t\t                \t\t<tr>
\t\t\t                \t\t\t<td colspan=\"4\" class=\"right-align sinPadding\">
\t\t\t                \t\t\t\tTOTAL A PAGAR
\t\t\t                \t\t\t</td>
\t\t\t                \t\t\t<td class=\"center-align\" colspan=\"2\">
\t\t\t                \t\t\t\t<b style=\"font-size:2em;\">";
        // line 186
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
        // line 202
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "</span>
          <div class=\"row\">
\t        <div class=\"input-field col s6\">
\t          <input id=\"razonSocial\" type=\"text\" class=\"validate\" value=\"";
        // line 205
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        echo "\">
\t          <label for=\"razonSocial\">Razón Social</label>
\t        </div>
\t        <div class=\"input-field col s6\">
\t          <input type=\"text\" id=\"ruc\" class=\"validate\" value=\"";
        // line 209
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
        // line 217
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlf\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeo\" class=\"validate\" value=\"";
        // line 221
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\" disabled>
\t          <label for=\"ubigeo\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"direccion\" class=\"validate\" value=\"";
        // line 225
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
        // line 229
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
        // line 237
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
        // line 248
        echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        echo "\">
\t          <label for=\"numerodoc\">Número Documento</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input id=\"razonSocial2\" type=\"text\" class=\"validate\" value=\"";
        // line 252
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
        // line 260
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "\">
\t          <label for=\"tlf\">Teléfono</label>
\t        </div>
\t        <div class=\"input-field col s4\">
\t          <input type=\"text\" id=\"ubigeo\" class=\"validate\" value=\"";
        // line 264
        echo $this->getAttribute(($context["compra_info"] ?? null), "iddistrito", array());
        echo "\" disabled>
\t          <label for=\"ubigeo\">UBIGEO</label>
\t        </div>
\t        <div class=\"input-field col s12\">
\t          <input type=\"text\" id=\"direccion\" class=\"validate\" value=\"";
        // line 268
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
        // line 272
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
        // line 282
        echo ($context["idventa"] ?? null);
        echo "\">CONFIRMAR</a>
        </div>
    </div>
    <div id=\"modalAnula\" class=\"modal amber\" style=\"z-index:9999 !important;width: 50%!important;\">
        <div class=\"modal-content center\">
        \t<p>SOLO DE ANULAR CUANDO SE HAYA CONFIRMADO LA CANCELACIÓN POR PARTE DEL CLIENTE O HAYAN PASADO 24 HORAS DE REALIZO LA COMPRA Y NO HUBIESE COMUNICACIÓN. SI ES ASÍ DAR CLICK EN <b>ANULAR</b></p>
        \t<a class=\"btn red anuV\" data-idv=\"";
        // line 288
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
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 299
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
        // line 301
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
        // line 341
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
        // line 349
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
        // line 358
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 360
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 361
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 362
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 363
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 367
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
        // line 381
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b> 
\t\t \t\t</td>
    \t</table> 
        <table>
    \t\t<tr>
    \t\t\t<td width=\"50%\" align=\"\">
    \t\t\t\t<div style=\"font-size:14px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\tFecha de venta: ";
        // line 388
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 390
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 391
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 392
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 393
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t</td>
    \t\t\t<td  width=\"50%\" align=\"\">
\t\t \t\t\t<div style=\"font-size:14px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 399
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
\t\t \t\t\t\tVendedor:<h5>";
        // line 400
        echo $this->getAttribute(($context["venta"] ?? null), "vendedor", array());
        echo "</h5>
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
        // line 418
        echo "  \t\t\t\t";
        $context["total2"] = 0;
        // line 419
        echo "  \t\t\t\t";
        $context["totalEnvio"] = 0;
        // line 420
        echo "  \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ved"]) {
            // line 421
            echo "      \t\t\t\t<tr>
      \t\t\t\t\t<td class=\"\">
      \t\t\t\t\t\t<input type=\"checkbox\" name=\"\"> 
      \t\t\t\t\t</td>
      \t\t\t\t\t<td class=\"\">
      \t\t\t\t\t\t<img class=\"redondeo centrarForzado\" src=\"";
            // line 426
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
            // line 429
            echo $this->getAttribute($context["ved"], "Pro_Nombre", array());
            echo "</br>
    \t\t   \t\t\t\t<span class=\"enfasisB black-text\">";
            // line 430
            echo $this->getAttribute($context["ved"], "SKU_Color", array());
            echo "</span></br>
    \t\t\t\t\t</td>

    \t\t\t\t\t<td align=\"center\">
      \t\t\t\t\t\t<span class=\"center\">";
            // line 434
            echo $this->getAttribute($context["ved"], "Pcd_Cantidad", array());
            echo "</span></br>
    \t\t\t\t\t</td>
      \t\t\t\t\t<td class=\"center\">

      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
            // line 438
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Precio", array()), 2, ".", " ");
            echo "</span>
      \t\t\t\t\t</td>
      \t\t\t\t\t<td id=\"tdimporte";
            // line 440
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\" class=\"center\">
      \t\t\t\t\t\t<span id=\"importe";
            // line 441
            echo $this->getAttribute($context["ved"], "SKU_IdSKU", array());
            echo "\">";
            echo twig_number_format_filter($this->env, $this->getAttribute($context["ved"], "Pcd_Importe", array()), 2, ".", " ");
            echo "</span>
      \t\t\t\t\t</td>
      \t\t\t\t</tr>
      \t\t\t\t";
            // line 444
            $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["ved"], "Pcd_Importe", array()));
            // line 445
            echo "      \t\t\t\t";
            $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["ved"], "Pce_CostoEnvio", array()));
            // line 446
            echo "        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ved'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "  \t\t\t</tbody>
  \t\t\t<tfoot>
  \t\t\t\t";
        // line 449
        $context["totalEnvio"] = twig_round($this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()));
        // line 450
        echo "  \t\t\t\t";
        $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
        // line 451
        echo "  \t\t\t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 452
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"5\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL IMPORTE</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 456
        echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 460
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"5\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL ENVÍO</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 464
        echo twig_number_format_filter($this->env, $this->getAttribute(($context["venta"] ?? null), "Pac_Envio", array()), 2, ".", " ");
        echo "</span></b>
        \t\t\t</td>
        \t\t</tr>
        \t\t<tr>
        \t\t\t<input type=\"hidden\" value=\"";
        // line 468
        echo ($context["monto_cotizado"] ?? null);
        echo "\" id=\"totalDscto_\">
        \t\t\t<td colspan=\"5\" style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>TOTAL A PAGAR</b> 
        \t\t\t<td style=\"border-bottom: 1px solid;\">
        \t\t\t\t<b>S/ <span class=\"fontA\">";
        // line 472
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
        // line 489
        $context["montV"] = 0;
        echo "          \t
        \t";
        // line 490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 491
            echo "        \t\t<tr>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 492
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 493
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 494
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 495
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
        \t\t\t<td style=\"border-bottom:1px solid black;\">";
            // line 496
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
        \t\t\t";
            // line 497
            $context["montV"] = (($context["montV"] ?? null) + $this->getAttribute($context["v"], "Pvoc_Monto", array()));
            // line 498
            echo "        \t\t</tr>
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 500
        echo "        </tbody>
      </table><br>
        <h4 style=\"color: red;\">";
        // line 502
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
        // line 514
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
        // line 528
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
        // line 564
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vauche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 565
            echo "\t            \t\t<tr>
\t            \t\t\t<td>";
            // line 566
            echo $this->getAttribute($context["v"], "Pvoc_MedioPago", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 567
            echo $this->getAttribute($context["v"], "Pvoc_Monto", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 568
            if (($this->getAttribute($context["v"], "Pvoc_EstadoComprobante", array()) == 0)) {
                echo "<span class=\"new badge red\">PENDIENTE</span>";
            } else {
                echo "<span class=\"new badge green\">VERIFICADO</span>";
            }
            echo "</td>
\t            \t\t\t<td>";
            // line 569
            echo $this->getAttribute($context["v"], "Pvoc_NumComprobante", array());
            echo "</td>
\t            \t\t\t<td>";
            // line 570
            echo $this->getAttribute($context["v"], "Pvoc_FechaComprobante", array());
            echo "</td>
\t            \t\t\t<td><img src=\"";
            // line 571
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
        // line 574
        echo "\t            </tbody>
            </table>
\t    </div>
\t    <div class=\"modal-footer\">               
\t    \t\t<a class=\"btn black-text white modal-action modal-close waves-effect waves-red btn-flat\">CERRAR</a>
                <a id=\"btnRegistrarComprobante\" data-idv=\"";
        // line 579
        echo ($context["idventa"] ?? null);
        echo "\" class=\"btn green white-text\">Cargar pago</a>
         </div>
\t </div>
";
    }

    // line 584
    public function block_script($context, array $blocks = array())
    {
        // line 585
        echo "\t<script src=\"https://printjs-4de6.kxcdn.com/print.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
\t<script src=\"";
        // line 588
        echo base_url("public/");
        echo "js/tienda/detalleventa.js?v=2506\"></script>
\t<script src=\"";
        // line 589
        echo base_url("public/");
        echo "js/tienda/pago_pedido.js?v=0607\"></script>
\t<script src=\"";
        // line 590
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
        return array (  1185 => 590,  1181 => 589,  1177 => 588,  1172 => 585,  1169 => 584,  1161 => 579,  1154 => 574,  1143 => 571,  1139 => 570,  1135 => 569,  1127 => 568,  1123 => 567,  1119 => 566,  1116 => 565,  1112 => 564,  1073 => 528,  1052 => 514,  1033 => 502,  1029 => 500,  1022 => 498,  1020 => 497,  1016 => 496,  1012 => 495,  1004 => 494,  1000 => 493,  996 => 492,  993 => 491,  989 => 490,  985 => 489,  965 => 472,  958 => 468,  951 => 464,  944 => 460,  937 => 456,  930 => 452,  927 => 451,  924 => 450,  922 => 449,  918 => 447,  912 => 446,  909 => 445,  907 => 444,  899 => 441,  895 => 440,  888 => 438,  881 => 434,  874 => 430,  870 => 429,  859 => 426,  852 => 421,  847 => 420,  844 => 419,  841 => 418,  821 => 400,  803 => 399,  794 => 393,  790 => 392,  782 => 391,  774 => 390,  769 => 388,  759 => 381,  728 => 367,  721 => 363,  717 => 362,  709 => 361,  701 => 360,  696 => 358,  684 => 349,  673 => 341,  631 => 301,  610 => 299,  606 => 298,  593 => 288,  584 => 282,  571 => 272,  552 => 268,  545 => 264,  538 => 260,  527 => 252,  520 => 248,  506 => 237,  495 => 229,  476 => 225,  469 => 221,  462 => 217,  451 => 209,  444 => 205,  438 => 202,  419 => 186,  408 => 178,  397 => 170,  390 => 165,  387 => 164,  385 => 163,  381 => 161,  375 => 160,  372 => 159,  370 => 158,  366 => 156,  357 => 154,  353 => 153,  345 => 150,  341 => 149,  334 => 147,  328 => 144,  322 => 141,  318 => 140,  307 => 137,  303 => 135,  298 => 134,  295 => 133,  293 => 132,  279 => 120,  270 => 113,  268 => 112,  261 => 107,  250 => 104,  246 => 103,  242 => 102,  234 => 101,  230 => 100,  226 => 99,  223 => 98,  219 => 97,  188 => 81,  184 => 80,  180 => 79,  176 => 78,  166 => 72,  161 => 70,  158 => 69,  156 => 68,  152 => 67,  144 => 66,  136 => 65,  128 => 64,  122 => 60,  115 => 55,  107 => 51,  100 => 47,  95 => 44,  93 => 43,  68 => 33,  58 => 25,  55 => 24,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/detalle_venta.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\vendedor\\detalle_venta.twig");
    }
}