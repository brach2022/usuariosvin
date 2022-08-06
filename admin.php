<?php
include_once('config/config.php');
include_once('config/functions.php');
include_once('php/usuarios.php');

$path = getFolderProyect();
$nombres="";
    $apellidos="";
    $celular="";
    $edad="";
    $email="";
    $ciudad="";
    $observaciones="";
    $id="";
    $edit = "none";

$usuariosGet = new usuario();
$usuariosGet = $usuariosGet->getALL();

if(isset($_POST['accion']) && !empty ($_POST['accion'])){

$accion = $_POST['accion'];

$resultAccion = false;

if($accion == "Editar"){
  $usuariosAccion = new usuario();
  $resultAccion = $usuariosAccion->update($_POST);
}
if($accion == "Eliminar"){
  $usuariosAccion = new usuario();
  $resultAccion = $usuariosAccion->delete($_POST['id']);
}

if($accion == "Consultar"){
  $usuariosAccion2 = new usuario();
  $params = $usuariosAccion2->getOne($_POST['id']);
//  var_dump($params);

  $nombres=$params->nombres;
    $apellidos=$params->apellidos;
    $celular=$params->celular;
    $edad=$params->edad;
    $email=$params->email;
    $ciudad=$params->ciudad;
    $observaciones=$params->observaciones;
    $id=$params->id;
    $edit = "show";

}

if($resultAccion){
  header('location: admin.php');
}



}

$mensaje = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link src="../../" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Usuarios VIN Admin</title>
</head>
<body>

<div class="row">



<div class="row col-sm-12 mt-3">

<div class = "row col-sm-12 text-center">
    <p class="h4">Usuarios VIN Admin</p>
</div>
<div class="row">

<div class="col-sm-8">

<table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Acciones</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Celular</th>
      <th scope="col">Edad</th>
      <th scope="col">Email</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>

  <?php

  if (count($usuariosGet) == 0 ) {

  }else {
    foreach ($usuariosGet as $usuariosGetVal) {
      echo "<tr>";
      foreach ($usuariosGetVal as $key => $valor) {
    
        if ($key == 0) {
          
          echo  "<th scope='row'>
          <form action = '#' method='POST'>
          <input type='hidden' name='id' id='id' value = ".$valor."  required  />
          <input type='hidden' name='accion' id='accion' value = 'Consultar'  required  />
          <button  type='submit' class='btn btn-primary' >Editar</button>
          </form>
          <form action = '#' method='POST'>
          <input type='hidden' name='id' id='id' value = ".$valor."  required  />
          <input type='hidden' name='accion' id='accion' value = 'Eliminar'  required  />
          <button type='submit' class='btn btn-danger'>Eliminar</button>
          </form>
          </th>";
        }else{
          echo "  <th scope='row'>".$valor."</th>";
        }
    
          
      }
      
      echo "</tr>";
    }
  }



  ?>
  </tbody>
</table>

</div>

<div class="col-sm-3" <?php echo "style = display:". $edit.";";?>;">


<div class="col-sm-12" >

<form action = "#" method="POST" enctype="multipart/form-data">

<div class="row mb-2">

<input type="hidden" name="id" id="id" value = "<?php echo $id; ?>" required class="form-control" />
<input type='hidden' name='accion' id='accion' value = 'Editar'  required  />
        <div class="col">
        <label for="Nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" value = "<?php echo $nombres; ?>" required class="form-control" />
        </div>
    
        <div class="col">
        <label for="Apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" value = "<?php echo $apellidos; ?>" required class="form-control" />

        </div>
</div>

<div class="row mb-2">
    <div class="col">
    <label for="celular">celular:</label>
        <input type="number" name="celular" id="celular" value = "<?php echo $celular; ?>" required class="form-control" />
    </div>

    <div class="col">
    <label for="Email">Email:</label>
        <input type="email" name="email" id="email" value = "<?php echo $email; ?>" class="form-control" />
    </div>

</div>

<div class="row mb-2">


    <div class="col">
    <label for="ciudad">ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" value = "<?php echo $ciudad; ?>"class="form-control" />

    </div>

    <div class="col">
    <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" value = "<?php echo $edad; ?>"  class="form-control" />
    </div>
</div>

<div class="row mb-2">

<div class="col">
<label for="Observaciones">Observaciones:</label>
<input type="text" name="observaciones" id="Observaciones" value = "<?php echo $observaciones; ?>"class="form-control" />
</div>
</div>




  </div>

  <button class="btn btn-success" type="submit">Editar</button>

</form>

</div>

</div>





</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>


</div>
</div>




</div>
</div>    
     
<script>





</script>

    
</body>
</html>