<?php

$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db;port=3306;','root','Perfect@2017');

$drivers = PDO::getAvailableDrivers();

var_dump($drivers);