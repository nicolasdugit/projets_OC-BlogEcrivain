<?php
session_start();
require('controller/backend.php');

try {
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
        adminConnection();
	}
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/backend/errorView.php');
}
