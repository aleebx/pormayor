<?php

/* vendedor/listado_cliente.twig */
class __TwigTemplate_35934ccf430f1fa05098e8b5f5f753a1b2e0e3cee5c87fb73ff41848c485477a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/listado_cliente.twig", 1);
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css\">
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"\">
    <div class=\"card\">
      <div class=\"card-content\">
        <h4>Listado de clientes - Todos los clientes registrado en PorMayor</h4>
        <small></small>
        <table id=\"listado\">
          <thead>
            <tr>
                <th>Fecha Creado</th>
                <th>Cliente</th>
                <th>Ubicación</th>
                <th>Teléfono</th>
                <th>Ventas</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </tr>
          </thead>
          <tbody>
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 26
            echo "                <tr>
                  <td>";
            // line 27
            echo twig_date_format_filter($this->env, $this->getAttribute($context["c"], "Usu_Created", array()), "Y/m/d");
            echo "</td>
                  <td>";
            // line 28
            echo $this->getAttribute($context["c"], "Per_Nombre", array());
            echo " ";
            echo $this->getAttribute($context["c"], "Usu_Correo", array());
            echo "</td>
                  <td>";
            // line 29
            echo $this->getAttribute($context["c"], "dep", array());
            echo " - ";
            echo $this->getAttribute($context["c"], "dis", array());
            echo "</td>
                  <td>";
            // line 30
            echo $this->getAttribute($context["c"], "Per_Telefono", array());
            echo "</td>
                  <td>";
            // line 31
            echo $this->getAttribute($context["c"], "compras", array());
            echo "</td>
                  ";
            // line 32
            if (($this->getAttribute($context["c"], "Usu_IdUsuario_Ven", array()) == 0)) {
                // line 33
                echo "                  <td id=\"td";
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\"><a class=\"btn btn-primary assCliente\" data-idu=\"";
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\">ASIGNARME</a></td>
                  ";
            } else {
                // line 35
                echo "                  <td>";
                echo $this->getAttribute($context["c"], "vendedor", array());
                echo "</td>
                  ";
            }
            // line 37
            echo "                  <td><a class=\"btn blue modal-trigger\" id=\"";
            echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
            echo "\" accessKey=\"";
            echo $this->getAttribute($context["c"], "Usu_Correo", array());
            echo "\" href=\"#modalGes\">Clave</a></td>
                  <td>
                  <div class=\"switch orange-text\">
                    <label>
                      <input type=\"checkbox\" class=\"estadoP\" data-id=\"";
            // line 41
            echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
            echo "\" data-sa=\"";
            echo $this->getAttribute($context["c"], "Usu_Activated", array());
            echo "\" ";
            if (($this->getAttribute($context["c"], "Usu_Activated", array()) == 1)) {
                echo "checked";
            }
            echo " />
                      <span class=\"lever\"></span>
                    </label>
                  </div>
                </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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

    // line 58
    public function block_script($context, array $blocks = array())
    {
        // line 59
        echo "  <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js\"></script>
  <script src=\"";
        // line 60
        echo base_url("public/");
        echo "js/vendedor/lcliente.js?v=12\" type=\"text/javascript\"></script>
  <script>
  \$(document).ready( function () {
    \$('#listado').DataTable({
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
              \"first\":      \"Primero\",
              \"last\":       \"Último\",
              \"next\":       \"Siguiente\",
              \"previous\":   \"Anterior\"
                  }
      }
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
                 \$('#loadEdit').load(base_url+'vnd/vista_clave',{id:idv,est:est});
                },
              complete: function() {
              } // Callback for Modal close
          });
});

     \$('.estadoP').on(\"click\", function(){
      console.log(\"data\");
        var Usu_IdUsuario = \$(this).data('id');
        var Usu_Activated = \$(this).data('sa');
         \$.ajax({
            data:{
            'Usu_IdUsuario' : Usu_IdUsuario,
            'Usu_Activated' : Usu_Activated
            },
              type: \"POST\",
              url: base_url+'vnd/estado_usuario', 
              dataType: \"json\",
              success: function(data){
                console.log(data);
                // location.reload(true);
             },
            });
      
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/listado_cliente.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  153 => 59,  150 => 58,  138 => 48,  119 => 41,  109 => 37,  103 => 35,  95 => 33,  93 => 32,  89 => 31,  85 => 30,  79 => 29,  73 => 28,  69 => 27,  66 => 26,  62 => 25,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/listado_cliente.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\listado_cliente.twig");
    }
}
