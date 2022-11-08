<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'manager');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "select * from registration where email='$email' && password='$password'";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    $f_q = "select first from registration where email='$email' && password='$password'";
    $l_q = "select last from registration where email='$email' && password='$password'";
    $e_q = "select email from registration where email='$email' && password='$password'";
    $i_q = "select id from registration where email='$email' && password='$password'";

    $rf = mysqli_query($con,$f_q);
    $rl = mysqli_query($con,$l_q);
    $re = mysqli_query($con,$e_q);
    $ri = mysqli_query($con,$i_q);
    
    $first = mysqli_fetch_assoc($rf);
    $last = mysqli_fetch_assoc($rl);
    $em = mysqli_fetch_assoc($re);
    $id = mysqli_fetch_assoc($ri);

    if($num == 1){
        $_SESSION['id']=$id;
        $_SESSION['first']=$first;
        $_SESSION['last']=$last;
        $_SESSION['email']=$em;
        header('location:manager.php');      
    }
    else{
        header('location:login.php');      
    }

?>