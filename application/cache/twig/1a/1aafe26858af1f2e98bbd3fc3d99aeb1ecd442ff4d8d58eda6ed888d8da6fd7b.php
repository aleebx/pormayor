<?php

/* gc/agenda.twig */
class __TwigTemplate_8f3228e26a62d00fb7fe8ce45a1a524580960d322abc00e389a4511b1a2fcd40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_gc.twig", "gc/agenda.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_gc.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<style type=\"text/css\">

\t.modal{
\tz-index: 1500 !important; 
\twidth: 80%;
\t}
\t .picker__date-display{
      background-color: #FEC00F;
    } 

    .picker__box{
        top: 10%;
        position: relative;
    }

    .picker__day.picker__day--today,.picker__today,.picker__close{ 
        color: #0D0D0D;
    } 

    .picker__day--selected, .picker--focused .picker__day--selected {
        color: #F5F4F3;
        font-weight: 700;
        background-color: #0D0D0D;        
    }
</style>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "    <!-- Page Layout here -->
    <main class=\"menu3\">
    \t<div class=\"card\">
        \t<div class=\"card-content\">
          \t<span class=\"card-title center\">Agenda</span>
";
        // line 44
        echo "\t\t        <div class=\"row\">
\t\t\t\t    <div class=\"col s12\">
\t\t\t\t      <ul class=\"tabs\">
\t\t\t\t        <li class=\"tab col s4 m4 l4\"><a href=\"#listContacto\">Contactos</a></li>
\t\t\t\t        <li class=\"tab col s4 m4 l4\"><a class=\"active\" href=\"#listNota\">Notas</a></li>
\t\t\t\t        <li class=\"tab col s4 m4 l4\"><a class=\"active\" href=\"#listActividades\">Actividades</a></li>
\t\t\t\t      </ul>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"listContacto\" class=\"col s12 m12 l12\">
\t\t\t\t    \t<div class=\"row\">
\t\t\t\t    \t\t<div class=\"col s12 m12 l12 center\">
\t\t\t\t    \t\t\t\t<a class=\"waves-effect waves-light btn modal-trigger\" style=\"margin: 20px\" href=\"#crearContacto\"><i class=\"material-icons left\">person_add</i>Contacto</a>
\t\t\t\t    \t\t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t<div class=\"row\" id=\"listaContatos\">
\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 60
            echo "\t\t\t\t\t    \t<div class=\"card col s9 m9 l9\">\t\t\t
\t\t\t\t\t\t\t      <span class=\"title\"><b>";
            // line 61
            echo $this->getAttribute($context["cli"], "Clg_Apellido_Paterno", array());
            echo " ";
            echo $this->getAttribute($context["cli"], "Clg_Apellido_Materno", array());
            echo "</b>, ";
            echo $this->getAttribute($context["cli"], "Clg_Nombre", array());
            echo "</span>
\t\t\t\t\t\t\t      <p>Teléfono: ";
            // line 62
            echo $this->getAttribute($context["cli"], "Clg_Telefono", array());
            echo "<br>
\t\t\t\t\t\t\t         Dirección: ";
            // line 63
            echo $this->getAttribute($context["cli"], "Clg_Direccion", array());
            echo "
\t\t\t\t\t\t\t      </p>\t\t\t\t\t\t\t      
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col s3 m3 l3 center\">
\t\t\t\t\t\t    \t<a href=\"tel:";
            // line 67
            echo $this->getAttribute($context["cli"], "Clg_Telefono", array());
            echo "\" class=\"btn\">Llamar</a>
\t\t\t\t\t\t\t     <a class=\"btn red deleteCliente\" data-idcli=\"";
            // line 68
            echo $this->getAttribute($context["cli"], "Clg_IdClientes_Gestor", array());
            echo "\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"listNota\" class=\"col s12 m12 l12\">
