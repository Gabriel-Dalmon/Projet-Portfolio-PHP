<?php
    require_once("../../config/config.php");

$sql = "DELETE FROM users WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../../templates/html/pages/adminpage.php');

?>