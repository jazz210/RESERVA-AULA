<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulasController extends Controller
{
    public function create(){
        return view('auth.aulas');
    }
}