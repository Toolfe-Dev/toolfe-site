<?php
function epcl_display_post_format($format = '', $post_id){

	if( !defined('EPCL_PLUGIN_PATH') ) // If not custom metaboxes, always uses format image
		$format = 'image';

	$prefix = EPCL_THEMEPREFIX.'_';
	switch($format){

        default: // Standard and Image post format
		case 'image':
			return epcl_get_image_format($post_id);
        break;
        
		case 'video':
            return epcl_get_video_format($post_id);
        break;
        
		case 'gallery':
            return epcl_get_gallery_format($post_id);
        break;
        
		case 'audio':
            return epcl_get_audio_format($post_id);
        break;
        
	}
}

function epcl_get_image_format($post_id){
    $index = get_query_var('index');
    $epcl_theme = epcl_get_theme_options();
   
    $post_style = get_query_var('epcl_post_style'); // Grid or Classic
    $epcl_module = epcl_get_module_options();
    $post_meta = get_post_meta( $post_id, 'epcl_post', true );

    $class =  $image_alt = $thumb_url = '';
    $loop_post_style = 'small-image';

    // Pendiente: mejorar estilo si no hay post_meta
    if( !empty($post_meta) && !isset($post_meta['loop_style']) ){
        $loop_post_style = 'small-image'; // text-only
        if(  $post_style == 'grid' && epcl_get_option('grid_loop_style', 'inherit') !== 'inherit' ){
            $loop_post_style = epcl_get_option('grid_loop_style', 'inherit');
        }
        if( $post_style == 'classic' && epcl_get_option('classic_loop_style', 'inherit') !== 'inherit' ){
            $loop_post_style = epcl_get_option('classic_loop_style', 'inherit');
        }
        $class = 'post-style-'.$loop_post_style;
    }
    
    // Loop
    if( !is_single() ){
        $optimized_image = '';
        $size = 'medium';
        
        if( !empty( $epcl_module) && $epcl_module['layout'] == 'grid_posts' ){
            $size = 'thumbnail';
        }

        // If is AMP loop, always force small-image layout for better speed results
        if( epcl_is_amp() ){
            $size = 'thumbnail';
            if( !empty($post_meta) && isset($post_meta['loop_style']) && $post_meta['loop_style'] == 'standard-image' ){
                $post_meta['loop_style'] = 'small-image';
            }            
        }else{
            if( !empty($post_meta) && isset($post_meta['loop_style']) ){
                if(  $post_style == 'grid' && epcl_get_option('grid_loop_style', 'inherit') !== 'inherit' ){
                    $post_meta['loop_style'] = epcl_get_option('grid_loop_style', 'inherit');
                }
                if( $post_style == 'classic' && epcl_get_option('classic_loop_style', 'inherit') !== 'inherit' ){
                    $post_meta['loop_style'] = epcl_get_option('classic_loop_style', 'inherit');
                }
            }
        }

        // Get optimized image if is assigned one
        if( defined('EPCL_PLUGIN_PATH') && !empty($post_meta) && isset($post_meta['optimized_image']) ){
            $optimized_image = $post_meta['optimized_image'];
            if( !empty($optimized_image) && isset($optimized_image['alt']) ){
                $image_alt = $optimized_image['alt'];
            }            
        }  
        // Get loop style (small image or standard)
        if( !empty($post_meta) && isset($post_meta['loop_style']) && $post_meta['loop_style'] != '' ){
            $loop_post_style = $post_meta['loop_style'];
            $class .= 'post-style-'.$post_meta['loop_style'];
        } 

        // Change size if the image is larger
        if( $loop_post_style == 'standard-image' ){
            $size = 'medium_large';
        }
        $thumb_url = get_the_post_thumbnail_url($post_id, $size);

        // Overwrite default img if there is any optimized image
        if( !empty($optimized_image) && $optimized_image['url'] ){
            $thumb_url = $optimized_image['url'];
        }
        if( !$thumb_url ){
            $class = 'hidden';
        }
    // Single Post
    }else{
        $single_size = 'epcl_classic';
        if( isset($post_meta['style']) && $post_meta['style'] == 'fullcover' ){
            $single_size = 'epcl_fullcover';
        }
        $image_id = get_post_thumbnail_id( get_the_ID() );
        $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
        // On mobile always force Classic image size (even on fullcover style)
        if( wp_is_mobile() ){
            $single_size = 'epcl_classic';
        }
        
    }
    if( !$image_alt ){
        $image_alt = get_the_title();
    }
    if( is_single() && !has_post_thumbnail() ) return;
    if( $index == 0){
        $epcl_theme['enable_lazyload'] = false;
    }

    $epcl_mode = epcl_get_mode();
    if( $epcl_mode == 'text' ){
        $loop_post_style = 'text-only';
        $class = 'post-style-text';
        if( !$thumb_url ){
            $class .= ' hidden';
        }
    }
    
    // For image mode from theme options
    if( $epcl_mode == 'image' ){
        if( $loop_post_style == 'text-only' || $loop_post_style == 'small-image' ){
            $loop_post_style = 'small-image';
            $class = 'post-style-small-image';
        } else {
            $loop_post_style = 'standard-image';
            $class = 'post-style-standard-image';
        }        
    }
   
?>
    <!-- start: .post-format-image -->
	<div class="post-format-image <?php echo esc_attr($class); ?>">
        <?php if( is_single() ): // Single Post ?>

            <?php if( has_post_thumbnail() ): ?>
                <div class="featured-image epcl-decoration-border">
                    <div class="epcl-loader">
                        <?php the_post_thumbnail( $single_size, array('class' => 'fullwidth', 'data-lazy' => 'false') ); ?>
                    </div>
                </div>
            <?php endif; ?>

		<?php else: // Loops ?>
            <!-- start: .featured-image -->
			<div class="featured-image epcl-flex">
                <?php
                $loop_class = '';
                if( !empty($epcl_theme) && $epcl_theme['enable_lazyload']  == 1 && !epcl_is_amp() ){
                    $loop_class .= ' epcl-loader';
                }
                if( !empty($epcl_theme) && $epcl_theme['enable_lazyload'] == 0){
                    $loop_class .= 'loaded';
                }
                if( empty($epcl_theme) ){
                    $loop_class .= 'loaded';
                }
                ?>
                <!-- Loop: Small Image Style -->
                <?php if( $thumb_url && $loop_post_style == 'small-image' ): ?>
                    <a href="<?php the_permalink(); ?>" class="thumb epcl-dropcap <?php if(!epcl_is_amp()) echo 'main-effect '; echo esc_attr($loop_class); if( $post_style == 'grid') echo ' large'; ?>">
                        <?php if( epcl_is_amp() ): ?>
                            <amp-img class="cover" layout="fill" src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"></amp-img>
                        <?php else: ?>
                            <?php if( !empty($epcl_theme) && $epcl_theme['enable_lazyload'] == '1' ): ?>
                                <span class="fullimage cover lazy" role="img" data-src="<?php echo esc_url($thumb_url); ?>"></span>
                                <span class="fullimage fake-layout cover lazy" data-src="<?php echo esc_url($thumb_url); ?>"></span>
                            <?php else: ?>
                                <span class="fullimage cover" role="img" style="background-image: url(<?php echo esc_url($thumb_url); ?>);"></span>
                                <span class="fullimage fake-layout cover" style="background-image: url(<?php echo esc_url($thumb_url); ?>);"></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>  
                <!-- Loop: Standard Image Style -->
                <?php if( $thumb_url && $loop_post_style == 'standard-image' ): ?>
                    <a href="<?php the_permalink(); ?>" class="thumb translate-effect <?php echo esc_attr($loop_class); ?>">
                        <?php if( epcl_is_amp() ): ?>
                            <amp-img class="cover" layout="fill" src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"></amp-img>
                        <?php else: ?>
                            <?php if( !empty($epcl_theme) && $epcl_theme['enable_lazyload'] == '1' ): ?>
                                <img class="post-image lazy" alt="<?php echo esc_attr($image_alt); ?>" data-src="<?php echo esc_url($thumb_url); ?>" src="<?php echo EPCL_THEMEPATH; ?>/assets/images/transparent.gif" width="694" height="385">
                            <?php else: ?>
                                <img class="post-image" alt="<?php echo esc_attr($image_alt); ?>" src="<?php echo esc_url($thumb_url); ?>">
                            <?php endif; ?>
                        <?php endif; ?>
                        <span class="decoration"></span>
                    </a>
                <?php endif; ?> 
                <!-- Loop: Text only style -->
                <?php if( $loop_post_style == 'text-only' ): ?>
                    <a class="epcl-dropcap main-effect text-only <?php if( $post_style == 'grid') echo 'large'; ?>" href="<?php the_permalink(); ?>">
                        <span class="fake-layout"><?php echo mb_substr(get_the_title(), 0, 1); ?></span>
                    </a>
                <?php endif ; ?>

                <div class="info">                
                    <h1 class="main-title title underline-effect large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php if( $post_style == 'classic'): ?>
                        <div class="hide-on-mobile">
                            <?php get_template_part('partials/meta-info'); ?>
                        </div>
                    <?php endif; ?>
                </div>
  
			</div>
            <!-- end: .featured-image -->

            <div class="clear"></div>
            <?php if( $post_style == 'classic'): ?>
                <div class="hide-on-tablet hide-on-desktop">
                    <?php get_template_part('partials/meta-info'); ?>
                </div>
            <?php endif; ?>
            <?php if( $post_style == 'grid'): ?>
                <?php get_template_part('partials/meta-info'); ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <!-- end: .post-format-image -->
<?php
}

