<?php
/*
Template Name: home-page
*/
get_header(); ?>
<main class="page-content">

<ul class="post-list">
    <?php wp_get_archives('type=postbypost&limit=1000'); ?> 
</ul>

<?php get_footer(); ?>