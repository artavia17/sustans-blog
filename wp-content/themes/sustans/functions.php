<?php

    // Imports Javascript and CSS

    include( get_stylesheet_directory() . '/includes/enqueue/css.php' );
    include( get_stylesheet_directory() . '/includes/enqueue/javascript.php' );

    // Menu items
    function theme_register_menus(){

        register_nav_menus(
            array(
                'primary-menu' => __('Header menú', 'Sustans Blog')
            )
        );

    }

    add_action('init', 'theme_register_menus');

    
    /**
     * Font Awesome Kit Setup
     *
     * This will add your Font Awesome Kit to the front-end, the admin back-end,
     * and the login screen area.
     */
    if (! function_exists('fa_custom_setup_kit') ) {
        function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
            add_action(
            $action,
            function () use ( $kit_url ) {
                wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
            }
            );
        }
        }
    }

    fa_custom_setup_kit('https://kit.fontawesome.com/49c98b40af.js');