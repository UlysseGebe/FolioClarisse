<?php

/**
 * Configuration
 */
define('URL', 'http://localhost:8888/FolioClarisse/public/');

/**
 * Routing
 */
// Get 'q' param
$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

// Define controller
$controller = '404';
if ($q == 'home') {
    $controller = 'home';
}
else if ($q == 'about-us') {
    $controller = 'about';
}
else if (preg_match('/^project-0[1-9]*$/', $q)) {
    $controller = 'project';
}

// Include controller
include '../controllers/'.$controller.'.php';
