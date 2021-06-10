<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "bd_intenship1";
//connection Function

$connection = mysqli_connect($host, $username, $passwd,dbname);

$q = mysqli_query ($connection,
        "insert into tbl_usre (usre_name,user_genter,user_mobil) values('nishith','123')") 
        or die("error. mysqli_error($connection)");

if($q)
{
    echo "<script>alert('record Added');</script>";
}