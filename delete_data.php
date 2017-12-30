<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$id = 1;
$user = $con -> prepare("
						DELETE FROM users WHERE id =:id
						");
$user -> execute([
	                 'id' => $id,
                 ]);


