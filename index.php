<?php 
require "bootstrap.php";

//$pdo = DB_Connection::make();


$tasksTableDatas = $query->fetchFromTable('tasks');

// $userTableDatas = $query->fetchFromTable('users');
// dd($userTableDatas);

require "view/index.view.php";


