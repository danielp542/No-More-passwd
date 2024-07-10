<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function __construct()
    {
        
    }
    
    public function indexx()
    {
        return view('index.muro');
    }
}
