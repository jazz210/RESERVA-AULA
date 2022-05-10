<!DOCTYPE html>
<html lang="en">
  <head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
       
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    
  </head>
  
  <body class=" text-gray-800">
  
    <nav class="flex py-3 bg-gray-300">
        <img class="w-20 h-30 md:w-350 md:h-auto md:rounded-none rounded-full mx-auto" src="/umss-san-simon-02.png" >
      <div class="w-1/2 px-12 mr-auto">
    
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </li>
        <form action="login" method="post" class="navbar-brand">
            @method('put')
            @csrf
            <button class="btn font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-red-500 
          hover:text-black">cerrar sesion</button>
        </form>
        
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Register</a>
        </li>
        <li>
          <a href="{{ route('gestionar.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Gestionar</a>
        </li>
        <li>
          <a href="{{ route('aulas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Aulas Disponibles</a>
        </li>
      @endif
      
      </ul>
      
      
    </nav>
    <div class="bg-cover bg-center ..." style="background-image: url(/umss-san-simon-02.png)"></div>

    @yield('content')
    

 </body>
 
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
    @error('grupo')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror


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


</html>