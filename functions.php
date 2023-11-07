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

    //  Register a new video so we can use it in the missions page
    function register_video_post_type() {
    $labels = array(
        'name'                  => _x('Videos', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Video', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Videos', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Video', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Video', 'textdomain'),
        'new_item'              => __('New Video', 'textdomain'),
        'edit_item'             => __('Edit Video', 'textdomain'),
        'view_item'             => __('View Video', 'textdomain'),
        'all_items'             => __('All Videos', 'textdomain'),
        'search_items'          => __('Search Videos', 'textdomain'),
        'parent_item_colon'     => __('Parent Videos:', 'textdomain'),
        'not_found'             => __('No videos found.', 'textdomain'),
        'not_found_in_trash'    => __('No videos found in Trash.', 'textdomain'),
        'featured_image'        => _x('Video Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Video archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into video', 'Overrides the “Insert into post”/“Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this video', 'Overrides the “Uploaded to this post”/“Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter videos list', 'Screen reader text for the filter links heading on the post type listing screen. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Videos list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Videos list', 'Screen reader text for the items list heading on the post type listing screen. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'video'),
        'capability_type'    => 'post',
        'taxonomies'         => array('category'),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('video', $args);
}

add_action('init', 'register_video_post_type');

?>