<?php 
    session_start();
    $db_hostname="localhost";
    $db_username="root";
    $db_password="Rashmi@1543331";
    $db_name="tours_and_travel";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    //mysqli_select_db($conn,"tours_and_travel");
    if(!$conn){
        echo "Connection could not happen: ".mysqli_connect_error();
        exit;
    }

    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['save'];

    $sql="select * from login where email='$email' and password='$password'";

    $result=mysqli_query($conn,$sql);

    if(!$result){
        echo "Error: " .mysqli_error($conn);
        exit;
    }

    while($row=mysqli_fetch_assoc($result)){
        if($row){
            echo "hello " . $row['name'] ."<br>";
            // setcookie("id",$row['id'], time()+3600);
            // setcookie("email",$row['email'],time()+3600);
            $_SESSION['id']=$row['id'];
            $_SESSION['email']=$row['email'];
        }
        else
            echo "login failure<br>";
         ?>
         <a href="dashboard.php">click me</a>
         <?php 
        
    }

    mysqli_close($conn);
    
    
?>