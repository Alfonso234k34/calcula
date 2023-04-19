<?php
   //En esta parte se realiza la conexion a la base de datos 
   $server   = "localhost";
   $username = "root";
   $password = '';
   $db2       = 'proyecto';
   $con2      = mysqli_connect($server, $username, $password, $db2);
   header("Content-Type: text/html;charset=utf-8");
   $acentos = $con2->query("SET NAMES 'utf8'");
   //se realiza la consulta de la tabla de datos por medio de un select
   $sql='SELECT * FROM usuarios';
   $resultado= $con2->query($sql);
?>