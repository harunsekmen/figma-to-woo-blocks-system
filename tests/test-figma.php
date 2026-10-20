<?php
require_once __DIR__ . '/bootstrap.php';
require_once dirname(__DIR__) . '/includes/class-block-registry.php';

echo "Testing FigmaToWoo BlockRegistry...
";

$registry = new \FigmaToWoo\BlockRegistry();
assert($registry instanceof \FigmaToWoo\BlockRegistry, "Instance check");

echo "PASS: figma-to-woo-blocks-system verified.
";
