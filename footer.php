<?php
/**
 * footer.php
 *
 * Pie de página temaantoniojr
 *
 * @package temaantoniojr
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Antoniojr</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<footer>
    <div class="footer">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
        <p>Desarrollado con <a href="https://wordpress.org/">WordPress</a></p>
        <?php wp_nav_menu( array( '/footer.php' => 'footer-menu' ) );  ?>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
