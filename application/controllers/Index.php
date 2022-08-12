<?php
  if (! defined('BASEPATH')) exit('No direct script access allowed');
  class Index extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
    }
    public function index()
    {
      // header('Access-Control-Allow-Origin: *');
      $data=$this->acl->load_datos();
      $data['index'] = true;
      $data['pagina']['extrabtn']='NO';
      $data['pagina']['tipo']='principal';
      $data['pagina']['titulo']='PorMayor.pe - Crece con nosotros';
      $data['pro10']=$this->productoModel->indexproducto();
      $this->twig->parse('index3.twig',$data);
    }
    public function lista()
    {
      $data=$this->acl->load_datos();
      // $data['producto']=$this->productoModel->productos_listado();  
      $this->twig->parse('layout/favoritos.twig',$data);
    }
    public function about()
    {
      $data=$this->acl->load_datos(); 
      $data['pagina']['titulo']='Nosotros - PorMayor.pe';
      $data['vendedores']=$this->productoModel->vendedores();
      $this->twig->parse('about.twig',$data);
    }
    public function contactanos()
    {
      $data=$this->acl->load_datos(); 
      $data['pagina']['titulo']='Contacto - PorMayor.pe';

      if(isset($data['usuario']['id_usuario'])){
        $data['noticotiza']=$this->cotizacionModel->get_cotizacion_usuario_noti($data['usuario']['id_usuario']);
        $data['noticoments']=$this->cotizacionModel->get_comentarios_usuario_noti($data['usuario']['id_usuario']);
      }
      $this->twig->parse('contactanos.twig',$data);
    }

    public function suscribete()
    {
      $data=$this->acl->load_datos();    
      $data['pagina']['titulo']='PorMayor.pe - Vende y compra al por mayor en Perú';
      $this->twig->parse('suscribete.twig',$data);
    }    

    public function categorias($Cat_IdCategoria=false)
    {
      if($Cat_IdCategoria) {
        $data=$this->acl->load_datos();
        $categoria_completa=explode("-",$Cat_IdCategoria);
        $url_nombre=implode("-",$categoria_completa);
        $titulo_pag=implode(" ",$categoria_completa);
        end($categoria_completa);
        $key=key($categoria_completa);
        $Cat_IdCategoria=(int)$categoria_completa[$key];
        $data['pagina']['titulo']=substr($titulo_pag, 0, -2);
        $data['producto']=$this->productoModel->productos_categoria($Cat_IdCategoria);
        foreach($data['producto'] as $valor) {
          $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        }

        $this->twig->parse('tienda/categoria.twig',$data);
      }
    }

    function cerrar_sesion()
    {
      // $this->session->sess_destroy();
      $array_items = array('logueado', 'nombre','id_tienda','id_usuario','rol');
      $this->session->unset_userdata($array_items);
      redirect('/');
      // redirect('usuario/login'); 
    }

    public function ajax_lista_provincias()
    {
      if($this->input->is_ajax_request()) {
        $this->load->model("Local_model","localModel");
        $Region_Id=$this->input->post('selDepartamento');
        $data['provincias']=$this->localModel->provincia($Region_Id);
        $this->twig->parse('usuario/ajax/lista_provincias.twig', $data);
      } else {
        show_404();
      }
    }

    public function ajax_lista_distritos()
    {
      if($this->input->is_ajax_request()) {
        $this->load->model("Local_model","localModel");
        $Region_Id=(int)$this->input->post('selDepartamento');
        $Provincia_Id=(int)$this->input->post('selProvincia');
        $data['distritos']=$this->localModel->distrito($Provincia_Id,$Region_Id);
        $this->twig->parse('usuario/ajax/lista_distritos.twig',$data);
      } else {
        show_404();
      }
    }

    function ajax_filtro_productos()
    {
      if($this->input->is_ajax_request()) {
        $data=$this->acl->load_datos();
        $vista=$this->input->post('vista');
        $filtro_nro=$this->input->post('filtro_nro');
        $filtro_tipo=$this->input->post('filtro_tipo');
        $nombre_busqueda=$this->input->post('nombre_busqueda');
        $data['vista']=$vista;

        if($filtro_tipo=="cat") {
          $data['producto']=$this->productoModel->productos_categoria($filtro_nro);
        }else if($filtro_tipo=="suc"){
          $data['producto']=$this->productoModel->productos_subcategoria($filtro_nro);
        }else if($filtro_tipo=="des"){
          $data['producto']=$this->productoModel->productos_detallesub($filtro_nro);
        }else if($filtro_tipo=="especial"){
          $data['producto']=$this->productoModel->productos_campana2();;
        }else if($filtro_tipo=="ultimos"){
          $data['producto']=$this->productoModel->productos_ultimos2("WHERE pro.Pro_FechaCreacion < '".date("Y-m-d")."'", "LIMIT 50");
        }else if($filtro_tipo=="popular"){
          $data['producto']=$this->productoModel->filtro_producto_popular();
        }else{
          $data['producto']=$this->productoModel->filtro_producto_nombre($nombre_busqueda);
        }
        
        foreach ($data['producto'] as $valor) {
          $valor->cantFav=$this->productoModel->filtro_por_producto_fa($valor->Pro_IdProducto);
          $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        }
        $this->twig->parse('index/ajax/filtro_productos.twig',$data);
      }
    }

    function buscar_autocomplete()
    {
      $dataNombres=(object)null;
      $datos_nombres=$this->productoModel->nombre_productos();

      foreach($datos_nombres as $key => $nom) {
        $nomb = mb_convert_case($nom->Pro_Nombre,MB_CASE_TITLE,'UTF-8');
        $cod = 'COD: '. $nom->Pro_IdProducto;
        $valor = $cod . ' -' . $nomb;
        $dataNombres->$valor=null;
      }
      print_r(json_encode($dataNombres));
    }

    function _send_email($type, $email, &$data)
    {
      $this->load->library('email');
      $this->lang->load('tank_auth');
      $this->load->library('tank_auth');
      $this->email->from($email, $this->config->item('website_name','tank_auth'));
      $this->email->reply_to($this->config->item('webmaster_email','tank_auth'),$this->config->item('website_name','tank_auth'));
      $this->email->to($this->config->item('webmaster_email','tank_auth'));
      $this->email->subject("MENSAJE DE ".$data['nombre']);
      $this->email->message($this->load->view('usuario/email/'.$type.'-html',$data,TRUE));
      $this->email->set_alt_message($this->load->view('usuario/email/'.$type.'-txt',$data,TRUE));
      $this->email->send();
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
    return strtolower(strtr($string, $table));
    }
  }
?>