<?php get_header(); ?>


 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 class="blog-title"><?php the_title(); ?></h2>
 <div class="post">
 
 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
  <div class="entry">
    <?php the_content(); ?>
  </div>

  <p class="postmetadata">Posted in <?php the_category(', '); ?></p>

<?php comments_template( '', true ); ?>


 </div> <!-- closes the first div box -->
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
