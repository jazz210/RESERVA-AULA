@extends('layouts.app')
@section('Title','login')
@section('content')

<h1 class="text-5xl text-center pt-24">login</h1>

<div class="block mx-auto my-12 p-8   w-1/3 border-gray-200 rounded-lg shadow-lg" style="background-color:rgba(111, 211, 247, 0.3)">
    
    <h1 class="text-3xl text-center fond-bold">INICIO SESION</h1>
    <form class="mt-4" method="POST" action="">
<h1 class="text-3xl text-center pt-20">
   
<div class="form-group">
    <label for="EMAIL"> Correo: </label>
    <input class="controls" type="email" name="EMAIL" id="email" placeholder="juanperez@example.com" value="{{ old('EMAIL')}}">
    @error('EMAIL')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    </div>

    <div class="form-group">
    <label for="PASSWD_USER"> Contraseña: </label><br>
    <input class="controls" type="password" name="PASSWD_USER" id="passwd" placeholder="contraseña" value="{{ old('PASSWD_USER')}}">
    @error('PASSWD_USER')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    </div>


<div class="form-group ">

    <button class="btn btn-success font-bold border-2 border-white py-1 px-1 rounded-md hover:bg-white hover:text-indigo-70" >Iniciar </button>
    <button  type="button" onclick="location.href='/'" class="btn btn-success font-bold border-2 border-white py-1 px-1 rounded-md hover:bg-white hover:text-indigo-70">Cancelar</button>
    </div>
</div>

</h1>
@endsection
