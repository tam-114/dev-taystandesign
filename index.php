<?php
require 'config.php';

// Capture the requested path
$path = isset($_GET['path']) ? $_GET['path'] : 'home';

// Define the mapping of paths to scripts
$routes = [
    'home' => 'pages/home.php',
    'about' => 'pages/about.php',
    'contact' => 'pages/contact.php',
    'testimonials' => 'pages/testimonials.php',
    'projects' => 'pages/projects.php',
    'thankyou' => 'pages/thankyou.php',
    'pricing' => 'pages/pricing.php',
    'privacy' => 'pages/privacy.php',
    'terms' => 'pages/terms.php',
    'projects/ksgf' => 'pages/projects/ksgf.php',
    'projects/btc' => 'pages/projects/btc.php',
    'projects/ptr' => 'pages/projects/ptr.php',
    'projects/eastburn' => 'pages/projects/eastburn.php',
];

// Include the header file
include 'header.php';

// Check if the requested path exists in the routes array
if (array_key_exists($path, $routes)) {
    require $routes[$path];

} else {
    require 'pages/404.php'; // Load 404 page if route not found
}

// Include the footer file
include 'footer.php';
?>
