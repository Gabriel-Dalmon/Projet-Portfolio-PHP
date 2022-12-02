<?php 



$sql = "SELECT id, username, profile_picture, bio, qualities FROM users WHERE id IN (5,8)";
$pre = $pdo->prepare($sql);
$pre->execute();
$users = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as &$user) {
    $dataBinded=array(
        ':id'   => $user['id']
    );
    $sql = "SELECT title, content, start_date, end_date FROM experiences WHERE user_id = :id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user['experiences'] = $pre->fetchAll(PDO::FETCH_ASSOC);


    $sql = "SELECT type, name, level FROM skills WHERE user_id = :id ORDER BY type";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user['skills'] = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT social_name, link FROM socials WHERE user_id = :id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user['socials'] = $pre->fetchAll(PDO::FETCH_ASSOC);
}

?>