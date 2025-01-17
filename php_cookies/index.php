<?php
// Nombres de las cookies
$cookie_nombre = "nombre_usuario";
$cookie_valido = "valido";

// Credenciales de usuario
$usuario_valido = "eddy";
$password_valida = "password";

// Verificar si se han enviado las credenciales
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];

    // Verificar credenciales
    if ($nombre === $usuario_valido && $password === $password_valida) {
        // Configurar cookies por 1 día
        setcookie($cookie_valido, "1", time() + 5, "/");
        setcookie($cookie_nombre, $nombre, time() + 5, "/");
        setcookie("question", "Bienvenido ¿Cómo estás?", time() + 5, "/");
        header("Location: bienvenido.php");
        exit();
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        /* Estilos */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f7;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        input[type="text"], input[type="password"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 10px;
        }
        button {
            background-color: #007aff;
            color: white;
            cursor: pointer;
            border: none;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <form method="post">
            <input type="text" name="nombre" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
    </div>
</body>
</html>
