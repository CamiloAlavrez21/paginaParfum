<?php

include("conexion.php");
$con=conectarbd();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$nom_usuario=$_POST['nom_usuario'];



$sql="INSERT INTO clientes VALUES('NULL','$nombre','$apellido','$nom_usuario')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: panel_control.php");
}else{
}
?>

<!--
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$tipo_perfume['tipo_perfume'];

$sql="INSERT INTO alumno VALUES('$id','$nombre','$apeliido','$usuario','$correo','$contrasena','$telefono','$genero','$tipo_genero')";
-->