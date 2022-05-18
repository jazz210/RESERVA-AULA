@extends('layouts.app')
@section('Title','aulas')
@section('content')

<h1 class="text-5xl text-center pt-24">Aulas Disponibles</h1>

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
                    EDIFICIO
                </th>
                <th>
                    AULA
                </th>
            </tr>
           <tr>
              <td>Edificio Academico</td>
              <td>692A<button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Reservar</button></td>
            </tr> 
            <tr>
              <td>Edificio Academico</td>
              <td>691B<button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Reservar</button></td>
            </tr>
            <tr>
              <td>Edificio Academico</td>
              <td>693C<button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Reservar</button></td>
            </tr>
        </table>
    </body>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-red-700"name="Cancelar" value="Cancelar" onclick="location.href='/login'">Salir </button>
</div>
</h1>
@endsection