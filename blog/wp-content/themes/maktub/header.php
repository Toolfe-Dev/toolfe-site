<?php $epcl_theme = epcl_get_theme_options(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ): ?>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.webp" />
    <?php endif; ?>

    <?php wp_head(); ?>
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9739213977761253"
     crossorigin="anonymous"></script>

</head>
<body <?php body_class(); ?>>  
    <?php wp_body_open(); ?>

    <!-- start: .mobile.main-nav -->
    <nav class="mobile main-nav hide-on-desktop-lg">
        <?php
        $args = array( 'theme_location' => 'epcl_header', 'container' => false );
        if( has_nav_menu('epcl_header') ){
            wp_nav_menu( $args );
        } 
        ?>     
    </nav>
    <!-- end: .mobile.main-nav -->
    <div class="menu-overlay hide-on-desktop-lg"></div>

    <!-- start: #wrapper -->
    <div id="wrapper">
		<?php get_template_part('partials/header'); ?>
