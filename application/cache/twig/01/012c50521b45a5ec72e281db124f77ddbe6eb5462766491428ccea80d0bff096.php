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
  <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 5
        echo base_url("public/intranet/css/inputnumber.css");
        echo "\"  media=\"screen\"/>
  <style type=\"text/css\">
    .btn-flat-not:hover{background-color: #21478F ;color: white !important;}
    .materialbox-caption{text-transform: uppercase;font-size: 1.5rem;}
    .sliderMobile .slick-list {padding:0px !important;}
    .sliderMobile .slick-dots li.slick-active button:before{font-size: 70px !important;opacity: 1;}
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
</style>
  
";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        // line 79
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
        // line 88
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
        // line 92
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 93
            echo "      <div class=\"col m6 l6\">
        <div class=\"card\" style=\"height:508.5px;\">
          <div class=\"card-content row sinPadding\">
            <div class=\"col l12 center\" id=\"imagenesPro\" >
              ";
            // line 97
            if (twig_test_empty(($context["fotos"] ?? null))) {
                // line 98
                echo "                <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails redondeo white\">
                  <a href=\"";
                // line 99
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\">
                    <img alt=\"";
                // line 100
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" class=\"containImg anchoTotal\"/>
                  </a>
                </div>
              ";
            } else {
                // line 104
                echo "                <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails redondeo white\">
                  <a href=\"";
                // line 105
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                echo "\">
                    <img alt=\"";
                // line 106
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                echo "\" class=\"containImg anchoTotal\"/>
                  </a>
                </div>
              ";
            }
            // line 110
            echo "              <div class=\"center\">
                <ul class=\"thumbnails\">
                  ";
            // line 112
            if (twig_test_empty(($context["fotos"] ?? null))) {
                // line 113
                echo "                    <li class=\"col\">
                      <a href=\"";
                // line 114
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" data-standard=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\">
                        <img alt=\"";
                // line 115
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" class=\"redondeo\" height=\"40\">
                      </a>
                    </li>
                  ";
            } else {
                // line 119
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
                    // line 120
                    echo "                        ";
                    if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                        // line 121
                        echo "                          ";
                        if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                            // line 122
                            echo "                          <li class=\"col\">
                            <a href=\"";
                            // line 123
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\" data-standard=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\">
                              <img alt=\"";
                            // line 124
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\" class=\"redondeo\" height=\"40\">
                            </a>
                          </li>
                          ";
                        }
                        // line 128
                        echo "                        ";
                    }
                    // line 129
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                  ";
            }
            // line 131
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
            // line 140
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x cajón</a><br>
            <span class=\"\">Compra a precio de cajón desde 1 unidad</span>
            <br>
            <span class=\"card-title\">Seleccione la variación de su producto</span>
            <div>
            ";
            // line 145
            if (((($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 12) && ($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 2)) && ($this->getAttribute(($context["producto"] ?? null), "Suc_IdSubCategoria", array()) != 41))) {
                // line 146
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 147
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 148
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 149
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col l5 right-align\">
                        <div class=\"positionRelative\">
                        ";
                        // line 157
                        echo "                          ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 158
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 160
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 162
                        echo "                        ";
                        $context["colorUnico"] = "";
                        // line 163
                        echo "                        ";
                        $context["colorHex"] = " ";
                        // line 164
                        echo "                        ";
                        $context["break"] = false;
                        // line 165
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 166
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 167
                                    echo "                            ";
                                    // line 168
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 169
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 170
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 171
                                    echo "                          ";
                                }
                                // line 172
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 173
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col l7 valign-wrapper filaCant";
                        // line 176
                        echo $context["key"];
                        echo "\">
                      ";
                        // line 178
                        echo "                        <div class=\"input-group input-number-group\">
                          <div class=\"input-group-button\">
                            <span class=\"input-number-decrement\">-</span>
                          </div>
                          ";
                        // line 182
                        $context["count"] = 0;
                        // line 183
                        echo "                          ";
                        $context["break"] = false;
                        // line 184
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                              ";
                                // line 185
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 186
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
                                    // line 188
                                    echo "                                ";
                                    $context["break"] = false;
                                    echo " 
                              ";
                                }
                                // line 189
                                echo " 
                          ";
                                // line 190
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 191
                                echo "                          ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 192
                        echo "                          <div class=\"input-group-button\">
                            <span class=\"input-number-increment\">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 199
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 201
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 206
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "              ";
            } else {
                // line 208
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 209
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 210
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 211
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col l5 right-align\">
                        <div class=\"positionRelative\">                          
                         ";
                        // line 219
                        echo "                        ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 220
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 222
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 224
                        echo "                        ";
                        $context["colorUnico"] = "";
                        // line 225
                        echo "                        ";
                        $context["colorHex"] = "";
                        // line 226
                        echo "                        ";
                        $context["break"] = false;
                        // line 227
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 228
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 229
                                    echo "                            ";
                                    // line 230
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 231
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 232
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 233
                                    echo "                          ";
                                }
                                // line 234
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 235
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col l7\">
                        <div class=\"row\">
                          <div class=\"col s12 l12 sinPadding \">
                          </div>
                            ";
                        // line 242
                        $context["count"] = 0;
                        // line 243
                        echo "                            ";
                        $context["break"] = false;
                        // line 244
                        echo "                          <div class=\"col l12 sinPadding  centrarForzado row filaCant";
                        echo $context["key"];
                        echo "\">
                              ";
                        // line 245
                        $context["count"] = 0;
                        // line 246
                        echo "                              ";
                        $context["break"] = false;
                        // line 247
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                                  ";
                                // line 248
                                if ((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array()))) {
                                    // line 249
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
                                    // line 254
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
                                    // line 260
                                    echo "                                    ";
                                    $context["break"] = false;
                                    echo " 
                                  ";
                                }
                                // line 261
                                echo " 
                              ";
                                // line 262
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 263
                                echo "                              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 264
                        echo "                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 269
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 271
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 276
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                echo "              ";
            }
            // line 278
            echo "              </div>
                <div class=\"row sinPadding bottom0\" style=\"margin-bottom: 0px;\">
                  <div class=\"col l6 sinPadding center\">
                    <a class=\"btn-large add_cart green\" data-totalc=\"";
            // line 281
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
            // line 287
            if ((twig_length_filter($this->env, ($context["SKU"] ?? null)) >= 2)) {
                // line 288
                echo "                    <div class=\"col l12 center\">
                      <b class=\"red-text\">Tenga presente que puede variar los colores según disponibilidad</b>
                    </div>
                  ";
            }
            // line 292
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
            // line 302
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x cajón</span>
                  <span class=\"\">Compra a precio de cajón desde 1 unidad</span>
                </div>                
                <div class=\"col s12 center\">
                  ";
            // line 306
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo " <br>
                    <p class=\"fontA\">FECHA DE LLEGADA DE LA MERCANCÍA ";
                // line 307
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_FechaPreventa", array());
                echo " </p> <br>
                  ";
            }
            // line 309
            echo "                </div>
                  <div class=\"card-badge\"><a class=\"white-text\">";
            // line 310
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo "PRE-VENTA";
            } else {
                echo "<b>OFERTA</b>";
            }
            echo "</a></div>
