<?php
$aungaung = [
    "name"=>'aungaung',
    "age"=>22,
    "hair"=>"black"
    ];
//echo $aungaung; // error

echo '<pre>';
var_dump($aungaung);

die(var_dump($aungaung));

foreach($aungaung as $key=>$value) {
    echo $key .'-'.$value;
}