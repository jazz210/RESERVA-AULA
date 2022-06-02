<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function create(){
        return view('auth.admin.solicitudes');
    }
    public function store(){
        return redirect()->to('/admin');
    }
}