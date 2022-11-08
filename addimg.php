<?php

    if(isset($_POST['submit']) && isset($_FILES['my_img'])){
        session_start();

        $con = mysqli_connect('localhost','root','');
    
        mysqli_select_db($con,'noteimg');

        $title = $_POST['title'];
        $img_name = $_FILES['my_img']['name'];
        $img_size = $_FILES['my_img']['size'];
        $img_dict = $_FILES['my_img']['tmp_name'];
        $error = $_FILES['my_img']['error'];
        
        
    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);


        if($error === 0){
                $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_ex = array("jpg","jpeg","png");

                if(in_array($img_ex_lc,$allowed_ex)){
                    $img_up_path = 'upload/'.$img_name;
                    move_uploaded_file($img_dict,$img_up_path);

                    $reg = "insert into $first$last(title,img) values('$title','$img_name')";
                    mysqli_query($con,$reg);

                    $em = "Uploaded";
                    header("location:noteimg.php?error=$em");
                    
                }
                else{
                    $em = "file type not allowed";
            header("location:noteimg.php?error=$em");
                }
        }
        else{
            $em = "unknown error occured";
            header("location:noteimg.php?error=$em");
        }

    }
    else{
        header("location:noteimg.php");

    }

?>