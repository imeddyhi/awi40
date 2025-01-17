<?php
// Nombres de las cookies
$cookie_nombre = "nombre_usuario";
$cookie_valido = "valido";
$cookie_question = "question";

// Eliminar cookies configurándolas con un tiempo expirado
setcookie($cookie_valido, "", time() - 3600, "/");
setcookie($cookie_nombre, "", time() - 3600, "/");
setcookie($cookie_question, "", time() - 3600, "/");

// Redirigir al inicio de sesión
header("Location: index.php");
exit();
?>
