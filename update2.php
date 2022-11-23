
 <?php 
include 'connect.php';
$id = $_GET['updateid'];

if(isset($_POST['submit'])){
    $role = $_POST["role"];
    $username = $_POST["user"];
    $ndgrp = $_POST["ndgrp"];
    $class = $_POST["class"];
    $age = $_POST["age"];
    $sql = "UPDATE apprenant
SET userId = $id , Fullname = '$username', class = '$class', age = $age ,role = '$role',jClub = '$ndgrp'
where userId = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:page3.php');
}else{
    die(mysqli_query($conn));
}
}

?>