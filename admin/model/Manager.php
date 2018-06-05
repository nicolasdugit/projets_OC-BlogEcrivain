<?php

namespace JeanForteroche\Blog\Backend\Model;

class Manager
{
	protected function dbConnect()
	{
		$db = new \PDO('mysql:host=localhost;dbname=testOC;charset=utf8', 'root', '');
		return $db;
	}
}