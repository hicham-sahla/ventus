<?php function create_projects_cpt() {
    $labels = array(
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('projects', $args);
}

add_action('init', 'create_projects_cpt'); 

// Enqueue scripts

function ventus_enqueue_styles() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ventus_enqueue_styles');















?>


