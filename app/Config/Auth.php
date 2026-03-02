<?php

namespace App\Config;

use App\Models\baseModel;
use App\Models\User;
use PDO;

class Auth extends baseModel
{
    // Session handling and interception moved to AuthMiddleware

    public static function attempt($email, $password)
    {
        $user = User::findByEmail($email);

        if (!$user) return false;
        if (!password_verify($password, $user['password'])) return false;

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

    public static function user()
    {   
        if(!authGuard()) return false;
        $id = (int) $_SESSION['id'];
        $instance = new static;
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $instance->conn->prepare($query);
        $stmt->execute(
            [
                'id' => $id
            ]
        );
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }
}
