<?php

include("conexion.php");
$con=conectarBaseDatos();

$id=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
   Header("Location: panel_control.php");
}
?>


