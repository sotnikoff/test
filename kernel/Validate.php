<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 20.11.16
 * Time: 2:31
 */

namespace Kernel;


trait Validate
{
    public function email($value)
    {
        if(filter_var($value), FILTER_VALIDATE_EMAIL)
        {
            return true;
        }

        return false;
    }
}