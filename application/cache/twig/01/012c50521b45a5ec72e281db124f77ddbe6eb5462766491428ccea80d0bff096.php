<?php

/* tienda/load/dp_20.twig */
class __TwigTemplate_970ba26deb704f99b85be43834e9a55fe31317790a548b2e6fd9062ad126086a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/load/dp_20.twig", 1);
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
        echo "  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\"  media=\"screen\"/>
  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/easyzoom-mp@2.2.2/css/easyzoom.css\"  media=\"screen\"/>
  <style type=\"text/css\">
    .btn-flat-not:hover{background-color: #21478F ;color: white !important;}
    .materialbox-caption{text-transform: uppercase;font-size: 1.5rem;}
    .sliderMobile .slick-list {padding:0px !important;}
    .sliderMobile .slick-dots li.slick-active button:before{font-size: 70px !important;opacity: 1;color: ";
        // line 9
        echo $this->getAttribute(($context["configuracion"] ?? null), "Con_ColorBtn", array());
        echo ";}
    .sliderMobile img{max-width:100%;max-height: 250px;}
    .sliderMobile{height:250px;}
    .card .card-image img {
      width:auto !important;
    }
    .card-badge{
    line-height: 2em;
    position: absolute;
    top: 1rem;
    right: -10rem;
    display: block;
    width: 25rem;
    height: 2em;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    text-indent: .8em;
    background: #ffeb00;
    background: -webkit-linear-gradient(45deg, #ffeb00 0%, #ffa300 100%);
    background: -moz- oldlinear-gradient(45deg, #ffeb00 0%, #ffa300 100%);
    background: -o-linear-gradient(45deg, #ffeb00 0%, #ffa300 100%);
    background: linear-gradient(45deg, #ffeb00 0%, #ffa300 100%);
  }
  .card-badge a {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    text-align: center;
    text-decoration: none;
    color: #dedede;
}
.card {
    overflow: hidden;
    margin: 1rem 0 1rem 0;
}
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
.gradient-45deg-indigo-purple {
    background: #303f9f;
    background: -webkit-linear-gradient(45deg, #303f9f, #7b1fa2) !important;
    background: -moz- oldlinear-gradient(45deg, #303f9f, #7b1fa2) !important;
    background: -o-linear-gradient(45deg, #303f9f, #7b1fa2) !important;
    background: linear-gradient(45deg, #303f9f, #7b1fa2) !important;
}
.gradient-45deg-yellow {
    background: #fec00f;
    background: -webkit-linear-gradient(45deg, #fec00f, #f59e04) !important;
    background: -moz- oldlinear-gradient(45deg, #fec00f, #f59e04) !important;
    background: -o-linear-gradient(45deg, #fec00f, #f59e04) !important;
    background: linear-gradient(45deg,#fec00f, #f59e04) !important;
}
.input-number-group {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.input-number-group input[type=number]::-webkit-inner-spin-button,
.input-number-group input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
          appearance: none;
}

.input-number-group .input-group-button {
  line-height: calc(80px/2 - 5px);
}

.input-number-group .input-number {
  width: 80px;
  padding: 0 12px;
  vertical-align: top;
  text-align: center;
  outline: none;
  display: block;
  margin: 0;
}

.input-number-group .input-number,
.input-number-group .input-number-decrement,
.input-number-group .input-number-increment {
  border: 1px solid #cacaca;
  height: 40px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border-radius: 0;
}

.input-number-group .input-number-decrement,
.input-number-group .input-number-increment {
  display: inline-block;
  width: 40px;
  background: #e6e6e6;
  color: #0a0a0a;
  text-align: center;
  font-weight: bold;
  cursor: pointer;
  font-size: 2rem;
  font-weight: 400;
}

.input-number-group .input-number-decrement {
  margin-right: 0.3rem;
}

.input-number-group .input-number-increment {
  margin-left: 0.3rem;
}
  </style>
  
";
    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
        // line 139
        echo "  <div id=\"main\">
  <div class=\"content-wrapper-before gradient-45deg-yellow\"></div>
  <main class=\"container fixContainer positionRelative\">
    <br class=\"hide-on-large-only\">
    <br class=\"\">
    <div class=\"row\">      
      <div class=\"col l12\">
        <div class=\"\">
          <div class=\"\">
            <h4 class=\"centrarForzado muayuscula\">";
        // line 148
        echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array()));
        echo " ";
        if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
            echo " (PRE-VENTA) <span class=\"new badge blue\">PRE-VENTA</span> ";
        }
        echo "<small>COD: ";
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
        echo "</small></h4>
          </div>
        </div>
      </div>
      ";
        // line 152
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 153
            echo "      <div class=\"col m6 l6\">
        <div class=\"card\" style=\"height:508.5px;\">
          <div class=\"card-content row sinPadding\">
            <div class=\"col l12 center\" id=\"imagenesPro\" >
              ";
            // line 157
            if (twig_test_empty(($context["fotos"] ?? null))) {
                // line 158
                echo "                <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails redondeo white\">
                  <a href=\"";
                // line 159
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\">
                    <img alt=\"";
                // line 160
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" class=\"containImg anchoTotal\"/>
                  </a>
                </div>
              ";
            } else {
                // line 164
                echo "                <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails redondeo white\">
                  <a href=\"";
                // line 165
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                echo "\">
                    <img alt=\"";
                // line 166
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                echo "\" class=\"containImg anchoTotal\"/>
                  </a>
                </div>
              ";
            }
            // line 170
            echo "              <div class=\"center\">
                <ul class=\"thumbnails\">
                  ";
            // line 172
            if (twig_test_empty(($context["fotos"] ?? null))) {
                // line 173
                echo "                    <li class=\"col\">
                      <a href=\"";
                // line 174
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" data-standard=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\">
                        <img alt=\"";
                // line 175
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" class=\"redondeo\" height=\"40\">
                      </a>
                    </li>
                  ";
            } else {
                // line 179
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
                    // line 180
                    echo "                        ";
                    if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                        // line 181
                        echo "                          ";
                        if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                            // line 182
                            echo "                          <li class=\"col\">
                            <a href=\"";
                            // line 183
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\" data-standard=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\">
                              <img alt=\"";
                            // line 184
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\" class=\"redondeo\" height=\"40\">
                            </a>
                          </li>
                          ";
                        }
                        // line 188
                        echo "                        ";
                    }
                    // line 189
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                  ";
            }
            // line 191
            echo "                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>      
      <div class=\"col m6 l6\">
        <div class=\"card\">          
          <div class=\"card-content center\">
            <a class=\"btn-large fontD pormayor black-text\" >S/ ";
            // line 200
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x mayor</a><br><br>
            <span class=\"card-title\">Seleccione la variación de su producto</span>
            <div>
            ";
            // line 203
            if (((($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 12) && ($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 2)) && ($this->getAttribute(($context["producto"] ?? null), "Suc_IdSubCategoria", array()) != 41))) {
                // line 204
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 205
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 206
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 207
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col l5 right-align\">
                        <div class=\"positionRelative\">
                        ";
                        // line 215
                        echo "                          ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 216
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 218
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 220
                        echo "                        ";
                        $context["colorUnico"] = "";
                        // line 221
                        echo "                        ";
                        $context["colorHex"] = " ";
                        // line 222
                        echo "                        ";
                        $context["break"] = false;
                        // line 223
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 224
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 225
                                    echo "                            ";
                                    // line 226
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 227
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 228
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 229
                                    echo "                          ";
                                }
                                // line 230
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 231
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col l7 valign-wrapper filaCant";
                        // line 234
                        echo $context["key"];
                        echo "\">
                      ";
                        // line 236
                        echo "                        <div class=\"input-group input-number-group\">
                          <div class=\"input-group-button\">
                            <span class=\"input-number-decrement\">-</span>
                          </div>
                          ";
                        // line 240
                        $context["count"] = 0;
                        // line 241
                        echo "                          ";
                        $context["break"] = false;
                        // line 242
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                              ";
                                // line 243
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 244
                                    echo "                                  <input type=\"number\" min=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["precios"] ?? null), 0, array(), "array"), "Prp_Desde", array());
                                    echo "\" name=\"cantidad\" value=\"0\" max=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" class=\"input-number browser-default cantSku cant";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" placeholder=\"Cantidad\" id=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-idpro=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                                    echo "\" data-colresumen=\"";
                                    if (($context["colorHex"] ?? null)) {
                                        echo ($context["colorHex"] ?? null);
                                    } else {
                                        echo "unico";
                                    }
                                    echo "\" data-foto=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\"  data-productname=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                                    echo "\" data-productid=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-price=\"\" xd=\"\" data-tipovariacion=\"";
                                    echo $this->getAttribute($context["skub"], "Var_Nombre", array());
                                    echo "\" data-color=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_Color", array());
                                    echo "\" data-variacion=\"";
                                    echo $this->getAttribute($context["skub"], "Vao_Nombre", array());
                                    echo "\" data-img=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\" data-unidad=\"";
                                    echo $this->getAttribute($context["skub"], "Unm_Nombre", array());
                                    echo "\" data-dispo=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-idtienda=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array());
                                    echo "\" data-minventa=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-preciounit=\"\" data-documento=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array());
                                    echo "\" onkeydown=\"javascript: return event.keyCode == 69 ? false : true\" readonly>
                              ";
                                } else {
                                    // line 246
                                    echo "                                ";
                                    $context["break"] = false;
                                    echo " 
                              ";
                                }
                                // line 247
                                echo " 
                          ";
                                // line 248
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 249
                                echo "                          ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 250
                        echo "                          <div class=\"input-group-button\">
                            <span class=\"input-number-increment\">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 257
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 259
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 264
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 265
                echo "              ";
            } else {
                // line 266
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 267
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 268
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 269
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col l5 right-align\">
                        <div class=\"positionRelative\">                          
                         ";
                        // line 277
                        echo "                        ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 278
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 280
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 282
                        echo "                        ";
                        $context["colorUnico"] = "";
                        // line 283
                        echo "                        ";
                        $context["colorHex"] = "";
                        // line 284
                        echo "                        ";
                        $context["break"] = false;
                        // line 285
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 286
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 287
                                    echo "                            ";
                                    // line 288
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 289
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 290
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 291
                                    echo "                          ";
                                }
                                // line 292
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 293
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col l7\">
                        <div class=\"row\">
                          <div class=\"col s12 l12 sinPadding \">
                          </div>
                            ";
                        // line 300
                        $context["count"] = 0;
                        // line 301
                        echo "                            ";
                        $context["break"] = false;
                        // line 302
                        echo "                          <div class=\"col l12 sinPadding  centrarForzado row filaCant";
                        echo $context["key"];
                        echo "\">
                              ";
                        // line 303
                        $context["count"] = 0;
                        // line 304
                        echo "                              ";
                        $context["break"] = false;
                        // line 305
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                                  ";
                                // line 306
                                if ((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array()))) {
                                    // line 307
                                    echo "                                      <span class=\"fontB2\" for=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\">Talla ";
                                    echo $this->getAttribute($context["skub"], "Vao_Nombre", array());
                                    echo "</span>
                                        <div class=\"input-group input-number-group\">
                                          <div class=\"input-group-button\">
                                            <span class=\"input-number-decrement\">-</span>
                                          </div>
                                            <input type=\"number\" min=\"";
                                    // line 312
                                    echo $this->getAttribute($this->getAttribute(($context["precios"] ?? null), 0, array(), "array"), "Prp_Desde", array());
                                    echo "\" name=\"cantidad\" value=\"0\" max=\"5\" class=\"input-number browser-default cantSku cant";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" placeholder=\"Cantidad\" id=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-idpro=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                                    echo "\" data-colresumen=\"";
                                    if (($context["colorHex"] ?? null)) {
                                        echo ($context["colorHex"] ?? null);
                                    } else {
                                        echo "unico";
                                    }
                                    echo "\" data-foto=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\"  data-productname=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                                    echo "\" data-productid=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-price=\"\" xd=\"\" data-tipovariacion=\"";
                                    echo $this->getAttribute($context["skub"], "Var_Nombre", array());
                                    echo "\" data-color=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_Color", array());
                                    echo "\" data-variacion=\"";
                                    echo $this->getAttribute($context["skub"], "Vao_Nombre", array());
                                    echo "\" data-img=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\" data-unidad=\"";
                                    echo $this->getAttribute($context["skub"], "Unm_Nombre", array());
                                    echo "\" data-dispo=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-idtienda=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array());
                                    echo "\" data-minventa=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-preciounit=\"\" data-documento=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array());
                                    echo "\" onkeydown=\"javascript: return event.keyCode == 69 ? false : true\" readonly>
                                          <div class=\"input-group-button\">
                                            <span class=\"input-number-increment\">+</span>
                                          </div>
                                        </div>
                                  ";
                                } else {
                                    // line 318
                                    echo "                                    ";
                                    $context["break"] = false;
                                    echo " 
                                  ";
                                }
                                // line 319
                                echo " 
                              ";
                                // line 320
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 321
                                echo "                              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 322
                        echo "                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 327
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 329
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 334
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 335
                echo "              ";
            }
            // line 336
            echo "              </div>
                <div class=\"row sinPadding bottom0\" style=\"margin-bottom: 0px;\">
                  <div class=\"col l6 sinPadding center\">
                    <a class=\"btn-large add_cart green\" data-totalc=\"";
            // line 339
            echo ($context["totalc"] ?? null);
            echo "\" data-pmin=\"";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo "\"><i class=\"material-icons left\">shopping_cart</i>COMPRAR</a>
                  </div> 
                  <div class=\"col l6 right-align sinPadding\">
                    <p><span class=\"totalPro fontA\">0</span> UNID</p>
                    <p class=\"fontC\">S/<span class=\"totalPago negrita\">0</span></p>
                  </div>
                  ";
            // line 345
            if ((twig_length_filter($this->env, ($context["SKU"] ?? null)) >= 2)) {
                // line 346
                echo "                    <div class=\"col l12 center\">
                      <b class=\"red-text\">Tenga presente que puede variar los colores según disponibilidad</b>
                    </div>
                  ";
            }
            // line 350
            echo "                </div>
              </div>
              
            </div>
          </div>
          <div class=\"col l12 hide\">
            <div class=\"card\">
              <div class=\"card-content\">
                <div class=\"row\">
                <div class=\"col s12 center\">
                  <span class=\"fontD \">s/ ";
            // line 360
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x mayor</span>
                </div>                
                <div class=\"col s12 center\">
                  ";
            // line 363
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo " <br>
                    <p class=\"fontA\">FECHA DE LLEGADA DE LA MERCANCÍA ";
                // line 364
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_FechaPreventa", array());
                echo " </p> <br>
                  ";
            }
            // line 366
            echo "                </div>
                  <div class=\"card-badge\"><a class=\"white-text\">";
            // line 367
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo "PRE-VENTA";
            } else {
                echo "<b>OFERTA</b>";
            }
            echo "</a></div>
";
            // line 371
            echo "                  <div class=\"col s12 \"><br>
                   <span class=\"grey-text\"><i class=\"material-icons green-text left\">shopping_bag</i>";
            // line 372
            $context["vent"] = (0.5 * $this->getAttribute(($context["producto"] ?? null), "Pro_Vista", array()));
            if ((($context["vent"] ?? null) > 1)) {
                echo twig_round(($context["vent"] ?? null));
                echo "</text> Ventas";
            } else {
                echo "&nbsp;";
            }
            echo "</span>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    ";
        } else {
            // line 379
            echo "      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-image\">
              <div class=\"wrapperSliderImgMobile transition\">
                <div class=\"sliderMobile \">
                  ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
                // line 385
                echo "                    ";
                if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                    // line 386
                    echo "                      ";
                    if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                        // line 387
                        echo "                        <div>
                          <img alt=\"";
                        // line 388
                        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                        echo " al pormayor\" class=\"redondeo centrarForzado\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["fot"], "Prf_Img", array());
                        echo "\">
                        </div>
                      ";
                    }
                    // line 391
                    echo "                    ";
                }
                // line 392
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "                </div>
              </div>
          </div>
          <div class=\"card-content\">     
                <div class=\"row\">
                  <div class=\"col s12 center\"><br>
                     <a class=\"btn-large fontD pormayor black-text\" >S/ ";
            // line 399
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x mayor</a><br>
                    ";
            // line 401
            echo "                  </div>
                </div>             
              ";
            // line 403
            if (((($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 12) && ($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 2)) && ($this->getAttribute(($context["producto"] ?? null), "Suc_IdSubCategoria", array()) != 41))) {
                // line 404
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 405
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 406
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 407
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s5 right-align\">
                        <div class=\"positionRelative\">
                        ";
                        // line 417
                        echo "                          ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 418
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 420
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 422
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col s7 valign-wrapper filaCant";
                        // line 425
                        echo $context["key"];
                        echo "\">
                        <div class=\"input-group input-number-group\">
                          <div class=\"input-group-button\">
                            <span class=\"input-number-decrement\">-</span>
                          </div>
                          ";
                        // line 430
                        $context["count"] = 0;
                        // line 431
                        echo "                          ";
                        $context["break"] = false;
                        // line 432
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                              ";
                                // line 433
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 434
                                    echo "                                  <input type=\"number\" min=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["precios"] ?? null), 0, array(), "array"), "Prp_Desde", array());
                                    echo "\" name=\"cantidad\" value=\"0\" max=\"5\" class=\"input-number browser-default cantSku cant";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" placeholder=\"Cantidad\" id=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-idpro=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                                    echo "\" data-colresumen=\"";
                                    if (($context["colorHex"] ?? null)) {
                                        echo ($context["colorHex"] ?? null);
                                    } else {
                                        echo "unico";
                                    }
                                    echo "\" data-foto=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\"  data-productname=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                                    echo "\" data-productid=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-price=\"\" xd=\"\" data-tipovariacion=\"";
                                    echo $this->getAttribute($context["skub"], "Var_Nombre", array());
                                    echo "\" data-color=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_Color", array());
                                    echo "\" data-variacion=\"";
                                    echo $this->getAttribute($context["skub"], "Vao_Nombre", array());
                                    echo "\" data-img=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\" data-unidad=\"";
                                    echo $this->getAttribute($context["skub"], "Unm_Nombre", array());
                                    echo "\" data-dispo=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-idtienda=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array());
                                    echo "\" data-minventa=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-preciounit=\"\" data-documento=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array());
                                    echo "\" onkeydown=\"javascript: return event.keyCode == 69 ? false : true\" readonly>
                              ";
                                } else {
                                    // line 436
                                    echo "                                ";
                                    $context["break"] = false;
                                    echo " 
                              ";
                                }
                                // line 437
                                echo " 
                          ";
                                // line 438
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 439
                                echo "                          ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 440
                        echo "                          <div class=\"input-group-button\">
                            <span class=\"input-number-increment\">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 447
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 449
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 454
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 455
                echo "            ";
            } else {
                // line 456
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 457
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 458
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 459
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col S5 right-align\">
                        <div class=\"positionRelative\">
                         ";
                        // line 469
                        echo "                          ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 470
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 472
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 474
                        echo "                        ";
                        $context["colorUnico"] = "";
                        // line 475
                        echo "                        ";
                        $context["colorHex"] = "";
                        // line 476
                        echo "                        ";
                        $context["break"] = false;
                        // line 477
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 478
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 479
                                    echo "                            ";
                                    // line 480
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 481
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 482
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 483
                                    echo "                          ";
                                }
                                // line 484
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 485
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col s7\">
                        <div class=\"row\">
                          <div class=\"col s12 sinPadding\">
                          </div>
                            ";
                        // line 492
                        $context["count"] = 0;
                        // line 493
                        echo "                            ";
                        $context["break"] = false;
                        // line 494
                        echo "                          <div class=\"col l12 sinPadding  centrarForzado row filaCant";
                        echo $context["key"];
                        echo "\">
                              ";
                        // line 495
                        $context["count"] = 0;
                        // line 496
                        echo "                              ";
                        $context["break"] = false;
                        // line 497
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                                  ";
                                // line 498
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 499
                                    echo "                                      <span class=\"fontB2\" for=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\">Talla ";
                                    echo $this->getAttribute($context["skub"], "Vao_Nombre", array());
                                    echo "</span>
                                        <div class=\"input-group input-number-group\">
                                          <div class=\"input-group-button\">
                                            <span class=\"input-number-decrement\">-</span>
                                          </div>
                                            <input type=\"number\" min=\"";
                                    // line 504
                                    echo $this->getAttribute($this->getAttribute(($context["precios"] ?? null), 0, array(), "array"), "Prp_Desde", array());
                                    echo "\" name=\"cantidad\" value=\"0\" max=\"5\" class=\"input-number browser-default cantSku cant";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" placeholder=\"Cantidad\" id=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-idpro=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                                    echo "\" data-colresumen=\"";
                                    if (($context["colorHex"] ?? null)) {
                                        echo ($context["colorHex"] ?? null);
                                    } else {
                                        echo "unico";
                                    }
                                    echo "\" data-foto=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\"  data-productname=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                                    echo "\" data-productid=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_IdSku", array());
                                    echo "\" data-price=\"\" xd=\"\" data-tipovariacion=\"";
                                    echo $this->getAttribute($context["skub"], "Var_Nombre", array());
                                    echo "\" data-color=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_Color", array());
                                    echo "\" data-variacion=\"";
                                    echo $this->getAttribute($context["skub"], "Vao_Nombre", array());
                                    echo "\" data-img=\"";
                                    echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                                    echo "\" data-unidad=\"";
                                    echo $this->getAttribute($context["skub"], "Unm_Nombre", array());
                                    echo "\" data-dispo=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-idtienda=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array());
                                    echo "\" data-minventa=\"";
                                    echo $this->getAttribute($context["skub"], "SKU_StockDisponible", array());
                                    echo "\" data-preciounit=\"\" data-documento=\"";
                                    echo $this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array());
                                    echo "\" onkeydown=\"javascript: return event.keyCode == 69 ? false : true\" readonly>
                                          <div class=\"input-group-button\">
                                            <span class=\"input-number-increment\">+</span>
                                          </div>
                                        </div>
                                  ";
                                } else {
                                    // line 510
                                    echo "                                    ";
                                    $context["break"] = false;
                                    echo " 
                                  ";
                                }
                                // line 511
                                echo " 
                              ";
                                // line 512
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 513
                                echo "                              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 514
                        echo "                          </div>
                        </div>
                      </div>
                    </div>
                                    ";
                    } else {
                        // line 519
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 521
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 526
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 527
                echo "            ";
            }
            // line 528
            echo "              <div class=\"row pormayorUnico\">
                  <div class=\"col s6 sinPadding center\">
                    <span class=\"totalPro fontC\">0</span> UNID
                  </div>
                  <div class=\"col s6 sinPadding center\">
                    <span class=\"fontC white-text\"><b>S/<span class=\"totalPago white-text\">0</span></b></span>
                  </div>
                  <div class=\"col s12 sinPadding\">
                    <a  class=\"btn-large green add_cart anchoTotal\"  data-totalc=\"";
            // line 536
            echo ($context["totalc"] ?? null);
            echo "\" data-pmin=\"";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo "\">COMPRAR</a>
                  </div>
                <div class=\"col s12 center\">
                  ";
            // line 539
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo " <br>
                    <p class=\"fontA\">FECHA DE LLEGADA DE LA MERCANCÍA ";
                // line 540
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_FechaPreventa", array());
                echo " </p> <br>
                  ";
            }
            // line 542
            echo "                </div>
