<?php

/**
 * Register some extensions an bundles
 *
 * @author: Mateusz Nowak <mateusz.nowak@xsolve.pl>
**/
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__,
));

$bundles = [
    '/blog' => new \Blog\BlogControllerProvider(),
    '' => new \Shared\SharedControllerProvider()
];

foreach ($bundles as $route => $provider) {
    $app->mount($route, $provider);
}
