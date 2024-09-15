<?php 
class ProductsController extends Controller{
 public function index()
 {
  $data = [
   'judul' => 'Products',
   'prd' => $this->model('Products_Model')->getAllProducts(),
  ];
  $this->view('template/header', $data);
  $this->view('product/index', $data);
  $this->view('template/footer');
 }
 public function add()
 {
  $data = [
   'judul' => 'Products',
   'prd' => $this->model('Products_Model')->getAllProducts(),
  ];
  $this->view('template/header', $data);
  $this->view('product/index', $data);
  $this->view('template/footer');
 }
}
?>