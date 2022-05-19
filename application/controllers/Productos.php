<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Productos extends CI_Controller
{
function __construct()
{
parent::__construct();
$this->load->model("Local_model", "localModel");
$this->load->model("Usuario_model", "usuarioModel");
$this->load->model("Configuracion_model", "configuracionModel");
$this->load->helper(array('form', 'url', 'security'));
$this->load->library(array('form_validation', 'facebook'));
$this->load->library('tank_auth');
$this->lang->load('tank_auth');
}
//AGREGAR PRODUCTO A LA TIENDA
public function add()
{
$this->load->library('cart');		    
$sizePost = sizeof($_POST["product_id"]);
if ($this->input->is_ajax_request())
{
	// print_r($_POST);exit();
for ($i=0; $i < $sizePost; $i++) 
{
if ($_POST["flagVariaciones"] == true) {
$id_sku = $_POST["id_sku"][$i];
$pvo = $_POST["pvo"][$i];
}else{
$pvo = '';
$id_sku = '';
}

$data = array(
"id"  => $_POST["product_id"][$i],
"idpro"  => $_POST["id_producto"][$i],
"name"  => $_POST["product_name"][$i],
"qty"  => $_POST["quantity"][$i],
"price"  => $_POST["product_price"][$i],
"variacion" => $_POST["variacion"][$i],
"unidad" => $_POST["unidad"][$i],
"img" => $_POST["img"][$i],
"color" => $_POST["color"][$i],
"tipovariacion" => $_POST["tipovariacion"][$i],
"cantmin" => $_POST["cantmin"][$i],
"precio_unit" => $_POST["precio_unit"][$i],
"price_min" => $_POST["price_min"][$i],
"documento" => $_POST["documento"][$i],
"tipodoc" => 'Boleta',
"idtienda" => 227,
"flagVariaciones" =>  $_POST["flagVariaciones"],
"id_sku" =>  $id_sku,
"pvo" => $pvo,
"Tie_Nombre" => '',
"Tie_Correo" => '',
"Tie_Telefono" => '',
"Tie_Direccion" => '');
$this->cart->insert($data);
	// if (!empty($data['carrito'])) {
	$data['totalc'] = count($data['carrito']);
	// }
}
echo $this->view();
}
}

//CARGAR VISTA DEL CARRRITO DE COTIZACION
public function load()
{
$this->load->library('cart');
echo $this->view();
}
//ELIMINAR UN ELEMENTO DEL CARRITO DE COTIZACION 
public function remove()
{
$this->load->library('cart');
$row_id = $_POST["row_id"];

$data = array(
'rowid'  => $row_id,
'qty'  => 0
);

$this->cart->update($data);
echo $this->view();
}

public function update()
{
$this->load->library('cart');
$row_id = $_POST["row_id"];
$qty = $_POST["qty"];
$precio_unit = $_POST["precio_unit"];
$price = $_POST["price"];
$data = array(
'rowid'  => $row_id,
'qty'  => $qty,
'precio_unit'  => $precio_unit,
'price'  => $price
);

$this->cart->update($data);
echo 1;
}

public function update_doc()
{
$this->load->library('cart');

foreach ($data['carrito'] as $itemActual){
if ($itemActual['documento'] == 2 OR $itemActual['documento'] == 3) {
$data = array(
'rowid'  => $itemActual['rowid'],
'tipodoc'  => 'Factura'
);
$this->cart->update($data);
}

}


echo $this->view();
}

//ELIMINAR TODO DEL CARRITO DE COTIZACION
public function clear()
{
$this->load->library('cart');
$this->cart->destroy();
echo $this->view();
}

//ESTRUCTURA DE LA INFORMACION DEL CARRITO DE COTIZACION
public function view()
{
$this->load->library('cart');
$data = $this->acl->load_datos();
if ($data['userAgent'] == "PC") {
$output = '';
$output .= '
<div>
<div class="carroContent center">';
$count = 0;
foreach($this->cart->contents() as $items){
// $tiendaInfo = $this->tiendaModel->get_tienda_x_id($items["idtienda"]);
$select = '<select class="browser-default fontD2 cantCarrito">';
for ($i=1; $i <= $items["cantmin"]; $i++) { 
$select.= '<option value="'.$i.'">'.$i.'</option>';
}
$select .= '</select>';

if ($items["flagVariaciones"] == true) {
$ordenCampo = "";
}else{
$ordenCampo = "valign-wrapper";
}
$count++;
$output .='
<div class="row centrarForzado">
<div class="col s2 m2 l2 valign-wrapper"><img class="redondeo centrarForzado fixImg2" src="htpps://pormayor.pe/img/'.$items["img"].'" ></div>
<div class="col s4 m4 l3 '.$ordenCampo.' left-align muayuscula">'.ucfirst(strtolower($items["name"])).'&nbsp;<br><span class="fontB2 enfasisB">'.$items["tipovariacion"]." ".$items["variacion"]."  ".ucfirst(strtolower($items["color"])).'</span>
</div>
<div class="col s2 m2 l2 valign-wrapper" data-cantact="'.$items["qty"].'" data-cantmin="'.$items["cantmin"].'" data-idpro="'.$items["idpro"].'" data-preciounit="'.$items["precio_unit"].'" data-idrow="'.$items["rowid"].'" data-pvo="'.$items["pvo"].'" data-idsku="'.$items["id_sku"].'" data-pmin="'.$items["price_min"].'">'.$select.'<small class="enfasisB"> &nbsp;&nbsp;Unidades</small></div>
<div class="col s2 m2 l4 positionRelative totalN"><span class="positionAbsolute right0 top0 enfasisB fontB2"><span class="precioN precioUnitCarrito'.$items["rowid"].'">'.$items["precio_unit"].'</span> c/u</span><br>
<span class="positionAbsolute right0 bottom0"><small> S/. &nbsp;&nbsp;</small><b class="fontA subTotalCarrito subTotalCarrito'.$items["rowid"].'">'.$items["price"].'</b></span></div>
<div class="col s2 m2 l1 valign-wrapper"><a class="btn-flat remove_inventory" id="'.$items["rowid"].'"><i class="material-icons small transition">delete</i></a></div>
<div class="col s2 m2 l12 colDivider">
<br>
<div class="divider dividerMargin"></div>
<br>
</div>
</div>
';
$select = '';
}
}else{
$output = '';
$output .= '
<div class="carroContentMobile center">';

$count = 0;
foreach($this->cart->contents() as $items){
// $tiendaInfo = $this->tiendaModel->get_tienda_x_id($items["idtienda"]);		

$select = '<select class="browser-default fontD2 cantCarrito">';
for ($i=1; $i <= $items["cantmin"]; $i++) {  
$select.= '<option value="'.$i.'">'.$i.'</option>';
}
$select .= '</select>';


$count++;
$output .='
<br>
<div class="row centrarForzado">
<div class="col s3 valign-wrapper"><img class="redondeo centrarForzado fixImg2" src="'.$data['ruta_img'].$items["img"].'" ></div>
<div class="col s7 left-align sinPadding muayuscula">'.$items["name"].'<br><span class="fontB2 enfasisB">'.$items["tipovariacion"]." ".$items["variacion"]."  ".ucfirst(strtolower($items["color"])).'</span>
<div class="dividerMargin"></div>
</div>
<div class="col s2 valign-wrapper"><a class="sinPadding centrarForzado btn-flat remove_inventory" id="'.$items["rowid"].'"><i class="material-icons fontA transition">delete</i></a>
</div>
<div class="col s12 valign-wrapper" data-cantact="'.$items["qty"].'" data-cantmin="'.$items["cantmin"].'" data-idpro="'.$items["idpro"].'" data-preciounit="'.$items["precio_unit"].'" data-idrow="'.$items["rowid"].'" data-pvo="'.$items["pvo"].'" data-idsku="'.$items["id_sku"].'" data-pmin="'.$items["price_min"].'">'.$select.'<span class="enfasisB fontB2"> &nbsp;Unidades</span></div>
<div class="col s12 totalN"><span class="  top0 enfasisB fontB2"><span class="precioN precioUnitCarrito'.$items["rowid"].'">'.$items["precio_unit"].'</span> c/u&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span class="  bottom0"><small> S/. &nbsp;&nbsp;</small><b class="fontA subTotalCarrito subTotalCarrito'.$items["rowid"].'">'.$items["price"].'</b></span></div> 
<div class="col s12 colDivider sinPadding">
<div class="divider dividerMargin"></div>
</div>
</div>
';
$select = '';
}
}

return $output;
}

public function count_carrito(){
$data = $this->acl->load_datos("no", false);	      	
echo count($data['carrito']);
}

public function count_total_carrito(){
$data = $this->acl->load_datos("no", false);
$total = 0;

foreach ($data['carrito'] as $key => $item) {
$total += $item['price'];
}
echo $total;
}

public function carrito($url_actual= 0, $url="", $flagLogin ='')
{
//$data = $this->_load();

$data = $this->acl->load_datos("no", false);

if ($flagLogin != 0) {
$data['flag_login'] = 1;

}
if (!$this->tank_auth->is_logged_in())
{
$data['success'] = FALSE;
$data['errors'] = array();

if($this->input->post('btnIngresar'))
{
$this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
$this->form_validation->set_rules('clave', 'Clave', 'trim|required');

$this->form_validation->set_message("required", "El campo %s es requerido");
$this->form_validation->set_message("is_unique", "Error nuevo");
if($this->form_validation->run())
{
$this->_login($this->form_validation->set_value('correo'), $this->form_validation->set_value('clave'), 0, true,$url);
$errors = $this->tank_auth->get_error_message();
foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
}
}

if($this->input->post('btnRegistrarse'))
{
$use_username = false;
//$use_username = $this->config->item('use_username', 'tank_auth');
if ($use_username)
{
$this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|min_length[4]|max_length[10]|alpha_dash');
}

$this->form_validation->set_rules('nombre', 'NOMBRE', 'trim|required');
$this->form_validation->set_rules('correo', 'CORREO', 'trim|required|valid_email|is_unique[usuario.Usu_Correo]');
$this->form_validation->set_rules('clave', 'CLAVE', 'trim|required|min_length[3]|max_length[20]|alpha_dash');
$this->form_validation->set_rules('dni', 'DNI', 'trim|required');
$this->form_validation->set_rules('celular', 'CELULAR', 'trim|required');
$this->form_validation->set_rules('publicidad_valor', 'PUBLI', 'trim');

// $this->form_validation->set_message("required", "El campo %s es requerido");
// $this->form_validation->set_message("is_unique", "El campo %s ya está en uso");

$this->form_validation->set_message("is_unique", "Error");

$data['errors'] = array();
$email_activation = $this->config->item('email_activation', 'tank_auth');

if($this->form_validation->run())
{
$this->load->model("Persona_model", "personaModel");
$Per_Dni = $this->form_validation->set_value('dni');
$Per_Nombre = $this->form_validation->set_value('nombre');
$Usu_Correo = $this->form_validation->set_value('correo');
$Usu_Clave = $this->form_validation->set_value('clave');
$Per_Telefono = $this->form_validation->set_value('celular');
$Usu_Flag_Publicidad = $this->form_validation->set_value('publicidad_valor');
$Per_IdPersona = $this->personaModel->get_id_persona_x_dni($Per_Dni);

if (!is_null($data = $this->tank_auth->create_comprador('', $Per_IdPersona, $Per_Dni, $Per_Nombre, $Usu_Correo,$Per_Telefono, $Usu_Clave, $email_activation, "", $Usu_Flag_Publicidad)))
{
$data['site_name'] = $this->config->item('website_name', 'tank_auth');
if($email_activation)
{
$data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
$this->_send_email('activate', $Usu_Correo, $data);
unset($data['Usu_Clave']); 
$data['estado_registrado'] = TRUE;
$data['mensaje'] = $this->lang->line('auth_message_registration_completed_1');
}
else
{
$data['login_redes'] = TRUE;
$data['email'] = $Usu_Correo;

if ($this->config->item('email_account_details', 'tank_auth')) 
{
$this->load->library('correo');

$datos['nombre_usuario'] = $Per_Nombre;
$datos['nombre_sitio'] = $this->config->item('website_name', 'tank_auth');
$datos['correo'] = $Usu_Correo;
$datos['clave'] = $Usu_Clave;

$contenido_correo = $this->twig->parse('correo/bienvenida_comprador.twig', $datos, true);

$this->correo->enviar($Usu_Correo, "Bienvenido(a) a ".$datos['nombre_sitio'], $contenido_correo);
}
unset($data['Usu_Clave']);
}

$this->_login($Usu_Correo, $Usu_Clave, 0, 1, "productos/despacho");
}
else
{
$errors = $this->tank_auth->get_error_message();
foreach ($errors as $k => $v)   $data['errors'][$k] = $this->lang->line($v);
}
}
else
{
$data["success"] = TRUE;
}
}

$data['facebook']['id'] = $this->config->item('facebook_app_id');
$data['facebook']['permisos'] = $this->config->item('facebook_permissions');
}


$data['url_actual'] = str_replace('_', '/', $url_actual);
$data['pagina']['titulo'] = 'Compra - 1 | pormayor.pe';
$data['vista_carrito'] = true;
$data['vista_carrito_compra'] = true;


foreach ($data['carrito'] as $inner_array){
$data['flagVariaciones'] =  $inner_array['flagVariaciones'];
break;
};
$data['unidPe'] = 0;
foreach($this->cart->contents() as $items){
$data['unidPe'] = $data['unidPe'] + $items['price'];
}

$data['totalc'] = count($data['carrito']);
$this->twig->parse('tienda/resumen.twig', $data);
}

public function agotado()
{		  	
$data = $this->acl->load_datos("no", false);
$data['pagina']['titulo'] = 'Agotados :(';
$data['productos'] =  $this->productoModel->productos_agotados();

$this->twig->parse('tienda/agotado.twig', $data);
}

public function listado()
{		  	
$data = $this->acl->load_datos("no", false);
$data['pagina']['titulo'] = 'Listado de productos';
$data['productos'] =  $this->productoModel->productos_listado();

$this->twig->parse('tienda/listado.twig', $data);
}

public function dp($Pro_IdProducto = false)
{

$data = $this->acl->load_datos();		 	
$data['url'] = 	$Pro_IdProducto;
$Pro_IdProducto = $Pro_IdProducto;
if (!isset($Pro_IdProducto)) {
header("Location: https://pormayor.pe");
}
$Producto = explode("-", $Pro_IdProducto);
$Pro_IdProducto = (int)$Producto[1];
$Pro_Nombres = [];
for ($i=2; $i < count($Producto) ; $i++)
{
array_push($Pro_Nombres,(string)$Producto[$i]);
}
$Pro_Nombre = implode(" ", $Pro_Nombres);
$data['pagina']['titulo'] = $Pro_Nombre.' en PorMayor.Pe';
$data['totalc'] = count($data['carrito']);


$data['pagina']['tipo'] = "carrito";
$data['pagina']['btnespecial'] = 'NO';
$data['pagina']['extrabtn'] = 'SI';
$data['comments']= true;
$data['pagina_producto']= true;
$data['producto_detalle']= true;
$data['producto'] = $this->productoModel->productos_dp2($Pro_IdProducto);
if (empty($data['producto'])) {
header("Location: https://pormayor.pe");
}else{
$data['vista'] = $this->productoModel->registroVista($Pro_IdProducto);	
$data['producto_ficha'] = $this->productoModel->productos_ficha("WHERE producto_Pro_IdProducto = '".$Pro_IdProducto."'");
$data['fotos'] = $this->productoModel->get_fotos_producto($Pro_IdProducto);
$data['SKU'] = $this->productoModel->get_sku_producto($Pro_IdProducto);
$data['tallas'] = $this->productoModel->get_sku_producto_vao($Pro_IdProducto);
$data['colores'] = $this->configuracionModel->get_coloresProducto2($Pro_IdProducto);
$data['range_producto'] = $this->productoModel->reputacion_producto($Pro_IdProducto);
$data['precios'] = $this->productoModel->precios_producto($Pro_IdProducto);
$data['subdominio_tienda'] = 1;	
if (empty($data['SKU'])) {
$data['nomvar'] =  " ";
}else{
$data['nomvar'] =  $data['SKU'][0]->Var_Nombre;			      	}

$data['SKUB'] = $this->productoModel->get_skuB($Pro_IdProducto);			    	
$this->twig->parse('tienda/load/dp_20.twig', $data);	
}
}
//CAPTURA DE PROVINCIA DESDE BASE DE DTATOS SEGÚN EL ID DE LA REGION
public function load_provincia()
{		  
if ($this->input->is_ajax_request()) 
{
$idRegion = $this->input->post('idRegion');
$data['provincia'] = $this->localModel->provincia($idRegion);
print_r(json_encode($data['provincia']));
}
}
//VISTA DEL SELECT CON LAS PROVINCIAS CARGADAS SEGÚN EL ID DE LA REGION
public function Select_Provincia()
{
if($this->input->is_ajax_request())
{				
$data['provincia'] = $this->input->post('datos');
$this->twig->parse('usuario/model/selProvincia.twig', $data);
}
else
{
show_404();
}
}


public function preciosTalla()
{
// $data = $this->_load();
if ($this->input->is_ajax_request()) 
{
$PVO_IdPVO = $this->input->post('idPVO');		
$data['precios'] = $this->productoModel->precios_producto_talla($PVO_IdPVO);
//print_r($data['precios']);
$this->twig->parse('tienda/load/preciosTalla.twig', $data);
}      	  
}

//CAPTURA DE DISTRITO DESDE BASE DE DATOS SEGÚN EL ID DE LA PROVINCIA
public function load_distrito()
{		  
if ($this->input->is_ajax_request())
{
$idProvincia = $this->input->post('idProvincia');
$idRegion = $this->input->post('idRegion');

$data['distrito'] = $this->localModel->distrito($idProvincia,$idRegion);
print_r(json_encode($data['distrito']));
}
}
//VISTA DEL SELECT DISTRITO SEGÚN EL ID DE LA PROVINCIA
public function Select_Distrito()
{
if($this->input->is_ajax_request())
{
$data['distrito'] = $this->input->post('datos');
$this->twig->parse('usuario/model/selDistrito.twig', $data);
}
else
{
show_404();
}
}

//VISTA DEL SELECT DISTRITO SEGÚN EL ID DE LA PROVINCIA
public function filtro_producto_variacion()
{
if($this->input->is_ajax_request())
{

$data = $this->acl->load_datos();
$idVariacion = $this->input->post('idVariacion');
$data['producto'] = $this->productoModel->productos_filtro($idVariacion);
$data['SKU'] = $this->productoModel->get_sku();
$data['fotos'] = $this->productoModel->get_fotos_producto();
$data['filtro'] = $this->productoModel->get_filtro();

$data['totalc'] = count($data['carrito']);
$data['colores'] = $this->configuracionModel->get_coloresProducto(); 
$this->twig->parse('tienda/load/listProducto.twig', $data);
}
else
{
show_404();
}
}

public function search($nombre_busqueda = false)
{
$data = $this->acl->load_datos();
$nombre_busqueda = urldecode(str_replace("%20", " ", $nombre_busqueda));
$data['pagina']['tipo'] = "carrito";
$data['pagina']['extrabtn'] = 'SI';
$data['pagina']['titulo'] = "Compra al por mayor online a los mejores precios | pormayor.pe";
// if (empty($data['usuario']['id_usuario'])) {
// $Usu_IdUsuario = 0;
// }else{
// $Usu_IdUsuario = $data['usuario']['id_usuario'];
// }        	
// $rB = $this->productoModel->registroBusqueda($nombre_busqueda,$Usu_IdUsuario);
$data['filtro_movil'] = true;
//PRODUCTO
$data['producto'] = $this->productoModel->filtro_producto_nombre($nombre_busqueda);
$data['busqueda_termino'] = $nombre_busqueda;
//URL categoria
foreach ($data['producto'] as $valor) {
$valor->url =  "pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
$valor->urlCategoria =  $this->buildSlugValue($valor->Cat_Nombre)."-al-por-mayor-".$valor->Cat_IdCategoria;
$valor->urlSubCategoria =  $this->buildSlugValue($valor->Suc_Nombre)."-al-por-mayor-".$valor->Suc_IdSubCategoria;
$valor->urlDetalle =  $this->buildSlugValue($valor->Suc_Nombre)."-".$this->buildSlugValue($valor->Des_Nombre)."-al-por-mayor-".$valor->Des_IdDetalle_SubCategoria;
$data['product_favoritos_items'] = $this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
$valor->cantFav =$this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);

}
if($data['producto'])
{
$data['nombre_busqueda'] = $nombre_busqueda;
}
else
{
$data['vista_categoria'] = true;
$data['noproducto2'] = "no hay producto";

//PRODUCTOS MÁS POPULARES	
$data['filtro_movil_popular'] = true;
$data['filtro_movil'] = false;
//URL categoria
$data['sin_productos'] = "no hay producto";
}

$this->twig->parse('tienda/inicio.twig', $data);
}

