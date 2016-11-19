<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 19.11.16
 * Time: 0:15
 */

namespace Kernel;


abstract class Controller
{

    protected $parameters;

    public function __construct($params)
    {
        $this->parameters = $params;
    }
}