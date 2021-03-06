<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 18.11.16
 * Time: 20:15
 */

namespace App\Routes;

use Kernel\RouteHandle;

class WebRoute extends RouteHandle
{
    public function initializeRoutes()
    {
        $this->registerPath([
            'path'          =>      '/',
            'controller'    =>      'MainController',
            'method'        =>      'index',
            'requestMethod' =>      'GET'
        ]);
        $this->registerPath([
            'path'          =>      '/store',
            'controller'    =>      'MainController',
            'method'        =>      'storeComment',
            'requestMethod' =>      'POST'
        ]);
        $this->registerPath([
            'path'          =>      '/admin',
            'controller'    =>      'AdminController',
            'method'        =>      'index',
            'requestMethod' =>      'GET'
        ]);
        $this->registerPath([
        'path'          =>      '/activate',
        'controller'    =>      'AdminController',
        'method'        =>      'activateComment',
        'requestMethod' =>      'POST'
        ]);
        $this->registerPath([
            'path'          =>      '/deactivate',
            'controller'    =>      'AdminController',
            'method'        =>      'deactivateComment',
            'requestMethod' =>      'POST'
        ]);
    }
}