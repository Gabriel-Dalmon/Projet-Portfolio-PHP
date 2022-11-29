<?php
    require_once("../../config/config.php");

    unset($_SESSION['user']);

    header('Location:../../templates/index.php');
?>