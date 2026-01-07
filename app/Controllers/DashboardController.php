<?php
namespace App\Controllers;
class DashboardController{
    public function index()
    {
       require APP_ROOT . "/views/dashboard.php"; 
    }
}