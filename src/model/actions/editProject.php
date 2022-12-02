<?php


function add_image($image){
    $dataBinded=array(
        ':project_id'   => $image['id'],
        ':image_type'   => $image['image_type'],
        ':link'   => $image['link'],
        ':legend'   => $image['legend'],
    );
    $query = "INSERT INTO images(project_id, image_type, link, legend) 
              VALUES(:project_id,:image_type,:link,:legend)";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}

function upload_file($image){
    $destination = "templates/img/projects/".strval(rand(10,10000)).$image['name']; 
    move_uploaded_file($image['tmp_name'],$destination);
    return $destination;
}

function add_project($project){
    
    $dataBinded=array(
        ':title'   => $project['title'],
        ':intro'   => $project['intro'],
        ':description'   => $project['description'],
        ':skills'   => $project['skills']
    );
    $query = "INSERT INTO projects(title, intro, description, skills) VALUES(:title,:intro,:description,:skills)";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);

    $dataBinded=array(
        ':project_id'   => $GLOBALS['pdo']->lastInsertId(),
        ':image_type'   => 0,
        ':link'   => upload_file($_FILES['carouselBg']),
        ':legend'   => $project['carLeg'],
        ':image_type1'   => 1,
        ':link1'   => upload_file($_FILES['parallaxBg']),
        ':legend1'   => $project['parLeg']
    );
    $query = "INSERT INTO images(project_id, image_type, link, legend) 
              VALUES(:project_id,:image_type,:link,:legend),(:project_id,:image_type1,:link1,:legend1)";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);

}

function del_project($project){
    $dataBinded=array(
        ':id'   => $project['id']
    );
    $sql = "DELETE FROM projects WHERE id=:project_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    
    $sql = "DELETE FROM images WHERE id=:project_id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);

}

?>