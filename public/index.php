<?php
/**
 * This whole folder (/public) will not be used when this endpoint is imported in aoculi/slim-api
 * It's used only for development purpose
 */

use Api\App;

require '../vendor/autoload.php';

session_start();

$config = require '../config/settings.php';

$app = (new App($config))
    ->addEndpoint(Api\Endpoints\Authentication\Routes\Authentication::class)
    ->addEndpoint(Api\Endpoints\Users\Routes\Users::class);

$app->run();