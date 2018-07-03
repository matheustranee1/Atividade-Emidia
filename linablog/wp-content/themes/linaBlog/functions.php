<?php
// Registrar Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'linaBlog' ),
) );



add_theme_support('post-thumbnails');





function relationship_Category( $atts ) {
	    $a = shortcode_atts( array(
	        'excludeId' => get_the_ID(),
	        'amount' => 3
	    ), $atts );

    	$info='';
    	$cat=get_the_category($a['excludeId']);

	    wp_reset_query();
	    $args = array( 'category_name' => $cat[0]->slug, 'post__not_in'=>array($a['excludeId']), 'order'=>'DESC', 'orderby'=>'date', 'posts_per_page'=>$a['amount']); 
	    query_posts($args);
	    while ( have_posts() ) : the_post();
	    	$info.='<a href="'.get_the_permalink().'">'.get_the_title().'</a> ';
	    endwhile;
	    wp_reset_query();


    return $info;
}
add_shortcode( 'relationsCategory', 'relationship_Category' );


?>
