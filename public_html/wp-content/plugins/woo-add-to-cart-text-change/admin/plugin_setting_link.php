<?php
/**
 * Plugin page Configure link
 * 
 * @package WooCommerce add to cart Text change
 * @since v1.0
 */
function wactc_add_action_links($links) {
    $wactc_links[] = '<a href="' . admin_url('admin.php?page=wactc-add-to-cart') . '" title="' . esc_attr( __( 'Add to Cart Setting Page' ) ) . '">' . __( 'Configure' ) . '</a>';
    return array_merge($wactc_links, $links);
}
add_filter('plugin_action_links_' . WACTC_PLUGIN_BASE_FILE, 'wactc_add_action_links');