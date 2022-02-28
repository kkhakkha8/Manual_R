<?php
require "function.php";
// PDO php data object

// dbConnection

$pdo = dbConnection();

// fetch Task

$fetchData = fetchTask($pdo);

// echo "<pre>";
// var_dump($returnData);

foreach($fetchData as $data) {
    echo "$data->description<br>";
}

require "view/index.view.php";