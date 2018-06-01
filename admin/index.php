<?php
session_start();
require('controller/backend.php');

try {

}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/backend/errorView.php');
}
