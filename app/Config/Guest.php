<?php

namespace App\Config;

class Guest
{
    public static function handle()
    {
        if (isset($_SESSION['id'])) {
            redirect("/dashboard");
        }
    }
}
