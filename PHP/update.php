<?php
  include("conexion.php");
  $con=conectarBaseDatos();

  $id = $_GET['id'];
  
  $sql="SELECT * FROM usuarios WHERE id='$id'";
  $query=mysqli_query($con,$sql);
  $row = mysqli_fetch_array($query);

?>