public function enviarPedidoCliente($correo, $nombreCliente, $dataCarrito, $ruta_img)
{
$this->load->library('correo');

$datos['nombre_usuario'] = $nombreCliente;
$datos['dataCarrito'] = $dataCarrito;
$datos['ruta_img'] = $ruta_img;

$contenido_correo = $this->twig->parse('correo/cotizacion_cliente.twig', $datos, true);

$this->correo->enviar($correo, "Nueva cotización solicitada", $contenido_correo);
}

public function enviarPedidoTienda($Tie_IdTienda, $correo, $nombreUsuario, $nombreCliente, $dataCarrito, $idPedido, $Tie_Subdominio, $ruta_img, $dominio)
{
$this->load->library('correo');

$datos['Tie_IdTienda'] = $Tie_IdTienda;
$datos['nombre_usuario'] = $nombreUsuario;
$datos['nombre_cliente'] = $nombreCliente;
$datos['dominio'] = $dominio;

$datos['dataCarrito'] = $dataCarrito;
$datos['idPedido'] = $idPedido;
$datos['Tie_Subdominio'] = $Tie_Subdominio;
$datos['ruta_img'] = $ruta_img;

$contenido_correo = $this->twig->parse('correo/cotizacion_tienda.twig', $datos, true);

$this->correo->enviar($correo, "Nueva cotización solicitada", $contenido_correo);
}

