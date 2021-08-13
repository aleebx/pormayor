<?php

/* index2.twig */
class __TwigTemplate_aeaec4d0919c57ae7d90ef5348562993c462b963d0403a807f68adb7948948a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "index2.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_lite.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        // line 4
        echo "\t";
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/spinkit/1.2.5/spinkit.min.css\"  media=\"screen\"/>
\t<style>
\t\tbody > .inner {display: none;}
\t\tbody.pg-loaded > .inner {display: block;}
\t\t.fontX{font-size: 18px!important}
\t\t.swiper-container {
\t      width: 100%;
\t      height: 100%;
\t    }
\t\t";
        // line 16
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 17
            echo "\t  \t\t.alturaDIV{height:289px;}
\t  \t\t.fontD2{font-size: 0.8rem!important;font-weight:1000;}
\t  \t\t.fontE{font-size: 0.8rem!important}
\t\t";
        }
        // line 20
        echo "  
\t</style>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t<div class=\"inner\">
\t\t";
        // line 25
        if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
            // line 26
            echo "\t\t\t<div class=\"hide addHomeScreen valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 29
            if ((($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 2) || ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 3))) {
                // line 30
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\">
\t\t\t\t\t\t\t<a href=\"http://";
                // line 31
                echo ($context["subdominio_tienda"] ?? null);
                echo ".";
                echo ($context["dominio"] ?? null);
                echo "/usuario/inventario/lProductos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Crear tienda\" data-src=\"";
                // line 32
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionTiendaB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 37
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 43
($context["usuario"] ?? null), "rol", array()) == 5)) {
                // line 44
                echo "\t\t\t\t\t\t<div class=\"col s6 m6 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo base_url();
                echo "gestor/gestion\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Iniciar sesion\" data-src=\"";
                // line 46
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t<div class=\"col s12 m12 sinPadding center\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t\t<a href=\"";
                // line 54
                echo base_url();
                echo "comprador/index/pedidos\">
\t\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - Perfil de usuario\" data-src=\"";
                // line 55
                echo ($context["ruta_img"] ?? null);
                echo "movilOpcionCompradorB.webp\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m12 center\">
\t\t\t\t\t\t\t<a class=\"cerrarSesionBtn btn pormayorUnico white-text\"><i class=\"material-icons left\">power_settings_new</i>Cerrar Sesión</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 61
            echo "   
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 65
            echo "\t\t\t<div class=\"hide addHomeScreen container valign-wrapper\">
\t\t\t\t<button class=\"btn-flat white-text cerrarHomeScreen\"><i class=\"fontA material-icons\">close</i></button>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 center sinPadding\" style=\"margin-bottom:20px\">
\t\t\t\t\t\t<a href=\"";
            // line 69
            echo base_url();
            echo "usuario/login\">
\t\t\t\t\t\t\t<img class=\"b-lazy\" alt=\"Pormayor.pe - registrarse como comprador\"  data-src=\"";
            // line 70
            echo ($context["ruta_img"] ?? null);
            echo "movilOpcionCompradorA.webp\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 76
        echo "\t</div>
\t<main class=\"container\">
\t\t\t";
        // line 87
        echo "\t\t\t";
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 88
            echo "\t\t\t<div class=\"swiper-container swBanner\">
\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t      <div class=\"swiper-slide\"><img alt=\"Pormayor.pe\" src=\"";
            // line 90
            echo ($context["ruta_img"] ?? null);
            echo "bannerEmp.webp\" class=\"responsive-img\"></div>
\t\t\t      <div class=\"swiper-slide\"><img alt=\"Pormayor.pe\" src=\"";
            // line 91
            echo ($context["ruta_img"] ?? null);
            echo "bannerjulio.webp\" class=\"responsive-img\"></div>
\t\t\t    </div>
\t\t\t    <!-- Add Pagination -->
\t\t\t    <div class=\"swiper-pagination\"></div>
\t\t\t</div>
\t\t\t";
        } else {
            // line 97
            echo "\t\t\t<div class=\"swiper-container swBanner\">
\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t      <div class=\"swiper-slide\"><img alt=\"Pormayor.pe\" src=\"";
            // line 99
            echo ($context["ruta_img"] ?? null);
            echo "bannerEmpM.webp\" class=\"responsive-img\"></div>
\t\t\t      <div class=\"swiper-slide\"><img alt=\"Pormayor.pe\" src=\"";
            // line 100
            echo ($context["ruta_img"] ?? null);
            echo "bannerjulioM.webp\" class=\"responsive-img\"></div>
\t\t\t    </div>
\t\t\t    <!-- Add Pagination -->
\t\t\t    <div class=\"swiper-pagination\"></div>
\t\t\t</div>
\t\t\t";
        }
        // line 106
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m6 l6 center\">
\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=51923500413&text=Hola,%20estoy%20en%20realizar%20un%20pedido.\" target=\"_blank\" data-action=\"share/whatsapp/share\" style=\"cursor: pointer;\" class=\"fontC negrita black-text\"><img src=\"";
        // line 108
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\" height=\"50\" style=\"top:5px;margin-right:10px\" class=\"positionRelative\">VENTAS 923500413</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 m6 l6\">
\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=51955873746&text=Hola,%20estoy%20en%20realizar%20un%20pedido.\" target=\"_blank\" data-action=\"share/whatsapp/share\" style=\"cursor: pointer;\" class=\"fontC negrita black-text\"><img src=\"";
        // line 111
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\" height=\"50\" style=\"top:5px;margin-right:10px\" class=\"positionRelative\">VENTAS 955873746</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t<span class=\"negrita fontX red-text\">REMATE PRECIOS DE LOCURA</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Slider ultimos productos -->
\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<div class=\"swiper-container swBelleza\">
\t\t\t\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t\t\t\t    \t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto_remate"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 128
            echo "\t\t\t\t\t\t\t        <div class=\"swiper-slide\">
