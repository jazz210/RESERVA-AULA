<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.admin.register');

    }
    public function store(){
        $user = User::create(request(['name', 'email', 'password',]));
        auth()->login($user);
        return redirect()->to('/admin');
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

}
