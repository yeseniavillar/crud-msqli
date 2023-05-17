<?php
$id = $_GET['id'];
include "config/bd.php";
$datos = ListarunAlumno($id);
$nombre = $datos['nombre'];
$email = $datos['email'];
$foto = $datos['foto'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Mariano</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   <div class="container mt-5 bg-light">
    <div class= "w-50 m-auto p-5">
            <h3 class="text-center"><?=$nombre?></h3>
            <p class="text-center"><strong>Correo : </strong> <?=$email?></p>
           <center> <img src="data:image/jpg;base64,<?=base64_encode($foto) ?>" ></center>  
    </div>
</div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>