\t\t\t\t    \t<div class=\"col s12 m12 l12 center\">
\t\t\t\t    \t\t<a class=\"waves-effect waves-light btn modal-trigger\" style=\"margin: 20px\" href=\"#crearNota\"><i class=\"material-icons left\">note_add</i>Nota</a>
\t\t\t\t    \t</div>
\t\t\t\t\t\t  <div class=\"row\" id=\"listaNotas\">
\t\t\t\t    \t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nos"]) {
            echo "\t\t\t\t    \t\t
\t\t\t\t\t\t  \t<div class=\"col s12 m6 l12 card\">
\t\t\t\t\t\t  \t\t<div class=\"card-content\">
\t\t\t\t\t\t\t  \t\t<span class=\"new badge\">";
            // line 81
            echo $this->getAttribute($context["nos"], "Not_FechaRegistro", array());
            echo "</span>
\t\t\t\t\t\t\t  \t\t<span class=\"card-title\">";
            // line 82
            echo $this->getAttribute($context["nos"], "Not_Titulo", array());
            echo "</span>
\t\t\t\t\t\t\t  \t\t<div class=\"divider\"></div>
\t\t\t\t\t\t\t  \t\t";
            // line 84
            echo $this->getAttribute($context["nos"], "Not_Nota", array());
            echo "
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t  \t\t<div class=\"card-action center\">
\t\t\t\t\t\t  \t\t\t<a class=\"btn red deleteNota\" data-idnot=\"";
            // line 87
            echo $this->getAttribute($context["nos"], "Not_IdNota", array());
            echo "\">Eliminar</a>
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t  \t</div>
\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t\t\t  </div>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"listActividades\" class=\"col s12 m12 l12\">
\t\t\t\t    \t<div class=\"col s12 m12 l12 center\">
\t\t\t\t\t    \t<a class=\"waves-effect waves-light btn modal-trigger\" style=\"margin: 20px\" href=\"#crearActividad\"><i class=\"material-icons left\">add</i>Actividad</a>
\t\t\t\t    \t</div>
\t\t\t\t\t\t  <div class=\"row\" id=\"listaActividades\">
\t\t\t\t  \t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actividades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 99
            echo "\t\t\t\t  \t\t\t\t<div class=\"col s12 m6 l12 card\">
\t\t\t\t\t\t\t  \t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t  \t\t<span class=\"new badge\">";
            // line 101
            echo $this->getAttribute($context["act"], "Acg_Fecha", array());
            echo " ";
            echo $this->getAttribute($context["act"], "Acg_Hora", array());
            echo "</span>
\t\t\t\t\t\t\t\t  \t\t<span class=\"card-title\">";
            // line 102
            echo $this->getAttribute($context["act"], "Acg_Actividad", array());
            echo "</span>
\t\t\t\t\t\t\t\t  \t\t<div class=\"divider\"></div>
\t\t\t\t\t\t\t\t  \t\t";
            // line 104
            echo $this->getAttribute($context["act"], "Acg_Detalle", array());
            echo "
\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t  \t\t<div class=\"card-action center\">
\t\t\t\t\t\t\t  \t\t\t<a class=\"btn red deleteActividad\" data-idact=\"";
            // line 107
            echo $this->getAttribute($context["act"], "Acg_IdActividad", array());
            echo "\">Eliminar</a>
\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t\t\t\t  </div>
\t\t\t\t    </div>
\t\t\t\t</div>
            </div>
        </div>
    </main>
    <div id=\"crearContacto\" class=\"modal\" style=\"z-index: 1500; width: 70%\">
