<?php

include_once('config/config.php');
include_once('config/functions.php');
include_once('php/usuarios.php');

$path = getFolderProyect();


$mensaje = "";

if(isset($_POST['nombres'])&& !empty ($_POST['nombres'])){




    $usuarios = new usuario();
    $save = $usuarios->save($_POST);

    if($save){
        header('location: index.php');
    }else{
        echo '<div class="alert alert danger" role="alert"> Error </div>';

    };
    
    var_dump($save);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios VIN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path ?>/css/style.css" rel="stylesheet">
</head>



<body>
<div class = "row col-sm-12 mt-3">

<div class="col-sm-6">

<div class="card">
  <img class="card-img-top" src="img/vin-menu.jpg" alt="Card image cap">
</div>
</div>


<div class="col-sm-6">
<div class = "row">
    <p class="h3">Usuarios VIN Registro</p>
</div>

<div class = "row col-s">
    <form action = "#" method="POST" enctype="multipart/form-data">

    <div class="row mb-2">
            <div class="col">
            <label for="Nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" placeholder="Nombres" required class="form-control" />
            </div>
        
            <div class="col">
            <label for="Apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required class="form-control" />

            </div>
    </div>

    <div class="row mb-2">
        <div class="col">
        <label for="celular">celular:</label>
            <input type="number" name="celular" id="celular" placeholder="Celular" required class="form-control" />
        </div>

        <div class="col">
        <label for="Email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
        </div>

    </div>

    <div class="row mb-2">


        <div class="col">
        <label for="ciudad">ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" class="form-control" />

        </div>

        <div class="col">
        <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" placeholder="Edad"  class="form-control" />
        </div>
    </div>

    <div class="row mb-2">

<div class="col">
<label for="Observaciones">Observaciones:</label>
    <input type="text" name="observaciones" id="Observaciones" placeholder="observaciones" class="form-control" />
</div>
</div>

    <button class="btn btn-success" type="submit">Guardar</button>

    </form>

    </div>

    </div>
    </div>

</div>






</body>
</html>