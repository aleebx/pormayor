<?php

/* tienda/micompra.twig */
class __TwigTemplate_7f2bd4e81054196b3407a39d73dd5148cc8e264d50870b6ba8f070357f8ec3bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "tienda/micompra.twig", 1);
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
    .switch label input[type=checkbox]:checked + .lever {background-color: #21478F;}
    [type=\"radio\"]:checked + label:after, [type=\"radio\"].with-gap:checked + label:after {
            background-color: #21478F;
      }

      [type=\"radio\"]:checked + label:after, [type=\"radio\"].with-gap:checked + label:before, [type=\"radio\"].with-gap:checked + label:after {
          border: 2px solid #21478F;
      }
      [type=\"checkbox\"].filled-in:checked + label:after {
        border: 2px solid #21478F;
        background-color: #21478F;
      }
      .descuento {
    text-decoration:line-through;
    color: grey;
    }
  </style>
  <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\"  media=\"screen\"/>
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "  <main class=\"container fixContainer\">
    ";
        // line 27
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 28
            echo "      <div class=\"row centrarForzado\">
        <div class=\"col s12 sinPadding\">
          <br>
          <div class=\"row breadPago\">
            <div class=\"col l4 valign-wrapper\">
              <h1 class=\"fixH1Seo enfasisA center centrarForzado\">Carrito de compras</h1>
            </div>
            <a href=\"";
            // line 35
            echo base_url();
            echo "productos/carrito\">
              <div class=\"col l3 sinUser enfasisD valign-wrapper fontD2 comoBoton\">
                  <i class=\"material-icons left small\">looks_one</i> RESUMEN<span class=\" anchoTotal grey lighten-2 right\"></span>
              </div>
            </a>
            <div class=\"col l3 sinUser pormayorUnico-text valign-wrapper fontD2 sinPadding\">
              <i class=\"material-icons left small\">looks_two</i> DESPACHO<span class=\" anchoTotal grey lighten-2 right\"></span>
            </div>
            <div class=\"col l2 sinUser enfasisD valign-wrapper fontD2\">
              <i class=\"material-icons left small\">looks_3</i> PAGO
            </div>
          </div>
        </div>
        <div class=\"col l7 unidadSticky\">
          <div class=\"card\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\"> 
                <span class=\"card-title center black-text\">Datos de Envio</span>
                <br>
                <div class=\"col s12\">
                    <p class=\"center\">
                      <input name=\"group1\" type=\"radio\" id=\"tp1\" value=\"tp1\" />
                      <label for=\"tp1\">RETIRO DE TIENDA</label>
                      <input name=\"group1\" type=\"radio\" id=\"tp2\" value=\"tp2\" />
                      <label for=\"tp2\">CONTRAENTREGA (LIMA Y CALLAO)</label>
                      <input name=\"group1\" type=\"radio\" id=\"tp3\" value=\"tp3\" checked=\"checked\" />
                      <label for=\"tp3\">ENVIO PROVINCIA</label>
                    </p>  <br>                      
                </div>
                <div class=\"col s12\">
                    <p class=\"red-text\">Los campos DNI/CE/OTRO y Teléfono Celular son obligatorios.</p>
                  </div>
                <div class=\"input-field col s3\">
                  <input placeholder=\"\"  id=\"nombreComprador\" type=\"text\" class=\"validate\" value=\"";
            // line 68
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Per_Nombre", array());
            echo "\" readonly=\"\">
                  <label for=\"nombreComprador\">Nombre Completo</label>
                </div>
                  <div class=\"input-field col s2\">
                  <input id=\"DNIcliente\" type=\"number\" class=\"validate\" value=\"";
            // line 72
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Per_Dni", array());
            echo "\">
                  <label for=\"DNIcliente\">DNI/CE/OTRO</label>
                </div>

                <div class=\"input-field col s4\">
                  <input placeholder=\"\" id=\"correo\" type=\"email\" class=\"validate\" value=\"";
            // line 77
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Usu_Correo", array());
            echo "\" readonly=\"\">
                  <label for=\"correo\">Correo Electrónico</label>
                </div>
                <div class=\"input-field col s3\">
                  <input id=\"tlf\" type=\"number\" class=\"validate\" min=\"1\" value=\"";
            // line 81
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Per_Telefono", array());
            echo "\">
                  <label for=\"tlf\">Teléfono Celular (*)</label>
                </div>
                <div id=\"direccionVista\">
                  <div class=\"col s12\">
                    <p class=\"red-text\">Los campos Departamento, Provincia, Distrito y Dirección son obligatorios para completar la compra.</p>
                  </div>
                  <div class=\"col s4\">
                    <select id=\"selecRegion\" class=\"browser-default\">
                      <option value=\"0\" disabled selected>Departamento</option>
                      ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["region"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 92
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
            // line 94
            echo "                    </select>
                  </div>
                  <div id=\"provincia\" class=\"col s4\">
                    <select  disabled class=\"browser-default\">
                      <option value=\"0\" disabled selected> Seleccione una provincia</option>
                    </select>
                  </div>
                  <div id=\"distrito\" class=\"col s4\">
                    <select disabled class=\"browser-default\">
                      <option value=\"0\" disabled selected> Seleccione un distrito</option>
                    </select>
                  </div>
                  <div class=\"col l12\"><br></div>
                  <div class=\"input-field col s12 l12\" id=\"toHide\">
                    <input id=\"direccionComprador\" type=\"text\" class=\"validate\">
                    <label for=\"direccionComprador\">Dirección</label>
                  </div>
                  ";
            // line 112
            echo "                  ";
            // line 138
            echo "                  <div class=\"input-field col s12 l4\" id=\"toHide\">
                    <input id=\"dintComprador\" type=\"text\" class=\"validate\">
                    <label for=\"dintComprador\">Depto./Int</label>
                  </div>
                  <div class=\"input-field col s12 l4\" id=\"toHide\">
                    <input id=\"urbComprador\" type=\"text\" class=\"validate\">
                    <label for=\"urbComprador\">Urbanización</label>
                  </div>
                  <div class=\"input-field col s12 l4\" id=\"toHide\">
                    <input id=\"referenciaComprador\" type=\"text\" class=\"validate\">
                    <label for=\"referenciaComprador\">Referencia</label>
                  </div>
                  <div class=\"input-field col s12 l12\" id=\"toHide\">
                    <input id=\"nloteComprador\" type=\"text\" class=\"validate\">
                    <label for=\"nloteComprador\">Agencia o Empresa de Transporte para enviar</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- COMPROBANTE DE PAGO -->
          <div class=\"card\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\"> 
                <span class=\"card-title center black-text\">Selecciona el comprobante de pago</span>
                <br> 
                <span class=\"enfasisB left-align\" style=\"text-align:justify\"><b>IMPORTANTE:</b> Esto solo aplica a tiendas que ofrecen facturas. <br><br>Las tiendas que indican que entregan \"Boletas\" y las que no indican comprobante de pago <i>entregarán solo boletas.</i></span><br><br>

                <div class=\"col s6 sinPadding\">
                  <b class=\"enfasisB\">¿DESEA PRODUCTOS CON FACTURA?</b>
                </div>
                <div class=\"col s6\">
                  <div class=\"switch\">
                    <label>
                      NO
                      <input type=\"checkbox\" class=\"facturaCheck\">
                      <span class=\"lever\"></span>
                      SI
                    </label>
                  </div>
                </div>

                <div class=\"hide datosFactura\">
                  <div class=\"input-field col s12 l4\">
                    <input id=\"RUC\" type=\"number\">
                    <label for=\"RUC\">RUC Empresa</label>
                  </div>
                  <div class=\"input-field col s12 l8\">
                    <input id=\"razonSocial\" type=\"text\" >
                    <label for=\"razonSocial\">Razón Social</label>
                  </div>
                </div>
                
              </div>
            </div>
            <br>
          </div>
        </div>
        <div class=\"col l5 sinPadding\">
          <div class=\"card \">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix centrarForzado cart_content hide\">
                <div class=\"col s12 center\">
                  <span class=\"fontA enfasisA\">Detalles de tu Pedido</span>
                  <div class=\"divider dividerLista\"></div>
                  <br>
                </div>
                ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id_tiendas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["idt"]) {
                // line 207
                echo "                  <br>
                  <p class=\"negrita center\">TIENDA ";
                // line 208
                echo twig_upper_filter($this->env, $this->getAttribute($context["idt"], "Tie_Nombre", array()));
                echo "</p> 
                  <br> 
                  ";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carrito"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 211
                    echo "                    ";
                    if (($this->getAttribute($context["idt"], "Tie_IdTienda", array()) == $this->getAttribute($context["car"], "idtienda", array()))) {
                        // line 212
                        echo "                      <div class=\"col s12\">
                        <div class=\"row centrarForzado detallePedido2\">
                          <div class=\"col s2 center\">
                            <img class=\"centrarForzado redondeo fixImg2\" alt=\"";
                        // line 215
                        echo $this->getAttribute($context["car"], "name", array());
                        echo " al pormayor\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["car"], "img", array());
                        echo "\">
                          </div>
                          <div class=\"col s6 sinPadding\">
                            <span class=\"enfasisA fontB2 muayuscula\">";
                        // line 218
                        echo (((twig_length_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array()))) > 42)) ? ((twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array())), 0, 42) . "...")) : (twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array()))));
                        echo "</span><br>
                            ";
                        // line 219
                        if (($this->getAttribute($context["car"], "tipovariacion", array()) != " ")) {
                            // line 220
                            echo "                              <span class=\"fontB2 enfasisB\">";
                            echo $this->getAttribute($context["car"], "tipovariacion", array());
                            echo " ";
                            echo $this->getAttribute($context["car"], "variacion", array());
                            echo "&nbsp;</span>
                            ";
                        }
                        // line 222
                        echo "                            ";
                        if (($this->getAttribute($context["car"], "color", array()) != "")) {
                            // line 223
                            echo "                              <span class=\"enfasisB\">(";
                            echo twig_title_string_filter($this->env, $this->getAttribute($context["car"], "color", array()));
                            echo ")</span><br>
                            ";
                        }
                        // line 225
                        echo "                            <span class=\"enfasisA\"><span class=\"cantCarrito negrita\">";
                        echo $this->getAttribute($context["car"], "qty", array());
                        echo "</span> unidades</span>
                          </div>
