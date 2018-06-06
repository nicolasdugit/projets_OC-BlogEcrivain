<?php 

use \JeanForteroche\Blog\Backend\Model\PostManager;
use \JeanForteroche\Blog\Backend\Model\CommentManager;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function adminHome()
{
    $CommentManager = new CommentManager();
    $reportedComments = $CommentManager->getAllComments();
    $toValidateComments = $CommentManager->getAllComments();

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
        throw new Exception('Impossible d\'ajouter le nouvel article !');
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

function modifPost($post_id)
{
    $postManager = new Postmanager();
    $post = $postManager->getPost($post_id);

	require('view/backend/modifPostView.php');
}

function updatePost($newTitle, $newContent, $id)
{
    $postManager = new Postmanager();

    $affectedLines = $postManager->updatePost($newTitle, $newContent, $id);

    if ($affectedLines === false) 
    {
        throw new Exception('Impossible de modifier l\'article !');       
    }
    else
    {
        header('Location: index.php?action=listPost');
    }
}

function deletePost($id)
{
    $postManager = new Postmanager();

    $affectedLines = $postManager->deletePost($id);
        if ($affectedLines === false) 
    {
        throw new Exception('Impossible de supprimer l\'article !');       
    }
    else
    {
        header('Location: index.php?action=listPost');
    }
}