<?php
/*
Template Name: home-page
*/
get_header(); ?>

<ul class="post-list">
    <?php wp_get_archives('type=postbypost&limit=1000'); ?> 
</ul>

<?php get_footer(); ?>