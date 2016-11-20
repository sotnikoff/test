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


class AdminController extends Controller
{


    public function index()
    {
        $commentObj = new Comment();
        $comments = $commentObj->getComments('created_at','desc',true);


        $view = new View('Admin');
        $view->assignParameter('title','Отзывы');
        $view->assignParameter('comments',$comments);
        $view->render();

    }

    public function storeComment()
    {

    }

    public function activateComment()
    {
        $commentObj = new Comment();
        $commentObj->activateComment($this->postData['id']);
        header('Location: /admin');
    }

    public function deactivateComment()
    {
        $commentObj = new Comment();
        $commentObj->deactivateComment($this->postData['id']);
        header('Location: /admin');
    }

}