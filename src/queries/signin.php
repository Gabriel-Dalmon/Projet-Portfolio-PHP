<?php
    require_once("../../config/config.php");

$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> SHA1("uhwnsdfgbqoiudzgyh<zf4sqg0fe4zs5".$_POST['password'])
);
$pre = $GLOBALS['pdo']->prepare($sql);
$pre->execute($dataBinded);

$user = $pre->fetch(PDO::FETCH_ASSOC);

if(!empty($user)){
    $_SESSION['user'] = $user;
}

header('Location:../../index.php');
?>