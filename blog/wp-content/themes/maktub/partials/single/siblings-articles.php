<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
$epcl_mode = epcl_get_mode();
if( empty($next_post) && empty($prev_post) ) return;
$thumb_size = 'thumbnail';
?>
<section class="siblings section" id="epcl-other-stories">
    <h3 class="title bordered"><?php esc_html_e('Other Stories', 'maktub'); ?><span class="border"></span></h3>
    <div class="">
        <?php
        if( !empty($next_post) ){
            $next_url = get_the_permalink($next_post->ID);
            $next_thumb = get_the_post_thumbnail_url($next_post->ID, $thumb_size);
            $next_post_meta = get_post_meta( $next_post->ID, 'epcl_post', true );
            if( $epcl_mode == 'text' ){
                $next_thumb = false;
            }
            $post_class = epcl_get_primary_category( '', $next_post_meta, $next_post->ID );
        }
        ?>
        <?php if( !empty($next_post) ): ?>
            <article <?php post_class('next bg-white'.$post_class); ?>>
                <?php if($next_thumb): ?>
                    <div class="thumb epcl-dropcap <?php if($next_thumb && epcl_get_option('enable_lazyload_posts') && !epcl_is_amp() ) echo 'epcl-loader'; ?>">
                        <?php if( epcl_is_amp() ): ?>
                            <amp-img class="cover fullimage" layout="fill" src="<?php echo esc_url($next_thumb); ?>"></amp-img>
                        <?php else: ?>
                            <?php if( epcl_get_option('enable_lazyload_posts') == '1' ): ?>
                                <span class="fullimage cover lazy" data-src="<?php echo esc_url($next_thumb); ?>"></span>
                            <?php else: ?>
                                <span class="fullimage cover" style="background-image: url(<?php echo esc_url($next_thumb); ?>);"></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="thumb epcl-dropcap">
                    <?php if( get_the_title($next_post->ID) ): ?>
                            <span><?php echo mb_substr(get_the_title($next_post->ID), 0, 1); ?></span>
                        <?php else: ?>
                            <span><?php echo mb_substr(get_the_excerpt($next_post->ID), 0, 1); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <a href="<?php echo esc_url($next_url); ?>" class="full-link"></a>
                <div class="info">
                    <h4 class="title usmall no-margin"><?php echo get_the_title($next_post->ID); ?></h4>
                    <span class="meta"><?php esc_html_e('Next Story', 'maktub'); ?></span>
                </div>                
            </article>
        <?php endif; ?>

        <?php    
        if( !empty($prev_post) ){
            $prev_url = get_the_permalink($prev_post->ID);
            $prev_thumb = get_the_post_thumbnail_url($prev_post->ID, $thumb_size);
            $prev_post_meta = get_post_meta( $prev_post->ID, 'epcl_post', true );
            if( $epcl_mode == 'text' ){
                $prev_thumb = false;
            }
            $post_class = epcl_get_primary_category( '', $prev_post_meta, $prev_post->ID );
        }
        ?>
        <?php if( !empty($prev_post) ): ?>
            <article <?php post_class('prev bg-white'.$post_class); ?>>
                <?php if($prev_thumb): ?>
                    <div class="thumb epcl-dropcap small <?php if($prev_thumb && epcl_get_option('enable_lazyload_posts') && !epcl_is_amp()  ) echo 'epcl-loader'; ?>">
                        <?php if( epcl_is_amp() ): ?>
                            <amp-img class="cover fullimage" layout="fill" src="<?php echo esc_url($prev_thumb); ?>"></amp-img>
                        <?php else: ?>
                            <?php if( epcl_get_option('enable_lazyload_posts') == '1' ): ?>
                                <span class="fullimage cover lazy" data-src="<?php echo esc_url($prev_thumb); ?>"></span>
                            <?php else: ?>
                                <span class="fullimage cover" style="background-image: url(<?php echo esc_url($prev_thumb); ?>);"></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="thumb epcl-dropcap">
                        <?php if( get_the_title($prev_post->ID) ): ?>
                            <span><?php echo mb_substr(get_the_title($prev_post->ID), 0, 1); ?></span>
                        <?php else: ?>
                            <span><?php echo mb_substr(get_the_excerpt($prev_post->ID), 0, 1); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <a href="<?php echo esc_url($prev_url); ?>" class="full-link"></a>
                <div class="info">
                    <h4 class="title usmall no-margin"><?php echo get_the_title($prev_post->ID); ?></h4>
                    <span class="meta"><?php esc_html_e('Previous Story', 'maktub'); ?></span>
                </div>                
            </article>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
</section>