<?php

/* admin/detalle_venta_q.twig */
class __TwigTemplate_fd050f43ae4ae16052c4bc78c99fd49de58ad64682a776fb45f0d350494e6cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/detalle_venta_q.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_adm.twig";
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
        echo base_url("public/intranet/css/gestion_pedido.css");
        echo "\" media=\"screen,projection\"/>
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://printjs-4de6.kxcdn.com/print.min.css\"  media=\"screen,projection\"/>
\t<style type=\"text/css\">
\t\tblockquote {
\t\t\tborder-left: 5px solid #121212;
\t\t\tfont-size: 16px;
\t\t}
\t\ttable thead tr th {
\t\t\tborder-radius: 0px;
\t\t}
\t\t.pSmall {
\t\t\tpadding:4px !important;
\t\t}
\t\t.end {
\t\t\ttext-align: end;
\t\t}
\t</style>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    <main class=\"container\" style=\"width:95%\">
    \t<div class=\"card\">
        \t<div class=\"card-content sinPadding\">
        \t\t<div class=\"row cardContentFix\">
\t    \t\t\t<h5 class=\"center card-title\"><b>DETALLE DE VENTA</b></h5>
\t    \t\t\t<div class=\"divider\"></div><br>
\t    \t\t\t<div class=\"row\">
\t    \t\t\t\t<div class=\"col s12 m12 l12 center\">
\t    \t\t\t\t\t<span style=\"padding:5px;border-radius:4px;\" class=\"negrita black-text fontA ";
        // line 30
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
        } elseif (($this->getAttribute(($context["v"] ?? null), "Pac_Estado", array()) == 6)) {
            echo "red darken-3\">ANULADO";
        }
        echo "</span>
\t    \t\t\t\t</div>
\t    \t\t
\t    \t\t\t\t<div class=\"col s12 l6\">
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-header blue\"><h5><b><i class=\"material-icons left\">person</i>DATOS CLIENTE</b></h5></li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>NOMBRE COMPLETO:</b> ";
        // line 36
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>D.N.I:</b> ";
        // line 37
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>TELÉFONO:</b> ";
        // line 38
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>FECHA:</b> ";
        // line 39
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "</li>
\t    \t\t\t\t\t</ul>
\t\t    \t\t\t</div>

