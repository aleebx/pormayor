<?php

/* admin/comprador/detalle_comprador.twig */
class __TwigTemplate_bd10ff5c1bc8f290e30c546faaf8d97da7a096280581a53c6007e43607477185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/intranet/template_adm.twig", "admin/comprador/detalle_comprador.twig", 1);
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
        echo "
  <style type=\"text/css\">
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
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "  <main class=\"container fixContainer\">
  <div class=\"row centrarForzado\">

    ";
        // line 24
        if ((($context["userAgent"] ?? null) == "PC")) {
            // line 25
            echo "        <div class=\"col s12 sinPadding\">
          <br>
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Editar Comprador</h5>
            </div>
          </div>
          <br>
        </div>
        <div class=\"col s12 sinPadding\" style=\"margin-top:-35px;\">
          <div class=\"card\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\"> 
                <div class=\"input-field col s3\">
                  <input type=\"hidden\" id=\"idUsuario\" value=\"";
            // line 39
            echo $this->getAttribute(($context["compradores"] ?? null), "Usu_IdUsuario", array());
            echo "\">
                  <input type=\"hidden\" id=\"idPersona\" value=\"";
            // line 40
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_IdPersona", array());
            echo "\">
                  <input type=\"hidden\" id=\"regionOcult\" value=\"";
            // line 41
            echo $this->getAttribute(($context["compradores"] ?? null), "Region_id", array());
            echo "\">
                  <input type=\"hidden\" id=\"provinciaOcult\" value=\"";
            // line 42
            echo $this->getAttribute(($context["compradores"] ?? null), "Provincia_id", array());
            echo "\">
                   <input type=\"hidden\" id=\"departamentoOcult\" value=\"";
            // line 43
            echo $this->getAttribute(($context["compradores"] ?? null), "Distrito_id", array());
            echo "\">
                  <input id=\"DNIORUC\" name=\"DNIORUC\" type=\"number\" class=\"validate\" value=\"";
            // line 44
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Dni", array());
            echo "\">
                  <label for=\"DNIORUC\">D.N.I / OTROS</label>
                </div>
                 <div class=\"input-field col s3\">
                  <input placeholder=\"\" id=\"nombreComprador\" name=\"nombreComprador\" type=\"text\" class=\"validate\" value=\"";
            // line 48
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Nombre", array());
            echo "\">
                  <label for=\"nombreTienda\">Nombre del Comprador</label>
                </div>
                <div class=\"input-field col s3\">
                  <input placeholder=\"\" id=\"tlf\" name=\"tlf\" type=\"number\" class=\"validate\" min=\"1\" value=\"";
            // line 52
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Telefono", array());
            echo "\">
                  <label for=\"tlf\">Teléfono Celular</label>
                </div>
                <div class=\"input-field col s3\">
                  <input placeholder=\"\" id=\"correo\" name=\"correo\" type=\"email\" class=\"validate\" value=\"";
            // line 56
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Correo", array());
            echo "\">
                  <label for=\"correo\">Correo Electrónico</label>
                </div>
                <div>
                  ";
            // line 60
            if ((($context["userAgent"] ?? null) == "PC")) {
                // line 61
                echo "                    <div class=\"col s4\">
                      <label for=\"\" style=\"font-size:15px;\">Departamento</label>
                      <select name=\"selectRegion\" id=\"selectRegion\" class=\"browser-default\" onchange=\"getProvinces()\">
                        <option value=\"0\" disabled selected> Seleccione un departamento</option>
                        ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["region_tienda"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                    // line 66
                    echo "                          ";
                    if (($this->getAttribute(($context["compradores"] ?? null), "Region_id", array()) == $this->getAttribute($context["reg"], "id", array()))) {
                        // line 67
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["reg"], "id", array());
                        echo "\" selected>";
                        echo $this->getAttribute($context["reg"], "name", array());
                        echo "</option>
                          ";
                    } else {
                        // line 69
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["reg"], "id", array());
                        echo "\">";
                        echo $this->getAttribute($context["reg"], "name", array());
                        echo "</option>
                          ";
                    }
                    // line 71
                    echo "                          
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                      </select>
                    </div>
                    <div class=\"col s4\">
                      <label for=\"\" style=\"font-size:15px;\">Provincia</label>
                      <select class=\"browser-default\" id=\"selectProvincia\" name=\"selectProvincia\" onchange=\"getDistrito()\"></select>
                    </div>
                    
                    <div class=\"col s4\">
                      <label for=\"\" style=\"font-size:15px;\">Distrito</label>
                      <select class=\"browser-default\" id=\"selectDistritos\" name=\"selectDistritos\"></select>
                    </div>
                  ";
            } else {
                // line 84
                echo "  
                    <div class=\"col s12\">
                      <label for=\"\" style=\"font-size:15px;\">Departamento</label>
                      <select name=\"selectRegion\" id=\"selectRegion\" class=\"browser-default\" onchange=\"getProvinces()\">
                        <option value=\"0\" disabled selected> Seleccione un departamento</option>
                        ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["region_tienda"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                    // line 90
                    echo "                          ";
                    if (($this->getAttribute(($context["inf_tienda"] ?? null), "Region_id", array()) == $this->getAttribute($context["reg"], "id", array()))) {
                        // line 91
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["reg"], "id", array());
                        echo "\" selected>";
                        echo $this->getAttribute($context["reg"], "name", array());
                        echo "</option>
                          ";
                    } else {
                        // line 93
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["reg"], "id", array());
                        echo "\">";
                        echo $this->getAttribute($context["reg"], "name", array());
                        echo "</option>
                          ";
                    }
                    // line 95
                    echo "                          
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                      </select>
                    </div>
                    <div class=\"col s12\">
                      <label for=\"\" style=\"font-size:15px;\">Provincia</label>
                      <select class=\"browser-default\" id=\"selectProvincia\" name=\"selectProvincia\" onchange=\"getDistrito()\"></select>
                    </div>
                    
                    <div class=\"col s12\">
                      <label for=\"\" style=\"font-size:15px;\">Distrito</label>
                      <select class=\"browser-default\" id=\"selectDistritos\" name=\"selectDistritos\"></select>
                    </div>
                  ";
            }
            // line 109
            echo "
                  <div class=\"col s12\">
                    <br>
                  </div>
                  <div class=\"input-field col s12 l12\" id=\"toHide\">
                    <input id=\"direccionComprador\"  name=\"direccionComprador\" type=\"text\" class=\"validate\" value=\"";
            // line 114
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Direccion", array());
            echo "\">
                    <label for=\"direccionComprador\">Dirección</label>
                  </div>
                </div>
                <div class=\"col s12 l12 center\">
                  <a class=\"btn-flat grey-text text-darken-4\" type=\"button\" href=\"";
            // line 119
            echo base_url();
            echo "admin/compradores\">Atras</a>
                  <button class=\"btn colorAccent\" id=\"btnEditComprador\" name=\"btnEditComprador\">Guardar cambios</button>
                  <br><br>  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s6 sinPadding\">
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Compras</h5>
            </div>
          </div>
       
          <ul class=\"collapsible col s12\" data-collapsible=\"accordion\" style=\"margin-top:-5px;font-size:14px;\">
            ";
            // line 136
            if (($context["compras"] ?? null)) {
                echo " 
             ";
                // line 137
                $context["nro"] = 1;
                // line 138
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["compras"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                    // line 139
                    echo "                  <li>
                    <div class=\"collapsible-header\">
                      <table class=\"table\" width=\"100%\">
                        <tr>
                          <th><i class=\"material-icons\" style=\"color:green;\">storage</i></th>
                          <th>Monto</th>
                          <th>Fecha</th>
                        </tr>
                        <tr>
                          <td>";
                    // line 148
                    echo $this->getAttribute($context["comp"], "Pac_IdPago_Compra", array());
                    echo "</td>
                          <td>S/ ";
                    // line 149
                    echo $this->getAttribute($context["comp"], "Pac_Total", array());
                    echo "</td>
                          <td>";
                    // line 150
                    echo $this->getAttribute($context["comp"], "Pac_FechaRegistro", array());
                    echo "</td>
                        </tr>
                      </table>
                    </div>
                    <div class=\"collapsible-body\" style=\"background:#F8F8F8;font-size:14px;\">
                      <table class=\"table\" width=\"100%\">
                        <tr>
                          <th width=\"60%\">Producto</th>
                          <th width=\"20%\" class=\"center\">Cantidad</th>
                          <th width=\"20%\" class=\"center\">Monto</th>
                        </tr>

                        ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comp"], "comprasdetalle", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["compD"]) {
                        // line 163
                        echo "                          <tr>
                            <td class=\"muayuscula\">";
                        // line 164
                        echo $this->getAttribute($context["compD"], "Pro_Nombre", array());
                        echo " ";
                        if ((($this->getAttribute($context["compD"], "SKU_Color", array()) != " ") && $this->getAttribute($context["compD"], "SKU_Color", array()))) {
                            echo "(";
                            echo $this->getAttribute($context["compD"], "SKU_Color", array());
                            echo ")";
                        }
                        echo "</td>
                            <td class=\"center\">";
                        // line 165
                        echo $this->getAttribute($context["compD"], "Pcd_Cantidad", array());
                        echo "</td>
                            <td class=\"center\">S/ ";
                        // line 166
                        echo $this->getAttribute($context["compD"], "Pcd_Importe", array());
                        echo "</td>
                          </tr>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compD'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "      
                      </table>
                    </div>
                  </li>
                ";
                    // line 172
                    $context["nro"] = (($context["nro"] ?? null) + 1);
                    // line 173
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
            ";
            } else {
                // line 174
                echo " 
                <li>
                  <div class=\"collapsible-header\">
                    <table class=\"table\">
                      <tr>
                         <th><i class=\"material-icons\" style=\"color:green;\">storage</i></th>
                          <th></th>
                          <th></th>
                      </tr>
                      <tr>
                        <td colspan=\"3\" class=\"center\">No tiene compras...</td>
                      </tr>
                    </table>
                  </div>
                </li> 
              ";
            }
            // line 189
            echo "         
          </ul>
        </div>

        <div class=\"col s6 sinPadding\">
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Favoritos</h5>
            </div>
          </div>
       
          <ul class=\"collapsible col s12\" data-collapsible=\"accordion\"  style=\"margin-top:-5px;font-size:14px;\">
            ";
            // line 201
            if (($context["favoritos"] ?? null)) {
                // line 202
                echo "              ";
                $context["nro"] = 1;
                // line 203
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["favoritos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                    // line 204
                    echo "                    <li>
                      <div class=\"collapsible-header\">
                        <table class=\"table\">
                          <tr>
                            <th width=\"80%\"><i class=\"material-icons\" style=\"color:red;\">favorite</i></th>
                            <th width=\"20%\" class=\"center\">Fecha</th>
                          </tr>
                          <tr>
                            <td class=\"muayuscula\">";
                    // line 212
                    echo $this->getAttribute($context["fav"], "Pro_Nombre", array());
                    echo "</td>
                            <td class=\"center\">";
                    // line 213
                    echo $this->getAttribute($context["fav"], "Prf_FechaRegistro", array());
                    echo "</td>
                          </tr>
                        </table>
                      </div>
                    </li>
                  ";
                    // line 218
                    $context["nro"] = (($context["nro"] ?? null) + 1);
                    // line 219
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "              ";
            } else {
                echo " 
                <li>
                  <div class=\"collapsible-header\">
                    <table class=\"table\">
                      <tr>
                        <th><i class=\"material-icons\" style=\"color:red;\">favorite</i></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td colspan=\"2\" class=\"center\">No tiene favoritos...</td>
                      </tr>
                    </table>
                  </div>
                </li> 
              ";
            }
            // line 234
            echo "      
          </ul>
        </div>

        ";
            // line 238
            if ((twig_length_filter($this->env, ($context["compras"] ?? null)) > 1)) {
                // line 239
                echo "          <div class=\"col s6 sinPadding\">&nbsp;&nbsp;</div>
        ";
            }
            // line 241
            echo "          
        <div class=\"col s6 sinPadding\">
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Grupos</h5>
            </div>
          </div>
       
          <ul class=\"collapsible col s12\" data-collapsible=\"accordion\"  style=\"margin-top:-5px;font-size:14px;\">
            ";
            // line 250
            if (($context["grupos"] ?? null)) {
                // line 251
                echo "              ";
                $context["nro"] = 1;
                // line 252
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["grupos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["gru"]) {
                    // line 253
                    echo "                    <li>
                      <div class=\"collapsible-header\">
                        <table class=\"table\">
                          <tr>
                            <th width=\"60%\"><i class=\"material-icons\" style=\"color:blue;\">group</i></th>
                            <th width=\"20%\" class=\"center\">Precio</th>
                            <th width=\"20%\" class=\"center\">Estatus</th>
                          </tr>
                          <tr>
                            <td class=\"muayuscula\">";
                    // line 262
                    echo $this->getAttribute($context["gru"], "Pro_Nombre", array());
                    echo "</td>
                            <td class=\"center\">S/ ";
                    // line 263
                    echo $this->getAttribute($context["gru"], "Prg_Precio", array());
                    echo "</td>
                            <td class=\"center\">";
                    // line 264
                    if (($this->getAttribute($context["gru"], "Prg_Estado", array()) == 0)) {
                        echo "SIN COMPLETAR";
                    } else {
                        echo "COMPLETADO";
                    }
                    echo "</td>
                          </tr>
                        </table>
                      </div>
                    </li>
                  ";
                    // line 269
                    $context["nro"] = (($context["nro"] ?? null) + 1);
                    // line 270
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gru'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "              ";
            } else {
                echo " 
                <li>
                  <div class=\"collapsible-header\">
                    <table class=\"table\">
                      <tr>
                        <th><i class=\"material-icons\" style=\"color:blue;\">group</i></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td colspan=\"2\" class=\"center\">No tiene grupos...</td>
                      </tr>
                    </table>
                  </div>
                </li> 
              ";
            }
            // line 285
            echo "      
          </ul>
        </div>
    ";
        } else {
            // line 288
            echo "  

    <div class=\"col s12 sinPadding\">
          <br>
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Editar Comprador</h5>
            </div>
          </div>
          <br>
        </div>
        <div class=\"col s12 sinPadding\" style=\"margin-top:-35px;\">
          <div class=\"card\">
            <div class=\"card-content sinPadding\">
              <div class=\"row cardContentFix\"> 
                <div class=\"input-field col s12\">
                  <input type=\"hidden\" id=\"idUsuario\" value=\"";
            // line 304
            echo $this->getAttribute(($context["compradores"] ?? null), "Usu_IdUsuario", array());
            echo "\">
                  <input type=\"hidden\" id=\"idPersona\" value=\"";
            // line 305
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_IdPersona", array());
            echo "\">
                  <input type=\"hidden\" id=\"regionOcult\" value=\"";
            // line 306
            echo $this->getAttribute(($context["compradores"] ?? null), "Region_id", array());
            echo "\">
                  <input type=\"hidden\" id=\"provinciaOcult\" value=\"";
            // line 307
            echo $this->getAttribute(($context["compradores"] ?? null), "Provincia_id", array());
            echo "\">
                   <input type=\"hidden\" id=\"departamentoOcult\" value=\"";
            // line 308
            echo $this->getAttribute(($context["compradores"] ?? null), "Distrito_id", array());
            echo "\">
                  <input id=\"DNIORUC\" name=\"DNIORUC\" type=\"number\" class=\"validate\" value=\"";
            // line 309
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Dni", array());
            echo "\">
                  <label for=\"DNIORUC\">D.N.I / OTROS</label>
                </div>
                 <div class=\"input-field col s12\">
                  <input placeholder=\"\" id=\"nombreComprador\" name=\"nombreComprador\" type=\"text\" class=\"validate\" value=\"";
            // line 313
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Nombre", array());
            echo "\">
                  <label for=\"nombreTienda\">Nombre del Comprador</label>
                </div>
                <div class=\"input-field col s12\">
                  <input placeholder=\"\" id=\"tlf\" name=\"tlf\" type=\"number\" class=\"validate\" min=\"1\" value=\"";
            // line 317
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Telefono", array());
            echo "\">
                  <label for=\"tlf\">Teléfono Celular</label>
                </div>
                <div class=\"input-field col s12\">
                  <input placeholder=\"\" id=\"correo\" name=\"correo\" type=\"email\" class=\"validate\" value=\"";
            // line 321
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Correo", array());
            echo "\">
                  <label for=\"correo\">Correo Electrónico</label>
                </div>

                <div>
                 
                <div class=\"col s12\">
                  <label for=\"\" style=\"font-size:15px;\">Departamento</label>
                  <select name=\"selectRegion\" id=\"selectRegion\" class=\"browser-default\" onchange=\"getProvinces()\">
                    <option value=\"0\" disabled selected> Seleccione un departamento</option>
                    ";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["region_tienda"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 332
                echo "                      ";
                if (($this->getAttribute(($context["compradores"] ?? null), "Region_id", array()) == $this->getAttribute($context["reg"], "id", array()))) {
                    // line 333
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["reg"], "id", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["reg"], "name", array());
                    echo "</option>
                      ";
                } else {
                    // line 335
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["reg"], "id", array());
                    echo "\">";
                    echo $this->getAttribute($context["reg"], "name", array());
                    echo "</option>
                      ";
                }
                // line 337
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                  </select>
                </div>
                
                <div class=\"col s12\">
                  <label for=\"\" style=\"font-size:15px;\">Provincia</label>
                  <select class=\"browser-default\" id=\"selectProvincia\" name=\"selectProvincia\" onchange=\"getDistrito()\"></select>
                </div>
                    
                <div class=\"col s12\">
                  <label for=\"\" style=\"font-size:15px;\">Distrito</label>
                  <select class=\"browser-default\" id=\"selectDistritos\" name=\"selectDistritos\"></select>
                </div>
                  
                <div class=\"col s12\">
                  <br>
                </div>
                
                <div class=\"input-field col s12 l12\" id=\"toHide\">
                  <input id=\"direccionComprador\"  name=\"direccionComprador\" type=\"text\" class=\"validate\" value=\"";
            // line 356
            echo $this->getAttribute(($context["compradores"] ?? null), "Per_Direccion", array());
            echo "\">
                  <label for=\"direccionComprador\">Dirección</label>
                </div>
                </div>
                <div class=\"col s12 l12 center\">
                  <a class=\"btn-flat grey-text text-darken-4\" type=\"button\" href=\"http://localhost/betapormayor/admin/compradores\">Atras</a>
                  <button class=\"btn colorAccent\" id=\"btnEditComprador\" name=\"btnEditComprador\">Guardar cambios</button>
                  <br><br>  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s12 sinPadding\">
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Favoritos</h5>
            </div>
          </div>
       
          <ul class=\"collapsible col s12\" data-collapsible=\"accordion\"  style=\"margin-top:-5px;font-size:14px;\">
            ";
            // line 378
            if (($context["favoritos"] ?? null)) {
                // line 379
                echo "              ";
                $context["nro"] = 1;
                // line 380
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["favoritos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                    // line 381
                    echo "                    <li>
                      <div class=\"collapsible-header\">
                        <table class=\"table\">
                          <tr>
                            <th width=\"70%\"><i class=\"material-icons\" style=\"color:red;\">favorite</i></th>
                            <th width=\"30%\" class=\"center\">Fecha</th>
                          </tr>
                          <tr>
                            <td class=\"muayuscula\">";
                    // line 389
                    echo $this->getAttribute($context["fav"], "Pro_Nombre", array());
                    echo "</td>
                            <td class=\"center\">";
                    // line 390
                    echo $this->getAttribute($context["fav"], "Prf_FechaRegistro", array());
                    echo "</td>
                          </tr>
                        </table>
                      </div>
                    </li>
                  ";
                    // line 395
                    $context["nro"] = (($context["nro"] ?? null) + 1);
                    // line 396
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 397
                echo "              ";
            } else {
                echo " 
                <li>
                  <div class=\"collapsible-header\">
                    <table class=\"table\">
                      <tr>
                        <th><i class=\"material-icons\" style=\"color:red;\">favorite</i></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td colspan=\"2\" class=\"center\">No tiene favoritos...</td>
                      </tr>
                    </table>
                  </div>
                </li> 
              ";
            }
            // line 411
            echo "      
          </ul>
        </div>

        <div class=\"col s12 sinPadding\">
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Grupos</h5>
            </div>
          </div>
       
          <ul class=\"collapsible col s12\" data-collapsible=\"accordion\"  style=\"margin-top:-5px;font-size:14px;\">
            ";
            // line 423
            if (($context["grupos"] ?? null)) {
                // line 424
                echo "              ";
                $context["nro"] = 1;
                // line 425
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["grupos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["gru"]) {
                    // line 426
                    echo "                    <li>
                      <div class=\"collapsible-header\">
                        <table class=\"table\">
                          <tr>
                            <th width=\"50%\"><i class=\"material-icons\" style=\"color:blue;\">group</i></th>
                            <th width=\"25%\" class=\"center\">Precio</th>
                            <th width=\"25%\" class=\"center\">Estatus</th>
                          </tr>
                          <tr>
                            <td class=\"muayuscula\">";
                    // line 435
                    echo $this->getAttribute($context["gru"], "Pro_Nombre", array());
                    echo "</td>
                            <td class=\"center\">S/ ";
                    // line 436
                    echo $this->getAttribute($context["gru"], "Prg_Precio", array());
                    echo "</td>
                            <td class=\"center\">";
                    // line 437
                    if (($this->getAttribute($context["gru"], "Prg_Estado", array()) == 0)) {
                        echo "SIN COMPLETAR";
                    } else {
                        echo "COMPLETADO";
                    }
                    echo "</td>
                          </tr>
                        </table>
                      </div>
                    </li>
                  ";
                    // line 442
                    $context["nro"] = (($context["nro"] ?? null) + 1);
                    // line 443
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gru'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 444
                echo "              ";
            } else {
                echo " 
                <li>
                  <div class=\"collapsible-header\">
                    <table class=\"table\">
                      <tr>
                        <th><i class=\"material-icons\" style=\"color:blue;\">group</i></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td colspan=\"2\" class=\"center\">No tiene grupos...</td>
                      </tr>
                    </table>
                  </div>
                </li> 
              ";
            }
            // line 458
            echo "      
          </ul>
        </div>

        <div class=\"col s12 sinPadding\">
          <div class=\"row centrarForzado \">
            <div class=\"col s12 center\">
              <h5 class=\"enasisA left\">Compras</h5>
            </div>
          </div>
       
          <ul class=\"collapsible col s12\" data-collapsible=\"accordion\"  style=\"margin-top:-5px;font-size:14px;\">
            ";
            // line 470
            if (($context["compras"] ?? null)) {
                echo " 
             ";
                // line 471
                $context["nro"] = 1;
                // line 472
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["compras"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                    // line 473
                    echo "                  <li>
                    <div class=\"collapsible-header\">
                      <table class=\"table\">
                        <tr>
                          <th width=\"20%\"><i class=\"material-icons\" style=\"color:green;\">storage</i></th>
                          <th width=\"40%\" class=\"center\">Monto</th>
                          <th width=\"40%\" class=\"center\">Fecha</th>
                        </tr>
                        <tr>
                          <td>";
                    // line 482
                    echo $this->getAttribute($context["comp"], "Pac_IdPago_Compra", array());
                    echo "</td>
                          <td class=\"center\">S/ ";
                    // line 483
                    echo $this->getAttribute($context["comp"], "Pac_Total", array());
                    echo "</td>
                          <td class=\"center\">";
                    // line 484
                    echo $this->getAttribute($context["comp"], "Pac_FechaRegistro", array());
                    echo "</td>
                        </tr>
                      </table>
                    </div>
                     <div class=\"collapsible-body\" style=\"background:#F8F8F8;font-size:14px;\">
                      <table class=\"table\" width=\"100%\">
                        <tr>
                          <th width=\"50%\">Producto</th>
                          <th width=\"20%\" class=\"center\">Cantidad</th>
                          <th width=\"30%\" class=\"center\">Monto</th>
                        </tr>

                        ";
                    // line 496
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comp"], "comprasdetalle", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["compD"]) {
                        // line 497
                        echo "                          <tr>
                            <td class=\"muayuscula\">";
                        // line 498
                        echo $this->getAttribute($context["compD"], "Pro_Nombre", array());
                        echo " ";
                        if ((($this->getAttribute($context["compD"], "SKU_Color", array()) != " ") && $this->getAttribute($context["compD"], "SKU_Color", array()))) {
                            echo "(";
                            echo $this->getAttribute($context["compD"], "SKU_Color", array());
                            echo ")";
                        }
                        echo "</td>
                            <td class=\"center\">";
                        // line 499
                        echo $this->getAttribute($context["compD"], "Pcd_Cantidad", array());
                        echo "</td>
                            <td class=\"center\">S/ ";
                        // line 500
                        echo $this->getAttribute($context["compD"], "Pcd_Importe", array());
                        echo "</td>
                          </tr>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compD'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 502
                    echo "      
                      </table>
                    </div>
                  </li>
                ";
                    // line 506
                    $context["nro"] = (($context["nro"] ?? null) + 1);
                    // line 507
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
            ";
            } else {
                // line 508
                echo " 
                <li>
                  <div class=\"collapsible-header\">
                    <table class=\"table\">
                      <tr>
                         <th><i class=\"material-icons\" style=\"color:green;\">storage</i></th>
                          <th></th>
                          <th></th>
                      </tr>
                      <tr>
                        <td colspan=\"3\" class=\"center\">No tiene compras...</td>
                      </tr>
                    </table>
                  </div>
                </li> 
              ";
            }
            // line 523
            echo "         
          </ul>
        </div>

    
    ";
        }
        // line 528
        echo "    
      </div>
  </main>

";
    }

    // line 534
    public function block_script($context, array $blocks = array())
    {
        // line 535
        echo "  <script>
    // var flagVariaciones = ";
        // line 536
        echo ($context["flagVariaciones"] ?? null);
        echo ";
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js\"></script>
  <script src=\"";
        // line 539
        echo base_url("public/js/admin/compradores/");
        echo "index.js\" type=\"text/javascript\"></script>
  ";
        // line 540
        if ($this->getAttribute(($context["compradores"] ?? null), "Region_id", array())) {
            // line 541
            echo "    <script>
      //Cargar Provincias Principales
      getProvinces();
    </script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "admin/comprador/detalle_comprador.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  990 => 541,  988 => 540,  984 => 539,  978 => 536,  975 => 535,  972 => 534,  964 => 528,  956 => 523,  938 => 508,  929 => 507,  927 => 506,  921 => 502,  912 => 500,  908 => 499,  898 => 498,  895 => 497,  891 => 496,  876 => 484,  872 => 483,  868 => 482,  857 => 473,  852 => 472,  850 => 471,  846 => 470,  832 => 458,  813 => 444,  807 => 443,  805 => 442,  793 => 437,  789 => 436,  785 => 435,  774 => 426,  769 => 425,  766 => 424,  764 => 423,  750 => 411,  731 => 397,  725 => 396,  723 => 395,  715 => 390,  711 => 389,  701 => 381,  696 => 380,  693 => 379,  691 => 378,  666 => 356,  646 => 338,  640 => 337,  632 => 335,  624 => 333,  621 => 332,  617 => 331,  604 => 321,  597 => 317,  590 => 313,  583 => 309,  579 => 308,  575 => 307,  571 => 306,  567 => 305,  563 => 304,  545 => 288,  539 => 285,  520 => 271,  514 => 270,  512 => 269,  500 => 264,  496 => 263,  492 => 262,  481 => 253,  476 => 252,  473 => 251,  471 => 250,  460 => 241,  456 => 239,  454 => 238,  448 => 234,  429 => 220,  423 => 219,  421 => 218,  413 => 213,  409 => 212,  399 => 204,  394 => 203,  391 => 202,  389 => 201,  375 => 189,  357 => 174,  348 => 173,  346 => 172,  340 => 168,  331 => 166,  327 => 165,  317 => 164,  314 => 163,  310 => 162,  295 => 150,  291 => 149,  287 => 148,  276 => 139,  271 => 138,  269 => 137,  265 => 136,  245 => 119,  237 => 114,  230 => 109,  216 => 97,  209 => 95,  201 => 93,  193 => 91,  190 => 90,  186 => 89,  179 => 84,  165 => 73,  158 => 71,  150 => 69,  142 => 67,  139 => 66,  135 => 65,  129 => 61,  127 => 60,  120 => 56,  113 => 52,  106 => 48,  99 => 44,  95 => 43,  91 => 42,  87 => 41,  83 => 40,  79 => 39,  63 => 25,  61 => 24,  56 => 21,  53 => 20,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/comprador/detalle_comprador.twig", "C:\\xampp\\htdocs\\pormayor2019\\application\\views\\admin\\comprador\\detalle_comprador.twig");
    }
}
