<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "papeleria";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$sexo=$_POST['sexo'];

$sql="INSERT INTO registro VALUES ('$nombre','$correo','$password','$sexo')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
echo"Hubo un error";

}else{
   echo"Datos guardados correctamente"," <a href='inicio_sesion.html'>Volver</a>";

}

?>