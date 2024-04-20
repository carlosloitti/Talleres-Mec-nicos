<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Propietario</title>
  </head>
  <body>
    <div class="container">
        <h1>Add Propietario</h1>
        <form method="POST" action="{{route('propietarios.store')}}">
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">Code</label>
              <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
                    disabled="disabled">
              <div id="idHelp" class="form-text">Propietario Code</div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Propietario nombre</label>
              <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="nombre"
             placeholder="Propietario nombre" >             
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Propietario apellido</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="apellido"
               placeholder="Propietario apellido" >             
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Propietario telefono</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="telefono"
               placeholder="Propietario telefono" >             
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Propietario Correo Electronico</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="correo_electronico"
               placeholder="Propietario Correo Electronico" >             
              </div>


              <div class="mb-3">
                <label for="name" class="form-label">Propietario Direccion</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="direccion"
               placeholder="Propietario Direccion" >             
              </div>


            <label for="vehiculo">Vehiculo</label>
            <select class="form-select" id="vehiculo" name="code" required>
                <option selected disabled value="">Choose one...</option>
                @foreach ( $vehiculos as $vehiculo )
                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca}}</option>                    
                @endforeach

            </select>
            <br>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('propietarios.index') }}" class="btn btn-warning">Cancel</a>
            </div>
          </form>
    </div>

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