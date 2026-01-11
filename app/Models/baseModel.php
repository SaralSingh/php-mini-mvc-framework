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

public static function create($data)
{
    $instance = new static();
    $table = $instance->tableName;

    // Extract columns from array keys
    $columns = array_keys($data);

    // Prepare placeholders "?, ?, ?"
    $placeholders = implode(',', array_fill(0, count($columns), '?'));

    // Convert columns to comma separated string
    $colString = implode(',', $columns);

    // Build SQL
    $sql = "INSERT INTO {$table} ({$colString}) VALUES ({$placeholders})";

    $stmt = $instance->conn->prepare($sql);
    $stmt->execute(array_values($data));

    return $instance->conn->lastInsertId();
}

}
