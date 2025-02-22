<?php
require_once '../model/Product.php';

class ProductController {
    public function getProducts() {
        return Product::getAllProducts();
    }

    public function getProductById($id) {
        $db = new Database();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($product) {
            return new Product(
                $product['id'],
                $product['name'],
                $product['description'],
                $product['price'],
                $product['image']
            );
        } else {
            return null;
        }
    }
    
}
?>