\t    <div class=\"modal-content\">
\t      <h4>Crear contacto</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"input-field col s12 m12 l12\">
\t\t          <input placeholder=\"Nombre cliente\" id=\"nombreCliente\" type=\"text\" class=\"validate\">
\t\t          <label for=\"nombreCliente\">Nombre</label>
\t        \t</div>
\t        \t<div class=\"input-field col s6 m6 l6\">
\t\t          <input placeholder=\"Apellido Paterno\" id=\"apellidoPCliente\" type=\"text\" class=\"validate\">
\t\t          <label for=\"apellidoPCliente\">Apellido Paterno</label>
\t        \t</div>
\t        \t<div class=\"input-field col s6 m6 l6\">
\t\t          <input placeholder=\"Apellido Materno\" id=\"apellidoMCliente\" type=\"text\" class=\"validate\">
\t\t          <label for=\"apellidoMCliente\">Apellido Materno</label>
\t        \t</div>
\t        \t<div class=\"input-field col s6 m6 l6\">
\t\t          <input placeholder=\"Teléfono cliente\" id=\"tlfCliente\" type=\"number\" class=\"validate\">
\t\t          <label for=\"tlfCliente\">Teléfono</label>
\t        \t</div>
\t        \t<div class=\"input-field col s6 m6 l6\">
\t\t          <input placeholder=\"Tipo cliente\" id=\"tipoCliente\" type=\"text\" class=\"validate\">
\t\t          <label for=\"tipoCliente\">Tipo cliente</label>
\t        \t</div>
\t        \t<div class=\"input-field col s12 m12 l12\">
\t\t          <input placeholder=\"Dirección cliente\" id=\"direccionCliente\" type=\"text\" class=\"validate\">
\t\t          <label for=\"direccionCliente\">Dirección</label>
\t        \t</div>
\t\t\t</div>
\t    </div>
\t    <div class=\"modal-footer\">
\t      <a class=\"modal-action modal-close waves-effect waves-green btn green addCliente\" data-idusu=\"";
        // line 148
        echo $this->getAttribute(($context["usuario"] ?? null), "id_usuario", array());
        echo "\"><i class=\"material-icons left\">person_add</i>Agregar</a>
\t    </div>
    </div>
    
    <div id=\"crearNota\" class=\"modal\" >
\t    <div class=\"modal-content\">
\t      <h4>Crear nota</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"input-field col s12 m12 l12\">
\t\t          <input placeholder=\"Titulo de nota\" id=\"tituloNota\" type=\"text\" class=\"validate\">
\t\t          <label for=\"tituloNota\">Título</label>
\t        \t</div>
\t        \t<form class=\"col s12\">
\t\t\t      <div class=\"row\">
\t\t\t        <div class=\"input-field col s12\">
\t\t\t          <textarea id=\"nota\" class=\"materialize-textarea\"></textarea>
\t\t\t          <label for=\"nota\">Nota</label>
\t\t\t        </div>
\t\t\t      </div>
\t\t\t    </form>
\t\t\t</div>
\t    </div>
\t    <div class=\"modal-footer\">
\t      <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn green addNota\" data-idusu=\"";
        // line 171
        echo $this->getAttribute(($context["usuario"] ?? null), "id_usuario", array());
        echo "\"><i class=\"material-icons left\">note_add</i>Agregar</a>
\t    </div>
    </div>

    <div id=\"crearActividad\" class=\"modal\" >
\t    <div class=\"modal-content\">
\t      <h4>Crear Actividad</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"input-field col s12 m12 l12\">
\t\t          <input placeholder=\"Nombre de Actividad\" id=\"tituloActividad\" type=\"text\" class=\"validate\">
\t\t          <label for=\"tituloActividad\">Actividad</label>
\t        \t</div>
\t        \t<form class=\"col s12 m12 l12\">
\t\t\t      <div class=\"row\">
\t\t\t        <div class=\"input-field col s12\">
\t\t\t          <textarea id=\"detalleActividad\" class=\"materialize-textarea\"></textarea>
\t\t\t          <label for=\"detalleActividad\">Detalle de Actividad</label>
\t\t\t        </div>
\t\t\t      </div>
\t\t\t    </form>
\t\t\t    <div class=\"input-field col s12 m12 l12\">
\t\t          <input type=\"text\" class=\"datepicker\" id=\"fechaActividad\">
\t\t          <label for=\"fechaActividad\">Fecha de Actividad</label>
\t        \t</div>
\t\t\t    <div class=\"input-field col s12 m12 l12\">
\t\t          <input type=\"text\" class=\"timepicker\" id=\"horaActividad\">
\t\t          <label for=\"horaActividad\">Hora de Actividad</label>
\t        \t</div>
\t\t\t</div>
\t    </div>
\t    <div class=\"modal-footer\">
\t      <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn green addActividad\" data-idusu=\"";
        // line 202
        echo $this->getAttribute(($context["usuario"] ?? null), "id_usuario", array());
        echo "\"><i class=\"material-icons left\">add</i>Agregar</a>
