<?php
// Nombres de las cookies
$cookie_nombre = "nombre_usuario";
$cookie_valido = "valido";
$cookie_question = "question";

// Verificar que las cookies estén configuradas correctamente
if (!isset($_COOKIE[$cookie_valido]) || $_COOKIE[$cookie_valido] !== "1") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h1>¡Hola <?php echo htmlspecialchars($_COOKIE[$cookie_nombre]); ?>!</h1>
    <p><?php echo htmlspecialchars($_COOKIE[$cookie_question]); ?></p>
    <a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>
