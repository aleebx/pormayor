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
                    <div class=\"col s12 center\">
                      <a class=\"waves-effect waves-light btn-flat btnFlatMobile transition pormayorUnico-text\" href=\"";
                // line 206
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
                // line 248
                echo ($context["ruta_img"] ?? null);
                echo "safety_pay.webp\" height=\"40\">
                    </div>       
                    <div class=\"col s6 positionRelative center-align valign-wrapper\">
                      <a class=\"centrarForzado\" href=\"https://pormayor.pe/legal/compra_segura\">
                        <img alt=\"Pormayor.pe - Rate\" class=\"linkCompraSegura transition comoBoton \" src=\"";
                // line 252
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
                // line 277
                echo "              <div class=\"center col s12 m12 l12\" style=\"margin-top: 20px;\">
                <img src=\"";
                // line 278
                echo ($context["ruta_img"] ?? null);
                echo "emptyCart.webp\" height=\"150\"></img>
              </div>
              <div class=\"center col s12 m12 l12\">
                <h5 class=\"movilNoProduct\">Sin productos agregados</h5>
                <p class=\"enfasisB\">No haz agregado productos para comprar</p>
              </div>
              <div class=\"center col s12 m12 l12\">
                <a class=\"btn pormayorUnico \" href=\"";
                // line 285
                echo ($context["url_actual"] ?? null);
                echo "\">Ir a comprar</a>
                <br><br>
              </div>
          ";
            }
            // line 289
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
            // line 306
            echo "          <div class=\"col s12 center sinPadding\">
            ";
            // line 307
            if ($this->getAttribute(($context["usuario"] ?? null), "logueado", array())) {
                // line 308
                echo "              ";
                if (($this->getAttribute(($context["usuario"] ?? null), "rol", array()) == 4)) {
                    // line 309
                    echo "                ";
                    if ((($context["unidPe"] ?? null) >= 100)) {
                        // line 310
                        echo "                  <a href=\"";
                        echo base_url();
                        echo "productos/despacho\" class=\"btn anchoTotal pormayorUnico\">Comprar</a>
                ";
                    } else {
                        // line 312
                        echo "                  <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
                ";
                    }
                    // line 314
                    echo "              ";
                } else {
                    // line 315
                    echo "                  <span class=\"red-text\">NO PUEDES HACER COMPRA CON ESTE USUARIO</span>
              ";
                }
                // line 317
                echo "            ";
            } else {
                // line 318
                echo "              ";
                if ((($context["unidPe"] ?? null) >= 100)) {
                    // line 319
                    echo "                <a class=\"waves-effect waves-light btn anchoTotal pormayorUnico modal-trigger comprar_popup\" data-flag=\"";
                    echo ($context["flag_login"] ?? null);
                    echo "\" href=\"#sesion_popup\">Comprar</a> 
              ";
                } else {
                    // line 321
                    echo "                <span class=\"yellow red-text\">DEBES AGREGAR ALGO MAS PARA CONTINUAR, COMPRA MÍNIMA DE 100 SOLES</span>
              ";
                }
                // line 323
                echo "            ";
            }
            // line 324
            echo "          </div>
        </div>
      ";
        }
        // line 327
        echo "
      <div id=\"sesion_popup\" class=\"modal white\">
        <div class=\"modal-content positionRelative\" style=\"padding-top:0px\">
          <a href=\"#\" class=\"modal-action modal-close waves-effect waves-red btn-flat positionAbsolute\"><i class=\"material-icons sinUser\">close</i></a>
          <div class=\"row ";
        // line 331
        if ((($context["userAgent"] ?? null) != "PC")) {
            echo "centrarForzado";
        }
        echo "\">
            <div class=\"col s12 ";
        // line 332
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
        // line 339
        echo form_open("", array("role" => "form", "id" => "formulario_login", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarPersonales centrarForzado card-content sinPadding\">
                ";
        // line 341
        if (($context["errors"] ?? null)) {
            // line 342
            echo "                  <div class=\"col s12 center hide\">
                    <input type=\"hidden\" class=\"validarCorreo2\" value=\"Error\">
                  </div> 
                ";
        }
        // line 346
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
        // line 358
        echo base_url();
        echo "usuario/olvido_contrasenia\">¿Olvidaste tu contraseña?</a>
                </div>
                <div class=\"col s12\">
                  
                  <div class=\"divider dividerMargin\"></div>
                  <br>
                </div>
                ";
        // line 365
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 366
            echo "                  <div class=\"col l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR A PORMAYOR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  ";
            // line 373
            echo "                ";
        } else {
            // line 374
            echo "                  <div class=\"col s12 l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div>  
             ";
            // line 381
            echo "                ";
        }
        // line 382
        echo "              </div>
              ";
        // line 383
        echo form_close();
        echo "
            </div>
            <div id=\"crear\" class=\"col s12\">
              ";
        // line 386
        echo form_open("", array("role" => "form", "id" => "formulario_registro", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarTienda centrarForzado card-content sinPadding\">
                ";
        // line 388
        if (($context["success"] ?? null)) {
            // line 389
            echo "                  ";
            if (form_error("correo")) {
                // line 390
                echo "                    <input type=\"hidden\" class=\"validarCorreo\" value=\"Error\">
                  ";
            }
            // line 392
            echo "                ";
        }
        // line 393
        echo "                <br>
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
                  <input name=\"dni\" id=\"dni\" type=\"text\"  class=\".form-group\" placeholder=\"Ingresa tu DNI\" required=\"\" ";
        // line 396
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
        // line 401
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
        // line 406
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
        // line 413
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
        // line 418
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
        // line 424
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
        // line 436
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 437
            echo "                  <div class=\"col l12 center\">
                    <a class=\"btn pormayor anchoTotal btnRegistrarse disabled grey-text text-darken-4 negrita\">Registrarse</a>
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" class=\"hide anchoTotal btn pormayor  \">
                  </div> ";
            // line 445
            echo "                ";
        } else {
            // line 446
            echo "                  <div class=\"col s12 center\">
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" value=\"Registrarse\" class=\"anchoTotal disabled btnRegistrarse btn pormayor  btnCrear grey-text text-darken-4 negrita\">
                  </div>";
            // line 452
            echo " 
                ";
        }
        // line 454
        echo "                
              </div>
              ";
        // line 456
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

    // line 468
    public function block_script($context, array $blocks = array())
    {
        // line 469
        echo "  <script>
    var flagVariaciones = ";
        // line 470
        echo ($context["flagVariaciones"] ?? null);
        echo ";
  </script>
  <script src=\"";
        // line 472
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"";
        // line 473
        echo base_url("public/");
        echo "js/jquery.validate.js\"></script>
  <script src=\"";
        // line 474
        echo base_url("public/intranet/js/");
        echo "autocomplete.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 476
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
        return array (  719 => 476,  714 => 474,  710 => 473,  706 => 472,  701 => 470,  698 => 469,  695 => 468,  680 => 456,  676 => 454,  672 => 452,  668 => 446,  665 => 445,  660 => 437,  658 => 436,  641 => 424,  629 => 418,  617 => 413,  603 => 406,  592 => 401,  581 => 396,  576 => 393,  573 => 392,  569 => 390,  566 => 389,  564 => 388,  559 => 386,  553 => 383,  550 => 382,  547 => 381,  542 => 374,  539 => 373,  535 => 366,  533 => 365,  523 => 358,  509 => 346,  503 => 342,  501 => 341,  496 => 339,  484 => 332,  478 => 331,  472 => 327,  467 => 324,  464 => 323,  460 => 321,  454 => 319,  451 => 318,  448 => 317,  444 => 315,  441 => 314,  437 => 312,  431 => 310,  428 => 309,  425 => 308,  423 => 307,  420 => 306,  404 => 289,  397 => 285,  387 => 278,  384 => 277,  356 => 252,  349 => 248,  304 => 206,  292 => 196,  290 => 195,  279 => 186,  275 => 184,  268 => 180,  258 => 173,  255 => 172,  228 => 148,  221 => 144,  213 => 138,  210 => 137,  206 => 135,  200 => 133,  197 => 132,  194 => 131,  190 => 129,  187 => 128,  183 => 126,  177 => 124,  174 => 123,  171 => 122,  169 => 121,  166 => 120,  119 => 73,  107 => 63,  105 => 62,  85 => 44,  83 => 43,  77 => 39,  74 => 38,  68 => 36,  33 => 3,  30 => 2,  11 => 1,);
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
