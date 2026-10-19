<?php
/**
 * Plugin Name:       FigmaToWoo: Conversion Block Design System
 * Plugin URI:        https://github.com/harunsekmen/figma-to-woo-blocks-system
 * Description:       Modular e-commerce Gutenberg block system engineered to convert high-fidelity Figma UI designs into pixel-perfect, sub-second WooCommerce landing pages.
 * Version:           1.0.0
 * Author:            Harun Sekmen
 * Author URI:        https://github.com/harunsekmen
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       figma-to-woo
 * Domain Path:       /languages
 * Requires at least: 6.2
 * Requires PHP:      8.1
 * WC requires at least: 8.0
 * WC tested up to:   9.4
 */

declare(strict_types=1);

namespace FigmaToWoo;

defined('ABSPATH') || exit;

// Autoloader for internal classes
spl_autoload_register(static function (string $class): void {
    $prefix = 'FigmaToWoo\\';
    $base_dir = __DIR__ . '/includes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . 'class-' . strtolower(str_replace(['\\', '_'], ['/', '-'], $relative_class)) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

// Declare WooCommerce High-Performance Order Storage (HPOS) & Blocks compatibility
add_action('before_woocommerce_init', static function (): void {
    if (class_exists(\Automattic\WooCommerce\Utilities\FeaturesUtil::class)) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
            'custom_order_tables',
            __FILE__,
            true
        );
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
            'cart_checkout_blocks',
            __FILE__,
            true
        );
    }
});

// Bootstrap block system lifecycle
add_action('plugins_loaded', static function (): void {
    BlockSystem::instance()->init();
});

