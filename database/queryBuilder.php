<?php 

class QueryBuiler{
    protected $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    function fetchFromTable($table) {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $returnData = $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
