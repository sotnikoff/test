<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 19.11.16
 * Time: 14:10
 */

namespace Kernel;


abstract class ORM
{
    private $DB;

    private function DBConnect()
    {
        //$this->mysqli = new mysqli('localhost','root','pksiter2','test','8889');

        $this->DB = new \PDO('mysql:host=localhost;dbname=test;port=8889','root','pksiter2');

    }

    public function __construct()
    {
        $this->DBConnect();
    }
}