<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>


    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">


  </head>

  <body class=" text-gray-800">


    <nav class="flex py-3 bg-gradient-to-r from-blue-300 via-green-400 to-yellow-300 ">

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
      @else
        <li>
          <a href="{{ route('login.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white
          hover:text-indigo-700">Log_In</a>
        </li>
        <li>
          <a href="{{ route('aulas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white
          hover:text-indigo-700">Aulas</a>
        </li>
      @endif

      </ul>


    </nav>

    <div class="fondo bg-no-repeat bg-cover bg-center">
      <style>
     .fondo{
       background-image: url("{{asset('img/principal.png')}}");
       background-color: rgb(123, 122, 122);
       background-blend-mode: soft-light;
       height: 100%;
       width: 100%;
       position:absolute;


     }
     </style>



    @yield('content')
    <footer class="footer">
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
  padding: 1rem 0;
  justify-content: center;
  text-align:center;
  line-height: 0.85;
  font-size: 10px;
  position: fixed;
  width: 100%;
  bottom: 0;
  width: 100%;
  margin-top: auto;
}

.footer .contaniers {
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  width: 50%;
  margin: auto;
}

</style>

    
 </body>


</html>
