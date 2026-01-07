<?php

namespace App\Controllers;

use App\Models\User;

class AccountController
{
    public function index()
    {
        echo "<h1>calling from account controller<br></h1>";
    }

    public function login()
    {
        require APP_ROOT . '/views/auth/login.php';
    }

    public function loginProcess()
    {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if (!$email || !$password) {
            set_flash('error', 'Please fill all fields.');
            return redirect('/login');
        }

        $userModel = new User();
        $user = $userModel->login($email, $password);
        if ($user) {
            sessionON("user_id", $user['id']);
            sessionON("user_name", $user['name']);
            redirect('/dashboard');
        } else {
            set_flash('error', 'login failed');
            redirect('/login');
        }
    }

    public function register()
    {
        echo "<h1>calling from account controller (register)<br></h1>";
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        redirect('/login');
    }
}
