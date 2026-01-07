<?php
namespace App\Controllers;

class HomeController{
    public function index()
    {
        require APP_ROOT . '/views/home.php';
    }
}