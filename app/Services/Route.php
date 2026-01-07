<?php
namespace App\Services;
use App\Middlewares\UserMiddleware;

class Route{
    private static $routes = [];
    public static $controllerNamespace = "App\Controllers\\";

    public static function notFound()
    {
        echo "<h1>404-not found<h1>";
        exit;
    }

    public static function get($uri,$controller,$action,$middleware=null){
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action,
            'method' => 'GET',
            'middleware' => $middleware
        ];
    }
    public static function post($uri,$controller,$action,$middleware=null){
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action,
            'method' => 'POST',
            'middleware' => $middleware
        ];
    }
    public static function handle(){
        
        $requestURI = $_SERVER['REQUEST_URI'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes as $route)
        {
            if(BASE_URL.$route['uri'] === $requestURI && $route['method'] == $requestMethod)
            {
                UserMiddleware::handle($route['middleware']);
                $controllerClass = self::$controllerNamespace.$route['controller'];
                $action = $route['action'];
                $controller = new $controllerClass();
                $controller->$action();
                return;
            }
        }
                self::notFound();

    }
}