public function enviarComentario($correo, $nombreDuenotienda,$nombreCliente,$nombre_producto,$Tie_Subdominio)
{
$this->load->library('correo');

$datos['nombre_dueno'] = $nombreDuenotienda;
$datos['nombre_cliente'] = $nombreCliente;
$datos['nombre_producto'] = $nombre_producto;
$datos['Tie_Subdominio'] = $Tie_Subdominio;


$contenido_correo = $this->twig->parse('correo/comentario_producto.twig', $datos, true);

$this->correo->enviar($correo, $nombreCliente." te ha dejado un comentario", $contenido_correo);
}		

public function comentarioVer()
{
if($this->input->is_ajax_request())
{
$data = $this->acl->load_datos();
$Pro_IdProducto = (int)$this->input->post('data');
// $data['subcategoria'] = $this->input->post('datos');
$data['comentarios'] = $this->productoModel->get_comentarios($Pro_IdProducto);
// $this->twig->parse('usuario/model/selSubcategoria.twig', $data);
$this->twig->parse('tienda/load/comentario.twig', $data);
}
else
{
show_404();
}
}

public function despacho(){
$data = $this->acl->load_datos("no", "comprador");
$data['pagina']['titulo'] = 'Mi Compra';
$data['pagina']['titulo'] = 'Compra - 2 | pormayor.pe';
$data['vista_carrito2'] = true;
$data['vista_carrito_compra'] = true;

//Validaciones si usuario esta logueado o carrito esta vacio
if (!isset($data['usuario'])){
header("Location: ".base_url());
}

if (empty($data['carrito'])) {
header("Location: ".base_url());
}

$data['totalc'] = count($data['carrito']);
$data['region'] = $this->localModel->region();

//Datos dirección usuario
// $data['direccion_usuario'] = $this->usuarioModel->get_usuario_direccion($data['usuario']['id_usuario']);


$carro = array_values($data['carrito']);

//Nombres de tiendas
$idpro = [];
$idtiendas = [];
$idtiendas2 = [];

foreach ($data['carrito'] as $key => $valor) {
if (!in_array($valor['idtienda'], $idtiendas2)) {
$tiendaInfo = $this->tiendaModel->get_tienda_x_id($valor["idtienda"]);	


$newdata =  array (
'Tie_Nombre' => $tiendaInfo->Tie_Nombre,
'Tie_IdTienda' => $valor['idtienda'],
);

array_push($idtiendas,$newdata);


array_push($idtiendas2, $valor['idtienda']);
}

// Calculo el envio por producto
if(!empty($valor['idpro'])) {
array_push($idpro,$valor['idpro']);
}
}

// Valido las especificaciones del productos
$idpro=implode(",",$idpro);
if(!empty($idpro)) {
$data['espec_productos']=$this->productoModel->get_espec_productos($idpro);
}

$this->session->set_userdata('espec_productos',$data['espec_productos']);

$data['id_tiendas']= $idtiendas;

if (isset($data['usuario'])) 
{
$data['usuario_inf'] = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
}

$this->twig->parse('tienda/micompra.twig',$data);

}

// Funcion de costo de envio
public function selCostoEnvioN()
{		  
$data=$this->acl->load_datos("no", "comprador");
if ($this->input->is_ajax_request())
{	
$idDistrito=$this->input->post('id');
$DNIcliente=$this->input->post('DNIcliente');
$total2 = 0;
$cantidadProducto = 0;
$precios = [];
$data['envio'] = $this->productoModel->distrito_envio($idDistrito);
foreach ($data['carrito'] as $key => $productos) {
$cantP = $productos["price_min"] * $productos["qty"];
$total2 = $total2 + $cantP;
$cantidadProducto = $cantidadProducto + $productos["qty"];
$newdata = array (
'id_sku' =>  $productos["id"],
'id_tienda' =>  $productos["idtienda"],
'id_producto' =>  $productos["idpro"],
'costoRealDetallado' => 0,
'cantidadProducto' => $productos['qty'],
'costoPorProductos' => $productos['price']
);	
array_push($precios,$newdata);					
}
if ($data['envio']->costo == 1) {
$data['costoReal']=30;					
}else if ($data['envio']->costo == 2){
$data['costoReal']=30;
}else{
$data['costoReal']=10;
}

$data['arrayDetalle']=$precios;
$this->session->set_userdata('ArrayDetalle',$precios);
$this->session->set_userdata('DNIcliente',$DNIcliente);
$this->session->set_userdata('costoReal',round($data['costoReal']));
print_r(json_encode($data));
}
}

