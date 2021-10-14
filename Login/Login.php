<?php

  session_start();

  if (isset($_SESSION['user_id'])) { 
    header("Location: ../Home/Cliente.php");
  }
  require '../Validate/database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (!empty($results) && $_POST['password'] == $results['password']) {
      $_SESSION['user_id'] = $results['id'];
      echo "<script>
              alert('BIENVENIDO');
              window.location = '../Home/Cliente.php';
            </script>";
        header("Location: ../Home/Cliente.php");
    } else {
        echo "<script>
                alert('Ups! ah ocurrido un error');
                alert('Usuario no registrado');
            </script>";
    }
  }
?>

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
    <link rel="stylesheet" href="../Partials/CSS/styleHeader.css">
    <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require '../Partials/encabezado.php'; ?>
    
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

    <!-- Login Cliente -->
    <div class="popup" id="popup-cliente">
        <div class="content">
            <div class="close-btn" onclick="togglePopupCliente()">
                <a href="#">X</a>
            </div>
            <h1>Cliente</h1>

            <form action="Login.php" method="POST">
                <div class="input-field">
                    <input class="datos" type="email" name="email" placeholder="Tu correo" require>
                    <input class="datos" type="password" name="password" placeholder="Tu contraseña" require>
                    <input class="second-button" type="submit" name="submit" value="Ingresar">
                </div>

                <p> ¿no estas registrato?
                    <a href="../Register/formularioCliente.php" class="validate">Registrate aquí!</a>
                </p>
            </form>
        </div>
    </div>
    

    <!-- Login Empresa -->
    <div class="popup" id="popup-Empresa">
        <div class="content">
            <div class="close-btn" onclick="togglePopupEmpresa()">
                <a href="#">X</a>
            </div>
            <h1>Empresa</h1>
    
            <form action="Login.php" method="POST">
                <div class="input-field">
                    <input class="datos" type="email" name="correo_empresa" placeholder="Tu correo" require>
                    <input class="datos" type="password" name="contraseña_empresa" placeholder="Tu contraseña" require>
                    <input class="second-button" type="submit" name="submit" value="Ingresar">
                </div>
            </form>

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
    
</body>

</html>