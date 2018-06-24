<?php get_header(); ?>
<?php $cat=get_the_category();?>

<div class="container">
  	<?php while(have_posts()) : the_post(); ?>
  	<div class="row"> 
    	<div class="col-md-12">
	    	<h2>
	    		<img src="<?php echo z_taxonomy_image_url($cat[0]->term_id); ?>" />
	    		<?=$cat[0]->name?>
	    	</h2>
 		</div>
 	 </div>	
 	 <div class="row"> 
    	<div class="col-md-12">
	    	<h3><?php the_title(); ?></h3>
	    	<?php the_content(); ?>
 		</div>
 	 </div>
 	<?php endwhile; ?>	
 </div>   	

<?php get_footer(); ?>