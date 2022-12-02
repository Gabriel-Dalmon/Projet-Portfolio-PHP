<?php
    require_once("../../config/config.php");

$sql = "UPDATE users SET account_status = :status WHERE id=:id";
$dataBinded=array(
    ':status' => $_POST['account_status'],
    ':id'   => $_POST['id']
);
$pre = $GLOBALS['pdo']->prepare($sql);
$pre->execute($dataBinded);

header('Location:../../templates/html/pages/adminpage.php');

?>