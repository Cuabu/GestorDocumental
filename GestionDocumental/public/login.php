<?php
include '../config/db.php';
session_start();

$error = ""; // Variable para controlar los mensajes de error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header("Location: home.php");
            exit;
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "No se encontró el usuario.";
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
    <title>Iniciar sesión</title>
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
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        color: #fff;
        background-color: #3498db;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 15px;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    /* Mensaje de error */
    .error-message {
        color: #d9534f;
        margin-bottom: 15px;
    }

    /* Enlace de registro */
    p {
        color: #555;
        margin-top: 15px;
    }

    p a {
        color: #3498db;
        text-decoration: none;
    }

    p a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Iniciar sesión</h2>

        <?php if (!empty($error)): ?>
        <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Iniciar sesión">
        </form>

        <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a>.</p>
    </div>

</body>

</html>