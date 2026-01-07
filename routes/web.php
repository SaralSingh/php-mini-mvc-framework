<?php
use App\Services\Route;

Route::get('/','HomeController','index');
Route::get('/register','AccountController','register','guest');

Route::get('/login','AccountController','login','guest');
Route::post('/login','AccountController','loginProcess');

Route::get('/dashboard','DashboardController','index','auth');
Route::get('/logout','AccountController','logout','auth');
