<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 19.11.16
 * Time: 15:24
 */

namespace App\Models;

use Kernel\ORM;

class Comment extends ORM
{
    public function setTable()
    {
        $this->table = "comments";
    }



}