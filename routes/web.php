<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LibroARController;
Route::get('/libros', [LibroARController::class, 'index']);
