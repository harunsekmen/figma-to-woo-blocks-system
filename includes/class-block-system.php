<?php
declare(strict_types=1);

namespace FigmaToWoo;

defined('ABSPATH') || exit;

final class BlockSystem {
    public const VERSION = '1.0.0';
    public const OPTION_KEY = 'ftw_settings';

    private static ?self $instance = null;
    private BlockRegistry $registry;
    private Admin $admin;

    public static function instance(): self {
        return self::$instance ??= new self();
    }

    private function __construct() {
        $this->registry = new BlockRegistry();
        $this->admin    = new Admin();
    }

    public function init(): void {
        if (!class_exists('WooCommerce')) {
            add_action('admin_notices', [$this, 'render_woocommerce_missing_notice']);
            return;
        }

        $this->registry->register();
        $this->admin->register();

        add_action('wp_enqueue_scripts', [$this, 'enqueue_block_assets']);
    }

    public function enqueue_block_assets(): void {
        $plugin_url = self::get_plugin_url();

        wp_enqueue_style(
            'ftw-blocks-style',
            $plugin_url . 'assets/css/figma-blocks.css',
            [],
            self::VERSION
        );

        wp_enqueue_script(
            'ftw-blocks-script',
            $plugin_url . 'assets/js/figma-blocks.js',
            ['jquery'],
            self::VERSION,
            true
        );
    }

    public function render_woocommerce_missing_notice(): void {
        ?>
        <div class="notice notice-error">
            <p><?php esc_html_e('FigmaToWoo requires WooCommerce to be installed and active.', 'figma-to-woo'); ?></p>
        </div>
        <?php
    }

    public static function get_plugin_dir(): string {
        return plugin_dir_path(dirname(__FILE__));
    }

    public static function get_plugin_url(): string {
        return plugin_dir_url(dirname(__FILE__));
    }
}

