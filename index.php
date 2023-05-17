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
   <div class="container mt-5">
    <div class="row">
        <div class="col-3">
           <form action="acciones/insertar.php" method='POST' enctype='multipart/form-data'>
               <h3 class='text-center'>REGISTRAR UN ALUMNO</h3>
            <label for="">Nombre del alumno</label>
            <input class='form-control' type="text" name='nombre'>

            <label for="">Correo del alumno</label>
            <input class='form-control' type="email" name='email'>

            <label for="">Foto del alumno</label>
            <input class='form-control' type="file" name='foto'>
            <button class="btn btn-success mt-3 p-2" type='submit'> Registrar </button>
           </form>
        </div>
        <div class="col-9">
            <h2>Lista de Alumnos</h2>
       <table class="table">
          <thead class="bg-success">
           <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">Fotos</th>
          <th scope="col">Acciones</th>
         </tr>
        </thead>
  <tbody>
    <?php 
         include "config/bd.php";
         $query = listar();
         $enumeracion = 0;
         while($datos = mysqli_fetch_assoc($query)){
               $enumeracion++;
               $id = $datos['id'];
               $nombre = $datos['nombre'];
               $email = $datos['email'];
               $foto = $datos['foto'];
         
    ?>
    <tr>
      <th scope="row"><?=  $enumeracion ?> </th>
      <td><?=  $nombre ?> </td>
      <td><?=  $email ?></td>
      <td><img style='max-height:50px' src="data:image/jpg;base64,<?=  base64_encode($foto) ?>"></td>
      <td>
        <a class="btn btn-success" href="ver.php?id=<?=$id?>"><i class='bx bx-show'></i></a>
        <a class="btn btn-warning" href="editar.php?id=<?=$id?>"><i class='bx bx-edit'></i></a>
        <a class="btn btn-danger" href="acciones/eliminar.php?id=<?=$id?>"> <i class='bx bxs-trash-alt'></i></a>
      </td>
    </tr>
    <?php
      }
    ?>
</tbody>
</table>
        </div>
    </div>
   </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>