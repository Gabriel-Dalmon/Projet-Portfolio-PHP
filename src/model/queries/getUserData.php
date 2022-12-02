<?php
function skillsSpliter(){
    echo "ahl";
}

function getUserData($user_id){
    $dataBinded = array(
        ':user_id' => $user_id
    );

    $sql = "SELECT * FROM users WHERE id=:user_id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user = $pre->fetch(PDO::FETCH_ASSOC);

    return $user;
}

function getSkills($user_id){
    $dataBinded=array(
        ':user_id'   => $user['id']
    );

    $sql = "SELECT social_name, link FROM skills WHERE user_id = :user_id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $skills = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $skills;
}

function getExperiences($user_id){
    $dataBinded=array(
        ':user_id'   => $user['id']
    );

    $sql = "SELECT title, content, start_date, end_date FROM experiences WHERE user_id = :user_id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $experiences = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $experiences;
}

function getSocials($user_id){
    $dataBinded=array(
        ':user_id'   => $user['id']
    );

    $sql = "SELECT social_name, link FROM socials WHERE user_id = :user_id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $socials = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $socials;
}


function getAllData(){

    
    foreach ($users as &$user) {

    
        $sql = "SELECT type, name, level FROM skills WHERE user_id = :id ORDER BY type";
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $user['skills'] = $pre->fetchAll(PDO::FETCH_ASSOC);
    
        $sql = "SELECT social_name, link FROM socials WHERE user_id = :id";
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $user['socials'] = $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>