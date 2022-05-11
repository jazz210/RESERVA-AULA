@extends('layouts.app')
@section('title','Home')
@section('content')

<body background="/prueba.png">

<h1 class="text-5xl text-center pt-24">bienvenido a la pagina</h1>
<form class="mt-7" method="POST" action="">
    @if(auth()->check())
    
        @csrf

        <input type="namedoc" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre de docente" id="namedoc" name="namedoc">
        @error('namedoc')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

        <input type="materia" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Materia" id="materia" name="materia">
        @error('materia')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror
    
        <input type="grupo" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Grupo" id="grupo" name="grupo">
        @error('grupo')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

       <input type="cantestu" class="border border-gray-200 rounded-md bg-gray-200 
    w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
    placeholder="Numero de estudiantes" id="cantestu" 
    name="cantestu">
    @error('cantest')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <p>
    <input type="fecha" class="border border-gray-200 rounded-md bg-gray-200 
    w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
    placeholder="mm/dd/yy" id="fecha" 
    name="fecha">
    @error('fecha')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror
    </p>


    <input type="detalle" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Detalle" id="detalle" name="detalle">
    @error('detalle')        
  <p class="border border-red-500 rounded-md bg-red-100 w-full
  text-red-600 p-2 my-2">* {{ $message }}</p>
@enderror
        
    
        <button type="submit" class="rounded-m bg-indigo-400  text-lg text-white found-semibold p-1 my-2 hover:bg-indigo-600">ingresar</button>
    
    
        <button type="button" class="rounded-m bg-indigo-400  text-lg text-white found-semibold p-1 my-2 hover:bg-indigo-600 name="Cancelar" value="Cancelar" onclick="location.href='/'">cancelar </button>
        @endif
    </form>

</body>
    
@endsection