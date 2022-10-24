<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabla</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      </head>
<div class="container col-md-4">
<body> 

  @if(session()->has('Exito'))
  <br>
  <div class="alert alert-success" role="alert">
    Guardado con exito
  </div>
  <br>
 @endif

  <form action="Guardar" method="post">
    @csrf
    <div class="card" style="text-align: center">
        <div class="card-header">
         Formulario
        </div>
        <div class="card-body">
          <h5 class="card-title">Ingresa cosas</h5>
          <p class="card-text">cosa1</p>
          <input name="cosa1">
          <p class="text-danger">{{ $errors->first('cosa1') }}</p>
          <p class="card-text">cosa2</p>
          <input name="cosa2">
          <p class="text-danger">{{ $errors->first('cosa2') }}</p>
          <br>
          <br>
      

          <button type="submit" class="btn btn-primary btn-lg">ingresar</button>
         
          <a href="/" > <button type="button" class="btn btn-secondary btn-lg">Regresar</button> </a>
         
       
          
        </div>
      </div>
   
     
    </div>
  </form>
  

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>