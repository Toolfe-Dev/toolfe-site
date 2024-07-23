<?php get_header(); ?>

<?php while(have_posts()): the_post();  ?>
    <?php
	$post_id = get_the_ID();
	$post_format = get_post_format();

    // Defaults - Post Style: standard, Sidebar: enabled
	$post_style = 'standard';
	$single_class = '';
    $enable_sidebar = true;
    $single_class = '';
    $post_meta = get_post_meta( get_the_ID(), 'epcl_post', true );
    $views = 0;
    
    // if( defined('EPCL_PLUGIN_PATH') ){
    //     if( !isset( $post_meta['views_counter']) ){
    //         $post_meta = array(
    //             'views_counter' => 0
    //         );
    //     }else{
    //         $views = $post_meta['views_counter'];
    //     }        
    //     if(!$views) $views = 0;
    //     $post_meta['views_counter'] = ++$views;
    //     update_post_meta($post_id, 'epcl_post', $post_meta);
    //     // Views fix
    //     update_post_meta($post_id, 'views_counter', $views);
    // }
	if( !empty($post_meta) && isset($post_meta['style']) && defined('EPCL_PLUGIN_PATH') ){

		$post_style = $post_meta['style'];
		if( $post_style === '' ) $post_style = 'standard';

		$enable_sidebar = $post_meta['enable_sidebar'];
		if( !$enable_sidebar ){
            $enable_sidebar = false;
            $single_class = ' no-sidebar';
        }

	}

    if( !is_active_sidebar('epcl_sidebar_default') ){
        $enable_sidebar = false;
        $single_class .= ' no-sidebar';
    }
    if( !$post_style || !has_post_thumbnail() ){
        $post_style = 'standard';
    }
    
    if( !empty($epcl_theme) && $epcl_theme['single_post_layout'] === 'standard' ){
        $post_style = 'standard';
    }
    if( !empty($epcl_theme) && $epcl_theme['single_post_layout'] === 'fullcover' ){
        $post_style = 'fullcover';
    }
    if( !empty($epcl_theme) && $epcl_theme['enable_post_sidebar'] === 'enabled'){
        $enable_sidebar = true;
        $single_class = '';
    }
    if( !empty($epcl_theme) && $epcl_theme['enable_post_sidebar'] === 'disabled'){
        $enable_sidebar = false;
        $single_class .= ' no-sidebar';
    }
    
    // Disable featured image globally
    if( !empty($epcl_theme) && isset($epcl_theme['enable_featured_image']) && $epcl_theme['enable_featured_image'] == '0'){
        $post_style = 'standard';
    }

    // Primary category (optional)
    $post_class = epcl_get_primary_category( '', $post_meta, $post_id );
    $epcl_mode = epcl_get_mode();
	?>
	<!-- start: #single -->
    <main id="single" class="main grid-container <?php echo esc_attr($post_style.$single_class); ?>" data-post-id="<?php the_ID(); ?>">
    
        <!-- Fullcover Style -->
        <?php if( $post_style == 'fullcover' ): ?>
            <?php get_template_part('partials/single/style-fullcover'); ?>
        <?php endif; ?>

		<!-- start: .center -->
	    <div class="content row">

            <!-- start: .epcl-page-wrapper -->
            <div class="epcl-page-wrapper">

                <!-- start: .content -->
                <div class="left-content grid-70 np-mobile">

                    <article <?php post_class('main-article'.$post_class); ?>>

                        <?php edit_post_link( esc_html__('Edit this post', 'maktub'), '', '', '', 'edit-post-button epcl-button hide-on-mobile hide-on-tablet'); ?>

                        <?php if( $post_style == 'standard' ): ?>
                            <?php get_template_part('partials/single/style-standard'); ?>
                        <?php endif; ?>
                                            
                        <?php if( $post_style == 'fullcover' ): ?>
                            <h1 class="main-title title textcenter"><?php the_title(); ?></h1>
                            <?php if( empty($epcl_theme) || $epcl_theme['single_enable_meta_data'] === '1' ): ?>
                                <?php get_template_part('partials/meta-info'); ?>
                            <?php endif; ?> 
                        <?php endif; ?>                                            

                        <section class="post-content">

                            <?php
                            if( function_exists( 'epcl_render_global_ads' ) ){
                                epcl_render_global_ads('single_top');
                            }
                            ?>

                            <?php if( !empty($epcl_theme) && $epcl_theme['enable_sticky_share_buttons'] !== '0' && function_exists('epcl_render_share_buttons') ): ?>
                                <div class="epcl-share-container hide-on-mobile">
                                    <?php epcl_render_share_buttons('top'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="text">
                                <?php the_content(); ?>
                                <?php
                                    if ( is_singular( 'attachment' ) ) {
                                        echo '<h2 class="title usmall">'.esc_html__('Published in:', 'maktub').'</h2>';
                                        // Parent post navigation.
                                        the_post_navigation();
                                        echo '<br>';
                                    }
                                ?>
                            </div>
                            <div class="clear"></div>
                            
                            <?php if( get_the_category() && epcl_get_option('enable_single_category', true) ): ?>
                                <div class="tags textcenter">
                                    <p class="title usmall"><?php esc_html_e('Categorized in:', 'maktub'); ?></p>
                                    <?php echo epcl_render_categories('single-categories', 99); ?>
                                </div>
                            <?php endif; ?>

                            <?php if( get_the_tags() && epcl_get_option('enable_single_tags', true) ): ?>
                                <div class="bottom-tags">
                                    <p class="title usmall"><?php esc_html_e('Tagged in:', 'maktub'); ?></p>
                                    <?php the_tags('', ', '); ?>
                                </div>
                            <?php endif; ?>

                            <?php
                                $link_pages_args = array(
                                    'before'           => '<div class="epcl-pagination link-pages section"><div class="nav"><span class="page-number title">'.esc_html__('Pages', 'maktub').'</span>',
                                    'after'            => '</div></div>',
                                    'link_before'      => '',
                                    'link_after'       => '',
                                    'next_or_number'   => 'number',
                                    'separator'        => '',
                                    'nextpagelink'     => esc_html__('Next', 'maktub'),
                                    'previouspagelink' => esc_html__('Previous', 'maktub'),
                                    'pagelink'         => '<span class="page-number">%</span>',
                                    'echo'             => 1
                                );
                                wp_link_pages( $link_pages_args );
                            ?>                                                          

                            <?php
                            if( function_exists( 'epcl_render_global_ads' ) ){
                                epcl_render_global_ads('single_bottom');
                            }
                            ?> 
                            
                            <?php if( function_exists('epcl_render_copy_permalink') && epcl_get_option('enable_share_buttons', true)  ): ?>
                                <?php epcl_render_copy_permalink(); ?>
                            <?php endif; ?>     

                        </section>

                    </article>

                    <?php if( epcl_get_option('enable_single_author', true) ): ?>
                        <?php get_template_part('partials/author-box'); ?>                               
                    <?php endif; ?>

                    <!-- start: .epcl-comments -->
                    <div id="show-comments" class="epcl-comments section np-bottom">

                        <?php if( empty($epcl_theme) || $epcl_theme['hosted_comments'] == 1 ): // Self Hosted ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>

                        <?php if( !empty($epcl_theme) && $epcl_theme['hosted_comments'] == 2 && $epcl_theme['disqus_id'] ): // Disqus ?>
                            <!-- start: disqus integration -->
                            <div id="comments" class="section bg-white">
                                <h3 class="title bordered"><?php esc_html_e('Comments', 'maktub'); ?><span class="border"></span></h3>
                                <div id="disqus_thread"></div>
                            </div>
                            <noscript><?php esc_html_e('Please enable JavaScript to view the', 'maktub'); ?> <a href="https://disqus.com/?ref_noscript" rel="nofollow"><?php esc_html_e('comments powered by Disqus.', 'maktub'); ?></a></noscript>
                            <!-- end: disqus integration -->
                        <?php endif; ?>

                        <?php if( !empty($epcl_theme) && $epcl_theme['hosted_comments'] == 3 ): // Disqus ?>
                            <!-- start: facebook comments -->
                            <div id="comments" class="section bg-white">
                                <h3 class="title bordered"><?php esc_html_e('Comments', 'maktub'); ?><span class="border"></span></h3>
                                <div class="clear"></div>
                                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
                            </div>
                            <!-- end: facebook comments -->
                            <div id="fb-root"></div>                        
                        <?php endif; ?>

                        <div class="clear"></div>
                    </div>
                    <!-- end: .epcl-comments --> 

                    <?php remove_filter( 'has_post_thumbnail', 'epcl_disable_featured_image' ); ?>
                    
                    <?php if( epcl_get_option('related_posts', true) ): ?>
                        <?php get_template_part('partials/single/related-articles'); ?>
                        <div class="clear"></div> 
                    <?php endif; ?>                             

                    <?php if( epcl_get_option('siblings_posts', true) ): ?>
                        <?php get_template_part('partials/single/siblings-articles'); ?>
                    <?php endif; ?>

                    <div class="clear"></div>

                </div>
                <!-- end: .content -->

                <?php
                if( $enable_sidebar ){
                    get_sidebar();
                }
                ?>

            </div>
            <!-- end: .center -->
        
        </div>
        <!-- end: .epcl-page-wrapper -->

	</main>
	<!-- end: #single -->

<?php endwhile; ?>

<?php get_footer(); ?>
