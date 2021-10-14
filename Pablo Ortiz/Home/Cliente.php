<?php
  session_start();

  require '../Validaciones/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombres, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
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
  <link rel="stylesheet" href="../Partials/CSS/styleHeader.css">
  <link rel="stylesheet" href="CSS/styleHome.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php /*require '../Partials/encabezado.php' */?>

  <header>
    <div class="header">

      <h1>Sistema de reservas</h1>
      <div class="optionsBar">
        <p>Colombia, 13/10/2021</p>
        <span>|</span>
        <span class="user">*Nombre usuario*</span>
        <a href="#"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
      </div>
    </div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li class="principal">
          <a href="#">Cuenta</a>
          <ul>
            <li><a href="#">Mi cuenta</a></li>
            <li><a href="#">Gestionar cuenta</a></li>
          </ul>
        </li>
        <li class="principal">
          <a href="#">Hoteles</a>
          <ul>
            <li><a href="#">Hoteles disponibles</a></li>
          </ul>
        </li>
        <li class="principal">
          <a href="#">Mis reservas</a>
          <ul>
            <li><a href="#">Verificar mis reservas</a></li>
            <li><a href="#">Gestionar mis reservas</a></li>
            <li><a href="#">Cancelar mis reservas</a></li>
          </ul>
        </li>
        <li class="principal">
          <a href="#">Contacto</a>
          <ul>
            <li><a href="#">Contactos hoteles</a></li>
          </ul>
        </li>
        <li class="principal">
          <a href="#">Facturas</a>
          <ul>
            <li><a href="#">Verificar factura</a></li>
            <li><a href="#">Generar factura</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <section id="container">

    <?php if(!empty($user)): ?>

    <div class="welcome">
      <h1>Bienvenido</h1>
      <h2><?= $user['nombres']; ?></h2>
      <h1>Tu acabas de iniciar sesion como Cliente</h1>
      <div class="devolver">
        <a href="logout.php">Cerrar Sesion</a>
      </div>
      <?php else: ?>
      <div class="devolver">
        <h1>Acabas de cerrar Sesion</h1>
        <a href="../Login/Login.php">Vuelve a iniciar sesion</a>
      </div>
    </div>

    <?php endif; ?>
  </section>
</body>

</html>