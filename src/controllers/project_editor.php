<?php

require("/src/model/queries/getUserData.php");
$project = getProjectData($_POST['project_id']);

require("/templates/patterns/project_editor.php");

?>