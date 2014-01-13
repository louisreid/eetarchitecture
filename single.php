<?php get_header(); ?>
<main class="page-content page-content--constrained">

    <?php the_post(); ?>
    
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <nav class="nav-below">
        <p>POSTED <?php the_time('m/j/y g:i A') ?> IN <?php the_category(', ') ?></p>
    </nav> 


<?php get_footer(); ?>