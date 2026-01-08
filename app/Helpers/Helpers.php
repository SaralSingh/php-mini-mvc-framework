<?php

function url($path)
{
    return BASE_URL . $path;
}

function redirect($path)
{
    header("Location: " . BASE_URL . $path);
    exit;
}

function view($filePath,$data=[])
{
    $path = str_replace('.', DIRECTORY_SEPARATOR, $filePath);
    $fullPath = APP_ROOT . '/views/' . $path . '.php';
    if (!file_exists($fullPath)) {
        die("View not found: $fullPath");
    }
    extract($data, EXTR_SKIP);
    require $fullPath;
}

function set_flash($key, $message)
{
    if (!isset($_SESSION['flash'])) {
        $_SESSION['flash'] = [];
    }
    $_SESSION['flash'][$key] = $message;
}

function flash($key)
{
    if (isset($_SESSION['flash'][$key])) {
        $msg = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]); // auto clear
        return $msg;
    }
    return null;
}

function sessionON($data)
{
    foreach ($data as $key => $value) {
        $_SESSION[$key] = $value;
    }
}
