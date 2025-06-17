<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Micontrolador extends Controller
{
    function index() {
        return view('test', ['name' => 'Ivan']);
    }
}
