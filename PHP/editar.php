<?php
include("conexion.php");
$con=conectarBaseDatos();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$tipo_perfume=$_POST['tipo_perfume'];

$sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',usuario='$usuario',correo='$correo',contrasena='$contrasena',telefono='$telefono',genero='$genero',tipo_perfume='$tipo_perfume' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:panel_control.php?success=2");
}else{
}
?>
