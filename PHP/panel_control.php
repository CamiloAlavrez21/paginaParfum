<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="../CSS/panel_control.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!--    Navegador   -->
    
        <nav class="navbar navbar-expand-lg navbar-custom">
                <a class="navbar-brand" href="#">Social de Parfum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/HTML/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- Login -->
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Logeo de Cuenta</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-flui">
                                                <h3>!Inicia Secion para poder participar en nuestra comunidad!</h3>
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                                    </div>
                                                    <button type="button" class="btn btn-primary">enviar</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">salir</button>
                                            <a href="http://127.0.0.1:5500/HTML/registro.html"><button type="button" class="btn btn-primary">Crear Cuenta</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panel de control</a>
                        </li>
                    </ul>
                </div>
        </nav>
    <!--    Panel de control    -->
    <div class="container-fluid">
        
    </div>

</body>
</html>