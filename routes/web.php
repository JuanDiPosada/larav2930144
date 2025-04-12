<?php

use App\Http\Controllers\ClaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\cursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return view("hola");
});

Route::get("sumar/{num1}/{num2}",[ClaseController::class,"sumar"]);

Route::get('multiplicar/{num1}/{num2}',[ClaseController::class,'multiplicar']);



