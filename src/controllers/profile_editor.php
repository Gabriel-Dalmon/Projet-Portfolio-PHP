<?php
require("/src/model/queries/getUserData.php"); 
if(($_SESSION['user']['account_status'] == 2) AND (isset($_POST['user_id']))){
    $user = getAllData($_POST['user_id']);
} else {
    $user = getAllData($_SESSION['user']['id']);
}


require("/templates/patterns/profile_editor.php");


?>