<?php 
include 'connect.php';
if(isset($_GET['Clubid'])){
    $id = $_GET['Clubid'];
    $sql = "delete from clubs where ClubId = $id";
    $result = mysqli_query($conn,$sql);
        header('location:page2.php');
    
}
?>