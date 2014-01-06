<?php

/**
 * Bootstrap, routes
 *
 * @author: Mateusz Nowak<mateusz.nowak@xsolve.pl>
 */
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application();

/**
 * Set development mode
 */
$app['debug'] = true;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/..',
));

$app->get('/', function() use ($app) {
    return $app['twig']->render('src/Blog/Resources/views/Blog/index.html.twig', array(
        'example' => 'variable'
    ));
});

$app->run();
