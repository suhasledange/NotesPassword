<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'Passwords');

    $title = $_POST['title'];
    $pass = $_POST['pass'];
    
    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);


    $s = "select * from $first$last where title='$title' && pass='$pass'";
    $res = mysqli_query($con,$s);
    $num = mysqli_num_rows($res);
    
    if($num == 1){
        header('location:passblock.php');
    }
    else{
            $reg = "insert into $first$last(title,pass) values('$title','$pass')";
            mysqli_query($con,$reg);        
            header('location:passblock.php');
        }
?>