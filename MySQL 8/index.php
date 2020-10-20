<?php

$connection = new PDO("mysql:dbname=hcode_cafe;host=localhost", "root", "root");

$statement = $connection->prepare('SELECT * FROM users;');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($results[1]);

$results_array = json_decode($results[1]['name'], true);

var_dump($results_array);