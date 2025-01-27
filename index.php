<?php
require 'Router.php';           // Include the Router class
require 'productController.php'; // Include the ProductController class

// Create a new Router instance
$router = new Router();

// Create a new ProductController instance
$productController = new ProductController();

// Define the routes and associate them with controller methods
$router->add('', [$productController, 'index']); // Route to the product list for the root URL
$router->add('index.php', [$productController, 'index']); // Route to the product list for index.php
$router->add('routing-product-list-php', [$productController, 'index']); // Route to the product list)
$router->add('product/(\d+)', function($id) use ($productController) { // Route to a single product
    $productController->show($id);
});

// Get the current URL (trim the leading and trailing slashes)
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Dispatch the request to the corresponding controller method
$router->dispatch($url);
