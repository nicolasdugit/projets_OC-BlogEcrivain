<?php
session_start();
require('controller/backend.php');

try {
	if ((isset($_GET['action']))) {
		if ($_GET['action'] == 'connection') {
			adminIndex();
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
