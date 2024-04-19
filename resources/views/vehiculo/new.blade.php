<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Vehiculo</title>
  </head>
  <body>
    <div class="container">
        <h1>Add Vehiculo</h1>
        <form method="POST" action="{{route('vehiculos.store')}}">
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">Code</label>
              <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
                    disabled="disabled">
              <div id="idHelp" class="form-text">Vehiculo Code</div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Vehiculo Marca</label>
              <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="marca"
             placeholder="Vehiculo marca" >             
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Vehiculo Modelo</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="modelo"
               placeholder="Vehiculo modelo" >             
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Vehiculo Año</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="anio"
               placeholder="Vehiculo año" >             
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Vehiculo Matricula</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="matricula"
               placeholder="Vehiculo matricula" >             
              </div>


              <div class="mb-3">
                <label for="name" class="form-label">Vehiculo Tipo</label>
                <input type="text" class="form-control" id="id" aria-describedby="nameHelp" name="tipo"
               placeholder="Vehiculo tipo" >             
              </div>


            <label for="propietario">Propietario</label>
            <select class="form-select" id="propietario" name="code" required>
                <option selected disabled value="">Choose one...</option>
                @foreach ( $propietarios as $propietario )
                    <option value="{{ $propietario->id }}">{{ $propietario->nombre}}</option>                    
                @endforeach

            </select>
            <br>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('vehiculos.index') }}" class="btn btn-warning">Cancel</a>
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