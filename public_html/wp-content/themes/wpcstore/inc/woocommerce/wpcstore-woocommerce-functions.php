<?php
/**
 * WPCstore WooCommerce functions.
 *
 * @package wpcstore
 */

/**
 * Checks if the current page is a product archive
 *
 * @return boolean
 */
function wpcstore_is_product_archive() {
	if ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) {
		return true;
	} else {
		return false;
	}
}

if ( ! function_exists( 'wpcstore_woosw_color_default' ) ) {
	function wpcstore_woosw_color_default() {
		return '#00CBB4';
	}
}

if ( ! function_exists( 'wpcstore_wooscp_bar_btn_color_default' ) ) {
	function wpcstore_wooscp_bar_btn_color_default() {
		return '#00CBB4';
	}
}
