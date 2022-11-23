<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from apprenant where userId = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:page3.php');
    }else{
        die(mysqli_query($conn));
    }
}
?>