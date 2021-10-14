<!DOCTYPE html>
<html lang="es">

<head>
    <title>LingStar</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos -->
    <link rel="shortcut icon" href="IMG/LSbW.png">
    <link rel="stylesheet" href="CSS/styleLogin.css">
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
                <li><a  href="../Home/Home.php">Home</a></li>
                <li><a href="Login.php">Reserva</a></li>
            </ul>
        </nav>
        <!-- containt -->
        <div class="banner-text">
            <h2> LINGSTAR</h2>
            <h1>Haz Tu <span>Reserva</span></h1>
            <br>
            <h3>Inicia sesión</h3>
            <br>
            <a href="#" class="button1" onclick="togglePopupCliente()">Cliente</a>
            <a href="#" class="button2" onclick="togglePopupEmpresa()">Empresa</a>
        </div>
    </header>


    <!-- Login Cliente -->
    <div class="popup" id="popup-cliente">
        <div class="content">
            <div class="close-btn" onclick="togglePopupCliente()">
                <a href="#">X</a>
            </div>
            <h1>Cliente</h1>

            <div class="input-field">
                <input class="datos" type="Email" name="correo_cliente" placeholder="Tu correo" require>
            </div>
            <div class="input-field">
                <input class="datos" type="password" name="contraseña_cliente" placeholder="Tu contraseña" require>
            </div>
            <a href="#" class="second-button" name="validarCliente">Ingresar</a>
            <p> ¿no estas registrato?
                <a href="../Register/formularioCliente.php" class="validate">Registrate aquí!</a>
            </p>
        </div>
    </div>


    <!-- Login Empresa -->
    <div class="popup" id="popup-Empresa">
        <div class="content">
            <div class="close-btn" onclick="togglePopupEmpresa()">
                <a href="#">X</a>
            </div>
            <h1>Empresa</h1>

            <div class="input-field">
                <input class="datos" type="Email" name="correo_empresa" placeholder="Tu correo">
            </div>
            <div class="input-field">
                <input class="datos" type="password" name="contraseña_empresa" placeholder="Tu contraseña">

            </div>
            <a href="#" class="second-button" name="validarEmpresa">Ingresar</a>
            <p> ¿no estas registrato?
                <a href="../Register/formularioEmpresa.php" class="validate">Registrate aquí!</a>
            </p>
        </div>
    </div>

    <!-- Funcion togglePopup -->
    <script>
        function togglePopupCliente() {
            document.getElementById("popup-cliente")
                .classList.toggle("active")
        }

        function togglePopupEmpresa() {
            document.getElementById("popup-Empresa")
                .classList.toggle("active")
        }
    </script>
    </div>
</body>

</html>