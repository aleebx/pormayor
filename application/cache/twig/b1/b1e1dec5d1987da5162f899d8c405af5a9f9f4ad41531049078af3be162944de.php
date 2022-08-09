<?php

/* tienda/resumen.twig */
class __TwigTemplate_5869633a0a6dda7810a4cf32da6070becf3e1d6f83e713016de514d1b349923f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/resumen.twig", 1);
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
        echo "  <style type=\"text/css\">
    .btn-flat-not:hover{color: white !important;background-color: #21478F ;}
    .btnFlatMobile{border-bottom: 2px solid #21478F;}
    .tabs{
      height: 60px !important;
    }
    .tabs .tab a{
        color:rgba(0,0,0,0.5);
        font-weight:100
    }

    .tabs .tab a:hover {
        color: #21478F;
    }

    .tabs .tab a.active {
        color: #21478F;
    }
    .tabs .indicator {
        background-color:#21478F;
    }
    [type=\"checkbox\"].filled-in:checked + label:after {
      border: 2px solid #21478F;
      background-color: #21478F;
    }
    .error{
      color: red;
    }
    .descuento {
    text-decoration:line-through;
    color: grey;
    }
  </style>
  <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 36
        echo base_url("public/intranet/css/autocomplete.min.css");
        echo "\"  media=\"screen\"/>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "    <main class=\"container fixContainer\"><br><br>
   ";
        // line 43
        echo "      ";
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 44
            echo "        <div class=\"row centrarForzado\">
          <div class=\"col s12 sinPadding\">
            <br>
            <div class=\"row breadPago\">
              <div class=\"col l4 valign-wrapper\">
                <h1 class=\"fixH1Seo enfasisA center centrarForzado\">Carrito de compras</h1>
              </div>
              <div class=\"col l3 sinUser valign-wrapper fontD2 pormayorUnico-text\">
                <i class=\"material-icons left small\">looks_one</i> RESUMEN<span class=\" anchoTotal grey lighten-2 right\"></span>
              </div>
              <div class=\"col l3 sinUser enfasisD valign-wrapper fontD2 sinPadding\">
                <i class=\"material-icons left small\">looks_two</i> DESPACHO<span class=\" anchoTotal grey lighten-2 right\"></span>
              </div>
              <div class=\"col l2 sinUser enfasisD valign-wrapper fontD2\">
                <i class=\"material-icons left small\">looks_3</i> PAGO
              </div>
            </div>
          </div>
          ";
            // line 62
            if ( !twig_test_empty(($context["carrito"] ?? null))) {
                // line 63
                echo "          <div class=\"cart_content row hide\">
            <div class=\"col l9\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix\">                     
                    ";
                // line 69
                echo "                    <div class=\"carroContent center\">
                      ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carritoLi"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 71
                    echo "                      <div class=\"row centrarForzado\">
                        <div class=\"col s2 m2 l2 valign-wrapper\"><img class=\"redondeo centrarForzado fixImg2\" src=\"";
                    // line 72
                    echo ($context["ruta_img"] ?? null);
                    echo $this->getAttribute($context["item"], "img", array());
                    echo "\" ></div>
                        <div class=\"col s4 m4 l3 left-align muayuscula\">";
                    // line 73
                    echo $this->getAttribute($context["item"], "name", array());
                    echo " &nbsp;<br><span class=\"fontB2 enfasisB\">";
                    echo $this->getAttribute($context["item"], "tipovariacion", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "variacion", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "color", array());
                    echo "</span>
                        </div>
                        <div class=\"col s2 m2 l2 valign-wrapper\" data-cantact=\"";
                    // line 75
                    echo $this->getAttribute($context["item"], "qty", array());
                    echo "\" data-cantmin=\"";
                    echo $this->getAttribute($context["item"], "cantmin", array());
                    echo "\" data-idpro=\"";
                    echo $this->getAttribute($context["item"], "idpro", array());
                    echo "\" data-preciounit=\"";
                    echo $this->getAttribute($context["item"], "precio_unit", array());
                    echo "\" data-idrow=\"";
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\" data-pvo=\"";
                    echo $this->getAttribute($context["item"], "pvo", array());
                    echo "\" data-idsku=\"";
                    echo $this->getAttribute($context["item"], "id_sku", array());
                    echo "\" data-pmin=\"";
                    echo $this->getAttribute($context["item"], "price_min", array());
                    echo "\">
                          <select class=\"browser-default fontD2 cantCarrito\">
                            ";
                    // line 77
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["item"], "cantmin", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 78
                        echo "                          <option value=\"";
                        echo $context["i"];
                        echo "\">";
                        echo $context["i"];
                        echo "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                        </select>
                        <small class=\"enfasisB\"> &nbsp;&nbsp;Unidades</small></div>
                        <div class=\"col s2 m2 l4 positionRelative totalN\"><span class=\"positionAbsolute right0 top0 enfasisB fontB2\"><span class=\"precioN precioUnitCarrito";
                    // line 82
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "precio_unit", array());
                    echo "</span> c/u</span><br>
                          ";
                    // line 83
                    $context["subtP"] = ($this->getAttribute($context["item"], "precio_unit", array()) * $this->getAttribute($context["item"], "qty", array()));
                    // line 84
                    echo "                        <span class=\"positionAbsolute right0 bottom0\"><small> S/. &nbsp;&nbsp;</small><b class=\"fontA subTotalCarrito subTotalCarrito";
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\">";
                    echo ($context["subtP"] ?? null);
                    echo "</b></span></div>
                        <div class=\"col s2 m2 l1 valign-wrapper\"><a class=\"btn-flat remove_inventory\" id=\"";
                    // line 85
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\"><i class=\"material-icons small transition\">delete</i></a></div>
                        <div class=\"col s2 m2 l12 colDivider\">
                        <br>
                        <div class=\"divider dividerMargin\"></div>
                        <br>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                        </div>
                    </div>
                    <div class=\"col s6 left-align\">
                      <a class=\"waves-effect waves-light btn-flat btn-flat-not transition\" onclick=\"history.back()\"><i class=\"material-icons left\">arrow_back</i>Seguir Comprando</a>
                    </div>  
                    <div class=\"col s6 right-align\">
                      <button class=\"waves-effect waves-light btn-flat clear_cart\"><i class=\"material-icons left\">delete_sweep</i><u>Vaciar Carrito</u></button>
                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div> 
                  </div>
              </div>
            </div>
            </div>
            </div>
            <div class=\"col l3 sinPadding\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix centrarForzado detallesPedidoCont\">
                    <div class=\"col s12 center\">
                      <span class=\"fontA enfasisA\">Detalles de tu Pedido</span>
                      <div class=\"divider dividerLista\"></div>
                    </div>
                    <div class=\"col s3 center enfasisB left-align valign-wrapper\">
                      Cantidad
                    </div>
                    <div class=\"col s9 center enfasisA valign-wrapper\">
                      <span class=\"centrarForzado\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div>
                    <div class=\"col s3 center enfasisB left-align valign-wrapper\">
                      Total
                    </div>
                    <div class=\"col s9 center enfasisA valign-wrapper\">
                      <span class=\"centrarForzado\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen\"></b></span></span>
                    </div>
                    <div class=\"col s3 center enfasisB totalD1 hide left-align valign-wrapper\">
                      Total 2
                    </div>
                    <div class=\"col s9 center enfasisA totalD2 hide valign-wrapper\">
                      <span class=\"centrarForzado\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div>
                    <div class=\"col s12 m12 l12 center sinPadding\">
                      ";
                // line 140
                if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                    // line 141
                    echo "                        ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                        // line 142
                        echo "                          ";
                        if ((($context["unidPe"] ?? null) >= 100)) {
                            // line 143
                            echo "                          <a href=\"";
                            echo base_url();
                            echo "productos/despacho\" class=\"btn anchoTotal pormayorUnico\">Comprar</a>
                          ";
                        } else {
                            // line 145
                            echo "                            <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                          ";
                        }
                        // line 147
                        echo "                        ";
                    } else {
                        // line 148
                        echo "                            <span class=\"red-text\">NO PUEDES HACER COMPRA CON ESTE USUARIO</span>
                        ";
                    }
                    // line 150
                    echo "                    ";
                } else {
                    // line 151
                    echo "                        ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 152
                        echo "                        <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                        echo ($context["flag_login"] ?? null);
                        echo "\" href=\"#sesion_popup\">Comprar</a> 
                        ";
                    } else {
                        // line 154
                        echo "                          <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                        ";
                    }
                    // line 156
                    echo "                      ";
                }
                // line 157
                echo "                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                      <br>
                    </div>
                    <div class=\"col s6 sinPadding center valign-wrapper\" style=\"\">
                      <img class=\"centrarForzado\" src=\"";
                // line 163
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"45\" >
                    </div>
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton positionRelative\" src=\"";
                // line 167
                echo ($context["ruta_img"] ?? null);
                echo "pagoA.png\" alt=\"compra segura pormayor.pe\" height=\"55\">
                      </a>
                    </div>
                    <div class=\"col s12\"><br></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col s12 center\">
            <br><br><br><br><br>
            <div class=\"preloader-wrapper big active\">
              <div class=\"spinner-layer spinner-blue-only\" style=\"border-color: #FEC00F\">
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
          ";
            } else {
                // line 191
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 192
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5>Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico\" onclick=\"history.back()\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 203
            echo "        </div>
      ";
        } else {
            // line 205
            echo "        <div class=\"row centrarForzado\">
          <div class=\"col s12 sinPadding\">
            <div class=\"row centrarForzado \">
              <div class=\"col s12 center\">
                <h1 class=\"fontA enfasisA centrarForzado\">Carrito de compras</h1>
              </div>
            </div>
            <br>
          </div>
        ";
            // line 214
            if ( !twig_test_empty(($context["carrito"] ?? null))) {
                // line 215
                echo "          <div class=\"cart_content hide\">
            <div class=\"col s12 sinPadding\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix\">                    
                    ";
                // line 221
                echo "                     <div class=\"carroContent center\">
                      ";
                // line 222
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carritoLi"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 223
                    echo "                      <div class=\"row centrarForzado\">
                      <div class=\"col s3 valign-wrapper\"><img class=\"redondeo centrarForzado fixImg2\" src=\"";
                    // line 224
                    echo ($context["ruta_img"] ?? null);
                    echo $this->getAttribute($context["item"], "img", array());
                    echo "\" ></div>
                      <div class=\"col s7 left-align muayuscula\">";
                    // line 225
                    echo $this->getAttribute($context["item"], "name", array());
                    echo " &nbsp;<br><span class=\"fontB2 enfasisB\">";
                    echo $this->getAttribute($context["item"], "tipovariacion", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "variacion", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "color", array());
                    echo "</span>
                      </div>
                      <div class=\"dividerMargin\"></div>
                      <div class=\"col s2 valign-wrapper\"><a class=\"sinPadding centrarForzado btn-flat remove_inventory\" id=\"";
                    // line 228
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\"><i class=\"material-icons small transition\">delete</i></a></div>
                      <div class=\"col s12 valign-wrapper\" data-cantact=\"";
                    // line 229
                    echo $this->getAttribute($context["item"], "qty", array());
                    echo "\" data-cantmin=\"";
                    echo $this->getAttribute($context["item"], "cantmin", array());
                    echo "\" data-idpro=\"";
                    echo $this->getAttribute($context["item"], "idpro", array());
                    echo "\" data-preciounit=\"";
                    echo $this->getAttribute($context["item"], "precio_unit", array());
                    echo "\" data-idrow=\"";
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\" data-pvo=\"";
                    echo $this->getAttribute($context["item"], "pvo", array());
                    echo "\" data-idsku=\"";
                    echo $this->getAttribute($context["item"], "id_sku", array());
                    echo "\" data-pmin=\"";
                    echo $this->getAttribute($context["item"], "price_min", array());
                    echo "\">
                        <select class=\"browser-default fontD2 cantCarrito\">
                          ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["item"], "cantmin", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 232
                        echo "                        <option value=\"";
                        echo $context["i"];
                        echo "\">";
                        echo $context["i"];
                        echo "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 234
                    echo "                      </select>
                      <small class=\"enfasisB\"> &nbsp;&nbsp;Unidades</small></div>
                      <div class=\"col s12 totalN\"><span class=\"top0 enfasisB fontB2\"><span class=\"precioN precioUnitCarrito";
                    // line 236
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "precio_unit", array());
                    echo "</span> c/u&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        ";
                    // line 237
                    $context["subtP"] = ($this->getAttribute($context["item"], "precio_unit", array()) * $this->getAttribute($context["item"], "qty", array()));
                    // line 238
                    echo "                      <span class=\"bottom0\"><small> S/. &nbsp;&nbsp;</small><b class=\"fontA subTotalCarrito subTotalCarrito";
                    echo $this->getAttribute($context["item"], "rowid", array());
                    echo "\">";
                    echo ($context["subtP"] ?? null);
                    echo "</b></span></div>
                      <div class=\"col s2 m2 l12 colDivider\">
                      <div class=\"divider dividerMargin\"></div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "                      </div>
                    </div>
                    <div class=\"col s6 valign-wrapper\">
                      <a class=\"waves-effect waves-light btn-flat btn-flat-not transition\" onclick=\"history.back()\"><i class=\"material-icons left\">arrow_back</i>Seguir Comprando</a>
                    </div>  
                    <div class=\"col s6 right-align\">
                      <button class=\"waves-effect waves-light btn-flat clear_cart\"><i class=\"material-icons left\">delete_sweep</i><u>Vaciar Carrito</u></button>
                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div> 
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col s12 sinPadding\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix centrarForzado detallesPedidoCont\">
                    <div class=\"col s12 center\">
                      <span class=\"fontA enfasisA\">Detalles de tu Pedido</span>
                      <div class=\"divider dividerLista\"></div>
                    </div>
                    <div class=\"col s3 center enfasisB left-align valign-wrapper\">
                      Cantidad
                    </div>
                    <div class=\"col s9 center enfasisA valign-wrapper\">
                      <span class=\"centrarForzado\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                    </div>
                    <div class=\"col s3 center enfasisB left-align valign-wrapper\">
                      Total
                    </div>
                    <div class=\"col s9 center enfasisA valign-wrapper\">
                      <span class=\"centrarForzado\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen\"></b></span></span>
                    </div> 
                    <div class=\"col s3 center enfasisB totalD1 hide left-align valign-wrapper\">
                      Total Desc
                    </div>
                    <div class=\"col s9 center enfasisA totalD2 hide valign-wrapper\">
                      <span class=\"centrarForzado\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
                    </div>             
                    <div class=\"col s12 sinPadding center\">
                      <br>
                      <div class=\"divider\"></div>
                      <br>
                    </div>
                     <div class=\"col s12 center sinPadding\">
                      ";
                // line 293
                if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                    // line 294
                    echo "                        ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                        // line 295
                        echo "                          ";
                        if ((($context["unidPe"] ?? null) >= 100)) {
                            // line 296
                            echo "                            <a href=\"";
                            echo base_url();
                            echo "productos/despacho\" class=\"btn-large anchoTotal pormayorUnico\">Comprar</a>
                          ";
                        } else {
                            // line 298
                            echo "                            <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                          ";
                        }
                        // line 300
                        echo "                        ";
                    } else {
                        // line 301
                        echo "                            <span class=\"red-text\">NO PUEDES HACER COMPRA CON ESTE USUARIO</span>
                        ";
                    }
                    // line 303
                    echo "                      ";
                } else {
                    // line 304
                    echo "                        ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 305
                        echo "                          <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                        echo ($context["flag_login"] ?? null);
                        echo "\" href=\"#sesion_popup\">Comprar</a> 
                        ";
                    } else {
                        // line 307
                        echo "                          <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                        ";
                    }
                    // line 309
                    echo "                      ";
                }
                // line 310
                echo "                      <br><br>
                    </div>
                    <div class=\"col s6 center\">
                      <img class=\"\" src=\"";
                // line 313
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"40\">
                    </div>       
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton \" src=\"";
                // line 317
                echo ($context["ruta_img"] ?? null);
                echo "pagoA.png\" alt=\"compra segura pormayor.pe\" height=\"50\">
                      </a>
                    </div>
                    <div class=\"col s12\"><br><br></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col s12 center\">
            <br><br><br>
            <div class=\"preloader-wrapper big active\">
              <div class=\"spinner-layer spinner-blue-only\" style=\"border-color: #FEC00F\">
                <div class=\"circle-clipper left\">
                  <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                  <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                  <div class=\"circle\"></div>
                </div>
              </div>
            </div>
            <br><br><br>
          </div>
          ";
            } else {
                // line 342
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 343
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5 class=\"movilNoProduct\">Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico\" onclick=\"history.back()\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 354
            echo "         </div>
        <br>
        <br>
      ";
        }
        // line 358
        echo "
      <div id=\"sesion_popup\" class=\"modal white\">
        <div class=\"modal-content positionRelative\" style=\"padding-top:0px\">
          <a href=\"#\" class=\"modal-action modal-close waves-effect waves-red btn-flat positionAbsolute\"><i class=\"material-icons sinUser\">close</i></a>
          <div class=\"row ";
        // line 362
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "centrarForzado";
        }
        echo "\">
            <div class=\"col s12 ";
        // line 363
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "sinPadding";
        }
        echo "\">
              <ul class=\"tabs valign-wrapper\">
                <li class=\"tab col s6\"><a href=\"#iniciar\" class=\" fontD2 transition\">INICIAR SESIÓN</a></li>
                <li class=\"tab col s6\"><a href=\"#crear\" class=\" fontD2 transition\">CREAR CUENTA</a></li>
              </ul>
            </div>
            <div id=\"iniciar\" class=\"col s12\" >
              ";
        // line 370
        echo form_open("", array("role" => "form", "id" => "formulario_login", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarPersonales centrarForzado card-content sinPadding\">
                ";
        // line 372
        if (($context["errors"] ?? null)) {
            // line 373
            echo "                  <div class=\"col s12 center hide\">
                    <input type=\"hidden\" class=\"validarCorreo2\" value=\"Error\">
                  </div> 
                ";
        }
        // line 377
        echo "                <br>
                <div class=\"input-field col s12 l12\">
                  <i class=\"material-icons prefix transitionB\">email</i>
                  <input name=\"correo\" type=\"email\" id=\"correo\"  class=\".form-group\" required=\"\" placeholder=\"Ingresa tu correo de registro\">
                  <label for=\"icon_prefix\">Correo Electrónico</label>
                </div>
                <div class=\"input-field col s12 l12\">
                  <i class=\"material-icons prefix transitionB\">lock</i>
                  <input name=\"clave\" type=\"password\" id=\"clave\" class=\".form-group\" required=\"\" autocomplete=\"new-password\" placeholder=\"Ingresa tu contraseña pormayor.pe\">
                  <label for=\"icon_prefix\">Contraseña</label>
                </div>
                <div class=\"col s12 right-align\">
                  <a class=\"fontB2 grey-text text-darken-1 btn-flat transitionB btn-flat-not waves-effect waves-light waves-blue\" href=\"";
        // line 389
        echo base_url();
        echo "usuario/olvido_contrasenia\">¿Olvidaste tu contraseña?</a>
                </div>
                <div class=\"col s12\">
                  
                  <div class=\"divider dividerMargin\"></div>
                  <br>
                </div>
                ";
        // line 396
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 397
            echo "                  <div class=\"col l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR A PORMAYOR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  ";
            // line 404
            echo "                ";
        } else {
            // line 405
            echo "                  <div class=\"col s12 l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  
             ";
            // line 412
            echo "                ";
        }
        // line 413
        echo "              </div>
              ";
        // line 414
        echo form_close();
        echo "
            </div>
            <div id=\"crear\" class=\"col s12\">
              ";
        // line 417
        echo form_open("", array("role" => "form", "id" => "formulario_registro", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarTienda centrarForzado card-content sinPadding\">
                ";
        // line 419
        if (($context["success"] ?? null)) {
            // line 420
            echo "                  ";
            if (form_error("correo")) {
                // line 421
                echo "                    <input type=\"hidden\" class=\"validarCorreo\" value=\"Error\">
                  ";
            }
            // line 423
            echo "                ";
        }
        // line 424
        echo "                <br>
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
                  <input name=\"dni\" id=\"dni\" type=\"text\"  class=\".form-group\" placeholder=\"Ingresa tu DNI\" required=\"\" ";
        // line 427
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("dni");
        }
        echo "\">
                  <label for=\"dni\">DNI</label>
                </div>
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">person</i>
                  <input type=\"text\" name=\"nombre\" id=\"nombre\"  class=\".form-group\" required=\"required\" ";
        // line 432
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("nombre");
        }
        echo "\">
                  <label for=\"nombre\">Nombre Completo</label>
                </div>
                <div class=\"col s12 m12 l6 input-field positionRelative\">
                  <i class=\"material-icons prefix transitionB\">email</i>
                  <input name=\"correoA\" id=\"correoA\" type=\"email\" class=\"email .form-group\"  required=\"required\" placeholder=\"Ingresa tu correo de registro\" ";
        // line 437
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("correoA");
            echo "\"";
        }
        echo ">
                  <label for=\"icon_prefix\">Correo Electrónico</label>
                  <ul class=\"autosuffix centrarForzado\"></ul>
                  <input type=\"hidden\" name=\"correo\" id=\"correo2\">
                </div>
                <div class=\"col s12 m12 l6 input-field positionRelative\">
                  <i class=\"material-icons prefix transitionB\">phone</i>
                  <input name=\"celular\" id=\"celular\" type=\"number\" class=\".form-group\"  required=\"required\" placeholder=\"Ingresa tu celular de contacto\" ";
        // line 444
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("celular");
            echo "\"";
        }
        echo ">
                  <label for=\"icon_prefix\">Celular</label>
                </div>
                <div class=\"input-field col s12 l12\">
                  <i class=\"material-icons prefix transitionB\">lock</i>
                  <input name=\"clave\" type=\"password\" id=\"contrasena\"  class=\".form-group\" required=\"\" autocomplete=\"new-password\" ";
        // line 449
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("clave");
        }
        echo "\">
                  <label for=\"contrasena\">Contraseña para <b>pormayor.pe</b></label>
                </div>
                <div class=\"col s12\">
                  <br>
                    <input type=\"checkbox\" class=\"filled-in terminosCheck\" id=\"filled-in-box\" />
                    <label style=\"font-size:1rem\" class=\"grey-text text-darken-3\" for=\"filled-in-box\">Acepto los <a class=\"pormayorUnico-text negrita\" href=\"";
        // line 455
        echo base_url();
        echo "Legal/ \">Términos y Condiciones</a> y las <a class=\"pormayorUnico-text negrita\" href=\"";
        echo base_url();
        echo "legal/privacidad\">Políticas de Privacidad y Confidencialidad de la información</a></label>
                </div>
                <div class=\"col s12\">
                    <br>
                    <input type=\"checkbox\" class=\"filled-in\" id=\"publicidad_mat\" checked=\"checked\" />
                    <label style=\"font-size:1rem\" class=\"grey-text text-darken-3\" for=\"publicidad_mat\">Acepto recibir material promocional en mi correo</label>
                    <input type=\"hidden\" name=\"publicidad_valor\" id=\"publicidad_valor\">
                </div>
                <div class=\"col s12\">
                  <br>
                  <div class=\"divider dividerMargin\"></div>
                </div>
                ";
        // line 467
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 468
            echo "                  <div class=\"col l12 center\">
                    <a class=\"btn pormayor anchoTotal btnRegistrarse disabled grey-text text-darken-4 negrita\">Registrarse</a>
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" class=\"hide anchoTotal btn pormayor  \">
                  </div> ";
            // line 476
            echo "                ";
        } else {
            // line 477
            echo "                  <div class=\"col s12 center\">
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" value=\"Registrarse\" class=\"anchoTotal disabled btnRegistrarse btn pormayor  btnCrear grey-text text-darken-4 negrita\">
                  </div>";
            // line 483
            echo " 
                ";
        }
        // line 485
        echo "                
              </div>
              ";
        // line 487
        echo form_close();
        echo "
            </div>
          </div>
        </div>
        <!-- <div class=\"modal-footer\">
          <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Agree</a>
        </div> -->
      </div>
    </main>
    
