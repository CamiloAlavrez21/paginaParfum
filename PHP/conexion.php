<?php
function conectarbd(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="intento1";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>