\t    \t\t\t\t<div class=\"col s12 l6\">
\t    \t\t\t\t\t<ul class=\"collection with-header\">
\t    \t\t\t\t\t\t<li class=\"collection-header blue\"><h5><b><i class=\"material-icons left\">local_shipping</i>DIRECCIÓN DE ENVIO</b></h5></li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>DEPARTEMANTO:</b> ";
        // line 46
        echo $this->getAttribute(($context["compra_info"] ?? null), "region", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>PROVINCIA:</b> ";
        // line 47
        echo $this->getAttribute(($context["compra_info"] ?? null), "provincia", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>DISTRITO:</b> ";
        // line 48
        echo $this->getAttribute(($context["compra_info"] ?? null), "distrito", array());
        echo "</li>
\t    \t\t\t\t\t\t<li class=\"collection-item pSmall\"><b>DIRECCIÓN:</b> ";
        // line 49
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

\t\t   \t\t\t\t<div class=\"col s12 l12\">
\t\t\t\t      \t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_tiendas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            // line 55
            echo "\t\t    \t\t\t\t<div class=\"col s12 l12\">
\t\t\t\t\t      \t\t<table class=\"bordered anchoTotal\">
\t\t\t\t\t      \t\t\t<thead style=\"table-layout:fixed\" class=\"\">
\t\t\t\t\t      \t\t\t\t<tr class=\"sinPadding\">
\t\t\t\t\t      \t\t\t\t\t<th class=\"center pSmall blue\"><h5>TIENDA<br><b>";
            // line 59
            echo $this->getAttribute($context["dat"], "Tie_Nombre", array());
            echo "</b></h5></th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center pSmall blue\"><h5>TELÉFONO<br><b>";
            // line 60
            echo $this->getAttribute($context["dat"], "Tie_Telefono", array());
            echo "</b></h5></th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center pSmall blue\"><h5>Nº OS<br><b>";
            // line 61
            echo $this->getAttribute($context["dat"], "Tie_CodEnvio", array());
            echo "</b></h5></th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center pSmall\">
\t\t\t\t\t      \t\t\t\t\t\t";
            // line 63
            if (($this->getAttribute(($context["venta"] ?? null), "Pac_Estado", array()) > 1)) {
                // line 64
                echo "\t\t\t\t\t\t      \t\t\t\t\t\t";
                if (($this->getAttribute($context["dat"], "Tie_CodEnvio", array()) == 0)) {
                    // line 65
                    echo "\t\t\t\t\t\t      \t\t\t\t\t\t\t<a class=\"btn negrita red envRecojo\" href=\"#\" onclick=\"envioRecojo(";
                    echo $this->getAttribute(($context["id"] ?? null), "Pac_IdPago_Compra", array());
                    echo ",";
                    echo $this->getAttribute($context["dat"], "Tie_IdTienda", array());
                    echo ")\" style=\"width:100%;\"><i class=\"material-icons left\">local_shipping</i>ENV. RECOJO</a>
\t\t\t\t\t\t      \t\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t\t      \t\t\t\t\t";
            }
            echo "\t\t
\t\t\t\t\t      \t\t\t\t\t\t
\t\t\t\t\t      \t\t\t\t\t\t<a class=\"btn negrita\" href=\"http://runningbox.azurewebsites.net/Orden/ListaTracking/";
            // line 69
            echo $this->getAttribute($context["dat"], "Tie_CodEnvio", array());
            echo "\" target=\"_blank\" style=\"width:100%;\"><i class=\"material-icons left\">near_me</i>CONSULTAR</a>
\t\t\t\t\t      \t\t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t\t<a class=\"btn negrita\" onclick=\"printJS('printJS-form', 'html')\" style=\"width:100%;\"><i class=\"material-icons left\">print</i>IMPRIMIR OS</a>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" name=\"nOS\" id=\"nOS\" class=\"hide\" value=\"";
            // line 72
            echo $this->getAttribute($context["dat"], "Tie_CodEnvio", array());
            echo "\">\t    \t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center blue\" style=\"width:40%\">PRODUCTO</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center blue\" style=\"width:20%\">CANTIDAD</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center blue\" style=\"width:20%\">PRECIO</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"center blue\" style=\"width:20%\">IMPORTE</th>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t      \t\t\t</thead>
\t\t\t\t\t      \t\t\t<tbody>
\t\t\t\t\t      \t\t\t\t";
            // line 83
            $context["total"] = 3;
            // line 84
            echo "\t\t\t\t\t      \t\t\t\t";
            $context["total2"] = 0;
            // line 85
            echo "\t\t\t\t\t      \t\t\t\t";
            $context["totalEnvio"] = 0;
            // line 86
            echo "\t\t\t\t\t      \t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["venta_detalle"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                // line 87
                echo "\t\t\t\t\t      \t\t\t\t\t";
                if (($this->getAttribute($context["dat"], "Tie_IdTienda", array()) == $this->getAttribute($context["com"], "Tie_IdTienda", array()))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t\t\t      \t\t\t\t\t<td class=\"left\">
\t\t\t\t\t\t\t      \t\t\t\t\t\t";
                    // line 90
                    echo $this->getAttribute($context["com"], "Pro_Nombre", array());
                    echo "</br>
\t\t\t\t\t    \t\t   \t\t\t\t<span class=\"enfasisB black-text\">";
                    // line 91
                    echo $this->getAttribute($context["com"], "Var_Nombre", array());
                    echo " ";
                    echo $this->getAttribute($context["com"], "Vao_Nombre", array());
                    echo " ";
                    if ((($this->getAttribute($context["com"], "SKU_Color", array()) != " ") && ($this->getAttribute($context["com"], "SKU_Color", array()) != ""))) {
                        echo "(";
                        echo $this->getAttribute($context["com"], "SKU_Color", array());
                        echo ")";
                    }
                    echo "</span></br>
\t\t\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t\t\t    \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t    \t\t\t\t\t";
                    // line 94
                    echo $this->getAttribute($context["com"], "Pcd_Cantidad", array());
                    echo "
\t\t\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t\t\t      \t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t      \t\t\t\t\t\t";
                    // line 97
                    $context["precioventa"] = $this->getAttribute($context["com"], "Pcd_Precio", array());
                    // line 98
                    echo "\t\t\t\t\t\t\t      \t\t\t\t\t\t<span class=\"precioventa\" id=\"precioventa";
                    echo $this->getAttribute(($context["ved"] ?? null), "Pcd_IdSKU", array());
                    echo "\">";
                    echo twig_number_format_filter($this->env, ($context["precioventa"] ?? null), 2, ".", " ");
                    echo "</span>
\t\t\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t\t\t      \t\t\t\t\t<td id=\"tdimporte";
                    // line 100
                    echo $this->getAttribute($context["com"], "Pcd_IdSKU", array());
                    echo "\" class=\"center\">
\t\t\t\t\t\t\t      \t\t\t\t\t\t<span id=\"importe";
                    // line 101
                    echo $this->getAttribute($context["com"], "Pcd_IdSKU", array());
                    echo "\">";
                    echo twig_number_format_filter($this->env, $this->getAttribute($context["com"], "Pcd_Importe", array()), 2, ".", " ");
                    echo "</span>
\t\t\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t\t\t      \t\t\t\t
\t\t\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t\t\t      \t\t\t\t";
                    // line 105
                    $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["com"], "Pcd_Importe", array()));
                    // line 106
                    echo "\t\t\t\t\t\t\t      \t\t\t\t";
                    $context["total2"] = (($context["total2"] ?? null) + $this->getAttribute($context["com"], "Pcd_Importe", array()));
                    // line 107
                    echo "\t\t\t\t\t\t\t      \t\t\t\t";
                    $context["totalEnvio"] = (($context["totalEnvio"] ?? null) + $this->getAttribute($context["com"], "costoEnvio", array()));
                    // line 108
                    echo "\t\t\t\t\t\t\t      \t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t\t\t            \t\t
\t\t\t\t\t            \t\t<tfoot>
\t\t\t\t\t\t      \t\t\t\t";
            // line 112
            $context["totalEnvio"] = twig_round(($context["totalEnvio"] ?? null));
            // line 113
            echo "
\t\t\t\t\t\t      \t\t\t\t";
            // line 114
            $context["totalPagar"] = (($context["total2"] ?? null) + ($context["totalEnvio"] ?? null));
            // line 115
            echo "\t\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t                \t\t\t<input type=\"hidden\" value=\"";
            // line 116
            echo ($context["monto_cotizado"] ?? null);
            echo "\" id=\"totalDscto_\">
\t\t\t\t\t                \t\t\t<td colspan=\"3\" class=\"right-align sinPadding\">
\t\t\t\t\t                \t\t\t\t<b>TOTAL IMPORTE</b> 
\t\t\t\t\t                \t\t\t<td class=\"center-align sinPadding\" colspan=\"2\">
\t\t\t\t\t                \t\t\t\t<b>S/ <span class=\"fontA\">";
            // line 120
            echo twig_number_format_filter($this->env, ($context["total2"] ?? null), 2, ".", " ");
            echo "</span></b>
\t\t\t\t\t                \t\t\t</td>
\t\t\t\t\t                \t\t</tr>

\t\t\t\t\t                \t\t<tr>
\t\t\t\t\t                \t\t\t<input type=\"hidden\" value=\"";
            // line 125
            echo ($context["monto_cotizado"] ?? null);
            echo "\" id=\"totalDscto_\">
\t\t\t\t\t                \t\t\t<td colspan=\"3\" class=\"right-align sinPadding\">
\t\t\t\t\t                \t\t\t\t<b>TOTAL ENVÍO</b> 
\t\t\t\t\t                \t\t\t<td class=\"center-align sinPadding\" colspan=\"2\">
\t\t\t\t\t                \t\t\t\t<b>S/ <span class=\"fontA\">";
            // line 129
            echo twig_number_format_filter($this->env, ($context["totalEnvio"] ?? null), 2, ".", " ");
            echo "</span></b>
\t\t\t\t\t                \t\t\t</td>
\t\t\t\t\t                \t\t</tr>

\t\t\t\t\t                \t\t<tr>
\t\t\t\t\t                \t\t\t<input type=\"hidden\" value=\"";
            // line 134
            echo ($context["monto_cotizado"] ?? null);
            echo "\" id=\"totalDscto_\">
\t\t\t\t\t                \t\t\t<td colspan=\"3\" class=\"right-align sinPadding\">
\t\t\t\t\t                \t\t\t\t<b>TOTAL GENERAL</b> 
\t\t\t\t\t                \t\t\t<td class=\"center-align sinPadding\" colspan=\"2\">
\t\t\t\t\t                \t\t\t\t<b>S/ <span class=\"fontA\">";
            // line 138
            echo twig_number_format_filter($this->env, ($context["totalPagar"] ?? null), 2, ".", " ");
            echo "</span></b>
\t\t\t\t\t                \t\t\t</td>
\t\t\t\t\t                \t\t</tr>
\t\t\t\t\t            \t\t</tfoot>
     \t\t\t      \t\t\t\t</tbody>
\t\t\t\t\t      \t\t</table>
\t\t\t\t\t      \t\t<br><br>
\t\t    \t\t\t\t</div> 
\t\t    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t    \t\t\t\t</div>
\t    \t\t\t</div>
    \t\t\t</div>
\t\t\t</div>
\t\t</div>
    </main>

    <div class=\"hide\" id=\"printJS-form\">
    \t<table style=\"border:1px solid black;font-variant: small-caps;\">
    \t\t<tr>
    \t\t\t<td style=\"padding:50px;\">
    \t\t\t\t<img src=\"";
        // line 158
        echo ($context["ruta_img"] ?? null);
        echo "logoPM.jpg\">
    \t\t\t\t<b>WWW.PORMAYOR.PE</b><br>
    \t\t\t\tAV NICOLÁS DE PIÉROLA 1131, OFICINA 508-509,<br> CERDADO DE LIMA, LIMA. <br>
    \t\t\t\t+51 923 500 413
    \t\t\t</td>
    \t\t\t<td style=\"padding:5px;\">
    \t\t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\t";
        // line 165
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 167
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 168
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 169
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 170
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 174
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
    \t\t\t<td colspan=\"2\" aling=\"center\" style=\"font-size:50px;border:1px solid black; padding-left:350px;font-family: Arial, Helvetica, sans-serif;\">Nº OS<b id=\"nOS2\"></b></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td colspan=\"2\" aling=\"center\" style=\"font-size:30px;padding-left:270px;\">¡GRACIAS POR COMPRAR CON NOSOTROS!</td>
    \t\t</tr>
    \t</table>
    \t<br>
    \t<br>
    \t<hr>
    \t<br>
    \t<br>
    \t<table style=\"border:1px solid black;font-variant: small-caps;\">
    \t\t<tr>
    \t\t\t<td style=\"padding:50px;\">
    \t\t\t\t<img src=\"";
        // line 193
        echo ($context["ruta_img"] ?? null);
        echo "logoPM.jpg\">
    \t\t\t\t<b>WWW.PORMAYOR.PE</b><br>
    \t\t\t\tAV NICOLÁS DE PIÉROLA 1131, OFICINA 508-509,<br> CERDADO DE LIMA, LIMA. <br>
    \t\t\t\t+51 923 500 413
    \t\t\t</td>
    \t\t\t<td style=\"padding:5px;\">
    \t\t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
    \t\t\t\t\t";
        // line 200
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_FechaRegistro", array());
        echo "<br>
\t\t\t\t \t\t<b>DATOS CLIENTE</b><br>
\t\t\t\t\t\t<b>Nombre Completo:</b> ";
        // line 202
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "nombr", array());
        }
        echo "<br>
