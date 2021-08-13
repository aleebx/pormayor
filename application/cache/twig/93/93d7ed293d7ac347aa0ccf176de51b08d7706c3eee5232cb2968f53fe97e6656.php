<?php

/* almacen/listado.twig */
class __TwigTemplate_4b78c77873e03471fe9425d240c884ad0eef0d1670e37b5d182e32fd013a0fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_almacen.twig", "almacen/listado.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_almacen.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css\">
  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  <main class=\"\">
    <div class=\"card\">
      <div class=\"card-content\">
      <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        <span class=\"cart-title\">Listado de productos</span>
        <table id=\"listado\">
          <thead>
            <tr>
                <th></th>
                <th>Nombre Producto</th>
                <th>Cantidad Cajas</th>
                <th>Cantidad Unidades</th>
                <th>Ultimo Movimiento</th>
                <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "                <tr>
                  <td><img src=\"";
            // line 26
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["p"], "img_producto", array());
            echo "\" height=\"40px\"></td>
                  <td>";
            // line 27
            echo $this->getAttribute($context["p"], "nombre_producto", array());
            echo "</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </tbody>
        </table>
      </div>
    </div>
  </main>
  <div id=\"modalGes\" class=\"modal\" style=\"z-index:9999 !important;width: 50%!important;\">
      <div class=\"modal-content\" id=\"loadEdit\"></div>
  </div>
";
    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        // line 45
        echo "  <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
  <script>
  \$(document).ready( function () {
    \$('#listado').DataTable({
      \"responsive\": true,
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
              \"first\":      \"Primero\",
              \"last\":       \"Último\",
              \"next\":       \"Siguiente\",
              \"previous\":   \"Anterior\"
                  }
      }
    });

    \$('.quitar').click(function(){
  var id_usuario = \$(this).data('idu');
   \$.ajax({
       data:{
        id_usuario : id_usuario
       },
       type: \"POST\",
       url: base_url+'vnd/cambiar_estado', 
       dataType: \"json\",
       beforeSend:function(){
        loading_screen = pleaseWait({
            logo:\"\",
            backgroundColor: '#fff',
            loadingHtml: \"<img src='";
        // line 85
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
            });
       },
       success: function(data){
        \$('.trt'+id_usuario).addClass('hide');
        loading_screen.finish();
       },
       error: function(data) {
         alert('error');
         console.log(data);
       }
    });
 });
  
    \$('#modalGes').modal({
             dismissible:true, // Modal can be dismissed by clicking outside of the modal
             opacity:.8, // Opacity of modal background
             inDuration:300, // Transition in duration
             outDuration:200, // Transition out duration
             startingTop:'5%', // Starting top style attribute
             endingTop:'10%', // Ending top style attribute
              ready:function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                 var est=trigger[0]['accessKey'];
                 var idv=trigger[0]['id'];
                 var xd=trigger[0]['attributes'][3]['nodeValue'];
                 \$('#loadEdit').load(base_url+'vnd/gestion',{id:idv,est:est,xd:xd});
                },
              complete: function() {
              } // Callback for Modal close
          });

  } );
  </script>
";
    }

    public function getTemplateName()
    {
        return "almacen/listado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 85,  101 => 45,  98 => 44,  86 => 34,  73 => 27,  68 => 26,  65 => 25,  61 => 24,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "almacen/listado.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\almacen\\listado.twig");
    }
}
