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

class MainController extends Controller
{
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
        $comment = new Comment();
        $comment->storeComment([
            'text'  =>  '12345',
            'email' =>  'www@fff.ru',
            'name'  =>  'DSDSDSD'
        ]);
        //header('Location: /');
    }

}