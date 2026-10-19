<?php
declare(strict_types=1);

namespace FigmaToWoo;

defined('ABSPATH') || exit;

final class BlockRegistry {
    public const BLOCKS = [
        'hero-split-showcase'      => 'High-impact split product showcase',
        'social-proof-marquee'     => 'Real customer review badge marquee',
        'comparison-spec-matrix'   => 'Feature comparison table vs competitors',
        'interactive-accordion-faq'=> 'Zero-layout-shift animated FAQ block',
        'sticky-bottom-urgency-bar'=> 'Conversion urgency counter & cart trigger',
    ];

    public function register(): void {
        add_action('init', [$this, 'register_gutenberg_blocks']);
    }

    public function register_gutenberg_blocks(): void {
        // Registers custom block category in WordPress block editor
        add_filter('block_categories_all', function (array $categories): array {
            $categories[] = [
                'slug'  => 'figma-to-woo',
                'title' => __('FigmaToWoo Conversion Blocks', 'figma-to-woo'),
                'icon'  => 'cart',
            ];
            return $categories;
        });
    }
}

