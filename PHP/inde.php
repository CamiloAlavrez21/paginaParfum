<?php
include('conexion.php');

$con=conectarBaseDatos();

$sql="SELECT * FROM usuarios";
$query = mysqli_query($con,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="insertar.php" method="POST">
            <h1>Crear usuario</h1>
            
            <input type="text" name="nombre" placeholder="nombre">
            <input type="text" name="apellido" placeholder="apellido">
            <input type="text" name="usuario" placeholder="usuario">
            <input type="text" name="correo" placeholder="correo">
            <input type="text" name="contrasena" placeholder="contrasena">
            <input type="text" name="telefono" placeholder="telefono">
            <input type="text" name="genero" placeholder="genero">
            <input type="text" name="tipo_perfume" placeholder="tipo_perfume">

            <input type="submit" value="enviar">
        </form>
    </div>
    <div>
        <h2>Ususarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Ususario</th>
                    <th>correo</th>
                    <th>Contraseña</th>
                    <th>Telefono</th>
                    <th>genero</th>
                    <th>Tipo de perfume</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  while($row=mysqli_fetch_array($query)): ?>
                <tr>

                    <th> <?=$row['id']?> </th>
                    <th><?=$row['nombre']?></th>
                    <th><?=$row['apellido']?></th>
                    <th><?=$row['usuario']?></th>
                    <th><?=$row['correo']?></th>
                    <th><?=$row['contrasena']?></th>
                    <th><?=$row['telefono']?></th>
                    <th><?=$row['genero']?></th>
                    <th><?=$row['tipo_perfume']?></th>

                    <th><a href="modificar.php?id=<?=$row['id']?>">Editar</a></th>
                    <th><a href="eliminar.php?id=<?=$row['id']?>">Elimnar</a></th>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</body>
</html>