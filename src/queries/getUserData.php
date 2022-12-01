<?php 

require_once("../../../config/config.php"); 

$sql = "SELECT id, username, profile_picture, bio, qualities FROM users WHERE id=:id";
$dataBinded=array(
    ':id'   => $_SESSION['user']['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$users = $pre->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT id, title, content, start_date, end_date FROM experiences WHERE user_id = :id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user['experiences'] = $pre->fetchAll(PDO::FETCH_ASSOC);


?>