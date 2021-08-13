<?php

/* layout/intranet/template_usu.twig */
class __TwigTemplate_56acd8a9e6420f59e597e44ea1bf442537c9ce650c247d7f6d4e695f1c4683cb extends Twig_Template
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
        echo base_url("public/intranet/css/jquery-confirm.min.css");
        echo "\" media=\"screen\"/>
     <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo base_url("public/intranet/css/materialize.min.css");
        echo "\" media=\"screen,projection\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo base_url("public/intranet/css/materialize.css");
        echo "\" media=\"screen,projection\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo base_url("public/intranet/css/templates.css");
        echo "\" media=\"screen,projection\"/>
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
        // line 48
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "   </head>
  <body> 
    <header>
      <div class=\"navbar-fixed hide-on-large-only\" id=\"inicio\">
        <nav class=\"nav-extended pormayor\" data-color=\"#fff159\">
          <div class=\"nav-wrapper container\">
            <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
              <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton sinPadding\" style=\"height:56px\">
                <a href=\"#\" data-activates=\"slide-out\" class=\"centrarForzado button-collapse\">
                  <img src=\"";
        // line 58
        echo ($context["ruta_img"] ?? null);
        echo "menuIcon.svg\" width=\"35\">
                  ";
        // line 59
        if (( !twig_test_empty(($context["noticoments"] ?? null)) ||  !twig_test_empty(($context["noticotiza"] ?? null)))) {
            // line 60
            echo "                    <span class=\"red pulse\"></span>
                  ";
        }
        // line 62
        echo "                </a>
              </div>
              <!-- <div class=\"col s2 m2 l2 center\">
                <a href=\"#\" data-activates=\"slide-out\" class=\"centrarForzado button-collapse\"><i class=\"material-icons black-text\">menu</i></a>
              </div> -->
              <div class=\"col s4 m4 l2 center sinPadding\" >
                <div class=\"logoNegativoPanel\">
                  <a style=\"\" href=\"";
        // line 69
        echo base_url();
        echo "\">
                    <img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 70
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" type=\"image/svg+xml\" >
                  </a>
                </div>
              </div> 
              <div class=\"col s6 m6 l7 center sinPadding\" >
                <a href=\"";
        // line 75
        echo base_url();
        echo "\" class=\"btn pormayorUnico\">Ir a comprar</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <ul id=\"slide-out\" class=\"side-nav fixed grey darken-4 z-depth-3 menuTex\"> 
        <li class=\"headerMenu center valign-wrapper\">
          <div class=\"logoIcon\">
            <a href=\"";
        // line 84
        echo base_url();
        echo "\">
              <img alt=\"Pormayor.pe - Vende facilito, Compra segurito\" src=\"";
        // line 85
        echo ($context["ruta_img"] ?? null);
        echo "LogoPositivo.svg\" class=\"valign-wrapper\" height=\"40\">
            </a>
          </div>
        </li>
        <li class=\"itemMenu\"><div class=\"acentBar\" ";
        // line 89
        if (($this->getAttribute(($context["pagina"] ?? null), "opcion", array()) == "perfil")) {
            echo "style=\"background:#ff9800\"";
        }
        echo "></div><a class=\"waves-effect\" href=\"";
        echo base_url();
        echo "usuario/perfil\"><i class=\"material-icons\">account_box</i>Perfil</a></li>
        <!--li class=\"itemMenu\"><div class=\"acentBar\"></div><a href=\"";
        // line 90
        echo base_url();
        echo "comprador/index/pedidos\" class=\"waves-effect\"><i class=\"material-icons\">playlist_add_check</i>Pedidos</a></li-->
        <li class=\"itemMenu\"><div class=\"acentBar\" ";
        // line 91
        if (($this->getAttribute(($context["pagina"] ?? null), "opcion", array()) == "ventas")) {
            echo "style=\"background:#ff9800\"";
        }
        echo "></div><a href=\"";
        echo base_url();
        echo "comprador/compra/\" class=\"waves-effect\"><i class=\"material-icons\">shopping_cart</i>Mis compras</a></li>
        <li class=\"itemMenu\"><div class=\"acentBar\"></div><a href=\"";
        // line 92
        echo base_url();
        echo "comprador/index/favoritos\" class=\"waves-effect\"><i class=\"material-icons\">favorite</i>Favoritos</a></li>
        <li class=\"itemMenu\"><div class=\"acentBar\"></div><a href=\"";
        // line 93
        echo base_url();
        echo "comprador/index/respuesta_comentario\" class=\"waves-effect\"><i class=\"material-icons\">forum</i>Preguntas</a></li>
        ";
        // line 94
        if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2)) {
            // line 95
            echo "          <li class=\"itemMenu\"><div class=\"acentBar\"></div><a href=\"https://";
            echo ($context["subdominio_tienda"] ?? null);
            echo ".";
            echo ($context["dominio"] ?? null);
            echo "/usuario/inventario/lProductos\" class=\"waves-effect\"><i class=\"material-icons\">keyboard_return</i>Ver como tienda</a></li>
        ";
        }
        // line 97
        echo "        <li class=\"containerAvatar valign-wrapper\">
          <div class=\"avatarComprador\">
            <i style=\"font-size: 50px; color: rgba(255,255,255,0.8)\" class=\"material-icons\">account_circle</i>
          </div>
          <div class=\"avatarContainerComprador flow-text\" style=\"top: 15px;\">
            <span class=\"avatarText1\">";
        // line 102
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo "</span>
          </div>
          <a style=\"right: -180px;\" class=\"cerrarSesionBtn sesionBtn avatarItem waves-effect right\"><i class=\"material-icons\">power_settings_new</i></a> 
        </li>
      </ul>
    </header>

    <div class=\"fixed-action-btn hide-on-med-and-down\">
      <a class=\"btn-floating btn-large tooltipped pormayorUnico\" data-delay=\"30\" data-position=\"left\" data-tooltip=\"Ir a comprar\" href=\"";
        // line 110
        echo base_url();
        echo "\">
        <i class=\"large material-icons\">store_mall_directory</i> 
      </a>
    </div>
    
    ";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        echo " 

    <footer class=\"inner page-footer grey darken-4 text-white\">
      ";
        // line 118
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 119
            echo "          <div class=\"container footerSecundario\">
            <div class=\"row sinBordeBottom\" >
              <div class=\"col s8 l12\">
                <ul class=\"collapsible centrarForzado\" data-collapsible=\"accordion\">
                  <li>
                    <div class=\"collapsible-header grey darken-3 white-text center\">
                      <div class=\"centrarForzado\"><i class=\"material-icons left iconSide\">expand_more</i>Ver más información</div>
                    </div>
                    <div class=\"collapsible-body sinPadding\">
                      <div class=\"row sinBordeBottom\">
                        <div class=\"col s6 m3 l3\">
                          <h5 class=\"\">Servicio al cliente</h5>
                          <ul>
                            <li><a class=\"\" href=\"";
            // line 132
            echo base_url();
            echo "Legal/centro\">Centro de ayuda</a></li>
                            <li><a class=\"\" href=\"";
            // line 133
            echo base_url();
            echo "Legal/\">Términos y condiciones</a></li>
                            <li><a class=\"\" href=\"";
            // line 134
            echo base_url();
            echo "index/contactanos\">Contáctanos</a></li> 
                          </ul>
                        </div> 
                        <div class=\"col s3 m3 l3\">
                          <h5 class=\"\">Acerca de nosotros</h5>
                          <ul>
                            <li><a class=\"\" href=\"";
            // line 140
            echo base_url();
            echo "index/about\" >Acerca de pormayor.pe</a></li>
                            <li><a class=\"\" href=\"";
            // line 141
            echo base_url();
            echo "\">Acerca de pormayor.SA</a></li>
                            <li><a class=\"\" href=\"";
            // line 142
            echo base_url();
            echo "index\">Mapa de sitio</a></li> 
                          </ul>
                        </div>
                        <div class=\"col s3 m3 l3 sinPadding\">
                          <h5 class=\"\">Servicios de comercio</h5>
                          <ul>
                            <li><a class=\"\" href=\"";
            // line 148
            echo base_url();
            echo "legal/privacidad\">Políticas de privacidad</a></li>
                            <li><a class=\"\" href=\"";
            // line 149
            echo base_url();
            echo "index\">Política de envios</a></li>
                            <li><a class=\"\" href=\"";
            // line 150
            echo base_url();
            echo "legal/compra_segura\">Compra segura</a></li>
                          </ul>
                        </div>
                        <div class=\"col s12 m6 l3\">
                          <h5 class=\" hide-on-med-and-down\">Síguenos</h5>
                            <div clasS=\"row center footerBuscador\">
                              <div class=\"col s3\">
                                <a  href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"instagram pormayor.pe\" title=\"instagram pormayor.pe\" src=\"";
            // line 157
            echo ($context["ruta_img"] ?? null);
            echo "instaW.png\" height=\"30\"></a>
                              </div>
                              <div class=\"col s3\">
                                <a  href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"facebook pormayor.pe\" title=\"facebook pormayor.pe\" src=\"";
            // line 160
            echo ($context["ruta_img"] ?? null);
            echo "faceW.png\" height=\"30\"></a>
                              </div>
                              <div class=\"col s3\">
                                <a  href=\"mailto:contacto@pormayor.pe\"><img alt=\"correo pormayor.pe\" title=\"correo pormayor.pe\" src=\"";
            // line 163
            echo ($context["ruta_img"] ?? null);
            echo "mailW.png\" height=\"30\"></a>
                              </div>
                              <div class=\"col s3\">
                                <a  href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"youtube pormayor.pe\" title=\"youtube pormayor.pe\" src=\"";
            // line 166
            echo ($context["ruta_img"] ?? null);
            echo "youtubeW.png\" height=\"30\"></a>
                              </div>
                            </div>
                            <div class=\"col s6\">
                              <a class=\"anchoTotal waves-effect waves-black btn-flat white-text\" href=\"";
            // line 170
            echo base_url();
            echo "\">Inicio</a>
                            </div>
                            <div class=\"col s6\">
                              <a  class=\"anchoTotal inicioBtn waves-effect waves-black btn-flat white-text\"  href=\"#inicio\"><i class=\"small material-icons\">keyboard_arrow_up</i></a>
                            </div>                
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>    
            </div>
          </div>
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">
          Derechos Reservados © 2018 pormayorpe S.A
          </div>
        </div>
      ";
        } else {
            // line 189
            echo "        <div class=\"footerMovil\">
          <div class=\"row sinBordeBottom\">
            <div class=\"col s12\">
              <ul class=\"collapsible\" data-collapsible=\"accordion\">
                <li>
                  <div class=\"collapsible-header grey darken-3 white-text\"><i class=\"material-icons\">person</i>Servicio al cliente</div>
                  <div class=\"collapsible-body\">
                    <ul>
                      <li><a class=\"\" href=\"";
            // line 197
            echo base_url();
            echo "Legal/centro\">Centro de ayuda</a></li>
                      <li><a class=\"\" href=\"";
            // line 198
            echo base_url();
            echo "Legal/\">Términos y condiciones</a></li>
                      <li><a class=\"\" href=\"";
            // line 199
            echo base_url();
            echo "index/contactanos\">Contáctanos</a></li> 
                    </ul>
                  </div>
                </li>
                <li>
                  <div class=\"collapsible-header grey darken-3 white-text\"><i class=\"material-icons\">home</i>Acerca de nosotros</div>
                  <div class=\"collapsible-body\">
                    <ul>
                      <li><a class=\"\" href=\"";
            // line 207
            echo base_url();
            echo "index/about\" >Acerca de pormayor.pe</a></li>
                      <li><a class=\"\" href=\"";
            // line 208
            echo base_url();
            echo "\">Acerca de pormayor.SA</a></li>
                      <li><a class=\"\" href=\"";
            // line 209
            echo base_url();
            echo "index\">Mapa de sitio</a></li> 
                    </ul>
                  </div>
                </li>
                <li>
                  <div class=\"collapsible-header grey darken-3 white-text\"><i class=\"material-icons\">business_center</i>Servicios de comercio</div>
                  <div class=\"collapsible-body\">
                    <ul>
                      <li><a class=\"\" href=\"";
            // line 217
            echo base_url();
            echo "legal/privacidad\">Políticas de privacidad</a></li>
                      <li><a class=\"\" href=\"";
            // line 218
            echo base_url();
            echo "index\">Política de envios</a></li>
                      <li><a class=\"\" href=\"";
            // line 219
            echo base_url();
            echo "legal/compra_segura\">Compra segura</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"instagram pormayor.pe\" title=\"instagram pormayor.pe\" src=\"";
            // line 226
            echo ($context["ruta_img"] ?? null);
            echo "instaW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"facebook pormayor.pe\" title=\"facebook pormayor.pe\" src=\"";
            // line 229
            echo ($context["ruta_img"] ?? null);
            echo "faceW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"mailto:contacto@pormayor.pe\"><img alt=\"correo pormayor.pe\" title=\"correo pormayor.pe\" src=\"";
            // line 232
            echo ($context["ruta_img"] ?? null);
            echo "mailW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"youtube pormayor.pe\" title=\"youtube pormayor.pe\" src=\"";
            // line 235
            echo ($context["ruta_img"] ?? null);
            echo "youtubeW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s6 center\">
              <a class=\"anchoTotal waves-effect waves-black btn-flat white-text\" href=\"";
            // line 238
            echo base_url();
            echo "\">Inicio</a>
            </div>
            <div class=\"col s6 center\">
              <a  class=\"anchoTotal inicioBtn waves-effect waves-black btn-flat white-text\"  href=\"#inicio\"><i class=\"small material-icons\">keyboard_arrow_up</i></a>
            </div>            
          </div>
        </div>
        <div class=\"footer-copyright pormayorAccent center\">
          <div class=\"container  white-text\">Derechos Reservados © 2018 pormayorpe S.A</div>
        </div> 
      ";
        }
        // line 249
        echo "    </footer>

    ";
        // line 251
        $this->displayBlock('modal', $context, $blocks);
        echo "  
    <!-- <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 252
        echo base_url("public/intranet/js/jquery-3.1.1.js");
        echo "\"></script>-->
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>   
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 254
        echo base_url("public/intranet/js/materialize.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 255
        echo base_url("public/intranet/js/jquery.validate.min.js");
        echo "\"></script> 
    <script src=\"";
        // line 256
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\" defer></script> 
      <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\">
        //Cambio Footer

    // the \"href\" attribute of the modal trigger must specify the modal ID that wants to be triggered
    \$('#modalVocher').modal();
    
 
        \$('.footerSecundario').removeClass('hide');
        \$('.footerPrincipal').addClass('hide');

        \$(document).ready(function(){
          \$('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
          }
        );
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
        //Funciones Side-Bar
        \$(\".itemMenu\").mouseover(function(){
          \$(this).find(\".acentBar\").css(\"background-color\", \"#FEC00F\");
        });
        
        \$(\".itemMenu\").mouseout(function(){
          \$(this).find(\".acentBar\").css(\"background-color\",\"rgba(0,0,0,0.0)\");
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
        })
      });
    </script>
    <script> var base_url = \"";
        // line 343
        echo base_url();
        echo "\";</script>
    ";
        // line 344
        $this->displayBlock('script', $context, $blocks);
        // line 345
        echo "   </body>
