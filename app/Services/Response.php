<?php
namespace App\Services;

class Response
{
    public static function json($data, $statusCode = 200)
    {
        header('Content-Type: application/json', true, $statusCode);
        echo json_encode($data);
        exit;
    }
}