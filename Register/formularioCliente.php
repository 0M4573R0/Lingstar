<?php

  require '../Validate/database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (nombres, apellidos, contacto, email, password) VALUES (:nombres, :apellidos, :contacto, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombres', $_POST['nombres']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':contacto', $_POST['contacto']);
    $stmt->bindParam(':email', $_POST['email']);
    //$password = password_hash($_POST['password'], PASSWORD_BCRYPT); //encriptar password
    //$stmt->bindParam(':password', $password); //encriptar password
    $stmt->bindParam(':password', $_POST['password']);

    if ($stmt->execute()) {
      //$message = 'Cuenta Creada correctamente';
      echo "<script>
              alert('Usuario registrado exitosamente');
              window.location = '../Login/Login.php';
            </script>";
    } else {
      //$message = 'Lo sentimos, verifica el registro e ingresalos nuevamente';
      echo "<script>alert('Ups! ah ocurrido un error verifica e intenta nuevamente')</script>";
    }
  }
?>

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
    <link rel="stylesheet" href="../Partials/CSS/styleHeader.css">
    <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
            
        <?php require '../Partials/encabezado.php'; ?>
            
        <form action = "formularioCliente.php" method = "POST">
            <div class="titulo">
                <h1>Registro Cliente</h1>
            </div>
            <div class="formulario">
                <p>Nombres<input class="datos" type = "text" name = "nombres" placeholder = "Tu nombre"></p>
                <p>Apellidos <input class="datos" type = "text" name = "apellidos" placeholder = "Tu apellido"></p>
                <p>Número de contacto <input class="datos" type = "tel" name = "contacto" placeholder = "Tu número"></p>
                <p>Correo Electronico <input class="datos" type = "email" name = "email" placeholder = "Tu correo" require></p>
                <p>Contraseña <input class="datos" type = "password" name = "password" placeholder = "Tu contraseña" require></p>
                <p>Confirmacion de Contraseña <input class="datos" type = "password" name = "confirm_password" placeholder = "Confirma tu contraseña" require></p>
                <input class="button_validate" type = "submit" value = "Registrarse" >
            </div>
        </form>
        
    </body>
</html>