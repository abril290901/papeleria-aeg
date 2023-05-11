<? php

$conectar = mysqli_connect('localhost','root','', 'papeleria');

    if(!$conectar){
        echo "No conectado";
    }


    $correo = $_POST['correo'];
    $password = $_POST['password'];
 
    $sql = "INSERT INTO sesion('correo', 'password') VALUES ('$correo', '$password')";

    $ejecutar = mysqli_query($conectar, $sql);

    if(!$ejecutar){
        echo "Hay algun error";
    }else{
        echo "Datos almacenados correctamente";
    }
?>