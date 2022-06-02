@extends('auth.admin.admin')
@section('Title','listareservas')
@section('content')

<h1 class="text-5xl text-center pt-24 text-white">SOLICITUDES DE RESERVA</h1>

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
        background-color: #e7a874
    }
    td{
        background-color: #ced7da
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
        <label class="border border-gray-200 rounded-md bg-gray-200
        w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" for="ESTADO">ORDENAR:</label>
    <select name="ORDENAR" id="ordenar">
        <option value="">Seleccione..</option>
        <option value="urgente">urgente</option>
        <option value="normal">normal</option>
    </select>
            <tr>
                <th>
                    PRIORIDAD
                </th>
                <th>
                    FECHA
                </th>
                <th>
                    HORA
                </th>
                <th>
                    ESTADO
                </th>
            </tr>
           <tr>
              <td>Urgente</td>
              <td>25-May-22</td>
              <td>08:15</td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Aceptar</button>
              <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Rechazar</button></td>
            </tr> 
            <tr>
              <td>Normal</td>
              <td>08-Abr-22</td>
              <td>12:45</td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Aceptar</button>
              <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Rechazar</button></td>
            </tr>
            <tr>
              <td>Normal</td>
              <td>15-Mar-22</td>
              <td>09:45</td>
              <td><button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Aceptar</button>
              <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Rechazar</button></td>
            </tr>
        </table>
    </body>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white text-white hover:text-red-700"name="Cancelar" value="Cancelar" onclick="location.href='/admin'">Salir </button>
</div>
</h1>
@endsection