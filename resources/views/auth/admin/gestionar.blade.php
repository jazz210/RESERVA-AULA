@extends('auth.admin.admin')
@section('Title','gestionar')
@section('content')

<h1 class="text-5xl text-center pt-24 text-white">GESTIONAR CUENTAS</h1>

<h1 class="text-3xl text-center pt-20">
<style type="text/css">
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;

    }
    th, td{
        padding: 1px;
    }
    th{
        background-color: #b78e6e
    }
    td{
        background-color: #9ea4a5
    }
    table{
        width: 50%;
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
              <td> <button class="btn btn-success font-bold border-2 border-white py-0.5 px-1.5 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-0.5 px-1.5 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td> 
            </tr> 
            <tr>
              <td>XXXXXXX</td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-0.5 px-1.5 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-0.5 px-1.5 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>  
            </tr>
            <tr>
              <td>XXXXXXX</td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-0.5 px-1.5 rounded-md hover:bg-white hover:text-indigo-700" >Editar</button></td>
              <td> <button class="btn btn-success font-bold border-2 border-white py-0.5 px-1.5 rounded-md hover:bg-white hover:text-indigo-700" >Eliminar</button></td>   
            </tr>
        </table>
    </body>
    <a href="{{ route('register.index') }}" class="breg font-semibold
          border-2 border-white rounded-md 
          text-white">registrar nuevo</a>
          <style>
            .breg{
              text-align: center;
              bottom: -10px;
                border: 1px solid rgb(240, 240, 244);
                border-collapse: collapse;
                padding: 7px;
                width: 100px;
                height: 60px;
                left: 0em; 
                position: relative;
            }
            .breg:hover{
              background-color: rgb(28, 105, 206);
            }
        </style>
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
@endsection
