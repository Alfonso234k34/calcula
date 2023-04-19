<?php
  //se realiza la conexion a la base de datos
   include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROYECTO</title>
  <!-- Se tiene le link de bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body style="max-width: 98%; margin: auto;">
  <br>
  <h1 style="text-align: center;">USUARIOS REGISTRADOS</h1>
  <button style="align-items: center;" type="button" class="btn btn-dark" onclick="agregar()" >Agregar nuevo usuario</button><br><br>
  <!-- Se realiza la tabla -->
  <table class="table" style="text-align: center;">
   <thead class="table-dark">
      <tr>
        <!-- Se coloca en la tabla la parte de arriba que se presentara -->
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Edad</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Link Redes</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Opciones</th>
      </tr>
   </thead>
    <tbody>
      <?php 
      foreach ($resultado as $r) { ?>
         <!-- se realiza la busqueda y se obtiene los resultados-->
        <tr>
          <!--se consulta pero cada una de los campos se pone en cada una de los e´spacios de la tabla-->
      
          <td><?php echo $r['id'];?></td>
          <td><?php echo $r['nombre'];?></td>
          <td><?php echo $r['ap1'];?></td>
          <td><?php echo $r['ap2'];?></td>
          <td><?php echo $r['edad'];?></td>
          <td><?php echo $r['fechaNacimiento'];?></td>
          <td><?php echo $r['linkRedes'];?></td>
          <td><?php echo $r['email'];?></td>
          <td><?php echo $r['telefono'];?></td>
          <td> 
            <!-- se tiene los botones de editar y eliminar depende de la opcion que se tiene -->
         
            <a href=" <?php echo 'editUser.php?id='.$r['id']; ?>" class="btn btn-primary">EDITAR</a>
            <button type="button" class="btn btn-danger" onclick="eliminar(<?php echo $r['id']; ?>)">ELIMINAR</button>
          </td>

        </tr>
      <?php } ?>
     
    </tbody>
  </table>

<script>
  function agregar() {
    window.location.replace('addUser.php');
    //se realiza la funcion pata agregar un nuevo usuario al dar click
  }

  function eliminar(id){
    //se realiza una funcion para eliminar pero con la ayuda del id 
    var confirmacion = confirm("¿Esta seguro?");
    //mensaje de confirmacion de la eliminacion si realizarlo o no
    if(confirmacion==true){
      //si se confirma se redirigue y se envia el id
      window.location.replace('deleteUser.php?id='+id);
    }
    }
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>