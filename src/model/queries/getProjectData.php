<?php 
//images types : 0=carousel background, 1=parralax background, 2=project_asset

function getProjectData($project_id){
    $dataBinded = array(
        ':project_id' => $project_id
    );

    $sql = "SELECT * FROM projects WHERE id=:project_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $project = $pre->fetch(PDO::FETCH_ASSOC);

    return $project;
}

function getSingleImage($project_id, $image_type){
    $dataBinded = array(
        ':project_id' => $project_id,
        'image_type' => $image_type
    );

    $sql = "SELECT * FROM images WHERE project_id=:project_id AND image_type = :image_type";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $image = $pre->fetch(PDO::FETCH_ASSOC);

    return $image;
}

function getMultImages($project_id, $image_type){
    $dataBinded = array(
        ':project_id' => $project_id,
        'image_type' => $image_type
    );

    $sql = "SELECT * FROM images WHERE project_id=:project_id AND image_type = :image_type";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    $image = $pre->fetch(PDO::FETCH_ASSOC);

    return $image;
}

function getAllProjects(){
    $sql = "SELECT * FROM projects";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute();
    $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $projects;
}


function getThreeProjects(){
    $sql = "SELECT * FROM projects LIMIT 3";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute();
    $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

    return $projects;
}
?>