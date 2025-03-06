<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <title> Q' Rico </title>
</head>
<body> 

    <style>
        body {
            font-family: 'UnifrakturMaguntia', cursive;
            background-color: #c6ebef;
        }
    </style>

      <div class="position-absolute top-50 start-50 translate-middle" >
            <div class="row col-10">
                <div style="width: 30rem; padding: 25px 5px 10px 40px;">
                    <img src="/images/12.jpg"  class="img-fluid" alt="Creando diseños" >  
      <div>  <br>
                          
<form>
  <div class="text-center d-block">
    <label for="inputEmail3" class="text-center d-block"> Usuario </label>
    <div  class="text-center d-block">
      <input type="usuario" class="form-control" id="inputEmail3">
    </div>
  </div> <br>
  <div class="text-center d-block">
    <label for="inputPassword3" class="text-center d-block"> Contraseña </label>
    <div class="text-center d-block">
      <input type="password" class="form-control" id="inputPassword3">
    </div> <br>
  </div>
  <fieldset class="text-center d-block">
    <h5 class="display"> Tipo de ingreso</h5>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="display" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Administrador
        </label>
      </div>
      <div class="form-check">
        <input class="display" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Colaborador
        </label>
      </div>

    </div><br>

  </fieldset>

  <center>
    </button> <a href="{{ route('users.index') }}" class="btn btn-primary"> Ingresar </a>
  </center>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</form>
    
</body>
</html>

