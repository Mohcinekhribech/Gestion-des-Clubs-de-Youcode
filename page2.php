<?php 
include './connect.php';
session_start();
if(!$_SESSION['user']){
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css?<?php time()?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/da9e6ce9d6.js" crossorigin="anonymous"></script>
        <title>YC Club</title>
    </head>
<body >
    <header>
    <?php 
          include 'nav.php'
        ?>

        <div class="h2h">
            <img src="./img/CLUBS 1-PhotoRoom.png" alt="Club" class="clubbg">
        </div>
    </header>
    <main class="m2">
        <div id="addc">
            <i class="fa-solid fa-circle-plus"></i>
        </div>
        <?php 
         $sql="Select * from `clubs`";
         $result=mysqli_query($conn, $sql);
         if($result){
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="clubg">
                <img src="uploads/<?=$row['Logo']?>" alt="art Club" class="p2img">
                <h4><?=$row['ClubName']?></h4>
                <p class="info">
                <?=$row['descriptio']?>
                </p>
                <div class="fgrp">
                
                <a href="./deleteClub.php?Clubid=<?=$row['ClubId']?>">
                    <div class="ed">
                    <i class="fa-solid fa-trash"></i>
                    </div>
                </a>
                
                <a class="ed"href="./updateClub.php?Clubid=<?=$row['ClubId']?>">
                  <div >
                   <i class="fa-solid fa-pen-to-square"></i> 
                  </div>
                </a>
                
            </div>  
        </div>
        <?php
            }
         }
        
        ?>
        
<center>
    <div class="mmm">
        <div class="addclub" id="addnc">

        <center>
        <img src="./img/yclogo (1) 1.png" style="width: 80px;" alt=""><i class="fa-solid fa-x" id="fa-x"></i><br>
        <form action="Clubtodb.php" method="post" enctype="multipart/form-data">
            <span style="color: white;" >choisir un logo :</span>
            <input type="file" name="Clubpic" style="width: 100px;" required/><br>
            <input type="text" name="Clubname" id="" placeholder="le Nom de Club" class="addcn" required><br>
            <input type="datetime-local" name="date" required>
            <textarea name="description" id="" cols="30" rows="10"class="desn" placeholder="Club description" required></textarea><br>
            <input type="submit" value="Save" class="save" id="snc">
        </form>
        
        </center>
    </div>
    </div>
    
</center>
    </main>
    <footer>
        <img src="./img/yclogo (1) 1.png" alt="Logo" class="logo">
        <p class="pfooter">
            ©copyright. designed and developed by Mohcine Khribech
        </p>
        <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        
    </footer>
</body>
</html>
<script src="./club.js"></script>
<script src="./menu.js"></script>