public function selCostoEnvio()
{		  
if ($this->input->is_ajax_request())
{	
$idDistrito=$this->input->post('id');
$DNIcliente=$this->input->post('DNIcliente');
$data=$this->acl->load_datos("no", "comprador");
if(!empty($idDistrito)) {
// Valido precio de envio curriers por distrito
$data['costo_envio'] = $this->productoModel->get_costo_envio($idDistrito);

if($data['costo_envio']) {
$data['costo_envio']=$data['costo_envio'];
} else {
$data['costo_envio']='';
}

}

$tiendas=[];
$precios=[];
$idtienda='';
$costoPeso=0;
$costoReal=0;
$costoMedida=0;
$constante=6000;
$ArrayDetalle='';
$costoRealDetallado=0;

$data['espec_productos']=$this->session->espec_productos;


foreach ($data['carrito'] as $key => $productos) {

if($productos["idtienda"]!=$idtienda) {
array_push($tiendas,$productos["idtienda"]);
}

$idtienda=$productos["idtienda"];


foreach ($data['espec_productos'] as $key => $especificacion) {

if($productos['idpro']==$especificacion->id) {

// Costo por medidas
if(!empty($especificacion->medida)) {
$valor=$especificacion->medida;
$medida=explode("x",$valor);

$costoMedida=(($medida[0]) * ($medida[1]) * ($medida[2]) / ($constante)); 
$costoMedida=(($costoMedida)*$productos['qty']);


if($costoMedida > 1) {
$costoMedida = $costoMedida-1;
}

} else {
$costoMedida=0;
}

// Costo por peso
if(!empty($especificacion->peso)) {
$costoPeso=($especificacion->peso*$productos['qty']);
if($costoPeso > 1) {
$costoPeso = $costoPeso-1;
}

} else {
$costoPeso=0;
}

// Valido cual de los  ambas medidas es mayor(medida / peso)
if(!empty($data['costo_envio'])) {
if($costoPeso > $costoMedida) {
$costoReal += ($costoPeso * $data['costo_envio']->Cos_CostoAdicional) + ($data['costo_envio']->Cos_CostoBase);
$costoRealDetallado= ($costoPeso * $data['costo_envio']->Cos_CostoAdicional) + ($data['costo_envio']->Cos_CostoBase);
} else {
$costoReal += ($costoMedida * $data['costo_envio']->Cos_CostoAdicional) + $data['costo_envio']->Cos_CostoBase;
$costoRealDetallado=($costoMedida * $data['costo_envio']->Cos_CostoAdicional) + $data['costo_envio']->Cos_CostoBase;
}
} else {
$costoReal=0.00;
$costoRealDetallado=0.00;
}


$newdata = array (
'id_sku' =>  $productos["id"],
'id_tienda' =>  $productos["idtienda"],
'id_producto' =>  $especificacion->id,
'costoRealDetallado' => 0,
'cantidadProducto' => $productos['qty'],
'costoPorProductos' => $productos['price']
);	

array_push($precios,$newdata);
}
}
}
$data['costoReal']=8;
$data['arrayDetalle']=$precios;
$this->session->set_userdata('ArrayDetalle',$precios);
$this->session->set_userdata('DNIcliente',$DNIcliente);
$this->session->set_userdata('costoReal',round($data['costoReal']));
print_r(json_encode($data));
}
}

public function selCostoEnvio2()
{		  
if ($this->input->is_ajax_request())
{	
$data=$this->acl->load_datos("no", "comprador");
// "dis":dis,"cant":cant,"dim":dim,"pes":pes
$idDistrito=$this->input->post('dis');
$cant=$this->input->post('cant');
$dim=$this->input->post('dim');
$pes=$this->input->post('pes');
if(!empty($idDistrito)) {
$data['cenv'] = $this->productoModel->get_costo_envio($idDistrito);					
}

$costoPeso=0;
$costoReal=0;
$costoMedida=0;
$constante=6000;

// Costo por medidas
if(!empty($dim)) {
$valor=$dim;
$medida=explode("x",$valor);
$costoMedida=(($medida[0]) * ($medida[1]) * ($medida[2]) / ($constante)); 
$costoMedida=$costoMedida*$cant;
if($costoMedida > 1) {
$costoMedida = $costoMedida-1;
}
} else {
$costoMedida=0;
}

// Costo por peso
if(!empty($pes)) {
$costoPeso=($pes*$cant);
if($costoPeso > 1) {
$costoPeso = $costoPeso-1;
}
} else {
$costoPeso=0;
}

// Valido cual de los  ambas medidas es mayor(medida / peso)
if($costoPeso > $costoMedida) {
$costoReal += ($costoPeso * $data['cenv']->Cos_CostoAdicional) + $data['cenv']->Cos_CostoBase;
} else {
$costoReal += ($costoMedida * $data['cenv']->Cos_CostoAdicional) + $data['cenv']->Cos_CostoBase;
}

$data['costoReal']=8;
print_r(json_encode($data));
}
}

public function pago_sesion_datos(){
if ($this->input->is_ajax_request()){

if (isset($_SESSION['inf_compra'])){
unset($_SESSION['inf_compra']);
}

$data = $this->acl->load_datos("no", "comprador");

$_SESSION['inf_compra']['correo'] = $this->input->post('correo');
$_SESSION['inf_compra']['nombre'] = $this->input->post('nombre');
$_SESSION['inf_compra']['tlf']  = $this->input->post('tlf');

$_SESSION['inf_compra']['region'] =  $this->input->post('region');
$_SESSION['inf_compra']['provincia'] = $this->input->post('provincia'); 
$_SESSION['inf_compra']['distrito'] = $this->input->post('distrito');
$_SESSION['inf_compra']['direccion'] = $this->input->post('direccion');
$_SESSION['inf_compra']['referencia'] = $this->input->post('referencia');
$_SESSION['inf_compra']['lote'] = $this->input->post('lote');
$_SESSION['inf_compra']['dpint'] = $this->input->post('dpint');
$_SESSION['inf_compra']['urbanizacion'] = $this->input->post('urbanizacion');
$_SESSION['inf_compra']['ruc'] = $this->input->post('ruc');
$_SESSION['inf_compra']['razonSocial'] = $this->input->post('razonSocial');


$carro = array_values($data['carrito']);

if (isset($data['usuario'])) 
{
$data['usuario_inf'] = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
}

return true;
}
}

public function pago($error_card=false){
$data = $this->acl->load_datos("no", "comprador");
$data['pagina']['titulo'] = 'Compra - 3 | pormayor.pe';
$data['vista_carrito3'] = true;
$data['vista_carrito_compra'] = true;
//Validaciones si usuario esta logueado o carrito esta vacio
if (!isset($data['usuario'])){
header("Location: ".base_url());
}if (empty($data['carrito'])){
header("Location: ".base_url());
}
//Variables para pago visanet
$totalCarrito = 0;
foreach ($data['carrito'] as $key => $valor) {
$totalCarrito += (float)$valor['price'];
}
$costoReal=number_format($this->session->costoReal, 2, '.', '');
$data['monto_total'] = $totalCarrito+$costoReal;	      
$ipaddress = $_SERVER['REMOTE_ADDR'];
$data['codigo'] =  time()+getmypid()+$data['usuario']['id_usuario'];
$_SESSION['monto'] = number_format($data['monto_total'], 2, ".", '');
$_SESSION['codigo'] = $data['codigo'];	      	
$data['sessionKey'] = $this->sessionKey($data['monto_total'],$ipaddress,$data['codigo']);
//Total cantidad carrito
$data['totalc'] = count($data['carrito']);
$carro = array_values($data['carrito']);
//Nombres de tiendas
$idtiendas = [];
$idtiendas2 = [];
foreach ($data['carrito'] as $key => $valor) {
if (!in_array($valor['idtienda'], $idtiendas2)) {
$tiendaInfo = $this->tiendaModel->get_tienda_x_id($valor["idtienda"]);	
$newdata =  array (
'Tie_Nombre' => $tiendaInfo->Tie_Nombre,
'Tie_IdTienda' => $valor['idtienda'],
);
array_push($idtiendas,$newdata);	      			
array_push($idtiendas2, $valor['idtienda']);
}
}

$data['id_tiendas'] = $idtiendas;
$tienda2 = "";
$items = [];
foreach ($data['id_tiendas'] as $idt) {
$tienda = $idt['Tie_Nombre'];
$tienda2 .= $tienda."-";
foreach ($data['carrito'] as $car ) {
if ($idt['Tie_IdTienda'] == $car['idtienda']) {
$id = $car['idpro'];
$name = $car['name'];
$price_uni = $car['price']/$car['qty'];
$price = $price_uni;
$cantidad = $car['qty'];
$item = array("sku"=>$id,"name"=>$name,"price" =>$price,"quantity"=>$cantidad);
array_push($items,$item);	      				
}
}
}
// print_r($item);
// print_r($items);
$data['inf_compra'] = $_SESSION['inf_compra'];
// $data['precios'] = $this->productoModel->precios_producto($carro[0]['idpro']);
//Error Visanet 
$data['error_card_visanet'] = str_replace('_', ' ', $error_card);
//Costo real
$data['costoReal']=number_format($this->session->costoReal, 2, '.', '');
//Información de usuario
$uniqueId = time().mt_rand()."PU".$data['usuario']['id_usuario'];

$analytics = array(
'transactionId' => $uniqueId,
'transactionAffiliation' => $tienda2,
'transactionTotal' => $data['costoReal'],
'transactionTax' => $totalCarrito,
'transactionShipping' => (float)$data['costoReal'],
'transactionProducts' => $items	    
);

$data['analytics'] = $analytics;

if (isset($data['usuario'])) 
{
$data['usuario_inf'] = $this->usuarioModel->get_usuario($data['usuario']['id_usuario']);
}
$this->twig->parse('tienda/pago_vista.twig', $data);
}	  

