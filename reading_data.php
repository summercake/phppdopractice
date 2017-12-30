<?php

$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;','root','Perfect@2017');

$drivers = PDO::getAvailableDrivers();

var_dump($drivers);

$user = $con->query("select * from users where id = 1");

$user = $user -> fetch(PDO::FETCH_ASSOC);

echo $user['username'];
echo "<br>";
echo $user['first_name'];