<?php

namespace App\Controllers;

use App\Config\Auth;
use App\Models\User;

class AccountController
{
    public function index()
    {
        echo "<h1>calling from account controller<br></h1>";
    }

    public function login()
    {
        view('auth.login');
    }

    public function loginProcess()
    {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if (!$email || !$password) {
            set_flash('error', 'Please fill all fields.');
            return redirect('/login');
        }

        if (Auth::attempt($email, $password)) {
            set_flash('success', 'You are now logged in.');
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

        session_start();
        set_flash('success', 'Logged out successfully');
        redirect('/login');
    }
}
