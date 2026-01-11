<?php
define('APP_ROOT', __DIR__);
define('BASE_URL', '/SARALPHP');

ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    ini_set('session.cookie_secure', 1);
}
session_start();
require_once APP_ROOT . '/vendor/autoload.php';
require_once APP_ROOT . '/app/Helpers/helpers.php';
require_once APP_ROOT . '/routes/web.php';

use App\Services\Route;

Route::handle();


