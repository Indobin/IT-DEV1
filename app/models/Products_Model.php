<?php
class Products_Model
{
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
    public function tambahProducts($data, $img)
    {
        // SQL Query untuk insert data produk beserta path gambar
        $tambah = "INSERT INTO products
               (name, category, description, price, stock, img)
               VALUES
               (:name, :category, :description, :price, :stock, :img)";

        $this->db->query($tambah);
        $this->db->bind('name', $data['name']);
        $this->db->bind('category', $data['category']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('img', $img); // Simpan nama file gambar di database

        $this->db->execute();
        return $this->db->CekPerubahan();
    }
    public function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }
    public function updateProduct($id, $data, $img)
    {
        // SQL Query untuk update data produk beserta path gambar jika ada
        $update = "UPDATE products SET
            name = :name,
            category = :category,
            description = :description,
            price = :price,
            stock = :stock,
            img = :img
            WHERE id = :id";

        $this->db->query($update);
        $this->db->bind('name', $data['name']);
        $this->db->bind('category', $data['category']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('img', $img); // Simpan nama file gambar baru di database
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->CekPerubahan(); // Mengecek apakah ada data yang diperbarui
    }
    public function deleteProducts($id)
    {
        // Ambil data produk terlebih dahulu untuk mendapatkan nama file gambar
        $this->db->query("SELECT img FROM products WHERE id = :id");
        $this->db->bind('id', $id);
        $product = $this->db->single();  // Mengambil data satu baris
    
        // Hapus file gambar jika ada
        if ($product && file_exists('img/products/' . $product['img'])) {
            unlink('img/products/' . $product['img']);  // Hapus file gambar dari folder
        }
    
        // SQL Query untuk menghapus produk
        $delete = "DELETE FROM products WHERE id = :id";
        
        $this->db->query($delete);
        $this->db->bind('id', $id);
        
        $this->db->execute();
        return $this->db->CekPerubahan();  // Mengecek apakah data berhasil dihapus
    }
    
}
