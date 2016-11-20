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
        if(filter_var($value, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }else{
            return false;
        }
    }

    public function string($value)
    {
        if(mb_strlen($value)>2 and mb_strlen($value)<255)
        {
            return true;
        }else{
            return false;
        }
    }

    public function text($value)
    {
        if(mb_strlen($value)>2 and mb_strlen($value)<3000)
        {
            return true;
        }else{
            return false;
        }
    }

}