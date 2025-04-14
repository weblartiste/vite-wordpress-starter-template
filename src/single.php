<?php
/**
* Single
*/

  if ( have_posts() ) { ?>

    <section class="title">
      <h1><?= get_the_title(); ?></h1>
    </section>

<?php }
wp_reset_postdata(); // IMPORTANT - reset the $post object
get_footer(); ?>