<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'Notes');

    $title = $_POST['title'];
    $prev = $_POST['prev'];
    $note = $_POST['note'];
    
    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);


    $s = "update $first$last set title='$title',note='$note' where title='$prev'";
    $res = mysqli_query($con,$s);
    
    header('location:noteblock.php');
    
?>