public function pago_compra(){
//Pago Compra
if ($this->input->is_ajax_request()){
$data = $this->acl->load_datos("no", "comprador");
// $array_compra = $this->input->post('array_compra');
$COD='NO';
$data['totalc'] = count($data['carrito']);
$Ven_Total = $this->input->post('total');
$Ven_Envio = $this->input->post('envio');
$banco = $this->input->post('Vef_Banco'); 

$correo = $_SESSION['inf_compra']['correo'];
$nombre = $_SESSION['inf_compra']['nombre'];
$tlf = $_SESSION['inf_compra']['tlf'];

$region = $_SESSION['inf_compra']['region'];
$provincia = $_SESSION['inf_compra']['provincia']; 
$distrito = $_SESSION['inf_compra']['distrito'];
$direccion = $_SESSION['inf_compra']['direccion'];
$referencia = $_SESSION['inf_compra']['referencia'];
$lote = $_SESSION['inf_compra']['lote'];
$dpint = $_SESSION['inf_compra']['dpint'];
$urbanizacion = $_SESSION['inf_compra']['urbanizacion'];
$ruc = $_SESSION['inf_compra']['ruc'];
$dniClient=$this->session->DNIcliente;
$razonSocial = $_SESSION['inf_compra']['razonSocial'];
$arryCompraDetalle=$this->session->ArrayDetalle;
$dir=$direccion.' '.$lote.' '.$dpint.' '.$urbanizacion.' '.$referencia;

$monto_cobrar='0.00';
$array_id_tienda = array();

$array_price_tienda = array();

foreach ($data['carrito'] as $cart) 
{
$array_id_tienda[] = $cart['idtienda'];	
$array_price_tienda[] = array($cart['idtienda'] => $cart['price'], );
}

$array_id_tienda = array_unique($array_id_tienda);
$array_price_tienda_total = array();

foreach ($array_id_tienda as $key) {						
$pricios = 0;
for ($i=0; $i < count($array_price_tienda) ; $i++) { 
if ($key == key($array_price_tienda[$i])) {
$pricios += $array_price_tienda[$i][$key];
}
}
$array_price_tienda_total[$key] = $pricios;
}		

$tienda_usuario = $data['usuario']['id_tienda'];
$Usu_IdUsuario = $data['usuario']['id_usuario'];

$Pac_IdPago_Compra = $this->productoModel->registrarCompra($data['carrito'],$arryCompraDetalle,$Ven_Total,$Ven_Envio,$Usu_IdUsuario,$banco,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$razonSocial,$tienda_usuario,$array_id_tienda,$array_price_tienda_total,$tlf);

if (is_null($Pac_IdPago_Compra))
{
echo 0;
}
else
{

$codigoCompra = $this->productoModel->codigoCompra($Pac_IdPago_Compra);
//API CURRIERS
// $this->apiCurriers($Pac_IdPago_Compra,$correo,$nombre,$dniClient,$codigoCompra->Pac_CodPago,$tlf,$region,$provincia,$distrito,$dir,$COD,$monto_cobrar);

// $this->correoComprador($correo, $nombre, $data['carrito'], $data['ruta_img'],$codigoCompra->Pac_CodPago,$banco);
$this->correoVentas('alexis.bequiz@pormayor.pe', $nombre, $data['carrito'], $data['ruta_img'],$codigoCompra->Pac_CodPago,$banco);
$this->correoVentas('ventas@pormayor.pe', $nombre, $data['carrito'], $data['ruta_img'],$codigoCompra->Pac_CodPago,$banco);

// foreach ($array_id_tienda as $Tie_IdTienda)
// {
// 	$tienda = $this->cotizacionModel->get_datos_correo($Tie_IdTienda);

// 	$this->enviarPedidoTienda($Tie_IdTienda, $tienda->Usu_Correo, $tienda->Per_Nombre, $arrData[0], $data['carrito'], $Ped_IdPedido, $tienda->Tie_Subdominio, $data['ruta_img'], $data['dominio']);
// }
$this->cart->destroy();
unset($_SESSION['inf_compra']);
echo $Pac_IdPago_Compra;
}

}
}

public function pago_compra_acuerdo_tienda(){
if ($this->input->is_ajax_request()){
$data = $this->acl->load_datos("no", "comprador");

// $array_compra = $this->input->post('array_compra');

$data['totalc'] = count($data['carrito']);
$Ven_Total = $this->input->post('total');

$correo = $_SESSION['inf_compra']['correo'];
$nombre = $_SESSION['inf_compra']['nombre'];
$tlf = $_SESSION['inf_compra']['tlf'];

$region = $_SESSION['inf_compra']['region'];
$provincia = $_SESSION['inf_compra']['provincia']; 
$distrito = $_SESSION['inf_compra']['distrito'];
$direccion = $_SESSION['inf_compra']['direccion'];
$referencia = $_SESSION['inf_compra']['referencia'];
$lote = $_SESSION['inf_compra']['lote'];
$dpint = $_SESSION['inf_compra']['dpint'];
$urbanizacion = $_SESSION['inf_compra']['urbanizacion'];
$arryCompraDetalle=$this->session->ArrayDetalle;

$array_id_tienda = array();

$array_price_tienda = array();

foreach ($data['carrito'] as $cart) 
{
$array_id_tienda[] = $cart['idtienda'];	
$array_price_tienda[] = array($cart['idtienda'] => $cart['price'], );
}

$array_id_tienda = array_unique($array_id_tienda);
$array_price_tienda_total = array();

foreach ($array_id_tienda as $key) {						
$pricios = 0;
for ($i=0; $i < count($array_price_tienda) ; $i++) { 
if ($key == key($array_price_tienda[$i])) {
$pricios += $array_price_tienda[$i][$key];
}
}
$array_price_tienda_total[$key] = $pricios;
}		

$tienda_usuario = $data['usuario']['id_tienda'];
$Usu_IdUsuario = $data['usuario']['id_usuario'];
$Ven_IdVendedor = $this->productoModel->asignar_vendedor($Usu_IdUsuario);

$Pac_IdPago_Compra = $this->productoModel->registrarAcuerdo($data['carrito'],$arryCompraDetalle,$Ven_Total,$Ven_Envio,$Usu_IdUsuario,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$tienda_usuario,$array_id_tienda,$array_price_tienda_total,$tlf,$tipoPago,$Descuento,$Ven_IdVendedor->Usu_IdUsuario_Ven);

if (is_null($Pac_IdPago_Compra))
{
echo 0;
}
else
{
$this->load->library('cart');
foreach ($data['carrito'] as $key => $cart) 
{
$info_tienda = $this->tiendaModel->get_tienda_info_acuerdo($cart['idtienda']);
$dataT = array(
'rowid'  => $cart['rowid'],
'Tie_Nombre'  => "$info_tienda->Tie_Nombre",
'Tie_Telefono'  => "$info_tienda->Per_Telefono",
'Tie_Correo'  => "$info_tienda->Per_Correo",
'Tie_Direccion'  => "$info_tienda->Loc_Direccion",
);
// print_r($info_tienda);
$this->cart->update($dataT);
}
// print_r($data['carrito']);
//CORREOS
$codigoCompra = $this->productoModel->codigoCompra($Pac_IdPago_Compra);

function sortByName($a, $b)
{
$a = $a['idtienda'];
$b = $b['idtienda'];

if ($a == $b) return 0;
return ($a < $b) ? -1 : 1;
}
usort($data['carrito'], 'sortByName'); 

$this->correoComprador_acuerdo($correo, $nombre, $data['carrito'], $codigoCompra->Pac_CodPago);

$this->correoTienda_acuerdo('ventas@pormayor.pe','PorMayor.pe','227',$Usu_IdUsuario , $data['carrito'], $codigoCompra->Pac_CodPago);

$this->cart->destroy();
unset($_SESSION['inf_compra']);
echo $Pac_IdPago_Compra;
}
}
}

