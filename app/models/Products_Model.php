<?php 
class Products_Model{
 private $db;
 public function __construct()
 {
  $this->db = new Database;
 }
 public function getAllProducts()
 {
  $this->db->query('SELECT * FROM products');
  return $this->db->resulSet(); //dari PDO database
 }
}
?>