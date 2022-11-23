<?php
    include 'connect.php';
    $username = $_POST["user"];
    $ndgrp = $_POST["ndgrp"];
    $class = $_POST["class"];
    $age = $_POST["age"];
    $role = $_POST["role"];
    $sql = "insert into apprenant (fullname,class,age,jClub,role) values ('$username','$class','$age','$ndgrp','$role')";
    $result=mysqli_query($conn, $sql);
    $sql="Select * from `apprenant`";
$result=mysqli_query($conn, $sql);
    header("location: page3.php")
?>


