	<br class="clear" /> 
</div> 
</div> 
	
	<div class="right-sec"> 
    <div> 
    	
    	<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
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
    	
        <p class="a-center"> 
            <a href="http://www.abundantharvestorganics.com/newsletter_signup.html"><img src="http://www.abundantharvestorganics.com/images/get-the-weekly-feast.png" alt="" /></a> 
        </p> 
        <p class="seprater"> 
        </p> 
        <p class="a-center"> 
            <a href="http://www.abundantharvestorganics.com/meet-vernon.html"><img src="http://www.abundantharvestorganics.com/images/meet-uncle-vern.png" alt="" /></a> 
        </p> 
        <p class="seprater"> 
        </p> 
        <p class="a-center"> 
            <a href="http://www.abundantharvestorganics.com/tellafriend"><img src="http://www.abundantharvestorganics.com/images/tell-a-friend.png" alt="" /></a> 
        </p> 
        <p class="seprater"> 
        </p> 
        <p class="a-center"> 
            <a href="http://www.abundantharvestorganics.com/testimonials.php"><img src="http://www.abundantharvestorganics.com/images/read-what-people.png" alt="" /></a> 
        </p> 
        <ul class='socialLinks'> 
            <li class='social1'> 
                <a href='http://www.facebook.com/pages/Abundant-Harvest-Organics/200872478629'>Abundant Harvest Facebook</a> 
            </li> 
            <li class='social2'> 
                <a href='http://abundantharvestorganics.blogspot.com/'>Abundant Harvest Blog</a> 
            </li> 
            <li class='social3'> 
                <a href='http://www.youtube.com/user/ahorganics'>Abundant Harvest YouTube Channel</a> 
            </li> 
        </ul> 
    </div> 
</div> 
	
 
</div> 
</div> 
</div>
