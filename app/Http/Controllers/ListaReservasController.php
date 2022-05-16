<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaReservasController extends Controller
{
    public function create(){
        return view('auth.listareservas');
    }
}