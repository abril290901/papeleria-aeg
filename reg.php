<?php
$username="root";  
$clave="";  
$hostname = "localhost"; 
$db = "papeleria"; 

$enlace = mysqli_connect($hostname, $username, $clave,$db) or die("No se encuentra el servidor");

$db = mysqli_select_db($enlace,"papeleria") or die("<h2>Error de conexion</h2>");


if(isset($_POST["enviar"])){

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$genero = $_POST["genero"];

$insertarDatos = "INSERT INTO registro VALUES('','$nombre','$correo','$password', '$genero')";

$ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);



      //$req = (strlen($nombre)*strlen($correo)*strlen($contrasena)*strlen($genero)) or die ("No se han llenado todos los campos");

    //mysql_query("INSERT INTO registro ('nombre','correo','contrasena', 'genero' ) VALUES ('$nombre','$correo','$contrasena','$genero')",$enlace) or die("<h2>Error Guardando los datos</h2>");
    
if(!$ejecutarInsertar){
    echo"huvo un error";

}else{

    echo"Datos Guardados correctamente";

}


}

?>