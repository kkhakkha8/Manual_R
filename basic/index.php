<?php 
require 'function.php';


$greeting = "hello world greeting";

$names = [
    "hlaing min than",
    "Aung Aung",
    "Mg Mg"
];

$aungaung = [
    "name"=>'aungaung',
    "age"=>22,
    "hair"=>"black"
    ];

    $tasks = [
        'title'=>'finished homework',
        'due'=>'today',
        'complete'=>false
    ];

    $personBio = [
        "name"=>"kyawkyaw",
        "age"=>22,
        "isMarried"=>false,  
    ];
require "view/index.view.php";


