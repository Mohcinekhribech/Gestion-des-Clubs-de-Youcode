<?php
    include 'connect.php';

    $id = $_GET['updateid'];
    $sql = "select * from apprenant where userId = $id;";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $username = $row['Fullname'];
    $ndgrp = $row['jClub'];
    $class = $row['class'];
    $age = $row['age'];
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css?<?php time() ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/da9e6ce9d6.js" crossorigin="anonymous"></script>
        <title>YC Club</title>
    </head>
<body >
    <header>
        <nav>
            <i class="fa-solid fa-bars" id="fbi"></i>
            <img class="logo" src="./img/yclogo (1) 1.png" alt="Logo">
            <ul id="ul">
                <i class="fa-solid fa-x" id="fxi"></i>
                <li><a href="./index.html">Accueil</a></li>
                <li id="space"><a href="./page2.html">gérer les clubs</a></li>
                <li><a href="#">gérer les membres</a></li>
            </ul>
            <p id="login">Log in</p>
        </nav>
    </header>
    <main>
    <div class="rigth" id="mmmn" style="border-radius:10px; height: max-content;">
            <form action="./update2.php?updateid=<?php echo $id?>" method="post" class="fjoindre">
                <h4 style="text-align: center; margin-left:-50px; margin-top: 20px;">Modifier</h4>
                <input type="text" name="user" id="user" value="<?php echo $username ?>" placeholder="username" style="margin-bottom:10px;" required>
            
                <select name="ndgrp" id="" required>
                    <option value="<?php echo $ndgrp ?>" ><?php echo $ndgrp ?></option>
                    <?php
                       $sql="Select ClubName from `Clubs`";
                       $result=mysqli_query($conn, $sql);
                       if($result){
                         while($row=mysqli_fetch_assoc($result)){
                           echo '<option value="'.$row['ClubName'].'">'.$row['ClubName'].'</option>';
                        }
                    }
                    ?>
                </select>
                <select name="role" required>
                    <option value="Président">Président</option>
                    <option value="secrétaire">secrétaire</option>
                    <option value="trésorier">trésorier</option>
                    <option value="adjoints">adjoints</option>
                    <option value="Membre">Membre</option>
                </select>
                <input type="text" name="class" id="class" placeholder="class" value="<?php echo $class ?>" required>
                
                <input type="text" name="age" id="age" placeholder="Age" value="<?php echo $age ?>" required>
        
                <input type="submit" name="submit" value="Update" class="save" style="margin-bottom: 30px;" required>
            </form>
            
        </div>
            
        
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
<script src="./menu.js"></script>
<script src="./pppp.js"></script>