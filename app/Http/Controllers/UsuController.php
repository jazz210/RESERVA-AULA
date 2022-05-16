<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuController extends Controller
{
    public function index(){
        return view('auth.usuario.usuario');
    }
    //
}