";
                        // line 235
                        echo "                          <div class=\"col s4 positionRelative descT hide\">
                            <span class=\"positionAbsolute right0 top0 enfasisB fontB2\">
                              <span class=\"precioUnit2Carrito";
                        // line 237
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "price_min", array());
                        echo "</span> c/u
                            </span><br> 
                              <span class=\"positionAbsolute right0 bottom0\"><small> S/. &nbsp;&nbsp;</small>
                                ";
                        // line 240
                        $context["almayor"] = ($this->getAttribute($context["car"], "price_min", array()) * $this->getAttribute($context["car"], "qty", array()));
                        // line 241
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
                    // line 250
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
            // line 252
            echo "                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Cantidad
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>

                <div class=\"col s3 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Costo de envío
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"costoReal\">0.00</b></span> <span class=\"enfasisB\"></span></span>
                </div>
                <div class=\"col s12\">
                  <small>El pago por costos de envio a provincia (fuera de Lima y Callao) los realizará cuando reciba su paquete. 
Tenga presente que aquÍ sólo le cobramos 8/10 soles (según paquete) únicamente por costos de traslado local desde la tienda hasta la agencia de transportes (el traslado lo hace un courier)</small> 
                </div>
                ";
            // line 275
            echo "                ";
            // line 278
            echo "                <div class=\"col s3 center enfasisB left-align valign-wrapper totalD1 hide\" style=\"height: 45px;\">
                  Total
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper totalD2 hide\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s4 m4 l12 center sinPadding\">
                  <a class=\"btn anchoTotal irPago pormayorUnico\">Continuar Compra</a>
                </div>
                <div class=\"col s12 center\">
                  <br>
                  <a class=\"waves-effect waves-light btn-flat btn-flat-not transition\" href=\"";
            // line 292
            echo base_url();
            echo "\"><i class=\"material-icons left\">arrow_back</i>Seguir Comprando</a>
                </div> 
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                  <br>
                </div>
                <div class=\"col s6 sinPadding center\">
                  <img class=\"\" src=\"";
            // line 299
            echo ($context["ruta_img"] ?? null);
            echo "safety_pay.webp\" >
                </div>
                <div class=\"col s3 sinPadding center\">
                  <img class=\"\" src=\"";
            // line 302
            echo ($context["ruta_img"] ?? null);
            echo "logoVisaB.png\" height=\"56\">
                </div>
                <div class=\"col s3 positionRelative center-align valign-wrapper\">
                  <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                    <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton \" src=\"";
            // line 306
            echo ($context["ruta_img"] ?? null);
            echo "pagoA.png\" alt=\"compra segura pormayor.pe\" height=\"65\">
                  </a>
                </div>
                <div class=\"col s12 fontD2 center\">
                  <i class=\"enfasisB\">Seguridad en todo el Perú</i>
                </div>
                <div class=\"col s12\"><br></div>
              </div>
