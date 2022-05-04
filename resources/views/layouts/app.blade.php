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
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <img src="../../css/imagen/umss-san-simon-02.png" >
    
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
      @endif
      
      </ul>
      


    </nav>


    @yield('content')

 </body>
</html>