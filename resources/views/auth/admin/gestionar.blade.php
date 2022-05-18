@extends('layouts.app')
@section('Title','gestionar')
@section('content')

<h1 class="text-5xl text-center pt-24">Gestionar Cuentas</h1>

<h1 class="text-3xl text-center pt-20">
<style type="text/css">
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;

    }
    th, td{
        padding: 10px;
    }
    th{
        background-color: #3380FF
    }
    td:hover{
        background-color: #33D4FF
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
                    CUENTA
                </th>
                <th>
                    EDICION
                </th>
                <th>
                    ELIMINACION
                </th>
            </tr>
           <tr>
              <td>XXXXXXX</td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td> 
            </tr> 
            <tr>
              <td>XXXXXXX</td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>  
            </tr>
            <tr>
              <td>XXXXXXX</td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>   
            </tr>
        </table>
    </body>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Crear nueva cuenta</button>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-red-700">Volver a la pagina princiapl</button>
</div>
</h1>
@endsection
