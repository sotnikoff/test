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

        $comment = new Comment();

        $view = new View('Test');
        $view->assignParameter('title','Hello World!');
        $view->assignParameter('title2','Hello World!222');
        $view->render();

    }
}