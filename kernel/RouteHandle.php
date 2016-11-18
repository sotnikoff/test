<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 18.11.16
 * Time: 18:57
 */

namespace Kernel;


class RouteHandle
{

    protected $uri;
    private $paths;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    protected function registerPaths(array $path)
    {

    }

    private function 

}