<?php

require("/src/model/queries/getUserData.php");
$users = getAllUsers();

require("/templates/patterns/adminpage.php");

?>