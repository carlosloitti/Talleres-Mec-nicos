<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Propietarios</title>

    
  


  </head>



  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Propietarios') }}
        </h2>
    </x-slot>

  <body>


    
    <h1>Listado de Propietarios</h1>
    <a href="{{ route('propietarios.create') }}" class="btn btn-success">Add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Nombre</th> 
            <th scope="col">Apellido</th> 
            <th scope="col">Telefono</th> 
            <th scope="col">Correo Electronico</th> 
            <th scope="col">Direccion</th> 
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($propietarios as $propietario)
          <tr>
                <th scope="row">{{ $propietario->id}}</th>
                <td>{{ $propietario->nombre}}</td>
                <td>{{ $propietario->apellido}}</td>
                <td>{{ $propietario->telefono}}</td>
                <td>{{ $propietario->correo_electronico}}</td>
                <td>{{ $propietario->direccion}}</td> 
                <td> 

                  <a href=" {{ route('propietarios.edit' , ['propietario'=>$propietario->id]) }} " 
                    class=" btn btn-info"> Edit </a></li>
                  
                  <form action="{{ route('propietarios.destroy', ['propietario' =>$propietario->id]) }}"
                    method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                   <input class="btn btn-danger" type="submit" value="delete">
                </form>
                    
                  </td>
                   
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </x-app-layout>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>