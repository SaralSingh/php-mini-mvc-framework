<?php

namespace App\Config;

class Auth
{
    public static function handle()
    {
        if (!isset($_SESSION['user_id'])) {
            redirect("/login");
        }
    }
}
