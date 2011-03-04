<?php get_header(); ?>

		<h2 class="page-title blog-title">
			<?php printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
		</h2>

		<div class="post">
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';
				get_template_part( 'loop', 'category' ); ?>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