";
            // line 546
            echo "              </div>         
          </div>
        </div>
      </div>
    ";
        }
        // line 551
        echo "    </div>
        <div class=\"row\">
          <div class=\"col s12 ";
        // line 553
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Video", array())) {
            echo "l6";
        } else {
            echo "l12";
        }
        echo " white\">
            <div class=\"col s12\">
              <ul class=\"tabs\">
                <li class=\"tab col s3\"><a class=\"active\" href=\"#dPro\">Detalle del producto</a></li>
                <li class=\"tab col s3\"><a href=\"#cPro\">Caracteristicas</a></li>
              </ul>
            </div>
            <div id=\"dPro\" class=\"col s12\">";
        // line 560
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Descripcion", array());
        echo "</div>
            <div id=\"cPro\" class=\"col s12\">
              <table class=\"striped\" style=\"table-layout: fixed\">
                <thead class=\"\">
                  <tr>
                    <th width=\"40\"></th>
                    <th width=\"60\"></th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 570
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Marca", array())) {
            // line 571
            echo "                    <tr>
                      <td class=\"enfasisB\">Marca</td>
                      <td>";
            // line 573
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Marca", array()));
            echo "</td>
                    </tr>
                  ";
        }
        // line 576
        echo "                  ";
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Garantia", array())) {
            // line 577
            echo "                    <tr>
                      <td class=\"enfasisB\">Garantía</td>
                      <td>";
            // line 579
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Garantia", array()));
            echo "</td>
                    </tr>
                  ";
        }
        // line 582
        echo "                  ";
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_EdoGarantia", array())) {
            // line 583
            echo "                    <tr>
                      <td class=\"enfasisB\">Estado Producto</td>
                      <td>";
            // line 585
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_EdoGarantia", array()));
            echo "</td>
                    </tr>
                  ";
        }
        // line 588
        echo "                  <tr>
                    <td  class=\"enfasisB\">Colores</td>
                    <td >
                      ";
        // line 591
        $context["arrayColores"] = array();
        // line 592
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 593
            echo "                        ";
            if (($this->getAttribute($context["col"], "producto_Pro_IdProducto", array()) == $this->getAttribute(($context["pro"] ?? null), "Pro_IdProducto", array()))) {
                // line 594
                echo "                         ";
                if (!twig_in_filter($this->getAttribute($context["col"], "Col_Hex", array()), ($context["arrayColores"] ?? null))) {
                    // line 595
                    echo "                         ";
                    $context["arrayColores"] = twig_array_merge(($context["arrayColores"] ?? null), array(0 => $this->getAttribute($context["col"], "Col_Hex", array())));
                    // line 596
                    echo "                            ";
                    echo twig_title_string_filter($this->env, $this->getAttribute($context["col"], "Col_Nombre", array()));
                    echo ", 
                         ";
                }
                // line 598
                echo "                        ";
            }
            // line 599
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 600
        echo "                      ";
        if (twig_test_empty(($context["arrayColores"] ?? null))) {
            // line 601
            echo "                        <span class=\"flow-text notFlow enfasisB\"><i>Producto único</i></span>
                      ";
        }
        // line 603
        echo "                    </td>
                  </tr>
                  ";
        // line 605
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array())) {
            // line 606
            echo "                    <tr>
                      <td  class=\"enfasisB\">Documento pago</td>
                      <td >
                        ";
            // line 609
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array()) == 1)) {
                // line 610
                echo "                          Boleta
                        ";
            } elseif (($this->getAttribute(            // line 611
($context["producto"] ?? null), "Pro_Documento", array()) == 2)) {
                echo " Boleta o Factura ";
            }
            // line 612
            echo "                      </td>
                    </tr>
                  ";
        }
        // line 615
        echo "                  ";
        if (($context["producto_ficha"] ?? null)) {
            // line 616
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array())) {
                // line 617
                echo "                      <tr>
                        <td class=\"enfasisB\">Dimensiones <br>(largo x ancho x alto)</td>
                        <td>";
                // line 619
                echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array()));
                echo "</td>
                      </tr>
                    ";
            }
            // line 622
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo2", array())) {
                // line 623
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 624
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "¿Qué contiene la caja? ";
                } else {
                    echo " Peso ";
                }
                echo "</td>
                        <td>";
                // line 625
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo2", array()));
                } else {
                    echo " ";
                    echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo2", array()));
                    echo " Kg. ";
                }
                echo "</td>
                      </tr>
                    ";
            }
            // line 628
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array())) {
                // line 629
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 630
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "Peso ";
                } else {
                    echo " Material ";
                }
                echo "</td>
                        <td>";
                // line 631
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array()));
                    echo " Kg.";
                } else {
                    echo " ";
                    echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array()));
                }
                echo "</td>
                      </tr>
                    ";
            }
            // line 634
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo4", array())) {
                // line 635
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 636
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "Potencia ";
                } else {
                    echo " Uso ";
                }
                echo "</td>
                        <td>";
                // line 637
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo4", array()));
                    echo " ws. ";
                } else {
                    echo " ";
                    echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo4", array()));
                }
                echo "</td>
                      </tr>
                    ";
            }
            // line 640
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo5", array())) {
                // line 641
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 642
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "Material ";
                } else {
                    echo " Observaciones ";
                }
                echo "</td>
                        <td>";
                // line 643
                echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo5", array()));
                echo "</td>
                      </tr>
                    ";
            }
            // line 646
            echo "                  ";
        }
        // line 647
        echo "                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 651
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Video", array())) {
            // line 652
            echo "          <div class=\"col s12 l6\">
             
                  <div class=\"video-container\">
                    <iframe width=\"853\" height=\"480\" src=\"";
            // line 655
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Video", array());
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                  </div>
                
          </div>
          ";
        }
        // line 660
        echo "          <div class=\"col s12 l12\">
            <div class=\"row\">
              ";
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto_subcategoria"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 663
            echo "              <a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
                  <div class=\"col s12 m7 l3 black-text\">
                    <div class=\"card hoverable\">
                      <div class=\"center\" style=\"height:190px;\">
                        <img alt=\"";
            // line 667
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy\" data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
                      </div>
                      <div class=\"card-content center\" style=\"height:100px;\">
                        <p>
                          <b class=\"truncate\">";
            // line 671
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</b>
                            <span class=\"fontA\">S/ ";
            // line 672
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo "</span> <label>S/ ";
            echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
            echo "</label>
                        </p>
                      </div>
                    </div>
                  </div>
              </a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        echo "            </div>
          </div>
      </div>
  </main>
