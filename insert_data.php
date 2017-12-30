<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;', 'root', 'Perfect@2017');
$first_name = "Jose";
$id = 1;
$user = $con -> prepare("
						INSERT INTO users(first_name,username,email,active,password)
						VALUES (:first, :uname,:email,:active, :pass)
						");
$user -> execute([
	                 'first'  => 'jose',
	                 'uname'  => 'jose01',
	                 'email'  => 'jose@email.com',
	                 'active' => 1,
	                 'pass'   => '1234',
                 ]);


