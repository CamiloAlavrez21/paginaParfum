<?php
include("conexion.php");
$con = conectarBaseDatos();
session_start();

// Verificar si los datos fueron enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Validar las credenciales (esto es un ejemplo básico)
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Iniciar la sesión con el usuario encontrado
        $_SESSION['usuario'] = $usuario;

        // Redirigir a la página principal con un mensaje de éxito
        header("Location: index.php?success=5");
    } else {
        // Redirigir con un mensaje de error
        header("Location: index.php?success=0");
    }
}
?>