function epcl_get_video_format($post_id){
    $type = 'youtube';
    $height = 225;
    $url = '';

    $epcl_theme = epcl_get_theme_options();
    $post_meta = get_post_meta( $post_id, 'epcl_post_video', true );

	$width = '100%';
    $video_id = $video_url = '';
    $show_featured_image = '';
    if( !empty($post_meta) ){
        $show_featured_image = $post_meta['show_featured_image'];
        $type = $post_meta['video_type'];
        $url = $post_meta['video_url'];
    }    

    if( !is_single() && $show_featured_image ){
        return epcl_get_image_format($post_id);
    }

    $class = '';

	if ($type == 'youtube') {
        preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
        if( !$url ) return;
		$video_url ='https://www.youtube.com/embed/'.$matches[0].'?rel=0&showinfo=0';
	} elseif ($type == 'vimeo') {
        $result = preg_match('/(\d+)/', $url, $matches);
        if( !$url ) return;
		if($result){
			$video_id = $matches[0];
		}else{
			$video_id = $url;
		}
		$video_url = 'https://player.vimeo.com/video/'.$video_id;
    } elseif ($type == 'custom') {
        $custom_embed = $post_meta['custom_embed'];
        if( !$custom_embed ) return;
        preg_match('/src="([^"]+)"/', $custom_embed, $match);
        $video_url = $match[1];
    }

?>
	<div class="post-format-wrapper epcl-loader <?php echo esc_attr($class); ?>">
        <div class="post-format-video">        
            <?php if( epcl_is_amp() ): ?>
                <amp-iframe layout="responsive" width="480" height="250" sandbox="allow-scripts allow-same-origin allow-popups" title="<?php the_title(); ?>" src="<?php echo esc_url($video_url); ?>" allowfullscreen>
                    <amp-img layout="fill" src="<?php echo EPCL_THEMEPATH; ?>/assets/images/transparent.gif" placeholder></amp-img>
                </amp-iframe>
            <?php else: ?>    
                <?php if( epcl_get_option('enable_lazyload_embed', true) ): ?>
                    <iframe title="<?php the_title(); ?>" data-lazy="true" data-src="<?php echo esc_url($video_url); ?>" allowfullscreen height="<?php echo esc_attr($height); ?>" style="width: <?php echo esc_attr($width); ?>"></iframe>
                <?php else: ?>
                    <iframe title="<?php the_title(); ?>" src="<?php echo esc_url($video_url); ?>" allowfullscreen height="<?php echo esc_attr($height); ?>" style="width: <?php echo esc_attr($width); ?>"></iframe>
                <?php endif; ?>
            <?php endif; ?>
        </div>

    </div>

    <?php if( !is_single() && epcl_get_option('post_title_layout', 'inside_images') == 'inside_images' ): ?>
        <div class="info below-image textcenter">                
            <h1 class="main-title title underline-effect large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php get_template_part('partials/meta-info'); ?>
        </div>
    <?php endif; ?>

<?php
}

