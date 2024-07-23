<?php 
$post_id = get_the_ID();
$post_format = get_post_format();
$epcl_mode = epcl_get_mode();
$post_style = 'standard';
$epcl_theme = epcl_get_theme_options();
if( ( $epcl_mode == 'text' && $post_format == '' ) || ( !has_post_thumbnail() && $post_format == '' ) ){
    $post_style = 'text-only';
}
?>
<header>

    <?php echo epcl_display_post_format( $post_format, $post_id ); ?>

	<div class="clear"></div>

    <?php if( $post_style == 'text-only' ): ?>
        <div class="post-style-text epcl-flex">
            <div class="epcl-dropcap">
                <?php if( get_the_title() ): ?>
                    <span><?php echo mb_substr(get_the_title(), 0, 1); ?></span>
                <?php else: ?>
                    <span><?php echo mb_substr(get_the_excerpt(), 0, 1); ?></span>
                <?php endif; ?>
            </div>
            <div class="info">    
                <h1 class="main-title title large"><?php the_title(); ?></h1>
                <?php if( empty($epcl_theme) || $epcl_theme['single_enable_meta_data'] === '1' ): ?>
                    <?php get_template_part('partials/meta-info'); ?>
                <?php endif; ?> 
            </div>
        </div>
    <?php else: ?>
        <div class="info">    
            <h1 class="main-title title textcenter"><?php the_title(); ?></h1>
            <?php if( empty($epcl_theme) || $epcl_theme['single_enable_meta_data'] === '1' ): ?>
                <?php get_template_part('partials/meta-info'); ?>
            <?php endif; ?> 
        </div>
    <?php endif; ?>

</header>