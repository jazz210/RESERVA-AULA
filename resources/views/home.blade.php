@extends('layouts.app')
@section('title','Home')
@section('content')

<div class="block mx-auto my-12 p-8   w-1/3 border-gray-400 rounded-lg shadow-lg" style="background-color:rgba(50, 156, 192, 0.5)">

    <h1 class="text-3xl text-center fond-bold ">RESERVAR AULA</h1>
    <form class="mt-4" method="POST" action="">
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

    <p>
        <input type="horario" class="border border-gray-200 rounded-md bg-gray-200
        w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        placeholder="Horario" id="Horario"
        name="horario">
        @error('horario')
          <p class="border border-red-500 rounded-md bg-red-100 w-full
          text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror
        <input type="estado" class="border border-gray-200 rounded-md bg-gray-200
        w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        placeholder="Estado" id="estado"
        name="Estado">
        @error('Estado')
          <p class="border border-red-500 rounded-md bg-red-100 w-full
          text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror
        </p>

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


        <input type="detalle" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Detalle" id="detalle" name="detalle">
    @error('detalle')
  <p class="border border-red-500 rounded-md bg-red-100 w-full
  text-red-600 p-2 my-2">* {{ $message }}</p>
@enderror


        <button type="button" class="rounded-md bg-indigo-500 w-center text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600" name="Cancelar" value="Cancelar" onclick="location.href='/'">cancelar </button>
        <button type="submit" class="rounded-m bg-indigo-500  text-lg text-white found-semibold p-2 my-3 hover:bg-indigo-600">solicitar</button>
    </form>

</div>

@endsection
