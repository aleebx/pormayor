<?php

/* layout/intranet/template_gc.twig */
class __TwigTemplate_56815b324dea550901c52983ed93737df80111922e5e770320aeb33a7626990c extends Twig_Template
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 7
        echo $this->getAttribute(($context["pagina"] ?? null), "titulo", array());
        echo "</title>    
    <meta name=\"description\" content=\"Crea tu propia tienda o explora tiendas de mayoristas. Adquiere o vende tu mercancía de manera segura. Facilito y rapidito. Primer portal de ventas por mayor en Perú.\">
    <meta name=\"keywords\" content=\"Ventas por mayor peru,Ropa al por mayor peru,Zapatos por mayor,Comprar al por mayor,Barato\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo ($context["ruta_img"] ?? null);
        echo "logo.png\">
    ";
        // line 12
        echo "    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" media=\"screen\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo base_url("public/intranet/css/materialize.min.css");
        echo "\"  media=\"screen\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo base_url("public/intranet/css/jquery-confirm.min.css");
        echo "\"  media=\"screen\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo base_url("public/");
        echo "intranet/css/templates.min.css?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"  media=\"screen,projection\"/>
    ";
        // line 16
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "    <style type=\"text/css\">
    header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
    </style>
   </head>
  <body> 
  <header>
    <div class=\"navbar-fixed hide-on-large-only\" id=\"inicio\">
      <nav class=\"nav-extended pormayor\" data-color=\"#fff159\">
        <div  class=\"sinBordeBottom nav-wrapper row navRowMobile\">
          <div class=\"col s2 m2 l2 center hide-on-large-only colMenuButton sinPadding\" style=\"height:56px\">
            <a href=\"#\" data-activates=\"slide-out\" class=\"centrarForzado button-collapse\">
              <img src=\"";
        // line 36
        echo ($context["ruta_img"] ?? null);
        echo "menuIcon.svg\" width=\"35\">
            </a>
          </div>
          <div class=\"col s3 m2 l2 center colMenuLogo sinPadding\" >
            <div class=\"logoNegativo\">
              <a href=\"";
        // line 41
        echo base_url();
        echo "\">
                <img src=\"";
        // line 42
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" type=\"image/svg+xml\" class=\"\">
              </a>
            </div>
          </div>  
        </div>
      </nav> 
    </div> 
    <ul id=\"slide-out\" class=\"side-nav fixed grey darken-4 z-depth-3 menuTex\"> 
      <li class=\"headerMenu center valign-wrapper\">
        <div class=\"logoIcon\">
          <a href=\"";
        // line 52
        echo base_url();
        echo "\"><img src=\"";
        echo ($context["ruta_img"] ?? null);
        echo "LogoPositivo.svg\" class=\"valign-wrapper\" height=\"40\"></a>
        </div>
      </li>
      ";
        // line 56
        echo "      <li class=\"itemMenu\"><div class=\"acentBar\"></div><a href=\"";
        echo base_url();
        echo "gestor/gestion\" class=\"waves-effect\"><i class=\"material-icons\">store</i>Gestión Tienda</a></li>
      ";
        // line 58
        echo "      <li class=\"itemMenu\"><div class=\"acentBar\"></div><a href=\"";
        echo base_url();
        echo "gestor/gestion/agenda\" class=\"waves-effect\"><i class=\"material-icons\">store</i>Agenda</a></li>
      <li class=\"containerAvatar valign-wrapper\">
        <div class=\"avatarComprador\" style=\"top: 2px;\">
          <a class=\"sinPadding\"href=\"";
        // line 61
        echo base_url();
        echo "usuario/perfil\">
            <i style=\"font-size: 50px; color: rgba(255,255,255,0.8)\" class=\"material-icons\">account_circle</i>
          </a>
        </div>
        <div class=\"avatarContainerComprador flow-text\" style=\"top: 15px;\">
          <span class=\"avatarText1\">";
        // line 66
        echo $this->getAttribute(($context["usuario"] ?? null), "nombre", array());
        echo "</span>
        </div>
        <a style=\"right: -180px;\" class=\"sesionBtn avatarItem waves-effect right tooltipped\" data-delay=\"30\" data-position=\"top\" data-tooltip=\"Cerrar Sesion\" href=\"";
        // line 68
        echo base_url();
        echo "usuario/cerrar_sesion\"><i class=\"material-icons\">power_settings_new</i></a>
      </li>
    </ul>
  </header>
  ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        echo " 

  <footer class=\"inner page-footer grey darken-4 text-white\">
      ";
        // line 75
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 76
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
            // line 89
            echo base_url();
            echo "Legal/centro\">Centro de ayuda</a></li>
                            <li><a class=\"\" href=\"";
            // line 90
            echo base_url();
            echo "Legal/\">Términos y condiciones</a></li>
                            <li><a class=\"\" href=\"";
            // line 91
            echo base_url();
            echo "index/contactanos\">Contáctanos</a></li> 
                          </ul>
                        </div> 
                        <div class=\"col s3 m3 l3\">
                          <h5 class=\"\">Acerca de nosotros</h5>
                          <ul>
                            <li><a class=\"\" href=\"";
            // line 97
            echo base_url();
            echo "index/about\" >Acerca de pormayor.pe</a></li>
                            <li><a class=\"\" href=\"";
            // line 98
            echo base_url();
            echo "\">Acerca de pormayor.SA</a></li>
                            <li><a class=\"\" href=\"";
            // line 99
            echo base_url();
            echo "index\">Mapa de sitio</a></li> 
                          </ul>
                        </div>
                        <div class=\"col s3 m3 l3 sinPadding\">
                          <h5 class=\"\">Servicios de comercio</h5>
                          <ul>
                            <li><a class=\"\" href=\"";
            // line 105
            echo base_url();
            echo "legal/privacidad\">Políticas de privacidad</a></li>
                            <li><a class=\"\" href=\"";
            // line 106
            echo base_url();
            echo "index\">Política de envios</a></li>
                            <li><a class=\"\" href=\"";
            // line 107
            echo base_url();
            echo "legal/compra_segura\">Compra segura</a></li>
                          </ul>
                        </div>
                        <div class=\"col s12 m6 l3\">
                          <h5 class=\" hide-on-med-and-down\">Síguenos</h5>
                            <div clasS=\"row center footerBuscador\">
                              <div class=\"col s3\">
                                <a  href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"instagram pormayor.pe\" title=\"instagram pormayor.pe\" src=\"";
            // line 114
            echo ($context["ruta_img"] ?? null);
            echo "instaW.png\" height=\"30\"></a>
                              </div>
                              <div class=\"col s3\">
                                <a  href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"facebook pormayor.pe\" title=\"facebook pormayor.pe\" src=\"";
            // line 117
            echo ($context["ruta_img"] ?? null);
            echo "faceW.png\" height=\"30\"></a>
                              </div>
                              <div class=\"col s3\">
                                <a  href=\"mailto:contacto@pormayor.pe\"><img alt=\"correo pormayor.pe\" title=\"correo pormayor.pe\" src=\"";
            // line 120
            echo ($context["ruta_img"] ?? null);
            echo "mailW.png\" height=\"30\"></a>
                              </div>
                              <div class=\"col s3\">
                                <a  href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"youtube pormayor.pe\" title=\"youtube pormayor.pe\" src=\"";
            // line 123
            echo ($context["ruta_img"] ?? null);
            echo "youtubeW.png\" height=\"30\"></a>
                              </div>
                            </div>
                            <div class=\"col s6\">
                              <a class=\"anchoTotal waves-effect waves-black btn-flat white-text\" href=\"";
            // line 127
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
            // line 146
            echo "        <div class=\"footerMovil\">
          <div class=\"row sinBordeBottom\">
            <div class=\"col s12\">
              <ul class=\"collapsible\" data-collapsible=\"accordion\">
                <li>
                  <div class=\"collapsible-header grey darken-3 white-text\"><i class=\"material-icons\">person</i>Servicio al cliente</div>
                  <div class=\"collapsible-body\">
                    <ul>
                      <li><a class=\"\" href=\"";
            // line 154
            echo base_url();
            echo "Legal/centro\">Centro de ayuda</a></li>
                      <li><a class=\"\" href=\"";
            // line 155
            echo base_url();
            echo "Legal/\">Términos y condiciones</a></li>
                      <li><a class=\"\" href=\"";
            // line 156
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
            // line 164
            echo base_url();
            echo "index/about\" >Acerca de pormayor.pe</a></li>
                      <li><a class=\"\" href=\"";
            // line 165
            echo base_url();
            echo "\">Acerca de pormayor.SA</a></li>
                      <li><a class=\"\" href=\"";
            // line 166
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
            // line 174
            echo base_url();
            echo "legal/privacidad\">Políticas de privacidad</a></li>
                      <li><a class=\"\" href=\"";
            // line 175
            echo base_url();
            echo "index\">Política de envios</a></li>
                      <li><a class=\"\" href=\"";
            // line 176
            echo base_url();
            echo "legal/compra_segura\">Compra segura</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"instagram pormayor.pe\" title=\"instagram pormayor.pe\" src=\"";
            // line 183
            echo ($context["ruta_img"] ?? null);
            echo "instaW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"facebook pormayor.pe\" title=\"facebook pormayor.pe\" src=\"";
            // line 186
            echo ($context["ruta_img"] ?? null);
            echo "faceW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"mailto:contacto@pormayor.pe\"><img alt=\"correo pormayor.pe\" title=\"correo pormayor.pe\" src=\"";
            // line 189
            echo ($context["ruta_img"] ?? null);
            echo "mailW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s3 center\">
              <a  href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"youtube pormayor.pe\" title=\"youtube pormayor.pe\" src=\"";
            // line 192
            echo ($context["ruta_img"] ?? null);
            echo "youtubeW.png\" height=\"30\"></a>
            </div>
            <div class=\"col s6 center\">
              <a class=\"anchoTotal waves-effect waves-black btn-flat white-text\" href=\"";
            // line 195
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
        // line 206
        echo "    </footer>

  ";
        // line 208
        $this->displayBlock('modal', $context, $blocks);
        echo "  
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script> 
  <script> var base_url = \"";
        // line 211
        echo base_url();
        echo "\";</script>
  <script>  
     \$(\".button-collapse\").sideNav();
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
  </script> 
  ";
        // line 228
        $this->displayBlock('script', $context, $blocks);
        // line 229
        echo "  </body>
</html>";
    }

    // line 16
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 208
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 228
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/template_gc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 228,  421 => 208,  415 => 72,  409 => 16,  404 => 229,  402 => 228,  382 => 211,  376 => 208,  372 => 206,  358 => 195,  352 => 192,  346 => 189,  340 => 186,  334 => 183,  324 => 176,  320 => 175,  316 => 174,  305 => 166,  301 => 165,  297 => 164,  286 => 156,  282 => 155,  278 => 154,  268 => 146,  246 => 127,  239 => 123,  233 => 120,  227 => 117,  221 => 114,  211 => 107,  207 => 106,  203 => 105,  194 => 99,  190 => 98,  186 => 97,  177 => 91,  173 => 90,  169 => 89,  154 => 76,  152 => 75,  146 => 72,  139 => 68,  134 => 66,  126 => 61,  119 => 58,  114 => 56,  106 => 52,  93 => 42,  89 => 41,  81 => 36,  60 => 17,  58 => 16,  52 => 15,  48 => 14,  44 => 13,  41 => 12,  37 => 10,  31 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/template_gc.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\layout\\intranet\\template_gc.twig");
    }
}