\t\t\t\t\t\t<b>D.N.I:</b> ";
        // line 203
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Dni", array())) {
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Dni", array());
        } else {
            echo $this->getAttribute(($context["venta"] ?? null), "dni", array());
        }
        echo " <br>
\t\t\t\t\t\t<b>Teléfono</b> ";
        // line 204
        echo $this->getAttribute(($context["compra_info"] ?? null), "Pci_Telefono", array());
        echo " <br>
\t\t\t\t\t\t<b>Código:</b> <b>";
        // line 205
        echo $this->getAttribute(($context["venta"] ?? null), "Pac_CodPago", array());
        echo "</b>  <br>
\t\t    \t\t</div><br>
\t\t \t\t\t<div style=\"font-size:30px;padding:5px;font-family: Arial, Helvetica, sans-serif;\">
\t\t\t\t \t\t<b>DIRECCIÓN CLIENTE</b><br>
\t\t \t\t\t\t<b>Departamento:</b> ";
        // line 209
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
    \t\t\t<td colspan=\"2\" aling=\"center\" style=\"font-size:50px;border:1px solid black; padding-left:350px;font-family: Arial, Helvetica, sans-serif;\">Nº OS<b id=\"nOS3\"></b></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td colspan=\"2\" aling=\"center\" style=\"font-size:30px;padding-left:270px;\">¡GRACIAS POR COMPRAR CON NOSOTROS!</td>
    \t\t</tr>
    \t</table>
    </div>


