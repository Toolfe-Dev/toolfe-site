<?php
if( !defined('ABSPATH') ){ exit; }

function epcl_products_page(){
	$cache = get_transient( 'epcl_feed_products' );

	if ( false === $cache ) {
        $url = 'https://estudiopatagon.com/feed-products/?theme=maktub-wp';
		$feed = wp_remote_get( esc_url_raw( $url ), array(
					'sslverify' => false,
					'timeout' => 30,
				) );
		
		if ( ! is_wp_error( $feed ) ) {
			if ( isset( $feed['body'] ) && strlen( $feed['body'] ) > 0 ) {
				$cache = wp_remote_retrieve_body( $feed );
				set_transient( 'epcl_feed_products', $cache, 3600 );
			}
		} else {
            $cache = '<div class="error"><p>' . __( 'There was an error retrieving the products list from the server. Please try again later.', 'epcl-framework' ) . '</div>';			
		}
	}

	echo $cache;
}

// delete_transient('epcl_feed_products');