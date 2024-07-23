<?php
$epcl_theme = epcl_get_theme_options();
$epcl_module = epcl_get_module_options();

$index = absint( get_query_var('index') );
$post_class = $optimized_image = '';
$post_id = get_the_ID();
$post_meta = get_post_meta( $post_id, 'epcl_post', true );
$post_gallery = get_post_meta( $post_id, 'epcl_post_gallery', true );
$post_meta_audio = get_post_meta( $post_id, 'epcl_post_audio', true );
$post_meta_video = get_post_meta( $post_id, 'epcl_post_video', true );
if( !get_post_format() && !has_post_thumbnail() ){
    $optimized_image = '';
    if( defined('EPCL_PLUGIN_PATH') && !empty($post_meta['optimized_image']['url']) && $post_meta['optimized_image']['url'] != ''  ){
        $optimized_image = $post_meta['optimized_image'];
    }
    if( !$optimized_image ){
        $post_class .= ' no-thumb';
    }    
}

set_query_var( 'epcl_post_style', 'classic' );
$post_class .= ( $index % 2 ) ? ' even' : ' odd';
$reading_time = epcl_reading_time( get_the_content() );
if( epcl_get_option('post_title_layout', 'inside_images') == 'below_images' ){
    $post_class.= ' title-below-images';
}

$author_id = get_the_author_meta('ID');
$user_meta = get_user_meta( $author_id, 'epcl_user', true );
$author_avatar = epcl_get_author_avatar($user_meta, $author_id);
$author_name = get_the_author();
$reading_time = epcl_reading_time( get_the_content() );
$enable_author = true;
if( !is_single() && epcl_get_option('classic_display_author', true) == '0'){
    $enable_author = false;
}
if( is_single() && epcl_get_option('enable_author_top', true) == '0'){
    $enable_author = false;
}

// Primary category (optional)
$post_class = epcl_get_primary_category( $post_class, $post_meta, $post_id );

?>

<article <?php post_class('default classic-large index-'.$index.' '.$post_class.' grid-100 tablet-grid-100'); ?>>

    <header>        
        <?php
            // Validate if the post format is used incorrectly or not filled properly, example Gallery format but no images assigned.
            if( get_post_format() == '' && !has_post_thumbnail() && empty($optimized_image['url']) ||
                (get_post_format() == '' && isset($post_meta['loop_style']) && $post_meta['loop_style'] == 'text-only' ) || 
                (get_post_format() == 'gallery' && empty($post_gallery['gallery']) ) ||
                (get_post_format() == 'image' && !has_post_thumbnail() && empty($optimized_image['url']) ) || 
                (get_post_format() == 'audio' && empty($post_meta_audio['soundcloud_url']) && isset($post_meta_audio['show_featured_image']) && !$post_meta_audio['show_featured_image'] ) || 
                (get_post_format() == 'video' && empty($post_meta_video['video_url']) ) ||
                ( !in_array( get_post_format(), array('', 'gallery', 'image', 'audio', 'video')) )
                ): ?>
                <div class="epcl-flex">
                    <a class="epcl-dropcap <?php if(!epcl_is_amp()) echo 'main-effect text-only'; ?>" href="<?php the_permalink(); ?>">
                        <?php
                        $class = 'fake-layout';
                        if( epcl_is_amp() ) $class = 'no-animation';
                        ?>
                        <?php if( get_the_title() ): ?>
                            <span class="<?php echo esc_attr($class); ?>"><?php echo mb_substr(get_the_title(), 0, 1); ?></span>
                        <?php else: ?>
                            <span class="<?php echo esc_attr($class); ?>"><?php echo mb_substr(get_the_excerpt(), 0, 1); ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="info">                
                        <h1 class="main-title title large underline-effect"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <div class="hide-on-mobile">
                            <?php get_template_part('partials/meta-info'); ?>
                        </div>
                    </div>
                </div>
                <div class="hide-on-tablet hide-on-desktop">
                    <?php get_template_part('partials/meta-info'); ?>
                </div>
        <?php else: ?>
            <?php epcl_display_post_format( get_post_format(), $post_id );  ?>
        <?php endif; ?>

        <div class="clear"></div>
    </header>

    <!-- start: .bottom -->
    <div class="bottom">   
        
        <?php if( empty($epcl_theme) || $epcl_theme['classic_display_excerpt'] !== '0' ): ?>
            <div class="post-excerpt">                    
                <?php the_excerpt(); ?>        
                <div class="clear"></div>              
            </div>  
        <?php else: ?>
            <div class="epcl-spacing"></div>
        <?php endif; ?>        
        
        <?php if( get_the_category() ): ?>
            <div class="tags">
                <?php echo epcl_render_categories(); ?>
            </div>
        <?php endif; ?>

        <?php if( epcl_get_option('classic_display_author') !== '0' ): ?>
            <div class="meta bottom hide-on-mobile">
                <a href="<?php echo get_author_posts_url($author_id); ?>" title="<?php echo esc_attr__('Author:', 'maktub').' '.esc_attr($author_name); ?>" class="author meta-info">                                        
                    <?php if($author_avatar): ?>
                        <?php if( epcl_is_amp() ): ?>
                            <span class="author-image cover" style="background-image: url('<?php echo esc_url($author_avatar); ?>');"></span>
                        <?php else: ?>
                            <span class="author-image cover lazy" data-src="<?php echo esc_url($author_avatar); ?>"></span>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="epcl-dropcap rounded medium author-avatar">
                            <span><?php echo mb_substr( $author_name, 0, 1); ?></span>
                        </div>                
                    <?php endif; ?>
                    <span class="author-name"><?php echo esc_attr($author_name); ?></span>
                </a>
            </div>
        <?php endif; ?>

        <div class="clear"></div>

        <a href="<?php the_permalink(); ?>" class="continue-reading epcl-button black bordered" data-title="<?php esc_attr_e('Continue Reading', 'maktub'); ?>"><?php esc_html_e('Continue Reading', 'maktub'); ?></a>

    </div>   
    <!-- end: .right -->
    <div class="clear"></div>

</article>