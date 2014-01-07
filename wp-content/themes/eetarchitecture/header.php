<?php ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.7.1.min.js"></script> -->
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Hi, eetarchitecture here, sadly you are using an <strong>outdated</strong> browser. This page wont look right. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="page-bg" style="background-image:url('<?php the_field('page-background'); ?>');">
        </div>

        <header class="site-header">
            <h1 class="site-header--text"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>                 
        </header>

        <nav class="site-nav"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>

        <main class="page-content">
