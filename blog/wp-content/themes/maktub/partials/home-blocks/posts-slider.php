<?php
$epcl_module = epcl_get_module_options();
if( empty($epcl_module) ) return; // no data from slider module
$prefix = EPCL_THEMEPREFIX.'_';
$args = array(
	'post_type' => 'post',
	'showposts' => $epcl_module['posts_slider_limit'],
	'suppress_filters' => false,
	// 'meta_key' => '_thumbnail_id'
);
if( isset($epcl_module['featured_categories']) && $epcl_module['featured_categories'] != '' ){
    $args['cat'] = $epcl_module['featured_categories'];
}
if( isset($epcl_module['excluded_categories']) && $epcl_module['excluded_categories'] != '' ){
    $args['category__not_in'] = $epcl_module['excluded_categories'];
}
$slider = get_posts($args);
$thumbnail_size = 'epcl_fullcover';
$counter = 1;

$epcl_mode = epcl_get_mode( $epcl_module );

?>

<?php if( !empty($slider) ): ?>
    <div class="np-mobile np-tablet">
	<!-- start: .epcl-slider -->
	<section class="epcl-slider slick-slider section grid-container epcl-mode-<?php echo esc_attr($epcl_mode); ?>" data-show="1" data-rtl="<?php echo is_rtl(); ?>" id="<?php echo wp_unique_id('epcl-post-slider-'); ?>">
		<?php foreach($slider as $post): setup_postdata($post); ?>
        	<?php                
                $post_meta = get_post_meta( $post->ID, 'epcl_post', true );
                $image_id = get_post_thumbnail_id($post->ID);
                $image_alt = $image_url = '';
                if($image_id){
                    $thumb = wp_get_attachment_image_src( $image_id, $thumbnail_size );
                    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
                    $image_url = $thumb[0];
                }
                $optimized_image = '';
                if( defined('EPCL_PLUGIN_PATH') && !empty($post_meta) ){
                    if( isset( $post_meta['optimized_image_slider'] ) && $post_meta['optimized_image_slider']['url'] != '' ){
                        $optimized_image = $post_meta['optimized_image_slider'];
                    }                    
                    if( isset($optimized_image['alt']) && $optimized_image['alt'] != ''){
                        $image_alt = $optimized_image['alt'];
                    }                         
                    if( !empty($optimized_image) ){
                        $image_url = $optimized_image['url'];
                    }
                }                
                if( !$image_alt ){
                    $image_alt = get_the_title();
                }

                $author_id = get_the_author_meta('ID');
                $user_meta = get_user_meta( $author_id, 'epcl_user', true );
                if( !empty($user_meta) && !empty( $user_meta['avatar']) && $user_meta['avatar']['url'] != '' ){
                    $author_avatar = $user_meta['avatar']['url'];
                }else{
                    $author_avatar = get_avatar_url( get_the_author_meta('email'), array( 'size' => 120 ));
                }
                $author_name = get_the_author();
                $reading_time = epcl_reading_time( get_the_content() );
                $author_avatar = '';
                
                if( $epcl_mode == 'text' ){
                    $image_url = '';
                }
			?>
            <div class="item <?php if($image_url) echo 'image-bg'; ?>">
                <article>                    
                    <div class="post-format-wrapper">
                        <img class="img" alt="<?php echo esc_attr($image_alt); ?>" src="<?php echo EPCL_THEMEPATH; ?>/assets/images/transparent.gif" data-lazy="<?php echo esc_url($image_url); ?>">
                        <div class="epcl-overlay epcl-decoration-border"></div>
                    </div>

                    <!-- start: .info -->
                    <div class="info">   
                        
                        <?php echo epcl_render_categories(); ?>

                        <h2 class="post-title title ularge underline-effect">
                            <a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
                        </h2>
                        <!-- start: .meta -->
                        <div class="meta">
                            <?php if( epcl_get_option('enable_global_date') !== '0' ): ?>
                                <time class="meta-info" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option('date_format') ); ?></time>  
                            <?php endif; ?>
                            <?php if( epcl_get_option( 'enable_global_reading_time', true ) ): ?>
                                <div class="min-read"><span class="count"><?php echo esc_attr( $reading_time ); ?></span> <?php esc_html_e('Min Read', 'maktub'); ?></div>
                            <?php endif; ?>
                            <div class="clear"></div>
                            <?php if( $epcl_module['enable_author'] ): ?>
                                <a href="<?php echo get_author_posts_url($author_id); ?>" title="<?php echo esc_attr__('Author:', 'maktub').' '.esc_attr($author_name); ?>" class="author meta-info hide-on-mobile">                                        
                                    <?php if($author_avatar): ?>
                                        <?php if( epcl_is_amp() ): ?>
                                            <span class="author-image cover" style="background-image: url('<?php echo esc_url($author_avatar); ?>');"></span>
                                        <?php else: ?>
                                            <span class="author-image cover lazy" data-src="<?php echo esc_url($author_avatar); ?>"></span>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <div class="epcl-dropcap rounded medium">
                                            <span><?php echo mb_substr( $author_name, 0, 1); ?></span>
                                        </div>                
                                    <?php endif; ?>
                                    <span class="author-name"><?php echo esc_attr($author_name); ?></span>
                                </a>
                            <?php endif;?>
                            <div class="clear"></div>
                            <div class="counter"><?php echo esc_html($counter); ?></div>
                        </div>
                        <!-- end: .meta -->                          
                    </div>
                    <!-- end: .info -->                    
                </article>
            </div>
        <?php $counter++; endforeach; wp_reset_postdata(); ?>
	</section>
    <!-- end: .epcl-slider -->
    </div>
<?php endif; ?>