\t    </div>
    </div>
";
    }

    // line 207
    public function block_script($context, array $blocks = array())
    {
        echo " 
<script>
\t\$('.modal').modal();

\t\$('.addCliente').click(function(){
\t\tvar Usu_IdUsuario = \$(this).data('idusu');
\t\tvar Nombre = \$('#nombreCliente').val();
\t\tvar ApellidoP = \$('#apellidoPCliente').val();
\t\tvar ApellidoM = \$('#apellidoMCliente').val();
\t\tvar Tfl = \$('#tlfCliente').val();
\t\tvar Direccion = \$('#direccionCliente').val();

\t\t\$.ajax({
\t        data:{
\t          'Usu_IdUsuario' : Usu_IdUsuario,
\t          'Nombre' : Nombre,
\t          'ApellidoP' : ApellidoP,
\t          'ApellidoM' : ApellidoM,
\t          'Tfl' : Tfl,
\t          'Direccion' : Direccion
\t        },
\t        type: \"POST\",
\t        url: base_url+'gestor/gestion/crearCliente',
\t        success: function(data){
\t\t\t    \$('#nombreCliente').val('');
\t\t\t\t\$('#apellidoPCliente').val('');
\t\t\t\t\$('#apellidoMCliente').val('');
\t\t\t\t\$('#tlfCliente').val('');
\t\t\t\t\$('#direccionCliente').val('');
\t          \$('#listaContatos').load(base_url+'gestor/gestion/listClientes');
\t        }
\t    });

\t});

\t\$('.deleteCliente').click(function(){
\t\tvar Clg_IdCliente = \$(this).data('idcli');
\t\t\$.ajax({
\t        data:{
\t          'Clg_IdCliente' : Clg_IdCliente
\t        },
\t        type: \"POST\",
\t        url: base_url+'gestor/gestion/deleteCliente',
\t        success: function(data){
\t          \$('#listaContatos').load(base_url+'gestor/gestion/listClientes');
\t        }
\t    });

\t});

\t\$('.addNota').click(function(){
\t\tvar Usu_IdUsuario = \$(this).data('idusu');
\t\tvar tituloNota = \$('#tituloNota').val();
\t\tvar Nota = \$('#nota').val();

\t\t\$.ajax({
\t        data:{
\t          'Usu_IdUsuario' : Usu_IdUsuario,
\t          'tituloNota' : tituloNota,
\t          'Nota' : Nota
\t        },
\t        type: \"POST\",
\t        url: base_url+'gestor/gestion/crearNota',
\t        success: function(data){
\t        \t\$('#tituloNota').val('');
\t\t\t\t\$('#nota').val('');
\t          \$('#listaNotas').load(base_url+'gestor/gestion/listNotas');
\t        }
\t    });
\t});


\t\$('.deleteNota').click(function(){
\t\tvar Not_IdNota = \$(this).data('idnot');
\t\t\$.ajax({
\t        data:{
\t          'Not_IdNota' : Not_IdNota
\t        },
\t        type: \"POST\",
\t        url: base_url+'gestor/gestion/deleteNota',
\t        success: function(data){
\t          \$('#listaNotas').load(base_url+'gestor/gestion/listNotas');
\t        }
\t    });
\t});


\t\$('.addActividad').click(function(){
\t\tvar Usu_IdUsuario = \$(this).data('idusu');
\t\tvar Actividad = \$('#tituloActividad').val();
\t\tvar Detalle = \$('#detalleActividad').val();
\t\tvar Fecha = \$('#fechaActividad').val();
\t\tvar Hora = \$('#horaActividad').val();

\t\t\$.ajax({
\t        data:{
\t          'Usu_IdUsuario' : Usu_IdUsuario,
\t          'Actividad' : Actividad,
\t          'Detalle' : Detalle,
\t          'Fecha' : Fecha,
\t          'Hora' : Hora
\t        },
\t        type: \"POST\",
\t        url: base_url+'gestor/gestion/crearActividad',
\t        success: function(data){
\t        \$('#tituloActividad').val('');
\t\t\t\$('#detalleActividad').val('');
\t\t\t\$('#fechaActividad').val('');
\t\t\t\$('#horaActividad').val('');
\t          \$('#listaActividades').load(base_url+'gestor/gestion/listActividades');
\t        }
\t    });
\t});


\t\$('.deleteActividad').click(function(){
\t\tvar Acg_IdActividad = \$(this).data('idact');
\t\t\$.ajax({
\t        data:{
\t          'Acg_IdActividad' : Acg_IdActividad
\t        },
\t        type: \"POST\",
\t        url: base_url+'gestor/gestion/deleteActividad',
\t        success: function(data){
\t          \$('#listaActividades').load(base_url+'gestor/gestion/listActividades');
\t        }
\t    });
\t});

 \$('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year,
        min: true,
        max: 100,
        today: 'Hoy',
        close: 'Ok',
        clear: 'Borrar',
        monthsFull: [\"Enero\", \"Febrero\", \"Marzo\", \"Abril\", \"Mayo\", \"Junio\", \"Julio\", \"Agosto\", \"Septiembre\", \"Octubre\", \"Noviembre\", \"Diciembre\"],
        monthsShort: [\"Ene\", \"Feb\", \"Mar\", \"Abr\", \"May\", \"Jun\", \"Jul\", \"Ago\", \"Set\", \"Oct\", \"Nov\", \"Dic\"],
        weekdays: [\"Domingo\",\"Lunes\", \"Martes\", \"Miércoles\", \"Jueves\", \"Viernes\", \"Sábado\"],
        weekdaysShort: [\"Dom\",\"Lun\", \"Mar\", \"Mie\", \"Jue\", \"Vie\", \"Sab\"],
        weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
        closeOnSelect: false, // Close upon selecting a date
        format: 'yyyy-mm-dd'
      });

  \t\$('.timepicker').pickatime({
\t    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
\t    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
\t    twelvehour: false, // Use AM/PM or 24-hour format
\t    donetext: 'OK', // text for done-button
\t    cleartext: 'Borrar', // text for clear-button
\t    canceltext: 'Cancelar', // Text for cancel-button,
\t    container: 'body', // ex. 'body' will append picker to body
\t    autoclose: false, // automatic close timepicker
\t    ampmclickable: true, // make AM PM clickable
\t    aftershow: function(){} //Function for after opening timepicker
\t  });

</script>
";
    }

    public function getTemplateName()
    {
        return "gc/agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 207,  313 => 202,  279 => 171,  253 => 148,  214 => 111,  204 => 107,  198 => 104,  193 => 102,  187 => 101,  183 => 99,  179 => 98,  170 => 91,  160 => 87,  154 => 84,  149 => 82,  145 => 81,  137 => 78,  128 => 71,  119 => 68,  115 => 67,  108 => 63,  104 => 62,  96 => 61,  93 => 60,  89 => 59,  72 => 44,  65 => 32,  62 => 31,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gc/agenda.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\gc\\agenda.twig");
    }
}
