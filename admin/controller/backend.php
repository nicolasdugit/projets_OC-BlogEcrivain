<?php 

// use \JeanForteroche\Blog\Backend\Model\PostManager;
// use \JeanForteroche\Blog\Backend\Model\MembersManager;

// require_once('model/PostManager.php');
// require_once('model/MembersManager.php');


function adminHome()
{
    require('view/backend/adminView.php');
}

function createPost()
{
	require('view/backend/createPostView.php');
}