<?php 
	//Se realiza primerp la conexion a la base de datos
	include('conexion.php');
	//Se recupera por el metodo GET el id del usuario 
	$id=$_GET['id'];	
	//Se realiza el delete del usuario con la condicion de que solo elimine el ide de ese usuario 
	$sql="DELETE FROM usuarios WHERE id=$id";


	if (mysqli_query($con2,$sql)) {
		//Si se realiza una conexion y una eliminacion correcta 
		//Eliminacion exitosa
		header("Location: index.php");
	}else{
		//No se pudo eliminar algo paso 
		echo "No se pudo eliminar";
	}
 ?>