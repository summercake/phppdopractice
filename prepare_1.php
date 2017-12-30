<?php

$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;','root','Perfect@2017');
$user = $con -> prepare("select * from users where first_name= :name");
$usersExecution = $user->execute([
    'name'=>$_GET['name'],
]);
if($usersExecution){
    $user = $user -> fetchAll(PDO::FETCH_OBJ);
    var_dump($user);
}