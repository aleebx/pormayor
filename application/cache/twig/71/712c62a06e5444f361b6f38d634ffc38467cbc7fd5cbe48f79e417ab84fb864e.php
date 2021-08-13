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
        // line 4
        echo "
  <style type=\"text/css\">
    .select-dropdown{
      text-align: center;
    }
    .truncate{
      text-transform: none !important;
    }
    h6 i{
      font-size: 0.8rem;
    }
    .tituloTienda  img{
      height: 34px;
    }
    .tabs .indicator {
      height: 2.5px !important;
      background-color: #21478F;
    }
    .tabs .tab a:hover, .tabs .tab a.active {
      color: #21478F;
    }
    .btn, .btn:active, .btn:focus{
      background-color: #21478F;
    }
.container .row {margin-left: -.70rem;margin-right: -.70rem;}

/*Movile*/
.fontE{font-size: 1.4rem!important}
";
        // line 32
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 33
            echo "  .alturaDIV{height:183px;}
  .fontD2{font-size: 0.8rem!important;font-weight:1000;}
  .fontE{font-size: 0.8rem!important}
";
        }
        // line 36
        echo "    
</style>
";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "
  <main class=\"container fixContainer\">
    ";
        // line 43
        if (($context["Suc_IdSubCategoria"] ?? null)) {
            // line 44
            echo "      <input type=\"hidden\" id=\"Suc_IdSubCategoria\" value=\"";
            echo ($context["Suc_IdSubCategoria"] ?? null);
            echo "\">
    ";
        } elseif (        // line 45
($context["Cat_IdCategoria"] ?? null)) {
            // line 46
            echo "      <input type=\"hidden\" id=\"Cat_IdCategoria\" value=\"";
            echo ($context["Cat_IdCategoria"] ?? null);
            echo "\">
    ";
        } else {
            // line 48
            echo "      <input type=\"hidden\" id=\"Suc_IdSubCategoria\" value=\"0\">
      <input type=\"hidden\" id=\"Cat_IdCategoria\" value=\"0\">
      <input type=\"hidden\" id=\"nombre_producto\" value=\"";
            // line 50
            echo ($context["nombre_producto"] ?? null);
            echo "\">
    ";
        }
        // line 52
        echo "    <br class=\"hide-on-large-only\">
    <br class=\"hide-on-large-only\">
    <div id=\"productos_tab\" class=\"col s12\">
      <div>
        ";
        // line 56
        if ((($context["noproducto2"] ?? null) &&  !($context["solo_tienda"] ?? null))) {
            // line 57
            echo "          <div class=\"row centrarForzado\">
            <div class=\"white col l12 fontA hide-on-med-and-down\" style=\"border-bottom: 1.5px solid rgba(0,0,0,0.1);\">
              <br>
              La busqueda de \"<span class=\"busqueda_termino negrita\">";
            // line 60
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
            // line 71
            echo ($context["busqueda_termino"] ?? null);
            echo "</span>\" no arrojó resultados.
              <div class=\"dividerMargin\"></div>
            </div>
            <div class=\"col s12 hide-on-large-only\">
              <br>
              <h1 class=\"fontA center centrarForzado\">Quizás te interesen nuestros <b>productos más vistos...</b></h1>
              <div class=\"divider dividerMargin\"></div>
            </div>
          </div>
          ";
            // line 80
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 81
                echo "            <div class=\"row centrarForzado\">
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
                // line 91
                echo ($context["filtro_nro"] ?? null);
                echo "\" data-filtro=\"popular\" id=\"btn_listado\" data-dispositivo=\"pc\" data-tipo=\"listado\"><i class=\"material-icons left\">list</i>Ver en listado</button>
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
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 115
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["cat"], "Cat_IdCategoria", array());
                    echo "\">";
                    echo $this->getAttribute($context["cat"], "Cat_Nombre", array());
                    echo "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                        </select>
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
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["producto_popular"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                    // line 138
                    echo "                  ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 139
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
                          <div class=\"card hoverable centrarForzado  ";
                        // line 140
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            echo " divAgotado ";
                        }
                        echo "\"  itemscope itemtype=\"http://schema.org/Product\">
                                ";
                        // line 141
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            // line 142
                            echo "                                <span class=\"centered\"><b>AGOTADO</b></span>    
                                ";
                        }
                        // line 144
                        echo "                        <a itemprop=\"url\" href=\"";
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
                        // line 146
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 147
                            echo "                            <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\" >
                          ";
                        } else {
                            // line 149
                            echo "                            <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                          ";
                        }
                        // line 151
                        echo "                          ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 152
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 154
                        echo "                          ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 155
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 157
                        echo "                          ";
                        // line 158
                        echo "                        </div>
                        <div class=\"enfasisD divider\"></div>
                        <div class=\"card-action center cardActionProdFix\">
                          <div class=\"hide fontB2 enfasisB\" itemprop=\"description\">";
                        // line 161
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<div>" => " ", "</div>" => " ")), 0, 150));
                        echo "...</div>
                          <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                          <span itemprop=\"lowPrice\">";
                        // line 163
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                          <span itemprop=\"highPrice\">";
                        // line 164
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                          <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                          </div>
                           <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                        // line 167
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\">";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " </text>";
                        }
                        echo "</span>
                           <div class=\"row sinPadding rowsinpaddin\">
                                ";
                        // line 170
                        echo "                                <div class=\"col s2 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span><br><i>X MAYOR</i></h6></div>
                                  <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                    ";
                        // line 172
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 173
                            echo "                                    ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                    &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 174
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 175
                            echo "                                    ";
                        } else {
                            echo "&nbsp;<text class=\"fontD2\">&nbsp;</text><label class=\"material-icons\" style=\"color:red;font-size:14px;\">&nbsp;</label><span class=\"plikes\">&nbsp;</span> ";
                        }
                        echo " 
                                  </span>
                            </div>

                           <div class=\"row sinPadding rowsinpaddin\">
                               ";
                        // line 181
                        echo "                                <div class=\"col s2 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span><br><i>X MAYOR</i></h6></div>
                                  <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                    ";
                        // line 183
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 184
                            echo "                                    ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                    &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 185
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 186
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
                    // line 196
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "              </div>
            </div>
          ";
            } else {
                // line 200
                echo "            <div class=\"row centrarForzado\">
              <div class=\"col s12 sinPadding ajax_filtro_productos containerProductos\">
                <div class=\"dividerMargin\"></div>
                ";
                // line 203
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
                    // line 204
                    echo "                  ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 205
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
                        <div class=\"card hoverable centrarForzado alturaDIV ";
                        // line 206
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            echo " divAgotado ";
                        }
                        echo "\">
                                ";
                        // line 207
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            // line 208
                            echo "
                                <span class=\"centered\"><b>AGOTADO</b></span>    
                                ";
                        }
                        // line 211
                        echo "                        <a itemprop=\"url\" href=\"";
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
                        // line 214
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 215
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\" lazy containImgFilter anchoTotal\" >
                              ";
                        } else {
                            // line 217
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                              ";
                        }
                        // line 219
                        echo "                              ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 220
                            echo "                                <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                              ";
                        }
                        // line 222
                        echo "                               ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 223
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 225
                        echo "                              <!--";
                        $this->loadTemplate("layout/favoritos_mostrar.twig", "tienda/inicio.twig", 225)->display($context);
                        echo "-->
                            </div>
                            <div class=\"col s8 positionRelative\" style=\"height:160px\">
                              <br>
                              <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                        // line 229
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\"> ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo "</text> ";
                        }
                        echo "</span>
                              <br>
                              <div class=\"enfasisD divider \" style=\"margin: 5px 0px\"></div>
                                <div class=\"fontB2 enfasisB truncateDesc\" itemprop=\"description\">";
                        // line 232
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<tbody>" => " ", "</tbody>" => " ", "<figure class=\"table\">" => " ", "</figure>" => " ", "<div>" => " ", "</div>" => " ")), 0, 90));
                        echo "...</div>
                                  
                                <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                                  <span itemprop=\"lowPrice\">";
                        // line 235
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                                  <span itemprop=\"highPrice\">";
                        // line 236
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                                  <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                                </div>
                                <div class=\"row sinPadding rowsinpaddin\">
                                  ";
                        // line 241
                        echo "                                  <div class=\"col s12 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span><br><i>X MAYOR</i></h6></div> 
                                    <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                      ";
                        // line 243
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 244
                            echo "                                      ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                      &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 245
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 246
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
                    // line 256
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
                // line 257
                echo "              </div>
            </div> 
          ";
            }
            // line 260
            echo "        ";
        }
        // line 261
        echo "        <div class=\"containerListProd\">
          <div class=\"row sinBordeBottom\" id=\"listProducto\">
            <div class=\"col s12 l12 center\">
              ";
        // line 264
        if (($context["noproducto"] ?? null)) {
            // line 265
            echo "                <div class=\"card noExiste\" style=\"padding: 10px\">
                  <div class=\"row\">
                    <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                      <img src=\"";
            // line 268
            echo ($context["ruta_img"] ?? null);
            echo "emptyCategory.webp\" height=\"150\"></img>
                    </div>
                    <div class=\"center col s12 m12 l12\">
                      <h5>Categoria vacia</h5>
                      <p class=\"enfasisB\">Aún no existen productos de este tipo y pronto lo solucionaremos</p>
                    </div>
                    <div class=\"center col s12 m12 l12\" style=\"margin:15px 0px\">
                      <a href=\"";
            // line 275
            echo base_url();
            echo "\" class=\"btn pormayorUnico\">Vuelve a la pagina principal</a>
                    </div>
                  </div>
                </div>
              ";
        }
        // line 280
        echo "            </div>

              ";
        // line 282
        if ($this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array())) {
            // line 283
            echo "                <div class=\"col s12 l12 left-align hide-on-large-only\">
                  <div class=\"dividerMargin hide-on-large-only\"></div>
                  <a href=\"";
            // line 285
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
            // line 289
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Cat_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"1\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
            // line 293
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"2\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
            // line 297
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"3\" />
                  </li>
                </ol>
              ";
        } else {
            // line 307
            echo "              ";
            if (($context["vista_remate"] ?? null)) {
                // line 308
                echo "                <div class=\"col s12 l12 center sinPadding hide-on-large-only\" style=\"height:10vh\">
                  <a href=\"#\" class=\"centrarForzado pormayorAccent-text breadcrumb\">PROVECHA LOS MEJORES PRECIOS</b></a>
                </div>
              ";
            }
            // line 312
            echo "                ";
            if ((($context["userAgent"] ?? null) != "PC")) {
                // line 313
                echo "                  <ol class=\"hide\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
                    <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                      <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb\"><span itemprop=\"name\">";
                // line 315
                echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Cat_Nombre", array());
                echo "</span></a>
                      <meta itemprop=\"position\" content=\"1\" />
                    </li>
                    <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                      <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
                // line 319
                echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
                echo "</span></a>
                      <meta itemprop=\"position\" content=\"2\" />
                    </li>
                    <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                      <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
                // line 323
                echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array());
                echo "</span></a>
                      <meta itemprop=\"position\" content=\"3\" />
                    </li>
                  </ol>
                ";
            }
            // line 328
            echo "              ";
        }
        // line 329
        echo "              ";
        if ($this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array())) {
            // line 330
            echo "                <ol class=\"hide\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb\"><span itemprop=\"name\">";
            // line 332
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Cat_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"1\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \"><span itemprop=\"name\">";
            // line 336
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array());
            echo "</span></a>
                    <meta itemprop=\"position\" content=\"2\" />
                  </li>
                  <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" class=\"pormayorUnico-text breadcrumb \">
                      <span itemprop=\"name\">";
            // line 341
            echo $this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Des_Nombre", array());
            echo "</span>
                    </a>
                    <meta itemprop=\"position\" content=\"3\" />
                  </li>
                </ol>
                <div class=\"row centrarForzado hide-on-med-and-down\">
                  <div class=\"dividerMargin\"></div>
                  ";
            // line 348
            if (($context["vista_categoria"] ?? null)) {
                // line 349
                echo "                      <div class=\"dividerMargin\"></div>
                  ";
            }
            // line 351
            echo "       ";
            // line 362
            echo "                  ";
            if (($context["vista_categoria"] ?? null)) {
                // line 363
                echo "                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div>
                  ";
            }
            // line 367
            echo "                </div>
              ";
        } else {
            // line 369
            echo "                ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 370
                echo "                  <div class=\"row centrarForzado\">
                    ";
                // line 371
                if (($context["vista_categoria"] ?? null)) {
                    // line 372
                    echo "                        <div class=\"dividerMargin\"></div>
                    ";
                }
                // line 374
                echo "                    
                  ";
                // line 375
                if ( !($context["sin_productos"] ?? null)) {
                    // line 376
                    echo "                    <div class=\"col s12 l12 left-align hide-on-med-and-down\">
                      ";
                    // line 378
                    echo "                      ";
                    // line 379
                    echo "                      <br>
                    </div>
                  ";
                }
                // line 382
                echo "
                    ";
                // line 383
                if (($context["vista_categoria"] ?? null)) {
                    // line 384
                    echo "                    ";
                    if ( !($context["sin_productos"] ?? null)) {
                        // line 385
                        echo "                      <div class=\"col s12\">
                        <div class=\"divider dividerMargin\"></div>
                      </div>
                      ";
                    }
                    // line 389
                    echo "                    ";
                }
                // line 390
                echo "                  </div>
                ";
            }
            // line 392
            echo "              ";
        }
        // line 393
        echo "
              ";
        // line 394
        if ( !($context["vista_categoria"] ?? null)) {
            // line 395
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["producto"] ?? null), 0, array(), "array"), "Suc_Nombre", array())) {
                // line 396
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
                // line 403
                echo (twig_length_filter($this->env, ($context["producto"] ?? null)) + ($context["count"] ?? null));
                echo " Resultados de la búsqueda \"";
                echo ($context["busqueda_termino"] ?? null);
                echo "\" 
                  </div>
                ";
            }
            // line 405
            echo " 
              ";
        }
        // line 407
        echo "            </div>

            ";
        // line 409
        if (( !($context["noproducto"] ?? null) &&  !($context["noproducto2"] ?? null))) {
            // line 410
            echo "              ";
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 411
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
                // line 421
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
                // line 444
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 445
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
                // line 447
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
                // line 467
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
                    // line 468
                    echo "                      ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 469
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
                          
                            <div class=\"card hoverable centrarForzado ";
                        // line 471
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            echo " divAgotado ";
                        }
                        echo "\" itemscope itemtype=\"http://schema.org/Product\">
                                ";
                        // line 472
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            // line 473
                            echo "
                                <span class=\"centered\"><b>AGOTADO</b></span>    
                                ";
                        }
                        // line 476
                        echo "                            <a itemprop=\"url\" href=\"";
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
                        // line 479
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 480
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\" >
                              ";
                        } else {
                            // line 482
                            echo "                                <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                              ";
                        }
                        // line 484
                        echo "                              ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 485
                            echo "                                <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                              ";
                        }
                        // line 487
                        echo "                               ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 488
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 490
                        echo "                              <!--";
                        $this->loadTemplate("layout/favoritos_mostrar.twig", "tienda/inicio.twig", 490)->display($context);
                        echo "-->
                            </div>
                            <div class=\"enfasisD divider\"></div>
                            <div class=\"card-action center cardActionProdFix\">
                              <div class=\"hide fontB2 enfasisB\" itemprop=\"description\">";
                        // line 494
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<div>" => " ", "</div>" => " ")), 0, 150));
                        echo "...</div>
                              <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                              <span itemprop=\"lowPrice\">";
                        // line 496
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                              <span itemprop=\"highPrice\">";
                        // line 497
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                              <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                              </div>
                               <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" title=\"";
                        // line 500
                        echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
                        echo "\">";
                        if ((($context["userAgent"] ?? null) == "PC")) {
                            echo " ";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) < 30)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 30) . "<br><br>")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " ";
                        } else {
                            echo " <text style=\"font-weight:1000;\">";
                            echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array()))) > 26)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["pro"], "Pro_Nombre", array())), 0, 27) . "...")) : ($this->getAttribute($context["pro"], "Pro_Nombre", array())));
                            echo " </text>";
                        }
                        echo "</span>
                            ";
                        // line 501
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 0)) {
                            // line 502
                            echo "                               <div class=\"row sinPadding rowsinpaddin\">
                                ";
                            // line 504
                            echo "                                <div class=\"col s12 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo "</span><br><i>X MAYOR</i></h6></div> 
                              </div>
                            ";
                        } else {
                            // line 507
                            echo "                              <div class=\"row sinPadding rowsinpaddin\">
                                <div class=\"col s12 m12 l12 green lighten-5\"><h6><span class=\"fontE red-text negrita\">S/ ";
                            // line 508
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo " </span></h6><label><s>S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                            echo "</s></label></div>
                                ";
                            // line 510
                            echo "                              </div>
                            ";
                        }
                        // line 512
                        echo "                            </div>
                            </a>
                           <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                            ";
                        // line 515
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 516
                            echo "                            ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                            &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 517
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 518
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
                    // line 524
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
                // line 525
                echo "                  </div>
                </div>
              ";
            } else {
                // line 528
                echo "                <div class=\"row centrarForzado\">
                  <br>
                  <div class=\"col s12 sinPadding ajax_filtro_productos containerProductos\">
                    ";
                // line 531
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
                    // line 532
                    echo "                      ";
                    if ((($this->getAttribute($context["pro"], "Pro_Estado", array()) != 3) &&  !twig_test_empty($this->getAttribute($context["pro"], "Prf_Img", array())))) {
                        // line 533
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
                        <div class=\"card hoverable centrarForzado alturaDIV ";
                        // line 534
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            echo " divAgotado ";
                        }
                        echo "\">
                                ";
                        // line 535
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) == 4)) {
                            // line 536
                            echo "
                                <span class=\"centered\"><b>AGOTADO</b></span>    
                                ";
                        }
                        // line 539
                        echo "                            <a itemprop=\"url\" href=\"";
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
                        // line 542
                        if (($this->getAttribute($context["pro"], "Prf_Thumb", array()) != "")) {
                            // line 543
                            echo "                                    <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
                            echo "\" class=\" lazy containImgFilter anchoTotal\" >
                                  ";
                        } else {
                            // line 545
                            echo "                                    <img itemprop=\"image\" data-src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["pro"], "Prf_Img", array());
                            echo "\" class=\"lazy containImgFilter anchoTotal\"> 
                                  ";
                        }
                        // line 547
                        echo "                                  ";
                        if (($this->getAttribute($context["pro"], "Pro_Oferta", array()) == 1)) {
                            // line 548
                            echo "                                    <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                                  ";
                        }
                        // line 550
                        echo "                                   ";
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 1)) {
                            // line 551
                            echo "                            <img class=\"sales positionAbsolute positionAbsolute top0 left0\" alt=\"Pormayor.pe - Producto en oferta\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "ofertaA.webp\" type=\"image\" alt=\"\">
                          ";
                        }
                        // line 553
                        echo "                                  <!--";
                        $this->loadTemplate("layout/favoritos_mostrar.twig", "tienda/inicio.twig", 553)->display($context);
                        echo "-->
                                </div>
                            
                                <div class=\"col s8 positionRelative\" style=\"height:160px\" style=\"border:1px solid red;\">

                                  <br>
                                  <span itemprop=\"name\" class=\"truncateNew fontD2 muayuscula\" style=\"font-weight: 400\" title=\"";
                        // line 559
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
                        // line 561
                        echo twig_title_string_filter($this->env, twig_slice($this->env, twig_replace_filter($this->getAttribute($context["pro"], "Pro_Descripcion", array()), array("<p>" => "", "</p>" => "", "<strong>" => "", "</strong>" => "", "<br>" => "", "</br>" => "", "&nbsp;" => " ", "<ul>" => " ", "</ul>" => " ", "</li>" => " ", "<li>" => " ", "<table>" => " ", "</table>" => " ", "</tr>" => " ", "<tr>" => " ", "</td>" => " ", "<td>" => " ", "<tbody>" => " ", "</tbody>" => " ", "<figure class=\"table\">" => " ", "</figure>" => " ", "<div>" => " ", "</div>" => " ")), 0, 90));
                        echo "...</div>
                                      
                                    <div class=\"hide\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/AggregateOffer\">
                                    <span itemprop=\"lowPrice\">";
                        // line 564
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                        echo "</span>
                                    <span itemprop=\"highPrice\">";
                        // line 565
                        echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                        echo "</span>
                                    <meta itemprop=\"priceCurrency\" content=\"PEN\" />
                                    </div>
                                    <br>
                                         <div class=\"row sinPadding rowsinpaddin\">
                                ";
                        // line 570
                        if (($this->getAttribute($context["pro"], "Pro_Saldo", array()) == 0)) {
                            echo "                               
                                ";
                            // line 572
                            echo "                                <div class=\"col s12 m12 l12 green\"><h6 style=\"color:#fff\"><span class=\"fontE negrita\">S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo "</span><br><i>X MAYOR</i></h6></div>
                                 ";
                        } else {
                            // line 574
                            echo "                                   <div class=\"col s12 m12 l12 green lighten-5 center\"><h6><span class=\"fontX red-text negrita\">S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                            echo " </span><label><s>S/ ";
                            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
                            echo "</s></label></h6></div>
                                ";
                        }
                        // line 576
                        echo "                                <span class=\"col s12 m12 l12 new-label pormayorUnico center fontE\">
                                  ";
                        // line 577
                        if (($this->getAttribute($context["pro"], "Pro_Estado", array()) != 4)) {
                            echo "  <text class=\"fontD2\">";
                            $context["vent"] = (0.5 * $this->getAttribute($context["pro"], "Pro_Vista", array()));
                            if ((($context["vent"] ?? null) > 1)) {
                                echo twig_round(($context["vent"] ?? null));
                                echo "</text> Ventas";
                            } else {
                                echo "&nbsp;";
                            }
                            // line 578
                            echo "                                  ";
                            if (($this->getAttribute($context["pro"], "cantFav", array()) > 0)) {
                                echo " 
                                  &nbsp;<label class=\"material-icons\" style=\"color:red;font-size:14px;\">favorite</label><span class=\"plikes\">&nbsp;(";
                                // line 579
                                echo $this->getAttribute($context["pro"], "cantFav", array());
                                echo ")</span>  ";
                            }
                            // line 580
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
                    // line 591
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
                // line 592
                echo "                  </div>
                </div> 
              ";
            }
            // line 595
            echo "            ";
        }
        // line 596
        echo "        </div>
      </div>
      ";
        // line 598
        if ((($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_SEO", array()) || $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_SEO", array())) || $this->getAttribute(($context["detalle_seo"] ?? null), "Des_SEO", array()))) {
            // line 599
            echo "        <div class=\"section categoriaSeo enfasisA\">
          <div class=\"divider\"></div>
          <br>
          ";
            // line 602
            if ($this->getAttribute(($context["categoria_seo"] ?? null), "Cat_SEO", array())) {
                // line 603
                echo "            ";
                echo $this->getAttribute(($context["categoria_seo"] ?? null), "Cat_SEO", array());
                echo "
          ";
            } elseif ($this->getAttribute(            // line 604
($context["subcategoria_seo"] ?? null), "Suc_SEO", array())) {
                // line 605
                echo "            ";
                echo $this->getAttribute(($context["subcategoria_seo"] ?? null), "Suc_SEO", array());
                echo "
          ";
            } elseif ($this->getAttribute(            // line 606
($context["detalle_seo"] ?? null), "Des_SEO", array())) {
                // line 607
                echo "            ";
                echo $this->getAttribute(($context["detalle_seo"] ?? null), "Des_SEO", array());
                echo "
          ";
            }
            // line 609
            echo "        </div>
      ";
        }
        // line 611
        echo "    </div>
  </main>
