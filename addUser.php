 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Registro de Nuevo usuario</title>
   <!-- Es el link de bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   <!-- Es el estilo de label-->
   <style>
      label{
              display: inline-block;
              width: 90px;
           }
   </style>

 </head>
 <!-- Es el estilo del body-->
<body style="max-width: 60%; margin: auto; padding: 15px;">

   <br>
   <!-- Es el estilo del titulo-->
   <h1 style="text-align: center;">AGREGAR NUEVO USUARIO</h1><br><br>
   
<form action="SaveUsuarios.php" method="POST">
   <div class="container text-center">
     <div class="row align-items-start">
       <div class="col">
               <!-- Es la tabla los campos que se tienen-->
               <label for="nombre">Nombre</label>
               <input type="text" name="nombre" id="nombre" required>
               <br><br>
               <label for="ap1">Apellido Paterno</label>
               <input type="text" name="ap1" id="ap1" required>
               <br><br>
               <label for="ap2">Apellido Materno</label>
               <input type="text" name="ap2" id="ap2" required>
               <br><br>
               <label for="edad">Edad</label>
               <input type="number" name="edad" id="edad" required>
               <br><br>
       </div>
       <div class="col">
            <p>Fecha
            <!-- Es para selecionar la fecha-->   
             <?php
                     date('');
                     $fecha_actual = date("Y-m-d");
             ?>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="box" required></p>

               <label for="linkRedes">Link Redes</label>
               <input type="text" name="linkRedes" id="linkRedes"><br><br>

               <label for="email">Email</label>
               <input type="email" name="email" id="email"><br><br>

               <label for="telefono">Telefono</label>
               <input type="number" name="telefono" id="telefono"><br><br>
      
       </div>
      <button type="submit" class="btn btn-primary">Agregar Usuario</button><br><br>
     </div>
   </div>
</form>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>