public function pago_contraentrega() {
//Pago ContraEntega
if ($this->input->is_ajax_request()){
$data = $this->acl->load_datos("no", "comprador");
$COD='COD';
$data['totalc'] = count($data['carrito']);
$Ven_Total = $this->input->post('total');
$Ven_Envio = $this->input->post('envio');
$Descuento = $this->input->post('desc');
$correo = $_SESSION['inf_compra']['correo'];
$nombre = $_SESSION['inf_compra']['nombre'];
$tlf = $_SESSION['inf_compra']['tlf'];
$region = $_SESSION['inf_compra']['region'];
$provincia = $_SESSION['inf_compra']['provincia']; 
$distrito = $_SESSION['inf_compra']['distrito'];
$direccion = $_SESSION['inf_compra']['direccion'];
$referencia = $_SESSION['inf_compra']['referencia'];
$ruc =$_SESSION['inf_compra']['ruc'];// $this->session->DNIcliente;
$clienteRazonSocial=$_SESSION['inf_compra']['razonSocial'];
$lote = $_SESSION['inf_compra']['lote'];
$dpint = $_SESSION['inf_compra']['dpint'];
$dniClient=$this->session->DNIcliente;
$arryCompraDetalle=$this->session->ArrayDetalle;
$urbanizacion = $_SESSION['inf_compra']['urbanizacion'];
$tipoPago=$this->input->post('tipoPago');
$dir=$direccion.' '.$lote.' '.$dpint.' '.$urbanizacion.' '.$referencia;
$monto_cobrar=(($Ven_Total) + ($Ven_Envio));
$array_id_tienda = array();
$array_price_tienda = array();
foreach ($data['carrito'] as $cart) 
{
$array_id_tienda[] = $cart['idtienda'];	
$array_price_tienda[] = array($cart['idtienda'] => $cart['price'], );
}

$array_id_tienda = array_unique($array_id_tienda);
$array_price_tienda_total = array();

foreach ($array_id_tienda as $key) {						
$pricios = 0;
for ($i=0; $i < count($array_price_tienda) ; $i++) { 
if ($key == key($array_price_tienda[$i])) {
$pricios += $array_price_tienda[$i][$key];
}
}
$array_price_tienda_total[$key] = $pricios;
}		

$tienda_usuario = $data['usuario']['id_tienda'];
$Usu_IdUsuario = $data['usuario']['id_usuario'];
$Ven_IdVendedor = $this->productoModel->asignar_vendedor($Usu_IdUsuario);

$Pac_IdPago_Compra = $this->productoModel->registrarAcuerdo($data['carrito'],$arryCompraDetalle,$Ven_Total,$Ven_Envio,$Usu_IdUsuario,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$tienda_usuario,$array_id_tienda,$array_price_tienda_total,$tlf,$tipoPago,$Descuento,$Ven_IdVendedor->Usu_IdUsuario_Ven);


if (is_null($Pac_IdPago_Compra))
{
echo 0;
}
else
{
$this->load->library('cart');
foreach ($data['carrito'] as $key => $cart2) 
{
$info_tienda = $this->tiendaModel->get_tienda_info_acuerdo($cart2['idtienda']);
$dataT = array(
'rowid'  => $cart2['rowid'],
'Tie_Nombre'  => "$info_tienda->Tie_Nombre",
'Tie_Telefono'  => "$info_tienda->Per_Telefono",
'Tie_Correo'  => "$info_tienda->Per_Correo",
'Tie_Direccion'  => "$info_tienda->Loc_Direccion",
);
// print_r($dataT);
$this->cart->update($dataT);
}

$codigoCompra = $this->productoModel->codigoCompra($Pac_IdPago_Compra);

function sortByName($a, $b)
{
$a = $a['idtienda'];
$b = $b['idtienda'];

if ($a == $b) return 0;
return ($a < $b) ? -1 : 1;
}
usort($data['carrito'], "sortByName"); 

$this->correoContra_entrega($correo,$nombre, $data['carrito'],$codigoCompra->Pac_CodPago,$Pac_IdPago_Compra,$Ven_Envio,$Descuento);
$this->correoContra_entrega2($correo,$nombre, $data['carrito'],$codigoCompra->Pac_CodPago,$Pac_IdPago_Compra,$Ven_Envio,$Descuento);
$this->correoTienda_ce('ventas@pormayor.pe','PorMayor.pe','227',$Usu_IdUsuario , $data['carrito'], $codigoCompra->Pac_CodPago,$tlf);
$this->cart->destroy();
unset($_SESSION['inf_compra']);
echo $Pac_IdPago_Compra;					
}
}
}

public function pago_tienda() {
//Pago ContraEntega
if ($this->input->is_ajax_request()){
$data = $this->acl->load_datos("no", "comprador");

// $array_compra = $this->input->post('array_compra');
$COD='COD';
$data['totalc'] = count($data['carrito']);
$Ven_Total = $this->input->post('total');
$Ven_Envio = $this->input->post('envio');
$Descuento = $this->input->post('desc');
$correo = $_SESSION['inf_compra']['correo'];
$nombre = $_SESSION['inf_compra']['nombre'];
$tlf = $_SESSION['inf_compra']['tlf'];
$region = $_SESSION['inf_compra']['region'];
$provincia = $_SESSION['inf_compra']['provincia']; 
$distrito = $_SESSION['inf_compra']['distrito'];
$direccion = $_SESSION['inf_compra']['direccion'];
$referencia = $_SESSION['inf_compra']['referencia'];
$ruc =$_SESSION['inf_compra']['ruc'];// $this->session->DNIcliente;
$clienteRazonSocial=$_SESSION['inf_compra']['razonSocial'];
$lote = $_SESSION['inf_compra']['lote'];
$dpint = $_SESSION['inf_compra']['dpint'];
$dniClient=$this->session->DNIcliente;
$arryCompraDetalle=$this->session->ArrayDetalle;
$urbanizacion = $_SESSION['inf_compra']['urbanizacion'];
$tipoPago=$this->input->post('tipoPago');
$dir=$direccion.' '.$lote.' '.$dpint.' '.$urbanizacion.' '.$referencia;

//Api
$monto_cobrar=(($Ven_Total) + ($Ven_Envio));

$array_id_tienda = array();

$array_price_tienda = array();

foreach ($data['carrito'] as $cart) 
{
$array_id_tienda[] = $cart['idtienda'];	
$array_price_tienda[] = array($cart['idtienda'] => $cart['price'], );
}

$array_id_tienda = array_unique($array_id_tienda);
$array_price_tienda_total = array();

foreach ($array_id_tienda as $key) {						
$pricios = 0;
for ($i=0; $i < count($array_price_tienda) ; $i++) { 
if ($key == key($array_price_tienda[$i])) {
$pricios += $array_price_tienda[$i][$key];
}
}
$array_price_tienda_total[$key] = $pricios;
}		

$tienda_usuario = $data['usuario']['id_tienda'];
$Usu_IdUsuario = $data['usuario']['id_usuario'];
$Ven_IdVendedor = $this->productoModel->asignar_vendedor($Usu_IdUsuario);

$Pac_IdPago_Compra = $this->productoModel->registrarAcuerdo($data['carrito'],$arryCompraDetalle,$Ven_Total,$Ven_Envio,$Usu_IdUsuario,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$tienda_usuario,$array_id_tienda,$array_price_tienda_total,$tlf,$tipoPago,$Descuento,$Ven_IdVendedor->Usu_IdUsuario_Ven);


if (is_null($Pac_IdPago_Compra))
{
echo 0;
}
else
{
$this->load->library('cart');
foreach ($data['carrito'] as $key => $cart2) 
{
$info_tienda = $this->tiendaModel->get_tienda_info_acuerdo($cart2['idtienda']);
$dataT = array(
'rowid'  => $cart2['rowid'],
'Tie_Nombre'  => "$info_tienda->Tie_Nombre",
'Tie_Telefono'  => "$info_tienda->Per_Telefono",
'Tie_Correo'  => "$info_tienda->Per_Correo",
'Tie_Direccion'  => "$info_tienda->Loc_Direccion",
);
// print_r($dataT);
$this->cart->update($dataT);
}

$codigoCompra = $this->productoModel->codigoCompra($Pac_IdPago_Compra);

function sortByName($a, $b)
{
$a = $a['idtienda'];
$b = $b['idtienda'];

if ($a == $b) return 0;
return ($a < $b) ? -1 : 1;
}
usort($data['carrito'], "sortByName"); 

$this->correoContra_entrega($correo,$nombre, $data['carrito'],$codigoCompra->Pac_CodPago,$Pac_IdPago_Compra,$Ven_Envio,$Descuento);
$this->correoContra_entrega2($correo,$nombre, $data['carrito'],$codigoCompra->Pac_CodPago,$Pac_IdPago_Compra,$Ven_Envio,$Descuento);
$this->correoTienda_ce('ventas@pormayor.pe','PorMayor.pe','227',$Usu_IdUsuario , $data['carrito'], $codigoCompra->Pac_CodPago,$tlf);

$this->cart->destroy();
unset($_SESSION['inf_compra']);
echo $Pac_IdPago_Compra;

}
}
}