\t\t\t\t\t\t\t        \t<a itemprop=\"url\" href=\"";
            // line 129
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t\t\t\t\t\t\t        \t";
            // line 132
            echo "\t\t\t\t\t\t\t\t\t              <img src=\"";
            echo ($context["ruta_img"] ?? null);
            echo "promo/";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo ".jpg\" alt=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"responsive-img\">
\t\t\t\t\t\t\t\t";
            // line 144
            echo "\t\t\t\t\t\t\t        \t</a>\t\t\t\t
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"swiper-button-prev swiper-button-black\"></div>
\t\t\t\t\t\t    <div class=\"swiper-button-next swiper-button-black\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t<span class=\"negrita fontX\">ÚLTIMOS PRODUCTOS</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Slider ultimos productos -->
\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<div class=\"swiper-container swBelleza\">
\t\t\t\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t\t\t\t    \t";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto_ultimos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 168
            echo "\t\t\t\t\t\t\t        <div class=\"swiper-slide\">
\t\t\t\t\t\t\t        \t<a itemprop=\"url\" href=\"";
            // line 169
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" class=\"grey-text text-darken-4\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t\t\t\t\t\t\t        \t<div class=\"card z-depth-1\" style=\"border-radius: 5px !important;\">
\t\t\t\t\t\t\t\t        \t\t <div class=\"center\" style=\"height:186px;\">
\t\t\t\t\t\t\t\t\t              <img src=\"";
            // line 172
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"fixImgProducto\">
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t        \t\t<div class=\"card-body center\">\t
\t\t\t\t\t\t\t\t        \t\t<p class=\"truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 176
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "
\t\t\t\t\t\t\t\t        \t\t</p>\t\t\t\t\t\t\t\t\t             
\t\t\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t\t\t        \t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fontC\">S/ ";
            // line 180
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new badge blue\">Nuevo</span>
\t\t\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t        \t</a>\t\t\t\t
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"swiper-button-prev swiper-button-black\"></div>
\t\t\t\t\t\t    <div class=\"swiper-button-next swiper-button-black\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<span class=\"negrita fontX\">MÁS VISTOS</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- Slider ultimos productos -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<div class=\"swiper-container swNormal\">
\t\t\t\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t\t\t\t    \t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos_vistos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 207
            echo "\t\t\t\t\t\t\t\t    <div class=\"swiper-slide\">
