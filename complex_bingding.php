<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$first_name = $_GET['first_name'];
$user = $con -> prepare("
						SELECT * FROM users 
						WHERE first_name LIKE :first_name
						");
$user -> bindValue(':first_name', "%$first_name%");
$user -> execute();
$user = $user -> fetchAll(PDO::FETCH_OBJ);
var_dump($user);
