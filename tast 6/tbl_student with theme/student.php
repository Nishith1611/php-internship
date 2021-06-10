<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

$connection=mysqli_connect($host,$username,$passwd,$dbname);
$q= mysqli_query($connection,
        "insert into tbl_student(stu_id,stu_name,stu_gender,stu_email,stu_mobile,"
        . "stu_address,stu_password,stu_dob,stu_area,stu_pincode) values('951212',"
        . "'ABCD','male','AVB@GMAIL.COM','999999')")
        or die("error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('record added');</script>";
}
