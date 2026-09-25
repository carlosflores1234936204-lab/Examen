<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claudia Dominguez Vazquez</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <?php include 'encabezado.php'; ?>

    <main class="bienvenida">

        <h1>Claudia Dominguez Vazquez</h1>

        <p>Bienvenida al espacio de desarrollo de la interfaz para Claudia Dominguez Vazquez.</p>

        <hr style="margin: 20px 0;">

        <!-- Formulario para ingresar datos -->
        <h3>Ingresar información</h3>
        <form method="POST" action="">
            <label for="mensaje">¿Qué deseas registrar o ingresar?:</label><br><br>
            <input type="text" id="mensaje" name="mensaje" required style="padding: 8px; width: 300px;" placeholder="Escribe algo aquí...">
            <br><br>
            <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">Enviar</button>
        </form>

        <br>

        <!-- Bloque de PHP para mostrar lo ingresado -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ingresado = htmlspecialchars($_POST['mensaje']);
            
            echo "<div style='margin-top: 20px; padding: 15px; background-color: #e7f4e8; border: 1px solid #c3e6cb;'>";
            echo "<strong>Lo que ingresaste es:</strong> " . $ingresado;
            echo "</div>";
        }
        ?>

    </main>

    <?php include 'pie.php'; ?>

</body>
</html>