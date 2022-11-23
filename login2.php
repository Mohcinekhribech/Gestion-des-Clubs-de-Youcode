<?php 
include 'connect.php';
session_start();
if(isset($_POST["test"])){
    $username = $_POST["username"];
    $psw = $_POST["password"];
    $sql = "select * from adminc where Fullname='$username' and password='$psw' limit 1";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($username===$row['Fullname'] && $psw===$row['password']){
        $_SESSION['user']=$row['Fullname'];
        header("location: index.php");
    }else{
        header("location: login.php");
    }
}


?>