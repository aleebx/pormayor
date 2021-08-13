<?php

/* usuario/login.twig */
class __TwigTemplate_b2d2be2edd594921b3332cc8c97c6e867d0fca865ea44b8ef5aecc02e2755484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "usuario/login.twig", 1);
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
    .btn-flat-not:hover{color: white !important;background-color: #21478F ;}
    [type=\"checkbox\"].filled-in:checked + label:after {
      border: 2px solid #21478F;
      background-color: #21478F;
    }
    .error{
      color: red;
    }
  </style>
  <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 31
        echo base_url("public/intranet/css/autocomplete.min.css");
        echo "\"  media=\"screen\"/>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "  <main class=\"container fixContainer\">
    ";
        // line 35
        if (($context["success"] ?? null)) {
            // line 36
            echo "      ";
            if (form_error("correo")) {
                // line 37
                echo "        <input type=\"hidden\" class=\"validarCorreo\" value=\"Error\">
      ";
            }
            // line 39
            echo "    ";
        }
        // line 40
        echo "    

    <div class=\"row\">
      <div class=\"dividerMargin\"></div>
      <div class=\"col s12 m6 l6 center\">
        <br><br><br><br><br><br><br>
        <div class=\"preloader-wrapper big active\">
          <div class=\"spinner-layer\" style=\"border-color: #21478F\">
            <div class=\"circle-clipper left\">
              <div class=\"circle\"></div>
            </div><div class=\"gap-patch\">
              <div class=\"circle\"></div>
            </div><div class=\"circle-clipper right\">
              <div class=\"circle\"></div>
            </div>
          </div>
        </div>
      </div><br><br>
      <div class=\"col s12 m12 l8 offset-l2 loginContainer hide\">
        <div class=\"card centrarForzado\">
          <div class=\"row\">
            <div class=\"col s12\">
              <ul class=\"tabs valign-wrapper\">
                <li class=\"tab col s6\"><a href=\"#iniciar\" class=\" fontD2 transition negrita\">INICIAR SESIÓN</a></li>
                <li class=\"tab col s6\"><a href=\"#crear\" class=\"active fontD2 transition negrita\">CREAR CUENTA</a></li>
              </ul>
            </div>
            <div id=\"iniciar\" class=\"col s12\" >
              ";
        // line 68
        echo form_open("", array("role" => "form", "id" => "formulario_login", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarPersonales centrarForzado card-content\">
                ";
        // line 70
        if (($context["errors"] ?? null)) {
            // line 71
            echo "                  <div class=\"col s12 center hide\">
                    <input type=\"hidden\" class=\"validarCorreo2\" value=\"Error\">
                  </div> 
                ";
        }
        // line 75
        echo "                <div class=\"input-field col s12 l12\">
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
        // line 86
        echo base_url();
        echo "usuario/olvido_contrasenia\">¿Olvidaste tu contraseña?</a>
                </div>
                <div class=\"col s12\">
                  
                  <div class=\"divider dividerMargin\"></div>
                  <br>
                </div>
                ";
        // line 93
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 94
            echo "                  <div class=\"col l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR A PORMAYOR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div> ";
            // line 101
            echo "                ";
        } else {
            // line 102
            echo "                  <div class=\"col s12 l12 center\">
                    <input type=\"submit\" name=\"btnIngresar\" value=\"INGRESAR\" class=\"btn anchoTotal pormayor btnCrear pormayorAccent-text negrita\">
                  </div> ";
            // line 109
            echo "                ";
        }
        // line 110
        echo "                
              </div>
              ";
        // line 112
        echo form_close();
        echo "

            </div>
            <div id=\"crear\" class=\"col s12\">
              ";
        // line 116
        echo form_open("", array("role" => "form", "id" => "formulario_registro", "class" => "form form-horizontal formValidate", "method" => "post", "novalidate" => "novalidate"));
        echo "
              <div class=\"row validarTienda centrarForzado card-content\">
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">person</i>
                  <input type=\"text\" name=\"nombre\" id=\"nombre\"  class=\".form-group\" required=\"required\" ";
        // line 120
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("nombre");
        }
        echo "\">
                  <label for=\"nombre\">Nombre Completo</label>
                </div>
                <div class=\"input-field col s12 l6\">
                  <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
                  <input name=\"dni\" id=\"dni\" type=\"text\"  class=\".form-group\" placeholder=\"Ingresa tu DNI/CE/OTRO\" required=\"\" ";
        // line 125
        if (($context["success"] ?? null)) {
            echo " value=\"";
            echo set_value("dni");
        }
        echo "\">
                  <label for=\"dni\">DNI/CE/OTRO</label>
                </div>
                <div class=\"col s12 m12 l6 input-field positionRelative\">
                  <i class=\"material-icons prefix transitionB\">email</i>
                  <input name=\"correoA\" id=\"correoA\" type=\"email\" class=\"email .form-group\"  required=\"required\" placeholder=\"Ingresa tu correo de registro\" ";
        // line 130
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
        // line 137
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
        // line 142
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
        // line 148
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
        // line 160
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 161
            echo "                  <div class=\"col l12 center\">
                    <a class=\"btn pormayor anchoTotal btnRegistrarse disabled grey-text text-darken-4 negrita\">Registrarse</a>
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" class=\"hide anchoTotal btn pormayor\">
                  </div>";
            // line 169
            echo "                ";
        } else {
            // line 170
            echo "                  <div class=\"col s12 center\">
                    <a class=\"btn pormayor anchoTotal btnRegistrarse disabled grey-text text-darken-4 negrita\">Registrarse</a>
                    <input type=\"submit\" id=\"btnRegistrarse\" name=\"btnRegistrarse\" class=\"hide anchoTotal btn pormayor\">
                  </div> ";
            // line 177
            echo "  
                ";
        }
        // line 179
        echo "              </div>
              ";
        // line 180
        echo form_close();
        echo "
            </div>
          </div>
        </div>
      </div>
