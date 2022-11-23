
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
<body>
    <header class="header">
        <?php 
          include 'nav.php'
        ?>
        <div class="hd" class="div">
            <h1>Youcode <span id="cub">Clubs</span></h1>
        <p id="des">
            Le numérique et les nouvelles technologies sont partout autour de nous, mais leurs codes et leurs langages ne sont pas toujours naturels et innés pour tous.
            La fracture entre ceux qui parlent le « numérique » et le manipulent avec aisance et les autres est souvent très grande.
            C’est pourquoi YouCode veut mettre le code entre toutes les mains pour réduire les inégalités numériques et donner sa chance à tout un chacun</p>
        </div>
    </header>  
    <main>
        <?php 
         $sql="Select * from `clubs`";
         $result=mysqli_query($conn, $sql);
         $i=1;
         if($result){
            while($row=mysqli_fetch_assoc($result)){
                if($i%2!=0){
                ?>
        <div class="simple">
            <img src="./uploads/<?=$row['Logo']?>" alt="Robotique Club" class="aimg">
            <div id="<?=$row['ClubName']?>" class="div">
                <h3><?=$row['ClubName']?> Club</h3>
                <p id="pRobotique" class="p">
                    <?=$row['descriptio']?>
                </p>
                <button id="<?=$row['ClubName']?>" class="abtn"><a href="./joindre.html" style="text-decoration: none;">Joindre</a></button>
            </div>
        </div>
        <?php
                }else {
        ?>
        <div class="rev">
            <img src="./uploads/<?=$row['Logo']?>" alt="Sport Club" class="aimg">
            <div id="<?=$row['ClubName']?>" class="div">
                <h3><?=$row['ClubName']?> Club</h3>
                <p id="<?=$row['ClubName']?>" class="p">
                <?=$row['descriptio']?>
                </p>
                <button id="Sport" class="abtn"><a href="./joindre.html" style="text-decoration: none;">Joindre</a></button>
            </div>
        </div>
        <?php
                }
                $i++;
            }
         }
        
        ?>
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
<script src="./menu.js"></script>