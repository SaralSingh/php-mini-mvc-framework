<?php
namespace App\Config;
use App\Models\User;

class Auth
{
    public static function handle()
    {
        if (!isset($_SESSION['id'])) {
            redirect("/login");
        }
    }

    public static function attempt($email, $password)
    {
        $user = User::findByEmail($email);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                sessionON(['id'=>$user['id']]);
            } else return false;
        }
    }
}
