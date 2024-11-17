<?php

function conectarBaseDatos(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="socialparfum";

    $connect = mysqli_connect($host,$user,$pass);

    mysqli_select_db($connect, $bd);

    return $connect;
}
?>