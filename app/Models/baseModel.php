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

    // Mass Assignment Protection: Only allow fields defined in $fillable (if the property exists)
    if (property_exists($instance, 'fillable') && is_array($instance->fillable) && !empty($instance->fillable)) {
        foreach (array_keys($data) as $key) {
            if (!in_array($key, $instance->fillable)) {
                unset($data[$key]);
            }
        }
    }

    // Extract columns from array keys
    $columns = array_keys($data);

    // SQL Injection Protection for column names
    foreach ($columns as $column) {
        // Only allow purely alphanumeric/underscore column names
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $column)) {
            throw new \Exception("Invalid column name: " . htmlspecialchars($column));
        }
    }

    if (empty($columns)) {
        throw new \Exception("No valid data provided for insertion.");
    }

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

    public static function update($id, $data)
    {
        $instance = new static();
        $table = $instance->tableName;

        // Mass Assignment Protection
        if (property_exists($instance, 'fillable') && is_array($instance->fillable) && !empty($instance->fillable)) {
            foreach (array_keys($data) as $key) {
                if (!in_array($key, $instance->fillable)) {
                    unset($data[$key]);
                }
            }
        }

        $columns = array_keys($data);
        if (empty($columns)) {
            throw new \Exception("No valid data provided for update.");
        }

        // Build SET string: col1 = ?, col2 = ?
        $setStringParts = [];
        foreach ($columns as $column) {
            if (!preg_match('/^[a-zA-Z0-9_]+$/', $column)) {
                throw new \Exception("Invalid column name: " . htmlspecialchars($column));
            }
            $setStringParts[] = "{$column} = ?";
        }
        $setString = implode(', ', $setStringParts);

        $sql = "UPDATE {$table} SET {$setString} WHERE id = ?";
        $stmt = $instance->conn->prepare($sql);

        // Bind values plus the ID at the end
        $values = array_values($data);
        $values[] = $id;

        return $stmt->execute($values);
    }

    public static function delete($id)
    {
        $instance = new static();
        $table = $instance->tableName;

        $sql = "DELETE FROM {$table} WHERE id = ?";
        $stmt = $instance->conn->prepare($sql);
        
        return $stmt->execute([$id]);
    }

}
