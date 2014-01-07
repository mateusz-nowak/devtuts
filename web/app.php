<?php

/**
 * Bootstrap, routes
 *
 * @author: Mateusz Nowak <mateusz.nowak@xsolve.pl>
 */
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application();

include_once '../bootstrap.php';

$app->run();
