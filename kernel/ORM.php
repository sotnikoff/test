<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 19.11.16
 * Time: 14:10
 */

namespace Kernel;

use Kernel\ORMInterface;

abstract class ORM implements ORMInterface
{
    private $DB;
    protected $table;

    abstract public function setTable();

    private function DBConnect()
    {

        $this->DB = new \PDO('mysql:host=localhost;dbname=test;port=8889','root','pksiter2');

    }

    public function __construct()
    {
        $this->DBConnect();
    }

    public function query($query,$params)
    {
        $prepared = $this->DB->prepare($query);

        foreach($params as $key => $param){
            $prepared->bindParam($key+1,$param);
        }
    }


}