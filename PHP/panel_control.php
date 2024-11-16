
<?php 
    include("conexion.php");
    $con=conectarbd();

    $sql="SELECT *  FROM clientes";
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
    
    <!--BOTONAgregar-->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Agregar
    </button>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar nuevo usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="insertar.php" method="POST">
                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido">
                <input type="text" class="form-control mb-3" name="nom_usuario" placeholder="nom_usuario">

                <input type="submit" class="btn btn-primary">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
        </div>
        </div>
    </div>
    </div>


    <!--    Panel de control    -->
    <div class="container-fluid">
        <table class="table" action="insertar.php" method="POST">
            <thead class="table-success table-striped" >
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>nombre de usuario</th>
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
                    <th><?php  echo $row['nom_usuario']?></th>    

                    <!--BOTON DE MODIFICAR-->
                    <th>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                        Modificar
                        </button>

                        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content custom-modal-2">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modal2Label">Modificar usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </th>


                    <!--BOTON DE ELIMINAR-->
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
                                    <!-- Mensaje de confirmación con la ID del usuario -->
                                    ¿Está seguro que desea eliminar al usuario con ID <strong><?php echo $row['id']; ?></strong>?
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