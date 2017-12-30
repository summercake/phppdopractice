<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$con -> query("
						INSERT INTO users(first_name,username,email,active,password)
						VALUES ('Maria', 'Maria01','maria@email.com',1, '1234')
						");
$user_id = $con -> lastInsertId();
$con -> query("
	UPDATE users SET active=0 WHERE id =$user_id
");


