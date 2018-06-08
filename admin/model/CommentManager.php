<?php

namespace JeanForteroche\Blog\Backend\Model; // La classe sera dans ce namespace

require_once("Manager.php");

class CommentManager extends Manager
{
	public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comment_verify, comment_report FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

	public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, comment_verify, comment_report FROM comments ORDER BY comment_date DESC');

        return $comments;
    }

    public function deleteComment($com_id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = :com_id');
        $affectedLines  = $req->execute(array(
            ':com_id' => $com_id
        ));

        return $affectedLines;
    }

    public function validateComment($com_id)
    {
    	$db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET comment_report = 0, comment_verify = 1 WHERE id = :com_id');
        $affectedLines  = $req->execute(array(
            ':com_id' => $com_id
        ));

        return $affectedLines;
    }

    public function deleteCommentByPost($post_id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE post_id = :post_id');
        $affectedLines  = $req->execute(array(
            ':post_id' => $post_id
        ));

        return $affectedLines;  
    }
}