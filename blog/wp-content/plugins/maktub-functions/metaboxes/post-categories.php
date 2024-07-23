<?php

$prefix = EPCL_THEMEPREFIX.'_';
$prefix_key = 'epcl_post_categories_';

$page_key = 'epcl_post_categories';

CSF::createTaxonomyOptions( $page_key, array(
    'title' => 'General Information',
    'taxonomy' => 'category',
) );

CSF::createSection( $page_key, array(
    // 'title'  => 'Modules creator',
    // 'icon'   => 'fa fa-rocket',
    'fields' => array(
        array(
			'id' => 'main_color',
			'type' => 'color',
			'title' => esc_html__('Category Main Color', 'epcl_framework'),
			'desc' => esc_html__('(Optional) add a custom color for tag cloud widget.', 'epcl_framework'),
			'default' => $primary_color,
			// 'validate' => 'color',
			'transparent' => false
        ),
        array (
			'id' => 'carousel_image',
            'title' => esc_html__("Carousel Image (optional)", 'epcl_framework'),
			'desc' => __('Note: the image will be used on the custom homepage (with modules).<br><b>Recommended Size:</b> 768x450px', 'epcl_framework'),
            'type' => 'media',                    
            'url' => false,
            'preview'=> true,
            'button_title' => 'Upload Image'
        ),
        array (
			'id' => 'archives_image',
            'title' => esc_html__("Archives Background Image (optional)", 'epcl_framework'),
			'desc' => __('Recommended: use a wide image (not square or vertical) because is going to be used as background for Archives Pages Description container.<br><b>Recommended Size:</b> 1550x325px', 'epcl_framework'),
            'type' => 'media',                    
            'url' => false,
            'preview'=> true,
            'button_title' => 'Upload Image'
        ),
    )
) );
