<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$first_name = 'jack';
$password = 123;
$user = $con -> prepare("
						select * from users 
						where first_name=:first_name 
						AND password=:password");
$user -> bindValue(':first_name', $first_name);
$user -> bindValue(':password', $password);
$user -> execute();
$user = $user -> fetchAll(PDO::FETCH_OBJ);
var_dump($user);
