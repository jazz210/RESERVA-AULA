@extends('layouts.app')
@section('Title','reserva')
@section('content')
<div class="block mx-auto my-12 p-8   w-1/3 border-gray-200 rounded-lg shadow-lg" style="background-color:rgba(11, 139, 182, 0.5)">
    
    <h1 class="text-3xl text-center fond-bold">Reservar Aula</h1>
    <form class="mt-4" method="POST" action="">
        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"placeholder="Nombre completo" id="name" name="name">
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"placeholder="Correo electronico" id="email" name="email">
        <input type="integer" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"placeholder="Carnet identidad" id="ci" name="ci">
        <input type="integer" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"placeholder="Codigo" id="codsis" name="codsis">
    
        <button class="registrar btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-blue-700">Registrar</button>
        <button type="button" onclick="location.href='/'" class="cancelar btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-white-700">Cancelar</button>
    </form>

</div>
@endsection
