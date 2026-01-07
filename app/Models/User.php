<?php
namespace App\Models;
use App\Config\Database;
use PDO;
require dirname(__DIR__) . '/Config/Database.php';
class User extends Database
{
    private $tableName = "users";
    public $name;
    public $email;
    public $password;

    public function register($name, $email, $password)
    {
        if (empty($name) || empty($email) || empty($password)) {
            return false;
        }

        // check email exists
        $stmt = $this->conn->prepare(
            "SELECT id FROM {$this->tableName} WHERE email = :email"
        );
        $stmt->execute([':email' => $email]);

        if ($stmt->fetch()) {
            return false; // email already exists
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare(
            "INSERT INTO {$this->tableName} (name, email, password)
         VALUES (:name, :email, :password)"
        );

        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $hashedPassword
        ]);
    }


    public function login($email, $password)
    {
        if (empty($email) || empty($password)) {
            return false;
        }

        $stmt = $this->conn->prepare(
            "SELECT * FROM {$this->tableName} WHERE email = :email"
        );
        $stmt->execute([':email' => $email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return false; // user not found
        }

        if(password_verify($password, $user['password']))
            {
                return [
                    "id" => $user['id'],
                    "name" => $user['name']
                ];
            } 
    }
}
