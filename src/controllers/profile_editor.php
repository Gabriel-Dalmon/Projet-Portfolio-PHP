<?php

require("/src/model/queries/getUserData.php");
$user = getAllData($_SESSION['user']['id']);
require("/templates/patterns/profile_editor.php");


?>