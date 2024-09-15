<?php 
class HomeController extends Controller{
 public function index()
 {
  $data = [
   'judul' => 'Home',

  ];
  $this->view('template/header', $data);
  $this->view('home/index');
  $this->view('template/footer');
 }
}
?>