<?php

namespace OpenClassrooms\Blog\Model; // La classe sera dans ce namespace

require_once("Manager.php");

class MembersManager extends Manager
{
	public function connection($pseudo, $pass)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass, group_id FROM members WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $test = $req->fetch();

        return $test;
    }
    public function inscription($pseudo, $pass, $mail)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO members ( pseudo, pass, email, inscription_date, group_id ) VALUES ( :pseudo, :pass, :email, NOW(), 2 )');
        $affectedLines = $req->execute(array(
        	':pseudo' => $pseudo,
        	':pass' => $pass,
        	':email' => $mail,
        ));

        return $affectedLines;
    }
    public function members($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $affectedLines = $req->fetch();
        
        return $affectedLines;
    }

}