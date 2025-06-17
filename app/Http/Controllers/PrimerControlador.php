<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PrimerControlador extends Controller
{
   function index() {
    //return view('crud/index', ['name' => 'Ivan']);
    $age = 47;
    $data = ['name' => 'Yeicatl', 'age' => $age];
    return view('crud/index', $data);
   }
   
}