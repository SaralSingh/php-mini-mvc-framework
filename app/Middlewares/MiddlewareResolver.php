<?php
namespace App\Middlewares;

use App\Middlewares\AuthMiddleware;
use App\Middlewares\GuestMiddleware;

class MiddlewareResolver
{
    /**
     * Map of available middlewares.
     * To add a new middleware, simply register it here.
     */
    protected static $middlewareMap = [
        'auth'  => AuthMiddleware::class,
        'guest' => GuestMiddleware::class,
    ];

    public static function handle($middleware)
    {
        if (!$middleware) {
            return;
        }

        // Allow passing multiple middlewares separated by a pipe, e.g., 'auth|verified'
        $middlewares = explode('|', $middleware);

        foreach ($middlewares as $mw) {
            $mw = trim($mw);
            if (isset(self::$middlewareMap[$mw])) {
                $middlewareClass = self::$middlewareMap[$mw];
                
                // Call the handle method on the corresponding class
                if (method_exists($middlewareClass, 'handle')) {
                    $middlewareClass::handle();
                } else {
                    throw new \Exception("Handle method not found in {$middlewareClass}");
                }
            } else {
                throw new \Exception("Middleware '{$mw}' is not registered.");
            }
        }
    }
}