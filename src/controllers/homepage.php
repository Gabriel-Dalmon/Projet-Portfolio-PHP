<?php

require("/src/model/queries/getUserData.php");
$users = array(getAllData(5),getAllData(8));

require("/templates/patterns/homepage.php");

?>