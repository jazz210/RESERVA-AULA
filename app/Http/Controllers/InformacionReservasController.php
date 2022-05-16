<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionReservasController extends Controller
{
    public function create(){
        return view('auth.admin.informacionreservas');
    }
}