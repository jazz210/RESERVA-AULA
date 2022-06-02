@extends('auth.admin.admin')
@section('Title','listareservas')
@section('content')

<h1 class="text-5xl text-center pt-24 text-white">SOLICITUDES ACEPTADAS</h1>

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
            <tr>
                <th>
                    DOCENTE
                </th>
                <th>
                    FECHA
                </th>
                <th>
                    HORA
                </th>
                <th>
                    AULA
                </th>
            </tr>
           <tr>
              <td>Lic. Karen</td>
              <td>8-May-22</td>
              <td>08:15</td>
              <td>693A</td>
            </tr> 
            <tr>
              <td>Lic. Carmen</td> 
              <td>18-Abr-22</td>
              <td>12:45</td>
              <td>693B</td>
            </tr>
            <tr>
              <td>Lic. Oscar</td>
              <td>5-Mar-22</td>
              <td>09:45</td>
              <td>693C</td>
            </tr>
        </table>
    </body>
    <button class="btn btn-success font-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white text-white hover:text-red-700"name="Cancelar" value="Cancelar" onclick="location.href='/admin'">Salir </button>
</div>
</h1>
@endsection