<?php

/* layout/intranet/template_almacen.twig */
class __TwigTemplate_0502b5c977a102a47aea7908fd4ae7bbe9508bb85530bb2acbcec97091c57911 extends Twig_Template
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
        echo $this->getAttribute(($context["pagina"] ?? null), "titulo", array());
        echo " | pormayor.com</title>
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
    </style>
    ";
        // line 43
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "   </head>
  <body> 
  <header>
    <div class=\"navbar-fixed hide-on-large-only\" id=\"inicio\">
      <nav class=\"nav-extended pormayor\" data-color=\"#fff159\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton sinPadding\" style=\"height:56px\">
            <a href=\"#\" data-activates=\"slide-out\" class=\"centrarForzado button-collapse\">
              <img src=\"";
        // line 52
        echo ($context["ruta_img"] ?? null);
        echo "menuIcon.svg\" width=\"35\">
            </a>
          </div>
          <div class=\"col s3 m2 l2 center colMenuLogo sinPadding\" >
            <div class=\"logoNegativo\">
              <a href=\"";
        // line 57
        echo base_url();
        echo "\">
                <img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 58
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" type=\"image/svg+xml\" class=\"\">
              </a>
            </div>
          </div>  
        </div>
      </nav> 
    </div> 
  </header>
    <ul id=\"slide-out\" class=\"side-nav fixed grey darken-4 z-depth-3 menuTex\" style=\"z-index:500;\"> 
      <li class=\"headerMenu center valign-wrapper\">
        <div class=\"logoIcon\">
          <a href=\"";
        // line 69
        echo base_url();
        echo "\"><img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "LogoPositivo.svg\" class=\"valign-wrapper\" height=\"40\"></a>
        </div>
      </li>
      <li class=\"itemMenu pormayor\"><div class=\"acentBar\"></div><a class=\"waves-effect black-text\" href=\"";
        // line 72
        echo base_url();
        echo "almacen/listado\"><i class=\"material-icons\">list</i>Listado de productos</a></li>
    
      <li class=\"containerAvatar valign-wrapper\">
        <div class=\"avatarComprador\" style=\"top: 2px;\">
          <a class=\"sinPadding\"href=\"";
        // line 76
        echo base_url();
        echo "usuario/perfil\">
            <i style=\"font-size: 50px; color: rgba(255,255,255,0.8)\" class=\"material-icons\">account_circle</i>
          </a>
        </div>
        <div class=\"avatarContainerComprador flow-text\" style=\"top: 15px;\">
          <span class=\"avatarText1\">";
        // line 81
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo "</span>
        </div>
        <a style=\"right: -180px;\" class=\"cerrarSesionBtn sesionBtn avatarItem waves-effect right\"><i class=\"material-icons\">power_settings_new</i></a> 
      </li>
    </ul>

  ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        echo " 

  <footer class=\"inner page-footer grey darken-4 text-white\">
      ";
        // line 90
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "         
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">
          Derechos Reservados © 2018 pormayorpe S.A
          </div>
        </div>
      ";
        } else {
            // line 97
            echo "        <div class=\"footerMovil\">         
        </div>
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">Derechos Reservados © 2018 pormayorpe S.A</div>
        </div> 
      ";
        }
        // line 103
        echo "    </footer>

  ";
        // line 105
        $this->displayBlock('modal', $context, $blocks);
        echo "  
  ";
        // line 107
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 108
        echo base_url("public/intranet/js/jquery.validate.min.js");
        echo "\"></script> 
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 109
        echo base_url("public/intranet/js/materialize.js");
        echo "\"></script>
  <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 110
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>

  <script type=\"text/javascript\">
    //Cambio Footer
    \$('.footerSecundario').removeClass('hide');
    \$('.footerPrincipal').addClass('hide');
     \$('.inicioBtn').not('[href=\"#\"]').click(function(event) {
    if (location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') && location.hostname == this.hostname) {
      var target = \$(this.hash);
      target = target.length ? target : \$('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        \$('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 2000, function() {
          var \$target = \$(target);
          \$target.focus();
          if (\$target.is(\":focus\")) {
            return false;
          } else {
            \$target.attr('tabindex','-1');
            \$target.focus();
          };
        });
      }
    }
  });
    \$(document).ready(function(){
      \$('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        }
      );
      //Funciones Side-Bar
      \$(\".itemMenu\").mouseover(function(){
        \$(this).find(\".acentBar\").css(\"background-color\",\$('.nav-extended').data('color'));
      });
      \$(\".itemMenu\").mouseout(function(){
        \$(this).find(\".acentBar\").css(\"background-color\",\"rgba(0,0,0,0.0)\");
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

      //FOOTER
      var flagFooter = false;
      \$(\".footerSecundario .collapsible-header\").click(function() {
          if (flagFooter == false) {
              \$('.footerSecundario .iconSide').text('expand_less');
              \$('.footerSecundario .sideB').slideUp(500);
              flagFooter = true;
          }else if (flagFooter == true){
              \$('.footerSecundario .iconSide').text('expand_more');
              \$('.footerSecundario .sideB').slideDown(200);
              flagFooter = false;
          }
      });
    });

  </script>
  <script> var base_url = \"";
        // line 193
        echo base_url();
        echo "\";</script>
  ";
        // line 194
        $this->displayBlock('script', $context, $blocks);
        // line 195
        echo "  </body>
</html>";
    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 105
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 194
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/template_almacen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 194,  306 => 105,  300 => 87,  294 => 43,  289 => 195,  287 => 194,  283 => 193,  197 => 110,  193 => 109,  189 => 108,  186 => 107,  182 => 105,  178 => 103,  170 => 97,  160 => 90,  154 => 87,  145 => 81,  137 => 76,  130 => 72,  122 => 69,  108 => 58,  104 => 57,  96 => 52,  86 => 44,  84 => 43,  51 => 13,  45 => 12,  41 => 11,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/template_almacen.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\layout\\intranet\\template_almacen.twig");
    }
}
