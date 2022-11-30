<?php 

require_once("../../../config/config.php");

$sql = "SELECT id, email, username, account_status FROM users";

$pre = $pdo->prepare($sql);
$pre->execute();
$users = $pre->fetchAll(PDO::FETCH_ASSOC);

?>