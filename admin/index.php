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
                    newPost(($_POST['title']), ($_POST['content']));
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
                
            }
            elseif ($_GET['action'] == 'listPost') {
                listPosts();
            }
            elseif ($_GET['action'] == 'modifPost') {
                if (isset($_GET['post_id']) && $_GET['post_id'] > 0) {
                    modifPost($_GET['post_id']);
                }
                else
                {
                    throw new Exception('Article non trouvé');
                }
            }
            elseif ($_GET['action'] == 'updatePost') {
                if (isset($_GET['post_id']) && $_GET['post_id'] > 0) {
                    if (!empty($_POST['newTitle']) && !empty($_POST['newContent'])) {
                        updatePost(($_POST['newTitle']), ($_POST['newContent']), $_GET['post_id']);
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
            elseif ($_GET['action'] == 'deletePost') {
                if (isset($_GET['post_id']) && $_GET['post_id'] > 0) {
                    deletePost($_GET['post_id']);
                    // deleteCommentByPost($_GET['post_id']);
                }
                else 
                {
                    throw new Exception('Article non trouvé. Impossible de le supprimer');
                }
            }
            elseif ($_GET['action'] == 'deleteComment') {
                if (isset($_GET['com_id']) && $_GET['com_id'] > 0) {
                    deleteComment($_GET['com_id']);
                }
                else 
                {
                    throw new Exception('Article non trouvé. Impossible de le supprimer');
                }
            }
            elseif ($_GET['action'] == 'validateComment') {
                if (isset($_GET['com_id']) && $_GET['com_id'] > 0) {
                    validateComment($_GET['com_id']);
                }
                else 
                {
                    throw new Exception('Article non trouvé. Impossible de le valider');
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
