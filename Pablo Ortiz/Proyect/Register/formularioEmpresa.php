<!DOCTYPE html>
<html lang='es'>
    <head>
    <title>Lingstar</title>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- Estilos -->
    <link rel="shortcut icon" href="IMG/LSbW.png">
    <link rel="stylesheet" href="CSS/styleRegister.css">
    <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <header>
            <nav>
                <div>
                    <img src="IMG/LogocutWwithoutback.png" class="logo">
                </div>
                <input type="checkbox" id="check">
                <label for="check" class="bar-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul class="nav-menu">
                    <li><a href="../Home/Home.php">Home</a></li>
                    <li><a href="../Login/Login.php">Reserva</a></li>
                </ul>
            </nav>
            
            <?php
            session_start();
            ?>

            <form action = "principal.php" method = "POST">
                <div class="titulo">
                    <h1>Registro Empresa</h1>
                </div>
                <div class="formulario">
                    <p>Cargo<input class="datos" type = "text" name = "nombre" placeholder = "Tu cargo"></p>
                    <p>Nombres<input class="datos" type = "text" name = "nombre" placeholder = "Tu nombre"></p>
                    <p>Apellidos <input class="datos" type = "text" name = "apellido" placeholder = "Tu apellido"></p>
                    <p>Número de contacto <input class="datos" type = "text" name = "telefono" placeholder = "Tu número"></p>
                    <p>Correo Electronico <input class="datos" type = "email" name = "correo" placeholder = "Tu correo"></p>
                    <p>Contraseña <input class="datos" type = "password" name = "contraseña" placeholder = "Tu contraseña"></p>
                    <input class="button_validate" type = "submit" name = "guardar" value = "Registrarse">
                </div>
            </form>
        </header>
        
    </body>
</html>