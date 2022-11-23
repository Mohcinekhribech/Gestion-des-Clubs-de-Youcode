<?php 
include './connect.php';
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
<body style="height: 100%;">
    <header>
    <div class="login">
        <center>
            <img src="./img/yclogo (1) 1.png" style="width: 80px;" alt="">
            <p class="plogin">
            Log in
            </p>
            <form action="login2.php" method="post">
                <input type="text" name="username" id="username" placeholder="username"><br>
                <p style="color: red;" id="username-err">username invalid !</p>
                <input type="password" name="password" id="password" placeholder="password"><br>
                <input type="submit" name="test" value="Log in" class="save" id="btnlog">
            </form>
              
        </center>
        
    </div>
</body>
</html>
<script src="./menu.js"></script>
<script src="./userEtEmailvalidation.js"></script>