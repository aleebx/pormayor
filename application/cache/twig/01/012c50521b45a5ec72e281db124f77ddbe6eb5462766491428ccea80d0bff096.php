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
            <a href=\"//pormayor.pe/categorias/";
        // line 148
        echo $this->getAttribute(($context["producto"] ?? null), "urlCategoria", array());
        echo "\" class=\"pormayorUnico-text breadcrumb\">";
        echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Cat_Nombre", array()));
        echo "</a>
            <a href=\"//pormayor.pe/subcategoria/";
        // line 149
        echo $this->getAttribute(($context["producto"] ?? null), "urlSubCategoria", array());
        echo "\" class=\"centrarForzado pormayorUnico-text breadcrumb\">";
        echo $this->getAttribute(($context["producto"] ?? null), "Suc_Nombre", array());
        echo "</a>
            <a href=\"//pormayor.pe/detalle/";
        // line 150
        echo $this->getAttribute(($context["producto"] ?? null), "urlDetalle", array());
        echo "\" class=\"centrarForzado pormayorUnico-text breadcrumb\">";
        echo $this->getAttribute(($context["producto"] ?? null), "Des_Nombre", array());
        echo "</a>
            <h4 class=\"centrarForzado muayuscula\">";
        // line 151
        echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array()));
        echo " ";
        if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
            echo " (PRE-VENTA) <span class=\"new badge blue\">PRE-VENTA</span> ";
        }
        echo "<small>COD: ";
        echo $this->getAttribute(($context["pro"] ?? null), "Pro_IdProducto", array());
        echo "</small></h4>
          </div>
        </div>
      </div>
      ";
        // line 155
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 156
            echo "      <div class=\"col l4\">
        <div class=\"card\" style=\"height:508.5px;\">
          <div class=\"card-content row sinPadding\">
            <div class=\"col l12 center\" id=\"imagenesPro\" >
              ";
            // line 160
            if (twig_test_empty(($context["fotos"] ?? null))) {
                // line 161
                echo "                <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails redondeo white\">
                  <a href=\"";
                // line 162
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\">
                    <img alt=\"";
                // line 163
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" class=\"containImg anchoTotal\"/>
                  </a>
                </div>
              ";
            } else {
                // line 167
                echo "                <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails redondeo white\">
                  <a href=\"";
                // line 168
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                echo "\">
                    <img alt=\"";
                // line 169
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
                echo "\" class=\"containImg anchoTotal\"/>
                  </a>
                </div>
              ";
            }
            // line 173
            echo "              <div class=\"center\">
                <ul class=\"thumbnails\">
                  ";
            // line 175
            if (twig_test_empty(($context["fotos"] ?? null))) {
                // line 176
                echo "                    <li class=\"col\">
                      <a href=\"";
                // line 177
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" data-standard=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\">
                        <img alt=\"";
                // line 178
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                echo " al pormayor\" src=\"";
                echo ($context["ruta_img"] ?? null);
                echo "pronoimg.webp\" class=\"redondeo\" height=\"40\">
                      </a>
                    </li>
                  ";
            } else {
                // line 182
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
                    // line 183
                    echo "                        ";
                    if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                        // line 184
                        echo "                          ";
                        if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                            // line 185
                            echo "                          <li class=\"col\">
                            <a href=\"";
                            // line 186
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\" data-standard=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\">
                              <img alt=\"";
                            // line 187
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["fot"], "Prf_Img", array());
                            echo "\" class=\"redondeo\" height=\"40\">
                            </a>
                          </li>
                          ";
                        }
                        // line 191
                        echo "                        ";
                    }
                    // line 192
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 193
                echo "                  ";
            }
            // line 194
            echo "                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>      
      <div class=\"col l4\">
        <div class=\"card\">          
          <div class=\"card-content\" style=\"padding: 24px 24px 21px 24px;\">
            <span class=\"card-title\">Opciones</span>
            <div style=\"max-height:325px; overflow-y:auto;\">
            ";
            // line 205
            if (((($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 12) && ($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 2)) && ($this->getAttribute(($context["producto"] ?? null), "Suc_IdSubCategoria", array()) != 41))) {
                // line 206
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 207
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 208
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 209
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col l5 left-align\">
                        <div class=\"positionRelative\">
                          ";
                        // line 212
                        if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                            // line 213
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\" materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "nofoto.png\" >
                          ";
                        } elseif ((($this->getAttribute(                        // line 214
$context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                            // line 215
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\" materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                            echo "\" >
                          ";
                        } else {
                            // line 217
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" data-nom=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "\" class=\" materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["sku"], "SKU_Img", array());
                            echo "\" >
                          ";
                        }
                        // line 219
                        echo "                          <label>";
                        echo ($context["colorActual"] ?? null);
                        echo "</label>
                        ";
                        // line 220
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
                        <div class=\"input-group input-number-group\">
                          <div class=\"input-group-button\">
                            <span class=\"input-number-decrement\">-</span>
                          </div>
                          ";
                        // line 239
                        $context["count"] = 0;
                        // line 240
                        echo "                          ";
                        $context["break"] = false;
                        // line 241
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                              ";
                                // line 242
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 243
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
                                    if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo "nofoto.png";
                                    } elseif ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    } else {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute($context["sku"], "SKU_Img", array());
                                    }
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
                                    if ($this->getAttribute($context["skub"], "SKU_Img", array())) {
                                        echo $this->getAttribute($context["skub"], "SKU_Img", array());
                                    } else {
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    }
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
                                    // line 245
                                    echo "                                ";
                                    $context["break"] = false;
                                    echo " 
                              ";
                                }
                                // line 246
                                echo " 
                          ";
                                // line 247
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 248
                                echo "                          ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 249
                        echo "                          <div class=\"input-group-button\">
                            <span class=\"input-number-increment\">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 256
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center red\">
                        <b class=\"fontA\">";
                        // line 258
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 263
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 264
                echo "              ";
            } else {
                // line 265
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 266
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 267
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 268
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col l5 left-align\">
                        <div class=\"positionRelative\">
                          ";
                        // line 271
                        if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                            // line 272
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\"materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "nofoto.png\" >
                          ";
                        } elseif ((($this->getAttribute(                        // line 273
$context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                            // line 274
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\"materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                            echo "\" >
                          ";
                        } else {
                            // line 276
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" data-nom=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "\" class=\"materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["sku"], "SKU_Img", array());
                            echo "\" >
                          ";
                        }
                        // line 278
                        echo "                          <label>";
                        echo ($context["colorActual"] ?? null);
                        echo "</label>
                        ";
                        // line 279
                        $context["colorUnico"] = "";
                        // line 280
                        echo "                        ";
                        $context["colorHex"] = "";
                        // line 281
                        echo "                        ";
                        $context["break"] = false;
                        // line 282
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 283
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 284
                                    echo "                            ";
                                    // line 285
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 286
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 287
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 288
                                    echo "                          ";
                                }
                                // line 289
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 290
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col l7\">
                        <div class=\"row\">
                          <div class=\"col s12 l12 sinPadding \">
                          </div>
                            ";
                        // line 297
                        $context["count"] = 0;
                        // line 298
                        echo "                            ";
                        $context["break"] = false;
                        // line 299
                        echo "                          <div class=\"col l12 sinPadding  centrarForzado row filaCant";
                        echo $context["key"];
                        echo "\">
                              ";
                        // line 300
                        $context["count"] = 0;
                        // line 301
                        echo "                              ";
                        $context["break"] = false;
                        // line 302
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                                  ";
                                // line 303
                                if ((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array()))) {
                                    // line 304
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
                                    // line 309
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
                                    if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo "nofoto.png";
                                    } elseif ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    } else {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute($context["sku"], "SKU_Img", array());
                                    }
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
                                    if ($this->getAttribute($context["skub"], "SKU_Img", array())) {
                                        echo $this->getAttribute($context["skub"], "SKU_Img", array());
                                    } else {
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    }
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
                                    // line 315
                                    echo "                                    ";
                                    $context["break"] = false;
                                    echo " 
                                  ";
                                }
                                // line 316
                                echo " 
                              ";
                                // line 317
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 318
                                echo "                              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 319
                        echo "                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 324
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center red\">
                        <b class=\"fontA\">";
                        // line 326
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 331
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 332
                echo "              ";
            }
            // line 333
            echo "              </div>
                <div class=\"row sinPadding bottom0\" style=\"margin-bottom: 0px;\">
                  <div class=\"col l6 sinPadding center\">
                    <a class=\"btn-large add_cart green\" data-totalc=\"";
            // line 336
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
            // line 342
            if ((twig_length_filter($this->env, ($context["SKU"] ?? null)) >= 2)) {
                // line 343
                echo "                    <div class=\"col l12 center\">
                      <b class=\"red-text\">Tenga presente que puede variar los colores según disponibilidad</b>
                    </div>
                  ";
            }
            // line 347
            echo "                </div>
              </div>
              
            </div>
          </div>
          <div class=\"col l4\">
            <div class=\"card\">
              <div class=\"card-content\">
                <div class=\"row\">
                <div class=\"col s12 center\">
                  <span class=\"fontD \">s/ ";
            // line 357
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x mayor</span>
                </div>                
                <div class=\"col s12 center\">
                  ";
            // line 360
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo " <br>
                    <p class=\"fontA\">FECHA DE LLEGADA DE LA MERCANCÍA ";
                // line 361
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_FechaPreventa", array());
                echo " </p> <br>
                  ";
            }
            // line 363
            echo "                </div>
                  <div class=\"card-badge\"><a class=\"white-text\">";
            // line 364
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo "PRE-VENTA";
            } else {
                echo "<b>OFERTA</b>";
            }
            echo "</a></div>
