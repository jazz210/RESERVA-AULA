@extends('layouts.app')

@section('title','admin')

@section('content')
<head>
 
</head>
<body>
  <div class="bg-cover bg-center ..." style="background-image: url(/../fondo1.jpg)"></div>
        <li>
          <a href="{{ route('gestionar.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Gestionar</a>
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
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Registrarse</a>
        </li>
        <li>
          <a href="{{ route('listareservas.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Lista_Reservas</a>
        </li>
</body>

</div>

@endsection