";
        // line 188
        echo "    </div>
  </main>
";
    }

    // line 192
    public function block_script($context, array $blocks = array())
    {
        // line 193
        echo "  <script>
    logInWithFacebook = function() {
      FB.login(function(response) 
      {
        if (response.authResponse) {
          //alert('You are logged in &amp; cookie set!');
          var accessToken = response.authResponse.accessToken;
          window.location.href = '";
        // line 200
        echo base_url();
        echo "usuario/fb_signin/'+accessToken;
        } 
        else 
        {
          alert('User cancelled login or did not fully authorize.');
        }
      }, {scope: 'public_profile, email'});
      return false;
    };

    window.fbAsyncInit = function() 
    {
      FB.init({
        appId: '";
        // line 213
        echo $this->getAttribute(($context["facebook"] ?? null), "id", array());
        echo "',
        cookie: true, // This is important, it's not enabled by default
        version: 'v2.2'
      });
    };

    (function(d, s, id)
    {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/en_US/sdk.js\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script src=\"";
        // line 228
        echo base_url("public/intranet/js/jquery-confirm.min.js");
        echo "\"></script> 
  <script src=\"";
        // line 229
        echo base_url("public/");
        echo "js/jquery.validate.js\"></script>
  <script src=\"";
        // line 230
        echo base_url("public/intranet/js/");
        echo "autocomplete.min.js\"></script>
  <script src=\"";
        // line 231
        echo base_url("public/js/usuario/");
        echo "login.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "usuario/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 231,  354 => 230,  350 => 229,  346 => 228,  328 => 213,  312 => 200,  303 => 193,  300 => 192,  294 => 188,  286 => 180,  283 => 179,  279 => 177,  274 => 170,  271 => 169,  266 => 161,  264 => 160,  247 => 148,  235 => 142,  223 => 137,  209 => 130,  198 => 125,  187 => 120,  180 => 116,  173 => 112,  169 => 110,  166 => 109,  162 => 102,  159 => 101,  155 => 94,  153 => 93,  143 => 86,  130 => 75,  124 => 71,  122 => 70,  117 => 68,  87 => 40,  84 => 39,  80 => 37,  77 => 36,  75 => 35,  72 => 34,  69 => 33,  63 => 31,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usuario/login.twig", "C:\\xampp\\htdocs\\pormayor2021\\application\\views\\usuario\\login.twig");
    }
}