</html>";
    }

    // line 48
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 251
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 344
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/template_usu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 344,  581 => 251,  575 => 115,  569 => 48,  564 => 345,  562 => 344,  558 => 343,  468 => 256,  464 => 255,  460 => 254,  455 => 252,  451 => 251,  447 => 249,  433 => 238,  427 => 235,  421 => 232,  415 => 229,  409 => 226,  399 => 219,  395 => 218,  391 => 217,  380 => 209,  376 => 208,  372 => 207,  361 => 199,  357 => 198,  353 => 197,  343 => 189,  321 => 170,  314 => 166,  308 => 163,  302 => 160,  296 => 157,  286 => 150,  282 => 149,  278 => 148,  269 => 142,  265 => 141,  261 => 140,  252 => 134,  248 => 133,  244 => 132,  229 => 119,  227 => 118,  221 => 115,  213 => 110,  202 => 102,  195 => 97,  187 => 95,  185 => 94,  181 => 93,  177 => 92,  169 => 91,  165 => 90,  157 => 89,  150 => 85,  146 => 84,  134 => 75,  126 => 70,  122 => 69,  113 => 62,  109 => 60,  107 => 59,  103 => 58,  92 => 49,  90 => 48,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/template_usu.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\layout\\intranet\\template_usu.twig");
    }
}
