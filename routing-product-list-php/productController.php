<?php
require 'db.php'; // Include the database connection

class ProductController {
    private $db;
    
    // Initialize the database connection
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    // Fetch and display all products
    public function index() {
        $products = $this->getAllProducts();
        require 'views/products_list.html'; // Include the view for the product list
    }

    // Fetch and display a single product by its ID
    public function show($id) {
        $product = $this->getProductById($id);
        if ($product) {
            require 'views/product_details.php'; // Include the view for a single product
        } else {
            echo "Product not found";
        }
    }

    // Function to fetch all products
    private function getAllProducts() {
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Function to fetch a product by ID
    public function getProductById($id) {
        // Prepare the query
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Check if there was a query error
        if ($stmt->errorCode() != '00000') {
            $error = $stmt->errorInfo();
            echo "SQL Error: " . $error[2];
            return null;
        }
    
        // Fetch the product
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $product ? $product : null;  // Return the product or null if not found
    }
    
}

