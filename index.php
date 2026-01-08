<?php
define('APP_ROOT', __DIR__);
define('BASE_URL', '/SARALPHP');

session_start();
require_once APP_ROOT . '/vendor/autoload.php';
require_once APP_ROOT . '/app/Helpers/helpers.php';
require_once APP_ROOT . '/routes/web.php';

use App\Services\Route;

// var_dump($_SESSION['id']);
// var_dump($_SESSION['name']);

Route::handle();


