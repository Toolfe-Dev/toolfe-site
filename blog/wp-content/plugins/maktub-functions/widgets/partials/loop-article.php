<?php
$class = 'item';
$post_id = get_the_ID();
$thumb_size = 'thumbnail';
$epcl_mode = epcl_get_mode();
$post_meta = get_post_meta( $post_id, 'epcl_post', true );
$class = epcl_get_primary_category( $class, $post_meta, $post_id );
?>
<?php if( !has_post_thumbnail() || $epcl_mode == 'text' ) $class .= ' no-thumb'; ?>
<article <?php post_class($class); ?>>

    <?php if( has_post_thumbnail() && $epcl_mode != 'text' ): ?>
        <?php
        $thumb_id = get_post_thumbnail_id($post_id);
        $thumb_type = get_post_mime_type($thumb_id);
        $image_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true);
        if( !$image_alt ){
            $image_alt = get_the_title($post_id);
        }
        if($thumb_type == 'image/gif'){
            $thumb_size = '';
        }
        if( epcl_is_amp() && isset( $epcl_theme['enable_lazyload'] ) ){
            $epcl_theme['enable_lazyload'] = false;
        }
        ?>
        
        <a href="<?php the_permalink(); ?>" class="thumb epcl-dropcap  <?php if(!epcl_is_amp()) echo 'main-effect effect-small epcl-loader'; ?>" aria-label="<?php the_title(); ?>">
            <?php if( !empty($epcl_theme) && $epcl_theme['enable_lazyload'] == '1' ): ?>
                <span class="fullimage cover lazy" data-src="<?php the_post_thumbnail_url($thumb_size); ?>"></span>
                <span class="fullimage fake-layout cover lazy" data-src="<?php the_post_thumbnail_url($thumb_size); ?>"></span>
            <?php else: ?>
                <span class="fullimage cover" style="background: url('<?php the_post_thumbnail_url($thumb_size); ?>');"></span>
                <?php if(!epcl_is_amp() ): ?>
                    <span class="fullimage fake-layout cover" style="background-image: url(<?php the_post_thumbnail_url($thumb_size); ?>);"></span>
                <?php endif; ?>
            <?php endif; ?>
        </a>
    <?php endif; ?>

    <div class="info">
        <?php if( !has_post_thumbnail() || $epcl_mode == 'text' ): ?>
            <a class="epcl-dropcap small <?php if(!epcl_is_amp()) echo 'main-effect text-only effect-small'; ?>" href="<?php the_permalink(); ?>">
                <span <?php if(!epcl_is_amp()) echo 'class="fake-layout"'; ?>><?php echo mb_substr(get_the_title(), 0, 1); ?></span>
            </a>
        <?php endif; ?>
        <div class="right">
            <h4 class="title usmall underline-effect"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <time datetime="<?php the_time('Y-m-d'); ?>" class="icon"><?php the_time( get_option('date_format') ); ?></time>
        </div>
        <div class="clear"></div>
    </div>

    <div class="clear"></div>
</article>