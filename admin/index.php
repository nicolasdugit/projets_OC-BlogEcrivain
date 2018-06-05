<?php
session_start();
require('controller/backend.php');

try {
    if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 1 ) {
        if ((isset($_GET['action']))) {

            if ($_GET['action'] == 'createPost') {
                createPost();
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
