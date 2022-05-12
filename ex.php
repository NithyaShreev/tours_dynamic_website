<?php


//database

$con =mysqli_connect("localhost","root","Rashmi@1543331");

mysqli_select_db($con,"tours_and_travel");


$query="select first_name from login where id=1";
    $result=mysqli_query($con,$query);
 echo $result;

?>