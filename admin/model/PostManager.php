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

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function updatePost($title, $content, $post_id)
    {
        $db = $this->dbConnect();  
        $req = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :post_id');
        $affectedLines  = $req->execute(array(
            ':title' => $title,
            ':content' => $content,
            ':post_id' => $post_id
        ));

        return $affectedLines;
    }

    public function deletePost($post_id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = :post_id');
        $affectedLines  = $req->execute(array(
            ':post_id' => $post_id
        ));

        return $affectedLines;      
    }
}
