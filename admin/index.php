<?php
session_start();
require('controller/backend.php');

try {
    if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 1 ) {
        if ((isset($_GET['action']))) {

            if ($_GET['action'] == 'createPost') {
                createPost();
            }
            elseif ($_GET['action'] == 'publishPost') {
                
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    newPost(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']));
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
                
            }
            elseif ($_GET['action'] == 'listPost') {
                listPosts();
            }
            elseif ($_GET['action'] == 'modifPost') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    modifPost($_GET['id']);
                }
                else
                {
                    throw new Exception('Article non trouvé');
                }
            }
            elseif ($_GET['action'] == 'updatePost') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['newTitle']) && !empty($_POST['newContent'])) {
                        updatePost(htmlspecialchars($_POST['newTitle']), htmlspecialchars($_POST['newContent']), $_GET['id']);
                    }
                    else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                }
                else
                {
                    throw new Exception('Article non trouvé');
                }
            }
        }
        
        else {
            adminHome();
        }
    }
    else 
    {
        throw new Exception('Page reservée à l\'administrateur');
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/backend/errorView.php');
}
