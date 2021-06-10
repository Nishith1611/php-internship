<?php
// PHP program to demonstrate the use of rsort() function
 
$array = array(3, 4, 2, 1);
 
// sorting function used
rsort($array);
 
//prints the sorted array
print_r($array);
?>



<?php
// PHP program to demonstrate the use of rsort() function
// sorts the string case-insensitively
$array = array("geeks", "Raj", "striver", "coding", "RAj");
 
// sorting function used, sorts the
// string case-insensitively
rsort($array, SORT_STRING | SORT_FLAG_CASE);
 
// prints the sorted array
print_r($array);
?>