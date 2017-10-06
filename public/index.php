<?php
/**
 * This whole folder (/public) will not be used when this endpoint is imported in aoculi/slim-api
 * It's used only for development purpose
 */

use Api\App;

require dirname(__DIR__) . '/vendor/autoload.php';

if (php_sapi_name() !== 'cli') {
    session_start();
}

$config = require dirname(__DIR__) . '/config/settings.php';

$app = (new App($config))
    ->addEndpoint(Api\Endpoints\Authentication\Routes\Authentication::class)
    ->addEndpoint(Api\Endpoints\Users\Routes\Users::class);

// Do not run the app if we are using cli
if (php_sapi_name() !== 'cli') {
    $app->run();
}
