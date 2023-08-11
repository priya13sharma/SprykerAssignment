<?php

use Pyz\Glue\CustomApiApplication\Bootstrap\GlueCustomApiBootstrap;
use Spryker\Shared\Config\Application\Environment;
use Spryker\Shared\ErrorHandler\ErrorHandlerEnvironment;

define('APPLICATION', 'GLUE_CUSTOM');
defined('APPLICATION_ROOT_DIR') || define('APPLICATION_ROOT_DIR', dirname(__DIR__, 2));

require_once APPLICATION_ROOT_DIR . '/vendor/autoload.php';

Environment::initialize();

$errorHandlerEnvironment = new ErrorHandlerEnvironment();
$errorHandlerEnvironment->initialize();

$bootstrap = new GlueCustomApiBootstrap();
$bootstrap
    ->boot()
    ->run();