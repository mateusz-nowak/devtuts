<?php

namespace Shared;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * SharedControllerProvider
 *
 * @author: Mateusz Nowak <mateusz.nowak@xsolve.pl>
 */
class SharedControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];

        /**
         * Main page - forward /blog 
         */
        $controller->get('/', function() use ($app) {
            return $app->handle(
                Request::create('/blog', 'GET'), HttpKernelInterface::SUB_REQUEST
            );
        });

        return $controller;
    }
}
