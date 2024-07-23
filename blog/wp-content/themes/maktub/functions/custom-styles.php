<?php

/* Custom styles generated from theme options panel */

if( function_exists('epcl_generate_custom_styles') ) return;

function epcl_generate_custom_styles(){
    $epcl_theme = epcl_get_theme_options();

    $css = '';

    if( empty($epcl_theme) ) return;

    $primary_color = '#FF4C60';
    $secondary_color = '#65EBE7';
    $titles_color = '#454360';
    $text_color = '#596172';
    $border_color = '#EEEEEE';
    $input_bg_color = '#F9F9FE';
    $background_color = '#F9F9FE';
    $black = '#4B4870';
    $white = '#FFFFFF';

    // Demo
    if( isset($_GET['bg']) ){
        $epcl_theme['background_type'] = 2;
    }

	/* @group General Settings */

    if( $epcl_theme['background_type'] == 1 && $epcl_theme['bg_body_pattern']['url'] )
        $css .= 'body:before{ background: url('.$epcl_theme['bg_body_pattern']['url'].') repeat; }';

    if( $epcl_theme['background_type'] == 2  && $epcl_theme['bg_body_color'] != '' && $epcl_theme['bg_body_color'] != $background_color)
        $css .= 'body{ background: '.$epcl_theme['bg_body_color'].'; }';

    if( $epcl_theme['background_type'] == 3 && $epcl_theme['bg_body_full']['url'] )
        $css = 'body:before{ background: url('.$epcl_theme['bg_body_full']['url'].') no-repeat top center !important; }';

    if( $epcl_theme['background_type'] == 4 && $epcl_theme['bg_body_gradient'] )
        $css = 'body:before{
            background: -webkit-linear-gradient(0deg, '.$epcl_theme['bg_body_gradient']['from'].' 30%, '.$epcl_theme['bg_body_gradient']['to'].' 100%);
            background: linear-gradient(90deg, '.$epcl_theme['bg_body_gradient']['from'].' 30%, '.$epcl_theme['bg_body_gradient']['to'].' 100%);
        }';

    // Logo with icons
    if( $epcl_theme['logo_type'] == 2 && $epcl_theme['logo_text_color'] !== $black){

        $css .= '#header .logo a, #header a.sticky-logo{ 
            color: '.$epcl_theme['logo_text_color'].'; }';

        $css .= '#header .logo a i.fa, #footer .logo a i.fa{ 
            color: '.$epcl_theme['logo_icon_color'].'; }';

    }
    
    // Primary Color
	if( $epcl_theme['primary_color'] != $primary_color ){  
        $css .= ':root{ --epcl-main-color: '.$epcl_theme['primary_color'].'; }';
    }

    // Secondary Color (decorations and effects)
    if( $epcl_theme['secondary_color'] != $secondary_color ){  
        $css .= ':root{ --epcl-secondary-color: '.$epcl_theme['secondary_color'].'; }';
    }

    // Third Color (titles)
    if( $epcl_theme['third_color'] != $black ){  
        $css .= ':root{ --epcl-black-color: '.$epcl_theme['third_color'].'; }';
    }

    // Titles Color
    if( $epcl_theme['text_color'] != $text_color ){  
        $css .= ':root{ --epcl-text-color: '.$epcl_theme['text_color'].'; }';
    }

    // Text Color
    if( $epcl_theme['titles_color'] != $titles_color ){  
        $css .= ':root{ --epcl-titles-color: '.$epcl_theme['titles_color'].'; }';
    }

    /* @end */
    
    /* @group Header Colors */

    if( $epcl_theme['header_bg_color'] != 'transparent' ){
        $css .= '#header{ 
            background-color: '.$epcl_theme['header_bg_color'].'; }';
    }

    if( $epcl_theme['header_menu_bg_color'] != $white ){
        $css .= '#header ul.menu, nav.mobile.main-nav{ 
            background: '.$epcl_theme['header_menu_bg_color'].'; }';
    }

    if( $epcl_theme['header_sticky_bg_color'] != $white ){
        $css .= '#header.is-sticky div.menu-wrapper{ 
            background-color: '.$epcl_theme['header_sticky_bg_color'].'; }';
    }

    // Header menu links
    if( $epcl_theme['header_menu_link_color']['color'] != $black ){

        $css .= '#header nav ul.menu > li > a:not(.epcl-button), #header nav ul.menu li.menu-item-has-children:after{ 
            color: '.$epcl_theme['header_menu_link_color']['color'].'; }';
    }

    if( $epcl_theme['header_menu_link_color']['hover'] != $primary_color ){

        $css .= '#header nav ul.menu > li > a:hover{ 
            color: '.$epcl_theme['header_menu_link_color']['hover'].'; }';
    }

    if( $epcl_theme['header_menu_link_color']['active'] != $primary_color ){

        $css .= '#header nav ul.menu > li.current-menu-ancestor>a, #header nav ul.menu > li.current-menu-item>a{ 
            color: '.$epcl_theme['header_menu_link_color']['active'].'; }';
    }

    // Header submenu links
    if( $epcl_theme['header_submenu_link_color']['color'] != $black ){

        $css .= '.main-nav ul.sub-menu li a{ 
            color: '.$epcl_theme['header_submenu_link_color']['color'].'; }

            @media screen and (max-width: 980px){ #header nav ul.menu>li>a, #header nav ul.menu li.menu-item-has-children:after{ color: '.$epcl_theme['header_submenu_link_color']['color'].'; }}';
    }

    if( $epcl_theme['header_submenu_link_color']['hover'] != $primary_color ){

        $css .= '.main-nav ul.sub-menu li a:hover{ 
            color: '.$epcl_theme['header_submenu_link_color']['hover'].'; }';
    }

    if( $epcl_theme['header_submenu_link_color']['active'] != $primary_color ){
        $css .= '.main-nav ul.sub-menu li.current-menu-item a{ 
            color: '.$epcl_theme['header_submenu_link_color']['active'].'; }';
    }   
    
    if( $epcl_theme['header_submenu_bg_color'] != $white ){
        $css .= '#header nav ul.sub-menu{ 
            background: '.$epcl_theme['header_submenu_bg_color'].' !important; }';
    }

	if( $epcl_theme['header_mobile_icon_color'] != $black && $epcl_theme['header_mobile_icon_color'] != '' ){
		$css .= '#header div.menu-mobile svg{ 
            fill: '.$epcl_theme['header_mobile_icon_color'].'; }';
	}

    if( $epcl_theme['header_mobile_link_color'] != $black && $epcl_theme['header_mobile_link_color'] != '' ){
		$css .= 'nav.mobile.main-nav ul.menu li a, nav.mobile.main-nav ul.menu li.menu-item-has-children:after{ 
            color: '.$epcl_theme['header_mobile_link_color'].' !important; }';
	}

    /* @end */

    /* @group Content Colors */

    if( isset($epcl_theme['selection_bg_color']) && $epcl_theme['selection_bg_color'] != $text_color ){
        $css .= '::selection{ background-color: '.$epcl_theme['selection_bg_color'].'; }';
    }
    if( isset($epcl_theme['selection_text_color']) && $epcl_theme['selection_text_color'] != $white ){
        $css .= '::selection{ color: '.$epcl_theme['selection_text_color'].'; }';
    }

    if( isset($epcl_theme['content_border_color']) && $epcl_theme['content_border_color'] != $border_color ){  

        $css .= ':root{ --epcl-border-color: '.$epcl_theme['content_border_color'].'; }';
    }

    if( isset($epcl_theme['main_boxes_color']) && $epcl_theme['main_boxes_color'] != $white ){  

        $css .= 'div.articles article, #single .main-article, #author, .bg-white, div.articles.grid-posts .epcl-bg, .epcl-carousel .item article, .epcl-popular-categories .item, .epcl-slider{ background: '.$epcl_theme['main_boxes_color'].'; }';
    }

    /* @end */

    /* @group Buttons Colors */

    // Content links
    if( $epcl_theme['content_link_color']['color'] != $black ){
        $css .= 'a, div.text a:not([class]), div.text a:not([class]) strong
        { 
            color: '.$epcl_theme['content_link_color']['color'].'; }';
    }
    if( $epcl_theme['content_link_color']['hover'] != $primary_color ){
        $css .= 'a:hover, div.text a:not([class]):hover, div.text a:not([class]):hover strong
        { 
            color: '.$epcl_theme['content_link_color']['hover'].'; }';
    }

    // Main button
    if( $epcl_theme['primary_button']['background'] != $black ){

        $css .= '.epcl-button.dark:not(.epcl-shortcode), .epcl-button:not(.epcl-shortcode).bordered:after, #single .epcl-pagination div.nav a, #footer a#back-to-top:hover
        {
                background-color: '.$epcl_theme['primary_button']['background'].'; }';

        $css .= '.epcl-button:not(.epcl-shortcode).bordered:before, .epcl-button:not(.epcl-shortcode).bordered:before
        {
                border-color: '.$epcl_theme['primary_button']['background'].'; }';

    }	

    // Main button
    if( $epcl_theme['primary_button']['text_color'] != $white ){

        $css .= '.epcl-button.dark:not(.epcl-shortcode), .epcl-button:not(.epcl-shortcode).bordered:after,
        #single .epcl-pagination div.nav a, #footer a#back-to-top, #header .subscribe.epcl-button
        {
                color: '.$epcl_theme['primary_button']['text_color'].'; }';

    }

    // Secondary button
    if( $epcl_theme['secondary_button']['background'] != $primary_color ){

        $css .= '.epcl-button:not(.epcl-shortcode), .epcl-button.secondary:not(.epcl-shortcode), #single .epcl-pagination div.nav>span.current, button[type=submit], input[type=submit]
        {
                background-color: '.$epcl_theme['secondary_button']['background'].'; }';

    }	

    // Secondary button
    if( $epcl_theme['secondary_button']['text_color'] != $white ){

        $css .= '.epcl-button:not(.epcl-shortcode), .epcl-button.secondary:not(.epcl-shortcode), #single .epcl-pagination div.nav>span.current, button[type=submit], input[type=submit]
        {
                color: '.$epcl_theme['secondary_button']['text_color'].'; }';

    }

    // Tag color
    if( $epcl_theme['tag_text_color']['color'] != $text_color ){
        $css .= 'div.tags a, .widget_tag_cloud a, .widget_epcl_tag_cloud a, .wp-block-tag-cloud a{ 
            color: '.$epcl_theme['tag_text_color']['color'].'; }';
    }
    if( $epcl_theme['tag_text_color']['hover'] != $primary_color ){
        $css .= 'div.tags a:hover, .widget_epcl_tag_cloud a:hover, .widget_tag_cloud a:hover{ 
            color: '.$epcl_theme['tag_text_color']['hover'].' !important; }';
    }
    if( $epcl_theme['tag_bg_color']['color'] != $white ){
        $css .= 'div.tags a, .widget_epcl_tag_cloud a, .widget_tag_cloud a, .wp-block-tag-cloud a{ 
            background-color: '.$epcl_theme['tag_bg_color']['color'].'; }';
    }
    if( $epcl_theme['tag_bg_color']['hover'] != $white ){
        $css .= 'div.tags a:hover, .widget_epcl_tag_cloud a:hover, .widget_tag_cloud a:hover, .wp-block-tag-cloud a:hover   { 
            background-color: '.$epcl_theme['tag_bg_color']['hover'].'; }';
    }

    /* @end */

    /* @group Sidebar Colors */

    if( $epcl_theme['sidebar_bg_color'] != 'transparent' ){
        $css .= '#sidebar{ 
            background-color: '.$epcl_theme['sidebar_bg_color'].'; padding-top: 25px; padding-bottom: 25px; }';
    }

    if( $epcl_theme['sidebar_text_color'] != $text_color && strlen($epcl_theme['sidebar_text_color']) > 2){
        $css .= '#sidebar, #sidebar .widget_rss .rss-date:not(.icon){ 
            color: '.$epcl_theme['sidebar_text_color'].'; }';
    }

    if( $epcl_theme['sidebar_link_color']['color'] != $text_color ){
        $css .= '#sidebar .widget a:not(.tag-cloud-link){ 
            color: '.$epcl_theme['sidebar_link_color']['color'].'; }';
    }

    if( $epcl_theme['sidebar_link_color']['hover'] != $primary_color ){
        $css .= '#sidebar .widget a:not(.tag-cloud-link):hover{ 
            color: '.$epcl_theme['sidebar_link_color']['hover'].'; }';
    }

    if( $epcl_theme['sidebar_title_color'] != $titles_color ){
        $css .= '#sidebar .widget .widget-title{ 
            color: '.$epcl_theme['sidebar_title_color'].'; }';
    }
    if( $epcl_theme['sidebar_title_decoration_color'] != $primary_color ){
        $css .= '#sidebar .widget .widget-title.bordered .border{ 
            background-color: '.$epcl_theme['sidebar_title_decoration_color'].'; }';
    }

    /* @end */

    /* @group Forms Colors */

    if( $epcl_theme['input_bg_color'] != $input_bg_color ){
        $css .= 'input[type=email], input[type=number], input[type=password], input[type=tel], input[type=text], input[type=url], textarea, select{ 
            background: '.$epcl_theme['input_bg_color'].'; }';
    }

    if( $epcl_theme['input_text_color'] != $text_color ){
        $css .= 'input[type=email], input[type=number], input[type=password], input[type=tel], input[type=text], input[type=url], textarea, select{ 
            color: '.$epcl_theme['input_text_color'].'; }';
        $css .= 'input[type=email]::-webkit-input-placeholder, input[type=number]::-webkit-input-placeholder, input[type=password]::-webkit-input-placeholder, input[type=tel]::-webkit-input-placeholder, input[type=text]::-webkit-input-placeholder, input[type=url]::-webkit-input-placeholder, textarea::-webkit-input-placeholder{ 
            color: '.$epcl_theme['input_text_color'].'; }';  
        $css .= 'input[type=email]:-moz-placeholder, input[type=number]:-moz-placeholder, input[type=password]:-moz-placeholder, input[type=tel]:-moz-placeholder, input[type=text]:-moz-placeholder, input[type=url]:-moz-placeholder, textarea:-moz-placeholder{ 
            color: '.$epcl_theme['input_text_color'].'; }';     
        $css .= 'input[type=email]::-moz-placeholder, input[type=number]::-moz-placeholder, input[type=password]::-moz-placeholder, input[type=tel]::-moz-placeholder, input[type=text]::-moz-placeholder, input[type=url]::-moz-placeholder, textarea::-moz-placeholder{ 
            color: '.$epcl_theme['input_text_color'].'; }'; 

        $css .= 'input[type=email]:focus, input[type=number]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=url]:focus, textarea:focus{ 
            color: '.$epcl_theme['input_text_color'].'; }';
    }

    if( $epcl_theme['label_text_color'] != $text_color ){
        $css .= 'label, .wpcf7 label{ 
            color: '.$epcl_theme['label_text_color'].'; }';
    }

    if( $epcl_theme['submit_bg_color'] != $primary_color ){   
        
        $css .= 'input[type="submit"], button[type="submit"]{
            background-color: '.$epcl_theme['submit_bg_color'].'; }';

    }	
    if( $epcl_theme['submit_text_color'] != $white ){
        $css .= 'input[type=submit], button[type="submit"], input[type=submit]:hover, button[type="submit"]:hover{ 
            color: '.$epcl_theme['submit_text_color'].'; }';
    }

    /* @end */

    /* @group Subscribe */

    if( isset($epcl_theme['footer_subscribe_background_color']) && $epcl_theme['footer_subscribe_background_color'] != $white )
        $css .= '#footer .subscribe{ background-color: '.$epcl_theme['footer_subscribe_background_color'].'; }';

    /* @end */

    /* @group Footer Colors */

    if( $epcl_theme['footer_bg_color'] != 'transparent' ){
        $css .= '#footer{ 
            background-color: '.$epcl_theme['footer_bg_color'].'; }';  
    }

    if( $epcl_theme['footer_text_color'] != $text_color ){
        $css .= '#footer .widgets, #footer .widget_rss .rss-date:not(.icon){ 
            color: '.$epcl_theme['footer_text_color'].'; }';
    }

    if( $epcl_theme['footer_link_color']['color'] != $text_color ){
        $css .= '#footer .widgets a:not(.tag-cloud-link){ 
            color: '.$epcl_theme['footer_link_color']['color'].'; }';
    }

    if( $epcl_theme['footer_link_color']['hover'] != $primary_color ){
        $css .= '#footer .widgets a:not(.tag-cloud-link):hover{ 
            color: '.$epcl_theme['footer_link_color']['hover'].'; }';
    }

    if( $epcl_theme['footer_title_color'] != $titles_color ){
        $css .= '#footer .widget .widget-title{ 
            color: '.$epcl_theme['footer_title_color'].'; }';
    }

    if( $epcl_theme['footer_title_decoration_color'] != $primary_color ){
        $css .= '#footer .widget .widget-title.bordered .border { 
            background-color: '.$epcl_theme['footer_title_decoration_color'].'; }';
    }

        if( $epcl_theme['footer_copyright_color'] != $text_color ){
            $css .= '#footer .published{ 
                color: '.$epcl_theme['footer_copyright_color'].'; }';
        }

        if( $epcl_theme['footer_copyright_link_color'] != $text_color ){
            $css .= '#footer .published a, #footer .published a:hover{ 
                color: '.$epcl_theme['footer_copyright_link_color'].'; }';
        }

    /* @end */

	/* @group Typography */

    // Regular Text
	if( $epcl_theme['body_font']['font-family'] && $epcl_theme['body_font']['font-family'] != 'Source Serif Pro')
		$css .= 'body, .epcl-button, .pagination div.nav a, .pagination div.nav>span, div.epcl-download a, input[type=text], input[type=password], input[type=email], input[type=tel], input[type=submit], input[type=url], textarea, select, select.custom-select, button, label, .wpcf7 label, #header nav ul.sub-menu li a, .nice-select .list li, .woocommerce button.button, .woocommerce a.button, div.text .has-drop-cap:not(:focus):first-letter{ font-family: "'.$epcl_theme['body_font']['font-family'].'"; }';
	
	if( $epcl_theme['body_font']['font-weight'] && $epcl_theme['body_font']['font-weight'] != '400' )
		$css .= 'body, input[type=text], input[type=password], input[type=email], input[type=tel], input[type=submit], input[type=url], textarea, select, select.custom-select, button, label, .wpcf7 label, div.text .has-drop-cap:not(:focus):first-letter{ font-weight: '.$epcl_theme['body_font']['font-weight'].'; }';
	
	if($epcl_theme['body_font']['font-size'] != '' && $epcl_theme['body_font']['font-size'] != '15')
        $css .= 'body, div.meta .meta-info{ font-size: '.$epcl_theme['body_font']['font-size'].'px; }';
        
	// Primary Titles
	if( $epcl_theme['primary_titles_font']['font-family'] && $epcl_theme['primary_titles_font']['font-family'] != 'Josefin Sans' )
		$css .= '.title, div.text h1, div.text h2, div.text h3, div.text h4, div.text h5, div.text h6, #header nav ul.menu > li > a, input[type=submit], #single #comments.hosted nav.pagination a, .epcl-button, div.meta, .widget_epcl_tag_cloud, .widget_tag_cloud, div.tags, .main-nav ul.menu li a, .epcl-pagination div.nav a, button[type=submit], input[type=submit], label, .wpcf7 label, .button, .epcl-button, .epcl-button:not(.epcl-shortcode), #single #comments.hosted .comment .comment-author, .epcl-dropcap{ font-family: "'.$epcl_theme['primary_titles_font']['font-family'].'"; }';
	
	if( $epcl_theme['primary_titles_font']['font-weight'] )
        $css .= '.title, div.text h1, div.text h2, div.text h3, div.text h4, div.text h5, div.text h6, input[type=submit], #single #comments.hosted nav.pagination a, .epcl-button{ font-weight: '.$epcl_theme['primary_titles_font']['font-weight'].'; }';

	// Sidebar Titles
	if( $epcl_theme['sidebar_titles_font']['font-family'] && $epcl_theme['sidebar_titles_font']['font-family'] != 'Josefin Sans' )
        $css .= 'aside .widget .widget-title, aside .title, .widget_rss a{ font-family: "'.$epcl_theme['sidebar_titles_font']['font-family'].'"; }';
        
    if( $epcl_theme['sidebar_titles_font']['font-weight'] && $epcl_theme['sidebar_titles_font']['font-weight'] != '700' )
		$css .= 'aside .widget .widget-title, aside .title, .widget_rss a{ font-weight: '.$epcl_theme['sidebar_titles_font']['font-weight'].'; }';

	// Sidebar regular text
	if( $epcl_theme['sidebar_font']['font-family'] && $epcl_theme['sidebar_font']['font-family'] != 'Source Serif Pro' )
        $css .= 'aside .widget{ font-family: "'.$epcl_theme['sidebar_font']['font-family'].'"; }';
        
    if( $epcl_theme['sidebar_font']['font-weight'] && $epcl_theme['sidebar_font']['font-weight'] != '400' )
		$css .= 'aside .widget{ font-weight: '.$epcl_theme['sidebar_font']['font-weight'].'; }';

	// Footer Titles
	if( $epcl_theme['footer_titles_font']['font-family'] && $epcl_theme['footer_titles_font']['font-family'] != 'Josefin Sans' )
        $css .= '#footer .widget .widget-title, #footer .title,  #footer .widget_rss a{ font-family: "'.$epcl_theme['footer_titles_font']['font-family'].'"; }';
        
    if( $epcl_theme['footer_titles_font']['font-weight'] && $epcl_theme['footer_titles_font']['font-weight'] != '700' )
		$css .= '#footer .widget .widget-title, #footer .title,  #footer .widget_rss a{ font-weight: '.$epcl_theme['footer_titles_font']['font-weight'].'; }';

	// Footer regular text
	if( $epcl_theme['footer_font']['font-family'] && $epcl_theme['footer_font']['font-family'] != 'Source Serif Pro' )
        $css .= '#footer .widget{ font-family: "'.$epcl_theme['footer_font']['font-family'].'"; }';

    if( $epcl_theme['footer_font']['font-weight'] && $epcl_theme['footer_font']['font-weight'] != '400' )
		$css .= '#footer .widget{ font-weight: '.$epcl_theme['footer_font']['font-weight'].'; }';
        
    // Blog single text
    if($epcl_theme['editor_font_size'] != '16')
        $css .= 'div.text{ font-size: '.$epcl_theme['editor_font_size'].'px; }';
        
	if($epcl_theme['h1_font_size'] != '34')
		$css .= 'div.text h1{ font-size: '.$epcl_theme['h1_font_size'].'px; }';
	
	if($epcl_theme['h2_font_size'] != '28')
		$css .= 'div.text h2{ font-size: '.$epcl_theme['h2_font_size'].'px; }';
	
	if($epcl_theme['h3_font_size'] != '24')
		$css .= 'div.text h3{ font-size: '.$epcl_theme['h3_font_size'].'px; }';
	
	if($epcl_theme['h4_font_size'] != '18')
		$css .= 'div.text h4{ font-size: '.$epcl_theme['h4_font_size'].'px; }';
	
	if($epcl_theme['h5_font_size'] != '16')
		$css .= 'div.text h5{ font-size: '.$epcl_theme['h5_font_size'].'px; }';
	
	if($epcl_theme['h6_font_size'] != '14')
        $css .= 'div.text h6{ font-size: '.$epcl_theme['h6_font_size'].'px; }';

    // Mobile Font Sizes
    if(isset($epcl_theme['mobile_body_font_size']) && $epcl_theme['mobile_body_font_size'] != '13')
    $css .= '@media screen and (max-width: 767px){ body{ font-size: '.$epcl_theme['mobile_body_font_size'].'px; } }';

    if(isset($epcl_theme['mobile_single_font_size']) && $epcl_theme['mobile_single_font_size'] != '14')
        $css .= '@media screen and (max-width: 767px){ div.text{ font-size: '.$epcl_theme['mobile_single_font_size'].'px; } }';
        
    // Header text logo
    if( isset( $epcl_theme['logo_font_size_desktop'] ) && $epcl_theme['logo_font_size_desktop'] != '60'){
        $css .= '#header .logo.text-logo .title{ font-size: '.$epcl_theme['logo_font_size_desktop'].'px; }';
        $css .= '#header.is-sticky div.menu-wrapper .text-logo a{ font-size: '.absint($epcl_theme['logo_font_size_desktop'] * 0.6).'px; }';
    }        

    if( isset( $epcl_theme['logo_font_size_mobile'] ) && $epcl_theme['logo_font_size_mobile'] != '40')
        $css .= '@media screen and (max-width: 767px){ #header .logo.text-logo .title{ font-size: '.$epcl_theme['logo_font_size_mobile'].'px; } }';

    /* @end */

    /* @group Main Effect */

    if( isset($epcl_theme['main_effect_border_width']) && $epcl_theme['main_effect_border_width'] != '14' && $epcl_theme['main_effect_border_width'] )
        $css .= 'div.articles article .post-title a, #single.standard .featured-image .title, #single.fullcover .featured-image .title{ border-width: '.$epcl_theme['main_effect_border_width'].'px; }
        div.articles.grid-posts article .post-title a{ border-width: '.($epcl_theme['main_effect_border_width'] * 0.7).'px; }
        
        @media screen and (max-width: 990px) and (min-width: 768px){
            div.articles article .post-title a,
            #single.standard .featured-image .title,
            #single.fullcover .featured-image .title{ border-width: '.($epcl_theme['main_effect_border_width'] * 0.6).'px; }
        }
        ';
        
    if( isset($epcl_theme['main_effect_line_height']) && $epcl_theme['main_effect_line_height'] != '145' && $epcl_theme['main_effect_line_height'] )
		$css .= 'div.articles article .post-title a, #single.standard .featured-image .title, #single.fullcover .featured-image .title{ line-height: '.$epcl_theme['main_effect_line_height'].'%; }';

    /* @end */
    
    // Enable Scroll on Sub Menus
    if( $epcl_theme['enable_scroll_submenu'] === '1' ){
        $css .= '#header nav ul.sub-menu{ max-height: 50vh; overflow-y: auto; overflow-x: hidden; }';
    }

    /* @group Categories Color */

    if( defined('EPCL_PLUGIN_PATH') ){
        $categories = get_categories();
        $dropcap_custom_color = epcl_get_option('dropcap_custom_color');
        if( isset($_GET['epcl-custom-color']) && $_GET['epcl-custom-color'] == '0' ){
            $dropcap_custom_color = false;
        }
        foreach( $categories as $c ){
            $term_meta = get_term_meta( $c->term_id, 'epcl_post_categories', true );
            if( !empty($term_meta) ){
                if( isset($term_meta['main_color']) && $term_meta['main_color'] !== '' ){

                    $css .= 
                    'div.tags a.tag-link-'.$c->term_id.':before,
                    a.tag-link-'.$c->term_id.':before,
                    .ctag-'.$c->term_id.':before,
                    .epcl-popular-categories .item .ctag-'.$c->term_id.':before,
                    .tag-description .left .title.ctag-'.$c->term_id.':before,
                    .menu-item-object-category .sub-menu a[data-cat-id="'.$c->term_id.'"]:before,
                    .menu-item-object-category .sub-menu a[data-cat-id="'.$c->term_id.'"]:hover{ color: '.$term_meta['main_color'].'; }';
                    $css .= 
                    'div.tags a.tag-link-'.$c->term_id.':hover, .tagcloud a.tag-link-'.$c->term_id.':hover{ color: '.$term_meta['main_color'].'; }';

                    //Primary category
                    if( $dropcap_custom_color ){
                        $css .= '.primary-cat-'.$c->term_id.' .epcl-dropcap:not(.author-avatar), .primary-cat-'.$c->term_id.' .epcl-dropcap.main-effect.text-only .fake-layout{ background: '.$term_meta['main_color'].'; }';
                        $css .= '.primary-cat-'.$c->term_id.' .epcl-dropcap.main-effect.text-only:after{ border-color: '.$term_meta['main_color'].'; }';
                    }                    
                }
            }
        }
    }

    /* @end */

    // Disable categories globally
    if( isset($epcl_theme['enable_global_category']) && $epcl_theme['enable_global_category'] === '0' ){
        $css .= 'div.tags{ display: none !important; }';
    }

    // Disable date globally
    if( isset($epcl_theme['enable_global_date']) && $epcl_theme['enable_global_date'] === '0' ){
        $css .= 'time{ display: none !important; }';
    }

    // Disable comments globally
    if( isset($epcl_theme['enable_global_comments']) && $epcl_theme['enable_global_comments'] === '0' ){
        $css .= 'div.meta a.comments{ display: none !important; }';
    }

    // Disable featured image globally
    if( isset($epcl_theme['enable_featured_image']) && $epcl_theme['enable_featured_image'] === '0' ){
        $css .= '#single.standard .featured-image{ display: none !important; }';
    }

    /* Content width */

    if( epcl_get_option('grid_container_width') ){
        $css .= '.grid-container{ max-width: '.$epcl_theme['grid_container_width'].'; }';
    }

    if( epcl_get_option('grid_container_large_width') ){
        $css .= '.grid-container.grid-large{ max-width: '.$epcl_theme['grid_container_large_width'].'; }';
    }

    if( epcl_get_option('grid_container_ularge_width') ){
        $css .= '.grid-container.grid-ularge{ max-width: '.$epcl_theme['grid_container_ularge_width'].'; }';
    }

    /* Disable Preload */

    if( epcl_get_option('enable_preloader', true) == false ){
        $css .= '.pace{ display: none; }';
    }

    /* Dropcap Line Height */

    if( epcl_get_option('dropcap_padding_top', 10) != 10 ){
        $css .= '.epcl-dropcap span, a.epcl-dropcap.main-effect.text-only .fake-layout{ padding-top: '.epcl_get_option('dropcap_padding_top', 10).'%; }';
    }

    /* @group AMP CSS */

    if( epcl_is_amp() ){
        if( $epcl_theme['amp_body_font']['font-family'] && $epcl_theme['amp_body_font']['font-family'] != 'Source Serif Pro')
        $css .= 'body, .epcl-button, .epcl-pagination div.nav>span, input[type=text], input[type=password], input[type=email], input[type=tel], input[type=submit], input[type=url], textarea, select, button, label, .wpcf7 label{ font-family: "'.$epcl_theme['amp_body_font']['font-family'].'", Arial, Helvetica, sans-serif; }';

        if( $epcl_theme['amp_body_font']['font-weight'] && $epcl_theme['amp_body_font']['font-weight'] != '400' )
            $css .= 'body, input[type=text], input[type=password], input[type=email], input[type=tel], input[type=submit], input[type=url], textarea, select, select.custom-select, button, label, .wpcf7 label, div.text{ font-weight: '.$epcl_theme['amp_body_font']['font-weight'].'; }'; 

        if( $epcl_theme['amp_primary_titles_font']['font-family'] && $epcl_theme['amp_primary_titles_font']['font-family'] != 'Josefin Sans' )
            $css .= '#header nav ul.menu > li > a, #header nav ul.sub-menu li a, amp-sidebar ul.menu>li>a, amp-sidebar ul.sub-menu li a, .epcl-pagination div.nav a, div.meta, .button, .epcl-button:not(.epcl-shortcode), .title, div.text h1, div.text h2, div.text h3, div.text h4, div.text h5, div.text h6, input[type=submit], #single #comments.hosted nav.pagination a, .epcl-button, .widget_epcl_tag_cloud, div.tags{ font-family: "'.$epcl_theme['amp_primary_titles_font']['font-family'].'", Arial, Helvetica, sans-serif; }';
    
        if( $epcl_theme['amp_primary_titles_font']['font-weight'] )
            $css .= '.title, div.text h1, div.text h2, div.text h3, div.text h4, div.text h5, div.text h6, input[type=submit], #single #comments.hosted nav.pagination a, .epcl-button{ font-weight: '.$epcl_theme['amp_primary_titles_font']['font-weight'].'; }';

    }

    /* @end */

	/* @group Advanced CSS */

	if( !empty($epcl_theme['css_code']) )
		$css .= $epcl_theme['css_code'];

    /* @end */

    $prefix = EPCL_THEMEPREFIX.'_';

    // $css = '';

	if($css)
		return $css;
}

