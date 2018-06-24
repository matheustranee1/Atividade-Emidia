<?php get_header(); ?>
<?php $cat=get_the_category();?>

<div class="search-category">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Help Category</h2>
				<h4>Digite aqui sua dúvida</h4>
				<form class="navbar-form" role="search" method="get" id="searchform"
		    	class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		    	<input type="hidden" name="cat" id="scat" value="<?php echo $cat[0]->term_id; ?>"/>
		        <input type="text" class="form-control" placeholder="Digite aqui sua dúvida" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		        <input type="submit" class="btn btn-danger" id="searchsubmit"
		            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	    <div class="col-md-12">
	      <h4><?php single_cat_title(' Categoria '); ?></h4>
	    </div>
	</div>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="post">
			<div class="row">
	      		<div class="col-md-12">
	      			<h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	      			<?php the_excerpt();?>
	      			<a href="<?php the_permalink(); ?>">Leia Mais...</a>
	      		</div>
			</div>
		</div>
	<?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>