<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Api extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model("Api_model", "apiModel");
        }

        public function get_productos()
        {
            echo json_encode($this->apiModel->get_productos_api()); 
        }
        public function get_productos_10()
        {
            echo json_encode($this->apiModel->get_productos_10_api()); 
        }
        public function get_categorias()
        {
            echo json_encode($this->apiModel->get_categorias_api()); 
        }
        public function get_detalle($Pro_IdProducto = false)
        {
            echo json_encode($this->apiModel->get_detalle_api($Pro_IdProducto)); 
        }
        public function get_fotos($Pro_IdProducto = false)
        {
            echo json_encode($this->apiModel->get_fotos_api($Pro_IdProducto)); 
        }
        public function get_detalle_sku($Pro_IdProducto = false)
        {
            echo json_encode($this->apiModel->get_detalle_sku($Pro_IdProducto)); 
        }
        public function search_pormayor($nombre_producto = false)
        {
            echo json_encode($this->apiModel->search_p($nombre_producto)); 
            // echo json_encode($nombre_producto); 
        }
        public function get_productos_agotados()
        {
            echo json_encode($this->apiModel->get_agotado_api()); 
        }
        public function get_productos_categoria($Cat_IdCategoria = false)
        {
            echo json_encode($this->apiModel->get_categoriap_api($Pro_IdProducto)); 
        }

        public function get_producto_sku()
        {
            echo json_encode($this->apiModel->get_productos_sku_api()); 
        }

        public function get_producto_sku1()
        {
            echo json_encode($this->apiModel->get_productos_sku_api1()); 
        }

        public function get_products_total()
        {
            echo json_encode($this->apiModel->get_products_total()); 
        }

        public function reservar_stock()
        {
            $skus = json_decode($_POST['skus'],true);
            $update = $this->apiModel->get_reservar_stock($skus);
           
            print_r($skus);
        }

        public function descontar_stock()
        {
            $skus = json_decode($_POST['skus'],true);
            $update = $this->apiModel->get_descontar_stock($skus);
           
            print_r($skus);
        }

        public function actualizar_stock()
        {
            $skus = json_decode($_POST['skus'],true);
            $skuV = $_POST['skusviejo'];
            $update1 = $this->apiModel->update_nuevo_stock($skuV);
            $update = $this->apiModel->get_reservar_stock($skus);
            $yes = (int)$update + (int)$update1;           
            echo $yes;
        }

        public function anular_pedido()
        {
            $skuV = $_POST['skusviejo'];
            $update1 = $this->apiModel->update_nuevo_stock($skuV);        
            echo 1;
        }

        public function entregado_sayra()
        {
            $skuV = $_POST['skusviejo'];
            $update1 = $this->apiModel->entregado_sayra($skuV);        
            echo 1;
        }

        public function actualizacion_entregado()
        {
            $skus = json_decode($_POST['skus'],true);
            $tipo = $_POST['estado'];
            if ($tipo == 3) {
                $update = $this->apiModel->get_update_stock_resta($skus);
            }elseif ($tipo == 7) {
                $update = $this->apiModel->get_update_sin_stock($skus);
            }else{
                $update = $this->apiModel->get_update_stock_suma($skus);
            }
            print_r($skus);
        }
    }
?>