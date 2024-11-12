<?php

include '../config/db.php';
include '../config/db.php';
session_start();

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
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No se encontró el usuario.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>

<body>
    <h2>Iniciar sesión</h2>
    <form method="POST" action="">
        <label>Nombre de usuario:</label><br>
        <input type="text" name="username" required><br>
        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a>.</p>
</body>

</html>