";
    }

    // line 499
    public function block_script($context, array $blocks = array())
    {
        // line 500
        echo "  <script>
    var flagVariaciones = ";
        // line 501
        echo ($context["flagVariaciones"] ?? null);
        echo ";
  </script>
  <script src=\"";
        // line 503
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"";
        // line 504
        echo base_url("public/");
        echo "js/jquery.validate.js\"></script>
  <script src=\"";
        // line 505
        echo base_url("public/intranet/js/");
        echo "autocomplete.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 507
        echo base_url("public/");
        echo "js/tienda/cart_resumen.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i");
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "tienda/resumen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 507,  873 => 505,  869 => 504,  865 => 503,  860 => 501,  857 => 500,  854 => 499,  839 => 487,  835 => 485,  831 => 483,  827 => 477,  824 => 476,  819 => 468,  817 => 467,  800 => 455,  788 => 449,  776 => 444,  762 => 437,  751 => 432,  740 => 427,  735 => 424,  732 => 423,  728 => 421,  725 => 420,  723 => 419,  718 => 417,  712 => 414,  709 => 413,  706 => 412,  701 => 405,  698 => 404,  694 => 397,  692 => 396,  682 => 389,  668 => 377,  662 => 373,  660 => 372,  655 => 370,  643 => 363,  637 => 362,  631 => 358,  625 => 354,  611 => 343,  608 => 342,  580 => 317,  573 => 313,  568 => 310,  565 => 309,  561 => 307,  555 => 305,  552 => 304,  549 => 303,  545 => 301,  542 => 300,  538 => 298,  532 => 296,  529 => 295,  526 => 294,  524 => 293,  471 => 242,  458 => 238,  456 => 237,  450 => 236,  446 => 234,  435 => 232,  431 => 231,  412 => 229,  408 => 228,  396 => 225,  391 => 224,  388 => 223,  384 => 222,  381 => 221,  374 => 215,  372 => 214,  361 => 205,  357 => 203,  343 => 192,  340 => 191,  313 => 167,  306 => 163,  298 => 157,  295 => 156,  291 => 154,  285 => 152,  282 => 151,  279 => 150,  275 => 148,  272 => 147,  268 => 145,  262 => 143,  259 => 142,  256 => 141,  254 => 140,  203 => 91,  191 => 85,  184 => 84,  182 => 83,  176 => 82,  172 => 80,  161 => 78,  157 => 77,  138 => 75,  127 => 73,  122 => 72,  119 => 71,  115 => 70,  112 => 69,  105 => 63,  103 => 62,  83 => 44,  80 => 43,  77 => 39,  74 => 38,  68 => 36,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/resumen.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\tienda\\resumen.twig");
    }
}