\t\t\t\t\t\t    \t\t\t<a itemprop=\"url\" href=\"";
            // line 208
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" class=\"grey-text text-darken-4\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t\t\t\t\t\t\t        \t<div class=\"card z-depth-1\" style=\"border-radius: 5px !important;\">
\t\t\t\t\t\t\t\t        \t\t <div class=\"center\" style=\"height:186px;\">
\t\t\t\t\t\t\t\t\t              <img src=\"";
            // line 211
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"fixImgProducto\">
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t        \t\t<div class=\"card-body center\">\t
\t\t\t\t\t\t\t\t        \t\t<p class=\"truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 215
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "
\t\t\t\t\t\t\t\t        \t\t</p>\t\t\t\t\t\t\t\t\t             
\t\t\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t\t\t        \t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fontC\">S/ ";
            // line 219
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo " </span>
\t\t\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t        \t</a>\t\t
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"swiper-button-prev swiper-button-black\"></div>
\t\t\t\t\t\t    <div class=\"swiper-button-next swiper-button-black\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12\">\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"negrita fontX\"><i class=\"material-icons pink-text\">spa</i>BELLEZA Y CUIDADO PERSONAL</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- Slider ultimos productos -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12\">
\t\t\t\t\t\t<div class=\"swiper-container swNormal\">
\t\t\t\t\t\t    <div class=\"swiper-wrapper\">
\t\t\t\t\t\t    \t";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["belleza"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 246
            echo "\t\t\t\t\t\t\t        <div class=\"swiper-slide\">
\t\t\t\t\t\t\t        \t<a itemprop=\"url\" href=\"";
            // line 247
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" class=\"grey-text text-darken-4\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
\t\t\t\t\t\t\t\t        \t<div class=\"card z-depth-1\" style=\"border-radius: 5px !important;\">
\t\t\t\t\t\t\t\t        \t\t <div class=\"center\" style=\"height:186px;\">
\t\t\t\t\t\t\t\t\t              <img src=\"";
            // line 250
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"fixImgProducto\">
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t        \t\t<div class=\"card-body center\">\t
\t\t\t\t\t\t\t\t        \t\t<p class=\"truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 254
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "
\t\t\t\t\t\t\t\t        \t\t</p>\t\t\t\t\t\t\t\t\t             
\t\t\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t\t\t        \t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fontC\">S/ ";
            // line 258
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo " </span>
\t\t\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t        \t</a>\t\t
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"swiper-button-prev swiper-button-black\"></div>
\t\t\t\t\t\t    <div class=\"swiper-button-next swiper-button-black\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t";
    }

    // line 272
    public function block_script($context, array $blocks = array())
    {
        // line 273
        echo "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
";
        // line 275
        echo "<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
\t    <script>
\t      var base_url = \"";
        // line 277
        echo base_url();
        echo "\";
\t      var loading_screen = pleaseWait({
\t          logo: '',
\t          backgroundColor: \"#FEC00F\",
\t          loadingHtml: \"<img src='";
        // line 281
        echo ($context["ruta_img"] ?? null);
        echo "logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>\"
\t        });
\t    </script>
\t\t<script src=\"";
        // line 284
        echo base_url("public/");
        echo "js/index.js?v=5\"></script>
";
    }

    public function getTemplateName()
    {
        return "index2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 284,  519 => 281,  512 => 277,  508 => 275,  505 => 273,  502 => 272,  491 => 264,  479 => 258,  472 => 254,  460 => 250,  448 => 247,  445 => 246,  441 => 245,  419 => 225,  407 => 219,  400 => 215,  388 => 211,  376 => 208,  373 => 207,  369 => 206,  348 => 187,  335 => 180,  328 => 176,  316 => 172,  304 => 169,  301 => 168,  297 => 167,  275 => 147,  267 => 144,  256 => 132,  246 => 129,  243 => 128,  239 => 127,  220 => 111,  214 => 108,  210 => 106,  201 => 100,  197 => 99,  193 => 97,  184 => 91,  180 => 90,  176 => 88,  173 => 87,  169 => 76,  160 => 70,  156 => 69,  150 => 65,  144 => 61,  134 => 55,  130 => 54,  127 => 53,  117 => 46,  113 => 45,  110 => 44,  108 => 43,  99 => 37,  95 => 36,  88 => 32,  82 => 31,  79 => 30,  77 => 29,  72 => 26,  70 => 25,  67 => 24,  64 => 23,  58 => 20,  52 => 17,  50 => 16,  37 => 5,  35 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index2.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\index2.twig");
    }
}
