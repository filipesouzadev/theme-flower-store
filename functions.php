<?php 
    add_action( 'wp_enqueue_scripts', 'flowers_enqueue_styles' );
    
    function flowers_enqueue_styles(){
        wp_enqueue_style( 'theme-flower-store', get_stylesheet_uri() );

        wp_enqueue_style(
            'theme-flowes-store-styles',
            get_stylesheet_directory_uri() . '/assets/css/style.css',
            [],
            filemtime(get_stylesheet_directory() . '/assets/css/style.css')
        );
    }


?>