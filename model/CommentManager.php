<?php

namespace OpenClassrooms\Blog\Model; // La classe sera dans ce namespace

require_once("Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment)); //combien de lignes midifiees

        return $affectedLines;
    }

    public function getComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }

    public function updateComment($commentId, $author, $comment)
    {
        $db = $this->dbConnect();
        $updateCom = $db->prepare('UPDATE comments SET comment = :newcom, author = :author, comment_date = NOW() WHERE  ID = :comId');
        $affectedLines  = $updateCom->execute(array(
            ':newcom' => $comment,
            ':author' => $author,
            ':comId' => $commentId,
        ));

        return $affectedLines;
    }
//comptage des billets pour affichage sur plusieurs pages
    public function countComment($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(*) AS nb_comments FROM comments WHERE post_id = ?');
        $nbComments = $req->execute(array($postId));

        return $nbcomments;
    }

    public function reportComment($commentId)
    {
        $db = $this->dbConnect();
        $reportCom = $db->prepare('UPDATE comments SET comment_report = true WHERE id = ?');
        $affectedLines = $reportCom->execute(array($commentId));

        return $affectedLines;
    }
}