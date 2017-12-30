<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$first_name = 'jack';
$password = 123;
$user = $con -> prepare("select * from users where first_name=? AND password=?");
$usersExecution = $user -> execute([
	                                   $first_name,
	                                   $password]);
if($usersExecution)
{
	$user = $user -> fetchAll(PDO::FETCH_OBJ);
	var_dump($user);
}