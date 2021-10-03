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
    
    <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require '../Partials/encabezado.php' ?>
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

</body>
</html>