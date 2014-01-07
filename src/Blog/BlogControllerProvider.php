<?php

namespace Blog;

use Silex\Application;
use Silex\ControllerProviderInterface;

/**
 * BlogControllerProvider
 *
 * @author: Mateusz Nowak <mateusz.nowak@xsolve.pl>
 */
class BlogControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];

        /**
         * GET /blog
         */
        $controller->get('/', function() use ($app) {
            return $app['twig']->render('src/Blog/Resources/views/Blog/index.html.twig');
        });

        return $controller;
    }
}
