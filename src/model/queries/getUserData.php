<?php

function skillsSplit($skills){ // splits by type (language, programmation language...)
    $languages = [];
    $infoSkills = [];
    foreach ($skills as $skill) {
        if($skill['type'] == 0){
            array_push($languages, $skill);
        }else{
            array_push($infoSkills, $skill);
        }
    }
    $skills = array(
        'languages' => $languages,
        'infoSkills' => $infoSkills
    );
    return $skills;
}

function getUserData($user_id){
    $dataBinded = array(
        ':user_id' => $user_id
    );

    $sql = "SELECT * FROM users WHERE id=:user_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $user = $pre->fetch(PDO::FETCH_ASSOC);

    return $user;
}

function getSkills($user_id){
    $dataBinded=array(
        ':user_id'   => $user_id
    );

    $sql = "SELECT name, level, type FROM skills WHERE user_id = :user_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $skills = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $skills;
}

function getExperiences($user_id){
    $dataBinded=array(
        ':user_id'   => $user_id
    );

    $sql = "SELECT id, title, content, start_date, end_date FROM experiences WHERE user_id = :user_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $experiences = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $experiences;
}

function getSocials($user_id){
    $dataBinded=array(
        ':user_id'   => $user_id
    );

    $sql = "SELECT social_name, link FROM socials WHERE user_id = :user_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $socials = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $socials;
}


function getAllData($user_id){
    $user = getUserData($user_id);
    $user['experiences'] = getExperiences($user_id);
    $user['socials'] = getSocials($user_id);
    $skills = getSkills($user_id);
    $user['skillsType'] = skillsSplit($skills);

    return $user;
}

?>