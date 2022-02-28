<?php
require "database/queryBuilder.php";
require "database/connection.php";
require 'config.php';

// PDO php data object

// dbConnection

$pdo = DB_Connection::make($config['database']);

// fetch Task

$fetchData = (new QueryBuiler($pdo))->fetchFromTable('tasks');

// echo "<pre>";
// var_dump($returnData);

foreach($fetchData as $data) {
    echo "$data->description<br>";
}

