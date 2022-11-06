<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'Notes');

    $title = $_POST['title'];
    $note = $_POST['note'];
    
    $first = implode($_SESSION['first']);
     $last = implode($_SESSION['last']);


    $s = "select * from $first$last where title='$title' && note='$note'";
    $res = mysqli_query($con,$s);
    $num = mysqli_num_rows($res);
    
    if($num == 1){
        header('location:noteblock.php');
    }
    else{
            $reg = "insert into $first$last(title,note) values('$title','$note')";
            mysqli_query($con,$reg);        
            header('location:noteblock.php');
        }

?>