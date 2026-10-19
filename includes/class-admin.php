<?php
declare(strict_types=1);

namespace FigmaToWoo;

defined('ABSPATH') || exit;

final class Admin {
    public function register(): void {
        add_action('admin_menu', [$this, 'add_menu_page']);
    }

    public function add_menu_page(): void {
        add_submenu_page(
            'woocommerce',
            __('FigmaToWoo Blocks', 'figma-to-woo'),
            __('Figma Blocks', 'figma-to-woo'),
            'manage_woocommerce',
            'ftw-dashboard',
            [$this, 'render_dashboard']
        );
    }

    public function render_dashboard(): void {
        if (!current_user_can('manage_woocommerce')) {
            return;
        }

        require_once BlockSystem::get_plugin_dir() . 'templates/admin-dashboard.php';
    }
}

