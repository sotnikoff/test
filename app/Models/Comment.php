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

    public function storeComment($comment)
    {
        parent::query("INSERT 
          INTO COMMENTS
            (text,published,modified_at,created_at,author_name,author_email,image)
          VALUES
          (?,?,?,?,?,?,?)
          ",[
                $comment['text'],
                0,
                date("Y-m-d H:i:s",time()),
                date("Y-m-d H:i:s",time()),
                $comment['name'],
                $comment['email'],
                $comment['image']
        ],false);

        return true;
    }


    public function getComments($order = 'created_at',$orderDirection = 'DESC')
    {
        return parent::query('SELECT * FROM COMMENTS WHERE COMMENTS.PUBLISHED = 1 ORDER BY ? ?',[$order,$orderDirection]);
    }

}