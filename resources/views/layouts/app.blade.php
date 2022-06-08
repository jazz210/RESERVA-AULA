<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>


    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    
  </head>
  

  <body class=" text-gray-800">
     
    <nav class="flex py-1 bg-gradient-to-r from-blue-300 via-green-400 to-yellow-300 ">

      <div class="logo bg-contain bg-no-repeat"></div>
      <style>
      .logo{
        background-image: url("{{asset('img/umss-san-simon-02.png')}}");
        height: 80px;
        width: 80px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
    
    
      <div class="w-1/2 px-12 mr-auto">

      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <a class="mx-8">
          <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </a>
        
      <form action="login" method="post" class="navbar-brand">
            @method('put')
            @csrf
            <button class="btn font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-red-500
          hover:text-indigo-700">Cerrar_Sesion</button>
          
        </form>
      </nav>
      <header>
        <nav class="bg-gray-800">
          <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
              <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!--
                    Icon when menu is closed.
        
                    Heroicon name: outline/menu
        
                    Menu open: "hidden", Menu closed: "block"
                  -->
                  <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                  <!--
                    Icon when menu is open.
        
                    Heroicon name: outline/x
        
                    Menu open: "block", Menu closed: "hidden"
                  -->
                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:block sm:ml-0">
                  <div class="flex space-x-8">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ route('gestionar.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Gestionar</a>
        
                    <a href="{{ route('informacionreservas.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Informacion Reservas</a>
        
                    <a href="{{ route('gestionaraulas.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Gestionar Aulas</a>
        
                    <a href="{{ route('register.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrar</a>
      
                    <a href="{{ route('listareservas.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium aria-current="page">Lista Reservas</a>
        
                    <a href="{{ route('solicitudes.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Solicitudes</a>
        
                    <a href="{{ route('asignaraula.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Asignar Aula</a>
        
                    <a href="{{ route('solicitudesaceptadas.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Solicitudes Aceptadas</a>

                    <a href="{{ route('materia.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Añadir materia</a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        
          
          <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="{{ route('gestionar.index') }}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Gestionar</a>
        
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Informacion Reservas</a>
        
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Gestionar Aulas</a>
        
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Registrar</a>
      
              <a href="{{ route('listareservas.index') }}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Lista Reservas</a>
        
              <a href="{{ route('solicitudes.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Solicitudes</a>
        
              <a href="{{ route('asignaraula.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Asignar Aula</a>
        
              <a href="{{ route('solicitudesaceptadas.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base nt-medium">Solicitudes</a>
fo
              <a href="{{ route('materia.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Añadir materia</a>
            </div>
          </div>
        </nav>
       
      </header>
    </ul>
      @else
      
      @endif

      </ul>


    </nav>

    <div class="fondo bg-no-repeat">
      <style>
     .fondo{
         background-size: cover;
       background-image: url("{{asset('img/principal.png')}}");
       background-color: rgb(123, 122, 122);
       background-position: center center;
       background-blend-mode: soft-light;
       height: 100%;
       width: 100%;
       background-attachment: fixed;
      position: absolute;
    }
     </style>


<footer class="footer bg-center">
  <div class="contaniers">
      <p>Contactanos</p>
      <p>Celular: +591 73770458</p>
      <p>Email: entersoftsrl@gmail.com</p>
      <P>Direccion: Av. América y Calle Rosales N°1556</P>
      <p>Copyright 2022 - Pagina creada por  EnterSoft S.R.L - Todos los derechos reservados</p>
  </div>

</footer>
<style>
.footer {
background: rgb(59, 174, 202);
color: rgb(68, 68, 68);
/*padding: 1rem 0;*/
justify-content: center;
text-align:center;
/*line-height: 0.85;*/
font-size: 10px;
position: absolute;
width: 100%;
height: 80px;
bottom: 0;
left: 0;
/*margin-top: auto;*/
}

.footer .contaniers {


max-width: 1200px;
width: 100%;
margin: auto;
}

</style>
    @yield('content')
    
    
 </body>
 

</html>
