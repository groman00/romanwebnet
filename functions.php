<?php

function svg_icon($icon, $className = ''){
    // https://github.com/encharm/Font-Awesome-SVG-PNG/tree/master/black/svg
    echo '<svg class="icon ' . $className . '"><use xlink:href="#icon-' . $icon . '"></use></svg>';
}

function my_deregister_scripts(){
    wp_deregister_script('wp-embed');
}

add_action('wp_footer', 'my_deregister_scripts');