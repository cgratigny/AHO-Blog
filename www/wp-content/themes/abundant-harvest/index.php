<?php get_header(); ?>



 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class="post">
 
 <!-- Display the Title as a link to the Post's permalink. -->
 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
  <div class="entry">
  	<?php the_post_thumbnail(array(100,auto) ); ?>
    <?php the_excerpt(); ?>
  </div>

  <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
 </div> <!-- closes the first div box -->

 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>


