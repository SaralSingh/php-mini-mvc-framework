<?php
namespace App\Config;
use PDO;
use PDOException;
class Database
{
    private $servername;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    function __construct()
    {
        $this->servername = $_ENV['DB_HOST'] ?? 'localhost';
        $this->db_name    = $_ENV['DB_NAME'] ?? 'authdb';
        $this->username   = $_ENV['DB_USER'] ?? 'root';
        $this->password   = $_ENV['DB_PASS'] ?? '';
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
