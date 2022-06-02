<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesAceptadasController extends Controller
{
    public function create(){
        return view('auth.admin.solicitudesaceptadas');
    }
    public function store(){
        return redirect()->to('/admin');
    }
}