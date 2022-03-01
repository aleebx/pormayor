<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Categoria extends CI_Controller
	{
		function __construct()
		{
		  parent::__construct();
		}

		public function index($Cat_IdCategoria=false)
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
		        $data['producto'] = $this->productoModel->productos_categoria($Cat_IdCategoria);
		        $data['categorias'] = $this->productoModel->categorias_act();
		        foreach($data['producto'] as $valor) {
		        $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
        		}
		        foreach($data['categorias'] as $valor) {
		        $valor->url=$this->buildSlugValue($valor->Cat_Nombre)."-".$valor->Cat_IdCategoria;
        		}
			    $this->twig->parse('categorias.twig', $data);
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
	    return strtolower(strtr($string, $table));
	    }
					
	}
?>