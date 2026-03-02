<?php

namespace App\Services;

use App\Middlewares\CsrfMiddleware;
use App\Middlewares\MiddlewareResolver;

class Route
{

    private static $routes = [];
    public static $controllerNamespace = "App\Controllers\\";



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
        $requestURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $cleanRequest = rtrim($requestURI, '/');

        // 🚨 INTERNAL PATHS → 403 (ONCE)
        if (preg_match('#^' . BASE_URL . '/(app|routes|vendor|storage|views)#', $cleanRequest)) {
            http_response_code(403);
            (new \App\Controllers\ErrorController())->forbidden();
            return;
        }

        foreach (self::$routes as $route) {

            $routeURI = rtrim(BASE_URL . $route['uri'], '/');

            // Convert route URI to regex (e.g. /user/{id} becomes /user/([a-zA-Z0-9_-]+))
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_-]+)', $routeURI);
            $pattern = '@^' . $pattern . '$@';

            // Check if the current request matches the regex pattern
            if (preg_match($pattern, $cleanRequest, $matches) && $route['method'] === $requestMethod) {

                // Remove the full string match so only captured parameters remain
                array_shift($matches);

                CsrfMiddleware::validate();
                MiddlewareResolver::handle($route['middleware']);

                $controllerClass = self::$controllerNamespace . $route['controller'];
                $action = $route['action'];

                // Pass the captured matches as arguments to the controller action
                call_user_func_array([new $controllerClass(), $action], $matches);
                return;
            }
        }

        self::notFound();
    }

    // Show 404 page
    public static function notFound()
    {
        http_response_code(404);
        view('errors.404');
        exit;
    }
}
