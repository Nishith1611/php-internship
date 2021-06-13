<?php
  
// PHP code to illustrate the working
// of array_count_values() function
function Counting($array){
    return(array_count_values($array));
}
  
// Driver Code
$array = array("Geeks", "for", "Geeks", "Geeks", "Welcome", "for");
print_r(Counting($array));
  
?>