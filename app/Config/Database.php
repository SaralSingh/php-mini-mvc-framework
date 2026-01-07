<?php
namespace App\Config;
use PDO;
use PDOException;
class Database
{
    private $servername = 'localhost';
    private $db_name = 'authdb';
    private $username = 'root';
    private $password = '';
    public $conn;

    function __construct()
    {
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
