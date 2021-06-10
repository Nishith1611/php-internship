<?php

//Numerical array


//Method 1 
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "c";
$a[4] = "4";


//Method 2//  Index Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "c";
$a[] = "4";


//Mothed 3
//Always use this method to create an array
$a = array(10,20,30,"c","c++,10.50");
//Print Array Valur
echo $a [3];
//Print Whole Array
for($i=0;$i< count($a); $i++){
    echo "<br/>". $a[$i] ;
}
$sum = arry_sum($a);
echo $sum;
foreach ($a as $key => $value) {
    echo "<br>Valur is $value";
}

foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and value is <b>$value</b>";
    
}




//3 Inbuilt Function toDebug an Array
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";




