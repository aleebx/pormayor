<?php

/* comprador/compras.twig */
class __TwigTemplate_44b1e69f881865f39ab870c88e948c4919e0399d32063576afeb725f9e0e411b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_usu.twig", "comprador/compras.twig", 1);
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
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/spinkit/1.2.5/spinkit.min.css\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\"  media=\"screen,projection\"/>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "   \t<main class=\"container\" style=\"width:95%\">
      <div class=\"card\">
          \t<div class=\"card-content center sinPadding\">
          \t\t<div class=\"row cardContentFix\">
\t\t         \t";
        // line 12
        if ((($context["ventas"] ?? null) || ($context["compras"] ?? null))) {
            // line 13
            echo "\t\t       \t\t\t<table id=\"listVentaTbl\" class=\"display\" style=\"width:100%\">
\t\t\t\t\t\t    <thead>
\t\t\t\t\t\t      \t<tr>
\t\t\t\t\t\t          \t<th class=\"\">#</th>
\t\t\t\t\t\t          \t<th class=\"\">MONTO</th>
\t\t\t\t\t\t          \t<th class=\"center\">TIPO DE VENTA</th>
\t\t\t\t\t\t          \t<th class=\"\">ESTATUS</th>
\t\t\t\t\t\t          \t<th class=\"\">FECHA</th>
\t\t\t\t\t\t          \t<th class=\"\">ACCIÓN</th>
\t\t\t\t\t\t        </tr>
\t\t\t\t\t\t    </thead> 
\t\t\t\t\t\t    
\t\t\t\t\t\t    <tbody>
\t\t\t\t             \t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["compras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                // line 27
                echo "\t\t\t\t             \t\t<tr>
\t\t\t\t             \t\t\t<td>CS";
                // line 28
                echo sprintf("%06d", $this->getAttribute($context["com"], "Pac_IdPago_Compra", array()));
                echo "</td>

\t\t\t\t\t\t\t\t\t\t<td>S/ ";
                // line 30
                echo $this->getAttribute($context["com"], "total", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new badge black-text ";
                // line 32
                if (($this->getAttribute($context["com"], "Pac_Banco", array()) == "NO")) {
                    echo "light-blue lighten-3\">CONTRAENTREGA";
                } elseif (($this->getAttribute($context["com"], "Pac_Banco", array()) == "Visanet")) {
                    echo "light-green\">TARJETA";
                } elseif (($this->getAttribute($context["com"], "Pac_Banco", array()) == "TDO")) {
                    echo " purple lighten-4\">DOT";
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new badge black-text negrita ";
                // line 36
                if (($this->getAttribute($context["com"], "Pac_Estado", array()) == 1)) {
                    echo "green accent-4\">NUEVA";
                } elseif (($this->getAttribute($context["com"], "Pac_Estado", array()) == 2)) {
                    echo "light-green accent-4\">CONFIRMADA";
                } elseif (($this->getAttribute($context["com"], "Pac_Estado", array()) == 3)) {
                    echo "lime accent-2\">RECOGO";
                } elseif (($this->getAttribute($context["com"], "Pac_Estado", array()) == 4)) {
                    echo "deep-orange accent-2\">CORRIER";
                } elseif (($this->getAttribute($context["com"], "Pac_Estado", array()) == 5)) {
                    echo " green darken-4\">ENTREGADO";
                } elseif (($this->getAttribute($context["com"], "Pac_Estado", array()) == 6)) {
                    echo "red darken-3\">ANULADO";
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 38
                echo $this->getAttribute($context["com"], "Pac_FechaRegistro", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn\"href=\"";
                // line 39
                echo base_url();
                echo "comprador/compra/detalle_compra/";
                echo $this->getAttribute($context["com"], "Pac_IdPago_Compra", array());
                echo "\">Ver detalle</a></td>
\t\t\t\t\t\t\t\t\t</tr>\t\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>\t
\t            \t";
        } else {
            // line 45
            echo "\t            \t\t<h5 class=\"center card-title\">";
            echo $this->getAttribute(($context["pagina"] ?? null), "titulo", array());
            echo "</h5>
\t\t\t\t\t    <div class=\"row\"><div class=\"divider\"></div></div>
\t\t\t\t \t\t<div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 48
            echo ($context["ruta_img"] ?? null);
            echo "emptyBuy.webp\" height=\"150\"></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"center col s12 m12 l12\">
\t\t\t\t\t\t\t<h5>Sin compras procesadas</h5>
\t\t\t\t\t\t\t<p class=\"enfasisB\">Aún no haz realizado ninguna compra</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"center col s12 m12 l12\" style=\"margin:15px 0px\">
\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo base_url();
            echo "\" class=\"btn colorAccent\">Comienza a cotizar</a>
\t\t\t\t\t\t</div>
\t\t            ";
        }
        // line 57
        echo "             
            \t</div>
        \t</div>
\t\t</div>
    </main>
";
    }

    // line 64
    public function block_script($context, array $blocks = array())
    {
        // line 65
        echo "\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t//Cambio Footer
\t    \$('.footerSecundario').removeClass('hide');
\t    \$('.footerPrincipal').addClass('hide');

\t    \$('#listVentaTbl').DataTable({
\t     \t\"order\": [[ 0, 'desc' ], [ 0, 'asc' ]],
\t        \"language\": {
\t            \"lengthMenu\": \"\",
\t            \"zeroRecords\": \"No se encontro nada\",
\t            \"info\": \"Página _PAGE_ de _PAGES_\",
\t            \"infoEmpty\": \"No hay registros disponibles\",
\t\t\t    \"emptyTable\":     \"No hay información en la tabla\",
\t\t\t    \"infoFiltered\":   \"(filtrado de _MAX_ ventas)\",
\t\t\t    \"infoPostFix\":    \"\",
\t\t\t    \"thousands\":      \",\",
\t\t\t    \"loadingRecords\": \"Cargando...\",
\t\t\t    \"processing\":     \"Procesando...\",
\t\t\t    \"search\":         \"Buscar:\",
\t\t\t    \"paginate\": {
\t\t\t        \"first\":      \"Primero\",
\t\t\t        \"last\":       \"Último\",
\t\t\t        \"next\":       \"Siguiente\",
\t\t\t        \"previous\":   \"Anterior\"
\t\t\t\t        }
\t\t\t}
\t\t});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "comprador/compras.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  165 => 64,  156 => 57,  150 => 55,  140 => 48,  133 => 45,  128 => 42,  117 => 39,  113 => 38,  96 => 36,  83 => 32,  78 => 30,  73 => 28,  70 => 27,  66 => 26,  51 => 13,  49 => 12,  43 => 8,  40 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "comprador/compras.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\comprador\\compras.twig");
    }
}
