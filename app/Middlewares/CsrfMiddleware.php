<?php

namespace App\Middlewares;

class CsrfMiddleware
{

    public static function Validate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token'])) {
                die("CSRF token missing");
            }

            if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
                die("Invalid CSRF token");
            }
        }
    }
}
