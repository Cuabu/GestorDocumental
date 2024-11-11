<!-- templates/header.php -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Documental para Colegios</title>
    <!-- Enlace a un archivo CSS (ajusta la ruta según tu estructura) -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Inicio</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="logout.php">Cerrar sesión</a></li>
                <?php else: ?>
                    <li><a href="login.php">Iniciar sesión</a></li>
                    <li><a href="register.php">Registrarse</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <h1>Bienvenido a Gestión Documental para Colegios</h1>
    </header>
    <main>
