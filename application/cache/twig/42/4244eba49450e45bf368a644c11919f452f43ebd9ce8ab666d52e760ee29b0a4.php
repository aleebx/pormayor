<?php

/* admin/ventas/index.twig */
class __TwigTemplate_b5fcb47a37066020315f13889488470b28c57b65280fbab126e93751608728cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/ventas/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/intranet/template_adm.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css\"  media=\"screen\"/>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"container\">
    <div class=\"card\">
      <div class=\"card-content\">
        <span class=\"card-title center\">REGISTRAR COMPRA <b>PAGO CONTRAENTREGA</b></span>
        <div class=\"row\">
          <div>
            <input type=\"hidden\" id=\"peso\" name=\"peso\">
            <input type=\"hidden\" id=\"costoReal\" name=\"costoReal\">
            <input type=\"hidden\" id=\"dimension\" name=\"dimension\">
            <input type=\"hidden\" id=\"precioTotals\" name=\"precioTotals\">
            <input type=\"hidden\" id=\"precioEnvios\" name=\"precioEnvios\">
            <input type=\"hidden\" id=\"precioPagars\" name=\"precioPagars\">
            <input type=\"hidden\" id=\"regionOcult\" value=\"";
        // line 18
        echo $this->getAttribute(($context["compradores"] ?? null), "Region_id", array());
        echo "\">
            <input type=\"hidden\" id=\"idUsuario\" value=\"";
        // line 19
        echo $this->getAttribute(($context["compradores"] ?? null), "Usu_IdUsuario", array());
        echo "\">
            <input type=\"hidden\" id=\"idPersona\" value=\"";
        // line 20
        echo $this->getAttribute(($context["compradores"] ?? null), "Per_IdPersona", array());
        echo "\">
            <input type=\"hidden\" id=\"provinciaOcult\" value=\"";
        // line 21
        echo $this->getAttribute(($context["compradores"] ?? null), "Provincia_id", array());
        echo "\">
            <input type=\"hidden\" id=\"departamentoOcult\" value=\"";
        // line 22
        echo $this->getAttribute(($context["compradores"] ?? null), "Distrito_id", array());
        echo "\">
          </div>
          <div class=\"col s12 l12 pormayorUnico\">
            <span class=\"card-title white-text\">DATOS DEL <b>CLIENTE</b></span>
            <div class=\"divider\" style=\"border-bottom:3px solid #21478f;\"></div>
          </div>
          <div class=\"input-field col s4\">
            <input placa id=\"DNIORUC\" name=\"DNIORUC\" type=\"number\" class=\"validate\">
            <label for=\"DNIORUC\">DNI/CE/OTRO</label>
          </div>
          <div class=\"input-field col s4\">
            <input id=\"nombreComprador\" name=\"nombreComprador\" type=\"text\" class=\"validate\">
            <label for=\"nombreComprador\">NOMBRE COMPRADOR</label>
          </div>
          <div class=\"input-field col s4\">
            <input id=\"tlf\" name=\"tlf\" type=\"number\" class=\"validate\" min=\"1\">
            <label for=\"tlf\">TELÉFONO CELULAR</label>
          </div>
          <div class=\"input-field col s12\">
            <input id=\"correo\" name=\"correo\" type=\"email\" class=\"validate\">
            <label for=\"correo\">CORREO ELECTRÓNICO</label>
          </div>

          <div class=\"col s12 l12 pormayorUnico\">
            <span class=\"card-title white-text\"><b>DIRECCIÓN</b> DE ENTREGA</span>
            <div class=\"divider\" style=\"border-bottom:3px solid #21478f;\"></div>            
          </div>
          <div class=\"col s4\">
            <label style=\"font-size:15px;\">DEPARTAMENTO</label>
            <select name=\"selectRegion\" id=\"selectRegion\" class=\"browser-default\" onchange=\"getProvinces()\">
              <option value=\"0\" disabled selected> Seleccione un Departamento</option>
              ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["region_tienda"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 54
            echo "                ";
            if (($this->getAttribute(($context["compradores"] ?? null), "Region_id", array()) == $this->getAttribute($context["reg"], "id", array()))) {
                // line 55
                echo "                  <option value=\"";
                echo $this->getAttribute($context["reg"], "id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["reg"], "name", array());
                echo "</option>
                ";
            } else {
                // line 57
                echo "                  <option value=\"";
                echo $this->getAttribute($context["reg"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["reg"], "name", array());
                echo "</option>
                ";
            }
            // line 59
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </select>
          </div>
          <div class=\"col s4\">
            <label style=\"font-size:15px;\">PROVINCIA</label>
            <select class=\"browser-default\" id=\"selectProvincia\" name=\"selectProvincia\" onchange=\"getDistrito()\"></select>
          </div>
          <div class=\"col s4\">
            <label style=\"font-size:15px;\">DISTRITO</label>
            <select class=\"browser-default\" id=\"selectDistritos\" name=\"selectDistritos\"></select>
          </div>
          <div class=\"input-field col s12 l12\" id=\"toHide\">
            <input id=\"direccionComprador\" name=\"direccionComprador\" type=\"text\" class=\"validate\">
            <label for=\"direccionComprador\">DIRECCIÓN EXACTA</label>
          </div>

          <div class=\"col s12 l12 pormayorUnico\">
            <span class=\"card-title white-text\">INFORMACIÓN DEL <b>PRODUCTO</b></span>
            <div class=\"divider\" style=\"border-bottom:3px solid #21478f;\"></div>            
          </div>          
          <div class=\"col s12 l12\">
            <label style=\"font-size:15px;\">LISTA DE PRODUCTOS</label>
            <select class=\"browser-default\" id=\"selectProductos\" name=\"selectProductos\">
                <option value=\"0\">SELECCIONAR</option>
              ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 84
            echo "                <option value=\"";
            echo $this->getAttribute($context["pro"], "Pro_IdProducto", array());
            echo "\" data-me=\"";
            echo $this->getAttribute($context["pro"], "Prf_Campo1", array());
            echo "\" data-pe=\"";
            echo $this->getAttribute($context["pro"], "Prf_Campo3", array());
            echo "\">";
            echo $this->getAttribute($context["pro"], "Pro_Nombre", array());
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </select>
          </div>
          <div class=\"col s12 l12\"><br></div>
          <div class=\"col s3 l3\">
            <label style=\"font-size:15px;\">VARIACIÓN/COLOR</label>
            <select class=\"browser-default\" id=\"selectColor\"></select>
          </div>
          <div class=\"col s3 l3\">
            <label style=\"font-size:15px;\">CANTIDAD DE COMPRA</label>
            <select class=\"browser-default\" id=\"selectCantidad\" name=\"selectCantidad\">
              ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 97
            echo "                <option value=\"";
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </select>
          </div>
          <div class=\"input-field col s3 l3\" style=\"margin-top:26px;\">
            <input id=\"precioVenta\" name=\"precioVenta\" type=\"number\" class=\"validate\" value=\"0\">
            <label for=\"precioVenta\" class=\"active\">PRECIO DE VENTA</label>
          </div>
          <div class=\"input-field col s3 l3\" style=\"margin-top:26px;\">
            <input id=\"costoEnvio\" name=\"costoEnvio\" type=\"number\" class=\"validate\" value=\"0\">
            <label for=\"costoEnvio\" class=\"active\">COSTO ENVIO</label>
          </div>


          <div class=\"col s12 l12 center\" style=\"padding:20px;\">
            <button class=\"btn colorAccent\" id=\"btnAgregarProduct\" name=\"btnAgregarProduct\"><i class=\"material-icons left\">add</i>AGREGAR PRODUCTO</button>
          </div>


          <div class=\"col s12 l12 center\">
            <table width=\"100%\" style=\"border:1px solid #ccc;\">
                <thead>
                  <tr>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Precio Venta</th>
                    <th>Precio Envio</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id=\"tablaList\">
                </tbody>              
            </table> 
            <table>
                <tr>
                  <td class=\"right\">SUBTOTAL</td>
                  <td id=\"precioTotal\">S/ 0</td>
                </tr>
                <tr>
                  <td class=\"right\">COSTO DE ENVIO</td>
                  <td id=\"precioEnvio\">S/ 0</td>
                </tr>
                <tr>
                  <td class=\"right\">TOTAL A PAGAR</td>
                  <td id=\"precioPagar\">S/ 0</td>
                </tr>
            </table> 
          </div>  

          <div class=\"col s12 l12 center\">
            <button class=\"btn colorAccent\" id=\"btnRegistrarVenta\" name=\"btnEditComprador\">Crear registro</button> 
          </div>
        </div>
      </div>
    </div>

  </main>
";
    }

    // line 156
    public function block_script($context, array $blocks = array())
    {
        // line 157
        echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 159
        echo base_url("public/js/admin/compradores/");
        echo "index.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 160
        echo base_url("public/js/ventas/");
        echo "index.js\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">
    \$(\"#selectProductos\").select2();
  </script>
";
    }

    public function getTemplateName()
    {
        return "admin/ventas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 160,  271 => 159,  267 => 157,  264 => 156,  205 => 99,  194 => 97,  190 => 96,  178 => 86,  163 => 84,  159 => 83,  134 => 60,  128 => 59,  120 => 57,  112 => 55,  109 => 54,  105 => 53,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/ventas/index.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\ventas\\index.twig");
    }
}
