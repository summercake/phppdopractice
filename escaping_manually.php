<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$first_name = $con -> quote($_GET['first_name']);
die($first_name);
$user = $con -> prepare("
						SELECT * FROM users 
						WHERE first_name = $first_name
						");
$user -> bindParam(':first_name', $first_name);
$user -> execute();
var_dump($user -> fetchAll(PDO::FETCH_OBJ));
