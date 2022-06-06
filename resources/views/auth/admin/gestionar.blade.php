@extends('auth.admin.admin')
@section('Title','gestionar')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionar cuentas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style type="text/css">
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;

    }
    th, td{
        padding: 2px;
    }
    th{
        background-color: #ce9657
    }
    td{
        background-color: #d0d5d6
    }
    table{
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

</style>
<body>

    <div class="container">
    <button class="btn btn-success"> 
        @if ($message = Session::get('success'))
        {{$message}}
        @endif
    </button>
        <h4 class="text-3xl text-center fond-bold ">Gestionar cuenta</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('gestionar.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                         <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                          <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @if (count($users)<=0)
                                <tr>
                                    <td colspan="4">No hay resultados</td>
                                </tr>
                              @else
                             @foreach ($users as $user)
                              <tr>
                                  <td>{{$user->id}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td><a href="{{route('gestionar.edit',$user->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{route('gestionar.destroy',$user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                                </form>
                              </tr>
                              @endforeach
                              @endif
                          </tbody>
                    </table>

                </div>
            </div>

        </div>
  <button class="btnsalir btn-success font-semibold border-2 border-white  rounded-md text-white"name="Cancelar" value="Cancelar" onclick="location.href='/admin'">Salir </button>
  
      <style>
          .btnsalir{
              text-align: center;
            bottom: -13px;
              border: 1px solid rgb(240, 240, 244);
              border-collapse: collapse;
              padding: 7px;
              width: 100px;
              height: 55px;
              left: 0.5em;
              position: relative;
          }
          .btnsalir:hover{
            background-color: rgb(233, 24, 24);
          }

      </style>
</div>
</h1>
    </div>

</body>
</html>
<div>


@endsection
