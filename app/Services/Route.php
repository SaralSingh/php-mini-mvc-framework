<?php
namespace App\Services;

use App\Middlewares\CsrfMiddleware;
use App\Middlewares\UserMiddleware;

class Route {

    private static $routes = [];
    public static $controllerNamespace = "App\Controllers\\";

    // Show 404 page
    public static function notFound()
    {
        echo "<h1>404 - Not Found</h1>";
        exit;
    }

    // Register GET route
    public static function get($uri, $controller, $action, $middleware = null)
    {
        self::$routes[] = [
            'uri'        => $uri,          // /login
            'controller' => $controller,   // AccountController
            'action'     => $action,       // login
            'method'     => 'GET',
            'middleware' => $middleware
        ];
    }

    // Register POST route
    public static function post($uri, $controller, $action, $middleware = null)
    {
        self::$routes[] = [
            'uri'        => $uri,
            'controller' => $controller,
            'action'     => $action,
            'method'     => 'POST',
            'middleware' => $middleware
        ];
    }

    // Handle the incoming request
    public static function handle()
    {
        // Extract only the path (removes ?query=values)
        $requestURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Request method (GET or POST)
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        // Loop through registered routes
        foreach (self::$routes as $route)
        {
            // Build complete route path with app base URL
            $routeURI = BASE_URL . $route['uri'];

            // Normalize URLs: remove trailing slashes
            $cleanRoute   = rtrim($routeURI, '/');
            $cleanRequest = rtrim($requestURI, '/');

            // Check if route matches request
            if ($cleanRoute === $cleanRequest && $route['method'] === $requestMethod)
            {
                // 1) CSRF check first → secure all POST requests
                CsrfMiddleware::validate();

                // 2) Auth/Guest middleware → manage session access
                UserMiddleware::handle($route['middleware']);

                // 3) Build controller class name with namespace
                $controllerClass = self::$controllerNamespace . $route['controller'];

                // 4) Action method inside controller
                $action = $route['action'];

                // 5) Create controller object
                $controller = new $controllerClass();

                // 6) Call the controller action
                $controller->$action();

                return;
            }
        }

        // No route matched → show 404
        self::notFound();
    }
}