";
    }

    // line 615
    public function block_script($context, array $blocks = array())
    {
        // line 616
        echo "  <script>var busqueda_flag = \"";
        echo ($context["busqueda_flag"] ?? null);
        echo "\";</script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 620
        echo base_url("public/");
        echo "js/productos/favoritos.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
  <script src=\"";
        // line 621
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
        return array (  1473 => 621,  1467 => 620,  1459 => 616,  1456 => 615,  1450 => 611,  1446 => 609,  1440 => 607,  1438 => 606,  1433 => 605,  1431 => 604,  1426 => 603,  1424 => 602,  1419 => 599,  1417 => 598,  1413 => 596,  1410 => 595,  1405 => 592,  1391 => 591,  1374 => 580,  1370 => 579,  1365 => 578,  1355 => 577,  1352 => 576,  1344 => 574,  1338 => 572,  1334 => 570,  1326 => 565,  1322 => 564,  1316 => 561,  1301 => 559,  1291 => 553,  1285 => 551,  1282 => 550,  1276 => 548,  1273 => 547,  1266 => 545,  1259 => 543,  1257 => 542,  1244 => 539,  1239 => 536,  1237 => 535,  1231 => 534,  1212 => 533,  1209 => 532,  1192 => 531,  1187 => 528,  1182 => 525,  1168 => 524,  1156 => 518,  1152 => 517,  1147 => 516,  1137 => 515,  1132 => 512,  1128 => 510,  1122 => 508,  1119 => 507,  1112 => 504,  1109 => 502,  1107 => 501,  1093 => 500,  1087 => 497,  1083 => 496,  1078 => 494,  1070 => 490,  1064 => 488,  1061 => 487,  1055 => 485,  1052 => 484,  1045 => 482,  1038 => 480,  1036 => 479,  1023 => 476,  1018 => 473,  1016 => 472,  1010 => 471,  994 => 469,  991 => 468,  974 => 467,  952 => 447,  941 => 445,  937 => 444,  909 => 421,  897 => 411,  894 => 410,  892 => 409,  888 => 407,  884 => 405,  876 => 403,  863 => 396,  860 => 395,  858 => 394,  855 => 393,  852 => 392,  848 => 390,  845 => 389,  839 => 385,  836 => 384,  834 => 383,  831 => 382,  826 => 379,  824 => 378,  821 => 376,  819 => 375,  816 => 374,  812 => 372,  810 => 371,  807 => 370,  804 => 369,  800 => 367,  794 => 363,  791 => 362,  789 => 351,  785 => 349,  783 => 348,  773 => 341,  765 => 336,  758 => 332,  754 => 330,  751 => 329,  748 => 328,  740 => 323,  733 => 319,  726 => 315,  722 => 313,  719 => 312,  713 => 308,  710 => 307,  702 => 297,  695 => 293,  688 => 289,  677 => 285,  673 => 283,  671 => 282,  667 => 280,  659 => 275,  649 => 268,  644 => 265,  642 => 264,  637 => 261,  634 => 260,  629 => 257,  615 => 256,  599 => 246,  595 => 245,  590 => 244,  580 => 243,  574 => 241,  567 => 236,  563 => 235,  557 => 232,  541 => 229,  533 => 225,  527 => 223,  524 => 222,  518 => 220,  515 => 219,  508 => 217,  501 => 215,  499 => 214,  486 => 211,  481 => 208,  479 => 207,  473 => 206,  454 => 205,  451 => 204,  434 => 203,  429 => 200,  424 => 197,  418 => 196,  402 => 186,  398 => 185,  393 => 184,  383 => 183,  377 => 181,  366 => 175,  362 => 174,  357 => 173,  347 => 172,  341 => 170,  326 => 167,  320 => 164,  316 => 163,  311 => 161,  306 => 158,  304 => 157,  298 => 155,  295 => 154,  289 => 152,  286 => 151,  279 => 149,  272 => 147,  270 => 146,  258 => 144,  254 => 142,  252 => 141,  246 => 140,  231 => 139,  228 => 138,  224 => 137,  202 => 117,  191 => 115,  187 => 114,  161 => 91,  149 => 81,  147 => 80,  135 => 71,  121 => 60,  116 => 57,  114 => 56,  108 => 52,  103 => 50,  99 => 48,  93 => 46,  91 => 45,  86 => 44,  84 => 43,  80 => 41,  77 => 40,  71 => 36,  65 => 33,  63 => 32,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/inicio.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\tienda\\inicio.twig");
    }
}
