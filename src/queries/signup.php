<?php
    require_once("../../config/config.php");

$sql = "SELECT email FROM users WHERE email=:email";
$dataBinded=array(
    ':email'   => $_POST['email']
);
$pre = $GLOBALS['pdo']->prepare($sql);
$pre->execute($dataBinded);
$email = $pre->fetch(PDO::FETCH_ASSOC);

if(empty($email)){
    $sql = "INSERT INTO users(email,username,password) VALUES(:email,:username,:password)";
    $dataBinded=array(
        ':email'   => $_POST['email'],
        ':username' => $_POST['username'],
        ':password'=> SHA1("uhwnsdfgbqoiudzgyh<zf4sqg0fe4zs5".$_POST['password'])
    );
    $pre = $GLOBALS['pdo']->prepare($sql);
    $pre->execute($dataBinded);
}
    //:email et :password sont bindés dans ma requêtes
    //mon tableau dataBinded réutilise ces clés bindées :email et :password
    //la donnée est liée au bind !
    //lorsqu'on execute la requête, on indique à quelles données correspondent chaque "bind"

header('Location:../../index.php');

?>