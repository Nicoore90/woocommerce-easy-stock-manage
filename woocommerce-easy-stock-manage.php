<?php
/*
 * Plugin Name:       Woocommerce Easy Stock Manage
 * Plugin URI:        https://github.com/Nicoore90/woocommerce-easy-stock-manage
 * Description:       Lets you manage easily the stock in your woocommerce admin page
 * Version:           1.0
 * Requires at least: 6
 * Requires PHP:      7.2
 * Author:            Nicolas Orecchia
 * Author URI:        nicolasorecchia.com.ar
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/Nicoore90/woocommerce-easy-stock-manage
 * Text Domain:       woocommerce-easy-stock-plugin
 * Domain Path:       /languages
 */

add_filter('manage_edit-product_columns', function() {
    $columns['in_stock'] = __( 'En Stock', 'woocommerce' );

    return $columns;
});

