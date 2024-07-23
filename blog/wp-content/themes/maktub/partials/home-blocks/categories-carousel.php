<?php
$epcl_module = epcl_get_module_options();
if( empty($epcl_module) ) return; // no data from carousel module
$prefix = EPCL_THEMEPREFIX.'_';
$args = array(
	'taxonomy' => 'category',
    'orderby' => 'count',
    'order' => 'DESC',
    // 'meta_key' => 'epcl_post_categories'
);

if( !empty($epcl_module) ){
    // Categories filters
    if( isset($epcl_module['featured_categories']) && $epcl_module['featured_categories'] != '' ){
        $args['term_taxonomy_id'] = $epcl_module['featured_categories'];
    }
    if( isset($epcl_module['excluded_categories']) && $epcl_module['excluded_categories'] != '' ){
        $args['exclude'] = $epcl_module['excluded_categories'];
    }
    if( isset($epcl_module['categories_carousel_limit']) && $epcl_module['categories_carousel_limit'] != '' ){
        $args['number'] = $epcl_module['categories_carousel_limit'];
    }
}
$image_size = 'medium_large';
if ($epcl_module['categories_carousel_show_limit'] < 5){
    $image_size = 'medium_large';
}
$carousel = get_terms($args);

$epcl_mode = epcl_get_mode( $epcl_module );
?>

<?php if( !empty($carousel) ): ?>
	<!-- start: .carousel -->
    <section class="epcl-popular-categories grid-container grid-ularge epcl-mode-<?php echo esc_attr($epcl_mode); ?>" id="<?php echo wp_unique_id('epcl-category-carousel-'); ?>">
        <div class="slick-slider outer-arrows slides-<?php echo intval( $epcl_module['categories_carousel_show_limit'] ); ?>" data-show="<?php echo intval( $epcl_module['categories_carousel_show_limit'] ); ?>" data-rtl="<?php echo is_rtl(); ?>" data-aos="fade">
            <?php foreach($carousel as $term): ?>
                <?php
                    $term_meta = $thumb_url = '';
                    if( defined('EPCL_PLUGIN_PATH') && !empty($term) ){
                        $term_meta = get_term_meta( $term->term_id, 'epcl_post_categories', true );
                        if( !empty($term_meta) && !empty($term_meta['carousel_image']) ){
                            $thumb_url = wp_get_attachment_image_src($term_meta['carousel_image']['id'], $image_size);
                        }                        
                    }
                    if( $epcl_mode == 'text' ){
                        $thumb_url = '';
                    }
                ?>
                <div class="slick-item tag <?php if( !empty( $thumb_url ) ) echo 'image-bg'; ?>">
                    <div class="item cover background" <?php if( !empty( $thumb_url ) ) echo 'style="background-image: url('.esc_url($thumb_url[0]).');"'; ?>>
                        <div class="info">
                            <h4 class="title ctag-<?php echo esc_attr($term->term_id); ?>"><?php echo esc_html($term->name); ?></h4>       
                            <p class="amount"><?php echo esc_html($term->count); ?> &nbsp;<span class="dot small"></span> <?php esc_html_e('Articles', 'maktub'); ?></p>         
                        </div>    
                        <a href="<?php echo get_term_link($term); ?>" class="full-link"></a>
                        <div class="epcl-overlay epcl-decoration-border"></div>
                        <div class="counter"><?php echo esc_html($term->count); ?></div>
                    </div>  
                </div>

            <?php endforeach; ?>
        </div>
	</section>
	<!-- end: .carousel -->
<?php endif; ?>
