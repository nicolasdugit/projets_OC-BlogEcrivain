<?php
session_start();
require('controller/backend.php');

try {
    if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 1 ) {
        if ((isset($_GET['action']))) {

            if ($_GET['action'] == 'connection') {
                if ($_POST['pseudo'] && $_POST['pass']) {
                    connection(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['pass']));
                }
                else {
                    throw new Exception('Probleme identification');
                }
            }
            else 
            {
                throw new Exception('Probleme identification');
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
