<?php
$epcl_theme = epcl_get_theme_options();
$epcl_module = epcl_get_module_options();

add_filter( 'excerpt_length', 'epcl_small_excerpt_length', 999 );
add_filter( 'the_title', 'epcl_grid_title_length', 999, 2 );

$args = array('post_type' => 'post', 'paged' => get_query_var('paged') );

if( is_page_template('page-templates/home.php') ){

    $var = is_front_page() ? 'page' : 'paged';
    $paged = ( get_query_var($var) ) ? get_query_var($var) : 1;
    $args['paged'] = $paged;

    // Check common arguments from EPCL Module
    $extra_args = epcl_posts_lists_args( $epcl_module );

    if( !empty($extra_args) ){
        $args = array_merge( $args, $extra_args );
    } 

}

$custom_query = new WP_Query($args);
$custom_query = epcl_calculate_offset_pages($custom_query, $epcl_module);

if( !is_page_template('page-templates/home.php') ){
    $custom_query = $wp_query;
}

if( isset($_GET['ads']) ){
    $args['posts_per_page'] = 8;
    $custom_query = new WP_Query($args);
}
$grid_posts_column = 3;
$module_class = '';
if( !empty($epcl_module) ){
    if( isset($epcl_module['grid_posts_column']) && $epcl_module['grid_posts_column'] != ''){
		$grid_posts_column = $epcl_module['grid_posts_column'];
    }    
    if( $epcl_module['grid_enable_masonry'] || !isset($epcl_module['grid_enable_masonry']) ){
		$module_class .= ' enable-masonry';
    } 
// If is not a module always enable masonry
}else{
    $module_class .= ' enable-masonry';
}

$module_class .= ' grid-large';
?>
<div class="grid-container module-wrapper <?php echo esc_attr($module_class); ?>" id="<?php echo wp_unique_id('epcl-grid-posts-'); ?>">

    <div class="row">
        
        <!-- start: .content-wrapper -->
        <div class="content-wrapper <?php if(!is_archive()) echo 'content'; ?>">

            <?php if( $custom_query->have_posts() ): ?>

                <!-- start: .articles -->
                <div class="articles grid-posts columns-<?php echo esc_attr($grid_posts_column); ?>">
                    <?php while( $custom_query->have_posts() ): $custom_query->the_post(); ?>
                        <?php get_template_part('partials/loops/grid-article'); ?>
                    <?php endwhile; ?>
                </div>
                <!-- end: .articles -->

                <?php epcl_pagination($custom_query); ?>

                <?php wp_reset_postdata(); ?>

            <?php else: ?>
                <?php get_template_part('partials/no-results'); ?>
            <?php endif; ?>     
        </div>
        <!-- end: .content-wrapper -->

    </div>

</div>