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

function view($name, $data = [])
{
    extract($data);
    require APP_ROOT . "/views/{$name}.php";
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

function sessionON($key,$value)
{
    $_SESSION[$key] = $value;
}
