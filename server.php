<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
<<<<<<< HEAD
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
=======

    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)

>>>>>>> 615de0753acdfa1f984386bf395f576f059138d2
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

<<<<<<< HEAD
require_once __DIR__.'/public/index.php';
=======

require_once __DIR__.'/public/index.php';

>>>>>>> 615de0753acdfa1f984386bf395f576f059138d2
