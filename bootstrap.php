<?php
require "function.php";
require "database/queryBuilder.php";
require "database/connection.php";
require 'config.php';

$query = new QueryBuiler( DB_Connection::make($config['database']) );