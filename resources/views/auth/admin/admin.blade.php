@extends('layouts.app')

@section('title','admin')

@section('content')
<head>
 
</head>
<body>
          <a href="{{ route('gestionar.index') }}" class=" bgestionar font-semibold
          border-2 border-white py-2 px-4 rounded-md
          hover:text-white">GESTIONAR</a>
        
        <style>
          .bgestionar{
            text-align: center;
            bottom: -50px;
              border: 1px solid rgb(5, 5, 6);
              border-collapse: collapse;
              padding: 7px;
              background-color: #819ac3;
              width: 200px;
              height: 100px;
              left: 10em; 
              position: relative;
          }
          .bgestionar:hover{
            background-color: rgb(28, 105, 206);

          }
      </style>
      
          <a href="{{ route('informacionreservas.index') }}" class="binfo font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:text-white">INFORMACION RESERVAS</a>

          <style>
            .binfo{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .binfo:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>
        
          <a href="{{ route('gestionaraulas.index') }}" class="bgest font-semibold
          border-2 border-white py-2 px-4 rounded-md 
          hover:text-white">GESTIONAR AULAS</a>
          <style>
            .bgest{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .bgest:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>
        
          <a href="{{ route('register.index') }}" class="breg font-semibold
          border-2 border-white py-2 px-4 rounded-md 
          hover:text-white">REGISTRAR</a>
          <style>
            .breg{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .breg:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>
        
          <a href="{{ route('listareservas.index') }}" class="blist font-semibold
          border-2 border-white py-2 px-4 rounded-md  
          hover:text-white">LISTA RESERVAS</a>
          <style>
            .blist{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .blist:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>

        <a href="{{ route('solicitudes.index') }}" class="blist font-semibold
          border-2 border-white py-2 px-4 rounded-md  
          hover:text-white">SOLICITUDES</a>
          <style>
            .blist{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .blist:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>

        <a href="{{ route('asignaraula.index') }}" class="blist font-semibold
          border-2 border-white py-2 px-4 rounded-md  
          hover:text-white">ASIGNAR AULA</a>
          <style>
            .blist{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .blist:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>

        <a href="{{ route('solicitudesaceptadas.index') }}" class="blist font-semibold
          border-2 border-white py-2 px-4 rounded-md  
          hover:text-white">SOLICITUDES ACEPTADAS</a>
          <style>
            .blist{
              text-align: center;
              bottom: -50px;
                border: 1px solid rgb(5, 5, 6);
                border-collapse: collapse;
                padding: 7px;
                background-color: #819ac3;
                width: 200px;
                height: 100px;
                left: 10em; 
                position: relative;
            }
            .blist:hover{
              background-color: rgb(28, 105, 206);
  
            }
        </style>
        
</body>

</div>

@endsection