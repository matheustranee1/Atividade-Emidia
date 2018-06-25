<?php get_header(); ?>

<div class="container">
  <div class="row"> 
    <div class="col-md-12">
      <h4><?php single_cat_title(' Resultado da pesquisa '); ?></h4>
    </div>
  </div>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-md-12">
      <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php the_excerpt();?>
    </div>
  </div>
  <?php endwhile; else: ?>
  <div class="row">
    <div class="col-md-12">
      <p>Desculpe, nenhum post corresponde aos seus critérios.</p>
    </div>
  </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>