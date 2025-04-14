<?php get_header(); ?>

<div class="content">
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    else:
      _e('Sorry, no posts matched your criteria.');
    endif;
  ?>
</div>

<?php get_footer(); ?>
