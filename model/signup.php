<?php
    require_once("../config/config.php");

$sql = "INSERT INTO users(email,username,password) VALUES(:email,:username,:password)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username' => $_POST['username'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//:email et :password sont bindés dans ma requêtes
//mon tableau dataBinded réutilise ces clés bindées :email et :password
//la donnée est liée au bind !
//lorsqu'on execute la requête, on indique à quelles données correspondent chaque "bind"

header('Location:../templates/index.php');

?>