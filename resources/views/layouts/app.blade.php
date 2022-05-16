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
        <img class="w-20 h-30 md:w-350 md:h-auto md:rounded-none rounded-full mx-auto" src="/umss-san-simon-02.png">
      <div class="w-1/2 px-12 mr-auto">
    
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('informacionreservas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Informacion_Reservas</a>
        </li>
        <li>
          <a href="{{ route('gestionaraulas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Gestionar_Aulas</a>
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
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Registrarse</a>
        </li>
        <li>
          <a href="{{ route('aulas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Aulas_Disponibles</a>
        </li>
        <li>
          <a href="{{ route('listareservas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Lista_Reservas</a>
        </li>
        
      @endif
      
      </ul>
      
      
    </nav>
    <div class="bg-cover bg-center ..." style="background-image: url(/umss-san-simon-02.png)"></div>

    @yield('content')
    

 </body>
 

</html>