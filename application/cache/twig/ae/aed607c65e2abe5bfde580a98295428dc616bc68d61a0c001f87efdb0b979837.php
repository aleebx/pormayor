<?php

/* admin/tiendas/index.twig */
class __TwigTemplate_dcbbbc70026e8ae851d3f88af6a3edcfc2cb368bbea90513341331c88146360a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/tiendas/index.twig", 1);
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
        echo "<style type=\"text/css\">
  .pagination{
    padding-left: 40px !important;
  }
  .btn, .btn-large {
    text-decoration: none;
    color: #fff;
    background-color: #353535;
    text-align: left;
    letter-spacing: .5px;
    -webkit-transition: .1s ease-out;
    transition: .1s ease-out;
    cursor: pointer;
}
</style>
";
        // line 19
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">  
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "  <main>
    <div class=\"card\">
      <div class=\"card-content\">
      <h5 class=\"card-title left\">Listado de Tienda</h5>
        <table id=\"listTiendaTable\" class=\"display\" style=\"width:100%;\">
          <thead>
            <tr>
              <th>NOMBRE</th>
              ";
        // line 30
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 31
            echo "                <th class=\"negrita\">TELEFONO</th>
                <th class=\"center negrita\">CANT. PRODUCTOS</th>
                <th class=\"center negrita\">FECHA</th>
              ";
        }
        // line 34
        echo "               
              <th class=\"center negrita\">ESTATUS</th>
              ";
        // line 36
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 37
            echo "                <th class=\"center negrita\">ACCION</th>
              ";
        }
        // line 39
        echo "            </tr>
          </thead>
          
          <tbody>
            ";
        // line 43
        $context["nro"] = 1;
        // line 44
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tiendas_gestor"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tig"]) {
            // line 45
            echo "                  <tr>
                    <td>
                       <a href=\"http://";
            // line 47
            echo $this->getAttribute($context["tig"], "Tie_Subdominio", array());
            echo ".pormayor.pe\" target=\"_blank\" style=\"border:1px solid #0058ff;border-radius:3px;padding:4px;background-color:#0058ff;color:white;\" class=\"negrita\">
                          ";
            // line 48
            echo $this->getAttribute($context["tig"], "Tie_Nombre", array());
            echo "
                        </a>
                        <br>
                        ";
            // line 51
            echo $this->getAttribute($context["tig"], "Per_Nombre", array());
            echo "<br><span>Correo: ";
            echo $this->getAttribute($context["tig"], "Usu_Correo", array());
            echo "</span><br><span>
                    </td>
                    ";
            // line 53
            if ((($context["userAgent"] ?? null) == "PC")) {
                echo " 
                      <td>
                        ";
                // line 55
                if ($this->getAttribute($context["tig"], "Per_Telefono", array())) {
                    // line 56
                    echo "                          ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["tig"], "Per_Telefono", array())) == 9)) {
                        // line 57
                        echo "                            ";
                        echo $this->getAttribute($context["tig"], "Per_Telefono", array());
                        echo "
                          ";
                    } else {
                        // line 59
                        echo "                            SIN TELEFONO
                          ";
                    }
                    // line 61
                    echo "                        ";
                } else {
                    // line 62
                    echo "                            SIN TELEFONO
                        ";
                }
                // line 64
                echo "                      </td>
                      <td class=\"center\">
                        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cantidad_producto"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
                    // line 67
                    echo "                          ";
                    if (($this->getAttribute($context["cap"], "Tie_IdTienda", array()) == $this->getAttribute($context["tig"], "Tie_IdTienda", array()))) {
                        // line 68
                        echo "                            ";
                        echo $this->getAttribute($context["cap"], "Cantidad", array());
                        echo "                            
                          ";
                    }
                    // line 70
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                      </td>
                      <td class=\"center\">
                        ";
                // line 73
                echo $this->getAttribute($context["tig"], "Tie_FechaRegistro", array());
                echo "
                      </td>
                    ";
            }
            // line 76
            echo "                    <td class=\"cente\">
                      <a data-idtienda=\"";
            // line 77
            echo $this->getAttribute($context["tig"], "Tie_IdTienda", array());
            echo "\" data-estado=\"";
            echo $this->getAttribute($context["tig"], "Tie_Estado", array());
            echo "\" data-name=\"";
            echo $this->getAttribute($context["tig"], "Tie_Nombre", array());
            echo "\" class=\"btn-flat TiendaInact ";
            if (($this->getAttribute($context["tig"], "Tie_Estado", array()) == 2)) {
                echo "green lighten-5\">ACTIVO";
            } else {
                echo "red lighten-5\">INACTIVO";
            }
            echo "</a>   
                    </td>
                    ";
            // line 79
            if ((($context["userAgent"] ?? null) == "PC")) {
                echo " 
                      <td>
                         <a class=\"btn orange btnEdit\" href=\"";
                // line 81
                echo base_url();
                echo "admin/tiendas/detalle_tienda/";
                echo $this->getAttribute($context["tig"], "Tie_IdTienda", array());
                echo "\" target=\"_blank\"><i class=\"material-icons\">edit</i></a>
                          <a href=\"";
                // line 82
                echo base_url();
                echo "admin/tiendas/detalle_tienda_producto/";
                echo $this->getAttribute($context["tig"], "Tie_IdTienda", array());
                echo "\" target=\"_blank\" class=\"btn blue\">Ver Productos</a>
                      </td>
                    ";
            }
            // line 84
            echo "                         
                  </tr>
                  ";
            // line 86
            $context["nro"] = (($context["nro"] ?? null) + 1);
            // line 87
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </tbody>
            </table>
      </div>
    </div>
  </main>
";
    }

    // line 94
    public function block_script($context, array $blocks = array())
    {
        // line 95
        echo "  <script src=\"";
        echo base_url("public/js/admin/tiendas/");
        echo "index.js\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">
      \$('#listTiendaTable').DataTable({
        \"order\": [[ 0, 'asc' ], [ 0, 'desc' ]],
          \"language\": {
              \"lengthMenu\": \"\",
              \"zeroRecords\": \"No se encontro nada\",
              \"info\": \"Página _PAGE_ de _PAGES_\",
              \"infoEmpty\": \"No hay registros disponibles\",
          \"emptyTable\":     \"No hay información en la tabla\",
          \"infoFiltered\":   \"(filtrado de _MAX_ ventas)\",
          \"infoPostFix\":    \"\",
          \"thousands\":      \",\",
          \"loadingRecords\": \"Cargando...\",
          \"processing\":     \"Procesando...\",
          \"search\":         \"Buscar:\",
          \"paginate\": {
              \"first\":      \"Primero\",
              \"last\":       \"Último\",
              \"next\":       \"Siguiente\",
              \"previous\":   \"Anterior\"
                }
         }
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "admin/tiendas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 95,  238 => 94,  229 => 88,  223 => 87,  221 => 86,  217 => 84,  209 => 82,  203 => 81,  198 => 79,  183 => 77,  180 => 76,  174 => 73,  170 => 71,  164 => 70,  158 => 68,  155 => 67,  151 => 66,  147 => 64,  143 => 62,  140 => 61,  136 => 59,  130 => 57,  127 => 56,  125 => 55,  120 => 53,  113 => 51,  107 => 48,  103 => 47,  99 => 45,  94 => 44,  92 => 43,  86 => 39,  82 => 37,  80 => 36,  76 => 34,  70 => 31,  68 => 30,  58 => 22,  55 => 21,  50 => 19,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/tiendas/index.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\tiendas\\index.twig");
    }
}
