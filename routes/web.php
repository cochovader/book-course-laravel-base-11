<?php

use App\Http\Controllers\Micontrolador;
use App\Http\Controllers\PrimerControlador;

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('post', PostController::class);

Route::get('/crud',[PrimerControlador::class,'index']);

Route::get('/test',[Micontrolador::class,'index']);

Route::get('/chido', function () {
    return "Hola Mundo";
});

Route::get('/test', function () {
   return view('test');
});

//Route::get('/crud', function () {
//   $age = 47;
//   $data = ['name' => 'Ivan', 'age' => $age];
//    return view('crud/index', $data);
//});

Route::get('/test2', function () {
    return view('test2');
});
