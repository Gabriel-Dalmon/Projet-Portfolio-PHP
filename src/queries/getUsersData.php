<?php 

require_once("../../../config/config.php");
$ids = [1,3]; 
$sql = "SELECT id, username, profile_picture, bio, qualities FROM users WHERE id in :ids";
$dataBinded=array(
    ':ids'   => $ids
);
$pre = $pdo->prepare($sql);
$pre->execute();
$users = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    
}

?>