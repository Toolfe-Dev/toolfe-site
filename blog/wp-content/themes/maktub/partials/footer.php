<?php
$epcl_theme = epcl_get_theme_options();
if(function_exists('icl_get_home_url')) $home = icl_get_home_url();
else $home = home_url('/');

$footer_class = '';
if( epcl_get_option('enable_mobile_footer_sidebar') == false ){
    $footer_class = 'no-sidebar';
}
if( epcl_get_option('enable_mobile_footer_sidebar') == true && epcl_get_option('mobile_footer_sidebar') ){
    $footer_class = 'hide-default';
}
?>
<!-- start: #footer -->
<footer id="footer" class="<?php echo esc_attr($footer_class); ?>">

    <?php if( epcl_get_option('mailchimp_url') && epcl_get_option('footer_enable_subscribe') ): ?>
		<div class="subscribe cover" <?php if( !empty($epcl_theme['footer_subscribe_background']['url']) ): ?>style="background-image: url('<?php echo esc_url( $epcl_theme['footer_subscribe_background']['url'] ); ?>');"<?php endif; ?>>
			<div class="grid-container grid-small grid-parent np-mobile textcenter">

                <?php if( epcl_get_option('footer_subscribe_title') ): ?>
                    <h4 class="title large"><?php echo wp_kses_post( epcl_get_option('footer_subscribe_title') ); ?></h4>
                <?php else: ?>
                    <h4 class="title large"><?php esc_html_e('Subscribe to', 'maktub'); ?> <span><?php bloginfo('name'); ?></span></h4>
                <?php endif; ?>
                <?php if( epcl_get_option('footer_subscribe_description') ): ?>
                    <p><?php echo esc_html( epcl_get_option('footer_subscribe_description') ); ?></p>
                <?php else: ?>
                    <p><?php esc_html_e('Get the latest posts delivered right to your email.', 'maktub'); ?></p>
                <?php endif; ?>	

                <form method="post" action="<?php echo esc_url( $epcl_theme['mailchimp_url'] ); ?>" target="_blank">
                    <?php if( epcl_get_option('footer_subscribe_parameters') && function_exists('epcl_render_subscribe_parameters') ): ?>
                        <?php epcl_render_subscribe_parameters( epcl_get_option('footer_subscribe_parameters') ); ?>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="email" name="MERGE0" class="inputbox" required placeholder="<?php esc_attr_e('Enter your email address', 'maktub'); ?>" aria-label="<?php esc_attr_e('Enter your email address', 'maktub'); ?>">
                    </div>
                    <button class="epcl-button dark bordered" type="submit" data-title="<?php esc_attr_e('Submit', 'maktub'); ?>"><?php esc_html_e('Submit', 'maktub'); ?></button>
                    <?php wp_nonce_field( 'epcl_subscribe', 'subscribe_nonce' ); ?>
                </form>

                <?php epcl_render_header_social_buttons(); ?>
		
			</div>
		</div>
    <?php endif; ?>

    <?php if( epcl_get_option('enable_footer_widgets', true) ): ?>
        <?php if( is_active_sidebar('epcl_sidebar_footer')  || is_active_sidebar( epcl_get_option('mobile_footer_sidebar') ) ): ?>
            <div class="widgets grid-container grid-large">
                <div class="epcl-row large">
                    <div class="default-sidebar"><?php dynamic_sidebar('epcl_sidebar_footer'); ?></div>
                    <div class="clear"></div>
                    <?php if( epcl_get_option('enable_mobile_footer_sidebar') == true && epcl_get_option('mobile_footer_sidebar') ): ?>
                        <div class="mobile-sidebar hide-on-desktop"><?php dynamic_sidebar( epcl_get_option('mobile_footer_sidebar') ); ?></div>
                    <?php endif; ?>
                    
                    <div class="clear"></div>
                </div>            
            </div>
        <?php endif; ?>
    <?php endif; ?>  

    <?php if( !isset($epcl_theme['enable_footer_logo']) || $epcl_theme['enable_footer_logo'] == '1' ): ?>
        <?php
        if( isset($epcl_theme['enable_footer_custom_logo']) && $epcl_theme['enable_footer_custom_logo'] === '1' ){
            $epcl_theme['logo_type'] = $epcl_theme['footer_logo_type'];
            if( $epcl_theme['footer_logo_type'] === '1' ){
                $epcl_theme['logo_image'] = $epcl_theme['footer_logo_image'];
                $epcl_theme['logo_width'] = $epcl_theme['footer_logo_width'];
            }else{
                $epcl_theme['logo_icon'] = $epcl_theme['footer_logo_icon'];
            }
        }
        ?>
        
        <?php if(!empty($epcl_theme) && $epcl_theme['logo_type'] == 1 && !empty($epcl_theme['logo_image']['url']) ): ?>
            <h2 class="logo image-logo"><a href="<?php echo esc_url($home); ?>"><img src="<?php echo esc_url( $epcl_theme['logo_image']['url'] ); ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo esc_attr( $epcl_theme['logo_width'] ); ?>" /></a></h2>
        <?php else: ?>
            <h2 class="logo text-logo">
                <a href="<?php echo home_url('/'); ?>" class="title ularge no-margin">
                    <?php if( isset( $epcl_theme['logo_icon'] ) && $epcl_theme['logo_icon'] ): ?>
                        <i class="fa <?php echo esc_attr( $epcl_theme['logo_icon'] ); ?>"></i>
                    <?php endif; ?>
                    <span><?php bloginfo('name'); ?></span>
                </a>
            </h2>
        <?php endif; ?>
    <?php else: ?>
        <br>
    <?php endif; ?>
    
    <?php if( epcl_get_option('copyright_text') ): ?>
        <div class="published underline-effect">
            <?php echo wp_kses_post( do_shortcode($epcl_theme['copyright_text']) ); ?>
        </div>
    <?php endif; ?>

    <?php if( epcl_get_option('copyright_theme_author', true) && function_exists('epcl_render_theme_author') ): ?>
        <?php echo epcl_render_theme_author(); ?>
    <?php endif; ?>
    
    <?php if( empty($epcl_theme) || $epcl_theme['enable_back_to_top'] == '1' ): ?>
        <a id="back-to-top" class="epcl-button dark" href="#header"><i class="fa fa-angle-up"></i></a>
    <?php endif; ?>

    <div class="clear"></div>

</footer>
<!-- end: #footer -->