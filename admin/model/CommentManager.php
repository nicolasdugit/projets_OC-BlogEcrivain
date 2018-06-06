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
    	$delete = $db->prepare('DELETE FROM comments WHERE id = ?');
    	$affectedLines = $delete->execute(array($com_id));

    	return $affectedLines;

    }
}