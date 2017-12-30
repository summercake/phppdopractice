<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$update = $con -> query("
						UPDATE users SET first_name='Jane'
						WHERE id = 4
						");
$user_id = $con -> lastInsertId();
echo $update ->rowCount();



