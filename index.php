<?php
// Lógica sencilla para procesar el formulario de Maximal Gym
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');

    if ($nombre === '') {
        $mensaje = 'Por favor, introduce tu nombre.';
    } else {
        $nombreSeguro = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
        $mensaje = "Hola, $nombreSeguro. Bienvenido a Maximal Gym. ¡Gracias por contactar con nosotros!";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximal Gym - Respuesta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <h1>Maximal Gym</h1>
    </header>

    <main>
        <section class="card">
            <?php if ($mensaje === ''): ?>
                <h2>No se ha enviado ningún nombre</h2>
                <p>Puedes volver al formulario para probar de nuevo.</p>
            <?php else: ?>
                <h2>Gracias por tu interés</h2>
                <p><?php echo $mensaje; ?></p>
            <?php endif; ?>

            <a class="link-volver" href="index.html">Volver al formulario</a>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> - Maximal Gym</p>
    </footer>
</body>
</html>
