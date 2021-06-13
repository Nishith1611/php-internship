<?php

//DB connection
$connection = mysqli_connect ("localhost","root","","db_intenship1") ;
//Query
$q = mysqli_query($connection,"select * from tbl_ tbl_student_user") or dia(mysqli_error(connection));
//Below function will fetch data as Numerical Array
$row = mysqli_fatch_row($q);
//Debug
print_r ($row);
echo $row[0]. $row[1]. $row[2]. $row[3];


