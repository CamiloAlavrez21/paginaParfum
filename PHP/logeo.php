<?php

include("conexion.php");
$con=conectarBaseDatos();
session_start();

if (!empty($_POST)){
    $usuario = mysqli_real_escape_string($con,$_POST['usuario']);
    $contrasena = mysqli_real_escape_string($con,$_POST['contrasena']);
    $sql = "SELECT id FROM usuarios WHERE usuario ='$usuario' AND contrasena = '$contrasena'";

    $resultado = $con->query($sql);
    $rows=$resultado->num_rows;
    if($rows > 0){
        $row = $resultado->fetch_assoc;
        $_SESSION['id_usuario']=$row["idusuario"];
        header("Location:index.php?success=5");
        exit;
    }else {
        echo "Usuario o contraseña incorrectos.";
    }
}

?>
