<?php

    if(isset($_POST['updatesubmit'])){
        session_start();

        $con = mysqli_connect('localhost','root','');
    
        mysqli_select_db($con,'manager');

        $i = $_POST['id'];
        $id = (int)$i;
        $name_f = $_POST['first'];
        $name_l = $_POST['last'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $img_name = $_FILES['profile_img']['name'];
        $img_dict = $_FILES['profile_img']['tmp_name'];
        $error = $_FILES['profile_img']['error'];
        

    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);

        if($error === 0){
                $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_ex = array("jpg","jpeg","png");
                if(in_array($img_ex_lc,$allowed_ex)){
                    $img_up_path = 'profile/'.$img_name;
                    move_uploaded_file($img_dict,$img_up_path);

                    $reg = "update registration set primg='$img_name',first='$name_f',last='$name_l',email='$email',password='$pass' where id=$id";

                    mysqli_query($con,$reg);

                    $em = "Updated";
                    header("location:login.php?error=$em");
                    
                }
                else{
                    $em = "file type not allowed";
            header("location:login.php?error=$em");
                }
        }
        else{
            $em = "unknown error occured";
            header("location:login.php?error=$em");
        }

    

}
    else{
        header("location:manageAcc.php");

    }

?>