<?php

namespace JeanForteroche\Blog\Backend\Model; 

require_once("Manager.php");

class PostManager extends Manager
{


   public function newPost($title, $content)
   {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES (:title, :content, NOW() )');
        $affectedLines  = $req->execute(array(
            ':title' => $title,
            ':content' => $content
        ));

        return $affectedLines;
   }
}