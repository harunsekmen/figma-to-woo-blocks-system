<?php
declare(strict_types=1);

namespace FigmaToWoo;

defined('ABSPATH') || exit;
?>
<div class="wrap ftw-admin-wrap">
    <h1><?php esc_html_e('FigmaToWoo: Conversion Block Design System', 'figma-to-woo'); ?></h1>
    <p class="description">
        <?php esc_html_e('Converts pixel-perfect Figma UI kits into native, high-performance WooCommerce Gutenberg blocks. Zero builder lock-in, zero layout shift.', 'figma-to-woo'); ?>
    </p>

    <div class="ftw-admin-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px; margin-top: 20px;">
        <div class="ftw-main-col">
            <div class="postbox" style="padding: 24px;">
                <h2 style="margin-top: 0; font-size: 16px;"><?php esc_html_e('Included Conversion Block Library (15 Modules)', 'figma-to-woo'); ?></h2>

                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                    <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-left: 4px solid #16a34a; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #16a34a; display: block;">15 / 15</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Blocks Registered', 'figma-to-woo'); ?></span>
                    </div>

                    <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-left: 4px solid #2563eb; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #2563eb; display: block;">0.00 CLS</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Cumulative Layout Shift', 'figma-to-woo'); ?></span>
                    </div>

                    <div style="background: #faf5ff; border: 1px solid #e9d5ff; border-left: 4px solid #9333ea; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #9333ea; display: block;">100% Native</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('WordPress Block Editor', 'figma-to-woo'); ?></span>
                    </div>
                </div>

                <h3 style="font-size: 14px;"><?php esc_html_e('Core E-Commerce Landing Page Components', 'figma-to-woo'); ?></h3>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Component Name', 'figma-to-woo'); ?></th>
                            <th><?php esc_html_e('Role in Sales Funnel', 'figma-to-woo'); ?></th>
                            <th><?php esc_html_e('Design System Match', 'figma-to-woo'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?php esc_html_e('Split Hero Showcase', 'figma-to-woo'); ?></strong></td>
                            <td><?php esc_html_e('High-impact hero visual with instant variant pills and direct buy triggers.', 'figma-to-woo'); ?></td>
                            <td><span style="color: #16a34a; font-weight: 700;">100% Figma Auto-Layout</span></td>
                        </tr>
                        <tr>
                            <td><strong><?php esc_html_e('Competitor Matrix Table', 'figma-to-woo'); ?></strong></td>
                            <td><?php esc_html_e('Highlights proprietary product USPs against market alternatives.', 'figma-to-woo'); ?></td>
                            <td><span style="color: #16a34a; font-weight: 700;">Responsive Mobile Card Stack</span></td>
                        </tr>
                        <tr>
                            <td><strong><?php esc_html_e('Customer Proof Marquee', 'figma-to-woo'); ?></strong></td>
                            <td><?php esc_html_e('Continuous CSS hardware-accelerated review carousel with zero JS weight.', 'figma-to-woo'); ?></td>
                            <td><span style="color: #16a34a; font-weight: 700;">Pure CSS GPU Accelerated</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="ftw-side-col">
            <div class="postbox" style="padding: 24px; background: #1e1b4b; color: #ffffff; border-radius: 8px;">
                <h2 style="margin-top: 0; color: #ffffff; font-size: 16px;"><?php esc_html_e('Figma-to-Woo Implementation', 'figma-to-woo'); ?></h2>
                <p style="font-size: 13px; color: #cbd5e1; line-height: 1.6;">
                    <?php esc_html_e('Have a custom Figma UI design for an upcoming product or brand? I convert Figma files into blazing-fast, responsive WooCommerce landing pages within 5 days.', 'figma-to-woo'); ?>
                </p>
                <div style="margin-top: 20px;">
                    <a href="https://www.upwork.com/freelancers/~01a7a8b58043e6e6d9" target="_blank" class="button button-primary" style="background: #a855f7; color: #ffffff; border: none; font-weight: 700; width: 100%; text-align: center; box-sizing: border-box; padding: 10px;">
                        <?php esc_html_e('Request Figma Conversion', 'figma-to-woo'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

