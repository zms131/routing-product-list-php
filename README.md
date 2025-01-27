# Product Management System

This is a simple product management system built with PHP and MySQL. It allows users to view a list of products and see details for each product.

## Project Structure

- `db.php`: Contains the database connection setup.
- `index.php`: The main entry point of the application, sets up routing.
- `productController.php`: Contains the `ProductController` class for handling product-related actions.
- `Router.php`: Contains the `Router` class for handling URL routing.
- `setup_products.sql`: SQL script to set up the database and insert sample data.
- `views/`: Contains the view files for displaying product lists and product details.

## Setup Instructions

1. **Clone the repository:**
    ```sh
    git clone <repository-url>
    cd <repository-directory>
    ```

2. **Set up the database:**
    - Create a MySQL database named `shop`.
    - Run the SQL script [setup_products.sql](http://_vscodecontentref_/7) to create the `products` table and insert sample data.
    ```sh
    mysql -u root -p < setup_products.sql
    ```

3. **Configure the database connection:**
    - Update the database connection details in [db.php](http://_vscodecontentref_/8) if necessary.

4. **Run the application:**
    - Start a local PHP server from the project directory:
    ```sh
    php -S localhost:8000
    ```
    - Open your browser and navigate to `http://localhost:8000` to view the product list.

## Usage

- **Product List:** The home page displays a list of products with their details.
- **Product Details:** Click on the "View Details" link for any product to see more information about that product.

## License

This project is licensed under the MIT License.
