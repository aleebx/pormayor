<?php

/* layout/intranet/template_ven.twig */
class __TwigTemplate_2bb4b7ba7234709cc7fb705a89e1845aeddba32811ec6beab75b7f6608d4656c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>      
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title> ";
        // line 6
        if ($this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array())) {
            echo " ";
            echo $this->getAttribute(($context["venta"] ?? null), "Per_Nombre", array());
            echo " ";
        } else {
            echo " ";
            echo twig_title_string_filter($this->env, ($context["pag"] ?? null));
            echo " ";
        }
        echo "| PorMayor.pe</title>
    <link rel=\"icon\" href=\"https://pormayor.pe/img/promo/lpm.ico\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo base_url("public/intranet/css/materialize.css");
        echo "\"  media=\"screen,projection\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo base_url("public/");
        echo "intranet/css/templates.css?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"  media=\"screen,projection\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo base_url("public/intranet/css/jquery-confirm.min.css");
        echo "\"  media=\"screen,projection\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <style type=\"text/css\">
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }
      main {
        flex: 1 0 auto;
        padding-left: 300px;
      }
      header, footer {
            padding-left: 300px;
          }
      @media only screen and (max-width : 992px) {
        header, main, footer {
          padding-left: 0;
        }
      }
      select {
        background-color: rgba(243, 243, 243, 0.9);
        border: 1px solid #a2acb3;
        margin: 5px 0px;
        
      }
     .btn-large, .btn, .btn-floating{
        background-color: #21478F;
      }
      .notify-alert-box{
        width: 400px;
        position: fixed;
        left: 50%;
        margin-left: -200px;
        top: 0; /*top: -100%;*/
        padding: 20px;
        z-index: 100000;
        background:#fff;
        color: #333;
        transition: all 1s ease-in-out;
      }
      .notify-alert-box img{
        width: 70px;
        float: left;
        margin-right: 10px;
      }

      .buttons{
        text-align: right;
      }
      .buttons button{
        background:#024e73;
        color: #fff;
        border:0;
        padding: 8px 15px;
        font-size: 18px;
        cursor: pointer;
      }
    </style>
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 73
        echo "   </head>
  <body>
  <nav>
    <div class=\"navbar-fixed\">
      <nav class=\"pormayor center\">
        <div class=\"nav-wrapper\">
          <a class=\"btn\" href=\"";
        // line 79
        echo base_url();
        echo "venta/nueva\" target=\"_blank\" >REGISTRAR NUEVA VENTA</a>
        </div>
      </nav>
    </div>
  </nav>  
  <header>
    <div class=\"navbar-fixed hide-on-large-only\" id=\"inicio\">
      <nav class=\"nav-extended pormayor\" data-color=\"#fff159\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton sinPadding\" style=\"height:56px\">
            <a href=\"#\" data-activates=\"slide-out\" class=\"centrarForzado button-collapse\">
              <img src=\"";
        // line 90
        echo ($context["ruta_img"] ?? null);
        echo "menuIcon.svg\" width=\"35\">
            </a>
          </div>
          <div class=\"col s3 m2 l2 center colMenuLogo sinPadding\" >
            <div class=\"logoNegativo\">
              <a href=\"";
        // line 95
        echo base_url();
        echo "\">
                <img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 96
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" type=\"image/svg+xml\" class=\"\">
              </a>
            </div>
          </div>  
        </div>
      </nav> 
    </div> 
  </header>
    <ul id=\"slide-out\" class=\"side-nav fixed grey darken-4 z-depth-3 menuTex\" style=\"z-index:9000;\"> 
      <li class=\"headerMenu center valign-wrapper\">
        <div class=\"logoIcon\">
          <a href=\"";
        // line 107
        echo base_url();
        echo "\"><img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "LogoPositivo.svg\" class=\"valign-wrapper\" height=\"40\"></a>
        </div>
      </li>
      ";
        // line 110
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 5)) {
            // line 111
            echo "      <li class=\"itemMenu ";
            if ((($context["pag"] ?? null) == "perfil")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/perfil\"><i class=\"material-icons\">sentiment_very_satisfied</i>Mi Perfil</a></li>
      <li class=\"itemMenu ";
            // line 112
            if ((($context["pag"] ?? null) == "crear")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/crear\"><i class=\"material-icons\">person_add</i>Crear cliente</a></li>
      <li class=\"itemMenu pormayor black-text\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            // line 113
            echo base_url();
            echo "venta/nueva\"><i class=\"material-icons\">add</i>NUEVA VENTA</a></li>
      <li class=\"itemMenu ";
            // line 114
            if ((($context["pag"] ?? null) == "listado")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/listado\"><i class=\"material-icons\">person_outline</i>Mis clientes</a></li>
      <li class=\"itemMenu ";
            // line 115
            if ((($context["pag"] ?? null) == "misventas")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/misventas\"><i class=\"material-icons\">person_outline</i>Mis ventas <span class=\"new badge red ventaN\"></span></a></li>
      <li class=\"itemMenu ";
            // line 116
            if ((($context["pag"] ?? null) == "buscador")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/buscador\"><i class=\"material-icons\">search</i>Buscador de cliente</a></li>
      <li class=\"itemMenu ";
            // line 117
            if ((($context["pag"] ?? null) == "listado_clientes")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/listado_clientes\"><i class=\"material-icons\">person</i>Listado de Clientes</a></li>
      <li class=\"itemMenu ";
            // line 118
            if ((($context["pag"] ?? null) == "ventas")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/ventas\"><i class=\"material-icons\">money</i>Ventas</a></li>
      <li class=\"itemMenu ";
            // line 119
            if ((($context["pag"] ?? null) == "hoy")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/hoy\"><i class=\"material-icons\">speaker_notes</i>Hoy</a></li>
      <li class=\"itemMenu ";
            // line 120
            if ((($context["pag"] ?? null) == "stock")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/stock\"><i class=\"material-icons\">grid_on</i>Stock</a></li>
      <li class=\"itemMenu ";
            // line 121
            if ((($context["pag"] ?? null) == "reporte")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/reporte\"><i class=\"material-icons\">list</i>Reporte</a></li>
      ";
            // line 123
            echo "      <li class=\"itemMenu\">
        <div id=\"topVentas\" class=\"white-text center\"></div>
      </li>
      ";
        } else {
            // line 127
            echo "      <li class=\"itemMenu ";
            if ((($context["pag"] ?? null) == "referidos")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/referido\"><i class=\"material-icons\">star</i>Referidos</a></li>
      <li class=\"itemMenu ";
            // line 128
            if ((($context["pag"] ?? null) == "reporte2")) {
                echo "pormayor black-text";
            }
            echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
            echo base_url();
            echo "vnd/reporte_referido\"><i class=\"material-icons\">list</i>Reporte Referido</a></li>
      ";
        }
        // line 130
        echo "      <li class=\"containerAvatar valign-wrapper\">
        <div class=\"avatarComprador\" style=\"top: 2px;\">
          <a class=\"sinPadding\"href=\"";
        // line 132
        echo base_url();
        echo "usuario/perfil\">
            <i style=\"font-size: 50px; color: rgba(255,255,255,0.8)\" class=\"material-icons\">account_circle</i>
          </a>
        </div>
        <div class=\"avatarContainerComprador flow-text\" style=\"top: 15px;\">
          <span class=\"avatarText1\">";
        // line 137
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo "</span>
        </div>
        <a style=\"right: -180px;\" class=\"cerrarSesionBtn sesionBtn avatarItem waves-effect right\"><i class=\"material-icons\">power_settings_new</i></a> 
      </li>
    </ul>

  ";
        // line 143
        $this->displayBlock('content', $context, $blocks);
        echo " 

  <footer class=\"inner page-footer grey darken-4 text-white\">
      ";
        // line 146
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "         
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">
          Derechos Reservados © 2018 pormayorpe S.A
          </div>
        </div>
      ";
        } else {
            // line 153
            echo "        <div class=\"footerMovil\">         
        </div>
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">Derechos Reservados © 2018 pormayorpe S.A</div>
        </div> 
      ";
        }
        // line 159
        echo "    </footer>

  ";
        // line 161
        $this->displayBlock('modal', $context, $blocks);
        echo "  
  ";
        // line 163
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 164
        echo base_url("public/intranet/js/jquery.validate.min.js");
        echo "\"></script> 
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 165
        echo base_url("public/intranet/js/materialize.js");
        echo "\"></script>
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 166
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
  <script> var base_url = \"";
        // line 169
        echo base_url();
        echo "\";</script>
  <script type=\"text/javascript\">
  function actualizar(){
  var  Pro_IdProducto = 1;
       \$.ajax({
          data:{'Pro_IdProducto':Pro_IdProducto},
          type:\"POST\",
          url:base_url+'vnd/cantidad_ventas', 
          dataType:\"json\",
          success:function(data){
            console.log(data);
            \$('.ventaN').text(data);
          }
        });
     }
  setInterval(\"actualizar()\",100000);
    \$(document).ready(function(){
      var rol = ";
        // line 186
        echo twig_jsonencode_filter($this->getAttribute(($context["usuario"] ?? null), "rol", array()));
        echo ";
      var xx = 0;
      if (rol == 5){
      \$.ajax({
          data:{'xx':xx},
          type:\"POST\",
          url:base_url+'vnd/top_ventas', 
          dataType:\"json\",
          success:function(person){
            let txt = \"\";
            let c = 1;
            for (let x in person) {
            txt += c  + \" \" +person[x].vendedor + \" : \" + person[x].total + \" </br>\";
            c = c + 1;
            };
            document.getElementById(\"topVentas\").innerHTML = txt;
            // \$('.topVentas').text(txt);
          }
        });
      \$(\".button-collapse\").sideNav();
        \$.ajax({
        data:{'xx':xx},
        type:\"POST\",
        url:base_url+'vnd/meta', 
        dataType:\"json\",
          success:function(data){
            console.log(data);
              var c1 = 0;
              var c2 = 0;
              var c3 = 0;
              var c4 = 0;
              var comision = 0;
              \$('.llevo').text('Llevas S/'+data);
            if (data <= 39999){
              \$('.metaVnd').text('AUN NO COMISIONAS :( TÚ PUEDES CREO EN TI <3');
            }else if(data >= 40000 && data <= 80000){
              c1 = data * 0.005;
              \$('.metaVnd').text('S/'+c1);
            }else if(data >= 40001 && data <= 80000){
              c1 = 40000 * 0.005;
              data2 = data - 40000;
              c2 = data2 * 0.03;
              comision = c1 + c2;
              \$('.metaVnd').text('S/' + comision);
            }else if(data >= 80001 && data <= 120000){
              c1 = 40000 * 0.005;
              c2 = 40000 * 0.03;
              data2 = data - 80000;
              c3 = data2 * 0.04;
              comision = c1 + c2 + c3;
              \$('.metaVnd').text('S/' + comision);
            }else if(data >= 120001){
              c1 = 40000 * 0.005;
              c2 = 40000 * 0.03;
              c3 = 40000 * 0.04;
              data2 = data - 120000;
              c4 = data2 * 0.05;
              comision = c1 + c2 + c3 + c4;
              \$('.metaVnd').text('S/' + comision);
            }
        }
      });
      \$(\".cerrarSesionBtn\").click(function() {
        \$.confirm({
            icon: \"power_settings_new\",
            theme: \"modern\",
            closeIcon: !1,
            animation: \"scale\",
            type: \"red\",
            title: \"Cerrar Sesión\",
            columnClass: \"small\",
            content: \"Las ofertas te estaran esperando\",
            draggable: !1,
            buttons: {
                Cerrar: {
                    btnClass: \"btn\",
                    action: function() {
                        location.href = base_url + \"usuario/cerrar_sesion\"
                    }
                },
                Cancelar: {}
            }
        })
      });
          }
    });
  </script>
  ";
        // line 273
        $this->displayBlock('script', $context, $blocks);
        // line 274
        echo "  </body>
</html>";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 143
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 161
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 273
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/template_ven.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 273,  486 => 161,  480 => 143,  474 => 72,  469 => 274,  467 => 273,  377 => 186,  357 => 169,  351 => 166,  347 => 165,  343 => 164,  340 => 163,  336 => 161,  332 => 159,  324 => 153,  314 => 146,  308 => 143,  299 => 137,  291 => 132,  287 => 130,  278 => 128,  269 => 127,  263 => 123,  255 => 121,  247 => 120,  239 => 119,  231 => 118,  223 => 117,  215 => 116,  207 => 115,  199 => 114,  195 => 113,  187 => 112,  178 => 111,  176 => 110,  168 => 107,  154 => 96,  150 => 95,  142 => 90,  128 => 79,  120 => 73,  118 => 72,  56 => 13,  50 => 12,  46 => 11,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/template_ven.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\layout\\intranet\\template_ven.twig");
    }
}