";
            // line 314
            echo "                  <div class=\"col s12 \"><br>
                   <span class=\"grey-text\"><i class=\"material-icons green-text left\">shopping_bag</i>";
            // line 315
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
            // line 322
            echo "      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-image\">
              <div class=\"wrapperSliderImgMobile transition\">
                <div class=\"sliderMobile \">
                  ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
                // line 328
                echo "                    ";
                if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                    // line 329
                    echo "                      ";
                    if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                        // line 330
                        echo "                        <div>
                          <img alt=\"";
                        // line 331
                        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                        echo " al pormayor\" class=\"redondeo centrarForzado\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["fot"], "Prf_Img", array());
                        echo "\">
                        </div>
                      ";
                    }
                    // line 334
                    echo "                    ";
                }
                // line 335
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            echo "                </div>
              </div>
          </div>
          <div class=\"card-content\">     
                <div class=\"row\">
                  <div class=\"col s12 center\"><br>
                     <a class=\"btn-large fontD pormayor black-text\" >S/ ";
            // line 342
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x cajón</a><br>
                                      <span class=\"\">Compra a precio de cajón desde 1 unidad</span>

                  </div>
                </div>             
              ";
            // line 347
            if (((($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 12) && ($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 2)) && ($this->getAttribute(($context["producto"] ?? null), "Suc_IdSubCategoria", array()) != 41))) {
                // line 348
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 349
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 350
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 351
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s5 right-align\">
                        <div class=\"positionRelative\">
                        ";
                        // line 361
                        echo "                          ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 362
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 364
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 366
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col s7 valign-wrapper filaCant";
                        // line 369
                        echo $context["key"];
                        echo "\">
                        <div class=\"input-group input-number-group\">
                          <div class=\"input-group-button\">
                            <span class=\"input-number-decrement\">-</span>
                          </div>
                          ";
                        // line 374
                        $context["count"] = 0;
                        // line 375
                        echo "                          ";
                        $context["break"] = false;
                        // line 376
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                              ";
                                // line 377
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 378
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
                                    // line 380
                                    echo "                                ";
                                    $context["break"] = false;
                                    echo " 
                              ";
                                }
                                // line 381
                                echo " 
                          ";
                                // line 382
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 383
                                echo "                          ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 384
                        echo "                          <div class=\"input-group-button\">
                            <span class=\"input-number-increment\">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 391
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 393
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 398
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 399
                echo "            ";
            } else {
                // line 400
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 401
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 402
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 403
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col S5 right-align\">
                        <div class=\"positionRelative\">
                         ";
                        // line 413
                        echo "                          ";
                        if ((($context["colorActual"] ?? null) == "")) {
                            // line 414
                            echo "                          <span class=\"fontA\">UNICO</span>  
                          ";
                        } else {
                            // line 416
                            echo "                          <span class=\"fontA\">";
                            echo ($context["colorActual"] ?? null);
                            echo "</span>
                          ";
                        }
                        // line 418
                        echo "                        ";
                        $context["colorUnico"] = "";
                        // line 419
                        echo "                        ";
                        $context["colorHex"] = "";
                        // line 420
                        echo "                        ";
                        $context["break"] = false;
                        // line 421
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 422
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 423
                                    echo "                            ";
                                    // line 424
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 425
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 426
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 427
                                    echo "                          ";
                                }
                                // line 428
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 429
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col s7\">
                        <div class=\"row\">
                          <div class=\"col s12 sinPadding\">
                          </div>
                            ";
                        // line 436
                        $context["count"] = 0;
                        // line 437
                        echo "                            ";
                        $context["break"] = false;
                        // line 438
                        echo "                          <div class=\"col l12 sinPadding  centrarForzado row filaCant";
                        echo $context["key"];
                        echo "\">
                              ";
                        // line 439
                        $context["count"] = 0;
                        // line 440
                        echo "                              ";
                        $context["break"] = false;
                        // line 441
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                                  ";
                                // line 442
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 443
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
                                    // line 448
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
                                    // line 454
                                    echo "                                    ";
                                    $context["break"] = false;
                                    echo " 
                                  ";
                                }
                                // line 455
                                echo " 
                              ";
                                // line 456
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 457
                                echo "                              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 458
                        echo "                          </div>
                        </div>
                      </div>
                    </div>
                                    ";
                    } else {
                        // line 463
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center grey\">
                        <b class=\"fontA\">";
                        // line 465
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 470
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 471
                echo "            ";
            }
            // line 472
            echo "              <div class=\"row pormayorUnico\">
                  <div class=\"col s6 sinPadding center\">
                    <span class=\"totalPro fontC\">0</span> UNID
                  </div>
                  <div class=\"col s6 sinPadding center\">
                    <span class=\"fontC white-text\"><b>S/<span class=\"totalPago white-text\">0</span></b></span>
                  </div>
                  <div class=\"col s12 sinPadding\">
                    <a  class=\"btn-large green add_cart anchoTotal\"  data-totalc=\"";
            // line 480
            echo ($context["totalc"] ?? null);
            echo "\" data-pmin=\"";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo "\">COMPRAR</a>
                  </div>
                <div class=\"col s12 center\">
                  ";
            // line 483
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo " <br>
                    <p class=\"fontA\">FECHA DE LLEGADA DE LA MERCANCÍA ";
                // line 484
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_FechaPreventa", array());
                echo " </p> <br>
                  ";
            }
            // line 486
            echo "                </div>
