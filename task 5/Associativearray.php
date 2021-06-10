<?php
//Associative Array
//Key = Value
//Method 1
$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = " Web Developer";
$a[10] = "ten";
$a[50] = 50.50;



//Method 2
//Alway use this method to crate the Array

$a = array (
    0 => 10,
    "c" => " Computer",
    "php" => " Web Develpment",
    10 => " Ten",
    50 => 50.50
);


//Print Value
echo "c for ".$a['c'];


foreach ($a as $key => $value) {
    echo "<br>Valur is $value";
}

foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and value is <b>$value</b>";
    
}







