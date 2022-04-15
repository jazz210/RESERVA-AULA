@extends('layouts.app')
@section('Title','login')
@section('content')

<h1 class="text-5xl text-center pt-24">login</h1>

<h1 class="text-3xl text-center pt-20">
<div class="form-group">
    <label for="EMAIL"> Correo: </label><br>
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

    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Iniciar </button>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-red-700">Cancelar</button>
    </div>
</div>
</h1>
@endsection
