@extends('auth.admin.admin')
@section('Title','informacionreservas')
@section('content')

<h1 class="text-5xl text-center pt-24 text-white">INFORMACION RESERVAS POR GESTION</h1>

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
        background-color: #d29651
    }
    td{
        background-color: #bbbebf
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
    <button class="btnsalir btn-success font-semibold border-2 border-white rounded-md text-white"name="Cancelar" value="Cancelar" onclick="location.href='/admin'">Salir </button>
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
@endsection