";
            // line 328
            echo "            </div>
          </div>
        </div>
      </div>
    ";
        } else {
            // line 333
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
          <div class=\"card\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\"> 
                <span class=\"card-title center black-text\">Datos de Envio</span>
                 <div class=\"col s12\">
                    <p>
                      <input name=\"group1\" type=\"radio\" id=\"tp1\" value=\"tp1\" />
                      <label for=\"tp1\">RETIRO DE TIENDA</label>
                      <input name=\"group1\" type=\"radio\" id=\"tp2\" value=\"tp2\" />
                      <label for=\"tp2\">CONTRAENTREGA (LIMA Y CALLAO)</label>
                      <input name=\"group1\" type=\"radio\" id=\"tp3\" value=\"tp3\" />
                      <label for=\"tp3\">ENVIO PROVINCIA</label>
                    </p>  <br>                      
                </div>
                <div class=\"col s12\">
                    <p class=\"text-red\">Los campos DNI/CE/OTRO y Teléfono Celular son obligatorios.</p>
                  </div>
                <div class=\"input-field col s12\">
                  <input placeholder=\"\"  id=\"nombreComprador\" type=\"text\" class=\"validate\" value=\"";
            // line 362
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Per_Nombre", array());
            echo "\" readonly=\"\">
                  <label for=\"nombreComprador\">Nombre Completo</label>
                </div>
                <div class=\"input-field col s12\">
                  <input id=\"DNIcliente\" type=\"number\" class=\"validate\" value=\"";
            // line 366
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Per_Dni", array());
            echo "\">
                  <label for=\"DNIcliente\">DNI/CE/OTRO (*)</label>
                </div>
                <div class=\"input-field col s12\">
                  <input placeholder=\"\" id=\"tlf\" type=\"number\" class=\"validate\" min=\"1\" value=\"";
            // line 370
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Per_Telefono", array());
            echo "\">
                  <label for=\"tlf\">Teléfono Celular (*)</label>
                </div>
                <div class=\"input-field col s12\">
                  <input placeholder=\"\" id=\"correo\" type=\"email\" class=\"validate\" value=\"";
            // line 374
            echo $this->getAttribute(($context["usuario_inf"] ?? null), "Usu_Correo", array());
            echo "\" readonly=\"\">
                  <label for=\"correo\">Correo Electrónico</label>
                </div>
";
            // line 406
            echo "             
                <div id=\"direccionVista\">
                  <div class=\"col s12\">
                    <p class=\"text-red\">Los campos Departamento, Provincia, Distrito y Dirección son obligatorios para completar la compra.</p>
                  </div>
                  <div class=\"col s6\">
                    <select id=\"selecRegion\" class=\"browser-default\">
                      <option value=\"0\" disabled selected>Departamento</option>
                      ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["region"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 415
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
            // line 417
            echo "                    </select>
                  </div>
                  <div id=\"provincia\" class=\"col s6\">
                    <select  disabled class=\"browser-default\">
                      <option value=\"0\" disabled selected> Seleccione una provincia</option>
                    </select>
                  </div>
                  <div class=\"col s12\">
                    <br>
                  </div>
                  <div id=\"distrito\" class=\"col s12\">
                    <select disabled class=\"browser-default\">
                      <option value=\"0\" disabled selected> Seleccione un distrito</option>
                    </select>
                  </div>
                  <div class=\"col s12\">
                    <br>
                  </div>
                  <div class=\"input-field col s12 l12\" id=\"toHide\">
                    <input id=\"direccionComprador\" type=\"text\" class=\"validate\" value=\"\">
                    <label for=\"direccionComprador\">Dirección (*)</label>
                  </div>
                </div>
                <div class=\"input-field col s12 l4\" id=\"toHide\">
                  <input id=\"dintComprador\" type=\"text\" class=\"validate\">
                  <label for=\"dintComprador\">Depto./Int</label>
                </div>
                <div class=\"input-field col s12 l12\" id=\"toHide\">
                  <input id=\"urbComprador\" type=\"text\" class=\"validate\">
                  <label for=\"urbComprador\">Urbanización</label>
                </div>
                <div class=\"input-field col s12 l4\" id=\"toHide\">
                  <input id=\"referenciaComprador\" type=\"text\" class=\"validate\">
                  <label for=\"referenciaComprador\">Referencia</label>
                </div>
                <div class=\"input-field col s12 l6\" id=\"toHide\">
                  <input id=\"nloteComprador\" type=\"text\" class=\"validate\">
                  <label for=\"nloteComprador\">Agencia o Empresa de Transporte para enviar</label>
                </div>
              </div>
            </div>
          </div>

          <!-- COMPROBANTE DE PAGO -->

          <div class=\"card\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\"> 
                <div class=\"col s12\">
                  <span class=\"card-title center black-text\">Selecciona el comprobante de pago</span>
                  <br> 
                  <span class=\"enfasisB left-align\" style=\"text-align:justify\"><b>IMPORTANTE:</b> Esto solo aplica a tiendas que ofrecen facturas. <br><br>Las tiendas que indican que entregan \"Boletas\" y las que no indican comprobante de pago <i>entregarán solo boletas.</i></span><br><br>

                  <div class=\"col s6 sinPadding\">
                    <b class=\"enfasisB\">¿DESEA PRODUCTOS CON FACTURA?</b>
                  </div>
                  <div class=\"col s6\">
                    <div class=\"switch\">
                      <label>
                        NO
                        <input type=\"checkbox\" class=\"facturaCheck\">
                        <span class=\"lever\"></span>
                        SI
                      </label>
                    </div>
                  </div>

                  <div class=\"hide datosFactura\">
                    <div class=\"input-field col s12 sinPadding\">
                      <input id=\"RUC\" type=\"number\">
                      <label for=\"RUC\">RUC Empresa</label>
                    </div>
                    <div class=\"input-field col s12 sinPadding\">
                      <input id=\"razonSocial\" type=\"text\" >
                      <label for=\"razonSocial\">Razón Social</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class=\"row centrarForzado\">
        <div class=\"col s12 sinPadding\">
          <div class=\"card \">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix centrarForzado cart_content hide\">
                <div class=\"col s12 center sinPadding\">
                  <span class=\"fontA enfasisA\">Detalles de tu Pedido</span>
                  <div class=\"divider dividerLista\"></div>
                  <br>
                </div>
                ";
            // line 511
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id_tiendas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["idt"]) {
                // line 512
                echo "                  <br>
                  <p class=\"negrita center fontD2\">TIENDA ";
                // line 513
                echo twig_upper_filter($this->env, $this->getAttribute($context["idt"], "Tie_Nombre", array()));
                echo "</p> 
                  <br>
                  ";
                // line 515
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carrito"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 516
                    echo "                    ";
                    if (($this->getAttribute($context["idt"], "Tie_IdTienda", array()) == $this->getAttribute($context["car"], "idtienda", array()))) {
                        // line 517
                        echo "                      <div class=\"col s12 sinPadding\">
                        <div class=\"row centrarForzado detallePedidoMobile\">
                          <div class=\"col s3\">
                            <img class=\"centrarForzado redondeo fixImg2B\" alt=\"";
                        // line 520
                        echo $this->getAttribute($context["car"], "name", array());
                        echo " al pormayor\" src=\"";
                        echo ($context["ruta_img"] ?? null);
                        echo $this->getAttribute($context["car"], "img", array());
                        echo "\" >
                          </div>
                          <div class=\"col s9\">
                            <span class=\"enfasisA muayuscula\">";
                        // line 523
                        echo twig_title_string_filter($this->env, $this->getAttribute($context["car"], "name", array()));
                        echo "</span><br>

                            ";
                        // line 525
                        if (($this->getAttribute($context["car"], "tipovariacion", array()) != " ")) {
                            // line 526
                            echo "                              <span class=\"enfasisB\">";
                            echo $this->getAttribute($context["car"], "tipovariacion", array());
                            echo "&nbsp; ";
                            echo $this->getAttribute($context["car"], "variacion", array());
                            echo "&nbsp;</span>
                            ";
                        }
                        // line 528
                        echo "
                            ";
                        // line 529
                        if (($this->getAttribute($context["car"], "color", array()) != "")) {
                            // line 530
                            echo "                              <span class=\"enfasisB\">(";
                            echo twig_title_string_filter($this->env, $this->getAttribute($context["car"], "color", array()));
                            echo ")</span>
                            ";
                        }
                        // line 532
                        echo "                          </div>
                          <div class=\"col s4  enfasisB fontD2 valign-wrapper\">
                            <span class=\"cantCarrito negrita\">";
                        // line 534
                        echo $this->getAttribute($context["car"], "qty", array());
                        echo "</span>&nbsp; Unid.
                          </div>
";
                        // line 544
                        echo "                          <div class=\"col s8 positionRelative descT hide\">
                            <span class=\"positionAbsolute right0 top0 enfasisB fontB2\">
                              <span class=\"precioUnitCarrito";
                        // line 546
                        echo $this->getAttribute($context["car"], "rowid", array());
                        echo "\">";
                        echo $this->getAttribute($context["car"], "price_min", array());
                        echo "</span> c/u
                            </span><br><br>
                              <span class=\"positionAbsolute right0 bottom0\">
                                ";
                        // line 549
                        $context["almayor"] = ($this->getAttribute($context["car"], "price_min", array()) * $this->getAttribute($context["car"], "qty", array()));
                        // line 550
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
                    // line 563
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 564
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 565
            echo "                <div class=\"col s5 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Cantidad
                </div>
                <div class=\"col s7 center enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\"><span class=\"fontD2\"><b class=\"cantResumen\"></b></span>&nbsp; <span class=\"enfasisB\">Unidades</span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>

                 <div class=\"col s5 center enfasisB left-align valign-wrapper\" style=\"height: 45px;\">
                  Gasto de despacho
                </div>
                <div class=\"col s7 left enfasisA valign-wrapper\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp;<span class=\"fontD2\"><b class=\"costoReal\">0.00</b></span> <span class=\"enfasisB\"></span></span>
                </div>
                <div class=\"col s12\">                  
                   <small>El pago por el envio a provincia (fuera de Lima y Callao) los realizará cuando reciba su paquete. 
Tenga presente que aquÍ sólo le cobramos 8/10 soles (según paquete) únicamente por costos de traslado local desde la tienda hasta la agencia de transportes. Si son ventas en Lima es el costo del delivery</small> 
                </div>
                 <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>

              ";
            // line 592
            echo "     ";
            // line 595
            echo "
                <div class=\"col s3 center enfasisB left-align valign-wrapper totalD1 hide\" style=\"height: 45px;\">
                  Total
                </div>
                <div class=\"col s9 center enfasisA valign-wrapper totalD2 hide\" style=\"height: 45px;\">
                  <span style=\"margin-left: auto\">S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
                </div>
                <div class=\"col s12\">
                  <div class=\"divider dividerMargin\"></div>
                </div>
                <div class=\"col s12 center\">
                  <a class=\"waves-effect waves-light btn-flat btnFlatMobile transition pormayorUnico-text\" href=\"";
            // line 606
            echo base_url();
            echo "\"><i class=\"material-icons left\">arrow_back</i>Seguir Comprando</a>
                  <br>
                </div> 
                <div class=\"col s12 sinPadding center\">
                  <br>
                  <div class=\"divider\"></div>
                  <br>
                </div>
                <div class=\"col s6 center valign-wrapper\" style=\"height:55px\">
                  <img class=\"centrarForzado\" src=\"";
            // line 615
            echo ($context["ruta_img"] ?? null);
            echo "safety_pay.webp\" height=\"40\">
                </div>
                <div class=\"col s3 valign-wrapper\" style=\"height:55px\">
                  <img class=\"centrarForzado\" src=\"";
            // line 618
            echo ($context["ruta_img"] ?? null);
            echo "logoVisaB.png\" height=\"30\">
                </div>
                <div class=\"col s3 positionRelative center-align valign-wrapper\">
                  <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                    <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton \" src=\"";
            // line 622
            echo ($context["ruta_img"] ?? null);
            echo "pagoA.png\" alt=\"compra segura pormayor.pe\" height=\"50\">
                  </a>
                </div>
                <div class=\"col s12 fontD2 center\">
                  <div class=\"dividerMargin\"></div>
                  <i class=\"enfasisB\">Seguridad en todo el Perú</i>                  
                  <br><br>
                </div>
              </div>
";
            // line 646
            echo "            </div>
          </div>
        </div>
      </div>


      <div class=\"row centrarForzado bottom0 anchoTotal white left0 setbuttonMobile transitionB\">
        <div class=\"col s4 valign-wrapper\" style=\"height:45px\">
          &nbsp;&nbsp;&nbsp;<span class=\"fontA\"><b class=\"cantResumen\"></b></span>&nbsp;&nbsp;<span class=\"enfasisB\">Unidades</span>
        </div>
";
            // line 659
            echo "        <div class=\"totalB1 hide col s8 right-align\" style=\"height:45px\">
          <span >S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
        </div>
        <div class=\"col s12\">
          <div class=\"divider\"></div>
        </div>
        <div class=\"col s12 center sinPadding\">
          <a href=\"#\" class=\"btn-large anchoTotal sinPadding irPago pormayorUnico\">Continuar compra</a>
        </div>
      </div>
    ";
        }
        // line 670
        echo "  </main>

";
    }

    // line 674
    public function block_script($context, array $blocks = array())
    {
        // line 675
        echo "  <script>
    // var flagVariaciones = ";
        // line 676
        echo ($context["flagVariaciones"] ?? null);
        echo ";
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 679
        echo base_url("public/");
        echo "js/tienda/cart_despacho.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i");
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "tienda/micompra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  849 => 679,  843 => 676,  840 => 675,  837 => 674,  831 => 670,  818 => 659,  806 => 646,  794 => 622,  787 => 618,  781 => 615,  769 => 606,  756 => 595,  754 => 592,  728 => 565,  722 => 564,  716 => 563,  697 => 550,  695 => 549,  687 => 546,  683 => 544,  678 => 534,  674 => 532,  668 => 530,  666 => 529,  663 => 528,  655 => 526,  653 => 525,  648 => 523,  639 => 520,  634 => 517,  631 => 516,  627 => 515,  622 => 513,  619 => 512,  615 => 511,  519 => 417,  508 => 415,  504 => 414,  494 => 406,  488 => 374,  481 => 370,  474 => 366,  467 => 362,  436 => 333,  429 => 328,  418 => 306,  411 => 302,  405 => 299,  395 => 292,  379 => 278,  377 => 275,  355 => 252,  343 => 250,  328 => 241,  326 => 240,  318 => 237,  314 => 235,  308 => 225,  302 => 223,  299 => 222,  291 => 220,  289 => 219,  285 => 218,  276 => 215,  271 => 212,  268 => 211,  264 => 210,  259 => 208,  256 => 207,  252 => 206,  182 => 138,  180 => 112,  161 => 94,  150 => 92,  146 => 91,  133 => 81,  126 => 77,  118 => 72,  111 => 68,  75 => 35,  66 => 28,  64 => 27,  61 => 26,  58 => 25,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tienda/micompra.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\tienda\\micompra.twig");
    }
}
