<?php get_header(); ?>


<div class="search">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Help Lina Blog</h1>
				<h3>Procure aqui o que você precisa</h3>
				<form class="navbar-form" role="search" method="get" id="searchform"
		    	class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		        <input type="text" class="form-control" placeholder="Digite a pesquisa" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		        <input type="submit" class="btn btn-danger" id="searchsubmit"
		            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php foreach (get_categories() as $cat) : ?>
		<div class="col-xs-6 col-md-2 col-sm-2 col-lg-2">
			<div class="category text-center">
				<a href="<?php echo get_category_link($cat->term_id); ?>">
				<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
					<h3><?php echo $cat->cat_name; ?></h3>
				</a>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>


<?php
get_footer(); ?>