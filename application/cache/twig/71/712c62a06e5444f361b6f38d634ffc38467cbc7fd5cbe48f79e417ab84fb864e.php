<?php

/* tienda/inicio.twig */
class __TwigTemplate_7c4454b64b7b60c19a2efafb4fd09ab8742197d9a2b5cfc34f4cefdb9cd48279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/inicio.twig", 1);
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  <main class=\"container fixContainer\">
    ";
        // line 8
        if (($context["Suc_IdSubCategoria"] ?? null)) {
            // line 9
            echo "      <input type=\"hidden\" id=\"Suc_IdSubCategoria\" value=\"";
            echo ($context["Suc_IdSubCategoria"] ?? null);
            echo "\">
    ";
        } elseif (        // line 10
($context["Cat_IdCategoria"] ?? null)) {
            // line 11
            echo "      <input type=\"hidden\" id=\"Cat_IdCategoria\" value=\"";
            echo ($context["Cat_IdCategoria"] ?? null);
            echo "\">
    ";
        } else {
            // line 13
            echo "      <input type=\"hidden\" id=\"Suc_IdSubCategoria\" value=\"0\">
      <input type=\"hidden\" id=\"Cat_IdCategoria\" value=\"0\">
      <input type=\"hidden\" id=\"nombre_producto\" value=\"";
            // line 15
            echo ($context["nombre_producto"] ?? null);
            echo "\">
    ";
        }
        // line 17
        echo "    <br class=\"hide-on-large-only\">
    <br class=\"hide-on-large-only\">
    <div id=\"productos_tab\" class=\"col s12\">
      <div>
        ";
        // line 21
        if ((($context["noproducto2"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 22
            echo "          <div class=\"row centrarForzado\">
            <div class=\"white col l12 fontA hide-on-med-and-down\" style=\"border-bottom: 1.5px solid rgba(0,0,0,0.1);\">
              <br>
              La busqueda de \"<span class=\"busqueda_termino negrita\">";
            // line 25
            echo ($context["busqueda_termino"] ?? null);
            echo "</span>\" no arrojó resultados.
              <div class=\"dividerMargin\"></div>
            </div>
            <div class=\"col l12 hide-on-med-and-down\">
              <br>
              <h1 class=\"fixH1 center centrarForzado\">Quizás te interesen nuestros <b>productos más vistos...</b></h1>
              <div class=\"divider dividerMargin\"></div>
            </div>

            <div class=\"white col l12 fontD2 hide-on-large-only\" style=\"border-bottom: 1.5px solid rgba(0,0,0,0.1);\">
              <br>
              La busqueda de \"<span class=\"busqueda_termino negrita\">";
            // line 36
            echo ($context["busqueda_termino"] ?? null);
            echo "</span>\" no arrojó resultados.
              <div class=\"dividerMargin\"></div>
            </div>
            <div class=\"col s12 hide-on-large-only\">
              <br>
              ";
            // line 42
            echo "              <div class=\"divider dividerMargin\"></div>
            </div>
          </div>
          ";
            // line 45
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 46
                echo "            <div class=\"row centrarForzado\">
              <div class=\"col s12 l8 ajax_filtro_productos containerProductos\">
                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                    // line 49
                    echo "                  ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 50
                        echo "                    <div class=\"col s6 m4 l4 mix filtroProductoall filtroCatall filtroCat";
                        echo $this->getAttribute($context["pro"], "Cat_IdCategoria", array());
                        echo " filtroMarcaall filtroEdoall filtroEdo";
                        echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_EdoGarantia", array()));
                        echo " filtroMarca";
                        echo twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Marca", array())), array(" " => "", "\"" => "", "'" => ""));
                        echo "\" data-idpro=\"";
                        echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                        echo "\" data-preciomin=\"";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "\" data-fecha=\"";
                        echo $this->getAttribute($context["pro"], "Pro_FechaCreacion", array());
                        echo "\">
                          <div class=\"card hoverable centrarForzado\"  itemscope itemtype=\"http://schema.org/Product\">
                        <a itemprop=\"url\" href=\"";
                        // line 52
                        echo base_url();
                        echo "productos/dp/";
                        echo $this->getAttribute($context["pro"], "url", array());
                        echo "\" class=\" comoBoton grey-text text-darken-3\" data-idproducto=\"";
                        echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                        echo "\" data-nombre=\"";
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">
                        <div class=\"card-content center sinPadding positionRelative\">
                          ";
                        // line 54
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 55
                            echo "                            <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\" >
                          ";
                        } else {
                            // line 57
                            echo "                            <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                          ";
                        }
                        // line 59
                        echo "                          ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 60
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 62
                        echo "                          ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 63
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 65
                        echo "                          ";
                        // line 66
                        echo "                        </div>
                        <div class=\"enfasisD divider\"></div>
                        <div class=\"card-action center cardActionProdFix\">
                          <div class=\"hide fontB2 enfasisB\" itemprop=\"description\">";
                        // line 69
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<div>" => " ", "</div>" => " ")), 0, 150));
                        echo "...</div>
                          <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                          <span itemprop=\"lowPrice\">";
                        // line 71
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                          <span itemprop=\"highPrice\">";
                        // line 72
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                          <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                          </div>
                           <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                        // line 75
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\">COD: ";
                            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                            echo "|";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " </text>";
                        }
                        echo "</span>
                           <div class=\"row sinPadding rowsinpaddin\">
                                ";
                        // line 78
                        echo "                                <div class=\"col s2 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span><br><i>X CAJÓN</i></h6></div>
                                  <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                    ";
                        // line 80
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 81
                            echo "                                    ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                    &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 82
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 83
                            echo "                                    ";
                        } else {
                            echo "&nbsp;<text class=\"fontD2\">&nbsp;</text><label class=\"material-icons\" style=\"color:red;font-size:14px;\">&nbsp;</label><span class=\"plikes\">&nbsp;</span> ";
                        }
                        echo " 
                                  </span>
                            </div>

                           <div class=\"row sinPadding rowsinpaddin\">
                               ";
                        // line 89
                        echo "                                <div class=\"col s2 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span><br><i>X CAJÓN</i></h6></div>
                                  <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                    ";
                        // line 91
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 92
                            echo "                                    ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                    &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 93
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 94
                            echo "                                    ";
                        } else {
                            echo "&nbsp;<text class=\"fontD2\">&nbsp;</text><label class=\"material-icons\" style=\"color:red;font-size:14px;\">&nbsp;</label><span class=\"plikes\">&nbsp;</span> ";
                        }
                        echo " 
                                  </span>
                            </div>
                         
                        </div>
                        </a>
                      </div>
                      <br><br>
                    </div>
                  ";
                    }
                    // line 104
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "              </div>
            </div>
          ";
            } else {
                // line 108
                echo "            <div class=\"row centrarForzado\">
              <div class=\"col s12 sinPadding ajax_filtro_productos containerProductos\">
                <div class=\"dividerMargin\"></div>
                ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
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
                    // line 112
                    echo "                  ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 113
                        echo "                    <div class=\"col s12 mix sinPadding filtroProductoall filtroCatall filtroCat";
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
                        <div class=\"card hoverable centrarForzado alturaDIV\">
                        <a itemprop=\"url\" href=\"";
                        // line 115
                        echo base_url();
                        echo "productos/dp/";
                        echo $this->getAttribute($context["pro"], "url", array());
                        echo "\"  class=\"comoBoton grey-text text-darken-3\" data-idproducto=\"";
                        echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                        echo "\" data-nombre=\"";
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\" itemscope itemtype=\"http://schema.org/Product\">
                          <div class=\"row centrarForzado\">
                            <div class=\"col s4 positionRelative sinPadding\">
                              ";
                        // line 118
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 119
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\" lazy containImgFilter anchoTotal\" >
                              ";
                        } else {
                            // line 121
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                              ";
                        }
                        // line 123
                        echo "                              ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 124
                            echo "                                <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                              ";
                        }
                        // line 126
                        echo "                               ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 127
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 129
                        echo "                              <!--";
                        $this->loadTemplate("layout/favoritos_mostrar.twig", "tienda/inicio.twig", 129)->display($context);
                        echo "-->
                            </div>
                            <div class=\"col s8 positionRelative\" style=\"height:160px\">
                              <br>
                              <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                        // line 133
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\">COD: ";
                            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                            echo "| ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo "</text> ";
                        }
                        echo "</span>
                              <br>
                              <div class=\"enfasisD divider \" style=\"margin: 5px 0px\"></div>
                                <div class=\"fontB2 enfasisB truncateDesc\" itemprop=\"description\">";
                        // line 136
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<tbody>" => " ", "</tbody>" => " ", "<figure class=\"table\">" => " ", "</figure>" => " ", "<div>" => " ", "</div>" => " ")), 0, 90));
                        echo "...</div>
                                  
                                <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                                  <span itemprop=\"lowPrice\">";
                        // line 139
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                                  <span itemprop=\"highPrice\">";
                        // line 140
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                                  <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                                </div>
                                <div class=\"row sinPadding rowsinpaddin\">
                                  ";
                        // line 145
                        echo "                                  <div class=\"col s12 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span><br><i>X CAJÓN</i></h6></div> 
                                    <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                      ";
                        // line 147
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 148
                            echo "                                      ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                      &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 149
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 150
                            echo "                                      ";
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
                    // line 160
                    echo "                ";
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
                // line 161
                echo "              </div>
            </div> 
          ";
            }
            // line 164
            echo "        ";
        }
        // line 165
        echo "        <div class=\"containerListProd\">
          <div class=\"row sinBordeBottom\" id=\"listProducto\">
            <div class=\"col s12 l12 center\">
              ";
        // line 168
        if (($context["noproducto"] ?? null)) {
            // line 169
            echo "                <div class=\"card noExiste\" style=\"padding: 10px\">
                  <div class=\"row\">
                    <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                      <img src=\"";
            // line 172
            echo ($context["ruta_img"] ?? null);
            echo "emptyCategory.webp\" height=\"150\"></img>
                    </div>
                    <div class=\"center col s12 m12 l12\">
                      <h5>Categoria vacia</h5>
                      <p class=\"enfasisB\">Aún no existen productos de este tipo y pronto lo solucionaremos</p>
                    </div>
                    <div class=\"center col s12 m12 l12\" style=\"margin:15px 0px\">
                      <a href=\"";
            // line 179
            echo base_url();
            echo "\" class=\"btn pormayorUnico\">Vuelve a la pagina principal</a>
                    </div>
                  </div>
                </div>
              ";
        }
        // line 184
        echo "            </div>

              ";
        // line 186
        if ($this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array())) {
            // line 187
            echo "                <div class=\"col s12 l12 left-align hide-on-large-only\">
                  <div class=\"dividerMargin hide-on-large-only\"></div>
                  <a href=\"";
            // line 189
            echo base_url();
            echo "subcategoria/";
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "urlSubCategoria", array());
            echo "\" class=\"pormayorUnico-text breadcrumb\">Ver más en ";
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
            echo "</a>
                </div>
                <ol class=\"hide\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb\"><span itemprop=\"name\">";
            // line 193
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Cat_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"1\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
            // line 197
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"2\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
            // line 201
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"3\" />
                  </li>
                </ol>
              ";
        } else {
            // line 211
            echo "              ";
            if (($context["vista_remate"] ?? null)) {
                // line 212
                echo "                <div class=\"col s12 l12 center sinPadding hide-on-large-only\" style=\"height:10vh\">
                  <a href=\"#\" class=\"centrarForzado pormayorAccent-text breadcrumb\">PROVECHA LOS MEJORES PRECIOS</b></a>
                </div>
              ";
            }
            // line 216
            echo "                ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 217
                echo "                  <ol class=\"hide\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
                    <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                      <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb\"><span itemprop=\"name\">";
                // line 219
                echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Cat_Nombre", array());
                echo "</span></a>
                      <meta itemprop=\"position\" content=\"1\" />
                    </li>
                    <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                      <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
                // line 223
                echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
                echo "</span></a>
                      <meta itemprop=\"position\" content=\"2\" />
                    </li>
                    <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                      <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
                // line 227
                echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array());
                echo "</span></a>
                      <meta itemprop=\"position\" content=\"3\" />
                    </li>
                  </ol>
                ";
            }
            // line 232
            echo "              ";
        }
        // line 233
        echo "              ";
        if ($this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array())) {
            // line 234
            echo "                <ol class=\"hide\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb\"><span itemprop=\"name\">";
            // line 236
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Cat_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"1\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
            // line 240
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"2\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \">
                      <span itemprop=\"name\">";
            // line 245
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array());
            echo "</span>
                    </a>
                    <meta itemprop=\"position\" content=\"3\" />
                  </li>
                </ol>
                <div class=\"row centrarForzado hide-on-med-and-down\">
                  <div class=\"dividerMargin\"></div>
                  ";
            // line 252
            if (($context["vista_categoria"] ?? null)) {
                // line 253
                echo "                      <div class=\"dividerMargin\"></div>
                  ";
            }
            // line 255
            echo "       ";
            // line 266
            echo "                  ";
            if (($context["vista_categoria"] ?? null)) {
                // line 267
                echo "                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div>
                  ";
            }
            // line 271
            echo "                </div>
              ";
        } else {
            // line 273
            echo "                ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 274
                echo "                  <div class=\"row centrarForzado\">
                    ";
                // line 275
                if (($context["vista_categoria"] ?? null)) {
                    // line 276
                    echo "                        <div class=\"dividerMargin\"></div>
                    ";
                }
                // line 278
                echo "                    
                  ";
                // line 279
                if ( !($context["sin_productos"] ?? null)) {
                    // line 280
                    echo "                    <div class=\"col s12 l12 left-align hide-on-med-and-down\">
                      ";
                    // line 282
                    echo "                      ";
                    // line 283
                    echo "                      <br>
                    </div>
                  ";
                }
                // line 286
                echo "
                    ";
                // line 287
                if (($context["vista_categoria"] ?? null)) {
                    // line 288
                    echo "                    ";
                    if ( !($context["sin_productos"] ?? null)) {
                        // line 289
                        echo "                      <div class=\"col s12\">
                        <div class=\"divider dividerMargin\"></div>
                      </div>
                      ";
                    }
                    // line 293
                    echo "                    ";
                }
                // line 294
                echo "                  </div>
                ";
            }
            // line 296
            echo "              ";
        }
        // line 297
        echo "
              ";
        // line 298
        if ( !($context["vista_categoria"] ?? null)) {
            // line 299
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array())) {
                // line 300
                echo "                  <div class=\"col l12 fontA hide-on-med-and-down\">";
                echo (twig_length_filter($this->env, ($context["producto"] ?? null)) + ($context["count"] ?? null));
                echo " Resultados de la búsqueda \"<span class=\"busqueda_termino\">";
                echo ($context["busqueda_termino"] ?? null);
                echo "</span>\"</div>
                  <div class=\"col l12 hide-on-med-and-down\">
                    <div class=\"divider dividerMargin\"></div>
                  </div>

                  <div class=\"col s12 fontD2 hide-on-large-only center\">
                    <div class=\"dividerMargin hide-on-large-only\"></div>
                    ";
                // line 307
                echo (twig_length_filter($this->env, ($context["producto"] ?? null)) + ($context["count"] ?? null));
                echo " Resultados de la búsqueda \"";
                echo ($context["busqueda_termino"] ?? null);
                echo "\" 
                  </div>
                ";
            }
            // line 309
            echo " 
              ";
        }
        // line 311
        echo "            </div>

            ";
        // line 313
        if (( !($context["noproducto"] ?? null) &&  !($context["noproducto2"] ?? null))) {
            // line 314
            echo "              ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 315
                echo "                <div class=\"row centrarForzado\">
                  <br>
                  <div class=\"col s12 m12 l4 sideBarProd white z-depth-1 unidadSticky\" style=\"padding:10px 20px\">
                    <div class=\"positionRelative\">
                      <div class=\"sideB\" data-scroll>
                        <h5 class=\"center\">Filtros</h5>
                        <div class=\"row centrarForzado\">
                          <div class=\"col s12 sinPadding\">
                            <div class=\"center\">
                              <button class=\"btn vista btnOrderBy pcFiltro\" id=\"btn_cuadricula\" data-dispositivo=\"pc\" data-tipo=\"cuadricula\"><i class=\"material-icons left\">apps</i>Ver en tarjetas</button>
                              <button class=\"btn-flat boton_no_seleccionado vista btnOrderBy pcFiltro pormayorUnico-text\" data-filtronro=\"";
                // line 325
                echo ($context["filtro_nro"] ?? null);
                echo "\" data-filtro=\"";
                echo ($context["filtro_tipo"] ?? null);
                echo "\" id=\"btn_listado\" data-dispositivo=\"pc\" data-tipo=\"listado\"><i class=\"material-icons left\">list</i>Ver en listado</button>
                            </div>
                            <br>
                          </div>
                          <div class=\"col s12 sinPadding\">
                            <label class=\"enfasisB\">Organizar</label>
                            <select class=\"browser-default filtroPreciosSelect\" >
                              <option value=\"\" disabled selected>Selecciona una opción</option>
                              <option value=\"ninguno\">Ninguno</option>
                              <option value=\"menor\">Precio menor</option>
                              <option value=\"mayor\">Precio mayor</option>
                              <option value=\"fechaMenos\">Más nuevo</option>
                              <option value=\"fechaMas\">Más viejo</option>
                            </select>
                            <div class=\"dividerMargin\"></div>
                          </div>
                          <div class=\"col s12  sinPadding\">
                            <div class=\"divider dividerMargin\"></div>
                          </div>
                          <div class=\"col s12 sinPadding\">
                            <label class=\"enfasisB\">Ver todas las categorías</label>
                            <select class=\"browser-default filtroProductosCat\" >
                              <option value=\"\" disabled selected>Selecciona una categoría</option>
                              ";
                // line 348
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 349
                    echo "                                <option value=\"";
                    echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                    echo "\">";
                    echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                    echo "</option>
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col s12 m12 l4 center hide white z-depth-1 \" style=\"padding:10px 20px\">
                    <div class=\"preloader-wrapper big active centrarForzado\">
                      <div class=\"spinner-layer spinner-blue-only\">
                        <div class=\"circle-clipper left\">
                          <div class=\"circle\"></div>
                        </div><div class=\"gap-patch\">
                          <div class=\"circle\"></div>
                        </div><div class=\"circle-clipper right\">
                          <div class=\"circle\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col s12 l8 ajax_filtro_productos containerProductos\">
                    ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto"] ?? null));
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
                    // line 372
                    echo "                      ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 373
                        echo "                        <div class=\"col s6 m4 l4 mix filtroProductoall filtroCatall filtroCat";
                        echo $this->getAttribute($context["pro"], "Cat_IdCategoria", array());
                        echo " filtroMarcaall filtroEdoall filtroEdo";
                        echo twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_EdoGarantia", array()));
                        echo " filtroMarca";
                        echo twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Marca", array())), array(" " => "", "\"" => "", "'" => ""));
                        echo "\" data-idpro=\"";
                        echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                        echo "\" data-preciomin=\"";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "\" data-fecha=\"";
                        echo $this->getAttribute($context["pro"], "Pro_FechaCreacion", array());
                        echo "\">
                          
                            <div class=\"card hoverable centrarForzado\" itemscope itemtype=\"http://schema.org/Product\">
                            <a itemprop=\"url\" href=\"";
                        // line 376
                        echo base_url();
                        echo "productos/dp/";
                        echo $this->getAttribute($context["pro"], "url", array());
                        echo "\" class=\" comoBoton grey-text text-darken-3\" data-idproducto=\"";
                        echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                        echo "\" data-nombre=\"";
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">
                            <div class=\"card-content center sinPadding positionRelative\">
                              
                              ";
                        // line 379
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 380
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\" >
                              ";
                        } else {
                            // line 382
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                              ";
                        }
                        // line 384
                        echo "                              ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 385
                            echo "                                <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                              ";
                        }
                        // line 387
                        echo "                               ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 388
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 390
                        echo "                              <!--";
                        $this->loadTemplate("layout/favoritos_mostrar.twig", "tienda/inicio.twig", 390)->display($context);
                        echo "-->
                            </div>
                            <div class=\"enfasisD divider\"></div>
                            <div class=\"card-action center cardActionProdFix\">
                              <div class=\"hide fontB2 enfasisB\" itemprop=\"description\">";
                        // line 394
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<div>" => " ", "</div>" => " ")), 0, 150));
                        echo "...</div>
                              <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                              <span itemprop=\"lowPrice\">";
                        // line 396
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                              <span itemprop=\"highPrice\">";
                        // line 397
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                              <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                              </div>
                               <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                        // line 400
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\">COD: ";
                            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
                            echo "|";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " </text>";
                        }
                        echo "</span>
                            ";
                        // line 401
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 0)) {
                            // line 402
                            echo "                               <div class=\"row sinPadding rowsinpaddin\">
                                ";
                            // line 404
                            echo "                                <div class=\"col s12 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo "</span><br><i>X CAJÓN</i></h6></div> 
                              </div>
                            ";
                        } else {
                            // line 407
                            echo "                              <div class=\"row sinPadding rowsinpaddin\">
                                <div class=\"col s12 m12 l12 green lighten-5\"><h6><span class=\"fontE red-text negrita\">S/ ";
                            // line 408
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo " </span></h6><label><s>S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                            echo "</s></label></div>
                                ";
                            // line 410
                            echo "                              </div>
                            ";
                        }
                        // line 412
                        echo "                            </div>
                            </a>
                           <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                            ";
                        // line 415
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 416
                            echo "                            ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                            &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 417
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 418
                            echo "                            ";
                        } else {
                            echo "&nbsp;<text class=\"fontD2\">&nbsp;</text><label class=\"material-icons\" style=\"color:red;font-size:14px;\">&nbsp;</label><span class=\"plikes\">&nbsp;</span> ";
                        }
                        echo " 
                          </span>
                          </div>
                          <br><br>
                        </div>
                      ";
                    }
                    // line 424
                    echo "                    ";
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
                // line 425
                echo "                  </div>
                </div>
              ";
            } else {
                // line 428
                echo "                <div class=\"row centrarForzado\">
                  <br>
                  <div class=\"col s12 sinPadding ajax_filtro_productos containerProductos\">
                    ";
                // line 431
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto"] ?? null));
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
                    // line 432
                    echo "                      ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 433
                        echo "                        <div class=\"col s12 mix sinPadding filtroProductoall filtroCatall filtroCat";
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
                        <div class=\"card hoverable centrarForzado alturaDIV\">
                            <a itemprop=\"url\" href=\"";
                        // line 435
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
                        // line 438
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 439
                            echo "                                    <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\" lazy containImgFilter anchoTotal\" >
                                  ";
                        } else {
                            // line 441
                            echo "                                    <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                                  ";
                        }
                        // line 443
                        echo "                                  ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 444
                            echo "                                    <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                                  ";
                        }
                        // line 446
                        echo "                                   ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 447
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 449
                        echo "                                  <!--";
                        $this->loadTemplate("layout/favoritos_mostrar.twig", "tienda/inicio.twig", 449)->display($context);
                        echo "-->
                                </div>
                            
                                <div class=\"col s8 positionRelative\" style=\"height:160px\" style=\"border:1px solid red;\">

                                  <br>
                                  <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" style=\"font-weight: 400\" title=\"";
                        // line 455
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\">";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo "</text> ";
                        }
                        echo "</span>
                                  <div class=\"enfasisD divider \" style=\"margin: 5px 0px\"></div>
                                    <div class=\"fontB2 enfasisB truncateDesc\" itemprop=\"description\">";
                        // line 457
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<tbody>" => " ", "</tbody>" => " ", "<figure class=\"table\">" => " ", "</figure>" => " ", "<div>" => " ", "</div>" => " ")), 0, 90));
                        echo "...</div>
                                      
                                    <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                                    <span itemprop=\"lowPrice\">";
                        // line 460
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                                    <span itemprop=\"highPrice\">";
                        // line 461
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                                    <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                                    </div>
                                    <br>
                                         <div class=\"row sinPadding rowsinpaddin\">
                                ";
                        // line 466
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 0)) {
                            echo "                               
                                ";
                            // line 468
                            echo "                                <div class=\"col s12 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo "</span><br><i>X CAJÓN</i></h6></div>
                                 ";
                        } else {
                            // line 470
                            echo "                                   <div class=\"col s12 m12 l12 green lighten-5 center\"><h6><span class=\"fontX red-text negrita\">S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo " </span><label><s>S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                            echo "</s></label></h6></div>
                                ";
                        }
                        // line 472
                        echo "                                <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                  ";
                        // line 473
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 474
                            echo "                                  ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                  &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 475
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 476
                            echo "                                  ";
                        } else {
                            echo "&nbsp;<text class=\"fontD2\">&nbsp;</text><label class=\"material-icons\" style=\"color:red;font-size:14px;\">&nbsp;</label><span class=\"plikes\">&nbsp;</span> ";
                        }
                        echo " 
                                </span>
                              </div>   
                          <br>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                        </div>
                      ";
                    }
                    // line 487
                    echo "                    ";
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
                // line 488
                echo "                  </div>
                </div> 
              ";
            }
            // line 491
            echo "            ";
        }
        // line 492
        echo "        </div>
      </div>
      ";
        // line 494
        if ((($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_SEO", array()) || $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_SEO", array())) || $this->getAttribute(($context["detalle_seo"] ?? null), "Des_SEO", array()))) {
            // line 495
            echo "        <div class=\"section categoriaSeo enfasisA\">
          <div class=\"divider\"></div>
          <br>
          ";
            // line 498
            if ($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_SEO", array())) {
                // line 499
                echo "            ";
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_SEO", array());
                echo "
          ";
            } elseif ($this->getAttribute(            // line 500
($context["subcategoria_seo"] ?? null), "Suc_SEO", array())) {
                // line 501
                echo "            ";
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_SEO", array());
                echo "
          ";
            } elseif ($this->getAttribute(            // line 502
($context["detalle_seo"] ?? null), "Des_SEO", array())) {
                // line 503
                echo "            ";
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_SEO", array());
                echo "
          ";
            }
            // line 505
            echo "        </div>
      ";
        }
        // line 507
        echo "    </div>
  </main>