";
            // line 490
            echo "              </div>         
          </div>
        </div>
      </div>
    ";
        }
        // line 495
        echo "    </div>
        <div class=\"row\">
          <div class=\"col s12 white\">
            <div class=\"col s12\">
              <ul class=\"tabs\">
                <li class=\"tab col s3\"><a class=\"active\" href=\"#dPro\">Detalle del producto</a></li>
                ";
        // line 502
        echo "              </ul>
            </div>
            <div id=\"dPro\" class=\"col s12\">";
        // line 504
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Descripcion", array());
        echo " <br>Visualizaciones: ";
        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Vista", array());
        echo "</div>
";
        // line 594
        echo "          </div>
          ";
        // line 595
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Video", array())) {
            // line 596
            echo "          <div class=\"col s12 l6\">             
            <div class=\"video-container\">
              <blockquote class=\"tiktok-embed\" cite=\"https://www.tiktok.com/@pormayor.pe/video/7133319483250265350\" data-video-id=\"7133319483250265350\" style=\"max-width: 605px;min-width: 325px;\" > <section> <a target=\"_blank\" title=\"@pormayor.pe\" href=\"https://www.tiktok.com/@pormayor.pe?refer=embed\">@pormayor.pe</a> Espejo y organizador a la vez y como extra viene con LED. Perfecto para decorar tu dormitorio. 😍. <a title=\"espejo\" target=\"_blank\" href=\"https://www.tiktok.com/tag/espejo?refer=embed\">#espejo</a> <a title=\"organizador\" target=\"_blank\" href=\"https://www.tiktok.com/tag/organizador?refer=embed\">#organizador</a> <a title=\"led\" target=\"_blank\" href=\"https://www.tiktok.com/tag/led?refer=embed\">#led</a> <a title=\"pormayor\" target=\"_blank\" href=\"https://www.tiktok.com/tag/pormayor?refer=embed\">#pormayor</a> <a title=\"pormayorpe\" target=\"_blank\" href=\"https://www.tiktok.com/tag/pormayorpe?refer=embed\">#pormayorpe</a> <a title=\"pormayorperu\" target=\"_blank\" href=\"https://www.tiktok.com/tag/pormayorperu?refer=embed\">#pormayorperu</a> <a title=\"ecommerce\" target=\"_blank\" href=\"https://www.tiktok.com/tag/ecommerce?refer=embed\">#ecommerce</a> <a title=\"ecommerceperuano\" target=\"_blank\" href=\"https://www.tiktok.com/tag/ecommerceperuano?refer=embed\">#ecommerceperuano</a> <a title=\"ecommercemayorista\" target=\"_blank\" href=\"https://www.tiktok.com/tag/ecommercemayorista?refer=embed\">#ecommercemayorista</a> <a title=\"novedades\" target=\"_blank\" href=\"https://www.tiktok.com/tag/novedades?refer=embed\">#novedades</a> <a title=\"novedadeschinas\" target=\"_blank\" href=\"https://www.tiktok.com/tag/novedadeschinas?refer=embed\">#novedadeschinas</a> <a title=\"kawai\" target=\"_blank\" href=\"https://www.tiktok.com/tag/kawai?refer=embed\">#kawai</a> <a title=\"emprendimiento\" target=\"_blank\" href=\"https://www.tiktok.com/tag/emprendimiento?refer=embed\">#emprendimiento</a> <a title=\"alpormayor\" target=\"_blank\" href=\"https://www.tiktok.com/tag/alpormayor?refer=embed\">#alpormayor</a> <a target=\"_blank\" title=\"♬ sonido original - Alan Muñoz\" href=\"https://www.tiktok.com/music/sonido-original-7107032119439887109?refer=embed\">♬ sonido original - Alan Muñoz</a> </section> </blockquote> <script async src=\"https://www.tiktok.com/embed.js\"></script>
              ";
            // line 600
            echo "            </div>                
          </div>
          ";
        }
        // line 603
        echo "          <div class=\"col s12 l12\">
            <div class=\"row\">
              ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto_subcategoria"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 606
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
            // line 610
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
            // line 614
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</b>
                            <span class=\"fontA\">S/ ";
            // line 615
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
        // line 622
        echo "            </div>
          </div>
      </div>
  </main>
