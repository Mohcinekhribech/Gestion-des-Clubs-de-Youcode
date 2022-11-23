<?php 
include 'login2.php';
if(isset($_SESSION['user'])){
?>
<nav>
    <i class="fa-solid fa-bars" id="fbi"></i>
    <img class="logo" src="./img/yclogo (1) 1.png" alt="Logo">
    <ul id="ul">
            <i class="fa-solid fa-x" id="fxi"></i>
            <li><a href="./index.php">Accueil</a></li>
            <li id="space"><a href="./page2.php">gérer les clubs</a></li>
            <li><a href="./page3.php">gérer les membres</a></li>
    </ul>
    <p id="login"><a href="./logout.php" style="text-decoration: none; color:white; "><i class="fa-solid fa-right-from-bracket"></i></a></p>
</nav>
<?php 
}else{
?>
<nav>
    <i class="fa-solid fa-bars" id="fbi"></i>
    <img class="logo" src="./img/yclogo (1) 1.png" alt="Logo">
    <p id="login"><a href="./login.php" style="text-decoration: none; color:white;">Log in</a></p>
</nav>
<?php
}
?>