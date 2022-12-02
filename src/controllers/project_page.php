<?php

require("/src/model/queries/getProjectData.php");
$project = getProjectData($_GET['project_id']);

$carBg = getSingleImage($_GET['project_id'], 0);
$parBg = getSingleImage($_GET['project_id'], 1);
require("/templates/patterns/projectpage.php");

?>