<?php
    require_once("../../config/config.php");

$sql = "UPDATE experiences 
        SET title = :title, content = :content, start_date = :start_date, end_date = :end_date
        WHERE id=:id";
$dataBinded=array(
    ':title' => $_POST['title'],
    ':content' => $_POST['content'],
    ':start_date' => $_POST['start_date'],
    ':end_date' => $_POST['end_date'],
    ':id'   => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../../templates/html/pages/profile_editor.php');

?>