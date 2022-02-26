<?php

$personBio = [
    "name"=>"kyawkyaw",
    "age"=>22,
    "isMarried"=>false,  
];

if ($personBio['isMarried']) {
    echo "He is married ";
} elseif($personBio['isMale']) {
    echo "He is Male";
} else {
        echo "He is unknown";
}

// He is married