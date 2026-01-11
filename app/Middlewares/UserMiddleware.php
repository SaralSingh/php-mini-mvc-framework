<?php
namespace App\Middlewares;

use App\Config\Auth;
use App\Config\Guest;

class UserMiddleware{
    public static function handle($middleware)
    {
        if($middleware==null) return;
        if($middleware==='auth') Auth::handle();
        if($middleware==='guest') Guest::handle();
    }
}