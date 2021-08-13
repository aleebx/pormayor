<?php

/* layout/intranet/plantilla.twig */
class __TwigTemplate_1b9a419a9f06a4ff3205a2cdcd2c7b666af115bc22f20125678e033a57219cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'analytics' => array($this, 'block_analytics'),
            'head' => array($this, 'block_head'),
            'messenger' => array($this, 'block_messenger'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\" xml:lang=\"es\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>      
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 7
        if ((($context["categoriaFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Nombre", array()));
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros";
        } elseif ((($context["subcategoriaFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Nombre", array()));
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros";
        } elseif ((($context["detalleFlag"] ?? null) == true)) {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["detalle_seo"] ?? null), "Suc_Nombre", array()));
            echo " - ";
            echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Nombre", array());
            echo " al Por Mayor en PorMayor.pe - Crece con nosotros";
        } else {
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["pagina"] ?? null), "titulo", array()));
        }
        echo "</title>
<meta name=\"google-site-verification\" content=\"MZNqZwO63SqZWJMD-S5PwzQhXBJoFBLp8BmwSgYAexM\" />
<meta property=\"fb:app_id\" content=\"2623619600997776\" />
<meta property=\"og:title\" content=\"";
        // line 10
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            echo twig_upper_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array()));
            echo " - Hasta S/";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
        } else {
            echo " PorMayor.pe - Crece con nosotros";
        }
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 11
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            echo "Precio Normal: S/";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMaximo", array());
        } else {
            echo "Ayudamos a crecer a todo los  nuevos emprendedores en iniciar su negocio. Llévate todo surtido y a precio por cajón por una compra mínima de 500 soles";
        }
        echo "\"/>
