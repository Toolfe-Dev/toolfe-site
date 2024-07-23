<?php $epcl_theme = epcl_get_theme_options(); ?>
<?php
if( !get_the_author_meta('description') ) return;

$author_id = get_the_author_meta('ID');
$user_meta = get_user_meta( $author_id, 'epcl_user', true );
$author_avatar = epcl_get_author_avatar($user_meta, $author_id);

$author_name = get_the_author();
$author_url = get_author_posts_url($author_id);
$class = $author_position = '';
if($author_avatar) $class .= ' with-avatar'; else $class .= ' no-avatar';
if( !empty($user_meta) && !empty( $user_meta['position']) ){
    $author_position = $user_meta['position'];
}
$website = get_the_author_meta('user_url');

if( is_author() ) $class .= ' grid-container';

?> 

<!-- start: .author -->
<section id="author" class="author section <?php echo esc_attr($class); ?>">
    <div class="flex">
        <a href="<?php echo get_author_posts_url($author_id); ?>" title="<?php echo esc_attr__('Author:', 'maktub').' '.esc_attr($author_name); ?>" class="author meta-info epcl-dropcap rounded large no-border <?php if($author_avatar) echo 'epcl-loader'; ?>">                           
            <?php if($author_avatar): ?>
                <?php if( epcl_is_amp() ): ?>
                    <span class="author-image cover" style="background-image: url('<?php echo esc_url($author_avatar); ?>');"></span>
                <?php else: ?>
                    <span class="author-image cover lazy" data-src="<?php echo esc_url($author_avatar); ?>"></span>
                <?php endif; ?>
            <?php else: ?>       
                <span><?php echo mb_substr( $author_name, 0, 1); ?></span>                                
            <?php endif; ?>     
        </a>
        <div class="right">
            <h4 class="title author-name underline-effect">
                <?php if( is_archive() ): ?>
                    <?php echo esc_html( $author_name ); ?>
                <?php else: ?>
                    <a href="<?php echo esc_attr( $author_url ); ?>"><?php echo esc_html( $author_name ); ?></a>
                <?php endif; ?>
            </h4>
            <p class="position"><?php echo esc_html($author_position); ?></p>
        </div>
    </div>
    <div class="clear"></div>
    <!-- start: .info -->
    <div class="info">
        <p><?php the_author_meta('description'); ?></p>
        <?php if( !empty($user_meta) && ($user_meta['facebook'] || $user_meta['twitter'] || $website) ): ?>
            <div class="social">
                <?php if( $user_meta['twitter'] ): ?>
                    <a href="<?php echo esc_url( $user_meta['twitter'] ); ?>" class="twitter tooltip" title="<?php esc_attr_e('Follow me on Twitter', 'maktub'); ?>" target="_blank" rel="nofollow noopener"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
                <?php if( $user_meta['facebook']  ): ?>
                    <a href="<?php echo esc_url( $user_meta['facebook'] ); ?>" class="facebook tooltip" title="<?php esc_attr_e('Follow me on Facebook', 'maktub'); ?>" target="_blank" rel="nofollow noopener"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if( $website ): ?>
                    <a href="<?php echo esc_url( $website ); ?>" class="website tooltip" title="<?php esc_attr_e('Website', 'maktub'); ?>: <?php echo esc_url( $website ); ?>" target="_blank" rel="nofollow noopener"><i class="fa fa-globe"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="clear"></div>
        <?php if( is_single() ): ?>
            <a href="<?php echo esc_url( $author_url ); ?>" class="epcl-button black bordered" data-title="<?php esc_attr_e('View All Articles', 'maktub'); ?>"><?php esc_html_e('View All Articles', 'maktub'); ?></a>
        <?php endif; ?>                
    </div>
    <!-- end: .info -->
    <div class="clear"></div>
</section>
<!-- end: .author -->

<div class="clear"></div>
