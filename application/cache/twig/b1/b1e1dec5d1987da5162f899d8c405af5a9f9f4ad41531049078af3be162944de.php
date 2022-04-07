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
                if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                    // line 122
                    echo "                        ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                        // line 123
                        echo "                          ";
                        if ((($context["unidPe"] ?? null) >= 100)) {
                            // line 124
                            echo "                          <a href=\"";
                            echo base_url();
                            echo "productos/despacho\" class=\"btn anchoTotal pormayorUnico\">Comprar</a>
                          ";
                        } else {
                            // line 126
                            echo "                            <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                          ";
                        }
                        // line 128
                        echo "                        ";
                    } else {
                        // line 129
                        echo "                            <span class=\"red-text\">NO PUEDES HACER COMPRA CON ESTE USUARIO</span>
                        ";
                    }
                    // line 131
                    echo "                    ";
                } else {
                    // line 132
                    echo "                        ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 133
                        echo "                        <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                        echo ($context["flag_login"] ?? null);
                        echo "\" href=\"#sesion_popup\">Comprar</a> 
                        ";
                    } else {
                        // line 135
                        echo "                          <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                        ";
                    }
                    // line 137
                    echo "                      ";
                }
                // line 138
                echo "                    </div>
                    <div class=\"col s12\">
                      <div class=\"divider dividerMargin\"></div>
                      <br>
                    </div>
                    <div class=\"col s6 sinPadding center valign-wrapper\" style=\"\">
                      <img class=\"centrarForzado\" src=\"";
                // line 144
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"45\" >
                    </div>
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton positionRelative\" src=\"";
                // line 148
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
                // line 172
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 173
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5>Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico\" href=\"";
                // line 180
                echo ($context["url_actual"] ?? null);
                echo "\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 184
            echo "        </div>
      ";
        } else {
            // line 186
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
            // line 195
            if ( !twig_test_empty(($context["carrito"] ?? null))) {
                // line 196
                echo "          <div class=\"cart_content hide\">
            <div class=\"col s12 sinPadding\">
              <div class=\"card\">
                <div class=\"card-content sinPadding\">
                  <div class=\"row cardContentFix\"> 
                    
                    <div id=\"cart_details\">
                      
                    </div>
                    <div class=\"col s12 right-align\">
                      <button class=\"waves-effect waves-light btn-flat clear_cart\"><i class=\"material-icons left\">delete_sweep</i><u>Vaciar Carrito</u></button>
                    </div>
                    <div class=\"col s12 center\">
                      <a class=\"waves-effect waves-light btn-flat btnFlatMobile transition pormayorUnico-text\" href=\"";
                // line 209
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
                     <div class=\"col s12 center sinPadding\">
                      ";
                // line 251
                if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                    // line 252
                    echo "                        ";
                    if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                        // line 253
                        echo "                          ";
                        if ((($context["unidPe"] ?? null) >= 100)) {
                            // line 254
                            echo "                            <a href=\"";
                            echo base_url();
                            echo "productos/despacho\" class=\"btn-large anchoTotal pormayorUnico\">Comprar</a>
                          ";
                        } else {
                            // line 256
                            echo "                            <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                          ";
                        }
                        // line 258
                        echo "                        ";
                    } else {
                        // line 259
                        echo "                            <span class=\"red-text\">NO PUEDES HACER COMPRA CON ESTE USUARIO</span>
                        ";
                    }
                    // line 261
                    echo "                      ";
                } else {
                    // line 262
                    echo "                        ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 263
                        echo "                          <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                        echo ($context["flag_login"] ?? null);
                        echo "\" href=\"#sesion_popup\">Comprar</a> 
                        ";
                    } else {
                        // line 265
                        echo "                          <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                        ";
                    }
                    // line 267
                    echo "                      ";
                }
                // line 268
                echo "                      <br><br>
                    </div>
                    <div class=\"col s6 center\">
                      <img class=\"\" src=\"";
                // line 271
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"40\">
                    </div>       
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton \" src=\"";
                // line 275
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
                // line 300
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 301
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5 class=\"movilNoProduct\">Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico \" href=\"";
                // line 308
                echo ($context["url_actual"] ?? null);
                echo "\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 312
            echo "         </div>
        <br>
        <br>
      ";
        }
        // line 316
        echo "
      <div id=\"sesion_popup\" class=\"modal white\">
        <div class=\"modal-content positionRelative\" style=\"padding-top:0px\">
          <a href=\"#\" class=\"modal-action modal-close waves-effect waves-red btn-flat positionAbsolute\"><i class=\"material-icons sinUser\">close</i></a>
          <div class=\"row ";
        // line 320
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "centrarForzado";
        }
        echo "\">
            <div class=\"col s12 ";
        // line 321
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
        // line 328
        echo form_open("", array("role" => "form", "id" => "formulario_login", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarPersonales centrarForzado card-content sinPadding\">
                ";
        // line 330
        if (($context["errors"] ?? null)) {
            // line 331
            echo "                  <div class=\"col s12 center hide\">
                    <input type=\"hidden\" class=\"validarCorreo2\" value=\"Error\">
                  </div> 
                ";
        }
        // line 335
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
        // line 347
        echo base_url();
        echo "usuario/olvido_contrasenia\">¿Olvidaste tu contraseña?</a>
                </div>
                <div class=\"col s12\">
                  
                  <div class=\"divider dividerMargin\"></div>
                  <br>
                </div>
                ";
        // line 354
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 355
            echo "                  <div class=\"col l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR A PORMAYOR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  ";
            // line 362
            echo "                ";
        } else {
            // line 363
            echo "                  <div class=\"col s12 l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  
             ";
            // line 370
            echo "                ";
        }
        // line 371
        echo "              </div>
              ";
        // line 372
        echo form_close();
        echo "
            </div>
            <div id=\"crear\" class=\"col s12\">
              ";
        // line 375
        echo form_open("", array("role" => "form", "id" => "formulario_registro", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarTienda centrarForzado card-content sinPadding\">
                ";
        // line 377
        if (($context["success"] ?? null)) {
            // line 378
            echo "                  ";
            if (form_error("correo")) {
                // line 379
                echo "                    <input type=\"hidden\" class=\"validarCorreo\" value=\"Error\">
                  ";
            }
            // line 381
            echo "                ";
        }
        // line 382
        echo "                <br>
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
                  <input name=\"dni\" id=\"dni\" type=\"text\"  class=\".form-group\" placeholder=\"Ingresa tu DNI\" required=\"\" ";
        // line 385
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
        // line 390
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
        // line 395
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
        // line 402
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
        // line 407
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
        // line 413
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
        // line 425
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 426
            echo "                  <div class=\"col l12 center\">
                    <a class=\"btn pormayor anchoTotal btnRegistrarse disabled grey-text text-darken-4 negrita\">Registrarse</a>
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" class=\"hide anchoTotal btn pormayor  \">
                  </div> ";
            // line 434
            echo "                ";
        } else {
            // line 435
            echo "                  <div class=\"col s12 center\">
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" value=\"Registrarse\" class=\"anchoTotal disabled btnRegistrarse btn pormayor  btnCrear grey-text text-darken-4 negrita\">
                  </div>";
            // line 441
            echo " 
                ";
        }
        // line 443
        echo "                
              </div>
              ";
        // line 445
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

    // line 457
    public function block_script($context, array $blocks = array())
    {
        // line 458
        echo "  <script>
    var flagVariaciones = ";
        // line 459
        echo ($context["flagVariaciones"] ?? null);
        echo ";
  </script>
  <script src=\"";
        // line 461
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"";
        // line 462
        echo base_url("public/");
        echo "js/jquery.validate.js\"></script>
  <script src=\"";
        // line 463
        echo base_url("public/intranet/js/");
        echo "autocomplete.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 465
        echo base_url("public/");
        echo "js/tienda/cart_resumen.js?v=0704\"></script>
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
        return array (  707 => 465,  702 => 463,  698 => 462,  694 => 461,  689 => 459,  686 => 458,  683 => 457,  668 => 445,  664 => 443,  660 => 441,  656 => 435,  653 => 434,  648 => 426,  646 => 425,  629 => 413,  617 => 407,  605 => 402,  591 => 395,  580 => 390,  569 => 385,  564 => 382,  561 => 381,  557 => 379,  554 => 378,  552 => 377,  547 => 375,  541 => 372,  538 => 371,  535 => 370,  530 => 363,  527 => 362,  523 => 355,  521 => 354,  511 => 347,  497 => 335,  491 => 331,  489 => 330,  484 => 328,  472 => 321,  466 => 320,  460 => 316,  454 => 312,  447 => 308,  437 => 301,  434 => 300,  406 => 275,  399 => 271,  394 => 268,  391 => 267,  387 => 265,  381 => 263,  378 => 262,  375 => 261,  371 => 259,  368 => 258,  364 => 256,  358 => 254,  355 => 253,  352 => 252,  350 => 251,  305 => 209,  290 => 196,  288 => 195,  277 => 186,  273 => 184,  266 => 180,  256 => 173,  253 => 172,  226 => 148,  219 => 144,  211 => 138,  208 => 137,  204 => 135,  198 => 133,  195 => 132,  192 => 131,  188 => 129,  185 => 128,  181 => 126,  175 => 124,  172 => 123,  169 => 122,  167 => 121,  164 => 120,  117 => 73,  105 => 63,  103 => 62,  83 => 44,  80 => 43,  77 => 39,  74 => 38,  68 => 36,  33 => 3,  30 => 2,  11 => 1,);
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
