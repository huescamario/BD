<?php 

$Nombre=$_GET['nombre'];
$Edad=$_GET['edad'];
$Carrera=$_GET['carrera'];


$conexion = mysql_connect("localhost", "root", "")or die("error de conexion");
mysql_select_db("conectar",$conexion)or die ("ERROR en la base de datos");

$sql_insertar="INSERT INTO estudiantes SET Nombre='$Nombre', Edad='$Edad', Carrera='$Carrera'";
echo "guardado correctamente";
mysql_query($sql_insertar,$conexion) or die (mysql_error());


?>







