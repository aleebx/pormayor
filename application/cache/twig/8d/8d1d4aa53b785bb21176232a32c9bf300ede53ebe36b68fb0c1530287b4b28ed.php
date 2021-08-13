<?php

/* vendedor/crear.twig */
class __TwigTemplate_41fc784ad3ce3947612539e658615d47fb90c433719962550d9c9522e19f8390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_ven.twig", "vendedor/crear.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_ven.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css\" rel=\"stylesheet\" />

";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <main>
      <div class=\"card\">
        <div class=\"card-content\">
              <span class=\"card-title center negrita\">REGISTRO DE PEDIDO</span>
              <div class=\"row\">
                <div class=\"col s12\">
                  <span class=\"card-title center negrita\">Datos del cliente</span>
                </div>
                <div class=\"input-field col s12\">
                  <i class=\"material-icons prefix\">person</i>
                  <input id=\"datoC\" type=\"text\" class=\"validate\">
                  <label for=\"datoC\">Datos Cliente*</label>
                </div>
                <div class=\"input-field col s12\">
                  <i class=\"material-icons prefix\">phone</i>
                  <input id=\"tlfC\" type=\"text\" class=\"validate\">
                  <label for=\"tlfC\">Teléfono de Contacto*</label>
                </div>  
                <div class=\"col s4\">
                  <select id=\"selecRegion\" class=\"browser-default\">
                    <option value=\"0\" disabled selected>Departamento</option>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["region"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 30
            echo "                      <option value=\"";
            echo $this->getAttribute($context["reg"], "id", array());
            echo "\">";
            echo $this->getAttribute($context["reg"], "name", array());
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                  </select>
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
                <div class=\"input-field col s12 l12\">
                  <i class=\"material-icons prefix\">store</i>
                  <input id=\"direccionComprador\" type=\"text\" class=\"validate\">
                  <label for=\"direccionComprador\">Dirección exacta*</label>
                </div>
                <div class=\"input-field col s12 l12\">
                  <i class=\"material-icons prefix\">room</i>
                  <input id=\"referenciaComprador\" type=\"text\" class=\"validate\" value=\"";
        // line 52
        echo $this->getAttribute(($context["direccion_usuario"] ?? null), "Pag_Referencia", array());
        echo "\">
                  <label for=\"referenciaComprador\">Referencia*</label>
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col s12\">
                  <span class=\"card-title center negrita\">Producto</span>
                </div>
                <div class=\"col s9 m9 l9\">
                  <label for=\"list_pro\">
                    Listado de productos
                    <select class=\"productosList browser-default\" id=\"list_pro\">
                      ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 66
            echo "                        <option value=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-title=\"";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "\" data-precio=\"";
            echo $this->getAttribute($context["pro"], "Pro_PrecioMaximo", array());
            echo "\">";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </select>
                  </label>
                </div>
                <div class=\"input-field col s3 m3 l3\">
                  <input id=\"cantidad\" type=\"number\" class=\"validate\">
                  <label for=\"cantidad\">Cantidad</label>
                </div>
                <div class=\"col s12 center\">
                  <a class=\"btn addPro\">AGREGAR</a>
                </div>
                <div class=\"col s12\">
                  <table class=\"bordered centered\">
                    <thead>
                      <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                      </tr>
                    </thead>
                    <tbody id=\"lista_producto\">

                    </tbody>
                  </table>
                </div>
                <div class=\"input-field col s12\">
                  <i class=\"material-icons prefix\">attach_money</i>
                  <input id=\"cobrar\" type=\"number\" class=\"validate\">
                  <label for=\"cobrar\">Monto a cobrar*</label>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col s12\">
                  <span class=\"card-title center negrita\">Adicional</span>
                </div>
                <div class=\"col s12\">
                  <select id=\"horario\">
                    <option value=\"\" disabled selected>Seleccione el horario</option>
                    <option value=\"TODO EL DÍA\">TODO EL DÍA</option>
                    <option value=\"MANANA\">MAÑANA</option>
                    <option value=\"TARDE\">TARDE</option>
                  </select>
                  <label>Horario Entrega*</label>
                </div>
                <div class=\"input-field col s12\">
                  <input id=\"observacion\" type=\"text\" class=\"validate\">
                  <label for=\"observacion\">Observaciones</label>
                </div>
              </div>

                <div class=\"col s12 center\">
                  <a class=\"btn-large green\" id=\"gPedido\"><i class=\"material-icons left\">save</i>GUARDAR</a>
                </div>
          </div>
        </div>
      </div>
    </main>
";
    }

    // line 125
    public function block_script($context, array $blocks = array())
    {
        // line 126
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js\"></script>
  <script src=\"";
        // line 127
        echo base_url("public/js/vendedor/crear.js");
        echo "\"></script>
  <script src=\"";
        // line 128
        echo base_url("public/");
        echo "plugins/gmaps.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "vendedor/crear.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 128,  204 => 127,  201 => 126,  198 => 125,  138 => 68,  123 => 66,  119 => 65,  103 => 52,  81 => 32,  70 => 30,  66 => 29,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vendedor/crear.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\vendedor\\crear.twig");
    }
}
