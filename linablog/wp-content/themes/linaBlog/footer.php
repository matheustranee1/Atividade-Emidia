
    <!-- Optional JavaScript -->
  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

	<footer class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
		              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		              <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Footer</a>
		            </div>

		            <?php
		                wp_nav_menu( array(
		                'menu'              => 'rodape',
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
	</footer>


    <?php wp_footer();?>
  </body>
</html>