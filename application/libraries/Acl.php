<?php if ( ! defined('BASEPATH')) exit('Acceso denegado'); 

class Acl
{
 	private $CI;
    private $dominio = "pormayor.pe";

 	public function __construct()
 	{
 		$this->CI =& get_instance();
 	}

    public function get_dominio()
    {
        return $this->dominio;
    }

    public function load_datos($tiendas='si', $categorias='si', $intranet=false)
 	{
        $data = array();

        $data['dominio'] = $this->dominio;

        //Si es movil o no
          $useragent=$_SERVER['HTTP_USER_AGENT'];

          if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
            $data['userAgent'] = "movil";
          }else{
            $data['userAgent'] = "PC";
          }
        
        $this->CI->load->library('cart');
        $data['carrito'] = $this->CI->cart->contents();
        $data['totalc'] = count($data['carrito']);
         $data['categorias'] = $this->CI->productoModel->categorias_act();
          foreach($data['categorias'] as $valor) {
          $valor->url=$this->buildSlugValue($valor->Cat_Nombre)."-".$valor->Cat_IdCategoria;
          }
        // if ($categorias == 'si')
        // {
        //     $data['categorias'] = $this->CI->productoModel->get_Categoria2();
        //     //URL categoria
        //     foreach ($data['categorias'] as $valor) {
        //       $valor->url =  $this->buildSlugValue($valor->Cat_Nombre)."-al-por-mayor-".$valor->Cat_IdCategoria;
        //     }

        //     $data['subcategoria'] = $this->CI->productoModel->get_subCategoria3();
        //     foreach ($data['subcategoria'] as $valor) {
        //       $valor->url =  $this->buildSlugValue($valor->Suc_Nombre)."-al-por-mayor-".$valor->Suc_IdSubCategoria;
        //     }

        //     $data['subcat_detalle'] = $this->CI->productoModel->get_subCategoria_detalle_todas();
        //     foreach ($data['subcat_detalle'] as $valor) {
        //       $valor->url =  $this->buildSlugValue($valor->Suc_Nombre)."-".$this->buildSlugValue($valor->Des_Nombre)."-al-por-mayor-".$valor->Des_IdDetalle_SubCategoria;
        //     }


        //     //Reordenar ROPA
        //     $this->move_to_top($data['categorias'], 11);
        //     $this->mover($data['categorias'],2);
        // }

        // if($tiendas == 'si')
        // {
        //     $data['tiendas'] = $this->CI->tiendaModel->get_Tiendas();
        //     shuffle ($data['tiendas']);

        //     $data['tiendas2'] = $this->CI->tiendaModel->get_Tiendas4();
        //     shuffle ($data['tiendas2']);
        // }
        
        //VENDEDOR

        $redirect = true;
        $dominio = $_SERVER['SERVER_NAME'];
        $data['dominio'] = $this->dominio;
        $data['ruta_img']="http://".$data['dominio']."/img/";
        // $data['ruta_img']="https://pormayor.pe/img/";
        // $data['ruta_img']="http://localhost/img/";

        if($this->CI->session->userdata('logueado'))
        {
            $data['usuario']['logueado'] = $this->CI->session->userdata('logueado');
            $data['usuario']['rol'] = $this->CI->session->userdata('rol_usuario');
            $data['usuario']['nombre'] = $this->CI->session->userdata('nombre_usuario');
            $data['usuario']['id_tienda'] = $this->CI->session->userdata('tienda_usuario');
            $data['usuario']['id_usuario'] = $this->CI->session->userdata('id_usuario');

            if(!is_null($data['usuario']['id_tienda']))
            {
                $data['subdominio_tienda'] = $this->CI->tiendaModel->get_tienda($data['usuario']['id_tienda'])->Tie_Subdominio;
            }

            if($intranet)
            {   
                if($intranet == "comprador")
                {
                    if($data['usuario']['rol'] != 1)
                    {
                        $redirect = false;
                    }
                }
                else if($intranet == "admin")
                {
                    if($data['usuario']['rol'] == 1)
                    {
                        $redirect = false;
                    }
                }
                else
                {
                    $redirect = false;
                }              
            }
            else
            {
                $redirect = false;
            }
        }
        else
        {
            if(!$intranet)
            {
                $redirect = false;
            }
        }

        if($redirect)
        {
            redirect();
        }

        return $data;
 	}
    public function buildSlugValue($string){
      $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
    );
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
    $string= str_replace(',', '', $string);
    $string= str_replace('.', '', $string);
    $string= rtrim($string, '-');
    return strtolower(strtr($string, $table));
    }
    // public function move_to_top(&$array, $key) {
        
    //     if(!empty($array[$key])) {
    //         $temp = array($key => $array[$key]);
    //         unset($array[$key]);
    //         $array = $temp + $array;
    //     } else {
    //         $array = $array;
    //     }   
       
    //   }
    // public function mover($a,$x) {
    //   if( $x > 0 and $x < count($a) ) {
    //     $b = array_slice($a,0,($x-1),true);
    //     $b[] = $a[$x];
    //     $b[] = $a[$x-1];
    //     $b += array_slice($a,($x+1),count($a),true);
    //     return($b);
    //   } else { return $a; }+
    // }
}