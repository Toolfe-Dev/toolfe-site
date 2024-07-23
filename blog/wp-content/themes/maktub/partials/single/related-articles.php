<?php
$post_id = get_the_ID();
$args = array(
    'posts_per_page' => absint( epcl_get_option('related_posts_limit', 4) ),
    'category__in' => wp_get_post_categories($post_id),
    'post__not_in' => array($post_id),
    'post_type' => 'post',
    'order' => 'DESC',
);
$query_related = new WP_Query( $args );
$epcl_mode = epcl_get_mode();
?>
<?php if( $query_related->have_posts() ): ?>    
    <section class="related section" id="epcl-related-stories">
        <h3 class="title bordered"><?php esc_html_e('Related Articles', 'maktub'); ?><span class="border"></span></h3>
        <div class="row">
            <?php while( $query_related->have_posts() ): $query_related->the_post(); ?>
                <?php
                $post_id = get_the_ID();
                $post_meta = get_post_meta( $post_id, 'epcl_post', true );
                $size = 'medium';
                $thumb_url = get_the_post_thumbnail_url($post_id, $size);
                $loop_post_style = 'small-image';
                if( !empty($post_meta) && isset($post_meta['loop_style']) ){
                    $loop_post_style = $post_meta['loop_style'];
                }    
                if( !$loop_post_style ){
                    $loop_post_style = 'small-image';
                }              
                if( $epcl_mode == 'text' ){
                    $thumb_url = false;
                }
                // Primary category (optional)
                $post_class = epcl_get_primary_category( '', $post_meta, $post_id );
                ?>
                <article <?php echo post_class('item grid-50 tablet-grid-50 mobile-grid-100'.$post_class); ?>>
                    <?php if( $thumb_url && ($loop_post_style == 'small-image' || $loop_post_style == 'standard-image') ): ?>
                        <a href="<?php the_permalink(); ?>" class="thumb epcl-dropcap main-effect <?php if(epcl_get_option('enable_lazyload_posts') && !epcl_is_amp()  ) echo 'epcl-loader'; else echo 'loaded'; ?>">
                            <?php if( epcl_is_amp() ): ?>
                                <amp-img class="cover" layout="fill" src="<?php echo esc_url($thumb_url); ?>"></amp-img>
                            <?php else: ?>
                                <?php if( epcl_get_option('enable_lazyload') == '1' ): ?>
                                    <span class="fullimage cover lazy" data-src="<?php echo esc_url($thumb_url); ?>"></span>
                                    <span class="fullimage fake-layout cover lazy" data-src="<?php echo esc_url($thumb_url); ?>"></span>
                                <?php else: ?>
                                    <span class="fullimage cover" style="background-image: url(<?php echo esc_url($thumb_url); ?>);"></span>
                                    <span class="fullimage fake-layout cover" style="background-image: url(<?php echo esc_url($thumb_url); ?>);"></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </a>
                    <?php endif ;?>
                    <?php if( $loop_post_style == 'text-only' || !$thumb_url ): ?>
                        <a class="epcl-dropcap large main-effect text-only" href="<?php the_permalink(); ?>">
                            <span class="fake-layout"><?php echo mb_substr(get_the_title(), 0, 1); ?></span>
                        </a>
                    <?php endif ; ?>
                    <div class="info">
                        <h4 class="title small no-margin underline-effect"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <time class="small" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option('date_format') ); ?></time>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="clear"></div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>