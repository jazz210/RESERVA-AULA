@extends('layouts.app')
@section('title','register')
@section('content')

<div class="block mx-auto my-12 p-8   w-1/3 border-gray-200 rounded-lg shadow-lg" style="background-color:rgba(50, 156, 192, 0.5)">
    
    <h1 class="text-3xl text-center fond-bold ">NUEVO USUARIO</h1>
    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="name" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" name="name">
        @error('name')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" id="email" name="email">
        @error('email')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror
    
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">
        @error('password')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

       <input type="password" class="border border-gray-200 rounded-md bg-gray-200 
    w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
    placeholder="Password confirmation" id="password_confirmation" 
    name="password_confirmation">
        
    
        <button type="submit" class="rounded-m bg-indigo-400  text-lg text-white found-semibold p-1 my-2 hover:bg-indigo-600">ingresar</button>
    
    
        <button type="button" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600" name="Cancelar" value="Cancelar" onclick="location.href='/'">cancelar </button>
    
    </form>

</div>
    
@endsection