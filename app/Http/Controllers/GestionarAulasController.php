<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionarAulasController extends Controller
{
    public function create(){
        return view('auth.admin.gestionaraulas');
    }
}