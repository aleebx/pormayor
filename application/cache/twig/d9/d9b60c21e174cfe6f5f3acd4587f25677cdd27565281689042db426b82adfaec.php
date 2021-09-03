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
        echo twig_title_string_filter($this->env, ($context["pag"] ?? null));
        echo " | PorMayor.pe</title>
    <link rel=\"icon\" type=\"image/png\"  href=\"";
        // line 7
        echo ($context["ruta_img"] ?? null);
        echo "logo.png\">
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
          <span class=\"fontA black-text metaVnd\"></span>
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
";
        // line 112
        echo "    <ul id=\"slide-out\" class=\"side-nav fixed grey darken-4 z-depth-3 menuTex\" style=\"z-index:500;\"> 
      <li class=\"headerMenu center valign-wrapper\">
        <div class=\"logoIcon\">
          <a href=\"";
        // line 115
        echo base_url();
        echo "\"><img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "LogoPositivo.svg\" class=\"valign-wrapper\" height=\"40\"></a>
        </div>
      </li>
      <li class=\"itemMenu ";
        // line 118
        if ((($context["pag"] ?? null) == "perfil")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/perfil\"><i class=\"material-icons\">sentiment_very_satisfied</i>Mi Perfil</a></li>
      <li class=\"itemMenu ";
        // line 119
        if ((($context["pag"] ?? null) == "crear")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/crear\"><i class=\"material-icons\">person_add</i>Crear cliente</a></li>
      <li class=\"itemMenu ";
        // line 120
        if ((($context["pag"] ?? null) == "listado")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/listado\"><i class=\"material-icons\">person_outline</i>Mis clientes</a></li>
      <li class=\"itemMenu ";
        // line 121
        if ((($context["pag"] ?? null) == "misventas")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/misventas\"><i class=\"material-icons\">person_outline</i>Mis ventas <span class=\"new badge red ventaN\"></span></a></li>
      <li class=\"itemMenu ";
        // line 122
        if ((($context["pag"] ?? null) == "listado_clientes")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/listado_clientes\"><i class=\"material-icons\">group</i>Clientes registrados</a></li>
      <li class=\"itemMenu ";
        // line 123
        if ((($context["pag"] ?? null) == "ventas")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/ventas\"><i class=\"material-icons\">money</i>Ventas</a></li>
      <li class=\"itemMenu ";
        // line 124
        if ((($context["pag"] ?? null) == "hoy")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/hoy\"><i class=\"material-icons\">speaker_notes</i>Hoy</a></li>
      <li class=\"itemMenu ";
        // line 125
        if ((($context["pag"] ?? null) == "stock")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/stock\"><i class=\"material-icons\">grid_on</i>Stock</a></li>
      <li class=\"itemMenu ";
        // line 126
        if ((($context["pag"] ?? null) == "reporte")) {
            echo "pormayor black-text";
        }
        echo "\"><div class=\"acentBar\"></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "vnd/reporte\"><i class=\"material-icons\">list</i>Reporte</a></li>
      <li class=\"containerAvatar valign-wrapper\">
        <div class=\"avatarComprador\" style=\"top: 2px;\">
          <a class=\"sinPadding\"href=\"";
        // line 129
        echo base_url();
        echo "usuario/perfil\">
            <i style=\"font-size: 50px; color: rgba(255,255,255,0.8)\" class=\"material-icons\">account_circle</i>
          </a>
        </div>
        <div class=\"avatarContainerComprador flow-text\" style=\"top: 15px;\">
          <span class=\"avatarText1\">";
        // line 134
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo "</span>
        </div>
        <a style=\"right: -180px;\" class=\"cerrarSesionBtn sesionBtn avatarItem waves-effect right\"><i class=\"material-icons\">power_settings_new</i></a> 
      </li>
    </ul>

  ";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        echo " 

  <footer class=\"inner page-footer grey darken-4 text-white\">
      ";
        // line 143
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "         
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">
          Derechos Reservados © 2018 pormayorpe S.A
          </div>
        </div>
      ";
        } else {
            // line 150
            echo "        <div class=\"footerMovil\">         
        </div>
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">Derechos Reservados © 2018 pormayorpe S.A</div>
        </div> 
      ";
        }
        // line 156
        echo "    </footer>

  ";
        // line 158
        $this->displayBlock('modal', $context, $blocks);
        echo "  
  ";
        // line 160
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 161
        echo base_url("public/intranet/js/jquery.validate.min.js");
        echo "\"></script> 
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 162
        echo base_url("public/intranet/js/materialize.js");
        echo "\"></script>
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 163
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
  <script> var base_url = \"";
        // line 166
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
  function meta(){
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
  setInterval(\"meta()\",100000);
    \$(document).ready(function(){
      var xx = 0;
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
            if (data <= 29999){
              \$('.metaVnd').text('AUN NO COMISIONAS :( TÚ PUEDES CREO EN TI <3');
            }else if(data >= 30000 && data <= 40000){
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
    });
  </script>
  ";
        // line 262
        $this->displayBlock('script', $context, $blocks);
        // line 263
        echo "  </body>
</html>";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 140
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 158
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 262
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
        return array (  434 => 262,  428 => 158,  422 => 140,  416 => 72,  411 => 263,  409 => 262,  310 => 166,  304 => 163,  300 => 162,  296 => 161,  293 => 160,  289 => 158,  285 => 156,  277 => 150,  267 => 143,  261 => 140,  252 => 134,  244 => 129,  234 => 126,  226 => 125,  218 => 124,  210 => 123,  202 => 122,  194 => 121,  186 => 120,  178 => 119,  170 => 118,  162 => 115,  157 => 112,  146 => 96,  142 => 95,  134 => 90,  115 => 73,  113 => 72,  51 => 13,  45 => 12,  41 => 11,  34 => 7,  30 => 6,  23 => 1,);
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
