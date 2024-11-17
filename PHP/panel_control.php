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
    <div class="contenedorbaner">
        <img src="../imagenes/parfum banner.jpeg" class="img-fluid" alt="..">
    </div>
        <!--BOTON DE AGREGAR-->
<!--###############################################################################################################################-->
    <div class="container-boton">
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
                        <form class="row g-3" action="insertar.php" method="POST"> 
                            <div class="col-md-6">
                                <label for="validationDefault01" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control"  value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault02" class="form-label">Apellido</label>
                                <input type="text" name="apellido" class="form-control" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">Nombre de usuario</label>
                                <input type="text" name="usuario" class="form-control"  value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefaultUsername" class="form-label">Correo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input type="text" name="correo" class="form-control"  aria-describedby="inputGroupPrepend2"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">Contraseña</label>
                                <input type="password" name="contrasena" class="form-control" id="validationDefault04" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault05" class="form-label">Telefono</label>
                                <input type="tel"  name="telefono" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault06" class="form-label">Género</label>
                                <div class="radio-container">
                                    <div class="radio-item">
                                        <input id="masculino" type="radio" name="genero" value="Masculino">
                                        <label for="masculino">Masculino</label>
                                    </div>
                                    <div class="radio-item">
                                        <input id="femenino" type="radio" name="genero" value="Femenino">
                                        <label for="femenino">Femenino</label>
                                    </div>
                                    <div class="radio-item">
                                        <input id="nobinario" type="radio" name="genero" value="No binario">
                                        <label for="nobinario">No binario</label>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <label for="validationDefault07" class="form-label">Tipo de perfume</label>
                                <select class="form-select" name="tipo_perfume" id="validationDefault07" required>
                                    <option selected disabled value=""></option>
                                    <option>Nicho</option>
                                    <option>Diseñador</option>
                                    <option>Árabe</option>
                                    <option>Catálogo</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Acepto las Condiciones
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>

                        </form>
                    </div>
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
                                
                                <!-- FORMULARIO CORREGIDO -->
                                <form class="row g-3" action="editar.php" method="POST"> 
                                    <!-- Campo oculto para ID -->
                                    <input type="hidden" name="id" value="<?=$row['id'] ?>">

                                    <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" value="<?=$row['nombre'] ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">Apellido</label>
                                        <input type="text" name="apellido" class="form-control" value="<?=$row['apellido'] ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault03" class="form-label">Nombre de usuario</label>
                                        <input type="text" name="usuario" class="form-control" value="<?=$row['usuario'] ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefaultUsername" class="form-label">Correo</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                            <input type="text" name="correo" class="form-control" value="<?=$row['correo'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label">Contraseña</label>
                                        <input type="password" name="contrasena" class="form-control" value="<?=$row['contrasena'] ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault05" class="form-label">Teléfono</label>
                                        <input type="tel" name="telefono" class="form-control" value="<?=$row['telefono'] ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault06" class="form-label">Género</label>
                                        <div class="radio-container">
                                            <div class="radio-item">
                                                <input id="masculino" type="radio" name="genero" value="Masculino" 
                                                    <?= $row['genero'] === 'Masculino' ? 'checked' : '' ?>>
                                                <label for="masculino">Masculino</label>
                                            </div>
                                            <div class="radio-item">
                                                <input id="femenino" type="radio" name="genero" value="Femenino" 
                                                    <?= $row['genero'] === 'Femenino' ? 'checked' : '' ?>>
                                                <label for="femenino">Femenino</label>
                                            </div>
                                            <div class="radio-item">
                                                <input id="nobinario" type="radio" name="genero" value="No binario" 
                                                    <?= $row['genero'] === 'No binario' ? 'checked' : '' ?>>
                                                <label for="nobinario">No binario</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault07" class="form-label">Tipo de perfume</label>
                                        <select class="form-select" name="tipo_perfume" id="validationDefault07" required>
                                            <option disabled>Seleccionar...</option>
                                            <option value="Nicho" <?= $row['tipo_perfume'] === 'Nicho' ? 'selected' : '' ?>>Nicho</option>
                                            <option value="Diseñador" <?= $row['tipo_perfume'] === 'Diseñador' ? 'selected' : '' ?>>Diseñador</option>
                                            <option value="Árabe" <?= $row['tipo_perfume'] === 'Árabe' ? 'selected' : '' ?>>Árabe</option>
                                            <option value="Catálogo" <?= $row['tipo_perfume'] === 'Catálogo' ? 'selected' : '' ?>>Catálogo</option>
                                        </select>
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                    </div>

                                </form>
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

    <!--Footer-->
    <div class="grid-container3">
        <footer>
            <div class="footer-texto">
                <div>
                    <h3>Terminos</h3>
                    <p>Política de privacidad</p>
                    <p>Termino y Condiciones</p>
                    <p>Etica de la sociedad</p>
                </div>
                <div>
                    <h3>Influencers</h3>
                    <p>Mr.ross</p>
                    <p>El Güey de los Perfumes</p>
                    <p>Luisito Comunica</p>
                </div>
                <div>
                    <h3>Perfumerias</h3>
                    <p>Elite Perfumes</p>
                    <p>Alisha Perfumes</p>
                    <p>Skills Perfumes</p>
                </div>
                <div class="redes-sociales">
                    <h3>Redes sociales</h3>
                    <a href="#"><img src="../imagenes/whatsapp.svg" alt="WhatsApp"></a>
                    <a href="#"><img src="../imagenes/instagram.svg" alt="Facebook"></a>
                    <a href="#"><img src="../imagenes/facebook.svg" alt="Instagram"></a>
                </div>
            </div>
        </footer>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>