<?php

require("/src/model/queries/getUserData.php");
require("/src/model/queries/getProjectData.php");
$users = getAllUsers();
$projects = getAllProjects();
require("/templates/patterns/adminpage.php");

?>