function epcl_get_gallery_format($post_id){
    $post_meta = get_post_meta( $post_id, 'epcl_post', true );
    $post_gallery = get_post_meta( $post_id, 'epcl_post_gallery', true );

    if( empty($post_gallery['gallery']) ) return;

    $gallery_images = explode(',', $post_gallery['gallery'] );
    $epcl_theme = epcl_get_theme_options();
    $class = $post_style = '';

    if( !empty($post_meta) ){
        $post_style = $post_meta['style'];
    }    
    
    $size = 'epcl_classic_post';
    if( is_single() && $post_style == 'fullcover' ){
        $size = 'epcl_fullcover';
    }
    $height = 225;
    if( !wp_is_mobile() ){
        $height = 400;
    }
?>
	<div class="post-format-wrapper <?php echo esc_attr($class); ?>">

        <div class="post-format-gallery epcl-decoration-border">
            <?php if( epcl_is_amp() ): ?>
                <amp-carousel height="<?php echo absint($height); ?>" layout="fill" type="slides">
                    <?php foreach($gallery_images as $id): ?>
                        <?php
                        $image_url = wp_get_attachment_image_src($id, $size);
                        $image_alt = get_post_meta($id, '_wp_attachment_image_alt', TRUE);
                        ?>
                        <amp-img class="cover" src="<?php echo esc_url( $image_url[0] ); ?>" layout="fill" alt="<?php echo esc_attr( $image_alt ); ?>">
                            <?php if( !is_single() ): ?>
                                <a href="<?php the_permalink(); ?>" class="full-link"></a>
                            <?php endif; ?>
                        </amp-img>
                    <?php endforeach; ?>
                    
                </amp-carousel>
            <?php else: ?>
                <div class="slick-slider" data-rtl="<?php echo is_rtl(); ?>">
                    <?php foreach($gallery_images as $id): ?>
                        <?php
                        $image_url = wp_get_attachment_image_src($id, $size);
                        ?>
                        <div class="item thumb epcl-loader">
                            <?php if( !empty($epcl_theme) && $epcl_theme['enable_lazyload'] == '1' ): ?>
                                <span class="fullimage cover lazy" data-src="<?php echo esc_url( $image_url[0] ); ?>"></span>
                            <?php else: ?>
                                <span class="fullimage cover" style="background-image: url(<?php echo esc_url( $image_url[0] ); ?>);"></span>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="full-link"></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

	</div>

    <?php if( !is_single() ): ?>
        <div class="info below-image textcenter">                
            <h1 class="main-title title underline-effect large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php get_template_part('partials/meta-info'); ?>
        </div>
    <?php endif; ?>

<?php
}