";
            // line 368
            echo "                  <div class=\"col s12 \"><br>
                   <span class=\"grey-text\"><i class=\"material-icons green-text left\">shopping_bag</i>";
            // line 369
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
                <div class=\"cardContentFix\" id=\"visualizas\" style=\"display:none;\"></div>
                <div id=\"visualizarEnvio\" style=\"display:none;\">
                  <div class=\"row sinPadding\">
                    <div class=\"col l6\">
                      <select id=\"selecRegion\" class=\"browser-default\" data-valor=\"";
            // line 376
            echo $this->getAttribute(($context["direccion_usuario"] ?? null), "Pag_idregion", array());
            echo "\">
                      <option value=\"0\" disabled selected>Departamento</option>
                      ";
            // line 378
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["region"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 379
                echo "                        <option value=\"";
                echo $this->getAttribute($context["reg"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["reg"], "name", array());
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            echo "                      </select>
                    </div>
                    <div id=\"provincia\" class=\"col l6\">
                      <select  disabled class=\"browser-default\">
                        <option value=\"0\" disabled selected> Seleccione una provincia</option>
                      </select>
                    </div>
                    <div id=\"distrito\" class=\"col l6\">
                      <select disabled class=\"browser-default\">
                        <option value=\"0\" disabled selected> Seleccione un distrito</option>
                      </select>
                    </div>
                    <div class=\"col l6\">
                      <select id=\"cantEnvio\" class=\"browser-default\">
                      <option value=\"0\" disabled selected>Cantidad</option>
                        ";
            // line 396
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 397
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
            // line 399
            echo "                      </select>
                    </div>
                  </div>
                  <div class=\"row sinPadding\">
                    <div class=\"col l12 black-text negrita noenv tiempoEntrega\" style=\"text-align: left;font-size:16px;\">Tiempo de entrega de 2 a 3 días (Lima y Callao)</div>
                    <div class=\"col l12\" style=\"text-align: right;\">S/ <span class=\"cEnv fontC negrita\">0.00</span></div>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    ";
        } else {
            // line 411
            echo "      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-image\">
              <div class=\"wrapperSliderImgMobile transition\">
                <div class=\"sliderMobile \">
                  ";
            // line 416
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fotos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fot"]) {
                // line 417
                echo "                    ";
                if (($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "producto_Pro_IdProducto", array()))) {
                    // line 418
                    echo "                      ";
                    if ((twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fot"], "Prf_Img", array()), 0, 5)) != "nopic")) {
                        // line 419
                        echo "                        <div>
                          <img alt=\"";
                        // line 420
                        echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                        echo " al pormayor\" class=\"redondeo centrarForzado\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["fot"], "Prf_Img", array());
                        echo "\">
                        </div>
                      ";
                    }
                    // line 423
                    echo "                    ";
                }
                // line 424
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "                </div>
              </div>
          </div>
          <div class=\"card-content\">     
                <div class=\"row\">
                  <div class=\"col s12 center\">
                    <span class=\"fontD \">s/ ";
            // line 431
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo " x mayor</span>
                  </div>
                </div>             
              ";
            // line 434
            if (((($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 12) && ($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) != 2)) && ($this->getAttribute(($context["producto"] ?? null), "Suc_IdSubCategoria", array()) != 41))) {
                // line 435
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 436
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 437
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 438
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s5 left-align\">
                        <div class=\"positionRelative\">
                          ";
                        // line 441
                        if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                            // line 442
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\" materialboxed redondeo\" height=\"40px\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "nofoto.png\" >
                          ";
                        } elseif ((($this->getAttribute(                        // line 443
$context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                            // line 444
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\" materialboxed redondeo\" height=\"40px\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                            echo "\" >
                          ";
                        } else {
                            // line 446
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" data-nom=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "\" class=\" materialboxed redondeo\" height=\"40px\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["sku"], "SKU_Img", array());
                            echo "\" >
                          ";
                        }
                        // line 448
                        echo "                          <label>";
                        echo ($context["colorActual"] ?? null);
                        echo "</label> 
                        </div>
                        <br>
                      </div> 
                      <div class=\"col s7 valign-wrapper filaCant";
                        // line 452
                        echo $context["key"];
                        echo "\">
                        <div class=\"input-group input-number-group\">
                          <div class=\"input-group-button\">
                            <span class=\"input-number-decrement\">-</span>
                          </div>
                          ";
                        // line 457
                        $context["count"] = 0;
                        // line 458
                        echo "                          ";
                        $context["break"] = false;
                        // line 459
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                              ";
                                // line 460
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 461
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
                                    if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo "nofoto.png";
                                    } elseif ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    } else {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute($context["sku"], "SKU_Img", array());
                                    }
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
                                    if ($this->getAttribute($context["skub"], "SKU_Img", array())) {
                                        echo $this->getAttribute($context["skub"], "SKU_Img", array());
                                    } else {
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    }
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
                                    // line 463
                                    echo "                                ";
                                    $context["break"] = false;
                                    echo " 
                              ";
                                }
                                // line 464
                                echo " 
                          ";
                                // line 465
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 466
                                echo "                          ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 467
                        echo "                          <div class=\"input-group-button\">
                            <span class=\"input-number-increment\">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
                    } else {
                        // line 474
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center red\">
                        <b class=\"fontA\">";
                        // line 476
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 481
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 482
                echo "            ";
            } else {
                // line 483
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["SKU"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sku"]) {
                    echo "  
                ";
                    // line 484
                    if ((($this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array()) == $this->getAttribute($context["sku"], "Producto_Pro_IdProducto", array())) && ($this->getAttribute($context["sku"], "SKU_StockDisponible", array()) >= 1))) {
                        // line 485
                        echo "                ";
                        $context["colorActual"] = $this->getAttribute($context["sku"], "SKU_Color", array());
                        // line 486
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col S5 left-align\">
                        <div class=\"positionRelative\">
                          ";
                        // line 489
                        if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                            // line 490
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\"materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo "nofoto.png\" width=\"60px\">
                          ";
                        } elseif ((($this->getAttribute(                        // line 491
$context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                            // line 492
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" class=\"materialboxed fixImg4 redondeo\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                            echo "\" width=\"60px\">
                          ";
                        } else {
                            // line 494
                            echo "                            <img alt=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " al pormayor\" id=\"skuImg";
                            echo ($context["colorActual"] ?? null);
                            echo "\" data-color=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "-";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_IdProducto", array());
                            echo "\" data-caption=\"";
                            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Nombre", array());
                            echo " ";
                            echo twig_title_string_filter($this->env, ($context["colorActual"] ?? null));
                            echo "\" data-nom=\"";
                            echo ($context["colorActual"] ?? null);
                            echo "\" class=\"materialboxed fixImg4 redondeo\" width=\"60px\" src=\"";
                            echo ($context["ruta_img"] ?? null);
                            echo $this->getAttribute($context["sku"], "SKU_Img", array());
                            echo "\" >
                          ";
                        }
                        // line 496
                        echo "                          <label>";
                        echo ($context["colorActual"] ?? null);
                        echo "</label>
                        ";
                        // line 497
                        $context["colorUnico"] = "";
                        // line 498
                        echo "                        ";
                        $context["colorHex"] = "";
                        // line 499
                        echo "                        ";
                        $context["break"] = false;
                        // line 500
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                            if ( !($context["break"] ?? null)) {
                                // line 501
                                echo "                          ";
                                if (($this->getAttribute($context["col"], "SKU_Color", array()) == ($context["colorActual"] ?? null))) {
                                    // line 502
                                    echo "                            ";
                                    // line 503
                                    echo "                            ";
                                    $context["colorUnico"] = $this->getAttribute($context["col"], "Col_Nombre", array());
                                    // line 504
                                    echo "                            ";
                                    $context["colorHex"] = $this->getAttribute($context["col"], "Col_Hex", array());
                                    // line 505
                                    echo "                            ";
                                    $context["break"] = true;
                                    // line 506
                                    echo "                          ";
                                }
                                // line 507
                                echo "                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 508
                        echo "                        </div>
                        <br>
                      </div> 
                      <div class=\"col s7\">
                        <div class=\"row\">
                          <div class=\"col s12 sinPadding\">
                          </div>
                            ";
                        // line 515
                        $context["count"] = 0;
                        // line 516
                        echo "                            ";
                        $context["break"] = false;
                        // line 517
                        echo "                          <div class=\"col l12 sinPadding  centrarForzado row filaCant";
                        echo $context["key"];
                        echo "\">
                              ";
                        // line 518
                        $context["count"] = 0;
                        // line 519
                        echo "                              ";
                        $context["break"] = false;
                        // line 520
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["SKUB"] ?? null), "asc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["skub"]) {
                            if ( !($context["break"] ?? null)) {
                                echo "                        
                                  ";
                                // line 521
                                if (((($context["colorActual"] ?? null) == $this->getAttribute($context["skub"], "SKU_Color", array())) && ($this->getAttribute($context["skub"], "SKU_StockDisponible", array()) >= 1))) {
                                    // line 522
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
                                    // line 527
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
                                    if ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) == ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo "nofoto.png";
                                    } elseif ((($this->getAttribute($context["sku"], "SKU_Img", array()) == "") && ($this->getAttribute(($context["producto"] ?? null), "Prf_Img", array()) != ""))) {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    } else {
                                        echo ($context["ruta_img"] ?? null);
                                        echo $this->getAttribute($context["sku"], "SKU_Img", array());
                                    }
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
                                    if ($this->getAttribute($context["skub"], "SKU_Img", array())) {
                                        echo $this->getAttribute($context["skub"], "SKU_Img", array());
                                    } else {
                                        echo $this->getAttribute(($context["producto"] ?? null), "Prf_Img", array());
                                    }
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
                                    // line 533
                                    echo "                                    ";
                                    $context["break"] = false;
                                    echo " 
                                  ";
                                }
                                // line 534
                                echo " 
                              ";
                                // line 535
                                $context["count"] = (($context["count"] ?? null) + 1);
                                // line 536
                                echo "                              ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 537
                        echo "                          </div>
                        </div>
                      </div>
                    </div>
                                    ";
                    } else {
                        // line 542
                        echo "                    <div class=\"row centrarForzado\">
                      <div class=\"col s12 center red\">
                        <b class=\"fontA\">";
                        // line 544
                        echo $this->getAttribute($context["sku"], "SKU_Color", array());
                        echo " AGOTADO</b>
                      </div>
                      <br><br>
                    </div>
                    ";
                    }
                    // line 549
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sku'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 550
                echo "            ";
            }
            // line 551
            echo "              <div class=\"row\">
                ";
            // line 552
            if ((twig_length_filter($this->env, ($context["SKU"] ?? null)) >= 2)) {
                // line 553
                echo "                    <div class=\"col l12 center\">
                      <b class=\"red-text\">Tenga presente que puede variar los colores según disponibilidad</b>
                    </div>
                ";
            }
            // line 557
            echo "                <div class=\"col s12 center\">
                  ";
            // line 558
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Preventa", array()) == 1)) {
                echo " <br>
                    <p class=\"fontA\">FECHA DE LLEGADA DE LA MERCANCÍA ";
                // line 559
                echo $this->getAttribute(($context["producto"] ?? null), "Pro_FechaPreventa", array());
                echo " </p> <br>
                  ";
            }
            // line 561
            echo "                </div>
