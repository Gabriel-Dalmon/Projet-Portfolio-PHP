<?php require_once("../../config/config.php");
require_once("actions.php");


if(!empty($_GET['type'])) {
    try {
        $_GET['type']($_POST);
    }
    catch (Exception $e) {
        $_SESSION['error'] = "Couldn't call action.";
    }
    header("Location: ".$_GET['path']);

} ?>

