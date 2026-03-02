<?php

namespace App\Middlewares;

class GuestMiddleware
{
    public static function handle()
    {
        if (isset($_SESSION['id'])) {
            redirect("/dashboard");
        }
    }
}