";
    }

    // line 511
    public function block_script($context, array $blocks = array())
    {
        // line 512
        echo "  <script>var busqueda_flag = \"";
        echo ($context["busqueda_flag"] ?? null);
        echo "\";</script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 516
        echo base_url("public/");
        echo "js/productos/favoritos.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
  <script src=\"";
        // line 517
        echo base_url("public/");
        echo "js/tienda/index.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "tienda/inicio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1315 => 517,  1309 => 516,  1301 => 512,  1298 => 511,  1292 => 507,  1288 => 505,  1282 => 503,  1280 => 502,  1275 => 501,  1273 => 500,  1268 => 499,  1266 => 498,  1261 => 495,  1259 => 494,  1255 => 492,  1252 => 491,  1247 => 488,  1233 => 487,  1216 => 476,  1212 => 475,  1207 => 474,  1197 => 473,  1194 => 472,  1186 => 470,  1180 => 468,  1176 => 466,  1168 => 461,  1164 => 460,  1158 => 457,  1143 => 455,  1133 => 449,  1127 => 447,  1124 => 446,  1118 => 444,  1115 => 443,  1108 => 441,  1101 => 439,  1099 => 438,  1087 => 435,  1067 => 433,  1064 => 432,  1047 => 431,  1042 => 428,  1037 => 425,  1023 => 424,  1011 => 418,  1007 => 417,  1002 => 416,  992 => 415,  987 => 412,  983 => 410,  977 => 408,  974 => 407,  967 => 404,  964 => 402,  962 => 401,  946 => 400,  940 => 397,  936 => 396,  931 => 394,  923 => 390,  917 => 388,  914 => 387,  908 => 385,  905 => 384,  898 => 382,  891 => 380,  889 => 379,  877 => 376,  860 => 373,  857 => 372,  840 => 371,  818 => 351,  807 => 349,  803 => 348,  775 => 325,  763 => 315,  760 => 314,  758 => 313,  754 => 311,  750 => 309,  742 => 307,  729 => 300,  726 => 299,  724 => 298,  721 => 297,  718 => 296,  714 => 294,  711 => 293,  705 => 289,  702 => 288,  700 => 287,  697 => 286,  692 => 283,  690 => 282,  687 => 280,  685 => 279,  682 => 278,  678 => 276,  676 => 275,  673 => 274,  670 => 273,  666 => 271,  660 => 267,  657 => 266,  655 => 255,  651 => 253,  649 => 252,  639 => 245,  631 => 240,  624 => 236,  620 => 234,  617 => 233,  614 => 232,  606 => 227,  599 => 223,  592 => 219,  588 => 217,  585 => 216,  579 => 212,  576 => 211,  568 => 201,  561 => 197,  554 => 193,  543 => 189,  539 => 187,  537 => 186,  533 => 184,  525 => 179,  515 => 172,  510 => 169,  508 => 168,  503 => 165,  500 => 164,  495 => 161,  481 => 160,  465 => 150,  461 => 149,  456 => 148,  446 => 147,  440 => 145,  433 => 140,  429 => 139,  423 => 136,  405 => 133,  397 => 129,  391 => 127,  388 => 126,  382 => 124,  379 => 123,  372 => 121,  365 => 119,  363 => 118,  351 => 115,  331 => 113,  328 => 112,  311 => 111,  306 => 108,  301 => 105,  295 => 104,  279 => 94,  275 => 93,  270 => 92,  260 => 91,  254 => 89,  243 => 83,  239 => 82,  234 => 81,  224 => 80,  218 => 78,  201 => 75,  195 => 72,  191 => 71,  186 => 69,  181 => 66,  179 => 65,  173 => 63,  170 => 62,  164 => 60,  161 => 59,  154 => 57,  147 => 55,  145 => 54,  134 => 52,  118 => 50,  115 => 49,  111 => 48,  107 => 46,  105 => 45,  100 => 42,  92 => 36,  78 => 25,  73 => 22,  71 => 21,  65 => 17,  60 => 15,  56 => 13,  50 => 11,  48 => 10,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/inicio.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\tienda\\inicio.twig");
    }
}