/* To do: self hosted audio */

function epcl_get_audio_format($post_id){
    $post_meta_audio = get_post_meta( $post_id, 'epcl_post_audio', true );
    if( empty($post_meta_audio) ) return;

    $show_featured_image = $post_meta_audio['show_featured_image'];
    $url = $post_meta_audio['soundcloud_url'];
    
    if( !is_single() && $show_featured_image ){
        return epcl_get_image_format($post_id);
    }

    if( !is_single() && !$show_featured_image && !$url ){
        return;
    }
    
    if( is_single() && !$url ){
        return epcl_get_image_format($post_id);
    }

    $class = '';

	$width = '100%';
	$embed_code = wp_oembed_get( $url );
	preg_match('/src="([^"]+)"/', $embed_code, $match);
	$url = $match[1];
    $url = str_replace('&', '&amp;', $url);
    $height = 225;
?>
    <div class="post-format-audio post-format-wrapper epcl-loader <?php echo esc_attr($class); ?>">
        <?php if( epcl_is_amp() ): ?>
            <amp-iframe layout="responsive" width="480" height="150" sandbox="allow-scripts allow-same-origin allow-popups" title="<?php the_title(); ?>" src="<?php echo esc_url($url); ?>" allowfullscreen>
                <amp-img layout="fill" src="<?php echo EPCL_THEMEPATH; ?>/assets/images/transparent.gif" placeholder></amp-img>
            </amp-iframe>
        <?php else: ?>    
            <?php if( epcl_get_option('enable_lazyload_embed', true) && !epcl_is_amp() ): ?>
                <iframe title="<?php the_title(); ?>" data-lazy="true" data-src="<?php echo esc_url($url); ?>" allowfullscreen height="<?php echo absint($height); ?>" style="width: <?php echo esc_attr($width); ?>"></iframe>
            <?php else: ?>
                <iframe src="<?php echo esc_url($url); ?>" layout="fill" allowFullScreen height="<?php echo absint($height); ?>" style="width: <?php echo esc_attr($width); ?>"></iframe>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <?php if( !is_single() ): ?>
        <div class="info below-image textcenter">                
            <h1 class="main-title title underline-effect large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php get_template_part('partials/meta-info'); ?>
        </div>
    <?php endif; ?>
<?php
}