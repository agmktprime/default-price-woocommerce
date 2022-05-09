<?php

function mktprime_default_price( $post_id, $post ) {

    if ( isset( $_POST['_regular_price'] ) && trim( $_POST['_regular_price'] ) == '' ) {
        update_post_meta( $post_id, '_regular_price', '0' );
    }

}
add_action( 'woocommerce_process_product_meta', 'mktprime_default_price' );

add_filter('woocommerce_is_purchasable', '__return_TRUE');
