<?php 
require "bootstrap.php";

//$pdo = DB_Connection::make();


$tasksTableData = $query->fetchFromTable('tasks');



require "view/index.view.php";


