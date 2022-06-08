<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{ public function create(){
    return view('auth.admin.materia');

}
public function store(){
    $user = User::create(request(['name', 'email', 'password',]));
    auth()->login($user);
    return redirect()->to('/')->with('success','el usuario fue registrado correctamente');
}
public function update(Request $request, $id)
{

    //$user=User::findOrfail($id);
    //$user->name=$request->input('name');
    //$user->email=$request->input('email');
    //$user->password=$request->input('password');
    //$user->save();
   //return redirect()->to('/admin');

}
    //
}
