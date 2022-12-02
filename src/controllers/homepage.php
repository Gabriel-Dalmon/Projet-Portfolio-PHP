<?php

require("/src/model/queries/getUserData.php");
require("/src/model/queries/getProjectData.php");
$users = array(getAllData(5),getAllData(10));
$projects = getThreeProjects();
require("/templates/patterns/homepage.php");

?>