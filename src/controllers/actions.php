<?php function disconnect() {
    unset($_SESSION['user']);
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
    $pre = $pdo->prepare($query);
    $pre->execute($dataBinded);
}

function del_experience($experience){
    $dataBinded=array(
        ':id'   => $experience['id']
    );
    $query = "DELETE FROM experiences WHERE id=:id";
    $pre = $pdo->prepare($query);
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
    $pre = $pdo->prepare($query);
    $pre->execute($dataBinded);
}

function get_experiences($user_id){
    $dataBinded=array(
        ':user_id'   => $user_id
    );
    $query = "SELECT id, title, content, start_date, end_date FROM experiences WHERE user_id = :user_id";
    $pre = $pdo->prepare($query);
    $pre->execute($dataBinded);
    $experiences = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $experiences;
}

?>

