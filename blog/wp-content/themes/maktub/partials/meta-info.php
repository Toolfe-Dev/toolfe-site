<!-- start: .meta -->
<div class="meta">

    <?php if( epcl_get_option('enable_global_date') !== '0' ): ?>
        <time class="meta-info" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option('date_format') ); ?></time>  
    <?php endif; ?>

    <?php
        if( function_exists('epcl_render_reading_time') ){
            epcl_render_reading_time();
        }  
    ?>  

    <?php if( epcl_get_option( 'enable_global_comments', true ) ): ?>
        <a href="<?php the_permalink();?>#show-comments" class="comments meta-info icon mobile" title="<?php esc_html( printf( _n( '%1$s Comment', '%1$s Comments', get_comments_number(), 'maktub'), number_format_i18n( get_comments_number() ) ) ); ?>">
            <svg><use xlink:href="#comments-outline-icon"></use></svg>
            <?php if( epcl_get_option('hosted_comments') !== '2' && epcl_get_option('hosted_comments') !== '3' ): ?>
                <span class="comment-count"><?php echo get_comments_number(); ?></span>
            <?php elseif( epcl_get_option('hosted_comments') == '3' ): // Facebook commments ?>
                <span class="fb-comments-count" data-href="<?php the_permalink(); ?>">0</span>
            <?php else: // Disqus Comments ?>
                <span class="disqus-comment-count" data-disqus-url="<?php the_permalink(); ?>" data-disqus-identifier="<?php the_ID(); ?>">0</span>
            <?php endif; ?>    
        </a>  
    <?php endif; ?>

    <?php
        if( function_exists('epcl_render_views_counter') ){
            epcl_render_views_counter();
        }  
    ?>

    <?php if( is_sticky() ): ?>
        <span class="sticky-icon meta-info icon" title="<?php esc_attr_e('Featured', 'maktub'); ?>"><svg class="icon main-color"><use xlink:href="#star-icon"></use></svg></span>
    <?php endif; ?>
    
    <div class="clear"></div>
</div>
<!-- end: .meta -->