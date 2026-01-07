<?php
namespace App\Controllers;

class AccountController{
    public function index()
    {
        echo "<h1>calling from account controller<br></h1>";
    }

    public function login()
    {
        require APP_ROOT.'/views/auth/login.php';
    }

    public function register()
    {
        echo "<h1>calling from account controller (register)<br></h1>";
    }
}