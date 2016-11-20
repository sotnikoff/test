<?php
/**
 * Created by PhpStorm.
 * User: mikhailsotnikov
 * Date: 18.11.16
 * Time: 18:11
 */

namespace App\Controllers;

use Kernel\Controller;
use Kernel\ViewHandler as View;
use App\Models\Comment;
use Kernel\FileHandle;
use Kernel\Validate;

class MainController extends Controller
{
    use FileHandle;
    use Validate;

    public function index()
    {

        $commentObj = new Comment();
        $comments = $commentObj->getComments();


        $view = new View('Test');
        $view->assignParameter('title','Отзывы');
        $view->assignParameter('comments',$comments);
        $view->render();

    }

    public function storeComment()
    {

        if
        (
            !$this->email($this->postData['email'])
            or
            !$this->string($this->postData['name'])
            or
            !$this->text($this->postData['text'])
        )
        {
            echo 'bad data';
            return false;
        }


        $file = $this->saveFiles();

        $comment = new Comment();
        $comment->storeComment([
            'text'  =>  $this->postData['text'],
            'email' =>  $this->postData['email'],
            'name'  =>  $this->postData['name'],
            'image'  =>  '/resources/files/'.$file
        ]);
        header('Location: /');
    }

}