<?php
require "database/queryBuilder.php";
require "database/connection.php";

// PDO php data object

// dbConnection

$pdo = DB_Connection::make();

// fetch Task

$fetchData = (new QueryBuiler($pdo))->fetchFromTable($pdo);

// echo "<pre>";
// var_dump($returnData);

foreach($fetchData as $data) {
    echo "$data->description<br>";
}

