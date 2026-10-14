<?php

// Non-destructive web delivery copies. Run from the project root:
// php AI_NOTES/tools/prepare-brand-assets.php
$root = dirname(__DIR__, 2).'/public/assets/front/img/common3/';
$output = $root.'web/';
if (!is_dir($output)) {
    mkdir($output, 0755, true);
}
$assets = [
    'logo.png' => ['logo', 256],
    'Post 1.png' => ['make-every-click-count', 900],
    'Common 3.png' => ['instagram-strategy', 900],
    'ChatGPT Image Sep 23, 2026, 11_53_48 PM.png' => ['three-minds', 900],
    'ChatGPT Image Sep 29, 2026, 11_00_54 AM.png' => ['just-getting-started', 900],
    'ChatGPT Image Sep 30, 2026, 10_05_12 AM.png' => ['stop-the-scroll', 900],
];
foreach ($assets as $source => [$name, $maxWidth]) {
    $image = imagecreatefrompng($root.$source);
    $width = min($maxWidth, imagesx($image));
    $height = (int) round(imagesy($image) * $width / imagesx($image));
    $resized = imagecreatetruecolor($width, $height);
    imagecopyresampled($resized, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
    imagewebp($resized, $output.$name.'.webp', 86);
    echo $name.'.webp: '.$width.'x'.$height.'; '.filesize($output.$name.'.webp')." bytes\n";
    imagedestroy($resized);
    imagedestroy($image);
}
