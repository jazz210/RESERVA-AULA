@extends('layouts.app')

@section('title','admin')

@section('content')
<head>
 
</head>
<style type="text/css">
    .boton{
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
          <a href="{{ route('gestionar.index') }}" class="boton font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Gestionar</a>
        </li>
        <li>
          <a href="{{ route('informacionreservas.index') }}" class="boton font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Informacion_Reservas</a>
        </li>
        <li>
          <a href="{{ route('gestionaraulas.index') }}" class="boton font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Gestionar_Aulas</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="boton font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Registrar_Docente</a>
        </li>
        <li>
          <a href="{{ route('listareservas.index') }}" class="boton font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Lista_Reservas</a>
        </li>
        
</body>

</div>

@endsection