function epcl_generate_gutenberg_custom_styles(){
    $epcl_theme = epcl_get_theme_options();
    $css = '';

    if( empty($epcl_theme) ) return;

    $primary_color = '#FF4C60';
    $secondary_color = '#65EBE7';
    $titles_color = '#454360';
    $text_color = '#596172';
    $border_color = '#EEEEEE';
    $input_bg_color = '#F9F9FE';
    $background_color = '#F9F9FE';
    $black = '#4B4870';
    $white = '#FFFFFF';

    $submenu_bg_color = '#47356d';
    $boxes_bg_color = '#362953';
    $input_bg_color = 'transparent';

	/* @group General Settings */

    
    // Primary Color
	// if( $epcl_theme['primary_color'] != $primary_color ){

    //     $css .= '.block-editor-block-list__layout .wp-block-categories li span, .editor-styles-wrapper .block-editor-block-list__layout .wp-block-archives li span{
    //         background-color: '.$epcl_theme['primary_color'].' !important; }';
	// }

    // // Secondary Color
	// if( isset($epcl_theme['content_border_color']['rgba']) && $epcl_theme['content_border_color']['rgba'] != $border_color ){

    //     $css .= '.editor-styles-wrapper .block-editor-block-list__layout .wp-block-quote:before, .editor-styles-wrapper div.text .wp-block-quote:before, .editor-styles-wrapper .block-editor-block-list__layout .wp-block-pullquote:after, .editor-styles-wrapper .block-editor-block-list__layout .wp-block-pullquote:before, .editor-styles-wrapper .editor-post-title__block:after{ 
    //         background-color: '.$epcl_theme['secondary_color'].' !important; }';
	// }

    // Primary Color
	if( $epcl_theme['primary_color'] != $primary_color ){  
        $css .= '.editor-styles-wrapper{ --epcl-main-color: '.$epcl_theme['primary_color'].'; }';
    }

    // Secondary Color (decorations and effects)
    if( $epcl_theme['secondary_color'] != $secondary_color ){  
        $css .= '.editor-styles-wrapper{ --epcl-secondary-color: '.$epcl_theme['secondary_color'].'; }';
    }

    // Third Color (titles)
    if( $epcl_theme['third_color'] != $black ){  
        $css .= '.editor-styles-wrapper{ --epcl-black-color: '.$epcl_theme['third_color'].'; }';
    }

    // Titles Color
    if( $epcl_theme['text_color'] != $text_color ){  
        $css .= '.editor-styles-wrapper{ --epcl-text-color: '.$epcl_theme['text_color'].'; }';
    }

    // Text Color
    if( $epcl_theme['titles_color'] != $titles_color ){  
        $css .= '.editor-styles-wrapper{ --epcl-titles-color: '.$epcl_theme['titles_color'].'; }';
    }

    /* @end */

    /* @end */

	/* @group Typography */

    // Regular Text
	if( $epcl_theme['body_font']['font-family'] && $epcl_theme['body_font']['font-family'] != 'Source Serif Pro')
		$css .= '.block-editor-block-list__layout{ font-family: "'.$epcl_theme['body_font']['font-family'].'" !important; }';
	
	if( $epcl_theme['body_font']['font-weight'] && $epcl_theme['body_font']['font-weight'] != '400' )
		$css .= '.block-editor-block-list__layout{ font-weight: '.$epcl_theme['body_font']['font-weight'].' !important; }';
        
	// Primary Titles
	if( $epcl_theme['primary_titles_font']['font-family'] && $epcl_theme['primary_titles_font']['font-family'] != 'Josefin Sans' )
		$css .= '.block-editor-block-list__layout h1,.block-editor-block-list__layout h2, .block-editor-block-list__layout h3, .block-editor-block-list__layout h4, .block-editor-block-list__layout h5, .block-editor-block-list__layout h6, .editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .editor-post-title__input{ font-family: "'.$epcl_theme['primary_titles_font']['font-family'].'" !important; }';
	
	if( $epcl_theme['primary_titles_font']['font-weight'] )
        $css .= '.block-editor-block-list__layout h1, .block-editor-block-list__layout h2, .block-editor-block-list__layout h3, .block-editor-block-list__layout h4, .block-editor-block-list__layout h5, .block-editor-block-list__layout h6, .editor-styles-wrapper .editor-post-title__input{ font-weight: '.$epcl_theme['primary_titles_font']['font-weight'].' !important; }';
        
    // Blog single text
    if($epcl_theme['editor_font_size'] != '17')
        $css .= '.editor-styles-wrapper .block-editor-block-list__layout{ font-size: '.$epcl_theme['editor_font_size'].'px !important; }';
        
	if($epcl_theme['h1_font_size'] != '34')
		$css .= '.block-editor-block-list__layout h1{ font-size: '.$epcl_theme['h1_font_size'].'px; }';
	
	if($epcl_theme['h2_font_size'] != '28')
		$css .= '.editor-styles-wrapper .block-editor-block-list__layout h2{ font-size: '.$epcl_theme['h2_font_size'].'px !important; }';
	
	if($epcl_theme['h3_font_size'] != '24')
		$css .= '.editor-styles-wrapper .block-editor-block-list__layouth3{ font-size: '.$epcl_theme['h3_font_size'].'px !important; }';
	
	if($epcl_theme['h4_font_size'] != '18')
		$css .= '.editor-styles-wrapper .block-editor-block-list__layout h4{ font-size: '.$epcl_theme['h4_font_size'].'px !important; }';
	
	if($epcl_theme['h5_font_size'] != '16')
		$css .= '.editor-styles-wrapper .block-editor-block-list__layout h5{ font-size: '.$epcl_theme['h5_font_size'].'px !important; }';
	
	if($epcl_theme['h6_font_size'] != '14')
		$css .= '.editor-styles-wrapper .block-editor-block-list__layout h6{ font-size: '.$epcl_theme['h6_font_size'].'px !important; }';

    /* @end */
    
    $prefix = EPCL_THEMEPREFIX.'_';

	if($css)
		return $css;
}


if ( ! function_exists( 'epcl_hex2rgba' ) ) {

	function epcl_hex2rgba($color, $opacity = false){
		$default = 'rgb(0,0,0)';
		if(empty($color))
			  return $default;
		if($color[0] == '#'){
			$color = substr($color, 1);
		}
		if(strlen($color) == 6){
			$hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
		}elseif(strlen($color) == 3){
			$hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
		} else {
			return $default;
		}
		$rgb =  array_map('hexdec', $hex);
		if($opacity){
			if(abs($opacity) > 1)
				$opacity = 1.0;
			$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
		}else{
			$output = 'rgb('.implode(",",$rgb).')';
		}
		return $output;
	}
}

function epcl_rgb2hex( $color ){
    if( strpos($color, 'rgb') < 0 ){
        return $color;
    }
    $color_array = explode(",", $color, 3);
    return sprintf( "#%02x%02x%02x", $color_array[0], $color_array[1], $color_array[2] );
}
