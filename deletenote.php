<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'Notes');

    $title = $_POST['title'];
    
    $first = implode($_SESSION['first']);
    $last = implode($_SESSION['last']);

    
    $reg = "delete from $first$last where title='$title'";
    mysqli_query($con,$reg);    
    
    header('location:noteblock.php');

?>