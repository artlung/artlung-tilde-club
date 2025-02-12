<?php

$raw_querystring = $_SERVER['QUERY_STRING'] ?? '140,420';
printf("<h1>%s</h1>", $raw_querystring);

$shapes = [];

$shapes[] = [
    'shape' => 'rect',
    'coords' => '0, 0, 60, 70',
    'target' => '_top',
    'href' => 'http://tilde.club/~harper/link.html?action=join',
];
$shapes[] = [
    'shape' => 'rect',
    'coords' => '130, 0, 417, 75',
    'target' => '_top',
    'href' => 'http://tilde.club/~harper/link.html?action=random',
];
$shapes[] = [
    'shape' => 'rect',
    'coords' => '465, 0, 549, 75',
    'target' => '_top',
    'href' => 'http://tilde.club/~harper/link.html?action=join',
];

$default_url = 'http://tilde.club/~harper/link.html?action=random';

[$x, $y] = explode(',', $raw_querystring);

foreach ($shapes as $shape) {
    $coords = explode(',', $shape['coords']);
    // trim and convert to int
    $coords = array_map('trim', $coords);
    $coords = array_map('intval', $coords);
    $x1 = $coords[0];
    $y1 = $coords[1];
    $x2 = $coords[2];
    $y2 = $coords[3];
    if ($x >= $x1 && $x <= $x2 && $y >= $y1 && $y <= $y2) {
        header("Location: {$shape['href']}");
        exit;
    }
    header("Location: $default_url");
}