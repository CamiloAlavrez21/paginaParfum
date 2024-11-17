<?php

include("conexion.php");
$con=conectarBaseDatos();

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
                            <a class="nav-link" aria-current="page" href="http://localhost/pagina-personal/PHP/index.php">Home</a>
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
                            <a class="nav-link active" href="http://localhost/pagina-personal/PHP/panel_control.php">Panel de control</a>
                        </li>
                    </ul>
                </div>

        </nav>
    <!--BANNER-->
    <div class="contenedorbaner">
        <img src="../imagenes/PANEL DE CONTROL.png" class="img-fluid" alt="..">
    </div>

        
    <div class="d-flex justify-content-between mb-3">
        <!-- Volver -->
        <a href="panel_control.php" class="btn btn-primary">
            panel de control
        </a>

        <!--Buscador-->
        <form method="POST" class="mb-3">
            <div class="input-group">
                <input type="text" name="buscar" class="form-control" placeholder="Buscar por nombre o apellido" required>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>

    <!-- Tabla con resultados de búsqueda -->
    <table class="table">
        <thead class="table-dark">
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $buscar = $_POST['buscar'];

                    $sql = "SELECT id, nombre, apellido, usuario, correo, contrasena, telefono, genero, tipo_perfume 
                            FROM usuarios 
                            WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' 
                            ORDER BY id DESC";
                    $query = mysqli_query($con, $sql);

                    if ($query) {
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['apellido']; ?></td>
                                    <td><?php echo $row['usuario']; ?></td>
                                    <td><?php echo $row['correo']; ?></td>
                                    <td><?php echo $row['contrasena']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['genero']; ?></td>
                                    <td><?php echo $row['tipo_perfume']; ?></td>
                                    <td>
                                        <!-- Botone Modificar -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2<?php echo $row['id']; ?>">
                                            Modificar
                                        </button>
                                        
                                        <div class="modal fade" id="modal2<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="modal2Label<?php echo $row['id']; ?>">Modificar usuario</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row g-3" action="editar.php" method="POST">
                                                            
                                                            
                                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                                            <div class="col-md-6">
                                                                <label for="nombre" class="form-label">Nombre</label>
                                                                <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="apellido" class="form-label">Apellido</label>
                                                                <input type="text" name="apellido" class="form-control" value="<?php echo $row['apellido']; ?>" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="usuario" class="form-label">Nombre de usuario</label>
                                                                <input type="text" name="usuario" class="form-control" value="<?php echo $row['usuario']; ?>" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="correo" class="form-label">Correo</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                                    <input type="email" name="correo" class="form-control" value="<?php echo $row['correo']; ?>" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="contrasena" class="form-label">Contraseña</label>
                                                                <input type="password" name="contrasena" class="form-control" value="<?php echo $row['contrasena']; ?>" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="telefono" class="form-label">Teléfono</label>
                                                                <input type="tel" name="telefono" class="form-control" required pattern="^\d+$" title="Solo se permiten Numeros" value="<?php echo $row['telefono']; ?>" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="genero" class="form-label">Género</label>
                                                                <div class="radio-container">
                                                                    <div class="radio-item">
                                                                        <input id="masculino" type="radio" name="genero" value="Masculino" 
                                                                            <?php echo $row['genero'] === 'Masculino' ? 'checked' : ''; ?>>
                                                                        <label for="masculino">Masculino</label>
                                                                    </div>
                                                                    <div class="radio-item">
                                                                        <input id="femenino" type="radio" name="genero" value="Femenino" 
                                                                            <?php echo $row['genero'] === 'Femenino' ? 'checked' : ''; ?>>
                                                                        <label for="femenino">Femenino</label>
                                                                    </div>
                                                                    <div class="radio-item">
                                                                        <input id="nobinario" type="radio" name="genero" value="No binario" 
                                                                            <?php echo $row['genero'] === 'No binario' ? 'checked' : ''; ?>>
                                                                        <label for="nobinario">No binario</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="tipo_perfume" class="form-label">Tipo de perfume</label>
                                                                <select class="form-select" name="tipo_perfume" required>
                                                                    <option value="Nicho" <?php echo $row['tipo_perfume'] === 'Nicho' ? 'selected' : ''; ?>>Nicho</option>
                                                                    <option value="Diseñador" <?php echo $row['tipo_perfume'] === 'Diseñador' ? 'selected' : ''; ?>>Diseñador</option>
                                                                    <option value="Árabe" <?php echo $row['tipo_perfume'] === 'Árabe' ? 'selected' : ''; ?>>Árabe</option>
                                                                    <option value="Catálogo" <?php echo $row['tipo_perfume'] === 'Catálogo' ? 'selected' : ''; ?>>Catálogo</option>
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
                                        <!-- Botón de eliminar -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar<?php echo $row['id']; ?>">
                                            Eliminar
                                        </button>
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
                                                        <form action="eliminar.php" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='10'>No se encontraron resultados.</td></tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='10'>Realiza una búsqueda.</td></tr>";
                }
            ?>
        </tbody>
    </table>


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