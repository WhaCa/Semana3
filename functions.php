<?php


function temaantoniojr_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('temaantoniojr', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'temaantoniojr_enqueue_scripts');


function temaantoniojr_widgets_init() {
    register_sidebar(array(
        'name'          => __('Barra lateral principal', 'temaantoniojr'),
        'id'            => 'sidebar-1',
        'description'   => __('Agrega widgets aquí.', 'temaantoniojr'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Pie de página', 'temaantoniojr'),
        'id'            => 'footer-1',
        'description'   => __('Agrega widgets aquí.', 'temaantoniojr'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'temaantoniojr_widgets_init');


function temaantoniojr_create_post_type() {
    register_post_type('event',
        array(
            'labels' => array(
                'name' => __('Eventos', 'temaantoniojr'),
                'singular_name' => __('Evento', 'temaantoniojr')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
add_action('init', 'temaantoniojr_create_post_type');


function temaantoniojr_create_taxonomy() {
    register_taxonomy(
        'event_category',
        'event',
        array(
            'label' => __('Categorías de eventos', 'temaantoniojr'),
            'rewrite' => array('slug' => 'event-category'),
            'hierarchical' => true,
        )
    );
}