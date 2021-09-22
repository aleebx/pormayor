<?php

/* tienda/pago_vista.twig */
class __TwigTemplate_9923be579f7c5dcc8e36ee348e8425d2a90d872be28aecb3d4a96d5bf47450dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/pago_vista.twig", 1);
        $this->blocks = array(
            'analytics' => array($this, 'block_analytics'),
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
    public function block_analytics($context, array $blocks = array())
    {
        // line 3
        echo "  <script>
    window.dataLayer=window.dataLayer || []
    dataLayer.push(";
        // line 5
        echo twig_jsonencode_filter(($context["analytics"] ?? null), twig_constant("JSON_UNESCAPED_UNICODE"));
        echo ");
  </script>
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "  <style type=\"text/css\">
    body {
      overflow-x:hidden;
    }
    .btn-flat-not:hover{color: white !important;background-color:#21478F;}
    .btnFlatMobile{border-bottom: 2px solid #21478F;}
    [type=\"radio\"]:checked + label:after,[type=\"radio\"].with-gap:checked + label:after {
      background-color: #21478F;
    }

    [type=\"radio\"]:checked + label:after, [type=\"radio\"].with-gap:checked + label:before, [type=\"radio\"].with-gap:checked + label:after {
        border: 2px solid #21478F;
    }
    
    [type=\"checkbox\"].filled-in:checked + label:after {
        border:2px solid #21478F;
        background-color:#21478F;
    }

    .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-content{
      text-align: left !important;
    }
  </style>
  
  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/spinkit/1.2.5/spinkit.min.css\" media=\"screen\"/>
";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "  <main class=\"container loadingPago ";
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo " fixContainer ";
        }
        echo "\" ";
        if ((($context["userAgent"] ?? null) == "PC")) {
            echo "style=\"width: 98%\"";
        }
        echo ">
    ";
        // line 38
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 39
            echo "      <div class=\"row centrarForzado\">
        <div class=\"col s12 sinPadding\">
          <div class=\"row breadPago\">
            <div class=\"col l4 valign-wrapper\">
              <h1 class=\"fixH1Seo enfasisA center centrarForzado\">Carrito de compras</h1>
            </div>
            <a href=\"";
            // line 45
            echo base_url();
            echo "productos/carrito\">
              <div class=\"col l3 sinUser enfasisD fontD2 valign-wrapper comoBoton\">
                  <i class=\"material-icons left small\">looks_one</i> RESUMEN<span class=\" anchoTotal grey lighten-2 right\"></span>
              </div>
            </a>
            <a href=\"";
            // line 50
            echo base_url();
            echo "productos/despacho\">
              <div class=\"col l3 sinUser enfasisD fontD2 valign-wrapper sinPadding\">
                <i class=\"material-icons left small\">looks_two</i> DESPACHO<span class=\" anchoTotal grey lighten-2 right\"></span>
              </div>
            </a>
            <div class=\"col l2 sinUser fontD2 valign-wrapper pormayorUnico-text\">
              <i class=\"material-icons left small \">looks_3</i> PAGO
            </div>
          </div>
        </div>
        <div class=\"col s12\">
          <div class=\"card yellow\" style=\"font-size:1rem;\">
            <div class=\"card-content\">
            <p>Si en su pedido hay productos de <b>PRE-VENTA</b>, la entrega se va a efectuar según la fecha de entrega indicada en el producto. <br> Si en su pedido hay productos disponibles puede solicitar la entrega parcial de su compra con un <b>costo adicional de 10 soles</b> si va ser contraentrega o enviado a provincia.</p>
            </div> 
          </div> 
        </div>
        <div class=\"col l4 sinPadding unidadSticky hide\">
          <div class=\"card \">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix centrarForzado cart_content hide\">
                <div class=\"col s12 center sinPadding\">
                  <span class=\"fontA enfasisA\">Detalles de tu Pedido</span>
                  <div class=\"divider dividerLista\"></div>
                  <br>
                </div>
                ";
            // line 76
            $context["total"] = 0;
            // line 77
            echo "                ";
            $context["total2"] = 0;
            // line 78
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id_tiendas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["idt"]) {
                // line 79
                echo "                  <br>
                  <p class=\"negrita center\">TIENDA ";
                // line 80
                echo twig_upper_filter($this->env, $this->getAttribute($context["idt"], "Tie_Nombre", array()));
                echo "</p> 
                  <br> 
                  ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carrito"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 83
                    echo "                    ";
                    if (($this->getAttribute($context["idt"], "Tie_IdTienda", array()) == $this->getAttribute($context["car"], "idtienda", array()))) {
                        // line 84
                        echo "                      <div class=\"col s12 sinPadding\">
                        <div class=\"row centrarForzado detallePedido2\">
                          <div class=\"col s2 center\">
                            <img class=\"centrarForzado redondeo fixImg2\" alt=\"";
                        // line 87
                        echo $this->getAttribute($context["car"], "name", array());
                        echo " al pormayor\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["car"], "img", array());
                        echo "\" >
                          </div>
                          <div class=\"col s7 sinPadding\">
                            <span class=\"enfasisA fontB2 muayuscula\">";
                        // line 90
                        echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array()))) > 42)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array())), 0, 42) . "...")) : (twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array()))));
                        echo "</span><br>
                            ";
                        // line 91
                        if (($this->getAttribute($context["car"], "tipovariacion", array()) != " ")) {
                            // line 92
                            echo "                              <span class=\"fontB2 enfasisB\">";
                            echo $this->getAttribute($context["car"], "tipovariacion", array());
                            echo " ";
                            echo $this->getAttribute($context["car"], "variacion", array());
                            echo "&nbsp;</span>
                            ";
                        }
                        // line 94
                        echo "                            ";
                        if (($this->getAttribute($context["car"], "color", array()) != "")) {
                            // line 95
                            echo "                              <span class=\"enfasisB\">(";
                            echo twig_title_string_filter($this->env, $this->getAttribute($context["car"], "color", array()));
                            echo ")</span><br>
                            ";
                        }
                        // line 97
                        echo "                            <span class=\"enfasisA\"><span class=\"cantCarrito\">";
                        echo $this->getAttribute($context["car"], "qty", array());
                        echo "</span> unidades</span>
                          </div>
                          <div class=\"col s3 positionRelative totalN hide\">
                            <span class=\"positionAbsolute right0 top0 enfasisB fontB2\">
                              <span class=\"precioUnitCarrito";
                        // line 101
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "precio_unit", array());
                        echo "</span> c/u
                            </span><br> 
                              <span class=\"positionAbsolute right0 bottom0\"><small> S/. &nbsp;&nbsp;</small>
                                <span class=\"fontD2 subTotalCarrito subTotalCarrito";
                        // line 104
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "price", array());
                        echo "</span>
                              </span>
                          </div>                          
                          <div class=\"col s3 positionRelative totalD hide\">
                            <span class=\"positionAbsolute right0 top0 enfasisB fontB2\">
                              <span class=\"precioUnit2Carrito";
                        // line 109
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "price_min", array());
                        echo "</span> c/u
                            </span><br> 
                              <span class=\"positionAbsolute right0 bottom0\"><small> S/. &nbsp;&nbsp;</small>
                                ";
                        // line 112
                        $context["almayor"] = ($this->getAttribute($context["car"], "price_min", array()) * $this->getAttribute($context["car"], "qty", array()));
                        // line 113
                        echo "                                <span class=\"fontD2 subTotalCarrito2 subTotal2Carrito";
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo ($context["almayor"] ?? null);
                        echo "</span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <div class=\"col s12\">
                        <div class=\"divider dividerMargin\"></div>
                      </div>
                    ";
                    }
                    // line 122
                    echo "                     ";
                    $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["car"], "price", array()));
                    // line 123
                    echo "                     ";
                    $context["total2"] = (($context["total2"] ?? null) + ($context["almayor"] ?? null));
                    // line 124
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo " 
                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Cantidad
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                </div>
                <div class=\"col s6 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Costo de producto
                </div>
                <div class=\"col s6 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"costoProducto\"></b></span> <span class=\"enfasisB\"></span>
                </div>
                <div class=\"col s7 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                   Gasto de despacho
                </div>
                <div class=\"col s5 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"idCostoReal\">";
            // line 142
            echo ($context["costoReal"] ?? null);
            echo "</b></span> <span class=\"enfasisB\"></span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Total
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp; <span class=\"fontD2\"><b class=\"totalResumen\"></b></span></span>
                </div>
                <div class=\"col s12\">
              </div>
              <div class=\"col s12 center\">
                <br><br><br>
                <div class=\"centrarForzado preloader-wrapper big active\">
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
            </div>
          </div>
          </div>
        </div>
        <div class=\"col l3 unidadSticky hide\">
          <div class=\"card \">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix centrarForzado cart_content hide\">
                <div class=\"col s12 center\">
                  <span class=\"fontA enfasisA\">Pago de pedido</span>
                  <br>
                </div>
                <div class=\"col s12\">                  
                  <div class=\"divider\"></div><br>
                  <span class=\"enfasisA\"><b>Nombre:</b> ";
            // line 184
            echo $this->getAttribute(($context["inf_compra"] ?? null), "nombre", array());
            echo "</span><br>
                  <span class=\"enfasisA\"><b>Teléfono:</b> ";
            // line 185
            echo $this->getAttribute(($context["inf_compra"] ?? null), "tlf", array());
            echo "</span><br>
                  <span class=\"enfasisA\"><b>Correo:</b> ";
            // line 186
            echo $this->getAttribute(($context["inf_compra"] ?? null), "correo", array());
            echo "</span><br>
                  <span class=\"enfasisA\"><b>Dirección:</b> ";
            // line 187
            echo $this->getAttribute(($context["inf_compra"] ?? null), "direccion", array());
            echo "</span><br><br>
                  <div class=\"divider\"></div><br>
                </div>
                <div class=\"col s6 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Costo de producto
                </div>
                <div class=\"col s6 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"costoProducto\"></b></span> <span class=\"enfasisB\"></span>
                </div>
                 <div class=\"col s6 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                   Gasto de despacho
                </div>
                <div class=\"col s6 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b>";
            // line 200
            echo ($context["costoReal"] ?? null);
            echo "</b></span> <span class=\"enfasisB\"></span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Cantidad
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                </div>
                 
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Total
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen\"></b></span></span>
                  <span style=\"margin-left: auto\" class=\"hide\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
                </div>

                <div class=\"col s4 m4 l12 pagoTDC center positionRelative hide\">

                  ";
            // line 225
            if ((($context["total2"] ?? null) >= 100)) {
                // line 226
                echo "                  <input type=\"number\" value=\"";
                echo ($context["total2"] ?? null);
                echo "\" id=\"totalPago\" class=\"hide\">
                  ";
            } else {
                // line 228
                echo "                  <input type=\"number\" value=\"";
                echo ($context["total"] ?? null);
                echo "\" id=\"totalPago\" class=\"hide\">
                  ";
            }
            // line 230
            echo "                </div>

              </div>
              <div class=\"col s12 center\">
                <br><br><br>
                <div class=\"centrarForzado preloader-wrapper big active\">
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
          </div>
        </div>
        </div>        
          <div class=\"col s12\">
          <div class=\"card\" id=\"pagoBlock\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\" > 
                <span class=\"card-title center black-text\">Selecciona un método de despacho</span>
                <div class=\"col s12\"><div class=\"dividerMargin\"></div></div>
                ";
            // line 257
            if ((($this->getAttribute(($context["inf_compra"] ?? null), "provincia", array()) == "150100") || ($this->getAttribute(($context["inf_compra"] ?? null), "provincia", array()) == "070100"))) {
                // line 258
                echo "                <div class=\"col s12 l6 center enfasisA transition sinPadding\">
                  <a href=\"#!\" class=\"pagoLinkCarrito grey-text text-darken-3\" data-tipo=\"TIENDA\">
                    <div class=\"positionRelative transition\">
                      <img class=\"redondeo bancoImg \" src=\"";
                // line 261
                echo ($context["ruta_img"] ?? null);
                echo "irTienda.png\" height=\"61\"><br>
                      <span>Retiro en tienda - Lima</span>
                      <i class=\"material-icons green-text small positionAbsolute fontC white transition\">check_box</i>
                    </div>
                  </a>
                  <br>
                </div>
                <div class=\"col s12 l6 center enfasisA transition sinPadding\">
                  <a href=\"#!\" class=\"pagoLinkCarrito grey-text text-darken-3\" data-tipo=\"ACUERDO\">
                    <div class=\"positionRelative transition\">
                      <img class=\"redondeo bancoImg \" src=\"";
                // line 271
                echo ($context["ruta_img"] ?? null);
                echo "pagoce.png\" height=\"61\"><br>
                      <span >Contraentrega - Lima y Callao</span>
                      <i class=\"material-icons green-text small positionAbsolute fontC white transition\">check_box</i>
                    </div>
                  </a>
                  <br>
                </div>
                ";
            } else {
                // line 279
                echo "                <div class=\"col s12 l12 center enfasisA transition sinPadding\">
                  <a href=\"#!\" class=\"pagoLinkCarrito grey-text text-darken-3\" data-tipo=\"TOD\">
                    <div class=\"positionRelative transition\">
                      <img class=\"redondeo bancoImg \" src=\"";
                // line 282
                echo ($context["ruta_img"] ?? null);
                echo "bank.png\" height=\"61\"><br>
                      <span>Envio a provincia | Deposito o Transferencia</span>
                      <i class=\"material-icons green-text small positionAbsolute fontC white transition\">check_box</i>
                    </div>
                  </a>
                  <br>
                </div>
                ";
            }
            // line 290
            echo "              </div>
          </div>
            </div>
          </div>
    ";
        } else {
            // line 295
            echo "      <div class=\"row centrarForzado\">
        <div class=\"col s12 sinPadding\">
          <br><br><br>
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h1 class=\"fontA enfasisA centrarForzado\">Carrito de compras</h1>
            </div>
          </div>
          <br>
        </div>
        <div class=\"col s12 sinPadding\">
          <div class=\"card \">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix centrarForzado cart_content hide\">
                <div class=\"col s12 center\">
                  <span class=\"fontA enfasisA\">Detalles de tu pedido</span>
                </div>                
                <div class=\"col s12\">                  
                  <div class=\"divider\"></div><br>
                  <span class=\"enfasisA\"><b>Nombre:</b> ";
            // line 314
            echo $this->getAttribute(($context["inf_compra"] ?? null), "nombre", array());
            echo "</span><br>
                  <span class=\"enfasisA\"><b>Teléfono:</b> ";
            // line 315
            echo $this->getAttribute(($context["inf_compra"] ?? null), "tlf", array());
            echo "</span><br>
                  <span class=\"enfasisA\"><b>Correo:</b> ";
            // line 316
            echo $this->getAttribute(($context["inf_compra"] ?? null), "correo", array());
            echo "</span><br>
                  <span class=\"enfasisA\"><b>Dirección:</b> ";
            // line 317
            echo $this->getAttribute(($context["inf_compra"] ?? null), "direccion", array());
            echo "</span><br><br>
                  <div class=\"divider\"></div><br>
                </div>
                ";
            // line 320
            $context["total"] = 0;
            // line 321
            echo "                ";
            $context["total2"] = 0;
            // line 322
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id_tiendas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["idt"]) {
                // line 323
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carrito"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 324
                    echo "                    ";
                    if (($this->getAttribute($context["idt"], "Tie_IdTienda", array()) == $this->getAttribute($context["car"], "idtienda", array()))) {
                        // line 325
                        echo "                      <div class=\"col s12 sinPadding\">
                        <div class=\"row centrarForzado detallePedidoMobile\">
                          <div class=\"col s3\">
                            <img class=\"centrarForzado redondeo fixImg2B\" alt=\"";
                        // line 328
                        echo $this->getAttribute($context["car"], "name", array());
                        echo " al pormayor\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["car"], "img", array());
                        echo "\" >
                          </div>
                          <div class=\"col s9\">
                            <span class=\"enfasisA muayuscula\">";
                        // line 331
                        echo twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array()));
                        echo "</span><br>
                            ";
                        // line 332
                        if (($this->getAttribute($context["car"], "tipovariacion", array()) != " ")) {
                            // line 333
                            echo "                              <span class=\"enfasisB\">";
                            echo $this->getAttribute($context["car"], "tipovariacion", array());
                            echo "&nbsp; ";
                            echo $this->getAttribute($context["car"], "variacion", array());
                            echo "&nbsp;</span>
                            ";
                        }
                        // line 335
                        echo "                            ";
                        if (($this->getAttribute($context["car"], "color", array()) != "")) {
                            // line 336
                            echo "                              <span class=\"enfasisB\">(";
                            echo twig_title_string_filter($this->env, $this->getAttribute($context["car"], "color", array()));
                            echo ")</span>
                            ";
                        }
                        // line 338
                        echo "                          </div>
                          <div class=\"col s3 offset-s3 enfasisB fontD2 valign-wrapper\">
                            <span class=\"cantCarrito\">";
                        // line 340
                        echo $this->getAttribute($context["car"], "qty", array());
                        echo "</span>&nbsp; u
                          </div>
                          <div class=\"col s4 positionRelative totalN hide\">
                            <span class=\"positionAbsolute right0 top0 enfasisB fontB2\">
                              <span class=\"precioUnitCarrito";
                        // line 344
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "precio_unit", array());
                        echo "</span> c/u
                            </span><br> 
                            <span class=\"positionAbsolute right0 bottom0\">
                              <small> S/. &nbsp;&nbsp;</small><span class=\"fontA subTotalCarrito subTotalCarrito";
                        // line 347
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "price", array());
                        echo "</span>
                            </span>
                          </div>
                          <div class=\"col s4 positionRelative totalD hide\">
                            <span class=\"positionAbsolute right0 top0 enfasisB fontB2\">
                              <span class=\"precioUnitCarrito";
                        // line 352
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "price_min", array());
                        echo "</span> c/u
                            </span><br><br>
                              <span class=\"positionAbsolute right0 bottom0\">
                                ";
                        // line 355
                        $context["almayor"] = ($this->getAttribute($context["car"], "price_min", array()) * $this->getAttribute($context["car"], "qty", array()));
                        // line 356
                        echo "                                <small> S/. &nbsp;&nbsp;</small><span class=\"fontA subTotalCarrito2 subTotalCarrito";
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo ($context["almayor"] ?? null);
                        echo "</span>
                              </span>
                          </div>
                          <div class=\"col s1 \">
                          </div>
                        </div>
                      </div>
                      <div class=\"col s12\">
                        <br>
                        <div class=\"divider\"></div>
                        <br>
                      </div>
                    ";
                    }
                    // line 369
                    echo "                    ";
                    $context["total"] = (($context["total"] ?? null) + $this->getAttribute($context["car"], "price", array()));
                    // line 370
                    echo "                    ";
                    $context["total2"] = (($context["total"] ?? null) + $this->getAttribute($context["car"], "price", array()));
                    // line 371
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 372
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "                ";
            $context["porTdc"] = ((($context["total"] ?? null) * 6) / 100);
            // line 374
            echo "                ";
            $context["pagoConTDC"] = (($context["total"] ?? null) + ($context["porTdc"] ?? null));
            // line 375
            echo "                <div class=\"col s6 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Costo de producto
                </div>
                <div class=\"col s6 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"costoProducto\"></b></span> <span class=\"enfasisB\"></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Cantidad
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s6 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Costo de producto
                </div>
                <div class=\"col s6 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"costoProducto\"></b></span> <span class=\"enfasisB\"></span>
                </div>
                <div class=\"col s7 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Costo de envío
                </div>
                <div class=\"col s5 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"idCostoReal\">";
            // line 403
            echo ($context["costoReal"] ?? null);
            echo "</b></span> <span class=\"enfasisB\"></span></span>
                </div>
                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Total
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen\"></b></span></span>
                  <span style=\"margin-left: auto\" class=\"hide\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
                </div>
                <div class=\"col s12 center sinPadding\">
                  ";
            // line 413
            if ((($context["total2"] ?? null) >= 100)) {
                // line 414
                echo "                  <input type=\"number\" value=\"";
                echo ($context["total2"] ?? null);
                echo "\" id=\"totalPago\" class=\"hide\">
                  ";
            } else {
                // line 415
                echo " 
                  <input type=\"number\" value=\"";
                // line 416
                echo ($context["total"] ?? null);
                echo "\" id=\"totalPago\" class=\"hide\">
                  ";
            }
            // line 418
            echo "                </div>
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

              </div>
            </div>
          </div>
        </div>
        <div class=\"col s12 sinPadding\">
          <div class=\"card\" id=\"pagoBlock\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\" > 
                <span class=\"card-title center black-text\">Selecciona un método de despacho</span>
                <br>
                 ";
            // line 444
            if ((($this->getAttribute(($context["inf_compra"] ?? null), "provincia", array()) == "150100") || ($this->getAttribute(($context["inf_compra"] ?? null), "provincia", array()) == "070100"))) {
                // line 445
                echo "                <div class=\"col center s12 enfasisA fontD2 transition\" style=\"border: 2px solid #fec00f;padding: 3px;border-radius: 5px;\">
                  <a href=\"#!\" class=\"pagoLinkCarrito grey-text text-darken-3\" data-tipo=\"TIENDA\">
                    <div class=\"positionRelative transition\">
                      <img class=\"redondeo bancoImg \" src=\"";
                // line 448
                echo ($context["ruta_img"] ?? null);
                echo "irTienda.png\" height=\"61\"><br>
                      <span>Retiro en tienda - Lima</span>
                    </div>
                  </a>
                  <br>
                </div>
                <div class=\"col center s12 enfasisA fontD2 transition\" style=\"border: 2px solid #fec00f;padding: 3px;border-radius: 5px;\">
                  <a href=\"#!\" class=\"pagoLinkCarrito grey-text text-darken-3\" data-tipo=\"ACUERDO\">
                    <div class=\"positionRelative transition\">
                      <img class=\"redondeo bancoImg \" src=\"";
                // line 457
                echo ($context["ruta_img"] ?? null);
                echo "pagoce.png\"><br>
                      <span>Contraentrega - Lima y Callao</span>
                    </div>
                  </a>
                  <br>
                </div>
                ";
            } else {
                // line 464
                echo "                <div class=\"col center s12 enfasisA fontD2 transition\" style=\"border: 2px solid #fec00f;padding: 3px;border-radius: 5px;\">
                  <a href=\"#!\" class=\"pagoLinkCarrito grey-text text-darken-3\" data-tipo=\"TOD\">
                    <div class=\"positionRelative transition\">
                      <img class=\"redondeo bancoImg \" src=\"";
                // line 467
                echo ($context["ruta_img"] ?? null);
                echo "bank.png\" height=\"61\"><br>
                      <span>Envio a provincia - Depósito o Transferencia</span>
                    </div>
                  </a>
                  <br>
                </div>
              ";
            }
            // line 474
            echo "              </div>
              </div>
            </div>
          </div>
      </div>
      <div class=\"row centrarForzado bottom0 anchoTotal white left0 setbuttonMobile transitionB\">
        ";
            // line 480
            if ((($context["total2"] ?? null) >= 100)) {
                // line 481
                echo "        <input type=\"number\" value=\"";
                echo ($context["total2"] ?? null);
                echo "\" id=\"totalPago\" class=\"hide\">
        ";
            } else {
                // line 483
                echo "        <input type=\"number\" value=\"";
                echo ($context["total"] ?? null);
                echo "\" id=\"totalPago\" class=\"hide\">
        ";
            }
            // line 485
            echo "      </div>
    ";
        }
        // line 487
        echo "  </main>

