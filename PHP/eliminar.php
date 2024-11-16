<?php

include("conexion.php");
$con=conectarbd();

$id=$_GET['id'];

$sql="DELETE FROM clientes  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: panel_control.php");
    }
?>

<?php

