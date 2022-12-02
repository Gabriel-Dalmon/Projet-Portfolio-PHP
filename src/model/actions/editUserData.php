<?php
function update_user($user){
    $dataBinded=array(
        ':user_id'   => $user['id'],
        ':email'   => $user['email'],
        ':username'   => $user['username'],
        ':qualities'   => $user['qualities'],
        ':bio' => $user['bio']
    );
    $query = "UPDATE users SET email = :email, username = :username, bio = :bio, qualities = :qualities WHERE id=:user_id";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}


function add_skill($skill){
    $dataBinded=array(
        ':user_id'   => $skill['user_id'],
        ':name'   => $skill['name'],
        ':level'   => $skill['level'],
        ':type'   => $skill['type']
    );
    $query = "INSERT INTO skills(user_id, name, level, type) VALUES(:user_id,:name,:level,:type)";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}

function del_skill($skill){
    $dataBinded=array(
        ':user_id'   => $skill['user_id'],
        ':name'   => $skill['name']
    );
    $query = "DELETE FROM skills WHERE user_id=:user_id AND name=:name";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}

function add_experience($experience){
    $dataBinded=array(
        ':user_id'   => $experience['user_id'],
        ':title'   => $experience['title'],
        ':content'   => $experience['content'],
        ':start_date'   => $experience['start_date'],
        ':end_date'   => $experience['end_date']
    );
    $query = "INSERT INTO experiences(user_id, title, content, start_date, end_date) VALUES(:user_id,:title,:content,:start_date,:end_date)";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}

function del_experience($experience){
    $dataBinded=array(
        ':id'   => $experience['id']
    );
    $query = "DELETE FROM experiences WHERE id=:id";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}

function update_experience($experience){
    $dataBinded=array(
        ':id'   => $experience['id'],
        ':title'   => $experience['title'],
        ':content'   => $experience['content'],
        ':start_date'   => $experience['start_date'],
        ':end_date'   => $experience['end_date']
    );
    $query = "UPDATE experiences SET title = :title, content = :content, start_date = :start_date, end_date = :end_date WHERE id=:id";
    $pre = $GLOBALS['pdo']->prepare($query);
    $pre->execute($dataBinded);
}


// v Admin Actions v


function update_status($user){
    $dataBinded=array(
        ':id'   => $user['id'],
        ':status' => $user['account_status']
    );
    $sql = "UPDATE users SET account_status = :status WHERE id=:id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
}

function del_user($user){
    $dataBinded=array(
        ':id'   => $user['id']
    );
    $sql = "DELETE FROM users WHERE id=:id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);

    $sql = "DELETE FROM skills WHERE user_id=:id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);

    $sql = "DELETE FROM experiences WHERE user_id=:id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
    
    $sql = "DELETE FROM socials WHERE user_id=:id";
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
}
?>

