<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM alumno  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: panel_control.php");
    }
?>