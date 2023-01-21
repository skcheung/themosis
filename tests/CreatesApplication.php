<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
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

        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
