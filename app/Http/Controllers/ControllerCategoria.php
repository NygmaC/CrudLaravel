<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCategoria extends Controller
{
    public function index() {
    	return view('categorias');
    }
}
