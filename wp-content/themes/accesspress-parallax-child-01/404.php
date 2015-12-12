<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package accesspress_parallax
 */

get_header(); ?>
<div class="mid-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! Seems that page got a little lost along the way. Take a minute and enjoy the scenery.', 'accesspress-parallax' ); ?></h1>
				</header><!-- .page-header -->

				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
