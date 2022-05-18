@extends('layouts.app')

@section('title','admin')

@section('content')
<head>
 
</head>
<style type="text/css">
    li {
        border: 1px solid blue;
        border-collapse: collapse;
        padding: 35px;
        background-color: #3380FF;
        width: 300px;
        height: 100px;
        margin-left: auto; 
        margin-right: auto;
    }
</style>
<body>
  <div class="bg-cover bg-center ..." style="background-image: url(/../fondo1.jpg)"></div>
        <li>
          <a href="{{ route('gestionar.index') }}" class="font-semibold
          border-4 border-black py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700 ">Gestionar</a>
        </li>
        <li>
          <a href="{{ route('informacionreservas.index') }}" class="font-semibold
          border-4 border-black py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Informacion_Reservas</a>
        </li>
        <li>
          <a href="{{ route('gestionaraulas.index') }}" class="font-semibold
          border-4 border-black py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Gestionar_Aulas</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-4 border-black py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Registrarse</a>
        </li>
</body>
</div>

@endsection