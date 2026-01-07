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
