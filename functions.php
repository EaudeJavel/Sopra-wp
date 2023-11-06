<?php

    // Register styles to theme
    function sopra_register_styles() {

        wp_enqueue_style( 'sopra-wp', get_template_directory_uri(  ) . "/style.css" , array(), '1.0' );
        wp_enqueue_style( 'fullpage-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.css', array(), '4.0.20' );

    };

    add_action(  'wp_enqueue_scripts', 'sopra_register_styles', 10 );


    // Register scripts
    function sopra_register_scripts() {

        wp_enqueue_script( 'fullpage-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.js', array(), '4.0.20', true );
        wp_enqueue_script( 'sopra-wp', get_template_directory_uri(  ) . "/assets/js/main.js", array(), '1.0', true );

    };

    add_action( 'wp_enqueue_scripts', 'sopra_register_scripts', 10 );

    function sopra_theme_setup() {
        // Support for Custom Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

    }

    add_action( 'after_setup_theme', 'sopra_theme_setup', 0 );


    // Registers a menu with the name "Primary Menu" that can be used with wp_nav_menu().
    function sopra_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'sopra' ),
        ) );
    };

    add_action( 'after_setup_theme', 'sopra_register_nav_menu', 0 );


    // Deactivate admin bar
    add_filter('show_admin_bar', '__return_false');



?>