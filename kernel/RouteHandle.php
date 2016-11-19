<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 18.11.16
 * Time: 18:57
 */

namespace Kernel;


abstract class RouteHandle
{

    abstract public function initializeRoutes();

    /**
     * path =>
     *      [ controller
     *        method
     *      ]
     */
    protected $route;
    protected $params;
    private $paths;

    public function __construct()
    {
        if(strpos($_SERVER['REQUEST_URI'],'?') === false){
            $this->route = $_SERVER['REQUEST_URI'];
        }else{
            $this->route = strstr($_SERVER['REQUEST_URI'],'?',true);
        }


        $this->params = $_GET;
    }

    /**
     * @param array $path[path,controller,method]
     */

    protected function registerPath(array $path)
    {

        $this->paths[$path['path']] = $path;
    }

    public function processPaths()
    {

        $this->initializeRoutes();



        $path = $this->paths[$this->route];

        $controller = "App\\Controllers\\" . $path['controller'];
        $controllerObject = new $controller($this->params);
        $controllerObject->{$path['method']}();
    }

}