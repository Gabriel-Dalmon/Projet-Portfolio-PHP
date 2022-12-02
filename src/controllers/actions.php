<?php 
require_once("src/model/actions/editUserData.php");
require_once("src/model/actions/editSession.php");

if(!empty($_GET['type'])) {
    try {
        $_GET['type']($_POST);
    }
    catch (Exception $e) {
        $_SESSION['error'] = "Couldn't call action.";
    }
    header("Location: ".$_GET['path']);

} ?>

