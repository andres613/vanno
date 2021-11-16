<?php

function vanno_files() {
    wp_enqueue_style( 'vanno_header_styles', get_theme_file_uri('/css/header.css') );
    wp_enqueue_style( 'glyphter_font', get_theme_file_uri('/css/vendor.css') );
}

add_action('wp_enqueue_scripts', 'vanno_files');
