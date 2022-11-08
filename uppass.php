<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'passwords');

    $title = $_POST['title'];
    $prev = $_POST['prev'];
    $note = $_POST['pass'];
    
    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);


    $s = "update $first$last set title='$title',pass='$note' where title='$prev'";
    $res = mysqli_query($con,$s);
    
    header('location:passblock.php');
    
?>