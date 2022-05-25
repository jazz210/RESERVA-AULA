<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Reservation;

class AulasController extends Controller
{
    public function create(){
        return view('auth.aulas');
    }
    public function store(){
        return redirect()->to('/login');
    }
    public function store_reservation(Request $request ){
        
        $request->validate([
     'namedoc'=>'required',
     'materia'=>'required',
     'horario'=>'required',
     'estado'=>'required',
     'FECHA_ESP'=>'required',
     'grupo'=>'required',
     'cantestu'=>'required',
     'detalle'=>'required',
     ]);
   
$datareservation=$request->all();
$this ->save_data($datareservation);
return redirect()->route('home')->with('success', 'se registro correctamente'); 

    }
    public function save_data(array $data){
        return Reservation::create([
            'name_teacher'=>$data['namedoc'],
            'name_subject'=>$data['materia'],
            'schedules'=>$data['horario'],
            'state'=>$data['estado'],
            'booking_date'=>$data['FECHA_ESP'],
            'group'=>$data['grupo'],
            'number_students'=>$data['cantestu'],
            'details'=>$data['detalle'],
            'user_id'=>auth()->user()->id
        ]);
    }
}