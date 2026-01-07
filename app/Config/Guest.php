<?php

namespace App\Config;

class Guest
{
    public static function handle()
    {
        if (isset($_SESSION['user_id'])) {
            redirect("/dashboard");
            exit;
        }
    }
}
