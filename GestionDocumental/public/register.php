<?php
include '../config/db.php';

$registroExitoso = false; // Variable para controlar si el registro fue exitoso

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        $registroExitoso = true;
    } else {
        echo "<p class='error-message'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Contenedor del formulario */
    .form-container {
        width: 90%;
        max-width: 400px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 0 10px;
    }

    /* Título */
    h2 {
        color: #333;
        margin-bottom: 20px;
    }

    /* Campos de entrada */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
    }

    /* Botón de envío */
    input[type="submit"],
    .login-button {
        width: 100%;
        padding: 12px;
        color: #fff;
        background-color: #3498db;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 15px;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    input[type="submit"]:hover,
    .login-button:hover {
        background-color: #2980b9;
    }

    /* Mensajes de éxito y error */
    .success-message {
        color: #28a745;
        margin-bottom: 15px;
    }

    .error-message {
        color: #d9534f;
        margin-bottom: 15px;
    }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Registro de usuario</h2>

        <?php if ($registroExitoso): ?>
        <p class="success-message">Registro exitoso.</p>
        <a href="login.php" class="login-button">Iniciar sesión</a>
        <?php else: ?>
        <form method="POST" action="">
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Registrarse">
        </form>
        <?php endif; ?>
        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar aquí</a>.</p>

    </div>

</body>

</html>