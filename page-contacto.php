<?php get_header();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel=stylesheet href="/style.css">
</head>
<body>
<h1>Contacto</h1>
<form class="formulario" action="procesar_contacto.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Correo Electrónico:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>
<?php get_footer();
?>