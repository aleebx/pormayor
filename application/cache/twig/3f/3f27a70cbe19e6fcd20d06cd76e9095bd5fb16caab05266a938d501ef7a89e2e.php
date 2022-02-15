<?php

/* vendedor/listado.twig */
class __TwigTemplate_0accfc47e1958e1553db9c0e3d41d4038a2bbf7452febe42a27eea8413ff7296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/listado.twig", 1);
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
      ";
        // line 11
        echo "        <h4>MIS CLIENTES</h4>
        <table id=\"listado\">
          <thead>
            <tr>
                <th>Fecha Creado</th>
                <th>Cliente</th>
                <th>ENTREGADOS</th>
                <th>RECHAZADOS</th>
                <th>VALOR TOTAL (ENTREGADO)</th>
                <th>ESTADO ULTIMO PEDIDO</th>
                <th>FECHA ULTIMO PEDIDO</th>
                <th>ESTADO CLIENTE</th>
                <th>FECHA INGRESADA</th>
                <th>MOTIVO</th>
                <th>DETALLE</th>
                <th>ULTIMA ACCIÓN</th>
                <th>FECHA PROGRAMADA</th>
                <th></th>
                <th></th>
            </tr>
          </thead>
          <tbody>
              ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 34
            echo "                <tr class=\"trt";
            echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
            echo "\">
                  <td>";
            // line 35
            echo twig_date_format_filter($this->env, $this->getAttribute($context["c"], "Usu_Created", array()), "Y/m/d");
            echo "</td>
                  <td>";
            // line 36
            echo $this->getAttribute($context["c"], "Per_Nombre", array());
            echo " -";
            echo $this->getAttribute($context["c"], "Per_Telefono", array());
            echo " <small></small></td>
                  <td>";
            // line 37
            echo $this->getAttribute($context["c"], "entregado", array());
            echo "</td>
                  <td>";
            // line 38
            echo $this->getAttribute($context["c"], "rechazado", array());
            echo "</td>
                  <td>";
            // line 39
            echo $this->getAttribute($context["c"], "monto_entregado", array());
            echo "</td>
                  <td>";
            // line 40
            if (($this->getAttribute($context["c"], "ultimo_estado", array()) == 1)) {
                echo "NUEVA";
            } elseif (($this->getAttribute($context["c"], "ultimo_estado", array()) == 2)) {
                echo "CONFIRMADA";
            } elseif (($this->getAttribute($context["c"], "ultimo_estado", array()) == 5)) {
                echo "ENTREGADA";
            } elseif (($this->getAttribute($context["c"], "ultimo_estado", array()) == 6)) {
                echo "RECHAZADA";
            }
            // line 41
            echo "                  <td>";
            echo $this->getAttribute($context["c"], "ultimo_pedido", array());
            echo "</td>
                  <td>
                   ";
            // line 43
            $context["startDate"] = twig_date_format_filter($this->env, $this->getAttribute($context["c"], "ultimo_pedido", array()), "Y-m-d");
            // line 44
            echo "                    ";
            $context["endDate"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 45
            echo "                  ";
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, ($context["endDate"] ?? null)), "diff", array(0 => twig_date_converter($this->env, ($context["startDate"] ?? null))), "method");
            // line 46
            echo "                  ";
            $context["leftDays"] = $this->getAttribute(($context["difference"] ?? null), "days", array());
            // line 47
            echo "                  ";
            if (($context["leftDays"] ?? null)) {
                // line 48
                echo "                   ";
                if (((($context["leftDays"] ?? null) <= 10) || (($context["leftDays"] ?? null) == 0))) {
                    // line 49
                    echo "                    <a class=\"btn-flat green\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+tu+familia+de+PorMayor.Pe+te+env%C3%ADa+un++saludo.+%F0%9F%A4%97%0D%0A%0D%0ATe+escribe+";
                    echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
                    echo "%2C+Asesor+Comercial+de+la+empresa+PorMayor.Pe+%0D%0ADesde+ya+queremos+decirte+GRACIAS+POR+FORMAR+PARTE+NUESTRO+NEGOCIO%0D%0AAprovechamos+para+informarle+que+hemos+incorporado+novedades+a+nuestra+pagina+web+y+puedes+conocerlas+ingresando+a+https%3A%2F%2Fpormayor.pe%2F+%0D%0ARecuerda+que+puedes+llevarte+Todos+los+Productos+a+Precio+de+Caj%C3%B3n+por+compras+mayores+a+100soles%2C+y+as%C3%AD+emprender+tu+propio+negocio%F0%9F%92%AA%F0%9F%92%AA%0D%0A%0D%0ANos+gustar%C3%ADa+conocer+tu+opini%C3%B3n+sobre+nuestros+nuevos+productos%F0%9F%98%8A\">";
                    $context["tipo"] = "VIGENTE";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                  ";
                } elseif (((                // line 50
($context["leftDays"] ?? null) >= 11) && (($context["leftDays"] ?? null) <= 20))) {
                    // line 51
                    echo "                    <a class=\"btn-flat yellow\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+queremos+enviarte+un+cordial+saludo.+%F0%9F%A4%97%0D%0A%0D%0ATe+escribe+";
                    echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
                    echo "%2C+Asesor+Comercial+de+la+empresa+PorMayor.Pe+%0D%0ADesde+ya+queremos+decirte+GRACIAS+POR+FORMAR+PARTE+NUESTRO+NEGOCIO%0D%0ASeguimos+aqu%C3%AD+para+apoyarte+a+emprender+y+hacer+crecer+tu+negocio%2C+actualmente+hemos+renovado+nuestra+modalidad+de+ventas+ahora+puedes+adquirir+Todos+los+Productos+a+Precio+de+Caj%C3%B3n+por+compras+mayores+a+100soles+%F0%9F%92%AA%F0%9F%92%AA%0D%0A%0D%0A%C2%BFY+tu+sigues+ah%C3%AD%3F%F0%9F%A7%90%0D%0APara+nosotros+tu+opini%C3%B3n+es+muy+importante+y+queremos+conocerla\">";
                    $context["tipo"] = "INACTIVO +10";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                  ";
                } elseif (((                // line 52
($context["leftDays"] ?? null) >= 21) && (($context["leftDays"] ?? null) <= 30))) {
                    // line 53
                    echo "                    <a class=\"btn-flat orange\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+queremos+enviarte+un+cordial+saludo.+%F0%9F%A4%97%0D%0A%0D%0ATe+escribe+";
                    echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
                    echo "%2C+Asesor+Comercial+de+la+empresa+PorMayor.Pe+%0D%0ADesde+ya+queremos+decirte+GRACIAS+POR+FORMAR+PARTE+NUESTRO+NEGOCIO%0D%0ASeguimos+aqu%C3%AD+para+apoyarte+a+emprender+y+hacer+crecer+tu+negocio%2C+actualmente+hemos+renovado+nuestra+modalidad+de+ventas+ahora+puedes+adquirir+Todos+los+Productos+a+Precio+de+Caj%C3%B3n+por+compras+mayores+a+100soles+%F0%9F%92%AA%F0%9F%92%AA%0D%0A%0D%0A%C2%BFY+tu+sigues+ah%C3%AD%3F%F0%9F%A7%90%0D%0APara+nosotros+tu+opini%C3%B3n+es+muy+importante+y+queremos+conocerla\">";
                    $context["tipo"] = "INACTIVO +20";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                  ";
                } elseif (((                // line 54
($context["leftDays"] ?? null) >= 31) && (($context["leftDays"] ?? null) <= 40))) {
                    // line 55
                    echo "                    <a class=\"btn-flat red\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+tu+familia+de+PORMAYOR+te+env%C3%ADa+un+cordial+saludo.+%F0%9F%A4%97%0D%0ATe+escribe+";
                    echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
                    echo "%2C+Asesor+Comercial+de+la+empresa%0D%0ADesde+ya+queremos+decirte+GRACIAS+POR+PREFERIRNOS%0D%0ATe+informo+que+han+llegado+variedad+de+productos+novedosos+que+puedes+conocer+ingresando+a+nuestra+web+https%3A%2F%2Fpormayor.pe%2F%0D%0ARecuerda+que+ahora+puedes+llevarte+Todos+los+Productos+a+Precio+de+Caj%C3%B3n+por+compras+mayores+a+100soles%2C+y+as%C3%AD+emprender+tu+propio+negocio%F0%9F%92%AA%F0%9F%92%AA%0D%0A%0D%0ACrece+con+Nosotros+%F0%9F%A5%B3%F0%9F%A5%B3%F0%9F%A5%B3\">";
                    $context["tipo"] = "INACTIVO +30";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                  ";
                } elseif ((                // line 56
($context["leftDays"] ?? null) >= 41)) {
                    // line 57
                    echo "                    <a class=\"btn-flat black\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+queremos+enviarte+un+cordial+saludo.+%F0%9F%A4%97%0D%0A%0D%0ATe+escribe+";
                    echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
                    echo "%2C+Asesor+Comercial+de+la+empresa+PorMayor.Pe+%0D%0ADesde+ya+queremos+decirte+GRACIAS+POR+FORMAR+PARTE+NUESTRO+NEGOCIO%0D%0ASeguimos+aqu%C3%AD+para+apoyarte+a+emprender+y+hacer+crecer+tu+negocio%2C+actualmente+hemos+renovado+nuestra+modalidad+de+ventas+ahora+puedes+adquirir+Todos+los+Productos+a+Precio+de+Caj%C3%B3n+por+compras+mayores+a+100soles+%F0%9F%92%AA%F0%9F%92%AA%0D%0A%0D%0A%C2%BFY+tu+sigues+ah%C3%AD%3F%F0%9F%A7%90%0D%0APara+nosotros+tu+opini%C3%B3n+es+muy+importante+y+queremos+conocerla\">";
                    $context["tipo"] = "INACTIVO +40";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                  ";
                }
                // line 59
                echo "                  ";
            } else {
                // line 60
                echo "                    ";
                if (($this->getAttribute($context["c"], "entregado", array()) > 1)) {
                    // line 61
                    echo "                    <a class=\"btn-flat blue\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+queremos+enviarte+un+cordial+saludo\">";
                    $context["tipo"] = "VIGENTE";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                    ";
                } else {
                    // line 63
                    echo "                       <a class=\"btn-flat blue\" href=\"https://wa.me/51";
                    echo $this->getAttribute($context["c"], "Per_Telefono", array());
                    echo "?text=Hola%2C+";
                    echo $this->getAttribute($context["c"], "Per_Nombre", array());
                    echo "+queremos+enviarte+un+cordial+saludo.+%F0%9F%A4%97%0D%0ATe+saluda+";
                    echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
                    echo "%2C+Asesor+Comercial+de+la+empresa+PorMayor.Pe+%0D%0ADesde+ya+queremos+decirte+GRACIAS+POR+TU+INTERES%0D%0AAprovechamos+para+informarle+sobre+nuestra+MODALIDAD+DE+VENTA+en+la+que+puedes+llevarte+Todos+los+Productos+a+Precio+de+Caj%C3%B3n+por+compras+mayores+a+100soles%2C+y+as%C3%AD+emprender+tu+propio+negocio%F0%9F%92%AA%F0%9F%92%AA%0D%0A%0D%0A%C2%BFTe+gustar%C3%ADa+obtener+mayor+informaci%C3%B3n%3F%0D%0AHazme+saber+y+podemos+agendar+una+Reuni%C3%B3n+y+para+brindarte+una+Asesor%C3%ADa+Completa+%F0%9F%91%A9%F0%9F%92%BB\">";
                    $context["tipo"] = "REGISTRADO";
                    echo ($context["tipo"] ?? null);
                    echo "</a>
                    ";
                }
                // line 65
                echo "                  ";
            }
            // line 66
            echo "                  </td>
                  ";
            // line 67
            $context["break"] = false;
            // line 68
            echo "                    ";
            $context["tt"] = 0;
            // line 69
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gestionc"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ges"]) {
                if ( !($context["break"] ?? null)) {
                    // line 70
                    echo "                    ";
                    if (($this->getAttribute($context["c"], "Usu_IdUsuario", array()) == $this->getAttribute($context["ges"], "Usu_IdUsuario", array()))) {
                        // line 71
                        echo "                      <td class=\"gFe";
                        echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                        echo "\">";
                        echo $this->getAttribute($context["ges"], "Ges_FechaRegistro", array());
                        echo "</td>
                      <td class=\"gMo";
                        // line 72
                        echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                        echo "\">";
                        echo $this->getAttribute($context["ges"], "Ges_Motivo", array());
                        echo "</td>
                      <td class=\"gDe";
                        // line 73
                        echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                        echo "\">";
                        echo $this->getAttribute($context["ges"], "Ges_Detalle", array());
                        echo "</td>
                      <td class=\"gAc";
                        // line 74
                        echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                        echo "\">";
                        echo $this->getAttribute($context["ges"], "Ges_Accion", array());
                        echo "</td>
                      <td class=\"gFp";
                        // line 75
                        echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                        echo "\">";
                        echo $this->getAttribute($context["ges"], "Ges_FechaProgramar", array());
                        echo "</td>
                    ";
                        // line 76
                        $context["tt"] = 1;
                        // line 77
                        echo "                      ";
                        $context["break"] = true;
                        // line 84
                        echo "                      ";
                    }
                    // line 85
                    echo "                  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ges'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                  ";
            if ((($context["tt"] ?? null) == 0)) {
                // line 87
                echo "                      <td class=\"gFe";
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\"></td>
                      <td class=\"gMo";
                // line 88
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\"></td>
                      <td class=\"gDe";
                // line 89
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\"></td>
                      <td class=\"gAc";
                // line 90
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\"></td>
                      <td class=\"gFp";
                // line 91
                echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
                echo "\"></td> 
                  ";
            }
            // line 92
            echo "                 
                  ";
            // line 94
            echo "                  <td><a class=\"btn blue modal-trigger\" id=\"";
            echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
            echo "\" accessKey=\"";
            echo $this->getAttribute($context["c"], "Per_Nombre", array());
            echo "\" xs=\"";
            echo ($context["tipo"] ?? null);
            echo "\" href=\"#modalGes\"><i class=\"material-icons\">update</i></a></td>
                  <td><a class=\"btn red quitar\" data-idu=\"";
            // line 95
            echo $this->getAttribute($context["c"], "Usu_IdUsuario", array());
            echo "\"><i class=\"material-icons\">delete</i></a></td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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

    // line 108
    public function block_script($context, array $blocks = array())
    {
        // line 109
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
 \$('.quitar').on('click', function () {
    // \$('.quitar').click(function(){
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
        // line 168
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
  </script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/listado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 168,  361 => 109,  358 => 108,  346 => 98,  337 => 95,  328 => 94,  325 => 92,  320 => 91,  316 => 90,  312 => 89,  308 => 88,  303 => 87,  300 => 86,  293 => 85,  290 => 84,  287 => 77,  285 => 76,  279 => 75,  273 => 74,  267 => 73,  261 => 72,  254 => 71,  251 => 70,  245 => 69,  242 => 68,  240 => 67,  237 => 66,  234 => 65,  221 => 63,  210 => 61,  207 => 60,  204 => 59,  191 => 57,  189 => 56,  177 => 55,  175 => 54,  163 => 53,  161 => 52,  149 => 51,  147 => 50,  135 => 49,  132 => 48,  129 => 47,  126 => 46,  123 => 45,  120 => 44,  118 => 43,  112 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  84 => 36,  80 => 35,  75 => 34,  71 => 33,  47 => 11,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/listado.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\vendedor\\listado.twig");
    }
}
