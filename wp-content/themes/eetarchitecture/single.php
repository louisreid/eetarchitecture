<?php get_header(); ?>

    <?php the_post(); ?>
    
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

<?php get_footer(); ?>