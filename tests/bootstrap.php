<?php

/*----------------------------------------------------*/
// Directory separator
/*----------------------------------------------------*/
defined('DS') ? DS : define('DS', DIRECTORY_SEPARATOR);

/*----------------------------------------------------*/
// Application paths
/*----------------------------------------------------*/
define('THEMOSIS_PUBLIC_DIR', 'htdocs');
define('THEMOSIS_ROOT', realpath(__DIR__.'/../'));
define('CONTENT_DIR', 'content');
define('WP_CONTENT_DIR', realpath(THEMOSIS_ROOT.DS.THEMOSIS_PUBLIC_DIR.DS.CONTENT_DIR));

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/../htdocs/cms/' );
}

/*----------------------------------------------------*/
// Composer autoload
/*----------------------------------------------------*/
require __DIR__.'/../vendor/autoload.php';
