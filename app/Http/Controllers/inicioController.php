<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function index(){
        return view('inicio');
    }
}
