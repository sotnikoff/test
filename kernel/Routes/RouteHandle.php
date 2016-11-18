<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 18.11.16
 * Time: 18:57
 */

namespace Kernel\Routes;


class RouteHandle
{

    protected $route;
    protected $params;
    private $paths;

    public function __construct()
    {
        $this->route = strstr($_SERVER['REQUEST_URI'],'?',true);
        $this->params = $_GET;
    }

    protected function registerPath(array $path)
    {
        $this->paths[$path['name']] = $path;
    }

    private function processPaths()
    {
        $path = $this->paths[$path['name']];

    }

}