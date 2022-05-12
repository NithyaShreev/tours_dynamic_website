


<?php


//database

$con =mysqli_connect("localhost","root","Rashmi@1543331",);
mysqli_select_db($con,"tours_and_travel");
if(!$con )  
{  
  die('Could not connect: ' . mysqli_error());  
} 
else{
echo 'Connected successfully';
}

if(!empty($_POST['save']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$query);
if($result>0)
    {
        echo "you have successfully logged in .............................................";
    }
    else{
        echo "not logged in++++++++++++";
    }
}
?>



