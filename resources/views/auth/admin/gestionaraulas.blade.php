@extends('auth.admin.admin')
@section('Title','gestionaraulas')
@section('content')

<h1 class="text-5xl text-center pt-24 text-white">GESTIONAR AULAS</h1>

<h1 class="text-3xl text-center pt-20">
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
<div class="form-group">
    <body>
        <table >
            <tr>
                <th>
                    AULA
                </th>
                <th>
                    EDICION
                </th>
                <th>
                    ELIMINACION
                </th>
            </tr>
           <tr>
              <td>693A</td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>
            </tr>
            <tr>
              <td>693B</td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>
            </tr>
            <tr>
              <td>693C</td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>
            </tr>
        </table>
    </body>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-indigo-200 text-white hover:text-red-700">Crear Nueva Aula</button>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-indigo-200 text-white hover:text-red-700"name="Cancelar" value="Cancelar" onclick="location.href='/admin'">Salir </button>
</div>
</h1>
@endsection
