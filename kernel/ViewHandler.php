<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 19.11.16
 * Time: 13:03
 */

namespace Kernel;


class ViewHandler
{

    private $paramsArray;
    private $viewFile;

    public function __construct($view)
    {
        $this->viewFile = '../app/Views/'.$view.'View.php';
    }

    public function render()
    {
        $result = $this->prepareOutput();
        echo $result;
    }

    public function assignParameter($parameter,$value)
    {
        $this->paramsArray[$parameter] = $value;
    }

    private function prepareOutput()
    {
        if(!file_exists($this->viewFile)){
            return false;
        }

        extract($this->paramsArray);

        ob_start();
        require $this->viewFile;
        $data = ob_get_clean();
        return $data;
    }

}