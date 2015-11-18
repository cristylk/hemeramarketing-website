<?php
/*
Template Name: Timeline
*/
?>
<?php get_header(); ?>
       
    <div id="content" class="page col-full">
		<div id="main" class="col-left">
		
		<?php if ( isset( $woo_options['woo_breadcrumbs_show'] ) && $woo_options['woo_breadcrumbs_show'] == 'true' ) { ?>
			<div id="breadcrumbs">
				<?php woo_breadcrumbs(); ?>
			</div><!--/#breadcrumbs -->
		<?php } ?>  

			<?php query_posts( 'posts_per_page=-1' );
				$dates_array 			= Array();
				$year_array 			= Array();
				$i 						= 0;
				$prev_post_ts    		= null;
				$prev_post_year  		= null;
				$distance_multiplier 	=  9;
			?>
					
				
				
			
            </div><!-- /.post -->
		                
        </div><!-- /#main -->
        
        <?php // wp_reset_query(); ?>

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>