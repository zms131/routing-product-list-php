-- Create Database
CREATE DATABASE IF NOT EXISTS shop;

-- Select the database to use
USE shop;

-- Create the 'products' table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Insert sample product data into the 'products' table
INSERT INTO products (name, description, price, image) VALUES
('Product 1', 'This is the first product. It is amazing and useful for everyday tasks.', 19.99, 'images/product1.jpeg'),
('Product 2', 'A high-quality product for those who want the best.', 29.99, 'images/product2.jpeg'),
('Product 3', 'An affordable product with great value and long-lasting performance.', 39.99, 'images/product3.jpeg'),
('Product 4', 'This product is perfect for tech enthusiasts and gadget lovers.', 49.99, 'images/product4.jpeg'),
('Product 5', 'The ultimate solution to everyday problems. Get it while it lasts.', 59.99, 'images/product5.jpeg');

-- Show the products table
SELECT * FROM products;
