<?php
    include 'connect.php';




    if(isset($_FILES['Clubpic'])&&isset($_POST["Clubname"])){

        $Clubname = $_POST["Clubname"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        $picname=$_FILES['Clubpic']['name'];
        $picsize=$_FILES['Clubpic']['size'];
        $pictmpname=$_FILES['Clubpic']['tmp_name'];
    
        if($_FILES['Clubpic']['error']===0){
    
            if($_FILES['Clubpic']['size']>100000000){
                $em = "sorry your file is too large";
                header("Location: page2.php?error=$em");
            }else{
                $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs=array("jpg","jpeg","png");
    
                if(in_array($img_ex_lc,$allowed_exs)){
    
                    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path='uploads/'.$new_img_name;
                    move_uploaded_file($pictmpname,$img_upload_path);                    
                    $sql = "INSERT INTO clubs(ClubName,Logo,descriptio,datec) VALUES ('$Clubname','$new_img_name','$description','$date')";                    
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        header('location:page2.php');
                    }else{
                        die($conn);
                    }
                    header("Location: page2.php");
                }else{
    
                    $em="unknown error occured";
                    header("Location: page2.php?error=$em");
                }
            }
        }else{
            header("Location: page2.php");
        }
    }else{
    
        echo "probbbbbbbbbbbbb";
    
    }


?>