<?php

function dd($value) {
    echo "<pre>";
    die(var_dump($value));
}

function dbConnection () {
    try{
        return $pdo = new PDO("mysql:host=localhost;dbname=manualroute","root","allforone");
        echo "success";
    }catch (Error $e) {
        echo $e->getMessage();
    };
}

function fetchTask($pdo) {
    $statement = $pdo->prepare("select * from tasks");
    $statement->execute();
    return $returnData = $statement->fetchAll(PDO::FETCH_OBJ);
}