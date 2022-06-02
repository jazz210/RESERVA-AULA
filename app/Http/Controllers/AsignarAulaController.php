<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignarAulaController extends Controller
{
    public function create(){
        return view('auth.admin.asignaraula');
    }
    public function store(){
        return redirect()->to('/admin');
    }
}