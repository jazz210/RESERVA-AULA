@extends('layouts.app')
@section('Title','informacionreservas')
@section('content')

<h1 class="text-5xl text-center pt-24">Informacion de Reservas por Gestion</h1>

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
                    AULA
                </th>
                <th>
                    FECHA
                </th>
                <th>
                    GESTION
                </th>
            </tr>
           <tr>
              <td>693A</td>
              <td>8-MAYO</td>
              <td>2022</td>
            </tr> 
            <tr>
              <td>693B</td>
              <td>18-ABRIL</td>
              <td>2022</td>
            </tr> 
            <tr>
              <td>693C</td>
              <td>5-MARZO</td>
              <td>2021</td>
            </tr> 
        </table>
    </body>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" >Salir</button>
</div>
</h1>
@endsection