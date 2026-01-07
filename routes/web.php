<?php
use App\Services\Route;

Route::get('/','HomeController','index');
Route::get('/register','AccountController','register','guest');
Route::get('/login','AccountController','login','guest');
Route::get('/dashboard','DashboardController','index','auth');