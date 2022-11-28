<?php
    require_once("../config/config.php");

$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$user = $pre->fetch(PDO::FETCH_ASSOC);

if(!empty($user)){
    $_SESSION['user'] = $user;
}

header('Location:../templates/index.php');

?>