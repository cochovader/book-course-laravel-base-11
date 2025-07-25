<?php

// use App\Http\Controllers\Micontrolador;
// use App\Http\Controllers\PrimerControlador;

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::resources(
        [
            'post' => PostController::class,
            'category' => CategoryController::class,
        ]
        );
});
   

// Route::resource('post', PostController::class);
// Route::resource('category', CategoryController::class);
//Route::get('/crud',[PrimerControlador::class,'index']);

//Route::get('/test',[Micontrolador::class,'index']);

// Route::get('/chido', function () {
//     return "Hola Mundo";
// });

// Route::get('/test2', function () {
//     return view('test2');
// });


// Route::get('/test', function () {
//     return view('test');
//  });

// Route::get('/crud', function () {
//     $age = 47;
//     $data = ['name' => 'Ivan', 'age' => $age];
//      return view('crud/index', $data);
//  });
