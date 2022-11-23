<?php 
include './connect.php';
include 'login2.php';

    include 'connect.php';

    $id = $_GET['Clubid'];
    $sql = "select * from clubs where ClubId = $id;";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $Clubname = $row['ClubName'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/da9e6ce9d6.js" crossorigin="anonymous"></script>
        <title>YC Club</title>
    </head>
<body>
    <header>
    <?php 
          include 'nav.php'
        ?>
    </header>
    <center>
    <div class="mmm" style="display:block;">
        <div style="display:block;" class="addclub" id="addnc">

        <center>
        <img src="./img/yclogo (1) 1.png" style="width: 80px;" alt=""><br>
        <form action="updateC.php?Clubid=<?=$_GET['Clubid']?>" method="post" enctype="multipart/form-data">
            <span style="color: white;" >choisir un logo :</span>
            <input type="file" name="Clubpic" style="width: 100px;"/><br>
            <input type="text" name="Clubname" placeholder="le Nom de Club" class="addcn"><br>
            <input type="datetime-local" name="date">
            <textarea name="description" id="" cols="30" rows="10"class="desn" placeholder="Club description"></textarea><br>
            <input type="submit" value="Save" class="save" id="snc">
        </form>
        
        </center>
    </div>
    </div>
    
</center>
</body>
