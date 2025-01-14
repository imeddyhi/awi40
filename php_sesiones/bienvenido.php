<?php
session_start();

// Verificar que la sesión sea válida
if (!isset($_SESSION["valido"]) || $_SESSION["valido"] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>¡Holaa <?php echo $_SESSION["nombre"]; ?>!</h1>
    <p> <?php echo $_SESSION["question"]; ?></p>
    <a href= "cerrar.php" > Cerrar Sesión</a>
    <p>Sesión: <?php print_r($_SESSION); ?>
</body>
</html>