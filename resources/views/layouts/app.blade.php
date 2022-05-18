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
    <div class="fondo bg-no-repeat bg-cover bg-center">
    <style>
      .fondo{
        background-image: url("{{asset('img/principal.png')}}");
        height: 721px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
       
      }
      </style>
  
    <nav class="flex py-3 bg-gradient-to-r from-blue-300 via-green-400 to-yellow-300">
      
      <div class="logo bg-contain bg-no-repeat"></div>
      <style>
      .logo{
        background-image: url("{{asset('img/umss-san-simon-02.png')}}");
        height: 100px;
        width: 100px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
    
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
          hover:text-indigo-700">Cerrar_Sesion</button>
        </form>
      @else
        <li>
          <a href="{{ route('login.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Log_In</a>
        </li>
        <li>
          <a href="{{ route('aulas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Aulas_Disponibles</a>
        </li>
        
      @endif
      
      </ul>
      
      
    </nav>
    

    @yield('content')
    
    
    
    
 </body>
 

</html>