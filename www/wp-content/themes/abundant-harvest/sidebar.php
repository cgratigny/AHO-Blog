	<br class="clear" /> 
</div> 
</div> 
	
	<div class="right-sec"> 
 <h2 class="blog-title"><img src="<?php bloginfo('template_directory'); ?>/images/home.png" alt="Home"><a href="<?php bloginfo('url'); ?>">Blog Home</a></h2>
    	
    	<?php
    	
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
    </div> 

	
 
</div> 
</div> 
</div>
