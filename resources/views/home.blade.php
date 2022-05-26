@extends('layouts.app')
@section('title','Home')
@section('content')

<div class="block mx-auto my-12 p-8   w-1/3 border-gray-400 rounded-lg shadow-lg" style="background-color:rgba(50, 156, 192, 0.5)">

    <h1 class="text-3xl text-center fond-bold ">RESERVAR AULA</h1>
    <form class="mt-4" method="POST" action="{{ route('guardar-aula')}}">
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

       <div class="form-group">
        <br><label class="border border-gray-200 rounded-md bg-gray-200
        w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" for="ESTADO">ESTADO:</label>
        <select name="ESTADO" id="estado">

                <option value="">Seleccione..</option>
                <option value="urgente">urgente</option>
                <option value="normal">normal</option>
            </select>
            @error('SEMESTRE_ESP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror



      <div class="form-group">
        <br><label class="border border-gray rounded-md bg-gray-200
        w-full text-lg p-1 my-1 focus:bg-white" for="FECHA_ESP">FECHA</label>
        <input class="form-control rounded-md" type="date" id="fecha_esp" name="FECHA_ESP" placeholder="Select date" max="2030-01-31" value="{{ old('FECHA_ESP')}}">
        @error('FECHA_ESP')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror


    <input type="grupo" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Grupo" id="grupo" name="grupo">
    @error('grupo')
  <p class="border border-red-500 rounded-md bg-red-100 w-full
  text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror
</p>
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
        <a href="{{ route('aulas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white
          hover:text-indigo-700">Aulas</a>
      </form>

</div>

@endsection
