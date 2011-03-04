<?php get_header(); ?>

<h2 class="page-title blog-title">
	<?php printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );?>
</h2>

<div class="post">
<?php get_template_part( 'loop', 'tag' ); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
