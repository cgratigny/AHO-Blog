<?php get_header(); ?>

<h2 class="page-title blog-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h2>

<div class="post">

				

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
