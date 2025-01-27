<?php

class Router {
    private $routes = [];

    // Register a route and associate it with a callback (controller action)
    public function add($urlPattern, $function) {
        $this->routes[] = [
            'urlPattern' => $urlPattern,
            'function' => $function
        ];
    }

    // Dispatch the route based on the URL
    public function dispatch($url) {
        // Remove query parameters from the URL
        $urlPath = parse_url($url, PHP_URL_PATH);
        
        foreach ($this->routes as $route) {
            // Use regular expression to match the URL pattern
            if (preg_match('#^' . $route['urlPattern'] . '$#', $urlPath, $matches)) {
                // Remove the first element (which is the full match)
                array_shift($matches);

                // Call the function and pass the parameters (if any)
                call_user_func_array($route['function'], $matches);
                return;
            }
        }

        // If no route matched, show 404 page
        echo "404 Not Found";
    }
}

