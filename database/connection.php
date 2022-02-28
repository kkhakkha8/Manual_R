<?php


class DB_Connection {
    public static function make() {
        try{
            return $pdo = new PDO("mysql:host=localhost;dbname=manualroute","root","allforone");
            echo "success";
        }catch (Error $e) {
            echo $e->getMessage();
        };
    }
}