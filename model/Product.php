.php
<?php
require_once '../config/Database.php';

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;

    public function __construct($id, $name, $description, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    // Getters for each property
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public static function getAllProducts() {
        $database = new Database();
        $db = $database->getConnection();

        $query = "SELECT * FROM products";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $products = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $products[] = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['image']);
        }

        return $products;
    }
}
?>