public function pago_DOT() {
//Pago deposito o trasferencia
if ($this->input->is_ajax_request()){
$data=$this->acl->load_datos("no","comprador");
$COD='COD';
$ruc=$_SESSION['inf_compra']['ruc'];
$tlf=$_SESSION['inf_compra']['tlf'];
$dniClient=$this->session->DNIcliente;
$lote=$_SESSION['inf_compra']['lote'];
$Ven_Total=$this->input->post('total');
$Ven_Envio=$this->input->post('envio');
$Descuento=$this->input->post('desc');
$dpint=$_SESSION['inf_compra']['dpint'];
$data['totalc']=count($data['carrito']);
$tipoPago=$this->input->post('tipoPago');
$correo=$_SESSION['inf_compra']['correo'];
$nombre=$_SESSION['inf_compra']['nombre'];
$region=$_SESSION['inf_compra']['region'];
$distrito=$_SESSION['inf_compra']['distrito'];
$arryCompraDetalle=$this->session->ArrayDetalle;
$direccion=$_SESSION['inf_compra']['direccion'];
$provincia=$_SESSION['inf_compra']['provincia']; 
$referencia=$_SESSION['inf_compra']['referencia'];
$urbanizacion=$_SESSION['inf_compra']['urbanizacion'];
$clienteRazonSocial=$_SESSION['inf_compra']['razonSocial'];
$dir=$direccion.' '.$lote.' '.$dpint.' '.$urbanizacion.' '.$referencia;

//Api
$monto_cobrar=(($Ven_Total) + ($Ven_Envio));
$array_id_tienda=array();
$array_price_tienda=array();

foreach($data['carrito'] as $cart) {
$array_id_tienda[]=$cart['idtienda'];	
$array_price_tienda[]=array($cart['idtienda'] => $cart['price'],);
}

$array_id_tienda=array_unique($array_id_tienda);
$array_price_tienda_total=array();

foreach($array_id_tienda as $key) {						
$pricios=0;
for($i=0;$i<count($array_price_tienda);$i++) { 
if($key==key($array_price_tienda[$i])) {
$pricios+=$array_price_tienda[$i][$key];
}
}
$array_price_tienda_total[$key]=$pricios;
}		

$tienda_usuario=$data['usuario']['id_tienda'];
$Usu_IdUsuario=$data['usuario']['id_usuario'];
$Ven_IdVendedor = $this->productoModel->asignar_vendedor($Usu_IdUsuario);

$Pac_IdPago_Compra=$this->productoModel->registrarAcuerdo($data['carrito'],$arryCompraDetalle,$Ven_Total,$Ven_Envio,$Usu_IdUsuario,$region,$provincia,$direccion,$distrito,$referencia,$lote,$dpint,$urbanizacion,$ruc,$tienda_usuario,$array_id_tienda,$array_price_tienda_total,$tlf,$tipoPago,$Descuento,$Ven_IdVendedor->Usu_IdUsuario_Ven);


if(is_null($Pac_IdPago_Compra)) {
echo 0;
} else {
$this->load->library('cart');
foreach ($data['carrito'] as $key => $cart2) {
$info_tienda=$this->tiendaModel->get_tienda_info_acuerdo($cart2['idtienda']);
$dataT=array(
'rowid'=>$cart2['rowid'],
'Tie_Correo'=>"$info_tienda->Per_Correo",
'Tie_Nombre'=>"$info_tienda->Tie_Nombre",
'Tie_Telefono'=>"$info_tienda->Per_Telefono",
'Tie_Direccion'=>"$info_tienda->Loc_Direccion",
);
$this->cart->update($dataT);
}

$codigoCompra=$this->productoModel->codigoCompra($Pac_IdPago_Compra);

function sortByName($a,$b) {
$a=$a['idtienda'];
$b=$b['idtienda'];

if ($a==$b) return 0;
return ($a < $b) ? -1 : 1;
}
usort($data['carrito'],"sortByName"); 
$this->correoDeposito_transferencia($correo,$nombre, $data['carrito'],$codigoCompra->Pac_CodPago,$Pac_IdPago_Compra,$Ven_Envio,$Descuento);
$this->correoDeposito_transferencia2($correo,$nombre, $data['carrito'],$codigoCompra->Pac_CodPago,$Pac_IdPago_Compra,$Ven_Envio,$Descuento);

$tiendaActual='';
// foreach ($data['carrito'] as $key => $cart) {
// 	if ($tiendaActual!=$cart['idtienda']) {
// 		$info_tienda=$this->tiendaModel->get_tienda_info_acuerdo($cart['idtienda']);
// 		$this->correoTienda_dot($info_tienda->Per_Correo,$info_tienda->Tie_Nombre,$cart['idtienda'],$Usu_IdUsuario,$data['carrito'],$codigoCompra->Pac_CodPago,$tlf);
// 		$tiendaActual=$cart['idtienda'];
// 	}
// }
$this->correoTienda_dot('ventas@pormayor.pe','PorMayor.pe','227',$Usu_IdUsuario,$data['carrito'],$codigoCompra->Pac_CodPago,$tlf,$Descuento);

$this->cart->destroy();
unset($_SESSION['inf_compra']);
echo $Pac_IdPago_Compra;
}
}
}

public function correoComprador($correo,$nombreCliente,$dataCarrito,$ruta_img,$CodPago,$banco)
{
$this->load->library('correo');
$datos['banco']=$banco;
$datos['ruta_img']=$ruta_img;
$datos['codigoCompra']=$CodPago;
$datos['dataCarrito']=$dataCarrito;
$datos['nombre_usuario']=$nombreCliente;
$contenido_correo=$this->twig->parse('correo/correo_compra_segura.twig',$datos,true);
$this->correo->enviar($correo, "Haz comprado en PORMAYOR.PE #".$CodPago,$contenido_correo);
}


public function correoComprador_acuerdo($correo,$nombreCliente,$dataCarrito,$codigo)
{
$this->load->library('correo');
$datos['dataCarrito']=$dataCarrito;
$datos['nombre_usuario']=$nombreCliente;

$contenido_correo=$this->twig->parse('correo/correo_compra_acuerdo_comprador.twig',$datos,true);
$this->correo->enviar($correo,"Pormayor.pe | Compra con Acuerdo Directo con Tienda | #".$codigo,$contenido_correo);
}

public function correoDeposito_transferencia($correo,$nombreCliente,$dataCarrito,$codigo,$Pac_IdPago_Compra,$Ven_Envio,$Descuento)
{
$this->load->library('correo');
$datos['costoEnvio']=$Ven_Envio;
$datos['dataCarrito']=$dataCarrito;
$datos['idcompra']=$Pac_IdPago_Compra;
$datos['nombre_usuario']=$nombreCliente;
$datos['descuento']=$Descuento;
$contenido_correo=$this->twig->parse('correo/correo_compra_deposito_transferencia.twig',$datos,true);
$this->correo->enviar($correo,"Pormayor.pe | COMPRA CON PAGO POR DEPOSITO O TRANSFERENCIA | #".$codigo,$contenido_correo);
}

public function correoDeposito_transferencia2($correo,$nombreCliente,$dataCarrito,$codigo,$Pac_IdPago_Compra,$Ven_Envio,$Descuento)
{
$this->load->library('correo');
$datos['costoEnvio']=$Ven_Envio;
$correo="alexis.bequiz@pormayor.pe";
$datos['dataCarrito']=$dataCarrito;
$datos['idcompra']=$Pac_IdPago_Compra;
$datos['nombre_usuario']=$nombreCliente;
$datos['descuento']=$Descuento;
$contenido_correo=$this->twig->parse('correo/correo_compra_deposito_transferencia.twig',$datos,true);
$this->correo->enviar($correo, "Pormayor.pe | COMPRA CON PAGO POR DEPOSITO O TRANSFERENCIA | #".$codigo,$contenido_correo);
}

