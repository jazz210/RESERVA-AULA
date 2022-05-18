<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaReservasController extends Controller
{
    public function create(){
        return view('auth.admin.listareservas');
    }
    public function store(){
        return redirect()->to('/admin');
    }
}