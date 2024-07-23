<?php
$epcl_theme = epcl_get_theme_options();
if( function_exists('icl_get_home_url') ) $home = icl_get_home_url();
else $home = home_url('/');
// Just demo
if( isset($_GET['header']) ){
	$header_type = sanitize_text_field( $_GET['header'] );
	switch($header_type){
		default:
			$epcl_theme['header_type'] = 'minimalist';
		break;
		case 'classic':
			$epcl_theme['header_type'] = 'classic';
		break;
		case 'notice':
			$epcl_theme['enable_notice'] = true;
        break;
        case 'advertising':
            $epcl_theme['header_type'] = 'advertising';
		break;
	}
}

// Only if theme options data has been created
$header_class = '';
if( !empty( $epcl_theme ) ){
    $header_class = $epcl_theme['header_type'];
    if( isset( $epcl_theme['enable_sticky_header'] ) && $epcl_theme['enable_sticky_header'] != false ){
        $header_class .=' enable-sticky';
    }
    if( isset($epcl_theme['sticky_logo_image']['url'] ) && $epcl_theme['sticky_logo_image']['url'] ){
        $header_class .=' has-sticky-logo'; 
    }
    if( isset($epcl_theme['enable_search_header']) && $epcl_theme['enable_search_header'] == '1' && $epcl_theme['header_type'] !== 'classic' ){
        add_filter('wp_nav_menu_items','epcl_search_nav_item', 10, 2);
    }
    if( epcl_get_option('enable_subscribe') == true ){
        add_filter('wp_nav_menu_items','epcl_subscribe_nav_item', 10, 2);
    }
}else{
    $header_class .= 'classic';
}

?>
<?php if( !empty($epcl_theme) && $epcl_theme['enable_notice']  == true && epcl_get_option('notice_text') ): ?>
    <?php if( epcl_get_option('enable_notice_close')  == false || (!isset($_COOKIE['epcl_show_notice']) || $_COOKIE['epcl_show_notice'] != 'false') ): ?>
        <div class="notice text">
            <div class="grid-container">
                <div class="info">
                    <i class="fa fa-bell"></i>
                    <span class="underline-effect">
                        <?php echo wp_kses_post( wpautop( do_shortcode( $epcl_theme['notice_text'] ) ) ); ?>
                    </span>
                    <?php if( epcl_get_option('enable_notice_close')  == true ): ?>
                        <a href="<?php echo esc_url( home_url( $wp->request ) ); ?>?epcl-action=remove-notice" class="close"><i class="fa fa-times"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if( defined('EPCL_PLUGIN_PATH') ){ epcl_render_demo_button(); } ?>

<!-- start: #header -->
<header id="header" class="<?php echo esc_attr($header_class); ?>">
    <div>
        <?php if( has_nav_menu('epcl_header') ): ?>
            <div class="menu-mobile" on="tap:sidenav.open" role="button" tabindex="0">
                <svg class="icon ularge open"><use xlink:href="#menu-icon"></use></svg>
                <svg class="icon ularge close"><use xlink:href="#close-icon"></use></svg>
            </div>
        <?php endif; ?>

        <!-- start: .menu-wrapper -->
        <div class="menu-wrapper">
            <div class="grid-container">
                
                <?php if( epcl_get_option('logo_type') == 1 && !empty($epcl_theme['logo_image']['url']) ): ?>
                    <div class="logo">
                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url( $epcl_theme['logo_image']['url'] ); ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo epcl_get_option('logo_width'); ?>" /></a>
                    </div>
                    <?php if( !empty($epcl_theme['sticky_logo_image']['url']) ): ?>
                        <div class="logo sticky-logo">
                            <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url( $epcl_theme['sticky_logo_image']['url'] ); ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo epcl_get_option('sticky_logo_width'); ?>" /></a>
                        </div>                
                    <?php endif; ?>
                <?php else: ?>
                    <div class="logo text-logo">
                        <a href="<?php echo home_url('/'); ?>" class="title ularge black no-margin">
                            <?php if( isset( $epcl_theme['logo_icon'] ) && $epcl_theme['logo_icon'] ): ?>
                                <i class="fa <?php echo esc_attr( $epcl_theme['logo_icon'] ); ?>"></i>
                            <?php endif; ?>
                            <span><?php bloginfo('name'); ?></span>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if( !empty($epcl_theme) && $epcl_theme['header_type'] == 'advertising' && function_exists('epcl_render_header_ads') ): ?>
                    <?php epcl_render_header_ads(); ?>
                <?php endif; ?>



                <?php if( epcl_get_option('enable_search_header') == '1' || empty($epcl_theme) ): ?>
                    <a href="<?php echo home_url('/'); ?>?s=" class="epcl-search-button button circle"><svg class="icon"><use xlink:href="#search-icon"></use></svg></a>
                <?php endif; ?>
                
                <!-- start: .main-nav -->
                <amp-sidebar id="sidenav" layout="nodisplay" side="left">
                    <?php
                    $args = array(
                        'theme_location' => 'epcl_header',
                        'container' => false
                    );
                    if(has_nav_menu('epcl_header')){
                        wp_nav_menu($args);
                    } 
                    ?>
                </amp-sidebar>
                <nav class="main-nav">
                    <?php
                    $args = array(
                        'theme_location' => 'epcl_header',
                        'container' => false
                    );
                    if(has_nav_menu('epcl_header')){
                        wp_nav_menu($args);
                    } 
                    ?>
                    <?php if( epcl_get_option('enable_share_header') && function_exists('epcl_render_header_social_buttons') ): ?>
                        <?php epcl_render_header_social_buttons(); ?>
                    <?php endif; ?>
                </nav>
                <!-- end: .main-nav -->

                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end: .menu-wrapper -->

        <div class="clear"></div>       
    
    </div>
</header>
<!-- end: #header -->

<div class="clear"></div>   

<?php
if( function_exists( 'epcl_render_global_ads' ) ){
	epcl_render_global_ads('below_header');
}
?>