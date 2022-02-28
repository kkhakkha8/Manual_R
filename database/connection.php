<?php


class DB_Connection {
    public static function make($database) {
        try{
            return $pdo = new PDO(
                "{$database['host']};dbname={$database['dbname']}",
                $database['username'],
                $database['password']
            );
            echo "success";
        }catch (Error $e) {
            echo $e->getMessage();
        };
    }
}