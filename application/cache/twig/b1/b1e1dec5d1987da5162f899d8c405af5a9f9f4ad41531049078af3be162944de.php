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
    <div class=\"card-panel center blue white-text fontD2\">
      Emprende con nosotros, puedes llevarte cualquier producto a precio por mayor con una compra mìnima de <b class=\"fontA\">S/100</b>
    </div>
      ";
        // line 43
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
                echo "          <div class=\"cart_content hide\">
            <div class=\"col l9\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix\"> 
                    
                    <div id=\"cart_details\">
                      
                    </div>
                    <div class=\"col s6 left-align\">
                      <a class=\"waves-effect waves-light btn-flat btn-flat-not transition\" href=\"";
                // line 73
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i>Seguir Comprando</a>
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
";
                // line 120
                echo "                    <div class=\"col s12 m12 l12 center sinPadding\">
                      ";
                // line 121
                if (($this->getAttribute(($context["usuario"] ?? null), "logueado", array()) && ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4))) {
                    // line 122
                    echo "                        ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 123
                        echo "                        <a href=\"";
                        echo base_url();
                        echo "productos/despacho\" class=\"btn anchoTotal pormayorUnico\">Comprar</a>
                        ";
                    } else {
                        // line 125
                        echo "                          <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                        ";
                    }
                    // line 127
                    echo "                      ";
                } else {
                    // line 128
                    echo "                        ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 129
                        echo "                        <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                        echo ($context["flag_login"] ?? null);
                        echo "\" href=\"#sesion_popup\">Comprar</a> 
                        ";
                    } else {
                        // line 131
                        echo "                          <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                        ";
                    }
                    // line 133
                    echo "                      ";
                }
                // line 134
                echo "                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                      <br>
                    </div>
                    <div class=\"col s6 sinPadding center valign-wrapper\" style=\"\">
                      <img class=\"centrarForzado\" src=\"";
                // line 140
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"45\" >
                    </div>
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton positionRelative\" src=\"";
                // line 144
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
                // line 168
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 169
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5>Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico\" href=\"";
                // line 176
                echo ($context["url_actual"] ?? null);
                echo "\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 180
            echo "        </div>
      ";
        } else {
            // line 182
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
            // line 191
            if ( !twig_test_empty(($context["carrito"] ?? null))) {
                // line 192
                echo "          <div class=\"cart_content hide\">
            <div class=\"col s12 sinPadding\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix\"> 
                    
                    <div id=\"cart_details\">
                      
                    </div>
                    <div class=\"col s12 center\">
                      <a class=\"waves-effect waves-light btn-flat btnFlatMobile transition pormayorUnico-text\" href=\"";
                // line 202
                echo ($context["url_actual"] ?? null);
                echo "\"><i class=\"material-icons left\">arrow_back</i>Seguir Comprando</a>
                      <br><br>
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
                    <div class=\"col s6 center\">
                      <img class=\"\" src=\"";
                // line 244
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"40\">
                    </div>       
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton \" src=\"";
                // line 248
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
                // line 273
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 274
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5 class=\"movilNoProduct\">Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico \" href=\"";
                // line 281
                echo ($context["url_actual"] ?? null);
                echo "\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 285
            echo "        </div>  
        <div class=\"row centrarForzado bottom0 anchoTotal white left0 setbuttonMobile transitionB\">
          <div class=\"col s4 valign-wrapper\" style=\"height:45px\">
            &nbsp;&nbsp;&nbsp;<span class=\"fontA\"><b class=\"cantResumen\"></b></span>&nbsp;&nbsp;<span class=\"enfasisB\">Unidades</span>
          </div>
          <div class=\"totalN1 col s4 right-align\" style=\"height:45px\">
            <span >S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen\"></b></span></span>
          </div>
          <div class=\"totalB1 hide col s4 right-align\" style=\"height:45px\">
            <span >S/&nbsp; <span class=\"fontC pormayorUnico-text\"><b class=\"totalResumen2\"></b></span></span>
          </div>
          <div class=\"col s12\">
            <div class=\"divider\"></div>
          </div>
          ";
            // line 302
            echo "          <div class=\"col s12 center sinPadding\">
            ";
            // line 303
            if (($this->getAttribute(($context["usuario"] ?? null), "logueado", array()) && ($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4))) {
                // line 304
                echo "              ";
                if ((($context["unidPe"] ?? null) >= 100)) {
                    // line 305
                    echo "                <a href=\"";
                    echo base_url();
                    echo "productos/despacho\" class=\"btn anchoTotal pormayorUnico\">Comprar</a>
              ";
                } else {
                    // line 307
                    echo "                <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
              ";
                }
                // line 309
                echo "            ";
            } else {
                // line 310
                echo "              ";
                if ((($context["unidPe"] ?? null) >= 100)) {
                    // line 311
                    echo "                <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                    echo ($context["flag_login"] ?? null);
                    echo "\" href=\"#sesion_popup\">Comprar</a> 
              ";
                } else {
                    // line 313
                    echo "                <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
              ";
                }
                // line 315
                echo "            ";
            }
            // line 316
            echo "          </div>
        </div>
      ";
        }
        // line 319
        echo "
      <div id=\"sesion_popup\" class=\"modal white\">
        <div class=\"modal-content positionRelative\" style=\"padding-top:0px\">
          <a href=\"#\" class=\"modal-action modal-close waves-effect waves-red btn-flat positionAbsolute\"><i class=\"material-icons sinUser\">close</i></a>
          <div class=\"row ";
        // line 323
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "centrarForzado";
        }
        echo "\">
            <div class=\"col s12 ";
        // line 324
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
        // line 331
        echo form_open("", array("role" => "form", "id" => "formulario_login", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarPersonales centrarForzado card-content sinPadding\">
                ";
        // line 333
        if (($context["errors"] ?? null)) {
            // line 334
            echo "                  <div class=\"col s12 center hide\">
                    <input type=\"hidden\" class=\"validarCorreo2\" value=\"Error\">
                  </div> 
                ";
        }
        // line 338
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
        // line 350
        echo base_url();
        echo "usuario/olvido_contrasenia\">¿Olvidaste tu contraseña?</a>
                </div>
                <div class=\"col s12\">
                  
                  <div class=\"divider dividerMargin\"></div>
                  <br>
                </div>
                ";
        // line 357
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 358
            echo "                  <div class=\"col l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR A PORMAYOR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  ";
            // line 365
            echo "                ";
        } else {
            // line 366
            echo "                  <div class=\"col s12 l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  
             ";
            // line 373
            echo "                ";
        }
        // line 374
        echo "              </div>
              ";
        // line 375
        echo form_close();
        echo "
            </div>
            <div id=\"crear\" class=\"col s12\">
              ";
        // line 378
        echo form_open("", array("role" => "form", "id" => "formulario_registro", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarTienda centrarForzado card-content sinPadding\">
                ";
        // line 380
        if (($context["success"] ?? null)) {
            // line 381
            echo "                  ";
            if (form_error("correo")) {
                // line 382
                echo "                    <input type=\"hidden\" class=\"validarCorreo\" value=\"Error\">
                  ";
            }
            // line 384
            echo "                ";
        }
        // line 385
        echo "                <br>
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
                  <input name=\"dni\" id=\"dni\" type=\"text\"  class=\".form-group\" placeholder=\"Ingresa tu DNI\" required=\"\" ";
        // line 388
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
        // line 393
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
        // line 398
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
        // line 405
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
        // line 410
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
        // line 416
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
        // line 428
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 429
            echo "                  <div class=\"col l12 center\">
                    <a class=\"btn pormayor anchoTotal btnRegistrarse disabled grey-text text-darken-4 negrita\">Registrarse</a>
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" class=\"hide anchoTotal btn pormayor  \">
                  </div> ";
            // line 437
            echo "                ";
        } else {
            // line 438
            echo "                  <div class=\"col s12 center\">
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" value=\"Registrarse\" class=\"anchoTotal disabled btnRegistrarse btn pormayor  btnCrear grey-text text-darken-4 negrita\">
                  </div>";
            // line 444
            echo " 
                ";
        }
        // line 446
        echo "                
              </div>
              ";
        // line 448
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

    // line 460
    public function block_script($context, array $blocks = array())
    {
        // line 461
        echo "  <script>
    var flagVariaciones = ";
        // line 462
        echo ($context["flagVariaciones"] ?? null);
        echo ";
  </script>
  <script src=\"";
        // line 464
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"";
        // line 465
        echo base_url("public/");
        echo "js/jquery.validate.js\"></script>
  <script src=\"";
        // line 466
        echo base_url("public/intranet/js/");
        echo "autocomplete.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 468
        echo base_url("public/");
        echo "js/tienda/cart_resumen.js?v=2607\"></script>
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
        return array (  699 => 468,  694 => 466,  690 => 465,  686 => 464,  681 => 462,  678 => 461,  675 => 460,  660 => 448,  656 => 446,  652 => 444,  648 => 438,  645 => 437,  640 => 429,  638 => 428,  621 => 416,  609 => 410,  597 => 405,  583 => 398,  572 => 393,  561 => 388,  556 => 385,  553 => 384,  549 => 382,  546 => 381,  544 => 380,  539 => 378,  533 => 375,  530 => 374,  527 => 373,  522 => 366,  519 => 365,  515 => 358,  513 => 357,  503 => 350,  489 => 338,  483 => 334,  481 => 333,  476 => 331,  464 => 324,  458 => 323,  452 => 319,  447 => 316,  444 => 315,  440 => 313,  434 => 311,  431 => 310,  428 => 309,  424 => 307,  418 => 305,  415 => 304,  413 => 303,  410 => 302,  394 => 285,  387 => 281,  377 => 274,  374 => 273,  346 => 248,  339 => 244,  294 => 202,  282 => 192,  280 => 191,  269 => 182,  265 => 180,  258 => 176,  248 => 169,  245 => 168,  218 => 144,  211 => 140,  203 => 134,  200 => 133,  196 => 131,  190 => 129,  187 => 128,  184 => 127,  180 => 125,  174 => 123,  171 => 122,  169 => 121,  166 => 120,  119 => 73,  107 => 63,  105 => 62,  85 => 44,  83 => 43,  77 => 39,  74 => 38,  68 => 36,  33 => 3,  30 => 2,  11 => 1,);
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
