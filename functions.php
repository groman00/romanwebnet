<?php

function svg_icon($icon, $className = '', $attr = ''){
    // https://github.com/encharm/Font-Awesome-SVG-PNG/tree/master/black/svg
    echo '<svg class="icon ' . $className . '" ' . $attr . '><use xlink:href="#icon-' . $icon . '"></use></svg>';
}

function my_deregister_scripts(){
    wp_deregister_script('wp-embed');
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action('wp_footer', 'my_deregister_scripts');