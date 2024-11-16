<?php
include("conexion.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../CSS/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

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
                    <a class="nav-link" href="http://127.0.0.1:5500/HTML/login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
            </ul>
        </div>
    
    </nav>

    <!--Formulario de registro-->
    <div class="container">
        
        <form action="insertar.php" class="row g-3"> 
            <button type="button" class="btn btn-primary">Registro</button>
            <div class="col-md-6">
                <label for="validationDefault01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationDefault01" value="" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationDefault02" value="" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="validationDefault03" value="" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefaultUsername" class="form-label">Correo</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                        required>
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationDefault04" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="validationDefault04" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault05" class="form-label">Telefono</label>
                <input type="tel" class="form-control" id="validationDefault05" required>
            </div>

            <div class="col-md-4">
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
            
            <div class="col-md-4">
                <label for="validationDefault07" class="form-label">Tipo de perfume</label>
                <select class="form-select" id="validationDefault07" required>
                    <option selected disabled value=""></option>
                    <option>Nicho</option>
                    <option>Diseñador</option>
                    <option>Árabe</option>
                    <option>Catálogo</option>
                </select>
            </div>
            
            <div class="col-md-4">
                <label for="validationDefault08" class="form-label">Preferencia de Perfume</label>
                <div class="checkbox-container">
                    <div class="checkbox-item">
                        <input id="fresco" type="checkbox" name="frescos">
                        <label for="fresco">Fresco</label>
                    </div>
                    <div class="checkbox-item">
                        <input id="fiestas" type="checkbox" name="para fiestas">
                        <label for="fiestas">Para fiestas</label>
                    </div>
                    <div class="checkbox-item">
                        <input id="citas" type="checkbox" name="para citas">
                        <label for="citas">Para citas</label>
                    </div>
                    <div class="checkbox-item">
                        <input id="elegantes" type="checkbox" name="elegantes">
                        <label for="elegantes">Elegantes</label>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Acepto las Condiciones
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrarme</button>
            </div>

        </form>
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
    <div class="grid-container4">
        <div class="footer-copy">
            <p>&copy; 2024 Social de Parfum</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>