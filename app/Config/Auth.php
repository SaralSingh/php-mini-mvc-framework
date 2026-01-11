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

                // SESSION HIJACKING PROTECTION
        if ($_SESSION['ua'] !== $_SERVER['HTTP_USER_AGENT']) {
            session_destroy();
            redirect('/login');
        }

        if ($_SESSION['ip'] !== $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            redirect('/login');
        }
        
    }

    public static function attempt($email, $password)
    {
        $user = User::findByEmail($email);

        if(!$user) return false;
        if(!password_verify($password,$user['password'])) return false;

        session_regenerate_id(true);
        sessionON(
            [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'ua' => $_SERVER['HTTP_USER_AGENT'],
                'ip' => $_SERVER['REMOTE_ADDR'],
            ]
        );
        return true;
    }
}
