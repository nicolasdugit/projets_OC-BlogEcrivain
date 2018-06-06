<?php 

use \JeanForteroche\Blog\Backend\Model\PostManager;
use \JeanForteroche\Blog\Backend\Model\CommentManager;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function adminHome()
{
    require('view/backend/adminView.php');
}

function createPost()
{
	require('view/backend/createPostView.php');
}

function newPost($title, $content)
{
    $postManager = new PostManager();

    $affectedLines = $postManager->newPost($title, $content);

    if ($affectedLines === false) 
    {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else 
    {
        header('Location: index.php');
    }
}

function listPosts()
{
	$postManager = new Postmanager();
	$posts = $postManager->getPosts();

	require('view/backend/listPostsView.php');
}