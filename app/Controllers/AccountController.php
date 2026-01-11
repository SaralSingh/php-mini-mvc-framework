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
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (User::findByEmail($email)) {
            set_flash('error', "Email already registered!");
            return redirect('/register');
        }
        $password = makeHash($_POST['password']);

        $status = User::create(
            [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]
        );

        if ($status) {
            set_flash('success', "Registration successful! You can now log in.");
            return redirect('/login');
        } else {
            set_flash('error', "Something went wrong. Please try again.");
            return redirect('/register');
        }
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
            return redirect('/dashboard');
        } else {
            set_flash('error', 'login failed');
            return redirect('/login');
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        session_start();
        set_flash('success', 'Logged out successfully');
        return redirect('/login');
    }
}
