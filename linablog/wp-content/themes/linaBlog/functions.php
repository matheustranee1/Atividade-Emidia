<?php
// Registrar Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'linaBlog' ),
) );



add_theme_support('post-thumbnails');

?>