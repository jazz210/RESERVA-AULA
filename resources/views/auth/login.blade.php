@extends('layouts.app')
@section('Title','login')
@section('content')

<div class="block mx-auto my-12 p-8   w-1/3 border-gray-200 rounded-lg shadow-lg" style="background-color:rgba(111, 211, 247, 0.3)">
    <h1 class="text-3xl text-center font-bold">Inicio sesion</h1>
    <form class="mt-4" method="POST" action="">
        @csrf
        <input type="email" class="border border-gray-200 rounde-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" id="email" name="email">

        <input type="password" class="border border-gray-200 rounde-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">
        
<p class="border border-red-500 rounded-mg bg-red-100 w-full texte-red-600 p-2 my-2">* Error</p>
    
        <button type="entrar" class="rounded-md bg-indigo-500 w-full tet-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 focus">INGRESAR</button>
    </form>
</div> 
@endsection
