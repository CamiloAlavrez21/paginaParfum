<?php

$server="localhost";
$user="root";
$pass="";
$bd="tester";

$conexion=new mysqli($server,$user,$pass,$bd);
if($conexion->connect_errno){
    die("La conexion ha fallado" . $conexion->connect_errno);
}
else{
    echo "conectado";
}

?>