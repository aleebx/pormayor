<?php

/* vendedor/ventas2.twig */
class __TwigTemplate_a7da0dc1b058ec9ccd9f3f0f2582272d6734b54e6f1df35e702cf4ea5507768c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/ventas2.twig", 1);
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
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css\">

    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "   \t<main class=\"\">
    \t<div class=\"card\">
        \t<div class=\"card-content\">
        \t<h4>MIS VENTAS</h4> 
\t\t\t\t<table id=\"lventas\" style=\"width:100%\">
\t\t\t        <thead>
\t\t\t\t         <tr>
\t\t\t\t           \t<th>FECHA PEDIDO</th>
\t\t\t\t            <th>COD PEDIDO</th>
\t\t\t\t            <th>CLIENTE</th>
\t\t\t\t            <th>TIPO DE VENTA</th>
\t\t\t\t            <th>ESTADO</th>
\t\t\t\t        </tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t        </tbody>
\t\t    \t</table>
          \t</div>
\t\t</div>
    </main>
    <div id=\"modalEdit\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
\t    <div class=\"modal-content\" id=\"loadEdit\"></div>
\t</div>
";
    }

    // line 35
    public function block_script($context, array $blocks = array())
    {
        // line 36
        echo "  <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js\"></script>
\t<script type=\"text/javascript\">
var table = \$('#lventas').DataTable({
\"responsive\": true,
\"order\": [[0, \"desc\" ]],
\"language\": {
\"lengthMenu\": \"\",
\"zeroRecords\": \"No se encontro nada\",
\"info\": \"Página _PAGE_ de _PAGES_\",
\"infoEmpty\": \"No hay registros disponibles\",
\"emptyTable\":     \"No hay información en la tabla\",
\"infoFiltered\":   \"(filtrado de _MAX_ ventas)\",
\"infoPostFix\":    \"\",
\"thousands\":      \",\",
\"loadingRecords\": \"Cargando...\",
\"processing\":     \"Procesando...\",
\"search\":         \"Buscar:\",
\"paginate\": {
\t\"first\":      \"Primero\",
\t\"last\":       \"Último\",
\t\"next\":       \"Siguiente\",
\t\"previous\":   \"Anterior\"
}
},
\"bProcessing\": true,
\"sAjaxSource\": base_url + \"vnd/listadopedidos2\",
\"aoColumns\": [
\t{ mData: 'Pac_FechaRegistro' },
\t{ mData: 'Pac_CodPago' },
\t{ mData: 'Cliente' },
\t{ mData: 'Pac_Banco' },
\t{ mData: 'Pac_Estado' },
],
retrieve: true,
dom: 'Blfrtip',
createdRow: function( row, data, dataIndex ) {
\tvar estado = \$(row).find('td:eq(4)').text();
\tconsole.log(estado);
\tif(estado == \"NUEVA\"){
\t\t\$(row).find('td:eq(4)').addClass('yellow btn black-text');
\t}else if(estado == \"CONFIRMADA\"){
\t\t\$(row).find('td:eq(4)').addClass('blue btn black-text');
\t}else if(estado == \"ENTREGADO\"){
\t\t\$(row).find('td:eq(4)').addClass('green btn black-text');
\t}else if(estado == \"ANULADO\"){
\t\t\$(row).find('td:eq(4)').addClass('red btn black-text');
\t}
\t\$(row).find('td:eq(5)').addClass('negrita');
}
});

 \$('#lventas tbody').on('click', 'tr', function () {
    var data = table.row( this ).data();
    window.open( base_url+'vnd/detalle_q/'+data['Pac_IdPago_Compra'], '_blank');
} );


\$(document).ready(function(){
\$('#modalEdit').modal({
       dismissible:true, // Modal can be dismissed by clicking outside of the modal
       opacity:.8, // Opacity of modal background
       inDuration:300, // Transition in duration
       outDuration:200, // Transition out duration
       startingTop:'5%', // Starting top style attribute
       endingTop:'10%', // Ending top style attribute
        ready:function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
           var est=trigger[0]['accessKey'];
           var idv=trigger[0]['id'];
           \$('#loadEdit').load(base_url+'usuario/venta/vista_edit_estado',{id:idv,est:est});
        },
\t    complete: function() {
\t    } // Callback for Modal close
    });
});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/ventas2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  69 => 35,  42 => 10,  39 => 9,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/ventas2.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\ventas2.twig");
    }
}
