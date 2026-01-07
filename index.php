<?php
define('APP_ROOT', __DIR__);
define('BASE_URL', '/SARALPHP');

session_start();
require_once APP_ROOT . '/vendor/autoload.php';
require_once APP_ROOT . '/routes/web.php';
require_once APP_ROOT . '/app/Helpers/helpers.php';
use App\Services\Route;

// var_dump($_SESSION['id']);
// var_dump($_SESSION['name']);

$route = new Route();
$route->handle();

