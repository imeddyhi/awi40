<?php
  session_start();
  session_unset();

  // Verificar que la sesión sea válida
  if (!isset($_SESSION["valido"]) || $_SESSION["valido"] !== true) {
    header("Location: index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Se ha cerrado sesión exitosamente <?php echo $_SESSION["nombre"];?></h1>
        <a href= "index.php" > Iniciar Sesión</a>
    </body>
</html>