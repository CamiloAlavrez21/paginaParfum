<?php 
    include("conexion.php");
    $con=conectarBaseDatos();

    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($con,$sql);
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
                                            <a href="http://localhost/pagina-personal/PHP/registro.php"><button type="button" class="btn btn-primary">Crear Cuenta</button></a>
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
    
        <!--BOTON DE AGREGAR-->
<!--###############################################################################################################################-->
    <!-- BOTÓN DE ABRIR MODAL -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Agregar
    </button>

    <!-- MODAL -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar nuevo usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- FORMULARIO -->
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" required>
                        <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" required>
                        <input type="email" class="form-control mb-3" name="correo" placeholder="Correo" required>
                        <input type="password" class="form-control mb-3" name="contrasena" placeholder="Contraseña" required>
                        <input type="tel" class="form-control mb-3" name="telefono" placeholder="Teléfono" required>
                        <input type="text" class="form-control mb-3" name="genero" placeholder="Género" required>
                        <input type="text" class="form-control mb-3" name="tipo_perfume" placeholder="Tipo de Perfume" required>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--###############################################################################################################################-->

        <!--PANEL DE CONTROL-->
<!--###############################################################################################################################-->
    <div class="container-fluid">
        <table class="table" action="insertar.php" method="POST">
            <thead class="table-success table-striped" >
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>usuario</th>
                    <th>correo</th>
                    <th>contrasena</th>
                    <th>telefono</th>
                    <th>genero</th>
                    <th>tipo de perfume</th>                 
                    <th></th>
                    <th></th>

                </tr>
            </thead>

            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th><?php  echo $row['id']?></th>
                    <th><?php  echo $row['nombre']?></th>
                    <th><?php  echo $row['apellido']?></th>
                    <th><?php  echo $row['usuario']?></th>
                    <th><?php  echo $row['correo']?></th> 
                    <th><?php  echo $row['contrasena']?></th>   
                    <th><?php  echo $row['telefono']?></th>
                    <th><?php  echo $row['genero']?></th>
                    <th><?php  echo $row['tipo_perfume']?></th>
<!--###############################################################################################################################-->


                    <!--BOTON DE MODIFICAR-->
<!--###############################################################################################################################-->
                    <th>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2<?php echo $row['id']; ?>">
                        Modificar
                        </button>

                        <div class="modal fade" id="modal2<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content custom-modal-2">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modal2Label<?php echo $row['id']; ?>">Modificar usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>¿Está seguro que desea modificar al usuario con ID :<strong><?php echo $row['id']; ?></strong>?</h5>
                                <form action="editar.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$row['id'] ?>">
                                    <input type="text" name="nombre" value="<?=$row['nombre'] ?>">
                                    <input type="text" name="apellido" value="<?=$row['apellido'] ?>">
                                    <input type="text" name="usuario" value="<?=$row['usuario'] ?>">
                                    <input type="text" name="correo" value="<?=$row['correo'] ?>">
                                    <input type="text" name="contrasena" value="<?=$row['contrasena'] ?>">
                                    <input type="text" name="telefono" value="<?=$row['telefono'] ?>">
                                    <input type="text" name="genero" value="<?=$row['genero'] ?>">
                                    <input type="text" name="tipo_perfume" value="<?=$row['tipo_perfume'] ?>">

                                    <input type="submit" value="enviar">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </th>
<!--###############################################################################################################################-->



                    <!--BOTON DE ELIMINAR-->
<!--###############################################################################################################################-->
                    <th>
                        <!-- Botón para abrir el modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar<?php echo $row['id']; ?>">
                            Eliminar
                        </button>

                        <!-- Modal para confirmar la eliminación -->
                        <div class="modal fade" id="modalEliminar<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel<?php echo $row['id']; ?>">Eliminar Usuario</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>¿Está seguro que desea eliminar al usuario con ID :<strong><?php echo $row['id']; ?></strong>?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Formulario para enviar la ID al archivo eliminar.php -->
                                        <form action="eliminar.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                                </tr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>