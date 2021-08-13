<?php

/* remate.twig */
class __TwigTemplate_fb734036193fb90682ec3b75d3569b04f4d892d58872dc346337c5ad56a15d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "remate.twig", 1);
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
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row centrarForzado\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 7
            echo "          ";
            if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                // line 8
                echo "            <div class=\"col s12 mix sinPadding filtroProductoall filtroCatall filtroCat";
                echo $this->getAttribute($context["pro"], "Cat_IdCategoria", array());
                echo " filtroMarcaall filtroEdoall filtroEdo";
                echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_EdoGarantia", array()));
                echo " filtroMarca";
                echo twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Marca", array())), array(" " => "", "\"" => "", "'" => ""));
                echo "\" data-idpro=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\" data-preciomin=\"";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-idpro=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\" data-preciomin=\"";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "\" data-fecha=\"";
                echo $this->getAttribute($context["pro"], "Pro_FechaCreacion", array());
                echo "\">
              <div class=\"card hoverable centrarForzado alturaDIV ";
                // line 9
                if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                    echo " divAgotado ";
                }
                echo "\">
                ";
                // line 10
                if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                    echo "<span class=\"centered\"><b>AGOTADO</b></span>";
                }
                // line 11
                echo "                <a itemprop=\"url\" href=\"";
                echo base_url();
                echo "productos/dp/";
                echo $this->getAttribute($context["pro"], "url", array());
                echo "\"  class=\" comoBoton grey-text text-darken-3\" data-idproducto=\"";
                echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                echo "\" data-nombre=\"";
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "\" itemscope itemtype=\"http://schema.org/Product\">
                  <div class=\"row centrarForzado\">
                    <div class=\"col s4 positionRelative sinPadding\">
                      ";
                // line 14
                if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                    // line 15
                    echo "                        <img itemprop=\"image\" data-src=\"";
                    echo ($context["ruta_img"] ?? null);
                    echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                    echo "\" class=\" lazy containImgFilter anchoTotal\" >
                      ";
                } else {
                    // line 17
                    echo "                        <img itemprop=\"image\" data-src=\"";
                    echo ($context["ruta_img"] ?? null);
                    echo $this->getAttribute($context["pro"], "Prf_Img", array());
                    echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                      ";
                }
                // line 19
                echo "                      ";
                if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                    // line 20
                    echo "                        <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                    echo ($context["ruta_img"] ?? null);
                    echo "ofertaA.webp\" type=\"image\" alt=\"\">
                      ";
                }
                // line 22
                echo "                      <!--";
                $this->loadTemplate("layout/favoritos_mostrar.twig", "remate.twig", 22)->display($context);
                echo "-->
                    </div>
                    <div class=\"col s8 positionRelative\" style=\"height:160px\" style=\"border:1px solid red;\">

                      <br>
                      <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                // line 27
                echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                echo "\">";
                if ((($context["userAgent"] ?? null) == "PC")) {
                    echo " ";
                    echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                    echo " ";
                } else {
                    echo " ";
                    echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                    echo " ";
                }
                echo "</span>
                      <div class=\"enfasisD divider \" style=\"margin: 5px 0px\"></div>
                        <div class=\"fontB2 enfasisB truncateDesc\" itemprop=\"description\">";
                // line 29
                echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<tbody>" => " ", "</tbody>" => " ", "<figure class=\"table\">" => " ", "</figure>" => " ", "<div>" => " ", "</div>" => " ")), 0, 90));
                echo "...</div>
                          
                        <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                        <span itemprop=\"lowPrice\">";
                // line 32
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span>
                        <span itemprop=\"highPrice\">";
                // line 33
                echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                echo "</span>
                        <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                        </div>
                       
     
                                      
                  <div class=\"row sinPadding rowsinpaddin\">
                    <div class=\"col s6 m6 l6 green lighten-5\"><h6><span class=\"fontE\">S/ ";
                // line 40
                echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                echo "</span><br><i>Normal</i></h6> </div>
                    <div class=\"col s6 m6 l6 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                // line 41
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span><br><i>Grupal</i></h6></div> 
                    <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                      ";
                // line 43
                if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                    echo "  <text class=\"fontD2\">";
                    $context["vent"] = (0.04 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                    if ((($context["vent"] ?? null) > 1)) {
                        echo twig_round(($context["vent"] ?? null));
                        echo "</text> Ventas";
                    } else {
                        echo "&nbsp;";
                    }
                    // line 44
                    echo "                      ";
                    if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                        echo " 
                      &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                        // line 45
                        echo $this->getAttribute($context["pro"], "cantFav", array());
                        echo ")</span>  ";
                    }
                    // line 46
                    echo "                      ";
                } else {
                    echo "&nbsp;<text class=\"fontD2\">&nbsp;</text><label class=\"material-icons\" style=\"color:red;font-size:14px;\">&nbsp;</label><span class=\"plikes\">&nbsp;</span> ";
                }
                echo " 
                    </span>
                  </div>

                    </div>
                  </div>
                </a>
              </div>
              <br>
            </div>
          ";
            }
            // line 57
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      </div>
    </div>
</div> 

";
    }

    // line 64
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "remate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 64,  231 => 58,  217 => 57,  200 => 46,  196 => 45,  191 => 44,  181 => 43,  176 => 41,  172 => 40,  162 => 33,  158 => 32,  152 => 29,  137 => 27,  128 => 22,  122 => 20,  119 => 19,  112 => 17,  105 => 15,  103 => 14,  90 => 11,  86 => 10,  80 => 9,  61 => 8,  58 => 7,  41 => 6,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "remate.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\remate.twig");
    }
}
