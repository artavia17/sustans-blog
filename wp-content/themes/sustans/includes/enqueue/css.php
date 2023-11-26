<?php

    function global_style(){
        wp_enqueue_style('global-css', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'global_style');