<?php

/* registro.twig */
class __TwigTemplate_256b3e84abfb5c1a60dcecf3fd6b47cf9fcf82fb97b4b7ac3821cefd8283385c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_lite.twig", "registro.twig", 1);
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

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "  <div  id=\"main\">
  <div class=\"content-wrapper-before gradient-45deg-yellow\"></div>
  <main class=\"container fixContainer\">
    <br class=\"hide-on-large-only\"><br class=\"hide-on-large-only\">
    ";
        // line 30
        if ((($context["noVer"] ?? null) == false)) {
            // line 31
            echo "        <div class=\"row \">
            <div class=\"col s12 m12 l8\">
                <div class=\"card\">                  
                  <div class=\"card-content\">
                    <form id=\"form-registro\" method=\"POST\" action=\"";
            // line 35
            echo base_url();
            echo "vnd/registrar2\" autocomplete=\"off\">                
                      <div class=\"row validarTienda centrarForzado card-content\">
                        <span class=\"card-title center\">REGISTRATE EN <b>PORMAYOR.PE</b></span>
                        <h6 class=\"center fontB2\">Hola, amigo emprededor. Me llamo <b>";
            // line 38
            echo $this->getAttribute(($context["vendedor"] ?? null), "Per_Nombre", array());
            echo "</b> y será tu asesor de ventas en PorMayor.pe. Si tienes alguna duda o consulta puedes llamarme al <a class=\"green-text fontA\" href=\"tel:+51";
            echo $this->getAttribute(($context["vendedor"] ?? null), "Per_Telefono", array());
            echo "\">";
            echo $this->getAttribute(($context["vendedor"] ?? null), "Per_Telefono", array());
            echo "</a></h6>
                        <h6 class=\"center negrita\">Completa todos los datos para que disfrutes de estos grandiosos precios</h6>
                        <div class=\"col s12\">
                          <div class=\"divider dividerMargin\"></div>
                        </div>
                        <div class=\"input-field col s12 l6\">
                          <i class=\"material-icons prefix transitionB\">person</i>
                          <input type=\"text\" name=\"nombre\" id=\"nombre\" placeholder=\"Nombre y apellido Completo\" required> 
                          <label for=\"nombre\">Nombre Completo</label>
                        </div>
                        <div class=\"input-field col s12 l6\">
                          <i class=\"material-icons prefix transitionB\">chrome_reader_mode</i>
                          <input name=\"dni\" id=\"dni\" type=\"number\" placeholder=\"Ingresa tu DNI/CE/OTRO\" required>
                          <label for=\"dni\">DNI/CE/OTRO</label>
                        </div>
                        <div class=\"col s12 m12 l6 input-field positionRelative\">
                          <i class=\"material-icons prefix transitionB\">email</i>
                          <input name=\"correoA\" id=\"correoA\" type=\"email\"  placeholder=\"Ingresa tu correo electrónico\" required>
                          <label for=\"correoA\">Correo electrónico</label>
                        </div>
                        <div class=\"col s12 m12 l6 input-field positionRelative\">
                          <i class=\"material-icons prefix transitionB\">phone</i>
                          <input name=\"celular\" id=\"celular\" type=\"number\" pattern=\"/^-?\\d+\\.?\\d*\$/\" onKeyPress=\"if(this.value.length==9) return false;\" placeholder=\"Ingresa tu celular de contacto\" required>
                          <label for=\"icon_prefix\">Teléfono</label>
                        </div>
                        <div class=\"input-field col s12 l12\">
                          <i class=\"material-icons prefix transitionB\">lock</i>
                          <input name=\"clave\" type=\"password\" id=\"clave\"  autocomplete=\"new-password\" required>
                          <label for=\"clave\">Contraseña para <b>pormayor.pe</b></label>
                        </div>
                        <div class=\"input-field col s12 l12\">
                          <i class=\"material-icons prefix transitionB\">lock</i>
                          <input name=\"clave2\" type=\"password\" id=\"clave2\"  autocomplete=\"new-password\" required>
                          <label for=\"clave2\">Confirmar Contraseña</label>
                        </div>
                        <div class=\"input-field col s12 l12 hide\">
                          <i class=\"material-icons prefix transitionB\">star</i>
                          <input name=\"vendedor\" type=\"text\" id=\"vendedor\" value=\"";
            // line 75
            echo ($context["id_vendedor"] ?? null);
            echo "\">
                          <label for=\"clave2\">Codigo Emprendedor</label>
                        </div>
                        <div class=\"col l12 center\">
                          <button class=\"btn pormayor black-text\">Guardar</button>
                        <h6 class=\"center\">Emprende con nosotros, puedes llevarte cualquier producto a precio por mayor con una compra mínima de S/100</h6>
                        </div>
                      </form>
                  </div>                
                </div>
            </div>
        </div>
    ";
        }
        // line 88
        echo "        <div class=\"row\">
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 90
            echo "        <a itemprop=\"url\" href=\"";
            echo base_url();
            echo "productos/dp/";
            echo $this->getAttribute($context["pro"], "url", array());
            echo "\" data-idproducto=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-nombre=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\">
            <div class=\"col s6 m6 l2 black-text\" style=\"padding:5px\" data-cd=\"";
            // line 91
            echo $this->getAttribute($context["pro"], "Pro_PM", array());
            echo "\">
              <div class=\"card hoverable z-depth-0\">
                <div class=\"center\" style=\"height:190px;\">
                  <img alt=\"";
            // line 94
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "-Pormayor.pe\" title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" class=\"lazy responsive-img fixImg3 redondeo\"data-src=\"";
            echo ($context["ruta_img"] ?? null);
            echo $this->getAttribute($context["pro"], "Prf_Thumb", array());
            echo "\">
                </div>
                <div class=\"card-content center\" style=\"height:100px;\">
                  <p>
                    <span class=\"truncate\">";
            // line 98
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</span>
                    ";
            // line 99
            if (($this->getAttribute($context["pro"], "Pro_Preventa", array()) == 1)) {
                // line 100
                echo "                    <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor<span class=\"new badge blue left\">PRE-VENTA</span>
                    ";
            } else {
                // line 102
                echo "                    <span class=\"fontA negrita\">S/ ";
                echo $this->getAttribute($context["pro"], "Pro_PrecioMinimo", array());
                echo "</span> x mayor</label>
                    ";
            }
            // line 104
            echo "                  </p>
                </div>
              </div>
            </div>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "      </div>
</main>
</div>
";
    }

    // line 115
    public function block_script($context, array $blocks = array())
    {
        // line 116
        echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js\"></script>

  <script src=\"";
        // line 119
        echo base_url("public/js/vendedor/");
        echo "login.js?v=";
        echo twig_date_format_filter($this->env, ($context["now"] ?? null), "i:s");
        echo "\"></script>
    <script src=\"";
        // line 120
        echo base_url("public/");
        echo "js/index.js?v=5\"></script>
  
";
    }

    public function getTemplateName()
    {
        return "registro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 120,  221 => 119,  216 => 116,  213 => 115,  206 => 110,  195 => 104,  189 => 102,  183 => 100,  181 => 99,  177 => 98,  165 => 94,  159 => 91,  148 => 90,  144 => 89,  141 => 88,  125 => 75,  81 => 38,  75 => 35,  69 => 31,  67 => 30,  61 => 26,  58 => 25,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registro.twig", "C:\\xampp\\htdocs\\pormayor\\application\\views\\registro.twig");
    }
}
