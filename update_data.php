<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$first_name = "Jose";
$id = 1;
$user = $con -> prepare("
						UPDATE users SET first_name = :first_name  
						WHERE id=:id
						");
$user -> execute([
	                 'first_name' => $first_name,
	                 'id'         => $id,
                 ]);