";
    }

    // line 491
    public function block_script($context, array $blocks = array())
    {
        // line 492
        echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
  <script src=\"";
        // line 494
        echo base_url("public/");
        echo "js/tienda/cart_pago.js?v=2706\"></script>
";
    }

    public function getTemplateName()
    {
        return "tienda/pago_vista.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 494,  829 => 492,  826 => 491,  820 => 487,  816 => 485,  810 => 483,  804 => 481,  802 => 480,  794 => 474,  784 => 467,  779 => 464,  769 => 457,  757 => 448,  752 => 445,  750 => 444,  722 => 418,  717 => 416,  714 => 415,  708 => 414,  706 => 413,  693 => 403,  663 => 375,  660 => 374,  657 => 373,  651 => 372,  645 => 371,  642 => 370,  639 => 369,  620 => 356,  618 => 355,  610 => 352,  600 => 347,  592 => 344,  585 => 340,  581 => 338,  575 => 336,  572 => 335,  564 => 333,  562 => 332,  558 => 331,  549 => 328,  544 => 325,  541 => 324,  536 => 323,  531 => 322,  528 => 321,  526 => 320,  520 => 317,  516 => 316,  512 => 315,  508 => 314,  487 => 295,  480 => 290,  469 => 282,  464 => 279,  453 => 271,  440 => 261,  435 => 258,  433 => 257,  404 => 230,  398 => 228,  392 => 226,  390 => 225,  362 => 200,  346 => 187,  342 => 186,  338 => 185,  334 => 184,  289 => 142,  270 => 125,  258 => 124,  255 => 123,  252 => 122,  237 => 113,  235 => 112,  227 => 109,  217 => 104,  209 => 101,  201 => 97,  195 => 95,  192 => 94,  184 => 92,  182 => 91,  178 => 90,  169 => 87,  164 => 84,  161 => 83,  157 => 82,  152 => 80,  149 => 79,  144 => 78,  141 => 77,  139 => 76,  110 => 50,  102 => 45,  94 => 39,  92 => 38,  81 => 37,  78 => 36,  48 => 9,  45 => 8,  38 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/pago_vista.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\tienda\\pago_vista.twig");
    }
}
