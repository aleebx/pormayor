<?php

/* catalogo_producto.twig */
class __TwigTemplate_0c1ddffd7b7c99fbfd2aa8581cb462e779acda82da0e4b52108a27fbe6cff3ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite_2.twig", "catalogo_producto.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_lite_2.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        #main .content-wrapper-before {
        position: absolute;
        z-index: -1;
        top: 64px;
        left: 0;
        width: 100%;
        height: 185px;
        -webkit-transition: .3s ease all;
        -moz-transition: .3s ease all;
        -o-transition: .3s ease all;
        transition: .3s ease all;
    }
    .gradient-45deg-blue {
        background: #fec00f;
        background: -webkit-linear-gradient(45deg, ##fec00f, #ffb000) !important;
        background: -moz- oldlinear-gradient(45deg, ##fec00f, #ffb000) !important;
        background: -o-linear-gradient(45deg, ##fec00f, #ffb000) !important;
        background: linear-gradient(45deg,##fec00f, #ffb000) !important;
    }
        .fontX{font-size: 18px!important}
        .container .row {margin-left: -.70rem;margin-right: -.70rem;}
        ";
        // line 25
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 26
            echo "            .alturaDIV{height:289px;}
            .fontD2{font-size: 0.8rem!important;font-weight:1000;}
            .fontE{font-size: 0.8rem!important}
        ";
        }
        // line 29
        echo "  
    </style>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "<main id=\"main\" class=\"contentPage\">
    <div class=\"content-wrapper-before gradient-45deg-blue\"></div>  
    <br>
    <div class=\"row\">
        <div class=\"col s12 m12 l12 center\">
            <span class=\"negrita fontC\">Catálogo PorMayor.pe</span>
        </div>
        ";
        // line 41
        if (($context["vendedor"] ?? null)) {
            // line 42
            echo "        <div class=\"col s12 m12 l12 center\">
            <b>";
            // line 43
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Nombre", array());
            echo " </b>
            <a href=\"tel:+51";
            // line 44
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
            echo "\">
                   <b>";
            // line 45
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
            echo "</b>
            </a><br> 
            <span>COSTO DE ENVÍO: <b>S/8 LIMA METROPOLITANA*</b></span>
        </div>
        ";
        }
        // line 50
        echo "    </div>
        <div class=\"card\">
            <div class=\"card-content\">
              <div class=\"row\">    
                <div class=\"col s12 m12 l6\">
                  <div class=\"carousel\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
            // line 57
            echo "                    ";
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                // line 58
                echo "                    ";
                if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                    // line 59
                    echo "                    <a class=\"carousel-item\" href=\"#";
                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                    echo "!\"><img src=\"";
                    echo ($context["ruta_img"] ?? null);
                    echo $this->getAttribute($context["fot"], "Prf_Img", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute(($context["pro"] ?? null), "Pro_Nombre", array());
                    echo "-Pormayor.pe\" title=\"";
                    echo $this->getAttribute(($context["pro"] ?? null), "Pro_Nombre", array());
                    echo "\" ></a>       
                    ";
                }
                // line 60
                echo "                                        
                    ";
            }
            // line 61
            echo "                                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                  </div> 
                </div> 
                <div class=\"col s12 m12 l6\">
                  <div class=\"row\">
                    <div class=\"col s12 m12 l12 center yellow darken-3\" style=\"font-size:2rem;\">
                        <label class=\"black-text\">SKU:";
        // line 68
        echo sprintf("%05d", $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()));
        echo "</label> ";
        echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array()));
        echo "
                    </div>
                    <div class=\"col s12 m12 l12 center\" style=\"font-size:2.5rem;\">
                       <strong>S/ ";
        // line 71
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMaximo", array());
        echo "</strong> x unidad <br> S/ ";
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
        echo " x cajón
                    </div>
                    <div class=\"col s12 m12 l12 center\"><br>
                        <span>";
        // line 74
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Descripcion", array());
        echo "</span>
                    </div>
                  </div>
              </div>
            </div>
        </div>
<div class=\"fixed-action-btn horizontal\">
    <a class=\"transparent\" href=\"https://api.whatsapp.com/send?phone=+51";
        // line 81
        echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
        echo "&text=Hola,%20quiero%20este%20producto%20https://pormayor.pe/catalogo/producto/";
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
        echo "\">
      <img src=\"";
        // line 82
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\">
    </a>
</div>
</main>
";
    }

    // line 88
    public function block_script($context, array $blocks = array())
    {
        // line 89
        echo "    <script>
    \$(document).ready(function(){
      \$('.carousel').carousel();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "catalogo_producto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 89,  194 => 88,  185 => 82,  179 => 81,  169 => 74,  161 => 71,  153 => 68,  146 => 63,  139 => 61,  135 => 60,  122 => 59,  119 => 58,  116 => 57,  112 => 56,  104 => 50,  96 => 45,  92 => 44,  88 => 43,  85 => 42,  83 => 41,  74 => 34,  71 => 33,  65 => 29,  59 => 26,  57 => 25,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalogo_producto.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\catalogo_producto.twig");
    }
}
