<?php

/* catalogo_lista.twig */
class __TwigTemplate_b9ea6dd46d0606d8e32b963678979162e320b2ef6c29c65d19f00290880e79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite_2.twig", "catalogo_lista.twig", 1);
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
        .fontX{font-size: 18px!important}
        .swiper-container {
          width: 100%;
          height: 100%;
        }
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }
        .container .row {margin-left: -.70rem;margin-right: -.70rem;}
        ";
        // line 28
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 29
            echo "            .alturaDIV{height:289px;}
            .fontD2{font-size: 0.8rem!important;font-weight:1000;}
            .fontE{font-size: 0.8rem!important}
        ";
        }
        // line 32
        echo "  
    </style>
";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "<main class=\"contentPage\">
    <br>
    <div class=\"row\">
        <div class=\"col s12 m12 l12 center\">
            <span class=\"negrita fontC\">Catálogo PorMayor.pe</span>
        </div>
        ";
        // line 43
        if (($context["vendedor"] ?? null)) {
            // line 44
            echo "        <div class=\"col s12 m12 l12 center\">
            <b>";
            // line 45
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Nombre", array());
            echo " </b>
            <a href=\"tel:+51";
            // line 46
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
            echo "\">
                   <b>";
            // line 47
            echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
            echo "</b>
            </a><br> 
            <span>COSTO DE ENVÍO: <b>S/8 LIMA METROPOLITANA*</b></span>
        </div>
        ";
        }
        // line 52
        echo "    </div>   
    <div class=\"row\">
        <div class=\"col s12 m12 l12 center\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 56
            echo "                ";
            if (($this->getAttribute($context["cat"], "Cat_IdCategoria", array()) == ($context["id"] ?? null))) {
                // line 57
                echo "                        <span class=\"fontC negrita\">";
                echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                echo "</span>
                ";
            }
            // line 59
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
    </div>
    <div class=\"row\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 64
            echo "            <div class=\"col s12 m6 l3\">
              <a href=\"";
            // line 65
            echo base_url();
            echo "catalogo/producto/";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\">
                <div class=\"card ";
            // line 66
            if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                echo " divAgotado ";
            }
            echo " hoverable\">
                  ";
            // line 67
            if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                // line 68
                echo "                      <span class=\"centered\"><b>AGOTADO</b></span>    
                    ";
            }
            // line 70
            echo "                    <div class=\"card-content black-text sinPadding\">
                        <div class=\"row\">
                          ";
            // line 72
            if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                // line 73
                echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "ofertaA.webp\" height=\"20px\" type=\"image\" alt=\"\">
                          ";
            }
            // line 75
            echo "                            <div class=\"col s12 m12 l12 center\" ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                echo "style=\"height:150px\"";
            } else {
                echo "style=\"height:208px\"";
            }
            echo ">
                              ";
            // line 76
            if ($this->getAttribute($context["pro"], "Prf_Thumb", array())) {
                // line 77
                echo "                                <img src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "-Pormayor.pe\" title=\"";
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "\" class=\"fixImgProducto\">
                              ";
            } else {
                // line 79
                echo "                                <img src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "nopic11214.jpg\" alt=\"";
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "-Pormayor.pe\" title=\"";
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "\" class=\"fixImgProducto\">
                              ";
            }
            // line 81
            echo "                            </div>
                            <div class=\"col s12 m12 l12 center white\" style=\"height:60px\">
                                <label>SKU:";
            // line 83
            echo sprintf("%05d", $this->getAttribute($context["pro"], "Pro_IdProducto", array()));
            echo "</label> ";
            echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()));
            echo "
                            </div>
                            <div class=\"col s12 m12 l12 white center sinPadding\" style=\"font-size:2rem;\">
                                S/ ";
            // line 86
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo "
                            </div>
                        </div>
                    </div>
                </div></a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </div>
<div class=\"fixed-action-btn horizontal\">
    <a class=\"transparent\" href=\"https://api.whatsapp.com/send?phone=+51";
        // line 95
        echo $this->getAttribute(($context["vendedor"] ?? null), "Ven_Telefono", array());
        echo "\">
      <img src=\"";
        // line 96
        echo ($context["ruta_img"] ?? null);
        echo "/wa.png\">
    </a>
</div>
</main>
";
    }

    // line 102
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "catalogo_lista.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 102,  237 => 96,  233 => 95,  229 => 93,  216 => 86,  208 => 83,  204 => 81,  194 => 79,  183 => 77,  181 => 76,  172 => 75,  166 => 73,  164 => 72,  160 => 70,  156 => 68,  154 => 67,  148 => 66,  142 => 65,  139 => 64,  135 => 63,  130 => 60,  124 => 59,  118 => 57,  115 => 56,  111 => 55,  106 => 52,  98 => 47,  94 => 46,  90 => 45,  87 => 44,  85 => 43,  77 => 37,  74 => 36,  68 => 32,  62 => 29,  60 => 28,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalogo_lista.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\catalogo_lista.twig");
    }
}
