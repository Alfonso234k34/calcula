<?php 
if (isset($_GET['id'])){
	$id=$_GET['id'];
	//Consulta a la base de datos
	include('conexion.php');
	//se realiza la consulta del usuario por el id
	$sql='SELECT * FROM usuarios WHERE id='.$id;
   $resultado= $con2->query($sql);

   $resultado=mysqli_fetch_assoc($resultado);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDITAR USUARIOS</title>
	<!-- Se tiene el link de bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<!-- Se tiene el estilo de los label -->
	<style>
		label{
				  display: inline-block;
				  width: 90px;
	   		 }
	</style>
</head>
<!-- Es el estilo de body-->
<body style="max-width: 60%; margin: auto; padding: 15px;">
	<br>
	<h1 style="text-align: center;">EDITAR DATOS DEL USUARIO</h1>
	<br>
	<br>
	
<form action="editar.php" method="POST">
	<!-- Es para editar los campos de cada uno -->
	<div>
	  <div>
	    <div class="col">
	    			<!-- Es el id que se tiene oculto para podder llenar los demas campos -->
	    			<input type="text" hidden name="id" value="<?php echo $resultado['id'] ?>">
	      			<!-- Se consulta cada uno de los campos y que campo se tiene de consulta-->
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" required value="<?php echo $resultado['nombre']; ?>"><br><br>

					<label for="ap1">Apellido Paterno</label>
					<input type="text" name="ap1" id="ap1" required value="<?php echo $resultado['ap1']; ?>"><br><br>

					<label for="ap2">Apellido Materno</label>
					<input type="text" name="ap2" id="ap2" required value="<?php echo $resultado['ap2']; ?>"><br><br>

					<label for="edad">Edad</label>
					<input type="number" name="edad" id="edad" required value="<?php echo $resultado['edad']; ?>"><br><br>
	    </div>
	    <div class="col">
		      <p>Fecha
		      	<!-- se tiene la fecha -->
		      	
			    <?php
					date('');
					$fecha_actual = date("Y-m-d");
					
					 ?>
	    			<input type="date" name="fechaNacimiento" id="fechaNacimiento" class="box" required value="<?php echo $resultado['fechaNacimiento']; ?>"></p>

					<label for="linkRedes">Link Redes</label>
					<input type="text" name="linkRedes" id="linkRedes" value="<?php echo $resultado['linkRedes']; ?>"><br><br>

					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="<?php echo $resultado['email']; ?>"><br><br>

					<label for="telefono">Telefono</label>
					<input type="number" name="telefono" id="telefono" value="<?php echo $resultado['telefono']; ?>"><br><br>
	    </div>
	  	<button type="submit" class="btn btn-primary">GUARDAR DATOS</button><br><br>
	  </div>
	</div>
</form>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>