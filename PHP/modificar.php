<?php
  include("conexion.php");
  $con=conectar();

  $id = $_GET['id'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $nom_usuario=$_POST['nom_usuario'];
  
  $sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', nom_usuario='$nom_usuario' WHERE id='$id' ";

  $query=mysqli_query($con,$sql);

  if($query){
      Header("Location: panel_control.php");
  }
?>