public function correoContra_entrega($correo,$nombreCliente,$dataCarrito,$codigo,$Pac_IdPago_Compra,$Ven_Envio,$Descuento)
{
$this->load->library('correo');
$datos['costoEnvio']=$Ven_Envio;
$datos['dataCarrito']=$dataCarrito;
$datos['idcompra']=$Pac_IdPago_Compra;
$datos['nombre_usuario']=$nombreCliente;
$datos['descuento']=$Descuento;
$contenido_correo=$this->twig->parse('correo/correo_compra_contra_entrega.twig',$datos,true);
$this->correo->enviar($correo,"Pormayor.pe | COMPRA CON PAGO CONTRA ENTREGA | #".$codigo,$contenido_correo);
}

public function correoContra_entrega2($correo,$nombreCliente,$dataCarrito,$codigo,$Pac_IdPago_Compra,$Ven_Envio,$Descuento)
{
$this->load->library('correo');
$datos['costoEnvio']=$Ven_Envio;
$datos['dataCarrito']=$dataCarrito;
$correo="alexis.bequiz@pormayor.pe";
$datos['idcompra']=$Pac_IdPago_Compra;
$datos['nombre_usuario']=$nombreCliente;
$datos['descuento']=$Descuento;
$contenido_correo=$this->twig->parse('correo/correo_compra_contra_entrega.twig',$datos,true);
$this->correo->enviar($correo, "Pormayor.pe | COMPRA CON PAGO CONTRA ENTREGA | #".$codigo,$contenido_correo);
}

public function correoTienda_acuerdo($correo,$nombreTienda,$Tie_IdTienda,$Usu_IdUsuario,$dataCarrito,$codigo)
{
$this->load->library('correo');
$info_usuario=$this->usuarioModel->get_usuario($Usu_IdUsuario);
$datos['dataCarrito']=$dataCarrito;
$datos['Tie_IdTienda']=$Tie_IdTienda;
$datos['nombre_tienda']=$nombreTienda;
$datos['correo_usuario']=$info_usuario->Usu_Correo;
$datos['nombre_usuario']=$info_usuario->Per_Nombre;
$datos['telefono_usuario']=$info_usuario->Per_Telefono;
$contenido_correo=$this->twig->parse('correo/correo_compra_acuerdo_tienda.twig',$datos,true);
$this->correo->enviar($correo,"Pormayor.pe | VENTA POR ACUERDO TIENDA | #".$codigo, $contenido_correo);
}

public function correoTienda_dot($correo,$nombreTienda,$Tie_IdTienda,$Usu_IdUsuario,$dataCarrito,$codigo,$tlf,$Descuento)
{
$this->load->library('correo');
$info_usuario=$this->usuarioModel->get_usuario($Usu_IdUsuario);
$datos['telefono_usuario']=$tlf;
$datos['dataCarrito']=$dataCarrito;
$datos['Tie_IdTienda']=$Tie_IdTienda;
$datos['nombre_tienda']=$nombreTienda;
$datos['nombre_usuario']=$info_usuario->Per_Nombre;
$datos['correo_usuario']=$info_usuario->Usu_Correo;
$datos['descuento']=$Descuento;
$contenido_correo=$this->twig->parse('correo/correo_compra_dot_tienda.twig',$datos,true);
$this->correo->enviar($correo, "Pormayor.pe | VENTA POR DÉPOSITO / TRANSFERENCIA | #".$codigo,$contenido_correo);
}


public function correoTienda_ce($correo,$nombreTienda,$Tie_IdTienda,$Usu_IdUsuario,$dataCarrito,$codigo,$tlf)
{
$this->load->library('correo');
$info_usuario=$this->usuarioModel->get_usuario($Usu_IdUsuario);	
$datos['telefono_usuario']=$tlf;
$datos['dataCarrito']=$dataCarrito;
$datos['Tie_IdTienda']=$Tie_IdTienda;
$datos['nombre_tienda']=$nombreTienda;
$datos['nombre_usuario']=$info_usuario->Per_Nombre;
$datos['correo_usuario']=$info_usuario->Usu_Correo;
$contenido_correo=$this->twig->parse('correo/correo_compra_ce_tienda.twig',$datos,true);
$this->correo->enviar($correo,"Pormayor.pe | VENTA POR CONTRAENTREGA | #".$codigo,$contenido_correo);
}

public function correoVentas($correo,$nombreCliente,$dataCarrito,$ruta_img,$CodPago,$banco)
{
$this->load->library('correo');
$datos['banco']=$banco;
$datos['ruta_img']=$ruta_img;
$datos['codigoCompra']=$CodPago;
$datos['dataCarrito']=$dataCarrito;
$datos['nombre_usuario']=$nombreCliente;
$contenido_correo=$this->twig->parse('correo/correo_compra_segura.twig',$datos,true);
$this->correo->enviar($correo,"Haz comprado en PORMAYOR.PE #".$CodPago,$contenido_correo);
}

//EDICION DE CARRITO
public function precios_producto_edicion()
{
if ($this->input->is_ajax_request()) {
$Pro_IdProducto=(int)$this->input->post('Pro_IdProducto');
$precios=$this->productoModel->precios_producto($Pro_IdProducto);	
echo json_encode($precios);
}
}

public function buildSlugValue($string) {
$table=array(
'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
);

// -- Remove duplicated spaces
$stripped=preg_replace(array('/\s{2,}/','/[\t\n]/'),' ',$string);
$string=str_replace(',','',$string);
$string=str_replace('.','',$string);
// -- Returns the slug
return strtolower(strtr($string,$table));
}

function _login($correo,$clave,$remember,$redirect=1,$url)
{
$data['login_by_username']=($this->config->item('login_by_username','tank_auth') AND  $this->config->item('use_username','tank_auth'));
$data['login_by_email']=$this->config->item('login_by_email','tank_auth');

if($this->tank_auth->login($correo,$clave,$remember,$data['login_by_username'],$data['login_by_email'])) {
if($redirect==1) {
$this->_redirigir_login($url);
}    
} else {
$errors=$this->tank_auth->get_error_message();
if(isset($errors['banned'])) {                               
$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);
} elseif (isset($errors['not_activated'])) {               
redirect('/usuario/send_again/');
} else {                                                   
foreach ($errors as $k => $v)   $data['errors'][$k]=$this->lang->line($v);
}
}
}

function _redirigir_login()
{
redirect('productos/despacho');
}

function _send_email($type,$email,&$data)
{
$this->load->library('email');
$this->email->from($this->config->item('webmaster_email','tank_auth'),$this->config->item('website_name','tank_auth'));
$this->email->reply_to($this->config->item('webmaster_email','tank_auth'),$this->config->item('website_name', 'tank_auth'));
$this->email->to($email);
$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type),$this->config->item('website_name','tank_auth')));
$this->email->message($this->load->view('usuario/email/'.$type.'-html',$data,TRUE));
$this->email->set_alt_message($this->load->view('usuario/email/'.$type.'-txt',$data,TRUE));
$this->email->send();
}

//COUNT CLICK A CONTACTO O LLAMADA
public function clickContacto()
{
if($this->input->is_ajax_request()) {
$Pro_IdProducto=(int)$this->input->post('Pro_IdProducto');
$click=$this->productoModel->click_contacto($Pro_IdProducto);
if ($click) {
echo 1;
}	else{
echo 0;
}
}
}

//FUNCIONES VISANET
function tokenSeguridad() {
$clave='$9X2j!!V';
$usuario='alexis.bequiz@pormayor.pe';
$host="https://apiprod.vnforapps.com/api.security/v1/security";

$ch=curl_init();
curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
curl_setopt($ch,CURLOPT_TIMEOUT,10);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type:text/plain"));
curl_setopt($ch,CURLOPT_USERPWD,"$usuario:$clave");
curl_setopt($ch,CURLOPT_URL,$host);
$responseBody=curl_exec($ch);
$responseInfo=curl_getinfo($ch);
curl_close($ch);
return $responseBody;
}

function sessionKey($monto,$ipaddress,$codigo) {
$ts=$this->tokenSeguridad();
$host2="https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/603706801";
$data=array(
'amount' => $monto,
'antifraud' => array(
'clientIp' => $ipaddress, 
'merchantDefineData' => array('MDD1' => $codigo )
),
'channel' => 'web',
'recurrenceMaxAmount' => '10000.00'
);

$payload=json_encode($data);
$ch=curl_init($host2);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLINFO_HEADER_OUT,true);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$payload);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Authorization: '.$ts,
'Content-Length: '.strlen($payload))
);

$responseBody=curl_exec($ch);
$responseInfo=curl_getinfo($ch);
curl_close($ch);    
$r=json_decode($responseBody);
return $r->sessionKey;
}
}
?>