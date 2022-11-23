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
        <link rel="stylesheet" href="./style.css?<?php time() ?>">
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
    </header>

    <div class="jgrp" id="fajm">
        <div class="rigth" style="border-radius:10px; height: max-content;">
            <form action="./addtodb.php" method="post" class="fjoindre">
                <h4 style="text-align: center; margin-left:-50px; margin-top: 20px;">Ajouter</h4><i class="fa-solid fa-x" id="fa-x" style="position: relative; width:max-content; margin-left:90%; margin-top:-40px;"></i>
                <input type="text" name="user" id="user" placeholder="username" style="margin-bottom 10px;" required>
                <select name="ndgrp" id="" required>
                    <option value="" >Group</option>
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
                <input type="text" name="class" id="class" placeholder="class" required>
                <input type="text" name="age" id="age" placeholder="Age" required>
                <input type="submit" value="Envoyer" class="save" style="margin-bottom: 30px;">
            </form>
            
        </div>
        </div>
    <div class="membre">
        <h2>Gerer les Membres</h2>
        <button class="button">
            <a class="btn btn-primary" id="ajm" >+ Ajouter un membre</a>
        </button>
        <table class="tableau-style">
                <thead>
                    <tr>
                        <th>username</th>
                        <th>Club</th>
                        <th>Class</th>
                        <th>Role</th>
                        <th>Age</th>
                        <th>operation</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php 
                          $sql="Select * from `apprenant`";
                          $result=mysqli_query($conn, $sql);
                          if($result){
                            while($row=mysqli_fetch_assoc($result)){
                              $id=$row['userId'];
                              $role=$row['role'];
                              $name=$row['Fullname'];
                              $club=$row['jClub'];
                              $class=$row['class'];
                              $age=$row['age'];
                              echo '<tr>
    
                              <td>'.$name.'</td>
                              <td>'.$club.'</td>
                              <td>'.$class.'</td>
                              <td>'.$role.'</td>
                              <td>'.$age.'</td>
                              <td>
                            <button class="botton-modifier"><a href="updateapp.php?updateid='.$id.'">modifier</a></button>
                            <button class="botton-suprimer" ><a href="delete.php?deleteid='.$id.'">suprimer</a></button>
                            </td>';
                            } 
                          }
                        ?>
                </tbody>
    </table>
    </div>

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
<script src="./membre.js"></script>