";
    }

    // line 225
    public function block_script($context, array $blocks = array())
    {
        // line 226
        echo "\t<script src=\"https://printjs-4de6.kxcdn.com/print.min.js\"></script>
\t<script>
\t\t\$(\"#nOS2\").text(\$(\"#nOS\").val());
\t\t\$(\"#nOS3\").text(\$(\"#nOS\").val());
\t\tfunction envioRecojo(Pac_IdPago_Compra,Tie_IdTienda) {
\t\t    if(Pac_IdPago_Compra) {
\t\t    \t\$.confirm({
\t\t\t\t      icon:'send',
\t\t\t\t      type:'green',
\t\t\t\t      theme:'modern',
\t\t\t\t      draggable:false,
\t\t\t\t      closeIcon:false,
\t\t\t\t      animation:'scale',
\t\t\t\t      columnClass:'small',
\t\t\t\t      title:'Enivar recojo',
\t\t\t\t      content:'Los datos ingresados en el modulo de compra deben ser correctos y veridicos',
\t\t\t\t      buttons: {
\t\t\t\t        Guardar: {
\t\t\t\t          \tbtnClass:'btn pormayorUnico',                    
\t\t\t\t          \taction: function() {
\t\t\t\t\t            \$.ajax({
\t\t\t\t\t            \tdata: {
\t\t\t\t\t\t             \t'Tie_IdTienda':Tie_IdTienda,
\t\t\t\t\t\t\t\t       \t'Pac_IdPago_Compra':Pac_IdPago_Compra
\t\t\t\t\t            \t},
\t\t\t\t\t            \ttype:'POST',
\t\t\t\t\t            \turl:base_url+'/admin/index/apiCurriers',
\t\t\t\t\t            \tsuccess:function(r) {
\t\t\t\t\t\t              \t\$.confirm({
\t\t\t\t\t\t\t                type:'green',
\t\t\t\t\t\t\t                theme:'modern',
\t\t\t\t\t\t\t                icon:'thumb_up',
\t\t\t\t\t\t\t                closeIcon:false,
\t\t\t\t\t\t\t                draggable:false,
\t\t\t\t\t\t\t                columnClass:'small',
\t\t\t\t\t\t\t                animationBounce:1.5,
\t\t\t\t\t\t\t                title:'Enivar recojo',
\t\t\t\t\t\t\t                content:'El rocojo de la compra fue enviado exitosamente.',
\t\t\t\t\t\t\t                buttons: {
\t\t\t\t\t\t\t                \tAceptar: {
\t\t\t\t\t\t\t\t                    text:'Actualizar información',
\t\t\t\t\t\t\t\t                    btnClass:'btn pormayorUnico',                    
\t\t\t\t\t\t\t\t                    action:function() {
\t\t\t\t\t\t\t\t                      location.reload(true);
\t\t\t\t\t\t\t\t                    }       
\t\t\t\t\t\t\t\t                }
\t\t\t\t\t\t\t                }
\t\t\t\t\t\t\t            });
\t\t\t\t\t\t\t        }
\t\t\t\t          \t\t});   
\t\t\t\t          \t}       
\t\t\t\t        },
\t\t\t\t        Cancelar:{
\t\t\t\t        }
\t\t\t\t    }
\t\t\t    });
\t\t    } else {
\t\t      Materialize.toast('<i class=\"material-icons left \">warning</i>No se ha seleccionado ninguna orden.',2000,'rounded warningToast');
\t\t    }
\t\t}
\t</script>
";
    }

    public function getTemplateName()
    {
        return "admin/detalle_venta_q.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 226,  526 => 225,  493 => 209,  486 => 205,  482 => 204,  474 => 203,  466 => 202,  461 => 200,  451 => 193,  415 => 174,  408 => 170,  404 => 169,  396 => 168,  388 => 167,  383 => 165,  373 => 158,  360 => 147,  345 => 138,  338 => 134,  330 => 129,  323 => 125,  315 => 120,  308 => 116,  305 => 115,  303 => 114,  300 => 113,  298 => 112,  294 => 110,  288 => 109,  285 => 108,  282 => 107,  279 => 106,  277 => 105,  268 => 101,  264 => 100,  256 => 98,  254 => 97,  248 => 94,  234 => 91,  230 => 90,  226 => 88,  223 => 87,  218 => 86,  215 => 85,  212 => 84,  210 => 83,  196 => 72,  190 => 69,  184 => 67,  176 => 65,  173 => 64,  171 => 63,  166 => 61,  162 => 60,  158 => 59,  152 => 55,  148 => 54,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  110 => 39,  106 => 38,  98 => 37,  90 => 36,  69 => 30,  59 => 22,  56 => 21,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/detalle_venta_q.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\detalle_venta_q.twig");
    }
}
