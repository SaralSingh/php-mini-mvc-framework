<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class baseModel extends Database
{

    protected $tableName;


    public static function find($id)
    {
        $instance = new static;
        $table = $instance->tableName;
        $query = "SELECT * FROM {$table} WHERE id = :id LIMIT 1";
        $stmt = $instance->conn->prepare($query);

        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    public static function all()
    {
        $instance = new static;
        $table = $instance->tableName;

        $query = "SELECT * FROM {$table}";
        $stmt = $instance->conn->query($query);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