</div>

  ";
        // line 685
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 686
            echo "   ";
            // line 697
            echo "  ";
        }
        // line 698
        echo "  <!-- Aviso de agregado -->
  <div id=\"modal_aviso\" class=\"modal\">
    <div class=\"modal-content validar sinPadding white\">
      <a class=\"modal-close modal-close-custom right\"><i class=\"material-icons  closeIconA\">close</i></a>
      <h5 class=\"center centrarForzado white-text z-depth-2 green\">Agregado al carrito</h5>
      <div class=\"aviso_productos\">
        <div class=\"row\">
          <br>
          <div class=\"center col s12 m12 l12\">
            <img class=\"redondeo\" height=\"200px\" src=\"";
        // line 707
        echo ($context["ruta_img"] ?? null);
        echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
        echo "\"> 
          </div>
          <div class=\"center col s12 m12 l12\">
            <a class=\"btn pormayorUnico center verCarrito\" href=\"";
        // line 710
        echo base_url();
        echo "productos/carrito\">Ir al carrito</a>
            <a class=\"btn-flat center modal-close \"><u>Seguir comprando</u></a>
          </div>
        </div>
      </div> 
    </div>
  </div> 
";
    }

    // line 719
    public function block_script($context, array $blocks = array())
    {
        // line 720
        echo "  <script>
  rando_precio = ";
        // line 721
        echo twig_jsonencode_filter(($context["precios"] ?? null));
        echo ";
  flagVariaciones = false;
  dim = ";
        // line 723
        echo twig_jsonencode_filter($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array()));
        echo ";
  pes = ";
        // line 724
        echo twig_jsonencode_filter($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array()));
        echo "; 
  TiedaId = ";
        // line 725
        echo twig_jsonencode_filter($this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()));
        echo "; 
  Remate = ";
        // line 726
        echo twig_jsonencode_filter($this->getAttribute(($context["producto"] ?? null), "Pro_Saldo", array()));
        echo "; 
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/easyzoom-mp@2.2.2/dist/easyzoom.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
  <script src=\"";
        // line 731
        echo base_url("public/");
        echo "js/tienda/dpro.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
  <script src=\"";
        // line 732
        echo base_url("public/");
        echo "js/productos/favoritos.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "tienda/load/dp_20.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1665 => 732,  1659 => 731,  1651 => 726,  1647 => 725,  1643 => 724,  1639 => 723,  1634 => 721,  1631 => 720,  1628 => 719,  1616 => 710,  1609 => 707,  1598 => 698,  1595 => 697,  1593 => 686,  1591 => 685,  1583 => 679,  1568 => 672,  1564 => 671,  1552 => 667,  1538 => 663,  1534 => 662,  1530 => 660,  1522 => 655,  1517 => 652,  1515 => 651,  1509 => 647,  1506 => 646,  1500 => 643,  1492 => 642,  1489 => 641,  1486 => 640,  1474 => 637,  1466 => 636,  1463 => 635,  1460 => 634,  1448 => 631,  1440 => 630,  1437 => 629,  1434 => 628,  1422 => 625,  1414 => 624,  1411 => 623,  1408 => 622,  1402 => 619,  1398 => 617,  1395 => 616,  1392 => 615,  1387 => 612,  1383 => 611,  1380 => 610,  1378 => 609,  1373 => 606,  1371 => 605,  1367 => 603,  1363 => 601,  1360 => 600,  1354 => 599,  1351 => 598,  1345 => 596,  1342 => 595,  1339 => 594,  1336 => 593,  1331 => 592,  1329 => 591,  1324 => 588,  1318 => 585,  1314 => 583,  1311 => 582,  1305 => 579,  1301 => 577,  1298 => 576,  1292 => 573,  1288 => 571,  1286 => 570,  1273 => 560,  1259 => 553,  1255 => 551,  1248 => 546,  1245 => 542,  1240 => 540,  1236 => 539,  1228 => 536,  1218 => 528,  1215 => 527,  1209 => 526,  1201 => 521,  1197 => 519,  1190 => 514,  1183 => 513,  1181 => 512,  1178 => 511,  1172 => 510,  1127 => 504,  1116 => 499,  1114 => 498,  1106 => 497,  1103 => 496,  1101 => 495,  1096 => 494,  1093 => 493,  1091 => 492,  1082 => 485,  1075 => 484,  1072 => 483,  1069 => 482,  1066 => 481,  1063 => 480,  1061 => 479,  1058 => 478,  1052 => 477,  1049 => 476,  1046 => 475,  1043 => 474,  1037 => 472,  1033 => 470,  1030 => 469,  1025 => 459,  1022 => 458,  1020 => 457,  1013 => 456,  1010 => 455,  1004 => 454,  996 => 449,  992 => 447,  983 => 440,  976 => 439,  974 => 438,  971 => 437,  965 => 436,  923 => 434,  921 => 433,  913 => 432,  910 => 431,  908 => 430,  900 => 425,  895 => 422,  889 => 420,  885 => 418,  882 => 417,  877 => 407,  874 => 406,  872 => 405,  865 => 404,  863 => 403,  859 => 401,  855 => 399,  847 => 393,  841 => 392,  838 => 391,  829 => 388,  826 => 387,  823 => 386,  820 => 385,  816 => 384,  809 => 379,  793 => 372,  790 => 371,  782 => 367,  779 => 366,  774 => 364,  770 => 363,  764 => 360,  752 => 350,  746 => 346,  744 => 345,  733 => 339,  728 => 336,  725 => 335,  719 => 334,  711 => 329,  707 => 327,  700 => 322,  693 => 321,  691 => 320,  688 => 319,  682 => 318,  637 => 312,  626 => 307,  624 => 306,  616 => 305,  613 => 304,  611 => 303,  606 => 302,  603 => 301,  601 => 300,  592 => 293,  585 => 292,  582 => 291,  579 => 290,  576 => 289,  573 => 288,  571 => 287,  568 => 286,  562 => 285,  559 => 284,  556 => 283,  553 => 282,  547 => 280,  543 => 278,  540 => 277,  535 => 269,  532 => 268,  530 => 267,  523 => 266,  520 => 265,  514 => 264,  506 => 259,  502 => 257,  493 => 250,  486 => 249,  484 => 248,  481 => 247,  475 => 246,  431 => 244,  429 => 243,  421 => 242,  418 => 241,  416 => 240,  410 => 236,  406 => 234,  401 => 231,  394 => 230,  391 => 229,  388 => 228,  385 => 227,  382 => 226,  380 => 225,  377 => 224,  371 => 223,  368 => 222,  365 => 221,  362 => 220,  356 => 218,  352 => 216,  349 => 215,  344 => 207,  341 => 206,  339 => 205,  332 => 204,  330 => 203,  324 => 200,  313 => 191,  310 => 190,  304 => 189,  301 => 188,  291 => 184,  283 => 183,  280 => 182,  277 => 181,  274 => 180,  269 => 179,  260 => 175,  254 => 174,  251 => 173,  249 => 172,  245 => 170,  235 => 166,  230 => 165,  227 => 164,  218 => 160,  214 => 159,  211 => 158,  209 => 157,  203 => 153,  201 => 152,  188 => 148,  177 => 139,  174 => 138,  41 => 9,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/load/dp_20.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\tienda\\load\\dp_20.twig");
    }
}
