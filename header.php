<?php
/**
 * header.php
 *
 * Encabezado genérico para temaantoniojr
 *
 * @package temaantoniojr
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( 'temaantoniojr', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header"><link rel="stylesheet" src="style.css">
    <div class="site-branding">
        <?php
        if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
        endif;
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $description; ?></p>
        <?php endif; ?>
    </div><nav class="site-navigation">
        <?php
        wp_nav_menu( array(
            'temaantoniojr/header' => 'primary-menu',
            'menu_id'        => 'primary-menu',
        ) );
        ?>
    </nav></header>