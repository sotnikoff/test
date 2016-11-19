<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 20.11.16
 * Time: 0:00
 */

namespace Kernel;

use Eventviva\ImageResize;

trait FileHandle
{
    public function saveFiles()
    {

        $uploaddir = '../public/resources/files/';
        $file = $_FILES['File'];
        if(is_uploaded_file($file['tmp_name']))
        {
            if($file['type'] == 'image/jpg' or $file['type'] == 'image/png' or $file['type'] == 'image/gif')
            {

                $fileInfo = getimagesize($file['tmp_name']);
                $width = $fileInfo[0];
                $height = $fileInfo[1];
                $image = new ImageResize($file['tmp_name']);

                if($width > 320 or $height > 240)
                {
                    if($width >= $height)
                    {
                        $image->resizeToWidth(320);
                    }else{
                        $image->resizeToHeight(240);
                    }
                }
                $image->save($uploaddir.$file['name']);
                return $file['name'];
            }else{
                return false;
            }
        }else{
            return false;
        }



    }
}