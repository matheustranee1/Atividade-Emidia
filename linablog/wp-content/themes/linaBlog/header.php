<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">

    <title><?php bloginfo ('name');?> <?php wp_title();?></title>
    <?php wp_head();?>
  </head>
  <body>
 <header id="header">
  <div class="container">
    <div class="row">
    <div class="col-md-1">
      <a href="<?php echo esc_url(home_url( '/' ));?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/puzzle.png" class="img-responsive center-block"/>
      </a>
    </div>
    <div class="col-md-11">
        <nav class="navbar navbar-default">
          
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Menu Principal</a>
            </div>

            <?php
                wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav pull-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
                );
              ?>

          
        </nav>
    </div>    
    </div>
  </div>
</header>