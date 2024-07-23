<?php

function epcl_render_breadcrumbs(){

    if ( function_exists('yoast_breadcrumb') && epcl_get_option('breadcrumbs_type') == 'yoast' ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    } elseif( function_exists('bcn_display') && epcl_get_option('breadcrumbs_type') == 'navxt' ){
        bcn_display();
    } elseif( function_exists('rank_math_the_breadcrumbs') && epcl_get_option('breadcrumbs_type') == 'rankmath' ){
        rank_math_the_breadcrumbs();
    }

}

function epcl_custom_scripts_body() {
    global $epcl_theme;
    if( empty($epcl_theme) || epcl_is_amp() ) return;

    if( isset( $epcl_theme['custom_scripts_body'] ) && $epcl_theme['custom_scripts_body'] ){
        echo $epcl_theme['custom_scripts_body'];
    }
}

add_action('wp_body_open', 'epcl_custom_scripts_body', 1);

function epcl_render_reading_time(){
    $content = get_the_content();
    if( !$content ) return;
    $reading_time = epcl_reading_time( get_the_content() );
?>
    <?php if( epcl_get_option( 'enable_global_reading_time', false ) ): ?>
        <div class="min-read meta-info"><span class="count"><?php echo esc_attr( $reading_time ); ?></span> <?php esc_html_e('Min Read', 'maktub'); ?></div>
    <?php endif; ?>
<?php
}

function epcl_render_views_counter(){
    $views = 0;
    $post_meta = get_post_meta( get_the_ID(), 'epcl_post', true );
    if( isset( $post_meta['views_counter'] ) && $post_meta['views_counter'] > 0 ){
        $views = $post_meta['views_counter'];
    } 
?>
    <?php if( epcl_get_option( 'enable_global_views', false ) ): ?>
        <span class="views-counter meta-info icon comments" title="<?php echo absint( $views ); ?> <?php esc_attr_e('Views', 'maktub'); ?>"><svg><use xlink:href="#views-outline-icon"></use></svg> <?php echo absint( $views ); ?></span>
    <?php endif; ?>
    
<?php
}

// Customs fonts to match Gutenberg with Front-End, only enabled by theme options
add_action('admin_footer', 'epcl_admin_custom_css', 20);
function epcl_admin_custom_css() {
    $custom_css = '';
    if( epcl_get_option('enable_gutenberg_admin', true) ){
        $custom_css = epcl_generate_gutenberg_custom_styles();
    }    
    echo '<style id="epcl-custom-css-admin">.column-epcl_post_image{ width: 120px; }'.$custom_css.'</style>';
}

function epcl_render_theme_author(){
    return '<div class="epcl-theme-author published underline-effect">WordPress Theme by <a href="https://estudiopatagon.com" target="_blank" title="Powered with Maktub">EstudioPatagon</a></div>';
}

function epcl_render_demo_button(){
    global $wp;
    $epcl_mode = epcl_get_mode();
    if( epcl_is_amp() ) return;
    $site_url = site_url();
    if( (strpos($site_url, 'estudiopatagon.com') < 1) && (strpos($site_url, 'localhost') < 1) ) return;
    
    $current_url = home_url( $wp->request ) ;
    $current_mode = 0;
    $current_color = 1;
    $new_current_color = 1;
    $new_current_mode = 1;

    if( $epcl_mode == 'image' ){
        $current_mode = 1;
        $absolute_url = add_query_arg( array(
            'epcl-text-mode' => $current_mode,
            'epcl-custom-color' => $current_color,
        ), $current_url );
    }

    if( ((isset($_GET['epcl-custom-color']) && $_GET['epcl-custom-color'] == '1')) || !isset($_GET['epcl-custom-color']) ){
        $current_color = 1;
    }else{
        $current_color = 0;
    }

    if( isset($_GET['epcl-text-mode']) && $_GET['epcl-text-mode'] == '1' ){
        $current_mode = 1;
    }else{
        $current_mode = 0;
    }
    
    if( $current_color ) $new_current_color = 0;
    else $new_current_color = 1;

    if( $current_mode ) $new_current_mode = 0;
    else $new_current_mode = 1;

    $absolute_url_text = add_query_arg( array(
        'epcl-text-mode' => $new_current_mode,
        'epcl-custom-color' => $current_color,
    ), $current_url );

    $absolute_url_color = add_query_arg( array(
        'epcl-text-mode' => $current_mode,
        'epcl-custom-color' => $new_current_color,
    ), $current_url );
    
?>
<div class="epcl-change-mode hide-on-mobile hide-on-tablet">
    <div class="tool"  title="Demo options"><svg class="icon ularge dark"><use xlink:href="#tool-icon"></use></svg></div>
    <!-- <a href="<?php echo esc_url( $current_url ); ?>?epcl-text-mode=1" class="button bordered dark <?php if($epcl_mode == 'text') echo 'active'; ?>">Text Mode</a> -->
    <h4 class="title usmall">Change Modes:</h4>
    <a href="<?php echo esc_url( $absolute_url_text ); ?>" class="<?php if($epcl_mode == 'text') echo 'active'; ?>"><span></span>Text Mode</a>
    <a href="<?php echo esc_url( $absolute_url_color ); ?>" class="<?php if($current_color == '1') echo 'active'; ?>"><span></span>Category Color</a>
    <p style="font-size: 12px; padding-top: 5px;"><b>Note:</b> To test Category Color Option leave Text Mode <b>"ON"</b>.</p>
</div>
<?php
}