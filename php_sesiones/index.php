<?php
session_start();

// Credenciales de usuario
$usuario_valido = "eddy";
$password_valida = "password";

// Verificar si se han enviado las credenciales
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];

    // Verificar credenciales
    if ($nombre === $usuario_valido && $password === $password_valida) {
        $_SESSION["valido"] = true; // Variable de verificación
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
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
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
            h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }
            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 15px;
            }
            button {
                width: 100%;
                padding: 10px;
                margin-top: 20px;
                background-color: #007aff;
                border: none;
                border-radius: 15px;
                color: white;
                font-size: 16px;
                cursor: pointer;
            }
            button:hover {
                background-color: #005bb5;
            }
            .fade-in {
                animation: fadeIn 1s ease-in-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .error {
                color: red;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <?php
            $_SESSION["nombre"] = "Eduardo";
            $_SESSION["question"] = "Bienvenido ¿Cómo estás?";
        ?>
        <div class="container fade-in">
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