";
            // line 565
            echo "              </div>         
          </div>
        </div>
      </div>
    ";
        }
        // line 570
        echo "    </div>
        <div class=\"row\">
          <div class=\"col s12 ";
        // line 572
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
        // line 579
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
        // line 589
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Marca", array())) {
            // line 590
            echo "                    <tr>
                      <td class=\"enfasisB\">Marca</td>
                      <td>";
            // line 592
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Marca", array()));
            echo "</td>
                    </tr>
                  ";
        }
        // line 595
        echo "                  ";
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Garantia", array())) {
            // line 596
            echo "                    <tr>
                      <td class=\"enfasisB\">Garantía</td>
                      <td>";
            // line 598
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_Garantia", array()));
            echo "</td>
                    </tr>
                  ";
        }
        // line 601
        echo "                  ";
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_EdoGarantia", array())) {
            // line 602
            echo "                    <tr>
                      <td class=\"enfasisB\">Estado Producto</td>
                      <td>";
            // line 604
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto"] ?? null), "Pro_EdoGarantia", array()));
            echo "</td>
                    </tr>
                  ";
        }
        // line 607
        echo "                  <tr>
                    <td  class=\"enfasisB\">Colores</td>
                    <td >
                      ";
        // line 610
        $context["arrayColores"] = array();
        // line 611
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 612
            echo "                        ";
            if (($this->getAttribute($context["col"], "producto_Pro_IdProducto", array()) == $this->getAttribute(($context["pro"] ?? null), "Pro_IdProducto", array()))) {
                // line 613
                echo "                         ";
                if (!twig_in_filter($this->getAttribute($context["col"], "Col_Hex", array()), ($context["arrayColores"] ?? null))) {
                    // line 614
                    echo "                         ";
                    $context["arrayColores"] = twig_array_merge(($context["arrayColores"] ?? null), array(0 => $this->getAttribute($context["col"], "Col_Hex", array())));
                    // line 615
                    echo "                            ";
                    echo twig_title_string_filter($this->env, $this->getAttribute($context["col"], "Col_Nombre", array()));
                    echo ", 
                         ";
                }
                // line 617
                echo "                        ";
            }
            // line 618
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        echo "                      ";
        if (twig_test_empty(($context["arrayColores"] ?? null))) {
            // line 620
            echo "                        <span class=\"flow-text notFlow enfasisB\"><i>Producto único</i></span>
                      ";
        }
        // line 622
        echo "                    </td>
                  </tr>
                  ";
        // line 624
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array())) {
            // line 625
            echo "                    <tr>
                      <td  class=\"enfasisB\">Documento pago</td>
                      <td >
                        ";
            // line 628
            if (($this->getAttribute(($context["producto"] ?? null), "Pro_Documento", array()) == 1)) {
                // line 629
                echo "                          Boleta
                        ";
            } elseif (($this->getAttribute(            // line 630
($context["producto"] ?? null), "Pro_Documento", array()) == 2)) {
                echo " Boleta o Factura ";
            }
            // line 631
            echo "                      </td>
                    </tr>
                  ";
        }
        // line 634
        echo "                  ";
        if (($context["producto_ficha"] ?? null)) {
            // line 635
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array())) {
                // line 636
                echo "                      <tr>
                        <td class=\"enfasisB\">Dimensiones <br>(largo x ancho x alto)</td>
                        <td>";
                // line 638
                echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array()));
                echo "</td>
                      </tr>
                    ";
            }
            // line 641
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo2", array())) {
                // line 642
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 643
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "¿Qué contiene la caja? ";
                } else {
                    echo " Peso ";
                }
                echo "</td>
                        <td>";
                // line 644
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
            // line 647
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array())) {
                // line 648
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 649
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "Peso ";
                } else {
                    echo " Material ";
                }
                echo "</td>
                        <td>";
                // line 650
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
            // line 653
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo4", array())) {
                // line 654
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 655
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "Potencia ";
                } else {
                    echo " Uso ";
                }
                echo "</td>
                        <td>";
                // line 656
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
            // line 659
            echo "                    ";
            if ($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo5", array())) {
                // line 660
                echo "                      <tr>
                        <td class=\"enfasisB\">";
                // line 661
                if (($this->getAttribute(($context["producto"] ?? null), "Cat_IdCategoria", array()) == 6)) {
                    echo "Material ";
                } else {
                    echo " Observaciones ";
                }
                echo "</td>
                        <td>";
                // line 662
                echo twig_title_string_filter($this->env, $this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo5", array()));
                echo "</td>
                      </tr>
                    ";
            }
            // line 665
            echo "                  ";
        }
        // line 666
        echo "                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 670
        if ($this->getAttribute(($context["producto"] ?? null), "Pro_Video", array())) {
            // line 671
            echo "          <div class=\"col s12 l6\">
             
                  <div class=\"video-container\">
                    <iframe width=\"853\" height=\"480\" src=\"";
            // line 674
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_Video", array());
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                  </div>
                
          </div>
          ";
        }
        // line 679
        echo "          <div class=\"col s12 l12\">
            <div class=\"row\">
              ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producto_subcategoria"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 682
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
            // line 686
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
            // line 690
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</b>
                            <span class=\"fontA\">S/ ";
            // line 691
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
        // line 698
        echo "            </div>
          </div>
      </div>
  </main>
