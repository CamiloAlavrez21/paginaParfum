<?php
include("conexion.php");
$con=conectarBaseDatos();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql = "UPDATE usuarios SET contrasena='$contrasena' WHERE usuario='$usuario'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:index.php?success=6");
}else{
}
?>