</div>

  ";
        // line 628
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 629
            echo "   ";
            // line 640
            echo "  ";
        }
        // line 641
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
        // line 650
        echo ($context["ruta_img"] ?? null);
        echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
        echo "\"> 
          </div>
          <div class=\"center col s12 m12 l12\">
            <a class=\"btn pormayorUnico center verCarrito\" href=\"";
        // line 653
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

    // line 662
    public function block_script($context, array $blocks = array())
    {
        // line 663
        echo "  <script>
  rando_precio = ";
        // line 664
        echo twig_jsonencode_filter(($context["precios"] ?? null));
        echo ";
  flagVariaciones = false;
  dim = ";
        // line 666
        echo twig_jsonencode_filter($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array()));
        echo ";
  pes = ";
        // line 667
        echo twig_jsonencode_filter($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array()));
        echo "; 
  TiedaId = ";
        // line 668
        echo twig_jsonencode_filter($this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()));
        echo "; 
  Remate = ";
        // line 669
        echo twig_jsonencode_filter($this->getAttribute(($context["producto"] ?? null), "Pro_Saldo", array()));
        echo "; 
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/easyzoom-mp@2.2.2/dist/easyzoom.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
  <script src=\"";
        // line 674
        echo base_url("public/");
        echo "js/tienda/dpro.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
  <script src=\"";
        // line 675
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
        return array (  1366 => 675,  1360 => 674,  1352 => 669,  1348 => 668,  1344 => 667,  1340 => 666,  1335 => 664,  1332 => 663,  1329 => 662,  1317 => 653,  1310 => 650,  1299 => 641,  1296 => 640,  1294 => 629,  1292 => 628,  1284 => 622,  1269 => 615,  1265 => 614,  1253 => 610,  1239 => 606,  1235 => 605,  1231 => 603,  1226 => 600,  1221 => 596,  1219 => 595,  1216 => 594,  1210 => 504,  1206 => 502,  1198 => 495,  1191 => 490,  1188 => 486,  1183 => 484,  1179 => 483,  1171 => 480,  1161 => 472,  1158 => 471,  1152 => 470,  1144 => 465,  1140 => 463,  1133 => 458,  1126 => 457,  1124 => 456,  1121 => 455,  1115 => 454,  1070 => 448,  1059 => 443,  1057 => 442,  1049 => 441,  1046 => 440,  1044 => 439,  1039 => 438,  1036 => 437,  1034 => 436,  1025 => 429,  1018 => 428,  1015 => 427,  1012 => 426,  1009 => 425,  1006 => 424,  1004 => 423,  1001 => 422,  995 => 421,  992 => 420,  989 => 419,  986 => 418,  980 => 416,  976 => 414,  973 => 413,  968 => 403,  965 => 402,  963 => 401,  956 => 400,  953 => 399,  947 => 398,  939 => 393,  935 => 391,  926 => 384,  919 => 383,  917 => 382,  914 => 381,  908 => 380,  866 => 378,  864 => 377,  856 => 376,  853 => 375,  851 => 374,  843 => 369,  838 => 366,  832 => 364,  828 => 362,  825 => 361,  820 => 351,  817 => 350,  815 => 349,  808 => 348,  806 => 347,  798 => 342,  790 => 336,  784 => 335,  781 => 334,  772 => 331,  769 => 330,  766 => 329,  763 => 328,  759 => 327,  752 => 322,  736 => 315,  733 => 314,  725 => 310,  722 => 309,  717 => 307,  713 => 306,  706 => 302,  694 => 292,  688 => 288,  686 => 287,  675 => 281,  670 => 278,  667 => 277,  661 => 276,  653 => 271,  649 => 269,  642 => 264,  635 => 263,  633 => 262,  630 => 261,  624 => 260,  579 => 254,  568 => 249,  566 => 248,  558 => 247,  555 => 246,  553 => 245,  548 => 244,  545 => 243,  543 => 242,  534 => 235,  527 => 234,  524 => 233,  521 => 232,  518 => 231,  515 => 230,  513 => 229,  510 => 228,  504 => 227,  501 => 226,  498 => 225,  495 => 224,  489 => 222,  485 => 220,  482 => 219,  477 => 211,  474 => 210,  472 => 209,  465 => 208,  462 => 207,  456 => 206,  448 => 201,  444 => 199,  435 => 192,  428 => 191,  426 => 190,  423 => 189,  417 => 188,  373 => 186,  371 => 185,  363 => 184,  360 => 183,  358 => 182,  352 => 178,  348 => 176,  343 => 173,  336 => 172,  333 => 171,  330 => 170,  327 => 169,  324 => 168,  322 => 167,  319 => 166,  313 => 165,  310 => 164,  307 => 163,  304 => 162,  298 => 160,  294 => 158,  291 => 157,  286 => 149,  283 => 148,  281 => 147,  274 => 146,  272 => 145,  264 => 140,  253 => 131,  250 => 130,  244 => 129,  241 => 128,  231 => 124,  223 => 123,  220 => 122,  217 => 121,  214 => 120,  209 => 119,  200 => 115,  194 => 114,  191 => 113,  189 => 112,  185 => 110,  175 => 106,  170 => 105,  167 => 104,  158 => 100,  154 => 99,  151 => 98,  149 => 97,  143 => 93,  141 => 92,  128 => 88,  117 => 79,  114 => 78,  37 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
