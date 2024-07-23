<?php get_header(); ?>
<?php
$obj = get_queried_object();
$category_meta = get_term_meta( $obj->term_id, 'epcl_post_categories', true );
$image_url = '';
if( !empty($category_meta) && !empty($category_meta['archives_image']) ){
    $thumb = wp_get_attachment_image_src( $category_meta['archives_image']['id'], 'epcl_fullcover' );
    $image_url = '';
    if( !empty($thumb) ){
        $image_url = $thumb[0];
    }    
}
?>
<!-- start: #archives-->
<main id="archives" class="main">
    
    <div class="grid-container">
        <div class="tag-description section <?php if($image_url) echo 'image-bg'; ?>" >
        
            <div class="left grid-35 tablet-grid-45 np-mobile">
                <h1 class="title large fw-semibold no-margin ctag-<?php echo esc_attr($obj->term_id); ?>"><?php single_cat_title(); ?></h1>
                <div class="total"><?php esc_html( printf( _n( '%1$s <span class="dot"></span> Article', '%1$s &nbsp;<span class="dot small"></span> Articles', $obj->count, 'maktub'), number_format_i18n( $obj->count ) ) ); ?></div>
                <div class="epcl-decoration-counter"><?php echo esc_html($obj->count); ?></div>
            </div>

            <?php if( term_description() ): ?>
                <div class="right grid-65 tablet-grid-55 np-tablet np-mobile">
                    <?php echo term_description(); ?>
                </div>
            <?php endif; ?>

            <?php if( $image_url ): ?>
                <span class="epcl-image cover" style="background-image: url('<?php echo esc_url($image_url); ?>');"></span>
                <div class="epcl-overlay epcl-decoration-border"></div>
            <?php endif; ?>
            
            <div class="clear"></div>
        </div>

    </div>

    <?php if( empty($epcl_theme) || !$epcl_theme['archive_layout'] || $epcl_theme['archive_layout'] == 'classic' ): ?>
        <?php get_template_part('partials/home-blocks/classic-posts'); ?>
    <?php elseif( $epcl_theme['archive_layout'] == 'classic_sidebar'  ): ?>
        <?php get_template_part('partials/home-blocks/classic-posts-sidebar'); ?>
    <?php elseif( $epcl_theme['archive_layout'] == 'grid_3_cols' || $epcl_theme['archive_layout'] == 'grid_4_cols' ):  ?>
        <?php get_template_part('partials/home-blocks/grid-posts'); ?>
    <?php elseif( $epcl_theme['archive_layout'] == 'grid_sidebar'  ): ?>
        <?php get_template_part('partials/home-blocks/grid-sidebar'); ?>
    <?php endif; ?>

</main>
<!-- end: #archives -->

<?php get_footer(); ?>
