<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionarController extends Controller
{
    public function create(){
        return view('auth.admin.gestionar');
    }
    public function store(){
        return redirect()->to('/admin');
    }
}
