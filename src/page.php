<?php

get_header();

    while ( have_posts() ) : the_post(); ?>

        <section class="title">
            <h1><?php the_title(); ?></h1>
        </section>

        <section class="content">
            <?php the_content(); ?>
        </section>

    <?php

    endwhile;


get_footer(); ?>