</div>

  ";
        // line 704
        if ((($context["userAgent"] ?? null) != "PC")) {
            // line 705
            echo "    <div class=\"bottom0 anchoTotal row centrarForzado pormayorUnico white-text mobileBottomBtn\" style=\"position:fixed;z-index: 100\">
      <div class=\"col s6 sinPadding center\">
        <span class=\"totalPro fontC\">0</span> UNID
      </div>
      <div class=\"col s6 sinPadding center\">
        <span class=\"fontC white-text\"><b>S/<span class=\"totalPago white-text\">0</span></b></span>
      </div>
      <div class=\"col s12 sinPadding\">
        <a  class=\"btn-large green add_cart anchoTotal\"  data-totalc=\"";
            // line 713
            echo ($context["totalc"] ?? null);
            echo "\" data-pmin=\"";
            echo $this->getAttribute(($context["producto"] ?? null), "Pro_PrecioMinimo", array());
            echo "\">COMPRAR</a>
      </div>
    </div>
  ";
        }
        // line 717
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
        // line 726
        echo ($context["ruta_img"] ?? null);
        echo $this->getAttribute($this->getAttribute(($context["fotos"] ?? null), 0, array(), "array"), "Prf_Img", array());
        echo "\"> 
          </div>
          <div class=\"center col s12 m12 l12\">
            <a class=\"btn pormayorUnico center verCarrito\" href=\"";
        // line 729
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

    // line 738
    public function block_script($context, array $blocks = array())
    {
        // line 739
        echo "  <script>
  rando_precio = ";
        // line 740
        echo twig_jsonencode_filter(($context["precios"] ?? null));
        echo ";
  flagVariaciones = false;
  dim = ";
        // line 742
        echo twig_jsonencode_filter($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo1", array()));
        echo ";
  pes = ";
        // line 743
        echo twig_jsonencode_filter($this->getAttribute(($context["producto_ficha"] ?? null), "Prf_Campo3", array()));
        echo "; 
  TiedaId = ";
        // line 744
        echo twig_jsonencode_filter($this->getAttribute(($context["producto"] ?? null), "Tie_IdTienda", array()));
        echo "; 
  Remate = ";
        // line 745
        echo twig_jsonencode_filter($this->getAttribute(($context["producto"] ?? null), "Pro_Saldo", array()));
        echo "; 
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/easyzoom-mp@2.2.2/dist/easyzoom.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>
  <script src=\"";
        // line 750
        echo base_url("public/");
        echo "js/tienda/dpro.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
  <script src=\"";
        // line 751
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
        return array (  2010 => 751,  2004 => 750,  1996 => 745,  1992 => 744,  1988 => 743,  1984 => 742,  1979 => 740,  1976 => 739,  1973 => 738,  1961 => 729,  1954 => 726,  1943 => 717,  1934 => 713,  1924 => 705,  1922 => 704,  1914 => 698,  1899 => 691,  1895 => 690,  1883 => 686,  1869 => 682,  1865 => 681,  1861 => 679,  1853 => 674,  1848 => 671,  1846 => 670,  1840 => 666,  1837 => 665,  1831 => 662,  1823 => 661,  1820 => 660,  1817 => 659,  1805 => 656,  1797 => 655,  1794 => 654,  1791 => 653,  1779 => 650,  1771 => 649,  1768 => 648,  1765 => 647,  1753 => 644,  1745 => 643,  1742 => 642,  1739 => 641,  1733 => 638,  1729 => 636,  1726 => 635,  1723 => 634,  1718 => 631,  1714 => 630,  1711 => 629,  1709 => 628,  1704 => 625,  1702 => 624,  1698 => 622,  1694 => 620,  1691 => 619,  1685 => 618,  1682 => 617,  1676 => 615,  1673 => 614,  1670 => 613,  1667 => 612,  1662 => 611,  1660 => 610,  1655 => 607,  1649 => 604,  1645 => 602,  1642 => 601,  1636 => 598,  1632 => 596,  1629 => 595,  1623 => 592,  1619 => 590,  1617 => 589,  1604 => 579,  1590 => 572,  1586 => 570,  1579 => 565,  1576 => 561,  1571 => 559,  1567 => 558,  1564 => 557,  1558 => 553,  1556 => 552,  1553 => 551,  1550 => 550,  1544 => 549,  1536 => 544,  1532 => 542,  1525 => 537,  1518 => 536,  1516 => 535,  1513 => 534,  1507 => 533,  1449 => 527,  1438 => 522,  1436 => 521,  1428 => 520,  1425 => 519,  1423 => 518,  1418 => 517,  1415 => 516,  1413 => 515,  1404 => 508,  1397 => 507,  1394 => 506,  1391 => 505,  1388 => 504,  1385 => 503,  1383 => 502,  1380 => 501,  1374 => 500,  1371 => 499,  1368 => 498,  1366 => 497,  1361 => 496,  1340 => 494,  1321 => 492,  1319 => 491,  1302 => 490,  1300 => 489,  1295 => 486,  1292 => 485,  1290 => 484,  1283 => 483,  1280 => 482,  1274 => 481,  1266 => 476,  1262 => 474,  1253 => 467,  1246 => 466,  1244 => 465,  1241 => 464,  1235 => 463,  1180 => 461,  1178 => 460,  1170 => 459,  1167 => 458,  1165 => 457,  1157 => 452,  1149 => 448,  1128 => 446,  1109 => 444,  1107 => 443,  1090 => 442,  1088 => 441,  1083 => 438,  1080 => 437,  1078 => 436,  1071 => 435,  1069 => 434,  1063 => 431,  1055 => 425,  1049 => 424,  1046 => 423,  1037 => 420,  1034 => 419,  1031 => 418,  1028 => 417,  1024 => 416,  1017 => 411,  1003 => 399,  992 => 397,  988 => 396,  971 => 381,  960 => 379,  956 => 378,  951 => 376,  935 => 369,  932 => 368,  924 => 364,  921 => 363,  916 => 361,  912 => 360,  906 => 357,  894 => 347,  888 => 343,  886 => 342,  875 => 336,  870 => 333,  867 => 332,  861 => 331,  853 => 326,  849 => 324,  842 => 319,  835 => 318,  833 => 317,  830 => 316,  824 => 315,  766 => 309,  755 => 304,  753 => 303,  745 => 302,  742 => 301,  740 => 300,  735 => 299,  732 => 298,  730 => 297,  721 => 290,  714 => 289,  711 => 288,  708 => 287,  705 => 286,  702 => 285,  700 => 284,  697 => 283,  691 => 282,  688 => 281,  685 => 280,  683 => 279,  678 => 278,  657 => 276,  638 => 274,  636 => 273,  619 => 272,  617 => 271,  612 => 268,  609 => 267,  607 => 266,  600 => 265,  597 => 264,  591 => 263,  583 => 258,  579 => 256,  570 => 249,  563 => 248,  561 => 247,  558 => 246,  552 => 245,  495 => 243,  493 => 242,  485 => 241,  482 => 240,  480 => 239,  472 => 234,  467 => 231,  460 => 230,  457 => 229,  454 => 228,  451 => 227,  448 => 226,  446 => 225,  443 => 224,  437 => 223,  434 => 222,  431 => 221,  429 => 220,  424 => 219,  403 => 217,  384 => 215,  382 => 214,  365 => 213,  363 => 212,  358 => 209,  355 => 208,  353 => 207,  346 => 206,  344 => 205,  331 => 194,  328 => 193,  322 => 192,  319 => 191,  309 => 187,  301 => 186,  298 => 185,  295 => 184,  292 => 183,  287 => 182,  278 => 178,  272 => 177,  269 => 176,  267 => 175,  263 => 173,  253 => 169,  248 => 168,  245 => 167,  236 => 163,  232 => 162,  229 => 161,  227 => 160,  221 => 156,  219 => 155,  206 => 151,  200 => 150,  194 => 149,  188 => 148,  177 => 139,  174 => 138,  41 => 9,  33 => 3,  30 => 2,  11 => 1,);
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
