<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class pagina extends CI_Controller {
    public function __construct()
  {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('url');
    }
     
    public function productos()
    {
        $data = $this->acl->load_datos();
        $limit_per_page = 20;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->productoModel->get_total();

        if ($total_records > 0)
        {
            // get current page records
            $data["producto"] = $this->productoModel->get_current_page_records($limit_per_page, $page*$limit_per_page);
            foreach ($data['producto'] as $valor) {
            $valor->url="pormayor-".$valor->Pro_IdProducto."-".$this->buildSlugValue($valor->Pro_Nombre);
          }
                 
            $config['base_url'] = base_url() . 'pagina/productos';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'Primera';
            $config['first_tag_open'] = '<li class=" waves-effect">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Última';
            $config['last_tag_open'] = '<li class=" waves-effect">';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = '<i class="material-icons">chevron_right</i>';
            $config['next_tag_open'] = '<li class=" waves-effect">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = '<i class="material-icons">chevron_left</i>';
            $config['prev_tag_open'] = '<li class=" waves-effect">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class=" active pormayorUnico waves-effect" style="width: 30px;color: white;font-size: 1.2rem;">';
            $config['cur_tag_close'] = '</li>';
 
            $config['num_tag_open'] = '<li class=" waves-effect">';
            $config['num_tag_close'] = '</li>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
     
        $this->twig->parse('paginas.twig', $data);
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