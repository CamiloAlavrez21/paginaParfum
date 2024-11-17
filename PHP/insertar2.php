<?php

include("conexion.php");
$con=conectarBaseDatos();

$id=null;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$tipo_perfume=$_POST['tipo_perfume'];

$sql="INSERT INTO usuarios VALUES('$id','$nombre','$apellido','$usuario','$correo','$contrasena','$telefono','$genero','$tipo_perfume')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location:index.php");
}else{
}
?>