<?php get_header(); ?>
<main class="page-content page-content--constrained">

<div class="heading__wrapper">
    <h2 class="heading--category"><?php single_cat_title(); ?></h2>
</div>

<?php while ( have_posts() ) : the_post(); ?>

<h3 class="entry-title">
    <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>"><?php the_title(); ?></a>
</h3>
<?php the_excerpt(); ?>

<?php endwhile; ?>            

<?php get_footer(); ?>