";
        // line 12
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array())) {
            // line 13
            echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"https://pormayor.pe/img/";
            // line 14
            echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
            echo "\" />
<meta property=\"og:image:width\" content=\"400\" />
<meta property=\"og:image:height\" content=\"300\" />
";
        } else {
            // line 18
            echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"https://pormayor.pe/img/logoPM2.jpg\" />
";
        }
        // line 21
        echo "<script data-ad-client=\"ca-pub-6014646385337670\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<meta name=\"description\" content=\"";
        // line 22
        if ((($context["categoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Meta_Description", array())) {
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Meta_Description", array());
            } else {
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Nombre", array());
                echo " al por mayor con las mejores ofertas, solo aquí en PorMayor.pe. Cotiza ahora y abastece tu negocio fácil y rápido. ";
            }
        } elseif ((($context["subcategoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Meta_Description", array())) {
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Meta_Description", array());
            } else {
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Nombre", array());
                echo " al por mayor con las mejores ofertas, solo aquí en PorMayor.pe. Cotiza ahora y abastece tu negocio fácil y rápido. ";
            }
        } elseif ((($context["detalleFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["detalle_seo"] ?? null), "Des_Meta_Description", array())) {
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Meta_Description", array());
            } else {
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Nombre", array());
                echo " al por mayor con las mejores ofertas, solo aquí en PorMayor.pe. Cotiza ahora y abastece tu negocio fácil y rápido. ";
            }
        } else {
            echo "Compra y vende al por mayor en Lima.Crea tu propia tienda virtual mayorista o compra al por mayor para tu negocio fácil y rápido aquí.";
        }
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 23
        if ((($context["categoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Keywords", array())) {
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_Keywords", array());
            } else {
                echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima";
            }
        } elseif ((($context["subcategoriaFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Keywords", array())) {
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_Keywords", array());
            } else {
                echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima";
            }
        } elseif ((($context["detalleFlag"] ?? null) == true)) {
            if ($this->getAttribute(($context["detalle_seo"] ?? null), "Des_Keywords", array())) {
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_Keywords", array());
            } else {
                echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima";
            }
            echo " ";
        } else {
            echo "Donde comprar ropa al por mayor en Lima, donde comprar zapatillas al por mayor en Lima, comprar ropa al por mayor en Lima peru, donde comprar maquillaje al por mayor en Lima, donde comprar carteras al por mayor en Lima,";
        }
        echo "\">
<link rel=\"icon\" href=\"";
        // line 24
        echo ($context["ruta_img"] ?? null);
        echo "logo.png\">
";
        // line 26
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" media=\"screen\">
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo base_url("public/intranet/css/materialize.min.css");
        echo "\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\"  media=\"screen\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 29
        echo base_url("public/intranet/css/templates.min.css");
        echo "\"  media=\"screen\"/>
";
        // line 30
        $this->displayBlock('analytics', $context, $blocks);
        // line 31
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-129372100-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129372100-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6LFJ9S');</script>
<!-- End Google Tag Manager -->
";
        // line 47
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "<script data-ad-client=\"ca-pub-6014646385337670\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
  <style type=\"text/css\">
  .autocomplete-content{width: 40vw!important;}
  .w100 {width:200% !important}
  @media only screen and (max-width: 600px) {
  .w100 {width:100% !important}
  .autocomplete-content{width: 80vw!important;}
  }
  </style>
</head>
<body id=\"inicio\" class=\"grey lighten-4\">
  <div id=\"api-chat-bot\"></div>
";
        // line 60
        $this->displayBlock('messenger', $context, $blocks);
        // line 61
        echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-P6LFJ9S\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2623619600997776',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.2'
    });      
    FB.AppEvents.logPageView();         
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"https://connect.facebook.net/es_ES/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '366482671192300');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=366482671192300&ev=PageView&noscript=1\"
/></noscript>
<div class=\"navbar-fixed inner\">
    <nav class=\"z-depth-2 pormayor nav-extended\">
      <div class=\"sinBordeBottom nav-wrapper row navRowMobile\">
      <div class=\"col s12 hide-on-large-only colMenuButton ocultarSearch sinPadding\" style=\"height:56px\">
        <a data-activates=\"mobile-pormayor\" class=\"button-collapse centrarForzado\">
          <img alt=\"\" src=\"";
        // line 104
        echo ($context["ruta_img"] ?? null);
        echo "menuIcon.svg\" width=\"35\">
        </a>
      </div>
      <div class=\"colMenuLogo col s10 l3\">        
        <a href=\"";
        // line 108
        echo base_url();
        echo "\" class=\"valign-wrapper anchoTotal brand-logo\">
          <img alt=\"Pomayor.pe - Crece con nosotros\" src=\"";
        // line 109
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg\" class=\"centrarForzado\">
        </a>
      </div>
      <div class=\"col l9\">        
        <ul class=\"right hide-on-med-and-down\">
          <li>
            <div class=\"contentSearch contentSearchTienda positionRelative\" style=\"width: 80em;\">
              <i class=\"material-icons positionAbsolute sinUser grey-text text-lighten-1 lineHeight0 transitionB\">search</i>
              <input type=\"text\" class=\"browser-default buscador autocomplete redondeo white enfasisA\" placeholder=\"Buscar productos\" data-tienda=\"pormayor\">
            </div>
          </li>
          <li><a href=\"";
        // line 120
        echo base_url();
        echo "usuario/registro\" class=\"black-text\">Regristrarse</a></li>
          <li><a href=\"";
        // line 121
        echo base_url();
        echo "usuario/login\" class=\"black-text\">Iniciar Sesión</a></li>
        </ul>
      </div>
      <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\"style=\"transform: translateX(0%);\">
        ";
        // line 125
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 126
            echo "            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                ";
            // line 128
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 129
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"https://tienda-oficial.pormayor.pe/usuario/inventario/lProductos\" style=\"padding: 0 16px;\">Perfil Tienda</a>
                ";
            } elseif (($this->getAttribute(            // line 130
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 131
                echo "                  <a class=\"btn centrarForzado pormayor pormayorAccent-text\" href=\"";
                echo base_url();
                echo "gestor/gestion\" style=\"padding: 0 16px;\">Gestor</a>
                ";
            }
            // line 133
            echo "                <a href=\"";
            echo base_url();
            echo "comprador/index/pedidos\" class=\"btn centrarForzado pormayorUnico white-text\" style=\"padding: 0 16px;\">Perfil Usuario</a>
              </li>
              <li class=\"sinUser itemMenu white-text\" style=\"margin: 5px 20px 5px 20px;\">Hola, <b>";
            // line 135
            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array()))) > 15)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nombre", array())), 0, 15) . "...")) : ($this->getAttribute(($context["usuario"] ?? null), "nombre", array())));
            echo "</b><a class=\"cerrarSesionBtn sesionBtn right\"><i class=\"material-icons red-text\">power_settings_new</i></a> 
              </li> 
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 138
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Ir a Inicio</a>      
              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 141
            echo base_url("remate");
            echo "\"><i class=\"material-icons\">attach_money</i>Remate</a>
              </li>   
              <li class=\"itemMenu\">
                <ul class=\"collapsible collapsible-accordion\">
                  <li class=\"submenu\">
                    <a class=\"collapsible-header fixHeaderSideMobile waves-effect white-text\" href=\"#\" style=\"padding: 0 32px\">Categorias <i class=\"material-icons right\">keyboard_arrow_down</i></a>
                    <div class=\"collapsible-body\">
                      <ul class=\"grey darken-4\">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                echo "<ul class=\"collapsible collapsible-accordion\"><li class=\"submenu\"><a class=\"collapsible-header fixHeaderSideMobile\" href=\"#\"><img alt=\"";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["cat"], "Cat_IconMobile", array());
                echo "\" type=\"image/svg+xml\" class=\"positionRelative\" width=\"20\" height=\"20\" />&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo "<i class=\"material-icons right\">keyboard_arrow_down</i></a></li></ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                      </ul>
                    </div>
                  </li>
                </ul>
              </li>              
            </ul>         
        ";
        } else {
            // line 155
            echo "  
            <ul class=\"side-nav grey darken-4 z-depth-3 menuTex\" id=\"mobile-pormayor\">
              <li class=\"headerMenu center valign-wrapper\">
                <a class=\"btn centrarForzado\" href=\"";
            // line 158
            echo base_url();
            echo "usuario/login\" style=\"padding: 0 16px;\">Iniciar sesión</a>
                <a class=\"btn centrarForzado\" href=\"";
            // line 159
            echo base_url();
            echo "usuario/registro\" style=\"padding: 0 16px;\">Registrarse</a>
                ";
            // line 161
            echo "              </li>     
              <li class=\"itemMenu\">
                <a class=\"white-text\" href=\"";
            // line 163
            echo base_url();
            echo "\"><i class=\"material-icons \">home</i>Inicio</a>      
              </li>
              <li class=\"itemMenu\">
                <p class=\"white-text\">
                  Empieza tu propio negocio. Llévate todo a surtido a precio de cajón por una compra mínima de 300 soles.
                </p>
              </li>    
            </ul>
        ";
        }
        // line 172
        echo "      </ul>
    </div>
  </nav>
  </div>
      ";
        // line 176
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "        <footer class=\"page-footer grey darken-4 black-text ";
        if (($context["nofooter"] ?? null)) {
            echo "hide";
        }
        echo "\">
          <div class=\"container\">
            <div class=\"row pormayor\">
              <div class=\"col s12 l12\">&nbsp;</div>
              <div class=\"col s12 l12\">
                  <div class=\"row\">
                    <div class=\"col s12 l3 center-align input-field\">
                      <a href=\"https://www.instagram.com/pormayor.pe/?hl=es-la\"><img alt=\"Instagram PorMayor.pe\" title=\"Instagram PorMayor.pe\" src=\"";
        // line 184
        echo ($context["ruta_img"] ?? null);
        echo "instaW.png\" height=\"30\"></a>
                      <a href=\"https://www.facebook.com/pormayoroficial/\"><img alt=\"Facebook PorMayor.pe\" title=\"Facebook PorMayor.pe\" src=\"";
        // line 185
        echo ($context["ruta_img"] ?? null);
        echo "faceW.png\" height=\"30\"></a>
                      <a href=\"mailto:contacto@pormayor.pe\"><img alt=\"Correo PorMayor.pe\" title=\"Correo PorMayor.pe\" src=\"";
        // line 186
        echo ($context["ruta_img"] ?? null);
        echo "mailW.png\" height=\"30\"></a>
                      <a href=\"https://www.youtube.com/channel/UCgCUpeiwXV1-8BphKl6ut0Q?view_as=subscriber\"><img alt=\"Youtube PorMayor.pe\" title=\"Youtube PorMayor.pe\" src=\"";
        // line 187
        echo ($context["ruta_img"] ?? null);
        echo "youtubeW.png\" height=\"30\"></a>
                    </div>
                    <div class=\"col l4 input-field\">
                      <span>Recibe las últimas tendencias de PorMayor.pe e ideas únicas para regalar directamente en tu bandeja de entrada</span>
                    </div>
                    <div class=\"col s6 l3 input-field\">
                      <input type=\"email\" id=\"email_subs\" class=\"redondeo white\" placeholder=\"Introduce tu correo electrónico\">
                    </div>
                    <div class=\"col s6 l2 center-align input-field\">
                      <a class=\"btn subscribeBtn grey darken-4 pulse negrita\">SUSCRIBIRME</a>  
                    </div>                    
                </div>
              </div>
              </div>
              <div class=\"row white-text\">
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">PorMayor.pe</h5>
                <p>Somos el primer ecommerce mayoista del Perú, dónde encontras novedades al mejor precio y puedas emprender tu negocio.</p>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">MI CUENTA</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 209
        echo base_url();
        echo "usuario/login\">Registrarte</a></li>
                  <li><a class=\"\" href=\"";
        // line 210
        echo base_url();
        echo "usuario/login\">Iniciar Sesión</a></li>
                  <li><a class=\"\" href=\"";
        // line 211
        echo base_url();
        echo "usuario/olvido_contrasenia\">Recuperar Contraseña</a></li>
                  <li><a class=\"\" href=\"";
        // line 212
        echo base_url();
        echo "contacto\">Contacto</a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">SERVICIO AL CLIENTE</h5>
                <ul>
                  <li><a class=\"\" href=\"";
        // line 218
        echo base_url();
        echo "legal/centro\">Centro de Ayuda</a></li>
                  <li><a class=\"\" href=\"";
        // line 219
        echo base_url();
        echo "legal\">Terminos y condiciones</a></li>
                  <li><a class=\"\" href=\"";
        // line 220
        echo base_url();
        echo "legal/privacidad\">Politicas de Privacidad</a></li>
                  <li><a class=\"\" href=\"";
        // line 221
        echo base_url();
        echo "legal/compra_segura\">Compra Segura</a></li>
                  <li><a class=\"\" href=\"http://runningbox.azurewebsites.net/Orden/ListaTracking/\">Rastrea tu Pedido</a></li>
                  <li><a class=\"\" href=\"";
        // line 223
        echo base_url();
        echo "reclamo\">Libro de Reclamaciones <i class=\"material-icons\">menu_book</i></a></li>
                </ul>
              </div>
              <div class=\"col l3 s12\">
                <h5 class=\"amber-text\">ESCRÍBENOS</h5>
                <ul>
                  <li><a href=\"tel:51923500413\">Central 1: 923500413</a></li>
                  <li><a href=\"tel:51955873746\">Central 2: 955873746</a></li>
                  <li><a href=\"mailto:contacto@pormayor.pe\">contacto@pormayor.pe</a></li>
                  <li>Horario de Atención:<br>
                    Lunes a Viernes: 9:00 AM a 6:00 PM<br>
                    Sábados: 9:00 AM a 2:00 PM</li>
                  <li>Jirón Andahuaylas 251 - Interior 208, Cercado de Lima - Perú</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"row container\">
              <div class=\"col l6 center\">
                © 2018 Derechos Reservados <a href=\"";
        // line 243
        echo base_url();
        echo "\">PorMayor.pe S.A.</a>
              </div>
              <div class=\"col l2\">
                <a href=\"https://www.camaralima.org.pe/principal\"><img src=\"";
        // line 246
        echo ($context["ruta_img"] ?? null);
        echo "LOGO-CCL-2019.png\" title=\"REGISTRADOS EN LA CAMARA DE COMERCIO DE LIMA\"></a>
              </div>
          </div>
        </footer>      
    ";
        // line 250
        $this->displayBlock('modal', $context, $blocks);
        // line 251
        echo "      <script> var base_url = \"";
        echo base_url();
        echo "\";</script>
      <script>
          (function(d, s, t, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s);
              js.id = t;
              js.src = \"https://www.plazbot.com/Widget/plazbot-archivos/plazbot-chat/Plazbot.frame.js?version=3.1.1.4&var1=\" + id;
              fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'id-chat-plazbot',  'f4714922245cee28364fd1b7f2358ce4'));
      </script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js\"></script>
      <script src=\"";
        // line 266
        echo base_url("public/js/template-lite.js?v=2.0");
        echo "\" defer></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>
      <script>        
        \$(\".button-collapse\").sideNav();      </script>
    ";
        // line 270
        $this->displayBlock('script', $context, $blocks);
        // line 271
        echo "   </body>

</html>";
    }

    // line 30
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 47
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 60
    public function block_messenger($context, array $blocks = array())
    {
    }

    // line 176
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 250
    public function block_modal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 270
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout/intranet/plantilla.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 270,  569 => 250,  563 => 176,  558 => 60,  552 => 47,  547 => 30,  541 => 271,  539 => 270,  532 => 266,  513 => 251,  511 => 250,  504 => 246,  498 => 243,  475 => 223,  470 => 221,  466 => 220,  462 => 219,  458 => 218,  449 => 212,  445 => 211,  441 => 210,  437 => 209,  412 => 187,  408 => 186,  404 => 185,  400 => 184,  387 => 177,  385 => 176,  379 => 172,  367 => 163,  363 => 161,  359 => 159,  355 => 158,  350 => 155,  341 => 149,  325 => 148,  315 => 141,  309 => 138,  303 => 135,  297 => 133,  291 => 131,  289 => 130,  286 => 129,  284 => 128,  280 => 126,  278 => 125,  271 => 121,  267 => 120,  253 => 109,  249 => 108,  242 => 104,  197 => 61,  195 => 60,  181 => 48,  179 => 47,  161 => 31,  159 => 30,  155 => 29,  150 => 27,  147 => 26,  143 => 24,  118 => 23,  91 => 22,  88 => 21,  83 => 18,  76 => 14,  73 => 13,  71 => 12,  62 => 11,  52 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/intranet/plantilla.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\layout\\intranet\\plantilla.twig");
    }
}
