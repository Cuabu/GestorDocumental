<!-- public/index.php -->
<?php
session_start();

// Redirige a home.php si el usuario ya ha iniciado sesión
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Documental para Colegios</title>
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Enlace al archivo CSS -->
</head>

<body>

    <!-- Incluir el encabezado -->
    <?php include '../templates/header.php'; ?>

    <!-- Contenido principal -->
    <main>
        <section>
            <h2>Bienvenido a la Plataforma de Gestión Documental para Colegios</h2>
            <p>Este sistema facilita la administración y organización de documentos para instituciones educativas.</p>
            <p>Para acceder a todas las funcionalidades, inicia sesión o regístrate si aún no tienes una cuenta.</p>

            <div>
                <a href="login.php" class="button">Iniciar sesión</a>
                <a href="register.php" class="button">Registrarse</a>
            </div>
        </section>
    </main>

    <!-- Pie de página (opcional) -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Gestión Documental para Colegios. Todos los derechos reservados.</p>
    </footer>
</body>

</html>